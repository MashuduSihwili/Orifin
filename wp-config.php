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
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'orifin_db' );

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
define( 'AUTH_KEY',         'Z|rl#~h)oEe irD??o%e;i_8w]VhiwDR):Rbe$4n!8mOkn--Gk$pL8y[f5UU?VKc' );
define( 'SECURE_AUTH_KEY',  'p!R_Sk-N&) _pka`29,Y(a#uAi]jT?O8Xh[dMs<(F Of!QsK9$Y$34MiL_Md$ qu' );
define( 'LOGGED_IN_KEY',    'H^4Y&>H=&%oK1?*Ts7RrP,l%A4xu-^Cf[IEYb1*~-wCjC`)vPYA{_+N*xYYZudqt' );
define( 'NONCE_KEY',        '@)rlY^YeqS96rL>^UZP0{e$22KxV8.:k1e0r}qHCyG/=0DN*NpZM-S0K$ye#~$?D' );
define( 'AUTH_SALT',        ' eXzh81Np%(J#XZg7D{0b3&lf|L~ G8JZF4N:5Lu;i)vp3Yz3 Y2d|>K$/`o1IHa' );
define( 'SECURE_AUTH_SALT', 'pJKG<!.&McpTy$H96*f(5_}6>veMUks:66PTdbyvxPZ_c2V.@Ff5H0f +%(V-(4r' );
define( 'LOGGED_IN_SALT',   'FQ91DqJ)L!i (6Z`ZM;&c.y$u_Xck:|;;K|*+A)|^bYOeN^aD u0IEYO%X-|i(ZM' );
define( 'NONCE_SALT',       ':|9g[|_Gg:nGP[GlF-bH(mT_%>eOMQMB~%<F>-3E@]4,u<qXQ Naur.P|DxRd7#/' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
