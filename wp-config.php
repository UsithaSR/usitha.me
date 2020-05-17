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
define( 'DB_NAME', 'usitha_blog' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'PyOv~8P1zw0ZwcVXxazlZ5,/(hI#VE 1B{$BqrC#Ks,|<.?(k;o%1VL{~3#_-#Vk' );
define( 'SECURE_AUTH_KEY',  'et37@`;`d~B-;A[RYBa|:n8NDSx~bs~PK4PkhUJz}=+l+n# V$;n#}1b]R[=xy0D' );
define( 'LOGGED_IN_KEY',    '_+d}{U.o$>JUGOZ-p2nAm>HUj)#DFW=]pV#FY~*jbVSIwY5P#v3C(qZlNY{K`SBc' );
define( 'NONCE_KEY',        '!W;FlNp0#]nyK`T[7IpMh4#/_+qA84aa1NhYQTv!N9jVtVDjc^q`NR_cpB<>mt1s' );
define( 'AUTH_SALT',        'sw0rxN_T79)7qUGCyx7J!_c/]<2 }YX a^9u[,Us#`|j6L90S1Gv+o[pOzCtBh`E' );
define( 'SECURE_AUTH_SALT', 'pg!5 f3 W^;=|F>:w1~Jx#n?**VXz=BZC;#$VVVG>R]%%0!89T_pjY&zt,qgs]]7' );
define( 'LOGGED_IN_SALT',   '-YJj3WurHfXYx,gsM.&%qb0Ir*>*>{6NCYys2/~M3dtz:5iGM|sio3SHNaBV `l/' );
define( 'NONCE_SALT',       'I%BqqP^y#I]}+ $lS2&w{|0uM>AJ^/.L_js|q6h*g]g^H:WP_euSFOb&.([@$?*H' );

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
