<?php

namespace JNews\Paywall\Gateways\Stripe;

use JNews\Paywall\Gateways\Stripe\Stripe_Api_Credentials;
use JNews\Paywall\Gateways\Stripe\Stripe_Api_Request;
use JNews\Paywall\Gateways\Stripe\Stripe_Helper;
use JPW_Stripe;
use WC_Customer;
use Exception;

/**
 * Class Stripe_Api
 *
 * @package JNews\Paywall\gateways\Stripe
 */
class Stripe_Api {
	/**
	 * @var static
	 * @var \WP_User $customer
	 */
	protected static
		$api_credentials,
		$order_id,
		$order_data,
		$order_key,
		$stripe_args,
		$product_response,
		$billing_response,
		$subscribe_response,
		$result,
		$customer,
		$customer_id,
		$source,
		$helper;

	/**
	 * @class Constructor
	 */
	public function __construct( $status, $credentials, $order_id = null, $source = null, $args = null ) {
		include_once dirname( __FILE__ ) . '/class-stripe-helper.php';
		self::$helper = new Stripe_Helper();

		if ( isset( $order_id ) ) {
			self::$order_id   	= $order_id;
			self::$order_data 	= wc_get_order( $order_id );
			self::$order_key  	= get_post_meta( $order_id, '_order_key', true );
		}
		self::$source          	= $source;
		self::$api_credentials 	= $credentials;

		switch ( $status ) {
			case 'create_payment':
				$this->set_stripe_args();
				$this->create_customer();
				$this->create_payment();
				break;
			case 'update_payment':
				$this->set_stripe_args();
				$this->create_customer();
				$this->update_payment();
				break;
			case 'create_subscription':
				$this->set_stripe_args();
				$this->create_customer();
				$this->create_product( self::$stripe_args['item'] );
				$this->create_price_recurring( self::$stripe_args['item'] );
				$this->create_subscription();
				break;
			case 'update_subscription':
				$this->set_stripe_args();
				$this->create_customer();
				$this->create_product( self::$stripe_args['item'] );
				$this->create_price_recurring( self::$stripe_args['item'] );
				$this->update_subscription();
				break;
			case 'check':
				$this->check_subscription();
				break;
			case 'cancel':
				$this->cancel_subscription();
				break;
			case 'update_intent':
				$this->update_intent( $args );
				break;
			case 'confirm_intent':
				$this->confirm_intent( $args );
				break;
			case 'check_charge':
				$this->check_charge( $args );
				break;
			case 'check_intent':
				$this->check_intent( $args );
				break;
			case 'check_source':
				$this->check_source( $args );
				break;
			case 'delete_source':
				$this->delete_source( $args );
				break;
			case 'default_source':
				$this->default_source( $args );
				break;
			case 'add_source':
				$this->add_source( $args );
				break;
			case 'update_default_source':
				$this->update_default_source( $args );
				break;
			case 'send_email':
				$this->send_email( $args );
				break;
			default:
				break;
		}
	}

	/**
	 * Set Stripe Args Values
	 */
	protected function set_stripe_args() {
		self::$stripe_args 							= [];
		self::$stripe_args['total_price']			= 0;
		self::$customer    							= self::$order_data->get_user();
		self::$customer_id 							= self::$order_data->get_user_id();
		$return            							= new JPW_Stripe();

		foreach ( self::$order_data->get_items() as $item ) {
			$product								= wc_get_product( $item['product_id'] );

			if ( $product->is_type( 'paywall_subscribe' ) || $product->is_type( 'paywall_unlock' ) ) {
				self::$stripe_args['item']         	= $item['product_id'];
				self::$stripe_args['name']         	= $product->get_name();
				self::$stripe_args['desc']         	= 'no description';
				self::$stripe_args['type']         	= 'service';
				self::$stripe_args['attributes']   	= $product->get_attributes();
				self::$stripe_args['price']        	= $product->get_price();
				self::$stripe_args['duration']     	= $product->is_type( 'paywall_subscribe' ) ? $product->get_duration() : '';
				self::$stripe_args['plan']         	= get_post_meta( $item['product_id'], 'jpw_stripe_plan_id', true );
				self::$stripe_args['product']      	= get_post_meta( $item['product_id'], 'jpw_stripe_product_id', true );
				self::$stripe_args['currency']     	= get_woocommerce_currency();
				self::$stripe_args['interval']     	= $product->is_type( 'paywall_subscribe' ) ? strtolower( $product->get_interval() ) : '';
				self::$stripe_args['customer']     	= get_user_option( 'jpw_stripe_customer_id', self::$customer_id );
				self::$stripe_args['subscription'] 	= get_user_option( 'jpw_stripe_subs_id', self::$customer_id );
				self::$stripe_args['email'] 	   	= self::$customer->data->user_email;
			}

			if ( $product->is_type( 'paywall_unlock' ) ) {
				$this->create_product( self::$stripe_args['item'] );
				$this->create_price( self::$stripe_args['item'] );
			}

			self::$stripe_args['total_price']		= self::$stripe_args['total_price'] + ( self::$stripe_args['price'] * $item->get_quantity() );
		}
	}

	/**
	 * Create a Customer for Stripe
	 */
	protected function create_customer() {
		if ( self::$stripe_args['customer'] ) {
			$this->check_customer();
			return true;
		}

		Stripe_Api_Credentials::client( self::$api_credentials );
		$request  						= new Stripe_Api_Request( 'create_customer', self::createCustomerRequest() );
		$response 						= $request->get_response();
		$response 						= json_decode( json_encode( $response ), false );

		if ( $request->is_error() ) {
			$error_message 				= self::$helper->get_error_message( $response );
			throw new \Exception( $error_message );
		}

		self::$stripe_args['customer'] 	= $response->id;
		update_user_option( self::$customer->get( 'ID' ), 'jpw_stripe_customer_id', $response->id );
	}

	/**
	 * Check a Customer for Stripe
	 */
	protected function check_customer() {
		Stripe_Api_Credentials::client( self::$api_credentials );
		$request  				= new Stripe_Api_Request( 'check_customer', self::$stripe_args['customer'] );
		$response 				= $request->get_response();
		$response 				= json_decode( json_encode( $response ), false );

		if ( $request->is_error() ) {
			if ( 'resource_missing' == $response->code ) {
				// Customer not found. Need to input customer
				self::$stripe_args['customer'] = false;
				$this->create_customer();
			} else {
				$error_message 	= self::$helper->get_error_message( $response );
				throw new \Exception( $error_message );
			}
		}

		// Customer maybe need to update
		$this->update_customer();
	}

	/**
	 * Update a Customer for Stripe
	 */
	protected function update_customer() {
		Stripe_Api_Credentials::client( self::$api_credentials );

		// Atach source to Customer
		if ( ( is_jpw_subscribe() || ( isset( $_POST[ 'jpw-stripe-new-payment-method' ] )  && 'true' === $_POST[ 'jpw-stripe-new-payment-method' ] ) ) && ( isset( $_POST[ 'jpw-stripe-payment-source' ] ) && 'new' === $_POST[ 'jpw-stripe-payment-source' ] ) ) {
			$request  				= new Stripe_Api_Request( 'attach_source', [ self::$stripe_args['customer'], [ 'source' => self::$source ] ] );
			$response 				= $request->get_response();
			$response 				= json_decode( json_encode( $response ), false );

			if ( $request->is_error() ) {
				$error_message 	= self::$helper->get_error_message( $response );
				throw new \Exception( $error_message );
			}
		}

		// Update customer
		$params 			= self::updateCustomerRequest();

		// unlock doesn't default source
		$product			= wc_get_product( self::$stripe_args['item'] );
		if ( $product->is_type( 'paywall_unlock' ) ) {
			unset( $params['default_source'] );
		}

		$request  			= new Stripe_Api_Request( 'update_customer', [ self::$stripe_args['customer'], $params ] );
		$response 			= $request->get_response();

		if ( $request->is_error() ) {
			$error_message 	= self::$helper->get_error_message( $response );
			throw new \Exception( $error_message );
		}
	}

	/**
	 * Init a Customer for add source
	 */
	protected function init_customer() {
		$user_id						= get_current_user_id();
		$customer						= new \WC_Customer( $user_id );

		Stripe_Api_Credentials::client( self::$api_credentials );
		$request  						= new Stripe_Api_Request( 'create_customer', self::initCustomerRequest( $customer ) );
		$response 						= $request->get_response();
		$response 						= json_decode( json_encode( $response ), false );

		if ( $request->is_error() ) {
			$error_message 				= self::$helper->get_error_message( $response );
			throw new \Exception( $error_message );
		}

		self::$result					= $response->id;
		update_user_option( $user_id, 'jpw_stripe_customer_id', $response->id );
	}

	/**
	 * Create Price Recurring for Stripe
	 */
	protected function create_price_recurring( $product_id ) {
		if ( ! empty( self::$stripe_args['plan'] ) ) {
			$this->check_price_recurring();
			return true;
		}

		Stripe_Api_Credentials::client( self::$api_credentials );
		$request  					= new Stripe_Api_Request( 'create_price', self::createPriceRecurringRequest() );
		$response 					= $request->get_response();
		$response 					= json_decode( json_encode( $response ), false );

		if ( $request->is_error() ) {
			$error_message 			= self::$helper->get_error_message( $response );
			throw new \Exception( $error_message );
		}

		self::$stripe_args['plan'] 	= $response->id;
		update_post_meta( $product_id, 'jpw_stripe_plan_id', $response->id );
	}

	/**
	 * Check Price Recurring for Stripe
	 */
	protected function check_price_recurring() {
		Stripe_Api_Credentials::client( self::$api_credentials );
		$request  				= new Stripe_Api_Request( 'check_price', self::$stripe_args['plan'] );
		$response 				= $request->get_response();
		$response 				= json_decode( json_encode( $response ), false );

		if ( $request->is_error() ) {
			if ( 'resource_missing' == $response->code ) {
				// Plan not found. Need to input plan
				self::$stripe_args['plan'] = false;
				$this->create_price_recurring( self::$stripe_args['item'] );
				return true;
			} else {
				$error_message 	= self::$helper->get_error_message( $response );
				throw new \Exception( $error_message );
			}
		}
		// Plan amount, currency, interval, interval_count can't be updated, check if params have changed
		$this->update_price_recurring( $response );
	}

	/**
	 * Price Recurring update
	 */
	protected function update_price_recurring( $response ) {
		$amount = self::$helper->zero_decimal( self::$stripe_args['currency'] ) ? self::$stripe_args['price'] : self::$stripe_args['price'] * 100;
		if ( ( $response->unit_amount !== $amount )
			|| ( $response->currency != strtolower( self::$stripe_args['currency'] ) )
			|| ( $response->recurring->interval != self::$stripe_args['interval'] )
			|| ( $response->recurring->interval_count != self::$stripe_args['duration'] ) ) {
			// create a new plan
			self::$stripe_args['plan'] 	= false;
			$this->create_price_recurring( self::$stripe_args['item'] );
		}
	}

	/**
	 * Create a Price for Stripe
	 */
	protected function create_price( $product_id ) {
		if ( ! empty( self::$stripe_args['plan'] ) ) {
			$this->check_price();
			return true;
		}

		Stripe_Api_Credentials::client( self::$api_credentials );
		$request  					= new Stripe_Api_Request( 'create_price', self::createPriceRequest() );
		$response 					= $request->get_response();
		$response 					= json_decode( json_encode( $response ), false );

		if ( $request->is_error() ) {
			$error_message 			= self::$helper->get_error_message( $response );
			throw new \Exception( $error_message );
		}

		self::$stripe_args['plan'] 	= $response->id;
		update_post_meta( $product_id, 'jpw_stripe_plan_id', $response->id );
	}

	/**
	 * Check a Price for Stripe
	 */
	protected function check_price() {
		Stripe_Api_Credentials::client( self::$api_credentials );
		$request  				= new Stripe_Api_Request( 'check_price', self::$stripe_args['plan'] );
		$response 				= $request->get_response();
		$response 				= json_decode( json_encode( $response ), false );

		if ( $request->is_error() ) {
			if ( 'resource_missing' == $response->code ) {
				// Plan not found. Need to input plan
				self::$stripe_args['plan'] = false;
				$this->create_price( self::$stripe_args['item'] );
				return true;
			} else {
				$error_message 	= self::$helper->get_error_message( $response );
				throw new \Exception( $error_message );
			}
		}
		// Plan amount, currency, interval, interval_count can't be updated, check if params have changed
		$this->update_price( $response );
	}

	/**
	 * Plan update
	 */
	protected function update_price( $response ) {
		$amount = self::$helper->zero_decimal( self::$stripe_args['currency'] ) ? self::$stripe_args['price'] : self::$stripe_args['price'] * 100;
		if ( ( $response->unit_amount !== $amount )
			|| ( $response->currency !== strtolower( self::$stripe_args['currency'] ) ) ) {
			// create a new plan
			self::$stripe_args['plan'] 	= false;
			$this->create_price( self::$stripe_args['item'] );
		}
	}

	/**
	 * Create a Product for Stripe
	 */
	protected function create_product( $product_id ) {
		if ( ! empty( self::$stripe_args['product'] ) ) {
			$this->check_product();
			return true;
		}

		Stripe_Api_Credentials::client( self::$api_credentials );
		$request  						= new Stripe_Api_Request( 'create_product', self::createProductRequest() );
		$response 						= $request->get_response();
		$response 						= json_decode( json_encode( $response ), false );

		if ( $request->is_error() ) {
			$error_message 				= self::$helper->get_error_message( $response );
			throw new \Exception( $error_message );
		}

		self::$stripe_args['product']	= $response->id;
		update_post_meta( $product_id, 'jpw_stripe_product_id', $response->id );
	}

	/**
	 * Check a Product for Stripe
	 */
	protected function check_product() {
		Stripe_Api_Credentials::client( self::$api_credentials );
		$request  				= new Stripe_Api_Request( 'check_product', self::$stripe_args['product'] );
		$response 				= $request->get_response();
		$response 				= json_decode( json_encode( $response ), false );

		if ( $request->is_error() ) {
			if ( 'resource_missing' == $response->code ) {
				// Product not found. Need to input plan
				self::$stripe_args['product'] = false;
				$this->create_product( self::$stripe_args['item'] );
				return true;
			} else {
				$error_message 	= self::$helper->get_error_message( $response );
				throw new \Exception( $error_message );
			}
		}
		$this->update_product( $response );
	}

	/**
	 * Product update
	 */
	protected function update_product( $response ) {
		if ( $response->name !== self::$stripe_args['name'] ) {
			Stripe_Api_Credentials::client( self::$api_credentials );
			$request 						= new Stripe_Api_Request( 'update_product', [ $response->id, self::createProductRequest() ] );
		}
	}

	/**
	 * Create a Subscription for Stripe
	 */
	protected function create_subscription() {
		Stripe_Api_Credentials::client( self::$api_credentials );
		
		$this->check_subscription();
		
		if ( 'empty' != self::$result ) {
			$this->check_invoice();
		}

		$request  				= new Stripe_Api_Request( 'create_subscription', self::createSubscribeRequest() );
		$response 				= $request->get_response();
		$response 				= json_decode( json_encode( $response ), false );

		if ( $request->is_error() ) {
			$error_message 		= self::$helper->get_error_message( $response );
			throw new \Exception( $error_message );
		}

		self::$stripe_args['subscription'] = $response->id;
		update_user_option( self::$order_data->get_user_id(), 'jpw_stripe_subs_id', $response->id );
		update_user_option( self::$order_data->get_user_id(), 'jpw_subs_type', 'stripe' );
		update_user_option( self::$order_data->get_user_id(), 'jpw_expired_date', Date( 'F d, Y', $response->current_period_end ) );

		self::$result 			= $response;
	}

	/**
	 * Update a Subscription for Stripe
	 */
	protected function update_subscription() {
		Stripe_Api_Credentials::client( self::$api_credentials );

		$request 					= new Stripe_Api_Request( 'check_subscription', self::$stripe_args['subscription'] );
		$response 					= $request->get_response();
		$response 					= json_decode( json_encode( $response ), false );

		if ( self::$stripe_args['plan'] !== $response->plan->id ) {
			$request  				= new Stripe_Api_Request( 'update_subscription', [ self::$stripe_args['subscription'], self::updateSubscribeRequest() ] );
			$response 				= $request->get_response();
			$response 				= json_decode( json_encode( $response ), false );

			if ( $request->is_error() ) {
				$error_message 		= self::$helper->get_error_message( $response );
				throw new \Exception( $error_message );
			}
		}

		self::$stripe_args['subscription'] = $response->id;
		update_user_option( self::$order_data->get_user_id(), 'jpw_stripe_subs_id', $response->id );
		update_user_option( self::$order_data->get_user_id(), 'jpw_subs_type', 'stripe' );
		update_user_option( self::$order_data->get_user_id(), 'jpw_expired_date', Date( 'F d, Y', $response->current_period_end ) );

		self::$result 			= $response;
	}

	/**
	 * Create a PaymentIntent for Stripe
	 */
	protected function create_payment() {
		Stripe_Api_Credentials::client( self::$api_credentials );

		$request  				= new Stripe_Api_Request( 'create_payment', self::createPaymentRequest() );
		$response 				= $request->get_response();
		$response 				= json_decode( json_encode( $response ), false );

		if ( $request->is_error() ) {
			$error_message 		= self::$helper->get_error_message( $response );
			throw new \Exception( $error_message );
		}

		update_post_meta( self::$order_id, 'jpw_stripe_payment_id', $response->id );
		self::$order_data->update_meta_data( 'jpw_stripe_payment_id', $response->id );
		self::$order_data->save();

		self::$result 			= $response;
	}

	/**
	 * Update PaymentIntent for Stripe
	 */
	protected function update_payment() {
		$payment_id				= self::$order_data->get_meta( 'jpw_stripe_payment_id' );

		Stripe_Api_Credentials::client( self::$api_credentials );
		$request  				= new Stripe_Api_Request( 'update_intent', [ $payment_id, self::createPaymentRequest() ] );
		$response 				= $request->get_response();
		$response 				= json_decode( json_encode( $response ), false );

		if ( $request->is_error() ) {
			$error_message 		= self::$helper->get_error_message( $response );
			throw new \Exception( $error_message );
		}

		update_post_meta( self::$order_id, 'jpw_stripe_payment_id', $response->id );
		self::$order_data->update_meta_data( 'jpw_stripe_payment_id', $response->id );
		self::$order_data->save();

		self::$result 			= $response;
	}

	/**
	 * Check Subscription
	 *
	 * @return mixed
	 */
	protected function check_subscription() {
		$subscription_id 		= self::$stripe_args['subscription'];

		if ( ! empty( $subscription_id ) ) {
			Stripe_Api_Credentials::client( self::$api_credentials );
			$request      		= new Stripe_Api_Request( 'check_subscription', $subscription_id );
			self::$result 		= $request->get_response();
			if ( $request->is_error() ) {
				self::$result 	= 'empty';
			}
		} else {
			self::$result 		= 'empty';
		}

	}

	/**
	 * Check Invoice
	 */
	protected function check_invoice() {
		$subscription 		= self::$result;
		$subscription 		= json_decode( json_encode( $subscription ), false );
		$intent       		= null;
		if ( ! empty( $subscription->latest_invoice ) ) {
			$request 		= new Stripe_Api_Request( 'check_invoice', $subscription->latest_invoice );
			$invoice 		= $request->get_response();
			$invoice 		= json_decode( json_encode( $invoice ), false );
		}

		if ( $request->is_error() ) {
			return false;
		}

		if ( ( 'active' == $subscription->status ) && ( 'paid' == $invoice->status ) ) {
			throw new \Exception( __( 'You still have an active subscription', 'jnews-paywall' ) );
		}

		$this->cancel_subscription( $subscription->id );

		return;
	}

	/**
	 * Update Intent Source
	 */
	protected function update_intent( $id ) {
		Stripe_Api_Credentials::client( self::$api_credentials );
		$intent   			= new Stripe_Api_Request(
			'update_intent',
			[
				$id,
				self::updateIntentRequest(),
			]
		);
		$response 			= $intent->get_response();
		$response 			= json_decode( json_encode( $response ), false );

		if ( $intent->is_error() ) {
			$error_message 	= self::$helper->get_error_message( $response );
			throw new \Exception( $error_message );
		}

		update_post_meta( self::$order_id, 'jpw_stripe_payment_id', $response->id );
		self::$order_data->update_meta_data( 'jpw_stripe_payment_id', $id );
		self::$order_data->save();
		self::$result 		= $response;
	}

	/**
	 * Check a Charge for Stripe
	 */
	protected function check_charge( $id ) {
		if ( $id == false ) {
			return false;
		}
		Stripe_Api_Credentials::client( self::$api_credentials );
		$request 			= new Stripe_Api_Request( 'check_charge', $id );

		self::$result 		= json_decode( json_encode( $request->get_response() ), false );
	}

	/**
	 * Check a Intent for Stripe
	 */
	protected function check_intent( $id ) {
		if ( $id == false ) {
			return false;
		}
		Stripe_Api_Credentials::client( self::$api_credentials );
		$request 			= new Stripe_Api_Request( 'check_intent', $id );

		self::$result 		= json_decode( json_encode( $request->get_response() ), false );
	}

	/**
	 * Retrieve customer sources
	 */
	protected function check_source( $id ) {
		if ( $id == false ) {
			self::$result 	= false;
			return false;
		}
		Stripe_Api_Credentials::client( self::$api_credentials );
		$request 			= new Stripe_Api_Request( 'check_source', $id );

		if( $request->is_error() ) {
			self::$result 	= false;
			return false;
		}

		self::$result 		= json_decode( json_encode( $request->get_response() ), false );
	}

	/**
	 * Delete customer sources
	 */
	protected function delete_source( $args ) {
		Stripe_Api_Credentials::client( self::$api_credentials );
		$request 			= new Stripe_Api_Request( 'delete_source', $args );

		self::$result 		= json_decode( json_encode( $request->get_response() ), false );
	}

	/**
	 * Update customer default source
	 */
	protected function update_default_source( $args ) {
		Stripe_Api_Credentials::client( self::$api_credentials );
		$request 			= new Stripe_Api_Request( 'update_customer', $args );

		self::$result 		= json_decode( json_encode( $request->get_response() ), false );
	}

	/**
	 * Check Customer default source
	 */
	protected function default_source( $id ) {
		Stripe_Api_Credentials::client( self::$api_credentials );
		
		$request  			= new Stripe_Api_Request( 'check_customer', $id );
		$response 			= $request->get_response();
		$response 			= json_decode( json_encode( $response ), false );

		if( $request->is_error() ) {
			self::$result 	= false;
			return false;
		}

		self::$result = $response->default_source;
	}

	/**
	 * Add new source to Customer
	 */
	protected function add_source( $source ) {
		Stripe_Api_Credentials::client( self::$api_credentials );

		$customer_id			= get_user_option( 'jpw_stripe_customer_id', get_current_user_id() );
		$request  				= new Stripe_Api_Request( 'check_customer', $customer_id );

		if ( $request->is_error() ) {
			$this->init_customer();
			$customer_id		= self::$result;

			// Check again to make sure customer has inputted
			if( ! $customer_id ) {
				self::$result	= false;
				return false;
			}
		}

		$request  				= new Stripe_Api_Request( 'attach_source', [ $customer_id, [ 'source' => $source ] ] );
		$response 				= $request->get_response();
		$response 				= json_decode( json_encode( $response ), false );

		if( $request->is_error() ) {
			self::$result 		= false;
			return false;
		}

		self::$result 			= $response;
	}

	/**
	 * Confirm PaymentIntent for Stripe
	 */
	protected function confirm_intent( $id ) {
		Stripe_Api_Credentials::client( self::$api_credentials );
		$request  			= new Stripe_Api_Request( 'confirm_intent', [ $id, self::confirmIntentRequest() ] );
		$response 			= $request->get_response();
		$response 			= json_decode( json_encode( $response ), false );

		if ( $request->is_error() ) {
			$error_message 	= self::$helper->get_error_message( $response );
			throw new \Exception( $error_message );
		}

		self::$result = $response;
	}

	/**
	 * Cancel Subscription
	 *
	 * @return mixed
	 */
	protected function cancel_subscription( $id = null ) {
		$subscription_id 	= empty( $id ) ? get_user_option( 'jpw_stripe_subs_id', get_current_user_id() ) : $id;
		Stripe_Api_Credentials::client( self::$api_credentials );
		$request      		= new Stripe_Api_Request( 'cancel_subscription', $subscription_id );

		self::$result		= $request->get_response();

		if ( $request->is_error() ) {
			self::$result	= [
				'status'	=> 'error'
			];	
		}
	}

	/**
	 * Send receipt to customer email when payment succeded
	 *
	 * @return mixed
	 */
	protected function send_email( $args ) {
		Stripe_Api_Credentials::client( self::$api_credentials );
		$request      		= new Stripe_Api_Request( 'update_intent', [ $args['id'], [ 'receipt_email' => $args['email'] ] ] );
	}

	/**
	 * Create Customer Request Parameters
	 *
	 * @return array
	 */
	private static function createCustomerRequest() {
		return [
			'name'        		=> self::$order_data->get_billing_first_name() . ' ' . self::$order_data->get_billing_last_name(),
			'address'     		=> [
				'line1'       	=> self::$order_data->get_billing_address_1(),
				'line2'       	=> self::$order_data->get_billing_address_2(),
				'city'        	=> self::$order_data->get_billing_city(),
				'country'     	=> self::$order_data->get_billing_country(),
				'postal_code' 	=> self::$order_data->get_billing_postcode(),
				'state'       	=> self::$order_data->get_billing_state(),
			],
			'description' 		=> sprintf( __( 'Paywall Customer, Name: %s', 'jnews-paywall' ), self::$order_data->get_billing_first_name() . ' ' . self::$order_data->get_billing_last_name() ),
			'email'       		=> self::$order_data->get_billing_email(),
			'phone'       		=> self::$order_data->get_billing_phone(),
			'source'      		=> self::$source,
		];
	}

	/**
	 * Init Customer for add a source
	 *
	 * @return array
	 */
	private static function initCustomerRequest( $customer ) {
		return [
			'name'        		=> $customer->get_billing_first_name() . ' ' . $customer->get_billing_last_name(),
			'address'     		=> [
				'line1'       	=> $customer->get_billing_address_1(),
				'line2'       	=> $customer->get_billing_address_2(),
				'city'        	=> $customer->get_billing_city(),
				'country'     	=> $customer->get_billing_country(),
				'postal_code' 	=> $customer->get_billing_postcode(),
				'state'       	=> $customer->get_billing_state(),
			],
			'description' 		=> sprintf( __( 'Paywall Customer, Name: %s', 'jnews-paywall' ), $customer->get_billing_first_name() . ' ' . $customer->get_billing_last_name() ),
			'email'       		=> $customer->get_billing_email(),
			'phone'       		=> $customer->get_billing_phone(),
		];
	}

	/**
	 * Update Customer Request Parameters
	 *
	 * @return array
	 */
	private static function updateCustomerRequest() {
		return [
			'name'        		=> self::$order_data->get_billing_first_name() . ' ' . self::$order_data->get_billing_last_name(),
			'address'     		=> [
				'line1'       	=> self::$order_data->get_billing_address_1(),
				'line2'       	=> self::$order_data->get_billing_address_2(),
				'city'        	=> self::$order_data->get_billing_city(),
				'country'     	=> self::$order_data->get_billing_country(),
				'postal_code' 	=> self::$order_data->get_billing_postcode(),
				'state'       	=> self::$order_data->get_billing_state(),
			],
			'description' 		=> sprintf( __( 'Paywall Customer, Name: %s', 'jnews-paywall' ), self::$order_data->get_billing_first_name() . ' ' . self::$order_data->get_billing_last_name() ),
			'email'       		=> self::$order_data->get_billing_email(),
			'phone'       		=> self::$order_data->get_billing_phone(),
			'default_source'	=> self::$source,
		];
	}

	/**
	 * Create Plan Request Parameters
	 *
	 * @return array
	 */
	private static function createPriceRecurringRequest() {
		return [
			'unit_amount'			=> self::$helper->zero_decimal( self::$stripe_args['currency'] ) ? self::$stripe_args['price'] : self::$stripe_args['price'] * 100,
			'currency'				=> self::$stripe_args['currency'],
			'recurring'				=> [
				'interval'			=> self::$stripe_args['interval'],
				'interval_count'	=> self::$stripe_args['duration'],
			],
			'product'				=> self::$stripe_args['product']
		];
	}

	/**
	 * Create Price for Unlock Request Parameters
	 *
	 * @return array
	 */
	private static function createPriceRequest() {
		return [
			'unit_amount'			=> self::$helper->zero_decimal( self::$stripe_args['currency'] ) ? self::$stripe_args['price'] : self::$stripe_args['price'] * 100,
			'currency'       		=> self::$stripe_args['currency'],
			'billing_scheme'		=> 'per_unit',
			'product'        		=> self::$stripe_args['product'],
			'expand'				=> [
				'tiers',
			]
		];
	}

	/**
	 * Create Product Request Parameters
	 *
	 * @return array
	 */
	private static function createProductRequest() {
		return [
			'name'				=> self::$stripe_args['name'],
		];
	}

	/**
	 * Create Payment Request Parameters
	 *
	 * @return array
	 */
	private static function createPaymentRequest() {
		return [
			'amount'         		=> self::$helper->zero_decimal( self::$stripe_args['currency'] ) ? self::$stripe_args['total_price'] : self::$stripe_args['total_price'] * 100,
			'currency'       		=> self::$stripe_args['currency'],
			'customer'				=> self::$stripe_args['customer'],
			'description'			=> sprintf( __( '%s - Unlock %s', 'jnews-paywall' ), get_bloginfo( 'name' ), self::$order_data->get_id() ),
			'source'				=> self::$source,
			'receipt_email'			=> self::$stripe_args['email'],
			'metadata'       		=> [
				'order_id'          => self::$order_id,
				'unlock_type' 		=> 'jpw_unlock',
			],
		];
	}

	/**
	 * Update Intent Request Parameters
	 *
	 * @return array
	 */
	private static function updateIntentRequest() {
		if ( empty( self::$source ) ) {
			return [
				'description' 	=> sprintf( __( '%s - Subscription %s', 'jnews-paywall' ), get_bloginfo( 'name' ), self::$order_data->get_id() ),
				'receipt_email'	=> self::$stripe_args['email'],
			];
		}
		return [
			'source' 			=> self::$source,
		];
	}

	/**
	 * Create Subscribe Request Parameters
	 *
	 * @return array
	 */
	private static function createSubscribeRequest() {
		return [
			'customer'       		=> self::$stripe_args['customer'],
			'items'          		=> [
				[
					'price' 		=> self::$stripe_args['plan'],
				],
			],
			'expand'         		=> [
				'latest_invoice.payment_intent',
			],
			'metadata'       		=> [
				'order_id'          => self::$order_id,
				'product'           => self::$stripe_args['name'],
				'subscription_type' => 'jpw_subscribe',
			],
		];
	}

	/**
	 * Update Subscribe Request Parameters
	 *
	 * @return array
	 */
	private static function updateSubscribeRequest() {
		return [
			'items'          		=> [
				[
					'price' 		=> self::$stripe_args['plan'],
				],
			],
			'metadata'       		=> [
				'order_id'          => self::$order_id,
				'product'           => self::$stripe_args['name'],
				'subscription_type' => 'jpw_subscribe',
			],
		];
	}

	/**
	 * Confirm Intent Request Parameters
	 *
	 * @return array
	 */
	private static function confirmIntentRequest() {
		return [
			'source' 				=> self::$source,
		];
	}

	/**
	 * Check Subscribe Request Parameters
	 *
	 * @return array
	 */
	private static function checkSubscribeRequest() {
		return [];
	}

	/**
	 * Cancel Subscribe Request Parameters
	 *
	 * @return array
	 */
	private static function cancelSubscribeRequest() {
		return [
			'reason'	=> '-',
		];
	}

	public function get_response_message() {
		return self::$result;
	}

}
