<?php

namespace JNews\Paywall\Gateways\Stripe;

use Automattic\WooCommerce\Admin\API\Customers;
use Exception;
use JNews\Paywall\Gateways\Stripe\Lib\Product;
use JNews\Paywall\Gateways\Stripe\Lib\Subscription;
use JNews\Paywall\Gateways\Stripe\Lib\Customer;
use JNews\Paywall\Gateways\Stripe\Lib\Webhook_Endpoint;
use JNews\Paywall\Gateways\Stripe\Lib\Payment_Intent;
use JNews\Paywall\Gateways\Stripe\Lib\Invoice;
use JNews\Paywall\Gateways\Stripe\Lib\Charge;
use JNews\Paywall\Gateways\Stripe\Lib\Price;

class Stripe_Api_Request {

	private $response;
	private $error;

	function __construct( $request, $args ) {
		try {
			$this->error = false;
			switch ( $request ) {
				case 'create_price':
					$this->response = Price::create( $args );
					break;
				case 'check_price':
					$this->response = Price::retrieve( $args );
					break;
				case 'create_product':
					$this->response = Product::create( $args );
					break;
				case 'check_product':
					$this->response = Product::retrieve( $args );
					break;
				case 'update_product':
					$this->response = Product::update( $args[0], $args[1] );
					break;
				case 'create_subscription':
					$this->response = Subscription::create( $args );
					break;
				case 'check_subscription':
					$this->response = Subscription::retrieve( $args );
					break;
				case 'cancel_subscription':
					$this->response = Subscription::retrieve( $args )->delete();
					break;
				case 'update_subscription':
					$this->response = Subscription::update( $args[0], $args[1] );
					break;
				case 'create_customer':
					$this->response = Customer::create( $args );
					break;
				case 'check_customer':
					$this->response = Customer::retrieve( $args );
					break;
				case 'update_customer':
					$this->response = Customer::update( $args[0], $args[1] );
					break;
				case 'check_source':
					$this->response = Customer::retrieveSource( $args, null );
					break;
				case 'delete_source':
					$this->response = Customer::deleteSource( $args[0], $args[1] );
					break;
				case 'attach_source':
					$this->response = Customer::createSource( $args[0], $args[1] );
					break;
				case 'create_webhook':
					$this->response = Webhook_Endpoint::create( $args );
					break;
				case 'check_intent':
					$this->response = Payment_Intent::retrieve( $args );
					break;
				case 'update_intent':
					$this->response = Payment_Intent::update( $args[0], $args[1] );
					break;
				case 'confirm_intent':
					$payment_intent = Payment_Intent::retrieve( $args[0] );
					$this->response = $payment_intent->confirm( $args[1] );
					break;
				case 'check_intent':
					$this->response = Payment_Intent::retrieve( $args );
					break;
				case 'delete_intent':
					$this->response = Payment_Intent::delete( $args );
					break;
				case 'check_invoice':
					$this->response = Invoice::retrieve( $args );
					break;
				case 'check_charge':
					$this->response = Charge::retrieve( $args );
					break;
				case 'create_payment':
					$this->response = Payment_Intent::create( $args );
					break;
				default:
					break;
			}
		} catch( Exception $e ) {
			$this->response = $e->getError();
			$this->error = true;
		}
	}

	function get_response() {
		return $this->response;
	}

	function is_error() {
		return $this->error;
	}

}
