<div class="userHead">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<a href="<?=site_url()?>" class="Link"><img src="<?=(site_url('assets/ebasimlogo.png'))?>" alt="logo"></a>
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
						<div class="Icon"><img src="<?=TimbThumb(site_url('/assets/Front/images/Icons/login.png'),'44x40')?>" alt="giriş yap ebas.com"></div>

						<div class="T">Giriş Yap</div>
						
						<div class="Form">
							<form method="POST" action="<?=site_url('giris')?>">
								<div class="row">
									<div class="col-12">
										<div class="FormElements">
											<label for="email">E-Posta</label>
											<input type="email" value="<?=set_value('email')?>" name="email" id="email" required>
										</div>
									</div>
									<div class="col-12">
										<div class="FormElements">
											<label for="Pass">Şifre</label>
											<div class="PassHideShow">
												<input type="password" class="PasswordShow" name="pass" id="pass" required>
												<div class="hide-show"></div>
											</div>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col">
										<div class="FormElements">
											<div class="checkboxGroup">
												<input type="checkbox" id="RememberMe" name="RememberMe" checked>
												<label for="RememberMe">Beni Hatırla</label>
											</div>	
										</div>
									</div>
									<div class="col text-right">
										<a href="javascript:void(0);" class="Forgot"><i class="fa fa-long-arrow-right" aria-hidden="true"></i>&nbsp; Şifremi Unuttum</a>
									</div>
								</div>
								<!--<center class="mb-3"><div class="g-recaptcha" data-sitekey="YOUR_RECAPTCHA_SITE_KEY"></div></center>-->
								<?if($this->session->flashdata('google') == 1){?>
								<div class="row">
									<div class="col-12">
										<div class="Errors">Lütfen Robot Olmadığınızı Onaylayın.</div>
									</div>	
								</div>
								<?}elseif($this->session->flashdata('facebook_error') == '1'){?>
								<div class="row">
									<div class="col-12">
										<div class="Errors">Şaunda Facebook İle Giriş Yapılamıyor.</div>
									</div>	
								</div>
								<?}elseif($this->session->flashdata('facebook_email') == '1'){?>
								<div class="row">
									<div class="col-12">
										<div class="Errors">Facebook İle Giriş Yapabilmeniz İçin, Uygulamaya İzin Verirken E-Posta Adresinizi Paylaşmanız Gerekiyor. Öncelikle Uygulamayı Bu <a href="https://www.facebook.com/settings?tab=applications">Adres</a>'ten Kaldırın Daha Sonra E-Posta İzni Vererek Tekrar Giriş Yapın.</div>
									</div>	
								</div>
								<?}elseif($this->session->flashdata('google_error') == '1'){?>
								<div class="row">
									<div class="col-12">
										<div class="Errors">Şaunda Google İle Giriş Yapılamıyor.</div>
									</div>	
								</div>
								<?}elseif($this->session->flashdata('erisim_hatasi') == '1'){?>
								<div class="row">
									<div class="col-12">
										<div class="Errors">Facebook'ta Erişim İznine İptal Dediğiniz İçin Bilgilerinize Ulaşamıyoruz.</div>
									</div>	
								</div>
								<?}?>
								<div class="row">
									<div class="col-12">
										<?=$this->session->flashdata('loginError')?>
									</div>	
								</div>
								<div class="row">
									<div class="col-12">
										<button type="submit" class="Btn Blue-d w-100">Giriş <i class="fa fa-angle-right" aria-hidden="true"></i></button>
									</div>
								</div>
							</form>
						</div>

						<div class="OrWrapper">
							<div class="Or"><span>Henüz üye değil misiniz?</span></div>
							<a href="<?=site_url('kayit');?>" class="Btn Btn-o">Üye Olun</a>
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
				<div class="Copyright">2020 ebasim.com Tüm hakları saklıdır.</div>
			</div>
		</div>
	</div>
</div>