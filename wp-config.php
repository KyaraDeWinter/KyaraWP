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
define( 'DB_NAME', 'KyaraWP' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

if ( !defined('WP_CLI') ) {
    define( 'WP_SITEURL', $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] );
    define( 'WP_HOME',    $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] );
}



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
define( 'AUTH_KEY',         'ieIhKKohivQCcbhMLxPXXvcYP68OEc940vDlcMazBntqoIPtf7w345zp6dc6J5lo' );
define( 'SECURE_AUTH_KEY',  'ccVvHoTQlUGD2kb6u1QtvMRTcKSFSjBnNLWmwnsh5yoPJvy1wMrmtf32dvGEMZZw' );
define( 'LOGGED_IN_KEY',    '7b9IF3opniwDPt7octRY34wOzqDw7q6Iq3eoRYKYwIkd5ihwNtmFTpuDmN0cPUDD' );
define( 'NONCE_KEY',        '6Em0PCqBAEyqXhIzgawB2XXjruJ8H0ydjL9XooC3ZXOkFnCpSHep3F1ient9WZqD' );
define( 'AUTH_SALT',        'jVZ6LJmhaBjotCX8uH5O2YwNtwiLsiIN5St9GnPXtIWrbO70wTDsytmsPZ0AQ9W3' );
define( 'SECURE_AUTH_SALT', 'y2X68u90OdtXLariaEaobRF9GHEZGDw7fu1QmjfZXOA871tZ7VG11CoYE3qQr1P5' );
define( 'LOGGED_IN_SALT',   '4LEEEqFIR6MhctNsrQHVvJvkeXeQwBGcJYbFdKcZtMpmmkPNcKWkJGVjsxFpxEO8' );
define( 'NONCE_SALT',       'Ba2lZESH3gSNcdBSCRkd8mxe7uoRhYaL3rKwR5xdZshLsbXQagtCitQmKU0y1KAq' );

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
