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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         '-xO(<,|^#yMi/T1[Uu;CMR},/O+1)cF*)5GP~P8-$u#Ueq~+j3e^`H(Rm})5~J`|' );
define( 'SECURE_AUTH_KEY',  'JlX0zw0eG_~N2Yh3X@!~2k}(a2;9eXn4~Zthp_=Wd1c)^]Ac=2|E+O_a/D;uvgLJ' );
define( 'LOGGED_IN_KEY',    '0bX~gwL725HX<k3?Z<yX!jaQh#OK3Cf>z0-.IPueR-YT{<%Z`(6F5*h_/J9%rT2S' );
define( 'NONCE_KEY',        'arboTSEASBO1,,i}E:j*^t=Vy@3=7PfvQ4T)O1=lZ?:$[>/7nfFnJCy>XhIVX_$A' );
define( 'AUTH_SALT',        '[c$NM4|.~JJk8Jo]sKSg(O+L4K$L1R&M`Irt6=B2![A[Qe6%k&V4l;!%VBFXO0LD' );
define( 'SECURE_AUTH_SALT', 'Au``:?g?mM%<LqRac5{)5cmAK[s?<LJa67[b}vJ+k.yx(jK *7]i8@mEV(l1F)Gh' );
define( 'LOGGED_IN_SALT',   '*F4Yw,DR1~V-bfGz9GdqlhFgV@Y57mqaK8F2u~yq0? tcc]O+3mUwbWu RLI5bV|' );
define( 'NONCE_SALT',       '*qeyp]e0E*4:QxjMYZvh$%U>zDWaM~[ uXS8xgl6Ac|((K0ZoaM^9a=MG6Rq{d{!' );

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
