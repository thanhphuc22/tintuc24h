<?php

/**
 * JNews Paywall Helper
 *
 * @author Jegtheme
 * @since 1.0.0
 * @package jnews-paywall
 */

/**
 * Get page list
 *
 * @return array
 */
if ( ! function_exists( 'jpw_pages_list' ) ) {
	function jpw_pages_list() {
		$pages       = get_pages( array( 'post_status' => 'publish' ) );
		$page_option = array( 'none' => esc_html__( '-Select Page-', 'jnews-paywall' ) );

		foreach ( $pages as $page ) {
			$page_option[ $page->ID ] = $page->post_title;
		}

		return $page_option;
	}
}

if ( ! function_exists( 'jpw_wc_multiple_option' ) ) {
	/**
	 * Custom wc option.
	 *
	 * @param $args
	 */
	function jpw_wc_multiple_option( $args ) {
		$args    = wp_parse_args(
			$args,
			array(
				'class'             => 'multiple input',
				'style'             => '',
				'wrapper_class'     => '',
				'name'              => $args['id'],
				'desc_tip'          => false,
				'custom_attributes' => array(),
				'options'           => array(),
			)
		);
		$options = '';
		if ( is_array( $args['options'] ) && ! empty( $args['options'] ) ) {
			foreach ( $args['options'] as $id => $field ) {
				$type = $field['type'];
				if ( function_exists( 'woocommerce_' . $type ) ) {
					unset( $field['type'] );
					$field['wrapper_class'] = 'multiple-item';
					$field['id']            = $id;
					ob_start();
					call_user_func( 'woocommerce_' . $type, $field );
					$options .= ob_get_clean();
				}
			}
		}

		$wrapper_attributes = array(
			'class' => $args['wrapper_class'] . " form-field {$args['id']}_field",
		);

		$label_attributes = array(
			'for' => $args['id'],
		);

		$tooltip     = ! empty( $args['description'] ) && false !== $args['desc_tip'] ? $args['description'] : '';
		$description = ! empty( $args['description'] ) && false === $args['desc_tip'] ? $args['description'] : '';
		$options     = ! empty( $options ) ? str_replace( '<p', '<span', $options ) : false;
		$options     = ! empty( $options ) ? str_replace( '</p', '</span', $options ) : false;
		if ( class_exists( 'WooCommerce' ) ) {
			?>
			<p <?php echo wc_implode_html_attributes( $wrapper_attributes ); // WPCS: XSS ok. ?>>
				<label <?php echo wc_implode_html_attributes( $label_attributes ); // WPCS: XSS ok. ?>><?php echo wp_kses_post( $args['label'] ); ?></label>
				<?php if ( $tooltip ) : ?>
					<?php echo wc_help_tip( $tooltip ); // WPCS: XSS ok. ?>
				<?php endif; ?>
				<?php if ( $options ) : ?>
					<span class="wrap"><?php echo $options; ?></span>
				<?php endif; ?>
				<?php if ( $description ) : ?>
					<span class="description"><?php echo wp_kses_post( $description ); ?></span>
				<?php endif; ?>
			</p>
			<?php
		}
	}
}

if ( ! function_exists( 'jpw_timezone_offset' ) ) {
	/**
	 * Get payment timezone offset in seconds.
	 *
	 * @param int $payment_timezone
	 *
	 * @return float|int
	 * @since 1.0.0
	 */
	function jpw_timezone_offset( $payment_timezone = 0 ) {
		return (float) $payment_timezone * HOUR_IN_SECONDS;
	}
}

if ( ! function_exists( 'jpw_convert_payment_time' ) ) {
	/**
	 * Convert Payment Date Time
	 *
	 * @param $payment_date_time
	 *
	 * @param $payment_timezone
	 *
	 * @return string
	 * @since 1.0.0
	 */
	function jpw_convert_payment_time( $payment_date_time, $payment_timezone ) {
		try {
			if ( ! empty( $payment_date_time ) ) {
				$timezone_format = 'Y-m-d H:i:s';
				$date            = new DateTime( $payment_date_time ); // UTC.
				if ( ! empty( $payment_timezone ) ) {
					$offset  = (float) $payment_timezone;
					$hours   = (int) $offset;
					$minutes = ( $offset - $hours );

					$sign      = ( $offset < 0 ) ? '-' : '+';
					$abs_hour  = abs( $hours );
					$abs_mins  = abs( $minutes * 60 );
					$tz_offset = sprintf( '%s%02d:%02d', $sign, $abs_hour, $abs_mins );
					$timezone  = new DateTimeZone( $tz_offset );

					$date = new DateTime( $payment_date_time, $timezone ); // PDT.
				}

				if ( get_option( 'timezone_string' ) || ! empty( get_option( 'gmt_offset' ) ) ) {
					$timezone = wp_timezone();
					$date->setTimezone( $timezone ); // Convert to local time.
				}

				$payment_date_time = $date->format( $timezone_format );
			}

			return $payment_date_time;
		} catch ( Exception $e ) {
			return $payment_date_time;
		}
	}
}


if ( ! function_exists( 'jpw_timezone_list' ) ) {
	/**
	 * Gives a list of timezone.
	 *
	 * @since 1.0.0
	 */
	function jpw_timezone_list() {
		$structure = array();

		// Do manual UTC offsets.
		$offset_range = array(
			- 12,
			- 11.5,
			- 11,
			- 10.5,
			- 10,
			- 9.5,
			- 9,
			- 8.5,
			- 8,
			- 7.5,
			- 7,
			- 6.5,
			- 6,
			- 5.5,
			- 5,
			- 4.5,
			- 4,
			- 3.5,
			- 3,
			- 2.5,
			- 2,
			- 1.5,
			- 1,
			- 0.5,
			0,
			0.5,
			1,
			1.5,
			2,
			2.5,
			3,
			3.5,
			4,
			4.5,
			5,
			5.5,
			5.75,
			6,
			6.5,
			7,
			7.5,
			8,
			8.5,
			8.75,
			9,
			9.5,
			10,
			10.5,
			11,
			11.5,
			12,
			12.75,
			13,
			13.75,
			14,
		);
		foreach ( $offset_range as $offset ) {
			$offset_value = $offset;

			if ( 0 <= $offset ) {
				$offset_name = '+' . $offset;
			} else {
				$offset_name = (string) $offset;
			}

			$offset_name                            = str_replace(
				array( '.25', '.5', '.75' ),
				array( ':15', ':30', ':45' ),
				$offset_name
			);
			$offset_name                            = 'UTC' . $offset_name;
			$structure[ esc_attr( $offset_value ) ] = esc_html( $offset_name );

		}

		return $structure;
	}
}

/**
 * Change Dashboard Menu Order
 *
 * @return array
 */
if ( ! function_exists( 'jpw_menu_order' ) ) {
	add_filter( 'custom_menu_order', '__return_true' );
	add_filter( 'menu_order', 'jpw_menu_order' );

	function jpw_menu_order( $menu_order ) {
		$admin_menu = array( 'post-paywall' );

		array_splice( $menu_order, 4, 0, $admin_menu );

		return array(
			$menu_order[0],
			$menu_order[1],
			$menu_order[2],
			$menu_order[3],
			$menu_order[4],
		);
	}
}

/** Print Translation */
if ( ! function_exists( 'jnews_print_translation' ) ) {
	function jnews_print_translation( $string, $domain, $name ) {
		do_action( 'jnews_print_translation', $string, $domain, $name );
	}
}

if ( ! function_exists( 'jnews_print_main_translation' ) ) {
	add_action( 'jnews_print_translation', 'jnews_print_main_translation', 10, 2 );

	function jnews_print_main_translation( $string, $domain ) {
		call_user_func_array( 'esc_html_e', array( $string, $domain ) );
	}
}

/** Return Translation */
if ( ! function_exists( 'jnews_return_translation' ) ) {
	function jnews_return_translation( $string, $domain, $name, $escape = true ) {
		return apply_filters( 'jnews_return_translation', $string, $domain, $name, $escape );
	}
}

if ( ! function_exists( 'jnews_return_main_translation' ) ) {
	add_filter( 'jnews_return_translation', 'jnews_return_main_translation', 10, 4 );

	function jnews_return_main_translation( $string, $domain, $name, $escape = true ) {
		if ( $escape ) {
			return call_user_func_array( 'esc_html__', array( $string, $domain ) );
		} else {
			return call_user_func_array( '__', array( $string, $domain ) );
		}

	}
}

/**
 * Load Text Domain
 */
function jnews_paywall_load_textdomain() {
	load_plugin_textdomain( JNEWS_PAYWALL, false, basename( __DIR__ ) . '/languages/' );
}

jnews_paywall_load_textdomain();

/**
 * Logging Variable/Object in php_error_log file
 * Note : Use this for variable/object that cannot be printed to a html page
 */
if ( ! function_exists( 'var_error_log' ) ) {
	function var_error_log( $object = null ) {
		ob_start(); // start buffer capture.
		print_r( $object ); // dump the values.
		$contents = ob_get_contents(); // put the buffer into a variable.
		ob_end_clean(); // end capture.
		error_log( $contents ); // log contents of the result of var_dump( $object ).
	}
}

/**
 * Check subscription product
 */
if ( ! function_exists( 'is_jpw_subscribe' ) ) {
	function is_jpw_subscribe( $order_id = null ) {
		$order = null;

		if ( isset( $order_id ) ) {
			$order = new WC_Order( $order_id );
		} elseif ( isset( $_GET['pay_for_order'] ) && isset( $_GET['key'] ) ) {
			$order_id = wc_get_order_id_by_order_key( wc_clean( wp_unslash( (int) sanitize_text_field( $_GET['key'] ) ) ) );
			$order    = new WC_Order( $order_id );
		} elseif ( is_wc_endpoint_url( 'add-payment-method' ) ) {
			return false;
		} else {
			// do nothing
		}

		if ( isset( $order ) ) {
			foreach ( $order->get_items() as $item ) {
				$product = wc_get_product( $item['product_id'] );

				if ( $product->is_type( 'paywall_subscribe' ) ) {
					return true;
				}
			}
		} else {
			if ( ! is_null( WC()->cart ) ) {
				foreach ( WC()->cart->get_cart() as $cart_item ) {
					$product = wc_get_product( $cart_item['product_id'] );

					if ( $product->is_type( 'paywall_subscribe' ) ) {
						return true;
					}
				}
			}
		}

		return false;
	}
}

/**
 * Check unlock product
 */
if ( ! function_exists( 'is_jpw_unlock' ) ) {
	function is_jpw_unlock( $order_id = null ) {
		$order = null;

		if ( isset( $order_id ) ) {
			$order = new WC_Order( $order_id );
		} elseif ( isset( $_GET['pay_for_order'] ) && isset( $_GET['key'] ) ) {
			$order_id = wc_get_order_id_by_order_key( wc_clean( wp_unslash( sanitize_text_field( $_GET['key'] ) ) ) );
			$order    = new WC_Order( $order_id );
		} elseif ( is_wc_endpoint_url( 'add-payment-method' ) ) {
			return false;
		} else {
			// do nothing
		}

		if ( isset( $order ) ) {
			foreach ( $order->get_items() as $item ) {
				$product = wc_get_product( $item['product_id'] );

				if ( $product->is_type( 'paywall_unlock' ) ) {
					return true;
				}
			}
		} else {
			if ( ! is_null( WC()->cart ) ) {
				foreach ( WC()->cart->get_cart() as $cart_item ) {
					$product = wc_get_product( $cart_item['product_id'] );

					if ( $product->is_type( 'paywall_unlock' ) ) {
						return true;
					}
				}
			}
		}

		return false;
	}
}

/**
 * Check WCS active
 */
if ( ! function_exists( 'jnews_is_wcs_active' ) ) {
	function jnews_is_wcs_active() {
		if ( function_exists( 'wcs_get_subscription' ) ) {
			return true;
		}
		return false;
	}
}

/**
 * Check subscription product
 */
if ( ! function_exists( 'jpw_ads_global_enable' ) ) {
	function jpw_ads_global_enable( $flag, $post_id ) {
		if ( get_theme_mod( 'jpw_subscribe_ads' ) && is_user_logged_in() && get_user_option( 'jpw_subscribe_status', get_current_user_id() ) ) {
			$flag = false;
		} elseif ( get_theme_mod( 'jpw_unlock_ads' ) ) {
			$user_post_lists = get_user_option( 'jpw_unlocked_post_list', get_current_user_id() ) ? get_user_option( 'jpw_unlocked_post_list', get_current_user_id() ) : array();
			if ( in_array( (int) $post_id, $user_post_lists, true ) ) {
				$flag = false;
			}
		}

		return $flag;
	}
}

add_filter( 'jnews_ads_global_enable', 'jpw_ads_global_enable', 10, 2 );
