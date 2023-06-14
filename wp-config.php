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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'oalaskaer' );

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
define( 'AUTH_KEY',         'r-&:%,(;LL9UP!W023{(:w@tm@uKFqH1O,>/?iAGX=&2^0{KSMLCr8!6NCis=GF<' );
define( 'SECURE_AUTH_KEY',  '}#puLwma<IT3+1T6lGZ|#LLQO]BIVvX[~@L}B~g@;w^^<[n[sb~F]nE3DT3,p;]_' );
define( 'LOGGED_IN_KEY',    '`{xf?0T7c4|(bd+M>MO]8fMxv1$?Cvt8&E}Aau /3~.9q^;Zg5d^+L%wo=zE:;Ea' );
define( 'NONCE_KEY',        'v~6dVPY55Yd=3qa^O2dWh]b:z9.xNze9Y;A14:g5/2:K>-t#{r0%]RrDGz(MzO;Y' );
define( 'AUTH_SALT',        'H`%ID%G0$8[>y-gL;i[cKcHgvG6MI8c_o/D8L3?~xy7vN9k`|pQ/+qm#YlQOjPK)' );
define( 'SECURE_AUTH_SALT', '~9B%=BWU*%OZ+L6>p-;@.jM8GeC$J/H~ctn%3:W)XqwYVagPvYBFin(t=2 c^o] ' );
define( 'LOGGED_IN_SALT',   'wez3{(a7}?Ac3=lws_9s}J+3oY35B(*fZu6|q^nW!HcBSMY1y~]C tu/)uUyn]I)' );
define( 'NONCE_SALT',       'I;NA+[)QJ3+u8C=R}@W=h[,sLT.~Yql$|[avI.29X4.sc5fIkmT/zkMNKCtojmem' );

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
