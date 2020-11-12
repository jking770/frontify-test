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
define( 'DB_NAME', 'frontify_db' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '>/2A>]({uzE0:Zk?<V^/w2 %3`9C3(>?-&9gMSgC;:{_a63i[Dm[F~O:6WZpo/~}' );
define( 'SECURE_AUTH_KEY',  'p:x#LK$B,?`b1$,VWmR#G[NP,cPx.S%)LDzq=eBC%XD9=P8irxU5aj|u^W0kb%JG' );
define( 'LOGGED_IN_KEY',    'tp<tcsJw}23i_Kp-ocIk?u1!kwgqA/?IRnk*`,w1dg3OVyE3WjwVu,[oG9*hPtHN' );
define( 'NONCE_KEY',        '4W_*-`fF{4;VxQ!MZraQ14!4o/~M&88II}*GFG5Z !mj+xL^{8B*8!:SdBH9Ir0j' );
define( 'AUTH_SALT',        'F2#*B&0|C2L#2AmW:.(N`B_&<(K{5wW.RbFlMG{Lr4;bu}N%PYYsc/Vv53*x.t#L' );
define( 'SECURE_AUTH_SALT', '#SpSe^g/c?^pTZ.VGJD)G~&TD!/vjDvr>fM>dHgFpA_G)kNc8J@v]x?N/KeCC:0#' );
define( 'LOGGED_IN_SALT',   '-(jJlqB5tc6;L-(K&aI{pM{R61Zw<Yz5 04<u.F$Yo1`hLJ,@3J&D#f/4e5}X=!L' );
define( 'NONCE_SALT',       '_r(l:%+3q #ewr nRmuUa]}J^T`~/-P&2`vzV;/6%RtA0nDSL{I/T_j7&w6Pw7ZM' );

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
