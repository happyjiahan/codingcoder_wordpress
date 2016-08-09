<?php 

function leadsurf_lite_Hex2RGB($hexStr, $returnAsString = false, $seperator = ',') {
    $hexStr = preg_replace("/[^0-9A-Fa-f]/", '', $hexStr); // Gets a proper hex string
    $rgbArray = array();
    if (strlen($hexStr) == 6) { //If a proper hex code, convert using bitwise operation. No overhead... faster
        $colorVal = hexdec($hexStr);
        $rgbArray['red'] = 0xFF & ($colorVal >> 0x10);
        $rgbArray['green'] = 0xFF & ($colorVal >> 0x8);
        $rgbArray['blue'] = 0xFF & $colorVal;
    } elseif (strlen($hexStr) == 3) { //if shorthand notation, need some string manipulations
        $rgbArray['red'] = hexdec(str_repeat(substr($hexStr, 0, 1), 2));
        $rgbArray['green'] = hexdec(str_repeat(substr($hexStr, 1, 1), 2));
        $rgbArray['blue'] = hexdec(str_repeat(substr($hexStr, 2, 1), 2));
    } else {
        return false; //Invalid hex color code
    }
    return $returnAsString ? implode($seperator, $rgbArray) : $rgbArray; // returns the rgb string or the associative array
} 

	
	$_about_us_parallax_img = esc_url( get_theme_mod('leadsurf_home_parallax_img', get_template_directory_uri().'/images/content-BG.jpg') );
	
	$_footer_background = esc_attr( get_theme_mod('leadsurf_footerbg_color', '#1C2534') );
	
	$_primary_color_scheme = esc_attr( get_theme_mod('leadsurf_pri_color', '#ee2841') );
	$color_scheme = esc_attr(get_theme_mod('leadsurf_sec_color', '#FFD600') );
	$_breadcrumb_color_scheme =  esc_attr(get_theme_mod('leadsurf_breadbg_color', '#1C2534') );
	
	$rgb=array();
	$rgb = leadsurf_lite_Hex2RGB($color_scheme);
	$R = $rgb['red'];
	$G = $rgb['green'];
	$B = $rgb['blue'];
	$rgbcolor = "rgba(". $R .",". $G .",". $B .",.4)";
	$bdrrgbcolor = "rgba(". $R .",". $G .",". $B .",.7)";


	$hrgb = leadsurf_lite_Hex2RGB($_primary_color_scheme);
	$hR = $hrgb['red'];
	$hG = $hrgb['green'];
	$hB = $hrgb['blue'];
	$hrgbcolor = "rgba(". $hR .",". $hG .",". $hB .",.7)";

	$leadsurf_lite_background_size = esc_attr( get_theme_mod('avis_background_size', 'auto') );

?>
<style type="text/css">

	/**************** LOGO SIZE ***************/
	#logo .logo{ max-width: 370px; max-height: 105px; }
	body.custom-background { background-size: <?php echo $leadsurf_lite_background_size; ?>; }

	/***************** THEME *****************/

	/* Header Form Style */
	.header_form_html a,.wpcf7-submit,form input[type="submit"],.page-template-template-leadcapture-php form input[type="submit"]{background-color: <?php if(isset($_primary_color_scheme)){ echo $_primary_color_scheme; } ?>;}

	/*************** TOP HEADER **************/
	.topbar_info:hover i,
	#footer .third_wrapper a:hover,
	.leadsurf-footer-container ul li:hover:before,
	.leadsurf-footer-container ul li:hover > a,
	.heading-section-main-icon{color: <?php if(isset($color_scheme)){ echo $color_scheme; } ?>;}

	.leadsurf_price_table .price_table_inner .price_button a:hover,
	.page-template-template-leadcapture-php form input[type="text"]:focus,.page-template-template-leadcapture-php form input[type="email"]:focus,
	.page-template-template-leadcapture-php form input[type="url"]:focus,.page-template-template-leadcapture-php form input[type="tel"]:focus,
	.page-template-template-leadcapture-php form input[type="number"]:focus,.page-template-template-leadcapture-php form input[type="range"]:focus,
	.page-template-template-leadcapture-php form input[type="date"]:focus,.page-template-template-leadcapture-php form input[type="file"]:focus,.page-template-template-leadcapture-php form textarea:focus {border: 1px solid <?php if(isset($color_scheme)){ echo $color_scheme; } ?>; }
	.leadsurf-iconbox.iconbox-top .iconbox-icon,.skepost-meta span:hover {background-color: <?php if(isset($_primary_color_scheme)){ echo $_primary_color_scheme; } ?>;}
	.leadsurf-section h2.section_heading, .about-leadsurf-section h2.section_heading {color: <?php if(isset($_primary_color_scheme)){ echo $_primary_color_scheme; } ?>;}
	.we_are_here_html .inner_html .fa, .map_overlay_text .fa,
	.iconbox-icon i,.bread-title-holder a,#wp-calendar a:hover,
	.head_form_main h2,.ClassyCountdown-value > div
	 {
	 	color: <?php if(isset($color_scheme)){ echo $color_scheme; } ?>;
	 }
	.we_are_here_content .inner_html li:hover .fa,
	.about_we_are_here_content .inner_html li:hover .fa,
	.about_we_are_here_content h3,
	.post h3,#wp-calendar #next a:hover,#wp-calendar #prev a:hover,
	.contact-post h3,.contact-add strong,.services-leadsurf-section h2.section_heading,.box a.read-more:hover,
	h3#reply-title,#comments,.comment-author cite { 
		color: <?php if(isset($_primary_color_scheme)){ echo $_primary_color_scheme; } ?>;
	}
	
	.call_to_action .button-link.medium-button,
	#latest-project-section .port-readmore a.button-link,#sidebar .social li a:hover,
	.navigation .alignleft a,.navigation .alignright a {
		background-color: <?php if(isset($_primary_color_scheme)){ echo $_primary_color_scheme; } ?> !important;
	}

	.call_to_action .button-link.medium-button:hover,
	#latest-project-section .port-readmore a.button-link:hover,.navigation .alignleft a:hover,.navigation .alignright a:hover {
		background-color: <?php if(isset($color_scheme)){ echo $color_scheme; } ?> !important;
	}

	a.large-button:hover, a.small-button:hover, a.medium-button:hover { 
	    background: none repeat scroll 0 0 <?php echo $color_scheme; ?> !important;
	}

	.testimonial_quote_icon,.contact-post .contact-add .fa, #contact-gmap-toggle,.quote_post .leadsurf-quote .fa { color: <?php if(isset($color_scheme)){ echo $color_scheme; } ?>; }

	.team-box-mid .team_overlay_content .teamsocial a,
	.navigation .nav-previous,
	.navigation .nav-next,
	ul.protfolio_details li .fa,
	#content .contact-left form input[type="submit"],
	.contact-post .contact-add .fa, #contact-gmap-toggle, .error-txt-first img,
	blockquote,.leadsurf-quote,
	#wp-calendar tbody a,.widget_tag_cloud a:hover,.widget_product_tag_cloud a:hover,#respond input[type="submit"],.comments-template .reply a,
	#leadsurf-paginate a,
	.sktmenu-toggle {
		background-color: <?php if(isset($_primary_color_scheme)){ echo $_primary_color_scheme; } ?>;
	}
	#leadsurf-paginate a {border: 1px solid <?php if(isset($_primary_color_scheme)){ echo $_primary_color_scheme; } ?>;}
	.team-box-mid .team_overlay_content .teamsocial li:hover a {color:#747474; background-color:<?php if(isset($color_scheme)){ echo $color_scheme; } ?>; }


	#full-twitter-box #bot-twitter .foot-tw-control-paging a.foot-tw-active,
	.leadsurf_price_table .active_best_price,
	.navigation .nav-previous:hover,
	.navigation .nav-next:hover, #contact-gmap-toggle:hover, .postformat-gallerycontrol-nav li a.postformat-galleryactive,
	.flex-control-paging li a.flex-active{
		background-color:<?php if(isset($color_scheme)){ echo $color_scheme; } ?>;
	}

	.filter a:hover,.filter li a.selected {color:<?php if(isset($_primary_color_scheme)){ echo $_primary_color_scheme; } ?>; border-bottom: 1px solid <?php if(isset($_primary_color_scheme)){ echo $_primary_color_scheme; } ?>; }
	#container-isotop .project_box:hover .portfolio_overlay {background-color: rgba(0, 0, 0, 0.8); }
	.port_single_link a {background-color: <?php if(isset($_primary_color_scheme)){ echo $_primary_color_scheme; } ?>;}
	.port_single_link a:hover, .leftsquare:after, .rightsquare:before{background-color: <?php if(isset($color_scheme)){ echo $color_scheme; } ?>;}

	.leadsurf_price_table .price_table_inner ul li.table_title, .leadsurf_price_table .price_table_inner ul li.prices,.continue a{background: <?php if(isset($_primary_color_scheme)){ echo $_primary_color_scheme; } ?>; }
	.sticky-post {color :<?php if(isset($color_scheme)){ echo $color_scheme; } ?>;border-color:<?php if(isset($bdrrgbcolor)){ echo $bdrrgbcolor; } ?>}
	.leadsurf_price_table .price_table_inner .price_button a { border-color: <?php if(isset($_primary_color_scheme)){ echo $_primary_color_scheme; } ?>; background-color: <?php if(isset($_primary_color_scheme)){ echo $_primary_color_scheme; } ?>; }
	.social li a:hover{background: <?php if(isset($color_scheme)){ echo $color_scheme; } ?>;}
	.social li a:hover:before{color:#fff; }
	.flexslider:hover .flex-next:hover, .flexslider:hover .flex-prev:hover,.slider-link a:hover,#respond input[type="submit"]:hover,.leadsurf-ctabox div.leadsurf-ctabox-button a:hover,#portfolio-division-box a.readmore:hover,.project-item .icon-image,.project-item:hover,.continue a:hover,#leadsurf-paginate .leadsurf-current,#leadsurf-paginate a:hover,.postformat-gallerydirection-nav li a:hover,.comments-template .reply a:hover,#content .contact-left form input[type="submit"]:hover,.service-icon:hover,.leadsurf-parallax-button:hover,.leadsurf_price_table .price_table_inner .price_button a:hover,#content .leadsurf-service-page div.one_third:hover .service-icon,#content div.one_half .leadsurf-service-page:hover .service-icon  {background-color: <?php if(isset($color_scheme)){ echo $color_scheme; } ?>; }
	.leadsurf-ctabox div.leadsurf-ctabox-button a,#portfolio-division-box .readmore,.teammember,.slider-link a,.leadsurf_tab_v ul.leadsurf_tabs li.active,.leadsurf_tab_h ul.leadsurf_tabs li.active,.service-icon,.leadsurf-parallax-button,#leadsurf-paginate a:hover,#leadsurf-paginate .leadsurf-current,#content .contact-left form textarea:focus,#content .contact-left form input[type="text"]:focus, #content .contact-left form input[type="email"]:focus, #content .contact-left form input[type="url"]:focus, #content .contact-left form input[type="tel"]:focus, #content .contact-left form input[type="number"]:focus, #content .contact-left form input[type="range"]:focus, #content .contact-left form input[type="date"]:focus, #content .contact-left form input[type="file"]:focus,form input[type="text"]:focus,form input[type="email"]:focus, form input[type="url"]:focus,form input[type="tel"]:focus, form input[type="number"]:focus,form input[type="range"]:focus, form input[type="date"]:focus,form input[type="file"]:focus,form textarea:focus,.leadsurf-iconbox .iconbox-content h4 hr {border-color:<?php if(isset($color_scheme)){ echo $color_scheme; } ?>;} 	
	.clients-items li a:hover{border-bottom-color:<?php if(isset($color_scheme)){ echo $color_scheme; } ?>;}
	a,.leadsurf_widget ul ul li:hover:before,.leadsurf_widget ul ul li:hover,.leadsurf_widget ul ul li:hover a,.title a ,.skepost-meta a:hover,.post-tags a:hover,.entry-title a:hover,.readmore a:hover,#Site-map .sitemap-rows ul li a:hover ,.childpages li a,#Site-map .sitemap-rows .title,.leadsurf_widget a,.leadsurf_widget a:hover,#Site-map .sitemap-rows ul li:hover,.mid-box:hover .iconbox-icon i,.leadsurf-title,span.team_name,.reply a, a.comment-edit-link,#full-subscription-box .sub-txt .first-word{color: <?php if(isset($_primary_color_scheme)){ echo $_primary_color_scheme; } ?>;text-decoration: none;}
	.single #content .title,#content .post-heading,.childpages li ,.fullwidth-heading,#respond .required{color: <?php if(isset($color_scheme)){ echo $color_scheme; } ?>;} 

	*::-moz-selection{background: <?php if(isset($_primary_color_scheme)){ echo $_primary_color_scheme; } ?>;color:#fff;}
	::selection {background: <?php if(isset($_primary_color_scheme)){ echo $_primary_color_scheme; } ?>;color:#fff;}
	#full-twitter-box,.progress_bar {background: none repeat scroll 0 0 <?php if(isset($color_scheme)){ echo $color_scheme; } ?>;}
	.leadsurf-front-subs-widget input[type="submit"]{ background-color:<?php if(isset($color_scheme)){ echo $color_scheme; } ?>;color:#fff;}
	
	#skenav ul li.current_page_item > a,
	#skenav ul li.current-menu-ancestor > a,
	#skenav ul li.current-menu-item > a,
	#skenav ul li.current-menu-parent > a,
	#skenav ul li:hover > a { border-bottom: 4px solid <?php if(isset($color_scheme)){ echo $color_scheme; } ?>; }
	#searchform .searchright { background: none repeat scroll 0 0 <?php if(isset($_primary_color_scheme)){ echo $_primary_color_scheme; } ?>;}
	.leadsurf-footer-container ul li {}
	.col-one .box .title, .col-two .box .title, .col-three .box .title, .col-four .box .title {color: <?php if(isset($color_scheme)){ echo $color_scheme; } ?> !important;  }
	.leadsurf-counter-h i, .error-txt {  color: <?php if(isset($_primary_color_scheme)){ echo $_primary_color_scheme; } ?>; }

	<?php if(isset($_breadcrumb_color_scheme) && $_breadcrumb_color_scheme != '') {	?>
				.bread-title-holder {background-color: <?php echo $_breadcrumb_color_scheme; ?>; }
	<?php  } else {	?>
				.bread-title-holder { background-color:rgba(0, 0, 0, 0.6); }
	<?php } ?>
	/*PARALLAX SECTION*/
	#home-about-us { background-image: url("<?php if(isset($_about_us_parallax_img)){ echo $_about_us_parallax_img; }?>"); }
	#footer-content { background-color: <?php if(isset($_footer_background)){ echo $_footer_background; }?>; }


	@keyframes team_ttb{25%{box-shadow:0 0 0 5px <?php if(isset($color_scheme)){ echo $rgbcolor; } ?>} 100%{box-shadow:0 0 0 5px <?php if(isset($color_scheme)){ echo $color_scheme; } ?>}}
	@-webkit-keyframes team_ttb{25%{box-shadow:0 0 0 5px <?php if(isset($color_scheme)){ echo $rgbcolor; } ?>} 100%{box-shadow:0 0 0 5px <?php if(isset($color_scheme)){ echo $color_scheme; } ?>}}
	@-moz-keyframes team_ttb{25%{box-shadow:0 0 0 5px <?php if(isset($color_scheme)){ echo $rgbcolor; } ?>} 100%{box-shadow:0 0 0 5px <?php if(isset($color_scheme)){ echo $color_scheme; } ?>}}
	@-o-keyframes team_ttb{25%{box-shadow:0 0 0 5px <?php if(isset($color_scheme)){ echo $rgbcolor; } ?>} 100%{box-shadow:0 0 0 5px <?php if(isset($color_scheme)){ echo $color_scheme; } ?>}}
	
	.footer-seperator{background-color: rgba(0,0,0,.2);}
	#footer div.follow-icons li:hover a{background: none repeat scroll 0 0 <?php if(isset($color_scheme)){ echo $color_scheme; } ?> !important;}
	#footer div.follow-icons .social li:hover a:before{color: #747474 !important; }
	.leadsurf-title.leadsurf-footer-title {color:<?php if(isset($color_scheme)){ echo $color_scheme; } ?> }


	.leadsurf-iconbox.iconbox-top:hover .iconboxhover {  background-color: <?php if(isset($color_scheme)){ echo $color_scheme; } ?>; }
	section > h1 { color: <?php if(isset($color_scheme)){ echo $color_scheme; } ?>; }
	#leadsurf-product-cat li > a { background-color: <?php if(isset($hrgbcolor)){ echo $hrgbcolor; } ?>; }
	#leadsurf-product-cat .owl-buttons .owl-prev:hover, #leadsurf-product-cat .owl-buttons .owl-next:hover, #leadsurf-re-product .owl-buttons .owl-prev:hover, #leadsurf-re-product .owl-buttons .owl-next:hover { background-color: <?php if(isset($color_scheme)){ echo $color_scheme; } ?>; color: #fff; border: 1px solid <?php if(isset($color_scheme)){ echo $color_scheme; } ?>;}
	#leadsurf-product-cat .owl-buttons .owl-prev, #leadsurf-product-cat .owl-buttons .owl-next, #leadsurf-re-product .owl-buttons .owl-prev, #leadsurf-re-product .owl-buttons .owl-next { border: 1px solid <?php if(isset($color_scheme)){ echo $color_scheme; } ?>; color: <?php if(isset($color_scheme)){ echo $color_scheme; } ?>; } 
	.header-cart > a { background-color: <?php if(isset($color_scheme)){ echo $color_scheme; } ?>; }
	#leadsurf-re-product .item .overlay a.prolink:hover { background-color: <?php if(isset($color_scheme)){ echo $color_scheme; } ?>; }
	#content .featured-image-shadow-box .fa,.sticky-post { color: <?php if(isset($color_scheme)){ echo $color_scheme; } ?>; }
	
	
	/********************** MAIN NAVIGATION PERSISTENT **********************/
	
	@media only screen and (max-width : <?php if(isset($mobi_menu_width)){ echo $mobi_menu_width; } ?>px) {
		#menu-main {
			display:none;
		}

		#header .container {
			width:97%;
		}
	}
</style>

<script type="text/javascript">
jQuery(document).ready(function(){
'use strict';
	jQuery('#menu-main').sktmobilemenu({'fwidth':'<?php if(isset($mobi_menu_width)){ echo '1025'; } ?>'});
});
</script>

