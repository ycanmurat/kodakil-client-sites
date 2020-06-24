<!--
█ █ █▀▀█ █▀▀▄ █▀▀█ █ █ █ █
█▀▄ █  █ █  █ █▄▄█ █▀▄ █ █
▀ ▀ ▀▀▀▀ ▀▀▀  ▀  ▀ ▀ ▀ ▀ ▀▀▀
-->
<!DOCTYPE html>
<html>
<head>
	<meta charset='UTF-8'>
	<meta name="viewport" content="width=device-width, initial-scale=1"><!-- Tüm cihazlara uyumlu -->
	<!-- Jquery -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
	<!-- owl-carousel -->
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.css">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.css">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
	<!-- Bootstrap -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.bundle.min.js"></script>

	<!-- Animate Css -->
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css">
	<!-- Fancy Box -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css" />
	<script src="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js"></script>

	<!--                          Fonts                         -->
	<link href="https://fonts.googleapis.com/css?family=Oswald:200,300,400,500,700" rel="stylesheet">
	<!-- Pretty CheckBox -->
	<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/pretty-checkbox@3.0/dist/pretty-checkbox.min.css">
	<!-- KODAKIL -->
	<link rel="stylesheet" href="https://kodakil.com/assets/Front/images/kodakil_footer/kodakil_logo.css">
	<!--                    CSS                          -->
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.10.0/css/lightbox.min.css">
	<link rel="stylesheet" type="text/css" href="css/reset.css">
	
	<link rel="stylesheet" type="text/css" href="css/style.css">

	<script src="js/card.js"></script>
	

	<!--                  Font Awesome                    -->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
	<link rel="shortcut icon"  href="images/favicon.png"/>
	<title>BASKI K01</title>
</head>
<body>


	<style>
		/* var(--bg-color) */
		:root { 
			--main-color: black;
			--bg-color: black;
			--bg-color-invert: black;
			--border-color: black; 
		}

	</style>
	<div class="select-color">
		<div>
			<div>
			<label for="favcolor">Yazı rengi</label>
			<input type="color" name="favcolor" value="#ff0000" id="color-sheme">
		</div>
		<div>
			<label for="rorcolor">Arkaplan rengi</label>
			<input type="color" name="rorcolor" value="#ff2200" id="bg-sheme">
		</div>
		<div>
			<label for="fozcolor">Çerçeve rengi</label>
			<input type="color" name="fozcolor" value="#ff1200" id="border-sheme">
		</div>
		</div>
		<style>
			.select-color {
				position: fixed;
				top: 30%;
				z-index: 99999;
				background-color: white;
				padding: 20px;
				border: 1px solid black;
			}
		</style>
	</div>
	<script>
		var colorInput = document.querySelector("#color-sheme");
		var bgInput = document.querySelector("#bg-sheme");
		var borderInput = document.querySelector("#border-sheme");

		colorInput.addEventListener("change", function() {
			document.documentElement.style.setProperty("--main-color", this.value);
		});

		bgInput.addEventListener("change", function() {
			document.documentElement.style.setProperty("--bg-color", this.value);
		});

		borderInput.addEventListener("change", function() {
			document.documentElement.style.setProperty("--border-color", this.value);
		});
	</script>

	<section class="topHeader main-bgcolor">
		<div class="container">
			<div class="row">
				<div class="col-md col-8 text-left ">
					<div class="item">	
						<a href="tel:5425508655">(+90) 542 550 86 55</a>
						<a href="yardim.php"> SSS (?)</a>
					</div>
				</div>
				<div class="col-md col-6 text-center d-md-block d-none">
					<div class="item">
						<p><i>- Örnek slogan yazısı burada yer alacak -</i></p>
					</div>
				</div>
				<div class="col-md col-4 text-right">
					<div class="item">
						<a class="d-sm-inline-block d-none" href="kampanyalar.php">Kampanyalar</a>
						<a href="teklifver.php">Teklif İste</a>
					</div>
				</div>
			</div>
		</div>
	</section>
	<header>
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="Logo">
						<a href="index.php">
							<img src="images/logo.png" class="img-fluid">
						</a>
					</div>
					<div class="Nav">
						<div class="Menu">
							<div class="hamburger" id="hamburger-11">
								<span class="line"></span>
								<span class="line"></span>
								<span class="line"></span>
							</div>
							<div class="UserNav">
								<div class="Search">
									<form>
										<input id="mainSearch" type="text" name="" placeholder="Ürün Ara..">
										<button><i class="fas fa-search"></i></button>
									</form>
									<div class="filterSearchHeader">
										<a href="productDetail.php" class="alt-link">
											<img src="https://fakeimg.pl/100/" alt="ProductName" title="Productnametitle">
											<span>Lorem test</span>
										</a>
										<a href="productDetail.php" class="alt-link">
											<img src="https://fakeimg.pl/100/" alt="ProductName" title="Productnametitle">
											<span>Lorem aga </span>
										</a>
										<a href="productDetail.php" class="alt-link">
											<img src="https://fakeimg.pl/100/" alt="ProductName" title="Productnametitle">
											<span>Lorem efe</span>
										</a>
										<a href="productDetail.php" class="alt-link">
											<img src="https://fakeimg.pl/100/" alt="ProductName" title="Productnametitle">
											<span>Lorem ada </span>
										</a>
										<a href="productDetail.php" class="alt-link">
											<img src="https://fakeimg.pl/100/" alt="ProductName" title="Productnametitle">
											<span>Lorem etye</span>
										</a>
										<a href="productDetail.php" class="alt-link">
											<img src="https://fakeimg.pl/100/" alt="ProductName" title="Productnametitle">
											<span>Lorem çğğ</span>
										</a>
										<a href="productDetail.php" class="alt-link">
											<img src="https://fakeimg.pl/100/" alt="ProductName" title="Productnametitle">
											<span>Lorem ahçi</span>
										</a>
										<a href="productDetail.php" class="alt-link">
											<img src="https://fakeimg.pl/100/" alt="ProductName" title="Productnametitle">
											<span>Lorem çarşambalı</span>
										</a>
										<a href="productDetail.php" class="alt-link">
											<img src="https://fakeimg.pl/100/" alt="ProductName" title="Productnametitle">
											<span>Lorem das das</span>
										</a>
										<a href="productDetail.php" class="alt-link">
											<img src="https://fakeimg.pl/100/" alt="ProductName" title="Productnametitle">
											<span>Lorem grogro</span>
										</a>
										<a href="productDetail.php" class="alt-link">
											<img src="https://fakeimg.pl/100/" alt="ProductName" title="Productnametitle">
											<span>kartivzit</span>
										</a>
										<a href="productDetail.php" class="alt-link">
											<img src="https://fakeimg.pl/100/" alt="ProductName" title="Productnametitle">
											<span>Lorem test2</span>
										</a>
										<a href="productDetail.php" class="alt-link">
											<img src="https://fakeimg.pl/100/" alt="ProductName" title="Productnametitle">
											<span>Lorem 15432</span>
										</a>
									</div>
									<span id="closeSearch"></span>
								</div>
								<div class="item Login d-none">
									<a data-toggle="modal" data-target="#loginSignupArea">Giriş Yap</a>
									<a data-toggle="modal" data-target="#signupModal">Kayıt OL</a>
								</div>

								<div class="item User">
									<a href="account.php" class="ProfileArea"><i class="fas fa-user"></i> Murat Can</a>
									<div class="userPanel">
										<ul>
											<li><a href="#"><i class="fas fa-id-card"></i> Hesabım</a></li>
											<li><a href="#"><i class="fas fa-shopping-basket"></i> Siparişlerim <span>4</span></a></li>
											<li><a href="#"><i class="fas fa-map-marker-alt"></i> Adreslerim</a></li>
											<li><a href="#"><i class="far fa-file-alt"></i> Teklif & Talep</a></li>
											<li><a href="#"><i class="fas fa-sign-out-alt"></i> Çıkış Yap</a></li>
										</ul>
									</div>
								</div>

								<div class="item shoppingCard">
									<a href="sepet.php"><img class="img-fluid" src="images/shopping.png"></a>

									<div class="shopping-card-area">
										<div class="shopping-card-items">
											<div class="basketProduct">
												<div class="area image-area">
													<img class="img-fluid" src="https://fakeimg.pl/100/">
												</div>
												<div class="area info-area">
													<div class="content">
														<div class="T">
															<span>Tasarım Hizmeti :<b>Var</b></span>
														</div>
														<div class="T"><span>Yaka Kartı İpi :<b>50 Adet</b></span></div>
														<div class="T"><span>Baskı Yönü :<b>Tek Yön</b></span></div>
														<div class="T"><span>Ürün Rengi :<b>Beyaz</b></span></div>
														<div class="T"><span>Ebat :<b>90x1.5 cm</b></span></div>
													</div>
													<div class="area price">
														999.9₺
														<button><i class="far fa-trash-alt"></i></button>
													</div>
												</div>
											</div>
											<div class="basketProduct">
												<div class="area image-area">
													<img class="img-fluid" src="https://fakeimg.pl/100/">
												</div>
												<div class="area info-area">
													<div class="content">
														<div class="T">
															<span>Tasarım Hizmeti :<b>Var</b></span>
														</div>
														<div class="T"><span>Yaka Kartı İpi :<b>50 Adet</b></span></div>
														<div class="T"><span>Baskı Yönü :<b>Tek Yön</b></span></div>
														<div class="T"><span>Ürün Rengi :<b>Beyaz</b></span></div>
														<div class="T"><span>Ebat :<b>90x1.5 cm</b></span></div>
													</div>
													<div class="area price">
														999.9₺
														<button><i class="far fa-trash-alt"></i></button>
													</div>
												</div>
											</div>
											<div class="basketProduct">
												<div class="area image-area">
													<img class="img-fluid" src="https://fakeimg.pl/100/">
												</div>
												<div class="area info-area">
													<div class="content">
														<div class="T">
															<span>Tasarım Hizmeti :<b>Var</b></span>
														</div>
														<div class="T"><span>Yaka Kartı İpi :<b>50 Adet</b></span></div>
														<div class="T"><span>Baskı Yönü :<b>Tek Yön</b></span></div>
														<div class="T"><span>Ürün Rengi :<b>Beyaz</b></span></div>
														<div class="T"><span>Ebat :<b>90x1.5 cm</b></span></div>
													</div>
													<div class="area price">
														999.9₺
														<button><i class="far fa-trash-alt"></i></button>
													</div>
												</div>
											</div>
										</div>

										<div class="TotalPrice">
											<div class="item">Toplam(KDV Dahil)</div>
											<div class="P">999.9 ₺ </div>
											<a href="#">Sipariş Ver</a>
										</div>
									</div>
								</div>
							</div>
							<ul class="MenuList">
								<span class="mobileCloser d-md-none d-block"><i class="fas fa-times"></i></span>
								<div class="m-userNav ">

								</div>
								<li class="dropdownLink"><a href="productList.php">Kartvizit Baskı</a>
									<div class="dropdown">
										<a href="productDetail.php" class="alt-link">
											<img src="https://fakeimg.pl/100/" alt="ProductName" title="Productnametitle">
											<span>Pompalı Tüfen Örneği Aslında</span>
										</a>
										<a href="productDetail.php" class="alt-link">
											<img src="images/itemex.jpg" alt="ProductName" title="Productnametitle">
											<span>Standart Kartvizit </span>
										</a>
										<a href="productDetail.php" class="alt-link">
											<img src="https://fakeimg.pl/100/" alt="ProductName" title="Productnametitle">
											<span>Standart Kartvizit </span>
										</a>
										<a href="productDetail.php" class="alt-link">
											<img src="https://fakeimg.pl/100/" alt="ProductName" title="Productnametitle">
											<span>Standart Kartvizit </span>
										</a>
										<a href="productDetail.php" class="alt-link">
											<img src="https://fakeimg.pl/100/" alt="ProductName" title="Productnametitle">
											<span>Standart Kartvizit </span>
										</a>
										<a href="productDetail.php" class="alt-link">
											<img src="https://fakeimg.pl/100/" alt="ProductName" title="Productnametitle">
											<span>Standart Kartvizit </span>
										</a>
										<a href="productDetail.php" class="alt-link">
											<img src="https://fakeimg.pl/100/" alt="ProductName" title="Productnametitle">
											<span>Standart Kartvizit </span>
										</a>
										<a href="productDetail.php" class="alt-link">
											<img src="images/itemex.jpg" alt="ProductName" title="Productnametitle">
											<span>Standart Kartvizit </span>
										</a>
										<a href="productDetail.php" class="alt-link">
											<img src="images/itemex.jpg" alt="ProductName" title="Productnametitle">
											<span>Standart Kartvizit </span>
										</a>
										<a href="productDetail.php" class="alt-link">
											<img src="https://fakeimg.pl/100/" alt="ProductName" title="Productnametitle">
											<span>Standart Kartvizit </span>
										</a>
										<a href="productDetail.php" class="alt-link">
											<img src="https://fakeimg.pl/100/" alt="ProductName" title="Productnametitle">
											<span>Standart Kartvizit </span>
										</a>
										<a href="productDetail.php" class="alt-link">
											<img src="https://fakeimg.pl/100/" alt="ProductName" title="Productnametitle">
											<span>Standart Kartvizit </span>
										</a>
										<a href="productDetail.php" class="alt-link">
											<img src="https://fakeimg.pl/100/" alt="ProductName" title="Productnametitle">
											<span>Standart Kartvizit </span>
										</a>
										<a href="productDetail.php" class="alt-link">
											<img src="images/itemex.jpg" alt="ProductName" title="Productnametitle">
											<span>Standart Kartvizit </span>
										</a>
										<a href="" class="alt-link">
											<img src="images/itemex.jpg" alt="ProductName" title="Productnametitle">
											<span>Standart Kartvizit </span>
										</a>
										<a href="" class="alt-link">
											<img src="https://fakeimg.pl/100/" alt="ProductName" title="Productnametitle">
											<span>Standart Kartvizit </span>
										</a>
										<a href="" class="alt-link">
											<img src="https://fakeimg.pl/100/" alt="ProductName" title="Productnametitle">
											<span>Standart Kartvizit </span>
										</a>
										<a href="" class="alt-link last-link">
											<img src="images/icons/square-add-button.png" alt="ProductName" title="Productnametitle">
											<span>Tümünü Gör</span>
										</a>
									</div>
								</li>
								<li class="dropdownLink"><a href="#">Broşürler & El İlanı</a>
									<div class="dropdown">
										<a href="" class="alt-link">
											<img src="images/itemex.jpg" alt="ProductName" title="Productnametitle">
											<span>Standart Kartvizit </span>
										</a>
										<a href="" class="alt-link">
											<img src="https://fakeimg.pl/100/" alt="ProductName" title="Productnametitle">
											<span>Standart Kartvizit </span>
										</a>
										<a href="" class="alt-link">
											<img src="https://fakeimg.pl/100/" alt="ProductName" title="Productnametitle">
											<span>Standart Kartvizit </span>
										</a>
										<a href="" class="alt-link">
											<img src="https://fakeimg.pl/100/" alt="ProductName" title="Productnametitle">
											<span>Standart Kartvizit </span>
										</a>
										<a href="" class="alt-link">
											<img src="https://fakeimg.pl/100/" alt="ProductName" title="Productnametitle">
											<span>Standart Kartvizit </span>
										</a>
										<a href="" class="alt-link">
											<img src="images/itemex.jpg" alt="ProductName" title="Productnametitle">
											<span>Standart Kartvizit </span>
										</a>
										<a href="" class="alt-link">
											<img src="https://fakeimg.pl/100/" alt="ProductName" title="Productnametitle">
											<span>Standart Kartvizit </span>
										</a>
										<a href="" class="alt-link">
											<img src="images/itemex.jpg" alt="ProductName" title="Productnametitle">
											<span>Standart Kartvizit </span>
										</a>
										<a href="" class="alt-link">
											<img src="https://fakeimg.pl/100/" alt="ProductName" title="Productnametitle">
											<span>Standart Kartvizit </span>
										</a>
										<a href="" class="alt-link">
											<img src="https://fakeimg.pl/100/" alt="ProductName" title="Productnametitle">
											<span>Standart Kartvizit </span>
										</a>
										<a href="" class="alt-link">
											<img src="https://fakeimg.pl/100/" alt="ProductName" title="Productnametitle">
											<span>Standart Kartvizit </span>
										</a>
										<a href="" class="alt-link">
											<img src="https://fakeimg.pl/100/" alt="ProductName" title="Productnametitle">
											<span>Standart Kartvizit </span>
										</a>
										<a href="" class="alt-link">
											<img src="https://fakeimg.pl/100/" alt="ProductName" title="Productnametitle">
											<span>Standart Kartvizit </span>
										</a>
										<a href="" class="alt-link">
											<img src="https://fakeimg.pl/100/" alt="ProductName" title="Productnametitle">
											<span>Standart Kartvizit </span>
										</a>
										<a href="" class="alt-link">
											<img src="images/itemex.jpg" alt="ProductName" title="Productnametitle">
											<span>Standart Kartvizit </span>
										</a>
										<a href="" class="alt-link">
											<img src="https://fakeimg.pl/100/" alt="ProductName" title="Productnametitle">
											<span>Standart Kartvizit </span>
										</a>
										<a href="" class="alt-link">
											<img src="images/productexample.png" alt="ProductName" title="Productnametitle">
											<span>Standart Kartvizit </span>
										</a>
										<a href="" class="alt-link last-link">
											<img src="images/icons/square-add-button.png" alt="ProductName" title="Productnametitle">
											<span>Tümünü Gör</span>
										</a>
									</div>
								</li>
								<li class="dropdownLink"><a href="#">Kurumsallar</a></li>
								<li class="dropdownLink"><a href="#">Reklam Baskılar</a></li>
								<li class="dropdownLink"><a href="#">İç & Dış Baskılar</a></li>
								<li class="dropdownLink"><a href="#">Promosyon</a></li>
								<li class="dropdownLink"><a href="#">Davetiyeler</a></li>
								<li class="dropdownLink"><a href="#">Kutu & Ambalaj</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</header>

	<section class="loginModals">
		<!-- Login Modal -->
		<div class="modal fade" id="loginSignupArea" tabindex="-1" role="dialog" aria-labelledby="loginSignupAreaTitle" aria-hidden="true">
			<div class="modal-dialog modal-dialog-centered" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title" id="exampleModalLongTitle">Üye Girişi</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<form>
						<div class="modal-body">
							<div class="inputArea">
								<label>E-Posta</label>
								<input type="text" name="">
							</div>
							<div class="inputArea">
								<label>Şifre</label>
								<input type="password" name="">
							</div>
							<div class="contentArea inputArea">
								<div class="pretty p-default p-fill">
									<input type="checkbox" />
									<div class="state">
										<label>Beni Hatırla</label>
									</div>
								</div>
								<a href="#" id="forgotPasswordLink">Şifremi Unuttum </a>
							</div>
							<div class="inputArea">
								<button>Giriş</button>
								<button class="Login f">Facebook ile Giriş</button>
								<button class="Login g">Google ile Giriş</button>
							</div>
						</div>
					</form>
					<div class="forgotPasswordArea">
						<form>
							<input type="text" name="" placeholder="E-mail adresiniz">
							<button>Gönder</button>
							<a id="backtoLogin">Üye Girişine Dön</a>
						</form>
					</div>
				</div>
			</div>
		</div>

		<!--Signup Modal -->
		<div class="modal fade" id="signupModal" tabindex="-1" role="dialog" aria-labelledby="signupModalTitle" aria-hidden="true">
			<div class="modal-dialog modal-dialog-centered" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title" id="exampleModalLongTitle">Kayıt Ol</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<form>
						<div class="modal-body">
							<div class="inputArea">
								<label>İsim Soyisim</label>
								<input type="text" name="">
							</div>
							<div class="inputArea">
								<label>E-Posta</label>
								<input type="text" name="">
							</div>
							<div class="inputArea">
								<label>GSM No:</label>
								<input type="text" name="">
							</div>
							<div class="inputArea">
								<label>Şifre</label>
								<input type="password" name="">
							</div>
							<div class="inputArea">
								<label>Şifre Tekrar</label>
								<input type="password" name="">
							</div>
							<div class="contentArea">
								<div class="pretty p-default p-fill">
									<input type="checkbox" />
									<div class="state">
										<label>Üyelik Sözleşmesini Okudum, Onaylıyorum</label>
									</div>
								</div>
								<div class="pretty p-default p-fill">
									<input type="checkbox" />
									<div class="state">
										<label>Kampanyalardan haberdar olmak istiyorum.</label>
									</div>
								</div>
							</div>
							<div class="inputArea">
								<button>Gönder</button>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>

	</section>
	<span id="overlay"></span>