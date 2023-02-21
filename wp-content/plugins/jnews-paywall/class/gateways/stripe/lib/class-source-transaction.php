<?php

namespace JNews\Paywall\Gateways\Stripe\Lib;

/**
 * Class SourceTransaction
 *
 * @property string $id
 * @property string $object
 * @property int $amount
 * @property int $created
 * @property string $customer_data
 * @property string $currency
 * @property string $type
 * @property mixed $ach_credit_transfer
 *
 * @package Stripe
 */
class Source_Transaction extends Api_Resource {

	const OBJECT_NAME = 'source_transaction';
}
