<?php

/**
 * Fired during plugin activation
 *
 * @link       https://aburifat.com/about
 * @since      1.0.0
 *
 * @package    Buits_Member_Application_By_Abu
 * @subpackage Buits_Member_Application_By_Abu/includes
 */

/**
 * Fired during plugin activation.
 *
 * This class defines all code necessary to run during the plugin's activation.
 *
 * @since      1.0.0
 * @package    Buits_Member_Application_By_Abu
 * @subpackage Buits_Member_Application_By_Abu/includes
 * @author     Abu Rifat Muhammed <rifat.cse4.bu@gmail.com>
 */
class Buits_Member_Application_By_Abu_Activator {

	/**
	 * Short Description. (use period)
	 *
	 * Long Description.
	 *
	 * @since    1.0.0
	 */

	//Custom Code Start

	//public static function activate() {

	public function activate() {
		//Generate Dynamic table
		global $wpdb;
		if($wpdb->get_var("SHOW tables like '".$this->prefix_tmp_stu()."'")!= $this->prefix_tmp_stu()){
			$table_query="CREATE TABLE `".$this->prefix_tmp_stu()."` (
										`id` int(11) NOT NULL AUTO_INCREMENT,
										`name` varchar(100) NOT NULL,
										PRIMARY KEY (`id`)
										) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4";

			require_once (ABSPATH.'wp-admin/includes/upgrade.php');
			dbDelta($table_query);
		}
	}

	public function prefix_tmp_stu(){
		global $wpdb;
		return $wpdb->prefix."tmp_stu";
	}

	//Custom Code End
}
