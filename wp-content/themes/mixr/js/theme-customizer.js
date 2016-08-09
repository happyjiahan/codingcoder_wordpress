/**
 * This file adds some LIVE to the Theme Customizer live preview. To leverage
 * this, set your custom settings to 'postMessage' and then add your handling
 * here. Your javascript should grab settings from customizer controls, and
 * then make any necessary changes to the page using jQuery.
 */
( function( $ ) {

	//Update site background color...
	wp.customize( 'color_primary', function( value ) {
		value.bind( function( newval ) {
			$('.widget-title, #menu-primary li li a:hover, #menu-secondary li li a:hover, #menu-primary ul ul li a:hover, #menu-secondary ul ul li a:hover, #menu-primary ul ul li a:focus, #menu-secondary ul ul li a:focus')
        .css('background-color', newval );

      $('.entry a, .widget a, #menu-secondary-items > li > a').css('color', newval );

		} );
	} );


} )( jQuery );
