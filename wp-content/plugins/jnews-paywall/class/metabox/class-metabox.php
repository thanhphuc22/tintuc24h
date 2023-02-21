<?php

/**
 * JNews Paywall Class
 *
 * @author Jegtheme
 * @since 1.0.0
 * @package jnews-paywall
 */

namespace JNews\Paywall\Metabox;

use Jeg\Form\Form_Meta_Box;

/**
 * Class Metabox
 *
 * @package JNews\Paywall\Metabox
 */
class Metabox {
	/**
	 * @var Metabox
	 */
	private static $instance;

	/**
	 * Metabox constructor.
	 */
	public function __construct() {
		add_action( 'plugins_loaded', array( $this, 'initialize_metabox' ) );
		$this->initialize_metabox();
	}

	/**
	 * Intialize meta box using jeg-framework
	 */
	public function initialize_metabox() {
		$segments = $this->metabox_segments();
		$fields   = $this->metabox_fields();

		$option = array(
			'id'        => 'jnews_paywall_metabox',
			'title'     => esc_html__( 'JNews : Paywall Single Post', 'jnews-paywall' ),
			'post_type' => 'post',
			'type'      => 'tabbed',
			'segments'  => $segments,
			'fields'    => $fields,
		);

		if ( class_exists( 'Jeg\Form\Form_Meta_Box' ) ) {
			new Form_Meta_Box( $option );
		}
	}

	/**
	 * Create meta box segments
	 *
	 * @return array
	 */
	protected function metabox_segments() {
		$segments = array();

		$segments['paywall_setting'] = array(
			'name'     => esc_html__( 'Paywall General Setting', 'jnews-paywall' ),
			'priority' => 1,
		);

		$segments['paywall_preview_setting'] = array(
			'name'     => esc_html__( 'Paywall Preview Setting', 'jnews-paywall' ),
			'priority' => 1,
		);

		return $segments;
	}

	/**
	 * Create meta box fields
	 *
	 * @return array
	 */
	protected function metabox_fields() {
		$fields        = array();
		$jpw_block_all = get_theme_mod( 'jpw_block_all', false );

		/* Paywall Setting */
		if ( ! $jpw_block_all ) {
			$fields['enable_premium_post'] = array(
				'type'        => 'checkbox',
				'segment'     => 'paywall_setting',
				'title'       => esc_html__( 'Set as Premium Post', 'jnews-paywall' ),
				'description' => esc_html__( 'Check this option to set this post as premium.', 'jnews-paywall' ),
				'default'     => false,
			);
		} else {
			$fields['enable_free_post'] = array(
				'type'        => 'checkbox',
				'segment'     => 'paywall_setting',
				'title'       => esc_html__( 'Set as Free Post', 'jnews-paywall' ),
				'description' => esc_html__( 'Check this option to set this post as free.', 'jnews-paywall' ),
				'default'     => false,
			);

			$fields['override_paragraph_limit'] = array(
				'type'        => 'checkbox',
				'segment'     => 'paywall_setting',
				'name'        => 'override_paragraph_limit',
				'title'       => esc_html__( 'Override Paragraph Limit', 'jnews-paywall' ),
				'description' => esc_html__( 'Check this option to override this post paragraph limit.', 'jnews-paywall' ),
				'default'     => false,
				'dependency'  => array(
					array(
						'field'    => 'enable_free_post',
						'operator' => '==',
						'value'    => false,
					),
				),
			);
		}

		$fields['paragraph_limit'] = array(
			'type'        => 'number',
			'segment'     => 'paywall_setting',
			'title'       => esc_html__( 'Paragraph Limit', 'jnews-paywall' ),
			'description' => esc_html__( 'Total paragraphs that will be showed for free user.', 'jnews-paywall' ),
			'default'     => '2',
			'options'     => array(
				'min'  => '1',
				'max'  => '9999',
				'step' => '1',
			),
			'dependency'  => ( $jpw_block_all ? array(
				array(
					'field'    => 'enable_free_post',
					'operator' => '==',
					'value'    => false,
				),
				array(
					'field'    => 'override_paragraph_limit',
					'operator' => '==',
					'value'    => true,
				),
			) : array(
				array(
					'field'    => 'enable_premium_post',
					'operator' => '==',
					'value'    => true,
				),
			) ),
		);

		/* Paywall Preview Setting */
		$fields['enable_preview_post'] = array(
			'type'        => 'checkbox',
			'segment'     => 'paywall_preview_setting',
			'title'       => esc_html__( 'Enable Content Preview', 'jnews-paywall' ),
			'description' => esc_html__( 'Check this option to enable post preview.', 'jnews-paywall' ),
			'default'     => false,
		);

		$fields['preview_textbox'] = array(
			'type'        => 'textarea',
			'sanitize'    => 'jnews_sanitize_by_pass',
			'segment'     => 'paywall_preview_setting',
			'title'       => esc_html__( 'Content Preview', 'jnews-paywall' ),
			'description' => esc_html__( 'Text preview that will be showed for free user.', 'jnews-paywall' ),
			'dependency'  => array(
				array(
					'field'    => 'enable_preview_post',
					'operator' => '==',
					'value'    => true,
				),
			),
		);

		$post_id = isset( $_GET['post'] ) ? (int) $_GET['post'] : null;
		if ( null !== $post_id && 'video' === get_post_format( $post_id ) ) {
			$fields['enable_preview_video'] = array(
				'type'        => 'checkbox',
				'segment'     => 'paywall_preview_setting',
				'title'       => esc_html__( 'Enable Video Preview', 'jnews-paywall' ),
				'description' => esc_html__( 'Check this option to enable video preview.', 'jnews-paywall' ),
				'default'     => false,
			);

			$fields['video_preview_url'] = array(
				'type'        => 'text',
				'segment'     => 'paywall_preview_setting',
				'title'       => esc_html__( 'Video Preview URL', 'jnews-paywall' ),
				'description' => esc_html__( 'Please enter the video preview url, that will be shown to free users.', 'jnews-paywall' ),
				'dependency'  => array(
					array(
						'field'    => 'enable_preview_video',
						'operator' => '==',
						'value'    => true,
					),
				),
			);
		}

		return $fields;
	}

	/**
	 * @return Metabox
	 */
	public static function instance() {
		if ( null === static::$instance ) {
			static::$instance = new static();
		}

		return static::$instance;
	}
}
