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
define( 'AUTH_KEY',          'L!NJJ^Ay+)F=[ihV|{F<5nB|^DH*Lu{16Z7JmmR_hbwx&BBQCa&P2{]!b2>fvaqU' );
define( 'SECURE_AUTH_KEY',   'Ab6W]u6]n3QhP+ZR~2J)l?XZWy2Ep{#l^TG|/r`j&&)Lh1Ss1bm6&%&:mZT.sEv0' );
define( 'LOGGED_IN_KEY',     '0GP9)BArY]H4sd.FcSTd0a)ECRc=uLi&]-^{-TmUmoJf1E(7Y~%B@-g=vce|G@=n' );
define( 'NONCE_KEY',         't^az|Twcu;*BZ/BYH59SG10Ynk,LuW9ddE F_+&re$AjeVz.i%qDa*5|+o4zI% P' );
define( 'AUTH_SALT',         'aaTR))~]PdX-,kXtV$2r+m#r$3/41e=R (}^5X]/i=6?3*3Lp9GUXUx|=qU6(r9P' );
define( 'SECURE_AUTH_SALT',  '!.)@tw0vDywI]4A>_7`ZaIs9;}RG!RaAu9#bM|v9D{m{jE=Ob!KfWI]nA@^LjQ%V' );
define( 'LOGGED_IN_SALT',    'ddUTc-)$lzkmjY{.8}?(h%O}8F7&c3`*;]H~IX#-P:{-FYM$?]`F1/}uE^Fp*T6H' );
define( 'NONCE_SALT',        '+=3BFn>wXw8]zJ}xQeF#|o-aB55K ?GVd##f4Ok,V&g5;frrac]z`5yTfRwvWn}j' );
define( 'WP_CACHE_KEY_SALT', 'Cs;71_]E?(>Bg;AU7HgGL}|BqH]iB0,{]0HhTF&X*K[#>;lwHh_by}K*b_w/P)U!' );


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
