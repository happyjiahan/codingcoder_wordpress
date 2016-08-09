<?php 

if( 'none' != get_theme_mod('leadsurf_home_parallax_desc') ) {

	$the_query = new WP_Query( array( 'page_id' => get_theme_mod('leadsurf_home_parallax_desc') ) );

?>
	<?php if ( $the_query->have_posts() ) : ?>
		
		<!-- the loop -->
		<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
			<!-- About us section -->
			<div id="home-about-us" class="leadsurf-section">
				<!-- contatiner -->
				<div class="container">
					<!-- row-fluid -->
					<div class="row-fluid">
						<div class="heading-section">
							<div class="heading-section-main-icon heading-section-icon">
								<i class="fa fa-users"></i>
							</div>
							<div class="heading-section-heading"></div>
							<div class="heading_section_heading">
		 						<?php the_title(); ?>
							</div>
						</div>
						<div class="about-us-html">
		 						<?php the_content(); ?>
						</div>
					</div>
					<div class="clearfix"></div>
				</div>
			</div>
			<?php break; ?>
		<?php endwhile; ?>

		<!-- end of the loop -->
		<?php wp_reset_postdata(); ?>

	<?php endif; ?>

<?php } ?>
