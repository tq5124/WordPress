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
define('DB_NAME', 'tq5124');

/** MySQL database username */
define('DB_USER', 'tq5124');

/** MySQL database password */
define('DB_PASSWORD', 'dqxrAtWAlOx14KHNSRKQ');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**slove ftp*/
define("FS_METHOD", "direct");

define("FS_CHMOD_DIR", 0777);

define("FS_CHMOD_FILE", 0777);

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '-3Q}K1A6#06|5e[Da}s,l|DmgE=fKJU2E3K|z#-r/PU<01oM|SVdlvrar:H[-?KG');
define('SECURE_AUTH_KEY',  'UUNJXOh1y3]|c*M&;5lQk^C4P`}O4<TfWLXFa4:QVx|eWlWg:l9%Cs&3L<nmPV23');
define('LOGGED_IN_KEY',    'LVIxMx9}i{#BfOXc|!FSX=|pmz9cqg/#w^4WeRNkoHphY>PnZAR+XtBn#94-Lv~-');
define('NONCE_KEY',        '1+p9+q1k?-_S}Amts__-XQ?28<~I0.<sXg|>8h;-NeF/RRvGF,>gL,pw(S`JxNp^');
define('AUTH_SALT',        'TMD*;AIt[h`cOJ&x+3PuekY}x LI`]hc$sk{X|GD?|p0%~ayn,z8bYk0?SkdUW--');
define('SECURE_AUTH_SALT', '4~nd,1`=g|@.ahj;-fg0|nX+w,-QfIT1LYW[oL2uPt+kp&rSQwk|8k`[yt:E>+s^');
define('LOGGED_IN_SALT',   '!+-yrL6>n?)<dg)-+T|KC}pbD~|@RJwXmSuEj2-!GKb`HJH!7)tqI >xYvm8-YJ;');
define('NONCE_SALT',       'OW%x3w.0Xq(7ZUu6$cerB{+n;)J`<Ltl8TCa_tE4+8F+PxGi`.>^Gh,TK>=R C>?');

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
