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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         'o.>qh2?q2A.#(<9`sQ{|U_ja!:LWU)aW:oL.rW,c4q[)Z!X @^RQ/8x3IGM!}3x:' );
define( 'SECURE_AUTH_KEY',  'C.gCc(v6#?vX_danS6^=KI,(A%c:rO`XOps3)(n?R5e=^Lv~.fqA<5u5X5;Z{gDH' );
define( 'LOGGED_IN_KEY',    'uy[}&u {yJW6>[eLw*RG;Q_NEu09tQdja5Af=6(Ba$tSDw,?.cU_@I-T0Qe+W)~R' );
define( 'NONCE_KEY',        'Y<DAy*?ROW>Usx4<41T?e0mb%1;g!p2g>/1hH|GM6nG5dUf<A(<4J?@Bi~D}>U_M' );
define( 'AUTH_SALT',        '[J+!4)+BD:e!9o@W9(?tli1|>emQX;FoJwS.d|nv}6|c,!<%8HF3^l$<Mz9qJEKw' );
define( 'SECURE_AUTH_SALT', '9-~vp~JHQFG%8}[if;ZLvei~tRTknaZ[;&vTn0 X<~c|Ormr0|^2>yRl;8(sQqAK' );
define( 'LOGGED_IN_SALT',   'yec~h73qcMT}$IXy:4o>x70GPL^4KVur)|W1PdEzf^Zl~m/1|7XLNr0{HDix~744' );
define( 'NONCE_SALT',       'd@}PjXSFUV]@DhY9q+7AqQ;j>#dddFf>tB}~<[iK4_1FM_>TtWI96Cn|`OW~;p8;' );

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */

@ini_set( 'upload_max_filesize' , '128M' );
@ini_set( 'post_max_size', '128M');
@ini_set( 'memory_limit', '512M' );
@ini_set( 'max_execution_time', '300' );
@ini_set( 'max_input_time', '300' );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
