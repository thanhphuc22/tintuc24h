<?php

namespace JNews\Paywall\Gateways\Paypal;

use JNews\Paywall\Gateways\Paypal\Lib\Jpaypal\Core\Http_Exception;
use JNews\Paywall\Gateways\Paypal\Lib\Jpaypal\Jeg_Paypal_Api_Request;
use JNews\Paywall\Gateways\Paypal\Paypal_Api_Credentials;
use JNews\Paywall\Gateways\Paypal\Paypal_Api_Request;
use JPW_Paypal;
use WC_Order;
use WC_Payment_Gateway;

/**
 * Class Paypal_Api
 *
 * @package JNews\Paywall\Gateways\Paypal
 */
class Paypal_Api {
	/**
	 * @var static
	 */
	protected static
		$api_credentials,
		$order_id,
		$order_data,
		$paypal_args,
		$product_response,
		$billing_response,
		$subscribe_response,
		$result;

	/**
	 * @class Constructor
	 */
	public function __construct( $status, $credentials, $order_id = null ) {
		if ( isset( $order_id ) ) {
			self::$order_id   = $order_id;
			self::$order_data = wc_get_order( $order_id );
		}
		self::$api_credentials = $credentials;

		switch ( $status ) {
			case 'create':
				$this->set_paypal_args();
				$this->create_product();
				break;
			case 'check':
				$this->check_subscription();
				break;
			case 'cancel':
				$this->cancel_subscription();
				break;
			default:
				break;
		}
	}

	/**
	 * Set Paypal Args Values
	 */
	protected function set_paypal_args() {
		self::$paypal_args = [];
		$customer          = self::$order_data->get_user();
		$return            = new JPW_Paypal();

		foreach ( self::$order_data->get_items() as $item ) {
			$product = wc_get_product( $item['product_id'] );

			if ( $product->is_type( 'paywall_subscribe' ) ) {
				self::$paypal_args['product_id']     = $product->get_id();
				self::$paypal_args['plan_id']        = get_post_meta( $product->get_id(), 'jpw_paypal_plan_id', true );
				self::$paypal_args['prod_name']      = $product->get_name();
				self::$paypal_args['prod_desc']      = 'no description';
				self::$paypal_args['prod_price']     = $product->get_price();
				self::$paypal_args['prod_currency']  = get_woocommerce_currency();
				self::$paypal_args['prod_interval']  = $product->get_interval();
				self::$paypal_args['prod_duration']  = $product->get_duration();
				self::$paypal_args['prod_type']      = 'SERVICE';
				self::$paypal_args['prod_category']  = 'SOFTWARE';
				self::$paypal_args['image_url']      = 'https://example.com/streaming.jpg';
				self::$paypal_args['home_url']       = home_url();
				self::$paypal_args['success_url']    = $return->get_return_url( self::$order_data );
				self::$paypal_args['checkout_url']   = wc_get_checkout_url();
				self::$paypal_args['customer_name']  = $customer->data->display_name;
				self::$paypal_args['customer_email'] = $customer->data->user_email;
			}
		}
	}

	/**
	 * Create a Product for Paypal
	 *
	 * @throws \Exception
	 */
	protected function create_product() {
		$this->check_subscription( true );
		$status = isset( $this->get_response_message()->result->status ) ? $this->get_response_message()->result->status : $this->get_response_message();
		if ( 'EMPTY' === $status || 'ACTIVE' !== $status ) {
			$request                = new Paypal_Api_Request( 'create_product' );
			$request->request->body = self::createProductRequest();

			$client = Paypal_Api_Credentials::client( self::$api_credentials );
			if ( null !== $client ) {
				$response = Jeg_Paypal_Api_Request::request( $client, $request );
				if ( ! $response['error'] ) {
					self::$product_response = $response['response'];
					$this->create_plan();
				}
			}
		} else {
			throw new \Exception( __( 'You still have an active subscription', 'jnews-paywall' ) );
		}
	}

	/**
	 * Create Product Request Parameters
	 *
	 * @return array
	 */
	private static function createProductRequest() {
		return [
			'name'        => self::$paypal_args['prod_name'], // negative test ERRCAT001.
			'description' => self::$paypal_args['prod_desc'],
			'type'        => self::$paypal_args['prod_type'],
			'category'    => self::$paypal_args['prod_category'],
			'image_url'   => self::$paypal_args['image_url'],
			'home_url'    => self::$paypal_args['home_url'],
		];
	}

	protected function check_plan() {
		$param   = [
			'plan_id' => self::$paypal_args['plan_id'],
		];
		$request = new Paypal_Api_Request( 'check_plan', $param );
		$client  = Paypal_Api_Credentials::client( self::$api_credentials );
		if ( null !== $client ) {
			$response  = Jeg_Paypal_Api_Request::request( $client, $request );
			if ( ! $response['error'] ) {
				if ( 'ACTIVE' === $response['response']->result->status ) {
					self::$billing_response = $response['response'];
					$this->create_subscription();
				}
			} else {
				if ( 404 === $response['response']['status_code'] ) {
					self::$paypal_args['plan_id'] = false;
					$this->create_plan();
				}
			}
		}
	}

	/**
	 * Create a Plan for Paypal
	 */
	protected function create_plan() {
		if ( ! empty( self::$paypal_args['plan_id'] ) && false !== self::$paypal_args['plan_id'] ) {
			$this->check_plan();
			return true;
		}

		$request = new Paypal_Api_Request( 'create_plan' );
		$request->prefer( 'return=representation' );
		$request->request->body = self::createPlanRequest();

		$client = Paypal_Api_Credentials::client( self::$api_credentials );
		if ( null !== $client ) {
			$response = Jeg_Paypal_Api_Request::request( $client, $request );
			if ( ! $response['error'] ) {
				self::$billing_response = $response['response'];
				$this->create_subscription();
				self::$paypal_args['plan_id'] = self::$billing_response->result->id;
				update_post_meta( self::$paypal_args['product_id'], 'jpw_paypal_plan_id', self::$paypal_args['plan_id'] );
			}
		}
	}

	/**
	 * Create Plan Request Parameters
	 *
	 * @return array
	 */
	private static function createPlanRequest() {
		return [
			'product_id'          => self::$product_response->result->id,
			'name'                => self::$paypal_args['prod_name'],
			'description'         => self::$paypal_args['prod_desc'],
			'billing_cycles'      => [
				[
					'frequency'      => [
						'interval_unit'  => self::$paypal_args['prod_interval'],
						'interval_count' => self::$paypal_args['prod_duration'],
					],
					'tenure_type'    => 'REGULAR',
					'sequence'       => 1,
					'total_cycles'   => 0,
					'pricing_scheme' => [
						'fixed_price' => [
							'value'         => self::$paypal_args['prod_price'],
							'currency_code' => self::$paypal_args['prod_currency'],
						],
					],
				],
			],
			'payment_preferences' => [
				'auto_bill_outstanding'     => true,
				'setup_fee'                 => [
					'value'         => '0',
					'currency_code' => self::$paypal_args['prod_currency'],
				],
				'payment_failure_threshold' => 3,
			],
			'taxes'               => [
				'percentage' => '0',
				'inclusive'  => false,
			],
		];
	}

	/**
	 * Create a Subscription for Paypal
	 */
	protected function create_subscription() {
		$request = new Paypal_Api_Request( 'create_subscription' );
		$request->prefer( 'return=representation' );
		$request->request->body = self::createSubscribeRequest();

		$client = Paypal_Api_Credentials::client( self::$api_credentials );
		if ( null !== $client ) {
			$response = Jeg_Paypal_Api_Request::request( $client, $request );
			if ( ! $response['error'] ) {
				self::$subscribe_response = $response['response'];
				update_post_meta( self::$order_id, 'subscription_id', self::$subscribe_response->result->id );
				update_post_meta( self::$order_id, 'jpw_subs_type', 'paypal' );
				update_user_option( self::$order_data->get_user_id(), 'jpw_subs_type', 'paypal' );
			}
		}
	}

	/**
	 * Create Subscribe Request Parameters
	 *
	 * @return array
	 */
	private static function createSubscribeRequest() {
		return [
			'plan_id'             => self::$billing_response->result->id,
			'subscriber'          => [
				'name'          => [
					'given_name' => self::$paypal_args['customer_name'],
					'surname'    => '',
				],
				'email_address' => self::$paypal_args['customer_email'],
			],
			'application_context' => [
				'brand_name'          => get_bloginfo( 'name' ) . ' Subscription',
				'locale'              => 'en-US',
				'shipping_preference' => 'NO_SHIPPING',
				'user_action'         => 'SUBSCRIBE_NOW',
				'payment_method'      => [
					'payer_selected'  => 'PAYPAL',
					'payee_preferred' => 'IMMEDIATE_PAYMENT_REQUIRED',
				],
				'return_url'          => self::$paypal_args['success_url'],
				'cancel_url'          => self::$paypal_args['checkout_url'],
			],
		];
	}

	/**
	 * Check Subscription
	 *
	 * @param bool $user_data
	 *
	 * @return mixed
	 */
	protected function check_subscription( $user_data = false ) {
		$subscription_id = isset( self::$order_id ) && ! $user_data ? get_post_meta( self::$order_id, 'subscription_id', true ) : get_user_option( 'jpw_paypal_subs_id', get_current_user_id() );

		if ( ! empty( $subscription_id ) ) {
			$param   = [
				'order_id' => $subscription_id,
			];
			$request = new Paypal_Api_Request( 'check_subscription', $param );
			$request->prefer( 'return=representation' );
			$request->request->body = self::checkSubscribeRequest();

			$client = Paypal_Api_Credentials::client( self::$api_credentials );
			if ( null !== $client ) {
				$response = Jeg_Paypal_Api_Request::request( $client, $request );
				if ( ! $response['error'] ) {
					self::$result = $response['response'];

					return;
				}
			}
		}
		self::$result = 'EMPTY';
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
	 * Check Subscription
	 *
	 * @return mixed
	 */
	protected function cancel_subscription() {
		$subscription_id = get_user_option( 'jpw_paypal_subs_id', get_current_user_id() );
		$param           = [
			'order_id' => $subscription_id,
		];
		$request         = new Paypal_Api_Request( 'cancel_subscription', $param );
		$request->prefer( 'return=representation' );
		$request->request->body = self::cancelSubscribeRequest();

		$client = Paypal_Api_Credentials::client( self::$api_credentials );
		if ( null !== $client ) {
			$response = Jeg_Paypal_Api_Request::request( $client, $request );
			if ( ! $response['error'] ) {
				self::$result = $response['response']->status_code;

				return;
			}
		}
		self::$result = false;
	}

	/**
	 * Cancel Subscribe Request Parameters
	 *
	 * @return array
	 */
	private static function cancelSubscribeRequest() {
		return [
			'reason' => '-',
		];
	}

	/**
	 * Get payment redirect URL
	 *
	 * @return mixed
	 */
	public function get_redirect_url() {
		if ( self::$subscribe_response !== null ) {
			$url = [];
			foreach ( self::$subscribe_response->result->links as $link ) {
				$url[] = $link->href;
			}

			return $url[0];
		}

		return null;
	}

	public function get_response_message() {
		return self::$result;
	}
}
