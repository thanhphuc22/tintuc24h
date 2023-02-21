<?php
/**
 * @author : Jegtheme
 */

namespace JNews\Util;

/**
 * Cache Variable for Plugin
 */
class RestAPI {
	/**
	 * Class instance
	 *
	 * @var Api
	 */
	private static $instance;

	/**
	 * Return class instance
	 *
	 * @return Api
	 */
	public static function instance() {
		if ( null === static::$instance ) {
			static::$instance = new static();
		}

		return static::$instance;
	}

	/**
	 * Class constructor
	 */
	private function __construct() {
		add_action( 'rest_api_init', array( $this, 'register_routes' ) );
		add_action( 'admin_enqueue_scripts', array( $this, 'prepare_assets' ) );
	}

	public function prepare_assets() {
		$theme = wp_get_theme();
		wp_register_script( 'jnews-essential-local', '' );
		$ls_data             = jnews_get_license();
		$home_url            = home_url();
		$jnews_dashboard_url = menu_page_url( 'jnews', false );
		$callback            = str_replace( $home_url, '', $jnews_dashboard_url );
		$domain              = jnews_get_domain( $home_url );
		$server_url          = add_query_arg(
			array(
				'siteurl'  => $home_url,
				'callback' => $callback,
				'item_id'  => JNEWS_THEME_ID,
			),
			JNEWS_THEME_SERVER . '/activate/'
		);

		$ls_var = array(
			'domain'     => $domain,
			'url'        => get_site_url(),
			'restUrl'    => get_rest_url(),
			'api'        => JNEWS_THEME_SERVER,
			'activation' => $server_url,
			'nonce'      => wp_create_nonce( 'wp_rest' ),
		);

		if ( $ls_data && isset( $ls_data['purchase_code'] ) ) {
			$ls_var['license'] = $ls_data['purchase_code'];
		}

		wp_localize_script(
			'jnews-essential-local',
			'jnewsEssential',
			$ls_var
		);
	}

	/**
	 * Register API
	 *
	 * @return void
	 */
	public function register_routes() {
		register_rest_route(
			'jnews/v1',
			'resetLicense',
			array(
				'methods'             => 'POST',
				'callback'            => array( $this, 'reset_license' ),
				'permission_callback' => array( $this, 'permission_manage_options' ),
			)
		);

		register_rest_route(
			'jnews/v1',
			'getValidateNoticeLength',
			array(
				'methods'             => 'POST',
				'callback'            => array( $this, 'get_validate_notice_length' ),
				'permission_callback' => array( $this, 'permission_manage_options' ),
			)
		);
	}

	/**
	 * Get Validate Notice Length
	 *
	 * @return int
	 */
	public function get_validate_notice_length() {
		return \JNews\Util\ValidateLicense::check_validate_notice_length();
	}

	/**
	 * @param \WP_REST_Request $request
	 */
	public function reset_license( $request ) {
		$purchase_code = $request->get_param( 'code' );
		if ( ! empty( $purchase_code ) ) {
			jnews_reset_license();
		}
	}

	/**
	 * Check user permissions
	 *
	 * @return boolean
	 */
	public function permission_manage_options() {
		return current_user_can( 'manage_options' );
	}
}
