<div class="userHead">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<a href="<?=site_url()?>" class="Link"><img src="<?=(site_url('assets/ebasimlogo.png'))?>" alt="Logo ebasim.com"></a>
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
						<div class="Icon"><img src="<?=TimbThumb(site_url('/assets/Front/images/Icons/forgot.png'),'44x40')?>" alt="ikon şifremi unuttum"></div>

						<div class="T">Şifremi Unuttum</div>
						<form method="post" action="<?=site_url('sifremi-unuttum')?>">
						<div class="Form">
							<div class="row">
								<div class="col-12">
									<div class="FormElements">
										<label for="forgotEmail">E-Posta</label>
										<input type="email" name="email" id="forgotEmail" required>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-12">
									<button class="Btn Blue-d w-100">Şifremi Yenile <i class="fa fa-angle-right" aria-hidden="true"></i></button>
								</div>
							</div>
							<br>
							<div class="row">
								<div class="col-12">
									<?if($this->session->flashdata('forgotError') == 1){?>
									<div class="Errors">
										Girdiğiniz E-Posta Adresi Yanlış veya Kayıtlı Değil.
									</div>
									<?}elseif($this->session->flashdata('forgotPass') == 1){?>
									<div class="Errors Not">
										Şifre Sıfırlama Talebiniz E-Posta Adresinize İletildi.
									</div>
									<?}?>
								</div>	
							</div>
							<br>
						</div>
						</form>
						<div class="OrWrapper">
							<div class="Or"><span>Henüz üye değil misiniz?</span></div>

							<a href="<?=site_url('kayit')?>" class="Btn Btn-o">Üye Olun</a>
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
					<a target="_blank" href="<?=site_url()?>hakkimizda" class="Link"><?=$langStatics->FooterMenu2Baskil?></a>
					<a target="_blank" href="<?=site_url()?>teslimat-ve-iade" class="Link"><?=$langStatics->iade?></a>
					<a target="_blank" href="<?=site_url()?>yardim" class="Link"><?=$langStatics->FooterMenu2Text6?></a>
				</div>
				<div class="Copyright">2018 ebasim.com Tüm hakları saklıdır.</div>
			</div>
		</div>
	</div>
</div>