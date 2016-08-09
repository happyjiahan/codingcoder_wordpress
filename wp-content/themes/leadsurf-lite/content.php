<?php

/**
 * The default template for displaying content. Used for both single and index/archive/search.
 */

?>
<div <?php post_class('post'); ?> id="post-<?php the_ID(); ?>">
		
        <div class="featured-image-shadow-box quote_featured_img">
			<?php if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it. ?>
				<?php
					$thumbnail = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID),'leadsurf-lite-standardimg');
				?>
				<a href="<?php the_permalink(); ?>" class="image">
					<img src="<?php echo esc_url( $thumbnail[0] );?>" alt="<?php the_title(); ?>" class="featured-image alignnon"/>
				</a>
				
			<?php } ?>
		</div>
		<div class="post_inner_wrap clearfix">
			<h1 class="post-title">
				<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
					<?php the_title(); ?>
				</a>
			</h1>
			<div class="skepost-meta clearfix">
			    <span class="date"><i class="fa fa-calendar"></i><?php the_time('F j, Y') ?></span><span class="author-name"><i class="fa fa-user"></i><?php the_author_posts_link(); ?></span><?php the_tags('<span class="tag-name"><i class="fa fa-tag"></i> ',',','</span>'); ?><span class="comments"><i class="fa fa-comments"></i><?php comments_popup_link(__('No Comments','leadsurf-lite'), __('1 Comment ','leadsurf-lite'), __('% Comments ','leadsurf-lite')) ; ?></span>
	        </div>
			<!-- skepost-meta -->
	        <div class="skepost">
				<?php the_excerpt(); ?> 
				<div class="continue"><a href="<?php the_permalink(); ?>"><?php _e('Read More','leadsurf-lite');?></a></div>		  
	        </div>
	        <!-- skepost -->
        </div>
</div>
<!-- post -->