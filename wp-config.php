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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'epiz_32976893_w984');

/** Database username */
define('DB_USER', '32976893_1');

/** Database password */
define('DB_PASSWORD', 'yPP2[!95Sp');

/** Database hostname */
define('DB_HOST', 'sql303.byetcluster.com');

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
define( 'AUTH_KEY',         'scmfhuzfyjefcjqpqxrzfll6sinbumkt1eabvcmyvq4wvh7jbvnju6jrtrsowxgl' );
define( 'SECURE_AUTH_KEY',  'oguwyzla5q1dcxilt8hdh6ytbmts8nvh1g1trpkgp5sbv491jqpe8z6lnyd1i3hs' );
define( 'LOGGED_IN_KEY',    'jyz67bjgefnqsxatpo1vio9307osdayqlxxmtqwsnvjjggq6nd1gi5xfya7ji2cn' );
define( 'NONCE_KEY',        '4iozx8oej8ehshnn4udqolbo153gilfgyfcfl5oihhqrfsqprpip59i9v4bz0tte' );
define( 'AUTH_SALT',        'b0axk33dinsc3in5hcdqja2imvwfwpbv8dbg9lf3ghmqcolqsljc2iq4jklkkumv' );
define( 'SECURE_AUTH_SALT', '9zzaehy5j4pbjrjsy6zuojd0bticxlnmc1foggpglwgyd5coffq1oao7bgcgkh5o' );
define( 'LOGGED_IN_SALT',   'lg0jdvo9ccwculxrsvqr9hvfnjqgviubpgj9vwbmwhakc40nvyzcsajwazbhhnz1' );
define( 'NONCE_SALT',       '3bf8mdgnexad06szi2xm2risajrsds8otuo68olphda1zolxf6xpwnffaprqsjdj' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wpsf_';

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

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
