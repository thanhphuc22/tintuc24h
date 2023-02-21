<?php

namespace JNews\Paywall\Gateways\Stripe\Lib\Api_Operations;

use JNews\Paywall\Gateways\Stripe\Lib\Util\Request_Options;
use JNews\Paywall\Gateways\Stripe\Lib\Api_Requestor;

/**
 * Trait for resources that need to make API requests.
 *
 * This trait should only be applied to classes that derive from StripeObject.
 */
trait Request {

	/**
	 * @param array|null|mixed $params The list of parameters to validate
	 *
	 * @throws \Stripe\Exception\Invalid_Argument_Exception if $params exists and is not an array
	 */
	protected static function _validateParams( $params = null ) {
		if ( $params && ! is_array( $params ) ) {
			$message = 'You must pass an array as the first argument to Stripe API '
			   . 'method calls.  (HINT: an example call to create a charge '
			   . "would be: \"Stripe\\Charge::create(['amount' => 100, "
			   . "'currency' => 'usd', 'source' => 'tok_1234'])\")";
			throw new \Stripe\Exception\Invalid_Argument_Exception( $message );
		}
	}

	/**
	 * @param string            $method HTTP method ('get', 'post', etc.)
	 * @param string            $url URL for the request
	 * @param array             $params list of parameters for the request
	 * @param array|string|null $options
	 *
	 * @throws \Stripe\Exception\Api_Error_Exception if the request fails
	 *
	 * @return array tuple containing (the JSON response, $options)
	 */
	protected function _request( $method, $url, $params = array(), $options = null ) {
		$opts                 = $this->_opts->merge( $options );
		list($resp, $options) = static::_staticRequest( $method, $url, $params, $opts );
		$this->setLastResponse( $resp );
		return array( $resp->json, $options );
	}

	/**
	 * @param string            $method HTTP method ('get', 'post', etc.)
	 * @param string            $url URL for the request
	 * @param array             $params list of parameters for the request
	 * @param array|string|null $options
	 *
	 * @throws \Stripe\Exception\Api_Error_Exception if the request fails
	 *
	 * @return array tuple containing (the JSON response, $options)
	 */
	protected static function _staticRequest( $method, $url, $params, $options ) {
		$opts                          = Request_Options::parse( $options );
		$baseUrl                       = isset( $opts->apiBase ) ? $opts->apiBase : static::baseUrl();
		$requestor                     = new Api_Requestor( $opts->apiKey, $baseUrl );
		list($response, $opts->apiKey) = $requestor->request( $method, $url, $params, $opts->headers );
		$opts->discardNonPersistentHeaders();
		return array( $response, $opts );
	}
}
