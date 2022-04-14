<?php

/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link       https://aburifat.com/about
 * @since      1.0.0
 *
 * @package    Buits_Member_Application_By_Abu
 * @subpackage Buits_Member_Application_By_Abu/includes
 */

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      1.0.0
 * @package    Buits_Member_Application_By_Abu
 * @subpackage Buits_Member_Application_By_Abu/includes
 * @author     Abu Rifat Muhammed <rifat.cse4.bu@gmail.com>
 */
class Buits_Member_Application_By_Abu_i18n {


	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    1.0.0
	 */
	public function load_plugin_textdomain() {

		load_plugin_textdomain(
			'buits-member-application-by-abu',
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);

	}



}
