<div class="Maps">
	<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d1499.2289979030393!2d36.34826286574556!3d41.27713572422897!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x9284a8188a82f55d!2sebasim.com+Online+Matbaa!5e0!3m2!1str!2str!4v1545723173708"  width="100%" height="350" frameborder="0" style="border:0" allowfullscreen></iframe>
</div>

<div class="Contact-Wrapper">
	<div class="container">
		<div class="row">
			<div class="col-lg-4">
				<h3 class="Title">İletişim</h3>

				<div class="Box">
					<div class="Icon Red"><img src="<?=site_url('assets/Front/images/Icons/contact-location.png')?>" alt="iletişim logo ebasim"></div>
					<div class="Text">
						<div class="T">Adres</div>
						<p>Kılıçdede Mah. Kastamonu Sk.</p>
						<p>No:6 Borkonut Center İş Merkezi</p>
						<p>9.Kat/125 İlkadım / Samsun</p>
					</div>
				</div>
				<div class="Box">
					<div class="Icon Orange"><img src="<?=site_url('assets/Front/images/Icons/contact-phone.png')?>" alt="telefon logo ebasim"></div>
					<div class="Text">
						<div class="T">Telefon Numarası</div>
						<p>+90 362 231 5507 - <strong>Merkez</strong></p>
						<!-- <p>+90 850 379 55 55 - <strong>Fax</strong></p> -->
					</div>
				</div>
				<div class="Box">
					<div class="Icon Green"><img src="<?=site_url('assets/Front/images/Icons/contact-mail.png')?>" alt="email logo ebasim"></div>
					<div class="Text">
						<div class="T">E-Posta Adresi</div>
						<p>info@ebasim.com</p>
					</div>
				</div>

				<div class="Box">
					<div class="Icon Yellow"><img src="<?=site_url('assets/Front/images/Icons/contact-bank.png')?>" alt="banka logo ebasim"></div>
					<div class="Text">
						<div class="T">Hesap Bilgileri</div>

		    			<p><strong>QNB Finansbank</strong></p>
		    			<p><span>Hesap Adı :</span>Mtaş Lojistik Gıda Sanayi Ve Ticaret Anonim Şirketi </p>
		    			<p><span>Iban Numarası :</span> TR53 0011 1000 0000 0084 1238 71</p>
		    			<br>
		    			<p><span>Hesap Numarası : </span>84123871</p>
		    			<p><span>Şube Kodu : </span>03663</p>
					</div>
				</div>

			</div>
			<div class="col-lg-8">
				<div class="Contact-Form">
					<div class="T">İletişim Formu</div>
					<form action="<?=site_url('iletisim')?>" method="POST">
						<div class="row">
							<div class="col-lg-12" style="<?=$this->session->flashdata('contactHata')>0?'':'display:none'?>">
								<div class="alert alert-danger">
								  <strong>Hata !</strong> Teknik Bir Aksaklık Sebebiyle işlem tamamlanamadı
								</div>
							</div>
							<div class="col-lg-12" style="<?=$this->session->flashdata('contactSuccess')>0?'':'display:none'?>">
								<div class="alert alert-success">
								  İletişim Talebiniz Yetkililerimize <strong>Gönderilmiştir.</strong> Kısa Süre İçerisinde Cevaplanacaktır.
								</div>
							</div>
							<div class="col-lg-4">
								<div class="FormElements">
									<label>Ad Soyad*</label>
									<input value="<?=set_value('name')?>" type="text" name="name">
									<span style="color:red;"><?=form_error('name')?></span>
								</div>
							</div>
							<div class="col-lg-4">
								<div class="FormElements">
									<label>E-Posta*</label>
									<input value="<?=set_value('email')?>" type="email" name="email">
									<span style="color:red;"><?=form_error('email')?></span>
								</div>
							</div>
							<div class="col-lg-4">
								<div class="FormElements">
									<label>Telefon Numarası*</label>
									<input value="<?=set_value('tel')?>" type="text" name="tel">
									<span style="color:red;"><?=form_error('tel')?></span>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-12">
								<div class="FormElements">
									<label>Konu*</label>
									<input value="<?=set_value('konu')?>" type="text" name="konu">
									<span style="color:red;"><?=form_error('konu')?></span>
								</div>
							</div>
							<div class="col-12">
								<div class="FormElements">
									<label>Mesaj*</label>
									<textarea name="msj"><?=set_value('msj')?></textarea>
									<span style="color:red;"><?=form_error('msj')?></span>
								</div>
							</div>
							<div class="col-12 text-right">
								<button type="submit" class="Btn Blue-d">Gönder</button>
							</div>
							<?if($this->session->flashdata('hata')=='1'){?>
							<div class="col-12">
								<div class="FormElements">
									<p><font color="red">Şuanda Bilgilerinizi İletemiyoruz Lütfen Daha Sonra Deneyin</font></p>
								</div>
							</div>
							<?}elseif($this->session->flashdata('onay')=='1'){?>
							<div class="col-12">
								<div class="FormElements">
									<p><font color="green">Bilgilerinizi Başarıyla Aldık, Hemen Geri Dönüş Sağlayacağız</font></p>
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
