<?php
/*
Plugin Name: WP Canvas - Insert Code
Plugin URI: http://webplantmedia.com/starter-themes/wordpresscanvas/features/plugins/wpc-insert-code/
Description: Easily insert HTML, Javascript, CSS, into the head and footer areas of your site.
Author: Chris Baldelomar
Author URI: http://webplantmedia.com/
Version: 1.1
License: GPLv2 or later
*/

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/*----------------------------------------------------------------------------*
 * Public-Facing Functionality
 *----------------------------------------------------------------------------*/

require_once( plugin_dir_path( __FILE__ ) . 'public/class-helper.php' );
require_once( plugin_dir_path( __FILE__ ) . 'public/class-init.php' );

add_action( 'plugins_loaded', array( 'WPC_Insert_Code', 'get_instance' ) );

/*
 * Register hooks that are fired when the plugin is activated or deactivated.
 * When the plugin is deleted, the uninstall.php file is loaded.
 */
// register_activation_hook( __FILE__, array( 'WPC_Insert_Code', 'single_activate' ) );
// register_deactivation_hook( __FILE__, array( 'WPC_Insert_Code', 'single_deactivate' ) );

/*----------------------------------------------------------------------------*
 * Dashboard and Administrative Functionality
 *----------------------------------------------------------------------------*/

if ( is_admin() && ( ! defined( 'DOING_AJAX' ) || ! DOING_AJAX ) ) {

	require_once( plugin_dir_path( __FILE__ ) . 'admin/class-admin.php' );

	add_action( 'plugins_loaded', array( 'WPC_Insert_Code_Admin', 'get_instance' ) );
}

/*----------------------------------------------------------------------------*
 * Public Functions to be used by Themes or Plugins
 *----------------------------------------------------------------------------*/
