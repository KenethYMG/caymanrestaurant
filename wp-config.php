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
define( 'DB_NAME', 'webmedia_caymanrestaurant' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         ',p/<RB9rDOTQm7D/v!&q(T&5&R>2 !`7jRqRed(y3$PI0n/#x6 fHT(,*b2V*SEQ' );
define( 'SECURE_AUTH_KEY',  'KL[B..jr4{#d;m>yf.)$tHk)S%#WHNaD[^r$?Cg1*]qdT6b84HlTjo_,ea:u|Ywl' );
define( 'LOGGED_IN_KEY',    '-UY74jp8d2v:x?DM[)>JqjL#_l}4-[wwGPwJG![R__zXg=Vt9tgxfs7I[TOJ/$(m' );
define( 'NONCE_KEY',        'oC/U#n$N)GBGN>f? ms%CI[o76|$a0y=5il`6*h.d0~.!2 If V 0SSdI84fQG#O' );
define( 'AUTH_SALT',        'G5irOq~X!$@JnSn<|V~|GiKJ-_Xj6-f,]Q9d~{kVJQRdE-)tjfW0 vN}ncf02CdZ' );
define( 'SECURE_AUTH_SALT', ':-44YjucDC|<}90H!ry3nNn_2gl}K4oV;<)dyL/FiKn;z~L4BhjCl!`d(;_Uvby<' );
define( 'LOGGED_IN_SALT',   '6Xih{`#q8P`MW{Xv`.&v<[s<RSdN~9#lG/Ner:_>HAIyimvQ[4Bi_0K:&YL#)8+4' );
define( 'NONCE_SALT',       '3?F|i!g/f5YNRIxS>{=F3pSuQs_Rr,EC;-~U|tHn7?9Pq*&bTTM ~/Lqm|>]*53G' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'webmadia_';

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
define( 'WP_DEBUG', true );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
