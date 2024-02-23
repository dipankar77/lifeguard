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
define( 'DB_NAME', 'lifeguardnew' );

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
define( 'AUTH_KEY',         '+216T@vLiL[Ka=71H_2rhbQ?8f,g^u6,~# RK5@M7Mw*Zt`nW^rqruS6e8w4pV`_' );
define( 'SECURE_AUTH_KEY',  ':@s zK[`+.?@V%Zro<d(Uh[1T<*t.l~L(v<LB*&[CNF^XFPvK`KUSXv3jcA}-dk}' );
define( 'LOGGED_IN_KEY',    'c.[d]$LUq}$qZvAj= Hd- QcRjDUH|GwOBg}axXuzR)-j<9W}|YdcbD jg@2[AtA' );
define( 'NONCE_KEY',        '}ur`[NV7e_WFLY;43R+Hm?66[Ot2pnJPBB^oUyv!t?h^:`jJY?LGF][&Gp(N G;]' );
define( 'AUTH_SALT',        'iDJ_0*~x&yi<|QMD`>R^YOm~pv8f+c%*7R.s}uVN8<4S!rF+/$N&hjJR]6Mbi&R$' );
define( 'SECURE_AUTH_SALT', 'v@#5WQ?^{jjHWg9#Yg!$^9n|>RD]*G-:G6~/^]g),{tk}76SFB)~J59$.Nr=BHP1' );
define( 'LOGGED_IN_SALT',   'D*2Mp*H3M[1&8=hW4)WiPK3/2][D$x$%)5a8W`i*S@>``9[v8M!T5)S]$r& %vM)' );
define( 'NONCE_SALT',       '.99C1o|`PD *r&&i>~3[ Oz[u&R+h<UuomcYK->b?vm3zR0!m5z0Vp9BJ56uuscd' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'lg_';

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
