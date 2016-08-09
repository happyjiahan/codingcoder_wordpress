<?php 
$header_form_img = get_theme_mod('leadsurf_ntfy_img', get_template_directory_uri().'/images/LeadSurf_iphone.png');
$leadsurf_ntfy_link = get_theme_mod('leadsurf_ntfy_link', '#');
?>
<div class="head_form_main">
	<div class="header_form_html">
		<?php if( $header_form_img != '' ) { ?><img class="header-form-img" src="<?php echo esc_url( $header_form_img ); ?>" alt="<?php _e('Leasdurf image','leadsurf-lite'); ?>"/><?php } ?>
		<?php if( $leadsurf_ntfy_link != '' ) { ?><a href="<?php echo esc_url( $leadsurf_ntfy_link ); ?>" title="<?php echo esc_attr( get_theme_mod('leadsurf_ntfy_txt', __('Notify Me', 'leadsurf-lite') ) ); ?>"><?php echo esc_attr( get_theme_mod('leadsurf_ntfy_txt', __('Notify Me', 'leadsurf-lite') ) ); ?></a><?php } ?>
	</div>
</div>