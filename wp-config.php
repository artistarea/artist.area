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
define( 'DB_NAME', 'artistarea_db' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         '30&1]?)7f(b9>wIb%.h1xpi#s2G_-q)5s[|qyfsr]G-/Xr5^ ^;zz~|i7|uTs.Vx' );
define( 'SECURE_AUTH_KEY',  '*k T`E6#t4z:[KDsWJATY&mVR,=QlvX&x3z~yJ}TE+c~=*JV%H4W)m&>TzHNUHMn' );
define( 'LOGGED_IN_KEY',    'aP@pESxb.,7}m.FCL@U$~ojyI[Ky EPghHvBb#eUV53XYs3=%bQ60:3./6c<5]E~' );
define( 'NONCE_KEY',        'J/H0plSV*WhB,{]zjF6uv]o6Pj.HiAWqh$Z$.KS8hC:HTIS_QC}fI{AP|TSywE!]' );
define( 'AUTH_SALT',        '#ZPGe#00(){7{p7pXn?`va/IP{<i[BrFjb=S**!Khabbg:Z.#Ag8h|VxMe.v,H{,' );
define( 'SECURE_AUTH_SALT', '*f$JwP1/E$:([0JdY&z1j.QGxI(5V5 [rpFN~Y4Gz$ow]|Fuyz7=[k!v(4+/%Eh=' );
define( 'LOGGED_IN_SALT',   ';A@p:Qf~n_*hd&;V`&.L*a$hc;x~*YQ94}|)/H(6IR<XB(ynZZM6b{+)J49tkK*j' );
define( 'NONCE_SALT',       ')=gcqz`.qoBGld_pP}}`_@]Yce4<}k@ED}hE48HV]).HEr*QO4;YyjWgj=:q9- b' );

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
