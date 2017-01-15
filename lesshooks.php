<?php
define( 'LESSHOOKS_VERSION',  '0.0.1' );
define( 'LESSHOOKS_URL',  plugin_dir_url( __FILE__ ) );
define( 'LESSHOOKS_DIR',  plugin_dir_path( __FILE__ ) );

require_once( LESSHOOKS_DIR . 'lib/class-tgm-plugin-activation.php' );
require_once( LESSHOOKS_DIR . 'src/posttype.php' );
require_once( LESSHOOKS_DIR . 'src/notice.php' );
require_once( LESSHOOKS_DIR . 'src/require_plugin.php' );

/**
 * A placeholder hook to tell other plugins that Lesshooks Framework has been loaded.
*/
add_action( 'plugins_loaded', 'register_lesshooks_framework' );

function register_lesshooks_framework() {
	do_action( 'lesshooks' );
}
