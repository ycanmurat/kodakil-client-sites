	<section class="Pages--Wrapper DetailPage p-0">
		<div class="productDetailContent">
			<div class="container">
				<div class="row">
					<div class="col-lg-7">
						<div class="ProductGallery">
							<div class="swiper-container swiperProductGallery">
						    	<div class="swiper-wrapper">
						    		<?php if ($productimages != false){ ?>
						    			<?php foreach ($productimages as $key => $val): ?><!--
						      		<div class="swiper-slide"><img src="<?=site_url($val->url)?>" onerror="<?=site_url("assets/Front/images/noimage.png")?>" alt="<?=$product->product_name?> - ebasim.com"></div>-->
						      		
						      		<div class="swiper-slide"><img src="<?=site_url('assets/fake/')?>703x703.png" onerror="<?=site_url("assets/Front/images/noimage.png")?>" alt="<?=$product->product_name?> - kodakillabs.com"></div>
						    			<?php endforeach ?>
						    		<?php } else { ?>
						    		<div class="swiper-slide"><img src="<?=site_url("assets/Front/images/noimage.png")?>" alt="<?=$product->product_name?> - ebasim.com"></div>
						    		<?php } ?>
						    	</div>
						    	<div class="swiper-button-prev product-img-prev"><i class="fa fa-angle-left" aria-hidden="true"></i></div>
						    	<div class="swiper-button-next product-img-next"><i class="fa fa-angle-right" aria-hidden="true"></i></div>
						  	</div>

						  	<?php if ($product->discount_rate > 0): ?>
						  	<div class="discount-widget">
						  		<div class="t1">%<?=$product->discount_rate?></div>
						  		<div class="t2">indirim</div>
						  	</div>
						  	<?php endif ?>
						</div>
						<div class="Deadlines">
							<div class="Info">Onaylandıktan sonra baskılar ne zaman elimde olur ?</div>
							<div class="Box Green">
								<div class="Img"><img src="<?=site_url('assets/Front/')?>images/Icons/product-feature1.png" alt=""></div>
								<div class="Text">
									<div class="T">Tasarım Süresi :</div>
									<div class="I"><span><?=$product->product_prosses_json[0]?></span> İş Günü</div>
								</div>
							</div>
							<div class="Box Blue">
								<div class="Img"><img src="<?=site_url('assets/Front/')?>images/Icons/product-feature2.png" alt=""></div>
								<div class="Text">
									<div class="T">Üretim Süreci :</div>
									<div class="I"><span><?=$product->product_prosses_json[1]?></span> İş Günü</div>
								</div>
							</div>
							<div class="Box Orange">
								<div class="Img"><img src="<?=site_url('assets/Front/')?>images/Icons/product-feature3.png" alt="ebasim.com"></div>
								<div class="Text">
									<div class="T">Kargo Süresi :</div>
									<div class="I"><span><?=$product->product_prosses_json[2]?></span> İş Günü</div>
								</div>
							</div>
							<div class="Alert">Eğer tasarımınız hazırsa 24 saatte onaylanıp hemen baskıya gider.</div>
						</div>
					</div>
					<div class="col-lg-5">
						<form class="ProductInfo" action="<?=site_url($product_slug)?>" method="POST" enctype="multipart/form-data">
							<input type="hidden" name="productslug" value="<?=$product_slug?>">
							<div class="ProductHead">
								<div class="Title"><?=$product->product_name?></div>
								<?php if ($product->warnings): ?>
								<span class="Warning">
									<img src="<?=site_url('assets/Front/')?>images/Icons/warning.png" alt="Uyarılar">
									<span class="WarningBox">
										<p><?=$product->warnings?></p>
									</span>
								</span>
								<?php endif ?>
							</div>

							<div class="ProductOpsiyonel ProductOffer">
								<div>
									<?php echo validation_errors('<div class="alert alert-danger w-100">', '</div>'); ?>
									<?php if (@$sonuc[0] != "") { ?>
									<div class="alert alert-<?=$sonuc[1]?> w-100"><?=$sonuc[0]?></div>
									<?php } ?>
								</div>
								<div class="row">
									<div class="col-lg-12">
										<div class="Group">
											<label for="">Adınız Soyadınız *</label>
											<input type="text" name="name" required>
										</div>
									</div>
									<div class="col-lg-12">
										<div class="Group">
											<label for="">Telefon Numaranız *</label>
											<input type="text" name="phone" required>
										</div>
									</div>
									<div class="col-lg-12">
										<div class="Group">
											<label for="">E-Posta*</label>
											<input type="email" name="email" id="" required>
										</div>
									</div>
									<div class="col-lg-12">
										<div class="Group">
											<label for="">Eklemek İstedikleriniz :</label>
											<textarea name="description" id=""></textarea>
										</div>
									</div>
									<div class="col-lg-12">
										<div class="Group">
											<label for="">Baskı Yönü :</label>
											<input type="text" name="direction" id="">
										</div>
									</div>
									<div class="col-lg-12">
										<div class="Group">
											<label for="">Adet :</label>
											<input type="number" min="0" name="count">
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col">
										<div class="File">
										  	<span id="filename">Pdf / Psd / Ai</span>
									    	<label for="file-upload">Dosya Seç<input type="file" name="files[]" id="file-upload" /></label>
										</div>
									</div>
								</div>
							</div>

							<div class="ProductEnd">
								<div class="FormElements">
									<div class="checkboxGroup">
										<input type="checkbox" name="confirm" id="RegisterContract" checked="" required>
										<label for="RegisterContract"><span class="Contract">Gizlilik Sözleşmesi</span>'ni Okudum. Onaylıyorum.</label>
									</div>
								</div>
								<div class="row">
									<div class="col-md-12" style="text-align: center;">
										<div class="form-group m-form__group">
											<center><div class="g-recaptcha" data-sitekey="YOUR_RECAPTCHA_SITE_KEY"></div></center>
										</div>
									</div>
								</div>
								<div class="BtnBox">
									<button class="Btn Blue-d pt-3 pb-3" type="submit">Teklif İste</button>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>


		<div class="Explanation">

			<div class="TabsBar">
				<div class="container">
					<div class="row">
						<div class="col">
							<ul class="nav nav-tabs" id="ExplanationTabs" role="tablist">
							  	<li class="nav-item"><a href="#UrunOzellikleri" class="nav-link active" data-toggle="tab" role="tab" aria-selected="true">Ürün <span>Özellikleri</span></a></li>
							  	<li class="nav-item"><a href="#TasarimSureci" class="nav-link" data-toggle="tab" role="tab" aria-selected="false">Tasarım <span>Süreci</span></a></li>
							  	<li class="nav-item"><a href="#KargoveIade" class="nav-link" data-toggle="tab" role="tab" aria-selected="false">Kargo ve İade <span>Garantisi</span></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>

			<div class="Area">
				<div class="container">
					<div class="row">
						<div class="col-lg-8 LeftBar">
							<div class="ExplanationTabsContent tab-content" id="ExplanationTabsContent">
							  	<div class="tab-pane fade show active" id="UrunOzellikleri" role="tabpanel">
							  		<div class="EditorText">
							  			<div class="Wrapper">
							  				<?=$product->product_content?>
							  			</div>
							  		</div>
							  	</div>
							  	<div class="tab-pane fade" id="TasarimSureci" role="tabpanel">
							  		<div class="EditorText">
							  			<div class="Wrapper">
							  				<h5>Tasarım Hizmet Şartları</h5>
							  				<p>Lütfen tasarım hizmetinin kayıt ve koşullarını dikkatle okuyun. Herhangi bir sorunuz varsa, cep telefonu aracılığıyla müşteri hizmetleri ekibimizle iletişime geçebilir veya bize bir araştırma gönderebilirsiniz.</p>
											
											<h5>Tasarım Hizmetleri Kullanım Koşulları</h5>
							  				<p>Bastırmak istediğiniz ürün siparişini onayladıktan ve ödeme işlemini gerçekleştirdikten sonra İstediğiniz tasarımı elde etmek için mail adresinize bir resim alacaksınız.</p>
							  				<p>Bu tasarımı beğenmediğiniz takdirde size bir farklı renk ve bir farklı tasarım daha hazırlayarak ek bir ücret talep etmeden resim olarak göndereceğiz.</p>
							  				<p>Tasarımcılarımızla e-posta yolu ile bağlantı kurabilirsiniz.</p>

											<p>Bu koşullar dışındaki tasarım talepleriniz aynı tasarım ücreti ile ücretlendirilecektir.</p>

											<p>Tasarımınızı onayladığınızda hemen baskı sürecine gidilecektir.</p>

											<p>Teslim tarihi tasarım sonuçlandırma süresi ve üretim süresi ile hesaplanır..</p>


							  				<p><strong>Ne kadar sürer?</strong></p>
							  				<p>Tasarımınız onay sürecinden sonra 1-7 gün içerisinde işleme konulacaktır.</p>
							  				
							  				<p><strong>ebasim ile Tasarım hizmetleri şunları içermez:</strong></p>
							  				<p>- Grafik tasarım hizmetleri, simgeler ve logolar sağlanmaz.</p>
							  				<p>- Metin içeriği yok. Metin yazdırmaya hazır olmalıdır.</p>
							  			</div>
							  		</div>
							  	</div>
							  	<div class="tab-pane fade" id="KargoveIade" role="tabpanel">
							  		<div class="EditorText">
							  			<div class="Wrapper">
							  				<h5>Kargo</h5>
							  				<p>ebasim.com siparişlerinizi ARAS KARGO ile tüm Türkiye'ye ücretsiz gönderir.</p>
							  				<p>Siparişiniz kargoya verildikten sonra 3 iş günü içerisinde elinize ulaşır.Siparişinizi vermeden önce teslimat adresinizi lütfen kontrol ediniz.</p>
											
											<h5>Sipariş İptali</h5>
							  				<p>Sipariş iptal ve iade ile ilgili tüm taleplerinizi info@ebasim.com adresinden, 0 (850) 441 09 19 numaralı telefondan veya canlı destek üzerinden bildirebilirsiniz. Siparişinizin baskı süreçleri ile ilgili tüm bilgilendirmeler anlık olarak e-posta adresinize yapılır. Dokümanınız onaylandıktan ve baskıya alındıktan sonra siparişinizin üretimine başlandığına dair bilgilendirme alırsınız. Üretim aşamasına gelmeden önce müşteri hizmetleri ile iletişime geçerek siparişinizi iptal edebilirsiniz.</p>

							  				<h5>İade Şartları</h5>
							  				<p>Siparişinizin baskı kalitesinden mennun kalmamanız halinde, siparişinizi kargodan teslim almanızı takip eden 14 gün içerisinde müşteri hizmetleri ile iletişime geçerek şikayetinizi bildirebilirsiniz. Siparişiniz ile ilgili talebiniz üzerine, Satış Sonrası Destek ekibimiz en geç 1 iş günü içerisinde sizinle irtibata geçerek, ürüne ait fotoğraf ve diğer gerekli bilgileri isteyecektir. Kalite Kontrol ekibimiz tarafından yapılacak detaylı inceleme sonucunda, üretim kaynaklı bir hata bulunması durumunda, siparişiniz yeniden basılacak ve adresinize gönderilecektir. Kişiye özel baskılı ürünlerde cayma hakkı ve iade imkanı bulunmamaktadır.</p>

							  				<h5>İade İşlemleri</h5>
							  				<p>Üretim hatası kaynaklı iade işlemleriniz için, ürünü Aras Kargo ile aşağıdaki adrese 'Karşı Ödemeli' olarak göndermeniz gerekmektedir.Kodakıl Bilgisayar Organizasyon Reklam Limited Şirketi</p>
							  				<p>Körfez Mahallesi 79. Sokak No: 6/5 Atakum/Samsun</p>
							  				<p>Ürünün iade şartlarına uygun olması durumunda, kredi kartınıza veya havale ile ödeme yaptıysanız banka hesabınıza 3 iş günü içerisinde ödeme iadesi gerçekleştirilir. Ancak ödemenin hesabınıza yansıması, bankanıza bağlı olarak birkaç gün alabilir. Üründe herhangi bir üretim hatası bulunmaması halinde, ürününüz 'Karşı Ödemeli' olarak kayıtlı adresinize yeniden gönderilecektir.</p>

							  				<h5>Teslimat</h5>
							  				<p>Siparişinize ait faturanız kolinin üzerinde yer almaktadır. Siparişinizde teslimat sırasında hasar oluşmuş (yırtık, çatlak, vs.) veya eksik ürün olması durumunda kargo görevlisine tutanak tutturunuz. Tutanak tutulmaması halinde hasarlı siparişinizi teslim almadan iade ediniz. Siparişiniz ile ilgili herhangi bir sorunuz olması durumunda 0 (850) 441 09 19 numaralı telefondan bizimle irtibata geçebilirsiniz.</p>
							  			</div>
							  		</div>
							  	</div>
							</div>
						</div>
						<?php if ($templates != false): ?>
						<div class="col-lg-4 RightBar">
							<div class="formatList">
								<div class="T">Tasarım Şablonları İndirin :</div>
								<div id="accordion" role="tablist">

									<?php foreach ($templates->templates as $key => $val):
									if ($val == 1) {
										$templateid = "FormatPsd";
										$cardid = "headingThree";
										$linkclass = "PsdLink";
										$templatename = "Photoshop (Psd)";
										$accordionshow = " show";
										$collapsedclass = "";
									} else if ($val == 2) {
										$templateid = "FormatAi";
										$cardid = "headingTwo";
										$linkclass = "AiLink";
										$templatename = "Illustrator (Ai)";
										$accordionshow = "";
										$collapsedclass = "collapsed";
									} else if ($val == 3) {
										$templateid = "FormatPdf";
										$cardid = "headingOne";
										$linkclass = "PdfLink";
										$templatename = "Acrobat (Pdf)";
										$accordionshow = "";
										$collapsedclass = "collapsed";
									}
									?>
										
									<div class="card <?=$templateid?>">
								  	  	<div class="card-header" role="tab" id="<?=$cardid?>">
								  	  	    <a data-toggle="collapse" class="<?=$collapsedclass?>" href="#<?=$templateid?>" aria-expanded="false" aria-controls="<?=$templateid?>"><?=$templatename?></a>
								  	  	</div>
								  	  	<div id="<?=$templateid?>" class="collapse<?=$accordionshow?>" role="tabpanel" aria-labelledby="<?=$cardid?>" data-parent="#accordion">
								  	  	  	<div class="card-body">
								  	  	  		<?php if ($templates->files[$val]): ?>
									  	  	  		<?php foreach ($templates->files[$val] as $fkey => $fval): ?>
									  	  	  	<a class="FormatDownload <?=$linkclass?>" href="<?=site_url($fval->url)?>" download><?=$fval->name?></a>
									  	  	  		<?php endforeach ?>
								  	  	  		<?php endif ?>
								  	  	  	</div>
								  	  	</div>
								  	</div>
									<?php endforeach ?>

									
								</div>

								<p class="Info">Tasarım dosyalarınızı, ürünü sepete attıktan sonra <strong>(Pdf, psd, ai)</strong> formatlarında sitemize yükleyebilirsiniz. Tasarımınızın baskıya uygunluğu kontrol edilip, sizden onay alındıktan sonra ürününüz baskıya alınacaktır.</p>
							</div>
						</div>
						<?php endif ?>
					</div>
				</div>
			</div>

		</div>

	</section>