<footer class="page-footer mt-5" style="background-image: url('images/footerbg.jpg');">
	<div class="container">
		<div class="row">
			<div class="col-md-4">
				<h3>Hakkımızda</h3>
				<p>Uzun yıllardır ofis mobilyaları üretiminde faliyet gösteren firmamız 'BİOFİS' markasıyla 2014 yılında ofis koltukları ve kanepeleri üretimine başlamıştır.</p>
				<p>BİOFİS uzman kadrosu, kalite anlayışı, yenilikçi yapısı ve müşteri odaklı çalışmasıyla çok kısa zamanda sektörde öncü firmalar arasında yerini almıştır.</p>
				<p>BİOFİS geniş ürün yelpazesi,ofis mobilyaları sektöründe  yılların vermiş olduğu tecrübe ile estetik, ergonomik tasarımlarıyla kaliteyi,zamanında yaygın satış ve servis ağı ile siz değerli müşterilerimize  sunmayı hedefler.</p>
			</div>
			<div class="col-md-4">
				<i class="fas fa-envelope"></i><p><span>info@biofis.com.tr</span></p>
				<i class="fas fa-map"></i><p><span>Seyrantepe Mahallesi Madalya Sokak no:8 </span><span> Kağithane/İSTANBUL</span></p>
				<i class="fas fa-phone"></i><p><span>Tel : 0 212 564 28 22</span><span>Faks : 0 212 564 28 23</span></p>
			</div>
			<div class="col-md-4">
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3006.742544284304!2d28.985393115664095!3d41.09647152194159!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14cab684cd8a04c3%3A0xdc15a4bc4ae24295!2zQsSwIE9GxLBTIFPEsFNURU1MRVJpIFNBTi5UxLBDLkxURC7FnlTEsA!5e0!3m2!1str!2str!4v1550508889741" height="350" frameborder="0" style="border:0;width: 100%;" allowfullscreen></iframe>
			</div>
		</div>
	</div>
</footer>



<!-- Scripts -->
<script>
	$( "#hamburger" ).click(function() {
		$( "nav" ).toggleClass('open');
		$( "ul.nav" ).toggleClass('open');
		$( "body" ).toggleClass('navopen');
	});

	$( "div.searchbutton" ).click(function() {
		$( "div.searchArea" ).toggleClass('open');
		$( "div.searchArea>input" ).focus();
	});
	$(window).scroll(function () {
		var scroll = $(window).scrollTop();
		if (scroll >= 10) {
			$("nav.main").addClass("nav-fixed");
		} else {
			$("nav.main").removeClass("nav-fixed");
		}
	});
	$('.owl-slider').owlCarousel({
		loop:true,
		margin:10,
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
	})
	$('.owl-products').owlCarousel({
		loop:true,
		margin:20,
		nav:true,
		responsive:{
			0:{
				items:1
			},
			600:{
				items:1
			},
			768:{
				items:2
			},
			1000:{
				items:3
			}
		}
	})
	$('.owl-products.two').owlCarousel({
		loop:true,
		margin:20,
		nav:true,
		dots:true,
		responsive:{
			0:{
				items:1
			},
			600:{
				items:1
			},
			768:{
				items:2
			},
			1000:{
				items:3
			}
		}
	})
</script>
</body>
</html>