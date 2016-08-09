<?php
/**
 * Title: Theme Upsell.
 *
 * Description: Displays list of all Sketchtheme themes linking to it's pro and free versions.
 *
 *
 * @author   Sketchtheme
 * @license  http://www.opensource.org/licenses/gpl-license.php GPL v2.0 (or later)
 * @link     https://sketchthemes.com/
 */

// Add stylesheet and JS for sell page.
function leadsurf_lite_sell_style() {
    // Set template directory uri
    $directory_uri = get_template_directory_uri();
    wp_enqueue_style( 'upsell_style', get_template_directory_uri() . '/css/upsell.css' );
}
add_action( 'admin_init', 'leadsurf_lite_sell_style' );

// Add upsell page to the menu.
function leadsurf_lite_add_upsell() {
    $page = add_theme_page( __('Sketch Themes', 'leadsurf-lite'), __('Sketch Themes', 'leadsurf-lite'), 'administrator', 'sketch-themes', 'leadsurf_lite_display_upsell' );
    add_action( 'admin_print_styles-' . $page, 'leadsurf_lite_sell_style' );
}
add_action( 'admin_menu', 'leadsurf_lite_add_upsell',12 );

// Define markup for the upsell page.
function leadsurf_lite_display_upsell() {

    // Set template directory uri
    $directory_uri = get_template_directory_uri().'/images';
    ?>

    <div class="wrap">
    <div class="container-fluid">
    <div id="upsell_container">
    <div class="clearfix row-fluid">
        <div id="upsell_header" class="span12">
            <div class="donate-info">
              <strong><?php _e('To Activate All Features, Please Upgrade to Pro version!', 'leadsurf-lite'); ?></strong><br>
              <a title="<?php _e('Upgrade to Pro', 'leadsurf-lite') ?>" href="https://sketchthemes.com/premium-themes/wordpress-landing-page-theme-for-lead-capture/" target="_blank" class="upgrade"><?php _e('Upgrade to Pro', 'leadsurf-lite'); ?></a> <a title="<?php _e('Setup Instructions', 'leadsurf-lite'); ?>" href="<?php echo get_template_directory_uri(); ?>/readme.txt" target="_blank" class="donate"><?php _e('Setup Instructions', 'leadsurf-lite'); ?></a>
              <a title="<?php _e('Rate LeadSurf Lite', 'leadsurf-lite'); ?>" href="https://wordpress.org/support/view/theme-reviews/leadsurf-lite" target="_blank" class="review"><?php _e('Rate LeadSurf Lite', 'leadsurf-lite'); ?></a>
              <a title="<?php _e('Theme Test Drive', 'leadsurf-lite'); ?>" href="http://trial.sketchthemes.com/wp-signup.php" target="_blank" class="review"><?php _e('Theme Test Drive', 'leadsurf-lite'); ?></a>
            </div>
        </div>
    </div>
    <div id="upsell_themes" class="clearfix row-fluid">

    
    <!-- -------------- LeadSurf Pro ------------------- -->

        <div id="LeadSurf" class="row-fluid">
            <div class="theme-container">
                <div class="theme-image span3">
                    <a href="https://sketchthemes.com/themes/leadsurf-lead-capture-landing-page-wordpress-theme/" target="_blank">
                        <img src="<?php echo $directory_uri; ?>/LeadSurf.png"  alt="<?php __('LeadSurf Theme', 'leadsurf-lite') ?>" width="300px"/>
                    </a>
                </div>
                <div class="theme-info span9">
                    <a class="theme-name" href="https://sketchthemes.com/themes/leadsurf-lead-capture-landing-page-wordpress-theme/" target="_blank"><h4><?php _e('LeadSurf - App Launch WordPress Theme','leadsurf-lite');?></h4></a>

                    <div class="theme-description">
                        <p><?php _e("Catching up with trend leading to ultra-modern business style, SketchThemes brings to you its highly innovative and distinctly appealing Lead Capture Cum Landing Page WordPress Theme - LeadSurf that serves the users with lead capture form along with app landing page.",'leadsurf-lite'); ?></p>

                    </div>

                    <a class="free btn btn-success" href="https://wordpress.org/themes/download/leadsurf-lite.1.0.6.zip?nostats=1" target="_blank"><?php _e( 'Try LeadSurf Free', 'leadsurf-lite' ); ?></a>
                    <a class="buy  btn btn-info" href="https://sketchthemes.com/preview/leadsurf/" target="_blank"><?php _e( 'View Demo', 'leadsurf-lite' ); ?></a>
                    <a class="buy btn btn-primary" href="https://sketchthemes.com/premium-themes/wordpress-landing-page-theme-for-lead-capture/" target="_blank"><?php _e( 'Buy LeadSurf Pro', 'leadsurf-lite' ); ?></a>
                    
                </div>
            </div>
        </div>
		
    </div>
    <!-- upsell themes -->
    </div>
    <!-- upsell container -->
    </div>
    <!-- container-fluid -->
    </div>
<?php
}

?>