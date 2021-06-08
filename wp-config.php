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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         'W/0=@*9bJ| BsudZCAd2<w:d[iIn`$Qizx0Aom}Yp_q j)O5h8v/@j/!y#>BN>$x' );
define( 'SECURE_AUTH_KEY',  '<>:}>068I?wxL$lTN@n9um!n%&eB:)bPFe9u>4C5]MV37n].KQv#]Q< 3+i_bTT=' );
define( 'LOGGED_IN_KEY',    '_D4)j,ZPM<iM[J}^qv1o=B6W,@,Z4QDEJu:MZ>K|I*{xOgBMQBmSKBl9X tm5V~9' );
define( 'NONCE_KEY',        '2*r(dk!&tvSp995)-wPH+ThT=G.]`FW[C2U`7I&@eO{v-}!GBXko{[?[Hl>;AmBn' );
define( 'AUTH_SALT',        'td$HEdWGSjd2%?vK:Ip.FY5CF{P`[xJMiycqXI.636&T7Jqi%X1%6bF{1eV/.Fol' );
define( 'SECURE_AUTH_SALT', '4(+vLClSWMPtppvr3?xZqRS LGsYNEUw W]snLw{h53iJoV?qJ!0rfP3uzGcq%H;' );
define( 'LOGGED_IN_SALT',   'zBZ*>U.g^+rkGSzmp<TN./RobGI*l~cuxr3}EF, +>eC1phw IL8Z@BvoEu_045E' );
define( 'NONCE_SALT',       'w`Gc]p10},LIrorKl:C?E8aY*}vx2HbAJ7^A`cJ6}-.vt^WzvD;ZOle[Q`:JAtO=' );

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
