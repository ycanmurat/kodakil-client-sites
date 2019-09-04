<section class="about">
	<div class="page-banner" style="background-image:url('https://fakeimg.pl/1920x250/'); ">
		<h2>HAKKIMIZDA</h2>
	</div>
	<div class="about-area">
		<div class="container">
			<div class="row">
				<div class="col-md-8">
					<div class="item">
						<?
						$find = array('<h2>','</h2>','<p>','</p>');
						$replace = array('<div class="title"><h2>','</h2></div>','<p>','</p>');
						echo str_replace($find, $replace, $corporate->content);
						?>
					</div>
				</div>
				<div class="col-md-4">
					<img src="<?=site_url($corporate->image)?>">
				</div>
			</div>
		</div>
	</div>
</section>