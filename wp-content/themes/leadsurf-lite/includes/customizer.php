<?php

function leadsurf_lite_customize_register( $wp_customize ) {

	$wp_customize->remove_control('header_textcolor');
	
	// ====================================
	// = Background Image Size for custom-background
	// ====================================
	$wp_customize->add_setting( 'leadsurf_background_size', array(
		'default'       	=> 'cover',
		'theme_supports'	=> 'custom-background',
		'sanitize_callback' => 'leadsurf_lite_sanitize_textarea',
	));
	$wp_customize->add_control('leadsurf_background_size', array(
		'section'		=> 'background_image',
		'label' 		=> __('Background Image Size','leadsurf-lite'),
	));
	// ====================================
	// = Avis Lite Theme Pannel
	// ====================================
	$wp_customize->add_panel( 'sketchthemes', array(
		'title' 	=> __( 'Home Page Options','leadsurf-lite'),
		'description' => __('Configute your theme home page from here. Contexual help is provided for each setting. Check readme.txt file for FAQ\'s or contact Them Author for any other queries.','leadsurf-lite'),
		'priority' 	=> 1,
		'active_callback' => 'is_front_page'
	) );
	// ====================================
	// = Avis Lite Theme Sections
	// ====================================
	$wp_customize->add_section( 'home_ntfy_section' , array(
		'title' 		=> __('Notify Button','leadsurf-lite'),
		'priority'		=> 1,
		'panel'	 => 'sketchthemes'
		
	) );
	$wp_customize->add_section( 'home_featured_section' , array(
		'title' 		=> __('Home Featured Box','leadsurf-lite'),
		'priority'		=> 2,
		'panel'	 => 'sketchthemes'
		
	) );
	$wp_customize->add_section( 'home_parallax_section' , array(
		'title' 		=> __('Home Parallax Settings','leadsurf-lite'),
		'priority'		=> 3,
		'panel'	 => 'sketchthemes'
		
	) );
	$wp_customize->add_section( 'home_blog_section' , array(
		'title' 		=> __('Home Blog Settings','leadsurf-lite'),
		'description' => __('Use WordPress\'s "Setting > Reading > Blog pages show at most" option to control the no. of Blogs', 'leadsurf-lite'),
		'priority'		=> 4,
		'panel'	 => 'sketchthemes'
		
	) );
	$wp_customize->add_section( 'blog_page_section' , array(
		'title' 		=> __('Blog Page Settings','leadsurf-lite'),
		'priority' 		=> 2,
	) );
	$wp_customize->add_section( 'footer_section' , array(
		'title' 		=> __('Footer Settings','leadsurf-lite'),
		'priority' 		=> 3,
	) );

	// ====================================
	// = General Settings Sections
	// ====================================
	$wp_customize->add_setting( 'leadsurf_pri_color', array(
		'default'           => '#ee2841' ,
		'sanitize_callback' => 'sanitize_hex_color',
	) );
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'leadsurf_pri_color', array(
		'priority' 		=> 1,
		'section'     	=> 'colors',
		'label'       	=> __( 'Primary Color Scheme', 'leadsurf-lite' ),
	) ) );
	$wp_customize->add_setting( 'leadsurf_sec_color', array(
		'default'           => '#FFD600',
		'sanitize_callback' => 'sanitize_hex_color',
	) );
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'leadsurf_sec_color', array(
		'priority' 		=> 2,
		'section'     	=> 'colors',
		'label'       	=> __( 'Secondary Color Scheme', 'leadsurf-lite' ),
	) ) );
	$wp_customize->add_setting( 'leadsurf_breadbg_color', array(
		'default'           => '#1C2534',
		'sanitize_callback' => 'sanitize_hex_color',
	) );
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'leadsurf_breadbg_color', array(
		'priority' 		=> 3,
		'section'     	=> 'colors',
		'label'       	=> __( 'Breadcrumb Color Scheme', 'leadsurf-lite' ),
	) ) );

	// ====================================
	// = Header Settings Sections
	// ====================================
	$wp_customize->add_setting( 'leadsurf_logo_img', array(
		'default'           => '',
		'sanitize_callback' => 'esc_url_raw',
	) );
	$wp_customize->add_control(  new WP_Customize_Image_Control( $wp_customize, 'leadsurf_logo_img', array(
		'priority'	=> 1,
		'section' 		=> 'title_tagline',
		'label' 		=> __( 'Logo Image', 'leadsurf-lite' ),
		'description' 	=> __('Uplaod your beautiful logo image from here. Maximum Recomended size 370x68 px.', 'leadsurf-lite' ),
	) ) );
	$wp_customize->add_setting( 'leadsurf_ntfy_img', array(
		'default'           => get_template_directory_uri().'/images/LeadSurf_iphone.png',
		'sanitize_callback' => 'esc_url_raw',
	) );
	$wp_customize->add_control(  new WP_Customize_Image_Control( $wp_customize, 'leadsurf_ntfy_img', array(
		'section' 		=> 'home_ntfy_section',
		'label' 		=> __( 'Notification Image', 'leadsurf-lite' ),
		'description' 	=> __('Uplaod your notification image from here. Recomended size 325x460 px.', 'leadsurf-lite' ),
	) ) );
	$wp_customize->add_setting( 'leadsurf_ntfy_txt', array(
		'default'           => __('Notify Me', 'leadsurf-lite'),
		'sanitize_callback' => 'leadsurf_lite_sanitize_textarea',
	) );
	$wp_customize->add_control( 'leadsurf_ntfy_txt', array(
		'section'  		=> 'home_ntfy_section',
		'label'    		=> __( 'Button Text', 'leadsurf-lite' ),
	) );
	$wp_customize->add_setting( 'leadsurf_ntfy_link', array(
		'default'           => '#',
		'sanitize_callback' => 'esc_url_raw',
	) );
	$wp_customize->add_control( 'leadsurf_ntfy_link', array(
		'type'     		=> 'url',
		'section'  		=> 'home_ntfy_section',
		'label'    		=> __( 'Button Link', 'leadsurf-lite' ),
	) );
	

	// ====================================
	// = Home Page Settings Sections
	// ====================================
	$wp_customize->add_setting( 'leadsurf_home_blog_sec', array(
		'default'           => 'on',
		'sanitize_callback' => 'leadsurf_lite_sanitize_on_off',
	) );
	$wp_customize->add_control( 'leadsurf_home_blog_sec', array(
		'type' => 'radio',
		'section' => 'home_blog_section',
		'label' => __( 'Blog Section ON/OFF', 'leadsurf-lite' ),
		'description' => __('Enable/Disable the Front Page Blog Section.', 'leadsurf-lite' ),
		'choices' => array(
			'on' => __('ON', 'leadsurf-lite' ),
			'off'=> __('OFF', 'leadsurf-lite' ),
		),
	) );
	$wp_customize->add_setting( 'leadsurf_home_blog_title', array(
		'default'        => __('Latest Posts', 'leadsurf-lite'),
		'sanitize_callback' => 'leadsurf_lite_sanitize_textarea',
	));
	$wp_customize->add_control('leadsurf_home_blog_title', array(
		'section' => 'home_blog_section',
		'label' => __('Front Page Blog Section Title','leadsurf-lite'),
	));

	
	// Feature Section
	$wp_customize->add_setting( 'leadsurf_home_feature_sec_title', array(
		'default'        => __('AMAZING FEATURES', 'leadsurf-lite'),
		'sanitize_callback' => 'leadsurf_lite_sanitize_textarea',
	));
	$wp_customize->add_control('leadsurf_home_feature_sec_title', array(
		'section' => 'home_featured_section',
		'label' => __('Feature Section Heading','leadsurf-lite'),
	));
	// Fist Feature Section
	$wp_customize->add_setting( 'leadsurf_home_first_feature_title', array(
		'default'        => __('FEATURE TITLE', 'leadsurf-lite'),
		'sanitize_callback' => 'leadsurf_lite_sanitize_textarea',
	));
	$wp_customize->add_control('leadsurf_home_first_feature_title', array(
		'section' => 'home_featured_section',
		'label' => __('Featured Box One Title','leadsurf-lite'),
	));
	$wp_customize->add_setting( 'leadsurf_home_first_feature_desc', array(
		'default'        => __('Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard', 'leadsurf-lite'),
		'sanitize_callback' => 'leadsurf_lite_sanitize_textarea',
	));
	$wp_customize->add_control('leadsurf_home_first_feature_desc', array(
		'type'	=> 'textarea',
		'section' => 'home_featured_section',
		'label' => __('Featured Box One Content','leadsurf-lite'),
	));
	// Second Feature Section
	$wp_customize->add_setting( 'leadsurf_home_second_feature_title', array(
		'default'        => __('FEATURE TITLE', 'leadsurf-lite'),
		'sanitize_callback' => 'leadsurf_lite_sanitize_textarea',
	));
	$wp_customize->add_control('leadsurf_home_second_feature_title', array(
		'section' => 'home_featured_section',
		'label' => __('Featured Box Two Title','leadsurf-lite'),
	));
	$wp_customize->add_setting( 'leadsurf_home_second_feature_desc', array(
		'default'        => __('Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard', 'leadsurf-lite'),
		'sanitize_callback' => 'leadsurf_lite_sanitize_textarea',
	));
	$wp_customize->add_control('leadsurf_home_second_feature_desc', array(
		'type'	=> 'textarea',
		'section' => 'home_featured_section',
		'label' => __('Featured Box Two Content','leadsurf-lite'),
	));
	// Third Feature Section
	$wp_customize->add_setting( 'leadsurf_home_third_feature_title', array(
		'default'        => __('FEATURE TITLE', 'leadsurf-lite'),
		'sanitize_callback' => 'leadsurf_lite_sanitize_textarea',
	));
	$wp_customize->add_control('leadsurf_home_third_feature_title', array(
		'section' => 'home_featured_section',
		'label' => __('Featured Box Three Title','leadsurf-lite'),
	));
	$wp_customize->add_setting( 'leadsurf_home_third_feature_desc', array(
		'default'        => __('Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard', 'leadsurf-lite'),
		'sanitize_callback' => 'leadsurf_lite_sanitize_textarea',
	));
	$wp_customize->add_control('leadsurf_home_third_feature_desc', array(
		'type'	=> 'textarea',
		'section' => 'home_featured_section',
		'label' => __('Featured Box Three Content','leadsurf-lite'),
	));
	// Third Feature Section
	$wp_customize->add_setting( 'leadsurf_home_four_feature_title', array(
		'default'        => __('FEATURE TITLE', 'leadsurf-lite'),
		'sanitize_callback' => 'leadsurf_lite_sanitize_textarea',
	));
	$wp_customize->add_control('leadsurf_home_four_feature_title', array(
		'section' => 'home_featured_section',
		'label' => __('Featured Box Four Title','leadsurf-lite'),
	));
	$wp_customize->add_setting( 'leadsurf_home_four_feature_desc', array(
		'default'        => __('Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard', 'leadsurf-lite'),
		'sanitize_callback' => 'leadsurf_lite_sanitize_textarea',
	));
	$wp_customize->add_control('leadsurf_home_four_feature_desc', array(
		'type'	=> 'textarea',
		'section' => 'home_featured_section',
		'label' => __('Featured Box Four Content','leadsurf-lite'),
	));


	// Parallax Section
	$pages = get_pages();
	$leadsurf_lite_parallex_page = array();
	$leadsurf_lite_parallex_page['none'] = __('Select Page', 'leadsurf-lite');
	foreach ( $pages as $page ) {
		$key = $page->ID;
		$leadsurf_lite_parallex_page[$key] = $page->post_title;
	}
	$wp_customize->add_setting( 'leadsurf_home_parallax_desc', array(
		'default'           => '',
		'sanitize_callback' => 'leadsurf_lite_sanitize_pages'
	) );
	$wp_customize->add_control( 'leadsurf_home_parallax_desc', array(
		'type' => 'select',
		'section' => 'home_parallax_section',
		'label' => __( 'Select page for parallax section.', 'leadsurf-lite' ),
		'choices' => $leadsurf_lite_parallex_page,
	) );

	$wp_customize->add_setting( 'leadsurf_home_parallax_img', array(
		'default'           => get_template_directory_uri().'/images/content-BG.jpg',
		'sanitize_callback' => 'esc_url_raw',
	) );
	$wp_customize->add_control(  new WP_Customize_Image_Control( $wp_customize, 'leadsurf_home_parallax_img', array(
		'section' 		=> 'home_parallax_section',
		'label' 		=> __( 'Parallax Image', 'leadsurf-lite' ),
		'description' 	=> __('Recomended size min. 1600x750 px.', 'leadsurf-lite' ),
	) ) );

	// ====================================
	// = Blog Page Settings Sections
	// ====================================
	$wp_customize->add_setting( 'leadsurf_blogpage_heading', array(
		'default'        => __('Blog', 'leadsurf-lite'),
		'sanitize_callback' => 'leadsurf_lite_sanitize_textarea',
	));
	$wp_customize->add_control('leadsurf_blogpage_heading', array(
		'priority' => 1,
		'section' => 'blog_page_section',
		'settings' 		=> 'leadsurf_blogpage_heading',
		'label' => __('Blog Page Title','leadsurf-lite'),
	));

	// ====================================
	// = Footer Settings Sections
	// ====================================
	$wp_customize->add_setting( 'leadsurf_footerbg_color', array(
		'default'           => '#1C2534',
		'sanitize_callback' => 'sanitize_hex_color',
	) );
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'leadsurf_footerbg_color', array(
		'section'     	=> 'footer_section',
		'label'       	=> __( 'Footer Background Color', 'leadsurf-lite' ),
	) ) );
	$wp_customize->add_setting( 'leadsurf_copyright', array(
		'default'        => __('Copyright Text here..', 'leadsurf-lite'),
		'sanitize_callback' => 'leadsurf_lite_sanitize_textarea',
	));
	$wp_customize->add_control('leadsurf_copyright', array(
		'section' => 'footer_section',
		'label' => __('Copyright Text','leadsurf-lite'),
		'description' => __('You can use HTML for links', 'leadsurf-lite'),
	));
	//  Facebook
	$wp_customize->add_setting( 'leadsurf_fb_url', array(
		'default'           => '#',
		'sanitize_callback' => 'esc_url_raw',
	) );
	$wp_customize->add_control( 'leadsurf_fb_url', array(
		'type'     		=> 'url',
		'section'  		=> 'footer_section',
		'label'    		=> __( 'Facebook URL', 'leadsurf-lite' ),
	) );
	// Twitter
	$wp_customize->add_setting( 'leadsurf_tw_url', array(
		'default'           => '#',
		'sanitize_callback' => 'esc_url_raw',
	) );
	$wp_customize->add_control( 'leadsurf_tw_url', array(
		'type'     		=> 'url',
		'section'  		=> 'footer_section',
		'label'    		=> __( 'Twitter URL', 'leadsurf-lite' ),
	) );
	// LinkedIn
	$wp_customize->add_setting( 'leadsurf_lin_url', array(
		'default'           => '#',
		'sanitize_callback' => 'esc_url_raw',
	) );
	$wp_customize->add_control( 'leadsurf_lin_url', array(
		'type'     		=> 'url',
		'section'  		=> 'footer_section',
		'label'    		=> __( 'LinkedIn URL', 'leadsurf-lite' ),
	) );
	// Goggle+
	$wp_customize->add_setting( 'leadsurf_gplus_url', array(
		'default'           => '#',
		'sanitize_callback' => 'esc_url_raw',
	) );
	$wp_customize->add_control( 'leadsurf_gplus_url', array(
		'type'     		=> 'url',
		'section'  		=> 'footer_section',
		'label'    		=> __( 'Google+ URL', 'leadsurf-lite' ),
	) );
	// Flickr
	$wp_customize->add_setting( 'leadsurf_fl_url', array(
		'default'           => '#',
		'sanitize_callback' => 'esc_url_raw',
	) );
	$wp_customize->add_control( 'leadsurf_fl_url', array(
		'type'     		=> 'url',
		'section'  		=> 'footer_section',
		'label'    		=> __( 'Flickr URL', 'leadsurf-lite' ),
	) );
	// Pinterest
	$wp_customize->add_setting( 'leadsurf_pin_url', array(
		'default'           => '#',
		'sanitize_callback' => 'esc_url_raw',
	) );
	$wp_customize->add_control( 'leadsurf_pin_url', array(
		'type'     		=> 'url',
		'section'  		=> 'footer_section',
		'label'    		=> __( 'Pinterest URL', 'leadsurf-lite' ),
	) );
	// Dribbble
	$wp_customize->add_setting( 'leadsurf_drib_url', array(
		'default'           => '#',
		'sanitize_callback' => 'esc_url_raw',
	) );
	$wp_customize->add_control( 'leadsurf_drib_url', array(
		'type'     		=> 'url',
		'section'  		=> 'footer_section',
		'label'    		=> __( 'Dribbble URL', 'leadsurf-lite' ),
	) );

}
add_action( 'customize_register', 'leadsurf_lite_customize_register' );

// sanitize textarea
function leadsurf_lite_sanitize_textarea( $input ) {
	return wp_kses_post( force_balance_tags( $input ) );
}

function leadsurf_lite_sanitize_on_off( $input ) {
	$valid = array(
		'on' => __('ON', 'leadsurf-lite' ),
		'off'=> __('OFF', 'leadsurf-lite' ),
    );
 
    if ( array_key_exists( $input, $valid ) ) {
        return $input;
    } else {
        return '';
    }
}

function leadsurf_lite_active_home_feature_sec( $control ) {
	if ( $control->manager->get_setting('leadsurf_home_feature_sec')->value() == 'on' && is_front_page() ) {
		return true;
	} else {
		return false;
	}
}

function leadsurf_lite_sanitize_pages( $input ) {
	$pages = get_pages();
	$valid = array();
	$valid['none'] = __('Select Page', 'leadsurf-lite');
	foreach ( $pages as $page ) {
		$key = $page->ID;
		$valid[$key] = $page->post_title;
	}
	
	if ( array_key_exists( $input, $valid ) ) {
        return $input;
    } else {
        return '';
    }
}

?>