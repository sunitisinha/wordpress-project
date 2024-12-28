<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'wordpress_two');

/** Database username */
define('DB_USER', 'root');

/** Database password */
define('DB_PASSWORD', '');

/** Database hostname */
define('DB_HOST', 'localhost');

/** Database charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The database collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY', '2Fk<0 d]q@,??NO+P[ n6?6BG&FZP4f^/M/dbM#LFrnT6TuC0|-{i^uaL%y%d5zZ');
define('SECURE_AUTH_KEY', 'p_SL{hcNSR5d@r0-#:i>wOJo=*a928iTmG]zs]$nQ!7fvfi ;Q4Z^_T}?,-k_?>:');
define('LOGGED_IN_KEY', '5nVZV_PvP*ol%pqfytJ4?x=nRgt3=F{Ayu%?C)|Q0/hySx_T,D_@yxw&!t_eyI#<');
define('NONCE_KEY', 'lm9W#6c6#D`(`j4h+IJMi X=b{xmEna7^C?#*A0KhaCc&Zg(mX8t-2>HbkU$p*^2');
define('AUTH_SALT', '^g##I|iMfE@;dKu-%B&$GuT_sGNyqV|j9?GI:d4t_H*B ueE;k|N2GR@=:-Peky5');
define('SECURE_AUTH_SALT', 't}dEH6$LQi)M3v9E>hNsnNG(i*i5X%GjbRXWNh;*%lXa$L^(1oqqj?r.cU8O{yv3');
define('LOGGED_IN_SALT', '%aB@qf~M$fDzFlNG69TZ^k|c[loszlsok>_qmPdI[s  x!Kt MDW E~[]k0Azu]1');
define('NONCE_SALT', ']W9^r5<l5`buyf3CtG#>Q-JZ7 4uy~Mc;ha7W*Vg5`Y5Qnn>uvewCs:kU_))gPd[');

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
 */
define('WP_DEBUG', false);

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if (!defined('ABSPATH')) {
	define('ABSPATH', __DIR__ . '/');
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';










