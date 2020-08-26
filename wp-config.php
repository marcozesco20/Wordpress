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
define( 'DB_NAME', 'technerds' );

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
define( 'AUTH_KEY',         'rRBs?LV1fW3)C X,nis:%XX[P,^Q(tpphp3g`1)I7`SZ]q?x?;x@oU?@*1)iX-OR' );
define( 'SECURE_AUTH_KEY',  'K:>hi.bH02#R`bxe|Z97U|25*x;J($d m7V0<e_q4]a>+~}< P+B,d3;(Q^uq<Uh' );
define( 'LOGGED_IN_KEY',    'a3F&mF_}7IM29I?W[GV5J^v.xHU8k^i2v<@NY90P=O#^E44 eEl1Eh.vGFyQX_){' );
define( 'NONCE_KEY',        '&7!I8{HtdU=_.?zG~gr:*+/W~[Gk,/1s~R>@76[]7IH2&0]!%cqG3qhf<R,mb_#G' );
define( 'AUTH_SALT',        '=RP9Gz.+B[gXUL+6+JOl?D97{8oJ3 ,?l|oY`9u9trf/SP+hSgsj#>i>ksP@uLHm' );
define( 'SECURE_AUTH_SALT', '1~=i/:`+8-4 a5xjh!LYAdD`pn=u~W2AU2(N$Ek~#}.4>~y{Clqk`$5a)j=DGx5$' );
define( 'LOGGED_IN_SALT',   '5F7l$}DA~T}Webu8](8cWNf(Qqs$@8* *1j<X3my)ZPYcHM&XF)v]ipOhw/wa5VR' );
define( 'NONCE_SALT',       'Z$TcStUn#SKh_/o75(f@Qf4E_yJ!cUV6< [5ksiIEms,^H#<SV!+@2M_Zi)_nE([' );

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
