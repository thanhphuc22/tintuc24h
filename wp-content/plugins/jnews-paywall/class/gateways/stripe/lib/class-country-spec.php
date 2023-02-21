<?php

namespace JNews\Paywall\Gateways\Stripe\Lib;

/**
 * Class CountrySpec
 *
 * @property string $id
 * @property string $object
 * @property string $default_currency
 * @property mixed $supported_bank_account_currencies
 * @property string[] $supported_payment_currencies
 * @property string[] $supported_payment_methods
 * @property string[] $supported_transfer_countries
 * @property mixed $verification_fields
 *
 * @package Stripe
 */
class Country_Spec extends Api_Resource {

	const OBJECT_NAME = 'country_spec';

	use Api_Operations\All;
	use Api_Operations\Retrieve;
}
