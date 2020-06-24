<?include("header.php");?>

<section class="account">
	<div class="container">
		<div class="row">
			<div class="col-md-3">
				<div class="account-panel">
					<ul>
						<li class=""><a href="account.php"><i class="fas fa-id-card"></i> Hesabım</a></li>
						<li class="active"><a href="siparisler.php"><i class="fas fa-shopping-basket"></i> Siparişlerim <span>4</span></a></li>
						<li class=""><a href="adresler.php"><i class="fas fa-map-marker-alt"></i> Adreslerim</a></li>
						<li class=""><a href="teklifler.php"><i class="far fa-file-alt"></i> Teklif & Talep</a></li>
						<li class=""><a href="index.php"><i class="fas fa-sign-out-alt"></i> Çıkış Yap</a></li>
					</ul>
				</div>
			</div>
			<div class="col-md-9">
				<div class="account-setting">
					<div class="form-area">
						<h5>Siparişlerim</h5>
						<div class="account-orders">
							
							<div id="accordion">
								<div class="accordion-item" id="headingOne">
									<div class="item">
										<div data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
											<div class="order-area">
												<div class="item">
													<h5>#1</h5>
													<p>28.01.2018 05:18</p>
												</div>
												<div class="item">
													<h5>64.90 ₺</h5>
													<p>Toplam Tutar</p>
												</div>
												<div class="item">
													<div class="order-status Cancel"><!-- Wait  --  Complete  --  Cargo-->
														İptal Edildi
													</div>
												</div>
											</div>
										</div>
										<div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
											<div class="order-area-product">
												<div class="item">
													<a href="#"><img src="images/exmenuitem.jpg"></a>
												</div>
												<div class="item">
													<h5>Ekonomik Kartvizit</h5>
												</div>
												<div class="item">
													<h6>15.12.2019</h6>
													<p>Tahmini Kargo</p>
												</div>
												<div class="item">
													<h6>TC556741288744445684123</h6>
													<p>Kargo Takip No</p>
												</div>
												<div class="item">
													<a href="#">Tasarım & Baskı Onayı</a>
												</div>
											</div>
										</div>
									</div>
								</div>

								<div class="accordion-item" id="headingTwo">
									<div class="item">
										<div data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
											<div class="order-area">
												<div class="item">
													<h5>#2</h5>
													<p>28.01.2018 05:18</p>
												</div>
												<div class="item">
													<h5>2164.90 ₺</h5>
													<p>Toplam Tutar</p>
												</div>
												<div class="item">
													<div class="order-status Complete"><!-- Wait  --  Complete  --  Cargo-->
														Tamamlandı
													</div>
												</div>
											</div>
										</div>
										<div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
											<div class="order-area-product">
												<div class="item">
													<a href="#"><img src="images/exmenuitem.jpg"></a>
												</div>
												<div class="item">
													<h5>Ekonomik Kartvizit</h5>
												</div>
												<div class="item">
													<h6>15.12.2019</h6>
													<p>Tahmini Kargo</p>
												</div>
												<div class="item">
													<h6>TC556741288744445684123</h6>
													<p>Kargo Takip No</p>
												</div>
												<div class="item">
													<a href="#">Tasarım & Baskı Onayı</a>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						
					</div>
				</div>
			</div>
		</div>
	</div>
</section>



<?include("footer.php");?>

