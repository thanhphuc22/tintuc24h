<?php

namespace JNews\Paywall\Gateways\Stripe\Lib;

/**
 * Class Token
 *
 * @property string $id
 * @property string $object
 * @property \Stripe\BankAccount $bank_account
 * @property \Stripe\Card $card
 * @property string|null $client_ip
 * @property int $created
 * @property bool $livemode
 * @property string $type
 * @property bool $used
 *
 * @package Stripe
 */
class Token extends Api_Resource {

	const OBJECT_NAME = 'token';

	use Api_Operations\Create;
	use Api_Operations\Retrieve;

	/**
	 * Possible string representations of the token type.
	 *
	 * @link https://stripe.com/docs/api/tokens/object#token_object-type
	 */
	const TYPE_ACCOUNT      = 'account';
	const TYPE_BANK_ACCOUNT = 'bank_account';
	const TYPE_CARD         = 'card';
	const TYPE_PII          = 'pii';
}
