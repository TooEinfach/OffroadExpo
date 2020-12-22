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
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'wordpress' );

/** MySQL database password */
define( 'DB_PASSWORD', 'password' );

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
define( 'AUTH_KEY',         'v+|,M(s-w7CoNHKtyi!r=@{%`g/zKEzg]i%:}U>9<hQ%8m|?xFk-,::Q@;%EWxj9' );
define( 'SECURE_AUTH_KEY',  'Z{54wCymPXhBB&X/%aqa}0v%:Sy]hL/`&;Y|lf(_yo2EvvT @Y+CJ3}(:z*XnBKf' );
define( 'LOGGED_IN_KEY',    ')!C:Auf-p8585s]n*?| wjekBh);j_~20?zO%ZXoES&C`j<NtVkEQtSwqJol9Ht_' );
define( 'NONCE_KEY',        '{0a2BA=U^>h|,1HA+2MI5x5F]BPn!yz)!0xzc)P>b%Pjqk/*x-NG9^ `Ww}<4eLD' );
define( 'AUTH_SALT',        '+?O_$t<rcEF=m h{9!%d8 h<]a UEqyA|PRn}I8IcV)7J~gZ/K~6u&m%Ty!`a4)~' );
define( 'SECURE_AUTH_SALT', 'R5%:;f8<4Y.wl^+c,s )18W5Yup{5({Qdb{8IcAa!D dJNaypzEfLWsVzfYohvf)' );
define( 'LOGGED_IN_SALT',   'Gr2`7R(Y9;Kir|;ms<hPOx6Zt4r(@;oR8cqdI^vJDf~Z48W.ImL.<H3:y:p9x86-' );
define( 'NONCE_SALT',       '9Zm,xpVjm9OY642z$ekM-aJ=D&sp2U(H|t0yMQ]`{{{l5Gt1RYOF&AWsIuu/6Ok{' );

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
