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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'av_chatan' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         '}xwiOnO*v7Pm:{H[Ak cRF2,T3=KbJXRvKZxp=2)(I wV5f6yNWSg5&#:RSJ-yZJ' );
define( 'SECURE_AUTH_KEY',  '|KvkY^z20IJQ/}LHp#.@6(!gB7OfO= B0[WV25zPY&g64:T Tr+LI5Ami_@alsw8' );
define( 'LOGGED_IN_KEY',    '~8gEm&Dxb)of~YeRdD_5da`q8Jv8Kxe_H9!+{a_>&!9u6SHexk,eL8xC)g4%&vql' );
define( 'NONCE_KEY',        'vq#3%/3vP- zsh0nEtgva]13h/7i&m=`*!yJ@C)mOT 5fHl%rKI-8oOAc/C)Y4=*' );
define( 'AUTH_SALT',        'Cdd9[MN[(LuS1H0!R`1<~L]Z^uRb^zk~qm(TJy&|mA21/L{,Q-anYm!4xW%UKqLW' );
define( 'SECURE_AUTH_SALT', 'V3Og{XD{+p2__:~ZC2wWrnxLW`f]+(!l7tAv&=1qe_,-^=W6>z;I VI^,Z7rXFNV' );
define( 'LOGGED_IN_SALT',   'fwZJoUtVWmoR8cBK;&1-@d:Vxl)zf5k4<V_;a<rYh1*(RrlN35G6T017{h`:uEgL' );
define( 'NONCE_SALT',       'Q(5 Hl0Z=T]4 ykeiL49+N*VxYg?=w9P&xcZ%KdWn-2*w]jE0J7Ib|{M6@y&3UC)' );

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
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
