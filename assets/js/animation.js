// .bounce, .flash, .pulse, .shake, .swing, .tada, .wobble, .bounceIn, .bounceInDown, .bounceInLeft, .bounceInRight, .bounceInUp, .bounceOut, .bounceOutDown, .bounceOutLeft, .bounceOutRight, .bounceOutUp, .fadeIn, .fadeInDown, .fadeInDownBig, .fadeInLeft, .fadeInLeftBig, .fadeInRight, .fadeInRightBig, .fadeInUp, .fadeInUpBig, .fadeOut, .fadeOutDown, .fadeOutDownBig, .fadeOutLeft, .fadeOutLeftBig, .fadeOutRight, .fadeOutRightBig, .fadeOutUp, .fadeOutUpBig, .flip, .flipInX, .flipInY, .flipOutX, .flipOutY, .lightSpeedIn, .lightSpeedOut, .rotateIn, .rotateInDownLeft, .rotateInDownRight, .rotateInUpLeft, .rotateInUpRight, .rotateOut, .rotateOutDownLeft, .rotateOutDownRight, .rotateOutUpLeft, .rotateOutUpRight, .slideInDown, .slideInLeft, .slideInRight, .slideOutLeft, .slideOutRight, .slideOutUp, .rollIn, .rollOut, .zoomIn, .zoomInDown, .zoomInLeft, .zoomInRight, .zoomInUp

jQuery.noConflict();
jQuery(window).load(function(){
jQuery(window).scroll(function(){
    // This is then function used to detect if the element is scrolled into view
    function elementScrolled(elem)
    {
        var docViewTop = jQuery(window).scrollTop();
        var docViewBottom = docViewTop + jQuery(window).height();
        var elemTop = jQuery(elem).offset().top;
        return ((elemTop <= docViewBottom) && (elemTop >= docViewTop));
    }	
    // This is where we use the function to detect if ".box2" is scrolled into view, and when it is add the class ".animated" to the <p> child element	
	if (jQuery('.home1_section_area .center .welcome-box').length > 0) { 
	if(elementScrolled('.home1_section_area .center .welcome-box')) {
        var els = jQuery('.home1_section_area .center .welcome-box'),
            i = 0,
            f = function () {
                jQuery(els[i++]).addClass('fadeIn');
                if(i < els.length) setTimeout(f, 400);
            };
        f();
    }}

	if (jQuery('.home1_section_area .center .package-box').length > 0) { 
	if(elementScrolled('.home1_section_area .center .package-box')) {
        var els = jQuery('.home1_section_area .center .package-box'),
            i = 0,
            f = function () {
                jQuery(els[i++]).addClass('fadeInUp');
                if(i < els.length) setTimeout(f, 400);
            };
        f();
    }}

	if (jQuery('.home2_section_area .center .feature-box').length > 0) { 
    if(elementScrolled('.home2_section_area .center .feature-box')) {
        var els = jQuery('.home2_section_area .center .feature-box'),
            i = 0,
            f = function () {
                jQuery(els[i++]).addClass('zoomIn');
                if(i < els.length) setTimeout(f, 400);
            };
        f();
    }}
	
	if (jQuery('.home3_section_area .center .plan-box').length > 0) { 
    if(elementScrolled('.home3_section_area .center .plan-box')) {
        var els = jQuery('.home3_section_area .center .plan-box'),
            i = 0,
            f = function () {
                jQuery(els[i++]).addClass('fadeInUp');
                if(i < els.length) setTimeout(f, 400);
            };
        f();
    }}
	  
	if (jQuery('.home4_section_area .center .skt-steps-box').length > 0) { 
    if(elementScrolled('.home4_section_area .center .skt-steps-box')) {
        var els = jQuery('.home4_section_area .center .skt-steps-box'),
            i = 0,
            f = function () {
                jQuery(els[i++]).addClass('fadeInLeft');
                if(i < els.length) setTimeout(f, 400);
            };
        f();
    }}
	
	if (jQuery('.home5_section_area .center .post_block_style1').length > 0) { 
    if(elementScrolled('.home5_section_area .center .post_block_style1')) {
        var els = jQuery('.home5_section_area .center .post_block_style1'),
            i = 0,
            f = function () {
                jQuery(els[i++]).addClass('fadeInUp');
                if(i < els.length) setTimeout(f, 400);
            };
        f();
    }}

	if (jQuery('.home6_section_area .center .skt-coll-columns-2').length > 0) { 
    if(elementScrolled('.home6_section_area .center .skt-coll-columns-2')) {
        var els = jQuery('.home6_section_area .center .skt-coll-columns-2'),
            i = 0,
            f = function () {
                jQuery(els[i++]).addClass('fadeIn');
                if(i < els.length) setTimeout(f, 400);
            };
        f();
    }}
	
	if (jQuery('.home7_section_area .center').length > 0) { 
    if(elementScrolled('.home7_section_area .center')) {
        var els = jQuery('.home7_section_area .center'),
            i = 0,
            f = function () {
                jQuery(els[i++]).addClass('fadeInUp');
                if(i < els.length) setTimeout(f, 400);
            };
        f();
    }}
	
	if (jQuery('.home8_section_area .center .clientbox').length > 0) { 
    if(elementScrolled('.home8_section_area .center .clientbox')) {
        var els = jQuery('.home8_section_area .center .clientbox'),
            i = 0,
            f = function () {
                jQuery(els[i++]).addClass('flipInX');
                if(i < els.length) setTimeout(f, 400);
            };
        f();
    }}
	
	if (jQuery('.home9_section_area .center').length > 0) { 
    if(elementScrolled('.home9_section_area .center')) {
        var els = jQuery('.home9_section_area .center'),
            i = 0,
            f = function () {
                jQuery(els[i++]).addClass('fadeInUp');
                if(i < els.length) setTimeout(f, 400);
            };
        f();
    }}	
			
});
});
