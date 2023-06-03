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
define( 'DB_NAME', 'wp' );

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
define( 'AUTH_KEY',         ')x.._L`.Z)-oyB<)2e3I_C83KDsk7/++&Hu0EPe?GB+~@V@JOoy65Po}|G2iZ&w<' );
define( 'SECURE_AUTH_KEY',  '3+2}J$fAZDx)f)3#Jqqy?!aBsUX~,%~In[7/;S6PR#~P?h|7??=,C7d^B&`=BR1p' );
define( 'LOGGED_IN_KEY',    'hcu ar<J,EC?}&vrj?v#C(_!.ydR?!jj@7Xnkt&IF$=y&n>Iv-Bkc2:v]m,rjP3N' );
define( 'NONCE_KEY',        'KGbCLo@GIg<+b~Yhx.__&aP/=Me}b~3o0dyTzs:Ll8fszxO2M2T98Lp46vcMq{;X' );
define( 'AUTH_SALT',        'AR+?Urwp5rd%.^ut}trrg?a$}`/6E4Y|gw]{^%iPQS 1CSu[V}tNrb_;/9H=_J[=' );
define( 'SECURE_AUTH_SALT', 'a8X7IxH#tq?Q|C}Gj#QW#V%lpLQ?Zo`g&T +]_:lbGt{!>Q30~r*Hn=zao}lmGOj' );
define( 'LOGGED_IN_SALT',   'k-Hz$ibsY18$]jV]Hv(@E${< zKBBJEM{.] ek:JvAe E;}u_>mJq={_*P,E@Y9=' );
define( 'NONCE_SALT',       'duB(4ZACmYL(8U27{~w|gTU}6RYC]JKEh I!ai,z#pkpD6_k H4K[i=nl;gJo8qM' );

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
