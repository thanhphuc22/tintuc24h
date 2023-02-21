<?php

namespace JNews\Paywall\Gateways\Stripe\Lib\Issuing;

use JNews\Paywall\Gateways\Stripe\Lib\Api_Resource;

/**
 * Class CardDetails
 *
 * @property string $id
 * @property string $object
 * @property Card $card
 * @property string $cvc
 * @property int $exp_month
 * @property int $exp_year
 * @property string $number
 *
 * @package JNews\Paywall\gateways\Stripe\Issuing
 */
class Card_Details extends Api_Resource {

	const OBJECT_NAME = 'issuing.card_details';
}
