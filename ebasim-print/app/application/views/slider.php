<section class="SlideWrapper">
		<div class="row">
			<div class="col-xl-9 col-lg-12">
				<div class="swiper-container EbaskSlider">
			        <div class="swiper-wrapper">
			        	<?foreach ($sliderList as $sliderQuery => $info){?>
			        		<div class="swiper-slide">
			        			<a href="<?=$info->slider_redirect?>"><img src="<?=TimbThumb(site_url($info->slider_url),'1105x442')?>" alt="Slider" onerror="this.onerror=null;this.src='assets/fake/1105x442.png';"></a>
			        		</div>
			        	<?}?>
			        </div>
			        <div class="swiper-button-next Slider-button-prev"></div>
			        <div class="swiper-button-prev Slider-button-next"></div>
			    </div>
			</div>
			<div class="col-xl-3 col-lg-12">
				<div class="BannerContent">
					<div class="row">
						<?foreach ($imageList as $key => $value){?>
    						<div class="col-xl-12 col-md-4 col-sm-6 Item">
    							<a href="<?=$value->link?>">
    								<img src="<?=TimbThumb(site_url($value->picture),'355x137')?>"  onerror="this.onerror=null;this.src='assets/fake/335x137.png';" alt="kodakillabs.com">
    							</a>
    						</div>
						<?}?>
					</div>
				</div>
			</div>
		</div>
		<div class="row AnimateArea">
			<div class="col-lg-4 col-md-6 hidden-md-down">
				<a class="AnimateItem" href="javascript:void(0);">
					<div class="category-item right-alt color1">
						<div class="category-item-in">
							<div class="border-line"></div>
							<div class="image">
								<img src="assets/Front/images/ebask-taksit.png" alt="Taksit listesi">
							</div>
							<div class="item-info">
								<div class="page-small-title aqua-green">
									<b><?=$langStatics->taksit12?></b>
								</div>
								<div class="page-des"><?=$langStatics->onIkiTaksitFirsatIcerik?></div>
							</div>
						</div>
					</div>
				</a>
			</div>
			<div class="col-lg-4 col-md-6">
				<a class="AnimateItem" href="javascript:void(0);">
					<div class="category-item right-alt color2">
						<div class="category-item-in">
							<div class="border-line"></div>
							<div class="image">
								<img src="assets/Front/images/ebask-cargo.png" alt="Kargo">
							</div>
							<div class="item-info">
								<div class="page-small-title aqua-green">
									<b><?=$langStatics->kargoUcretsiz?></b>
								</div>
								<div class="page-des"><?=$langStatics->ucretsizKargoIcerik?></div>
							</div>
						</div>
					</div>
				</a>
			</div>
			<div class="col-lg-4 col-md-6">
				<a class="AnimateItem" href="javascript:void(0);">
					<div class="category-item right-alt color3">
						<div class="category-item-in">
							<div class="border-line"></div>
							<div class="image">
								<img src="assets/Front/images/ebask-iade.png" alt="İade">
							</div>
							<div class="item-info">
								<div class="page-small-title aqua-green">
									<b><?=$langStatics->IadeGaranti?></b>
								</div>
								<div class="page-des"><?=$langStatics->iadeGarantisiIcerik?></div>
							</div>
						</div>
					</div>
				</a>
			</div>
		</div>
	</section>

						<!-- <a href="<?=$value->link?>" class="Item" style="background-image: url('<?=site_url($value->picture)?>');"></a> -->