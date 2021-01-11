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
define( 'AUTH_KEY',         '8vgs>}dWCKSjuQm%Y&nhPYu0FcDJf[N_vP!a(ltqrQ4wyw`]T;+;ek*dSG?8i/Qi' );
define( 'SECURE_AUTH_KEY',  '`(ct<).f)`PkNdLSblNd6=N=J(X@5pKADj{ob2jRLkkWc`G(IZ@dX=m~/RCvDd5c' );
define( 'LOGGED_IN_KEY',    't6_lKy74JKp.{sqiy3FVDqa/=;K*k(/PNhMHMblA(*=;so]0 J:/zd2kf5K6~6 t' );
define( 'NONCE_KEY',        'n,6umJ{`7l]2nqZG7>|{VUAO!%AvjVAMrd%T:F%C=luGXt*cnNWB k&{b,,=%-lz' );
define( 'AUTH_SALT',        '{3u~7[TS40hD G!ET:_%G^W6M`f2^J{>$u<v>ahdMl_G4H1yP1t@G$]7Pk+1}4KL' );
define( 'SECURE_AUTH_SALT', 'VugG(0vTC6Lt>wWqk<?}G*A#YsM(Ohm/`X HbX&q>[NKxL1v{%AFpn!WK~|ne,l[' );
define( 'LOGGED_IN_SALT',   'oC7aUXO[>]xF%T>Xj.ms*AYqJq3^7EQDTyW=P;79*3v`7ZsS>O*3V?Y;hndy+-i}' );
define( 'NONCE_SALT',       '-$ir]7aYM|-dX6qzs,AiUm=d/vT+[Jb_luAF(VGl#Hlgdx7,x<8zWBm&;7fF1GA}' );

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
