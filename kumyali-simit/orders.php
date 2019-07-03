<?include("header.php");?>
<section class="login profile">
	<div class="pageTitle" style="background-image: url('images/profilebanner.jpg');">
		<h2>Siparişlerim</h2>
	</div>
	<div class="container">
		<div class="row">
			<div class="col-md-3">
				<div class="profile-nav">
					<ul>
						<li><a href="profile.php">Profil Ayarları</a></li>
						<li><a class="active" href="orders.php">Siparişlerim</a></li>

						<li><a class="" href="index.php">Çıkış Yap</a></li>
					</ul>
				</div>
			</div>
			<div class="col-md-9">
				<div class="orders-area">
					<h6>Toplam <b>3</b> Sipariş listelendi.</h6>
					<div class="item">
						<div class="wrapper">
							<p>Sipariş Tarihi</p>
							<p>18 04 2019</p>
						</div>
						<div class="wrapper">
							<p>Sipariş Kodu</p>
							<p>12313</p>
						</div>
						<div class="wrapper">
							<p>Tutar</p>
							<p>₺2200.00</p>
						</div>
						<div class="wrapper">
							<p>Sipariş Durumu</p>
							<p>İptal Edildi</p>
						</div>
						<div class="wrapper">
							<div class="detay" data-toggle="modal" data-target="#ordersDetail">İncele</div>
						</div>
					</div>
					<div class="item">
						<div class="wrapper">
							<p>Sipariş Tarihi</p>
							<p>18 04 2019</p>
						</div>
						<div class="wrapper">
							<p>Sipariş Kodu</p>
							<p>12313</p>
						</div>
						<div class="wrapper">
							<p>Tutar</p>
							<p>₺2200.00</p>
						</div>
						<div class="wrapper">
							<p>Sipariş Durumu</p>
							<p>İptal Edildi</p>
						</div>
						<div class="wrapper">
							<div class="detay" data-toggle="modal" data-target="#ordersDetail">İncele</div>
						</div>
					</div>
					<div class="item">
						<div class="wrapper">
							<p>Sipariş Tarihi</p>
							<p>18 04 2019</p>
						</div>
						<div class="wrapper">
							<p>Sipariş Kodu</p>
							<p>12313</p>
						</div>
						<div class="wrapper">
							<p>Tutar</p>
							<p>₺2200.00</p>
						</div>
						<div class="wrapper">
							<p>Sipariş Durumu</p>
							<p>İptal Edildi</p>
						</div>
						<div class="wrapper">
							<div class="detay" data-toggle="modal" data-target="#ordersDetail">İncele</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>


<!-- Detail Modal -->
<div class="modal fade orderDetail" id="ordersDetail" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Sipariş Özeti</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<h6>Sipariş Detayı</h6>
				<div class="wrapper">
					<p>Sipariş Verilen Tarih</p>
					<p>18.04.2019 - 13:24:51</p>
				</div>
				<div class="wrapper">
					<p>Sipariş No</p>
					<p>18342</p>
				</div>
				<div class="wrapper">
					<p>Ödeme Şekli</p>
					<p>Kredi Kartı</p>
				</div>
				<div class="wrapper">
					<p>Alıcı</p>
					<p>Murat Can</p>
				</div>
				<div class="wrapper">
					<p>Adres</p>
					<p>İstasyon mah. Anafartalar cad. 55/5</p>
				</div>
				<div class="wrapper">
					<p>Toplam Tutar</p>
					<p>₺231452.00</p>
				</div>
				<div class="wrapper">
					<p>Sipariş Durumu</p>
					<p>Sipariş Tamamlandı</p>
				</div>
				<div class="ordersProduct">
					<h6>Ürünler</h6>
					<div class="products">
						<div class="area">
							<img src="images/sales3.jpg">
						</div>
						<div class="area">
							<p>Çikolatalı Kruvasan</p>
							<p>7 Adet</p>
							<p>₺120.00</p>
						</div>
					</div>

					<div class="products">
						<div class="area">
							<img src="images/sales3.jpg">
						</div>
						<div class="area">
							<p>Çikolatalı Kruvasan</p>
							<p>7 Adet</p>
							<p>₺120.00</p>
						</div>
					</div>

					
				</div>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Kapat</button>
			</div>
		</div>
	</div>
</div>
<?include("footer.php");?>
