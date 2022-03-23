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
define( 'DB_NAME', 'wordpress2' );

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
define( 'AUTH_KEY',         'C;geL~R-U=2.Y3&)1XpjCBA+5D[mO:`~X(+uN}d5Y:D/Vr7cWj8fKxj{PYT}{N,k' );
define( 'SECURE_AUTH_KEY',  'OZyf^|9@GRZ=$Z!FC.QJ,Wq&J0DKj5E#qJiEdu&O=ZTr4([DM1]*gBJ_rejUJOr_' );
define( 'LOGGED_IN_KEY',    ']AQNC74zEJx1BXdT%)wvU@Y(ZVB6!2pwQFeg7)Z-R._~m8b$L9l|%J;=mYZRWZo>' );
define( 'NONCE_KEY',        'bD{-lZ-88:wpV1rh2y_A dF&_IBh-^d>M~EnniP~vrtS G& :PasmTvT1Ds#}W*e' );
define( 'AUTH_SALT',        'u]o2(@eNeq5x[PG#xk)Ppq|k|0*qEecyD8acwIRryGC/rd%{`W)nDjor2.N3}BNU' );
define( 'SECURE_AUTH_SALT', 'O-P`zU(~HcS}{1_s6IZ(b693#UG))uJwVDJa?xD.vG_3hCO!?6/WJIsQ+=gf{4b?' );
define( 'LOGGED_IN_SALT',   'oB/XS}!n$n;h}0>X[%C~M$a</b>g#or~X=Z8V{:r[vH{^JU9(#(E7+PdFHF3kiBN' );
define( 'NONCE_SALT',       '(m$fCeNe_B-(YWKIo^ P 1kd1*=~)u{8.B~Z?R.@k,_5z}diQgAhS`R`e4/(56L{' );

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
