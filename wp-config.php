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
 */

require_once __DIR__ . '/vendor/autoload.php';

if ( is_readable( './.config/production.php' ) ) {
	require_once( '/.config/production.php ' );
} else {
	require_once( './.config/local.php' );
}

if ( ! defined( 'JBR_IS_LOCAL' ) ) {
	define( 'JBR_IS_LOCAL', false );
}

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/wordpress/' );
}

if ( ! defined( 'WP_CONTENT_DIR' ) ) {
	define( 'WP_CONTENT_DIR', __DIR__ . '/content' );
}

if ( ! defined( 'WP_CONTENT_URL' ) ) {
	$protocol = ! empty( $_SERVER['HTTPS'] ) ? 'https' : 'http';
	define( 'WP_CONTENT_URL', $protocol . '://' . $_SERVER['HTTP_HOST'] . '/content' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
