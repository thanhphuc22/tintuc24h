<?php

namespace JNews\Paywall\Gateways\Stripe\Lib\Issuing;

use JNews\Paywall\Gateways\Stripe\Lib\Api_Resource;
use JNews\Paywall\Gateways\Stripe\Lib\Api_Operations;

/**
 * Class Card
 *
 * @property string $id
 * @property string $object
 * @property mixed $authorization_controls
 * @property string $brand
 * @property \Stripe\Issuing\Cardholder|null $cardholder
 * @property int $created
 * @property string $currency
 * @property int $exp_month
 * @property int $exp_year
 * @property string $last4
 * @property bool $livemode
 * @property \Stripe\StripeObject $metadata
 * @property string $name
 * @property mixed|null $pin
 * @property string|null $replacement_for
 * @property string|null $replacement_reason
 * @property mixed|null $shipping
 * @property string $status
 * @property string $type
 *
 * @package Stripe\Issuing
 */
class Card extends Api_Resource {

	const OBJECT_NAME = 'issuing.card';

	use Api_Operations\All;
	use Api_Operations\Create;
	use Api_Operations\Retrieve;
	use Api_Operations\Update;

	/**
	 * @param array|null        $params
	 * @param array|string|null $opts
	 *
	 * @throws \Stripe\Exception\ApiErrorException if the request fails
	 *
	 * @return CardDetails The card details associated with that issuing card.
	 */
	public function details( $params = null, $opts = null ) {
		$url                   = $this->instanceUrl() . '/details';
		list($response, $opts) = $this->_request( 'get', $url, $params, $opts );
		$obj                   = \Stripe\Util\Util::convertToStripeObject( $response, $opts );
		$obj->setLastResponse( $response );
		return $obj;
	}
}
