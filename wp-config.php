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
define( 'AUTH_KEY',         'C)bsw*`Bg>w}I[1 ?9>>[ae~wGY`|XmDWF&xhj^-o2hMzH%}*DLnG.++h26yQji,' );
define( 'SECURE_AUTH_KEY',  'znK)z<NO-m^SYu>yrfErhZ>^#uZ-k,GR}@;<S+o|n5/4%>Vt!Bf+QckOMA1K==mU' );
define( 'LOGGED_IN_KEY',    '!7z@O,q~KmEbd(EfYZH24^+jZWMAqbP7c7hrnM>,`/Xm&..AAmk^[p 0i%=+!/d*' );
define( 'NONCE_KEY',        'g6RVsAOja-`;<cr:-Sw8$$$--/`i1BO(bc*0ltXNF)A>G=pgMDRqkC9B{Oc0e$EX' );
define( 'AUTH_SALT',        'T*s-?|O.DVfHzB#Qnr^=?WhhdbBWE~qoaXPI#xyj]fc3lg(vzOMCo0o=WGKj31E5' );
define( 'SECURE_AUTH_SALT', 'Ta[U{R,>,Jj.4D!x*vDzmd#P{gSt{f}^<+PpLay*)X]pKOaz_5X6[KX7ONGH!vfT' );
define( 'LOGGED_IN_SALT',   '?E^I|B=tf:Dvxm66I4wT:/idUBc}6jXO:Nz1nY+f;/^HDbJOQ]iFrDa5E6oOEG26' );
define( 'NONCE_SALT',       'QBk_?Rww;AmSZ-@VG43Her3V%bCYZ7*KcctV*P1<:eJ?~7T8+lBXmEoGFC,!NzM_' );

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
