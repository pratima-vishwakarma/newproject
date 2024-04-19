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

 define('FS_METHOD', 'direct');
// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'naval_infra' );

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
define( 'AUTH_KEY',         '2Z*f46oago{+:i|<gw`Plr7UQcs}h|z1|lZ4omoNK6X(9R*=iMeysBta9Xn#9o?X' );
define( 'SECURE_AUTH_KEY',  '/LY5Sd7Oy~@T!MC(4VrVtzMU)yA)oFqO54N>;^e;%7dc_bo#OBlW`OocHetek}/Y' );
define( 'LOGGED_IN_KEY',    'O$0z%lR[%L,VRD89n?`3CBzxkj.A=Mp6T-Vp<.xq5HPY=Mb,>@[)rU*Pq:6JHr,Q' );
define( 'NONCE_KEY',        'R%M05/<3m?|k.bS#|Z<QzJX%DjM&E955Wmcsg<Ya+wofO)+#ebsR.?O}><7i$KNL' );
define( 'AUTH_SALT',        '`pAY3cE6&GF8SAPTR[fh*PH:Cemi#D/rktr,th8p0[! :dOwH-dQh]&%fhVlvW]V' );
define( 'SECURE_AUTH_SALT', '-<3@q)bX6=3Oh^]kt6sW(Tao5[06;).5|zKzj[SXnz;~#o/h~3Y|i)Rmr7CMiLwM' );
define( 'LOGGED_IN_SALT',   'qIhuY:K1Mw?.#Z ,:EUrHeG^NS/PJ]g`SVHI=WG]D@7l`*d5&4caW]BMO-np>=0k' );
define( 'NONCE_SALT',       'a=PW4tW5&j-~hC(zOYygleE}!ak2ysM=!Y/xoNu9`kQD0IK-f/s#;~<JPWHf`J1Y' );

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
define( 'WP_DEBUG_LOG', false );
define( 'WP_DEBUG_DISPLAY', false );
define( 'SCRIPT_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

define('WP_HOME', 'http://local.navalinfratech.com'); // Replace with your actual home URL
define('WP_SITEURL', 'http://local.navalinfratech.com');

