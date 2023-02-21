<?php
/**
 * @author : Jegtheme
 */
update_option( 'jnews_license', [ 'validated' => true, 'token' => 'jnews', 'purchase_code' => '**********' ] );
defined( 'JNEWS_THEME_URL' ) || define( 'JNEWS_THEME_URL', get_parent_theme_file_uri() );
defined( 'JNEWS_THEME_FILE' ) || define( 'JNEWS_THEME_FILE', __FILE__ );
defined( 'JNEWS_THEME_DIR' ) || define( 'JNEWS_THEME_DIR', plugin_dir_path( __FILE__ ) );
defined( 'JNEWS_THEME_NAMESPACE' ) || define( 'JNEWS_THEME_NAMESPACE', 'JNews_' );
defined( 'JNEWS_THEME_CLASSPATH' ) || define( 'JNEWS_THEME_CLASSPATH', JNEWS_THEME_DIR . 'class/' );
defined( 'JNEWS_THEME_CLASS' ) || define( 'JNEWS_THEME_CLASS', 'class/' );
defined( 'JNEWS_THEME_ID' ) || define( 'JNEWS_THEME_ID', 20566392 );
defined( 'JNEWS_THEME_TEXTDOMAIN' ) || define( 'JNEWS_THEME_TEXTDOMAIN', 'jnews' );
defined( 'JNEWS_THEME_SERVER' ) || define( 'JNEWS_THEME_SERVER', 'https://support.jegtheme.com/' );

// TGM
if ( is_admin() ) {
	require get_parent_theme_file_path( 'tgm/plugin-list.php' );
}

// Theme Class
require get_parent_theme_file_path( 'class/autoload.php' );

JNews\Init::getInstance();
