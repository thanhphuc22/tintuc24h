<?php

namespace JNews\Paywall\Gateways\Stripe\Lib;

abstract class Webhook_Signature {

	const EXPECTED_SCHEME = 'v1';

	/**
	 * Verifies the signature header sent by Stripe. Throws an
	 * Exception\Signature_Verification_Exception exception if the verification fails for
	 * any reason.
	 *
	 * @param string $payload the payload sent by Stripe.
	 * @param string $header the contents of the signature header sent by
	 *  Stripe.
	 * @param string $secret secret used to generate the signature.
	 * @param int    $tolerance maximum difference allowed between the header's
	 *     timestamp and the current time
	 * @throws Exception\Signature_Verification_Exception if the verification fails.
	 * @return bool
	 */
	public static function verifyHeader( $payload, $header, $secret, $tolerance = null ) {
		// Extract timestamp and signatures from header
		$timestamp  = self::getTimestamp( $header );
		$signatures = self::getSignatures( $header, self::EXPECTED_SCHEME );
		if ( $timestamp == -1 ) {
			throw Exception\Signature_Verification_Exception::factory(
				'Unable to extract timestamp and signatures from header',
				$payload,
				$header
			);
		}
		if ( empty( $signatures ) ) {
			throw Exception\Signature_Verification_Exception::factory(
				'No signatures found with expected scheme',
				$payload,
				$header
			);
		}

		// Check if expected signature is found in list of signatures from
		// header
		$signedPayload     = "$timestamp.$payload";
		$expectedSignature = self::computeSignature( $signedPayload, $secret );
		$signatureFound    = false;
		foreach ( $signatures as $signature ) {
			if ( Util\Util::secureCompare( $expectedSignature, $signature ) ) {
				$signatureFound = true;
				break;
			}
		}
		if ( ! $signatureFound ) {
			throw Exception\Signature_Verification_Exception::factory(
				'No signatures found matching the expected signature for payload',
				$payload,
				$header
			);
		}

		// Check if timestamp is within tolerance
		if ( ( $tolerance > 0 ) && ( abs( time() - $timestamp ) > $tolerance ) ) {
			throw Exception\Signature_Verification_Exception::factory(
				'Timestamp outside the tolerance zone',
				$payload,
				$header
			);
		}

		return true;
	}

	/**
	 * Extracts the timestamp in a signature header.
	 *
	 * @param string $header the signature header
	 * @return int the timestamp contained in the header, or -1 if no valid
	 *  timestamp is found
	 */
	private static function getTimestamp( $header ) {
		$items = explode( ',', $header );

		foreach ( $items as $item ) {
			$itemParts = explode( '=', $item, 2 );
			if ( $itemParts[0] == 't' ) {
				if ( ! is_numeric( $itemParts[1] ) ) {
					return -1;
				}
				return intval( $itemParts[1] );
			}
		}

		return -1;
	}

	/**
	 * Extracts the signatures matching a given scheme in a signature header.
	 *
	 * @param string $header the signature header
	 * @param string $scheme the signature scheme to look for.
	 * @return array the list of signatures matching the provided scheme.
	 */
	private static function getSignatures( $header, $scheme ) {
		 $signatures = array();
		$items       = explode( ',', $header );

		foreach ( $items as $item ) {
			$itemParts = explode( '=', $item, 2 );
			if ( $itemParts[0] == $scheme ) {
				array_push( $signatures, $itemParts[1] );
			}
		}

		return $signatures;
	}

	/**
	 * Computes the signature for a given payload and secret.
	 *
	 * The current scheme used by Stripe ("v1") is HMAC/SHA-256.
	 *
	 * @param string $payload the payload to sign.
	 * @param string $secret the secret used to generate the signature.
	 * @return string the signature as a string.
	 */
	private static function computeSignature( $payload, $secret ) {
		 return hash_hmac( 'sha256', $payload, $secret );
	}
}