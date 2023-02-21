<?php

namespace JNews\Paywall\Gateways\Stripe\Lib\Issuing;

use JNews\Paywall\Gateways\Stripe\Lib\Api_Resource;
use JNews\Paywall\Gateways\Stripe\Lib\Api_Operations;

/**
 * Class Cardholder
 *
 * @property string $id
 * @property string $object
 * @property mixed|null $authorization_controls
 * @property mixed $billing
 * @property \Stripe\StripeObject|null $company
 * @property int $created
 * @property string|null $email
 * @property \Stripe\StripeObject|null $individual
 * @property bool $is_default
 * @property bool $livemode
 * @property \Stripe\StripeObject $metadata
 * @property string $name
 * @property string|null $phone_number
 * @property mixed $requirements
 * @property string $status
 * @property string $type
 *
 * @package Stripe\Issuing
 */
class Cardholder extends Api_Resource {

	const OBJECT_NAME = 'issuing.cardholder';

	use Api_Operations\All;
	use Api_Operations\Create;
	use Api_Operations\Retrieve;
	use Api_Operations\Update;
}
