<?php

namespace JNews\Paywall\Gateways\Stripe\Lib\Util;

use JNews\Paywall\Gateways\Stripe\Lib\Stripe_Object;
use JNews\Paywall\Gateways\Stripe\Lib\Collection;
use JNews\Paywall\Gateways\Stripe\Lib\Account;
use JNews\Paywall\Gateways\Stripe\Lib\Account_Link;
use JNews\Paywall\Gateways\Stripe\Lib\Alipay_Account;
use JNews\Paywall\Gateways\Stripe\Lib\Apple_Pay_Domain;
use JNews\Paywall\Gateways\Stripe\Lib\Application_Fee;
use JNews\Paywall\Gateways\Stripe\Lib\Application_Fee_Refund;
use JNews\Paywall\Gateways\Stripe\Lib\Balance;
use JNews\Paywall\Gateways\Stripe\Lib\Balance_Transaction;
use JNews\Paywall\Gateways\Stripe\Lib\Bank_Account;
use JNews\Paywall\Gateways\Stripe\Lib\Bitcoin_Receiver;
use JNews\Paywall\Gateways\Stripe\Lib\Bitcoin_Transaction;
use JNews\Paywall\Gateways\Stripe\Lib\Capability;
use JNews\Paywall\Gateways\Stripe\Lib\Card;
use JNews\Paywall\Gateways\Stripe\Lib\Charge;
use JNews\Paywall\Gateways\Stripe\Lib\Checkout\Session;
use JNews\Paywall\Gateways\Stripe\Lib\Country_Spec;
use JNews\Paywall\Gateways\Stripe\Lib\Coupon;
use JNews\Paywall\Gateways\Stripe\Lib\Credit_Note;
use JNews\Paywall\Gateways\Stripe\Lib\Credit_Note_Line_Item;
use JNews\Paywall\Gateways\Stripe\Lib\Customer;
use JNews\Paywall\Gateways\Stripe\Lib\Customer_Balance_Transaction;
use JNews\Paywall\Gateways\Stripe\Lib\Discount;
use JNews\Paywall\Gateways\Stripe\Lib\Dispute;
use JNews\Paywall\Gateways\Stripe\Lib\Ephemeral_Key;
use JNews\Paywall\Gateways\Stripe\Lib\Event;
use JNews\Paywall\Gateways\Stripe\Lib\Exchange_Rate;
use JNews\Paywall\Gateways\Stripe\Lib\File;
use JNews\Paywall\Gateways\Stripe\Lib\File_Link;
use JNews\Paywall\Gateways\Stripe\Lib\Invoice;
use JNews\Paywall\Gateways\Stripe\Lib\Invoice_Item;
use JNews\Paywall\Gateways\Stripe\Lib\Invoice_Line_Item;
use JNews\Paywall\Gateways\Stripe\Lib\Issuing\Authorization;
use JNews\Paywall\Gateways\Stripe\Lib\Issuing\Card_Details;
use JNews\Paywall\Gateways\Stripe\Lib\Issuing\Cardholder;
use JNews\Paywall\Gateways\Stripe\Lib\Issuing\Transaction;
use JNews\Paywall\Gateways\Stripe\Lib\Login_Link;
use JNews\Paywall\Gateways\Stripe\Lib\Mandate;
use JNews\Paywall\Gateways\Stripe\Lib\Order;
use JNews\Paywall\Gateways\Stripe\Lib\Order_Item;
use JNews\Paywall\Gateways\Stripe\Lib\Order_Return;
use JNews\Paywall\Gateways\Stripe\Lib\Payment_Intent;
use JNews\Paywall\Gateways\Stripe\Lib\Payment_Method;
use JNews\Paywall\Gateways\Stripe\Lib\Payout;
use JNews\Paywall\Gateways\Stripe\Lib\Person;
use JNews\Paywall\Gateways\Stripe\Lib\Plan;
use JNews\Paywall\Gateways\Stripe\Lib\Price;
use JNews\Paywall\Gateways\Stripe\Lib\Product;
use JNews\Paywall\Gateways\Stripe\Lib\Radar\Early_Fraud_Warning;
use JNews\Paywall\Gateways\Stripe\Lib\Radar\Value_List;
use JNews\Paywall\Gateways\Stripe\Lib\Radar\Value_List_Item;
use JNews\Paywall\Gateways\Stripe\Lib\Recipient;
use JNews\Paywall\Gateways\Stripe\Lib\Recipient_Transfer;
use JNews\Paywall\Gateways\Stripe\Lib\Refund;
use JNews\Paywall\Gateways\Stripe\Lib\Reporting\Report_Run;
use JNews\Paywall\Gateways\Stripe\Lib\Reporting\Report_Type;
use JNews\Paywall\Gateways\Stripe\Lib\Review;
use JNews\Paywall\Gateways\Stripe\Lib\Setup_Intent;
use JNews\Paywall\Gateways\Stripe\Lib\Sigma\Scheduled_Query_Run;
use JNews\Paywall\Gateways\Stripe\Lib\SKU;
use JNews\Paywall\Gateways\Stripe\Lib\Source;
use JNews\Paywall\Gateways\Stripe\Lib\Source_Transaction;
use JNews\Paywall\Gateways\Stripe\Lib\Subscription;
use JNews\Paywall\Gateways\Stripe\Lib\Subscription_Item;
use JNews\Paywall\Gateways\Stripe\Lib\Subscription_Schedule;
use JNews\Paywall\Gateways\Stripe\Lib\Tax_Id;
use JNews\Paywall\Gateways\Stripe\Lib\Tax_Rate;
use JNews\Paywall\Gateways\Stripe\Lib\Three_D_Secure;
use JNews\Paywall\Gateways\Stripe\Lib\Terminal\Connection_Token;
use JNews\Paywall\Gateways\Stripe\Lib\Terminal\Location;
use JNews\Paywall\Gateways\Stripe\Lib\Terminal\Reader;
use JNews\Paywall\Gateways\Stripe\Lib\Token;
use JNews\Paywall\Gateways\Stripe\Lib\Topup;
use JNews\Paywall\Gateways\Stripe\Lib\Transfer;
use JNews\Paywall\Gateways\Stripe\Lib\Transfer_Reversal;
use JNews\Paywall\Gateways\Stripe\Lib\Usage_Record;
use JNews\Paywall\Gateways\Stripe\Lib\Usage_Record_Summary;
use JNews\Paywall\Gateways\Stripe\Lib\Webhook_Endpoint;

abstract class Util {

	private static $isMbstringAvailable   = null;
	private static $isHashEqualsAvailable = null;

	/**
	 * Whether the provided array (or other) is a list rather than a dictionary.
	 * A list is defined as an array for which all the keys are consecutive
	 * integers starting at 0. Empty arrays are considered to be lists.
	 *
	 * @param array|mixed $array
	 * @return boolean true if the given object is a list.
	 */
	public static function isList( $array ) {
		if ( ! is_array( $array ) ) {
			return false;
		}
		if ( $array === array() ) {
			return true;
		}
		if ( array_keys( $array ) !== range( 0, count( $array ) - 1 ) ) {
			return false;
		}
		return true;
	}

	/**
	 * Converts a response from the Stripe API to the corresponding PHP object.
	 *
	 * @param array $resp The response from the Stripe API.
	 * @param array $opts
	 * @return StripeObject|array
	 */
	public static function convertToStripeObject( $resp, $opts ) {
		$types = array(
			// data structures
			Collection::OBJECT_NAME => Collection::class,

			// business objects
			Account::OBJECT_NAME => Account::class,
			Account_Link::OBJECT_NAME => Account_Link::class,
			Alipay_Account::OBJECT_NAME => Alipay_Account::class,
			Apple_Pay_Domain::OBJECT_NAME => Apple_Pay_Domain::class,
			Application_Fee::OBJECT_NAME => Application_Fee::class,
			Application_Fee_Refund::OBJECT_NAME => Application_Fee_Refund::class,
			Balance::OBJECT_NAME => Balance::class,
			Balance_Transaction::OBJECT_NAME => Balance_Transaction::class,
			Bank_Account::OBJECT_NAME => Bank_Account::class,
			Bitcoin_Receiver::OBJECT_NAME => Bitcoin_Receiver::class,
			Bitcoin_Transaction::OBJECT_NAME => Bitcoin_Transaction::class,
			Capability::OBJECT_NAME => Capability::class,
			Card::OBJECT_NAME => Card::class,
			Charge::OBJECT_NAME => Charge::class,
			Session::OBJECT_NAME => Session::class,
			Country_Spec::OBJECT_NAME => Country_Spec::class,
			Coupon::OBJECT_NAME => Coupon::class,
			Credit_Note::OBJECT_NAME => Credit_Note::class,
			Credit_Note_Line_Item::OBJECT_NAME => Credit_Note_Line_Item::class,
			Customer::OBJECT_NAME => Customer::class,
			Customer_Balance_Transaction::OBJECT_NAME => Customer_Balance_Transaction::class,
			Discount::OBJECT_NAME => Discount::class,
			Dispute::OBJECT_NAME => Dispute::class,
			Ephemeral_Key::OBJECT_NAME => Ephemeral_Key::class,
			Event::OBJECT_NAME => Event::class,
			Exchange_Rate::OBJECT_NAME => Exchange_Rate::class,
			File::OBJECT_NAME => File::class,
			File::OBJECT_NAME_ALT => File::class,
			File_Link::OBJECT_NAME => File_Link::class,
			Invoice::OBJECT_NAME => Invoice::class,
			Invoice_Item::OBJECT_NAME => Invoice_Item::class,
			Invoice_Line_Item::OBJECT_NAME => Invoice_Line_Item::class,
			Authorization::OBJECT_NAME => Authorization::class,
			Card::OBJECT_NAME => Card::class,
			Card_Details::OBJECT_NAME => Card_Details::class,
			Cardholder::OBJECT_NAME => Cardholder::class,
			Dispute::OBJECT_NAME => Dispute::class,
			Transaction::OBJECT_NAME => Transaction::class,
			Login_Link::OBJECT_NAME => Login_Link::class,
			Mandate::OBJECT_NAME => Mandate::class,
			Order::OBJECT_NAME => Order::class,
			Order_Item::OBJECT_NAME => Order_Item::class,
			Order_Return::OBJECT_NAME => Order_Return::class,
			Payment_Intent::OBJECT_NAME => Payment_Intent::class,
			Payment_Method::OBJECT_NAME => Payment_Method::class,
			Payout::OBJECT_NAME => Payout::class,
			Person::OBJECT_NAME => Person::class,
			Plan::OBJECT_NAME => Plan::class,
			Price::OBJECT_NAME => Price::class,
			Product::OBJECT_NAME => Product::class,
			Early_Fraud_Warning::OBJECT_NAME => Early_Fraud_Warning::class,
			Value_List::OBJECT_NAME => Value_List::class,
			Value_List_Item::OBJECT_NAME => Value_List_Item::class,
			Recipient::OBJECT_NAME => Recipient::class,
			Recipient_Transfer::OBJECT_NAME => Recipient_Transfer::class,
			Refund::OBJECT_NAME => Refund::class,
			Report_Run::OBJECT_NAME => Report_Run::class,
			Report_Type::OBJECT_NAME => Report_Type::class,
			Review::OBJECT_NAME => Review::class,
			Setup_Intent::OBJECT_NAME => Setup_Intent::class,
			Scheduled_Query_Run::OBJECT_NAME => Scheduled_Query_Run::class,
			SKU::OBJECT_NAME => SKU::class,
			Source::OBJECT_NAME => Source::class,
			Source_Transaction::OBJECT_NAME => Source_Transaction::class,
			Subscription::OBJECT_NAME => Subscription::class,
			Subscription_Item::OBJECT_NAME => Subscription_Item::class,
			Subscription_Schedule::OBJECT_NAME => Subscription_Schedule::class,
			Tax_Id::OBJECT_NAME => Tax_Id::class,
			Tax_Rate::OBJECT_NAME => Tax_Rate::class,
			Three_D_Secure::OBJECT_NAME => Three_D_Secure::class,
			Connection_Token::OBJECT_NAME => Connection_Token::class,
			Location::OBJECT_NAME => Location::class,
			Reader::OBJECT_NAME => Reader::class,
			Token::OBJECT_NAME => Token::class,
			Topup::OBJECT_NAME => Topup::class,
			Transfer::OBJECT_NAME => Transfer::class,
			Transfer_Reversal::OBJECT_NAME => Transfer_Reversal::class,
			Usage_Record::OBJECT_NAME => Usage_Record::class,
			Usage_Record_Summary::OBJECT_NAME => Usage_Record_Summary::class,
			Webhook_Endpoint::OBJECT_NAME => Webhook_Endpoint::class,
		);
		if ( self::isList( $resp ) ) {
			$mapped = array();
			foreach ( $resp as $i ) {
				array_push( $mapped, self::convertToStripeObject( $i, $opts ) );
			}
			return $mapped;
		} elseif ( is_array( $resp ) ) {
			if ( isset( $resp['object'] ) && is_string( $resp['object'] ) && isset( $types[ $resp['object'] ] ) ) {
				$class = $types[ $resp['object'] ];
			} else {
				$class = Stripe_Object::class;
			}
			return $class::constructFrom( $resp, $opts );
		} else {
			return $resp;
		}
	}

	/**
	 * @param string|mixed $value A string to UTF8-encode.
	 *
	 * @return string|mixed The UTF8-encoded string, or the object passed in if
	 *    it wasn't a string.
	 */
	public static function utf8( $value ) {
		if ( self::$isMbstringAvailable === null ) {
			self::$isMbstringAvailable = function_exists( 'mb_detect_encoding' );

			if ( ! self::$isMbstringAvailable ) {
				trigger_error(
					'It looks like the mbstring extension is not enabled. ' .
					'UTF-8 strings will not properly be encoded. Ask your system ' .
					'administrator to enable the mbstring extension, or write to ' .
					'support@stripe.com if you have any questions.',
					E_USER_WARNING
				);
			}
		}

		if ( is_string( $value ) && self::$isMbstringAvailable && mb_detect_encoding( $value, 'UTF-8', true ) != 'UTF-8' ) {
			return utf8_encode( $value );
		} else {
			return $value;
		}
	}

	/**
	 * Compares two strings for equality. The time taken is independent of the
	 * number of characters that match.
	 *
	 * @param string $a one of the strings to compare.
	 * @param string $b the other string to compare.
	 * @return bool true if the strings are equal, false otherwise.
	 */
	public static function secureCompare( $a, $b ) {
		if ( self::$isHashEqualsAvailable === null ) {
			self::$isHashEqualsAvailable = function_exists( 'hash_equals' );
		}

		if ( self::$isHashEqualsAvailable ) {
			return hash_equals( $a, $b );
		} else {
			if ( strlen( $a ) != strlen( $b ) ) {
				return false;
			}

			$result = 0;
			for ( $i = 0; $i < strlen( $a ); $i++ ) {
				$result |= ord( $a[ $i ] ) ^ ord( $b[ $i ] );
			}
			return ( $result == 0 );
		}
	}

	/**
	 * Recursively goes through an array of parameters. If a parameter is an instance of
	 * ApiResource, then it is replaced by the resource's ID.
	 * Also clears out null values.
	 *
	 * @param mixed $h
	 * @return mixed
	 */
	public static function objectsToIds( $h ) {
		if ( $h instanceof JNews\Paywall\Gateways\Stripe\Api_Resource ) {
			return $h->id;
		} elseif ( static::isList( $h ) ) {
			$results = array();
			foreach ( $h as $v ) {
				array_push( $results, static::objectsToIds( $v ) );
			}
			return $results;
		} elseif ( is_array( $h ) ) {
			$results = array();
			foreach ( $h as $k => $v ) {
				if ( is_null( $v ) ) {
					continue;
				}
				$results[ $k ] = static::objectsToIds( $v );
			}
			return $results;
		} else {
			return $h;
		}
	}

	/**
	 * @param array $params
	 *
	 * @return string
	 */
	public static function encodeParameters( $params ) {
		$flattenedParams = self::flattenParams( $params );
		$pieces          = array();
		foreach ( $flattenedParams as $param ) {
			list($k, $v) = $param;
			array_push( $pieces, self::urlEncode( $k ) . '=' . self::urlEncode( $v ) );
		}
		return implode( '&', $pieces );
	}

	/**
	 * @param array       $params
	 * @param string|null $parentKey
	 *
	 * @return array
	 */
	public static function flattenParams( $params, $parentKey = null ) {
		$result = array();

		foreach ( $params as $key => $value ) {
			$calculatedKey = $parentKey ? "{$parentKey}[{$key}]" : $key;

			if ( self::isList( $value ) ) {
				$result = array_merge( $result, self::flattenParamsList( $value, $calculatedKey ) );
			} elseif ( is_array( $value ) ) {
				$result = array_merge( $result, self::flattenParams( $value, $calculatedKey ) );
			} else {
				array_push( $result, array( $calculatedKey, $value ) );
			}
		}

		return $result;
	}

	/**
	 * @param array  $value
	 * @param string $calculatedKey
	 *
	 * @return array
	 */
	public static function flattenParamsList( $value, $calculatedKey ) {
		$result = array();

		foreach ( $value as $i => $elem ) {
			if ( self::isList( $elem ) ) {
				$result = array_merge( $result, self::flattenParamsList( $elem, $calculatedKey ) );
			} elseif ( is_array( $elem ) ) {
				$result = array_merge( $result, self::flattenParams( $elem, "{$calculatedKey}[{$i}]" ) );
			} else {
				array_push( $result, array( "{$calculatedKey}[{$i}]", $elem ) );
			}
		}

		return $result;
	}

	/**
	 * @param string $key A string to URL-encode.
	 *
	 * @return string The URL-encoded string.
	 */
	public static function urlEncode( $key ) {
		$s = urlencode( $key );

		// Don't use strict form encoding by changing the square bracket control
		// characters back to their literals. This is fine by the server, and
		// makes these parameter strings easier to read.
		$s = str_replace( '%5B', '[', $s );
		$s = str_replace( '%5D', ']', $s );

		return $s;
	}

	public static function normalizeId( $id ) {
		if ( is_array( $id ) ) {
			$params = $id;
			$id     = $params['id'];
			unset( $params['id'] );
		} else {
			$params = array();
		}
		return array( $id, $params );
	}

	/**
	 * Returns UNIX timestamp in milliseconds
	 *
	 * @return integer current time in millis
	 */
	public static function currentTimeMillis() {
		return (int) round( microtime( true ) * 1000 );
	}
}
