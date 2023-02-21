<?php

namespace JNews\Paywall\Gateways\Stripe\Lib\Radar;

use JNews\Paywall\Gateways\Stripe\Lib\Api_Resource;
use JNews\Paywall\Gateways\Stripe\Lib\Api_Operations;

/**
 * Class ValueList
 *
 * @property string $id
 * @property string $object
 * @property string $alias
 * @property int $created
 * @property string $created_by
 * @property string $item_type
 * @property \Stripe\Collection $list_items
 * @property bool $livemode
 * @property \Stripe\StripeObject $metadata
 * @property string $name
 *
 * @package Stripe\Radar
 */
class Value_List extends Api_Resource {

	const OBJECT_NAME = 'radar.value_list';

	use Api_Operations\All;
	use Api_Operations\Create;
	use Api_Operations\Delete;
	use Api_Operations\Retrieve;
	use Api_Operations\Update;
}
