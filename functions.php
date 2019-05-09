<?php 
	add_action( 'after_setup_theme', 'register_my_menu' );

	function register_my_menu() {
		register_nav_menu( 'primary', __( 'Primary Menu', 'theme-slug' ) );
		register_nav_menu( 'footerNav', __( 'Footer Menu', 'theme-slug' ) );
	}


	if (function_exists('acf_add_options_page')) {
		acf_add_options_page();
		acf_set_options_page_title('HyperFit');
		acf_add_options_sub_page('Company Info');
		acf_add_options_sub_page('Our Practice Element');
		acf_add_options_sub_page('Testimonials');
		acf_add_options_sub_page('Pre Nav bar');
	}




	// changes permissions for options page, allows lower-level user access to options pages
	if( function_exists('acf_set_options_page_capability') ) {
	    acf_set_options_page_capability( 'manage_options' );
	}

	add_theme_support( 'hero-images', array(
		'width' => 1920,
		'height' => 1080
	) );

	add_image_size( 'hero-image size', 1920, 1080 );
	
	// admin footer message, shown in bottom left on all screens
	function add_admin_footer() {
	   echo '<span id="footer-thankyou">Wordpress Theme by <a href="http://www.viainnovation.com/">Via Innovation</a>.</span>';
	}
	add_filter('admin_footer_text', 'add_admin_footer');


		// custom post types
	add_action('init', 'events_type_register');
	function events_type_register() {
		$newsLabels = array(
				'name' => 'Services',
				'singular_name' => 'Services',
				'add_new' => 'New Service',
				'add_new_item' => 'Add New Services',
				'edit_item' => 'Edit Services',
				'new_item' => 'New Services',
				'view_item' => 'View Services',
				'search_items' => 'Search Services',
				'not_found' => 'Found No Services',
				'not_found_in_trash' => 'Nothing in Trash',
				'parent_item_colon' => ''
		);
		$newsarg = array(
				'labels' => $newsLabels,
				'public' => true,
				'publicly_queryable' => true,
				'show_ui' => true,
				'query_var' => true,
				'menu_icon' => 'dashicons-calendar',
				'rewrite' => true,
				'capability_type' => 'post',
				'hierarchical' => true,
				'taxonomies'  => array( 'custom_taxonomies' ),
				'menu_position' => 4,
				'supports' => array('title','editor','thumbnail', 'custom-fields')
			);
		register_post_type( 'services' , $newsarg );
	}

?>