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
define( 'DB_NAME', 'samplydatabase' );

/** Database username */
define( 'DB_USER', 'Samply' );

/** Database password */
define( 'DB_PASSWORD', 'sampling@1234' );

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
define( 'AUTH_KEY',         'l~TbjG1cus!UQ S*Bkd+=fW.Q.{&~~a0>7x?shpR3Ajn_@y-@RW,JPy1xxjP8&~N' );
define( 'SECURE_AUTH_KEY',  't?AtK,O~f1PCp%O} Y6}.SQ?X<]TiWQc?GLrcMcI7I`8$1j8y/O||_i~#t_ltt-p' );
define( 'LOGGED_IN_KEY',    '|*AL;RqURys^%mA={#/Pcv<fl!w3D4zh<0Lb&FctqIQFcF/u+:!@+kI;o9wf*6c(' );
define( 'NONCE_KEY',        'u)[;J@.l*,`xd|R*njCi8#>;9QTDN#EE{C{$ADL|@7&>1V s.D+oe#,i#3Ip4R7f' );
define( 'AUTH_SALT',        '5GMJ1p|a4h2,xs?F_O%RSkIe{};#Rid]kv{y*eMRl<MI+(sze Q7#ov[^4Zz6E{i' );
define( 'SECURE_AUTH_SALT', 'tCX]p:n5be(A_?`#!e6S~UGR]/NIH&wx>7K[j|e22F#Mm~HXCcB@j9l@xtw;rj>E' );
define( 'LOGGED_IN_SALT',   'Hbc:`W5`q{kyL`wE[_4#krRR^?qH)O4-YsaRvL0gM{}PjXm@{GCsGKF..[X>Z9(=' );
define( 'NONCE_SALT',       'f^}3lwjCh z?^D+xIE%_e-eCx*QODCk5ytS?QP(l2qY+ZB9bn6Qm}K(S.Rs9E+k/' );

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
