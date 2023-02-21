<?php
/**
 * Jeg_Paypal_Api_Credentials
 *
 * @package JNews\Paywall\Gateways\Paypal\Lib\Jpaypal
 * @author jegtheme
 */

namespace JNews\Paywall\Gateways\Paypal\Lib\Jpaypal;

/**
 * Class Jeg_Paypal_Api_Credentials
 *
 * @package JNews\Paywall\Gateways\Paypal\Lib\Jpaypal
 */
class Jeg_Paypal_Api_Credentials extends Jeg_Paypal_Api_Request {

	/**
	 * @var $token
	 */
	public static $token;

	/**
	 * @var $token_type
	 */
	public static $token_type;

	/**
	 * @var $expires_in
	 */
	public static $expires_in;

	/**
	 * @var $create_date
	 */
	private static $create_date;

	/**
	 * @var $access_token
	 */
	public $access_token;

	public function __construct( $credential ) {

	}

	/**
	 * Refresh token request
	 *
	 * @see https://github.com/paypal/Checkout-PHP-SDK/blob/develop/lib/PayPalCheckoutSdk/Core/RefreshTokenRequest.php
	 *
	 * @param array $environment
	 * @param null  $refresh_token
	 */
	public function refresh_token_request( $environment, $refresh_token = null ) {
		$headers = [
			'Authorization' => 'Basic ' . $environment['authorization'],
			'Content-Type'  => 'application/x-www-form-urlencoded',
		];
		$body    = [
			'grant_type' => 'authorization_code',
		];
		if ( $refresh_token !== null ) {
			$body['grant_type']    = 'refresh_token';
			$body['refresh_token'] = $refresh_token;
		}

		$this->set_capture_request( '/v1/identity/openidconnect/tokenservice', 'POST', $body, $headers );
	}

	/**
	 * Inject Authorization
	 *
	 * @see https://github.com/paypal/Checkout-PHP-SDK/blob/develop/lib/PayPalCheckoutSdk/Core/AuthorizationInjector.php inject
	 *
	 * @param object $request
	 * @param array  $environment
	 */
	public function auth_inject( $request, $environment ) {
		if ( ! $this->has_auth_header( $request ) && ! $this->is_auth_request( $request ) ) {
			if ( self::$token === null || $this->is_expired() ) {
				$this->access_token = $this->fetch_access_token( $environment );
			}
			$request->headers['Authorization'] = 'Bearer ' . self::$token;
		}
	}

	/**
	 * Check authorization request header
	 *
	 * @see https://github.com/paypal/Checkout-PHP-SDK/blob/develop/lib/PayPalCheckoutSdk/Core/AuthorizationInjector.php hasAuthHeader
	 *
	 * @param object $request
	 *
	 * @return bool
	 */
	private function has_auth_header( $request ) {
		return array_key_exists( 'Authorization', $request->headers );
	}

	/**
	 * Check request header
	 *
	 * @see https://github.com/paypal/Checkout-PHP-SDK/blob/develop/lib/PayPalCheckoutSdk/Core/AuthorizationInjector.php isAuthRequest
	 *
	 * @param object $request
	 *
	 * @return bool
	 */
	private function is_auth_request( $request ) {
		return isset( $request->body['grant_type'] ) && ( $request->body['grant_type'] === 'client_credentials' || $request->body['grant_type'] === 'authorization_code' );
	}

	/**
	 * Check authorization expired time
	 *
	 * @see https://github.com/paypal/Checkout-PHP-SDK/blob/develop/lib/PayPalCheckoutSdk/Core/AccessToken.php isExpired
	 *
	 * @return bool
	 */
	private function is_expired() {
		return time() >= self::$create_date + self::$expires_in;
	}

	/**
	 * Get the access token
	 *
	 * @see https://github.com/paypal/Checkout-PHP-SDK/blob/develop/lib/PayPalCheckoutSdk/Core/AuthorizationInjector.php fetchAccessToken
	 *
	 * @param array $environment
	 */
	public function fetch_access_token( $environment ) {
		$this->access_token_request( $environment );
		$response = $this->do_request( $environment );
		if ( ! is_wp_error( $response ) ) {
			// perlu cek keluarnya apa
			$access_token      = json_decode( $response['body'] );
			self::$token       = $access_token->access_token;
			self::$token_type  = $access_token->token_type;
			self::$expires_in  = $access_token->expires_in;
			self::$create_date = time();
		}
	}

	/**
	 * Access token reqeust
	 *
	 * @see https://github.com/paypal/Checkout-PHP-SDK/blob/develop/lib/PayPalCheckoutSdk/Core/AccessTokenRequest.php
	 *
	 * @param array $environment
	 * @param null  $refresh_token
	 */
	public function access_token_request( $environment, $refresh_token = null ) {
		$headers = [
			'Authorization' => 'Basic ' . $environment['authorization'],
			'Content-Type'  => 'application/x-www-form-urlencoded',
		];
		$body    = [
			'grant_type' => 'client_credentials',
		];
		if ( $refresh_token !== null ) {
			$body['grant_type']    = 'refresh_token';
			$body['refresh_token'] = $refresh_token;
		}

		$this->set_capture_request( '/v1/oauth2/token', 'POST', $body, $headers );
	}
}
