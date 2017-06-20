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
define('DB_NAME', 'Tema1WP');

/** MySQL database username */
define('DB_USER', 'admin');

/** MySQL database password */
define('DB_PASSWORD', 'admin');

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
define('AUTH_KEY',         '![fGbG[Lw?@Z5tHsa=zKv?qsu}nG~pTVx&}x*uox5U-^&kMi[K&q6>y%$k^[w^nw');
define('SECURE_AUTH_KEY',  'q8cpLR|(/sv$N#^T(ppI>yC)R}A(A=qhI8hn=4JJiIPF]zijfb xW`oQj5eh]uDq');
define('LOGGED_IN_KEY',    '6lvhc+w>GC/q7T/)rV!|Kb{yvMNP*IalzVK]})Z[KR%P5Z14gi..E}xD4+XT.9xb');
define('NONCE_KEY',        'FMgsw&Q~p8cgH^^&#WOLcX;eP6D1iD@~:rTW=5dBg6BT&YQmULPl_cLpbK`9h97o');
define('AUTH_SALT',        'd&we]ms2Kj*zbky)P]&lt28$eVovXWnHDqBjqD;mDtyc!xkqTxfao4~,KQY/?Y*5');
define('SECURE_AUTH_SALT', 'h*w|>7@{{3ApX:?d68eLr2s`Bk68c| h(47a!;%U!kb.[)#:_iw[8egWg6~|T-nC');
define('LOGGED_IN_SALT',   '&!:l<sO=G8I<:Iccu[K*D0~_a`|8ePo:{;mGs&+$%hfy_9F,7}(U:XT%Lsfr[KFh');
define('NONCE_SALT',       'XlGEjp@mqcHa{2I6_nKBgc@ZjngdQVW1<_.bbDK6_Jiu=p~n)A*fxV*1=u({lf}}');

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
