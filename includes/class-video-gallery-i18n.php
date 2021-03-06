<?php

/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link       wpgenius.in
 * @since      1.0.0
 *
 * @package    Video_Gallery
 * @subpackage Video_Gallery/includes
 */

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      1.0.0
 * @package    Video_Gallery
 * @subpackage Video_Gallery/includes
 * @author     Team WPGenius <mane.makarand@gmail.com>
 */
class Video_Gallery_i18n {


	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    1.0.0
	 */
	public function load_plugin_textdomain() {

		load_plugin_textdomain(
			'video-gallery',
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);

	}



}
