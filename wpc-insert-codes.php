<?php
/*
Plugin Name: WP Canvas - Insert Codes
Plugin URI: http://webplantmedia.com/starter-themes/wordpresscanvas/features/plugins/wpc-insert-codes/
Description: Easily insert HTML, Javascript, CSS, into the head and footer areas of your site.
Author: Chris Baldelomar
Author URI: http://webplantmedia.com/
Version: 1.0
License: GPLv2 or later
*/

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/*----------------------------------------------------------------------------*
 * Public-Facing Functionality
 *----------------------------------------------------------------------------*/

require_once( plugin_dir_path( __FILE__ ) . 'public/class-wpc-insert-codes-helper.php' );
require_once( plugin_dir_path( __FILE__ ) . 'public/class-wpc-insert-codes.php' );

add_action( 'plugins_loaded', array( 'WPC_Insert_Codes', 'get_instance' ) );

/*
 * Register hooks that are fired when the plugin is activated or deactivated.
 * When the plugin is deleted, the uninstall.php file is loaded.
 */
register_activation_hook( __FILE__, array( 'WPC_Insert_Codes', 'single_activate' ) );
// register_deactivation_hook( __FILE__, array( 'WPC_Insert_Codes', 'single_deactivate' ) );

/*----------------------------------------------------------------------------*
 * Dashboard and Administrative Functionality
 *----------------------------------------------------------------------------*/

if ( is_admin() && ( ! defined( 'DOING_AJAX' ) || ! DOING_AJAX ) ) {

	require_once( plugin_dir_path( __FILE__ ) . 'admin/class-wpc-insert-codes-admin.php' );

	add_action( 'plugins_loaded', array( 'WPC_Web_Fonts_Admin', 'get_instance' ) );
}

/*----------------------------------------------------------------------------*
 * Public Functions to be used by Themes or Plugins
 *----------------------------------------------------------------------------*/
