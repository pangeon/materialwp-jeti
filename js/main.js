// @ts-nocheck
jQuery(document).ready(function() {
    //addClassWhenScrollPage('.navbar-static', '.navbar-scrolled');
    styleFixedHeader();

});

// // @ts-nocheck
// function addClassWhenScrollPage(className, fixedClassName) {
//     jQuery(window).scroll(function() {
//         if (isScrolled(className)) {
//             jQuery(className).addClass(fixedClassName);
//         } else {
//             jQuery(className).removeClass(fixedClassName);
//         }
//     });
// }

// // @ts-nocheck
// function isScrolled(className) {
//     let scrolled = jQuery(window).scrollTop > checkHTMLelementPosition('top', className) ? true : false;
//     return scrolled;  
// }

// // @ts-nocheck
// function checkHTMLelementPosition(position, className) {
//     let elementPosition = 0;
//     if (position === 'top') {
//         elementPosition = jQuery(className).offset().top;
//     } else if(position === 'left') {
//         elementPosition = jQuery(className).offset().left;
//     }
//     return elementPosition
// }

function styleFixedHeader() {
	var headerTop = jQuery('nav.navbar.navbar-expand-lg.navbar-dark.bg-dark').offset().top;
	jQuery(window).scroll(function() {
		var scrollVal = jQuery(window).scrollTop();
		if (scrollVal > headerTop) {
			jQuery('nav.navbar.navbar-expand-lg.navbar-dark.bg-dark').addClass('navbar-scrolled');
		} else {
			jQuery('nav.navbar.navbar-expand-lg.navbar-dark.bg-dark').removeClass('navbar-scrolled');
		}
	});
}
    
