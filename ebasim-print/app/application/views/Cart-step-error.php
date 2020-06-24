<div class="userHead">
	<div class="container">
		<div class="row">
			<div class="col-lg-3 text-left">
				<a href="<?=site_url()?>" class="Link"><img src="<?=site_url('assets/')?>ebasimlogo.png" alt="ebasim logo"></a>
			</div>
			<div class="col-lg-9">
				<div class="CheckoutList">
					<ul class="List">
						<li class="Item Step1">
							<div class="Box">
								<div class="Icon"><img src="<?=site_url('assets/Front/')?>images/Icons/cartstep1.png" alt="ebasim.com sepet"></div>
								<p class="Text"><?=$langStatics->sepet?></p>
							</div>
						</li>
						<li class="Item Step2">
							<div class="Box">
								<div class="Icon"><img src="<?=site_url('assets/Front/')?>images/Icons/edit-tools.png" alt="ebasim.com düzenle"></div>
								<p class="Text"><?=$langStatics->tasarim?></p>
							</div>
						</li>
						<li class="Item Step3">
							<div class="Box">
								<div class="Icon"><img src="<?=site_url('assets/Front/')?>images/Icons/cartstep3.png" alt="ebasim.com sepet adımları"></div>
								<p class="Text"><?=$langStatics->Adres?></p>
							</div>
						</li>
						<li class="Item Step4">
							<div class="Box">
								<div class="Icon"><img src="<?=site_url('assets/Front/')?>images/Icons/cartstep4.png" alt="ebasim.com sepet adım"></div>
								<p class="Text"><?=$langStatics->odeme?></p>
							</div>
						</li>
						<li class="Item Step5">
							<div class="Box">
								<div class="Icon"><img src="<?=site_url('assets/Front/')?>images/Icons/cartstep5.png" alt="ebasim.com sepet son adım"></div>
								<p class="Text"><?=$langStatics->sonuc?></p>
							</div>
						</li>
					</ul>
					<div class="Divider"></div>
				</div>
			</div>
		</div>
	</div>
</div>


<section class="Pages--Wrapper CartStepPages">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-lg-10">
				<div class="Cart-Wrapper Cart-Step-5">
					<div class="ResultBox Red">
						<div class="Icon"><img src="<?=site_url('assets/Front/')?>images/Icons/Cart/result-error.png" alt="ebasim hata ikon"></div>
						<div class="Text">
							<div class="Title"><?=$langStatics->odemeBasarisiz?></div>
							<p><?=$langStatics->odemeBasarisizAciklama1?><a href="<?=site_url('sepet')?>" class="Link"><?=$langStatics->tekrarDeneyin?></a><?=$langStatics->odemeBasarisizAciklama2?><a href="<?=site_url()?>" class="Link"><?=$langStatics->buraya?></a> <?=$langStatics->tiklayin?>.</p>
						</div>
					</div>

					<div class="TitleBox">
						<div class="T"><span><?=$langStatics->NedirBu?></span></div>
					</div>

					<div class="Explanation">
						<?=$langStatics->odemeBasarisizAciklama3?>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<div class="userBottom">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<div class="Box">
					<a target="_blank" href="<?=site_url()?>hakkimizda" class="Link"><?=$langStatics->FooterMenu2Baskil?></a>
					<a target="_blank" href="<?=site_url()?>teslimat-ve-iade" class="Link"><?=$langStatics->iade?></a>
					<a target="_blank" href="<?=site_url()?>yardim" class="Link"><?=$langStatics->FooterMenu2Text6?></a>
				</div>
				<div class="Copyright"><?=$langStatics->footerAltCopyright?></div>
			</div>
		</div>
	</div>
</div>