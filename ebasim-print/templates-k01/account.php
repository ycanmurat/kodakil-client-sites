<?include("header.php");?>

<section class="account">
	<div class="container">
		<div class="row">
			<div class="col-md-3">
				<div class="account-panel">
					<ul>
						<li class="active"><a href="account.php"><i class="fas fa-id-card"></i> Hesabım</a></li>
						<li class=""><a href="siparisler.php"><i class="fas fa-shopping-basket"></i> Siparişlerim <span>4</span></a></li>
						<li class=""><a href="adresler.php"><i class="fas fa-map-marker-alt"></i> Adreslerim</a></li>
						<li class=""><a href="teklifler.php"><i class="far fa-file-alt"></i> Teklif & Talep</a></li>
						<li class=""><a href="index.php"><i class="fas fa-sign-out-alt"></i> Çıkış Yap</a></li>
					</ul>
				</div>
			</div>
			<div class="col-md-9">
				<div class="account-setting">
					<div class="form-area">
						<h5>Hesap Ayarları</h5>
						<form>
							<div class="form-row">
								<div class="col-md-8">
									<label>Ad Soyad</label>
									<input type="text" name="">
								</div>
								<div class="col-md-4">
									<label>Ad Soyad</label>
									<input type="text" name="">
								</div>
								<div class="col-md-4">
									<label>E Posta Adresi</label>
									<input type="text" name="">
								</div>
								<div class="col-md-4">
									<label>Ülke</label>
									<select>
										<option>Turkiye</option>
									</select>
								</div>
								<div class="col-md-4">
									<label>Meslek</label>
									<select>
										<option>Yazılım / Tasarım</option>
										<option>Grafik / Pazarlama</option>
									</select>
								</div>
								<div class="col-12">
									<button>Güncelle</button>
								</div>
							</div>
						</form>
					</div>
					<div class="form-area">
						<h5>Şifre İşlemleri</h5>
						<form>
							<div class="form-row">
								<div class="col-md-4">
									<label>Mevcut Şifre</label>
									<input type="password" name="">
								</div>
								<div class="col-md-4">
									<label>Yeni Şifre</label>
									<input type="password" name="">
								</div>
								<div class="col-md-4">
									<label>Yeni Şifre Tekrar</label>
									<input type="password" name="">
								</div>
								<div class="col-12">
									<button>Değiştir</button>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>



<?include("footer.php");?>

