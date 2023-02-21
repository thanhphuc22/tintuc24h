<?php

namespace JNews\Paywall\Gateways\Stripe\Lib;

/**
 * Class Coupon
 *
 * @property string $id
 * @property string $object
 * @property int|null $amount_off
 * @property int $created
 * @property string|null $currency
 * @property string $duration
 * @property int|null $duration_in_months
 * @property bool $livemode
 * @property int|null $max_redemptions
 * @property \Stripe\StripeObject $metadata
 * @property string|null $name
 * @property float|null $percent_off
 * @property int|null $redeem_by
 * @property int $times_redeemed
 * @property bool $valid
 *
 * @package Stripe
 */
class Coupon extends Api_Resource {

	const OBJECT_NAME = 'coupon';

	use Api_Operations\All;
	use Api_Operations\Create;
	use Api_Operations\Delete;
	use Api_Operations\Retrieve;
	use Api_Operations\Update;
}
