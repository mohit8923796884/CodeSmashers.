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
define( 'DB_NAME', 'word2' );

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
define( 'AUTH_KEY',         'Q.K;:b*jt{i8]+dhpxm=~rcGCe2VriuJhd<^u(>0SQm5TM4YRQ~lw+@&)YIg3*%E' );
define( 'SECURE_AUTH_KEY',  'ushNkb||c4-!(ZeJ;oYD9#`[lz[}+9D-*6;q=e6:!].K,y$_}Cg9q=/#16.X*i.D' );
define( 'LOGGED_IN_KEY',    'KeWE%-u(8l=Fa(Mm-_56Sl>9K:!SqD|5.B,<zCv4bhr>zeO=MoD4xqd}~9*]hReC' );
define( 'NONCE_KEY',        'Id,gg<Tp{|h,=1{U(i?$!P}sx4{~t|Y2BkG{m|qO.:_-uG8/=Kn1=GysJB?fz:jI' );
define( 'AUTH_SALT',        'Asy%i#alpN$YN`:DluOss{F21Hj 2@[6 $aK(ZmDK*(%W)|w4_cMD~_ vQCPnx}b' );
define( 'SECURE_AUTH_SALT', 'UdyK1Ya1LF&lSIl;[w$k2=[v!.z#zv.9x{9=|b-(K^U^OV,N3$$#=v};_s%zra 6' );
define( 'LOGGED_IN_SALT',   'cS0e`bl7.CT&[HB/D&{+jh@{Hw|lb/?1CSHh2a91$Uq$q_x/}vYtcDwy={J[EaEE' );
define( 'NONCE_SALT',       '2POMo Iw2&(e%xA(5PS>=r@=Y3<a0 L6~|9Jz_9AbQ(L5Y;Ni$Wt NZiR9>:!]bG' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
