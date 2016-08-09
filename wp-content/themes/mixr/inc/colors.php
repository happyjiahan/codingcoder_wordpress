<?php

/**
 * Callback for 'wp_head' that outputs the CSS for custom colours.
 *
 * @since  0.3
 * @access public
 * @return void
 */
function mixr_wp_head_callback() {

	$stylesheet = get_stylesheet();

	/* Get the cached style. */
	$style = wp_cache_get( "{$stylesheet}_custom_colors_2" );

	/* If the style is available, output it and return. */
	if ( !empty( $style ) ) {
		echo $style;
		return;
	}

	$style = mixr_get_primary_styles();

	/* Put the final style output together. */
	$style = "\n" . '<style type="text/css" id="custom-colors-css-2">' . trim( $style ) . '</style>' . "\n";

	/* Cache the style, so we don't have to process this on each page load. */
	wp_cache_set( "{$stylesheet}_custom_colors_2", $style );

	/* Output the custom style. */
	echo $style;
}

/**
 * Formats the primary styles for output.
 *
 * @since  0.3
 * @access public
 * @return string
 */
function mixr_get_primary_styles() {

	$style = '';

	$hex = get_theme_mod( 'color_primary', '' );
	$rgb = join( ', ', hybrid_hex_to_rgb( $hex ) );

  /* Background color. */
	$style .= ".audio-shortcode-wrap,
            .media-shortcode-extend .media-info,
            .media-info-toggle,
            .entry-content .media-info-toggle,
            .media-info-toggle:hover,
            .media-info-toggle:focus,
            .wp-audio-shortcode.mejs-container,
            .mejs-controls,
            .mejs-volume-button .mejs-volume-slider,
            .mejs-overlay-play .mejs-overlay-button:after,
            .mejs-time-rail .mejs-time-float,
            .wp-playlist-dark,
            #menu-primary li li a:hover,
          	#menu-secondary li li a:hover,
            #menu-primary ul ul li a:hover,
            #menu-secondary ul ul li a:hover,
            #menu-primary ul ul li a:focus,
            #menu-secondary ul ul li a:focus,
						.widget-title {
            	background-color: #{$hex};
            } ";

  $style .= "@media screen and (max-width: 799px) {
                #menu-primary li.current-menu-item > a,
              	#menu-secondary li.current-menu-item > a {
                  background-color: #{$hex};
                } }";

	return str_replace( array( "\r", "\n", "\t" ), '', $style );
}


/**
 * Deletes the cached style CSS that's output into the header.
 *
 * @since  0.3
 * @access public
 * @return void
 */
function mixr_cache_delete() {
	wp_cache_delete( get_stylesheet() . '_custom_colors_2' );
}


/* Output CSS into <head>. */
add_action( 'wp_head', 'mixr_wp_head_callback' );

/* Delete the cached data for this feature. */
add_action( 'update_option_theme_mods_' . get_stylesheet(), 'mixr_cache_delete' );

/* Visual editor colors */
function mixr_customizer_live_preview() {
	wp_enqueue_script( 'mixr-themecustomizer', get_stylesheet_directory_uri().'/js/theme-customizer.js', array( 'jquery','customize-preview' )	);
}
add_action( 'customize_preview_init', 'mixr_customizer_live_preview' );
