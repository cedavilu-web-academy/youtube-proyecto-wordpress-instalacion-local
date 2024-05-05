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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'youtube-proyecto' );

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
define( 'AUTH_KEY',         'j=zC~11j%_c9OgZ3NYsb?>ixv.qzwBy7~!S;?Kho!gZb1k+@,?2F%ddAmTxgix3c' );
define( 'SECURE_AUTH_KEY',  'P3Sf$UGpi3Q4 gBHrmqE*/lvw?Ld!kbug8 )dNvzsxWxfRmldD~6GE2F.nExGUzp' );
define( 'LOGGED_IN_KEY',    '_hzFc@1NeXMH[SmlF%DWyio~%uu$gCGEvV.yg}f}e]:*}rU0,fT!!f3 AR).E<MJ' );
define( 'NONCE_KEY',        'er,.S}^-I.kn[3CRMSN=@zfYE8#;dmV>Bx;_aq?O/Mr25FMa0%_d?)NwK+m~mpQ8' );
define( 'AUTH_SALT',        'k^KF<oE,Io+MH7!Ehw3mH}KZ%ghxX~zw(GBz*czjl8$VDHt3?^cFWH1X,}$:Ict6' );
define( 'SECURE_AUTH_SALT', 'qAOKh(h<kM$H&x<0.0S$r I^c HxLmA`vMg=Q1HcYek?F^b}/J4},~?TR8%WI:*R' );
define( 'LOGGED_IN_SALT',   '%#1:,y7072<-rq(xlJYGZb65:|pcRH!U?i <tSp9znnkUP6 _r=?[&&5ch1DnkAa' );
define( 'NONCE_SALT',       'o5dpHp;02^r8.x<&<B[+-)FzV*=Rb,RwI9ep8Tvw7_Kbp(?lHcxg^BBT,PcMA:7-' );

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
