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
define('DB_NAME', 'devtoolssimar');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         'i?u:?>*hq(&>~t-*n/k3>pMHDw|jaR#WsY.0LL%lrx$~#^Ey~L)$A5]KaZ<e>/+n');
define('SECURE_AUTH_KEY',  'x)PE3rgNBfrc-Q,}X%QhKj8vw@]c|svdnB=?2T:j}ysq{jj3|VXly,_y[ 9dmbGU');
define('LOGGED_IN_KEY',    'J(-6KqTMyv0gPI?-9,[yc8}( D}L2xBYM4r9?./FIC74.!dX5fR!5[FT],vi/kna');
define('NONCE_KEY',        '4bA[j$#cl9b,a]#(~Qj?Zt])cQ@0G;*Cj~&+wc{%#!fy_U!^F{`dF}NkG {.xf_M');
define('AUTH_SALT',        ' C1-~dt=,_+9 n4$ygUf}Xw%1Mw,PvM1B3;LK&TqfAMSvzN/?Q#&5oc/J^}DHs+I');
define('SECURE_AUTH_SALT', 'lFHBo%utszTc,L7(=YnEX_iQvyl@6wCNtZ1`l+rg+GvO]7(^2HQlPj(|(<IFIa#2');
define('LOGGED_IN_SALT',   'n~y[WFN{#qi:|%}LOz3bizR<^lv4N]o/#t/z^!{C[=;aJ8DUL{bCgOG) g(=~-sC');
define('NONCE_SALT',       'fv(hu)!>PS%Y;nB_BRACoOhz![`z#LL35HN;.w-,oW5f62e-O7jh+{_aU;qMf-QE');

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
