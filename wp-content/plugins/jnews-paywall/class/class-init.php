<?php
/**
 * JNews Paywall Class
 *
 * @author Jegtheme
 * @since 1.0.0
 * @package jnews-paywall
 */

namespace JNews\Paywall;

use DateInterval;
use DateTime;
use DateTimeZone;
use Exception;
use JNews\Paywall\Gateways\Paypal\Paypal_Api;
use JNews\Paywall\Gateways\Stripe\Stripe_Api;
use JPW_Gateways;
use JNews\Paywall\Ajax_Handler;
use JNews\Paywall\Customizer\Customizer;
use JNews\Paywall\Element\Register_Elements;
use JNews\Paywall\Status\Frontend_Status;
use JNews\Paywall\Metabox\Metabox;
use JNews\Paywall\Woocommerce\Order;
use JNews\Paywall\Woocommerce\Product;
use JNews\Paywall\Truncater\Truncater;
use JPW_Paypal;
use JPW_Stripe;
use WP_User_Query;


/**
 * Class Init
 *
 * @package JNews\Paywall
 */
class Init {

	/**
	 * @var Init
	 */
	private static $instance;

	/**
	 * Init constructor.
	 */
	private function __construct() {
		$this->setup_init();
		$this->setup_hook();
		$this->register_gateway();
	}

	/**
	 * Setup Classes
	 */
	private function setup_init() {
		global $pagenow;
		Ajax_Handler::instance();
		Customizer::instance();
		Register_Elements::instance();
		Order::instance();
		if ( 'post.php' === $pagenow || 'post-new.php' === $pagenow || ! is_admin() ) {
			Metabox::instance();
		}
		if ( is_admin() ) {
			Product::instance();
		} else {
			Frontend_Status::instance();
			Truncater::instance();
		}
	}

	/**
	 * Setup Hooks
	 */
	private function setup_hook() {
		global $pagenow;
		add_action( 'init', array( $this, 'load_templates' ) );
		add_action( 'plugins_loaded', array( $this, 'load_plugin_textdomain' ) );
		add_action( 'init', array( $this, 'update_user_status' ) );
		add_action( 'plugins_loaded', array( $this, 'load_woocommerce_class' ) );
		if ( is_admin() ) {
			add_action( 'admin_enqueue_scripts', array( $this, 'load_admin_script' ) );
		}
		if ( ! is_admin() ) {
			add_action( 'wp_print_styles', array( $this, 'load_frontend_css' ) );
			add_action( 'wp_enqueue_scripts', array( $this, 'load_frontend_script' ) );
			add_filter( 'jnews_frontend_asset_localize_script', array( $this, 'login_description' ) );
		}
		if ( 'post.php' === $pagenow || 'post-new.php' === $pagenow ) {
			add_action( 'elementor/editor/after_enqueue_styles', array( $this, 'editor_style' ), 99 );
			add_action( 'admin_enqueue_scripts', array( $this, 'editor_style' ), 99 );
		}
	}

	/**
	 * Override login description
	 */
	public function login_description( $value ) {
		$value['paywall_login']    = jnews_return_translation( 'Login to purchase or access your purchased package', 'jnews-paywall', 'login_to_purchase' );
		$value['paywall_register'] = jnews_return_translation( 'Register to purchase or access your purchased package', 'jnews-paywall', 'register_to_purchase' );

		return $value;
	}

	/**
	 * Register Gateway Class
	 */
	private function register_gateway() {
		include_once JNEWS_PAYWALL_DIR . 'class/gateways/class-jpw-gateways.php';
		JPW_Gateways::instance();
	}

	/**
	 * @return Init
	 */
	public static function instance() {
		if ( null === static::$instance ) {
			static::$instance = new static();
		}

		return static::$instance;
	}

	/**
	 * Load JNews Paywall Woocommerce Classes
	 */
	public function load_woocommerce_class() {
		if ( class_exists( 'WC_Product' ) ) {
			require_once JNEWS_PAYWALL_DIR . 'class/woocommerce/class-wc-product-paywall-subscribe.php';
			require_once JNEWS_PAYWALL_DIR . 'class/woocommerce/class-wc-product-paywall-unlock.php';
		}
	}

	/**
	 * Load Frontend CSS
	 */
	public function load_frontend_css() {
		wp_enqueue_style( 'jnews-paywall', JNEWS_PAYWALL_URL . '/assets/css/jpw-frontend.css', null, JNEWS_PAYWALL_VERSION );
	}

	/**
	 * Load editor style
	 */
	public function editor_style() {
		wp_enqueue_style( 'jnews-paywall-admin', JNEWS_PAYWALL_URL . '/assets/css/admin/admin-style.css', null, JNEWS_PAYWALL_VERSION );
	}

	/**
	 * Load Admin CSS
	 */
	public function load_admin_script() {
		wp_enqueue_style( 'jnews-paywall', JNEWS_PAYWALL_URL . '/assets/css/jpw-admin.css', null, JNEWS_PAYWALL_VERSION );
		wp_enqueue_script( 'jnews-paywall', JNEWS_PAYWALL_URL . '/assets/js/admin.js', null, JNEWS_PAYWALL_VERSION, true );
	}

	/**
	 * Load Frontend Script
	 */
	public function load_frontend_script() {
		wp_enqueue_script( 'jnews-paywall', JNEWS_PAYWALL_URL . '/assets/js/frontend.js', null, JNEWS_PAYWALL_VERSION, true );
	}

	/**
	 * Load Template
	 */
	public function load_templates() {
		// update_user_option( get_current_user_id(), 'jpw_unlock_remaining', 0 );
		// update_user_option( get_current_user_id(), 'jpw_unlocked_post_list', [] );
		$templates = array(
			'admin-menu.php',
			'popup-form.php',
		);

		foreach ( $templates as $template ) {
			$template = JNEWS_PAYWALL_DIR . 'template/' . $template;

			if ( ! empty( $template ) && file_exists( $template ) ) {
				include $template;
			}
		}
	}

	/**
	 * Load Text Domain
	 */
	public function load_plugin_textdomain() {
		load_plugin_textdomain( JNEWS_PAYWALL, false, basename( JNEWS_PAYWALL_DIR ) . '/languages/' );
	}


	/**
	 * Update User status
	 *
	 * @throws Exception
	 */
	public function update_user_status() {
		// New Check for Expired.
		$subscribe_status = get_user_option( 'jpw_subscribe_status', get_current_user_id() );
		$expired          = get_user_option( 'jpw_expired_date', get_current_user_id() ) ? get_user_option( 'jpw_expired_date', get_current_user_id() ) : Date( 'F d, Y' );
		if ( ! empty( $subscribe_status ) && $subscribe_status && 'ACTIVE' === $subscribe_status ) {
			$current_date = new DateTime();
			$expired_date = new DateTime( $expired );
			$current_date->setTimezone( new DateTimeZone( 'UTC' ) );
			$expired_date->setTimezone( new DateTimeZone( 'UTC' ) );
			$expired_date->add( new DateInterval( 'PT1H' ) ); // We need to wait for recurring payment.
			if ( $current_date >= $expired_date ) {
				update_user_option( get_current_user_id(), 'jpw_subscribe_status', false );
				update_user_option( get_current_user_id(), 'jpw_expired_date', false );

				/** WCS Integration */
				if ( jnews_is_wcs_active() ) {
					update_user_option( get_current_user_id(), 'jpw_subscribe_id', false );
				}
			}
		}
	}
}
