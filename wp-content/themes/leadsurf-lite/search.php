<?php 
/**
* The template for displaying Search Results pages.
*
*/
get_header(); ?>

<div class="main-wrapper-item">
	<div class="container post-wrap"> 
		<div class="row-fluid">
			<div id="container" class="span9">
				<div id="content" role="main">
					<?php if(have_posts()) : ?>
					<?php while(have_posts()) : the_post(); ?>
					<?php get_template_part( 'content'); ?>
					<?php endwhile; ?>
							<div class="navigation blog-navigation">
								<div class="alignleft"><?php previous_posts_link(__('&larr;Previous','leadsurf-lite')) ?></div>		
								<div class="alignright"><?php next_posts_link(__('Next&rarr;','leadsurf-lite'),'') ?></div>    		
							</div>  
						<?php else :  ?>
					<?php get_template_part( 'content', 'none' ); ?>
					<?php endif; ?>
				</div>
			<!-- content --> 
			</div>
		<!-- container --> 
			<!-- Sidebar -->
			<div id="sidebar" class="span3">
				<?php get_sidebar(); ?>
			</div>
			<!-- Sidebar -->
		</div>
	</div>
</div>
<?php get_footer(); ?>