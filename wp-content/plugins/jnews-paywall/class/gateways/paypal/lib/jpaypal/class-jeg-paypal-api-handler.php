<?php
/**
 * Jeg_Paypal_Api_Handler
 *
 * @package JNews\Paywall\Gateways\Paypal\Lib\Jpaypal
 * @author jegtheme
 */

namespace JNews\Paywall\Gateways\Paypal\Lib\Jpaypal;

/**
 * Class Jeg_Paypal_Api_Handler
 *
 * @package JNews\Paywall\Gateways\Paypal\Lib\Jpaypal
 */
class Jeg_Paypal_Api_Handler {

	/**
	 * SDK Version
	 *
	 * @see https://github.com/paypal/Checkout-PHP-SDK/blob/develop/lib/PayPalCheckoutSdk/Core/Version.php
	 *
	 * @var string $version
	 */
	private static $version = '1.0.1';
	/**
	 * Paypal Client ID
	 *
	 * @var String $client_id
	 */
	private $client_id;
	/**
	 * Paypal Client Secret
	 *
	 * @var String $client_secret
	 */
	private $client_secret;
	/**
	 * Paypal Environment
	 *
	 * @var String $sandbox
	 */
	private $sandbox;
	/**
	 * Describes a domain that hosts a REST API
	 *
	 * @var String $base_url
	 */
	private $base_url;

	/**
	 * Jeg_Paypal_Api_Handler constructor.
	 *
	 * @param string $client_id
	 * @param string $client_secret
	 * @param string $sandbox
	 */
	public function __construct( $client_id = '', $client_secret = '', $sandbox = '' ) {
		$this->client_id     = $client_id;
		$this->client_secret = $client_secret;
		$this->sandbox       = $sandbox;
	}

	public static function gzip_inject( $request ) {
		$request->request->headers['Accept-Encoding'] = 'gzip';
	}

	public static function fpti_instrumentation_inject( $request ) {
		$request->request->headers['Accept-Encoding'] = 'gzip';
	}

	/**
	 * Paypal Environment
	 *
	 * @see https://github.com/paypal/Checkout-PHP-SDK/blob/develop/lib/PayPalCheckoutSdk/Core/PayPalEnvironment.php
	 *
	 * @return array
	 */
	public function environment() {
		$environment = array();
		if ( $this->sandbox === 'yes' ) {
			$this->base_url = 'https://api.sandbox.paypal.com';
		} else {
			$this->base_url = 'https://api.paypal.com';
		}
		if ( ! empty( $this->client_secret ) && ! empty( $this->client_id ) && ! empty( $this->base_url ) ) {
			$authorization = base64_encode( $this->client_id . ':' . $this->client_secret );
			$environment   = array(
				'authorization' => $authorization,
				'base_url'      => $this->base_url,
			);

		}

		return $environment;
	}

	/**
	 * Returns the value of the User-Agent header
	 * Add environment values and php version numbers
	 *
	 * @see https://github.com/paypal/Checkout-PHP-SDK/blob/develop/lib/PayPalCheckoutSdk/Core/UserAgent.php
	 *
	 * @return string
	 */
	public function get_user_agent_value() {
		$feature_list = array(
			'platform-ver=' . PHP_VERSION,
			'bit=' . $this->get_php_bit(),
			'os=' . str_replace( ' ', '_', PHP_OS . ' ' . php_uname( 'r' ) ),
			'machine=' . php_uname( 'm' ),
		);
		if ( defined( 'OPENSSL_VERSION_TEXT' ) ) {
			$openssl_version = explode( ' ', OPENSSL_VERSION_TEXT );
			$feature_list[]  = 'crypto-lib-ver=' . $openssl_version[1];
		}
		if ( function_exists( 'curl_version' ) ) {
			$curl_version   = curl_version();
			$feature_list[] = 'curl=' . $curl_version['version'];
		}

		return sprintf( 'PayPalSDK/%s %s (%s)', 'Checkout-PHP-SDK', self::$version, implode( '; ', $feature_list ) );
	}

	/**
	 * Gets PHP Bit version
	 *
	 * @see https://github.com/paypal/Checkout-PHP-SDK/blob/develop/lib/PayPalCheckoutSdk/Core/UserAgent.php
	 *
	 * @return int|string
	 */
	private function get_php_bit() {
		switch ( PHP_INT_SIZE ) {
			case 4:
				return '32';
			case 8:
				return '64';
			default:
				return PHP_INT_SIZE;
		}
	}


}
