<?php
define( 'WP_CACHE', true );
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
define( 'DB_NAME', 'u406568819_dzpDf' );

/** Database username */
define( 'DB_USER', 'u406568819_q0sOs' );

/** Database password */
define( 'DB_PASSWORD', 'YRq2rrWXfp' );

/** Database hostname */
define( 'DB_HOST', 'mysql' );

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
define( 'AUTH_KEY',          'FEai9~;FMvYIC`OBT?/%9]vS*2Fz;l&oM^u5O,u.9dl;KJ#9eIsth-h.G02Ga,@a' );
define( 'SECURE_AUTH_KEY',   'b68} g8H37IoSdMYX0q9qUN/+1H6YGot+{>.K9*FD&_l6Cwf^;2k-8J=16+@8</n' );
define( 'LOGGED_IN_KEY',     'Nt3c+lerKi?W~^VeoXoXr.S+VgiI1Uvd=rA{LLKuI4kI(L#T-KF15J-L7XtG+m/6' );
define( 'NONCE_KEY',         '=}8WZfJcr5_f3$Vx#a&aVSbF[m{Q9-Byu,B+hXV2|plOp@g|n_d }{ZA/(dEh%jU' );
define( 'AUTH_SALT',         't58Yo/j%felThPslgc+MID~w<wwYwSX$zC&5?(Ha=^+#Ul@x$2zDa.fRujK9dApr' );
define( 'SECURE_AUTH_SALT',  '` 3/1FsWKUtxX|4+ P:,@uD=;o)7Hmy7fOCNxI0=LTL _2[=2)0?rg&YNRi0-*LU' );
define( 'LOGGED_IN_SALT',    ' 8<+uI,qIZBf-7!aGc7iIYBLen7D}%*dx<VX*h.hocmpyv4j]FdU+.X/!u*Xz8me' );
define( 'NONCE_SALT',        'Y<: lYbx9/yBa}r=,?!2rgMi]~:5T/kMTuYSj^xS@Kt6LI,7^[##Xj5bOH*[?6m?' );
define( 'WP_CACHE_KEY_SALT', '5OPC <D]pJ=2J@G&8{rc[O~<A$v/Zg>kQQAU&)$9K=Zu@~LW ,q=_k3U/NIIz.WP' );


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



define( 'WP_AUTO_UPDATE_CORE', 'minor' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
