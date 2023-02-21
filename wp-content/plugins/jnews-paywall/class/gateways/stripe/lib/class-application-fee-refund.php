<?php

namespace JNews\Paywall\Gateways\Stripe\Lib;

use JNews\Paywall\Gateways\Stripe\Lib\Api_Resource;

/**
 * Class ApplicationFeeRefund
 *
 * @property string $id
 * @property string $object
 * @property int $amount
 * @property string $balance_transaction
 * @property int $created
 * @property string $currency
 * @property string $fee
 * @property StripeObject $metadata
 *
 * @package Stripe
 */
class Application_Fee_Refund extends Api_Resource
{
    const OBJECT_NAME = 'fee_refund';

    use Api_Operations\Update {
        save as protected _save;
    }

    /**
     * @return string The API URL for this Stripe refund.
     */
    public function instanceUrl()
    {
        $id = $this['id'];
        $fee = $this['fee'];
        if (!$id) {
            throw new Exception\Unexpected_Value_Exception(
                "Could not determine which URL to request: " .
                "class instance has invalid ID: $id",
                null
            );
        }
        $id = Util\Util::utf8($id);
        $fee = Util\Util::utf8($fee);

        $base = Application_Fee::classUrl();
        $feeExtn = urlencode($fee);
        $extn = urlencode($id);
        return "$base/$feeExtn/refunds/$extn";
    }

    /**
     * @param array|string|null $opts
     *
     * @return Application_Fee_Refund The saved refund.
     */
    public function save($opts = null)
    {
        return $this->_save($opts);
    }
}
