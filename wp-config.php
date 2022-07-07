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
define( 'DB_NAME', 'devinovexia3_wpinovxnew' );

/** Database username */
define( 'DB_USER', 'devinovexia3_wpinovxNew' );

/** Database password */
define( 'DB_PASSWORD', 'S[9B4f}TRq??' );

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
define( 'AUTH_KEY',         'Q!Sjy7#-B.29A@]( &[k.4qF{%S76Z-qYtEW){<!KH2w@EN=&NNBg1[jeEXs& cH' );
define( 'SECURE_AUTH_KEY',  'h~Txoi ~(l:#jq92IODS;z>)W%!uL?z%5bU:z{7,)%z:zu;R}Ve:m@N3z/^$vD3z' );
define( 'LOGGED_IN_KEY',    '~]v6~va+|C_a4kJVOo!9~. E.XhNJ$mA8RA_p_5bfN^CI.CqNS{N6PH62HOkQ#6q' );
define( 'NONCE_KEY',        'u38%SAZFX%O$EOE#PNX{%B;]aOIV4*qoQhw%=4e*:dt2n$xQ^FgG#<[G&u:x(:Dt' );
define( 'AUTH_SALT',        'D]=K+Q~g,VMYfZN%mWZ|2Nl&j?n8QB~ti6Uw%+yEfgM,wl[s5un}mru^!?KGWXc,' );
define( 'SECURE_AUTH_SALT', 'dl}RsD5,W:tn,#[z}`u5l%Fv[UVQU=V{~+WL3.8|zK5?AcoxO<}wnnf4SK_j0pm{' );
define( 'LOGGED_IN_SALT',   '*cl&m]F-E@8QJW$P+{5@Lv}w!+;+^s) -mH~/J+bxG@3]RY,^Gw&QLCUBb4$b^VU' );
define( 'NONCE_SALT',       '/9?@!9O[Da@PsO}Bhl))k$wSg!>TbQ.}x(,!P!W4Usi$k~Ia~h3GB1k$3@,G4g}O' );

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
