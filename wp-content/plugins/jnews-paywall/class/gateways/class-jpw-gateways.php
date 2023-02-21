<?php

/**
 * Class JPW_Gateways
 */
class JPW_Gateways {
	/**
	 * @var JPW_Gateways
	 */
	private static $instance;

	/**
	 * Listener Endpoint
	 *
	 * @var $endpoint
	 */
	private $endpoint;

	/**
	 * JPW_Gateways constructor.
	 */
	private function __construct() {
		$this->setup_endpoint();
		add_action( 'plugins_loaded', [ $this, 'gateway_handler' ], 99 );
		add_action( 'init', [ $this, 'add_endpoint' ], 0 );
		add_filter( 'query_vars', [ $this, 'add_query_vars' ], 0 );
		add_action( 'parse_request', [ $this, 'handle_api_requests' ], 0 );

		// Disable sale price for subscription.
		add_filter( 'woocommerce_product_get_price', [ $this, 'disable_sale_price_subscription' ], null, 2 );
		add_filter( 'woocommerce_product_get_sale_price', [ $this, 'disable_sale_price_subscription' ], null, 2 );
	}

	/**
	 * @return JPW_Gateways
	 */
	public static function instance() {
		if ( null === static::$instance ) {
			static::$instance = new static();
		}

		return static::$instance;
	}

	/**
	 * API request - Trigger any API requests.
	 *
	 * @since   1.0.0
	 */
	public function handle_api_requests() {
		global $wp;

		if ( ! empty( $_GET[ $this->endpoint ] ) ) { // phpcs:ignore WordPress.Security.NonceVerification
			$wp->query_vars[ $this->endpoint ] = sanitize_key( wp_unslash( $_GET[ $this->endpoint ] ) ); // phpcs:ignore WordPress.Security.NonceVerification
		}

		// endpoint requests.
		if ( ! empty( $wp->query_vars[ $this->endpoint ] ) ) {

			// Buffer, we won't want any output here.
			ob_start();

			// No cache headers.
			wc_nocache_headers();

			// Clean the API request.
			$api_request = strtolower( wc_clean( $wp->query_vars[ $this->endpoint ] ) );

			if ( class_exists( 'WC_Payment_Gateway' ) ) {
				WC()->payment_gateways();
			}
			
			// Trigger generic action before request hook.
			do_action( 'jeg_paywall_api_request', $api_request );

			// Is there actually something hooked into this API request? If not trigger 400 - Bad request.
			status_header( has_action( 'jeg_paywall_api_' . $api_request ) ? 200 : 400 );

			// Trigger an action which plugins can hook into to fulfill the request.
			do_action( 'jeg_paywall_api_' . $api_request );

			// Done, clear buffer and exit.
			ob_end_clean();
			die( '-1' );
		}
	}

	/**
	 * Add new query vars.
	 *
	 * @param array $vars query vars.
	 *
	 * @return array
	 */
	public function add_query_vars( $vars ) {
		$vars[] = $this->endpoint;

		return $vars;
	}

	/**
	 * Payment Gateways IPNs
	 */
	public function add_endpoint() {
		add_rewrite_endpoint( $this->endpoint, EP_ALL );
	}

	/**
	 * Setup endpoint
	 */
	private function setup_endpoint() {
		$endpoint = 'jeg-paywall';

		$this->endpoint = apply_filters( 'jeg_paywall_ipn_endpooint', $endpoint );
	}

	/**
	 * Gateway handler
	 */
	public function gateway_handler() {
		if ( class_exists( 'WC_Payment_Gateway' ) ) {
			if ( class_exists( 'WC_Gateway_Paypal' ) ) {
				include_once JNEWS_PAYWALL_GATEWAYS_DIR . 'paypal/class-jpw-paypal.php';
			}

			include_once JNEWS_PAYWALL_GATEWAYS_DIR . 'stripe/class-jpw-stripe.php';
//			include_once JNEWS_PAYWALL_GATEWAYS_DIR . 'stripe/class-jpw-stripe-sepa.php';

			add_filter( 'woocommerce_available_payment_gateways', [ $this, 'available_gateways' ], 10, 1 );
			add_filter( 'woocommerce_payment_gateways', [ $this, 'init_new_gateways' ] );

			// Add stripe payment method menu
			$stripe = new \JPW_Stripe();
			if ( $stripe->is_enabled() ) {
				add_action( 'init', [ $this, 'paywall_method_new_endpoint' ] );
				add_action( 'init', [ $this, 'paywall_method_add_new_endpoint' ] );

				add_filter( 'woocommerce_get_query_vars', [ $this, 'query_vars' ], 0 );
				add_action( 'wp_loaded', [ $this, 'flush_rewrite_rules' ] );
				
				add_filter( 'woocommerce_account_menu_items', [ $this, 'add_account_endpoint' ] );
				add_action( 'woocommerce_account_paywall-method_endpoint', [ $this, 'paywall_method_endpoint_content' ] );
				add_action( 'woocommerce_account_add-paywall-method_endpoint', [ $this, 'paywall_method_add_endpoint_content' ] );
			}
		}
	}

	/**
	 * Set available gateways for certain products
	 *
	 * @param $gateways
	 *
	 * @return mixed
	 */
	public function available_gateways( $gateways ) {
		if ( is_admin() ) {
			return $gateways;
		}

		// print("<pre>".print_r($gateways,true)."</pre>");

		if ( is_wc_endpoint_url( 'add-paywall-method' ) ) {
			$gateways['stripepaywall'] = new \JPW_Stripe();
			return $gateways;
		}

		if ( is_jpw_subscribe() ) {
			foreach ( $gateways as $key => $value ) {
				if ( $key !== 'paypalsubscribe' && $key !== 'stripepaywall' /**  && $key !== 'stripepaywall_sepa'*/ ) {
					unset( $gateways[ $key ] );
				}
			}
		} elseif ( is_jpw_unlock() ) {
			foreach ( $gateways as $key => $value ) {
				if ( $key === 'paypalsubscribe' || $key === 'stripe' ) {
					unset( $gateways[ $key ] );
				}
			}
		} else {
			unset( $gateways['paypalsubscribe'] );
			unset( $gateways['stripepaywall'] );
			// unset( $gateways['stripepaywall_sepa'] );
		}

		return $gateways;
	}

	/**
	 * Disable sale price for subscription
	 *
	 * @param string $value price.
	 * @param WC_Product $product The WooCommerce product class handles individual product data.
	 *
	 * @return mixed
	 */
	public function disable_sale_price_subscription( $value, $product ) {
		if ( 'paywall_subscribe' === $product->get_type() ) {
			return $product->get_regular_price();
		}

		return $value;
	}

	/**
	 * Init new gateways to Woocommerce Settings
	 *
	 * @param $methods
	 *
	 * @return mixed
	 */
	public function init_new_gateways( $methods ) {
		$methods[] = 'JPW_Paypal';
		$methods[] = 'JPW_Stripe';
		// $methods[] = 'JPW_Stripe_Sepa';

		return $methods;
	}

	/**
	 * Add menu to woocommerce account menu
	 *
	 * @param $endpoint
	 *
	 * @return array
	 */
	public function add_account_endpoint( $menu ) {
		$item = array(
			'paywall-method'		=> esc_html__( 'Paywall Payment Methods', 'jnews-paywall' ),
		);

		$count = count( $menu );
		
		$menu = array_merge( array_slice( $menu, 0, $count - 1 ), $item, array_slice( $menu, $count - 1 ) );

		return $menu;
	}

	public function query_vars( $vars ) {
		foreach ( [ 'paywall-method', 'add-paywall-method' ] as $e) {
			$vars[$e] = $e;
		}
		return $vars;
	}

	public function flush_rewrite_rules() {
		flush_rewrite_rules();
	}

	public function paywall_method_new_endpoint() {
		add_rewrite_endpoint( 'paywall-method', EP_ROOT | EP_PAGES );
	}

	public function paywall_method_add_new_endpoint() {
		add_rewrite_endpoint( 'add-paywall-method', EP_ROOT | EP_PAGES );
	}

	public function paywall_method_endpoint_content() {
		include JNEWS_PAYWALL_DIR . 'template/payment-method.php';
	}

	public function paywall_method_add_endpoint_content() {
		include JNEWS_PAYWALL_DIR . 'template/payment-method-add.php';
	}

}
