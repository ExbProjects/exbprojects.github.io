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
define( 'AUTH_KEY',          '*Z[TnE1Id/$]2CQwZ+wgXSF(YT~/CGev-9 ,[_q{ti,uas^~M{|{i7y#Z).<][dF' );
define( 'SECURE_AUTH_KEY',   'SF_N={ =|hd~::$5do9Tlopvd[s() _wg9:9mD UmB}2tVq2nZG>^a$zt+S+$S8`' );
define( 'LOGGED_IN_KEY',     'xSlKWC+JIT?5Djq`j$g}6Q&6ZXqPv6yZ&mh=D]&bn/Ol+&qUw]y_ gz$WX}+V[QZ' );
define( 'NONCE_KEY',         'OLKOzxOr7riOf@ZD:J6Azg;OB2!SYD>~f:v;];2@>#e@8.:<9y G&lF~(ZkyQ:Y-' );
define( 'AUTH_SALT',         'w{ukdJazUc%-[kI<-a0ozMLzQl/^MvWyy2$@6$WTCj|gJ,W_I(_{r]D.9P}`k1L%' );
define( 'SECURE_AUTH_SALT',  'NLz<QeR|>Jq*h1]$c<v;Izw{Y1/7$okkYb*1z{BX$g4~7s+!RNU[m/3@p0Y#V=P-' );
define( 'LOGGED_IN_SALT',    'KV&)L[uA6)i_aWTiJLNT%3i0{IsLyN0T@HcyplXDQN+x(_YRN MH7#V(mY}hFcq|' );
define( 'NONCE_SALT',        '=1(#Gb}~|@C$`LKL-<5H|ROz|DuNVAhtpb!53X?CSt +R(%B%L{<vbw&EP}5|Q$^' );
define( 'WP_CACHE_KEY_SALT', '<~MN{NOT68HTKAgqXDd:Nr.7beF^;ra^>Wu8!daG$b)l|o,`Y4iJ:B?X8VRy$j_V' );


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
