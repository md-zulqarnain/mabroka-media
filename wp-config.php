<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'mabroka-media' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'password' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'BT?D,8_rz}u(Gl:d_hnMi;G+<O]!2EBZ(Kn7=4}XC[L3^JO^&B(_>FhXN_gBB<~6' );
define( 'SECURE_AUTH_KEY',  'kdW[PcT@/?qRZ 2FDcN,A9}3):O,8(H/zFLj~;*C*ymu$fF@.xB/50cSn_B(vaK4' );
define( 'LOGGED_IN_KEY',    '@]yfp>,a`7tb*Q2)A}wf1[tm$ri!!JOj7O{Wyx4ZW9>L@3$@knANG:MHQF5#(B^_' );
define( 'NONCE_KEY',        ';hf8-l0<<g0X54B1+zzrLGkKrYeob#0dYk{R_<bi+?yd8RKCj_,1y@M=+`Qw.k>q' );
define( 'AUTH_SALT',        'fE,%{D.t4YqAN-T 5UukRa)ptyHD0U4>d[0cPxzzy>W8k%z6_M&%#O-t|j-U&DTn' );
define( 'SECURE_AUTH_SALT', '&R8:ERgm7@@##Bopl|~bR|NWGOKGJ971jv`mfXKwC4G||mxaT[ICaFSgJ.5ArRdW' );
define( 'LOGGED_IN_SALT',   'NSt3IoOgD{,9KnDMU1lH5SuIgU<7i~=;>+_!uo=XS8[B+F7#<|GN:HX`{q4e[X)-' );
define( 'NONCE_SALT',       '} 1)LH/x6&u=[fbJ*YG=6t+y-L4WM:,tlxgcUj,BUh5R`C+PTG/=9jEH6v#Cf S|' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
