<?include("header.php");?>

<section class="StepsNav">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<div class="item-area">
					<div class="item "><img src="images/icons/banner1.png"><p>Sepet</p></div>
					<div class="item"><img src="images/icons/banner2.png"><p>Tasarım</p></div>
					<div class="item"><img src="images/icons/banner3.png"><p>Adres</p></div>
					<div class="item active"><img src="images/icons/banner4.png"><p>Ödeme</p></div>
					<div class="item"><img src="images/icons/banner5.png"><p>Sonuç</p></div>
				</div>
			</div>
		</div>
	</div>
</section>
<section class="basket-area">
	<div class="container">
		<div class="row">
			<div class="col-lg-9 col-md-8 order-sm-1 order-2">
				<div class="odeme-area">
					
					<div class="accordion" id="accordionExample">
						<div class="payment-dropdown credit-card-payment">

							<div  id="headingOne">
								<h2 data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
									Kredi Kartı & Banka Kartı İle Ödeme
								</h2>
							</div>

							<div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
								<div class="form-area">
									<form class="card-form">
										<div class="form-row">
											<div class="col-md-6">
												<label>Kart Sahibi Ad & Soyad</label>
												<input type="text" class="name" name="first-name"  placeholder="İsim Soyisim">
											</div>
											<div class="col-md-6">
												<label>Kart Numarası</label>
												<input class="number" name="number" maxlength="19" placeholder="0000 0000 0000 0000"/>
											</div>

											<div class="col-md-6">
												<label>CVV</label>
												<input type="text" class="cvv" name="cvc" maxlength="3" placeholder="000"/>
											</div>
											<div class="col-md-6">
												<label>Son Kullanma Tarihi</label>
												<input type="text" name="expiry" maxlength="7" placeholder="AA/YY">
											</div>
										</div>
									</form>
								</div>
								<div class="card-area">
									<div class="form-row">
										<div class="col-lg-6 d-sm-block d-none">
											<div class="credit-card is-front">
												<div class='card-wrapper'></div>
											</div>
										</div>
										<div class="col-lg-6 p-lg-2 p-4">
											<div class="pretty p-icon p-smooth">
												<input type="checkbox" />
												<div class="state p-success">
													<i class="icon fa fa-check"></i>
													<label>Gizlilik Sözleşmesini okudum onaylıyorum.</label>
												</div>
											</div>
											<div class="pretty p-icon p-smooth">
												<input type="checkbox" />
												<div class="state p-success">
													<i class="icon fa fa-check"></i>
													<label>Mesafeli Satıl Sözleşmesini okudum onaylıyorum.</label>
												</div>
											</div>
											<div class="payment-images">
												<div class="item"><img class="img-fluid" src="images/icons/payment1.png"></div>
												<div class="item"><img class="img-fluid" src="images/icons/payment2.png"></div>
												<div class="item"><img class="img-fluid" src="images/icons/payment5.png"></div>
												<div class="item"><img class="img-fluid" src="images/icons/payment3.png"></div>
												<div class="item"><img class="img-fluid" src="images/icons/payment4.png"></div>
												<div class="item"><img class="img-fluid" src="images/icons/payment6.png"></div>
											</div>
										</div>

									</div>
								</div>
							</div>
							<script>
								var card = new Card({
									form: '.card-form',
									container: '.card-wrapper',

									formSelectors: {
										nameInput: 'input[name="first-name"], input[name="last-name"]'
									},
									placeholders: {
										number: '0000 0000 0000 0000',
										name: 'İsim Soyisim',
										expiry: 'AA/YY',
										cvc: '000'
									}
								});
							</script>

						</div>
					</div>
					<div class="payment-dropdown eft-havale-payment">

						<div  id="headingTwo">
							<h2 data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
								Havale / Eft İle Ödeme
							</h2>
						</div>

						<div id="collapseTwo" class="collapse" aria-labelledby="collapseTwo" data-parent="#accordionExample">

							<div class="item">
								<p>Havale/eft ödemesi sadece Türkiye’den verilen siparişler için geçerlidir.</p>
								<p>Havale/EFT komisyon ücretleri bankaların kendi uygulaması olup bankadan bankaya değişiklik göstermektedir.</p>
								<p>Yapıcağınız havale/EFT işlemleri mesai saatleri içinde incelenip işleme alınacaktır.</p>
								<p>Sipariş tarihinden sonra 7 iş gününde ödeme yapmazsanız iptal olacaktır.</p>
							</div>
							<div class="item">
								<p>**** Bir sonraki aşamada ve mail yolu ile sipariş numaranız size iletilecektir. Lütfen bu numarayı havale/eft'nizin açıklama kısmına yazınız.</p>
								<p>**** Eğer yazmayı unuttuysanız 0362 234 2434 numaralı hattı arayınız.</p>
							</div>
							<div class="item">
								<h6>Banka Adı</h6>
								<p>Hesap Adı : <span>Lorem İpsum dolor sit amet</span></p>
								<p>Iban Numarası : <span>Lorem İpsum dolor sit amet</span></p>
								<br>
								<p>Hesap Numarası : <span>Lorem İpsum dolor sit amet</span></p>
								<p>Şube Kodu : <span>Lorem İpsum dolor sit amet</span></p>

							</div>
							<div class="item">
								<div class="pretty p-icon p-smooth">
									<input type="checkbox" />
									<div class="state p-success">
										<i class="icon fa fa-check"></i>
										<label>Ön Bilgilendirme Koşulları'nı ve Mesafeli Satış Sözleşmesi'ni okudum, onaylıyorum.</label>
									</div>
								</div>
							</div>
						</div>
					</div>

				</div>
			</div>

			<div class="col-lg-3 col-md-4 order-sm-2 order-1">
				<div class="addition">
					<h5>Sipariş Özeti</h5>
					<table>
						<tr>
							<td>Ara Toplam</td>
							<td>140.08 TL</td>
						</tr>
						<tr>
							<td>Ara Toplam</td>
							<td>140.08 TL</td>
						</tr>
						<tr>
							<td>Ara Toplam</td>
							<td>140.08 TL</td>
						</tr>
						<tr>
							<td>Ara Toplam</td>
							<td>140.08 TL</td>
						</tr>
						<tr>
							<td>Ara Toplam</td>
							<td>140.08 TL</td>
						</tr>
					</table>
					<div class="total">
						<p>Tahsil edilecek Tutar</p>
						<h3>1658.29 TL</h3>
					</div>
				</div>
				<div class="addition-button">
					<a href="sonuc-basarili.php">Ödemeyi Tamamla <i class="fas fa-chevron-right"></i></a>
					<a href="adress.php">Adreslere Dön</a>
				</div>
			</div>
		</div>
	</div>
</section>
<script>
	

	var card = new Card({
    // a selector or DOM element for the form where users will
    // be entering their information
    form: 'form', // *required*
    // a selector or DOM element for the container
    // where you want the card to appear
    container: '.card-wrapper', // *required*

    formSelectors: {
        numberInput: 'input#number', // optional — default input[name="number"]
        expiryInput: 'input#expiry', // optional — default input[name="expiry"]
        cvcInput: 'input#cvc', // optional — default input[name="cvc"]
        nameInput: 'input#name' // optional - defaults input[name="name"]
    },

    width: 200, // optional — default 350px
    formatting: true, // optional - default true

    // Strings for translation - optional
    messages: {
        validDate: 'valid\ndate', // optional - default 'valid\nthru'
        monthYear: 'mm/yyyy', // optional - default 'month/year'
    },

    // Default placeholders for rendered fields - optional
    placeholders: {
    	number: '•••• •••• •••• ••••',
    	name: 'Full Name',
    	expiry: '••/••',
    	cvc: '•••'
    },

    masks: {
        cardNumber: '•' // optional - mask card number
    },

    // if true, will log helpful messages for setting up Card
    debug: false // optional - default false
});

</script>

<?include("footer.php");?>

