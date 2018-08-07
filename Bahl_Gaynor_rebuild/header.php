<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<?php if ( is_singular() && pings_open( get_queried_object() ) ) : ?>
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<?php endif; ?>
	<?php wp_head(); ?>

<!-- fonts -->
<!-- Font Awesome -->
<script src="https://use.fontawesome.com/b487819cd0.js"></script>	

<!-- Open Sans -->
<link async href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">

<!-- jQuery -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

<script>

//global for mouse_over_logo
var mouse_over_logo = false;

function scroll_stuff(offset)
{
	scroll_start = $(this).scrollTop();
    if (scroll_start > offset.top) {
        $(".header-container").css('background-color', 'white').css('box-shadow', '0 3px 15px rgba(0, 0, 0, 0.75)');
        $(".navigation ul li a").css('color', '#001C00');
        $("#not_green").css('color', '#001C00');
        $(".hamburg").css('color', '#001C00');
        $("ul.sub-menu li a").css('color','black');
        $("header .show-me.hamburg:before").css('color', '#001C00');
        $("#j-money").attr("src","/wp-content/uploads/2017/01/transparent-green-logo-short.png");
        console.log('inside if', mouse_over_logo, 'scroll:',scroll, 'scroll-start:',scroll_start, offset.top);

		if(mouse_over_logo && scroll_start > offset.top) {
		       $("#j-money").attr("src","/wp-content/uploads/2017/01/transparent-logo-short.png");
		       console.log('inside nested if');
		    } else {
		    	$("#j-money").attr("src","/wp-content/uploads/2017/01/transparent-green-logo-short.png");
		    	console.log('inside nested else');
		    }

		$(".home-link").mouseover(function(){
		   $("#j-money").attr("src","/wp-content/uploads/2017/01/transparent-logo-short.png");
		   mouse_over_logo = true;
		});

        $(".home-link").mouseout(function(){
		   $("#j-money").attr("src","/wp-content/uploads/2017/01/transparent-green-logo-short.png");
		   mouse_over_logo = false;
		});

		$("#menu-item-40").mouseout(function(){
	 		$(this).css('color','white');
	 	});

    } else {
        $('.header-container').css('background-color', 'transparent').css('box-shadow', '0 3px 15px rgba(0, 0, 0, 0)');
        $(".navigation ul li a").css('color', 'black');
        $(".hamburg").css('color', 'white');
        $("header .show-me.hamburg:before").css('color', 'white');
        $(".home-link-text").css('color', 'white');
        $("#j-money").attr("src","/wp-content/uploads/2017/01/transparent-logo-short.png");

    	$(".home-link").mouseout(function(){
		   $("#j-money").attr("src","/wp-content/uploads/2017/01/transparent-logo-short.png");
		   mouse_over_logo = false;
		});

    }
} //end scroll_stuff functon

$(document).ready(function () {

    


}); //emd doc.ready



jQuery(document).ready(function($) {

	$('.hamburg-click').on('touchstart', function() {
		$(this).addClass('show-me');
	});

	$('.hamburg-click').on('touchend', function() {
		$(this).removeClass('show-me');
	})

	$(".hamburg").click(function(){
		$(".hamburger-click").toggleClass('show-me');
		$(".hamburg").toggleClass('show-me');
		//$(".modal-lock").toggleClass('no-scroll');
		console.log("hello");
	});

	$(window).on('resize', function() {

		$('.hamburger-click, .hamburg').removeClass('show-me');
		$(".hamburg").removeClass('show-me');
		//$(".modal-lock").removeClass('no-scroll');

	});

});

</script>


</head>

<body <?php body_class(); ?> >
<div id="page" class="site">
	<div class="site-inner">
		<header id="masthead" class="site-header" role="banner">
			<div class="header-container">
			<div class="max-width-header">

			<div class="logo">
				<a href="/">
					<img src="<?php echo get_bloginfo( 'template_directory' ); ?>/images/bg-logo.png" />
				</a>
			</div>
			<div class="right-side">
			<div class="top-nav-links col-xs-12">
			<a href="/" target="blank"> Client Login </a> | <a href="/" target="blank"> Contact Us </a>
			</div>
				<div class="bottom-nav-links col-xs-10">
					<?php wp_nav_menu( array( 'theme_location' => 'menu' ) ); ?>
				</div>
				<div class="col-xs-2 icons">
					<a href="/"><i class="fa fa-linkedin fa-md"></i> </a>
					<a href="/"><i class="fa fa-twitter fa-md"></i> </a>
				</div>
			</div>
			</div>
			</div>
			


<!-- 
				<div class="col-sm-2">
					<h1>this is not the content you're looking for</h1>
				</div>
 -->

			
		</header><!-- .site-header -->

		<div id="content" class="site-content">
