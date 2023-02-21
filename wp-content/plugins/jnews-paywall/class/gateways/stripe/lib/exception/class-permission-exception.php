<?php

namespace JNews\Paywall\Gateways\Stripe\Lib\Exception;

/**
 * PermissionException is thrown in cases where access was attempted on a
 * resource that wasn't allowed.
 *
 * @package Stripe\Exception
 */
class Permission_Exception extends Api_Error_Exception
{
}
