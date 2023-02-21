<?php

namespace JNews\Paywall\Gateways\Stripe\Lib;

/**
 * Class ThreeDSecure
 *
 * @property string $id
 * @property string $object
 * @property int $amount
 * @property bool $authenticated
 * @property mixed $card
 * @property int $created
 * @property string $currency
 * @property bool $livemode
 * @property string|null $redirect_url
 * @property string $status
 *
 * @package Stripe
 */
class Three_D_Secure extends Api_Resource
{
    const OBJECT_NAME = 'three_d_secure';

    use Api_Operations\Create;
    use Api_Operations\Retrieve;

    /**
     * @return string The endpoint URL for the given class.
     */
    public static function classUrl()
    {
        return "/v1/3d_secure";
    }
}
