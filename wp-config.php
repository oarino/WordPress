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
define( 'DB_PASSWORD', 'password' );

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
define( 'AUTH_KEY',         '4~&cH?2aH3krI[+1w/m/Oa%1W37hy)N6de6h~b(.6QiOYK_}aLOf5ubc(MkcAI(o' );
define( 'SECURE_AUTH_KEY',  '.eyrf8boyUx!APn(g}IR0MJ!H.yPs{!|xQ,c/^ Dr6?88&>9^Jq<E6)iXsvpP$xG' );
define( 'LOGGED_IN_KEY',    'cUPLHYa1DIHk$$/DS$J1a9c;lddJuA>W.5_Xmy8aQyr$3K/y=l_2^jd;FqsZzNw#' );
define( 'NONCE_KEY',        '~ryl:vb>S*HB)Cyjk0=CDm!|?IC!kHD/G(([ug4{al@ rXTeFj|@[&5>Jb?E7s!r' );
define( 'AUTH_SALT',        'F-N>GE$jzA|VkhJHlW{*Wp}:$.^>(VW$8Z#8q%&bS<WuT)g>DZK,A}iq%/z44>R:' );
define( 'SECURE_AUTH_SALT', 'M5F$c[5*-_7lGU10fK1799hP<gaAgXXhKukRpOYW>6ZnwEW,+,VcbkSy1Amfi<yg' );
define( 'LOGGED_IN_SALT',   '$a&dN4|n87U|zAsPMurkwt8wIe;Qqn(/s&ry%I@2lND+VQ?:eYTwWjEU 3BCac7+' );
define( 'NONCE_SALT',       'w,^F!ME`rz,2K,bwSSmrySFgic]Rhd&J|_j@[-(y58>@[.1{pm,XsyG(=A:Ij25,' );

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
