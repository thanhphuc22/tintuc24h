<?php

namespace JNews\Paywall\Gateways\Stripe\Lib;

/**
 * Class TaxRate
 *
 * @property string $id
 * @property string $object
 * @property bool $active
 * @property int $created
 * @property string|null $description
 * @property string $display_name
 * @property bool $inclusive
 * @property string|null $jurisdiction
 * @property bool $livemode
 * @property \Stripe\StripeObject $metadata
 * @property float $percentage
 *
 * @package Stripe
 */
class Tax_Rate extends Api_Resource {

	const OBJECT_NAME = 'tax_rate';

	use Api_Operations\All;
	use Api_Operations\Create;
	use Api_Operations\Retrieve;
	use Api_Operations\Update;
}
