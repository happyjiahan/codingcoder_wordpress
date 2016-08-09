<?php

get_header(); 

get_template_part( 'includes/front', 'bgimage-section' );

get_template_part( 'includes/front', 'featured-boxes-section' );

get_template_part( 'includes/front', 'about-section' ); 
	
?>

<!-- PAGE EDITER CONTENT -->
<?php if(have_posts()) : 
	while(have_posts()) : the_post(); ?>
		<div id="front-content-box" class="instaapp-section">
			<div class="container">
				 <div class="row-fluid"> 
						<?php the_content(); ?>
				</div>
			</div>
		</div>
	<?php endwhile; 
	endif; 
get_footer(); ?>