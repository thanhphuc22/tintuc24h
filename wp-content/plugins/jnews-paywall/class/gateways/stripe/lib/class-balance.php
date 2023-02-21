<?php

namespace JNews\Paywall\Gateways\Stripe\Lib;

/**
 * Class Balance
 *
 * @property string $object
 * @property array $available
 * @property array $connect_reserved
 * @property bool $livemode
 * @property array $pending
 *
 * @package Stripe
 */
class Balance extends Singleton_Api_Resource
{
    const OBJECT_NAME = 'balance';

    /**
     * @param array|string|null $opts
     *
     * @throws Exception\Api_Error_Exception if the request fails
     *
     * @return Balance
     */
    public static function retrieve($opts = null)
    {
        return self::_singletonRetrieve($opts);
    }
}
