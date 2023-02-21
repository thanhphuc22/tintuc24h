<?php

namespace JNews\Paywall\Gateways\Stripe\Lib\Issuing;

use JNews\Paywall\Gateways\Stripe\Lib\Api_Resource;
use JNews\Paywall\Gateways\Stripe\Lib\Api_Operations;

/**
 * Class Authorization
 *
 * @property string $id
 * @property string $object
 * @property bool $approved
 * @property string $authorization_method
 * @property int $authorized_amount
 * @property string $authorized_currency
 * @property Collection $balance_transactions
 * @property Card $card
 * @property string|null $cardholder
 * @property int $created
 * @property int $held_amount
 * @property string $held_currency
 * @property bool $is_held_amount_controllable
 * @property bool $livemode
 * @property mixed $merchant_data
 * @property Stripe_Object $metadata
 * @property int $pending_authorized_amount
 * @property int $pending_held_amount
 * @property mixed $request_history
 * @property string $status
 * @property array $transactions
 * @property mixed $verification_data
 * @property string|null $wallet_provider
 *
 * @package Stripe\Issuing
 */
class Authorization extends Api_Resource {

	const OBJECT_NAME = 'issuing.authorization';

	use Api_Operations\All;
	use Api_Operations\Retrieve;
	use Api_Operations\Update;

	/**
	 * @param array|null        $params
	 * @param array|string|null $opts
	 *
	 * @throws \Stripe\Exception\ApiErrorException if the request fails
	 *
	 * @return Authorization The approved authorization.
	 */
	public function approve( $params = null, $opts = null ) {
		$url                   = $this->instanceUrl() . '/approve';
		list($response, $opts) = $this->_request( 'post', $url, $params, $opts );
		$this->refreshFrom( $response, $opts );
		return $this;
	}

	/**
	 * @param array|null        $params
	 * @param array|string|null $opts
	 *
	 * @throws \Stripe\Exception\ApiErrorException if the request fails
	 *
	 * @return Authorization The declined authorization.
	 */
	public function decline( $params = null, $opts = null ) {
		$url                   = $this->instanceUrl() . '/decline';
		list($response, $opts) = $this->_request( 'post', $url, $params, $opts );
		$this->refreshFrom( $response, $opts );
		return $this;
	}
}
