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
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', getenv('DB_NAME'));

/** Database username */
define( 'DB_USER', getenv('DB_USER'));

/** Database password */
define( 'DB_PASSWORD', getenv('DB_PASSWORD') );

/** Database hostname */
define( 'DB_HOST', getenv('DB_HOST') );

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
define( 'AUTH_KEY',         'b&EN[@Fi9oSGI&eoF7xLx4+}KUPBQH*>Z5/,IBI?P4<,qVOG%1@#M5S/C;f(!Kgl' );
define( 'SECURE_AUTH_KEY',  'H5)ahR`MkqB:4*,XC.^QEB.P_@c^0O6UQG)@(+tGa*k)q:rF9XN4bmXVgw^|6+h]' );
define( 'LOGGED_IN_KEY',    '_*;u:7D6^yFl%.,n!bBl)5cN7e)5}LJahi8[/ :Q>S:1%eLQn`WOTjIF?6J.6HOW' );
define( 'NONCE_KEY',        '0Smxxkszd1gVEt@*hC9LK A^S?N)Yhzreb.Prq@[Up*611|:^*m~{.R?P(b{db #' );
define( 'AUTH_SALT',        'N%~faYH;0aE55E[qEs X9HE5b BXq%=^-c-TmcK_;[p6c+Ds#[1NV&FKYH9_M e?' );
define( 'SECURE_AUTH_SALT', '_p6:!ix~FcQt-Lrrn:)&(6!eO,Y2B5@nNLo/dM`%!6$$Y pGpvz[W#6z:Pu^5pa)' );
define( 'LOGGED_IN_SALT',   '%SJo36`bFYO[mQ,Wsbnvox.~OA)%5tY?y.P4pQ VlpM*.9m-q6G`_61oan(G-(DY' );
define( 'NONCE_SALT',       'l6yRy&PJQe6M] #..@a9}W$mEC,{-M~~UPYFaRepU$!e*9Q[D0l$$NQZS~pB: {v' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
