<?php

/**
 * JNews Paywall Class
 *
 * @author Jegtheme
 * @since 1.0.0
 * @package jnews-paywall
 */

namespace JNews\Paywall\Woocommerce;

/**
 * Class Product
 *
 * @package JNews\Paywall\Woocommerce
 */
class Product {
	/**
	 * @var Product
	 */
	private static $instance;

	/**
	 * Product constructor.
	 */
	private function __construct() {
		// actions.
		add_action( 'init', array( $this, 'product_register_term' ) );
		add_action( 'woocommerce_product_options_general_product_data', array( $this, 'paywall_product_data' ) );
		add_action( 'woocommerce_product_data_tabs', array( $this, 'paywall_data_tabs' ) );
		add_action( 'woocommerce_process_product_meta', array( $this, 'save_product_data' ) );

		// filters.
		add_filter( 'product_type_selector', array( $this, 'product_type_selector' ) );

		/** WCS Integration */
		add_filter( 'jpw_product_list', array( $this, 'product_list' ) );
		add_action( 'woocommerce_subscriptions_product_options_pricing', array( $this, 'extend_subscriptions_options' ) );
		add_action( 'woocommerce_process_product_meta_subscription', array( $this, 'save_product_data_wcs' ) );
	}

	/**
	 * @return Product
	 */
	public static function instance() {
		if ( null === static::$instance ) {
			static::$instance = new static();
		}

		return static::$instance;
	}

	/**
	 * Save sync options when a subscription product is saved
	 *
	 * @param  mixed $post_id
	 */
	public function save_product_data_wcs( $post_id ) {
		if ( jnews_is_wcs_active() ) {
			if ( empty( $_POST['_wcsnonce'] ) || ! wp_verify_nonce( $_POST['_wcsnonce'], 'wcs_subscription_meta' ) ) {
				return;
			}
			$fields = array(
				'_jeg_subscription_paywall' => '',
				'_jeg_post_featured'        => '',
			);

			foreach ( $fields as $key => $value ) {
				$value = ! empty( $_POST[ $key ] ) ? $_POST[ $key ] : '';

				switch ( $value ) {
					case 'int':
						$value = absint( $value );
						break;
					default:
						$value = sanitize_text_field( $value );
				}
				if ( '_jeg_subscription_paywall' === $key && ! empty( $value ) ) {
					update_post_meta( $post_id, '_sold_individually', $value );
					update_post_meta( $post_id, '_virtual', $value );
				}
				update_post_meta( $post_id, $key, $value );
			}
		}
	}

	/**
	 * Extend product subscription options
	 */
	public function extend_subscriptions_options() {
		if ( jnews_is_wcs_active() ) {
			global $post;
			$post_id = $post->ID;
			woocommerce_wp_checkbox(
				array(
					'id'          => '_jeg_subscription_paywall',
					'label'       => esc_html__( 'JNews Post Subscribe', 'jnews-paywall' ),
					'description' => esc_html__( 'Enable this option to use Product Subscription as JNews Post Subscribe', 'jnews-paywall' ),
					'value'       => get_post_meta( $post_id, '_jeg_subscription_paywall', true ),
				)
			);
			woocommerce_wp_checkbox(
				array(
					'id'          => '_jeg_post_featured',
					'label'       => esc_html__( 'Featured Subscription', 'jnews-paywall' ),
					'description' => esc_html__( 'Highlight this post subscription (please choose only 1 product for featured subscription)', 'jnews-paywall' ),
					'value'       => get_post_meta( $post_id, '_jeg_post_featured', true ),
				)
			);
			?>
				<script type="text/javascript">
					(function ($) {

						window.jeg_post_subscribe = window.jeg_post_subscribe || {}

						window.jeg_post_subscribe = {
							Init: function Init() {
								var base = this
								base.container = $('#woocommerce-product-data')
								base.check_box = base.container.find('._jeg_subscription_paywall_field input[name="_jeg_subscription_paywall"]')

								if ( base.check_box.is(':checked') ) {
									base.SetPaywallMode(true)
								} else {
									base.SetPaywallMode(false)
								}
								base.check_box.on('change',function() {
									if ($(this).is(':checked')) {
										base.SetPaywallMode(true)
										base.check_box.prop('checked', true)
									} else {
										base.SetPaywallMode(false)
										base.check_box.prop('checked', false)
									}
								} )
							}, SetPaywallMode: function SetPaywallMode(enable) {
								if ( enable ) {
									$('.pricing ._sale_price_field').hide()
									$('.subscription_pricing ._subscription_sign_up_fee_field').hide()
									$('.subscription_pricing ._subscription_trial_length_field').hide()
									$('.subscription_pricing ._subscription_length_field').hide()
									$('.subscription_pricing ._jeg_post_featured_field').show()
								} else {
									$('.pricing ._sale_price_field').show()
									$('.subscription_pricing ._subscription_sign_up_fee_field').show()
									$('.subscription_pricing ._subscription_trial_length_field').show()
									$('.subscription_pricing ._subscription_length_field').show()
									$('.subscription_pricing ._jeg_post_featured_field').hide()
								}
							}
						}

						window.jeg_post_subscribe.Init()
						$(window).on('load', function(){
							window.jeg_post_subscribe.Init()
						})
					})(jQuery)
				</script>
			<?php
		}
	}

	/**
	 * Add support for Subscription product
	 *
	 * @param  array $terms
	 * @return array
	 */
	public function product_list( $terms ) {
		if ( jnews_is_wcs_active() ) {
			$terms[] = 'subscription';
		}
		return $terms;
	}

	/**
	 * Get All Paywall Package List
	 *
	 * @return array
	 */
	public function get_product_list() {
		$result   = array();
		$packages = get_posts(
			array(
				'post_type'      => 'product',
				'posts_per_page' => 10,
				'tax_query'      => array(
					array(
						'taxonomy' => 'product_type',
						'field'    => 'slug',
						'terms'    => apply_filters( 'jpw_product_list', array( 'paywall_subscribe', 'paywall_unlock' ) ),
					),
				),
				'orderby'        => 'menu_order title',
				'order'          => 'ASC',
				'post_status'    => 'publish',
			)
		);

		if ( $packages ) {
			foreach ( $packages as $value ) {
				$result[ $value->post_title ] = $value->ID;
			}
		}

		return $result;
	}

	/**
	 * Register New Product Type
	 */
	public function product_register_term() {
		if ( ! get_term_by( 'slug', sanitize_title( 'paywall_subscribe' ), 'product_type' ) ) {
			wp_insert_term(
				'paywall_subscribe',
				'product_type',
				array( 'description' => 'JNews Post Subscribe' )
			);
		}

		if ( ! get_term_by( 'slug', sanitize_title( 'paywall_unlock' ), 'product_type' ) ) {
			wp_insert_term(
				'paywall_unlock',
				'product_type',
				array( 'description' => 'JNews Post Unlock' )
			);
		}
	}

	/**
	 * Add Product Type Selector
	 *
	 * @param $types
	 *
	 * @return mixed
	 */
	public function product_type_selector( $types ) {
		$types['paywall_subscribe'] = esc_html__( 'JNews Post Subscribe', 'jnews-paywall' );
		$types['paywall_unlock']    = esc_html__( 'JNews Post Unlock', 'jnews-paywall' );

		return $types;
	}

	/**
	 * Add Product Data General Option
	 */
	public function paywall_product_data() {
		include JNEWS_PAYWALL_DIR . 'class/woocommerce/options/subscribe-option.php';
		include JNEWS_PAYWALL_DIR . 'class/woocommerce/options/unlock-option.php';
	}

	/**
	 * Hide Woocommerce Product Data Tabs
	 *
	 * @param $product_data_tabs
	 *
	 * @return bool
	 */
	public function paywall_data_tabs( $product_data_tabs ) {
		if ( empty( $product_data_tabs ) ) {
			return false;
		}

		// product data - hide some tabs.
		if ( isset( $product_data_tabs['shipping'] ) && isset( $product_data_tabs['shipping']['class'] ) ) {
			$product_data_tabs['shipping']['class'][] = 'hide_if_paywall_subscribe hide_if_paywall_unlock';
		}
		if ( isset( $product_data_tabs['linked_product'] ) && isset( $product_data_tabs['linked_product']['class'] ) ) {
			$product_data_tabs['linked_product']['class'][] = 'hide_if_paywall_subscribe hide_if_paywall_unlock';
		}
		if ( isset( $product_data_tabs['attribute'] ) && isset( $product_data_tabs['attribute']['class'] ) ) {
			$product_data_tabs['attribute']['class'][] = 'hide_if_paywall_subscribe hide_if_paywall_unlock';
		}

		return $product_data_tabs;
	}

	/**
	 * Save Product Data
	 *
	 * @param $post_id
	 */
	public function save_product_data( $post_id ) {
		$fields = array(
			'_jpw_total'         => 'int',
			'_jpw_duration'      => '',
			'_jpw_total_unlock'  => 'int',
			'_jeg_post_featured' => '',
		);

		foreach ( $fields as $key => $value ) {
			$value = ! empty( $_POST[ $key ] ) ? $_POST[ $key ] : '';

			switch ( $value ) {
				case 'int':
					$value = absint( $value );
					break;
				default:
					$value = sanitize_text_field( $value );
			}
			update_post_meta( $post_id, $key, $value );
		}
	}
}
