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
define('DB_NAME', 'site');

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
define('AUTH_KEY',         'U|Gg(`- 70U|vv&8t7^w=*_[$w6nFCTD4%J4q/mD!S;n(XL-zes`Q <7Hih%:?0M');
define('SECURE_AUTH_KEY',  'wU1tT7|K(F$2{G~|64Y5T)^X|:uUZ;]un/Cw;#4iF~c`Pj ~ie%ee?5kep}#l!89');
define('LOGGED_IN_KEY',    'FC7 XOr8qA,;EAG*P_sC3_6E4>#T*DQs1L=(E9lEj}]2:8PD2[[Zgij^F$$J#CE5');
define('NONCE_KEY',        ';C}booYG}lF]&+To#tKj?7UW2EE91-,GFX(S{#AEJeOBm}]e%6uyuI *Y1cJyz:8');
define('AUTH_SALT',        'g)EgI-i4XedUOFS9X`*&NBmw75IbNubD%xCKTfT@efWI?%i[Ed4;* }!<RS)3hYk');
define('SECURE_AUTH_SALT', 'JlV==ZO|]S9WIy:[9Yb4BC%mcGH,x6&IRk(+oPMuogcr^LiJUwLxJ#?I;6L)*hBz');
define('LOGGED_IN_SALT',   'FQ90)v6M]k&=r5[Ya~W3$Aep4G)9S;l2LXqWW?|=x+Ls9j -=Y`3~]87lf6YS$Yu');
define('NONCE_SALT',       'S<kZ4ysIcI@bSUc3.EC{ g6l&9V:UWI8Uv:udvi3yKLitI=skH;$|kXe4f8v3g{J');

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
