/*Stick Head */
$(window).scroll(function () {
	var scroll = $(window).scrollTop();
	if (scroll >= 1) {
		$("header").addClass("Sticklendin");
	} else {
		$("header").removeClass("Sticklendin");
	}
});


$(window).scroll(function () {
	var scroll = $(window).scrollTop();
	if (scroll >= 250) {
		$("#clickToUp").addClass('show');
	} else {
		$("#clickToUp").removeClass('show');
	}
});

$('#clickToUp').each(function(){
	$(this).click(function(){ 
		$('html,body').animate({ scrollTop: 0 }, 'slow');
		return false; 
	});
});


$( "#hamburger-9" ).click(function() {
	$(this).toggleClass("is-active");
	$('nav.navbar.navbar-inverse').toggleClass('menuOpen');
	$('header').toggleClass('menuOpen');
	$('div.NavList').toggleClass('menuOpen');
});


$(function(){
	$('div.ListKey').on('click',function(event){
		event.preventDefault()
		$(this).parent().find('ul').first().toggle(300);
	});
});

$('.ProductMenu').ready(function() {
	$('.ProductMenu').animate({
		scrollLeft: $(' .ProductMenu li.active').offset().left-90
	}, 1000, function() {
	});
});



if ($(window).width() < 991) {
	$( "#li-first" ).click(function() {
		$('#li-first > .dropdownArea').fadeToggle(250);
		$('#li-second > .dropdownArea').hide(250);
		$('#li-last > .dropdownArea').hide(250);
	});
	$( "#li-second" ).click(function() {
		$('#li-second > .dropdownArea').fadeToggle(250);
		$('#li-first  > .dropdownArea').hide(250);
		$('#li-last  > .dropdownArea').hide(250);
	});
	$( "#li-last" ).click(function() {
		$('#li-last > .dropdownArea').fadeToggle(250);
		$('#li-first  > .dropdownArea').hide(250);
		$('#li-second  > .dropdownArea').hide(250);
	});

}
else {
	$( "#li-first" ).hover(function() {
		$('#li-first > .dropdownArea').fadeToggle(250);
	});
	$( "#li-second" ).hover(function() {
		$('#li-second > .dropdownArea').fadeToggle(250);
	});
	$( "#li-last" ).hover(function() {
		$('#li-last > .dropdownArea').fadeToggle(250);
	});
}


$('.owl-Slider').owlCarousel({
	loop:true,
	margin:0,
	navText:['<i class="fas fa-chevron-left"></i>','<i class="fas fa-chevron-right"></i>'],
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
$('.owl-news').owlCarousel({
	loop:true,
	margin:20,
	nav:true,
	dots:false,
	responsive:{
		0:{
			items:1
		},
		600:{
			items:2
		},
		1000:{
			items:3
		}
	}
});
$('.ref-Slide').owlCarousel({
	autoplay:true,
	autoplayTimeout:2000,
	autoplayHoverPause:false,
	loop:true,
	margin:10,
	nav:false,
	dots:false,
	responsive:{
		0:{
			items:2
		},
		600:{
			items:7
		},
		1000:{
			items:10
		}
	}
})

$('.owl-newsdetail').owlCarousel({
	loop:false,
	margin:10,
	nav:true,
	dots:false,
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
})


$('.owl-altpage').owlCarousel({
	loop:false,
	margin:10,
	nav:true,
	dots:false,
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
})

$('.owl-services').owlCarousel({
	smartSpeed:500,
	stagePadding: 90,
	loop:true,
	margin:10,
	dots:false,
	nav:true,
	responsive:{
		0:{
			items:1,
			stagePadding: 0
		},
		600:{
			items:1,
			stagePadding:50
		},
		768:{
			items:1,
			stagePadding:70
		},

		1000:{
			items:1
		}
	}
})