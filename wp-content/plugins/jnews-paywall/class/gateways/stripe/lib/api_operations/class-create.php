<?php

namespace JNews\Paywall\Gateways\Stripe\Lib\Api_Operations;

use JNews\Paywall\Gateways\Stripe\Lib\Util\Util;


/**
 * Trait for creatable resources. Adds a `create()` static method to the class.
 *
 * This trait should only be applied to classes that derive from StripeObject.
 */
trait Create {

	/**
	 * @param array|null        $params
	 * @param array|string|null $options
	 *
	 * @throws \Stripe\Exception\Api_Error_Exception if the request fails
	 *
	 * @return static The created resource.
	 */
	public static function create( $params = null, $options = null ) {
		self::_validateParams( $params );
		$url = static::classUrl();

		list($response, $opts) = static::_staticRequest( 'post', $url, $params, $options );
		$obj                   = Util::convertToStripeObject( $response->json, $opts );
		$obj->setLastResponse( $response );
		return $obj;
	}
}
