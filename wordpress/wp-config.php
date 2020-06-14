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
define( 'DB_NAME', 'test' );

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
define( 'AUTH_KEY',         'J(O;;8KV r*3aWhD`FLzG(&+M.xHic#>iEMaU@Q%iWg;4]*=!g!ckrAqRJ1/:mOj' );
define( 'SECURE_AUTH_KEY',  'v:Ez>D[qTcU.y=zf^T*}{awh_s=]OTqtm?x>-xI71-YtM9f,c,^<-C{&@}^sd:BT' );
define( 'LOGGED_IN_KEY',    'kP|z1DGHODk+DrR8#djMnbL{Vv|Q+}a/e>q%XmV)(,OU-jnMOs[*G 9ip;5g9.gE' );
define( 'NONCE_KEY',        '/oTTU7g-5@@SaL_/SRc2sNArhD8%@*+iFRbpWtgh,1jqNpCus:U(p8D1.[|<)$Yv' );
define( 'AUTH_SALT',        '&554:8wi))8Uh${8h9t|30egcpQvTu6yv8OiDtJvFY,wW:J6rNugX6aX`/~3> >$' );
define( 'SECURE_AUTH_SALT', 'SR{rgH?*R}m~:8??FR$AToj}6E|jBs|7=ikPDdvcP$0;4vO`J<~=nst?F&@-AiY@' );
define( 'LOGGED_IN_SALT',   '; )P2xJi{X[-t=4O/V@?~<JsyslpLUIDrsjw+O~+9(@%Q0my$J{5jJ|%uL_69/b1' );
define( 'NONCE_SALT',       'Z%wfH6o[`r;~/Qr._3Uw}=SPKz~`|jm pC^B/auhYPK)bJ<H5-GwD<8!RhvE>Lr<' );

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
