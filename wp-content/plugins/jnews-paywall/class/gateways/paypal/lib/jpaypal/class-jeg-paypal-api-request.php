<?php
/**
 * Jeg_Paypal_Api_Request
 *
 * @package JNews\Paywall\Gateways\Paypal\Lib\Jpaypal
 * @author jegtheme
 */

namespace JNews\Paywall\Gateways\Paypal\Lib\Jpaypal;

use WP_Error;

/**
 * Class Jeg_Paypal_Api_Request
 *
 * @package JNews\Paywall\Gateways\Paypal\Lib\Jpaypal
 */
class Jeg_Paypal_Api_Request {

	/**
	 * @var object $request
	 */
	public $request;

	/**
	 * Jeg_Paypal_Api_Request constructor.
	 *
	 * @param string $path REST API path.
	 * @param array | string $method REST API method.
	 * @param array |   string $body REST API body.
	 * @param array $headers REST API headers.
	 */
	public function __construct( $path, $method, $body = null, $headers = [] ) {
		$this->request = (object) [
			'path'    => $path,
			'method'  => $method,
			'body'    => $body,
			'headers' => $headers,
		];
	}

	/**
	 * Get capture request args.
	 *
	 * @see https://github.com/paypal/paypalhttp_php/blob/master/lib/PayPalHttp/HttpRequest.php
	 *
	 * @param string $path REST API path.
	 * @param array | string $method REST API method.
	 * @param array |   string $body REST API body.
	 * @param array $headers REST API headers.
	 *
	 * @return array
	 */
	public function set_capture_request( $path, $method, $body = null, $headers = [] ) {
		$this->request = (object) [
			'path'    => $path,
			'method'  => $method,
			'body'    => $body,
			'headers' => $headers,
		];

		return apply_filters( 'jnews_paywall_paypal_capture_request', $this->request );
	}

	/**
	 * @param array $environment Environment API.
	 * @param null $data_format Data format request.
	 *
	 * @return array|WP_Error
	 */
	public function do_request( $environment, $data_format = null ) {
		$request    = $this->request;
		$url        = $environment['base_url'] . $request->path;
		$ssl_verify = strpos( $url, 'https://' ) === 0;
		$args       = [
			'method'    => $request->method,
			'headers'   => $request->headers,
			'sslverify' => $ssl_verify,
			'body'      => $request->body,
		];
		if ( $data_format === null ) {
			$args['data_format'] = $data_format;
		}

		return wp_remote_request( $environment['base_url'] . $request->path, $args );
	}

	/**
	 * Try Catch Request
	 *
	 * @param $client
	 */
	public static function request( $client, $request ) {
		$error    = false;
		$response = [
			'status_code' => '',
			'headers'     => '',
			'message'     => '',
		];
		try {
			$response = $client->execute( $request );
		} catch ( Http_Exception $http_exception ) { // @codingStandardsIgnoreLine.
			$error                   = true;
			$response['status_code'] = $http_exception->status_code;
			$response['headers']     = $http_exception->headers;
		} catch ( \Exception $exception ) { // @codingStandardsIgnoreLine.
			$error               = true;
			$response['message'] = $exception->getMessage();
		}

		return [
			'error'    => $error,
			'response' => $response,
		];
	}
}
