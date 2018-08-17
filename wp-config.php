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
define('DB_NAME', 'wpku');

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
define('AUTH_KEY',         '!9:o #8n/^gK5sn`F.4`bU*u+UA1G(go68j=>9jpYR_T[N5L?AdGhtROGo5re;2a');
define('SECURE_AUTH_KEY',  'UG,]Hr(AsM(LQK*ioVJan5a/TOb]sEclL`n8^IW@sKQq^P^U%pDF/D{Ysc{de7ez');
define('LOGGED_IN_KEY',    '!#@9@>j3S,!W``cl.I2?C=?o&]M@2IDB>mS rbCJOUaE242&0}nOAn1]&fb.or/t');
define('NONCE_KEY',        '!f#wU=Sz&[jj3vUE4Ro}`kSRrc#3$o;XJ1w^g]jbA+v5V7Yk$mZN3~XvPHP1wrse');
define('AUTH_SALT',        ':B+(rvbOQ| ->,Xe#ozuU~1ty^8 AlbuzB`Ngztvq*]xm$tg|c-?7E[+;*#z;V7(');
define('SECURE_AUTH_SALT', '8}zbGB#ZzkcCvRd?d(zV3PAIuLU@QkmR4FklE<Z*/#Q0aKU%HTc#D{!#~e%odudc');
define('LOGGED_IN_SALT',   't,%+[Ae,T+BlCT9]9Ti[X.H07;B[o:jz/h  5-gt-)&rpb*{E|Lxv^]=gnZA6XeU');
define('NONCE_SALT',       ',&8d*s!-lzBEB:h(_m>=rhV#2dlEF#8J} DgfLK)vvEMZX=jD;(T17[}r~ubqoR*');

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
