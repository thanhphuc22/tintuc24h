<?php

namespace JNews\Paywall\Gateways\Stripe\Lib\Terminal;

use JNews\Paywall\Gateways\Stripe\Lib\Api_Resource;
use JNews\Paywall\Gateways\Stripe\Lib\Api_Operations;

/**
 * Class Location
 *
 * @property string $id
 * @property string $object
 * @property mixed $address
 * @property string $display_name
 * @property bool $livemode
 * @property JNews\Paywall\Gateways\Stripe\Lib\Stripe_Object $metadata
 *
 * @package Stripe\Terminal
 */
class Location extends Api_Resource {

	const OBJECT_NAME = 'terminal.location';

	use Api_Operations\All;
	use Api_Operations\Create;
	use Api_Operations\Delete;
	use Api_Operations\Retrieve;
	use Api_Operations\Update;
}
