<?php
/**
 * JNews Paywall - Customizer Option
 */

$options = array();

/* Content Restriction */
$options[] = array(
	'id'    => 'jpw_header',
	'type'  => 'jeg-header',
	'label' => esc_html__( 'Content Restriction', 'jnews-paywall' ),
);

$options[] = array(
	'id'          => 'jpw_block_all',
	'transport'   => 'postMessage',
	'default'     => false,
	'type'        => 'jeg-toggle',
	'label'       => esc_html__( 'Block All Posts', 'jnews-paywall' ),
	'description' => esc_html__( 'Block all posts for free user. If enabled, this option will override premium option in individual post.', 'jnews-paywall' ),
);

$options[] = array(
	'id'              => 'jpw_limit',
	'transport'       => 'postMessage',
	'type'            => 'jeg-number',
	'label'           => esc_html__( 'Paragraph Limit', 'jnews-paywall' ),
	'description'     => esc_html__( 'Choose how much paragraphs to show for non-subscriber users.', 'jnews-paywall' ),
	'default'         => '2',
	'choices'         => array(
		'min'  => '1',
		'max'  => '9999',
		'step' => '1',
	),
	'active_callback' => array(
		array(
			'setting'  => 'jpw_block_all',
			'operator' => '==',
			'value'    => true,
		),
	),
);

$options[] = array(
	'id'              => 'jpw_hide_comment',
	'transport'       => 'postMessage',
	'default'         => false,
	'type'            => 'jeg-toggle',
	'label'           => esc_html__( 'Hide Comment', 'jnews-paywall' ),
	'description'     => esc_html__( 'Hide comments for non-subscriber users.', 'jnews-paywall' ),
	'active_callback' => array(
		array(
			'setting'  => 'jpw_block_all',
			'operator' => '==',
			'value'    => true,
		),
	),
);

/* Advertisement Option */
$options[] = array(
	'id'    => 'jpw_header_advertisement',
	'type'  => 'jeg-header',
	'label' => esc_html__( 'Advertisement Option', 'jnews-paywall' ),
);

$options[] = array(
	'id'          => 'jpw_subscribe_ads',
	'transport'   => 'postMessage',
	'default'     => false,
	'type'        => 'jeg-toggle',
	'label'       => esc_html__( 'Hide ads for subscriber', 'jnews-paywall' ),
	'description' => esc_html__( 'Remove all JNews ads from being displayed for user who has an active subscription.', 'jnews-paywall' ),
);

$options[] = array(
	'id'          => 'jpw_unlock_ads',
	'transport'   => 'postMessage',
	'default'     => false,
	'type'        => 'jeg-toggle',
	'label'       => esc_html__( 'Hide ads for unlocked posts', 'jnews-paywall' ),
	'description' => esc_html__( 'Remove all JNews ads from being displayed for posts that has been unlocked.', 'jnews-paywall' ),
);

/* Article Buttons */
$options[] = array(
	'id'    => 'jpw_header_2',
	'type'  => 'jeg-header',
	'label' => esc_html__( 'Article Buttons', 'jnews-paywall' ),
);

$options[] = array(
	'id'          => 'jpw_show_header_text',
	'transport'   => 'postMessage',
	'default'     => true,
	'type'        => 'jeg-toggle',
	'label'       => esc_html__( 'Show Header Text', 'jnews-paywall' ),
	'description' => esc_html__( 'Show header text above the button.', 'jnews-paywall' ),
);
$options[] = array(
	'id'              => 'jpw_override_header_text',
	'transport'       => 'postMessage',
	'default'         => false,
	'type'            => 'jeg-toggle',
	'label'           => esc_html__( 'Override Header Text', 'jnews-paywall' ),
	'description'     => esc_html__( 'If enabled, this option will override all text from header text above the button on truncated articles and the text will not translatable.', 'jnews-paywall' ),
	'active_callback' => array(
		array(
			'setting'  => 'jpw_show_header_text',
			'operator' => '==',
			'value'    => true,
		),
	),
);

$options[] = array(
	'id'              => 'jpw_header_title',
	'transport'       => 'postMessage',
	'default'         => 'Support authors and subscribe to content',
	'type'            => 'jeg-text',
	'label'           => esc_html__( 'Header Title', 'jnews-paywall' ),
	'active_callback' => array(
		array(
			'setting'  => 'jpw_show_header_text',
			'operator' => '==',
			'value'    => true,
		),
		array(
			'setting'  => 'jpw_override_header_text',
			'operator' => '==',
			'value'    => true,
		),
	),
);

$options[] = array(
	'id'              => 'jpw_header_description',
	'transport'       => 'postMessage',
	'default'         => 'This is premium stuff. Subscribe to read the entire article.',
	'type'            => 'jeg-text',
	'label'           => esc_html__( 'Header Description', 'jnews-paywall' ),
	'active_callback' => array(
		array(
			'setting'  => 'jpw_show_header_text',
			'operator' => '==',
			'value'    => true,
		),
		array(
			'setting'  => 'jpw_override_header_text',
			'operator' => '==',
			'value'    => true,
		),
	),
);

$options[] = array(
	'id'          => 'jpw_show_button',
	'transport'   => 'postMessage',
	'default'     => 'both_btn',
	'type'        => 'jeg-select',
	'label'       => esc_html__( 'Show Button', 'jnews-paywall' ),
	'description' => esc_html__( 'Choose which button will be showed on truncated articles', 'jnews-paywall' ),
	'choices'     => array(
		'both_btn' => 'Both Buttons',
		'sub_btn'  => 'Subscribe Only',
		'unl_btn'  => 'Unlock Only',
	),
);

$options[] = array(
	'id'              => 'jpw_subscribe_url',
	'transport'       => 'postMessage',
	'default'         => 'none',
	'type'            => 'jeg-select',
	'label'           => esc_html__( 'Subscribe Redirect', 'jnews-paywall' ),
	'description'     => esc_html__( 'Choose where your non-subscriber will be redirected when click subscribe button on article', 'jnews-paywall' ),
	'choices'         => jpw_pages_list(),
	'active_callback' => array(
		array(
			'setting'  => 'jpw_show_button',
			'operator' => 'in',
			'value'    => array( 'both_btn', 'sub_btn' ),
		),
	),
);

$options[] = array(
	'id'              => 'jpw_unlock_url',
	'transport'       => 'postMessage',
	'default'         => 'none',
	'type'            => 'jeg-select',
	'label'           => esc_html__( 'Unlock Redirect', 'jnews-paywall' ),
	'description'     => esc_html__( 'Choose where your user will be redirected if they dont have unlock quota', 'jnews-paywall' ),
	'choices'         => jpw_pages_list(),
	'active_callback' => array(
		array(
			'setting'  => 'jpw_show_button',
			'operator' => 'in',
			'value'    => array( 'both_btn', 'unl_btn' ),
		),
	),
);

$options[] = array(
	'id'              => 'jpw_override_subscribe_button',
	'transport'       => 'postMessage',
	'default'         => false,
	'type'            => 'jeg-toggle',
	'label'           => esc_html__( 'Override Subscribe Button', 'jnews-paywall' ),
	'description'     => esc_html__( 'If enabled, this option will override all text from subscribe button on truncated articles and the text will not translatable.', 'jnews-paywall' ),
	'active_callback' => array(
		array(
			'setting'  => 'jpw_show_button',
			'operator' => 'in',
			'value'    => array( 'both_btn', 'sub_btn' ),
		),
	),
);

$options[] = array(
	'id'              => 'jpw_subscribe_title',
	'transport'       => 'postMessage',
	'default'         => 'Subscribe',
	'type'            => 'jeg-text',
	'label'           => esc_html__( 'Subscribe Title', 'jnews-paywall' ),
	'active_callback' => array(
		array(
			'setting'  => 'jpw_show_button',
			'operator' => 'in',
			'value'    => array( 'both_btn', 'sub_btn' ),
		),
		array(
			'setting'  => 'jpw_override_subscribe_button',
			'operator' => '==',
			'value'    => true,
		),
	),
);

$options[] = array(
	'id'              => 'jpw_subscribe_description',
	'transport'       => 'postMessage',
	'default'         => 'Gain access to all our Premium contents. <br/><strong>More than 100+ articles.</strong>',
	'type'            => 'jeg-textarea',
	'label'           => esc_html__( 'Subscribe Description', 'jnews-paywall' ),
	'active_callback' => array(
		array(
			'setting'  => 'jpw_show_button',
			'operator' => 'in',
			'value'    => array( 'both_btn', 'sub_btn' ),
		),
		array(
			'setting'  => 'jpw_override_subscribe_button',
			'operator' => '==',
			'value'    => true,
		),
	),
);

$options[] = array(
	'id'              => 'jpw_subscribe_button_text',
	'transport'       => 'postMessage',
	'default'         => 'Subscribe Now',
	'type'            => 'jeg-text',
	'label'           => esc_html__( 'Subscribe Button Text', 'jnews-paywall' ),
	'active_callback' => array(
		array(
			'setting'  => 'jpw_show_button',
			'operator' => 'in',
			'value'    => array( 'both_btn', 'sub_btn' ),
		),
		array(
			'setting'  => 'jpw_override_subscribe_button',
			'operator' => '==',
			'value'    => true,
		),
	),
);

$options[] = array(
	'id'              => 'jpw_override_unlock_button',
	'transport'       => 'postMessage',
	'default'         => false,
	'type'            => 'jeg-toggle',
	'label'           => esc_html__( 'Override Unlock Button', 'jnews-paywall' ),
	'description'     => esc_html__( 'If enabled, this option will override all text from unlock button on truncated articles and the text will not translatable.', 'jnews-paywall' ),
	'choices'         => jpw_pages_list(),
	'active_callback' => array(
		array(
			'setting'  => 'jpw_show_button',
			'operator' => 'in',
			'value'    => array( 'both_btn', 'unl_btn' ),
		),
	),
);

$options[] = array(
	'id'              => 'jpw_unlock_title',
	'transport'       => 'postMessage',
	'default'         => 'Buy Article',
	'type'            => 'jeg-text',
	'label'           => esc_html__( 'Unlock Title', 'jnews-paywall' ),
	'active_callback' => array(
		array(
			'setting'  => 'jpw_show_button',
			'operator' => 'in',
			'value'    => array( 'both_btn', 'unl_btn' ),
		),
		array(
			'setting'  => 'jpw_override_unlock_button',
			'operator' => '==',
			'value'    => true,
		),
	),
);

$options[] = array(
	'id'              => 'jpw_unlock_description',
	'transport'       => 'postMessage',
	'default'         => 'Unlock this article and gain permanent access to read it.',
	'type'            => 'jeg-textarea',
	'label'           => esc_html__( 'Unlock Description', 'jnews-paywall' ),
	'active_callback' => array(
		array(
			'setting'  => 'jpw_show_button',
			'operator' => 'in',
			'value'    => array( 'both_btn', 'unl_btn' ),
		),
		array(
			'setting'  => 'jpw_override_unlock_button',
			'operator' => '==',
			'value'    => true,
		),
	),
);

$options[] = array(
	'id'              => 'jpw_unlock_button_text',
	'transport'       => 'postMessage',
	'default'         => 'Unlock Now',
	'type'            => 'jeg-text',
	'label'           => esc_html__( 'Unlock Button Text', 'jnews-paywall' ),
	'active_callback' => array(
		array(
			'setting'  => 'jpw_show_button',
			'operator' => 'in',
			'value'    => array( 'both_btn', 'unl_btn' ),
		),
		array(
			'setting'  => 'jpw_override_unlock_button',
			'operator' => '==',
			'value'    => true,
		),
	),
);

return $options;
