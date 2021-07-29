jQuery(document).ready(function($) {
	/*click icon hamburger mobile menu*/
	$('.hamburger').click(function(){
		$('.hamburger').toggleClass('is-active');
		$('.mm-menu').toggleClass('active-mm-menu');
		$('#mmobile-nav').attr('style', 'display: block');
		$('#mm-0').attr('style', 'min-height: 932px');
		$('#mmobile-nav').toggleClass('mm-menu_opened');
		$('html').toggleClass('mm-wrapper_opened mm-wrapper_opening mm-wrapper_blocking');
		$('body').css('overflow', 'hidden');
		$('#mm-1').removeClass('mm-panel_opened');
		$('#mm-2').removeClass('mm-panel_opened');
		setTimeout(function(){
		$('#mmobile-nav').addClass('mm-menu_pagedim-black')
		},100);

    });
 });

jQuery(document).ready(function($) {
	/*event left click*/
	$('.mm-page_blocker').click(function(){
		$('html').removeClass('mm-wrapper_opened mm-wrapper_opening mm-wrapper_blocking');
		$('.mm-menu').removeClass('active-mm-menu');
		$('.mm-page_wrap').removeClass('mm-page_blocker');
		$('.hamburger').removeClass('is-active');
		$('#mmobile-nav').removeClass('mm-menu_opened');
		$('button.hamburger').focus();
		$('body').css('overflow', 'visible');
		$('#menu-mobile-menu').addClass('mm-panel_opened');
		$('#menu-mobile-menu').removeClass('mm-panel_opened-parent');
		$('#mmobile-nav').removeClass('mm-menu_pagedim-black');

});	


/*event right click*/
$('.mm-slideout').contextmenu(function() {

$('html').removeClass('mm-wrapper_opened mm-wrapper_opening mm-wrapper_blocking');
		$('.mm-menu').removeClass('active-mm-menu');
		$('.mm-page_wrap').removeClass('mm-page_blocker');
		$('.hamburger').removeClass('is-active');
		$('#mmobile-nav').removeClass('mm-menu_opened');
		$('button.hamburger').focus();
		$('body').css('overflow', 'visible');
		$('#menu-mobile-menu').addClass('mm-panel_opened');
		$('#menu-mobile-menu').removeClass('mm-panel_opened-parent');
		$('#mmobile-nav').removeClass('mm-menu_pagedim-black');
});
});

jQuery(document).ready(function($) {
	$('li').hover(function(){
		if ($(this).hasClass('single-menu')){
		$(this).find('ul').removeClass('menu-submenu-align-full_width');
		$(this).find('li').removeClass('menu-column');
}
    });
 });
jQuery(document).ready(function($) {
	$('li').hover(function(){
		if ($(this).hasClass('menu-1-3')){
		$(this).find('li').addClass('menu-column-1-3');
		}
    });
})
jQuery(document).ready(function($) {
	$('li').hover(function(){
		if ($(this).hasClass('menu-1-4')){
		$(this).find('li').addClass('menu-column-1-4');
		}
    });
})

/* mobile menu*/
jQuery(document).ready(function($) {
	$('a[href$="mm-1"]').click(function(){
		
		
		
		$('#menu-mobile-menu').addClass('mm-panel_opened-parent');
		$('#mm-1').addClass('mm-panel_opened');
		$('#menu-mobile-menu').removeClass('mm-panel_opened');
    });
 });
jQuery(document).ready(function($) {
	$('a[href$="mm-2"]').click(function(){
		
		$('#menu-mobile-menu').removeClass('mm-panel_opened');
		$('#menu-mobile-menu').toggleClass('mm-panel_opened-parent');

$('#mm-2').addClass('mm-panel_opened');
    });
 });
jQuery(document).ready(function($) {
	$('a.mm-btn_prev, .mm-navbar_title').click(function(){
		
		
		$('#menu-mobile-menu').removeClass('mm-panel_opened-parent');
		$('#menu-mobile-menu').addClass('mm-panel_opened');
		$('#mm-1').removeClass('mm-panel_opened');
		$('#mm-2').removeClass('mm-panel_opened');
	
    });
 });


/*Smooth scroll up*/
jQuery(document).ready(function($) {
$('.scroll-up').click(function () {
	        $("html, body").animate({
	            	scrollTop: 0
	        }, 500);
	        
	});
});