<?php
/**
 * Plugin Name: JNews - Paywall
 * Plugin URI: http://jegtheme.com/
 * Description: Member subscription for reading posts in JNews Theme (WooCommerce plugin required).
 * Version: 10.0.5
 * Author: Jegtheme
 * Author URI: http://jegtheme.com
 * License: GPL2
 * Text Domain: jnews-paywall
 */

defined( 'JNEWS_PAYWALL' ) || define( 'JNEWS_PAYWALL', 'jnews-paywall' );
defined( 'JNEWS_PAYWALL_VERSION' ) || define( 'JNEWS_PAYWALL_VERSION', '10.0.5' );
defined( 'JNEWS_PAYWALL_URL' ) || define( 'JNEWS_PAYWALL_URL', plugins_url( JNEWS_PAYWALL ) );
defined( 'JNEWS_PAYWALL_FILE' ) || define( 'JNEWS_PAYWALL_FILE', __FILE__ );
defined( 'JNEWS_PAYWALL_DIR' ) || define( 'JNEWS_PAYWALL_DIR', plugin_dir_path( __FILE__ ) );
defined( 'JNEWS_PAYWALL_GATEWAYS_DIR' ) || define( 'JNEWS_PAYWALL_GATEWAYS_DIR', JNEWS_PAYWALL_DIR . 'class/gateways/' );

require_once JNEWS_PAYWALL_DIR . 'autoload.php';
require_once JNEWS_PAYWALL_DIR . 'helper.php';

/**
 * Initialize Plugin
 */
JNews\Paywall\Init::instance();
