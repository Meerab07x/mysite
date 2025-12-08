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
define( 'DB_NAME', 'wordpress_db' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

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
define( 'AUTH_KEY',         '7O!M?/9q7@P+(k)n3Nrh>yaRjY_z6KJ#>A`4x(Kk9:*3Fdcd9W(]MMSqHpO3:Ykm' );
define( 'SECURE_AUTH_KEY',  ' ++L NzV{&{Eqh_^EC}{`Pakxz&U<JuwLsQ4hT8Pl{.=gzxp YmWgDt)<JYh9)!Y' );
define( 'LOGGED_IN_KEY',    '$<3h,0k#U_Crrk}AfuYr|6JhQC]4d8ONXEWgem0|Qx!Pg_@M;FM=[pq~K[oB+vPy' );
define( 'NONCE_KEY',        'r*eik)!o3MdjNZ]JZ-ujC<9Vn#^]RCL-0.O,|( ]62Qc;^L~?[_Q**g5co3(;Jgt' );
define( 'AUTH_SALT',        '4|?(HeRL}G%!ecfw=d &n=GI@s@Je~ G+X 2VEJf-|iQkR,tja:t=)KuxKE,Gc]0' );
define( 'SECURE_AUTH_SALT', ')a@x}oxGwPXC]HVLn8WVyBZTJ:CO0}2nX#CL[1zDBJlH>th@Rdx0b=mt=1r#Xqf3' );
define( 'LOGGED_IN_SALT',   '}|Q%HYpKs9lEwq&+Ri(naodbQ/Lw,KYW@>o f-#3jxcrtE>/WQ^)n>Tg980R*cV2' );
define( 'NONCE_SALT',       'TcSQcn=wboP]:GY{?bj$c.&Op`x+_AJ=u;^eUN`k7dtuS^y-c<N_BVwji;o4_k-F' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
