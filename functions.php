<?php
/**
 * @package WordPress
 * @subpackage HTML5-Reset-WordPress-Theme
 * @since HTML5 Reset 2.0
 */

	// Options Framework (https://github.com/devinsays/options-framework-plugin)
	if ( !function_exists( 'optionsframework_init' ) ) {
		define( 'OPTIONS_FRAMEWORK_DIRECTORY', get_template_directory_uri() . '/_/inc/' );
		require_once dirname( __FILE__ ) . '/_/inc/options-framework.php';
	}

	// Theme Setup 
	function pauleisenach_setup() {
		load_theme_textdomain( 'pauleisenach', get_template_directory() . '/languages' );
		add_theme_support( 'automatic-feed-links' );
		add_theme_support( 'post-thumbnails' );
		add_image_size( 'quad', 305, 305, array('center','center') );

		register_post_type( 'musicforfilm',
			array(
				'labels' => array(
					'name'          => __( 'Music for Film', 'textdomain' ),
					'singular_name' => __( 'Music for Film', 'textdomain' )
				),
				'public'      => true,
				'has_archive' => true,
				'menu_icon'   => 'dashicons-format-audio',
				'hierarchical' => true,
				'menu_position' => 0,
				'supports' => array( 'title', 'custom-fields', 'thumbnail', 'post-thumbnails' )
			)
		);
		register_post_type( 'music',
			array(
				'labels' => array(
					'name'          => __( 'Music', 'textdomain' ),
					'singular_name' => __( 'Music', 'textdomain' )
				),
				'public'      => true,
				'has_archive' => true,
				'menu_icon'   => 'dashicons-format-audio',
				'hierarchical' => true,
				'menu_position' => 1,
				'supports' => array( 'title', 'custom-fields', 'thumbnail' )
			)
		);
		register_post_type( 'filmformusic',
			array(
				'labels' => array(
					'name'          => __( 'Films for Music', 'textdomain' ),
					'singular_name' => __( 'Film for Music', 'textdomain' )
				),
				'public'      => true,
				'has_archive' => true,
				'menu_icon'   => 'dashicons-video-alt3',
				'hierarchical' => true,
				'menu_position' => 2,
				'supports' => array( 'title', 'custom-fields', 'thumbnail' )
			)
		);
		
	}
	add_action( 'after_setup_theme', 'pauleisenach_setup' );

	
	function wpdocs_theme_setup() {
		

	}
	add_action( 'after_setup_theme', 'wpdocs_theme_setup' );

	// Cleanup dashboard navigation
	function remove_menus(){
		remove_menu_page( 'index.php' );				// Dashboard
		remove_menu_page( 'edit.php' );                 // Posts
		remove_menu_page( 'edit-comments.php' );        // Comments
		remove_menu_page( 'edit.php?post_type=page' );  // Pages
	}
	add_action( 'admin_menu', 'remove_menus' );

	// Scripts & Styles 
	function pauleisenach_scripts_styles() {
		global $wp_styles;

		// Load Comments
		if ( is_singular() && comments_open() && get_option( 'thread_comments' ) )
			wp_enqueue_script( 'comment-reply' );

		// Load Stylesheets
		wp_enqueue_style( 'pauleisenach-style', get_stylesheet_uri() );

		// Load IE Stylesheet.
//		wp_enqueue_style( 'pauleisenach-ie', get_template_directory_uri() . '/css/ie.css', array( 'pauleisenach-style' ), '20130213' );
//		$wp_styles->add_data( 'pauleisenach-ie', 'conditional', 'lt IE 9' );

		// Modernizr
		// This is an un-minified, complete version of Modernizr. Before you move to production, you should generate a custom build that only has the detects you need.
		// wp_enqueue_script( 'pauleisenach-modernizr', get_template_directory_uri() . '/_/js/modernizr-2.6.2.dev.js' );

	}
	add_action( 'wp_enqueue_scripts', 'pauleisenach_scripts_styles' );






//OLD STUFF BELOW


	// Load jQuery
	if ( !function_exists( 'core_mods' ) ) {
		function core_mods() {
			if ( !is_admin() ) {
				wp_deregister_script( 'jquery' );
				wp_register_script( 'jquery', ( "http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js" ), false);
				wp_enqueue_script( 'jquery' );
			}
		}
		add_action( 'wp_enqueue_scripts', 'core_mods' );
	}


	

?>
