<?php

namespace JNews\Paywall\Gateways\Stripe\Lib;

/**
 * Class Plan
 *
 * @property string $id
 * @property string $object
 * @property bool $active
 * @property string|null $aggregate_usage
 * @property int|null $amount
 * @property string|null $amount_decimal
 * @property string|null $billing_scheme
 * @property int $created
 * @property string $currency
 * @property string $interval
 * @property int $interval_count
 * @property bool $livemode
 * @property \Stripe\StripeObject $metadata
 * @property string|null $nickname
 * @property string|null $product
 * @property mixed|null $tiers
 * @property string|null $tiers_mode
 * @property mixed|null $transform_usage
 * @property int|null $trial_period_days
 * @property string $usage_type
 *
 * @package Stripe
 */
class Plan extends Api_Resource {

	const OBJECT_NAME = 'plan';

	use Api_Operations\All;
	use Api_Operations\Create;
	use Api_Operations\Delete;
	use Api_Operations\Retrieve;
	use Api_Operations\Update;
}
