<?php

/**
 * JNews Paywall Class
 *
 * @author Jegtheme
 * @since 1.0.0
 * @package jnews-paywall
 */

namespace JNews\Paywall\Element;

/**
 * Class Customizer
 *
 * @package JNews\Paywall\Customizer
 */
class Register_Elements {
	/**
	 * @var Customizer
	 */
	private static $instance;

	/**
	 * Register_Elements constructor.
	 */
	private function __construct() {
		global $pagenow;
		$vc_editable    = isset( $_GET['vc_editable'] ) ? sanitize_text_field( $_GET['vc_editable'] ) : false;
		$vc_action      = isset( $_GET['vc_action'] ) ? sanitize_text_field( $_GET['vc_action'] ) : false;
		$is_post_editor = 'post.php' === $pagenow || 'post-new.php' === $pagenow || 'admin-ajax.php' === $pagenow || $vc_editable || 'vc_inline' === $vc_action;
		if ( $is_post_editor || ! is_admin() ) {
			add_filter( 'jnews_module_list', array( $this, 'paywall_element' ) );
			add_filter( 'jnews_get_option_class_from_shortcode', array( $this, 'get_element_option' ), null, 2 );
			add_filter( 'jnews_get_shortcode_name_from_option', array( $this, 'get_shortcode_name' ), null, 2 );
			if ( defined( 'ELEMENTOR_VERSION' ) ) {
				add_filter( 'jnews_module_elementor_get_option_class', array( $this, 'get_option_class' ) );
				add_filter( 'jnews_module_elementor_get_view_class', array( $this, 'get_view_class' ) );
			}
		}
		if ( $is_post_editor ) {
			add_action( 'jnews_load_all_module_option', array( $this, 'load_element_option' ) );
		}
		if ( ! is_admin() ) {
			add_filter( 'jnews_get_view_class_from_shortcode', array( $this, 'get_element_view' ), null, 2 );
			add_action( 'jnews_build_shortcode_jnews_element_paywall_view', array( $this, 'load_element_view' ) );
		}

	}

	/**
	 * @return Customizer
	 */
	public static function instance() {
		if ( null === static::$instance ) {
			static::$instance = new static();
		}

		return static::$instance;
	}

	public function paywall_element( $module ) {
		array_push(
			$module,
			array(
				'name'   => 'JNews_Element_Paywall',
				'type'   => 'element',
				'widget' => false,
			)
		);

		return $module;
	}

	public function get_element_option( $class, $module ) {
		if ( $module === 'JNews_Element_Paywall' ) {
			return 'JNews_Element_Paywall_Option';
		}

		return $class;
	}

	public function get_element_view( $class, $module ) {
		if ( $module === 'JNews_Element_Paywall' ) {
			return 'JNews_Element_Paywall_View';
		}

		return $class;
	}

	public function get_shortcode_name( $module, $class ) {
		if ( $class === 'JNews_Element_Paywall_Option' ) {
			return 'jnews_element_paywall';
		}

		return $module;
	}

	public function load_element_view() {
		$this->load_element_option();
		require_once JNEWS_PAYWALL_DIR . 'class/element/class-jnews-element-paywall-view.php';
	}

	public function load_element_option() {
		require_once JNEWS_PAYWALL_DIR . 'class/element/class-jnews-element-paywall-option.php';
	}

	public function get_option_class( $option_class ) {
		if ( $option_class === '\JNews\Module\Element\Element_Paywall_Option' ) {
			require_once JNEWS_PAYWALL_DIR . 'class/element/class-jnews-element-paywall-option.php';

			return 'JNews_Element_Paywall_Option';
		}

		return $option_class;
	}

	public function get_view_class( $view_class ) {
		if ( $view_class === '\JNews\Module\Element\Element_Paywall_View' ) {
			require_once JNEWS_PAYWALL_DIR . 'class/element/class-jnews-element-paywall-view.php';

			return 'JNews_Element_Paywall_View';
		}

		return $view_class;
	}
}
