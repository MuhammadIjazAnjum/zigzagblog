<?php

/**
 * Creating constant for the theme relative path.
 * @since 0.0.1
 */
if ( ! defined( 'ZIGZAGBLOG_DIR_URI' ) ) {
	define( 'ZIGZAGBLOG_DIR_URI', get_template_directory_uri() . '/' );
}

if ( version_compare( $GLOBALS['wp_version'], '5.1.1', '<' ) ) {
	require get_template_directory() . '/inc/version-compat.php';
	return;
}

if(!function_exists('zigzagblog_setup')){

	function zigzagblog_setup(){
	load_theme_textdomain('zigzagblog', get_template_directory() . '/languages');
	
	
		
		$defaults = array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		);
	add_theme_support( 'html5', $defaults );
	
	add_theme_support( 'automatic-feed-links' );
	add_theme_support( 'title-tag' );
	add_theme_support( 'post-thumbnails' );
	// Set the default content width.
	if ( ! isset( $content_width ) ) {
		$GLOBALS['content_width'] = 900;
	} 
	register_nav_menus( array(
		'top-menu'    => __( 'Header Menu', 'zigzagblog' ),
	) );
	// Enable support for Customer Header.
	$args = array(
		'default-text-color' => 'fff',
		'flex-width'         => false,
		'flex-height'        => false,
		'header-text'        => true,
		'uploads'            => false,
		'wp-head-callback'      => 'zigzagblog_header_cb',
	);
	add_theme_support( 'custom-header', $args );
	add_theme_support( 'html5', array(
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );
	
	// Enable support for Custom Logo.
	add_theme_support( 'custom-logo',
	 array(
		'width'       => 150,
		'height'      => 63,
		'flex-width'  => false,
		'flex-height'  => false,
		'header-text' => array( 'site-title', 'site-description' ),
	) );
		$defaults = array(
		'default-color'          => 'ffffff',
		'wp-head-callback'       => '_custom_background_cb',
		'admin-head-callback'    => '',
		'admin-preview-callback' => ''
		);
	add_theme_support( 'custom-background', $defaults );
	
	// Editor Style.
	add_editor_style(  '/css/editor-style.css'  );
	}
	add_action('after_setup_theme','zigzagblog_setup');
}
	// /**************************************
	// zigzagblog footer sidebbar widgets
	// ***************************************/
	function zigzagblog_register_sidebars() {
		// Footer Side Bar 
		register_sidebar(array(
			'name'			=>'Footer Sidebar',
			'id'			=>'footer',
			'before_widget'	=>'<div class="row"> <div class="col-md-4 mb-2 px-1">',
			'after_widget'	=>'</div> </div>',
			'before_title'	=>'<h3 class="text-uppercase text-center">',
			'after_title' 	=>'</h3>',
		));
	}
	add_action( 'widgets_init', 'zigzagblog_register_sidebars' );
	//Custom Header Text
	function zigzagblog_header_cb(){
    //Header Text color
	  $zigzazblog_header_textcolor=get_header_textcolor();
	  echo '<style type="text/css">';
	    if (!display_header_text()) {
	    	echo '.logo-detail,.logo-detail a,.site-title,.site-title a,.site-description,.site-description a{position:absolute; clip:rect(1px 1px 1px 1px)}';
	    }else{
	    	echo '.site-title,.site-title a,.site-description,.site-description a {color:#'. esc_attr($zigzazblog_header_textcolor).'}';
	    }
	   echo '</style>';
   }
  add_action('wp-head','zigzagblog_header_cb');
	// /**************************************
	// 		enqueue styles and scripts
	// ***************************************/
	function zigzagblog_styles_scripts() {
		//zigzagblog stylesheet
		wp_enqueue_style( 'zigzagblog-style', get_stylesheet_uri(), false, '4.0.7' );
		wp_enqueue_style( 'zigzagblog-google-font', 'https://fonts.googleapis.com/css?family=Lato:400,700|Playfair+Display:400,700,900', false );
		wp_enqueue_style( 'google-font-oswald', 'https://fonts.googleapis.com/css?family=Oswald', false );
		wp_enqueue_style( 'google-font-lora', 'https://fonts.googleapis.com/css?family=Lora', false );
		wp_enqueue_style( 'zigzagblog-style-css', ZIGZAGBLOG_DIR_URI .'css/zigzagblog-style.css' ,array(), '1.0') ;
		wp_enqueue_style( 'zigzagblog-color-style', ZIGZAGBLOG_DIR_URI .'css/colors.css' ,array(), '1.0') ;
		wp_enqueue_style( 'font-awesome', ZIGZAGBLOG_DIR_URI . 'css/font-awesome/css/font-awesome.min.css', false, '4.7.0' );
		//zigzagblog color scheeme
		wp_enqueue_script( 'zigzagblog-script-js', ZIGZAGBLOG_DIR_URI . 'js/main.js', array('jquery'), '1.1.7' );
	}
	add_action( 'wp_enqueue_scripts', 'zigzagblog_styles_scripts' );

	require_once( trailingslashit( get_template_directory() ) . '/inc/zigzagblog-customizer.php' );
	require_once( trailingslashit( get_template_directory() ) . '/inc/comments-functions.php' );
	