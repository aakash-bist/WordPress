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
define('DB_NAME', 'wordpress');

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
define('AUTH_KEY',         'z_K~he*/8[no_j9 U{E@O([VCCAvc<W,z#Tcc%yX/(.Gc+NPK z2TyKS.1;,p]t ');
define('SECURE_AUTH_KEY',  ' G@84`vny1eo^OIc[@,9$a!%GY8x~U6%b4 Ap/);-{z~}}C3e&8;N36gb|Pd`1rW');
define('LOGGED_IN_KEY',    'a].mh4o~ixD2wz2-4moo,|n#x+{c7iP#~,mHC{Cqr^~Ym2CY!Py]3ZYWrOsB.$Yo');
define('NONCE_KEY',        '8qNTC)rkWk+6H+-IN`>QM{tLCB<ZKHc6>9!i?OP3]@Xx2|8)Sze;eJAbYoE^&`X0');
define('AUTH_SALT',        '^.5N&GHWMD%-/A~NZB68]9+*ojWhkZE!PGW<it4%uP/i_cO]{JT?5Zv Q!gk*U=L');
define('SECURE_AUTH_SALT', 'Q6B<8j_ichl;zTE-R+0N#h`rU~y, 1SurYSxbn@A2-?`MOSWKx#KU-er<k<FH?`~');
define('LOGGED_IN_SALT',   ',],{K&F_SGK2$(4)1Z2O]5Re**>#zt`U@V4#$&`5|Wj`e)=ncL*ko&/K1++&W8}/');
define('NONCE_SALT',       '7,:Apzn|&u#sPOT`tNjF.I+|r%z3e0Ojq<]H+:ffbE?(|*J;FW4xi!.q}TMbQ+[Z');

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
