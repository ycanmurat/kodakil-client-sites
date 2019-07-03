<!DOCTYPE html>
<html>
<head>
	<meta charset='UTF-8'>
	<meta name="viewport" content="width=device-width, initial-scale=1"><!-- Tüm cihazlara uyumlu -->
	<!-- Jquery -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
	<!-- owl-carousel -->
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.css">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
	<!-- Bootstrap -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.bundle.min.js"></script>

	<!-- Lightbox -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.10.0/js/lightbox.js"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.10.0/css/lightbox.css">

	<!--                          Fonts                         -->
	<link href="https://fonts.googleapis.com/css?family=Pacifico&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Libre+Baskerville:400,700|Varela+Round&display=swap" rel="stylesheet">

	<!-- Animate CSS -->
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">
	<!-- Pretty CheckBox -->
	<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/pretty-checkbox@3.0/dist/pretty-checkbox.min.css">
	<!-- KODAKIL -->
	<link rel="stylesheet" href="https://kodakil.com/assets/Front/images/kodakil_footer/kodakil_logo.css">
	<!-- Card JS-->
	<link rel="stylesheet" href="css/card.css">
	<script src="js/card.js"></script>
	<script src="js/jquery.card.js"></script>
	<!--                    CSS                          -->
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.10.0/css/lightbox.min.css">
	<link rel="stylesheet" type="text/css" href="css/reset.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	

	<!--                  Font Awesome                    -->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
	<link rel="shortcut icon"  href="images/favicon.png"/>
	<title>Kumyalı Simit</title>
</head>
<body>


	<!--	<div id="onload" style="background-image: url('images/mainlogo.png');"><span></span></div> -->
	<header>
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="header-nav">
						<div class="Nav h-item">
							<ul>
								<li class="link"><a href="index.php">Anasayfa</a></li>
								<li class="link"><a href="aboutus.php">Hakkımızda</a></li>
								<li class="link"><a href="contact.php">İletişim</a></li>
								
							</ul>
						</div>
						<div class="h-item Logo">
							<a href="index.php"><img src="images/logo.png" class="img-fluid"></a>
						</div>
						<div class="Nav h-item">
							<ul>
								<li class="link"><a href="productlist.php">Mağaza</a></li>
								
								<li class="link"><a class="" href="profile.php">Murat Can Yörüsün</a></li>
								<li>
									<div class="basket">
										<span>1</span>
										<img src="images/icons/cart.png">
									</div>
									<div class="Sepet">

										<div class="item">
											<div class="wrapper">
												<a href="#"><img src="images/productimages.png"></a>
											</div>
											<div class="wrapper">
												<p>Lemon Cupcake</p>
												<p class="Cost"><span class="total">
													<select>
														<option>1x</option>
														<option>2x</option>
														<option>3x</option>
														<option>4x</option>
														<option>5x</option>
														<option>6x</option>
														<option>7x</option>
														<option>8x</option>
														<option>9x</option>
													</select>
												</span>₺39.00</p>
											</div>
											<span class="delete"><i class="fas fa-times"></i></span>
										</div>

										<div class="item">
											<div class="wrapper">
												<a href="#"><img src="images/productimages.png"></a>
											</div>
											<div class="wrapper">
												<p>Lemon Cupcake</p>
												<p class="Cost"><span class="total">
													<select>
														<option>1x</option>
														<option>2x</option>
														<option>3x</option>
														<option>4x</option>
														<option>5x</option>
														<option>6x</option>
														<option>7x</option>
														<option>8x</option>
														<option>9x</option>
													</select>
												</span>₺39.00</p>
											</div>
											<span class="delete"><i class="fas fa-times"></i></span>
										</div>


										<div class="subtotal"><p>Toplam Tutar:</p><p>₺39.90</p></div>
										<a href="sepet.php">Sepete Git</a>
									</div>
								</li>
								<li class="link"><a class="d-none" href="login.php">Giriş Yap | Kayıt Ol</a></li>
							</ul>
						</div>
						<div class="hamburger">
							<svg class="ham hamRotate ham4" viewBox="0 0 100 100" width="80" onclick="this.classList.toggle('active')">
								<path class="line top" d="m 70,33 h -40 c 0,0 -8.5,-0.149796 -8.5,8.5 0,8.649796 8.5,8.5 8.5,8.5 h 20 v -20" />
								<path class="line middle" d="m 70,50 h -40" />
								<path class="line bottom" d="m 30,67 h 40 c 0,0 8.5,0.149796 8.5,-8.5 0,-8.649796 -8.5,-8.5 -8.5,-8.5 h -20 v 20" />
							</svg>
						</div>
						<div class="mobileMenu">
							
						</div>
						<span class="mobileOverMenu"></span>
					</div>
				</div>
			</div>
		</div>
	</header>
