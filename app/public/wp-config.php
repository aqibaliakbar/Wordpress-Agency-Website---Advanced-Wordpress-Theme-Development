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
define( 'AUTH_KEY',          'I#])U,XkR$#q/Z09Y|CL.M7p*S{P-PdG3$h3c.#/5asQOm;nnAe8EqX53$f,*Xi1' );
define( 'SECURE_AUTH_KEY',   '@d{lFhjKq^%/ITHm&pmX0k;ci!]oVy1TRC-%}d Z:4xueJ>l|(dk-di/4KS?8BP7' );
define( 'LOGGED_IN_KEY',     '-z%2x<sIh8F+V}ZB)3xd+5(e_eD0Wi4zoOKQ|VCGTr9|OGp62$;`|n]AS@%t:V3I' );
define( 'NONCE_KEY',         'wUiL>tcA{MzidDN*lQeH}b$F?S}-1n+Y`s/PQuo.Y{L}Tf)m.?btHzbD,k1$T:Uc' );
define( 'AUTH_SALT',         'epiD&L/yE(D+S>xx;dQi8Dk=DkU-S$9<T,o6n)+?nBjE4Jgxp2Te!eza6n%PsnG:' );
define( 'SECURE_AUTH_SALT',  ']e%Zo)9ouMiLD)c5e8qwHr`T.=KZ9Xq0>.frRs_je-#$ekfo<+l5KCfZ7a ?U0|Z' );
define( 'LOGGED_IN_SALT',    'T/M_yInkTphzlw[?`D7]sf!=g(J&:4}8sxcf}Vlfhojw#;_e+i^TwBo1=BrfVnDe' );
define( 'NONCE_SALT',        'YtY1j+dKpuLK}#|7gdz8(jUL*_pNBQ.Ne.1?-j*[ihtU!-7nB{jjMo6Q?%Y@-5Ol' );
define( 'WP_CACHE_KEY_SALT', 'eoz5jv$~K|4*~M`9F7*hV>SBU1Yrt`@<l^fWb]x~7y=[m(:<CWNn{2/-7vW6`]R|' );


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
