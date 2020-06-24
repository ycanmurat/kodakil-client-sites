<div class="userHead">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<a href="<?=site_url()?>" class="Link"><img src="<?=(site_url('assets/ebasimlogo.png'))?>" alt="Logo"></a>
			</div>
		</div>
	</div>
</div>

<div class="userContent">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<div class="Area">
					<div class="Wrapper">
						<div class="Icon"><img src="<?=TimbThumb(site_url('/assets/Front/images/Icons/new-pass.png'),'44x40')?>" alt="şifremi unuttum ikon"></div>
						<div class="T">Yeni Şifre</div>
						<form method="post" action="<?=site_url('Login/newPass?token='.$token.'&remember_key='.$remember_key)?>">
							<div class="Form">
								<div class="row">
									<div class="col-12">
										<div class="FormElements">
											<label for="NewPass">Şifre*</label>
											<div class="PassHideShow">
												<input type="password" class="PasswordShow" name="newPass" id="newPass" required>
												<div class="hide-show"></div>
											</div>
										</div>
									</div>
									<div class="col-12">
										<div class="FormElements">
											<label for="NewPass2">Şifre Tekrar*</label>
											<div class="PassHideShow">
												<input type="password" class="PasswordShow" name="newPassR" id="newPassR" required>
												<div class="hide-show"></div>
											</div>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-12">
										<button class="Btn Blue-d w-100">Tamamla</button>
									</div>
								</div>
								<br>
								<?if(!empty(validation_errors())){?>
								<div class="row">
									<div class="col-12">
										<div class="alert alert-danger" style="text-align:center;"><?=validation_errors()?></div>
									</div>
								</div>
								<?}?>
								<?if($this->session->flashdata('hata')==1){?>
									<div class="row">
										<div class="col-12">
											<div class="alert alert-danger" style="text-align:center;">Şifrenizi Şuanda Yenileyemiyoruz, Lütfen Daha Sonra Tekrar Deneyin.</div>
										</div>
									</div>
								<?}elseif($this->session->flashdata('onay')==1){?>
									<div class="row">
										<div class="col-12">
											<div class="alert alert-success" style="text-align:center;">Şifreniz Başarıyla Güncellendi.<br>Şimdi Buradan<a href="<?=site_url('giris')?>"> Giriş</a> Yapabilirsiniz. <br>Yada 7 Saniye İçinde Yönlendirilceksiniz.</div>
										</div>
									</div>
								<?}?>
							</div>
						</form>
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
					<a target="_blank" href="<?=site_url()?>hakkimizda" class="Link"><?=$langStatics->FooterMenu2Baskil?></a>
					<a target="_blank" href="<?=site_url()?>siparis-teslimat-ve-iade" class="Link"><?=$langStatics->iade?></a>
					<a target="_blank" href="<?=site_url()?>yardim" class="Link"><?=$langStatics->FooterMenu2Text6?></a>
				</div>
				<div class="Copyright">2018 ebasim.com Tüm hakları saklıdır.</div>
			</div>
		</div>
	</div>
</div>
