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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'root_wordpress-trunk' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'E{;UXG%~xHQDZv_CnX1>o%>SbXq6hY0F/N!8G!2^CJ_e5LjH;Va#~<jr;#OAv,a}' );
define( 'SECURE_AUTH_KEY',  'OzV<Mx5|Dp-154(s,lX;P*NkT|48Jb($wx)=hcKBfVhuh!pWr`f:<OpaDr40gEYa' );
define( 'LOGGED_IN_KEY',    'szK7p!#e%r;a3$LwQjJ4Jyi?Y(E30+r*p^Yv|q257p*cljbT_/SJOjvQtee3 w4:' );
define( 'NONCE_KEY',        'Qa:11PtRUX~U{(TkD`{S3*J4nNJ|p5Wm|fOI(D25`!.PSfrY:Ts])riXjZi bB&8' );
define( 'AUTH_SALT',        'Wpx[fkS3;erN};`(JC?)n0&Ut+-Yc!yP^`X<NN0!hc/ 2SO5B#B@72ym)sC, [Et' );
define( 'SECURE_AUTH_SALT', 'R7}Q_1[YZ>=ii3$t}G<nTt-i<J_oww9Q,Hdy[8HM(_z5ABa^R D&[3>fmZN;/gN:' );
define( 'LOGGED_IN_SALT',   't9i/im3lQ_v]4A:zd8t8tql{ nN^bwAa+/E;hGC5:hQU*nlJkAn9h=.AQbD!g`qf' );
define( 'NONCE_SALT',       '+y-|6LB3hnGBUKrg*>51%_mE1!~p/_5Cf4R611BL?yy|)`w0C1GM[pRMKSF~ERJl' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp2wp_';

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
