var $j = jQuery.noConflict();
/* ---------------------------------------------------- */
/*	PARALLAX											*/
/* ---------------------------------------------------- */
jQuery.fn.parallax = function(xpos, speedFactor) {
'use strict';
var firstTop, methods = {};
return this.each(function(idx, value) {
var $this = jQuery(value), firstTop = $this.offset().top;
if (arguments.length < 1 || xpos === null)
xpos = "50%";
if (arguments.length < 2 || speedFactor === null)
speedFactor = 0.1;
methods = {
update: function() {
var pos = jQuery(window).scrollTop();
$this.each(function() {
$this.css('backgroundPosition', xpos + " " + Math.round((firstTop - pos) * speedFactor) + "px");
});
},
init: function() {
this.update();
jQuery(window).on('scroll', methods.update);
}
}
return methods.init();
});
};

//MOBILE MENU -----------------------------------------
//-----------------------------------------------------
jQuery(document).ready(function(){
	'use strict';
	jQuery('#menu-main').superfish();
	jQuery('#menu-main li.current-menu-item,#menu-main li.current_page_item,#menu-main li.current-menu-parent,#menu-main li.current-menu-ancestor,#menu-main li.current_page_ancestor').each(function(){
		jQuery(this).prepend('<span class="item_selected"></span>');
	});
});

(function( $ ) {
'use strict';
	$.fn.sktmobilemenu = function(options) { 
	var defaults = {
		'fwidth': 700
	};

		//call in the default otions
		var options = $.extend(defaults, options);
		var obj = $(this);
		return this.each(function() {
			if($(window).width() < options.fwidth) {
				sktMobileRes();
			}

			$(window).resize(function() {
				if($(window).width() < options.fwidth) {
					sktMobileRes();
				}else{
					sktDeskRes();
				}
			});
			function sktMobileRes() {
				jQuery('#menu-main').superfish('destroy');
				obj.addClass('leadsurf-mob-menu').hide();
				obj.parent().css('position','relative');
					if(obj.prev('.sktmenu-toggle').length === 0) {
						obj.before('<div class="sktmenu-toggle" id="responsive-nav-button"></div>');
					}
				obj.parent().find('.sktmenu-toggle').removeClass('active');
			}

			function sktDeskRes() {
				jQuery('#menu-main').superfish('init');
				obj.removeClass('leadsurf-mob-menu').show();
				if(obj.prev('.sktmenu-toggle').length) {
					obj.prev('.sktmenu-toggle').remove();
				}
			}

			obj.parent().on('click','.sktmenu-toggle',function() {
				if(!$(this).hasClass('active')){
					$(this).addClass('active');
					$(this).next('ul').stop(true,true).slideDown();
				}
				else{
					$(this).removeClass('active');
					$(this).next('ul').stop(true,true).slideUp();
				}
			});
		});
};
})( jQuery );


jQuery(document).ready(function ($) {
	'use strict';
	document.getElementById('s') && document.getElementById('s').focus();
});
jQuery(document).ready(function(){
	'use strict';
	jQuery( ".sf-with-ul" ).append( '<span class="caret"></span>' );
});

jQuery(window).load(function(){ 
	if(jQuery('#skenav .leadsurf-mob-menu').length > 0){		
		jQuery('#skenav .leadsurf-mob-menu').css('width',jQuery('.row-fluid').width());
	}
});


jQuery(window).load(function(){
	'use strict';
	/*jQuery('#full-division-box').parallax("center", 0.2);*/
	jQuery('#home-about-us').parallax("center", 0.2);	
});


//BACK TO TOP -----------------------------------------
//-----------------------------------------------------
jQuery(document).ready( function() {
'use strict';
jQuery('#back-to-top,#backtop').hide();
jQuery(window).scroll(function() {
if (jQuery(this).scrollTop() > 100) {
jQuery('#back-to-top,#backtop').fadeIn();
} else {
jQuery('#back-to-top,#backtop').fadeOut();
}
});
jQuery('#back-to-top,#backtop').click(function(){
jQuery('html, body').animate({scrollTop:0}, 'slow');
});
});
jQuery(window).load(function() {
'use strict';
var max = -1;
jQuery(".flexslider .slides li").each(function() {
var h = jQuery(this).height();
max = h > max ? h : max;
jQuery('.flexslider').css({'min-height': max});
});
});
jQuery(window).resize(function() {
'use strict';
var max = -1;
jQuery(".flexslider .slides li").each(function() {
var h = jQuery(this).height();
max = h > max ? h : max;
jQuery('.flexslider').css({'min-height': max});
});
});


jQuery(document).ready(function($) {
	jQuery("#home li a").click(function(event){
		if (/#/.test(this.href)) {
			event.preventDefault();
			jQuery('html,body').animate({scrollTop:jQuery('#'+this.hash.substr(1)).offset().top}, 700);
		}
	});
});