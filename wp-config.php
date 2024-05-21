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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'ecom' );

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
define( 'AUTH_KEY',         '|gJO[Lwgob(.YO+B6}<c-VUlPlq/N;6K#>OeFY6ur};?83r]WpKNv&laYG;|uE9_' );
define( 'SECURE_AUTH_KEY',  ']H@FU,>3|bLYbb CF2i[y+ko;<pdz7/oo;v@!](x@8oTyg3jpnRL$znbE2RgpL.;' );
define( 'LOGGED_IN_KEY',    '%B}aJSeUOT!Cx<n%6|+Na(WMRu~iQ}]Nc#)b>|K6o>K7ZJc*G,s!rkwv4<;}g)d<' );
define( 'NONCE_KEY',        's)y1<67]?nM=wrz~m-|[g5IHNaB-zd9%? 1-QeK_FD7MY8)$)`,`a.]4?IO[$d0S' );
define( 'AUTH_SALT',        '|gPci?F# Afk6;u,3,dt-.eH%{ntqsjpzvF]k0WT~hmGPfEzOt#(i/(h`ObfD?!?' );
define( 'SECURE_AUTH_SALT', ')v{)HtDz#XI_~(+h0d7eVkDUc`$KbONhCk H>X_rKF(0X-Rbeo:g(fcS;@{K}-ZJ' );
define( 'LOGGED_IN_SALT',   'IDP@gH*Zwj!A:6-98bTLzJcNI0C:V=KWe4WI~~}t&fv*oi3{celgO[|W3z_tmKsK' );
define( 'NONCE_SALT',       ']}M b&%VF;:L;xpK)T{r<,Jxo0Op5J^&IL_hf HZ&BG*H7}<L4aAAf6,d{+t_ORz' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
