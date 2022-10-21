// @ts-nocheck
jQuery(document).ready(() => {
    styleFlickerNavbar('nav.navbar.navbar-expand-lg.navbar-dark.bg-dark', 'navbar-scrolled');
});

function styleFlickerNavbar(sourceStyle, changedStyle) {
	let headerTop = jQuery(sourceStyle).offset().top;
	jQuery(window).scroll(() => {
		let scrollVal = jQuery(window).scrollTop();
		(scrollVal > headerTop) ? jQuery(sourceStyle).addClass(changedStyle) : jQuery(sourceStyle).removeClass(changedStyle);
	});
}
    
