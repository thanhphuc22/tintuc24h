<?php

namespace JNews\Paywall\Gateways\Stripe\Lib\Util;

/**
 * A very basic implementation of LoggerInterface that has just enough
 * functionality that it can be the default for this library.
 */
class Default_Logger implements Logger_Interface {

	public function error( $message, array $context = array() ) {
		if ( count( $context ) > 0 ) {
			throw new JNews\Paywall\Gateways\Stripe\Exception\Bad_Method_Call_Exception( 'DefaultLogger does not currently implement context. Please implement if you need it.' );
		}
		error_log( $message );
	}
}
