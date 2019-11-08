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
define( 'DB_NAME', 'local' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'aj/Rao1sj8V/xTyDL27ESCbJNWbHTqkQefzBJoh5zZ/HDVajvTpE9nB1ATPHHuyuEICIIcT27TVawUkZ/XaY4Q==');
define('SECURE_AUTH_KEY',  'hpbFrgdRL1fsB46Hnd4F+pnD7Cj62fARbU6+xlzQZ/ckpIvmMvHCyvs5aHAV/rmLgdTfbSMaz9gHPEmvhRbsAA==');
define('LOGGED_IN_KEY',    '2lkg8z2pA8AhnAgFhc0cstIggSlg41wsUEcfGLEJzP7dyN5YC0cIOnksGI0MwQ91I5BxafgpTQQz1DLaqe0ohQ==');
define('NONCE_KEY',        'jEd9rMqqwEOCpZYoSJlipc7o97MzSuUPutYhfrZFV5cvciNgot+deAKdn/+fo6g+mRiY7tMgSPABgLov5UdcrA==');
define('AUTH_SALT',        'PFxBakgRBZMSHI6knKGo482e/whepUk2vBxFuq6D98qo07ubQURuzBaEVBNJGQdJNXo5c+90q517b/QgX8PR2g==');
define('SECURE_AUTH_SALT', 'wMP94cXXfLPpXwyTkb+mgBrlB6dcmet++ajsljZqFHijqFM3n4I/CNCLuuRqKNhayhMbClh7YV9wNh/CP3q6/A==');
define('LOGGED_IN_SALT',   'EFaSSzUh2bgHrexG2r2DZOBX0oEW3nKybpMyXEiqr14XWkgStqZ+iEjh7aEP+5vCpGgtG5SP8zq4rC1KM7uNXg==');
define('NONCE_SALT',       '1kt+fYy9Nhqrw11KbLn9ot+9k2FqRi3NjyU2bJfQulT6LoYYjjDYT4fsm4bAnp/KWErttlQfA+ELpqxHGJz4fw==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';






define( 'WP_ALLOW_MULTISITE', true );
define( 'MULTISITE', true );
define( 'SUBDOMAIN_INSTALL', false );
$base = '/';
define( 'DOMAIN_CURRENT_SITE', '1st.local' );
define( 'PATH_CURRENT_SITE', '/' );
define( 'SITE_ID_CURRENT_SITE', 1 );
define( 'BLOG_ID_CURRENT_SITE', 1 );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
