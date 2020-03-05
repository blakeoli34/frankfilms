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
define( 'DB_NAME', 'ff' );

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
define( 'AUTH_KEY',         'k[^aBasa{Al_(X*oSZ<sXCji_r,w]qjXrS0-b- Y>zF25DQdz!(.4rkU @Iii9Z[' );
define( 'SECURE_AUTH_KEY',  '} 3W=Be?GfUu*?8R,h.;j1jaLi*Wgfs&7C~[fd4,o8=~D7GI2UkKbFYne3lkQJ?k' );
define( 'LOGGED_IN_KEY',    'J.5D0LHH_3xQLf!%(x,P:L~gVQ Y9-YF!xJES*.A2)D*a9z*!-a06lkvO5;& (V[' );
define( 'NONCE_KEY',        'AU3.qSb2H;20kcSDrHrA9i*gY<tE|VcJwM?.QV{O?+}~`rUFg&}<*_`#Si(TJ{y.' );
define( 'AUTH_SALT',        'IE6rsFHq6Urk$Xd3rrhb%T-e9f*f5Q747j;eU2^s^/,1s95#yiYX|Ly|ZXF.0]wa' );
define( 'SECURE_AUTH_SALT', '39p8_S}*xV}`%2Vda5bw t{;jl8$sPY$ N*S+=9^B-p-Ko/oW|6|En0LfBUuv#l^' );
define( 'LOGGED_IN_SALT',   '}dfN X;&PW1VQFe}z-.^PQ2EbJn1s;fXQ9D??D4Jv!oYh[Q-BS<DS#<$2,+hUJ&a' );
define( 'NONCE_SALT',       ';WMnJ{ nF97230>8|,uQZWScbj ^7ohP!!S/=Is*5l&0hcFuZaE_PO-.=aF<:yx9' );

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
