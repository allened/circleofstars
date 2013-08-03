<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'circle');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         '~wO|CH|V_G6af0~)t$Qg>{J- #c]nAbvb(T.l_X!`O|,Mo~go0ny|%APK4e9cIJw');
define('SECURE_AUTH_KEY',  'v$2;7~Xuw1wp5d@OkD3Y&g34k1P-z/8dk$gR479%T|MeE3QIpAfu5Hnf,Pc{ZWua');
define('LOGGED_IN_KEY',    'AAGujl<wcmQc9OJj|9,%[K4KyE1q]X*J75EW`wjDif-_T,^n9?|^Q0fvMA3)5:GF');
define('NONCE_KEY',        '?Vf0?SXqo_]pCm/m1] D&0HToG?:BR#@wDX!UN|5LF9WRg@#x7,Tf{>lPH__nq4|');
define('AUTH_SALT',        'MzR-86G)!%1h%eE5P o{7,_9Kj($jttD>`&/}{;/1m[q|F9fU8(Y)PB6+w>n<$GM');
define('SECURE_AUTH_SALT', '<^7 _2b=tq*1bgUq~.muw|[.p~3-QXaMhLtvu!|&S[@uw_!/1MES!}8Q/W-.O8n[');
define('LOGGED_IN_SALT',   ';T%,YV5D5t&^vP?2e)1F!dG=~s2wiRP7[&wy.~kS7^unZq3{g.fnr[p%KNVS:10z');
define('NONCE_SALT',       'LFLp4cs&m{N?PZ8dSKYRgp7>G^f&owWUe*4GX$f6!W6^WfmOG?*2C5.vC(&6,J!t');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wrd1_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
