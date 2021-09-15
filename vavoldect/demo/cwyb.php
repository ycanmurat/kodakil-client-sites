<?php include 'header.php' ?>
<section class="gallery">
	<div class="container">
		<div class="row">
			<div class="col-md-5">
				<h2>VCT - Come with your brand ‘21<span>Pandemic Production Reels</span></h2>

				<p>VCT - Pandemic Production Reels *</p>
				<p>"Come with your brand."</p>

				<p>Producer: VCT - Vavolde Commercial Team</p>

				<p>Created by Vavolde's artists.</p>

				<p>VCT - Pandemi Üretim Videosu *</p>
				<p>"Markan ile gel."</p>

				<p>Yapımcı: VCT - Vavolde Commercial Team</p>

				<p>Vavolde sanatçıları tarafından yaratıldı.</p>
			</div>

			<div class="col-md-7">
				<iframe src="https://player.vimeo.com/video/569437163?h=c31fe5537d" style="width: 100%;height: 400px" frameborder="0" allow="autoplay; fullscreen; picture-in-picture" allowfullscreen></iframe>
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
