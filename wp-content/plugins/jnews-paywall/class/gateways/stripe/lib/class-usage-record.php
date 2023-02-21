<?php

namespace JNews\Paywall\Gateways\Stripe\Lib;

/**
 * Class UsageRecord
 *
 * @package Stripe
 *
 * @property string $id
 * @property string $object
 * @property bool $livemode
 * @property int $quantity
 * @property string $subscription_item
 * @property int $timestamp
 */
class Usage_Record extends Api_Resource {

	const OBJECT_NAME = 'usage_record';
}
