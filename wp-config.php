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
define( 'DB_NAME', 'demo_blog' );

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
define( 'AUTH_KEY',         'y)| 4l V-D_5S)e&n3PnN`+Dg{sxd&M6$| uM)=v7Y21E%4o0(-hg=X[.YVE:kyN' );
define( 'SECURE_AUTH_KEY',  'n(Dx[78;*Vz/,;jY6nCCz[YV 0y,L+n.S-D](cO]<@vM+i}+~jGAws+)B)kX0l!1' );
define( 'LOGGED_IN_KEY',    '8f{<~6h8&3-LN=cz}p:K|,UIIB45sZRD yqIHH7,a4]SPV*9GNHdxiaO0$y1z.)u' );
define( 'NONCE_KEY',        '6*IV/:JMedv%X}_AB#TTjtl->NXH,i)UW~g-[_3@-7A:Hg-/RrmJwe@]>,78I9!s' );
define( 'AUTH_SALT',        'R`&[x(.8~Z}`KN*v69=?ZYMt-B_QuwXNK7,#OZfgzfi2S( by#irrK&_D-vq>b6o' );
define( 'SECURE_AUTH_SALT', '_C~t6Q))knX/qWdcw]#3p$$m{(#<&+M#&eBqS/nWhPNQV^cTMe[r+P:{&5e#wosl' );
define( 'LOGGED_IN_SALT',   'v196)A4~DZ_.O$6mvYk3$ii>{7$^WXy(xUyZk6~#Vz}*5Z wJag9`L oRpb34OK!' );
define( 'NONCE_SALT',       '/j fKIHi.V6J0c AeuJ&EpK*wNWAk,o-}.l*v4b.!k)G]wD~ey. ~,hcGET(i_2x' );

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
