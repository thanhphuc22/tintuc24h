<?php

/**
 * JNews Paywall Class
 *
 * @author Jegtheme
 * @since 1.0.0
 * @package jnews-paywall
 */

namespace JNews\Paywall\Woocommerce;

use DateInterval;
use DateTime;
use DateTimeZone;
use Exception;
use JNews\Paywall\Gateways\Paypal\Paypal_Api;
use JNews\Paywall\Gateways\Stripe\Stripe_Api;
use JPW_Paypal;
use JPW_Stripe;

/**
 * Class Order
 *
 * @package JNews\Paywall\Woocommerce
 */
class Order {
	/**
	 * @var Order
	 */
	private static $instance;

	/**
	 * Order constructor.
	 */
	private function __construct() {
		add_action( 'admin_notices', array( $this, 'paywall_notice' ) );
		add_action( 'wp_ajax_dismiss_paywall_notice', array( $this, 'dismiss_paywall_notice' ) );
		add_action( 'wp_ajax_nopriv_dismiss_paywall_notice', array( $this, 'dismiss_paywall_notice' ) );

		// actions.
		add_filter( 'woocommerce_payment_complete_order_status', array( $this, 'payment_complete_order_status' ), 99, 3 );
		add_action( 'woocommerce_order_status_changed', array( $this, 'order_paid' ), 99, 3 );
		add_action( 'woocommerce_add_to_cart', array( $this, 'product_added' ), 10, 2 );
		add_action( 'woocommerce_before_thankyou', array( $this, 'auto_complete_order' ) );
		add_action( 'template_redirect', array( $this, 'redirect_after_login' ) );

		/** WCS Integration */
		add_action( 'woocommerce_add_to_cart', array( $this, 'subscription_added' ), 10, 2 );
		add_filter( 'woocommerce_payment_complete_order_status', array( $this, 'auto_complete_order_wcs' ), 10, 3 );
		add_action( 'woocommerce_subscription_status_updated', array( $this, 'on_subscription_status_changed' ) );
		add_action( 'woocommerce_subscription_status_active', array( $this, 'process_checkout' ) );
	}

	/**
	 *  Update subscribe status after the subscription specified with $subscription has had its status changed.
	 *
	 * @param object $subscription An instance of a WC_Subscription object
	 */
	public function process_checkout( $subscription ) {
		if ( jnews_is_wcs_active() ) {
			if ( ! self::should_connect_paywall( $subscription ) ) {
				return;
			}
			$this->subscribe_status( $subscription );
		}
	}

	/**
	 * Update user subscription status
	 *
	 * @param object $subscription An instance of a WC_Subscription object
	 */
	public function subscribe_status( $subscription ) {
		if ( jnews_is_wcs_active() ) {
			$data    = $subscription->get_data();
			$user_id = $subscription->get_user_id();
			$expired = new \DateTime();

			if ( isset( $data['schedule_next_payment'] ) && is_object( $data['schedule_next_payment'] ) ) {
				$next_payment_date = $data['schedule_next_payment']->getTimestamp();
				$expired->setTimestamp( (int) $next_payment_date );
			}
			$expired->setTimezone( new \DateTimeZone( 'UTC' ) );
			$expired = $expired->format( 'Y-m-d H:i:s' );

			update_user_option( $user_id, 'jpw_subscribe_id', $data['id'] );
			update_user_option( $user_id, 'jpw_subscribe_status', 'ACTIVE' );
			update_user_option( $user_id, 'jpw_expired_date', $expired );
		}
	}

	/**
	 * Check if subscription product is set for JNews Paywall
	 *
	 * @param  mixed $subscription
	 * @return void
	 */
	public static function should_connect_paywall( $subscription ) {
		if ( function_exists( 'wcs_get_subscription' ) ) {
			$order_items    = $subscription->get_items();
			$order_products = array_filter(
				array_map(
					function( $item ) {
						return $item->get_product();
					},
					$order_items
				),
				function( $product ) {
					return ! ! $product;
				}
			);
			if ( count( $order_products ) > 0 ) {
				$is_wcs_jpw = array_reduce(
					$order_products,
					function( $virtual_order_so_far, $product ) {
						return $virtual_order_so_far && $product->is_virtual() && 'subscription' === $product->get_type() && 'yes' === $product->get_meta( '_jeg_subscription_paywall' );
					},
					true
				);
				if ( $is_wcs_jpw ) {
					return true;
				}
			}
		}
		return false;
	}

	/**
	 * Fire whenever a subscription's status is changed.
	 *
	 * @param object $subscription An instance of a WC_Subscription object
	 */
	public function on_subscription_status_changed( $subscription ) {
		if ( jnews_is_wcs_active() ) {
			$is_cancelled = $subscription->has_status( 'cancelled' );
			$is_expired   = $subscription->has_status( 'expired' );

			if ( $is_cancelled || $is_expired ) {
				error_log( 'expire/cancel' );
				$user_id          = $subscription->get_user_id();
				$jpw_subscribe_id = get_user_option( 'jpw_expired_date', $user_id );
				if ( $subscription->get_id() === $jpw_subscribe_id ) {
					update_user_option( $user_id, 'jpw_subscribe_id', false );
					update_user_option( $user_id, 'jpw_subscribe_status', false );
					update_user_option( $user_id, 'jpw_expired_date', false );
				}
			}
		}
	}

	/**
	 * Triggers when a subscription switch is added to the cart.
	 *
	 * @param string $cart_item_key The new cart item's key.
	 * @param int    $product_id The product added to the cart.
	 */
	public function subscription_added( $cart_item_key, $product_id ) {
		if ( jnews_is_wcs_active() ) {
			/**
			 * @TODO: Detect if already have subscription
			 */
			foreach ( WC()->cart->get_cart() as $key => $cart_item ) {
				$item_data = $cart_item['data'];
				if ( 'subscription' === $item_data->get_type() && 'yes' === $item_data->get_meta( '_jeg_subscription_paywall' ) ) {
					if ( $product_id === $cart_item['product_id'] ) {
						WC()->cart->set_quantity( $key, 1 );
					} else {
						WC()->cart->set_quantity( $key, 0 );
					}
				} else {
					$product = wc_get_product( $product_id );
					if ( 'subscription' === $product->get_type() && 'yes' === $product->get_meta( '_jeg_subscription_paywall' ) ) {
						WC()->cart->set_quantity( $key, 0 );
					}
				}
			}
		}

		return $cart_item_key;
	}

	/**
	 * Automatically set the order's status to complete.
	 *
	 * @param string   $new_order_status
	 * @param int      $order_id
	 * @param WC_Order $order
	 *
	 * @return string $new_order_status
	 */
	public function auto_complete_order_wcs( $status, $order_id, $order ) {
		if ( jnews_is_wcs_active() ) {
			$current_status           = $order->get_status();
			$allowed_current_statuses = array( 'on-hold', 'pending', 'failed' );
			if ( 'processing' === $status && in_array( $current_status, $allowed_current_statuses ) ) {
				$order_items    = $order->get_items();
				$order_products = array_filter(
					array_map(
						function( $item ) {
							return $item->get_product();
						},
						$order_items
					),
					function( $product ) {
						return ! ! $product;
					}
				);
				if ( count( $order_products ) > 0 ) {
					$is_wcs_jpw = array_reduce(
						$order_products,
						function( $virtual_order_so_far, $product ) {
							return $virtual_order_so_far && $product->is_virtual() && 'subscription' === $product->get_type() && 'yes' === $product->get_meta( '_jeg_subscription_paywall' );
						},
						true
					);
					if ( $is_wcs_jpw ) {
						$status = 'completed';
						$order->update_status( 'completed' );
					}
				}
			}
		}
		return $status;
	}

	/**
	 * Dismiss paywall notice
	 */
	public function dismiss_paywall_notice() {
		update_option( 'jnews_dismiss_paywall_notice', true );
	}

	/**
	 * Paywall notice
	 */
	public function paywall_notice() {
		if ( ! class_exists( 'WooCommerce' ) && ! function_exists( 'is_checkout' ) && ! get_option( 'jnews_dismiss_paywall_notice', false ) ) {
			$this->print_paywall_notice();
		}
	}

	/**
	 * Print paywall notice
	 */
	public function print_paywall_notice() {
		?>
		<div class="notice notice-error">
			<p>
				<?php
				printf(
					wp_kses(
						__(
							'<span class="jnews-notice-heading">JNews Paywall</span>
                            <span style="display: block;">Please install and active WooCommerce plugin. Click the button below to manage your plugin :</span>
                            <span class="jnews-notice-button">
                                <a href="%s" class="button-primary">Manage plugin</a>
                            </span>
                            ',
							'jnews'
						),
						array(
							'strong' => array(),
							'span'   => array(
								'style' => true,
								'class' => true,
							),
							'a'      => array(
								'href'  => true,
								'class' => true,
							),
						)
					),
					esc_url( menu_page_url( 'jnews_plugin', false ) . '#' . 'woocommerce' )
				);
				?>
			</p>
			<span class="close-button paywall"><i class="fa fa-times"></i></span>
		</div>
		<?php
	}

	/**
	 * @return Order
	 */
	public static function instance() {
		if ( null === static::$instance ) {
			static::$instance = new static();
		}

		return static::$instance;
	}

	/**
	 * Add product to cart
	 *
	 * @return void
	 */
	function redirect_after_login() {
		if ( ! function_exists( 'is_checkout' ) ) {
			return;
		}
		if ( is_checkout() ) {
			$product_id = isset( $_COOKIE['paywall_product'] ) ? $_COOKIE['paywall_product'] : '';
			if ( ! empty( $product_id ) ) {
				$product = get_post( $product_id );
				if ( null !== $product ) {
					try {
						if ( 'product' !== $product->post_type ) {
							return;
						}
						WC()->cart->add_to_cart( $product_id );
					} catch ( Exception $e ) {
						return;
					}
				}
			}
		}
	}

	/**
	 * Check if product already added in cart
	 *
	 * @param $cart_item_key
	 * @param $product_id
	 *
	 * @return mixed
	 */
	public function product_added( $cart_item_key, $product_id ) {

		foreach ( WC()->cart->get_cart() as $key => $cart_item ) {
			$item_data = $cart_item['data'];
			if ( 'paywall_subscribe' === $item_data->get_type() ) {
				if ( $product_id === $cart_item['product_id'] ) {
					WC()->cart->set_quantity( $key, 1 );
				} else {
					WC()->cart->set_quantity( $key, 0 );
				}
			} else {
				$product = wc_get_product( $product_id );
				if ( $product->get_type() === 'paywall_subscribe' ) {
					WC()->cart->set_quantity( $key, 0 );
				}
			}
		}

		return $cart_item_key;
	}

	/**
	 * Auto Complete Order
	 *
	 * Hooked into woocommerce_thankyou hook.
	 *
	 * @param $order_id
	 */
	public function auto_complete_order( $order_id ) {
		if ( ! $order_id ) {
			return;
		}
		$order = wc_get_order( $order_id );
		if ( $order && 'paypalsubscribe' === $order->get_payment_method() && class_exists( 'WC_Payment_Gateway' ) ) {
			remove_action( 'woocommerce_order_details_after_order_table', 'woocommerce_order_again_button' );
			$credentials = new JPW_Paypal();
			$credentials->subscribe_status( $order_id );
		}
	}

	/**
	 * Product paywall unlock doesn't need processing.
	 * Make it completed !
	 *
	 * @param string    $status order status.
	 * @param int       $id unique ID for this object.
	 * @param \WC_Order $order Order class.
	 *
	 * @return string
	 */
	public function payment_complete_order_status( $status, $id, $order ) {
		foreach ( $order->get_items() as $item ) {
			if ( $item->is_type( 'line_item' ) ) {
				$product = $item->get_product();
				/** @var \WC_Product|bool $product */
				if ( $product && $product->is_type( 'paywall_unlock' ) ) {
					$status = 'completed';
				}
			}
		}

		return $status;
	}

	/**
	 * Order paid
	 *
	 * @param $order_id
	 * @param $old_status
	 * @param $new_status
	 *
	 * @throws Exception
	 */
	public function order_paid( $order_id, $old_status, $new_status ) {
		$order = wc_get_order( $order_id );
		if ( $order ) {
			$user_id   = $order->get_customer_id() !== null ? $order->get_customer_id() : 0;
			$completed = false;

			$paywall_user_data = array();
			$is_paywall        = false;

			// paywall_subscribe variables.
			$subscribe_status   = get_user_option( 'jpw_subscribe_status', $user_id ) ? get_user_option( 'jpw_subscribe_status', $user_id ) : false;
			$expired            = get_user_option( 'jpw_expired_date', $user_id ) ? get_user_option( 'jpw_expired_date', $user_id ) : false;
			$paypalsubscribe_id = '';

			// paywall_unlock variables.
			$unlock_remaining = get_user_option( 'jpw_unlock_remaining', $user_id ) ? get_user_option( 'jpw_unlock_remaining', $user_id ) : 0;
			$unlocked_posts   = get_user_option( 'jpw_unlocked_post_list', $user_id ) ? get_user_option( 'jpw_unlocked_post_list', $user_id ) : array();

			if ( $unlock_remaining < 0 ) {
				$unlock_remaining = 0;
			}

			foreach ( $order->get_items() as $item_id => $item ) {
				$product = wc_get_product( $item['product_id'] );

				// check if product is paywall_subscribe.
				if ( $product->is_type( 'paywall_subscribe' ) && $user_id > 0 ) {
					$is_paywall         = true;
					$paypalsubscribe_id = get_post_meta( $order_id, 'subscription_id', true );
					$stripesubscribe_id = get_post_meta( $order_id, 'jpw_stripe_subs_id', true );

					if ( $paypalsubscribe_id ) {
						$credentials = new JPW_Paypal();
						$request     = new Paypal_Api( 'check', $credentials->get_api_credential(), $order_id );
						$response    = $request->get_response_message();

						if ( 'completed' === $new_status && 'EMPTY' !== $response && 'ACTIVE' === $response->result->status ) {
							$subscribe_status = $response->result->status;// true.
							$expired          = $response->result->billing_info->next_billing_time;
							$expired          = new DateTime( $expired );
							$expired->setTimezone( new DateTimeZone( 'UTC' ) );
							$expired->add( new DateInterval( 'PT1H' ) ); // We need to wait for recurring payment.
							$expired   = $expired->format( 'Y-m-d H:i:s' );
							$completed = true;
						} elseif ( 'cancelled' === $new_status || 'refunded' === $new_status || 'failed' === $new_status ) {

							if ( get_post_meta( $order_id, 'jeg_paywall_completed', true ) === 'yes' ) {
								$expired   = false;
								$completed = false;
							}
						}
					}

					if ( $stripesubscribe_id ) {
						$credentials = new JPW_Stripe();
						$request     = new Stripe_Api( 'check', $credentials->get_api_credential(), $order_id );
						$response    = $request->get_response_message();
						$response    = json_decode( json_encode( $response ), false );

						if ( 'completed' === $new_status && isset( $response->status ) && 'active' === $response->status ) {
							$subscribe_status = 'ACTIVE';
							$expired          = new DateTime();
							$expired          = $expired->setTimestamp( $response->current_period_end );
							$expired          = $expired->setTimezone( new DateTimeZone( 'UTC' ) );
							$expired          = $expired->format( 'Y-m-d H:i:s' );
							$completed        = true;
						} elseif ( 'cancelled' === $new_status || 'refunded' === $new_status || 'failed' === $new_status ) {

							if ( get_post_meta( $order_id, 'jeg_paywall_completed', true ) === 'yes' ) {
								$expired   = false;
								$completed = false;
							}
						}
					}
				}

				// check if product is paywall_unlock.
				if ( $product->is_type( 'paywall_unlock' ) && $user_id > 0 ) {
					$is_paywall = true;
					if ( 'completed' === $new_status ) {
						$unlock_remaining += $product->get_total_unlock() * $item->get_quantity();
						$completed         = true;
					} elseif ( 'cancelled' === $new_status || 'refunded' === $new_status || 'failed' === $new_status ) {
						if ( get_post_meta( $order_id, 'jeg_paywall_completed', true ) === 'yes' ) {
							if ( $unlock_remaining >= $product->get_total_unlock() * $item->get_quantity() ) {
								$unlock_remaining -= $product->get_total_unlock() * $item->get_quantity();
							} else {
								$leftover         = $product->get_total_unlock() * $item->get_quantity() - $unlock_remaining;
								$unlock_remaining = 0;
								// lock post that has been unlocked
								for ( $i = 0; $i < $leftover; $i ++ ) {
									array_pop( $unlocked_posts );
								}
							}
							$completed = false;
						}
					}
				}
			}

			if ( $is_paywall ) {
				if ( $completed ) {
					update_post_meta( $order_id, 'jeg_paywall_completed', 'yes' );
				} else {
					update_post_meta( $order_id, 'jeg_paywall_completed', 'no' );
				}

				if ( ! empty( $paypalsubscribe_id ) ) {
					$paywall_user_data['jpw_paypal_subs_id'] = $paypalsubscribe_id;
					$paywall_user_data['subscribe_status']   = $subscribe_status;
					$paywall_user_data['expired_date']       = $expired;
					$paywall_user_data['jpw_subs_type']      = 'paypal';
				} elseif ( ! empty( $stripesubscribe_id ) ) {
					$paywall_user_data['jpw_stripe_subs_id'] = $stripesubscribe_id;
					$paywall_user_data['subscribe_status']   = $subscribe_status;
					$paywall_user_data['expired_date']       = $expired;
					$paywall_user_data['jpw_subs_type']      = 'stripe';
				} else {
					$paywall_user_data['unlock_remaining'] = $unlock_remaining;
					$paywall_user_data['unlocked_posts']   = $unlocked_posts;
				}

				$this->update_paywall_data( $paywall_user_data, $user_id );
			}
		}
	}

	/**
	 * Update User Data
	 *
	 * @param array $paywall
	 * @param int   $user_id
	 */
	protected function update_paywall_data( $paywall, $user_id ) {
		if ( isset( $paywall['jpw_paypal_subs_id'] ) || isset( $paywall['jpw_stripe_subs_id'] ) ) { // subscription meta.
			update_user_option( $user_id, 'jpw_subscribe_status', $paywall['subscribe_status'] );
			update_user_option( $user_id, 'jpw_expired_date', $paywall['expired_date'] );
			update_user_option( $user_id, 'jpw_paypal_subs_id', $paywall['jpw_paypal_subs_id'] );
			update_user_option( $user_id, 'jpw_subs_type', $paywall['jpw_subs_type'] );
		} else { // unlock meta.
			update_user_option( $user_id, 'jpw_unlock_remaining', $paywall['unlock_remaining'] );
			update_user_option( $user_id, 'jpw_unlocked_post_list', $paywall['unlocked_posts'] );
		}
	}

	/**
	 * Check if user allowed to purchase
	 *
	 * @param $product_id
	 *
	 * @return bool
	 */
	protected function allow_purchase( $product_id ) {
		// Add codes here if need to restrict user from purchasing.

		return true;
	}
}
