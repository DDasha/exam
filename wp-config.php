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
define('DB_NAME', 'wp-base');

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
define('AUTH_KEY',         '5d@nocWd1j9uWBRn@7(;L3M9M//.yTEuB~F>E#}}E&+B-WMakXw{}bTgur5|fEt5');
define('SECURE_AUTH_KEY',  'KR|1sL:mV%tI!g Z8<];J(HI+Sz14Yl,kXZR!sM.R(T+^iUe=<>Gk3~#ApB,~3L2');
define('LOGGED_IN_KEY',    ']i^}b]$;*h$-#IJiM:lo(*VswroSD|(:0Z[SVrXABO>|+4Gl0ryi3_qHAy|MT-:B');
define('NONCE_KEY',        '?*8)UN<OCm-A@TTAlE |C|H?*C`}=;>tx:>2.(+V-`<?fW?+*:]UQ$Z5l~aB1$yP');
define('AUTH_SALT',        '|/J5#3=FY`=n+V++/7c[gAk!tV>#QCw`vp6Gnq[H]][O9.9e=_{$W+7!t*P|%[)l');
define('SECURE_AUTH_SALT', 'Rl$6MI~,92C5^YMG4}:+-+Eih zbgKTLxt-wFDDWI-mJd8xt?`7B(8*U>M *k~ho');
define('LOGGED_IN_SALT',   '3Vu&Og]eP946[)R;s}]r6FA_nPi[0LNSQ,P5<%g/CM|jPy8x${3TE=1?A9&-XPh<');
define('NONCE_SALT',       '< ~_)}e+9amYC7%T |pn51Y2-@2pOxeR|ZX{pS:(dci;)X-+!yX-o[cQ4WKnlJ [');

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
