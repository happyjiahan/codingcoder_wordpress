<?php 
/**
 * The Template for displaying all single posts.
 */

get_header(); ?>

<div class="main-wrapper-item">
<?php if(have_posts()) : ?>
<?php while(have_posts()) : the_post(); ?>
		
<div class="container post-wrap">
	<div class="row-fluid">
		<div id="container" class="span9">
			<div id="content">  
					<div class="post" id="post-<?php the_ID(); ?>">
					  <div class="single_post_wrap">
						<?php if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it. ?>
							<div class="featured-image-shadow-box quote_featured_img">
								<?php the_post_thumbnail('leadsurf-lite-standardimg'); ?>
							</div>
						<?php } ?>

						<div class="post_inner_wrap clearfix">
							<h1 class="post-title"><?php the_title(); ?></h1>
							<div class="skepost-meta clearfix">
							    <span class="date"><?php _e('<i class="fa fa-calendar"></i>','leadsurf-lite');?><?php the_time('F j, Y') ?></span><span class="author-name"><?php _e('<i class="fa fa-user"></i>','leadsurf-lite');?><?php the_author_posts_link(); ?></span><?php the_tags('<span class="tag-name"><i class="fa fa-tag"></i> ',',','</span>'); ?><span class="comments"><?php _e('<i class="fa fa-comments"></i>','leadsurf-lite');?><?php comments_popup_link(__('No Comments','leadsurf-lite'), __('1 Comment ','leadsurf-lite'), __('% Comments ','leadsurf-lite')) ; ?></span>
					        </div>
							<!-- skepost-meta -->
					        <div class="skepost">
								<?php the_content(); ?>
								<?php wp_link_pages( array('before' => '<p><strong>'.__('Pages :','leadsurf-lite').'</strong>','after' => '</p>', __('number','leadsurf-lite') ) ); ?>
								<?php edit_post_link( __('Edit', 'leadsurf-lite'), '', ''); ?>
					        </div>
					        <!-- skepost -->
				        </div>
				      </div><!-- single-post-wrap -->

						<div class="navigation"> 
							<?php previous_post_link( __('<span class="nav-previous"><i class="fa fa-angle-left"></i> %link</span>','leadsurf-lite')); ?>
							<?php next_post_link( __('<span class="nav-next">%link <i class="fa fa-angle-right"></i></span>','leadsurf-lite')); ?> 
						</div>

						<div class="clearfix"></div>
						<div class="comments-template">
							<?php comments_template( '', true ); ?>
						</div>
					</div>
				<!-- post -->
				<?php endwhile; ?>
				<?php else :  ?>

				<div class="post">
					<h2><?php _e('Not Found','leadsurf-lite'); ?></h2>
				</div>
				<?php endif; ?>
			</div><!-- content --> 
		</div><!-- container --> 

		<!-- Sidebar -->
		<div id="sidebar" class="span3">
			<?php get_sidebar(); ?>
		</div>
		<!-- Sidebar --> 

	</div>
 </div>
</div>
<?php get_footer(); ?>