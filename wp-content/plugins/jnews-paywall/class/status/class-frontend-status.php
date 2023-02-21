<?php

/**
 * JNews Paywall Class
 *
 * @author Jegtheme
 * @since 1.0.0
 * @package jnews-paywall
 */

namespace JNews\Paywall\Status;

/**
 * Class Frontend_Status
 *
 * @package JNews\Paywall\Status
 */
class Frontend_Status {
	/**
	 * @var Frontend_Status
	 */
	private static $instance;

	/**
	 * Frontend_Status constructor.
	 */
	private function __construct() {
		// actions.
		add_action( 'jnews_account_right_content', array( $this, 'get_right_content' ) );

		// filters.
		add_filter( 'jnews_account_page_endpoint', array( $this, 'add_account_endpoint' ) );
	}

	/**
	 * @return Frontend_Status
	 */
	public static function instance() {
		if ( null === static::$instance ) {
			static::$instance = new static();
		}

		return static::$instance;
	}

	/**
	 * Add menu to frontend account
	 *
	 * @param $endpoint
	 *
	 * @return array
	 */
	public function add_account_endpoint( $endpoint ) {
		$item['jnews_paywall_sub'] = array(
			'title' => jnews_return_translation( 'Subscription', 'jnews-paywall', 'my_subscription' ),
			'slug'  => 'my-subscription',
			'label' => 'my_subscription',
		);

		$item['jnews_paywall_unl'] = array(
			'title' => jnews_return_translation( 'Unlocked Posts', 'jnews-paywall', 'unlocked_posts' ),
			'slug'  => 'unlocked-posts',
			'label' => 'unlocked_posts',
		);

		$this->endpoint = apply_filters( 'jnews_paywall_endpoint', $item );

		if ( isset( $this->endpoint ) ) {
			$endpoint = array_merge( $endpoint, $this->endpoint );
		}

		return $endpoint;
	}

	/**
	 * Get content template for frontend account page
	 */
	public function get_right_content() {
		global $wp;

		if ( is_user_logged_in() ) {
			if ( isset( $wp->query_vars['account'] ) && ! empty( $wp->query_vars['account'] ) ) {

				$query_vars = explode( '/', $wp->query_vars['account'] );

				if ( $query_vars[0] == 'my-subscription' ) {
					$template = JNEWS_PAYWALL_DIR . 'template/frontend-status-1.php';

					if ( file_exists( $template ) ) {
						include $template;
					}
				} elseif ( $query_vars[0] == 'unlocked-posts' ) {
					$template = JNEWS_PAYWALL_DIR . 'template/frontend-status-2.php';

					if ( file_exists( $template ) ) {
						include $template;
					}
				}
			}
		}
	}
}
