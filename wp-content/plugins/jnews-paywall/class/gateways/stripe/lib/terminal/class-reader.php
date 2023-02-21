<?php

namespace JNews\Paywall\Gateways\Stripe\Lib\Terminal;

use JNews\Paywall\Gateways\Stripe\Lib\Api_Resource;
use JNews\Paywall\Gateways\Stripe\Lib\Api_Operations;

/**
 * Class Reader
 *
 * @property string $id
 * @property string $object
 * @property string|null $device_sw_version
 * @property string $device_type
 * @property string|null $ip_address
 * @property string $label
 * @property bool $livemode
 * @property string|null $location
 * @property \Stripe\StripeObject $metadata
 * @property string $serial_number
 * @property string|null $status
 *
 * @package Stripe\Terminal
 */
class Reader extends Api_Resource
{
    const OBJECT_NAME = 'terminal.reader';

    use Api_Operations\All;
    use Api_Operations\Create;
    use Api_Operations\Delete;
    use Api_Operations\Retrieve;
    use Api_Operations\Update;
}
