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
define('AUTH_KEY',         'IQH{>on_XHd?z{{?1,Rs=@?QQ$SOut{v]F_*51;OuCkS#]`7uK:a`W9x+,^G}9Hm');
define('SECURE_AUTH_KEY',  '2PZx!DN_&GLp_X9ondP2)$p:Z<+RhaMSy$i+*QRb.[CPS)<l+|z#^KHotY]K {e=');
define('LOGGED_IN_KEY',    '#^W/>=vx^6nBlcPgth&k-g6*3*id%r[ V}d8sZ!X#{Hn@Di2sz?SH[_(|>)ZN<T{');
define('NONCE_KEY',        '~}E,rh#*B0?|ShqbD(fe6SBp!~fSe^tp49.@ 2:uZ<v$+q*x7rfv};W/Rg08=^}P');
define('AUTH_SALT',        'X)W]XhCp-i([4h1[Y^cAC&_s4^~H6s&V0/~HfU]-RgVIN#W3oSAuOT,^CI]45^st');
define('SECURE_AUTH_SALT', '2cYkz;Kp~fU?_`fTSxsM}34]D<]N*%wMhgYJ%IP:D^,{A2T=7X&1#EoW&/?i>cE:');
define('LOGGED_IN_SALT',   'ri(g@XSgmyH:*mZFot0|c<;&J]Dgce=H*0$`_}hl7v(EyqcuMrt3WZDYI*.e:8yy');
define('NONCE_SALT',       'VFQ[ng3v@[q6W8.R8B),A>`,={n5Uf`Qz!xsrac+OAScl+J+L-AWBpLfX%shxF.#');

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
