<?include("header.php");?>
<section class="productList adress">
	<div class="pageTitle" style="background-image: url('images/banner2.jpg');">
		<h2>Sipariş Adresi</h2>
	</div>
	<div class="container">
		<div class="row">
			<div class="col-lg-7">
				<h5 class="mb-3">Kredi Kartı Bilgileri</h5>
				<form class="form-row">

					<div class="col-xl-5">
						<div class="form-container active">
							<label>Kart Sahibi</label>
							<input placeholder="Ad Soyad" type="text" name="name">
							<label>Kart Numarası</label>
							<input placeholder="Kart Numarası" type="tel" name="number">
							<label>Tarih</label>
							<input placeholder="AA/YY" type="tel" name="expiry">
							<label>CVC</label>
							<input placeholder="CVC" type="number" name="cvc">
						</div>

					</div>
					<div class="col-xl-7 m-auto d-sm-block d-none">
						
						<div class="card-wrapper"></div>

						<script src="js/card.js"></script>
						<script>
							new Card({
								form: document.querySelector('form'),
								container: '.card-wrapper'
							});
						</script>
					</div>
				</form>
			</div>
			<div class="col-lg-5">
				<h5 class="mb-3">Sipariş Özeti</h5>
				<div class="addition">
					<table>
						<tr class="item">
							<td><img src="images/sales2.jpg"></td>
							<td>Çikolatalı Kruvasan</td>
							<td>₺100.00</td>
						</tr>
						<tr class="item">
							<td><img src="images/sales1.jpg"></td>
							<td>Çikolatalı Kruvasan</td>
							<td>₺100.00</td>
						</tr>
						<tr class="item">
							<td><img src="images/sales4.jpg"></td>
							<td>Çikolatalı Kruvasan</td>
							<td>₺100.00</td>
						</tr>

						<tr>
							<td colspan="2">KDV</td>
							<td>₺18.00</td>
						</tr>
						<tr>
							<td colspan="2">Toplam</td>
							<td>₺118.00</td>
						</tr>
					</table>
					<div class="cart-contract">
						<div class="pretty p-default p-curve p-thick p-smooth">
							<input type="checkbox" />
							<div class="state p-danger-o">
								<label><a href="javascript:void(0);" data-toggle="modal" data-target="#contract-1">Ön Bilgilendirme Koşulları</a>'nı ve <a href="javascript:void(0);" data-toggle="modal" data-target="#contract-2">Mesafeli Satış Sözleşmesi</a>'ni Okudum. Onaylıyorum.</label>
							</div>
						</div>
					</div>

					<a href="paymentresult.php">Siparişi Tamamla</a>
				</div>
			</div>
		</div>
	</section>



	<?include("footer.php");?>