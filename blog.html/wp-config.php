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
define( 'DB_NAME', 'tungpvut_wp1' );

/** MySQL database username */
define( 'DB_USER', 'tungpvut_wp1' );

/** MySQL database password */
define( 'DB_PASSWORD', 'U.cLq3a5y7hO2MagYW682' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define('AUTH_KEY',         'IRmuhvny3SU5vcDAs754M0SV3XvqE8Me2RJLr8Qw4dTZtPTnFPZFNhChehOxJYDb');
define('SECURE_AUTH_KEY',  'k59G6TzmKYlr1po8sRIXruRysBbbHvQXnpYrxKEWC52h4hdNBNndo9sHzzT7r9FH');
define('LOGGED_IN_KEY',    'VdGGp2kradsHcNsVly2ekpVaDYiLIWfLWPanBB2JhsC5jd3UdpuFaOx7jSkx42eR');
define('NONCE_KEY',        'Dj2KCKLLSmDkbo8wTWYlVagr809DCuvWFQqrTXTWI1knUWwkBiknew2d2us3SMEH');
define('AUTH_SALT',        '3PmeGrwufd8pcDpv1on4JDRdalxFu6Tn0fhaC6e8zC2yndWn2hVoDt8wF1awNu9p');
define('SECURE_AUTH_SALT', '09KjZeIomOZxnXJGhZpZ9FqxUCtp0sAobQyYmhgvZrWKfMPZkmJB9ka7RgJYS60o');
define('LOGGED_IN_SALT',   'iIbPdBCheXPHu6pmnV4ujdXPzmZiwK2nScW12Yq0xfcLiIVwsgDejRrFXaaYHKYc');
define('NONCE_SALT',       'ClkuNHHTBLv7XzhRX27cjjoZ6eDmgEHidKOnps51AcCuMY5T6EslWVTb9JP3Dt1s');

/**
 * Other customizations.
 */
define('FS_METHOD','direct');define('FS_CHMOD_DIR',0755);define('FS_CHMOD_FILE',0644);
define('WP_TEMP_DIR',dirname(__FILE__).'/wp-content/uploads');

/**
 * Turn off automatic updates since these are managed upstream.
 */
define('AUTOMATIC_UPDATER_DISABLED', true);


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
