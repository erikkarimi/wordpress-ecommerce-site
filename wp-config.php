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
define('DB_NAME', 'aida');

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
define('AUTH_KEY',         'SyM]].zDvZqWjHxiOJih6N$d8;WY-tt),Z$H6Q1A/WZYiDhcE!Im A@R>;VAhfu;');
define('SECURE_AUTH_KEY',  '^u+yLR>3tEf{&BKw,PMC5c:4xuQeC}Wv,N^2NK0G+fEn`/A4rg-B#ZimQ^()`CF7');
define('LOGGED_IN_KEY',    'yfsKLeDmhXKZA6NFXzz/KZ>D^!BQ|]cn1.egAFi4o|.W%*U*zV)P+;7pZ8#vOwjX');
define('NONCE_KEY',        'L2k{rJCBj6L_XTc2xiPIIfVbe<3pA_r=H_]oe%BOOV8qqnpuUkA[~i{~p)~^;aSh');
define('AUTH_SALT',        '[r2fU<!(L;ieo/_H.8T%^r*7cChMr+JG<yA9(KBcC*(QA?uI0(vAppSdBhVSiN0B');
define('SECURE_AUTH_SALT', 'tK{ol8l2*+WPtD+{OLjwhR!mI6(t3fL4s_*i7$H(-9t/`Yo=7PICB$DATCC~;YQ%');
define('LOGGED_IN_SALT',   'Bk}nCoa> [0|Az3A~o}B{Iygh2HP2jH}9A~h^hj^b8CP#Z5y`a&W6x/s5{3(6Y8R');
define('NONCE_SALT',       '`[$rmjZ%n(9`yPd~ wn=.tvw0GPDQ#=bU*}78g=Y*ukf7v}XcJxk2l]Q[YV?SQD6');

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
