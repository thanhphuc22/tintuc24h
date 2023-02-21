<?php
/**
 * Jeg_Encoder
 *
 * @package JNews\Paywall\Gateways\Paypal\Lib\Jpaypal
 * @author jegtheme
 */

namespace JNews\Paywall\Gateways\Paypal\Lib\Jpaypal;

/**
 * Class Jeg_Encoder
 *
 * @package JNews\Paywall\Gateways\Paypal\Lib\Jpaypal
 */
class Jeg_Encoder {
	private $serializers = [];

	public function __construct() {
		$this->serializers[] = [
			'name' => 'form',
			'data' => 'body',
			'type' => '/^application\/x-www-form-urlencoded$/',
		];
		$this->serializers[] = [
			'name' => 'json',
			'data' => 'query',
			'type' => '/^application\\/json/',
		];
		$this->serializers[] = [
			'name' => 'text',
			'data' => 'query',
			'type' => '/^text\\/.*/',
		];
	}

	public function check_data_format( $request ) {
		return $this->serialize_checker( $request )->data;

	}

	private function serialize_checker( $request ) {
		if ( ! array_key_exists( 'content-type', $request->headers ) ) {
			$message = 'Http_Request does not have Content-Type header set';
			echo $message;
			throw new \Exception( $message );
		}

		$content_type = $request->headers['content-type'];
		$serializer   = (object) $this->serializer( $content_type );

		if ( $serializer === null ) {
			$message = sprintf( 'Unable to serialize request with Content-Type: %s. Supported encodings are: %s', $content_type, implode( ', ', $this->supported_encodings() ) );
			echo $message;
			throw new \Exception( $message );
		}

		if ( ! ( is_string( $request->body ) || is_array( $request->body ) ) ) {
			$message = 'Body must be either string or array';
			echo $message;
			throw new \Exception( $message );
		}

		return $serializer;
	}

	private function serializer( $content_type ) {
		foreach ( $this->serializers as $serializer ) {
			try {
				if ( preg_match( $serializer['type'], $content_type ) === 1 ) {
					return $serializer;
				}
			} catch ( \Exception $ex ) {
				$message = sprintf( 'Error while checking content type of %s: %s', get_class( $serializer['name'] ), $ex->getMessage() );
				echo $message;
				throw new \Exception( $message, $ex->getCode(), $ex );
			}
		}

		return null;
	}

	private function supported_encodings() {
		$values = [];
		foreach ( $this->serializers as $serializer ) {
			$values[] = $serializer->content_type();
		}

		return $values;
	}

	public function serialize_request( $request ) {
		$serializer = $this->serialize_checker( $request );
		$serialized = $this->encode( $request, $serializer->name );

		if ( array_key_exists( 'content-encoding', $request->headers ) && $request->headers['content-encoding'] === 'gzip' ) {
			$serialized = gzencode( $serialized );
		}

		return $serialized;
	}

	private function encode( $request, $content_type ) {
		switch ( $content_type ) {
			case 'form':
				if ( ! is_array( $request->body ) || ! $this->is_associative( $request->body ) ) {
					throw new \Exception( 'Http_Request body must be an associative array when Content-Type is: ' . $request->headers['Content-Type'] );
				}

				return $request->body;
				break;
			case 'json':
				$body = $request->body;
				if ( ! empty( $body ) ) {
					if ( is_string( $body ) ) {
						return $body;
					}
					if ( is_array( $body ) ) {
						return wp_json_encode( $body );
					}
				} else {
					return null;
				}
				throw new \Exception( 'Cannot serialize data. Unknown type' );
				break;
			case 'text':
				$body = $request->body;
				if ( is_string( $body ) ) {
					return $body;
				}
				if ( is_array( $body ) ) {
					return wp_json_encode( $body );
				}

				return implode( ' ', $body );
				break;
		}

		throw new \Exception( 'Unknown Content-Type' );
	}

	private function is_associative( array $array ) {
		return array_values( $array ) !== $array;
	}

	public function deserialize_response( $response_body, $headers ) {

		if ( ! array_key_exists( 'content-type', $headers ) ) {
			$message = 'HTTP response does not have Content-Type header set';
			echo $message;
			throw new \Exception( $message );
		}

		$content_type = $headers['content-type'];
		$serializer   = (object) $this->serializer( $content_type );

		if ( $serializer === null ) {
			throw new \Exception( sprintf( 'Unable to deserialize response with Content-Type: %s. Supported encodings are: %s', $content_type, implode( ', ', $this->supported_encodings() ) ) );
		}

		if ( array_key_exists( 'content-encoding', $headers ) && $headers['content-encoding'] === 'gzip' ) {
			$response_body = gzdecode( $response_body );
		}

		return $this->decode( $response_body, $serializer->name );
	}

	private function decode( $response, $content_type ) {
		switch ( $content_type ) {
			case 'form':
				throw new \Exception( 'CurlSupported does not support deserialization' );
				break;
			case 'json':
				return json_decode( $response );
				break;
			case 'text':
				return $response;
				break;
		}

		return $response;
	}
}
