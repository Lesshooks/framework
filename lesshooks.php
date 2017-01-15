<?php
// Set current version of Lesshooks Framework.
$lesshook_version = '0.0.1';

// Set minimum required PHP version.
$lesshook_minimum_php = '5.3';

// Check php version and load bootstrap.php if conditions is met.
if ( version_compare( PHP_VERSION, $lesshook_minimum_php, '<' ) ) {
	add_action( 'admin_notices', create_function( '', "echo '<div class=\"error\"><p>" . __( 'A recently activated plugin requires PHP 5.3 to function properly. Please upgrade PHP or deactivate it.', 'plugin-name' ) . "</p></div>';" ) );
	return;
} else {
	require_once( plugin_dir_path( __FILE__ ) . 'bootstrap.php' );
}
