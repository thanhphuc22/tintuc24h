<?php

namespace JNews\Paywall\Gateways\Stripe\Lib\Issuing;

use JNews\Paywall\Gateways\Stripe\Lib\Api_Resource;
use JNews\Paywall\Gateways\Stripe\Lib\Api_Operations;

/**
 * Class Transaction
 *
 * @property string $id
 * @property string $object
 * @property int $amount
 * @property string|null $authorization
 * @property string|null $balance_transaction
 * @property string $card
 * @property string|null $cardholder
 * @property int $created
 * @property string $currency
 * @property string|null $dispute
 * @property bool $livemode
 * @property int $merchant_amount
 * @property string $merchant_currency
 * @property mixed $merchant_data
 * @property \Stripe\StripeObject $metadata
 * @property string $type
 *
 * @package Stripe\Issuing
 */
class Transaction extends Api_Resource {

	const OBJECT_NAME = 'issuing.transaction';

	use Api_Operations\All;
	use Api_Operations\Retrieve;
	use Api_Operations\Update;
}
