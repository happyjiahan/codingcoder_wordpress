<?php
/**
* The Header for our theme.
*/
?><!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) | !(IE 8)  ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
<link rel="profile" href="http://gmpg.org/xfn/11" />
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?> >
<div id="wrapper" class="skepage">
<div id="main-head-wrap" class="clearfix">
	<!-- header image section -->
	<?php $classes = get_body_class(); ?>
	<?php if( in_array('home', $classes) ) { ?>
	<div class="head-slide-wrap clearfix">
		<!-- #header-form-wrap -->
		<div class="header-form-wrap clearfix">
			<div class="container">
				<div class="row-fluid">
				<div class="span5">
				<?php 
					get_template_part( 'includes/front', 'appointment-form' );
				 ?>
				 </div>
				</div>
			</div>	
		</div>
		<!-- #header-form-wrap -->
	</div>

	<?php  get_template_part( 'includes/front', 'bgimage-section' ); } ?>
</div>

<?php if( !(is_front_page()) ) { ?>
	<!-- BreadCrumb Section // -->
	<div class="bread-title-holder">
		<div class="container">
			<div class="row-fluid">
				<div class="container_inner clearfix">
					<h1 class="title">

						<?php if( is_page_template( 'archives.php' ) ) {

								if ( is_day() ) :
									printf( __( 'Daily Archives : <span>%s</span>', 'leadsurf-lite' ), get_the_date() );
								elseif ( is_month() ) :
									printf( __( 'Monthly Archives : <span>%s</span>', 'leadsurf-lite' ), get_the_date( _x( 'F Y', 'monthly archives date format', 'leadsurf-lite' ) ) );
								elseif ( is_year() ) :
									printf( __( 'Yearly Archives : <span>%s</span>', 'leadsurf-lite' ), get_the_date( _x( 'Y', 'yearly archives date format', 'leadsurf-lite' ) ) );
								else :
									_e( 'Blog Archives', 'leadsurf-lite' );
								endif;

							} else if (is_author()) {

								$curauth = (isset($_GET['author_name'])) ? get_user_by('slug', $author_name) : get_userdata(intval($author));
							    _e('Author Archives : ','leadsurf-lite'); echo $curauth->display_name;


							} elseif (is_category()) { 

								printf( __( 'Category Archives : %s', 'leadsurf-lite' ), '<span>' . single_cat_title( '', false ) . '</span>' );

							} elseif (is_search()) {

								printf( __( 'Search Results for : %s', 'leadsurf-lite' ), '<span>' . get_search_query() . '</span>' );

							} elseif (is_tag()) {

								printf( __( 'Tag Archives : %s', 'leadsurf-lite' ), '<span>' . single_tag_title( '', false ) . '</span>' );

							} elseif (is_home()) {

								echo esc_attr( get_theme_mod('leadsurf_blogpage_heading', __('Blog', 'leadsurf-lite') ) );

							} elseif (is_404()) {

								_e('404', 'leadsurf-lite');

							} else{ 

								the_title();

							}
						?>

					</h1>
					<?php if ((class_exists('leadsurf_lite_breadcrumb_class'))) { $leadsurf_lite_breadcumb = new leadsurf_lite_breadcrumb_class(); $leadsurf_lite_breadcumb->custom_breadcrumb();} ?>
				</div>
			</div>
		</div>
	</div>
	<!-- \\ BreadCrumb Section -->
<?php } ?>

<div id="header" class="skehead-headernav clearfix">
	<div class="glow">
		<div id="skehead">
			<div class="container">      
				<div class="row-fluid">      
					<!-- #logo -->
					<div id="logo" class="span4">
						<?php if( get_theme_mod('leadsurf_logo_img', '') != '' ) { ?>
							<div class="logo_inner">
								<a href="<?php echo esc_url(home_url('/')); ?>" title="<?php bloginfo('name'); ?>" style="display: table;line-height: 0;" ><img class="logo" src="<?php echo esc_url( get_theme_mod('leadsurf_logo_img') ); ?>" alt="<?php bloginfo('name'); ?>" /></a>
							</div>
						<?php } 
						if ( display_header_text() ) { ?>
						<!-- #description -->
							<div id="site-title" class="logo_desp logo_inner">
								<a href="<?php echo esc_url(home_url('/')); ?>" title="<?php bloginfo('name') ?>" ><?php bloginfo('name'); ?></a>
								<div id="site-description"><?php bloginfo( 'description' ); ?></div>
							</div>
						<!-- #description -->
						<?php } ?>
					</div>
					<!-- #logo -->

					<!-- Slider Title Start Here -->
					<?php 
					if(is_front_page()){
					?>
					<ul id="home">
						<li class="current"><a href="#logo"><i class="fa fa-angle-down"></i></a></li>
					</ul>
					<?php
					}
					?>
					<!-- Slider Title Ends Here -->
					
					<!-- .top-nav-menu --> 
					<div class="top-nav-menu span8">							
						<div class="top-nav-menu">
							<?php 
								if( has_nav_menu( 'header' ) ) {
									wp_nav_menu(array( 'container_class' => 'leadsurf-menu', 'container_id' => 'skenav', 'menu_id' => 'menu-main','theme_location' => 'header' )); 
								} else {
							?>
							<div class="leadsurf-menu" id="skenav">
								<ul id="menu-main" class="menu">
									<?php wp_list_pages('title_li=&depth=0'); ?>
								</ul>
							</div>
							<?php } ?>
						</div>

					</div>
					<!-- .top-nav-menu --> 
				</div>
			</div>
		</div>
		<!-- #skehead -->
	</div>
	<!-- glow --> 
</div>


<!-- #header -->
<div id="main" class="clearfix">
