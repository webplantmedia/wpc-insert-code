<?php
/**
 * WPC Web Fonts.
 *
 * @package		WPCWF_Helper
 * @author		Chris Baldelomar <chris@webplantmedia.com>
 * @license		GPL-2.0+
 * @link		http://webplantmedia.com
 * @copyright 2014 Chris Baldelomar
 */

/**
 * Plugin class. This class should ideally be used to work with the
 * administrative side of the WordPress site.
 *
 * If you're interested in introducing public-facing
 * functionality, then refer to `class-plugin-name.php`
 *
 * @package WPCWF_Helper
 * @author	Chris Baldelomar <chris@webplantmedia.com>
 */
class WPC_Insert_Codes_Helper {
	/**
	 * Instance of this class.
	 *
	 * @since	 1.0.0
	 *
	 * @var		 object
	 */
	protected static $instance = null;

	/**
	 * Initialize the plugin by loading admin scripts & styles and adding a
	 * settings page and menu.
	 *
	 * @since		1.0.0
	 */
	private function __construct() {
	}
	/**
	 * Return an instance of this class.
	 *
	 * @since		1.0.0
	 *
	 * @return		object	A single instance of this class.
	 */
	public static function get_instance() {

		// If the single instance hasn't been set, set it now.
		if ( null == self::$instance ) {
			self::$instance = new self;
		}

		return self::$instance;
	}

	/**
	 * Test string to array in theme supports
	 *
	 * @since 3.9
	 * @access public
	 *
	 * @param string $section
	 * @return bool
	 */
	public function test_theme_support_for_insert( $section ) {
		if ( current_theme_supports( $this->plugin_slug ) ) {
			$supports = get_theme_support( $this->plugin_slug );
			if ( isset( $supports[0] ) && is_array( $supports[0] ) ) {
				if ( in_array( $section, $supports[0] ) ) {
					return true;
				}
			}
		}

		return false;
	}
}
