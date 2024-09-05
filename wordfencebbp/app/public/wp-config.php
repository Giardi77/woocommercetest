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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',          'niwoC<mw`Gt}Oz[QFq$cN|3xU+~L496X:s#dgm_vb$+<if:EUS8rJC6{MY3!Blgw' );
define( 'SECURE_AUTH_KEY',   'N Cm3t,G0YX8wZ@ R=M^t^~nqD$u0Op3.|Z{AvLYi.7yyJ.zBXS9cn6r7,N$ovQs' );
define( 'LOGGED_IN_KEY',     ':xOW%uqAw_kv!2yYNg*q* 3%K1lmA?I2K8dP~mF0I=r)e!0CWo~.YevN[L`7+1B?' );
define( 'NONCE_KEY',         'L6T@(ag%5uq*m%,(g[~d7DSM$90e )GE^Up^?q7_7b=(nNq-7nzEY3Zo;ofeM1nd' );
define( 'AUTH_SALT',         'L!:NQAZbY^v3z|E`4qUgOGAr4PFnL:ywbP@<I0]x8MfzHt)a.Gm58VK]X>(Y21|a' );
define( 'SECURE_AUTH_SALT',  'xSGCQHVs7:D);^47yUMxI+w#4H`xFE+@h;o*GuKYWp&CB<?ZgrNuUj6Ry:?c hn<' );
define( 'LOGGED_IN_SALT',    '%jd_Tc7E4[DI@:3dKrn)6?*,}*j77i[@w(&<MX{5}#U~gY&hGu?20*Kxcw}yEaj(' );
define( 'NONCE_SALT',        'p8 UFh|>S,Fh{?iSGx6HF#*HLq+^waTZXUs{Fc*iT/GQq1i1~/v&jptsyX!UI7v(' );
define( 'WP_CACHE_KEY_SALT', 'cg6#pOR26&|{v6U/[g4=E^Ju?P/kbQc~u_$}8)}9lQby@&FVdw`|C%,MWXcouXz$' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
