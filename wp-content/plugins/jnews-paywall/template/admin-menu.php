<?php
/**
 * JNews Paywall - Backend Menu Template
 */

if ( ! function_exists( 'jpw_menu' ) ) {
	add_action( 'admin_menu', 'jpw_menu' );

	/**
	 * JPW Menu
	 **/
	function jpw_menu() {

		/* add_submenu_page('post-paywall', 'General', 'General', 'manage_options', 'post-paywall', 'jpw_general', 'post-paywall'); */

		if ( current_user_can( 'administrator', get_current_user_id() ) ) {
			$query['autofocus[section]'] = 'jnews_paywall_section';
			$section_link                = add_query_arg( $query, admin_url( 'customize.php' ) );

			add_menu_page( 'JNews Paywall', 'JNews Paywall', 'manage_options', 'post-paywall', 'jpw_status' );
			add_submenu_page( 'post-paywall', 'Subscribers Status', 'Users Status', 'manage_options', 'post-paywall', 'jpw_status' );
			add_submenu_page( 'post-paywall', 'Customizer Setting', 'Customizer Setting', 'manage_options', $section_link );
		} else {
			add_menu_page( 'Premium Status', 'Premium Status', 'manage_options', 'post-paywall', 'jpw_status' );
			add_submenu_page( 'post-paywall', 'Subscription', 'Subscription', 'read', 'my-subscription', 'jpw_subscribe' );
			add_submenu_page( 'post-paywall', 'Unlocked Posts', 'Unlocked Posts', 'read', 'unlocked-posts', 'jpw_unlock' );
		}
	}
}

/**
 * Admin Menu
 */
function jpw_status() {
	$post_per_page = get_option( 'posts_per_page', 10 );
	$paged         = ( isset( $_GET['paged'] ) && ! empty( $_GET['paged'] ) ) ? (int) sanitize_text_field( $_GET['paged'] ) : 1;
	if ( $paged === 1 ) {
		$offset = 0;
	} else {
		$offset = ( $paged - 1 ) * $post_per_page;
	}
	$user_query  = new WP_User_Query(
		array(
			'number' => $post_per_page,
			'offset' => $offset,
		)
	);
	$total_user  = $user_query->get_total();
	$total_pages = ceil( $total_user / $post_per_page );
	$users       = $user_query->get_results();

	$userlist = '<table class=\'jpw-subscriber widefat striped\' style=\'width:99%\'>
                    <tr>
                        <th>' . esc_html__( 'Username', 'jnews-paywall' ) . '</th>
                        <th>' . esc_html__( 'Full Name', 'jnews-paywall' ) . '</th>
                        <th>' . esc_html__( 'Email', 'jnews-paywall' ) . '</th>
                        <th>' . esc_html__( 'Subscription Status', 'jnews-paywall' ) . '</th>
                        <th>' . esc_html__( 'Times Left', 'jnews-paywall' ) . '</th>
						<th>' . esc_html__( 'Expiration Date', 'jnews-paywall' ) . '</th>
						<th>' . esc_html__( 'Unlock Remaining', 'jnews-paywall' ) . '</th>
                    </tr>';

	foreach ( $users as $user ) {
		$status           = get_user_option( 'jpw_subscribe_status', $user->ID );
		$date_format      = get_option( 'date_format' );
		$expired          = get_user_option( 'jpw_expired_date', $user->ID ) ? get_user_option( 'jpw_expired_date', $user->ID ) : Date( $date_format );
		$unlock_remaining = get_user_option( 'jpw_unlock_remaining', $user->ID ) ? get_user_option( 'jpw_unlock_remaining', $user->ID ) : 0;
		$days             = date_diff( new DateTime(), new DateTime( $expired ) );
		$current_date     = new DateTime();
		$expired_date     = new DateTime( $expired );

		if ( $status && 'ACTIVE' === $status ) {
			if ( $current_date <= $expired_date ) {
				$status_user = esc_html__( 'Subscribed', 'jnews-paywall' );
				$days_left   = $days->format( '%a ' . esc_html__( 'days', 'jnews-paywall' ) . ' %H ' . esc_html__( 'hours', 'jnews-paywall' ) );
			} else {
				update_user_option( $user->ID, 'jpw_subscribe_status', false );
				$status_user = esc_html__( 'Not Subscribe', 'jnews-paywall' );
				$days_left   = '&ndash;';
				$expired     = '&ndash;';
			}
		} else {
			$status_user = esc_html__( 'Not Subscribe', 'jnews-paywall' );
			$days_left   = '&ndash;';
			$expired     = '&ndash;';
		}

		if ( get_user_option( 'first_name', $user->ID ) || get_user_option( 'last_name', $user->ID ) ) {
			$name = get_user_option( 'first_name', $user->ID ) . ' ' . get_user_option( 'last_name', $user->ID );
		} else {
			$name = '—';
		}

		$userlist .= '<tr>
                        <td>' . get_avatar( $user->ID, 32 ) . '<a class=\'username\' href=\'' . get_author_posts_url( $user->ID ) . '\' >' . $user->user_login . '</a></td>
                        <td>' . $name . '</td>
                        <td>' . $user->user_email . '</td>
                        <td>' . $status_user . '</td>
                        <td>' . $days_left . '</td>
						<td>' . ( ( ! empty( $status ) && $status ) ? date_i18n( $date_format, strtotime( $expired ) ) : $expired ) . '</td>
						<td>' . $unlock_remaining . '</td>
                    </tr>';

	}
	$page_link = jnews_paging_navigation(
		array(
			'base'                => get_pagenum_link( 1 ) . '%_%',
			'format'              => '&paged=%#%',
			'current'             => $paged,
			'total'               => $total_pages,
			'pagination_mode'     => 'nav_1',
			'pagination_align'    => 'center',
			'pagination_navtext'  => true,
			'pagination_pageinfo' => true,
			'prev_text'           => __( '&lsaquo;' ),
			'next_text'           => __( '&rsaquo;' ),
		)
	);
	$userlist .= '</table>';

	$menu_status = '<div class=\'jpw_manage_status\'>
                        <h3>' . esc_html__( 'Post Paywall Users Status', 'jnews-paywall' ) . '</h3>
                        <p>' . esc_html__( 'Here you can monitor your Post Paywall Subscriber latest status.', 'jnews-paywall' ) . '</p>
                        <br/><br/>
                        ' . $userlist . '
                        ' . ( $page_link ? '<div class="tablenav"><div class=\'tablenav-pages\'>' . $page_link . '</div></div>' : '' ) . '
                    </div>';

	echo $menu_status;
}

/**
 * User Menu : Subscription Status
 */
function jpw_subscribe() {
	$status      = get_user_option( 'jpw_subscribe_status', get_current_user_id() );
	$paypal_id   = get_user_option( 'jpw_paypal_subs_id', get_current_user_id() );
	$date_format = get_option( 'date_format' );
	$expired     = get_user_option( 'jpw_expired_date', get_current_user_id() ) ? get_user_option( 'jpw_expired_date', get_current_user_id() ) : Date( $date_format );
	$remaining   = date_diff( new DateTime(), new DateTime( $expired ) );

	if ( $paypal_id ) {
		$sub_id   = $paypal_id;
		$sub_type = 'Paypal';
	}

	if ( function_exists( 'wcs_get_subscription' ) ) {
		$wcs_order_id	= get_user_option( 'jpw_subscribe_id', get_current_user_id() );
		if ( $wcs_order_id ) {
			$sub_id = $wcs_order_id;
			$wcs_order = wcs_get_subscription( $wcs_order_id );
			$sub_type = $wcs_order->get_payment_method();
		}
	}

	if ( $status && $status === 'ACTIVE' ) {
		$mystatus = '<div class=\'jpw_leftbox\'>
							<span><strong>' . esc_html__( 'Subscription ID', 'jnews-paywall' ) . ' : </strong>' . $sub_id . '</span>
							<span><strong>' . esc_html__( 'Subscription Status', 'jnews-paywall' ) . ' : </strong>' . esc_html__( 'ACTIVE', 'jnews-paywall' ) . '</span>
							<span><strong>' . esc_html__( 'Remaining Time', 'jnews-paywall' ) . ' : </strong>' . $remaining->format( '%a ' . esc_html__( 'days', 'jnews-paywall' ) . ' %h ' . esc_html__( 'hours', 'jnews-paywall' ) ) . '</span>
							<span><strong>' . esc_html__( 'Next Payment Due', 'jnews-paywall' ) . ' : </strong>' . date_i18n( $date_format, strtotime( $expired ) ) . '</span>
							<span><strong>' . esc_html__( 'Payment Type', 'jnews-paywall' ) . ' : </strong>' . $sub_type . '</span>
						</div>
						<div class=\'jpw_rightbox\'>
							<button class=\'subscription\'>' . esc_html__( 'Cancel Subscription', 'jnews-paywall' ) . '</button>
						</div>';
	} else {
		$mystatus = '<span>' . esc_html__( 'You are not subscribed', 'jnews-paywall' ) . '</span>';
	}

	$output = '<div class=\'jpw_manage_status subscription\'>
					<h2>' . esc_html__( 'Subscription Status', 'jnews-paywall' ) . '</h2>
					<div class=\'jpw_boxed\'>
						' . $mystatus . '
					</div>
				</div>';

	echo $output;
}

/**
 * User Menu : Unlocked Posts
 */
function jpw_unlock() {
	$unlock_remaining = get_user_option( 'jpw_unlock_remaining', get_current_user_id() ) ? get_user_option( 'jpw_unlock_remaining', get_current_user_id() ) : 0;
	$unlocked_posts   = get_user_option( 'jpw_unlocked_post_list', get_current_user_id() ) ? get_user_option( 'jpw_unlocked_post_list', get_current_user_id() ) : array();
	$post_list        = '';
	$post_total       = 0;

	if ( ! empty( $unlocked_posts ) ) {
		foreach ( $unlocked_posts as $post_id ) {
			$post_list .= '<tr>
								<td><a href=\'' . get_permalink( $post_id ) . '\'>' . get_the_title( $post_id ) . '</a></td>
							</tr>';
			$post_total ++;
		}
	} else {
		$post_list .= '<tr>
						<td>' . esc_html__( 'You don\'t have any post unlocked', 'jnews-paywall' ) . '</td>
					</tr>';
	}

	$output = '<div class=\'jpw_manage_status unlock\'>
					<h2>' . esc_html__( 'Unlocked Posts', 'jnews-paywal' ) . '</h2>
					<div class=\'jpw_boxed\'>
						<span><strong>' . esc_html__( 'Quotas Left', 'jnews-paywall' ) . ' : </strong>' . $unlock_remaining . ' ' . esc_html__( 'unlocks', 'jnews-paywall' ) . '</span>
						<span><strong>' . esc_html__( 'Posts Owned', 'jnews-paywall' ) . ' : </strong>' . $post_total . ' ' . esc_html__( 'posts', 'jnews-paywall' ) . '</span>
					</div>
					<br/>
					<table class=\'jpw-subscriber widefat striped\' style=\'width:66%\'>
						<tr>
							<th>' . esc_html__( 'Unlocked Posts Collection', 'jnews-paywall' ) . '</th>
						</tr>
						' . $post_list . '
					</table>
				</div>';

	echo $output;
}
