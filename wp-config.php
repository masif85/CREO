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
define( 'DB_NAME', 'btegbrdape' );

/** Database username */
define( 'DB_USER', 'btegbrdape' );

/** Database password */
define( 'DB_PASSWORD', '9tfKVw9wgd' );

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
define( 'AUTH_KEY',         'h+b)$ffx39x}<_GGAq-qD&$P]+;e%V:BEJ/Bt0nw*)XP/U!+YdZW)Hm!y>RcC+I~' );
define( 'SECURE_AUTH_KEY',  'NUF!w%:U]d*MGtHdF/c~y$Fkirc/yjrm~e[qrMlw1VEwBOep]GH|F{.(Z!r|q|Kj' );
define( 'LOGGED_IN_KEY',    '@8)YHZLTVeQ4!.bM0l9E10I=E<swd}P$Z.UvUknP^7gbZuAt0C8Msj=r>6az6EYA' );
define( 'NONCE_KEY',        'r8rSP8t+6e=ps0t@Rxz=(gG&5G-fL$1j&}mNyE^<ZH5q?^bqc${ihF=,)L]:=Dlh' );
define( 'AUTH_SALT',        'eEXDa_5l-4 Glh`DK=SPWn>*.d7d2PV0JUxJ2MCmj%#5x*]uWU|YxY:d~V_ g1KR' );
define( 'SECURE_AUTH_SALT', 'm2MZDb*I$a#e~5c}>RZK9C[I<8YH?bZEC8C{7J)Swba+vT|n9rB/cbM.u/i ^Eq(' );
define( 'LOGGED_IN_SALT',   '5Ws2SNO{L3Pn0WmJ1x3&5SN}9tx_bJfDeej0WR]`b9@8cSD[y%1;[iO+kH^pWm0J' );
define( 'NONCE_SALT',       'opu].TY2m.Si-n<rKDRr,)=s:GU:IEZ]@Re@0;o=2$h>+Q7sK73[!K&Pg.<%Rm@r' );

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
