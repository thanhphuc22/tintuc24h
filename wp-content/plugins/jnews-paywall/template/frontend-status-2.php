<?php

/**
 * JNews Paywall - Frontend Account Unlock Status Template
 */
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


$output = '<div class=\'jpw_manage_status\'>
                <div class=\'jpw_boxed\'>
                    <span><strong>' . esc_html__( 'Quotas Left', 'jnews-paywall' ) . ' : </strong>' . $unlock_remaining . ' ' . esc_html__( 'unlocks', 'jnews-paywall' ) . '</span>
                    <span><strong>' . esc_html__( 'Posts Owned', 'jnews-paywall' ) . ' : </strong>' . $post_total . ' ' . esc_html__( 'posts', 'jnews-paywall' ) . '</span>
                </div>
                <br/>
                <table class=\'jpw-frontend-status\' style=\'width:100%\'>
                    <tr>
                        <th>' . esc_html__( 'Unlocked Posts Collection', 'jnews-paywall' ) . '</th>
                    </tr>
                    ' . $post_list . '
                </table>
            </div>';

echo $output;
