<?php

namespace JNews\Paywall\Gateways\Stripe\Lib;

/**
 * Class ExchangeRate
 *
 * @property string $id
 * @property string $object
 * @property mixed $rates
 *
 * @package Stripe
 */
class Exchange_Rate extends Api_Resource {

	const OBJECT_NAME = 'exchange_rate';

	use Api_Operations\All;
	use Api_Operations\Retrieve;
}
