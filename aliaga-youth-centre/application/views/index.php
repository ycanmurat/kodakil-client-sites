<div class="anket" data-toggle="modal" data-target="#anketModal">
	<img src="<?=site_url('assets/front/images/icons/survey.svg')?>">
	<p>ANKET</p>
</div>

<div class="owl-carousel owl-theme owl-slider">
	<?foreach ($sliders as $key => $info) {?>
		<div class="item">
			<div class="slider-items" style="background-image: url('<?=site_url($info->image)?>');">
				<div class="area">
					<h2><?=$info->title?></h2>
					<p><?=$info->content?></p>
					<a href="<?=$info->button_link?>"><?=$info->button_name?></a>
				</div>
			</div>
		</div>
	<?}?>
</div>

<section class="kategori">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<div class="title">
					<h2>Hizmetlerimiz</h2>
				</div>
			</div>
			<?foreach ($services as $key => $serviceInfo) {?>
				<div class="col-lg-4 col-md-6 col-12">
					<div class="item" style="background-image: url('<?=site_url($serviceInfo->image)?>');">
						<a href="<?=site_url('hizmetler/'.$serviceInfo->slug)?>">
							<img src="<?=site_url($serviceInfo->icon)?>">
							<h3><?=$serviceInfo->name?></h3>
						</a>
					</div>
				</div>
			<?}?>
			<div class="col-12">
				<div class="engelsiz-yasam" style="background-image: url('<?=site_url('assets/front/images/engelsiz.jpg')?>');">
					<a href="#"><p>Özel Çocuklarımız İçin</p><span>Engelsiz yaşamınızı destekliyoruz ve kurslarımızın kapılarını sizler için açıyoruz.</span><span class="Link">Hemen Başvurun</span></a>
				</div>
			</div>
		</div>
	</div>
</section>


<section class="populer-courses">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<div class="title">
					<h2>Popüler Kurslar</h2>
				</div>
			</div>
			<div class="col-12">
				<div class="courses">
					<div class="owl-carousel owl-theme owl-courses-populer">
						<?php foreach ($popular as $key => $val) { ?>
							<div class="item">
								<a class="Item" href="<?=site_url('kurs/'.($val->name).'-'.$val->id)?>">
									<span class="ribbon pop">Popüler</span>
									<span class="ribbon staff"><?=$val->service_name?></span>
									<div class="image-area">
										<img src="<?=site_url($val->image)?>">
										<p class="cost"><?=$val->price == 0?'Ücretsiz':$val->price.' ₺'?></p>
										<!--
										<p class="stars">
											<i class="fas fa-star OK"></i>
											<i class="fas fa-star OK"></i>
											<i class="fas fa-star OK"></i>
											<i class="fas fa-star OK"></i>
											<i class="fas fa-star"></i>
											<span><b>0</b>Yorum</span>
										</p>
									-->
									</div>
									<div class="content">
										<h4><?=$val->name?></h4>
										<p class="Student"><i class="fas fa-graduation-cap"></i><b>0</b>Kayıtlı Öğrenci</p>
										<p class="Teacher"><i class="fas fa-users"></i><b><?=$val->capacity?></b> Kontejan</p>
									</div>
								</a>
							</div>
						<?php } ?>
					</div>
				</div>
			</div>

			<div class="col-12">
				<div class="title">
					<h2>Yeni Kurslar</h2>
				</div>
			</div>
			<div class="col-12">
				<div class="courses">
					<div class="owl-carousel owl-theme owl-courses-new">
						<?php foreach ($new as $key => $val) { ?>
							<div class="item">
								<a class="Item" href="<?=site_url('kurs/'.($val->name).'-'.$val->id)?>">
									<span class="ribbon new">Yeni</span>
									<span class="ribbon staff"><?=$val->service_name?></span>
									<div class="image-area">
											<img src="<?=site_url($val->image)?>">
											<p class="cost"><?=$val->price == 0?'Ücretsiz':$val->price.' ₺'?></p>
											<!--
										<p class="stars">
											<i class="fas fa-star OK"></i>
											<i class="fas fa-star OK"></i>
											<i class="fas fa-star OK"></i>
											<i class="fas fa-star OK"></i>
											<i class="fas fa-star"></i>
											<span><b>0</b>Yorum</span>
										</p>
									-->
									</div>
									<div class="content">
										<h4><?=$val->name?></h4>
										<p class="Student"><i class="fas fa-graduation-cap"></i><b>0</b>Kayıtlı Öğrenci</p>
										<p class="Teacher"><i class="fas fa-users"></i><b><?=$val->capacity?></b> Kontejan</p>
									</div>
								</a>
							</div>
						<?php } ?>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>