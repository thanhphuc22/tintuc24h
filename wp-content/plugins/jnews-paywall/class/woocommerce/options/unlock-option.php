<div class="options_group show_if_paywall_unlock">
	<?php
		global $post;
		$post_id = $post->ID;

		woocommerce_wp_text_input(
			array(
				'id'                => '_jpw_total_unlock',
				'label'             => esc_html__( 'Number of Post Unlock', 'jnews-paywall' ),
				'description'       => esc_html__( 'The number of posts that the user could buy/unlock.', 'jnews-paywall' ),
				'value'             => get_post_meta( $post_id, '_jpw_total_unlock', true ) ? get_post_meta( $post_id, '_jpw_total_unlock', true ) : 1,
				'type'              => 'number',
				'desc_tip'          => true,
				'custom_attributes' => array(
					'min'  => 1,
					'step' => 1,
				),
			)
		);

		woocommerce_wp_checkbox(
			array(
				'id'          => '_jeg_post_featured',
				'label'       => esc_html__( 'Featured Unlock', 'jnews-paywall' ),
				'description' => esc_html__( 'Highlight this post unlock (please choose only 1 product for featured post unlock)', 'jnews-paywall' ),
				'value'       => get_post_meta( $post_id, '_jeg_post_featured', true ),
			)
		);
		?>
	<script type="text/javascript">
		(function ($) {
			$('.pricing').addClass('show_if_paywall_unlock')
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
