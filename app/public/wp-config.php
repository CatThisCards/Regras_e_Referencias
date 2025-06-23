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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          '~p2ic)Uq:TZ&,R/]R;I!p*~KAd-[/ -rouP,<|T48yOeZ9MfwQYuG41aPI4(^_{X' );
define( 'SECURE_AUTH_KEY',   '601k&wGW9 ^zr1#I0y?3_zP7f+I3K)/{Ia,A<_9_=/Q)[B&3c2~1MlU0} 9Z2oWg' );
define( 'LOGGED_IN_KEY',     'lj?UmknA#03FL;PAt:?FQ|%!b+P$`<kPY,L7vl9rR<.mE51$+snPdz^NM[m.R*7>' );
define( 'NONCE_KEY',         'qx.9:gIO<_bX.=r%e/{6e5FB u+V[2#Z?EOLZ59.QC{9 ?!^T8a$8G^eOME?B2Pp' );
define( 'AUTH_SALT',         '!Mwq.q>N+puAbo]L~wcE&MqRz#h!1XmkcJ:zX/Ji#qcW>Z 9z6G`}j?_nz2ZC=87' );
define( 'SECURE_AUTH_SALT',  'We/Fr~1Gl`ToCl*QV|9#+&5C?9Fr+$`vr8K:_:BK=v{cNHlQ^~Mo,e`B=kYWdiY[' );
define( 'LOGGED_IN_SALT',    'z`[R*/H3czxMUq;J/sKLyt }w#dB]HJQjJaBtuI$N/&v_I5[wSsn]IW-iu&LJ9ov' );
define( 'NONCE_SALT',        ')}Ua)RQbTZYm~KhuLn#-Y HD(0UB,ILXRxB~([DpVt-rUFRgGP5?)wxOS-~WSaYu' );
define( 'WP_CACHE_KEY_SALT', 'bn9n+PVm{u/`(/Md>lk^r)J0/#@C7>v/_)P76pG.8ZAmd;jk<V/@}qgs$D1/O>|6' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
