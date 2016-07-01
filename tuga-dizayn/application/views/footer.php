<section class="bottom-bar">
    <div class="bottom-menubar-container">
        <ul class="menubar-nav">
            <li class="menubar-list">
                <a href="/" class="menubar-link home">
                    <span class="icon-ifa fa fa-home"></span>
                    <span class="icon-text">Anasayfa</span>
                </a>
            </li>
            <li class="menubar-list">
                <a class="menubar-link menu">
                    <span class="icon-ifa fa fa-bars"></span>
                    <span class="icon-text">Menü</span>
                </a>
            </li>
            <li class="menubar-list">
                <a class="menubar-link card">
                    <span class="icon-ifa fa fa-shopping-cart"></span>
                    <span class="icon-text">Sepetim</span>
                    <span class="bag-number"> <?=$this->cart->total_items()?> </span>        
                </a>
            </li>             
            <li class="menubar-list">
                <?php if (!isset($user)) { ?>
                <a class="menubar-link profile profile-link" title="Üye Ol / Giriş Yap">
                    <span class="icon-ifa fa fa-user"></span>
                    <span class="icon-text">Giriş</span>
                </a>
                <?php } else { ?>
                <a href="<?php echo site_url('Account'); ?>" class="menubar-link profile profile-link" title="Hesabım">
                    <span class="icon-ifa fa fa-user"></span>
                    <span class="icon-text"><?php echo $user->name; ?> </span>
                </a>
                <?php } ?>
            </li>
        </ul>
    </div>
</section>
<footer>
    <div class="footer-container">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12">
                <div class="news-latter-container">
                    <div class="news-latter-form">
                    <label class="form-label">Bizden Haberdar Olun!</label>
                        <input type="text" name="newsLetterEmail" class="form-input" placeholder="E-Posta Giriniz.." id="newsLetterEmail">
                        <button type="button" class="form-button" id="newsLetter">
                            <img src="<?=site_url('assets/Front/')?>images/news-latter-icon.png" alt="">
                        </button>
                    </div>
                </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3 col-sm-12">
                    <div class="footer-abouts-container">
                        <div class="footer-logo">
                        <img src="<?=TimbThumb(site_url('assets/Front/images/tugadizay-logo-1.png'),'115x89')?>" alt="">
                        </div>
                        <div class="footer-abouts">
                        <p>
                            <?=$statics->footerUzunBilgi?>
                        </p>
                        </div>
                        <ul class="footer-social-media">
                            <li class="social-media-list">
                                <a href="<?=$statics->footerFacebook?>" target="_blank" class="social-media-link">
                                <img src="<?=site_url('assets/Front/')?>images/footer-facebook.png" alt="">
                                </a>
                            </li>
                            <li class="social-media-list">
                                <a href="<?=$statics->footerTwitter?>" target="_blank" class="social-media-link">
                                <img src="<?=site_url('assets/Front/')?>images/footer-tiwtter.png" alt="">
                                </a>
                            </li>
                            <li class="social-media-list">
                                <a href="<?=$statics->footerInstagram?>" target="_blank" class="social-media-link">
                                <img src="<?=site_url('assets/Front/')?>images/footer-instagram.png" alt="">
                                </a>
                            </li>
                            <li class="social-media-list">
                                <a href="<?=$statics->footerPinterest?>" target="_blank" class="social-media-link">
                                <img src="<?=site_url('assets/Front/')?>images/footer-pintrest.png" alt="">
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-3 col-sm-12">
                    <div class="footer-menu-container">
                        <ul class="footer-menu">
                            <li class="footer-menu-list">
                                <a href="<?=site_url()?>" class="footer-menu-link">ANA SAYFA</a>
                            </li>
                            <li class="footer-menu-list">
                                <a href="<?=site_url('projeler')?>" class="footer-menu-link">PROJELER</a>
                            </li>
                            <li class="footer-menu-list">
                                <a href="<?=site_url('iletisim')?>" class="footer-menu-link">BİZE ULAŞIN</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-3 col-sm-12">
                    <div class="footer-menu-container">
                        <ul class="footer-menu">
                            <?php foreach ($footerPage as $key => $val) { ?>
                                <li class="footer-menu-list">
                                    <a href="<?=site_url('hakkimizda')?>" class="footer-menu-link"><?=$val->statics_name?></a>
                                </li>
                            <?php } ?>
                        </ul>
                    </div>
                </div>
                <div class="col-md-3 col-sm-12">
                    <div class="footer-contact-contaier">
                        <ul class="footer-contact">
                            <li class="footer-contact-list">
                                <a href="" class="footer-contact-link">
                                <div class="footer-icon">
                                    <img src="<?=site_url('assets/Front/')?>images/address-icon.png" alt="">
                                </div>
                                <div class="icon-text">
                                    <span><?=$statics->footerAdres?></span>
                                </div> 
                                </a>
                            </li>
                            <li class="footer-contact-list">
                                <a href="mailto:<?=$statics->footerMail?>" class="footer-contact-link">
                                <div class="footer-icon">
                                    <img src="<?=site_url('assets/Front/')?>images/e-mail-icon.png" alt="">
                                </div>
                                <div class="icon-text">
                                    <span><?=$statics->footerMail?></span>
                                </div>
                                </a>
                            </li>
                            <li class="footer-contact-list">
                                <a href="tel:<?=$statics->footerNumara?>" class="footer-contact-link">
                                <div class="footer-icon">
                                    <img src="<?=site_url('assets/Front/')?>images/phone-icon.png" alt="">
                                </div>
                                <div class="icon-text">
                                    <span><?=$statics->footerNumara?></span>
                                </div>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-8">
                    <div class="footer-bank-logos left">
                        <div class="item"><img src="<?=site_url('assets/Front/')?>images/bank1.png?V=1" alt=""></div>
                        <div class="item"><img src="<?=site_url('assets/Front/')?>images/bank2.png?V=1" alt=""></div>
                        <div class="item"><img src="<?=site_url('assets/Front/')?>images/bank3.png?V=1" alt=""></div>
                        <div class="item"><img src="<?=site_url('assets/Front/')?>images/bank4.png?V=1" alt=""></div>
                        <div class="item"><img src="<?=site_url('assets/Front/')?>images/bank7.png?V=2" alt=""></div>
                    </div>
                </div>                
                <div class="col-md-4">
                    <div class="footer-bank-logos right">
                        <div class="item"><img src="<?=site_url('assets/Front/')?>images/master.png?V=1" alt=""></div>
                        <div class="item"><img src="<?=site_url('assets/Front/')?>images/visa.png?V=1" alt=""></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</footer>

<div id="Login-Modal" class="logim-modal modal fade" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">            
            <div class="modal-body">
                <button type="button" class="close" data-dismiss="modal"><span class="icon-ifa fa fa-times"></span></button>
                <ul class="nav nav-tabs">
                    <li class="active"><a data-toggle="tab" href="#login">Girş Yap</a></li>
                    <li><a data-toggle="tab" href="#sign-up">Üye Ol</a></li>
                </ul>
                <div class="tab-content">
                    <div id="login" class="tab-pane fade in active">                               
                        <form class="form-content" method="post" action="<?php echo current_url(); ?>" id="login-form">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-container title">
                                        <label class="form-label">Giriş yapmak için e-posta adresinizi ve parolanızı giriniz</label>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-container">
                                        <label class="form-label">E-Posta</label>
                                        <input type="text" class="form-input" autocomplete="off" name="email-or-phone" placeholder="E-Mail veya Telefon Numaranızı Giriniz"> 
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-container">
                                        <label class="form-label"> Şifre <a class="forgot-link" id="Password-Reset-Modal-Open"><i class="forgot-icon">?</i> Şifremi Unuttum?</a> </label>
                                        <input type="password" class="form-input" autocomplete="off" name="password" placeholder="Şifreniz">
                                        <a id="PasswordShow" class="password-show"></a>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-container">
                                        <button class="form-link login-link">Giriş Yap</button>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-container">
                                        <a href="" class="form-link facebook-link">
                                            <i class="icon-ifa fa fa-facebook"></i>
                                            <span class="icon-text">Facebook <small class="fb">ile Bağlan</small></span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div id="sign-up" class="tab-pane fade">
                        <form class="form-content" method="post" action="<?php echo current_url(); ?>" id="register-form">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-container title">
                                        <label class="form-label">Üye olmak için tüm alanları eksiksiz doldurunuz</label>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-container">
                                        <label class="form-label">Adınız</label>
                                        <input type="text" class="form-input register-name" autocomplete="off" name="name" placeholder="Adınız"> 
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-container">
                                        <label class="form-label">Soyadınız</label>
                                        <input type="text" class="form-input register-surnanem" autocomplete="off" name="surname" placeholder="Soyadınız"> 
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-container">
                                        <label class="form-label">E-Posta</label>
                                        <input type="text" class="form-input register-email" autocomplete="off" name="email" placeholder="E-Mail Adresiniz"> 
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-container">
                                        <label class="form-label">Telefon Numaranız</label>
                                        <input type="tel" class="form-input register-phone" autocomplete="off" name="phone" placeholder="Telefon Numaranız"> 
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-container">
                                        <label class="form-label"> Şifreniz</label>
                                        <input type="password" class="form-input register-password" autocomplete="off" name="password" placeholder="Şifreniz">
                                        <a id="PasswordShow" class="password-show"></a>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-container">
                                        <button type="submit" class="form-link login-link">Üye Ol</button>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-container">
                                        <a href="" class="form-link facebook-link">
                                            <i class="icon-ifa fa fa-facebook"></i>
                                            <span class="icon-text">Facebook <small class="fb">ile Bağlan</small></span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div id="Password-Reset-Modal" class="logim-modal modal fade" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">            
            <div class="modal-body">
                <button type="button" class="close" data-dismiss="modal"><span class="icon-ifa fa fa-times"></span></button>
                <div class="tab-content">
                    <div id="login" class="tab-pane fade in active">                               
                        <form class="form-content" method="post" action="<?php echo current_url(); ?>" id="password-reset-form">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-container title">
                                        <label class="form-label">Şifrenizi Sıfırlamak İçin Sisteme Kayıt Olduğunuz Bilgileri Lütfen Doğru Girin</label>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-container">
                                        <label class="form-label">E-Mail veya Telefon Numaranızı Giriniz</label>
                                        <input type="text" class="form-input" autocomplete="off" name="email-or-phone" placeholder="E-Mail veya Telefon Numaranızı Giriniz"> 
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-container">
                                        <button class="form-link login-link">Sıfırlama E-Mail'i Gönder</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
  $('#newsLetter').click(function(){
    var data = {};
    data.newsLetterEmail = $("#newsLetterEmail").val().trim();
    $("#newsLetterEmail").css('border', '1px solid #353535'); 
    $.ajax({
      method: "POST",
      data : data,
      url: "<?=site_url('Contact/newsLetter')?>",
      success:function(data){
        if (data === "error") {
          $("#newsLetterEmail").css('border', '2px solid red'); 
        } else {
          $("#newsLetterEmail").css('border', '2px solid #07cc3a');
        }
      }
    });
  });
</script>
<script type="text/javascript">
$( ".search-input" ).keyup(function() {
    var site = '<?php echo site_url('urun'); ?>';
    var text = $('.search-input').val();
    $.ajax({
        method: 'post',
        dataType: 'json',
        data: {'keywords' : text},
        url: '/Ajax/search',
        success: function(result) {
            if (result.status === true) {
                var html = '';
                $.each(result.information, function( index, val ) {
                    html += '<li class="search-list"><a class="search-link" href="'+ site + '/' + val.slug +'">'+ val.product_name +'</a></li>';
                });
                $('.search-ontent').text("");
                $('.search-ontent').append(html);
            } else {
                $('.search-ontent').text("");
                var html = '<li class="search-list"><a class="search-link" href="javascript:void(0);">Sonuç Bulunamadı</a> </li>';
                $('.search-ontent').append(html);
            }
        },
        error: function() {
            iziToast.error({
                title: 'Hata',
                message: 'Bağlantı Hatası Lütfen Tekrar Deneyin'
            });
        }
    });
});
</script>
</body>
</html>