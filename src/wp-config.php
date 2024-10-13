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
define( 'DB_NAME', 'wordpress_dp' );

/** Database username */
define( 'DB_USER', 'wordpress_user' );

/** Database password */
define( 'DB_PASSWORD', 'sandi_wordpress' );

/** Database hostname */
define( 'DB_HOST', 'mysql-server' );

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
define( 'AUTH_KEY',         ';tF?7pcP<=c2{m=B?]/uiL4WzU]s5d`Zq<Ve~CTM *&VT9x.S0GkJty6Ps~.f$>e' );
define( 'SECURE_AUTH_KEY',  'P:To.=b~3 _^feCt,jv%3+r,t(R<)rlmNW71:_4;4Yw4#)lQe&8-leRT(DSLNW52' );
define( 'LOGGED_IN_KEY',    'l/OcL>Kb,z<yIF{4 Z_!.M(f-s,f1B>aZ`otLLhTlP.K*nAzG[Y`Y=EvvvAbxju6' );
define( 'NONCE_KEY',        'TTP]&[bC|t?H,!)REst*IMgTg? j{NwJ7#n0^`&kHMo(b!h!FacG)>@sz/}?Cbd6' );
define( 'AUTH_SALT',        'dsb%`+_]F0 ,(1tT^>Ci(h=1aRqaQ9MOc&o9>i64h+_C;$RTDqQWzDQw *tc/7??' );
define( 'SECURE_AUTH_SALT', '57,17P`P!~P@w%?b}#BvYkjPe|S%T,2_d~*ALnMoVW0>#^!g.Va>5{|uePghL|u`' );
define( 'LOGGED_IN_SALT',   'p@;rM{._Ns8Da*f)qz.(|)7;-sJ&hwxcdoR%joE/f/uc?6[s!DZt TMr)Z.*7E$2' );
define( 'NONCE_SALT',       'VX5Ah[O4aK>WL1>LO(w6{[4urE?igKjd$~%c061|yn)=W[P!Km.(El-]H#pT.Ipv' );

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

// Redis Configuration
define( 'WP_REDIS_HOST', 'redis-server' );
define( 'WP_REDIS_PORT', 6379 );
define( 'WP_REDIS_PREFIX', 'dolanan' );
define( 'WP_REDIS_DATABASE', 0 ); // Redis Database ID, 0-15
define( 'WP_REDIS_TIMEOUT', 1 );
define( 'WP_REDIS_READ_TIMEOUT', 1 );


/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

define('FS_METHOD', 'direct');

