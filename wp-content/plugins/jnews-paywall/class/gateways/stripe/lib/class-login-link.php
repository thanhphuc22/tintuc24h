<?php

namespace JNews\Paywall\Gateways\Stripe\Lib;

/**
 * Class LoginLink
 *
 * @property string $object
 * @property int $created
 * @property string $url
 *
 * @package Stripe
 */
class Login_Link extends Api_Resource {

	const OBJECT_NAME = 'login_link';
}
