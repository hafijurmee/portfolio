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
define( 'DB_NAME', 'shototas_portfolio' );

/** Database username */
define( 'DB_USER', 'shototas_portfolio' );

/** Database password */
define( 'DB_PASSWORD', 'NH}U*-*(AX)K3AlF' );

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
define( 'AUTH_KEY',         '[f%oMcXI.xXoXA/BRMfASKL;dx2c45-Au<,{^}*MNW~mWpu7@.BD#&K*(]iBwHDa' );
define( 'SECURE_AUTH_KEY',  '5s;:G=*nEQs37P=>Qk[;1SggpTA]yFI)k&gc6,Y;o}]x6?6b#buC>}loaV]J--}o' );
define( 'LOGGED_IN_KEY',    '>sA< uu`!<D@$>blK9Kq5MI038Ma*I}b+Z`/M4:{]0wIs9@Kf<(r1n(Zr`-;b-WO' );
define( 'NONCE_KEY',        'k=D/hlgWE0?6ZC-kuO=H,_@bKUlqc7PH%prS2= PX{%rOm t9+wTMLXoR_nGuA{M' );
define( 'AUTH_SALT',        'hVAGI&}BOex r?QL>Q~TfK%^xds5O^!#n:7~N}boX=jL&hO<9gej:{X}6X$o-VJ-' );
define( 'SECURE_AUTH_SALT', '94G)=xyASle}%p.B~<B2Qh@,WWtlUyt}]x, Y}i+Wvc  f^H4[87P112obs%BEEi' );
define( 'LOGGED_IN_SALT',   'NJTdWdcR.L9)0h0sB=LJs=OaLF7Jg2<~mmR;_bRc?@R4}^NXA0:]6]q,S~@OqZRj' );
define( 'NONCE_SALT',       'DkASSg,^aJ_{$+FOn5gnVJb]#J-H;6N[]gEK-jF(Db6Vm@U{,=T,ok#Lyr7np^EH' );

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
$table_prefix = 'hafijur_';

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
