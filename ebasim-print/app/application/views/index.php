	<section class="VeritalTab">
        <div class="row">
        	<div class="col-12">
        		<div id="VertialTabsContent">
        			<div class="container-fluid">
        				<div class="row component-wrapper">
        					<div class="col-lg-2 col-md-3 LeftSide" style="padding:0">
        						<ul class="nav nav-tabs tabs-left">
        							<li class="nav-title"><span>Keşfet</span></li>
        							<?foreach ($explore as $key => $valEx){?>
        								<li><a href="#<?=$valEx->category_slug?>" <?=$key == 0 ? 'class="active"': ''?> data-toggle="tab"><?=$valEx->name?></a></li>
        							<?}?>
        						</ul>
        					</div>
        					<div class="col-lg-10 col-md-9">
        						<div class="tab-content">
        							<?foreach ($explore as $listOp => $valEx){?>
        							<div class="tab-pane <?=$listOp == 0 ? 'active': ''?>" id="<?=$valEx->category_slug?>">
        								<div class="row">
        									<?foreach ($valEx->products as $key => $valPro){?>
        									<div class="col-lg-2 col-md-6 col-6">
        										<a href="<?=$valPro->payment_type==2?site_url($valPro->product_slug):site_url($valPro->product_slug);?>" class="ProductItems">
        											<div class="Img">
        												<img src="<?=empty($valPro->default_image)?TimbThumb(site_url('assets/Front/images/noimage.png'),'300x300'):TimbThumb(site_url($valPro->default_image),'300x300')?>" alt="<?=$valPro->product_name?>" title="<?=$valPro->product_name?>" onerror="this.onerror=null;this.src='assets/fake/300x300.png';">
        											</div>
        											<p class="ItemName"><?=$valPro->product_name?></p>
        										</a>
        									</div>
        									<?}if(count($valEx->products)==11){?>
        									<div class="col-lg-2 col-md-6 col-6">
        										<a href="<?=site_url($valEx->category_slug)?>" class="ProductItems">
        											<div class="Img">
        												<img src="<?=TimbThumb(site_url('assets/Front/images/Icons/NavAll.jpg'),'300x300')?>" alt="Ebaskim.com" title="">
        											</div>
        											<p class="ItemName">Tüm Ürünler</p>
        										</a>
        									</div>
        									<?}?>
        								</div>
        							</div>
        							<?}?>
        						</div>
        					</div>
        				</div>
        			</div>
        		</div>
        	</div>
        </div>
	</section>
	<!--
		<div class="Ads1500">
			<div class="row">
				<div class="col">
					<a href="<?=$line->link?>" style="background-image: url('<?=$line->picture?>');"></a>
				</div>
			</div>
		</div>
	-->

	<?php if ($packageList != false): ?>
	<!-- Packets-Showcase -->
	<section class="Packets-Showcase">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="TitleBox">
						<div class="T"><span><?=$langStatics->paketlerimiz?></span></div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-12">
					<div class="PacketsTabs">
						<ul class="nav nav-tabs" id="Packets" role="tablist">
							<?php foreach ($packageList as $key => $val): ?>
								<?php
								if ($key == 0) {
									$package_active = "active";
								} else {
									$package_active = "";
								}
								?>
							<li class="nav-item"><a href="#packets<?=$key?>" class="nav-link <?=$package_active?>" data-toggle="tab" role="tab" aria-selected="true"><?=$val->name?></a></li>
							<?php endforeach ?>
						  	<li class="nav-item"><a href="<?=site_url('paketlerimiz')?>" class="nav-link">Hepsi</a></li>
						</ul>
					</div>
					
					<div class="PacketsContent tab-content" id="PacketsContent">
						<?php foreach ($packageList as $key => $val){ ?>
							<?php
							if ($key == 0) {
								$package_active = "show active";
							} else {
								$package_active = "";
							}
							?>
							<div class="tab-pane fade <?=$package_active?>" id="packets<?=$key?>" role="tabpanel">
						  		<div class="row">
						  			<?php foreach ($val->sub as $key2 => $val2) { ?>
							  			<div class="col-lg-3 col-md-6 col-6">
							  				<a href="<?=site_url('paketlerimiz/detay/'.$val->package_slug."/".$val2->slug)?>" class="Items">
							  					<img src="<?=site_url($val2->mainImage)?>" alt="Ebaskim.com <?=$val->name.' - '.$val2->name?>">
							  				</a>
							  			</div>
						  			<?php } ?>
						  			<div class="col-lg-3 col-md-6 col-6">
						  				<a href="<?=site_url('teklif-iste/')?>" class="Items">
						  					<img src="<?=site_url('assets/Front/images/package-offer.jpeg')?>" alt="Ebaskim.com Paketler">
						  				</a>
						  			</div>
						  		</div>
						  	</div>
						<?php } ?>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- END : Packets-Showcase -->

	<?php endif ?>


	<!-- References -->
	<section class="References">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="TitleBox">
						<div class="T"><span><?=$langStatics->ReferanslarBaslik ?></span></div>
						<div class="sT"><?=$langStatics->ReferanslarText?></div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-12">
					<div class="carousel-wrap">
						<div class="owl-carousel owlReferences">
							<?foreach($list as $referancesQuery => $info){?>
								<div class="item"><img src="<?=site_url($info->img_url)?>" title="<?=$info->referances_title?>" alt="<?=$info->referances_title?>"  onerror="this.onerror=null;this.src='assets/fake/250x100.png';"></div>
							<?}?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section><!-- END : References -->


	<!-- CoverLetter -->
	<section class="CoverLetter">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="Text-Wrapper">
						<h4><?=$langStatics->AltKonu1Baslik?></h4>
						 <p><?=$langStatics->AltKonu1Icerik?> <!--<a href="<?=$langStatics->AltKonu1Url?>" class="Link"><?=$langStatics->DevaminiGor?></a></p> -->
					</div>
				</div>
				<div class="col-12">
					<div class="Text-Wrapper">
						<h4><?=$langStatics->AltKonu2Baslik?></h4>
						<p><?=$langStatics->AltKonu2Icerik?> <!--<a href="<?=$langStatics->AltKonu2Url?>" class="Link"><?=$langStatics->DevaminiGor?></a></p>-->
					</div>
				</div>
			</div>
		</div>
	</section><!-- END : CoverLetter -->


	<!-- App -->
	<section class="App">
		<div class="container">
			<div class="row">
				<div class="col-lg-6">
					<div class="Text-Wrapper">
						<h4><?=$langStatics->UygulamaBaslik?></h4>
						<p><?=$langStatics->UygulamaIcerik?></p>
					</div>

					<div class="AppIcons">
						<a href="#" class="item"><i class="fa fa-apple" aria-hidden="true"></i></a>
						<a href="#" class="item"><i class="fa fa-android" aria-hidden="true"></i></a>
					</div>
				</div>
				<div class="col-lg-6"><img src="<?=site_url('assets/Front/')?>images/app-phone.png" class="AppImg" alt="ebasim.com"></div>
			</div>
		</div>
	</section><!-- END : App -->
	<script>
		
		if ($(window).width() < 991) {
			$('.CoverLetter').css('display','none');
			$('.App').css('display','none');
		}
	</script>