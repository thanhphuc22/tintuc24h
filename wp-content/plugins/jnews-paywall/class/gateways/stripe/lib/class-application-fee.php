<?php

namespace JNews\Paywall\Gateways\Stripe\Lib;

/**
 * Class ApplicationFee
 *
 * @property string $id
 * @property string $object
 * @property string $account
 * @property int $amount
 * @property int $amount_refunded
 * @property string $application
 * @property string|null $balance_transaction
 * @property string $charge
 * @property int $created
 * @property string $currency
 * @property bool $livemode
 * @property string|null $originating_transaction
 * @property bool $refunded
 * @property \Stripe\Collection $refunds
 *
 * @package Stripe
 */
class Application_Fee extends Api_Resource
{
    const OBJECT_NAME = 'application_fee';

    use Api_Operations\All;
    use Api_Operations\Nested_Resource;
    use Api_Operations\Retrieve;

    const PATH_REFUNDS = '/refunds';

    /**
     * @param string $id The ID of the application fee on which to create the fee refund.
     * @param array|null $params
     * @param array|string|null $opts
     *
     * @throws Exception\Api_Error_Exception if the request fails
     *
     * @return ApplicationFeeRefund
     */
    public static function createRefund($id, $params = null, $opts = null)
    {
        return self::_createNestedResource($id, static::PATH_REFUNDS, $params, $opts);
    }

    /**
     * @param string $id The ID of the application fee to which the fee refund belongs.
     * @param string $refundId The ID of the fee refund to retrieve.
     * @param array|null $params
     * @param array|string|null $opts
     *
     * @throws Exception\Api_Error_Exception if the request fails
     *
     * @return ApplicationFeeRefund
     */
    public static function retrieveRefund($id, $refundId, $params = null, $opts = null)
    {
        return self::_retrieveNestedResource($id, static::PATH_REFUNDS, $refundId, $params, $opts);
    }

    /**
     * @param string $id The ID of the application fee to which the fee refund belongs.
     * @param string $refundId The ID of the fee refund to update.
     * @param array|null $params
     * @param array|string|null $opts
     *
     * @throws Exception\Api_Error_Exception if the request fails
     *
     * @return ApplicationFeeRefund
     */
    public static function updateRefund($id, $refundId, $params = null, $opts = null)
    {
        return self::_updateNestedResource($id, static::PATH_REFUNDS, $refundId, $params, $opts);
    }

    /**
     * @param string $id The ID of the application fee on which to retrieve the fee refunds.
     * @param array|null $params
     * @param array|string|null $opts
     *
     * @throws Exception\Api_Error_Exception if the request fails
     *
     * @return Collection The list of fee refunds.
     */
    public static function allRefunds($id, $params = null, $opts = null)
    {
        return self::_allNestedResources($id, static::PATH_REFUNDS, $params, $opts);
    }
}
