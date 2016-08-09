<?php

/******* FUNTION TO ADD CSS CLASS TO BODY *********/
function leadsurf_lite_add_class( $classes ) {
	if ( 'page' == get_option( 'show_on_front' ) && ( '' != get_option( 'page_for_posts' ) ) && is_front_page() ) {
		$classes[] = 'front-page';
	}
	return $classes;
}
add_filter( 'body_class','leadsurf_lite_add_class' );


/***************** EXCERPT LENGTH ************/
function leadsurf_lite_excerpt_length($length) {
	return 50;
}
add_filter('excerpt_length', 'leadsurf_lite_excerpt_length');


/***************** READ MORE ****************/
function leadsurf_lite_excerpt_more( $more ) {
	return '...';
}
add_filter('excerpt_more', 'leadsurf_lite_excerpt_more');

/************* CUSTOM PAGE TITLE ***********/
add_filter( 'wp_title', 'leadsurf_lite_title' );
function leadsurf_lite_title($title)
{
	$leadsurf_title = $title;
	if ( is_home() && !is_front_page() ) {
		$leadsurf_title .= get_bloginfo('name');
	}

	if ( is_front_page() ){
		$leadsurf_title .=  get_bloginfo('name');
		$leadsurf_title .= ' | '; 
		$leadsurf_title .= get_bloginfo('description');
	}

	if ( is_search() ) {
		$leadsurf_title .=  get_bloginfo('name');
	}

	if ( is_author() ) { 
		global $wp_query;
		$curauth = $wp_query->get_queried_object();	
		$leadsurf_title .= __('Author: ','leadsurf-lite');
		$leadsurf_title .= $curauth->display_name;
		$leadsurf_title .= ' | ';
		$leadsurf_title .= get_bloginfo('name');
	}

	if ( is_single() ) {
		$leadsurf_title .= get_bloginfo('name');
	}

	if ( is_page() && !is_front_page() ) {
		$leadsurf_title .= get_bloginfo('name');
	}

	if ( is_category() ) {
		$leadsurf_title .= get_bloginfo('name');
	}

	if ( is_year() ) { 
		$leadsurf_title .= get_bloginfo('name');
	}
	
	if ( is_month() ) {
		$leadsurf_title .= get_bloginfo('name');
	}

	if ( is_day() ) {
		$leadsurf_title .= get_bloginfo('name');
	}

	if (function_exists('is_tag')) { 
		if ( is_tag() ) {
			$leadsurf_title .= get_bloginfo('name');
		}
		if ( is_404() ) {
			$leadsurf_title .= get_bloginfo('name');
		}					
	}
	
	return $leadsurf_title;
}
