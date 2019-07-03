<?include("header.php");?>
<section class="sepet">
	<div class="pageTitle" style="background-image: url('images/profilebanner.jpg');">
		<h2>Ödeme</h2>
	</div>
	<div class="container">
		<div class="row">
			<div class="col-12">
				<div class="Result OK">
					<img src="images/paytmentok.png">
					<h3>Siparişiniz Başarıyla Alındı</h3>
					<p>Sipariş Numaranız : 001012</p>
					<a href="index.php">Anasayfa'ya Dön</a>
				</div>
				<div class="Result Error">
					<img src="images/paymenterror.png">
					<h3>Ödemeni Alamadık :( </h3>
					<p>Neden hata alırım ki ?</p>
					<ul>
						<li>Kart numarasını hatalı girmeniz,</li>
						<li>Kartınızın son kullanma tarihinin geçmiş olması,</li>
						<li>Kullandığınız kart bir ek kart ise ana kart sahibi tarafindan iptal edilmiş olması,</li>
						<li>Kredi kartınızın kullanılabipr limitinin yetersiz olması,</li>
						<li>Onay işlemi sırasında geçici bağlantı sorunları yaşanması,</li>
						<li>Kayıp ihbarı yaptığınız bir kartı yeniden kullanmaya çalışmanız,</li>
						<li>Kullanmaya çalıştığınız kartın bir kredi kartı değil, ATM kartı olması sayılabilir.</li>
						<li>Kredi kartı onay sorunlarınızda yardım almak için bankanızın müşteri hizmetleri ile görüşmeniz gerekmektedir.</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</section>

<?include("footer.php");?>
