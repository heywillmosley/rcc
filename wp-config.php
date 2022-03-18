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
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'wordpress' );

/** MySQL database password */
define( 'DB_PASSWORD', '8d57cd7115ef9dac7ed02624f2dc1ef2c593496e1a3a7856' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         '*?+@&w^F{MLed=#Vw:&z+P4E7ZX4! bUB`)ucBR&2RKSf2Sp2mu2&9I-0=_XlIx_' );
define( 'SECURE_AUTH_KEY',  'yY]1B$=WCi<q.1BfkTb Px~5((G@{=<Vm=r}D&qWFeFWIw1]2gvKS%lS&Tiul{b%' );
define( 'LOGGED_IN_KEY',    '+vyx*ZeN85MC(YAub%S26`Z7+Sb&.|d16?xK!}$&vc<CI__{))>P$qTdd`t,O]n^' );
define( 'NONCE_KEY',        'I1ff&Q<pBQug[A6tS)_vl8{6D@fi~^Y$fjjKQzr}6qPr/,=^#Td{.Dw/`dYisC*A' );
define( 'AUTH_SALT',        '#Yv Z2(2Nhf <Pd/Cs58DGU{J,x(h8}|mb,5CD,h=o6|)WzZOB3TzD [Kn~$X6k!' );
define( 'SECURE_AUTH_SALT', 'n(%`l*i*:A!0.lQ1~UBx^m6-CPa$w}yqfg7yu[y2z4!%A4zC|fVluDkf|4YXh.Q{' );
define( 'LOGGED_IN_SALT',   'ggk7v`1uoZy>}usDIDf8[mL]}6-58#63<iL6=,~mz4M][_IKvo[Aw2#*o ~GqvgS' );
define( 'NONCE_SALT',       '7k!_+33j[E^=2n9gtIaux^*f`W?05F]%`tB][nS!x*VI>^R+Jew&V9fgHL=Cl)$p' );

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
