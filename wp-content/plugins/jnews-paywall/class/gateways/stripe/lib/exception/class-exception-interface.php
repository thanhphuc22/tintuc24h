<?php

namespace JNews\Paywall\Gateways\Stripe\Lib\Exception;

// TODO: remove this check once we drop support for PHP 5
if ( interface_exists( \Throwable::class, false ) ) {
	/**
	 * The base interface for all Stripe exceptions.
	 *
	 * @package Stripe\Exception
	 */
	interface Exception_Interface extends \Throwable {

	}
} else {
	/**
	 * The base interface for all Stripe exceptions.
	 *
	 * @package Stripe\Exception
	 */
    // phpcs:disable PSR1.Classes.ClassDeclaration.MultipleClasses
	interface Exception_Interface {

	}
    // phpcs:enable
}
