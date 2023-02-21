<?php

namespace JNews\Paywall\Gateways\Paypal;

use JNews\Paywall\Gateways\Paypal\Lib\Jpaypal\Core\Paypal_Http_Client;
use JNews\Paywall\Gateways\Paypal\Lib\Jpaypal\Jeg_Paypal_Api_Handler;

ini_set( 'error_reporting', E_ALL ); // or error_reporting(E_ALL);
ini_set( 'display_errors', '1' );
ini_set( 'display_startup_errors', '1' );

class Paypal_Api_Credentials {

	/**
	 * @param $credentials
	 * @param null        $refresh_token
	 *
	 * @return Paypal_Http_Client
	 */
	public static function client( $credentials, $refresh_token = null ) {
		if ( ! empty( $credentials['id'] ) && ! empty( $credentials['secret'] ) ) {
			return new Paypal_Http_Client( self::environment( $credentials ), $refresh_token );
		}
		return null;
	}

	/**
	 * @param $credentials
	 *
	 * @return array
	 */
	public static function environment( $credentials ) {
		$paypal_api_handler = new Jeg_Paypal_Api_Handler( $credentials['id'], $credentials['secret'], $credentials['sandbox'] );
		return $paypal_api_handler->environment();
	}
}
