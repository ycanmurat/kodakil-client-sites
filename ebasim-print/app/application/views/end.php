</body>
</html>



<!-- Bootstrap -->
<script src="<?=site_url('assets/Front/')?>assets/bootstrap/popper.min.js"></script>
<script src="<?=site_url('assets/Front/')?>assets/bootstrap/bootstrap4.min.js"></script>
<script src="<?=site_url('assets/Front/')?>js/custom.js?v=1.0"></script>
<script src='https://www.google.com/recaptcha/api.js'></script>






<!-- Swiper JS -->
<script src="<?=site_url('assets/Front/')?>assets/swipe-slider/swiper.jquery.min.js"></script>
<script>
	/* Slider [Old] */
	var swiperSlider = new Swiper('.SwiperSlider', {
		loop: true,
		nextButton: '.Slider-button-prev',
		prevButton: '.Slider-button-next'
	});

	/* Slider */
	var swiperSlider = new Swiper('.EbaskSlider', {
		loop: true,
		prevButton: '.Slider-button-prev',
		nextButton: '.Slider-button-next',
		speed: 500,
      	autoplay: 5000,
        autoplayDisableOnInteraction: true, 
	});

	

	/* swiperProductGallery JS */
	var swiper = new Swiper('.swiperProductGallery', {
      	loop: true,
      	nextButton: '.product-img-next',
      	prevButton: '.product-img-prev',
      	speed: 500,
      	autoplay: 5000,
        autoplayDisableOnInteraction: true, 
    	
    });
</script>

<!-- Owl JS -->
<script src="<?=site_url('assets/Front/')?>assets/owl-carousel/owl.carousel.min.js"></script>
<script>

	/* References */
	$('.owlReferences').owlCarousel({
		loop: true,
		margin: 10,
		nav: true,
		navText: [
		"<i class='fa fa-angle-left' aria-hidden='true'></i>",
		"<i class='fa fa-angle-right' aria-hidden='true'></i>"
		],
		autoplay: true,
		autoplayHoverPause: true,
		responsive: {
			0: {
				items: 1
			},
			600: {
				items: 2
			},
			1000: {
				items: 4
			},
			1250: {
				items: 5
			}
		}
	});

	/* SimilarPRoduct */
	$('.owlSimilarPRoduct').owlCarousel({
		loop: true,
		margin: 10,
		nav: true,
		navText: [
		"<i class='fa fa-angle-left' aria-hidden='true'></i>",
		"<i class='fa fa-angle-right' aria-hidden='true'></i>"
		],
		autoplay: true,
		autoplayHoverPause: true,
		responsive: {
			0: {
				items: 1
			},
			600: {
				items: 3
			},
			1000: {
				items: 4
			}
		}
	});

</script>


<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-110959042-2"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-110959042-2');
  gtag('config', 'AW-767388555');
</script>


<!-- Menu -->
<script>
	jQuery(document).ready(function($) {

		$( ".dropdownLink" ).mouseenter(function() {
			$('.dropdownLink').removeClass('active');
			$( ".Dropdown" ).removeClass('show');

			$(this).addClass('active');
			$(this).find( ".Dropdown" ).addClass('show');
		})
		.mouseleave(function() {
			$('.dropdownLink').removeClass('active');
			$(this).find( ".Dropdown" ).removeClass('show');
		});
	});
</script>


<!-- Tacking Kontrol -->
<script>
	jQuery(document).ready(function($) {
		$('#orderSearch').click(function(event) {
			$('.TrackingForm').slideUp();
			$('.TrackingEnd').slideDown();
		});

		$('#NewTracking').click(function(event) {
			$('.TrackingEnd').slideUp();
			$('.TrackingForm').slideDown();
		});
	});
</script>



<!-- Product Filters -->
<script src="<?=site_url('assets/Front/')?>assets/jqueryLiveFilter.js"></script>
<script>
$('#productFilterList').liveFilter('#liveSearch', '.filterItem', {
  	filterChildSelector: 'a'
});
</script>


<!-- Layout System -->
<script>
	$(document).ready(function(){
		$('.Column3').click(function() {
			$('.ColumnItem').removeClass('Active');
			$(this).addClass('Active');
			$('div').parents('#LayoutDesign').removeAttr('class');
			$('div').parents('#LayoutDesign').attr('class', 'filterItem col-lg-3');
		});
		$('.Column2').click(function() {
			$('.ColumnItem').removeClass('Active');
			$(this).addClass('Active');
			$('div').parents('#LayoutDesign').removeAttr('class');
			$('div').parents('#LayoutDesign').attr('class', 'filterItem col-lg-4');
		});
	});
</script>



<!-- fileUpload -->
<script src="<?=site_url('assets/Front/')?>assets/fileUpload/fileUpload.js"></script>
<script>
	var MyKendoFileCount = 0;
    $(document).ready(function() {
        $('.offerform-empty').kendoUpload({
        	select: MyKendoOnSelect,
        	remove: MyKendoOnRemove
        });
    });
	function MyKendoOnSelect(e) {
		MyKendoFileCount += e.files.length;
		if (MyKendoFileCount > 3) {
			MyKendoFileCount -= e.files.length;
			alert("En fazla 3 dosya yükleyebilirsiniz.");
			e.preventDefault();
		}
	}
	function MyKendoOnRemove(e) {
		MyKendoFileCount -= e.files.length;
	}
</script>


<!--  Password Hide/Show   -->
<script>
	$(document).ready(function($) {
		$('.hide-show').click(function(){
		    if( !$(this).hasClass('Active') ) {
				$(this).addClass('Active');
		      	$(this).prev( ".PasswordShow" ).attr('type','text');
		    } else {
		    	$(this).removeClass('Active');
		       	$(this).prev( ".PasswordShow" ).attr('type','password');
		    }
	  	});
	});
</script>


<!-- Basic File Upload -->
<script>
	$('#file-upload').change(function() {
	    var filepath = this.value;
	    var m = filepath.match(/([^\/\\]+)$/);
	    var filename = m[1];
	    $('#filename').html(filename);
	});
</script>


<!-- Header Mobile Menu Control -->
<div class="menuOverlay"></div>
<script>
  	$(document).ready(function(){
		$('.hamburgerMenu').click(function(){
			$('#Hamburger').toggleClass('open');
			$('section.Menu').toggleClass('Show');
			$('.menuOverlay').toggleClass('Show');
		});
		$('.menuOverlay, .mobileCloseNav').click(function(){
			$('#Hamburger').removeClass('open');
			$('section.Menu').removeClass('Show');
			$('.menuOverlay').removeClass('Show');
		});
	});
</script>




<!-- Profile Nav Mobile -->
<div class="ProfileNavOverlay"></div>
<script>
jQuery(document).ready(function($) {
	$(".Account-Nav .T").on( "click", function() {
		$(this).parent().toggleClass('Show');
		$('.ProfileNavOverlay').toggleClass('show');
	});
	$(".ProfileNavOverlay").on( "click", function() {
		$(this).removeClass('show');
		$('.Account-Nav').removeClass('Show');
	});
});
</script>


<script>
	$('.modal').on("hidden.bs.modal", function (e) {
    if($('.modal:visible').length)
    {
        $('.modal-backdrop').first().css('z-index', parseInt($('.modal:visible').last().css('z-index')) - 10);
        $('body').addClass('modal-open');
    }
}).on("show.bs.modal", function (e) {
    if($('.modal:visible').length)
    {
        $('.modal-backdrop.in').first().css('z-index', parseInt($('.modal:visible').last().css('z-index')) + 10);
        $(this).css('z-index', parseInt($('.modal-backdrop.in').first().css('z-index')) + 10);
    }
});
</script>

<!-- Autocomplate -->
<link rel="stylesheet" href="<?=site_url('assets/Front/')?>assets/autocomplete-master/jquery.autocomplete.css" />
<script src="<?=site_url('assets/Front/')?>assets/autocomplete-master/jquery.autocomplete.js"></script>



