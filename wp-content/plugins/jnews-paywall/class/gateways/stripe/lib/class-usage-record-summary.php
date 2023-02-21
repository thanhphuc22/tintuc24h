<?php

namespace JNews\Paywall\Gateways\Stripe\Lib;

/**
 * Class UsageRecord
 *
 * @package Stripe
 *
 * @property string $id
 * @property string $object
 * @property string $invoice
 * @property bool $livemode
 * @property mixed $period
 * @property string $subscription_item
 * @property int $total_usage
 */
class Usage_Record_Summary extends Api_Resource {

	const OBJECT_NAME = 'usage_record_summary';
}
