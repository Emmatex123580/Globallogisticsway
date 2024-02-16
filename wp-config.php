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
define('WP_CACHE', true);
define( 'WPCACHEHOME', '/home2/globallogi5/public_html/wp-content/plugins/wp-super-cache/' );
define( 'DB_NAME', 'globallogi5_wp379' );

/** Database username */
define( 'DB_USER', 'globallogi5_wp379' );

/** Database password */
define( 'DB_PASSWORD', 'Sp1H050o.!' );

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
define( 'AUTH_KEY',         'urcedjx6vckluvdxeam3i8ltnt3nkpjtbtct9azugj0nio90zz6lzyifmzubz60a' );
define( 'SECURE_AUTH_KEY',  'jsbcm0ezngfa5hsn6clyrukkqmoektnrwsvf8mdr4fk7mwmcdyxrvngf2l62w0bw' );
define( 'LOGGED_IN_KEY',    'pwlxrtndptsgtetwkgdzhkcdftzvqrj5kwrgwrcxkuem0vuvm2hdk9t9lezvhh89' );
define( 'NONCE_KEY',        'vzp9x2dkzz83swzhkfinzvuwisc5ydkbgizhsasi92zlc7uactnktqvbapgjriel' );
define( 'AUTH_SALT',        'kpddoy7q68j1yvgr2fyzu7ee1hmu5rfmwy9mkxxb0zynfp07x3reto1ad5ncghen' );
define( 'SECURE_AUTH_SALT', 'vr8xcjfh1fvttn8xptamirgmicsoxw2arnkesebdezevolq1dgovofakwcdpaipd' );
define( 'LOGGED_IN_SALT',   '7wfq7xcfjrzfbufwgiwrchwqfqscewxitmuli3uootgfzd55mosptlo6ar8z7icw' );
define( 'NONCE_SALT',       'ckdbb69ekrnxdehiofufn1w9miymgqydllegsszjmnqxoewgwhttqevdodsoyeag' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wpss_';

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



define('DISABLE_WP_CRON', true);

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
