<?php
define('WP_CACHE', true); // WP-Optimize Cache
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
define( 'DB_NAME', 'wordpress');
/** MySQL database username */
define( 'DB_USER', 'wordpress');
/** MySQL database password */
define( 'DB_PASSWORD', 'wordpress');
/** MySQL hostname */
define( 'DB_HOST', 'db:3306');
/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8');
/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '');
/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '2d714c26ddfd220a1aaad286b15e5364d1d0967a');
define( 'SECURE_AUTH_KEY',  'ad3d5dc2efbd077c011b8d8d0b3a2f6891371008');
define( 'LOGGED_IN_KEY',    'f72d95e1a1a226bcf9ea4318d6d5dd48fdfb653b');
define( 'NONCE_KEY',        'fecad8926827de3c532f6da368b53111752f9b53');
define( 'AUTH_SALT',        '47ec0f9ba8a7ae6253260b478963085f4217b615');
define( 'SECURE_AUTH_SALT', '5c9b807283062732092960b5c57376f6a2e5bf5a');
define( 'LOGGED_IN_SALT',   'ac2c7cd9b1cfb0fbf14f8a584d9f7dec2e63f7ea');
define( 'NONCE_SALT',       '515c6aa177a1c5f402ae6e632010f34058ddb224');
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
// If we're behind a proxy server and using HTTPS, we need to alert WordPress of that fact
// see also http://codex.wordpress.org/Administration_Over_SSL#Using_a_Reverse_Proxy
if (isset($_SERVER['HTTP_X_FORWARDED_PROTO']) && $_SERVER['HTTP_X_FORWARDED_PROTO'] === 'https') {
	$_SERVER['HTTPS'] = 'on';
}
/* That's all, stop editing! Happy publishing. */
/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}
/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';