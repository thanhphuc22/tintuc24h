<?php

namespace JNews\Paywall\Gateways\Paypal\Lib\Jpaypal\Core;

use JNews\Paywall\Gateways\Paypal\Lib\Jpaypal\Jeg_Paypal_Api_Handler;
use JNews\Paywall\Gateways\Paypal\Lib\Jpaypal\Jeg_Paypal_Api_Http_Client;

class Paypal_Http_Client extends Jeg_Paypal_Api_Http_Client {
	public $auth_injector;
	private $refresh_token;

	public function __construct( $environment, $refresh_token = null ) {
		parent::__construct( $environment );
		$this->refresh_token = $refresh_token;
		$this->auth_injector = new Authorization_Injector( $this, $environment, $refresh_token );
		$this->add_injector( $this->auth_injector );
		$this->add_injector( new Gzip_Injector() );
		$this->add_injector( new Fpti_Instrumentation_Injector() );
	}

	public function user_agent() {
		$paypal_api_handler = new Jeg_Paypal_Api_Handler();

		return $paypal_api_handler->get_user_agent_value();
	}
}

