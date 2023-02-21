<?php

namespace JNews\Paywall\Gateways\Stripe\Lib;

/**
 * Class EphemeralKey
 *
 * @property string $id
 * @property string $object
 * @property int $created
 * @property int $expires
 * @property bool $livemode
 * @property string $secret
 * @property array $associated_objects
 *
 * @package Stripe
 */
class Ephemeral_Key extends Api_Resource {

	const OBJECT_NAME = 'ephemeral_key';

	use Api_Operations\Create {
		create as protected _create;
	}
	use Api_Operations\Delete;

	/**
	 * @param array|null        $params
	 * @param array|string|null $opts
	 *
	 * @throws \Exception\Invalid_Argument_Exception if stripe_version is missing
	 * @throws Exception\Api_Error_Exception if the request fails
	 *
	 * @return EphemeralKey The created key.
	 */
	public static function create( $params = null, $opts = null ) {
		if ( ! $opts || ! isset( $opts['stripe_version'] ) ) {
			throw new Exception\InvalidArgumentException( 'stripe_version must be specified to create an ephemeral key' );
		}
		return self::_create( $params, $opts );
	}
}
