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
define( 'DB_HOST', 'localhost:3308' );

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
define( 'AUTH_KEY',         ' &_YrPskgjo9AAxjMr(Ms.K5XQvkZdq5In=Xi#rO#MT3QMs+<9k5S},fl<{N[<XA' );
define( 'SECURE_AUTH_KEY',  'HU _.S~I7IJZLe?Xj?$K3Iy~d=0hBYk?OC__M@|@GVtXLro,bp*3uous#+H;%^1I' );
define( 'LOGGED_IN_KEY',    'QHt[O;oZF542ZGOp$nYc~+3z4V=+cOcTEn&i>r[s;FA3H%XsXd8~k~b09{G$5^M@' );
define( 'NONCE_KEY',        'eeRN]$RzU5bM2o?HAGF|KI7$9V)-y$z?l?cqzEd7sBd1X#M1bmvjJ|qk8%B$D~}o' );
define( 'AUTH_SALT',        ')w7F^2wYL =.Ul_o^`v~bU#7|{W#;GU+Tt`:tzi0Zl)_|-d`jo~Y[(+w^Lst.{|Z' );
define( 'SECURE_AUTH_SALT', 'bo8cw1JYf3/5.Zci<j{$)=rt21P!LVWJcG_#zk@Lco5~H*ObA0b 5&Db68q5NRoU' );
define( 'LOGGED_IN_SALT',   'Da:`A.WEg!kYiOjP6?SRbEeFV+*sG119]_kU}6pClw G+FrEqfD;?;_AZEp`+#yP' );
define( 'NONCE_SALT',       'a{7XaD`5Li-*Q0%$<uSU,`?M?_(S;R`PY`$g8B4ig&ArDOr9^czg1ZnaDOg7$WJ-' );

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
