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
define('WP_CACHE', true);

define('DB_NAME', '2377265_wpress85e830e2');

/** MySQL database username */
define('DB_USER', '2377265_wpress85e830e2');

/** MySQL database password */
define('DB_PASSWORD', 'xSaOBJHfAbd5sqhogh04MyGDJA3zsU4u');
files.000webhost.com
/** MySQL hostname */
define('DB_HOST', 'files.000webhost.com');

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
define('AUTH_KEY',         'U-bK}ANS@_WQ{E=QJ49(dGrSv+ {PUsBG@+sc?mnK[<pP;s!Bj1k=tN<ca<T;q$/');
define('SECURE_AUTH_KEY',  'lVClHE394/^0ia3*vk9uE@qDWj[:hFCzG9*<}>VC2V7}CK$*!GoaZ.GqiKIekEpT');
define('LOGGED_IN_KEY',    'i+{lP2PY7b5}R6kGl>47vX#M# 8pS{{iU#dLY0[}&$51~99.BAQx}Y4WrY{ob7.V');
define('NONCE_KEY',        'rfNt_Mphmg~<TtGXo3]bqKld>tTLw+qHMb!|tGxT >gPok*3O4;7 tI=V.okT_a3');
define('AUTH_SALT',        'Nn7Oyz>!^8][m 06l- Yn3lmz>4|RzA/>5v/u/%F_~x6b,cP|py8|CJRF!o;qmdb');
define('SECURE_AUTH_SALT', '{3JuQ.r*?do-G9@-#N~tDQ^s@7k=@kdGo15r=zqDY4:g?j;qt<LFH661wDgo;;D]');
define('LOGGED_IN_SALT',   ' n]_1#_tWmMb_O4iUIGw9y?V#^9eCHq97%(XqC3`sq[{xpe)}JPcRc5By,R(I/3l');
define('NONCE_SALT',       'mlxI?)QigHL{,NXGc=uSu2(!.:w9P!`5O~i;[Gs@n>8ToJ|e^@2@Hc ?!Ezr4W0$');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';
//define('WP_ALLOW_REPAIR', true); wp-admin/maint/repair.php - reparing data base proceed to the link to fix database
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
