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
define( 'DB_NAME', 'Kitovu' );

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
define( 'AUTH_KEY',         'rM]R)DvIOeeONTd]Sn%z?8T#|yqva.N3jp>J7tf-;ySah}Gz+mWG;)g~4-1rHn;L' );
define( 'SECURE_AUTH_KEY',  't`(+,%]97gK?{b`BsVs96K@[+ lRZ&3%:2M[_6tL- -Ci&}$+.FqZaKpcB?=%AB?' );
define( 'LOGGED_IN_KEY',    ']BWla?doR=[d#Ba-QM/G|Q^*7YeEF+:#bp2E:OC 4=~LE[g_)N>KjV>f)ssUEF3m' );
define( 'NONCE_KEY',        'u,<J8Ui$@:EtT}a,w_@q<.lJp4]`n.}UD]&`babq{!}2.Oh/fEDrj|%csG9r7TUw' );
define( 'AUTH_SALT',        '~X8jD%WdxfVF!$HJ%G{yciL%9)IxTXV0CfS ]9]>u|I;vE1%)6r.~DMP%g+4V8)P' );
define( 'SECURE_AUTH_SALT', 'NT~Kl~30J$Cd*M4K@1WaH0d^?94`c704_Kle-}zdHhsUZEdae`30*;9&!pMHG7+H' );
define( 'LOGGED_IN_SALT',   'V+<>Xq:&S&:keD$&8:,Y`XXlp&e~@d50jV7@ 1l-dxJ2ua@L9ykeG9;]$jVwXsM~' );
define( 'NONCE_SALT',       'Sx{kuT@8SYGc@-;iqrQ5.u@<:C$eN$$9s:bSbW&I%vZYwl`]aBefUGW yru>.#[U' );

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

define('WP_ALLOW_REPAIR', true);

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
