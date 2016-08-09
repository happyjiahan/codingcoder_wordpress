<?php
/**
 *
 * @package    Mixr
 * @version    0.3
 * @author     Gaurav Pareek <grv@magikpress.com>
 * @copyright  Copyright (c) 2014, Gaurav Pareek
 * @author     Ruairi Phelan <rory@cyberdesigncraft.com>
 * @copyright  Copyright (c) 2013, Ruairi Phelan
 * @author     Justin Tadlock <justin@justintadlock.com>
 * @copyright  Copyright (c) 2013, Justin Tadlock

 * @link       http://magikpress.com/themes/mixr
 * @license    http://www.gnu.org/licenses/old-licenses/gpl-2.0.html
 */

/* Adds the child theme setup function to the 'after_setup_theme' hook. */
add_action( 'after_setup_theme', 'mixr_theme_setup', 11 );
add_action( 'after_setup_theme', 'mixr_unregister_default_headers', 16 );

include_once('inc/colors.php');

/**
 * Setup function.  All child themes should run their setup within this function.  The idea is to add/remove
 * filters and actions after the parent theme has been set up.  This function provides you that opportunity.
 *
 * @since  0.1
 * @access public
 * @return void
 */
function mixr_theme_setup() {

	/* Change default background color. */
	add_theme_support(
	'custom-header',
	array(
		'default-image'      => '',
		'default-text-color' => '272727',
		'default-image' => get_stylesheet_directory_uri() . '/images/headers/wood1.jpg'
	));

	add_theme_support(
	'custom-background',
	array(
		'default-color' => 'dedede',
		'default-image' => '',
	));

	/*
	 * Registers default headers for the child theme.
	 * @since 0.1.0
	 * @link http://codex.wordpress.org/Function_Reference/register_default_headers
	 */
	register_default_headers(
		array(
			'material1' => array(
				'url'           => '%2$s/images/headers/wood1.jpg',
				'thumbnail_url' => '%2$s/images/headers/wood1-thumb.jpg',
				/* Translators: Header image description. */
				'description'   => __( 'Wood1', 'mixr' )
			)
		)
	);

	/* Change primary color. */
	add_filter( 'theme_mod_color_primary', 'mixr_primary_color' );

	/* Add custom stylesheets. */
	add_action( 'wp_enqueue_scripts', 'mixr_enqueue_styles' );

}

function mixr_unregister_default_headers() {
		/**
	 * Un-Register default Parent Theme headers for the child theme.
	 * @since 0.1
	 */
  unregister_default_headers(
	  array( 'horizon', 'orange-burn', 'planets-blue', 'planet-burst', 'space-splatters' )
  );
}

/**
 * Change primary color
 *
 * @since 0.1
 * @access public
 * @param  string  $hex
 * @return string
 */
function mixr_primary_color( $color ) {
	return $color ? $color : 'D64937';
}

/**
* Loads custom stylesheets for the theme.
*
* @since  0.1
* @access public
* @return void
*/
function mixr_enqueue_styles() {
	wp_register_style('googleFonts', '//fonts.googleapis.com/css?family=PT+Sans|Bitter');
	wp_enqueue_style( 'googleFonts');
}
