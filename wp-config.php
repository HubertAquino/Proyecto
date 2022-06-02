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
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         'l#erRd|K#YAQ#Iu2hc(y;sYb!#ib_dehy!!LzZE<nE}6QqZ4X1Q^WAyVcXjN2T[n' );
define( 'SECURE_AUTH_KEY',  '<<l@0S>:[MPu+J^lhe@v:&t0F!m_DL8bQD.0yKy{ChwMi_oW||M`h-(/W%7] GLx' );
define( 'LOGGED_IN_KEY',    'UPepA~=feD^-OQ9OBExxyE6!Xa|a-`rdV#Gg4dMBMn:8&?]U2yM^V|7Z*d8X30CA' );
define( 'NONCE_KEY',        'Jp(sv1zL=?1xl//#x?o}v:-l~U[=-Ai2O;O7cTnwno0RL@&DYke[#WYf~$+Q7Wtn' );
define( 'AUTH_SALT',        '~7FUzh7q-[e5f.C 3L&NY95A+C/8BsYmK)J$9m9y &ZG^zCt>yTXyIw}BvD=L.}k' );
define( 'SECURE_AUTH_SALT', 'o%K[4W+P!032&s}ik1Zs%~e-&~ =+Altbc<.=zQe-uJ[kv.tDoi})n^m^zaCXgM9' );
define( 'LOGGED_IN_SALT',   '@lIlvstLBQwS ER`n]SU]yN|4n+8(BkE|oHq--#-Lj)gC0$JlYl=Up _3wB.V%WI' );
define( 'NONCE_SALT',       'FY`@jyfN#F18<c_f`rpzW/s2 8q:=Fu-xNUt=>_&T`R|X*UATm@vyg1>74zd7S:P' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_1';

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
