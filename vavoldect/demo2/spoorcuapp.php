<?php include 'header.php' ?>
<section class="gallery">
	<div class="container">
		<div class="row">
			<div class="col-md-5">
				<h2>Spoorcu App - Show yourself !<span>Advertisement Film</span></h2>

				<p>Spoorcu Application - Advertisement Film *</p>
				<p>"Show yourself !"</p>

				<p>Producer: VCT - Vavolde Commercial Team</p>

				<p>Created by Vavolde's artists.</p>

				<p>Spoorcu Uygulaması - Reklam Filmi *</p>
				<p>"Göster kendini !"</p>

				<p>Yapımcı: VCT - Vavolde Commercial Team</p>

				<p>Vavolde sanatçıları tarafından yaratıldı.</p>
			</div>

			<div class="col-md-7">
				<iframe src="https://player.vimeo.com/video/363259884?h=c31fe5537d" style="width: 100%;height: 400px" frameborder="0" allow="autoplay; fullscreen; picture-in-picture" allowfullscreen></iframe>
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
