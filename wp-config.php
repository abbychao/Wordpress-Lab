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
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         '!hlclfR2}wM.7xpeT^+|N=jx+C|(og)H{AkIzYY]fT<bcQNTVU)jGg{yXkxeaHeW');
define('SECURE_AUTH_KEY',  '4Yk9_:H*~H>pHI)ZZ%&|X-+C7P[!e-pxNGwoKv>ft-reYaFX2?>-n}x7&B>,:pzv');
define('LOGGED_IN_KEY',    '(1e(CPf5Iz>AL-2  0baI-O{IQY-jz7c2f51/:)%-(4xo-f(~U.`<xi}}{F+74,|');
define('NONCE_KEY',        'Xt+c|S>/TuO3/ 2EztK9sGT3ZzFMl&te0h#x #3<7bx)a3v++vSZS%g9Tn .;Y2y');
define('AUTH_SALT',        'Znu2%-bc|wI~Tz[>x75|BI<U=H<@TU7|7id|| J]`7Z/V/Zy|2ZxRa!y^RW%CA+x');
define('SECURE_AUTH_SALT', 'V?N+M~n<q+t~-b^v#|wI,Pn~[Aa{b5V6{7DPTjBeGHj:%Lbo+3YF5s$eV!HpnNG4');
define('LOGGED_IN_SALT',   'p+G?,f{u0$Jaua?`q93&xwR7j39a_uqtxR@LcKb1$C?^!F9C)~;Tbq|,_).$Z?Gt');
define('NONCE_SALT',       '`=iWTkL1OW8g}vMXyuwJOKKt<-|mpAVlwpfTWCdZWVS+ZOnOw5;W=l@01,Me=[yM');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
