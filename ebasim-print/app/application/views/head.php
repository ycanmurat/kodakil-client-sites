<!--
    ooo   .88Y    ,oooooo,      4888 oooo.              `8888`           ooo   .88Y    888   888                 
    ooo  .88Y    ,oo    oo,    48888    `88b          `88'  '88`         ooo  .88Y     888   888               
    ooo .88Y    ,oo      oo,  44 888      888        `88'    '88`        ooo .88Y      888   888              
    ooo.88Y    ,oo        oo,    888       888      `88'      '88`       ooo.88Y       888   888                
    ooo        ,oo        oo,    888       888     `88'oooooooo'88`      ooo           888   888    
    ooo.88Y    ,oo        oo,    888       888    `88'oooooooooo'88`     ooo.88Y       888   888               
    ooo .88Y    ,oo      oo,     888      888    `88'            '88`    ooo .88Y      888   888                 
    ooo  .88Y    ,oo    oo,      888    `88b     ooo              ooo    ooo  .88Y     888   888OOOOOO         
    ooo   .88Y    ,oooooO,      o88o  oooo      ooo                ooo   ooo   .88Y    888   888OOOOOO   
-->
<!DOCTYPE html>
<html lang="tr">
<head>
	<meta charset="UTF-8">
	<meta name='viewport'  content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' />
	<title>Ebasim Matbaa</title>

	<meta name="description" content="<?=(isset($pageDesc) ? $pageDesc:'Kodakillabs | İstediğiniz baskıyı ,en yüksek kalite de ,grafikçiye ihtiyaç duymadan online matbaamızdan ücretsiz kargo fırsatı ile teslim alabileceksiniz.') ?>"/>

	<?php 
	if (isset($pageMeta)) {
		echo $pageMeta;	
	}
	?>
	<meta name="rights" content="Tüm hakları Kodakil.com'a aittir." />
	<meta name="copyright" content="(c) 2017" />


	<!-- Bootstrap -->
	<link rel="stylesheet" type="text/css" href="<?=site_url('assets/Front/')?>assets/bootstrap/bootstrap4.css">

	<!-- font-awesome -->
	<link rel="stylesheet" type="text/css" href="<?=site_url('assets/Front/')?>assets/font-awesome/css/font-awesome.min.css">

	<!-- Flag Css -->
	<link rel="stylesheet" type="text/css" href="<?=site_url('assets/Front/')?>assets/flag-icon/css/flag-icon.css">

	<!-- Fix -->
	<link rel="stylesheet" type="text/css" href="<?=site_url('assets/Front/')?>css/normalize.css">
	<link rel="stylesheet" type="text/css" href="<?=site_url('assets/Front/')?>css/main.css">

	<!-- Swiper CSS -->	
	<link rel="stylesheet" href="<?=site_url('assets/Front/')?>assets/swipe-slider/swiper.css">

	<!-- Swiper CSS -->	
	<link rel="stylesheet" href="<?=site_url('assets/Front/')?>assets/owl-carousel/owl.carousel.css">

	<!-- checkbox css-->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/pretty-checkbox@3.0/dist/pretty-checkbox.min.css">
	<!-- FileUpload -->
	<link rel="stylesheet" href="<?=site_url('assets/Front/')?>assets/fileUpload/kendo.material.css" />

	<!-- Alertify CSS -->
	<link rel="stylesheet" href="<?=site_url('assets/Front/')?>assets/alertifyjs/css/alertify.min.css" />
	<link rel="stylesheet" href="<?=site_url('assets/Front/')?>assets/alertifyjs/css/themes/default.min.css" />

	<link rel="stylesheet" href="<?=site_url('assets/Front/')?>/css/custom.css?v=2" />
	
	<!-- JQuery -->
	<script src="<?=site_url('assets/Front/')?>js/jquery.min.js"></script>
	<script src="<?=site_url('assets/Front/')?>js/jquery.number.min.js"></script>

	<script src="<?=site_url('assets/Front/')?>assets/alertifyjs/alertify.min.js"></script>

	<script src="https://cdn.jsdelivr.net/npm/js-cookie@2/src/js.cookie.min.js"></script>

	<!-- kodakil Logo -->
	<link rel="stylesheet" href="https://kodakil.com/assets/Front/images/kodakil_footer/kodakil_logo.css">
	<script src="<?=site_url('assets/Front/')?>js/card.js"></script>
	<meta name="google-site-verification" content="sKMQNdSTW6KWa71Rhaq04eLk_AK_zZiGavuePPdNJm8" />

	<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>


</head>

<body>
	<div class="page-loading">
		<div class="icon">
			<img class="EbaskIcons" src="<?=(site_url('assets/logo/logoikony.png'))?>" alt="ebasim.com">
		</div>
	</div>
	<script>
		window.addEventListener('load', (event) => {
			$('.page-loading').addClass('load');

		});
	</script>