<div class="userHead">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<a href="<?=site_url()?>" class="Link"><img src="<?=site_url('/assets/ebasimlogo.png')?>" alt="Logo"></a>
			</div>
		</div>
	</div>
</div>

<div class="userContent">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<div class="Area">
					<div class="Wrapper RegisterColor">
						<div class="Icon"><img src="<?=TimbThumb(site_url('/assets/Front/images/Icons/register.png'),'44x40')?>" alt="Kayıt Ol"></div>

						<div class="T"><?=$langStatics->kayitOlBaslik?></div>

						<span>
							<?if(!empty(validation_errors())){?>
								<div class="Errors"><?=validation_errors()?></div>
							<?}elseif($this->session->flashdata('google') == 1){?>
								<div class="Errors">Lütfen Robot Olmadığınızı Onaylayın robotHatasi </div>
							<?}elseif(!empty($this->session->flashdata('RegisterError'))){?>
								<?=$this->session->flashdata('RegisterError')?>
							<?}?>
							<br>
						</span>
						<div class="Form">
							<form action="<?=site_url('kayit')?>" method="POST">
								<div class="row">
									<div class="col-lg-6">
										<div class="FormElements">
											<label for="registerAd"><?=$langStatics->kayitOlAd?>* </label>
											<input required type="text" name="registerAd" value="<?=set_value('registerAd')?>" id="registerAd">
										</div>
									</div>
									<div class="col-lg-6">
										<div class="FormElements">
											<label for="registerSoyad"><?=$langStatics->kayitOlSoyad?>* </label>
											<input required type="text" name="registerSoyad" value="<?=set_value('registerSoyad')?>" id="registerSoyad">
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-12">
										<div class="FormElements">
											<label for="registerEmail"><?=$langStatics->kayitOlEposta?>* </label>
											<input required type="email" name="registerEmail" value="<?=set_value('registerEmail')?>" id="registerEmail">
										</div>
									</div>
									<div class="col-12">
										<div class="FormElements">
											<label for="registerEmail">GSM No:* </label>
											<input required type="number" name="registerGSM" value="<?=set_value('registerGSM')?>" id="registerGSM">
										</div>
									</div>
									<div class="col-12">
										<div class="FormElements">
											<label for="registerPass"><?=$langStatics->kayitOlSifre?>* </label>
											<div class="PassHideShow">
												<input required type="password" class="PasswordShow" name="registerPass" id="registerPass">
												<div class="hide-show"></div>
											</div>
										</div>
									</div>
									<div class="col-12">
										<div class="FormElements">
											<label for="registerPass2"><?=$langStatics->kayitOlSifreTekrar?>* </label>
											<div class="PassHideShow">
												<input required type="password" class="PasswordShow" name="registerPass2" id="registerPass2">
												<div class="hide-show"></div>
											</div>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-12">
										<div class="FormElements">
											<div class="checkboxGroup">
												<input required type="checkbox" id="RegisterContract" name="RegisterContract" checked="">
												<label for="RegisterContract"><span class="Contract"><?=$langStatics->kayitOlUyelikSozlesmesi?> </label>
											</div>
										</div>
									</div>
									<div class="col-12">
										<div class="FormElements">
											<div class="checkboxGroup">
												<input type="checkbox" name="RegisterCampaign" id="RegisterCampaign" checked>
												<label for="RegisterCampaign"><?=$langStatics->kayitOlKampanyalardanHaberdarOlmak?> </label>
											</div>
										</div>
									</div>
								</div>
								<br>
								<!--<center><div class="g-recaptcha" data-sitekey="YOUR_RECAPTCHA_SITE_KEY"></div></center><br>-->
								<div class="row">
									<div class="col-12">
										<button type="submit" class="Btn Blue-d w-100"><?=$langStatics->kayitOlButon?> </button>
									</div>
								</div>
							</form>
						</div>

						<div class="OrWrapper">
							<div class="Or"><span><?=$langStatics->kayitOlUyeMisiniz?> </span></div>

							<a href="<?=site_url('giris')?>" class="Btn Btn-o"><?=$langStatics->kayitOlGirisYapButonu?> </a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="userBottom">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<div class="Box">
					<a href="<?=site_url()?>hakkimizda" class="Link"><?=$langStatics->FooterMenu2Baskil?></a>
					<a href="<?=site_url()?>teslimat-ve-iade" class="Link"><?=$langStatics->iade?></a>
					<a href="<?=site_url()?>yardim" class="Link"><?=$langStatics->FooterMenu2Text6?></a>
				</div>
				<div class="Copyright"><?=$langStatics->footerAltCopyright?> </div>
			</div>
		</div>
	</div>
</div>