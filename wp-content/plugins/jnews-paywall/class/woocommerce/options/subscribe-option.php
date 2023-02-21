<div class="options_group show_if_paywall_subscribe">
	<?php
		global $post;
		$post_id        = $post->ID;
		$custom_options = array(
			'id'          => 'multiple_input',
			'label'       => esc_html__( 'Billing Time', 'jnews-paywall' ),
			'description' => esc_html__( 'Choose the billing interval, and period', 'jnews-paywall' ),
			'desc_tip'    => true,
			'options'     => array(
				'_jpw_total'    => array(
					'label'   => '',
					'type'    => 'wp_select',
					'options' => array(
						1 => esc_html__( 'every', 'jnews-paywall' ),
						2 => esc_html__( 'every 2nd', 'jnews-paywall' ),
						3 => esc_html__( 'every 3rd', 'jnews-paywall' ),
						4 => esc_html__( 'every 4th', 'jnews-paywall' ),
						5 => esc_html__( 'every 5th', 'jnews-paywall' ),
						6 => esc_html__( 'every 6th', 'jnews-paywall' ),
					),
				),
				'_jpw_duration' => array(
					'label'   => '',
					'type'    => 'wp_select',
					'options' => array(
						'day'   => esc_html__( 'Days', 'jnews-paywall' ),
						'week'  => esc_html__( 'Weeks', 'jnews-paywall' ),
						'month' => esc_html__( 'Months', 'jnews-paywall' ),
						'year'  => esc_html__( 'Years', 'jnews-paywall' ),
					),
				),
			),
		);

		jpw_wc_multiple_option( $custom_options );

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
			$('.pricing').addClass('show_if_paywall_subscribe')
			$('.pricing ._sale_price_field').addClass('hide_if_paywall_subscribe')

			window.jeg_post_featured = window.jeg_post_featured || {}

			window.jeg_post_featured = {
				Init: function Init() {
					var base = this
					base.container = $('#woocommerce-product-data')
					base.check_box = base.container.find('._jeg_post_featured_field input[name="_jeg_post_featured"]')

					base.check_box.on('change', function () {
						if ($(this).is(':checked')) {
							base.check_box.prop('checked', true)
						} else {
							base.check_box.prop('checked', false)
						}
					})
				}
			}

			window.jeg_post_featured.Init()
		})(jQuery)
	</script>
</div>
