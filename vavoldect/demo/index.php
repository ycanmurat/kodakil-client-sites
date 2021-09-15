<?php include 'header.php' ?>

<section class="index">
	<div class="container">
		<div class="row">
			<div class="col-md-10 m-auto">
				<div class="videoWrapper">
					<div class="plyr__video-embed" id="player" >
						<iframe src="https://player.vimeo.com/video/569437163?h=3716cc46eb&loop=1&title=0&byline=0&portrait=0" allowfullscreen allowtransparency allow="autoplay"></iframe>
					</div>			
				</div>
			</div>
		</div>
	</div>
</section>



<script src="js/plyr.min.js"></script>

<script>
	var options = {
		fullscreen:true,
		autoplay:true,
		controls:true
	};
	const player = new Plyr('#player',options);

	$(document).ready(function() {
		$('.owl-slider').owlCarousel({
			loop:false,
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
	});
</script>


<?php include 'footer.php' ?>