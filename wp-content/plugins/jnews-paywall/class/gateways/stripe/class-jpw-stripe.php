<?php

use JNews\Paywall\Gateways\Stripe\Stripe_Api;
use JNews\Paywall\Gateways\Stripe\Stripe_Api_Credentials;
use JNews\Paywall\Gateways\Stripe\Stripe_Api_Request;
use JNews\Paywall\Gateways\Stripe\Stripe_Helper;
use JNews\Paywall\Gateways\Stripe\Stripe_Webhook;

/**
 * JPW_Stripe class.
 *
 * @extends WC_Payment_Gateway
 */
class JPW_Stripe extends WC_Payment_Gateway {
	
	/**
	 * @var array
	 */
	protected $api_credentials = [];

	/**
	 * Constructor
	 */
	public function __construct() {
		$this->id                 					   = 'stripepaywall';
		$this->has_fields         					   = true;
		$this->GATEWAYNAME        					   = 'Stripe (Credit Card)';
		$this->method_title       					   = 'Stripe (Credit Card)';
		$this->method_description 					   = esc_html__( 'Stripe Payment settings for JNews Product', 'jnews-paywall' );
		$this->order_button_text  					   = esc_html__( 'Place Order', 'jnews-paywall' );
		$this->supports           					   = [
			'tokenization',
			'add_payment_method',
		];

		$this->init_form_fields();
		$this->init_settings();

		// The shop owner credentials
		$this->api_credentials['webhook'] 		       = $this->get_option( 'webhookkey' );

		$this->helper 								   = new Stripe_Helper();
		$this->title 			  					   = esc_html__( 'Stripe (Credit Card)', 'jnews-paywall' );
		$this->testmode 		  					   = $this->get_option( 'testmode' );
		$this->statement_descriptor 		  		   = $this->helper->statement_descriptor( $this->get_option( 'statement_descriptor' ) );

		if ( $this->testmode === 'yes' ) {
			$this->description 						   = sprintf( __( '(TEST MODE) Pay with your credit card via Stripe. In test mode, you can use the card number 4242424242424242 with any CVC and a valid expiration date or check the <a href="%s" target="_blank">Testing Stripe documentation</a> for more card numbers.', 'jnews-paywall' ), 'https://stripe.com/docs/testing' );
			$this->api_credentials['publishable']      = $this->get_option( 'publishabletestkey' );
			$this->api_credentials['secret']  		   = $this->get_option( 'secrettestkey' );
		} else {
			$this->description 						   = esc_html__( 'Pay with your credit card via Stripe.', 'jnews-paywall' );
			$this->api_credentials['publishable']      = $this->get_option( 'publishablelivekey' );
			$this->api_credentials['secret']  		   = $this->get_option( 'secretlivekey' );
		}

		// Hooks.
		add_action( 'wp_enqueue_scripts', [ $this, 'payment_scripts' ] );
		add_action(
			'woocommerce_update_options_payment_gateways_' . $this->id,
			[
				$this,
				'process_admin_options',
			]
		);

		if ( $this->is_valid_for_use() ) {
			$this->webhook_handler();
		} else {
			$this->enabled = 'no';
		}
	}

	/**
	 * Setup webhook
	 *
	 * @return array
	 */
	public function webhook_handler() {
		include_once dirname( __FILE__ ) . '/class-stripe-webhook.php';
		new Stripe_Webhook( $this->get_api_credential() );
	}

	/**
	 * Initialise Gateway Settings Form Fields
	 */
	public function init_form_fields() {
		$this->form_fields = apply_filters(
			'woocommerce_stripepaywall_settings',
			[
				'testmode'      		=> [
					'title'       		=> esc_html__( 'Test Mode', 'jnews-paywall' ),
					'type'        		=> 'checkbox',
					'description' 		=> esc_html__( 'Are you using Stripe Test Mode? Check this option if you using Stripe Test Mode.', 'jnews-paywall' ),
					'default'     		=> 'no',
				],
				'publishabletestkey'    => [
					'title'       		=> esc_html__( 'Test Publishable Key', 'jnews-paywall' ),
					'type'        		=> 'text',
					'description' 		=> esc_html__( 'Your Test Mode Publishable Key.', 'jnews-paywall' ),
					'default'     		=> '',
				],
				'secrettestkey'     	=> [
					'title'       		=> esc_html__( 'Test Secret Key', 'jnews-paywall' ),
					'type'        		=> 'text',
					'description' 		=> esc_html__( 'Your Test Mode Secret Key.', 'jnews-paywall' ),
					'default'     		=> '',
				],
				'publishablelivekey'    => [
					'title'       		=> esc_html__( 'Live Publishable Key', 'jnews-paywall' ),
					'type'        		=> 'text',
					'description' 		=> esc_html__( 'Your Live Mode Publishable Key.', 'jnews-paywall' ),
					'default'     		=> '',
				],
				'secretlivekey'     	=> [
					'title'       		=> esc_html__( 'Live Secret Key', 'jnews-paywall' ),
					'type'        		=> 'text',
					'description' 		=> esc_html__( 'Your Live Mode Secret Key.', 'jnews-paywall' ),
					'default'     		=> '',
				],
				'webhookkey'     		=> [
					'title'       		=> esc_html__( 'Webhook Key', 'jnews-paywall' ),
					'type'        		=> 'text',
					'description' 		=> sprintf( __( 'Your Webhook Key. You must add the following webhook endpoint <strong style="background-color:#ddd;">&nbsp;%s&nbsp;</strong> to your <a href="https://dashboard.stripe.com/account/webhooks" target="_blank">Stripe account settings</a>.', 'jnews-paywall' ), home_url( '/?jeg-paywall=stripe_webhook' ) ),
					'default'     		=> '',
				],
				'statement_descriptor'  => [
					'title'       		=> esc_html__( 'Statement Descriptor', 'jnews-paywall' ),
					'type'        		=> 'text',
					'description' 		=> esc_html__( 'Your Statement Descriptor. Statement descriptors are limited to 22 characters, cannot use the special characters >, <, ", \, \', *, and must not consist solely of numbers. This will appear on your customer\'s statement in capital letters.', 'jnews-paywall' ),
					'default'     		=> '',
				],
			]
		);
	}

	/**
	 * Get Card Type Icons
	 */
	public function get_icon() {
		$icons = apply_filters(
			'jpw_stripe_payment_icons',
			[
				'visa'       => '<img src="' . JNEWS_PAYWALL_URL . '/assets/img/visa.svg" alt="Visa" />',
				'amex'       => '<img src="' . JNEWS_PAYWALL_URL . '/assets/img/amex.svg" alt="American Express" />',
				'mastercard' => '<img src="' . JNEWS_PAYWALL_URL . '/assets/img/mastercard.svg" alt="Mastercard" />',
				'discover'   => '<img src="' . JNEWS_PAYWALL_URL . '/assets/img/discover.svg" alt="Discover" />',
				'diners'     => '<img src="' . JNEWS_PAYWALL_URL . '/assets/img/diners.svg" alt="Diners" />',
				'jcb'        => '<img src="' . JNEWS_PAYWALL_URL . '/assets/img/jcb.svg" alt="JCB" />',
			]
		);

		$icons_str = '';

		$icons_str .= isset( $icons['visa'] ) ? $icons['visa'] : '';
		$icons_str .= isset( $icons['amex'] ) ? $icons['amex'] : '';
		$icons_str .= isset( $icons['mastercard'] ) ? $icons['mastercard'] : '';

		if ( 'USD' === get_woocommerce_currency() ) {
			$icons_str .= isset( $icons['discover'] ) ? $icons['discover'] : '';
			$icons_str .= isset( $icons['jcb'] ) ? $icons['jcb'] : '';
			$icons_str .= isset( $icons['diners'] ) ? $icons['diners'] : '';
		}

		return apply_filters( 'woocommerce_gateway_icon', $icons_str, $this->id );
	}

	/**
	 * Check if this gateway is valid for use.
	 *
	 * @return bool
	 */
	public function is_valid_for_use() {
		$supported_currencies = [
			'USD', 'AED', 'AFN', 'ALL', 'AMD', 'ANG', 'AOA', 'ARS', 'AUD', 'AWG', 'AZN', 'BAM', 'BBD', 'BDT', 'BGN', 'BIF', 'BMD', 'BND', 'BOB', 'BRL', 'BSD', 'BWP', 'BZD', 'CAD', 'CDF', 'CHF', 'CLP',
			'CNY', 'COP', 'CRC', 'CVE', 'CZK', 'DJF', 'DKK', 'DOP', 'DZD', 'EGP', 'ETB', 'EUR', 'FJD', 'FKP', 'GBP', 'GEL', 'GIP', 'GMD', 'GNF', 'GTQ', 'GYD', 'HKD', 'HNL', 'HRK', 'HTG', 'HUF', 'IDR',
			'ILS', 'INR', 'ISK', 'JMD', 'JPY', 'KES', 'KGS', 'KHR', 'KMF', 'KRW', 'KYD', 'KZT', 'LAK', 'LBP', 'LKR', 'LRD', 'LSL', 'MAD', 'MDL', 'MGA', 'MKD', 'MMK', 'MNT', 'MOP', 'MRO', 'MUR', 'MVR',
			'MWK', 'MXN', 'MYR', 'MZN', 'NAD', 'NGN', 'NIO', 'NOK', 'NPR', 'NZD', 'PAB', 'PEN', 'PGK', 'PHP', 'PKR', 'PLN', 'PYG', 'QAR', 'RON', 'RSD', 'RUB', 'RWF', 'SAR', 'SBD', 'SCR', 'SEK', 'SGD',
			'SHP', 'SLL', 'SOS', 'SRD', 'STD', 'SZL', 'THB', 'TJS', 'TOP', 'TRY', 'TTD', 'TWD', 'TZS', 'UAH', 'UGX', 'UYU', 'UZS', 'VND', 'VUV', 'WST', 'XAF', 'XCD', 'XOF', 'XPF', 'YER', 'ZAR', 'ZMW'
		];

		// Not supported currency
		if ( ! in_array( get_woocommerce_currency(), $supported_currencies ) ) {
			return false;
		}

		// If no SSL in live mode.
		if ( ! $this->testmode && ! is_ssl() ) {
			return false;
		}

		// Keys are not set
		if ( empty( $this->api_credentials['secret'] ) || empty( $this->api_credentials['publishable'] ) ) {
			return false;
		}

		return true;
	}
	
	/**
	 * Get api credentials
	 *
	 * @return array
	 */
	public function get_api_credential() {
		$api_credentials = [
			'publishable'	=> $this->api_credentials['publishable'],
			'secret'		=> $this->api_credentials['secret'],
			'webhook'		=> $this->api_credentials['webhook']
		];
		return $api_credentials;
	}

	/**
	 * Check if payment is enabled.
	 *
	 * @return boolean
	 */
	public function is_enabled() {
		return 'yes' === $this->enabled;
	}

	/**
	 * Register Stripe JS.
	 * 
	 * @since 1.0.0
	 * @version 1.0.0
	 */
	public function payment_scripts() {
		// If not checkout page
		if ( ! is_checkout() && ! is_wc_endpoint_url( 'add-paywall-method' ) ) {
			return;
		}

		// If not valid.
		if ( ! $this->is_valid_for_use() ) {
			return;
		}

		wp_register_script( 'stripe', 'https://js.stripe.com/v3/', '', '3.0', true );
		wp_enqueue_script( 'stripe' );

		wp_register_script( 'jpw_stripe', JNEWS_PAYWALL_URL . '/assets/js/stripe.js', '', JNEWS_PAYWALL_VERSION, true );
		wp_enqueue_script( 'jpw_stripe' );

		wp_register_style( 'jpw_stripe_styles', JNEWS_PAYWALL_URL . '/assets/css/stripe-styles.css', array(), JNEWS_PAYWALL_VERSION );
		wp_enqueue_style( 'jpw_stripe_styles' );

		$stripe_params = [
			'key'						=> $this->api_credentials['publishable'],
			'is_checkout'				=> ( is_checkout() && empty( $_GET['pay_for_order'] ) ) ? 'yes' : 'no',
			'is_add_paywall_payment'	=> is_wc_endpoint_url( 'add-paywall-method' ),
			'country'					=> WC()->countries->get_base_country(),
			'currency'					=> strtolower( get_woocommerce_currency() ),
			'sepa_mandate_notification'	=> apply_filters( 'jpw_mandate_sepa', 'email' ),
			'file_path'					=> JNEWS_PAYWALL_URL . '/class/gateways/stripe/class-jpw-stripe.php',
			'paywall_method_url'		=> wc_get_endpoint_url( 'paywall-method' ),
			'statement_descriptor'		=> $this->statement_descriptor,
		];

		if ( isset( $_GET[ 'pay_for_order' ] ) && isset( $_GET[ 'key' ] ) ) {
			$order_id 	= wc_get_order_id_by_order_key( wc_clean( wp_unslash( (int) sanitize_text_field( $_GET['key'] ) ) ) );
			$order 		= wc_get_order( $order_id );

			if ( is_a( $order, 'WC_Order' ) ) {
				$stripe_params = array_merge( $stripe_params, [
					'billing_first_name' => $order->get_billing_first_name(),
					'billing_last_name'  => $order->get_billing_last_name(),
					'billing_address_1'  => $order->get_billing_address_1(),
					'billing_address_2'  => $order->get_billing_address_2(),
					'billing_state'      => $order->get_billing_state(),
					'billing_city'       => $order->get_billing_city(),
					'billing_postcode'   => $order->get_billing_postcode(),
					'billing_country'    => $order->get_billing_country(),
					'billing_email' 	 => $order->get_billing_email(),
					'billing_phone'		 => $order->get_billing_phone(),
				] );
			}
		}

		if ( is_wc_endpoint_url( 'add-paywall-method' ) ) {
			$customer 	= new WC_Customer( get_current_user_id() );

			$stripe_params = array_merge( $stripe_params, [
				'billing_first_name' 	=> $customer->get_billing_first_name(),
				'billing_last_name'  	=> $customer->get_billing_last_name(),
				'billing_address_1'  	=> $customer->get_billing_address_1(),
				'billing_address_2'  	=> $customer->get_billing_address_2(),
				'billing_state'     	=> $customer->get_billing_state(),
				'billing_city'       	=> $customer->get_billing_city(),
				'billing_postcode'   	=> $customer->get_billing_postcode(),
				'billing_country'    	=> $customer->get_billing_country(),
				'billing_email' 	 	=> $customer->get_billing_email(),
				'billing_phone'		 	=> $customer->get_billing_phone(),
			] );
		}

		$stripe_params = array_merge( $stripe_params, $this->helper->get_messages() );

		wp_localize_script( 'jpw_stripe', 'jpw_stripe_params', apply_filters( 'jpw_stripe_params', $stripe_params ) );

	}

	/**
	 * Payment Fields.
	 * 
	 */
	public function payment_fields() {
		ob_start();

		print($this->description);

		$cards = null;

		if( get_user_option( 'jpw_stripe_customer_id', get_current_user_id() ) ) {
			$cards = new Stripe_Api( 'check_source', $this->get_api_credential(), null, null, get_user_option( 'jpw_stripe_customer_id', get_current_user_id() ) );
			$cards = $cards->get_response_message();
		}

		$count_cards = 0;
		if( $cards ) {
			$count_cards = count( $cards->data );
		}

		?>

		<ul class="jpw-saved-payment-methods" data-count="<?php echo $count_cards ?>">
			<?php if ( ( 0 < $count_cards ) && ( ! is_wc_endpoint_url( 'add-paywall-method' ) ) ) : ?>
				<?php foreach ( $cards->data as $card ): ?>
					<li class="jpw-saved-payment-methods-sources">
						<input id="jpw-stripe-payment-<?php echo $card->id ?>" type="radio" name="jpw-stripe-payment-source" value="<?php echo $card->id ?>" style="width:auto;" class="jpw-stripe-payment-tokenInput">
						<label for="jpw-stripe-payment-<?php echo $card->id ?>"><?php echo sprintf( __( '%s ending in %s', 'jnews-paywall' ), $card->card->brand, $card->card->last4 );?></label>
					</li>
				<?php endforeach ?>
				<li class="jpw-saved-payment-methods-new">
					<input id="jpw-stripe-payment-source-new" type="radio" name="jpw-stripe-payment-source" value="new" style="width:auto;" class="jpw-stripe-payment-tokenInput" checked="checked">
					<label for="jpw-stripe-payment-source-new"><?php echo esc_html__( 'Use a new payment method.', 'jnews-paywall' ) ?></label>
				</li>
			<?php endif; ?>
		</ul>

		<div id="card-element" class="stripe-card-element" style="display:none;">
		<!-- Elements will create input elements here -->
		</div>

		<!-- Save payment method checkbox -->
		<?php if ( ! is_wc_endpoint_url( 'add-paywall-method' ) ) : ?>
			<?php if ( is_jpw_unlock() ) : ?>
				<p class="form-row jpw-save-payment-method" style="display:none;">
					<input id="jpw-stripe-new-payment-method" name="jpw-stripe-new-payment-method" type="checkbox" value="true" style="width:auto;">
					<label for="jpw-stripe-new-payment-method" style="display:inline;"><?php echo esc_html__( 'Save payment information to my account for future purchases.', 'jnews-paywall' ) ?></label>
				</p>
			<?php endif; ?>

			<?php if ( is_jpw_subscribe() ) : ?>
				<div class="stripe-info-message jpw-save-payment-method" style="display:none;">
					<i class="fa fa-info-circle"></i><?php echo esc_html__( 'Your card will be saved for future subscription payment.', 'jnews-paywall' ) ?>
				</div>
			<?php endif; ?>
		<?php endif; ?>

		<!-- We'll put the error messages in this element -->
		<div id="card-errors" role="alert"></div>
		
		<?php
		ob_end_flush();
	}

	/**
	 * Process payment after user click Place Order
	 *
	 * @param $order_id
	 *
	 * @return array
	 */
	public function process_payment( $order_id ) {
		try {
			$order = wc_get_order( $order_id );
			$source = sanitize_text_field( $_POST[ 'stripe_source' ] );
			$intent = null;

			if( ! $source ) {
				throw new \Exception( esc_html__( 'Payment failed. Please try again later or use another card', 'jnews-paywall' ) );
			}

			if( is_jpw_subscribe() ) {
				// Check if payment has setup
				if ( ! $order->get_meta( 'jpw_stripe_payment_id' ) ) {
					$subscription = new Stripe_Api( 'create_subscription', $this->get_api_credential(), $order_id, $source, null );
					$subscription = $subscription->get_response_message();
	
					if ( ! empty( $subscription->latest_invoice->payment_intent->id ) ) {
						$intent = new Stripe_Api( 'update_intent', $this->get_api_credential(), $order_id, null, $subscription->latest_invoice->payment_intent->id );
						$intent = $intent->get_response_message();
					}
				} else {
					$subscription = new Stripe_Api( 'update_subscription', $this->get_api_credential(), $order_id, $source, null );
					$subscription = $subscription->get_response_message();

					$intent = new Stripe_Api( 'update_intent', $this->get_api_credential(), $order_id, $source, $order->get_meta( 'jpw_stripe_payment_id' )  );
					$intent = $intent->get_response_message();
				}
			} elseif ( is_jpw_unlock() ) {
				// Check if payment has setup
				if ( ! $order->get_meta( 'jpw_stripe_payment_id' ) ) {
					$intent = new Stripe_Api( 'create_payment', $this->get_api_credential(), $order_id, $source, null );
					$intent = $intent->get_response_message();
				} else {
					$intent = new Stripe_Api( 'update_payment', $this->get_api_credential(), $order_id, $source, null );
					$intent = $intent->get_response_message();
				}
			} else {
				throw new \Exception( esc_html__( 'Invalid payment gateway', 'jnews-paywall' ) );
			}

			if ( ! empty( $intent ) ) {
				if ( 'requires_confirmation' === $intent->status ) {
					$intent = new Stripe_Api( 'confirm_intent', $this->get_api_credential(), $order_id, $source, $intent->id );
					$intent = $intent->get_response_message();
				}

				if ( 'requires_action' === $intent->status ) {
					return [
						'result'                => 'success',
						'redirect'              => wc_get_checkout_url() . '#jpw-stripe-confirm-pi-' . $intent->client_secret . ':' . $this->get_return_url( $order ),
					];
				}
			}

			// Check final payment
			$charges = new Stripe_Api( 'check_charge', $this->get_api_credential(), $order_id, $source, $intent->charges->data[0]->id );
			$charges = $charges->get_response_message();
				
			if( 'failed' === $charges->status ) {
				throw new \Exception( esc_html__( 'Payment failed. Please try again later or use another card', 'jnews-paywall' ) );
			}

			if( 'pending' === $charges->status ) {
				$order->update_status( 'on-hold', sprintf( __( 'Stripe charge awaiting payment: %s.', 'jnews-paywall' ), $charges->id ) );
			}

			if( 'succeeded' === $charges->status ) {
				$order->payment_complete();
				// Trigger send email
				if ( ! empty( $intent->id ) && ! empty( $intent->receipt_email ) ) {
					new Stripe_Api( 'send_email', $this->get_api_credential(), null, null, [ 'id' => $intent->id, 'email' => $intent->receipt_email ] );
				}
			}
			
			// Remove cart.
			WC()->cart->empty_cart();

			// Return thank you page redirect.
			return [
				'result'   => 'success',
				'redirect' => $this->get_return_url( $order ),
			];
		} catch ( Exception $e ) {
			$order->update_status( 'failed' );
			/* translators: error message */
		    throw new Exception( $e->getMessage() );
		}
	}

	/**
	 * Add payment method
	 *
	 * @return array
	 */
	public function add_payment_method() {
		try {
			$success 			= true;
			$source 			= sanitize_text_field( $_POST[ 'stripe_source' ] );
			
			if( $source ) {
				$request 		= new Stripe_Api( 'add_source', $this->get_api_credential(), null, null, $source );
				$response 		= $request->get_response_message();
				if ( ! $response ) {
					$success	= false;
				}
			} else {
				$success		= false;
			}

			if ( $success ) {
				return [
					'result'   		=> 'success',
					'redirect' 		=> wc_get_endpoint_url( 'paywall-method' ),
				];
			} else {
				throw new \Exception( 'failure' );
			}
		} catch ( Exception $e ) {
			return [
				'result'   		=> 'failure',
				'redirect' 		=> '',
			];
		}
	}

}
