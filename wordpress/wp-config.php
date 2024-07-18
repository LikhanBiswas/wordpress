<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
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
define( 'AUTH_KEY',         'Un5w|(fv-unVI^9-2ar)uo{5{q#H6iH=XP~=w`W:02r28xE#T7q,e0IYtS2qvG2Z' );
define( 'SECURE_AUTH_KEY',  '_3{EnNY?S%2!<kcKMM_6zDWV:|gF7Gki}H]6)D4nu#MXlmqgvYdWzMv>j&!SjacV' );
define( 'LOGGED_IN_KEY',    'XMK>.6g5~6D6tm2~m`(/l`lHi+rYpzd.)EI4Rf7ar!;2!jdp$H?I`^:5->h46?^3' );
define( 'NONCE_KEY',        '-8=M@K!khoir=F(U#T&B5#!AWJRk4~RpLmIQBB5KW7{DGDOV:K4aY|t|<KF8feI=' );
define( 'AUTH_SALT',        '4)ChM4r^}VZ@N?w;sIV:|h#8O$]/kixECg<MW.$/u=`9pv>=AN!-1@4S)5`Kf}l!' );
define( 'SECURE_AUTH_SALT', '2ZO7$A@NgE5/=#-{/EA6UQ}Z_yu7/!YAY!@3CKEOVZ#)X:_&?eGR/gO@P%?VjGDs' );
define( 'LOGGED_IN_SALT',   'wQ rofQM)tMAJIG2/~!c|:XxE{50:RIep+XVV^*O!1&!#.lPh3qiyS4OT?E7`G%e' );
define( 'NONCE_SALT',       ')C&+LT`eR1NMQ}K>gL(wUL+:XcnRE*oHBTXUd`nfFHqOB?pCS#aLc12NaDkj9|8M' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp66_';

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
 */
define( 'WP_DEBUG', false );
define('WP_ALLOW_MULTISITE',true);

/* Add any custom values between this line and the "stop editing" line. */
define( 'MULTISITE', true );
define( 'SUBDOMAIN_INSTALL', false );
define( 'DOMAIN_CURRENT_SITE', 'localhost' );
define( 'PATH_CURRENT_SITE', '/wordpress/' );
define( 'SITE_ID_CURRENT_SITE', 1 );
define( 'BLOG_ID_CURRENT_SITE', 1 );


/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
