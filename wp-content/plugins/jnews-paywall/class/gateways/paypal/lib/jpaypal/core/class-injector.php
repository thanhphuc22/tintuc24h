<?php

namespace JNews\Paywall\Gateways\Paypal\Lib\Jpaypal\Core;

/**
 * Interface Injector
 *
 * @package PayPalHttp
 *
 * Interface that can be implemented to apply injectors to Http client.
 *
 * @see Http_Client
 */
interface Injector {
	/**
	 * @param $request
	 */
	public function inject( $request );
}
