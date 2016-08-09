<?php
/**
 *  functions and definitions.
 *
 * Sets up the theme and provides some helper functions, which are used in the
 * theme as custom template tags. Others are attached to action and filter
 * hooks in WordPress to change core functionality.
 *
 * When using a child theme (see http://codex.wordpress.org/Theme_Development
 * and http://codex.wordpress.org/Child_Themes), you can override certain
 * functions (those wrapped in a function_exists() call) by defining them first
 * in your child theme's functions.php file. The child theme's functions.php
 * file is included before the parent theme's file, so the child theme
 * functions would be used.
 *
 * Functions that are not pluggable (not wrapped in function_exists()) are
 * instead attached to a filter or action hook.
 *
 * For more information on hooks, actions, and filters,
 * see http://codex.wordpress.org/Plugin_API
 *
 */

/**
 * Sets up theme defaults and registers the various WordPress features that
 *  supports.
 *
 * @uses load_theme_textdomain() For translation/localization support.
 * @uses add_editor_style() To add Visual Editor stylesheets.
 * @uses add_theme_support() To add support for automatic feed links, post
 * formats, and post thumbnails.
 * @uses register_nav_menu() To add support for a navigation menu.
 * @uses set_post_thumbnail_size() To set a custom post thumbnail size.
 *
*/
function leadsurf_lite_theme_setup() {
	/*
	 * Makes  available for translation.
	 *
	 * Translations can be added to the /languages/ directory.
	 * If you're building a theme based on Twenty Thirteen, use a find and
	 * replace to change 'leadsurf-lite' to the name of your theme in all
	 * template files.
	 */
	load_theme_textdomain( 'leadsurf-lite', get_template_directory() . '/languages' );
	 
	// This theme styles the visual editor with editor-style.css to match the theme style.
	add_editor_style();

	add_theme_support( 'title-tag' );

	// This theme allows users to set a custom header.
	add_theme_support( 'custom-header', array( 'flex-width' => true, 'width' => 1600, 'flex-height' => true, 'height' => 750, 'default-image' => get_template_directory_uri() . '/images/slider-bg.jpg') );

	// This theme allows users to set a custom background.
	add_theme_support( 'custom-background', apply_filters( 'fullscreen_lite_custom_background_args', array('default-color' => 'f5f5f5', ) ) );

	// Adds RSS feed links to <head> for posts and comments.
	add_theme_support( 'automatic-feed-links' );

	/*
	 * This theme uses a custom image size for featured images, displayed on
	 * "standard" posts and pages.
	 */
	add_theme_support('post-thumbnails');

	set_post_thumbnail_size( 850, 400, true );
	add_image_size( 'leadsurf-lite-standardimg',850,400,true);  //standard size

	/**
	* SETS UP THE CONTENT WIDTH VALUE BASED ON THE THEME'S DESIGN.
	*/
	global $content_width;
	if ( ! isset( $content_width ) ){
	      $content_width = 900;
	}
		
	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'header' => __( 'Main Navigation', 'leadsurf-lite' ),
	));
}
add_action( 'after_setup_theme', 'leadsurf_lite_theme_setup' ); 

/**
 * REGISTERS WIDGET AREAS
 */
function leadsurf_lite_widgets_init() {
	register_sidebar(array(
		'name'          => __( 'Page Sidebar', 'leadsurf-lite' ),
		'id'            => 'page-sidebar',
		'before_widget' => '<li id="%1$s" class="leadsurf-container %2$s">',
		'after_widget' => '</li>',
		'before_title' => '<h3 class="leadsurf-title">',
		'after_title' => '</h3>',
	));
	register_sidebar(array(
		'name'          => __( 'Blog Sidebar', 'leadsurf-lite' ),
		'id'            => 'blog-sidebar',
		'before_widget' => '<li id="%1$s" class="leadsurf-container %2$s">',
		'after_widget' => '</li>',
		'before_title' => '<h3 class="leadsurf-title">',
		'after_title' => '</h3>',
	));
}
add_action( 'widgets_init', 'leadsurf_lite_widgets_init' );


/**
 * Add Customizer 
 */
require get_template_directory() . '/includes/customizer.php';
/**
 * Add Customizer 
 */
require_once(get_template_directory() . '/SketchBoard/functions/admin-init.php');
/**
 * Add Customizer 
 */
require_once(get_template_directory() . '/includes/sketchtheme-upsell.php');