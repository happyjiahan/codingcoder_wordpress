<?php 
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme and one of the
 * two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * For example, it puts together the home page when no home.php file exists.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 */
get_header(); ?>

<div class="main-wrapper-item">

	<!-- container // -->
	<div class="container post-wrap">
		 <!-- row-fluid // -->
		 <div class="row-fluid">
			  <div id="container" class="span9">
				<div id="content">
					<?php if(have_posts()) : ?>
					<?php /* The loop */ ?>
					<?php while(have_posts()) : the_post(); ?>
					<?php if(is_sticky($post->ID)) { _e("<div class='sticky-post'>featured</div>",'leadsurf-lite'); } ?>
					<?php get_template_part( 'content'); ?>
					<?php endwhile; ?>
						<div class="navigation blog-navigation">	
							<div class="alignleft"><?php previous_posts_link(__('<i class="fa fa-angle-left"></i> Newer Posts','leadsurf-lite')) ?></div>		
							<div class="alignright"><?php next_posts_link(__('Older Posts <i class="fa fa-angle-right"></i>','leadsurf-lite'),'') ?></div>    						
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
		 </div><!-- row-fluid -->
	 </div><!-- container -->
</div>
<?php get_footer(); ?>