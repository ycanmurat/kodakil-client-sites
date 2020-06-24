	<section class="Pages--Wrapper DetailPage p-0">
		<div class="productDetailContent">
			<div class="container">
				<div class="row">
					<?php /* if ($SliderProduct->status == 1) { ?>
						<div class="col-12">
							<div class="FullAdsBanner">
								<div class="Close"><i class="fa fa-times" aria-hidden="true"></i></div>
								<a><img src="<?=site_url($SliderProduct->banner_url)?>" width="1250" alt="Banner kodakillabs.com"></a>
							</div>
						</div>
					<?php } */  ?>
					<div class="col-12 MobProductTitle"><?=$product->product_name?></div>
					<div class="col-lg-7">
						<div class="ProductGallery">
							<div class="swiper-container swiperProductGallery">
								<div class="swiper-wrapper">
									<?php if ($productimages != false){ ?>
										<?php foreach ($productimages as $key => $val): ?>
											<div class="swiper-slide"><img src="<?=TimbThumb(site_url($val->url),'703x703')?>" alt="<?=$product->product_name?> - kodakillabs.com" onerror="this.onerror=null;this.src='assets/fake/703x703.png';"></div>
										<?php endforeach ?>
									<?php } else { ?>
										<div class="swiper-slide"><img src="<?=site_url("assets/Front/images/noimage.png")?>" alt="<?=$product->product_name?> - kodakillabs.com"></div>
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

							<div class="Left-widgets">
								<img src="<?=site_url("assets/Front/images/Icons/galeri-widget.png")?>" alt="İleri">
							</div>
						</div>
						<div class="Deadlines">
							<div class="Info">Onaylandıktan sonra baskılar ne zaman elimde olur ?</div>
							<div class="Box Green">
								<div class="Img"><img src="<?=site_url('assets/Front/')?>images/Icons/product-feature1.png" alt="Tasarım Süresi"></div>
								<div class="Text">
									<div class="T">Tasarım Süresi :</div>
									<div class="I"><span><?=$product->product_prosses_json[0]?></span> İş Günü</div>
								</div>
							</div>
							<div class="Box Blue">
								<div class="Img"><img src="<?=site_url('assets/Front/')?>images/Icons/product-feature2.png" alt="Üretim Süresi"></div>
								<div class="Text">
									<div class="T">Üretim Süreci :</div>
									<div class="I"><span><?=$product->product_prosses_json[1]?></span> İş Günü</div>
								</div>
							</div>
							<div class="Box Orange">
								<div class="Img"><img src="<?=site_url('assets/Front/')?>images/Icons/product-feature3.png" alt="Kargo Süresi"></div>
								<div class="Text">
									<div class="T">Kargo Süresi :</div>
									<div class="I"><span><?=$product->product_prosses_json[2]?></span> İş Günü</div>
								</div>
							</div>
							<div class="Alert">Eğer tasarımınız hazırsa 24 saatte onaylanıp hemen baskıya gider.</div>
						</div>
					</div>
					<div class="col-lg-5">
						<div class="ProductInfo prel" id="ProductLoad">
							<div class="ProductHead">
								<div class="Title"><h1><?=$product->product_name?></h1></div>
								<?php if ($product->warnings != '') { ?>
									<span class="Warning">
										<img src="<?=site_url('assets/Front/')?>images/Icons/warning.png" alt="Uyarılar - ebasim.com">
										<span class="WarningBox">
											<p><?=$product->warnings?></p>
										</span>
									</span>
								<?php } ?>
							</div>
							<?php if ($staticvariants): $vcount = count($staticvariants)-1; $sayac = 0; ?>
								<div class="ProductFeatures">
									<ul class="List">
										<?php foreach ($staticvariants as $key => $val): ?>
											<?php if ($sayac % 3 == 0): ?>
												<li class="Item">
													<table>
														<tbody>
														<?php endif ?>
														<tr><td><?=$val->variant_name?></td><td><span>:</span></td><td><?=$val->child_name?></td></tr>
														<?php if ($sayac % 3 == 2 || $key == $vcount): ?>
														</tbody>
													</table>
												</li>
											<?php endif ?>
											<?php $sayac++; endforeach ?>
										</ul>
									</div>
								<?php endif ?>
								<?php if ($variants != false): ?>
									<div class="ProductOpsiyonel">
										<?php foreach ($variants as $vkey => $val): ?>
											<?php if ($val->variant_id != 184) { ?>
												<div class="Group">
													<label for=""><?=$val->name?></label>
													<select id="variant_<?=$val->product_variant_id?>" variant="<?=$vkey?>" class="variants">
														<?php foreach ($val->childs as $key2 => $val2): ?>
															<option value="<?=$val2->variant_child_id?>"><?=$val2->name?></option>
														<?php endforeach ?>
													</select>
												</div>
											<?php } ?>
										<?php endforeach ?>
									</div>
								<?php endif ?>
								<?php if ($adetInput != false) { ?>
									<div class="inputR-area">
										<label for="rangerinput">Adet Belirtin :</label>
										<input class="form-control" type="number" id="quantity" onclick="select()" name="rangerinput" value="<?=$adetInput[0]->childs[0]->name?>" data-min="<?=$adetInput[0]->childs[0]->name?>" data-max="<?=$adetInput[0]->childs[1]->name?>">
										<span>En az : <?=$adetInput[0]->childs[0]->name?> | En fazla : <?=$adetInput[0]->childs[1]->name?></span>
										<button onclick="quantityUpper()" id="quantityupper">+</button>
										<button onclick="quantityDowner()" id="quantitydowner">-</button>
									</div>
								<?php } ?>
								<script>
									$(document).on('keyup','#quantity',function() {
										limitStok();
									});

									$(document).on('click','.quantityAll',function() {
										limitStok();
									});
									function quantityUpper(){
										var xamp = $('#quantity').val();
										var bemp = parseInt(xamp);
										bemp++
										var cose = bemp.toString()
										$('#quantity').val(cose);
										limitStok();
									}
									function quantityDowner(){
										var xamp = $('#quantity').val();
										var bemp = parseInt(xamp);
										bemp--
										var cose = bemp.toString()
										$('#quantity').val(cose);
										limitStok();
									}
									function limitStok() {
										var max = $('#quantity').data('max');
										var min = $('#quantity').data('min');
										if ($('#quantity').val() > max) {
											$('#quantity').val(max);
										}
										if ($('#quantity').val() < min) {
											$('#quantity').val(min);
										}

										$('#PriceSpan').text(parseInt(basePrice)*$('#quantity').val());

										if($('input#kdvmanipule').prop("checked") == true){
											kdvharicgoster();
										}else{
											kdvdahilgoster();
										}
									}
								</script>   
								<div class="ProductEnd">
									<div class="Addition">
										<div class="Total">
											<div class="T">KDV Dahil : </div>
											<div class="kdv-change">
												<div class="pretty p-switch">
													<input type="checkbox" id="kdvmanipule" />

													<div class="state">
														<label>Kdv Hariç Göster</label>
													</div>
												</div>
											</div>
											<div class="Price GetPrice" data-rate="<?=$product->product_price?>" data-cur="<?=$thiscurrency->price?>"><span id="PriceSpan"></span> <?=$thiscurrency->code?></div>
										</div>
									</div>

									<div class="BtnBox">
										<button class="Btn Blue-d sepeteAtBtn" onclick="priceKitle()">Sepete Ekle <i class="fa fa-angle-right" aria-hidden="true"></i></button>
										<div id="Tihla" data-toggle="modal" data-target="#DesignControlModal"></div>
										<!-- Tasarım var/yok -->
										<div class="modal fade globalModal" id="DesignControlModal" tabindex="-1" role="dialog" aria-hidden="true">
											<div class="modal-dialog" role="document">
												<div class="modal-content">
													<div class="modal-body">
														<button type="button" class="close" data-dismiss="modal" aria-label="Close"><i class="fa fa-times" aria-hidden="true"></i></button>
														<div class="DesignControl">
															<div class="Title mt-0">Tasarım Tercihiniz</div>
															<div class="row">
																<div class="col-6">
																	<div class="SelectItem" onclick="SepeteEkleTasariVar(<?=$productid?>)" data-dismiss="modal" aria-label="Close">
																		<div class="Img"><img src="<?=site_url('assets/Front/')?>images/Icons/upload-file.png" alt="Tasarım Yükle"></div>
																		<p>Tasarım Yükle</p>
																	</div>
																	<p class="Info">Tasarım hazır hizmetini almasınız bile tasarımınızın baskı için uygun olup olmadığı kontrol edilmeli.</p>
																</div>
																<div class="col-6">
																	<div class="SelectItem" data-dismiss="modal" data-toggle="modal" data-target="#DesignContractModal" >
																		<div class="Img"><img src="<?=site_url('assets/Front/')?>images/Icons/edit-tools.png" alt="Tasarımı Biz Yapalım"></div>
																		<p>Tasarım Yapalım</p>
																	</div>
																	<p class="Info">Nasil bir tasarım istediğinizi bize anlatın uzman ekibimiz hazırlasın ...</p>
																</div>
															</div>
														</div>


													</div>
												</div>
											</div>
										</div>

										<!-- Tasarım var/yok kontrat -->
										<div class="modal fade globalModal" id="DesignContractModal" tabindex="-1" role="dialog" aria-hidden="false">
											<div class="modal-dialog " role="document">
												<div class="modal-content">
													<div class="modal-body">
														<button type="button" class="close" data-dismiss="modal" aria-label="Close"><i class="fa fa-times" aria-hidden="true"></i></button>
														<div class="DesignContract">
															<div class="Title mt-0">Tasarım Hizmet Şartları</div>

															<p>Lütfen tasarım hizmetinin kayıt ve koşullarını dikkatle okuyun. Herhangi bir sorunuz varsa, cep telefonu aracılığıyla müşteri hizmetleri ekibimizle iletişime geçebilir veya bize bir araştırma gönderebilirsiniz.</p>

															<div class="T">Tasarım Hizmetleri Kullanım Koşulları</div>
															<p>Bastırmak istediğiniz ürün siparişini onayladıktan ve ödeme işlemini gerçekleştirdikten sonra İstediğiniz tasarımı elde etmek için mail adresinize bir resim alacaksınız.</p>
															<p>Bu tasarımı beğenmediğiniz takdirde size bir farklı renk ve bir farklı tasarım daha hazırlayarak ek bir ücret talep etmeden resim olarak göndereceğiz.</p>
															<p>Tasarımcılarımızla e-posta yolu ile bağlantı kurabilirsiniz.</p>
															<p>Bu koşullar  dışındaki tasarım talepleriniz aynı tasarım ücreti ile ücretlendirilecektir.</p>
															<p>Tasarımınızı onayladığınızda hemen baskı sürecine gidilecektir.</p>
															<p>Teslim tarihi tasarım sonuçlandırma süresi ve üretim süresi ile hesaplanır..</p>

															<div class="T">Ne kadar sürer?</div>
															<p>Tasarımınız onay sürecinden sonra 1-7 gün içerisinde işleme konulacaktır.</p>

															<div class="T">Ebasim.com ile Tasarım hizmetleri şunları içermez:</div>

															<p>- Grafik tasarım hizmetleri, simgeler ve logolar sağlanmaz.</p>
															<p>- Metin içeriği yok. Metin yazdırmaya hazır olmalıdır.</p>
														</div>
													</div>
													<div class="modalBottom">
														<div class="Left">
															<div class="DesignPrice">
																<div class="DesignTitle">Tasarım Ücreti :</div>
																<p><?=$creativeprice?></p>
															</div>
														</div>
														<div class="Right">
															<button class="Btn Blue-d" data-dismiss="modal" onclick="SepeteEkleTasarimYok(<?=$productid?>)" aria-label="Close">Kabul Et ve Sepete Ekle <i class="fa fa-angle-right" aria-hidden="true"></i></button>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
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

												<p><strong>Ebasim ile Tasarım hizmetleri şunları içermez:</strong></p>
												<p>- Grafik tasarım hizmetleri, simgeler ve logolar sağlanmaz.</p>
												<p>- Metin içeriği yok. Metin yazdırmaya hazır olmalıdır.</p>
											</div>
										</div>
									</div>
									<div class="tab-pane fade" id="KargoveIade" role="tabpanel">
										<div class="EditorText">
											<div class="Wrapper">
												<h5>Kargo</h5>
												<p>Ebasim.com siparişlerinizi ARAS KARGO ile tüm Türkiye'ye ücretsiz gönderir.</p>
												<p>Siparişiniz kargoya verildikten sonra 3 iş günü içerisinde elinize ulaşır.Siparişinizi vermeden önce teslimat adresinizi lütfen kontrol ediniz.</p>

												<h5>Sipariş İptali</h5>
												<p>Sipariş iptal ve iade ile ilgili tüm taleplerinizi info@ebasim.com adresinden, 0 (850) 441 09 19 numaralı telefondan veya canlı destek üzerinden bildirebilirsiniz. Siparişinizin baskı süreçleri ile ilgili tüm bilgilendirmeler anlık olarak e-posta adresinize yapılır. Dokümanınız onaylandıktan ve baskıya alındıktan sonra siparişinizin üretimine başlandığına dair bilgilendirme alırsınız. Üretim aşamasına gelmeden önce müşteri hizmetleri ile iletişime geçerek siparişinizi iptal edebilirsiniz.</p>

												<h5>İade Şartları</h5>
												<p>Siparişinizin baskı kalitesinden mennun kalmamanız halinde, siparişinizi kargodan teslim almanızı takip eden 14 gün içerisinde müşteri hizmetleri ile iletişime geçerek şikayetinizi bildirebilirsiniz. Siparişiniz ile ilgili talebiniz üzerine, Satış Sonrası Destek ekibimiz en geç 1 iş günü içerisinde sizinle irtibata geçerek, ürüne ait fotoğraf ve diğer gerekli bilgileri isteyecektir. Kalite Kontrol ekibimiz tarafından yapılacak detaylı inceleme sonucunda, üretim kaynaklı bir hata bulunması durumunda, siparişiniz yeniden basılacak ve adresinize gönderilecektir. Kişiye özel baskılı ürünlerde cayma hakkı ve iade imkanı bulunmamaktadır.</p>

												<h5>İade İşlemleri</h5>
												<p>Üretim hatası kaynaklı iade işlemleriniz için, ürünü Aras Kargo ile aşağıdaki adrese 'Karşı Ödemeli' olarak göndermeniz gerekmektedir.Kodakıl Bilgisayar Organizasyon Reklam Limited Şirketi</p>
												<p>Postane Mah. Rauf Orbay Cad. Altın Sk. No:20</p>
												<p>Ürünün iade şartlarına uygun olması durumunda, kredi kartınıza veya havale ile ödeme yaptıysanız banka hesabınıza 3 iş günü içerisinde ödeme iadesi gerçekleştirilir. Ancak ödemenin hesabınıza yansıması, bankanıza bağlı olarak birkaç gün alabilir. Üründe herhangi bir üretim hatası bulunmaması halinde, ürününüz 'Karşı Ödemeli' olarak kayıtlı adresinize yeniden gönderilecektir.</p>

												<h5>Teslimat</h5>
												<p>Siparişinize ait faturanız kolinin üzerinde yer almaktadır. Siparişinizde teslimat sırasında hasar oluşmuş (yırtık, çatlak, vs.) veya eksik ürün olması durumunda kargo görevlisine tutanak tutturunuz. Tutanak tutulmaması halinde hasarlı siparişinizi teslim almadan iade ediniz. Siparişiniz ile ilgili herhangi bir sorunuz olması durumunda 0 (850) 441 09 19 numaralı telefondan bizimle irtibata geçebilirsiniz.</p>
											</div>
										</div>
									</div>
								</div>
							</div>
							<?php if ($templates != false): ?>
								<?php $countvaltemplate = 0; ?>
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
																	<?php $countvaltemplate++; ?>

																	<a class="FormatDownload <?=$linkclass?>" data-href="<?=$fval->url?>" href="javascript:void(0);" data-toggle="modal" data-target="#DesignModal<?=$countvaltemplate?>"><?=$fval->name?></a>

																	<!-- DesignModal -->
																	<div class="modal fade globalModal DesignModal" id="DesignModal<?=$countvaltemplate?>" tabindex="-1" role="dialog" aria-hidden="true">
																		<div class="modal-dialog" role="document">
																			<div class="modal-content">
																				<div class="modal-body">
																					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><i class="fa fa-times" aria-hidden="true"></i></button>
																					<div class="Wrapper">
																						<div class="Item"><img src="<?=site_url("assets/Front/images/design-popup-1.jpg")?>" alt="tasarım - kodakillabs.com"></div>
																						<div class="Item"><img src="<?=site_url("assets/Front/images/design-popup-2.jpg")?>" alt="Tasarım - kodakillabs.com"></div>
																					</div>
																					<div class="BtnBox">
																						<a href="<?=site_url("assets/Front/images/design-popup-full.jpg")?>" class="Btn Blue-d" download>Klavuzu İndir</a>
																						<a href="<?=site_url($fval->url)?>" download class="Btn Orange-d">Şablonu İndir</a>
																					</div>
																					<p class="Txt">İndirilecek Şablon : <span><?=$fval->name?></span></p>
																				</div>
																			</div>
																		</div>
																	</div>
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

				<?php if ($similars != false): ?>
					<?php //prex($similars); ?>
					<!-- SimilarProduct -->
					<section class="SimilarProduct">
						<div class="container">
							<div class="row">
								<div class="col-12">
									<div class="TitleBox">
										<div class="T"><span>Benzer Ürünler</span></div>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-12">
									<div class="carousel-wrap">
										<div class="owl-carousel owlSimilarPRoduct">
											<?php foreach ($similars as $skey => $sval): ?>
												<?php
												if ($sval->default_image == "") {
													$sval->default_image = "assets/Front/images/noimage.png";
												}
												?>
												<div class="item">
													<a href="<?=site_url($sval->product_slug)?>" class="ProductItems">
														<div class="Img"><img src="<?=site_url($sval->default_image)?>" onerror="this.onerror=null;this.src='assets/fake/300x300.png';" alt="<?=$sval->product_name?> - kodakillabs.com"></div>
														<p class="ItemName"><?=$sval->product_name?></p>
													</a>
												</div>
											<?php endforeach ?>
										</div>
									</div>
								</div>
							</div>
						</div>
					</section>
					<!-- END : SimilarProduct -->
				<?php endif ?>

			</div>

			<div id="LoginOlmakSart" data-toggle="modal" data-target="#modalLoginOl"></div>
			<!-- Üye Ol -->
			<div class="modal fade globalModal" id="modalLoginOl" tabindex="-1" role="dialog" aria-hidden="true">
				<div class="modal-dialog" role="document">
					<div class="modal-content">
						<div class="modal-body">
							<button type="button" class="close" data-dismiss="modal" aria-label="Close"><i class="fa fa-times" aria-hidden="true"></i></button>
							<div class="DesignControl">
								<div class="Title mt-0">Bu İşlemi Yapmak İçin Üye Olmanız Gerekmektedir.</div>
								<div class="row">
									<div class="col-6">
										<div class="SelectItem" onclick="window.location = '<?=site_url('giris')?>'">
											<div class="Img"><img src="<?=site_url('assets/Front/')?>images/Icons/upload-file.png" alt="Giriş Yap"></div>
											<p>Giriş Yap</p>
										</div>
									</div>
									<div class="col-6">
										<div class="SelectItem" onclick="window.location = '<?=site_url('kayit')?>'">
											<div class="Img"><img src="<?=site_url('assets/Front/')?>images/Icons/edit-tools.png" alt="Kayıt Ol"></div>
											<p>Kayıt Ol</p>
										</div>
									</div>
								</div>
							</div>


						</div>
					</div>
				</div>
			</div>
		</section>
		<div class="d-none" id="HiddenPriceSpan"></div>
<!-- Event snippet for Olası Satış conversion page
	In your html page, add the snippet and call gtag_report_conversion when someone clicks on the chosen link or button. -->
	<script>
		function gtag_report_conversion(url) {
			var callback = function () {
				if (typeof(url) != 'undefined') {
					window.location = url;
				}
			};

			gtag('event', 'conversion', {
				'send_to': 'AW-767388555/Nj1qCOWw1pMBEIvX9e0C',
				'value': price,
				'currency': 'TRY',
				'event_callback': callback
			});
			return false;
		}
	</script>

	<script>
		var glprice = 0;
		var datacur = parseFloat($('.GetPrice').attr('data-cur'));
		$('#ProductSelect').on('change',function() {
			$('#ekleBtn').removeAttr('disabled');
			var product_id 	= $('#ProductSelect').val();
			$.ajax({
				dataType:'json',
				url: "<?=site_url('Admin/Package/GetProductVariants/')?>" + product_id, success: function (data) {
					var append = '';
					$('.deletedVariants').remove();
					$.each(data, function(key, val) {
						append += 	'<div class="form-group m-form__group deletedVariants">\
						<label for="category_heading">'+val.name+'</label>\
						<select name="'+val.variant_id+'" class="form-control variants">';
						$.each(val.childs, function(key2, val2) {
							append += '<option rate="'+val2.rate+'" value="'+val2.variant_child_id+'">'+val2.name+'('+val2.rate+')</option>';
						});
						append += 	'</select>\
						</div>';
					});
					$('.ProductVariants').append(append);
					$('#UrunFiyat').val(data[0].price);
					glprice = data[0].price;
					$('.variants').change();
				}, error: function () {
					alert('Teknik Bir Hata Oluştu Sayfayı Yenileyin');
				}
			});
		});

		$(document).on('change','.variants',function() {
			FiyatCek(<?=$productid?>);
		});

		function changeZeroVariant() {
			var r = 0;
			$.each($('.variants'),function(key,val) {
				if ($(val).val() == 0) {
					r++;
					$.each($('> option',val),function(key2,val2) {
						if ($(val2).attr('value') != 0) {
							$(val).val($(val2).attr('value'));
							$(val).trigger('change');
							return false;
						}
					});
				}
			});

			return r;
		}

		$(document).ready(function() {
		//OpenLoader($('#ProductLoad'));
		$('.variants').first().trigger('change');
		variantChanges();
	});

		function variantChanges() {
			variantInterval = setInterval(function() {
				r = changeZeroVariant();
				if (r == 0) {
					clearInterval(variantInterval);
				}
			},500);
		}


		var price = 0;

		function priceKitle() {
		// #DesignControlModal
		var i = 0;
		$.each($('.variants'),function(key,value){
			var deger =$(value).val();
			if (deger == "0") {
				i++;
			}
		});
		if (i > 0) {
			swal({
				title: "Hata !",
				text: "Ürünü Sepete Eklemek için bütün seçeneklerin seçildiğinden emin olun.",
				icon: "error",
				button: "Tamam",
			});
		}else{
			price = $('#PriceSpan').text();
			gtag_report_conversion();
			$('#Tihla').trigger('click');
		}
	}
</script>
<style>
	button#quantitydowner , button#quantityupper {
		position: absolute;
		top: 50%;
		transform: translateY(-50%);
		right: 21px;
		width: 40px;
		height: 40px;
		border: 1px solid gainsboro;
		font-size: 21px;
		text-align: center;
		border-radius: 50px;
		padding-bottom: 2px;
		cursor: pointer;
		transition: all ease .3s;
	}

	button#quantitydowner {
		right: 64px;
		padding-bottom: 6px;
	}

	button#quantitydowner:hover, button#quantityupper:hover {
		background: #00bff3;
		color: white;
		border: 1px solid #00bff3;
	}
</style>
<script>


</script>