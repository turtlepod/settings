<?php
/**
 * Plugin Name: Settings Example
 * Version: 1.0.0
 * Author: David Chandra Purnama
 * Author URI: http://shellcreeper.com/
 * License: GPLv2 or later
 * License URI: http://www.gnu.org/licenses/gpl-2.0.txt
 *
 * @copyright Copyright (c) 2017, Genbu Media
**/

// Library need to be loaded in admin_menu or earlier.
add_action( 'admin_menu', function() {

	// Load library.
	$path = trailingslashit( plugin_dir_path( __FILE__ ) );
	require_once( $path . 'library/settings-lib.php' );

	// Register menu.
	$page = add_menu_page( 
		$page_title = 'Settings Example',
		$menu_title = 'Settings Example',
		$capability = 'manage_options',
		$menu_slug  = 'settings-example', 
		$function   = '',
		$icon_url   = '',
		$position   = 1
	);
	// Use our library in our settings.
	$settings_lib = new XXX_Settings( $page );


} );









