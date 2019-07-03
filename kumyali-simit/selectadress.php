<?include("header.php");?>
<section class="productList adress">
	<div class="pageTitle" style="background-image: url('images/banner2.jpg');">
		<h2>Sipariş Adresi</h2>
	</div>
	<div class="container">
		<div class="row">
			<div class="col-md-7">
				<h5 class="mb-3">Adres Bilgileri</h5>
				<form class="form-row">
					<div class="col-sm-6"><input type="" name="" placeholder="İsim"></div>
					<div class="col-sm-6"><input type="" name="" placeholder="Soyisim"></div>
					<div class="col-sm-6"><input type="" name="" placeholder="Cep Telefonu"></div>
					<div class="col-sm-6"><input type="" name="" placeholder="E-Posta Adresi"></div>
					<div class="col-sm-4">
						<select>
							<option>İl</option>
							<option>Samsun</option>
							<option>Ankara</option>
							<option>İstanbul</option>
						</select>
					</div>
					<div class="col-sm-4">
						<select>
							<option>İlçe</option>
							<option>Samsun</option>
							<option>Ankara</option>
							<option>İstanbul</option>
						</select>
					</div>
					<div class="col-sm-4"><input type="" name="" placeholder="Posta Kodu"></div>
					<div class="col-12">
						<textarea placeholder="Adres"></textarea>
					</div>
				</form>
			</div>
			<div class="col-md-5">
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
					<a href="paymentresult.php">Devam Et</a>
				</div>
			</div>
		</div>
	</section>



	<?include("footer.php");?>