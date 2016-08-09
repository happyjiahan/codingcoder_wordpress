<?php

$featured_content = '';

$_featured_main_heading = esc_attr( get_theme_mod('leadsurf_home_feature_sec_title', __('AMAZING FEATURES', 'leadsurf-lite') ) );

$_featured_box1_title 	= esc_attr( get_theme_mod('leadsurf_home_first_feature_title', __('FEATURE TITLE', 'leadsurf-lite') ) );
$_featured_box1_html 	= wp_kses_post( get_theme_mod('leadsurf_home_first_feature_desc', __('Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard', 'leadsurf-lite') ) );

$_featured_box2_title 	= esc_attr( get_theme_mod('leadsurf_home_second_feature_title', __('FEATURE TITLE', 'leadsurf-lite') ) );
$_featured_box2_html 	= wp_kses_post( get_theme_mod('leadsurf_home_second_feature_desc', __('Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard', 'leadsurf-lite') ) );

$_featured_box3_title 	= wp_kses_post( get_theme_mod('leadsurf_home_third_feature_title', __('FEATURE TITLE', 'leadsurf-lite') ) );
$_featured_box3_html 	= wp_kses_post( get_theme_mod('leadsurf_home_third_feature_desc', __('Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard', 'leadsurf-lite') ) );

$_featured_box4_title 	= esc_attr( get_theme_mod('leadsurf_home_four_feature_title', __('FEATURE TITLE', 'leadsurf-lite') ) );
$_featured_box4_html 	= wp_kses_post( get_theme_mod('leadsurf_home_four_feature_desc', __('Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard', 'leadsurf-lite') ) );

$featured_content = $_featured_main_heading.$_featured_box1_title.$_featured_box1_html.$_featured_box2_title.$_featured_box2_html.$_featured_box3_title.$_featured_box3_html.$_featured_box4_title.$_featured_box4_html;

if ( $featured_content != '' ) {
?>
<div id="featured-box" class="leadsurf-section"> 

	<!-- container --> 
	<div class="container"> 
		<?php if ( $_featured_main_heading != '' ) { ?>
		<div class="row-fluid"> 
			<div class="heading-section">
					<div class="heading-section-main-icon heading-section-icon">
						<i class="fa fa-star"></i>
					</div> 
				<div class="heading-section-heading"></div>				 
				<div class="heading_section_heading"><?php echo $_featured_main_heading; ?></div>
			</div> 
		</div>
		<?php } ?>
		<!-- ROW FLUID --> 
		<div class="featured-bottom row-fluid"> 
			<div class="featured-bottom-wrapper"> 
				<?php if ( $_featured_box1_title != '' || $_featured_box1_html != '' ) { ?>
				<!-- FEATURED BOX 1 --> 
				<div class="featured-box1 box span3"> 
					<div class="featured_icon"> 
						<i class="fa fa-eye"></i>
					</div> 
					<h2><?php echo $_featured_box1_title; ?></h2> 
					<div class="iconbox-content"> 
						<?php echo $_featured_box1_html; ?> 
					</div>	 
				</div> 

				<?php } if ( $_featured_box2_title != '' || $_featured_box2_html != '' ) { ?>
				<!-- FEATURED BOX 2 --> 
				<div class="featured-box2 box span3"> 
					<div class="featured_icon"> 
						<i class="fa fa-lightbulb-o"></i>
					</div> 
					<h2><?php echo $_featured_box2_title; ?></h2> 
					<div class="iconbox-content"> 
						<?php echo $_featured_box2_html; ?> 
					</div>	 
				</div> 

				<?php } if ( $_featured_box3_title != '' || $_featured_box3_html != '' ) { ?>
				<!-- FEATURED BOX 3 --> 
				<div class="featured-box3 box span3"> 
					<div class="featured_icon"> 
						<i class="fa fa-desktop"></i>
					</div> 
					<h2><?php echo $_featured_box3_title; ?></h2> 
					<div class="iconbox-content"> 
						<?php echo $_featured_box3_html; ?> 
					</div>	 
				</div> 

				<?php } if ( $_featured_box4_title != '' || $_featured_box4_html != '' ) { ?>
				<!-- FEATURED BOX 4 -->			 
				<div class="featured-box4 box span3"> 
					<div class="featured_icon"> 
						<i class="fa fa-check"></i> 
					</div> 
					<h2><?php echo $_featured_box4_title; ?></h2> 
					<div class="iconbox-content"> 
						<?php echo $_featured_box4_html; ?> 
					</div>	 
				</div>
				<?php } ?>
			</div> 
			<!-- END OF ROW FLUID --> 
		</div> 
		<div class="clearfix"></div> 
	</div> 
	<!-- END OF CONTAINER --> 
</div>
<?php } ?>