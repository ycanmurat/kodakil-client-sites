<?include("header.php");?>

<section class="account">
	<div class="container">
		<div class="row">
			<div class="col-md-3">
				<div class="account-panel">
					<ul>
						<li class=""><a href="account.php"><i class="fas fa-id-card"></i> Hesabım</a></li>
						<li class=""><a href="siparisler.php"><i class="fas fa-shopping-basket"></i> Siparişlerim <span>4</span></a></li>
						<li class=""><a href="adresler.php"><i class="fas fa-map-marker-alt"></i> Adreslerim</a></li>
						<li class="active"><a href="teklifler.php"><i class="far fa-file-alt"></i> Teklif & Talep</a></li>
						<li class=""><a href="index.php"><i class="fas fa-sign-out-alt"></i> Çıkış Yap</a></li>
					</ul>
				</div>
			</div>
			<div class="col-md-9">
				<div class="teklif-area">
					<h5>Tekliflerim & Taleplerim</h5>
					<div class="teklif-item">
						<div class="alt-item">
							<h6>Kartvizit Baskı</h6>
							<p>Teklif İstenen Ürün</p>
						</div>
						<div class="alt-item">
							<h6>03.01.2019</h6>
							<p>Teklif Tarihi</p>
						</div>
						<div class="alt-item">
							<div class="order-status Wait"><!-- Wait  --  Complete  --  Cargo-->
								<h6>Teklif Beklemede</h6>
								<p>Teklif PDF olarak hazırlanmakta.</p>
							</div>
						</div>
						<div class="alt-item">
							<a href="#">PDF İndir</a>
							<a href="#">Sil</a>
						</div>
					</div>
					<div class="teklif-item">
						<div class="alt-item">
							<h6>Kartvizit Baskı</h6>
							<p>Teklif İstenen Ürün</p>
						</div>
						<div class="alt-item">
							<h6>03.01.2019</h6>
							<p>Teklif Tarihi</p>
						</div>
						<div class="alt-item">
							<div class="order-status Complete"><!-- Wait  --  Complete  --  Cargo-->
								<h6>Teklif Beklemede</h6>
								<p>Teklif PDF olarak hazırlanmakta.</p>
							</div>
						</div>
						<div class="alt-item">
							<a href="#">PDF İndir</a>
							<a href="#">Sil</a>
						</div>
					</div>
					<div class="teklif-item">
						<div class="alt-item">
							<h6>Kartvizit Baskı</h6>
							<p>Teklif İstenen Ürün</p>
						</div>
						<div class="alt-item">
							<h6>03.01.2019</h6>
							<p>Teklif Tarihi</p>
						</div>
						<div class="alt-item">
							<div class="order-status Cancel"><!-- Wait  --  Complete  --  Cargo-->
								<h6>Teklif Beklemede</h6>
								<p>Teklif PDF olarak hazırlanmakta.</p>
							</div>
						</div>
						<div class="alt-item">
							<a href="#">PDF İndir</a>
							<a href="#">Sil</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>



<?include("footer.php");?>

