<?php

namespace JNews\Paywall\Gateways\Stripe\Lib\Terminal;

use JNews\Paywall\Gateways\Stripe\Lib\Api_Resource;
use JNews\Paywall\Gateways\Stripe\Lib\Api_Operations;

/**
 * Class ConnectionToken
 *
 * @property string $object
 * @property string $location
 * @property string $secret
 *
 * @package Stripe\Terminal
 */
class Connection_Token extends Api_Resource {

	const OBJECT_NAME = 'terminal.connection_token';

	use Api_Operations\Create;
}
