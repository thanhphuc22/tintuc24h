<?php

namespace JNews\Paywall\Gateways\Stripe\Lib\Exception;

/**
 * UnknownApiErrorException is thrown when the client library receives an
 * error from the API it doesn't know about. Receiving this error usually
 * means that your client library is outdated and should be upgraded.
 *
 * @package Stripe\Exception
 */
class Unknown_Api_Error_Exception extends Api_Error_Exception {

}
