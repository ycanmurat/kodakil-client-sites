<section class="detail-header">
	<div class="item" style="background-image:url('<?=site_url('assets/front/images/testbg.jpg')?>'); ">
		<h1>MÜZİK</h1>
		<ul class="breadcrumb">
			<li><a href="<?=site_url()?>"> Anasayfa</a></li>
			<li><a href="<?=site_url('hizmetler/'.$course->service_slug)?>"> <?=$course->service_name?></a></li>
			<?php if (!empty($course->service_sub_name)) { ?>
				<li><a href="<?=site_url('hizmetler/'.$course->service_slug.'/'.$course->service_sub_slug)?>"> <?=$course->service_sub_name?></a></li>
			<?php } ?>
			<li><a class="active" href=""> Gitar Kursu</a></li>
		</ul>
	</div>
</section>

<section class="detail-body">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="course-header">
					<h1><?=$course->name?></h1>
					<!--
					<div class="stars">
						<i class="fas fa-star OK"></i>
						<i class="fas fa-star OK"></i>
						<i class="fas fa-star OK"></i>
						<i class="fas fa-star OK"></i>
						<i class="fas fa-star"></i>
						<span><b>38</b>Yorum</span>
					</div>
				-->
				<div class="student">
					<p class="item"><i class="fas fa-graduation-cap"></i> <b>0</b>Kayıtlı Öğrenci</p>
					<p class="item"><i class="fas fa-users"></i><b><?=$course->capacity?></b>Kapasite</p>
				</div>
				<p class="content"><?=$course->short_content?></p>
				<div class="detail-navs">
					<ul class="nav nav-tabs" id="myTab" role="tablist">
						<li class="nav-item">
							<a class="nav-link active" id="kurs-detay-tab" data-toggle="tab" href="#kurs-detay" role="tab" aria-controls="kurs-detay" aria-selected="true">KURS HAKKINDA</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" id="egitmenler-tab" data-toggle="tab" href="#egitmenler" role="tab" aria-controls="egitmenler" aria-selected="false">EĞİTMENLER</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" id="dersprogramme-tab" data-toggle="tab" href="#dersprogramme" role="tab" aria-controls="dersprogramme" aria-selected="false">NE ÖĞRENECEKSİNİZ ?</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" id="sss-tab" data-toggle="tab" href="#sss" role="tab" aria-controls="sss" aria-selected="false">SIKÇA SORULAN SORULAR</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" id="galery-tab" data-toggle="tab" href="#galery" role="tab" aria-controls="galery" aria-selected="false">GALERİ</a>
						</li>
					</ul>
				</div>
				<div class="main-section">
					<div class="tab-content" id="myTabContent">
						<div class="tab-pane fade show active" id="kurs-detay" role="tabpanel" aria-labelledby="kurs-detay-tab">
							<div class="about-course">
								<?php if ($course->image_detail != null || $course->image_detail != '') { ?>
									<img class="img-fluid mb-3" src="<?=site_url($course->image_detail)?>">
								<?php } ?>
								<p><?=$course->content?></p>
							</div>
						</div>
						<div class="tab-pane fade" id="egitmenler" role="tabpanel" aria-labelledby="egitmenler-tab">
							<div class="in-wrapper">
								<div class="Teachers">
									<?php foreach ($course->teams as $key => $val) { ?>
										<div class="item">
											<img src="<?=site_url($val->image)?>">
											<p class="teacher-title"><?=$val->title?></p>
											<span><?=$val->position?></span>
											<p class="description"><?=strip_tags(trim($val->content))?></p>
										</div>
									<?php } ?>
								</div>
							</div>
						</div>
						<div class="tab-pane fade" id="dersprogramme" role="tabpanel" aria-labelledby="dersprogramme-tab">
							<div class="accordion" id="accordionExample">
								<?php foreach ($course->fixture as $key => $val) { ?>
									<div class="card">
										<div class="card-header" id="heading_<?=$key?>">
											<h2 class="mb-0">
												<button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapse_<?=$key?>" aria-expanded="true" aria-controls="collapse_<?=$key?>">
													<?=$val->name?>
												</button>
											</h2>
										</div>
										<div id="collapse_<?=$key?>" class="collapse" aria-labelledby="heading_<?=$key?>" data-parent="#accordionExample">
											<div class="card-body">
												<?=$val->content?>
											</div>
										</div>
									</div>
								<?php } ?>
							</div>
						</div>
						<div class="tab-pane fade" id="sss" role="tabpanel" aria-labelledby="sss-tab">
							<div class="faq-area">
								<div class="accordion" id="faq-accordion">
									<?php foreach ($course->sss as $key => $val) { ?>
										<div class="card">
											<div class="card-header" id="questone_<?=$key?>">
												<h2 class="mb-0">
													<button class="btn btn-link" type="button" data-toggle="collapse" data-target="#answerone_<?=$key?>" aria-expanded="true" aria-controls="answerone_<?=$key?>">
														<?=$val->name?>
													</button>
												</h2>
											</div>

											<div id="answerone_<?=$key?>" class="collapse" aria-labelledby="questone_<?=$key?>" data-parent="#faq-accordion">
												<div class="card-body">
													<?=$val->content?>
												</div>
											</div>
										</div>
									<?php } ?>
								</div>
							</div>
						</div>
						<div class="tab-pane fade" id="galery" role="tabpanel" aria-labelledby="galery-tab">
							<?php foreach ($course->images as $key => $val) { ?>
								<a href="<?=site_url($val->image)?>" data-lightbox="Galeri"><img src="<?=site_url($val->image)?>"></a>
							<?php } ?>
						</div>
					</div>

					<div class="require">
						<div class="wrap-area">
							<p class="title">KİMLER KAYIT OLABİLİR ?</p>
							<p class="item"><span>Yaş : </span><b><?=ageShow($course->min_age,$course->max_age)?></b></p>
							<p class="item"><span>Cinsiyet :</span> <b><?=$course->woman==1?'Kadın':''?> - <?=$course->woman==1?'Erkek':''?></b></p>
							<p class="item"><span>Süre :</span> <b><?=$course->time?></b></p>
							<p class="item"><span>Seviye :</span> <b><?=$course->level?></b></p>
						</div>
						<div class="left-side">
							<div class="location">
								<p class="title">KURS NEREDE ?</p>
								<p><i class="fas fa-map-marked"></i> <?=$course->place?></p>
							</div>
						</div>
						<div class="left-side">
							<div class="location">
								<p class="title">KURS Planı</p>
								<p><?=$course->plan?></p>
							</div>
						</div>
						<div class="price">
							<p class="item cost"><?=$course->price == 0 ? 'Ücretsiz':priceMonthCalc($course->price,$course->priceMonth).' ₺'?></p>
							<a class="sign-in" href="javascript:void(0);" course-data-id="<?=$course->id?>" id="course-sign-in">Kayıt OL</a>
						</div>
					</div>
				</div>

			</div>
		</div>
	</div>
</div>
</div>
</section>

<!-- Media & SSS ES GEÇİLDİ
<div class="container">
	<div class="row">
		<div class="col-12">
			<div class="media-area">
				<div class="row">
					<div class="col-md-6 pr-0">
						<iframe  src="https://www.youtube.com/embed/ZhbjdTlRHjc" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
					</div>
					<div class="col-md-6 pl-0">
						<div class="faq-area">
							<h5>Kursla İlgili Sıkça Sorulan Sorular</h5>

						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div> 
-->
