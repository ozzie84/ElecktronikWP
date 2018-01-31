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
define('DB_NAME', 'electrician');

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
define('AUTH_KEY',         'k,L[WXL+B{RNG9DgnE;rv%@Q?/x>7yK5YHpCxO}h?|[pvi>jG#.5VW]|qdjjTA/i');
define('SECURE_AUTH_KEY',  ':m1GBSRRxx105GlT]#yP?!grv/jEp&&?U}0Pj_{A-O[f;}$;b+ck3$) X2G/,;Fz');
define('LOGGED_IN_KEY',    ']5=?b,5HI36!eQ:tIvB$l*NW4I/-5{VK%g;B]s{95.2oy.9%2^&;YK0luWh[jWus');
define('NONCE_KEY',        'O|<YuQ}kT%,c=`MW{d_e_*=fZzN~qH=`.q%L(k>|?<@R5N`J&f>73TWpIM/KC}Pc');
define('AUTH_SALT',        'tBHncZ)rwuPLY7mBBc$pa>{_cxggn@wMUrh1@PK_h{1,{+h#@;Qr5id}Rft;ig3 ');
define('SECURE_AUTH_SALT', ';13^Lt.h}BI6q-ZC_P37+T{q[@.:O 8u0ADu-@bPtrW0-=x&v;bfv| )80k%R:8/');
define('LOGGED_IN_SALT',   '-?<qV`<Q,D(_8FAlCRhln|X_6`kIJHhmeT(N|H3}Qgo_*q) u85WMuY9WRxdOoi`');
define('NONCE_SALT',       'g6H@fntC#F$_sX$.0wIe*.q)oe48{[I3U/;hB?xpm lqZTY%8^OIPt5~;oJkbfhg');

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
