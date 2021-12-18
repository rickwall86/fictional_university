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
define('AUTH_KEY',         'Z87/6GVXP0mv3qWJmFxXYWSNIFcnpisMj8QLp5C2gjIKEdvnqH5kJidfnaKRnHm7IqKKm9H2QgvNS9nExUjyQA==');
define('SECURE_AUTH_KEY',  'pebs3TcUHhvkr4BxnV/5dikrXGzWS0GY1Hmm01hb/HAIdm3U7/gXK/vQWDrnuAe2/Ae0M+tOsGFmeaWL7uXHiA==');
define('LOGGED_IN_KEY',    'y1Njk6QRpgC/mH1EImRT9Ho4wfhfXruvPMEXMcV5UgUHUYeD7aKQK3os9fefqWEL26pJPdM3dpVr9wDyGqGfrQ==');
define('NONCE_KEY',        'k29Ty7jp5ouSJLSAOTY51w1aryarV9zvfZbQIc90pZL/m7a718LLbJEJW/vt1gNeGPieKusWysg8HIjzXXMolA==');
define('AUTH_SALT',        'd4EQUfSmFaPoU7JmyEMUbu7vIh1eJutv9DYK7oZVxA3mtvFxRyENN/LzHdYR9WG8ziFKypsi6UyJtruX3xZfXA==');
define('SECURE_AUTH_SALT', 'KAe0cGsvd4IvMwJCZcM5qnw00iB7YcLREE70y/a0TkkY5XhXHiv6O9D0j8ulzX2jn95w6aiUucZ74Q9jTwB3rQ==');
define('LOGGED_IN_SALT',   'i+ApbnzwvCFoH3rosDAAovtHsnWe1CMwocVerRGyelC8uZUp/ayy6eOl6W2/banGm4sOq8MSSYWj/90tIQDSDA==');
define('NONCE_SALT',       'ZNJ8JlWF6shr2t6DNWait+eJBD1UXsayUZNDZ722U9znlJ8wmwWn6RdBuRZ5y8kKi7NI7d0YB+lTkj19zPcxHg==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
