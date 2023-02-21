<?php

namespace JNews\Paywall\Gateways\Stripe\Lib;

/**
 * Class InvoiceItem
 *
 * @property string $id
 * @property string $object
 * @property int $amount
 * @property string $currency
 * @property string $customer
 * @property int $date
 * @property string|null $description
 * @property bool $discountable
 * @property string|null $invoice
 * @property bool $livemode
 * @property \Stripe\StripeObject $metadata
 * @property mixed $period
 * @property \Stripe\Plan|null $plan
 * @property bool $proration
 * @property int $quantity
 * @property string|null $subscription
 * @property string $subscription_item
 * @property array|null $tax_rates
 * @property int|null $unit_amount
 * @property string|null $unit_amount_decimal
 *
 * @package Stripe
 */
class Invoice_Item extends Api_Resource {

	const OBJECT_NAME = 'invoiceitem';

	use Api_Operations\All;
	use Api_Operations\Create;
	use Api_Operations\Delete;
	use Api_Operations\Retrieve;
	use Api_Operations\Update;
}
