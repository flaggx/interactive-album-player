<?php

/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link       https://validmoodai.com
 * @since      1.0.0
 *
 * @package    Interactive_Album_Player
 * @subpackage Interactive_Album_Player/includes
 */

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      1.0.0
 * @package    Interactive_Album_Player
 * @subpackage Interactive_Album_Player/includes
 * @author     Andrew Mathews <andrew.mathews@validmood.com>
 */
class Interactive_Album_Player_i18n {


	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    1.0.0
	 */
	public function load_plugin_textdomain() {

		load_plugin_textdomain(
			'interactive-album-player',
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);

	}



}
