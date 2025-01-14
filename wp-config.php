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
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'ssourcin_3ssldb' );

/** Database username */
define( 'DB_USER', 'ssourcin_3ssldbusr' );

/** Database password */
define( 'DB_PASSWORD', ',}=V]5mbPq+R' );

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
define( 'AUTH_KEY',         '0u;I@rFLIb@G7c`wJXQ~}`_cO1V__)KK-WHlc`Oeid$Z3vHX?`P(VO4wq`p!]IR|' );
define( 'SECURE_AUTH_KEY',  '?2MAT`KN[Lh5$XZlrHQ@2t]J miJ%R{i5W6`GRI}zHiOjQ}zOM4kXm@LxYH58.7]' );
define( 'LOGGED_IN_KEY',    'd[E[K`KMq]qgx|)Rj9h%ZRXgT^Dyj] +W W%A{P893#,Yz^RE=Njfb^SXT/-%vV8' );
define( 'NONCE_KEY',        '$^Lw#Md8#e~GU9#E,E0teL#,/A=K3]e_5+XrSGCAskM%vQRMr#|X~51hTE-wibO@' );
define( 'AUTH_SALT',        'Z/daB@|f651=8|fssn9u+TI]vVi,6_hNxs8?%mAbmDkQDRd*c9=^pza.Y6.:HmmT' );
define( 'SECURE_AUTH_SALT', '=fob&QN`7>X-yag|n-o$qpj6)>2KqK>^2e[8yF;mO#iX_jV57:I1XoQPU:&F33w4' );
define( 'LOGGED_IN_SALT',   'eyW 5{b![LXe=YdU8+)X,6eRs44N/M[TpN.,_]P^m.kw6fN>CcoP|*yEt5SW>}d/' );
define( 'NONCE_SALT',       'm3Y8Eim^r!ctvs1YQ`PMJtp[F;s2^s=&b&n+<YK|]s$1yvWE%xG~*sTSC?1mF:O ' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = '3ssl_';

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
