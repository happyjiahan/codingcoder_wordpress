<!DOCTYPE html>
<html <?php language_attributes( 'html' ); ?>>

<head>
<?php wp_head(); // Hook required for scripts, styles, and other <head> items. ?>
</head>

<body <?php hybrid_attr( 'body' ); ?>>

	<div id="container">

		<div class="skip-link">
			<a href="#content" class="screen-reader-text"><?php _e( 'Skip to content', 'mixr' ); ?></a>
		</div><!-- .skip-link -->

		<?php hybrid_get_menu( 'primary' ); // Loads the menu/primary.php template. ?>



		<header <?php hybrid_attr( 'header' ); ?>>
			<div class="wrap">

				<?php if ( display_header_text() ) : // If user chooses to display header text. ?>

					<div id="branding">
						<?php hybrid_site_title(); ?>
						<?php hybrid_site_description(); ?>
					</div><!-- #branding -->

				<?php endif; // End check for header text. ?>

				<?php hybrid_get_menu( 'secondary' ); // Loads the menu/secondary.php template. ?>

			</div><!-- .wrap -->
		</header><!-- #header -->

		<div class="wrap">
			<?php if ( get_header_image() && !display_header_text() ) : // If there's a header image but no header text. ?>

				<a href="<?php echo esc_url( home_url() ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name' ) ); ?>" rel="home"><img class="header-image" src="<?php esc_url( header_image() ); ?>" width="<?php echo esc_attr( get_custom_header()->width ); ?>" height="<?php echo esc_attr( get_custom_header()->height ); ?>" alt="" /></a>

			<?php elseif ( get_header_image() ) : // If there's a header image. ?>

				<img class="header-image" src="<?php esc_url( header_image() ); ?>" width="<?php echo esc_attr( get_custom_header()->width ); ?>" height="<?php echo esc_attr( get_custom_header()->height ); ?>" alt="" />

			<?php endif; // End check for header image. ?>
		</div>

		<div id="main" class="main">

			<?php hybrid_get_menu( 'breadcrumbs' ); // Loads the menu/breadcrumbs.php template. ?>
