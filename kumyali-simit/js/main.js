$(document).ready(function(){
	$(".hamburger").click(function(){
		$(this).toggleClass("is-active");
		$('ul.MenuList').toggleClass('Open');
		$('body').toggleClass('blur');
	});
});

$("#write-comment").click(function(){
	$('.comment-form').slideToggle(300);
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

$('.owl-slider').owlCarousel({
	animateOut: 'fadeOut',
	animateIn: 'fadeIn',
	loop:true,
	margin:0,
	slideSpeed : 300,
	paginationSpeed : 400,
	dots:true,
	nav:false,
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


$('.owl-products').owlCarousel({
	loop:true,
	margin:0,
	dots:true,
	nav:false,
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



if ($(window).width() < 992) {
	$("header .header-nav .Nav > ul > li > a").clone().appendTo("div.mobileMenu");
	$("header .header-nav .Nav > ul > li.link").hide();
};


window.onload = function() {
	setTimeout(function(){ $("#onload").addClass('loading');}, 1400);
};


$(".header-nav .hamburger").click(function() {
	$('.mobileMenu').toggleClass('active');
	$('.mobileOverMenu').toggleClass('active');

});


$(".goTop").click(function() {
	$("html, body").animate({ scrollTop: 0 }, 1000);
});

/*
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
*/