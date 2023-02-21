<?php

namespace JNews\Paywall\Gateways\Paypal;

use JNews\Paywall\Gateways\Paypal\Lib\Jpaypal\Jeg_Paypal_Api_Request;

class Paypal_Api_Request extends Jeg_Paypal_Api_Request {
	public function __construct( $request, $param = null ) {
		switch ( $request ) {
			case 'create_product':
				$path = '/v1/catalogs/products?';
				$verb = 'POST';
				break;
			case 'create_plan':
				$path = '/v1/billing/plans?';
				$verb = 'POST';
				break;
			case 'check_plan':
				$path = '/v1/billing/plans/' . $param['plan_id'];
				$verb = 'GET';
				break;
			case 'create_subscription':
				$path = '/v1/billing/subscriptions?';
				$verb = 'POST';
				break;
			case 'check_subscription':
				$path = '/v1/billing/subscriptions/' . $param['order_id'];
				$verb = 'GET';
				break;
			case 'cancel_subscription':
				$path = '/v1/billing/subscriptions/' . $param['order_id'] . '/cancel';
				$verb = 'POST';
				break;
			default:
				break;
		}

		$this->set_capture_request( $path, $verb );
		$this->request->headers['Content-Type'] = 'application/json';
	}

	public function prefer( $prefer ) {
		$this->request->headers['Prefer'] = $prefer;
	}
}
