<?php
/**
 * JNews Paywall Class
 *
 * @author Jegtheme
 * @since 1.0.0
 * @package jnews-paywall
 */

namespace JNews\Paywall\Customizer;

/**
 * Class Customizer
 *
 * @package JNews\Paywall\Customizer
 */
class Customizer {
	/**
	 * @var Customizer
	 */
	private static $instance;

	/**
	 * @var
	 */
	private $customizer;

	/**
	 * Customizer constructor.
	 */
	private function __construct() {
		// actions.
		add_action( 'jeg_register_customizer_option', array( $this, 'customizer_option' ) );

		// filters.
		add_filter( 'jeg_register_lazy_section', array( $this, 'autoload_section' ) );
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

	/**
	 * Register Customizer using jeg-framework
	 */
	public function customizer_option() {
		if ( class_exists( 'Jeg\Customizer\Customizer' ) ) {
			$this->customizer = \Jeg\Customizer\Customizer::get_instance();

			$this->set_panel();
			$this->set_section();
		}
	}

	/**
	 * Add new panel
	 */
	public function set_panel() {
		$this->customizer->add_panel(
			array(
				'id'          => 'jnews_paywall_panel',
				'title'       => esc_html__( 'JNews : Paywall Option', 'jnews-paywall' ),
				'description' => esc_html__( 'Paywall Options', 'jnews-paywall' ),
				'priority'    => 200,
			)
		);
	}

	/**
	 * Add new section in the panel
	 */
	public function set_section() {
		$paywal_section = array(
			'id'       => 'jnews_paywall_section',
			'title'    => esc_html__( 'General Setting', 'jnews-paywall' ),
			'panel'    => 'jnews_paywall_panel',
			'priority' => 262,
			'type'     => 'jnews-lazy-section',
		);

		$this->customizer->add_section( $paywal_section );
	}

	/**
	 * Load Customizer Option
	 *
	 * @param $result
	 *
	 * @return mixed
	 */
	public function autoload_section( $result ) {
		$result['jnews_paywall_section'][] = JNEWS_PAYWALL_DIR . 'class/customizer/options/customizer-option.php';

		return $result;
	}
}
