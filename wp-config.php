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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'fictuni' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          'aI=(epR;&m.`csNk%+Oaz1?=nbjzGbQo20O>SO(diF<JT0(sIhWwlgYVhyHa!E/#' );
define( 'SECURE_AUTH_KEY',   '9oL0~1mhpbMf!YWovT2*)^!6O)sfr{+O].3*h+V-L }#S#M3OJi=U9zdssmWD.!Y' );
define( 'LOGGED_IN_KEY',     'Pz*_b!F.A,+=,pzUVZ :  zd8xfLEH.dN_.&1;GzrehSJ<g<`|j&%ix9Z7$59gd]' );
define( 'NONCE_KEY',         'vZ<_sYt_!{?_@JtP4x-F@^HWi-xfu/mXtHb13mdFhs-s/e5~>ixQZ6A+&^(PRjHz' );
define( 'AUTH_SALT',         'gYv,|*s~Tb[eFW~oFYZoxdueRi;YG@*1]7]q{kqIs%BtLR8{AJ-o5P!XS <Q`U-:' );
define( 'SECURE_AUTH_SALT',  'E8zF-Wy=EC7*Ddejxp>Zz9ikl?cxmi>)2?OU}S5(UVCa<$3zNGI]E9Wc_`p1-W C' );
define( 'LOGGED_IN_SALT',    'HdltCQ?7.EAv.z>Vt{bZS]>2+s3h&b$W-[[F[nWZT{0V9:pUU}D=kda2W7n]&5k=' );
define( 'NONCE_SALT',        '!Y]N`c8[M{CKt2p!3kE^8l<3kc_jr@wQKOZZ0bmA&Xk8zV09x<q%7T8X[O$ecAEA' );
define( 'WP_CACHE_KEY_SALT', '$)hv#T=C~B)CwvsWeDb9+oZCp8~;Pkf:-:M|Q&bC9%0r.JB3HiPV#[9&TRc9gihh' );


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
