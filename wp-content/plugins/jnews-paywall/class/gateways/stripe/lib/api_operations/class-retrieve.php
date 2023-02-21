<?php

namespace JNews\Paywall\Gateways\Stripe\Lib\Api_Operations;

use JNews\Paywall\Gateways\Stripe\Lib\Util\Request_Options;

/**
 * Trait for retrievable resources. Adds a `retrieve()` static method to the
 * class.
 *
 * This trait should only be applied to classes that derive from StripeObject.
 */
trait Retrieve {

	/**
	 * @param array|string      $id The ID of the API resource to retrieve,
	 *          or an options array containing an `id` key.
	 * @param array|string|null $opts
	 *
	 * @throws \Stripe\Exception\Api_Error_Exception if the request fails
	 *
	 * @return static
	 */
	public static function retrieve( $id, $opts = null ) {
		$opts     = Request_Options::parse( $opts );
		$instance = new static( $id, $opts );
		$instance->refresh();
		return $instance;
	}
}
