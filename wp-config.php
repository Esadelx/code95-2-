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
define('DB_NAME', 'code95');

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
define('AUTH_KEY',         'NlM08S>R4zo4]m@vz,GVcc^6&N-7+{ A`6 *~ 0=GC-rN<PCaF,] Mj3dXTkY_x8');
define('SECURE_AUTH_KEY',  'Xk*lR4-C*Cu47JEj[|nE18eO5lyEQv0~Hm}&57&[4jn=l)S Ss!]nV;x5zZo<oI.');
define('LOGGED_IN_KEY',    'ar~e2e`;1(6VINC3Go$sMu/)HP1db3=J -WvU:0i1(.iFW:*4=1-6EGg^ s~y8_5');
define('NONCE_KEY',        '6hhbXo/2!YMPlAe#sIZ|x0n-9tRJ7SH/F[N#Dl{35ez.>d2;IV+3MyaX=9&RCaN`');
define('AUTH_SALT',        'ZxI7tB0LOuStTx-Du@2$PjU =kJ%C,Oi^NBx _,H]zPQuEA?7V,YCCMN8IQo>O >');
define('SECURE_AUTH_SALT', 'yN=L/,J{i3F~)R[JPeYO`(M[&Q5rPP:Aq-pE<XG(Vu@/sagVmPF`juaM pww`C03');
define('LOGGED_IN_SALT',   'BHm^fBP ,7PxtRp46yX>O@W-a%?NdfoA!pu%5HMVgf4J)s1Eb3imcytej:|*1X0=');
define('NONCE_SALT',       '/{]o9ug?v4RZtfydX`/2rm`%}cA&~m:,W%tS7uGPCNrI?#kwWK9&Wj(L6)+>7tH=');

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
