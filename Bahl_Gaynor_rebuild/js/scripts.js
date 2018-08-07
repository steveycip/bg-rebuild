jQuery(document).ready(function($) {

	// $('.navBox').on('touchstart', function() {
	// 	$(this).addClass('.show-me');
	// });

	// $('.navBox').on('touchend', function() {
	// 	$(this).removeClass('.show-me');
	// })

	$(".hamburg").click(function(){
		$(".hamburger-click").toggleClass('.show-me');
		$(".hamburg").toggleClass('.show-me');
		//$(".modal-lock").toggleClass('no-scroll');
	});

	$(window).on('resize', function() {

		$('.hamburger-click, .hamburg').removeClass('.show-me');
		$(".hamburg").removeClass('.show-me');
		//$(".modal-lock").removeClass('no-scroll');

	});

	$(window).load(function() {
		// $(".twb-logo").css('filter','blur(0px)');
		$(".main-content").css('opacity','1');
	});

	$('a[href*=#]:not([href=#])').click(function() {
	    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') 
	        || location.hostname == this.hostname) {

	        var target = $(this.hash);
	        target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
	           if (target.length) {
	             $('html,body').animate({
	                 scrollTop: target.offset().top
	            }, 1000);
	            return false;
	        }
	    }
	});

});