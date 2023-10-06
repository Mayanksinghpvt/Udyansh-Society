<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'Udyansh' );

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
define( 'AUTH_KEY',         'Bw&}4eyJYi=HT/kg/~vimmG@.vu@`m4}Phg-iF96H_T{2=5(hT;%mWz#s4vW[:5O' );
define( 'SECURE_AUTH_KEY',  'A+_Rekt(&8:#4p:x{I_Lp{k07USA5qwulMKBG%+tt1{EF%{NUFTaM&q{XTLFNKi.' );
define( 'LOGGED_IN_KEY',    '=WVdVH_/0#VlQi*>l2SxK]y$Bj-su*4q:eQW%Sy~_@@o7_Xa7?x?{3y(kd)&JAy@' );
define( 'NONCE_KEY',        'J+?IT.N|r-jMhNk`$pm=a#Qa9MZ8z[]ctQ82kt<F5(:>5gV?U:U/J5k1 O{&E|Q-' );
define( 'AUTH_SALT',        'Vk|^00z6v8(,;Z-WA4v#3@}<iV[%tRw`=sIO{7-aNt%?;wxk*wZpJi?IfJlHvMoI' );
define( 'SECURE_AUTH_SALT', 'xdDQp}fY*n15MA0FitIfL3eb)Wd&FZt{D;3}2kZ+R:|8XTmp(3gosBV+AYsbJiHA' );
define( 'LOGGED_IN_SALT',   '3CC8pT13O;x0nh8#}CU=`D_[MDb0 L~-6F1,**U+^=q9ORq1z%0K%Yf[zOQm;u%[' );
define( 'NONCE_SALT',       '8tLqpO+pKv+i%zQ.w:9Q)k,rJhCWjb7@}Qayj_9!jT&gj],Mi`xD5;Fvbe.V?T$>' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
