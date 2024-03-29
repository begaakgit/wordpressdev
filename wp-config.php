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
define( 'DB_NAME', 'begaak' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         'o(P1oYD}iee@?.lnzD _ggLaJwa]+`.(Y}xowhsgzR+Q51<-nk2;7.c@_op 8D,V' );
define( 'SECURE_AUTH_KEY',  '2$<k)nGf0w}QUqELToJs)62S];I4+S/Tm8)dj$j$8V%jg)89>ic^7h_C5rz#$aj&' );
define( 'LOGGED_IN_KEY',    'BJ ~`xhr=sPIlFK-F{<G<*hc&$5{CGaG&i?H.~{iSb}u-hxpLuur%VfP;SH_Y,PG' );
define( 'NONCE_KEY',        'UK/{+0LIl$n]]8@ 3lXuA4H#65zuk(M207<I8t,5Go18Tq[ >-=`q..v C/~Q--R' );
define( 'AUTH_SALT',        '=vjRA%]Y9SDn/.oy]e1lFLnmAsYkSvD4/wGDjg6>efky;z8<&xK0z>:BLbFuB:K@' );
define( 'SECURE_AUTH_SALT', 'lGi~otwCY~PJlm-V;KYt)<zMLc<dlc9ZpX&t@{G$pM(*sdD]DQ~cJ6D:M;uG c~F' );
define( 'LOGGED_IN_SALT',   'XqM^jMy^.g+8m{,/*}R[KLJ0_f@#bfk`yfk54noy@] lP-QIg5q1gpAicehw8_AK' );
define( 'NONCE_SALT',       'E;4/ItE97HgN,<rpz./#oY N4$_XRL-xP76K3]R41g$,c7;(A)90Bt9*+?WWCQ<6' );

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
