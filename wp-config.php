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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress1' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'LsUf5dq^ZS,62~e]#r`!S&&[Xt;Y@}d@lz&XB9S.uWcspU(fQ65-K cccDUeK|yf' );
define( 'SECURE_AUTH_KEY',  '1x^R:6W?Xw}Eg&(b}b=[7pRc/pI2OFe6VEE!#N(?;tsyV>?[k.8N,fJU%iH7^yNH' );
define( 'LOGGED_IN_KEY',    ',~YUb>U3UqKsii!_~ aF<T-1x3/A}uQ ;<I>OBpeC#01`&k!5A8)g$0LDXi@$rv2' );
define( 'NONCE_KEY',        'b)pG},iv}!s}#7Vicu7j<s:WX$kCueaeZtZ Jd@9WIKfC6!koQE+=^`1x/n_lL)N' );
define( 'AUTH_SALT',        'kD-r&V0Q+M#0-.<PTU]Vy}O%oYN6|Tv@X%4FyHXw;]4kb=atbG}d8xrVQ:-B91AS' );
define( 'SECURE_AUTH_SALT', 'L;k8kr>NHNRU&9FP=H9{-xVQE8guUuQ!zz>!^5M8/bsA#m5:^p`TQkbYNfFq]wk3' );
define( 'LOGGED_IN_SALT',   'S0qJ3~KX1DZfaew}rW{3;do@Ge7=r&8vKOp[1DA]RZPo)6<}(ucvSQ4hoWU&1i%R' );
define( 'NONCE_SALT',       '0w sc!1WTw_Glv0)Yn+>*9xKc`MbObz}5rpl@#{*/g5.Zl3Wwlkc/y*D1mS|X*YS' );

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
