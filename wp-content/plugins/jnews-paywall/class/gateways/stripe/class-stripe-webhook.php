<?php
/**
 * Jeg_Stripe_Webhook_Handler
 *
 * @package namespace JNews\Paywall\Gateways\Stripe;
 * @author jegtheme
 * @since 1.0.0
 */

namespace JNews\Paywall\Gateways\Stripe;

use JNews\Paywall\Gateways\Stripe\Stripe_Api_Credentials;
use JNews\Paywall\Gateways\Stripe\Stripe_Api_Request;
use JNews\Paywall\Gateways\Stripe\Lib\Webhook;
use JNews\Paywall\Gateways\Stripe\Lib\Exception\Exception_Interface\Unexpected_Value_Exception;
use JNews\Paywall\Gateways\Stripe\Lib\Exception\Signature_Verification_Exception;
use DateTime;
use DateTimeZone;

/**
 * Class Stripe_Webhook
 */
class Stripe_Webhook {
	/**
	 * @var static
	 */
	protected static $credentials;

	/**
	 * Stripe_Webhook constructor.
	 *
	 * @since 7.0
	 */
	public function __construct( $credentials ) {
		self::$credentials = $credentials;
		add_action( 'jeg_paywall_api_stripe_webhook', [ $this, 'process_webhook' ], 0 );
	}

	/**
	 * Processes the incoming webhook.
	 *
	 * @since 7.0.0
	 * @version 7.0.0
	 */
	public function process_webhook() {
		Stripe_Api_Credentials::client( self::$credentials );

		$endpoint_secret = self::$credentials['webhook'];
		$payload         = @file_get_contents( 'php://input' );
		$sig_header      = $_SERVER['HTTP_STRIPE_SIGNATURE'];
		$event           = null;

		try {
			$event = Webhook::constructEvent(
				$payload,
				$sig_header,
				$endpoint_secret
			);
		} catch ( Unexpected_Value_Exception $e ) {
			// Invalid payload
			http_response_code( 400 );
			exit();
		} catch ( Signature_Verification_Exception $e ) {
			// Invalid signature
			http_response_code( 400 );
			exit();
		}

		$data = $event->data->object;

		// Return to Woocommerce if not JPW Subscribe
		if( ( empty( $data->metadata->subscription_type ) || 'jpw_subscribe' !== $data->metadata->subscription_type ) && ( empty( $data->metadata->unlock_type ) || 'jpw_unlock' !== $data->metadata->unlock_type ) && ( 'charge.refunded' !== $event->type ) ) {
			exit();
		} else {
			// Handle the notification
			switch ( $event->type ) {
				case 'customer.subscription.deleted':
					$this->jpw_process_subscription_deleted( $data );
					break;
				case 'customer.subscription.updated':
				case 'customer.subscription.created':
					$this->jpw_process_subscription_updated( $data );
					break;
				case 'payment_intent.succeeded':
					$this->jpw_process_payment_succeded( $data );
					break;
				case 'payment_intent.payment_failed':
					$this->jpw_process_payment_failed( $data );
					break;
				case 'charge.refunded':
					$this->jpw_process_charge_refunded( $data );
					break;
				default:
					break;
			}
		}

		exit();
	}

	/**
	 * Get metadata
	 *
	 * @return array
	 */
	public function jpw_get_metadata( $data ) {
		if ( empty( $data->metadata->order_id ) ) {
			header( 'HTTP/1.1 201' );
			echo json_encode( esc_html__( 'Could not find order id in metadata', 'jnews-paywall' ) );
			return false;
		}

		$order_id = $data->metadata->order_id;
		$order    = wc_get_order( $order_id );
		if ( ! $order ) {
			header( 'HTTP/1.1 201' );
			echo json_encode( sprintf( __( 'Could not find order id: $d', 'jnews-paywall' ), $order_id ) );
			return false;
		}

		$user_id = $order->get_user_id();
		if ( ! $order_id ) {
			header( 'HTTP/1.1 201' );
			echo json_encode( sprintf( __( 'Could not find user via order id %d', 'jnews-paywall' ), $order_id ) );
			return false;
		}

		return [ $order_id, $order, $user_id ];
	}

	/**
	 * Handle subcription deleted event
	 *
	 * @return null
	 */
	public function jpw_process_subscription_deleted( $data ) {
		$subs_id = $data->id;

		$metadata = $this->jpw_get_metadata( $data );
		if ( empty( $metadata ) ) {
			return;
		}

		$order_id = $metadata[0];
		$order    = $metadata[1];
		$user_id  = $metadata[2];

		if ( $subs_id !== get_user_option( 'jpw_stripe_subs_id', $user_id ) ) {
			header( 'HTTP/1.1 201' );
			echo json_encode( sprintf( __( 'Could not find subscription %d in user %s', 'jnews-paywall '), $subs_id, $user_id) );
			return;
		}

		update_user_option( $user_id, 'jpw_expired_date', false );
		update_user_option( $user_id, 'jpw_subscribe_status', false );

		$product_name  = $data->metadata->product;
		$customer_name = get_user_option( 'billing_first_name', $user_id ) . ' ' . get_user_option( 'billing_last_name', $user_id );

		header( 'HTTP/1.1 200' );
		echo json_encode( sprintf( __( 'Subscription for %s by %s has been canceled', 'jnews-paywall' ), $product_name, $customer_name) );

		return;
	}

	/**
	 * Handle subcription created & updated event
	 *
	 * @return null
	 */
	public function jpw_process_subscription_updated( $data ) {
		$subs_id = $data->id;

		$metadata = $this->jpw_get_metadata( $data );
		if ( empty( $metadata ) ) {
			return;
		}

		$order_id = $metadata[0];
		$order    = $metadata[1];
		$user_id  = $metadata[2];

		if ( $subs_id !== get_user_option( 'jpw_stripe_subs_id', $user_id ) ) {
			header( 'HTTP/1.1 201' );
			echo json_encode( sprintf( __( 'Could not find subscription %d in user %s', 'jnews-paywall' ), $subs_id, $user_id ) );
			return;
		}

		if ( 'active' === $data->status ) {
			$expired = new DateTime();
			$expired = $expired->setTimestamp( $data->current_period_end );
			$expired = $expired->setTimezone( new DateTimeZone( 'UTC' ) );
			$expired = $expired->format( 'Y-m-d H:i:s' );

			update_user_option( $user_id, 'jpw_expired_date', $expired );
			update_user_option( $user_id, 'jpw_subscribe_status', 'ACTIVE' );

			$order->update_status( 'completed' );

			$product_name  = $data->metadata->product;
			$customer_name = get_user_option( 'billing_first_name', $user_id ) . ' ' . get_user_option( 'billing_last_name', $user_id );

			header( 'HTTP/1.1 200' );
			echo json_encode( sprintf( __( 'Subscription for %s by %s has been activated', 'jnews-paywall' ), $product_name, $customer_name ) );
		} else {
			$this->jpw_process_subscription_deleted( $data );
		}

		return;
	}

	/**
	 * Handle payment succeded event
	 *
	 * @return null
	 */
	public function jpw_process_payment_succeded( $data ) {
		$payment_id = $data->id;

		$metadata = $this->jpw_get_metadata( $data );
		if ( empty( $metadata ) ) {
			return;
		}

		$order_id = $metadata[0];
		$order    = $metadata[1];
		$user_id  = $metadata[2];

		if ( ! $order->has_status( 'completed' ) ) {
			$order->update_status( 'completed' );
		}
		
		$customer_name = get_user_option( 'billing_first_name', $user_id ) . ' ' . get_user_option( 'billing_last_name', $user_id );

		header( 'HTTP/1.1 200' );
		echo json_encode( sprintf( __( 'Order by %s has completed', 'jnews-paywall' ), $customer_name ) );

		return;
	}

	/**
	 * Handle payment failed event
	 *
	 * @return null
	 */
	public function jpw_process_payment_failed( $data ) {
		$payment_id = $data->id;

		$metadata = $this->jpw_get_metadata( $data );
		if ( empty( $metadata ) ) {
			return;
		}

		$order_id = $metadata[0];
		$order    = $metadata[1];
		$user_id  = $metadata[2];
		
		$order->update_status( 'failed' );
		
		$customer_name = get_user_option( 'billing_first_name', $user_id ) . ' ' . get_user_option( 'billing_last_name', $user_id );

		header( 'HTTP/1.1 200' );
		echo json_encode( sprintf( __( 'Order by %s has failed', 'jnews-paywall' ), $customer_name) );

		return;
	}

	/**
	 * Handle refund payment
	 *
	 * @return null
	 */
	public function jpw_process_charge_refunded( $data ) {
		$payment_id = $data->payment_intent;
		$order_id	= $this->get_order_id( $payment_id );
		$order		= wc_get_order( $order_id );
		$user_id 	= $order->get_user_id();
		$subs_id 	= get_user_option( 'jpw_stripe_subs_id', $user_id );

		// If subscription, cancel the subscription
		if( $subs_id ) {
			foreach ( $order->get_items() as $item_id => $item ) {
				$product = wc_get_product( $item['product_id'] );
				if ( $product->is_type( 'paywall_subscribe' ) ) {
					Stripe_Api_Credentials::client( self::$credentials );
					$stripe		= new Stripe_Api_Request( 'cancel_subscription', $subs_id );
				}
			}
		}
		
		$order->update_status( 'refunded' );
		
		$customer_name = get_user_option( 'billing_first_name', $user_id ) . ' ' . get_user_option( 'billing_last_name', $user_id );

		header( 'HTTP/1.1 200' );
		echo json_encode( sprintf( __( 'Payment for order by %s has refunded', 'jnews-paywall' ), $customer_name) );

		return;
	}

	/**
	 * Check for order id from subscription_id
	 *
	 * @param array  $args Transaction Details.
	 * @param string $order_type
	 * @param string $meta_key
	 *
	 * @return bool
	 * @since 1.0.0
	 */
	public function get_order_id( $args, $order_type = 'shop_order', $meta_key = 'jpw_stripe_payment_id' ) {
		$order_id = '';

		if ( isset( $args ) ) {
			$payment_id = $args;
		} else {
			$payment_id = '';
		}

		// First try and get the order ID by the subscription ID.
		if ( ! empty( $payment_id ) ) {

			$posts = get_posts(
				[
					'numberposts'      => 1,
					'orderby'          => 'ID',
					'order'            => 'ASC',
					'meta_key'         => $meta_key,
					'meta_value'       => $payment_id,
					'post_type'        => $order_type,
					'post_status'      => 'any',
					'suppress_filters' => true,
				]
			);

			if ( ! empty( $posts ) ) {
				$order_id = $posts[0]->ID; // Order ID.
			}
		}

		return $order_id;
	}

}
