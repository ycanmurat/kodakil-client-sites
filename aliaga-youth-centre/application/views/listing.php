<section class="listing-header">
	<div class="owl-carousel owl-theme listing-slider">
		<?foreach ($sliders as $key => $info) {?>
			<div class="item">
				<div class="component" style="background-image: url('<?=site_url($info->image)?>');">
				</div>
			</div>
		<?}?>
	</div>
</section>
<section class="listing-body">
	<div class="asev-comment">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="area">
						<img src="<?=site_url('assets/front/images/asevwhite.png')?>">

						<div class="item">
							<h3>ASEV Hakkında</h3>
							<p>Sanat başlı başına yaşamın kendisidir. Paylaşıcıdır, üretkendir. Sanatın yapıcı gücünü merkeze koyan medeniyetler kültür seviyelerini daima ileride tutmuşlardır. Ulu önderimiz Mustafa Kemal Atatürk "Sanat toplumun can damarıdır" demiştir. Ruhen kendini doyuramayan toplumlar, insanı insana düşman eden, empati yeteneğinden uzak, hoyratlığa dönüşen, gelişemeyen medeniyetlere dönüşmeye mahkumdur. Sanat hayatın kendisidir, aynasıdır. İnsanlığa bırakılmış müthiş bir hediyedir. İnsanın makineleşmesine imkân vermeyen mucizevi bir ilaçtır. Sanat, sanatçısıyla bu güzel misyonu gelecek kuşaklara taşıyacak, dünyayı güzelleştirecek ve asla insanın makineleşmesine izin vermeyerek, sağduyulu, ruhlarımızı besleyen insanlar yetiştirecektir. Sanatın dünyayı güzelleştiren bu misyonuna hizmetle, Aliağa Belediyesi Sanat Evi (ASEV) ailesi yıllardır kentimizin sanat nabzını tutarak, öğrencilerimize ev sahipliği yapmış, yaratıcılıklarını geliştirmelerindeki süreçte yanlarında olmuştur. 25 yıllık bir geçmişe sahip olan Aliağa Belediyesi Sanat Evi (ASEV) sanat yolculuğumuz, bugüne kadar çoğalarak devam etmektedir. Deneyimli sanatçı ve eğitmen kadromuzla, gençlerimize hem meslek seçimlerinde yardımcı olmakta, hem de her yaştan sanatsevere ev sahipliği yapmaktayız. Eğitimlerimiz ve yılsonu etkinliklerimizle, Aliağa Belediyesi Sanat Evi (ASEV) kadrosu, çalışanları ve eğitmenleriyle her daim üretmeye, sizlere iyi bir sanat eğitimi vermeye gönüllü kişilerdir. Gelin bu deneyimi birlikte yaşayalım…</p>
						</div>

					</div>
					<div class="wrapper">
						<div class="item">

							<p><b id="counter" data-count="434001"></b> Mezun Öğrenci</p>
						</div>
						<div class="item">

							<p>Profesyoneller tarafından <b>eğitim</b> alın</p>
						</div>
						<div class="item">

							<p><b>Sertifikalı</b> mezuniyet</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="top-marks">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<div class="wrapper">
					<?foreach ($lower as $key => $info) {?>
					<a href="<?=site_url('hizmetler/'.$mainSlug.'/'.$info->slug)?>">
						<div class="item">
							<img src="<?=site_url($info->image)?>">
							<p><?=$info->name?></p>
						</div>
					</a>
					<?}?>
				</div>
			</div>
		</div>
	</div>
</section>


<section class="listing-items">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="filterable">
					<input id="filter-list" type="text" name="" placeholder="Öğretmen veya Kurs ara..">
				</div>
				<div class="list-area">
					<?php foreach ($products as $key => $val) { ?>
						<div class="item">
							<a href="<?=site_url('kurs/'.url_seo($val->name).'-'.$val->id)?>">
								<div class="area">
									<div class="badge-area">
										<?php if ($val->new == 1) { ?>
											<span class="ribbon new">Yeni</span>
										<?php } ?>
										<?php if ($val->popular == 1) { ?>
											<span class="ribbon pop">Popüler</span>
										<?php } ?>
										<span class="ribbon staff"><?=$val->service_name?></span>
									</div>
									<img src="<?=site_url($val->image)?>">
									<span class="see-more"><i class="fas fa-eye"></i></span>
								</div>
								<div class="area">
									<h4><?=$val->name?></h4>
									<p class="course-detail"><?=$val->content?></p>
									<p class="teachers">
										<?php foreach ($val->teams as $key2 => $val2) { ?>
											<span><i class="fas fa-chalkboard-teacher"></i> <?=$val2->title?> </span>
										<?php } ?>
									</p>
									<div class="student">
										<p class="item"><i class="fas fa-graduation-cap"></i> <b>0</b> Öğrenci</p>
										<p class="item"><i class="fas fa-users"></i><span><?=$val->capacity?></span>Kontenjan</p>
									</div>
									<div class="require">
										<p class="item">Gereksinimler : </p>
										<p class="item">Yaş : <b><?=ageShow($val->min_age,$val->max_age)?></b></p>
										<p class="item">Cinsiyet : <b><?=($val->woman == 1 ? 'Kadın ':'')?><?=($val->man == 1 ? ' Erkek ':'')?></b></p>
										<p class="item">Seviye : <b><?=$val->level?></b></p>
									</div>
									<p class="Cost"><?=($val->price == 0?'Ücretsiz':$val->price.' ₺')?></p>
									<!--
									<p class="stars">
										<i class="fas fa-star OK"></i>
										<i class="fas fa-star OK"></i>
										<i class="fas fa-star OK"></i>
										<i class="fas fa-star OK"></i>
										<i class="fas fa-star"></i>
										<span><b>138</b>Yorum</span>
									</p>
								-->
								</div>
							</a>
						</div>
					<?php } ?>
				</div>
			</div>
		</div>
	</div>
</section>


<section class="listing-teachers">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<div class="title">
					<h2><span class="small">Sanat</span> Eğitmenlerimiz</h2>
				</div>
			</div>
			<div class="col-md-12">
				<div class="owl-carousel owl-theme owl-alt-list-teachers">
					<?php foreach ($team as $key => $val) { ?>
						<div class="item">
							<div class="teacher">
								<div class="image-area">
									<img src="<?=site_url($val->image)?>">
								</div>
								<h6><?=$val->title?></h6>
								<p class="staff"><?=$val->position?></p>
								<p class="content"><?=strip_tags(trim($val->content))?></p>
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
						</div>
					<?php } ?>
				</div>
			</div>
		</div>
	</div>

</section>