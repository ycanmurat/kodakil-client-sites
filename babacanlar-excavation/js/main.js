$(document).ready(function(){
	$(".hamburger").click(function(){
		$(this).toggleClass("is-active");
		$('ul.MenuList').toggleClass('Open');
		$('body').toggleClass('blur');
	});
});


$(document).ready(function(){
	$("a.Link").on('click', function(event) {
		if (this.hash !== "") {
			var hash = this.hash;
			$('html, body').animate({
				scrollTop: $(hash).offset().top + -190
			}, 800, function(){
				window.location.hash = hash;
			});
		}
	});
});


function getSign(){
	$('#getLoginArea').hide(400);
	$('#getSignArea').show(400);
}

function getLogin(){
	$('#getSignArea').hide(400);
	$('#getLoginArea').show(400);

}

$('.owl-slider').owlCarousel({
	loop:true,
	margin:0,
	dots:true,
	nav:true,
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
