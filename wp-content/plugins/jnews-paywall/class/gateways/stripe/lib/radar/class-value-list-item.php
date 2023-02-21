<?php

namespace JNews\Paywall\Gateways\Stripe\Lib\Radar;

use JNews\Paywall\Gateways\Stripe\Lib\Api_Resource;
use JNews\Paywall\Gateways\Stripe\Lib\Api_Operations;

/**
 * Class ValueListItem
 *
 * @property string $id
 * @property string $object
 * @property int $created
 * @property string $created_by
 * @property bool $livemode
 * @property string $value
 * @property string $value_list
 *
 * @package JNews\Paywall\gateways\Stripe\Radar
 */
class Value_List_Item extends Api_Resource
{
    const OBJECT_NAME = 'radar.value_list_item';

    use Api_Operations\All;
    use Api_Operations\Create;
    use Api_Operations\Delete;
    use Api_Operations\Retrieve;
}
