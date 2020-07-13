<?php
/**
 * Team profiles
 *
 * Create a "Meet our team" page in WordPress using 
 * custom post types, taxonomies, and Advanced Custom
 * Fields
 */
if ( !class_exists('TeamProfiles') ):

class TeamProfiles {
	/**
	 * Initialize & hook into WP
	 */
	public function __construct() {
		add_action( 'init', array($this, 'register_post_type'), 0 );
		add_action( 'init', array($this, 'register_taxonomy'), 0 );
		add_action( 'wp_enqueue_scripts', array($this, 'load_styles'), 101 );
		add_action( 'admin_notices', array($this, 'admin_notice') );
		add_action( 'after_setup_theme', array($this, 'after_setup_theme') );
	}
	
	
	/**
	 * Dependencies check
	 *
	 * Check to make sure we have the required plugin(s) 
	 * installed.
	 */
	public function dependencies_check() {
	   return ( is_plugin_active('advanced-custom-fields/acf.php') ) ? true : false;
	}
	
	
	/**
	 * Load CSS for template-team.php
	 */
	public function load_styles() {
		if ( is_page_template('template-team.php') )
	   	wp_enqueue_style( 'team-template', get_stylesheet_directory_uri() . '/Team-master/team.css' );
	}
	
	
	/**
	 * Theme setup
	 *
	 * Create a custom thumbnail size for our team avatars
	 */
	public function after_setup_theme() {
	  add_image_size('team-thumb', 100, 100, true); // 100px x 100px with hard crop enabled
	}
	
	
	/**
	 * Dependencies notifications
	 *
	 * Required plugin isn't installed, notify user
	 */
	public function admin_notice() {
	
		// Check for required plugins
		if ( $this->dependencies_check() )
			return;
		
		// Display message
		$install_link = admin_url('plugin-install.php?tab=search&type=term&s=Advanced+Custom+Fields&plugin-search-input=Search+Plugins');
		$html =  '<div class="error"><p>';
		$html .= '<strong>Team Profiles</strong> needs the <a href="http://www.advancedcustomfields.com/" target="_blank">Advanced Custom Fields</a> plugin to work. Please <a href="' . $install_link . '">install it now</a>.';
		$html .= '</p></div>';
		
		echo $html;
	}


	/**
	 * Register post type
	 */
	public function register_post_type() {
	   
	   // Labels
		$labels = array(
			'name' => _x("Team", "post type general name"),
			'singular_name' => _x("Team", "post type singular name"),
			'menu_name' => 'Team Profiles',
			'add_new' => _x("Add New", "team item"),
			'add_new_item' => __("Add New Profile"),
			'edit_item' => __("Edit Profile"),
			'new_item' => __("New Profile"),
			'view_item' => __("View Profile"),
			'search_items' => __("Search Profiles"),
			'not_found' =>  __("No Profiles Found"),
			'not_found_in_trash' => __("No Profiles Found in Trash"),
			'parent_item_colon' => ''
		);
		
		// Register post type
		register_post_type('team' , array(
			'labels' => $labels,
			'public' => true,
			'has_archive' => false,
			'menu_icon' => get_stylesheet_directory_uri() . '/lib/TeamProfiles/team-icon.png',
			'rewrite' => false,
			'supports' => array('title', 'editor', 'thumbnail')
		) );
	}
	
	
	/**
	 * Register 'department' taxonomy
	 */
	public function register_taxonomy() {
		
		// Labels
		$singular = 'Department';
		$plural = 'Departments';
		$labels = array(
			'name' => _x( $plural, "taxonomy general name"),
			'singular_name' => _x( $singular, "taxonomy singular name"),
			'search_items' =>  __("Search $singular"),
			'all_items' => __("All $singular"),
			'parent_item' => __("Parent $singular"),
			'parent_item_colon' => __("Parent $singular:"),
			'edit_item' => __("Edit $singular"),
			'update_item' => __("Update $singular"),
			'add_new_item' => __("Add New $singular"),
			'new_item_name' => __("New $singular Name"),
		);

		// Register and attach to 'team' post type
		register_taxonomy( strtolower($singular), 'team', array(
			'public' => true,
			'show_ui' => true,
			'show_in_nav_menus' => true,
			'hierarchical' => true,
			'query_var' => true,
			'rewrite' => false,
			'labels' => $labels
		) );
	}
}

$TeamProfiles = new TeamProfiles();

endif;