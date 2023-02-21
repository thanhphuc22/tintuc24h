<?php

add_action( 'wp_footer', 'render_jnews_paywall_popup' );
function render_jnews_paywall_popup() {
	/**
	 * Unlock Popup
	 */
	$unlock_remaining = get_user_option( 'jpw_unlock_remaining', get_current_user_id() ) ? get_user_option( 'jpw_unlock_remaining', get_current_user_id() ) : 0;
	$unlock_popup     = '<div id=\'jpw_unlock_popup\' class=\'jeg_popup mfp-with-anim mfp-hide\'>
                        <div class=\'jpw_popup\'>
                            <h5>' . jnews_return_translation( 'Are you sure want to unlock this post?', 'jnews-paywall', 'unlock_post' ) . '</h5>
                            <span>' . jnews_return_translation( 'Unlock left', 'jnews-paywall', 'unlock_left' ) . ' : ' . $unlock_remaining . '</span>
                            <button type=\'button\' class=\'btn yes\'><span>' . jnews_return_translation( 'Yes', 'jnews-paywall', 'paywall_yes' ) . '</span><i class="fa fa-spinner fa-pulse" style="display: none;"></i></button>
                            <button type=\'button\' class=\'btn no\'>' . jnews_return_translation( 'No', 'jnews-paywall', 'paywall_no' ) . '</button>
                        </div>
                    </div>';

	echo $unlock_popup;

	/**
	 * Cancel Subs Popup
	 */
	$cancel_subs = '<div id=\'jpw_cancel_subs_popup\' class=\'jeg_popup mfp-with-anim mfp-hide\'>
                        <div class=\'jpw_popup\'>
                            <h5>' . jnews_return_translation( 'Are you sure want to cancel subscription?', 'jnews-paywall', 'cancel_subscription' ) . '</h5>
                            <button type=\'button\' class=\'btn yes\'><span>' . jnews_return_translation( 'Yes', 'jnews-paywall', 'paywall_yes' ) . '</span><i class="fa fa-spinner fa-pulse" style="display: none;"></i></button>
                            <button type=\'button\' class=\'btn no\'>' . jnews_return_translation( 'No', 'jnews-paywall', 'paywall_no' ) . '</button>
                        </div>
                    </div>';

	echo $cancel_subs;
}
