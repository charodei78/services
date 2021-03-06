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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'user' );

/** MySQL database password */
define( 'DB_PASSWORD', 'password' );

/** MySQL hostname */
define( 'DB_HOST', 'mysql' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );
define('WP_HOME', 'http://192.168.99.156:5050' );
define('WP_SITEURL', 'http://192.168.99.156:5050' );
/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'UE+XOQip|L2KOI1WM}JQI]cW@KpwRVM5UMOzL_wodZ_/2)Q|$H+T0Hf{[BFi_N^4' );
define( 'SECURE_AUTH_KEY',  'tY@2rh0o-I7zNmYo,}p2h9+Bv6fjJs5#ef=5iaVa(Oi1rr{rn&+|AFyR+BK4gf1-' );
define( 'LOGGED_IN_KEY',    'wr3vUYO*y`:wLYiVEUY;})F;W<vl`}#E[IC2:6eQy1M4y3Y(VR`uA>-.P8Q/1n^l' );
define( 'NONCE_KEY',        'EaU0O<OK@8f@T|q2D/uz=C+&;7i?EWj>rKkcxE^r#SBxV 9eP ej5V{}Hn@d&z:^' );
define( 'AUTH_SALT',        'K%+IjWGBnC$xo8GFT4;1=bB%g6hH06em>.$hHiX}cT2DG^`bY0VtFub3mN0ZqF/Y' );
define( 'SECURE_AUTH_SALT', 'N0yb4J@>&by<wC#93[8By 5&W!1H~WDB;=ZZ>Yv6.%_$Ad@#yYv874Bxq$HK^?LR' );
define( 'LOGGED_IN_SALT',   'yRkJ2E?#((OQtrO??bOx@bjCIm<#aM:]ea.e B/o8~|37oZyv,|V/M#e:m>nE_AP' );
define( 'NONCE_SALT',       'Z4xyqd.h/.hOiFibl1*czBD,hj/Nx5h[AeG)1I`mh,_Q#d]3~&X5w@}F`Iy6=lm1' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
