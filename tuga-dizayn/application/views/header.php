<!DOCTYPE html>
<html lang="tr">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>TUGA DİZAYN</title>
  <link rel="shortcut icon" type="image/ico" href="<?=site_url('assets/Front/')?>images/favicon.ico"/>

  <!--Bootstrap Css-3.3.7 Begin -->
  <link href="<?=site_url('assets/Front/')?>lib/bootstrap-3.3.7/css/bootstrap.min.css" rel="stylesheet">
  <!--Bootstrap Css-3.3.7 End -->


  <!--Bootstrap Hover Menu Css-3.3.7 Begin -->
  <link href="<?=site_url('assets/Front/')?>lib/bootstrap-dropdown-hover-3.3.7/css/animate.min.css" rel="stylesheet">
  <link href="<?=site_url('assets/Front/')?>lib/bootstrap-dropdown-hover-3.3.7/css/bootstrap-dropdownhover.min.css" rel="stylesheet">
  <!--Bootstrap Hover Menu Css-3.3.7 End -->

  <!--Font Awesome Css-4.7.0 Begin -->
  <link rel="stylesheet" href="<?=site_url('assets/Front/lib/font-awesome-4.7.0/css/font-awesome.min.css'); ?>">
  <!--Font Awesome Css-4.7.0 End -->

  <!--Owl-Carousel Css-2-2.3.7 Begin-->
  <link rel="stylesheet" href="<?=site_url('assets/Front/')?>lib/owl-carousel-2-2.3.4/dist/assets/owl.carousel.min.css">
  <link rel="stylesheet" href="<?=site_url('assets/Front/')?>lib/owl-carousel-2-2.3.4/dist/assets/owl.theme.default.min.css">
  <link rel="stylesheet" href="<?=site_url('assets/Front/')?>css/iziToast.min.css">
  <!--Owl-Carousel Css-2-2.3.7 End-->

  <!--Light-Box-Master Css-2.0 Begin-->
  <link rel="stylesheet" href="<?=site_url('assets/Front/')?>lib/lightbox-master-2/dist/css/lightbox.min.css">
  <!--Light-Box-Master Css-2.0 End-->



  <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->


    
    <!--jQuery-1.9.1 Begin -->
    <script src="<?=site_url('assets/Front/')?>lib/jquery-1.9/jquery-2.2.4.min.js"></script>
    <!--jQuery-1.9.1 End -->

    <!--Bootstrap Js-3.3.7 Begin -->
    <script src="<?=site_url('assets/Front/')?>lib/bootstrap-3.3.7/js/bootstrap.min.js"></script>
    <!--Bootstrap Js-3.3.7 End -->

    <!--Bootstrap Hover Menu Js-3.3.7 Begin -->
    <script src="<?=site_url('assets/Front/')?>lib/bootstrap-dropdown-hover-3.3.7/js/bootstrap-dropdownhover.min.js"></script>
    <!--Bootstrap Hover Menu Js-3.3.7 End -->

    <!--Owl-Carousel Css-2-2.3.7 Begin-->
    <script src="<?=site_url('assets/Front/')?>lib/owl-carousel-2-2.3.4/dist/owl.carousel.min.js"></script>
    <!--Owl-Carousel Css-2-2.3.7 End-->

    <!--Light-Box-Master Js-2.0 Begin-->
    <script src="<?=site_url('assets/Front/')?>lib/lightbox-master-2/dist/js/lightbox.min.js"></script>
    <!--Light-Box-Master Js-2.0 End-->

    <!--InputMask Js-3.3.4-108 Begin-->
    <script src="<?=site_url('assets/Front/')?>lib/inputmask-3.3.4/jquery.inputmask.bundle.js"></script>
    <!--InputMask Js-3.3.4-108 End-->

    <!--jquery.cookie-1 Begin-->
    <script src="<?=site_url('assets/Front/')?>lib/jquery.cookie-1/jquery.cookie.js"></script>
    <!--jquery.cookie-1 End-->

    <!--My Css Begin -->
    <link rel="stylesheet" href="<?=site_url('assets/Front/')?>css/reset.css">
    <link rel="stylesheet" href="<?=site_url('assets/Front/')?>css/main.css?v=2.2">
    <link rel="stylesheet" href="<?=site_url('assets/Front/')?>css/responsive.css?v=2.2">
    <!--My Css End -->

    <!-- My JS Begin --->
    <script src="<?=site_url('assets/Front/')?>js/main.js?v=?v=00.1"></script>
    <script src="<?=site_url('assets/Front/')?>js/iziToast.min.js"></script>
    <!-- My Js End -->

    <link rel="stylesheet" href="https://kodakil.com/assets/Front/images/kodakil_footer/kodakil_logo.css">
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-110959042-30"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-110959042-30');
    </script>

    
</head>

<body>
  <div class="overlay-dark"></div>

  <header>
    <div class="header-container">
        <div class="header-topbar">
            <div class="container">
                <div class="header-topbar-content">
                    <div class="headSc">
                      <a href="<?=$statics->footerFacebook?>" class="s-link"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                      <a href="<?=$statics->footerTwitter?>" class="s-link"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                      <a href="<?=$statics->footerInstagram?>" class="s-link"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                      <a href="https://wa.me/90555 000 00 00" target="_blank" class="s-link"><i class="fa fa-whatsapp" aria-hidden="true"></i> Whatsapp ile Sipariş : +90 (544) 280 50 11</a>
                  </div>
                  <ul class="topbar-nav">
                    <li class="nav-list">
                        <a href="<?=site_url('hakkimizda')?>" class="nav-link aboutus" title="KURUMSAL"> KURUMSAL </a>
                    </li> 
                    <li class="nav-list">
                        <a href="<?=site_url('projeler')?>" class="nav-link project" title="PROJELER">MİMARLIK </a>
                    </li>
                    <li class="nav-list contact">
                        <a href="<?=site_url('iletisim')?>" class="nav-link" title="İLETİŞİM">İLETİŞİM </a>
                    </li>
                </ul>
            </div>
            
        </div>        
    </div>
    <div class="header-menubar">
        <div class="container">
            <div class="header-account-content">                  
                <div class="header-mobile-menu">
                    <button class="hamburger-menu">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <div class="icon-text">Menü</div>
                    </button>
                </div>
                <div class="header-logo">
                    <a href="<?=site_url()?>">
                        <img src="<?=TimbThumb(site_url('assets/Front/images/tugadizay-logo-1.png'),'100x77')?>" alt="">
                    </a>
                </div>
                <div class="header-search">
                    <form action="arama" method="get">
                        <input type="hidden" name="search" autocomplete="off">
                        <input type="text" name="search" class="search-input" placeholder="Ne Aramak İstemiştiniz?">
                        <button type="submit" class="search-button">
                            <i class="icon-ifa fa fa-search"></i>
                        </button>
                    </form>
                    <div class="search-result">
                        <ul class="search-ontent">                                
                        </ul>
                    </div>
                </div>
                <ul class="header-nav">
                    <li class="nav-list">
                      <?php if (!isset($user)) { ?>
                        <a class="nav-link profile-link" title="Üye Ol / Giriş Yap" id="Login-Modal-Open">
                          <i class="icon-ifa fa fa-user"></i>
                          <i class="icon-text"> Üye Ol / Giriş Yap</i>
                      </a>
                  <?php } else { ?>
                    <a class="nav-link profile-link" title="Çıkış Yap" href="<?php echo site_url('Account'); ?>">
                      <i class="icon-ifa fa fa-user"></i>
                      <i class="icon-text"> <?php echo $user->name . ' ' . $user->surname; ?> </i>
                  </a>
              <?php } ?>
          </li>
          <li class="nav-list card-js">
            <a class="nav-link card-link" title="ANA SAYFA">
                <i class="icon-ifa fa fa-shopping-cart"></i>
                <i class="icon-text"> Sepet </i>
                <i class="bag-number"> <?=$this->cart->total_items()?> </i>                                
            </a>
            <div class="right-siderbar">
                <div class="siderbar-container">
                    <div class="siderbar-header">
                        <div class="title">Sepetim <span class="icon-card-number"><?=$this->cart->total_items()?></span></div>
                        <a class="close close-js">
                            <span class="icon-ifa fa fa-times-circle"></span>
                        </a>
                    </div>
                    <div class="siderbar-body card">
                        <?php foreach ($this->cart->contents() as $key => $val) { $val = (object)$val; ?>
                            <div class="card-list">
                                <div class="card-img">
                                    <img src="<?=site_url($val->image)?>">
                                </div>
                                <div class="card-info">
                                    <div class="product-name"><?=$val->name?></div>
                                    <div class="product-unit"><b><?=$val->qty?></b> Adet</div>
                                    <div class="product-unit"><?=$val->options['size']?> - <?=$val->options['color']?></div>\
                                    <div class="product-price">
                                        <div class="product-new-price"><?=number_format($val->price,2,'.',',')?> TL</div>
                                    </div>
                                    <a class="product-delete" onclick="removeCart('<?=$val->rowid?>')"><span class="icon-ifa fa fa-trash"></span></a>
                                </div>
                            </div>
                        <?php } ?>
                    </div>
                    <div class="siderbar-footer">
                        <div class="card-total-price">
                            <span class="icon-text">Vergiler dahil</span>
                            <span class="icon-card-price">ARA TOPLAM <?=number_format($this->cart->total(),2,'.',',')?> TL</span>
                        </div>
                        <div class="card-link">
                            <a href="<?=site_url('sepet')?>" class="card-goto line">Sepete Git</a>
                            <a href="<?=site_url('sepet/adres')?>" class="card-goto">Ödeme Sayfasına Git</a>
                        </div>
                        <div class="card-support">
                            <span class="icon-text">Destek</span>
                            <span class="icon-ifa ifa-558"><a href="https://wa.me/90555 000 00 00" target="_blank" class="s-link"> +90 (544) 280 50 11</a></span>
                        </div>
                    </div>
                </div>
            </div>
        </li>
    </ul>
</div>
<div class="header-menu-content">
    <ul class="header-nav">
        <?php foreach ($categories as $key => $val) { ?> 
            <li class="nav-list <?=$val->sub != array()?'dropdown-hover':''?>">
                <a href="<?=site_url('urunler/'.$val->slug)?>" class="nav-link" title="<?=$val->name?>">
                    <i class="icon-text"><?=$val->name?></i>
                </a>
                <?php if ($val->sub != array()) { ?>
                    <div class="menu-dropdown-container">
                        <div class="dropdown-body">
                            <div class="sub-container">
                                <div class="dropdown-sub" style="margin: 30px auto 20px;">
                                    <div class="dropdown-carousel">
                                        <?php foreach ($val->sub as $key => $val) { ?>
                                            <a href="<?=site_url('urunler/'.$val->slug)?>" class="carousel-link">
                                                <img src="<?=site_url($val->image)?>" class="item-img">
                                                <h4 class="item-title"><?=$val->name?></h4>
                                            </a>
                                        <?php } ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </li>
        <?php } ?>
    </ul>
</div>
</div>
</div>
</div>
</header>
<a href="https://wa.me/90555 000 00 00" target="_blank" id="wpButton"><i class="fa fa-whatsapp" aria-hidden="true"></i><p>Whatsapp Destek</p></a>
<script>
    $(window).scroll(function() {    
        var scroll = $(window).scrollTop();
        if (scroll >= 200) {
            if(window.innerWidth > 768){
                $(".header-nav").addClass('sticked');
            }
        }else{
            $(".header-nav").removeClass('sticked');
        }
    });
</script>