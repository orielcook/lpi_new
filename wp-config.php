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
define('DB_NAME', 'lpi');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         'd>ho5Ukj!fcl>9e]dU=}ZJBCoTtk*Hk7Ak$<fZTAI0.LMU6nH6Q t)Stx}`-|}bY');
define('SECURE_AUTH_KEY',  'h2>:BD6NeCpju(s3q=6cb]*?xak+v-gLzv<Ul3YyovnOM@,J@>S_p;,_2f`Hq%hH');
define('LOGGED_IN_KEY',    'rICt*! iE7-i3iteSnZzhveSf/Z&Z16xHD]E%K3IxfmI^ gAoIW3*9Q?3X<`U|i@');
define('NONCE_KEY',        '/TRF;9X3^N~={$nS4QlKqtL(#%=KO!^U.>A-LPQBeR~CMJgLT^]!S:i*p(texOg{');
define('AUTH_SALT',        '!DI|so|)=9tu#t)>%jlAw^6P*^{axo Ik=/sCVn&2SY~w]1!j~ i!F_akf_VtvHu');
define('SECURE_AUTH_SALT', '&,C<#u1`-j[SfuT/cmJVU2,sMdnE;Tc)?JF_AB)gQ*s2.hFIRPNmwLQu:Q7UBvf9');
define('LOGGED_IN_SALT',   'sCIv3],N.Gkmh>+QTOF*#$2r@kZ`{3iM0sV8]KNs#~lK:hWbp/$vWoAz,e~Ue33*');
define('NONCE_SALT',       '!*>}*U#U_Ic29+s5b?dSjd|n* j@|F!_|DA~;L`Aj4#8 k_dZG)H_;t),p:H$[g:');

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
