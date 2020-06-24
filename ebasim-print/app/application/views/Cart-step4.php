<div class="userHead">
	<div class="container">
		<div class="row">
			<div class="col-lg-3 text-left">
				<a href="<?=site_url()?>" class="Link"><img src="<?=site_url('assets/')?>ebasimlogo.png" alt="ebasim logo"></a>
			</div>
			<div class="col-lg-9">
				<div class="CheckoutList">
					<ul class="List">
						<li class="Item Step1">
							<div class="Box">
								<div class="Icon"><img src="<?=site_url('assets/Front/')?>images/Icons/cartstep1.png" alt="ebasim.com sepet"></div>
								<p class="Text"><?=$langStatics->sepet?></p>
							</div>
						</li>
						<li class="Item Step2">
							<div class="Box">
								<div class="Icon"><img src="<?=site_url('assets/Front/')?>images/Icons/edit-tools.png" alt="ebasim.com düzenle"></div>
								<p class="Text"><?=$langStatics->tasarim?></p>
							</div>
						</li>
						<li class="Item Step3">
							<div class="Box">
								<div class="Icon"><img src="<?=site_url('assets/Front/')?>images/Icons/cartstep3.png" alt="ebasim.com sepet adımları"></div>
								<p class="Text"><?=$langStatics->Adres?></p>
							</div>
						</li>
						<li class="Item Step4">
							<div class="Box">
								<div class="Icon"><img src="<?=site_url('assets/Front/')?>images/Icons/cartstep4.png" alt="ebasim.com sepet adım"></div>
								<p class="Text"><?=$langStatics->odeme?></p>
							</div>
						</li>
						<li class="Item">
							<div class="Box">
								<div class="Icon"><img src="<?=site_url('assets/Front/')?>images/Icons/cartstep5.png" alt="ebasim.com sepet son adım"></div>
								<p class="Text"><?=$langStatics->sonuc?></p>
							</div>
						</li>
					</ul>
					<div class="Divider"></div>
				</div>
			</div>
		</div>
	</div>
</div>

<section class="Pages--Wrapper CartStepPages">
	<div class="container">
		<div class="row">
			<div class="col-lg-9">
				<div class="Cart-Wrapper Cart-Step-4">
					<div class="T"><?=$langStatics->odemeSecenekleri?></div>
					<div class="Payment_Option">
						<div id="accordion" role="tablist">
							<div class="card">
								<div class="card-header" role="tab">
									<a  class="Item" data-toggle="collapse" href="#payment_cc" aria-expanded="true" aria-controls="payment_cc">
										<?=$langStatics->krediKarti?> 
									</a>
								</div>
								<div id="payment_cc" class="collapse show" role="tabpanel" data-parent="#accordion">
									<form method="POST" action="<?=site_url('Cart/FinishStep/1')?>" id="CreditCart">
										<div class="card-body ccInfo">
											<div class="row">
												<div class="col-md-6">
													<div class="card-form">
														<div class="item">
															<label for="first-name">Kart Sahibin Adı & Soyadı</label>
															<input type="text" class="name" name="first-name"  id="first-name"  placeholder="İsim Soyisim">
														</div>
														<div class="item">
															<label for="number">Kart Numarası</label>
															<input class="number" name="number" id="number" maxlength="19" onkeyup="ccNumberChange()" placeholder="____ ____ ____ ____"/>
														</div>
														<div class="cvdate">
															<div class="item">
																<label for="cvc">CVV</label>
																<input type="text" class="cvv" name="cvc" id="cvc" maxlength="3" placeholder="000"/>
															</div>
															<div class="item">
																<label for="expiry">Son Kullanma Tarihi</label>
																<input type="text" name="expiry" id="expiry" maxlength="7" placeholder="AA/YY">
															</div>
														</div>
														<div class="guvenliode">
															<label for="guvenliodeme">3D Güvenli Ödeme Yap</label>
															<input type="checkbox" id="guvenliodeme" name="guvenliodeme">
                                                            <div class="Deneme"></div>
														</div>
													</div>
												</div>
												<div class="col-md-6 m-auto">
													<div class="card-area">
														<div class="form-row">
															<div class="credit-card is-front">
																<div class='card-wrapper'></div>
															</div>
														</div>
													</div>
												</div>
												<div class="col-12">
													<div class="installment">
														<h6>Ödeme Bilgileri</h6>
														<div class="info">Taksit seçeneklerini görebilmek için kredi kartı bilgilerini girmelisiniz.</div>
														<table>
															<thead>
																<tr>
																	<th>Taksit Sayısı</th>
																	<th>Aylık Ödeme</th>
																	<th>Toplam</th>
																</tr>
															</thead>
															<tbody class="TaksitList">
																<tr>
																	<td>
																		<input type="radio" id="hire-1" name="radioHire" checked>
																		<label for="hire-1">Peşin</label>
																	</td>
																	<td><?=number_format($product->productPriceSum+$product->totalDesignPriceSum-$product->discount_price,2,',','.')?> TL</td>
																	<td><?=number_format($product->productPriceSum+$product->totalDesignPriceSum-$product->discount_price,2,',','.')?> TL</td>
																</tr>
															</tbody>
														</table>
													</div>
												</div>
												<div class="PayFooter">
													<div class="row">	
														<div class="col-lg-7">
															<div class="FormElements mt-2 mb-0">
																<div class="checkboxGroup">
																	<input type="checkbox" id="KrediKontrat" required>
																	<label for="KrediKontrat"><span class="Contract">Ön Bilgilendirme Koşulları</span>'nı ve <span class="Contract">Mesafeli Satış Sözleşmesi</span>'ni okudum, onaylıyorum.</label>
																</div>
															</div>
														</div>
														<div class="col-lg-5">
															<button class="Btn Green-d" type="button" onclick="KartSiparisiTamamla()">Siparişi Tamamla <i class="fa fa-angle-right" aria-hidden="true"></i></button>
														</div>
													</div>
												</div>
											</div>
										</div>
									</form>
								</div>
							</div>

							<div class="card">
								<form method="POST" action="<?=site_url('Cart/FinishStep/2')?>">
									<div class="card-header" role="tab">
										<a class="Item collapsed" data-toggle="collapse" href="#payment_transfer" aria-expanded="false" aria-controls="payment_transfer">
											Havale / Eft ile ödeme
										</a>
									</div>
									<div id="payment_transfer" class="collapse" role="tabpanel" data-parent="#accordion">
										<div class="card-body">
											<div class="TransferAlert">
												<p>Havale/eft ödemesi sadece Türkiye’den verilen siparişler için geçerlidir.</p>
												<p>Havale/EFT komisyon ücretleri bankaların kendi uygulaması olup bankadan bankaya değişiklik göstermektedir.</p>
												<p>Yapıcağınız havale/EFT işlemleri mesai saatleri içinde incelenip işleme alınacaktır.</p>
												<p>Sipariş tarihinden sonra 7 iş gününde ödeme yapmazsanız iptal olacaktır.</p>
											</div>

											<div class="TransferAlert Warning">
												<p>**** Bir sonraki aşamada ve mail yolu ile <span> sipariş numaranız</span> size iletilecektir. Lütfen bu numarayı havale/eft'nizin açıklama kısmına yazınız.</p>
												<p>**** Eğer yazmayı unuttuysanız 0850 441 09 19 numaralı hattı arayınız.</p>

											</div>

											<div class="row">
												<div class="col-lg-12">
													<div class="BankBox">
														<div class="BankName">QNB Finansbank</div>
														<p><span>Hesap Adı :</span> Kodakil Bilgisayar Organizasyon Reklam Limitde Şirketi </p>
														<p><span>Iban Numarası :</span>TR64 0011 1000 0000 0080 3620 13</p>
														<br>
													</div>
												</div>	
											</div>

											<div class="PayFooter">
												<div class="row">	
													<div class="col-lg-7">
														<div class="FormElements mt-2 mb-0">
															<div class="checkboxGroup">
																<input type="checkbox" id="HavaleKontrat" required>
																<label for="HavaleKontrat"><span class="Contract">Ön Bilgilendirme Koşulları</span>'nı ve <span class="Contract">Mesafeli Satış Sözleşmesi</span>'ni okudum, onaylıyorum.</label>
															</div>
														</div>
													</div>
													<div class="col-lg-5">
														<button class="Btn Green-d" type="submit">Siparişi Tamamla <i class="fa fa-angle-right" aria-hidden="true"></i></button>
													</div>
												</div>
											</div>
										</div>
									</div>
								</form>
							</div>
						</div>
					</div>


				</div>
			</div>
			<div class="col-lg-3">
				<div class="Addition-Wrapper">
					<div class="Addition">
						<div class="Title">Sipariş Özeti :</div>
						<div class="PriceList">
							<div class="Item">
								<span class="Left">Ara Toplam</span>
								<span class="Right"><?=number_format(floatval($product->productPriceSum)/1.18, 2, ',', '.')?> <?=$this->ConsModel->GetCurrencyById($product->currency_id)->code?></span>
							</div>
							<div class="Item">
								<span class="Left">%18 Kdv</span>
								<span class="Right"><?=number_format(floatval($product->productPriceSum-$product->productPriceSum/1.18), 2, ',', '.') ?> <?=$this->ConsModel->GetCurrencyById($product->currency_id)->code?></span>
							</div>
							<div class="Item">
								<span class="Left">Kargo</span>
								<span class="Right">Bedava</span>
							</div>
							<div class="Item">
								<span class="Left">Tasarım Bedeli</span>
								<span class="Right"><?=number_format(floatval($product->totalDesignPriceSum),2,',','.')?> <?=$this->ConsModel->GetCurrencyById($product->currency_id)->code?></span>
							</div>
							<div class="Item">
								<span class="Left">İndirim</span>
								<span class="Right"><span class="discountPrice"><?=number_format(floatval($product->discount_price),2,',','.')?></span> <?=$this->ConsModel->GetCurrencyById($product->currency_id)->code?></span>
							</div>
						</div>

						<div class="Total">
							<span>Taksil Edilecek Tutar :</span>
							<p><span class="FinalPrice"><?=number_format($product->productPriceSum+$product->totalDesignPriceSum-$product->discount_price,2,',','.')?></span> <?=$this->ConsModel->GetCurrencyById($product->currency_id)->code?></p>
						</div>
					</div>
					<a href="<?=site_url()?>" class="Btn White-d"><?=$langStatics->AnasayfayaDon?></a>
				</div>
			</div>
		</div>
	</div>
</section>



<div class="userBottom">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<div class="Box">
					<a target="_blank" href="<?=site_url()?>hakkimizda" class="Link"><?=$langStatics->FooterMenu2Baskil?></a>
					<a target="_blank" href="<?=site_url()?>siparis-teslimat-ve-iade" class="Link"><?=$langStatics->iade?></a>
					<a target="_blank" href="<?=site_url()?>yardim" class="Link"><?=$langStatics->FooterMenu2Text6?></a>
				</div>
				<div class="Banks">
					<div><img src="<?=site_url('assets/Front/')?>images/Banks/bank1.png" alt="ebasim.com banka logo"></div>
					<div><img src="<?=site_url('assets/Front/')?>images/Banks/bank2.png" alt="ebasim.com banka logo"></div>
					<div><img src="<?=site_url('assets/Front/')?>images/Banks/bank3.png" alt="ebasim.com banka logo"></div>
					<div><img src="<?=site_url('assets/Front/')?>images/Banks/bank4.png" alt="ebasim.com banka logo"></div>
					<div><img src="<?=site_url('assets/Front/')?>images/Banks/bank5.png" alt="ebasim.com banka logo"></div>
					<div><img src="<?=site_url('assets/Front/')?>images/Banks/bank6.png" alt="ebasim.com banka logo"></div>
					<div><img src="<?=site_url('assets/Front/')?>images/Banks/bank7.png" alt="ebasim.com banka logo"></div>
					<div><img src="<?=site_url('assets/Front/')?>images/Banks/bank8.png" alt="ebasim.com banka logo"></div>
				</div>
				<div class="Copyright"><?=$langStatics->footerAltCopyright?></div>
			</div>
		</div>
	</div>
</div>

<script>
	function ccNumberChange(){
		var bin = $('#number').val();
		var price = <?=$product->productPriceSum+$product->totalDesignPriceSum+$product->shipping_price-$product->discount_price?>;
		var len = $('#number').val().toString().length;
		var currency = "<?=$this->ConsModel->GetCurrencyById($product->currency_id)->code?>";
		bin = bin.replace(' ','');
		bin = bin.substr(0, 6);
		if (bin.length==6) {
			$.ajax({
				type: "POST",
				dataType:"JSON",
				url: base_url+'Services/Bin/'+bin+'/'+price+'/'+currency,
				success: function(data) {
					options = '';
					$.each(data.result, function(key, val) {
                        if (data['3d'] == 1) {
                            document.getElementById("guvenliodeme").checked = true;
                            $('#guvenliodeme').attr('disabled','disabled');
                            $('.Deneme').append('<input type="hidden" value="on" name="guvenliodeme" class="gecici3D"/>');
                        }else{
                            $('#guvenliodeme').removeAttr('disabled');
                            $('.gecici3D').remove();
                        }
						if (key == 0) {
							options += '\
							<tr>\
							<td>\
							<input type="radio" name="radioHire" id="hire-'+val.installmentNumber+'" value="'+val.installmentNumber+'" checked>\
							<label for="hire-'+val.installmentNumber+'">Tek Çekim</label>\
							</td>\
							<td>'+val.installmentPrice+' TL</td>\
							<td>'+val.installmentPrice+' TL</td>\
							</tr';
						}else{
							options += '\
							<tr>\
							<td>\
							<input type="radio" name="radioHire" id="hire-'+val.installmentNumber+'" value="'+val.installmentNumber+'">\
							<label for="hire-'+val.installmentNumber+'">'+val.installmentNumber+' Taksit</label>\
							</td>\
							<td>'+val.installmentPrice+' TL</td>\
							<td>'+currencyFormatDE(val.totalPrice)+' TL</td>\
							</tr';
						}

					});
					$('.RemevodItemTaksit').remove();
					$('.TaksitList').html(options);

					$('.TaksitList > li:first').attr('selected','selected');
				}
			});
		}
	};

	function KartSiparisiTamamla() {
		var i       = 0;
		var expiry  = $('#expiry').val();
		expiry      = expiry.split('/');
		var ccMonth = parseInt(expiry[0]);
		var ccYear  = parseInt('20'+expiry[1].trim());
		var ccName  = $('#first-name').val();
		var ccNumber= $('#number').val();
		var ccCvv   = $('#cvc').val();
		var date    = new Date();
		var Month   = date.getMonth()+1;
		var year    = date.getFullYear();
		if (ccYear<year) {
			i++;
		}else if (ccYear==year && ccMonth<Month) {
			i++;
		}



		$('.KartHata').remove();
		if (i==0) {
			if (ccName.trim() == "") {
				$('.ccInfo').append('<div class="KartHata alert alert-danger">Kart Sahibi Alanı boş geçilemez.</div>');
			}else if(ccNumber.trim().length < 15){
				$('.ccInfo').append('<div class="KartHata alert alert-danger">Kart Numarası 15 Haneden Büyük Olmalıdır.</div>');
			}else if(ccCvv.trim().length < 3){
				$('.ccInfo').append('<div class="KartHata alert alert-danger">Cvv Alanı 3 Haneden Büyük Olmalıdır.</div>');
			}else if(valid_credit_card(ccNumber) == false) {
				$('.ccInfo').append('<div class="KartHata alert alert-danger">Geçersiz Kart Numarası.</div>');
			}else if($('#KrediKontrat').prop("checked")==false) {
				$('.ccInfo').append('<div class="KartHata alert alert-danger">Mesafeli Satış Sözleşmesi Kabul Edilmelidir.</div>');
			}else{
				$('#CreditCart').submit();  
			}
		}else{
			$('.ccInfo').append('<div class="KartHata alert alert-danger">Kart Kullanım Süresi Dolmuş</div>');
		}
	}

	function valid_credit_card(value) {
  // accept only digits, dashes or spaces
  if (/[^0-9-\s]+/.test(value)) return false;

    // The Luhn Algorithm. It's so pretty.
    var nCheck = 0, nDigit = 0, bEven = false;
    value = value.replace(/\D/g, "");

    for (var n = value.length - 1; n >= 0; n--) {
    	var cDigit = value.charAt(n),
    	nDigit = parseInt(cDigit, 10);

    	if (bEven) {
    		if ((nDigit *= 2) > 9) nDigit -= 9;
    	}

    	nCheck += nDigit;
    	bEven = !bEven;
    }

    return (nCheck % 10) == 0;
}
</script>
<script>
	var card = new Card({
		form: '.card-form',
		container: '.card-wrapper',

		formSelectors: {
			nameInput: 'input[name="first-name"], input[name="last-name"]'
		},
		placeholders: {
			number: '____ ____ ____ ____',
			name: 'İsim Soyisim',
			expiry: 'AA/YY',
			cvc: '000'
		}
	});
</script>
