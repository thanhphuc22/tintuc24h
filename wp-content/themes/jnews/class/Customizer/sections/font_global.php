<?php

$options = [];

$options[] = [
	'id'          => 'jnews_body_font',
	'transport'   => 'postMessage',
	'type'        => 'jnews-typography',
	'label'       => esc_html__( 'Body Font', 'jnews' ),
	'description' => esc_html__( 'Site global font.', 'jnews' ),
	'default'     => [
		'font-family' => '',
		'variant'     => '',
		'font-size'   => '',
		'line-height' => '',
		'subsets'     => [],
		'color'       => '',
	],
	'output'      => [
		[
			'method'  => 'typography',
			'element' => 'body,input,textarea,select,.chosen-container-single .chosen-single,.btn,.button',
		],
	],
];

$options[] = [
	'id'          => 'jnews_header_font',
	'transport'   => 'postMessage',
	'type'        => 'jnews-typography',
	'label'       => esc_html__( 'Header Font', 'jnews' ),
	'description' => esc_html__( 'Set font for your header', 'jnews' ),
	'default'     => [
		'font-family' => '',
		'variant'     => '',
		'font-size'   => '',
		'line-height' => '',
		'subsets'     => [],
		'color'       => '',
	],
	'output'      => [
		[
			'method'  => 'typography',
			'element' => '.jeg_header, .jeg_mobile_wrapper',
		],
	],
];

$options[] = [
	'id'          => 'jnews_main_menu_font',
	'transport'   => 'postMessage',
	'type'        => 'jnews-typography',
	'label'       => esc_html__( 'Main Menu Font', 'jnews' ),
	'description' => esc_html__( 'Set font for your main menu', 'jnews' ),
	'default'     => [
		'font-family' => '',
		'variant'     => '',
		'font-size'   => '',
		'line-height' => '',
		'subsets'     => [],
		'color'       => '',
	],
	'output'      => [
		[
			'method'  => 'typography',
			'element' => '.jeg_main_menu > li > a',
		],
	],
];

$options[] = [
	'id'          => 'jnews_h1_font',
	'transport'   => 'postMessage',
	'type'        => 'jnews-typography',
	'label'       => esc_html__( 'Post Title', 'jnews' ),
	'description' => esc_html__( 'Set font for post title.', 'jnews' ),
	'default'     => [
		'font-family' => '',
		'variant'     => '',
		'font-size'   => '',
		'line-height' => '',
		'subsets'     => [],
		'color'       => '',
	],
	'output'      => [
		[
			'method'  => 'typography',
			'element' => '.jeg_post_title, .entry-header .jeg_post_title, .jeg_single_tpl_2 .entry-header .jeg_post_title, .jeg_single_tpl_3 .entry-header .jeg_post_title, .jeg_single_tpl_6 .entry-header .jeg_post_title, .jeg_content .jeg_custom_title_wrapper .jeg_post_title',
		],
	],
];

$options[] = [
	'id'          => 'jnews_block_heading_font',
	'transport'   => 'postMessage',
	'type'        => 'jnews-typography',
	'label'       => esc_html__( 'Block Heading', 'jnews' ),
	'description' => esc_html__( 'Block module and widget title.', 'jnews' ),
	'default'     => [
		'font-family' => '',
		'variant'     => '',
		'font-size'   => '',
		'line-height' => '',
		'subsets'     => [],
		'color'       => '',
	],
	'output'      => [
		[
			'method'  => 'typography',
			'element' => 'h3.jeg_block_title, .jeg_footer .jeg_footer_heading h3, .jeg_footer .widget h2, .jeg_tabpost_nav li',
		],
	],
];

$options[] = [
	'id'          => 'jnews_p_font',
	'transport'   => 'postMessage',
	'type'        => 'jnews-typography',
	'label'       => esc_html__( 'Paragraph Font', 'jnews' ),
	'description' => esc_html__( 'Paragraph font.', 'jnews' ),
	'default'     => [
		'font-family' => '',
		'variant'     => '',
		'font-size'   => '',
		'line-height' => '',
		'subsets'     => [],
		'color'       => '',
	],
	'output'      => [
		[
			'method'  => 'typography',
			'element' => '.jeg_post_excerpt p, .content-inner p',
		],
	],
];

return $options;
