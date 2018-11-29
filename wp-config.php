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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'sdme_db');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'E`}_|1D6wA@5=^=zOtw,eQ{&2 7IMY*|6[K]bphDvv&;mlHY+_r%<4+9LQ~Pb&/q');
define('SECURE_AUTH_KEY',  'xXk3w*U+#cpm)h ^V:=_ka}JVh<>FLR~HU?P;:oG^Q1hGAwlo&js$A+o/%W1Z{9X');
define('LOGGED_IN_KEY',    '5>sJiq|]]L_aW18*5)V(prBRE(b27JKrdKHW[vv:KKl>wYnQpyrE?9eyJI<LC-6t');
define('NONCE_KEY',        't~E/{SY~N@:&dnC!YlRZmq-3?gwh]@GXT*C:)Op,s?c9:ap+VY,^Lz;+eVS#2td6');
define('AUTH_SALT',        'JlAzwcn~o9GT tiW8S#)lFJ9Wv4[{+*A~WeMxr,5(9h$0.bG>$1b|Z7O_=CEaqMx');
define('SECURE_AUTH_SALT', ':_>-G<h9RN&%.Jo#0_a=KB?CmiKmo`<pJ/?(Zu?o,k?Tk#da6zR~UsMOxi.qC |:');
define('LOGGED_IN_SALT',   'rt)6 9Et7N}9?FYlY1.WKY}BVk5y4+rPY:Gp?W/J8.[-xaQgQa4s$ Q--{vi+08/');
define('NONCE_SALT',       'wRId b75Kqx (SiA0Vs`j;wy0!C<FkGjpp@9!@]m|ZQoh8<4(}sS)Qz^_Up0)puz');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

add_filter('https_ssl_verify', '__return_false');
add_filter('https_local_ssl_verify', '__return_false');