<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              https://aburifat.com/about
 * @since             1.0.0
 * @package           Buits_Member_Application_By_Abu
 *
 * @wordpress-plugin
 * Plugin Name:       BUITS Member Application by Abu Rifat
 * Plugin URI:        https://aburifat.com/wordpress/custom-plugins/buits-member-application
 * Description:       This is a short description of what the plugin does. It's displayed in the WordPress admin area.
 * Version:           1.0.0
 * Author:            Abu Rifat Muhammed
 * Author URI:        https://aburifat.com/about
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       buits-member-application-by-abu
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * Currently plugin version.
 * Start at version 1.0.0 and use SemVer - https://semver.org
 * Rename this for your plugin and update it as you release new versions.
 */
define( 'BUITS_MEMBER_APPLICATION_BY_ABU_VERSION', '1.0.0' );

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-buits-member-application-by-abu-activator.php
 */
function activate_buits_member_application_by_abu() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-buits-member-application-by-abu-activator.php';
	
	//Custom Code Start

	//Buits_Member_Application_By_Abu_Activator::activate();
	$activator = new Buits_Member_Application_By_Abu_Activator();
	$activator->activate();
	
	//Custom Code End
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-buits-member-application-by-abu-deactivator.php
 */
function deactivate_buits_member_application_by_abu() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-buits-member-application-by-abu-deactivator.php';
	Buits_Member_Application_By_Abu_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_buits_member_application_by_abu' );
register_deactivation_hook( __FILE__, 'deactivate_buits_member_application_by_abu' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-buits-member-application-by-abu.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_buits_member_application_by_abu() {

	$plugin = new Buits_Member_Application_By_Abu();
	$plugin->run();

}
run_buits_member_application_by_abu();
