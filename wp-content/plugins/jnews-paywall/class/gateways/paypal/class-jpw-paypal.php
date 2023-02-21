<?php

use JNews\Paywall\Gateways\Paypal\Paypal_Api;
use JNews\Paywall\Gateways\Paypal\Paypal_Api_Credentials;
use JNews\Paywall\Gateways\Paypal\Paypal_Api_Request;

/**
 * Class JPW_Paypal
 */
class JPW_Paypal extends WC_Payment_Gateway {

	/**
	 * @var null
	 */
	protected $order = null;

	/**
	 * @var array
	 */
	protected $api_credentials = [];

	/**
	 * @var string
	 */
	protected $receiver_email = '';

	/**
	 * @var string
	 */
	protected $payment_timezone = '';

	/**
	 * @var object $ipn_handler
	 */
	protected $ipn_handler;

	/**
	 * @class Constructor
	 */
	public function __construct() {
		$this->id                 = 'paypalsubscribe';
		$this->has_fields         = false;
		$this->GATEWAYNAME        = 'PayPal Subscribe';
		$this->method_title       = 'PayPal Subscribe';
		$this->method_description = esc_html__( 'Paypal Recurring Subscription settings for JNews Product', 'jnews-paywall' );
		$this->icon               = apply_filters( 'wcpprog_checkout_icon', JNEWS_PAYWALL_URL . '/assets/img/paypal.png' );
		$this->order_button_text  = esc_html__( 'Proceed to Paypal', 'jnews-paywall' );

		$this->init_form_fields();
		$this->init_settings();

		// The shop owner credentials
		$this->api_credentials['id']      = $this->get_option( 'paypalclientid' );
		$this->api_credentials['secret']  = $this->get_option( 'paypalclientsecret' );
		$this->api_credentials['sandbox'] = $this->get_option( 'paypalsandbox' );
		$this->receiver_email             = $this->get_option( 'receiveremail' );
		$this->payment_timezone           = $this->get_option( 'paymenttimezone' );

		$this->title = esc_html__( 'Paypal Subscription', 'jnews-paywall' );
		if ( $this->api_credentials['sandbox'] === 'yes' ) {
			$this->description = esc_html__( '(SANDBOX MODE). You will be redirected to paypal for subscription billing agreement.', 'jnews-paywall' );
		} else {
			$this->description = esc_html__( 'You will be redirected to paypal for subscription billing agreement.', 'jnews-paywall' );
		}

		add_action(
			'woocommerce_update_options_payment_gateways_' . $this->id,
			[
				$this,
				'process_admin_options',
			]
		);

		if ( $this->is_valid_for_use() ) {
			add_action( 'woocommerce_api_wc_gateway_paypal', [ $this, 'check_response' ], 0 );
		} else {
			$this->enabled = 'no';
		}
	}

	/**
	 * Check for PayPal IPN Response.
	 */
	public function check_response() {
		if ( ! empty( $_POST ) && $this->get_ipn_handler()->validate_ipn() ) { // WPCS: CSRF ok.
			$transaction_details = wp_unslash( $_POST ); // WPCS: CSRF ok, input var ok.
			$transaction_details = stripslashes_deep( $transaction_details );
	
			$type                = isset( $transaction_details['txn_type'] ) ? 'txn_type' : 'reason_code';
			$valid               = isset( $transaction_details['txn_type'] ) ? $this->get_ipn_handler()->validate_transaction_type( $transaction_details[ $type ] ) : $this->get_ipn_handler()->validate_reason_code( $transaction_details[ $type ] );
			
			if ( isset( $transaction_details[ $type ] ) ) {
				$order_id        = $this->get_ipn_handler()->get_order_id( $transaction_details );
				$order           = wc_get_order( $order_id );
				
				if ( ! empty( $order ) && 'paypalsubscribe' === $order->get_payment_method() ) {
					// phpcs:ignore WordPress.NamingConventions.ValidHookName.UseUnderscores
					if ( $valid ) {
						$this->process_ipn_request( $transaction_details );
					}
					exit;
				}
			}
		}
	}

	/**
	 * Get API object
	 *
	 * @return Jeg_Paypal_Api_Ipn_Handler|object
	 */
	public function get_ipn_handler() {
		include_once __DIR__ . '/lib/jpaypal/class-jeg-paypal-api-ipn-handler.php';
		$this->ipn_handler = new Jeg_Paypal_Api_Ipn_Handler( $this->api_credentials['sandbox'], $this->receiver_email, $this->get_payment_timezone() );

		return $this->ipn_handler;
	}

	/**
	 * Process PayPal IPN for paywal subscription
	 *
	 * @param array $transaction_details
	 * @sice 1.0.0
	 */
	public function process_ipn_request( $transaction_details ) {
		try {
			$type  = isset( $transaction_details['txn_type'] ) ? 'txn_type' : 'reason_code';
			$valid = isset( $transaction_details['txn_type'] ) ? $this->get_ipn_handler()->get_transaction_types() : $this->get_ipn_handler()->get_reason_code();
			if ( ( ! isset( $transaction_details[ $type ] ) || ! in_array( $transaction_details[ $type ], $valid, true ) ) ) {
				WC_Gateway_Paypal::log( 'Subscription Missing Parameters' );
				return;
			}
			if ( 'txn_type' === $type ) {
				WC_Gateway_Paypal::log( 'Subscription Transaction Type: ' . $transaction_details['txn_type'] );
				WC_Gateway_Paypal::log( 'Subscription Transaction Details: ' . print_r( $transaction_details, true ) );

				if ( in_array( $transaction_details['txn_type'], $this->get_ipn_handler()->get_transaction_types(), true ) ) {
					$this->get_ipn_handler()->valid_response( $transaction_details );
				}
			} else {
				WC_Gateway_Paypal::log( 'Subscription Reason Code : ' . $transaction_details['reason_code'] );
				WC_Gateway_Paypal::log( 'Subscription Transaction Details: ' . print_r( $transaction_details, true ) );

				if ( in_array( $transaction_details['reason_code'], $this->get_ipn_handler()->get_reason_code(), true ) ) {
					$this->get_ipn_handler()->valid_response( $transaction_details );
				}
			}
		} catch ( Exception $e ) {
			WC_Gateway_Paypal::log( $e->getMessage() );
		}
	}

	/**
	 * Get timezone information
	 *
	 * @return string
	 */
	public function get_timezone_information() {
		$timezone_format  = _x( 'Y-m-d H:i:s', 'timezone date format' );
		$timezone_detail  = '<p class="timezone-info">';
		$timezone_detail .= '<span id="utc-time">';
		$timezone_detail .= sprintf(
		/* translators: %s: UTC time. */
			esc_html__( 'Universal time is %s.' ),
			'<code>' . date_i18n( $timezone_format, false, true ) . '</code>'
		);
		$timezone_detail .= '</span></br>';

		if ( get_option( 'timezone_string' ) || ! empty( get_option( 'gmt_offset' ) ) ) {
			$timezone_detail .= '<span id="local-time">';
			$timezone_detail .= sprintf(
			/* translators: %s: Local time. */
				esc_html__( 'Local time is %s.', 'jnews-paywall' ),
				'<code>' . date_i18n( $timezone_format ) . '</code>'
			);
			$timezone_detail .= '</span></br>';
		}
		if ( ! empty( $this->get_option( 'paymenttimezone' ) ) ) {
			$timestamp        = time() + (int) jpw_timezone_offset( $this->get_option( 'paymenttimezone' ) );
			$timezone_detail .= '<span id="payment-time">';
			$timezone_detail .= sprintf(
			/* translators: %s: Payment time. */
				esc_html__( 'Payment time is %s.', 'jnews-paywall' ),
				'<code>' . date_i18n( $timezone_format, $timestamp ) . '</code>'
			);
			$timezone_detail .= '</span> ';
		}
		$timezone_detail .= '</p>';

		return $timezone_detail;
	}

	/**
	 * Create form fields to put client ID and Secret in the backend
	 */
	public function init_form_fields() {
		$global_timezone      = ! empty( get_option( 'gmt_offset' ) ) ? get_option( 'gmt_offset' ) : 0;
		$selected_timezone    = ! empty( $this->payment_timezone ) ? $this->payment_timezone : $global_timezone;
		$timezone_information = $this->get_timezone_information();

		$this->form_fields = [
			'paypalsandbox'      => [
				'title'       => esc_html__( 'Sandbox Mode', 'jnews-paywall' ),
				'type'        => 'checkbox',
				'description' => esc_html__( 'Are you using Paypal APP Sandbox? Check this option if you using Sandbox APP credentials.', 'jnews-paywall' ),
				'default'     => 'no',
			],
			'paypalclientid'     => [
				'title'       => esc_html__( 'PayPal APP Client ID', 'jnews-paywall' ),
				'type'        => 'text',
				'description' => esc_html__( 'Your PayPal app Client ID.', 'jnews-paywall' ),
				'default'     => '',
			],
			'paypalclientsecret' => [
				'title'       => esc_html__( 'PayPal APP Client Secret', 'jnews-paywall' ),
				'type'        => 'password',
				'description' => esc_html__( 'Your PayPal app Client Secret.', 'jnews-paywall' ),
				'default'     => '',
			],
			'receiveremail'      => [
				'title'       => esc_html__( 'Receiver email', 'jnews-paywall' ),
				'type'        => 'email',
				'description' => sprintf( __( 'Input your main receiver email for your PayPal account here. This is used to validate IPN requests. You must add the following webhook endpoint <strong style="background-color:#ddd;">&nbsp;%s&nbsp;</strong> to your <a href="https://www.paypal.com/cgi-bin/customerprofileweb?cmd=_profile-ipn-notify" target="_blank">Instant Payment Notifications settings</a>', 'jnews-paywall' ), home_url( '?wc-api=WC_Gateway_Paypal' ) ),
				'default'     => '',
				'placeholder' => 'you@youremail.com',
			],
			'paymenttimezone'    => [
				'title'       => esc_html__( 'Payment Timezone', 'jnews-paywall' ),
				'type'        => 'select',
				'description' => sprintf(
				/* translators: %s: Timezone Information. */
					esc_html__( 'Choose the Time zone to match the one set in your PayPal account. (PayPal > My Profile > My settings > Time zone) %s', 'jnews-paywall' ),
					$timezone_information
				),
				'default'     => $selected_timezone,
				'options'     => jpw_timezone_list(),
			],
		];
	}

	/**
	 * Check if this gateway is enabled and available in the user's country.
	 *
	 * @return bool
	 */
	public function is_valid_for_use() {
		return in_array(
			get_woocommerce_currency(),
			apply_filters(
				'woocommerce_paypal_supported_currencies',
				[
					'AUD',
					'BRL',
					'CAD',
					'MXN',
					'NZD',
					'HKD',
					'SGD',
					'USD',
					'EUR',
					'JPY',
					'TRY',
					'NOK',
					'CZK',
					'DKK',
					'HUF',
					'ILS',
					'MYR',
					'PHP',
					'PLN',
					'SEK',
					'CHF',
					'TWD',
					'THB',
					'GBP',
					'RMB',
					'RUB',
					'INR',
				]
			),
			true
		);
	}

	/**
	 * Process payment after user click Proceed to Paypal
	 *
	 * @param $order_id
	 *
	 * @return array
	 */
	public function process_payment( $order_id ) {
		$subscribe_request = new Paypal_Api( 'create', $this->api_credentials, $order_id );

		if ( $subscribe_request->get_redirect_url() !== null ) {
			return [
				'result'   => 'success',
				'redirect' => $subscribe_request->get_redirect_url(),
			];
		}

		return parent::process_payment( $order_id );
	}

	/**
	 * Check Subscribe Status
	 *
	 * @param $order_id
	 *
	 * @return int
	 */
	public function subscribe_status( $order_id ) {
		$order = wc_get_order( $order_id );

		if ( $order->get_payment_method() === 'paypalsubscribe' ) {
			$subscribe_status = new Paypal_Api( 'check', $this->api_credentials, $order_id );

			if ( ! empty( $subscribe_status ) ) {
				$response = $subscribe_status->get_response_message();

				if ( ! isset( $response->result ) ) {
					$this->subscribe_status( $order_id );

					return 0;
				}
				switch ( $response->result->status ) {
					case 'ACTIVE':
						update_user_option( get_current_user_id(), 'jpw_paypal_subs_id', get_post_meta( $order_id, 'subscription_id', true ) );
						$order->update_status( 'completed' );
						break;
					default:
						break;
				}
			}
		}
	}

	/**
	 * Get api credentials
	 *
	 * @return array
	 */
	public function get_api_credential() {
		return $this->api_credentials;
	}

	/**
	 * Get payment timezone
	 *
	 * @return int
	 * @since 1.0.0
	 */
	public function get_payment_timezone() {
		if ( ! empty( $this->payment_timezone ) ) {
			return (int) $this->payment_timezone;
		}

		return (int) $this->get_option( 'paymenttimezone' );
	}

}
