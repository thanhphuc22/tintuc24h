<?php

namespace JNews\Paywall\Gateways\Stripe\Lib;

/**
 * Class ApplePayDomain
 *
 * @property string $id
 * @property string $object
 * @property int $created
 * @property string $domain_name
 * @property bool $livemode
 *
 * @package Stripe
 */
class Apple_Pay_Domain extends Api_Resource
{
    const OBJECT_NAME = 'apple_pay_domain';

    use Api_Operations\All;
    use Api_Operations\Create;
    use Api_Operations\Delete;
    use Api_Operations\Retrieve;

    /**
     * @return string The class URL for this resource. It needs to be special
     *    cased because it doesn't fit into the standard resource pattern.
     */
    public static function classUrl()
    {
        return '/v1/apple_pay/domains';
    }
}
