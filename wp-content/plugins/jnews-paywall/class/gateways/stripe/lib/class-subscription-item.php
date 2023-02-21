<?php

namespace JNews\Paywall\Gateways\Stripe\Lib;

/**
 * Class SubscriptionItem
 *
 * @property string $id
 * @property string $object
 * @property mixed|null $billing_thresholds
 * @property int $created
 * @property \Stripe\StripeObject $metadata
 * @property \Stripe\Plan $plan
 * @property int $quantity
 * @property string $subscription
 * @property array|null $tax_rates
 *
 * @package Stripe
 */
class Subscription_Item extends Api_Resource
{
    const OBJECT_NAME = 'subscription_item';

    use Api_Operations\All;
    use Api_Operations\Create;
    use Api_Operations\Delete;
    use Api_Operations\Nested_Resource;
    use Api_Operations\Retrieve;
    use Api_Operations\Update;

    const PATH_USAGE_RECORDS = "/usage_records";

    /**
     * @param string|null $id The ID of the subscription item on which to create the usage record.
     * @param array|null $params
     * @param array|string|null $opts
     *
     * @throws \Exception\Api_Error_Exception if the request fails
     *
     * @return ApiResource
     */
    public static function createUsageRecord($id, $params = null, $opts = null)
    {
        return self::_createNestedResource($id, static::PATH_USAGE_RECORDS, $params, $opts);
    }

    /**
     * @deprecated usageRecordSummaries is deprecated. Please use SubscriptionItem::allUsageRecordSummaries instead.
     *
     * @param array|null $params
     * @param array|string|null $opts
     *
     * @throws \Exception\Api_Error_Exception if the request fails
     *
     * @return Collection The list of usage record summaries.
     */
    public function usageRecordSummaries($params = null, $opts = null)
    {
        $url = $this->instanceUrl() . '/usage_record_summaries';
        list($response, $opts) = $this->_request('get', $url, $params, $opts);
        $obj = \Stripe\Util\Util::convertToStripeObject($response, $opts);
        $obj->setLastResponse($response);
        return $obj;
    }

    /**
     * @param string $id
     * @param array|null $params
     * @param array|string|null $opts
     *
     * @throws \Exception\Api_Error_Exception if the request fails
     *
     * @return Collection The list of usage record summaries.
     */
    public static function allUsageRecordSummaries($id, $params = null, $opts = null)
    {
        return self::_allNestedResources($id, '/usage_record_summaries', $params, $opts);
    }
}
