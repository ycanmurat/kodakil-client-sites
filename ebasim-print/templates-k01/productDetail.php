<?include("header.php");?>
<section class="product-detail">
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<div class="badgeArea">
					<img class="img-fluid" src="images/galeri-widget.png">
				</div>
				<div class="owl-carousel owl-theme owl-productimage">

					<div class="item"><img class="img-fluid" src="https://fakeimg.pl/1600/"></div>
					<div class="item"><img class="img-fluid" src="https://fakeimg.pl/1600/"></div>
					<div class="item"><img class="img-fluid" src="https://fakeimg.pl/1600/"></div>
				</div>
				<div class="infoContent">
					<h4>Onaylandıktan sonra baskılar ne zaman elinde olur ?</h4>
					<div class="item">
						<img src="images/ruler.png">
						<span>Tasarım Süresi :</span>
						<span><b>1-3</b> İş Günü</span>
					</div>
					<div class="item">
						<img src="images/paper-roll.png">
						<span>Üretim  Süreci :</span>
						<span><b>7-10</b> İş Günü</span>
					</div>
					<div class="item">
						<img src="images/delivery-truck.png">
						<span>Kargo Süresi :</span>
						<span><b>1-3</b> İş Günü</span>
					</div>

					<p>Eğer tasarımınz hazır ise 24 saaatte onaylanıp hemen baskıya gider.</p>
				</div>
			</div>
			<div class="col-md-6">
				<div class="productView">
					<h3>Ekonomik Kartvizit</h3>
					<div class="properties-area">
						<p>Baskı : CMYK Baskı</p>
						<p>Baskı : CMYK Baskı</p>
						<p>Baskı : CMYK Baskı</p>
						<p>Baskı : CMYK Baskı</p>
						<p>Baskı : CMYK Baskı</p>
					</div>
					<div class="variant-area">
						<div class="item">
							<label>Ebat</label>
							<select>
								<option>Lorem ipsum</option>
								<option>Lorem ipsum</option>
							</select>
						</div>
						<div class="item">
							<label>Kağıt</label>
							<select>
								<option>Lorem ipsum</option>
								<option>Lorem ipsum</option>
							</select>
						</div>
						<div class="item">
							<label>Baskı</label>
							<select>
								<option>Lorem ipsum</option>
								<option>Lorem ipsum</option>
							</select>
						</div>
						<div class="item">
							<label>Uygulama</label>
							<select>
								<option>Lorem ipsum</option>
								<option>Lorem ipsum</option>
							</select>
						</div>
						<div class="item">
							<label>Adet</label>
							<select disabled>
								<option>Lorem ipsum</option>
								<option>Lorem ipsum</option>
							</select>
						</div>
					</div>
					<div class="totalPrice">
						<p>KDV Dahil : </p>
						<h2>9999.12 TL</h2>
					</div>
					<button data-toggle="modal" data-target="#sepetModal">Sepete Ekle <i class="fas fa-angle-right"></i></button>
					<div class="tasarim-sablon">
						<h5>Tasarım Şablonları</h5>
						<div class="item psd">
							<div class="T">Photoshop [.Psd] <i class="fas fa-cloud-download-alt"></i></div>
							<a data-toggle="modal" data-target="#sablonModal"><img src="images/psd.png"> dosya ismi lorem ipsum dolor sit.psd</a>
							<a data-toggle="modal" data-target="#sablonModal"><img src="images/psd.png">dosya ismi lorem ipsum dolor sit.psd</a>
							<a data-toggle="modal" data-target="#sablonModal"><img src="images/psd.png">dosya ismi lorem ipsum dolor sit.psd</a>
						</div>
						<div class="item ai">
							<div class="T">Illustrator [.Ai] <i class="fas fa-cloud-download-alt"></i></div>
							<a data-toggle="modal" data-target="#sablonModal"><img src="images/ai.png">dosya ismi lorem ipsum dolor sit.ai</a>
							<a data-toggle="modal" data-target="#sablonModal"><img src="images/ai.png">dosya ismi lorem ipsum dolor sit.ai</a>
							<a data-toggle="modal" data-target="#sablonModal"><img src="images/ai.png">dosya ismi lorem ipsum dolor sit.ai</a>
						</div>
						<div class="item pdf">
							<div class="T">Acrobat [.Pdf] <i class="fas fa-cloud-download-alt"></i></div>
							<a data-toggle="modal" data-target="#sablonModal"><img src="images/pdf.png">dosya ismi lorem ipsum dolor sit.pdf</a>
							<a data-toggle="modal" data-target="#sablonModal"><img src="images/pdf.png">dosya ismi lorem ipsum dolor sit.pdf</a>
						</div>
						<div class="content">
							<p>Tasarım dosyalarınızı, ürünü sepete attıktan sonra (Pdf, psd, ai) formatlarında sitemize yükleyebilirsiniz. Tasarımınızın baskıya uygunluğu kontrol edilip, sizden onay alındıktan sonra ürününüz baskıya alınacaktır.</p>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12 mt-5">
				<ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
					<li class="nav-item">
						<a class="nav-link active" id="product-detail-content-tab" data-toggle="pill" href="#product-detail-content" role="tab" aria-controls="product-detail-content" aria-selected="true">Ürün Özellikleri</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" id="design-time-tab" data-toggle="pill" href="#design-time" role="tab" aria-controls="design-time" aria-selected="false">Tasarım Süreci</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" id="kargoveteslimat-tab" data-toggle="pill" href="#kargoveteslimat" role="tab" aria-controls="kargoveteslimat" aria-selected="false">Kargo ve İade Garantisi</a>
					</li>
				</ul>
				<div class="tab-content" id="pills-tabContent">
					<div class="tab-pane fade show active" id="product-detail-content" role="tabpanel" aria-labelledby="product-detail-content-tab">
						<h2>Ürün Adı Lorem Hakkında</h2>
						Kabartma Laklı kartvizitlerde; Etkileyici,kendinizi çok özel ve önemli hissettiren,müşterilerinizin üzerinde olumlu bir etki bırakmak istediğinizde kartvizitinizin istediğiniz bir bölümüne ister adınızı ister logonuzu kabartmalı bir şekilde tasarlayabilirsiniz. Lak, baskı yüzeyine uygulanan, ürünün parlak ve şık görünmesini sağlar. Ebaskim.com da Kabartma Laklı kartvizitler fark yaratan bir etki bırakacak görünüme sahiptir. Online matbaacılıkta ebaskim.com zamanında teslimat imkanı sunmaktadır.
					</div>
					<div class="tab-pane fade" id="design-time" role="tabpanel" aria-labelledby="design-time-tab">
						<h2>Tasarım Süreci</h2>
						Kabartma Laklı kartvizitlerde; Etkileyici,kendinizi çok özel ve önemli hissettiren,müşterilerinizin üzerinde olumlu bir etki bırakmak istediğinizde kartvizitinizin istediğiniz bir bölümüne ister adınızı ister logonuzu kabartmalı bir şekilde tasarlayabilirsiniz. Lak, baskı yüzeyine uygulanan, ürünün parlak ve şık görünmesini sağlar. Ebaskim.com da Kabartma Laklı kartvizitler fark yaratan bir etki bırakacak görünüme sahiptir. Online matbaacılıkta ebaskim.com zamanında teslimat imkanı sunmaktadır.
					</div>
					<div class="tab-pane fade" id="kargoveteslimat" role="tabpanel" aria-labelledby="kargoveteslimat-tab">
						<h2>Kargo ve İade</h2>
						Kabartma Laklı kartvizitlerde; Etkileyici,kendinizi çok özel ve önemli hissettiren,müşterilerinizin üzerinde olumlu bir etki bırakmak istediğinizde kartvizitinizin istediğiniz bir bölümüne ister adınızı ister logonuzu kabartmalı bir şekilde tasarlayabilirsiniz. Lak, baskı yüzeyine uygulanan, ürünün parlak ve şık görünmesini sağlar. Ebaskim.com da Kabartma Laklı kartvizitler fark yaratan bir etki bırakacak görünüme sahiptir. Online matbaacılıkta ebaskim.com zamanında teslimat imkanı sunmaktadır.
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<section class="same-product">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<h3>Bunlarda ilginizi çekebilir</h3>
				<div class="owl-carousel owl-theme owl-sameProduct">
					<div class="item">
						<a href="#">
							<div class="imgArea">
								<img class="img-fluid m-auto" src="images/itemex.jpg">
							</div>
							<p><span>KODAKIL KARTVİZİT DENEME TASARIM</span></p>
						</a>
					</div>
					<div class="item">
						<a href="#">
							<div class="imgArea">
								<img class="img-fluid m-auto" src="images/itemex.jpg">
							</div>
							<p><span>KODAKIL KARTVİZİT DENEME TASARIM</span></p>
						</a>
					</div>
					<div class="item">
						<a href="#">
							<div class="imgArea">
								<img class="img-fluid m-auto" src="images/itemex.jpg">
							</div>
							<p><span>KODAKIL KARTVİZİT DENEME TASARIM</span></p>
						</a>
					</div>
					<div class="item">
						<a href="#">
							<div class="imgArea">
								<img class="img-fluid m-auto" src="images/itemex.jpg">
							</div>
							<p><span>KODAKIL KARTVİZİT DENEME TASARIM</span></p>
						</a>
					</div>
					<div class="item">
						<a href="#">
							<div class="imgArea">
								<img class="img-fluid m-auto" src="images/itemex.jpg">
							</div>
							<p><span>KODAKIL KARTVİZİT DENEME TASARIM</span></p>
						</a>
					</div>
					<div class="item">
						<a href="#">
							<div class="imgArea">
								<img class="img-fluid m-auto" src="images/itemex.jpg">
							</div>
							<p><span>KODAKIL KARTVİZİT DENEME TASARIM</span></p>
						</a>
					</div>
					<div class="item">
						<a href="#">
							<div class="imgArea">
								<img class="img-fluid m-auto" src="images/itemex.jpg">
							</div>
							<p><span>KODAKIL KARTVİZİT DENEME TASARIM</span></p>
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>


<!-- Modal PSD-->
<div class="modal fade main-modal" id="sablonModal" tabindex="-1" role="dialog" aria-labelledby="sablonModalTitle" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<img src="images/design-popup-1.jpg" class="img-fluid">
				<img src="images/design-popup-2.jpg" class="img-fluid">
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Şablonu İndir</button>
				<button type="button" class="btn btn-primary">Klavuzu İndir</button>
			</div>
		</div>
	</div>
</div>
<!-- Sepet First Step Modal -->
<div class="modal fade main-modal" id="sepetModal" tabindex="-1" role="dialog" aria-labelledby="sepetModalLabel" aria-hidden="true">
	<div class="modal-dialog " role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<div class="design-select">
					<div class="item">
						<a href="" data-dismiss="modal"><img src="images/design-icon.png"><p>Tasarım Yükle</p></a>
						<p>Tasarım hazır hizmetini almasanız bile tasarımınızın baskı için uygun olup olmadığı kontrol edilmeli.</p>
					</div>
					<div class="item">
						<a data-toggle="modal" data-target="#tasarimyaptir" data-dismiss="modal"><img src="images/upload-icon.png"><p>Tasarım Yapalım</p></a>
						<p>Nasıl bir tasarım istediğinizi bize iletin profesyonel ekibimiz sizin için tasarlasın.</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- Sepet Last Step Modal -->
<div class="modal fade main-modal" id="tasarimyaptir" tabindex="-1" role="dialog" aria-labelledby="tasarimyaptirLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content ">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body tasarim">
				<h5>Tasarım Hizmet Şartları</h5>
				<p>Lütfen tasarım hizmetinin kayıt ve koşullarını dikkatle okuyun. Herhangi bir sorunuz varsa, cep telefonu aracılığıyla müşteri hizmetleri ekibimizle iletişime geçebilir veya bize bir araştırma gönderebilirsiniz.</p>
				<h4>Tasarım Hizmetleri Kullanım Koşulları</h4>
				<p>Bastırmak istediğiniz ürün siparişini onayladıktan ve ödeme işlemini gerçekleştirdikten sonra İstediğiniz tasarımı elde etmek için mail adresinize bir resim alacaksınız.Bu tasarımı beğenmediğiniz takdirde size bir farklı renk ve bir farklı tasarım daha hazırlayarak ek bir ücret talep etmeden resim olarak göndereceğiz.Tasarımcılarımızla e-posta yolu ile bağlantı kurabilirsiniz.Bu koşullar dışındaki tasarım talepleriniz aynı tasarım ücreti ile ücretlendirilecektir.Tasarımınızı onayladığınızda hemen baskı sürecine gidilecektir.Teslim tarihi tasarım sonuçlandırma süresi ve üretim süresi ile hesaplanır..</p>
				<h4>Ne kadar sürer ?</h4>
				<p>Tasarımınız onay sürecinden sonra 1-7 gün içerisinde işleme konulacaktır.</p>
				<h4>Kodakıl ile Tasarım hizmetleri şunları içermez:</h4>
				<p>- Grafik tasarım hizmetleri, simgeler ve logolar sağlanmaz.</p>
				<p>- Metin içeriği yok. Metin yazdırmaya hazır olmalıdır.</p>
				<div class="toBasket">
					<div class="item">
						<p>Tasarım Ücreti :</p>
						<p>999.99 TL</p>
					</div>
					<div class="item">
						<button>Sepete Ekle</button>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<?include("footer.php");?>

