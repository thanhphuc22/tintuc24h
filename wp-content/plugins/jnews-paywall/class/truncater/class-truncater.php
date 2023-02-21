<?php
/**
 * JNews Paywall Class
 *
 * @author Jegtheme
 * @since 1.0.0
 * @package jnews-paywall
 */

namespace JNews\Paywall\Truncater;

/**
 * Class Truncater
 *
 * @package JNews\Paywall\Truncater
 */
class Truncater {
	/**
	 * @var Truncater
	 */
	private static $instance;

	/**
	 * @var string
	 */
	private $content_data;
	private $result;
	private $tag;

	/**
	 * @var boolean
	 */
	private $show_button = false;

	/**
	 * @var int
	 */
	private $total;

	/**
	 * Truncater constructor.
	 */
	public function __construct() {
		// filters
		add_filter( 'body_class', array( $this, 'add_body_class' ) );
		add_filter( 'the_content', array( $this, 'start_truncate' ), 11 );
	}

	/**
	 * @return Truncater
	 */
	public static function instance() {
		if ( null === static::$instance ) {
			static::$instance = new static();
		}

		return static::$instance;
	}

	/**
	 * Add new class to body tag
	 *
	 * @param $value
	 *
	 * @return array
	 */
	public function add_body_class( $value ) {
		if ( $this->check_status() ) {
			global $post;
			$post_id = $post->ID;

			$value[] = 'jpw-truncate';

			if ( get_theme_mod( 'jpw_hide_comment', false ) ) {
				$value[] = 'jpw-no-comment';

				add_filter( 'jnews_single_show_comment', '__return_false' );
			}
			if ( jeg_metabox( 'jnews_paywall_metabox.enable_preview_video', false, $post_id ) ) {
				if ( get_post_format() === 'video' ) {
					$value[] = 'jnews_paywall_preview_video';
				}
			}
		}

		return $value;
	}

	/**
	 * Check user status
	 *
	 * @param int $post_id
	 *
	 * @return bool
	 */
	public function check_status( $post_id = null ) {

		if ( ( ( is_single() || is_feed() || ( defined('REST_REQUEST' ) && REST_REQUEST ) ) && 'post' === get_post_type() ) || null !== $post_id ) {
			if ( null === $post_id ) {
				global $post;
				$post_id = $post->ID;
			}

			$subscribe_status = is_user_logged_in() ? get_user_option( 'jpw_subscribe_status', get_current_user_id() ) : false;
			$user_post_lists  = get_user_option( 'jpw_unlocked_post_list', get_current_user_id() ) ? get_user_option( 'jpw_unlocked_post_list', get_current_user_id() ) : array();

			if ( in_array( (int) $post_id, $user_post_lists, true ) ) {
				$unlocked = true;
			} else {
				$unlocked = false;
			}

			if ( get_theme_mod( 'jpw_block_all', false ) ) {
				$this->total = get_theme_mod( 'jpw_limit', 2 );

				if ( jeg_metabox( 'jnews_paywall_metabox.enable_free_post', false ) ) {
					$do_truncate = false;
				} else {
					if ( jeg_metabox( 'jnews_paywall_metabox.override_paragraph_limit', false ) ) {
						$this->total = jeg_metabox( 'jnews_paywall_metabox.paragraph_limit', 2, $post->ID );
					}
					$do_truncate = true;
				}
			} else {
				$this->total = jeg_metabox( 'jnews_paywall_metabox.paragraph_limit', 2, $post_id );

				if ( jeg_metabox( 'jnews_paywall_metabox.enable_premium_post', false, $post_id ) ) {
					$do_truncate = true;
				} else {
					$do_truncate = false;
				}
			}

			if ( $this->exclude_unaffected_user( $post_id ) && $do_truncate && ! $subscribe_status ) {

				if ( $unlocked ) {
					return false;
				} else {
					return true;
				}
			}
		}
	}

	/**
	 * Check user roles that are not affected by subscription
	 *
	 * @return bool
	 */
	private function exclude_unaffected_user( $post_id ) {
		$roles = apply_filters( 'jnews_paywall_unaffected_role_list', array( 'administrator' ) );
		$user  = wp_get_current_user();
		$post  = get_post( $post_id );

		if ( (int) $user->ID === (int) $post->post_author ) {
			return false;
		}

		foreach ( $roles as $role ) {
			if ( in_array( $role, $user->roles ) ) {
				return false;
			}
		}

		return true;
	}

	/**
	 * Start Truncate
	 *
	 * @param $content
	 *
	 * @return string
	 */
	public function start_truncate( $content ) {
		global $post;
		$post_id = $post->ID;
		$this->content_data = $content;

		if ( $this->check_status() ) {
			$this->tag       = new Content_Tag( $this->content_data );
			$total_paragraph = $this->tag->total( 'p' );
			if ( jeg_metabox( 'jnews_paywall_metabox.enable_preview_post', false, $post_id ) ) {
				$this->content_data  =  wpautop( jeg_metabox( 'jnews_paywall_metabox.preview_textbox', '', $post_id ) ) ;
				$this->content_data .= $this->get_button();

				return $this->content_data;
			} else {
				if ( $total_paragraph >= $this->total ) {
					$position      = $this->tag->find_end( 'p', $this->total );
					$this->result  = $this->get_truncated_content( 0, $position );
					$this->result .= $this->add_end_tag();
					$this->result .= $this->get_button();

					return $this->result;
				} else {
					if ( $this->show_button ) {
						$this->content_data .= $this->get_button();
					}

					return $this->content_data;
				}
			}
		} else {
			return $this->content_data;
		}
	}

	/**
	 * @param $boolean
	 */
	public function show_button( $boolean ) {
		$this->show_button = $boolean;
	}

	/**
	 * Add end tag
	 *
	 * @return bool|string
	 */
	private function add_end_tag() {
		$end_tag = '';

		foreach ( array_reverse( $this->tag->get_end_tag() ) as $tag ) {
			$end_tag .= '</' . $tag . '>';
		}

		return $end_tag;
	}

	/**
	 * Get Content between range
	 *
	 * @param $begin
	 * @param $end
	 *
	 * @return bool|string
	 */
	private function get_truncated_content( $begin, $end ) {
		return substr( $this->content_data, $begin, $end );
	}

	/**
	 * Get button
	 *
	 * @return string
	 */
	private function get_button() {
		$subscribe_url             = get_theme_mod( 'jpw_subscribe_url', 'none' ) === 'none' ? '#' : get_permalink( get_theme_mod( 'jpw_subscribe_url', 'none' ) );
		$unlock_url                = get_theme_mod( 'jpw_unlock_url', 'none' ) === 'none' ? '#' : get_permalink( get_theme_mod( 'jpw_unlock_url', 'none' ) );
		$show_header_text          = get_theme_mod( 'jpw_show_header_text', true );
		$override_subscribe_button = get_theme_mod( 'jpw_override_subscribe_button', false );
		$override_unlock_button    = get_theme_mod( 'jpw_override_unlock_button', false );
		$override_header_text      = get_theme_mod( 'jpw_override_header_text', false );
		$article_button            = get_theme_mod( 'jpw_show_button', 'both_btn' );
		$unlock_remaining          = get_user_option( 'jpw_unlock_remaining', get_current_user_id() ) ? get_user_option( 'jpw_unlock_remaining', get_current_user_id() ) : 0;
		$classes                   = '';
		/** Subscribe Button */
		$subscribe_title       = jnews_return_translation( 'Subscribe', 'jnews-paywall', 'subscribe_title' );
		$subscribe_description = wp_kses( jnews_return_translation( 'Gain access to all our Premium contents. <br/><strong>More than 100+ articles.</strong>', 'jnews-paywall', 'paywall_subscription_description', false ), wp_kses_allowed_html() );
		$subscribe_button_text = jnews_return_translation( 'Subscribe Now', 'jnews-paywall', 'paywall_subscribe_button' );
		/** Unlock Button */
		$unlock_title       = jnews_return_translation( 'Buy Article', 'jnews-paywall', 'unlock_title' );
		$unlock_description = wp_kses( jnews_return_translation( 'Unlock this article and gain permanent access to read it.', 'jnews-paywall', 'paywall_unlock_description', false ), wp_kses_allowed_html() );
		$unlock_button_text = jnews_return_translation( 'Unlock Now', 'jnews-paywall', 'unlock_button' );
		/** Header Text */
		$header_title       = jnews_return_translation( 'Support authors and subscribe to content', 'jnews-paywall', 'paywall_header_title' );
		$header_description = jnews_return_translation( 'This is premium stuff. Subscribe to read the entire article.', 'jnews-paywall', 'paywall_header_description' );

		if ( $override_subscribe_button ) {
			$subscribe_title       = esc_html( get_theme_mod( 'jpw_subscribe_title', 'Subscribe' ) );
			$subscribe_description = wp_kses( get_theme_mod( 'jpw_subscribe_description', 'Gain access to all our Premium contents. <br/><strong>More than 100+ articles.</strong>' ), wp_kses_allowed_html() );
			$subscribe_button_text = esc_html( get_theme_mod( 'jpw_subscribe_button_text', 'Subscribe Now' ) );
		}
		if ( $override_unlock_button ) {
			$unlock_title       = esc_html( get_theme_mod( 'jpw_unlock_title', 'Buy Article' ) );
			$unlock_description = wp_kses( get_theme_mod( 'jpw_unlock_description', 'Unlock this article and gain permanent access to read it.' ), wp_kses_allowed_html() );
			$unlock_button_text = esc_html( get_theme_mod( 'jpw_unlock_button_text', 'Unlock Now' ) );
		}
		if ( $override_header_text ) {
			$header_title       = esc_html( get_theme_mod( 'jpw_header_title', 'Support authors and subscribe to content' ) );
			$header_description = esc_html( get_theme_mod( 'jpw_header_description', 'This is premium stuff. Subscribe to read the entire article.' ) );
		}

		if ( $unlock_remaining > 0 ) {
			$classes    = 'jeg_paywall_unlock_post';
			$unlock_url = get_permalink( get_the_ID() );
		}

		/* Buttons */

		$subscribe_attr = array(
			'type'        => 'subscribe',
			'title'       => $subscribe_title,
			'description' => $subscribe_description,
			'url'         => $subscribe_url,
			'button_text' => $subscribe_button_text,
			'column'      => 2,
		);
		$unlock_attr    = array(
			'type'        => 'unlock',
			'title'       => $unlock_title,
			'description' => $unlock_description,
			'url'         => $unlock_url,
			'url_classes' => $classes,
			'button_text' => $unlock_button_text,
			'column'      => 2,
		);

		if ( ! is_user_logged_in() ) {
			$url   = $this->is_amp() ? get_post_permalink( get_the_ID() ) : '#';
			$login = '<div class="jpw_login"><span>' . sprintf( wp_kses( jnews_return_translation( '<a href="%s">Login</a> if you have purchased', 'jnews-paywall', 'paywall_logintext', false ), wp_kses_allowed_html() ), $url ) . '</span></div>';
		} else {
			$login = '';
		}

		if ( $show_header_text ) {
			$header_text  = '<div class="jpw-truncate-header">';
			$header_text .= '<h2>' . $header_title . '</h2>';
			$header_text .= '<p>' . $header_description . '</p>';
			$header_text .= $login;
			$header_text .= '</div>';
		} else {
			$header_text = '';
		}

		if ( 'unl_btn' === $article_button ) {
			$subscribe_button      = '';
			$unlock_attr['column'] = 1;
			$unlock_button         = $this->create_button( $unlock_attr );
		} elseif ( 'sub_btn' === $article_button ) {
			$unlock_button            = '';
			$subscribe_attr['column'] = 1;
			$subscribe_button         = $this->create_button( $subscribe_attr );
		} else {
			$unlock_button    = $this->create_button( $unlock_attr );
			$subscribe_button = $this->create_button( $subscribe_attr );
		}

		$button_wrapper = '<div class="jpw_btn_wrapper">' . $subscribe_button . $unlock_button . '</div>';

		$buttons  = '<div class="jpw-truncate-btn">';
		$buttons .= $header_text . $button_wrapper;
		$buttons .= '</div>';

		return $buttons;
	}

	/**
	 * Create truncate button
	 *
	 * @param array $attr Button Attribute.
	 *
	 * @return string
	 */
	private function create_button( $attr ) {
		$url = 'unlock' === $attr['type'] ? '<a href="' . $attr['url'] . '" class="btn ' . $attr['url_classes'] . '" data-id="' . get_the_ID() . '">' . $attr['button_text'] . '</a>' : '<a href="' . $attr['url'] . '" class="btn">' . $attr['button_text'] . '</a>';

		return '<div class="jpw_' . $attr['type'] . '">
					<div class="jpw_btn_inner_wrapper">
						<h3>' . $attr['title'] . '</h3>
						<span>' . $attr['description'] . '</span>
						<div class="btn_wrapper">
							' . $url . '
						</div>
					</div>
				</div>';
	}

	/**
	 * Detect is AMP page
	 *
	 * @return bool
	 */
	private function is_amp() {
		$is_amp = false;
		if ( function_exists( 'is_amp_endpoint' ) ) {
			$is_amp = is_amp_endpoint();
		}

		return $is_amp;
	}

	/**
	 * Get Value of Truncated Content
	 *
	 * @return mixed
	 */
	public function get_result() {
		return $this->result;
	}
}
