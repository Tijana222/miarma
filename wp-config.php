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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'tijanaet');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '_QNDVek/M4-{ij|wapuJ[qA5Hgkt~H}o}D(b63P^Rdf$Jxhs(gqc4=mirq9TSD/c');
define('SECURE_AUTH_KEY',  'i|L9~+vAT$gB:YU?.UM#9xBB&Q;F8V@+4~VBB=7 >wbAhK8fQ=ATp8R:+?::&HB^');
define('LOGGED_IN_KEY',    '{qGiLVKqxx@cOJ:=v8=`aD)ZlSiVb-:pXDeL ]jsL$HwsdfDECVxqp?bL+E{t3z;');
define('NONCE_KEY',        'CE-TO.KrX Xi<o!~V1D2C|uudAy92]5BI);;65bN&kaMoSW*sz;.i;[zKZ!3Z5#X');
define('AUTH_SALT',        'c]_(oEgcEyVhD9(R-YED[wxbv%W|)994;ue /~?@,/eH2oxuX,t<=44nMBY0]#N#');
define('SECURE_AUTH_SALT', '!7{dU@lCww|p? P-ptba=>y1`4y<txrLZw=+[%X>wD7&]EgDgr@~EO(^HsNr<xdZ');
define('LOGGED_IN_SALT',   'ShpgwyWuFho1v1}Iq}p<9R*o &,LJg5DiXX]FD-L8 9CRu(R^^lOY+>gL58P~[Sq');
define('NONCE_SALT',       '[7?PkzSpH]?;2htf68aOomr<q2__31v|Y(/u]Xl~:vApG:u@AX:%qK:8Qm-76:aZ');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
