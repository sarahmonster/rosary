jQuery(function() {
    var $BODY = jQuery('body');
    var $MENU = jQuery('.menu-header');
    var $NAV = jQuery('#nav');
    var TIMEOUT_WAIT = 10;
    var waitToRunBGAgain = false;
    var waitToRunNavCheckAgain = false;

    if (window.location.hash !== '') {
        window.location.hash = '';
    }

    function iOSHeight() {
        return (window.navigator.userAgent.match(/iPhone/i) || window.navigator.userAgent.match(/iPod/i)) ? 60 : 0;
    }

    function windowHeight() {
        return window.document.documentElement.clientHeight || jQuery(window).height();
    }

    function setAbsoluteOrFixed(force) {
        if (force === true || !waitToRunNavCheckAgain) {
            waitToRunNavCheckAgain = true;
            if (jQuery(window).width() > 767 || !iOSHeight()) {
                $NAV.css('position', 'inherit');
                $NAV.css('top', 'inherit');
            } else if ($NAV.height() < windowHeight()) {
                $NAV.css('position', 'fixed');
                $NAV.css('top', (52 - iOSHeight()) + 'px');
            } else if (jQuery(window).scrollTop() < ($NAV.height() - windowHeight() - iOSHeight())) {
                $NAV.css('position', 'absolute');
                $NAV.css('top', '52px');
            } else {
                $NAV.css('position', 'fixed');
                $NAV.css('top', -111 - (iOSHeight() && jQuery(window).height() < 356 ? iOSHeight() - 8 : -111) + 'px');
            }

            setTimeout(function() {
                waitToRunNavCheckAgain = false;
            }, TIMEOUT_WAIT);
        }
    }
    jQuery(window.document).on('resize scroll', setAbsoluteOrFixed);

    // Sanity check.
    setInterval(setAbsoluteOrFixed, 5000);

    if (iOSHeight() > 0) {
        jQuery('#mobile-menu-on').on('click', function() {
            $BODY.css('overflow-y', 'hidden');
        });

        jQuery('#mobile-menu-off').on('click', function() {
            $BODY.css('overflow-y', 'auto');
        });
    }
});
