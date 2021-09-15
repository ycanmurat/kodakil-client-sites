<?include("header.php");?>
<section class="page-banner" style="background-image:url('images/detailbg.jpg'); ">
	<div class="container">
		<div class="row">
			<div class="col-md-12">

				<ul>
					<li>CARBON STEEL</li>
					<li>??? / ??? / ???</li>
				</ul>

			</div>
		</div>
	</div>
</section>



<section class="pro-detail">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<a onclick="window.print();" class="pdf" href="#"><i class="fas fa-print"></i> İndir / Yazdır</a>
				<div class="detail-area">
					<div class="description">
						<span>Açıklama</span>
						<p>DETAY ALMAK İÇİN BİZE ULAŞINIZ..</p>
						<span>Ekstra Özellikler</span>
						<p>Veri Bulunamadı..</p>
						<span>Uygulama</span>
						<p>Veri Bulunamadı..</p>
						<span>Uygun kaynak dolgu malzemeleri</span>
						<p>Veri Bulunamadı..</p>
					</div>

					<div class="item">
						<h4>Standartlar</h4>
						<div class="wrapper">
							<span>Materyal No :<b>???</b></span>
							<span>EN Tahsis :<b>???</b></span>
							<span>AISI/SAE :<b>???</b></span>
							<span>UNS :<b>???</b></span>
						</div>
					</div>

					<div class="item">
						<h4>Kimyasal Bileşenler</h4>
						<div class="wrapper">

							<span>
								C<br>%<b>???</b>
							</span>
							<span>
								Si<br>≤ %<b>???</b>
							</span>

							<span>
								Mn<br>≤ %<b>???</b>
							</span>

							<span>
								P<br>≤ %<b>???</b>
							</span>

							<span>
								S<br>≤ %<b>???</b>
							</span>

							<span>
								Cr<br>%<b>???</b>
							</span>

							<span>
								Ni<br>%<b>???</b>
							</span>

							<span>
								N<br>%<b>???</b>
							</span>

						</div>
					</div>

					<div class="item">
						<h4>Mekanik Özellikler 20°C</h4>
						<div class="wrapper">
							<span>Sertlik HB 30<br> ≤ HB<b>???</b></span>
							<span>0.2% Akım Direnci R<sub>p</sub><br>≥ N/mm²<b>???</b></span>
							<span>Gerilim Direnci <br> R<sub>m</sub>N/mm²<b>???</b></span>
							<span>Uzama A<sub>5</sub><br>≥ %<b>???</b></span>
							<span>Esneklik Modülü <br>kN/mm²<b>???</b></span>
						</div>
					</div>

					<div class="item">
						<h4>Fiziksel Özellikler 20°C</h4>
						<div class="wrapper">
							<span>Yoğunluk <br>g/cm³<b>???</b></span>
							<span>Özgül Isı Kapasitesi <br>J/kg K<b>???</b></span>
							<span>Termal İletkenlik <br>W/m K<b>???</b></span>
							<span>Elektriksel Direnç <br>Ω mm²/m<b>???</b></span>

						</div>
					</div>
					<div class="item">
						<a href="#">
							<span>Sheets/Plates</span>
							<img src="http://www.metalcor.de/lf/lf_bleche.jpg">
						</a>
						<a href="#">
							<span>Bars</span>
							<img src="http://www.metalcor.de/lf/lf_stangen.jpg">
						</a>
						<a href="#">
							<span>Wire</span>
							<img src="http://www.metalcor.de/lf/lf_draht.jpg">
						</a>
						<a href="#">
							<span>Tubes / Pipes</span>
							<img src="http://www.metalcor.de/lf/lf_rohr.jpg">
						</a>
						<a href="#">
							<span>Fittings</span>
							<img src="http://www.metalcor.de/lf/lf_fitting.jpg">
						</a>
						<a href="#">
							<span>Forged / cast parts</span>
							<img src="http://www.metalcor.de/lf/lf_schmiede.jpg">
						</a>
						<a href="#">
							<span>Finished part (drawing)</span>
							<img src="http://www.metalcor.de/lf/lf_fertig.jpg">
						</a>
					</div>

				</div>
			</div>
		</div>
	</div>
</section>


<style>
	@page {
		size: A2 landscape;
	}
	@media print {
		header{display:none;}
		footer{display:none;}
		section.pro-detail div.detail-area div.item:last-child a{display:none;}
		section.pro-detail div.detail-area div.item div.wrapper span{color:black;text-shadow:none;font-weight:300;}
		section.pro-detail a.pdf{display:none;}
		section.home{margin:0;position:unset;}
		span.b-triangle {display: none;}
		section.pro-detail div.detail-area div.description > p:after{display:none}
		section.pro-detail div.detail-area div.description > p:before{display:none;}
		section.pro-detail div.detail-area div.description > p{position:unset;}
	}

</style>
<?include("footer.php");?>

