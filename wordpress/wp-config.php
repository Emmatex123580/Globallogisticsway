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
define( 'DB_NAME', 'sql65221124' );

/** Database username */
define( 'DB_USER', 'sql65221124' );

/** Database password */
define( 'DB_PASSWORD', 'JHGQSKLD343' );

/** Database hostname */
define( 'DB_HOST', 'db4free.net' );

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
define( 'AUTH_KEY',         'U#i?C}MF>3Z-1zal+7-VtDoYk$gG^Od@Z-4c/(}GG0m1=yC[Xzg]hRmn=aDrq*N6' );
define( 'SECURE_AUTH_KEY',  'OUTsQo)qNa79gA16b$VD>&S#8bzOBs1|fc`?xB<Qps6QgBoKc9&6[|9t>6B(]<!{' );
define( 'LOGGED_IN_KEY',    ',1mU{{>qw>m}B=6]Hsw.z}V,:-Du5_4YPe&hn-Q((Q=Gc4d.Own/@Xbw]wfA>NPh' );
define( 'NONCE_KEY',        'Q)J>3iMudxQm||>_iR*%tt{]ge;;MAg$xH&(}FMe*{UFK=E0ig.p8u5S1v/<*j2[' );
define( 'AUTH_SALT',        '?c(7m+nipnoKMrZ>K9PjL@}3.nN2E;_JB&VqbrLa[>H{BC<O:ag`9$?1GlI<|WcT' );
define( 'SECURE_AUTH_SALT', 'Y6;r3jfhI*V`pjtGII}@o>ZNt&Kh+_s9glKU@RaVCUBXV@7>{V5=Z~u0f}KSl?k:' );
define( 'LOGGED_IN_SALT',   '0b=qIX1TSN:lB^nw<q<}atzw+U( GN((0$u^&{z]u@v}XLK]{hcc;C2(h45yOoxd' );
define( 'NONCE_SALT',       '#I#+}FKi:cJ{BuB,U83oF7cxQ$*DnwhS76irwy#>_RxUMrDA6$WV>#NygLo&E?m>' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_1739695';

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
