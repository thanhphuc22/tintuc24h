<?php

namespace JNews\Paywall\Gateways\Stripe\Lib;

/**
 * Class PaymentMethod
 *
 * @property string $id
 * @property string $object
 * @property mixed|null $au_becs_debit
 * @property mixed $billing_details
 * @property mixed $card
 * @property mixed $card_present
 * @property int $created
 * @property string|null $customer
 * @property mixed|null $ideal
 * @property bool $livemode
 * @property \Stripe\StripeObject $metadata
 * @property mixed|null $sepa_debit
 * @property string $type
 *
 * @package Stripe
 */
class Payment_Method extends Api_Resource {

	const OBJECT_NAME = 'payment_method';

	use Api_Operations\All;
	use Api_Operations\Create;
	use Api_Operations\Retrieve;
	use Api_Operations\Update;

	/**
	 * @param array|null        $params
	 * @param array|string|null $opts
	 *
	 * @throws \Exception\Api_Error_Exception if the request fails
	 *
	 * @return PaymentMethod The attached payment method.
	 */
	public function attach( $params = null, $opts = null ) {
		$url                   = $this->instanceUrl() . '/attach';
		list($response, $opts) = $this->_request( 'post', $url, $params, $opts );
		$this->refreshFrom( $response, $opts );
		return $this;
	}

	/**
	 * @param array|null        $params
	 * @param array|string|null $opts
	 *
	 * @throws \Exception\Api_Error_Exception if the request fails
	 *
	 * @return PaymentMethod The detached payment method.
	 */
	public function detach( $params = null, $opts = null ) {
		$url                   = $this->instanceUrl() . '/detach';
		list($response, $opts) = $this->_request( 'post', $url, $params, $opts );
		$this->refreshFrom( $response, $opts );
		return $this;
	}
}
