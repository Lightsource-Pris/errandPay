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
define( 'DB_NAME', 'mybulksmsgh' );

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
define( 'AUTH_KEY',         'p,?:R??9#Tu9@pt*Vt~y>4=yAM@GK,uc1-we%Aa<Sa0i/1]d,%!GApD#5pA 5b>G' );
define( 'SECURE_AUTH_KEY',  'IHd/K%b~d)hx~rM1>Ke*aUrWfoer[LBM~j!%CgzXp0ZLnWe&::.1y&cg!e@yrGbG' );
define( 'LOGGED_IN_KEY',    'U!%0cTcikP&I#UlKe4N,l:)[qUeM>+Mi9{~,1hS.x/Z%yna8.wF986IKAy y:h[R' );
define( 'NONCE_KEY',        'B3@%{n`mk{9^2+$Zyyc2}3$uXKmMrMp^yi;@<?Jvr0M@+-;.}a@BNEu6U=w<2|%:' );
define( 'AUTH_SALT',        'B%J+f@6X|+?5*{&L,Fda,>M69LT2,}OkaE:dfJ370%PA[b:K?EjgtG{Q)KB1,3bu' );
define( 'SECURE_AUTH_SALT', '<:.}[pWRcXf-,3eL0G;d_~I=ymA)d?u]L|m,sP%)oToK#>3afV#]A*~h!P=A0<wF' );
define( 'LOGGED_IN_SALT',   'VT/*wd8CX_s7SsLIg|UXj?<o%4g|vdm-R<qVtOyall*|Xu2x!p$v<i-e>QK`tri>' );
define( 'NONCE_SALT',       'n7tvk0p?<[Wom~[bbt)(-lP~@8!%tb#)!kO#LgpDE+Uw-xRz^)-[@sP!.F@MRg%8' );

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
