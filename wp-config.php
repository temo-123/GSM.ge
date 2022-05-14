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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'GSM' );

/** Database username */
define( 'DB_USER', 'temo' );

/** Database password */
define( 'DB_PASSWORD', 'Root-1234' );

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
define( 'AUTH_KEY',         ' +aG~b{(e`mn5qL#rphzAD;[Z3/o6n=V=ji4zPc.EeL@4m[gS&T-cOI9T,%l@i7$' );
define( 'SECURE_AUTH_KEY',  'R$,i]NRaYtez8Uf{!-A;%=lh`kuJGXh_;T%bkYE,_Sj?xh#0k5+=+LONq:xHo@FF' );
define( 'LOGGED_IN_KEY',    '*-+^{MT;F!b|Qrq0=_SO,o(*vJAMIfC[;b<dbVX.0$UHd9M/_BqV0<!5O}6FE*Ea' );
define( 'NONCE_KEY',        '%fv!%T^:Xzg!qB&~w1M~SadHK;hTn<]z&kb[::DFT2/%Y4`ET1^w3xaV3#hZ.VSZ' );
define( 'AUTH_SALT',        'E#t03mO4?%&hYjK Ui`DaKYFZ.[dU0CqQT%=J6RXYCffJypMS{Mv7q>q8!Fb3-{)' );
define( 'SECURE_AUTH_SALT', 'P@MqieQ!AnF1u<zS9;QQE*D#Z-zm]U4CqAc)x>R)f&y(4vy+bjGj|9[-%Z##v5|;' );
define( 'LOGGED_IN_SALT',   '`&:CYOlW!`G,oK]aFe9cg-.Do0o3CNz53[H?3rn*tC?;Gq41[0mb.?@,f$8b)iZ*' );
define( 'NONCE_SALT',       '9^^*uA4m3IVV+abq.m^2)y0#KD!2!#ZqC$m8]^`#iKm36G}d4{a<!{0b[<*~2aOP' );

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
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
