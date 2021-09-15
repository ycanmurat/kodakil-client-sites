$(document).ready(function(){
	$(".hamburger").click(function(){
		$(this).toggleClass("is-active");
	});

	$('#nav-icon2').click(function(){
		$(this).toggleClass('open');
		$('header div.main-nav div.Navigator > ul').toggleClass('show');
		$('li.dropdown-link').removeClass('active');
	});

	$('header div.main-nav div.Navigator li').click(function(){
		$('li.dropdown-link').removeClass('active');
		$(this).toggleClass('active');
	});

});





$('.owl-slider').owlCarousel({
	loop:true,
	margin:0,
	dots:true,
	autoplay:true,
	autoplayTimeout:2500,
	autoplayHoverPause:false,
	nav:true,
	smartSpeed:900,
	responsive:{
		0:{
			items:1
		},
		600:{
			items:1
		},
		1000:{
			items:1
		}
	}
});
$('.owl-Referances').owlCarousel({
	autoplay:true,
	autoplayTimeout:2000,
	autoplayHoverPause:true,
	loop:true,
	margin:20,
	dots:false,
	nav:false,
	responsive:{
		0:{
			items:2
		},
		600:{
			items:3
		},
		1000:{
			items:5
		}
	}
});

$('.owl-Team').owlCarousel({
	loop:true,
	dots:false,
	margin:30,
	nav:true,
	navContainer:'#teamNav',
	responsive:{
		0:{
			items:1
		},
		600:{
			items:2
		},
		1000:{
			items:4
		}
	}
});



window.onload = function() {
	setTimeout(function(){ $("#onload").addClass('loading');}, 1400);
};


$(document).ready(function(){
	$(".R-toggle").click(function(){
		$('.rex-menu').addClass("active");
		$('.four-overlay').fadeIn(500);
		$('.main-nav div.info-menu').addClass('off');
	});

	$(".r-home").click(function(){
		$('.R-menu').slideUp(300);
		$('.home-center').slideDown(300);
	});

	$(".r-envelope").click(function(){
		$('.R-menu').slideUp(300);
		$('.envelope-contact').slideDown(300);
	});


	$(".r-phone").click(function(){
		$('.R-menu').slideUp(300);
		$('.call-us').slideDown(300);
	});

	$(".r-clock").click(function(){
		$('.R-menu').slideUp(300);
		$('.work-clock').slideDown(300);
	});


	$(".four-overlay").click(function(){
		$('.R-menu').fadeOut(500);
		$('.four-overlay').fadeOut(500);
		$('.rex-menu').removeClass("active");
		$('.main-nav div.info-menu').removeClass('off');
	});

});



$(".goTop").click(function() {
	$("html, body").animate({ scrollTop: 0 }, 1000);
});


$(window).scroll(function() {    
	var scroll = $(window).scrollTop();
	if (scroll >= 200) {
		$(".goTop").addClass('show');
	}else{
		$(".goTop").removeClass('show');
	}
});

$(window).scroll(function() {    
	var scroll = $(window).scrollTop();
	if (scroll >= 108) {
		$("header").addClass("FixedHead");
		$("body").addClass("FixedHead");
	}else{
		$("header").removeClass("FixedHead");
		$("body").removeClass("FixedHead");
	}
});

/*
Dropzone JS
*/
