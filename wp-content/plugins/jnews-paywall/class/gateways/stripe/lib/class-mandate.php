<?php

namespace JNews\Paywall\Gateways\Stripe\Lib;

/**
 * Class Mandate
 *
 * @property string $id
 * @property string $object
 * @property mixed $customer_acceptance
 * @property bool $livemode
 * @property mixed|null $multi_use
 * @property string $payment_method
 * @property mixed $payment_method_details
 * @property mixed|null $single_use
 * @property string $status
 * @property string $type
 *
 * @package Stripe
 */
class Mandate extends Api_Resource {

	const OBJECT_NAME = 'mandate';

	use Api_Operations\Retrieve;
}
