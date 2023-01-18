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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'ecommerce' );

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
define( 'AUTH_KEY',         '(x~ CGWX^y*[uUy3*@$;G 0WgiHi31^Y.;Vo^B2)-;cm#vdf5R_<!wB2] Q]7OD^' );
define( 'SECURE_AUTH_KEY',  'TYl5n>$ }P[ixP+7V/|z_I%T#d6X376={NcuS^+WC2yQ>S,F~0Gj?MXH(|Ei^#WZ' );
define( 'LOGGED_IN_KEY',    '#BB&&}^;oIK6o}L^:Gh,|MuOJILb:0;n/g;_IDV-<pdXymj| EtuLuR3Wi#YL($P' );
define( 'NONCE_KEY',        '%A2rG96m(,,xonTE-)#~w5_M[[ PcWJE#N?is#t,~p[-L+EvkL0G&f9dZ~z^lcrh' );
define( 'AUTH_SALT',        'y25~6{xjIr4%WyHRz%M0?$`C0[(m$zAP`$)~c<yaiJ*}44mF]Zn}~6*gl.g}<$fz' );
define( 'SECURE_AUTH_SALT', 'q{P?}M)r;I}$8z.IDMp,h?=G2NWM+lrh^l}.^3rC)hygWd]);Fv^-P&a,5(t4z,7' );
define( 'LOGGED_IN_SALT',   'EgAdsg([#{3Lu UQxEH33Xe;@EnovC:]0t?T:?ZGP)H pt&AKuS)4gFR0yJ;ODx>' );
define( 'NONCE_SALT',       'ak c78T{LI=2YW5N{+dd%e)/LUdP863<*MCA#rC8=Q(E7PG2E)smeAlQ9_?{fV#^' );

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
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
