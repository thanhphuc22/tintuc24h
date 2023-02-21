<?php

use JNews\Module\ModuleOptionAbstract;

/**
 * JNews Paywall Element
 *
 * @author Jegtheme
 * @since 1.0.0
 * @package jnews-paywall
 */
class JNews_Element_Paywall_Option extends ModuleOptionAbstract {

	public function compatible_column() {
		return array( 4, 8, 12 );
	}

	public function get_module_name() {
		return esc_html__( 'JNews - Post Paywall', 'jnews-paywall' );
	}

	public function get_category() {
		return esc_html__( 'JNews - Element', 'jnews-paywall' );
	}

	public function set_options() {
		$this->options[] = array(
			'type'        => 'select',
			'multiple'    => PHP_INT_MAX,
			'param_name'  => 'paywall_list',
			'heading'     => esc_html__( 'Post Subscription', 'jnews-paywall' ),
			'description' => esc_html__( 'Select post subscription package.', 'jnews-paywall' ),
			'std'         => '',
			'value'       => $this->get_products(),
		);

		$this->options[] = array(
			'type'        => 'textfield',
			'param_name'  => 'paywall_button',
			'heading'     => esc_html__( 'Button Text', 'jnews-paywall' ),
			'description' => esc_html__( 'Change the subscribe button text.', 'jnews-paywall' ),
			'std'         => 'Buy',
		);

		$this->options[] = array(
			'type'        => 'checkbox',
			'param_name'  => 'paywall_description',
			'heading'     => esc_html__( 'Show Description', 'jnews-paywall' ),
			'description' => esc_html__( 'Show product short description.', 'jnews-paywall' ),
		);
	}

	public function get_products() {
		$product_list = JNews\Paywall\Woocommerce\Product::instance();
		$result       = $product_list->get_product_list();

		return $result;
	}
}
