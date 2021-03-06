/**
 * Layout related scripts.
 */

(function ($) {

    $.extend($.easing, {
            easeInCubic: function (x, t, b, c, d) {
                return c * (t /= d) * t * t + b;
            },
            easeOutCubic: function (x, t, b, c, d) {
                return c * ((t = t / d - 1) * t * t + 1) + b;
            },
            easeInOutCubic: function (x, t, b, c, d) {
                if ((t /= d / 2) < 1) {
                    return c / 2 * t * t * t + b;
                }
                return c / 2 * ((t -= 2) * t * t + 2) + b;
            }
        }
    );

    var $body = $('body');

    /* Toggle class for sidebar show/hide */
    var $sidebar_switch = $('.toggle-sidebar');
    $sidebar_switch.click(function () {
        $body.toggleClass('sidebar-closed');
    });

    /* Open sidebar when button is focused */
    $sidebar_switch.focus(function () {
        if ($body.hasClass('sidebar-closed')) {
            $body.removeClass('sidebar-closed');
        }
    });


    var $widget_area = $('.widget-area');

    /* Check if there is sidebar on the page */
    if ($widget_area.length) {

        var totalSidebarH = $widget_area.offset().top + $widget_area.height();
        var $topSidebarToggle = $('.main-sidebar > .toggle-sidebar');
        var $bottomSidebarToggle = $widget_area.find('.toggle-sidebar');
        var $mainSidebar = $('.main-sidebar');

        /* Fix sidebar in place when scrolled to it's bottom */
        if (totalSidebarH > $(window).height()) {
            $(window).scroll(function () {
                $bottomSidebarToggle.removeClass('sticky-sidebar-toggle');
                if (( $(window).scrollTop() + $(window).height()) >= totalSidebarH) {
                    $widget_area.addClass('stick-sidebar');
                } else {
                    $widget_area.removeClass('stick-sidebar');

                    /* Place toggle button at the bottom of closed sidebar if top button is not visible */
                    if (( $topSidebarToggle.offset().top + $topSidebarToggle.height() < $(window).scrollTop() - 50 )) {
                        $bottomSidebarToggle.addClass('sticky-sidebar-toggle');
                    }
                }
            });
        } else {
            /* Fix sidebar in place when it's shorter than window */
            $bottomSidebarToggle.hide();
            $(window).scroll(function () {
                if ($(window).scrollTop() > 71) {
                    $mainSidebar.addClass('fixed-sidebar');
                } else {
                    $mainSidebar.removeClass('fixed-sidebar');
                }
            });
        }

        /* Set minimal height of sidebar to fix scrolling problem when main content is to short */
        $('.site-content').css('min-height', function () {
            var $headerImage = $('.header-image');
            return Math.max($(window).height() - $mainSidebar.offset().top - 1 - $headerImage.height(), $mainSidebar.outerHeight() + $mainSidebar.offset().top - $headerImage.height());
            //return $( window).height() - $mainSidebar.offset().top -1;
        });
    }

})(jQuery);