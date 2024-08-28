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
define( 'DB_NAME', 'wp-theme-plugin' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'ikanpakus' );

/** Database hostname */
define( 'DB_HOST', 'mysql' );

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
define( 'AUTH_KEY',         'N[Lfy|D)nHmxrKP.5`t4@r}FMVH(](^AJ(:NmT;U_zY/Zx7dNT&`t|<c&qp?qRjy' );
define( 'SECURE_AUTH_KEY',  'JJ*SPD(MG`p&J%Z|c$dz]}m`eeMjD^|5#_a22+Pumm^}Isaays<.DR6F$:]=[A#H' );
define( 'LOGGED_IN_KEY',    'Glu+N,@.znY(qn+*wC_:jiSa>UDX3REfG:8A,;[) _PNPap=N&csG.Tj@*vyJtua' );
define( 'NONCE_KEY',        '5bReMtbk(7rgjU!O/Z1{2<F/nMj@%V0qwwK<&V^U!zz5~m*FL$b};@Rbct(1y)!8' );
define( 'AUTH_SALT',        'TmA!i;R^J:|{9x%!B!U$<eyf]S9JXdKc9c$>Lx&mFbD)vTkj6)4Y~e7? D.~Vr1H' );
define( 'SECURE_AUTH_SALT', 'f,/ ,0Sy/8|DB|*f6(Kh<5K X%l1B V%NhL%>SJ{Tb{a`/fyKqD7&|r+n7EH#}_w' );
define( 'LOGGED_IN_SALT',   'p= .M9jN4A~P=K>J13?ubP(0=g.S4u6kNIQ>Su>;yv0xGO:[ZD8<$o0S`IpfG9e>' );
define( 'NONCE_SALT',       'K/*KI!Q`+W Ho~l#8nC@:a(d<${rAvBBXz9_A:p>xHS,T8j~N(A/?2>FE/BWf2,R' );

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
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */

define( 'FS_METHOD', 'direct' );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
