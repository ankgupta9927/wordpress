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
define( 'DB_NAME', 'Ecom' );

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
define( 'AUTH_KEY',         'Ex$L_35WqEsoG%&DA`bu&=4Rr$9c+<edLi=ocjvDsPP9asn@/n0bhr{g9Tqo16MX' );
define( 'SECURE_AUTH_KEY',  ']ub-f%cPUWq(r:8aC851L9[OhWr:,U.(v:{Xa$BQz]<I;qW=1OfWlA?!`ePQYKyE' );
define( 'LOGGED_IN_KEY',    'cXs!9Wn8K g`%,Z4*|5A0Xak=B.$<YtN2q7g:hb]3N]sbu5k/333{8&E)1aHD-Sv' );
define( 'NONCE_KEY',        '`pRYrm|ihQNr(E%}tVtW;$BK5[ H~nsn9x:aV[n;BIAqw* <;9yPH`Xe4>`0 1dX' );
define( 'AUTH_SALT',        'r3}dT59|`k4xdav.W[5MA71u{f$[c;_-,6_??XbbI@(./Gi[2FkBvt0NOJ|b[-|@' );
define( 'SECURE_AUTH_SALT', '0AFAc-Ly^(Bx7g.8&p:I6GD 5tq[XyW<v|{S30g*Z/)7BiB@asrT^m3j~o&,DPlu' );
define( 'LOGGED_IN_SALT',   '[A@~Nm^ >YtmI8G I0o$3M30LC:va.zr<?|/su2B>7,Pv25fi39ZU;Q;]>s2BTKh' );
define( 'NONCE_SALT',       '>`z_jK3n[i,H<{Cc^-/etjCh/{lzVNB$/c?GLCack4JdZ%>?-%fkw+%ur)biI~6O' );

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
