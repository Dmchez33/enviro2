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
define('DB_NAME', 'epiz_32977459_w132');

/** Database username */
define('DB_USER', '32977459_1');

/** Database password */
define('DB_PASSWORD', 'N6!-87S1jp');

/** Database hostname */
define('DB_HOST', 'sql203.byetcluster.com');

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
define( 'AUTH_KEY',         'rqo7clidbwb8qqe32fnndj6fc6l6156eejbcy0n5vfd0bnojskulsvle3xcdpo4p' );
define( 'SECURE_AUTH_KEY',  'aq4xxoesvnvmadbvur0zmp09eluozs9mceqnmye0og0snjkqrletqiz1k9fnp6qk' );
define( 'LOGGED_IN_KEY',    'frjbb1jxcrnmxi2r4ruzwhk127hlll522mclmihnweemzbqndn4csp2lwmrydozn' );
define( 'NONCE_KEY',        's7qrl8h3tpgzpcfvkswf35lvy7pmkce6frln52wzcppvf1z28metvqnnjsiwxkaw' );
define( 'AUTH_SALT',        'pwzz4bbhc4nlsz4scbtd3vpu48wd3iewx0kiz0yyxyiom7eprqrhf2oxvfic7zan' );
define( 'SECURE_AUTH_SALT', 'zbngy4l7axco3x1ghm1tqwixrvpwiirhtvs4vxkvlpi34zkfhoszfu5rnfyqnm1z' );
define( 'LOGGED_IN_SALT',   'z7b24dxhttxlr7o2bhqrezjq0yja8gse5xkjq8wzwwca67svinshywjmiyrs2g41' );
define( 'NONCE_SALT',       'gxv31hsamare3qktxine7tfq9vs5aktzsh5cextyeatafdsh6wc0ti4bsb5c7nep' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wpfs_';

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
