<?php
/**
 * Jeg_Paypal_Api_Http_Client
 *
 * @author jegtheme
 * @since 1.0.0
 */

use JNews\Paywall\Gateways\Paypal\Paypal_Api;

/**
 * Class Jeg_Paypal_Api_Ipn_Handler
 */
class Jeg_Paypal_Api_Ipn_Handler extends WC_Gateway_Paypal_IPN_Handler {

	/**
	 * Transaction types this class can handle.
	 * TODO: Check another transcation type
	 *
	 * @var array transaction types
	 */
	protected $transaction_types = [
		'recurring_payment', // Recurring payment success.
		'recurring_payment_profile_cancel', // Recurring payment canceled by subscriber.
		'recurring_payment_failed', // Recurring payment failed.
	];

	/**
	 * Reason code this class can handle.
	 * TODO: Check another reason code
	 *
	 * @var array transaction types
	 */
	protected $reason_code = [
		'refund', // Recurring payment refunded.
	];

	/**
	 * Used PayPal payment timezone
	 *
	 * @var null
	 */
	protected $payment_timezone;

	/**
	 * Jeg_Paypal_Api_Ipn_Handler constructor.
	 *
	 * @param string $sandbox Use sandbox or not.
	 * @param string $receiver_email Email to receive IPN from.
	 * @param null   $payment_timezone
	 */
	public function __construct( $sandbox = null, $receiver_email = null, $payment_timezone = null ) {
		$this->receiver_email   = $receiver_email;
		$this->sandbox          = $sandbox === 'yes';
		$this->payment_timezone = $payment_timezone;
	}

	/**
	 * There was a valid response.
	 *
	 * @param array $transaction_details
	 *
	 * @throws Exception If subscription id is not found.
	 */
	public function valid_response( $transaction_details ) {
		$transaction_details          = stripslashes_deep( $transaction_details );
		$type                         = isset( $transaction_details['txn_type'] ) ? 'txn_type' : 'reason_code';
		$transaction_details[ $type ] = strtolower( $transaction_details[ $type ] );

		$order_id        = $this->get_order_id( $transaction_details );
		$order           = wc_get_order( $order_id );
		$user_id         = $order ? $order->get_user_id() : '';
		$subscription_id = get_user_option( 'jpw_paypal_subs_id', $user_id );

		if ( empty( $order_id ) ) {
			$message = 'Subscription IPN Error: Could not find matching Subscription.';
			WC_Gateway_Paypal::log( $message );
			throw new Exception( $message );
		}

		if ( $transaction_details['recurring_payment_id'] !== $subscription_id ) {
			WC_Gateway_Paypal::log( 'Subscription IPN Error: Subscription Key does not match user subscription.' );
			exit;
		}

		if ( $order->get_payment_method() !== 'paypalsubscribe' ) {
			WC_Gateway_Paypal::log( 'IPN ignored, recurring payment method has changed.' );
			exit;
		}

		if ( isset( $transaction_details['txn_type'] ) ) {
			switch ( $transaction_details['txn_type'] ) {
				case 'recurring_payment':
					$expired = new DateTime();
					$expired->setTimezone( new DateTimeZone( 'UTC' ) );
					$expired = $expired->format( 'Y-m-d H:i:s' );
					if ( isset( $transaction_details['next_payment_date'] ) ) {
						$next_payment_date = $transaction_details['next_payment_date'];
						$expired           = ! empty( $next_payment_date ) ? new DateTime( $next_payment_date ) : $expired;
						if ( is_object( $expired ) ) {
							$expired->setTimezone( new DateTimeZone( 'UTC' ) );
							$expired = $expired->format( 'Y-m-d H:i:s' );
						}
					}

					update_user_option( $user_id, 'jpw_subscribe_status', 'ACTIVE' );
					update_user_option( $user_id, 'jpw_expired_date', $expired );
					break;
				case 'recurring_payment_profile_cancel':
					update_user_option( $user_id, 'jpw_subscribe_status', false );
					update_user_option( $user_id, 'jpw_expired_date', false );
					break;
				case 'recurring_payment_failed': // Auto cancel a recurring payment if failed due to insufficient balance.
					if ( class_exists( 'WC_Payment_Gateway' ) ) {
						$credentials      = new \JPW_Paypal();
						$subscribe_cancel = new Paypal_Api( 'cancel', $credentials->get_api_credential() );
						if ( $subscribe_cancel->get_response_message() == '204' ) {
							update_user_option( $user_id, 'jpw_subscribe_status', false );
							update_user_option( $user_id, 'jpw_expired_date', false );
						}
					}
					break;
			}
		}

		if ( isset( $transaction_details['reason_code'] ) ) {
			switch ( $transaction_details['reason_code'] ) {
				case 'refund':
					update_user_option( $user_id, 'jpw_subscribe_status', false );
					update_user_option( $user_id, 'jpw_expired_date', false );
					break;
			}
		}
	}

	/**
	 * Return valid transaction types
	 *
	 * @return array
	 * @since 1.0.0
	 */
	public function get_transaction_types() {
		return $this->transaction_types;
	}

	/**
	 * Return valid reason code
	 *
	 * @return array
	 * @since 1.0.0
	 */
	public function get_reason_code() {
		return $this->reason_code;
	}

	/**
	 * Check for a valid transaction type
	 *
	 * @param string $txn_type
	 *
	 * @return bool
	 * @since 1.0.0
	 */
	public function validate_transaction_type( $txn_type = null ) {
		$flag = false;
		if ( null !== $txn_type ) {
			$txn_type = strtolower( $txn_type );
			if ( in_array( $txn_type, $this->get_transaction_types(), true ) ) {
				$flag = true;
			}
		}

		return $flag;
	}

	/**
	 * Check for a valid reason code
	 *
	 * @param string $reason_code
	 *
	 * @return bool
	 * @since 1.0.0
	 */
	public function validate_reason_code( $reason_code = null ) {
		$flag = false;
		if ( null !== $reason_code ) {
			$reason_code = strtolower( $reason_code );
			if ( in_array( $reason_code, $this->get_reason_code(), true ) ) {
				$flag = true;
			}
		}

		return $flag;
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
	public function get_order_id( $args, $order_type = 'shop_order', $meta_key = 'subscription_id' ) {
		$order_id = '';

		if ( isset( $args['recurring_payment_id'] ) ) {
			$subscription_id = $args['recurring_payment_id'];
		} else {
			$subscription_id = '';
		}

		// First try and get the order ID by the subscription ID.
		if ( ! empty( $subscription_id ) ) {

			$posts = get_posts(
				[
					'numberposts'      => 1,
					'orderby'          => 'ID',
					'order'            => 'ASC',
					'meta_key'         => $meta_key,
					'meta_value'       => $subscription_id,
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
