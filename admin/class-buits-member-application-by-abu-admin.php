<?php

/**
 * The admin-specific functionality of the plugin.
 *
 * @link       https://aburifat.com/about
 * @since      1.0.0
 *
 * @package    Buits_Member_Application_By_Abu
 * @subpackage Buits_Member_Application_By_Abu/admin
 */

/**
 * The admin-specific functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the admin-specific stylesheet and JavaScript.
 *
 * @package    Buits_Member_Application_By_Abu
 * @subpackage Buits_Member_Application_By_Abu/admin
 * @author     Abu Rifat Muhammed <rifat.cse4.bu@gmail.com>
 */
class Buits_Member_Application_By_Abu_Admin {

	/**
	 * The ID of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $plugin_name    The ID of this plugin.
	 */
	private $plugin_name;

	/**
	 * The version of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $version    The current version of this plugin.
	 */
	private $version;

	/**
	 * Initialize the class and set its properties.
	 *
	 * @since    1.0.0
	 * @param      string    $plugin_name       The name of this plugin.
	 * @param      string    $version    The version of this plugin.
	 */
	public function __construct( $plugin_name, $version ) {

		$this->plugin_name = $plugin_name;
		$this->version = $version;

	}

	/**
	 * Register the stylesheets for the admin area.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_styles() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Buits_Member_Application_By_Abu_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Buits_Member_Application_By_Abu_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		//Custom Code Start

		$valid_pages=array("buits-member-applications","buits-add-new-member");
		$page=isset($_REQUEST['page'])?$_REQUEST['page']:"";

		if(in_array($page,$valid_pages)){
			wp_enqueue_style( "owt-bootstrap", BUITS_MEMBER_APPLICATION_BY_ABU_PLUGIN_URL . 'assets/css/bootstrap.min.css', array(), $this->version, 'all' );

			wp_enqueue_style( "owt-datatable", BUITS_MEMBER_APPLICATION_BY_ABU_PLUGIN_URL . 'assets/css/jquery.dataTables.min.css', array(), $this->version, 'all' );

			wp_enqueue_style( "owt-sweetalert", BUITS_MEMBER_APPLICATION_BY_ABU_PLUGIN_URL . 'assets/css/sweetalert.css', array(), $this->version, 'all' );
		}

		//wp_enqueue_style( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'css/buits-member-application-by-abu-admin.css', array(), $this->version, 'all' );


		//Custom Code End
	}

	/**
	 * Register the JavaScript for the admin area.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_scripts() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Buits_Member_Application_By_Abu_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Buits_Member_Application_By_Abu_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		//Custom Code Start

		$valid_pages=array("buits-member-applications","buits-add-new-member");
		$page=isset($_REQUEST['page'])?$_REQUEST['page']:"";
		if(in_array($page,$valid_pages)){

			wp_enqueue_script("jquery");
			wp_enqueue_script( "owt-bootstrap-js", BUITS_MEMBER_APPLICATION_BY_ABU_PLUGIN_URL . 'assets/js/bootstrap.min.js', array( 'jquery' ), $this->version, false );
			wp_enqueue_script( "owt-datatable-js", BUITS_MEMBER_APPLICATION_BY_ABU_PLUGIN_URL . 'assets/js/jquery.dataTables.min.js', array( 'jquery' ), $this->version, false );
			wp_enqueue_script( "owt-validate-js", BUITS_MEMBER_APPLICATION_BY_ABU_PLUGIN_URL . 'assets/js/jquery.validate.min.js', array( 'jquery' ), $this->version, false );
			wp_enqueue_script( "owt-sweetalert-js", BUITS_MEMBER_APPLICATION_BY_ABU_PLUGIN_URL . 'assets/js/sweetalert.min.js', array( 'jquery' ), $this->version, false );

		}


		//Custom Code End




		wp_enqueue_script( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'js/buits-member-application-by-abu-admin.js', array( 'jquery' ), $this->version, false );

	}

	//Custom Code Start

	public function member_application_menu(){
		//add_menu_page("BUITS Member Applications", "BUITS Member Applications", "manage-options", "buits-member-applications", array($this,"member_application_dashboard"));
		add_menu_page( 'BUITS Member Applications', 'BUITS Member Applications', 'manage_options', 'buits-member-applications', array($this,'member_application_dashboard'), 'dashicons-id-alt', 5 );
		add_submenu_page('buits-member-applications', 'Dashboard','Dashboard','manage_options','buits-member-applications', array($this,'member_application_dashboard'));
		add_submenu_page('buits-member-applications', 'Add New','Add New','manage_options','buits-add-new-member', array($this,'add_new_member'));

	}

	public function member_application_dashboard(){
		echo "<h3>BUITS Member Applications</h3>";
	}

	public function add_new_member(){
		ob_start();
		include_once(BUITS_MEMBER_APPLICATION_BY_ABU_PLUGIN_PATH."admin/partials/template-add-new-member.php");
		$template = ob_get_contents();
		ob_end_clean();
		echo $template;
	}

	//Custom Code End

}
