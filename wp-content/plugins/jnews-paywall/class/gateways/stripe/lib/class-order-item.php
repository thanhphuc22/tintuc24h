<?php

namespace JNews\Paywall\Gateways\Stripe\Lib;

/**
 * Class OrderItem
 *
 * @property string $object
 * @property int $amount
 * @property string $currency
 * @property string $description
 * @property string $parent
 * @property int $quantity
 * @property string $type
 *
 * @package Stripe
 */
class Order_Item extends Stripe_Object {

	const OBJECT_NAME = 'order_item';
}
