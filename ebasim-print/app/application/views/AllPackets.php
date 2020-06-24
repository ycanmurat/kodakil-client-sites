
<!-- Pages Title -->
<section class="Pages--Title" style="background-image: url('<?=site_url('assets/Front/')?>images/PageTitle/packets-title.png');">
	<div class="container">
		<div class="row">
			<div class="col">
				<div class="PageMap">
					<a href="<?=site_url()?>" class="Link"><?=$langStatics->anasayfa?></a>
					<span><i class="fa fa-angle-right" aria-hidden="true"></i></span>
					<a href="<?=site_url('paketlerimiz')?>" class="Link Now"><?=$langStatics->paketlerimiz?></a>
				</div>
				<div class="T" style="display: none;"><?=$langStatics->paketlerimiz?></div>
			</div>
		</div>
	</div>
</section><!-- END : Pages Title -->



<section class="Pages--Wrapper allPackets">
	<div class="container">
		<div class="row justify-content-center">

			<?php foreach ($packages as $key => $val):
			if ($val->square_image == "") {
				$val->square_image = "assets/Front/images/noimage.png";
			}
			?>
			<div class="col-lg-3 col-md-4 col-6">
				<div class="PacketsItem">
					<img src="<?=site_url($val->square_image)?>" alt="<?=$val->name?>">
					<div class="HoverBox">
						<?php foreach ($val->sub as $key2 => $val2){ ?>
						<a href="<?=site_url('paketlerimiz/detay/'.$val->package_slug.'/'.$val2->slug)?>" class="Link"><p class="Text"><?=$val2->name?></p></a>
						<?php } ?>
					</div>
				</div>
			</div>
			<?php endforeach ?>

		</div>
	</div>
</section>