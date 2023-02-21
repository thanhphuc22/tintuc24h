<?php

namespace JNews\Paywall\Gateways\Stripe;

use JNews\Paywall\Gateways\Stripe\Lib\Stripe;

ini_set( 'error_reporting', E_ALL ); // or error_reporting(E_ALL);
ini_set( 'display_errors', '1' );
ini_set( 'display_startup_errors', '1' );

class Stripe_Api_Credentials {

	public static function client( $credentials ) {
		$res = new Stripe();
		return $res->setApiKey( $credentials['secret'] );
	}

}