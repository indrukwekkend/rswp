<?php
$sage_includes = [
	'vendor/autoload.php',     // Autoload
	'lib/assets.php',          // Scripts and stylesheets
	'lib/extras.php',          // Custom functions
	'lib/posts.php',           // Custom post types
	'lib/plugins.php',         // Theme required plugins
	'lib/setup.php',           // Theme setup
	'lib/plugins.php',         // Theme plugins
	'lib/titles.php',          // Page titles
	'lib/wrapper.php',         // Theme wrapper class
	'lib/customizer.php',      // Theme customizer
];
foreach ( $sage_includes as $file ) {
	if ( ! $filepath = locate_template( $file ) ) {
		trigger_error( sprintf( __( 'Error locating %s for inclusion', 'sage' ), $file ), E_USER_ERROR );
	}
	require_once $filepath;
}
unset( $file, $filepath );
