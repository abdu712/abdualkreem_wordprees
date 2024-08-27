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
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         'jZ[|tV+xxO4W%Q3ec=zwTFR|TO7tZmJe!8^pdUQyX>/^wpZ^t}-ARKn=v@x-F/G9' );
define( 'SECURE_AUTH_KEY',  'PVr6sk]*0:U=Z3aF2&Q>1|LP4@>Zov}Fd{q]^tv)K8X;=/ibJ)YiXS,e[9M<+}AD' );
define( 'LOGGED_IN_KEY',    'VF$7TmTY^@`4y+dOx4 A9u*6HIDvR51[ n}I.{v+VwvFzw(Sg;{GP.N<C~GBN,S=' );
define( 'NONCE_KEY',        'pcpCod5P<@0gMaTq`W7ocHR?D}+,A*;S-H|eC~UE2>$GeYP7fj!17,>][UV^({k8' );
define( 'AUTH_SALT',        '@fT3Eggw=2k@LpM0DkU3I70EV@B2A~nfN`B0YZsLASa|]D2l(qdJ8M+C!)@3}SSt' );
define( 'SECURE_AUTH_SALT', ',roj}u~RrP.id:q625>PIbjr&e>4PeSv/[$E0$u?Y_X-f?8>~}91:r0l[}/;(s0m' );
define( 'LOGGED_IN_SALT',   'DaigXH[FpfAM5lT?^q zI:kcl:c`7`El.op`G{QIv-I<g`YBQk$$9AD!uIV7D<:s' );
define( 'NONCE_SALT',       'oNFWXDnFS#a:pG>__@BqFUCIQyWJj%s~y*Tl4l;OJS=k6nMI,6Mxpw9#k.,b[m`P' );

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
