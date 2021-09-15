<?php include 'header.php' ?>
<section class="gallery">
	<div class="container">
		<div class="row">
			<div class="col-md-5">
				<h2>VCT - It’s a childish trail ‘18<span>Showreel</span></h2>

				<p>VCT - Showreel '18 *</p>
				<p>"It's a childish trail"</p>

				<p>Producer: VCT - Vavolde Commercial Team</p>

				<p>Created by Vavolde's artists.</p>

				<p>VCT - Portfolyo '18 *</p>
				<p>"Çocukça bir iz"</p>

				<p>Yapımcı: VCT - Vavolde Commercial Team</p>

				<p>Vavolde sanatçıları tarafından üretildi.</p>
			</div>

			<div class="col-md-7">
				<iframe src="https://player.vimeo.com/video/264504635?h=c31fe5537d" style="width: 100%;height: 400px" frameborder="0" allow="autoplay; fullscreen; picture-in-picture" allowfullscreen></iframe>
			</div>

		</div>
	</div>
</section>

<script>
	$(document).ready(function() {
		$('.owl-projectsGallery').owlCarousel({
			loop:true,
			margin:10,
			dotData: true,
			dotsData: true,
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
	});
</script>

<?php include 'footer.php' ?>
