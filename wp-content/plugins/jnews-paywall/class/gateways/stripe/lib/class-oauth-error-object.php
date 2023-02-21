<?php

namespace JNews\Paywall\Gateways\Stripe\Lib;

/**
 * Class OAuthErrorObject
 *
 * @property string $error
 * @property string $error_description
 *
 * @package Stripe
 */
class OAuth_Error_Object extends Stripe_Object {

	/**
	 * Refreshes this object using the provided values.
	 *
	 * @param array                                 $values
	 * @param null|string|array|Util\RequestOptions $opts
	 * @param boolean                               $partial Defaults to false.
	 */
	public function refreshFrom( $values, $opts, $partial = false ) {
		// Unlike most other API resources, the API will omit attributes in
		// error objects when they have a null value. We manually set default
		// values here to facilitate generic error handling.
		$values = array_merge(
			array(
				'error'             => null,
				'error_description' => null,
			),
			$values
		);
		parent::refreshFrom( $values, $opts, $partial );
	}
}
