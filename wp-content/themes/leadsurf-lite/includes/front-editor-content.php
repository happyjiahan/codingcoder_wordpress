<!-- PAGE EDITER CONTENT -->
<?php if(have_posts()) : ?>
	<?php while(have_posts()) : the_post(); ?>
	<div id="front-content-box" class="leadsurf-section">
		<div class="container">
			<div class="row-fluid"> 
				<?php the_content(); ?>
			</div>
			<div class="border-content-box bottom-space"></div>
		</div>
	</div>
	<?php endwhile; ?>
<?php endif; ?> 


<?php if( get_theme_mod('leadsurf_home_blog_sec', 'on') == 'on') { ?>
<div id="front-content-box" class="leadsurf-section">
	<div class="container">
		<div class="row-fluid">
			<div class="heading-section">
				<div class="heading-section-main-icon heading-section-icon">
					<i class="fa fa-comments"></i>
				</div>
				<div class="heading-section-heading"></div>
				<div class="heading_section_heading">
					<?php echo wp_kses_post( get_theme_mod('leadsurf_home_blog_title', __('LATEST ARTICLES', 'leadsurf-lite') ) ); ?>
				</div>
			</div>
		</div>

		<div class="front-blog-wrap row-fluid">
		<?php $leadsurf_lite_blogno = get_option('posts_per_page');

			$leadsurf_lite_latest_loop = new WP_Query( array( 'post_type' => 'post', 'posts_per_page' => $leadsurf_lite_blogno ) );

		?>
			<?php if ( $leadsurf_lite_latest_loop->have_posts() ) : ?>

			<!-- pagination here -->

				<!-- the loop -->
				<?php while ( $leadsurf_lite_latest_loop->have_posts() ) : $leadsurf_lite_latest_loop->the_post(); ?>
					<div class="span4 <?php if(is_sticky()){echo "sticky";} ?>">
						<h2><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h2>
						<?php the_excerpt(); ?>
					</div>
				<?php endwhile; ?>
				<!-- end of the loop -->

				<!-- pagination here -->

				<?php wp_reset_postdata(); ?>

			<?php else : ?>
				<p><?php _e( 'Sorry, no posts matched your criteria.', 'leadsurf-lite' ); ?></p>
			<?php endif; ?>
		</div>
	</div>
</div>
<?php } ?>