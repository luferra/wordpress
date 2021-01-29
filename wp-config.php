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
define( 'DB_USER', 'wpuser' );

/** MySQL database password */
define( 'DB_PASSWORD', 'wpuser' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );


define('FS_METHOD', 'direct');
/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'v,h^]B0e/G>#*.:b0L3egV+&Q8zU=Qx1pJ]/#C;9W+.Yirw{Eng6=1UMh8SUN-|e');
define('SECURE_AUTH_KEY',  'R1C;u1B1{:m~S-ZqE~<S;LD]9>O*/+CV=2Q-hO4f UymZRJThvXGKsk-ejKLA3Zx');
define('LOGGED_IN_KEY',    'm-l9*w$eps|HpwiezjNYDr}~8PZb>Jb+T2j9&Euo(-6:%@3aK.y[X/X@c=F249Wf');
define('NONCE_KEY',        'Jl}l:K)46b+X,lFrB#Tjjuoj!E{Rj0n&%<z,Q-->Z@6.,1*}$QG*{V/L@0Pt#N.c');
define('AUTH_SALT',        '97b.<{:.VSPTjjVSogE|^slSd q[|hQ>uB)Z*A[S;mU&z(n,;se+bx/+pyJ9+U7v');
define('SECURE_AUTH_SALT', 'd+h-hL=wzG!(S%;h-`a@-3IwM@2qb>^+#-rU$o(%tP@f=PEOoe2dQk]]8b5)uDIx');
define('LOGGED_IN_SALT',   'EJqg[|TZ3_tuD5Dx].3x_Bs.ksP}>M|7spWSEDETb{iXO$vl]Y~p+tW2M)[5]PIl');
define('NONCE_SALT',       'WM_Wabt9f]+O*+M|>E1nP40yfLwi%zXL>k{#1GYnq(:yDMb}+Pj;m3*hLun<mH<^');
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
define( 'WP_DEBUG', true );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
