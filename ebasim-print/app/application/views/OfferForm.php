<div class="OfferForm">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<?php echo validation_errors('<div class="alert alert-danger">', '</div>'); ?>
				<?php if ($sonuc[0] != "") { ?>
				<div class="alert alert-<?=$sonuc[1]?>"><?=$sonuc[0]?></div>
				<?php } ?>
				<div class="Area">
					<div class="Wrapper">
						<div class="Icon"><img src="<?=site_url('assets/Front/')?>images/Icons/register.png" alt="Teklif formu ikon ebasim.com"></div>

						<div class="T">Teklif Formu</div>

						<form class="Form" action="<?=site_url('teklif-iste')?>" method="POST" enctype="multipart/form-data">
							<div class="row">
								<div class="col-lg-4">
									<div class="FormElements">
										<label for="">Ad Soyad*</label>
										<input type="text" name="name" value="<?=set_value('name')?>" id="" required>
									</div>
								</div>
								<div class="col-lg-4">
									<div class="FormElements">
										<label for="">E-Posta*</label>
										<input type="email" name="email" value="<?=set_value('email')?>" id="" required>
									</div>
								</div>
								<div class="col-lg-4">
									<div class="FormElements">
										<label for="">Telefon Numarası*</label>
										<input type="text" name="phone" value="<?=set_value('phone')?>" id="" >
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-lg-6">
									<div class="FormElements">
										<label for="">Teklif Tipi *</label>
										<select name="type" value="<?=set_value('type')?>" id="" required>
											<option value="0" disabled=""></option>
											<option>Kurumsal Teklif</option>
											<option>Bireysel Teklif</option>
											<option>Etkinlik & Organizasyon</option>
											<option>Davet</option>
											<option>Diğer</option>
										</select>
									</div>
								</div>
								<div class="col-lg-6">
									<div class="FormElements">
										<label for="">Teklif İstenen Ürün*</label>
										<input type="text" name="product" value="<?=set_value('product')?>" id="" required>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-lg-6">
									<div class="FormElements">
										<label for="">Adet</label>
										<input type="number" name="count">
									</div>
								</div>
								<div class="col-lg-6">
									<div class="FormElements">
										<label for="">Baskı Yönü</label>
										<input type="text" name="direction" value="<?=set_value('direction')?>" id="">
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-12">
									<div class="FormElements">
										<label for="">Eklemek İstedikleriniz</label>
										<textarea name="description" value="<?=set_value('description')?>" id=""></textarea>
									</div>
								</div>
								<div class="col-12 mt-3 mb-3">
									<div class="FileBox">
						                <div class="demo-section k-content">
						                    <div class="k-widget k-upload k-header k-upload-empty"><div class="k-dropzone"><div class="k-button k-upload-button" aria-label="Dosya Seç"><input name="files[]" class="offerform-empty" id="offerFile" type="file" data-role="upload" multiple="multiple" autocomplete="off"><span>Dosya Seç</span></div><em>Drop files here to upload</em></div></div>
						                </div>
						            </div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-12" style="text-align: center;">
									<div class="form-group m-form__group">
										<center><div class="g-recaptcha" data-sitekey="YOUR_RECAPTCHA_SITE_KEY"></div></center>
									</div>
								</div>
							</div>
							<div class="row text-center">
								<div class="col-12">
									<div class="FormElements d-inline-block">
										<div class="checkboxGroup">
											<input type="checkbox" name="confirm" id="RegisterContract" checked="" required>
											<label for="RegisterContract"><span class="Contract">Teklif Sözleşmesi</span>'ni ve <span class="Contract">Gizlilik Sözleşmesi</span>'ni Okudum. Onaylıyorum.</label>
										</div>
									</div>
								</div>
								<div class="col-12">
									<button type="submit" class="Btn Green-d">Hemen Gönder</button>


									<!-- <div class="Alert">
										<div class="B">Teklifiniz Bize Ulaştı.</div>

										Teklifiniz incelendikten sonra sonucu PDF formatında gönderilecektir. Dilerseniz <a href="Account-Offers.php" class="Link">Tekliflerim</a> kısmından kontrol edebilirsiniz. Teklifiniz için teşekkürler.

									</div> -->
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>