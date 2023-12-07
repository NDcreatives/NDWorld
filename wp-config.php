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
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'ndworld_db' );

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
define( 'AUTH_KEY',         '`eN)Yt$s7L#deFm0yf!(kAa81LiAN)9iVw)=ay8]Jxn_FEWWecrX$j#Nu.?@nV-S' );
define( 'SECURE_AUTH_KEY',  '#}@I5r@HOoEaj`%7CT~CR<Sa;c$t{2C=.33ppn?$*&[g~:w=4zLhmMK+4L63+!Qo' );
define( 'LOGGED_IN_KEY',    'pq5LNNrk [4W] a[S,Vde7ud1Rs0W5*HrQuSI)xWmFE&Nc!$,0 ZZ^u<u|j:5,ze' );
define( 'NONCE_KEY',        ')Mlzakna-y~3NA }x#-d4):OrV]3l|5A*,LhC|hou(_NP!#egQ]Q=BQ(r>35&/ Y' );
define( 'AUTH_SALT',        'Ph_2~3(vkz<xK6uob>Y!30:.J1r}gR}t.I7o@u(^:(ghh)0jd^5]&tc5jj*;RTyD' );
define( 'SECURE_AUTH_SALT', 'PCwz-{gE6P^Q!gF^Q;)GTp:LrrCVfJz*)Z<gz+d[Lo*_@^Q/=OlVg`|(?[>:j9vP' );
define( 'LOGGED_IN_SALT',   'gScOl.}>vE-u*6`_6#tOOSX`%bfylQBC/e1#OfSyu%~LofN2Z[Lk!UBUS_}KrB (' );
define( 'NONCE_SALT',       '2[)Z>s:0Qi`0IX+yI=P0Y]7(:y_aig}@/&P_>,Zg~OplH`sXtMY1MAv~Px]2cyXV' );

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
