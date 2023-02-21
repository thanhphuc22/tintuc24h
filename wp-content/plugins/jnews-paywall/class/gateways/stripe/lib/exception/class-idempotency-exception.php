<?php

namespace JNews\Paywall\Gateways\Stripe\Lib\Exception;

/**
 * IdempotencyException is thrown in cases where an idempotency key was used
 * improperly.
 *
 * @package Stripe\Exception
 */
class Idempotency_Exception extends Api_Error_Exception {

}
