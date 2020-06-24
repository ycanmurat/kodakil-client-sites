<!-- Pages Title -->
<section class="Pages--Title" style="background-image: url('<?=site_url('assets/Front/')?>images/PageTitle/about-title.png');">
	<div class="container">
		<div class="row">
			<div class="col">
				<div class="PageMap">
					<a href="#" class="Link"><?=$langStatics->anasayfa?></a>
					<span><i class="fa fa-angle-right" aria-hidden="true"></i></span>
					<a href="#" class="Link Now"><?=$langStatics->sag3lu2?></a>
				</div>
				<div class="T"><?=$langStatics->kampanya?><span><?=$langStatics->Kampanya_larimiz?></span></div>
			</div>
		</div>
	</div>
</section><!-- END : Pages Title -->


<section class="Pages--Wrapper Kampanyalar">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<?foreach ($allCampaigns as $key => $val){?>				
				<div class="Wrapper">
					<div class="row">
						<div class="col-lg-5"><div class="Img"><img src="<?=TimbThumb(site_url($val->campaign_picture),'700x400')?>" alt="<?=$val->campaign_title?>"></div></div>
						<div class="col-lg-7">
							<div class="Text">
								<div class="T"><?=$val->campaign_title?></div>
								<div class="Date"><?=$langStatics->baslangicTarihi?> : <?=$val->campaign_start?></div>
								<div class="Date"><?=$langStatics->bitisTarihi?> : <?=$val->campaign_end?></div>

								<div class="SubT"><?=$langStatics->aciklama?> :</div>
								<p><?=$val->campaign_info?></p>
							</div>
							<div class="Action">
								<a href="<?=$val->campaign_link?>" class="Btn Green-d"><?=$langStatics->kampanyaDevam?></a>
							</div>
						</div>
					</div>
				</div>
				<?}?>
			</div>
		</div>
	</div>
</section>