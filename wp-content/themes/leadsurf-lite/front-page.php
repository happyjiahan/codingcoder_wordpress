<?php if ( 'page' == get_option( 'show_on_front' ) ) {

	get_header(); 

	get_template_part( 'includes/front', 'featured-boxes-section' );

	get_template_part( 'includes/front', 'about-section' ); 

	get_template_part( 'includes/front', 'editor-content' ); 

	get_footer(); 

} else {

	include( get_home_template() );
	
} ?>