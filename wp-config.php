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
define('DB_NAME', 'hog-wp');

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
define('AUTH_KEY',         '.N(EnQi+>OansyrQh%/Q|C/kcUs T;Ft*gnKZ5o}x3dy8C< 8 hIp?n?zBm#I<#?');
define('SECURE_AUTH_KEY',  'e(!e5yVc`z-!@bH0|`Zvm,f6?EYl2bd3Bv.Z!=<Z83;P@bO8ZyA_ENiuNz4}s6|B');
define('LOGGED_IN_KEY',    'L]g*]Q9N7r}e{gf,53G.efR<OHn (_URuu(jOp!649^K1GMFgjM5j?x4{%pI~6*H');
define('NONCE_KEY',        '(t.4,zA7qc6O-yeu>;N661*>ds7_7yed)0t7DuBO<uh,o5lI,fS~QaxQj:UL$pM@');
define('AUTH_SALT',        '31pCu@[0kA+%Ew=q5m4[Zoiddd3QJrCz$jUk+43U:y<+0!-|}Ar^ %C~,4#T0O0w');
define('SECURE_AUTH_SALT', '+c-k7NBNkW=baRz[Z5MKqgJEOUC?P<HuaT3V2NjuhbWyG`HfJj4=;S+1s,0_KUk&');
define('LOGGED_IN_SALT',   'cT9bh5C5?ag9y8)lak4+YMz1Wm!_a+bAz9}fGj}l%(jXR0OZKC(7KN8>0mxww3Vd');
define('NONCE_SALT',       't)?q]Pk9SlZ?-WQX7:t $Ho.U*yr#LzVeL8)iG=40|mP7FJv7ViJ0m/|~3Ot<>MM');

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
