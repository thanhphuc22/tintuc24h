<?php

namespace JNews\Paywall\Gateways\Paypal\Lib\Jpaypal\Core;

class Http_Exception extends Io_Exception {
	/**
	 * @var status_code
	 */
	public $status_code;

	public $headers;

	/**
	 * @param $message
	 * @param $status_code
	 * @param $headers
	 */
	public function __construct( $message, $status_code, $headers ) {
		parent::__construct( $message );
		$this->status_code = $status_code;
		$this->headers     = $headers;
	}
}
