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
define('DB_NAME', 'sweetbase');

/** MySQL database username */
define('DB_USER', 'sweetbase');

/** MySQL database password */
define('DB_PASSWORD', 'bigos2018A');

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
define('AUTH_KEY',         'QnN>gN-4lx3%tm}3.([_>U|N@cTlLKO._F?iT1L^k 448_Yee#/aWS+6rXYd,]w*');
define('SECURE_AUTH_KEY',  ' *ZPuL*F[c9<$tW0uYduJl$}gK-7gsYf(`4&NT/9e!}OiL{(s,(zeZj5Z!NOTUbr');
define('LOGGED_IN_KEY',    '?X(](ZdF/s8fTfA+|I6Mo=A.(D??or*aw9,0.aRgv=t}!>A8eQgi0`4q/bCaAiqZ');
define('NONCE_KEY',        '[uXun?+WGO5=}:bN4819at2^-Y7AK~D<X$[.;=n]HEFLLZ+|VLbYgQV}n<DHzdvO');
define('AUTH_SALT',        '=!a>P/ rRpj ^5$?wd6,{n}xo#`7&rx/L;S5l6(jwZ#[JqdkLGGl<iULCH_Mwz6^');
define('SECURE_AUTH_SALT', 'Q>KJXACs}.>6W2]wqU<!T724! &zv{9CIA=KqVbsF/ /=5;Edz#BD_j%jy%/4@{m');
define('LOGGED_IN_SALT',   'Y;zKvvC|@n{});2.Rv`SYg9~lT zx2/{|zK`zmIpqIUckp3XLt|;XQ6aP$s0(nyR');
define('NONCE_SALT',       'ceXV!x}1CPoX4JVJl,IoJ*mL|(w~#~qdT~]/0j{8(Sm@U4Jc7^.YLvkfSxK*@,2#');

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
