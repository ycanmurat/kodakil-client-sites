<?include("header.php");?>

<section class="account">
	<div class="container">
		<div class="row">
			<div class="col-md-3">
				<div class="account-panel">
					<ul>
						<li class=""><a href="account.php"><i class="fas fa-id-card"></i> Hesabım</a></li>
						<li class=""><a href="siparisler.php"><i class="fas fa-shopping-basket"></i> Siparişlerim <span>4</span></a></li>
						<li class="active"><a href="adresler.php"><i class="fas fa-map-marker-alt"></i> Adreslerim</a></li>
						<li class=""><a href="teklifler.php"><i class="far fa-file-alt"></i> Teklif & Talep</a></li>
						<li class=""><a href="index.php"><i class="fas fa-sign-out-alt"></i> Çıkış Yap</a></li>
					</ul>
				</div>
			</div>
			<div class="col-md-9">
				<div class="Adress-setting">
					<div class="Adress-item">
						<h3>Varsayılan Adresim</h3>
						<div class="main-Adress">
							<div class="item">
								<h4>Başlık Başlık</h4>
								<p>Kılıçdede Mah. Ülkem Sk. No:8 A Blok Niş İş Merkezi Kat: 6 D: 51 İlkadım / SAMSUN</p>
								<p>19 Mayıs / Samsun 55050 - Turkey</p>
								<p>0555 000 00 00</p>
							</div>

							<div class="item">
								<a data-toggle="modal" data-target=".adress-edit-modal" >Düzenle</a>
								<a href="#">Sil</a>
							</div>
						</div>
					</div>

					<div class="Adress-item Others">
						<h3>Diğer Adresler</h3>
						<div class="other-items">
							<div class="item">
								<h4>Başlık Başlık</h4>
								<p>Kılıçdede Mah. Ülkem Sk. No:8 A Blok Niş İş Merkezi Kat: 6 D: 51 İlkadım / SAMSUN</p>
								<p>19 Mayıs / Samsun 55050 - Turkey</p>
								<p>0555 000 00 00</p>
							</div>

							<div class="item">
								<a href="#">Varsayılan Yap</a>
								<a data-toggle="modal" data-target=".adress-edit-modal">Düzenle</a>
								<a href="#">Sil</a>
							</div>
						</div>
						<div class="other-items">
							<div class="item">
								<h4>Başlık Başlık</h4>
								<p>Kılıçdede Mah. Ülkem Sk. No:8 A Blok Niş İş Merkezi Kat: 6 D: 51 İlkadım / SAMSUN</p>
								<p>19 Mayıs / Samsun 55050 - Turkey</p>
								<p>0555 000 00 00</p>
							</div>

							<div class="item">
								<a href="#">Varsayılan Yap</a>
								<a data-toggle="modal" data-target=".adress-edit-modal">Düzenle</a>
								<a href="#">Sil</a>
							</div>
						</div>
					</div>
					<button class="newAdressAdd">Yeni</button>
				</div>
			</div>
		</div>
	</div>
</section>










<!-- Adres Güncelleme Ekleme Modal -->
<div class="modal fade adress-edit-modal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<div class="new-edit-adress" style="display: block;">
				<form>
					<h4>Adres Ekle / Güncelle</h4>
					<div class="pretty p-icon p-smooth">
						<input id="isKurumsal" type="checkbox">
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
						<label>Ad &amp; Soyad *</label>
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
							<div class="col-6">
								<label>İlçe *</label>
								<select>
									<option>Lorem</option>
									<option>Lorem</option>
								</select>
							</div>
							<div class="col-6">
								<label>Tc Kimlik No (Opsiyonel)</label>
								<input type="text" name="">
							</div>
						</div>
					</div>
					<div class="item">
						<label>Adresiniz *</label>
						<textarea place=""></textarea>
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
		</div>
	</div>
</div>


<?include("footer.php");?>

