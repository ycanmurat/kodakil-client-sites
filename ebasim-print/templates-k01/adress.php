<?include("header.php");?>
<section class="StepsNav">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<div class="item-area">
					<div class="item "><img src="images/icons/banner1.png"><p>Sepet</p></div>
					<div class="item"><img src="images/icons/banner2.png"><p>Tasarım</p></div>
					<div class="item active"><img src="images/icons/banner3.png"><p>Adres</p></div>
					<div class="item"><img src="images/icons/banner4.png"><p>Ödeme</p></div>
					<div class="item"><img src="images/icons/banner5.png"><p>Sonuç</p></div>
				</div>
			</div>
		</div>
	</div>
</section>
<section class="basket-area">
	<div class="container">
		<div class="row">
			<div class="col-lg-9 col-md-8 ">
				<div class="new-edit-adress">
					<form>
						<h4>Adres Ekle / Güncelle</h4>
						<div class="pretty p-icon p-smooth">
							<input id="isKurumsal" type="checkbox" />
							<div class="state p-success">
								<i class="icon fa fa-check"></i>
								<label>Kurumsa üye</label>
							</div>
						</div>
						<div class="item">
							<label>Başlık *</label>
							<input type="text" name="">
						</div>
						<div class="item">
							<label>Ad & Soyad *</label>
							<input type="text" name="">
						</div>
						<div class="item">
							<div class="form-row">
								<div class="col-6">
									<label>Cep Telefonu *</label>
									<input type="text" name="">
								</div>
								<div class="col-6">
									<label>Posta Kodu *</label>
									<input type="text" name="">
								</div>
							</div>
						</div>
						<div class="item">
							<div class="form-row">
								<div class="col-6">
									<label>Ülke *</label>
									<select>
										<option>Lorem</option>
										<option>Lorem</option>
									</select>
								</div>
								<div class="col-6">
									<label>İl *</label>
									<select>
										<option>Lorem</option>
										<option>Lorem</option>
									</select>
								</div>
							</div>
						</div>
						<div class="item">
							<div class="form-row">
								<div class="col-sm-6">
									<label>İlçe *</label>
									<select>
										<option>Lorem</option>
										<option>Lorem</option>
									</select>
								</div>
								<div class="col-sm-6">
									<label>Tc Kimlik No (Opsiyonel)</label>
									<input type="text" name="">
								</div>
							</div>
						</div>
						<div class="item">
							<label>Adresiniz *</label>
							<textarea place></textarea>
						</div>
						<div class="corporate">
							<div class="item">
								<label>Firma Adı *</label>
								<input type="text" name="">
							</div>
							<div class="item">
								<label>Vergi Numarası *</label>
								<input type="text" name="">
							</div>
							<div class="item">
								<label>Vergi Dairesi *</label>
								<input type="text" name="">
							</div>
						</div>
						<div class="item">
							<button id="closeThis">Vazgeç</button>
							<button>Gönder</button>
						</div>
					</form>
				</div>
				<div class="adress-select">
					<h5>Gönderi Adresi</h5>
					<h6>Kayıtlı Adresler *<span id="newAdressAdd">Yeni Adres Ekle</span></h6>
					<input class="adress-select-input" type="radio" id="select-adress" name="select-adress" checked="">
					<label class="item-label" for="select-adress">
						<div class="item">
							<span>Başlık ,</span>
							<span>Ad Soyad</span>
							<p>Lorem İpsum dolor sit amet - Aladağ / ADANA 555055 - TÜRKİYE</p>
							<p>555555555</p>
							<div id="newAdressEdit">Düzenle</div><!-- Yeni adres Kısmını içi dolu gelecek-->
						</div>
					</label>
					<input class="adress-select-input" type="radio" id="select-adress-2" name="select-adress">
					<label class="item-label" for="select-adress-2">
						<div class="item">
							<span>Başlık ,</span>
							<span>Ad Soyad</span>
							<p>Lorem İpsum dolor sit amet - Aladağ / ADANA 555055 - TÜRKİYE</p>
							<p>555555555</p>
							<div id="newAdressEdit">Düzenle</div>
						</div>
					</label>
					<input class="adress-select-input" type="radio" id="select-adress-3" name="select-adress">
					<label class="item-label" for="select-adress-3">
						<div class="item">
							<span>Secmahat Ev ,</span>
							<span>Selahat Cenabettin</span>
							<p>Lorem İpsum dolor sit amet - Aladağ / ADANA 555055 - TÜRKİYE</p>
							<p>555555555</p>
							<div id="newAdressEdit">Düzenle</div>
						</div>
					</label>

					<div class="fatura-adress">
						<div class="pretty p-icon p-smooth">
							<input id="Same-Fatura" type="checkbox" checked="" />
							<div class="state p-success">
								<i class="icon fa fa-check"></i>
								<label>Fatura adresim aynı</label>
							</div>
						</div>
					</div>
				</div>

				<div class="adress-select fatura-adres-select">
					<h5>Fatura Adresi</h5>
					<h6>Kayıtlı Adresler</h6>
					<input class="adress-select-input" type="radio" id="select-fatura" name="select-fatura" checked="">
					<label class="item-label" for="select-fatura">
						<div class="item">
							<span>Başlık ,</span>
							<span>Ad Soyad</span>
							<p>Lorem İpsum dolor sit amet - Aladağ / ADANA 555055 - TÜRKİYE</p>
							<p>555555555</p>
							<div id="newAdressEdit">Düzenle</div>
						</div>
					</label>
					<input class="adress-select-input" type="radio" id="select-fatura-2" name="select-fatura">
					<label class="item-label" for="select-fatura-2">
						<div class="item">
							<span>Başlık ,</span>
							<span>Ad Soyad</span>
							<p>Lorem İpsum dolor sit amet - Aladağ / ADANA 555055 - TÜRKİYE</p>
							<p>555555555</p>
							<div id="newAdressEdit">Düzenle</div>
						</div>
					</label>
					<input class="adress-select-input" type="radio" id="select-fatura-3" name="select-fatura">
					<label class="item-label" for="select-fatura-3">
						<div class="item">
							<span>Secmahat Ev ,</span>
							<span>Selahat Cenabettin</span>
							<p>Lorem İpsum dolor sit amet - Aladağ / ADANA 555055 - TÜRKİYE</p>
							<p>555555555</p>
							<div id="newAdressEdit">Düzenle</div>
						</div>
					</label>
				</div>
			</div>
			<div class="col-lg-3 col-md-4 ">
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
					<a href="odeme.php">Sonraki Adım <i class="fas fa-chevron-right"></i></a>
					<a href="tasarim.php">Tasarıma Dön</a>
				</div>
			</div>
		</div>
	</div>
</section>
<?include("footer.php");?>

