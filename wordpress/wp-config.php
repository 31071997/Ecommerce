<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
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
define( 'DB_NAME', 'Ecommerce' );

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
define( 'AUTH_KEY',         '1D<+^Z9F5)oP_o8L!Lc8-H2TM|0&5hZW#&<B;p.OX2&$E#Q[+j^|rM=K`a56xS*m' );
define( 'SECURE_AUTH_KEY',  'D4eNu,q>$a:cpI5B`J[je(x^mxV}R9iHq00FG)vL~#PyR>Y8{s?1N.vg_;.ySr>D' );
define( 'LOGGED_IN_KEY',    'dUtq7pt6Xhs= #OT#[f=1>UA@0r!Ek7noo.S<yq/Ii*<;Y`-Ho>tL*^ePhBM}.lb' );
define( 'NONCE_KEY',        'j#mBnkGqW5?gU37?_ewq$p|9W1OE,V;i1,/6?i-K$[5!`9uEu@w} IyQ-!cF(>.4' );
define( 'AUTH_SALT',        'Hy=&)e_VG@/c@2[]7L58M%M%<}?TD1f%c/hW-~Bv6i=W#.2ztv:LM|ZL<^=#ch$I' );
define( 'SECURE_AUTH_SALT', 'v 13;JH6l*2$kJ$MPdeIQ8L.f(Ur&j6Oj3&Je;F%V*Z00^h>-756`oNIpUC-faS{' );
define( 'LOGGED_IN_SALT',   'mj?7@`jSDq*`&$lpRp5fha>/ukc85@v}y!O*dpJ1^Ku(Jp^Ly@_RCt_:*ux5nMqE' );
define( 'NONCE_SALT',       '#Pj<l_qHaU<TTA!cv+p;Z2#VQ2@5Ky(wl#4s`qo%g]T]kI&g[Oj)PI](`@qIHKH]' );

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
