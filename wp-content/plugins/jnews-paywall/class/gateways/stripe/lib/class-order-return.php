<?php

namespace JNews\Paywall\Gateways\Stripe\Lib;

/**
 * Class OrderReturn
 *
 * @property string $id
 * @property string $object
 * @property int $amount
 * @property int $created
 * @property string $currency
 * @property OrderItem[] $items
 * @property bool $livemode
 * @property string|null $order
 * @property string|null $refund
 *
 * @package Stripe
 */
class Order_Return extends Api_Resource {

	const OBJECT_NAME = 'order_return';

	use Api_Operations\All;
	use Api_Operations\Retrieve;
}
