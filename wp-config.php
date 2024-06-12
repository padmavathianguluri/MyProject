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
define( 'DB_NAME', 'myproject_db' );

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
define( 'AUTH_KEY',         'AX(;V{j9MVW>Ohyg44:Lhw!C_F1>Fo})nNff?KKUch0a{}cJD-&C_$49SF>Lq9~/' );
define( 'SECURE_AUTH_KEY',  'q_;t!|M<8mVqcXmXr6-va3R/MR3oz/nVTasJLK|nlQk?AaR|8a8.es7MaQaxg@~W' );
define( 'LOGGED_IN_KEY',    'gDn;!X!uSd)&1q`RIY^.MWe{l2hAQG^#)&xPO)QGF}F|dV8RkHIe)r}2_{NL($`i' );
define( 'NONCE_KEY',        'mbUzR`&K92*DQKY]cu@7M8s/Y2L4,yy+_b|:Ou&Ai)3i.[(N(/.QVx:XaVM>xkF ' );
define( 'AUTH_SALT',        'PB@buV<`Jkb`mEl].MNG5kpYM6dpl|sF>79)|@_}tx|V:B;zLMO.rD65J>9]<ZJJ' );
define( 'SECURE_AUTH_SALT', 'XCuwGhglFZq:EsQx<aT&y~gm*ybLq`%jDGn7%_,_I-1|~%9Y*dHJrNr>*Iz<QZ]R' );
define( 'LOGGED_IN_SALT',   '3[N^6N~oJ=dWTU)gNioMcdv-k;}G9!%b$v<cP`?9dWA,_(l:9Tp5>RmV cBb~3iW' );
define( 'NONCE_SALT',       'v]Mm(qh{,FnQsGHG{FdhTe@|%$gxSa!U4p| Uwg9VSN6=+SVgO,7(|iakyLVRHt/' );

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
