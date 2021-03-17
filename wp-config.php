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
define( 'DB_NAME', 'kacey-portfolio' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'wKL)jV`[Oc{VHC)_T(CZBs7pa/kvmy]1?hg7fxrM*J;,K*xkrLQ7aD;Ps8d)djJs' );
define( 'SECURE_AUTH_KEY',  'Z2rde}4F3rmd9jj.ZqHm{>K9@ P*lug0?}FC*%r.D+WD_t54&7x7?7mH08w?]OPn' );
define( 'LOGGED_IN_KEY',    ' sGi&VzS<|MJ#qk IS*-b(hwm6G@UY:*dFtp46=Jz(soII+<LJAW ;^({z!M& 4W' );
define( 'NONCE_KEY',        'wtrdnKlB@p8=sV===S}R}UxBO-D/{x:n`3%{N_F>Qsk%Cp#uo[f&o[/D&WorgZ|s' );
define( 'AUTH_SALT',        '[r-5ycQgg3[lOE4/2kBlf>jBEG9NX|o?eJL1](_tL#LUkfIXm/jRl~iAY^)^f<P4' );
define( 'SECURE_AUTH_SALT', 'cdV}xiR&XRzgzEI7u}F[`VI6tW$g 8mIt:e/:$(Nd;(gv,YBNwh U}?DU(xa/g#w' );
define( 'LOGGED_IN_SALT',   '{;>q.<kSa`@-FxJm;o^qI]<^6y|%4 YX-J*,+/%?&z(/@MoqcLLCnrAs`KQ8#0MN' );
define( 'NONCE_SALT',       'Y0KfRos~FwoB.y~xKdhYd,5n*M/?+9uSN{~}S^rF!Cfrodo-{qul[*SD[$ajAEOL' );

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
