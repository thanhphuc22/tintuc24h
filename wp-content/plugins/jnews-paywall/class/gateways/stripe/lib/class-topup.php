<?php

namespace JNews\Paywall\Gateways\Stripe\Lib;

/**
 * Class Topup
 *
 * @property string $id
 * @property string $object
 * @property int $amount
 * @property string|null $balance_transaction
 * @property int $created
 * @property string $currency
 * @property string|null $description
 * @property int|null $expected_availability_date
 * @property string|null $failure_code
 * @property string|null $failure_message
 * @property bool $livemode
 * @property \Stripe\StripeObject $metadata
 * @property mixed $source
 * @property string|null $statement_descriptor
 * @property string $status
 * @property string|null $transfer_group
 *
 * @package Stripe
 */
class Topup extends Api_Resource {

	const OBJECT_NAME = 'topup';

	use Api_Operations\All;
	use Api_Operations\Create;
	use Api_Operations\Retrieve;
	use Api_Operations\Update;

	/**
	 * Possible string representations of the status of the top-up.
	 *
	 * @link https://stripe.com/docs/api/topups/object#topup_object-status
	 */
	const STATUS_CANCELED  = 'canceled';
	const STATUS_FAILED    = 'failed';
	const STATUS_PENDING   = 'pending';
	const STATUS_REVERSED  = 'reversed';
	const STATUS_SUCCEEDED = 'succeeded';

	/**
	 * @param array|null        $params
	 * @param array|string|null $opts
	 *
	 * @throws \Exception\Api_Error_Exception if the request fails
	 *
	 * @return Topup The canceled topup.
	 */
	public function cancel( $params = null, $opts = null ) {
		$url                   = $this->instanceUrl() . '/cancel';
		list($response, $opts) = $this->_request( 'post', $url, $params, $opts );
		$this->refreshFrom( $response, $opts );
		return $this;
	}
}
