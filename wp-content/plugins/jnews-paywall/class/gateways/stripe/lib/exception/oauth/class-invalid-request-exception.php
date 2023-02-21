<?php

namespace JNews\Paywall\Gateways\Stripe\Exception\OAuth;

/**
 * InvalidRequestException is thrown when a code, refresh token, or grant
 * type parameter is not provided, but was required.
 *
 * @package Stripe\Exception\OAuth
 */
class Invalid_Request_Exception extends OAuth_Error_Exception
{
}
