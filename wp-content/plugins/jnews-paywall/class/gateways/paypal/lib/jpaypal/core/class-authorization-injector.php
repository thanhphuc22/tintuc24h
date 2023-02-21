<?php

namespace JNews\Paywall\Gateways\Paypal\Lib\Jpaypal\Core;

use JNews\Paywall\Gateways\Paypal\Lib\Jpaypal\Jeg_Paypal_Api_Credentials;

class Authorization_Injector extends Jeg_Paypal_Api_Credentials {
	private $client;
	private $environment;
	private $refresh_token;

	public function __construct( $client, $environment, $refresh_token ) {
		$this->client        = $client;
		$this->environment   = $environment;
		$this->refresh_token = $refresh_token;
	}

	public function inject( $request ) {
		parent::auth_inject( $request, $this->environment );
	}
}
