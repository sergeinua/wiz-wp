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
define('DB_NAME', 'wordpress');

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
define('AUTH_KEY',         '+r5-o_~,d>*9d9lC&kebb3GV;_K1UF;8&v:s[$3O/CM-K$GpQ~gt%JXPi^lhDuA_');
define('SECURE_AUTH_KEY',  '>j[FTqo&rjqQu|_J W!1g4!e i?%Y+v45N.5sG5P3xP]-/|FqLD=HyWs)rtM2V`f');
define('LOGGED_IN_KEY',    '`Qx95^$UJ.N]oCHnOsbTdx8PcU8F-gv?l@Ox`*K%%eVi$d]0-+P;#+3G/BQGLYjT');
define('NONCE_KEY',        '-)(K@Kd-oF%kBUn]JbYFCeC+{pum|bs-zpyDjZ):54f_+@#75!:7HCg|Pu$g<VDp');
define('AUTH_SALT',        ')zj Ug@0o4@}Qyslt4K^3E<q(a~H[k&m09iWJXbu1>M$?ey9+Ma.ybJU+-0uQpJ;');
define('SECURE_AUTH_SALT', '-WK?~f5z;,:E]`6AAPibS|N}`$hhtA}sk>)W>Zw%KqxgoY{yg=#+& [Lx* W-*M(');
define('LOGGED_IN_SALT',   ' (/W+>b;v|kZcSFlULbB6,(m/t8`yhxCCz,SU`_0u**NK#7YsO^Erk|7|:(@Np_L');
define('NONCE_SALT',       'X=lmb^b5tYuvB[N|5Q3T6h3[K(2x^POB6oyAx!ncPj2_hhPVsl:SQ0&N>D[+LDP4');

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
