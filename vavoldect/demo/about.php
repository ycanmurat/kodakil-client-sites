<?php include 'header.php' ?>
<section class="about">
	<div class="container">
		<div class="row">
			<div class="col-md-5 m-auto">
				<div class="owl-carousel owl-theme owl-projectsGallery">
					<div class="item">
						<a href="images/catalog/1.png" data-fancybox="gallery" data-caption="Açıklama Yazısı">
							<img src="images/catalog/1.png" alt="">
						</a>
					</div>
					<div class="item">
						<a href="images/catalog/2.png" data-fancybox="gallery" data-caption="Açıklama Yazısı">
							<img src="images/catalog/2.png" alt="">
						</a>
					</div>
					<div class="item">
						<a href="images/catalog/3.png" data-fancybox="gallery" data-caption="Açıklama Yazısı">
							<img src="images/catalog/3.png" alt="">
						</a>
					</div>
					<div class="item">
						<a href="images/catalog/4.png" data-fancybox="gallery" data-caption="Açıklama Yazısı">
							<img src="images/catalog/4.png" alt="">
						</a>
					</div>
					<div class="item">
						<a href="images/catalog/5.png" data-fancybox="gallery" data-caption="Açıklama Yazısı">
							<img src="images/catalog/5.png" alt="">
						</a>
					</div>
					<div class="item">
						<a href="images/catalog/6.png" data-fancybox="gallery" data-caption="Açıklama Yazısı">
							<img src="images/catalog/6.png" alt="">
						</a>
					</div>
					<div class="item">
						<a href="images/catalog/7.png" data-fancybox="gallery" data-caption="Açıklama Yazısı">
							<img src="images/catalog/7.png" alt="">
						</a>
					</div>
					<div class="item">
						<a href="images/catalog/8.png" data-fancybox="gallery" data-caption="Açıklama Yazısı">
							<img src="images/catalog/8.png" alt="">
						</a>
					</div>
				</div>
			</div>
		</div>
		<div class="row" hidden>
			<div class="col-md-10">
				<div class="who" style="margin-right: -60px;">
					<img src="images/whoiswho.png" alt="">
				</div>
			</div>
			<div class="col-md-10">
				<div class="aboutWrapper">
					<img src="images/aboutHead.png" alt="">
				</div>
			</div>
			<div class="col-md-6" style="margin-top: 130px;">
				<img src="images/aboutFooter.png" alt="">

			</div>

		</div>
	</div>
</section>

<script>
	$(document).ready(function() {
		$('.owl-projectsGallery').owlCarousel({
			loop:false,
			margin:0,
			nav:false,
			autoplay:true,
			autoplayTimeout:2500,
			autoplayHoverPause:false,
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
