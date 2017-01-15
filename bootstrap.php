<?php
/**
 * Register this version of Lesshook framework.
*/
add_filter( 'lesshooks_versions', function( $versions ) use ( $lesshook_version ) {
	$version_tag = str_replace( '.', '', $lesshook_version );
	$versions[ $version_tag ] = array(
		'version' => $lesshook_version,
		'url' => plugin_dir_url( __FILE__ ),
		'dir' => plugin_dir_path( __FILE__ ),
	);
	return $versions;
});

/**
 * Always load Lesshook framework after all other plugins has been loaded.
*/
add_action( 'plugins_loaded', function() {

	// Get all registered versions.
	$registered_versions = apply_filters( 'lesshooks_versions', array() );

	// Sort $registered_versions by key in desc order.
	krsort( $registered_versions );

	// Get the latest version
	$latest_version = $registered_versions[0];

	// Define some important constants.
	define( 'LESSHOOKS_VERSION', $latest_version['version'] );
	define( 'LESSHOOKS_URL', $latest_version['url'] );
	define( 'LESSHOOKS_DIR', $latest_version['dir'] );

	// Include plugin source and libraries.
	require_once( LESSHOOKS_DIR . 'lib/class-tgm-plugin-activation.php' );
	require_once( LESSHOOKS_DIR . 'src/posttype.php' );
	require_once( LESSHOOKS_DIR . 'src/notice.php' );
	require_once( LESSHOOKS_DIR . 'src/require_plugin.php' );

	// Call action that tells other plugins that Lesshook framework has been loaded.
	do_action( 'lesshooks' );
});
