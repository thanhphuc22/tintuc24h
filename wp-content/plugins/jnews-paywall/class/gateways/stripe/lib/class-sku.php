<?php

namespace JNews\Paywall\Gateways\Stripe\Lib;

/**
 * Class SKU
 *
 * @property string $id
 * @property string $object
 * @property bool $active
 * @property mixed $attributes
 * @property int $created
 * @property string $currency
 * @property string|null $image
 * @property mixed $inventory
 * @property bool $livemode
 * @property \Stripe\StripeObject $metadata
 * @property mixed|null $package_dimensions
 * @property int $price
 * @property string $product
 * @property int $updated
 *
 * @package Stripe
 */
class SKU extends Api_Resource {

	const OBJECT_NAME = 'sku';

	use Api_Operations\All;
	use Api_Operations\Create;
	use Api_Operations\Delete;
	use Api_Operations\Retrieve;
	use Api_Operations\Update;
}
