<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'tintuc24h' );

/** Database username */
define( 'DB_USER', 'tintuc24h' );

/** Database password */
define( 'DB_PASSWORD', '10112002p' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'ZZF{jHX7o49[Gz>9SpYW4f{CBk1]O#oANCSZG*O6%7K`{Z^OgKX~-!1up~ljQ;uC' );
define( 'SECURE_AUTH_KEY',  'W#nMJrC>Nf]%w6V^d8%fX:4/YuQA10,aQ<?&(==7=WSl&.mT%=f<c<e{<rQwi&A(' );
define( 'LOGGED_IN_KEY',    'nI0ZwA}[eY;zn]6D6A<} !r4ljBk2IxeQJQYlva&PP?`Jh4n`.b?g16@*H,#%{;g' );
define( 'NONCE_KEY',        'z/~H5>oE^E2@N{ILcnhcLl0cYq%4eO?+M1Qfmig1zu5r1IMs2 FZqSJ8Bu!&?4fB' );
define( 'AUTH_SALT',        'C@5POGoz5d;}h?uk1y%HMM<OABBi}$Tc:_C*B48 (E{ ?$g@rcog96KS3m_LfHI(' );
define( 'SECURE_AUTH_SALT', '{OnEYeVMu82g)Bhit3H>e-?j.aEXKxW6f6Ck<iMV#*a)=$4Iv7wc%7T1aiiR}-0A' );
define( 'LOGGED_IN_SALT',   'J69D<DEw!a&YrgZX$s0_AME>vfr06`N~3N`:ybFL5zD!^M|T%4!el;un-*THbn#_' );
define( 'NONCE_SALT',       'DnZhZ0.uY@=Wvi(feKPA=815>Y|N>Foj{G#JmpOH{0n?t9c+3h2<!f u[!LCX]Af' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
