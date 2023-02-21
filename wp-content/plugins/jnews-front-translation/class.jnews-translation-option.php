<?php
/**
 * @author : Jegtheme
 */


if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

class JNews_Translation_Option {

	/**
	 * @var JNews_Translation_Option
	 */
	private static $instance;

	/**
	 * @return JNews_Translation_Option
	 */
	public static function getInstance() {
		if ( null === static::$instance ) {
			static::$instance = new static();
		}
		return static::$instance;
	}

	private function __construct() {
		if ( is_admin() ) {
			add_filter( 'jnews_admin_menu', array( $this, 'admin_menu' ) );
			add_filter( 'jnews_admin_slug', array( $this, 'admin_slug' ) );
			add_action( 'admin_notices', array( $this, 'admin_notice' ) );
			add_action( 'init', array( $this, 'load_assets' ) );
			add_action( 'wp_ajax_vp_ajax_jnews_translate_save', array( $this, 'fix_duplicate' ), 9 );
			add_action( 'wp_ajax_vp_ajax_jnews_translate_save', array( $this, 'remove_fix_duplicate' ), 11 );
		}

		$this->theme_option();
	}

	public function load_assets() {
		$slug = apply_filters( 'jnews_get_admin_slug', '' );
		if ( is_array( $slug ) && ! empty( $slug ) ) {
			if ( isset( $_REQUEST['page'] ) && $_REQUEST['page'] === $slug['translation'] ) {
				wp_enqueue_script( 'jnews-front-translation', JNEWS_FRONT_TRANSLATION_URL . '/assets/js/plugin.js', null, JNEWS_FRONT_TRANSLATION_VERSION, true );
			}
		}
	}

	public function fix_duplicate() {
		add_filter( 'jnews_vp_multiple_value_force_first_value', '__return_true' );
	}

	public function remove_fix_duplicate() {
		remove_filter( 'jnews_vp_multiple_value_force_first_value', '__return_true' );
	}

	public function admin_notice() {
		$slug = apply_filters( 'jnews_get_admin_slug', '' );

		if ( isset( $_REQUEST['page'] ) && $_REQUEST['page'] === $slug['translation'] ) {
			// polylang
			if ( function_exists( 'pll_current_language' ) ) {
				$current_language = pll_current_language( 'name' );
				if ( empty( $current_language ) ) {
					$current_language = pll_default_language( 'name' );
				}

				printf(
					'<div class="updated"><p>%s : <strong>%s</strong></p></div>',
					esc_html__( 'Frontend Translation Language', 'jnews' ),
					$current_language
				);
			}

			// wpml
			if ( defined( 'ICL_SITEPRESS_VERSION' ) ) {
				if ( defined( 'ICL_LANGUAGE_NAME' ) ) {
					printf(
						'<div class="updated"><p>%s : <strong>%s</strong></p></div>',
						esc_html__( 'Frontend Translation Language', 'jnews' ),
						ICL_LANGUAGE_NAME
					);
				}
			}
		}
	}

	public function admin_slug( $slug ) {
		$translation_slug = array(
			'translation' => 'jnews_translation',
		);

		return array_merge( $translation_slug, $slug );
	}

	public function admin_menu( $menu ) {
		$slug = apply_filters( 'jnews_get_admin_slug', '' );

		$translation_menu = array(
			array(
				'title'        => esc_html__( 'Translate Frontend', 'jnews-front-translation' ),
				'menu'         => esc_html__( 'Translate Frontend', 'jnews-front-translation' ),
				'slug'         => $slug['translation'],
				'action'       => false,
				'priority'     => 54,
				'show_on_menu' => false,
			),
		);

		return array_merge( $menu, $translation_menu );
	}

	public function translation_slug() {
		$adminslug = apply_filters( 'jnews_get_admin_slug', '' );
		return is_array( $adminslug ) && isset( $adminslug['translation'] ) ? $adminslug['translation'] : '';
	}

	public function theme_option() {
		if ( class_exists( 'VP_Option' ) ) {
			$dashboard_option = $this->dashboard_option();
			$translation_slug = $this->translation_slug();

			$this->option =
				new VP_Option(
					array(
						'is_dev_mode'           => false,
						'option_key'            => 'jnews_translate',
						'page_slug'             => $translation_slug,
						'menu_page'             => 'jnews',
						'template'              => $dashboard_option,
						'use_auto_group_naming' => true,
						/**
						 * @see \JNews\Util\ValidateLicense::is_license_validated
						 * @since 8.0.0
						 */
						'use_util_menu'         => function_exists( 'jnews_is_active' ) && jnews_is_active()->is_license_validated(),
						'minimum_role'          => 'edit_theme_options',
						'layout'                => 'fixed',
						'page_title'            => 'Translate Frontend',
						'menu_label'            => 'Translate Frontend',
						'priority'              => 54,
					)
				);
		}
	}

	public function dashboard_option() {
		$self = $this;

		if ( is_admin() ) {
			add_filter(
				'jnews_admin_translate_option',
				function ( $option ) use ( $self ) {
					$translation_setting = include JNEWS_FRONT_TRANSLATION_DIR . 'options/translation-setting.php';
					$option              = $self->merge_option( $option, $translation_setting );

					/**
					 * @see \JNews\Util\ValidateLicense::is_license_validated
					 * @since 8.0.0
					 */
					if ( function_exists( 'jnews_is_active' ) && jnews_is_active()->is_license_validated() ) {
						$translation = include JNEWS_FRONT_TRANSLATION_DIR . 'options/translation.php';
						$option      = $self->merge_option( $option, $translation );
					}

					return $option;
				},
				10
			);
		}

		return array(
			'title'   => 'Frontend Translation',
			'logo'    => '',
			'version' => JNEWS_FRONT_TRANSLATION_VERSION,
			'menus'   => apply_filters( 'jnews_admin_translate_option', array() ),
		);
	}

	public function merge_option( $option, $newoption ) {
		if ( empty( $option ) ) {
			return array( $newoption );
		} else {
			return array_merge( $option, array( $newoption ) );
		}
	}
}
