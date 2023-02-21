<?php
/**
 * Jeg_Paypal_Api_Http_Client
 *
 * @package JNews\Paywall\Gateways\Paypal\Lib\Jpaypal
 * @author jegtheme
 */

namespace JNews\Paywall\Gateways\Paypal\Lib\Jpaypal;

use JNews\Paywall\Gateways\Paypal\Lib\Jpaypal\Core\Http_Exception;

/**
 * Class Jeg_Paypal_Api_Http_Client
 *
 * @package JNews\Paywall\Gateways\Paypal\Lib\Jpaypal
 *
 * Client used to make HTTP requests.
 */
class Jeg_Paypal_Api_Http_Client {
	/**
	 * @var $environment
	 */
	public $environment;

	/**
	 * @var $injectors
	 */
	public $injectors = [];

	/**
	 * @var Jeg_Encoder
	 */
	public $encoder;


	/**
	 * Jeg_Paypal_Api_Http_Client constructor.
	 *
	 * @param $environment
	 */
	public function __construct( $environment ) {
		$this->environment = $environment;
		$this->encoder     = new Jeg_Encoder();
	}

	/**
	 * Add Injector
	 *
	 * @param object $inj Injected Header.
	 */
	public function add_injector( $inj ) {
		$this->injectors[] = $inj;
	}

	/**
	 * Paypal Execute Request
	 *
	 * @param object $http_request HTTP Request.
	 *
	 * @return array|object|\WP_Error
	 * @throws Http_Exception|\Exception
	 */
	public function execute( $http_request ) {
		$request_cpy = clone $http_request;
		$request_cpy = $request_cpy->request;

		foreach ( $this->injectors as $inj ) {
			$inj->inject( $request_cpy );
		}
		$url               = $this->environment['base_url'] . $request_cpy->path;
		$formatted_headers = $this->prepare_headers( $request_cpy->headers );
		if ( ! array_key_exists( 'user-agent', $formatted_headers ) ) {
			$request_cpy->headers['user-agent'] = $this->user_agent();
		}

		$body        = '';
		$data_format = 'body';
		if ( $request_cpy->body !== null ) {
			$raw_headers          = $request_cpy->headers;
			$request_cpy->headers = $formatted_headers;
			$body                 = $this->encoder->serialize_request( $request_cpy );
			$data_format          = $this->encoder->check_data_format( $request_cpy );
			$request_cpy->headers = $this->map_headers( $raw_headers, $request_cpy->headers );
		}

		$sslverify = strpos( $this->environment['base_url'], 'https://' ) === 0;

		$response = wp_remote_request(
			$url, // URL.
			[
				'method'      => $request_cpy->method,
				'headers'     => $request_cpy->headers, // Header here as array.
				'sslverify'   => $sslverify,
				'body'        => $body, // Body here as serialize content.
				'data_format' => $data_format,
			]
		);

		$response = $this->parse_response( $response );

		return $response;
	}

	/**
	 * Prepare Headers Changes all keys in an array
	 *
	 * @param array $headers Header request.
	 *
	 * @return array
	 */
	public function prepare_headers( $headers ) {
		return array_change_key_case( $headers );
	}

	/**
	 * Paypal user agent
	 *
	 * @return string
	 */
	public function user_agent() {
		return 'PayPalHttp-PHP HTTP/1.1';
	}

	/**
	 * @param $raw_headers
	 * @param $formatted_headers
	 *
	 * @return mixed
	 */
	public function map_headers( $raw_headers, $formatted_headers ) {
		$raw_headers_key = array_keys( $raw_headers );
		foreach ( $raw_headers_key as $array_key ) {
			if ( array_key_exists( strtolower( $array_key ), $formatted_headers ) ) {
				$raw_headers[ $array_key ] = $formatted_headers[ strtolower( $array_key ) ];
			}
		}

		return $raw_headers;
	}

	/**
	 * @param \WP_Error|array $response
	 *
	 * @return object
	 * @throws Http_Exception
	 */
	public function parse_response( $response ) {
		$headers = [];
		if ( ! is_wp_error( $response ) ) {
			$status_code   = $response['response']['code'];
			$body          = $response['body'];
			$headers       = $response['headers']->getAll();
			$http_response = (object) [
				'status_code' => $status_code,
				'headers'     => $headers,
			];
			if ( $status_code >= 200 && $status_code < 300 ) {
				$http_response->result = null;

				if ( ! empty( $body ) ) {
					try {
						$http_response->result = $this->encoder->deserialize_response( $body, $this->prepare_headers( $headers ) );
					} catch ( \Exception $e ) {
						throw new Http_Exception( $e->getMessage(), $status_code, $headers );
					}
				}

				return $http_response;

			}

			throw new Http_Exception( $body, $status_code, $headers );
		}

		throw new Http_Exception( $response->get_error_message(), 404, $headers );
	}
}
