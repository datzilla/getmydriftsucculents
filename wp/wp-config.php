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
define('DB_NAME', 'getmygfi_getmydriftsucculents');

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
define('AUTH_KEY',         'o:E)eh~r6lSdHY+N/Z=_{`yGvU_@S>lGFZ;vG;kBC&<q3:e^BH%LMS_|SK;Umc/Q');
define('SECURE_AUTH_KEY',  '77y+id1&FRNWdYf8pd/T)@ py4WO)DKhYJgh~BP*5g&$+*EA.S-p^$wgfy.Gws!W');
define('LOGGED_IN_KEY',    'P@k)#)&ByGKAr=9XAwWaDQa#^6K&L!B+~ak*fLUtwNm7}|kpgvUk<WA$s806BpFZ');
define('NONCE_KEY',        'l$Ek=,0iz)#Pg%phY3tM6O{;6^9k<lsa:*AK.=u_SF~+lEOA`_f2pPj8gKgAfnm9');
define('AUTH_SALT',        'u0 JBhI+ n0V?fzb<G1kX`}DvLgf&s&xl-zs*Z-8&7tbI{h]?X@|~1;j`w!tnqNz');
define('SECURE_AUTH_SALT', '#k,}Z(r!vUhj!}aMO=JV!G8*E3bJa.E[@?UUur4mLN+j<[G(vcr pbAJ=mZIigiU');
define('LOGGED_IN_SALT',   '?5C:^O^~ivirL@Oq9QqWo. =O4!JN^mSQ<Eoh!Bqa-d{%iKlY/TxM{P1 /Y{sOi7');
define('NONCE_SALT',       '4)5L?r>ykF,8JGa_SsV}kJI&uRl2H.;C78!np8EU)>Cx^i=PYi6:x^DV:z,vwqa-');

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
