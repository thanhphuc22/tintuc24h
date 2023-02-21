<?php

namespace JNews\Paywall\Gateways\Stripe;

class Stripe_Helper {
    
    public function __construct() {
       /** Do nothing */
    }
    
    /**
	 * Get localized error message.
	 *
	 * @return string
	 */
	public function get_error_message( $error ) {
        if ( 'resource_missing' === $error->code ) {
            return esc_html__( 'Please try to re-input your card or use another card', 'jnews-paywall' );
        }

        $messages = $this->get_messages();

		$message = esc_html__( 'Unable to process your payment, please try again later', 'jnews-paywall' );
		if ( 'card_error' === $error->type ) {
			$message = isset( $messages[ $error->code ] ) ? $messages[ $error->code ] : $error->message;
		} else {
			$message = isset( $messages[ $error->type ] ) ? $messages[ $error->type ] : $error->message;
		}

		return $message;
	}

	/**
	 * Get array error message.
	 *
	 * @return string
	 */
	public function get_messages() {
		return [
			'invalid_number'			=> esc_html__( 'The card number is not a valid credit card number.', 'jnews-paywall' ),
			'invalid_expiry_month'     	=> esc_html__( 'The card\'s expiration month is invalid.', 'jnews-paywall' ),
			'invalid_expiry_year'      	=> esc_html__( 'The card\'s expiration year is invalid.', 'jnews-paywall' ),
			'invalid_cvc'              	=> esc_html__( 'The card\'s security code is invalid.', 'jnews-paywall' ),
			'incorrect_number'         	=> esc_html__( 'The card number is incorrect.', 'jnews-paywall' ),
			'incomplete_number'        	=> esc_html__( 'The card number is incomplete.', 'jnews-paywall' ),
			'incomplete_cvc'           	=> esc_html__( 'The card\'s security code is incomplete.', 'jnews-paywall' ),
			'incomplete_expiry'        	=> esc_html__( 'The card\'s expiration date is incomplete.', 'jnews-paywall' ),
			'expired_card'             	=> esc_html__( 'The card has expired.', 'jnews-paywall' ),
			'incorrect_cvc'            	=> esc_html__( 'The card\'s security code is incorrect.', 'jnews-paywall' ),
			'incorrect_zip'            	=> esc_html__( 'The card\'s zip code failed validation.', 'jnews-paywall' ),
			'invalid_expiry_year_past'	=> esc_html__( 'The card\'s expiration year is in the past', 'jnews-paywall' ),
			'card_declined'            	=> esc_html__( 'The card was declined.', 'jnews-paywall' ),
			'missing'                  	=> esc_html__( 'There is no card on a customer that is being charged.', 'jnews-paywall' ),
			'processing_error'         	=> esc_html__( 'An error occurred while processing the card.', 'jnews-paywall' ),
			'invalid_request_error'    	=> esc_html__( 'Unable to process this payment, please try again or use alternative method.', 'jnews-paywall' ),
			'invalid_sofort_country'   	=> esc_html__( 'The billing country is not accepted by SOFORT. Please try another country.', 'jnews-paywall' ),
			'email_invalid'            	=> esc_html__( 'Invalid email address, please correct and try again.', 'jnews-paywall' ),
			'default_card_error'		=> esc_html__( 'We are unable to authenticate your payment method. Please choose a different payment method and try again.', 'jnews-paywall' ),
			'parameter_invalid_empty'	=> esc_html__( 'Please make sure you have inputted billing detail required fields.', 'jnews-paywall' ),
		];
	}

	/**
	 * Zero decimal currencies.
	 *
	 * @return string
	 */
	public function zero_decimal( $currency ) {
        $currencies = [
			'bif', // Burundian Franc
			'clp', // Chilean Peso
			'djf', // Djiboutian Franc
			'gnf', // Guinean Franc
			'jpy', // Japanese Yen
			'kmf', // Comorian Franc
			'krw', // South Korean Won
			'mga', // Malagasy Ariary
			'pyg', // Paraguayan Guaraní
			'rwf', // Rwandan Franc
			'ugx', // Ugandan Shilling
			'vnd', // Vietnamese Đồng
			'vuv', // Vanuatu Vatu
			'xaf', // Central African Cfa Franc
			'xof', // West African Cfa Franc
			'xpf', // Cfp Franc
		];
		
		return in_array( strtolower( $currency ), $currencies );
	}

	/**
	 * Sanitize statement descriptor text.
	 * 
	 * @return string
	 */
	public static function statement_descriptor( $statement_descriptor = '' ) {
		$disallowed_characters = array( '<', '>', '"', "'" );
		$statement_descriptor = str_replace( $disallowed_characters, '', $statement_descriptor );
		$statement_descriptor = substr( trim( $statement_descriptor ), 0, 22 );

		return $statement_descriptor;
	}

}
