<?include("header.php");?>
<section class="StepsNav">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<div class="item-area">
					<div class="item "><img src="images/icons/banner1.png"><p>Sepet</p></div>
					<div class="item active"><img src="images/icons/banner2.png"><p>Tasarım</p></div>
					<div class="item "><img src="images/icons/banner3.png"><p>Adres</p></div>
					<div class="item "><img src="images/icons/banner4.png"><p>Ödeme</p></div>
					<div class="item "><img src="images/icons/banner5.png"><p>Sonuç</p></div>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="tasarim-area">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<div id="accordion">
					<div class="accordion-item" id="headingOne">
						<div data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
							<div class="item">
								<div class="isActive"><i class="fas fa-chevron-up"></i></div>
								<img class="img-fluid" src="https://fakeimg.pl/300/">
								<div class="content">
									<h5>Sıvama Kartvizit</h5>
									<div class="T"><span>Tasarım Hizmeti :<b>Var</b></span></div>
									<div class="T"><span>Yaka Kartı İpi :<b>50 Adet</b></span></div>
									<div class="T"><span>Baskı Yönü :<b>Tek Yön</b></span></div>
									<div class="T"><span>Ürün Rengi :<b>Beyaz</b></span></div>
									<div class="T"><span>Ebat :<b>90x1.5 cm</b></span></div>
								</div>
								<div class="services">
									<h6><i class="fas fa-pencil-ruler"></i>Tasarım Yaptırma Hizmeti</h6><!-- Tasarım yaptırma -->
									<p>İstediğiniz tasarımı profesyonel ekibimiz sizin için hazırlasın.</p>
								</div>
							</div>
							
						</div>
						<div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
							<div class="item-collapse-area">
								<div class="alt-item info-column">
									<img class="img-fluid" src="images/design-icon.png">
									<p>Grafik Tasarım programlarını kullanamıyor musunuz ? Fikirlerinizi bizimle paylaşın size uygun tasarımı yapıp gönderelim.
										<br>Telefon <b>: 0362 222 2222</b>
										E-Posta <b>: info@kodakil.com</b>
									</p>
								</div>
								<div class="comment">
									<label>Açıklama*</label>
									<textarea  placeholder="İstediğiniz tasarımı anlatın.."></textarea>
								</div>
								<div class="alt-item files">
									<label>Dosyalarınız*</label><span><i class="fas fa-exclamation-triangle"></i> Dosya boyutu 100mb'dan küçük olmalıdır. İzin verilen dosya uzantıları pdf,psd,ai,indd,svg ve eps'dir</span>
									<form action="/upload-target" class="dropzone" id="drop">
										<div class="dz-message needsclick">
											<i class="fas fa-file-upload"></i>
											Dosyaları Yükle
										</div>
									</form>
								</div>
							</div>
						</div>
					</div>


					<div class="accordion-item" id="headingTwo">
						<div data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
							<div class="item">
								<div class="isActive"><i class="fas fa-chevron-up"></i></div>
								<img class="img-fluid" src="https://fakeimg.pl/300/">
								<div class="content">
									<h5>Sıvama Kartvizit</h5>
									<div class="T"><span>Tasarım Hizmeti :<b>Var</b></span></div>
									<div class="T"><span>Yaka Kartı İpi :<b>50 Adet</b></span></div>
									<div class="T"><span>Baskı Yönü :<b>Tek Yön</b></span></div>
									<div class="T"><span>Ürün Rengi :<b>Beyaz</b></span></div>
									<div class="T"><span>Ebat :<b>90x1.5 cm</b></span></div>
								</div>
								<div class="services">
									<h6><i class="fas fa-cloud-upload-alt"></i>Tasarım yükleme Hizmeti</h6><!-- Tasarım yükleme  -->
									<p>Yüklediğiniz tasarımın baskı için uygunluğu kontrol edilir.</p>
								</div>
							</div>
							
						</div>
						<div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
							<div class="item-collapse-area">
								<div class="alt-item info-column">
									<img class="img-fluid" src="images/design-icon.png">
									<p>
										Grafik Tasarım programlarını kullanamıyor musunuz ? Fikirlerinizi bizimle paylaşın size uygun tasarımı yapıp gönderelim.
										<br>Telefon <b>: 0362 222 2222</b>E-Posta <b>: info@kodakil.com</b>
									</p>
								</div>
								<div class=" comment">
									<label>Açıklama*</label>
									<textarea placeholder="İstediğiniz tasarımı anlatın.."></textarea>
								</div>
								<div class="alt-item files">
									<label>Dosyalarınız*</label><span><i class="fas fa-exclamation-triangle"></i> Dosya boyutu 100mb'dan küçük olmalıdır. İzin verilen dosya uzantıları pdf,psd,ai,indd,svg ve eps'dir</span>
									<form action="/upload-target" class="dropzone" id="drop">
										<div class="dz-message needsclick">
											<i class="fas fa-file-upload"></i>
											Dosyaları Yükle
										</div>
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="design-button">
					<a href="sepet.php">Sepete Dön</a>
					<a href="adress.php">Sonraki Adım <i class="fas fa-chevron-right"></i></a>
				</div>
			</div>
		</div>
	</div>
</section>
<?include("footer.php");?>

