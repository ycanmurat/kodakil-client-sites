  <section class="contact">
    <div class="contact-container">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="contact-maps">
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2998.5459626523893!2d36.35061031566814!3d41.27522081090357!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4088763a6e18c869%3A0x52b4657dee5c9c88!2s18.+Sk.+%26+Ahi+Evran+Cd.%2C+Yenimahalle+Mahallesi%2C+55080+Canik%2FSamsun!5e0!3m2!1str!2str!4v1551298338832" width="100%" height="400" frameborder="0" style="border:0" allowfullscreen></iframe>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6">
            <div class="contact-form">
              <div class="form-header">
                <h1>Görüş & Önerilerinizi İçin Yazın</h1>
              </div>
              <div class="form-body">
                <form action="">
                  <div class="form">
                    <input type="text" placeholder="İsim Soyisim" id="name" name="name">
                  </div>
                  <div class="form">
                    <input type="email" placeholder="E-Mail" name="email" id="email">
                  </div>
                  <div class="form">
                    <input type="tel" placeholder="Telefon" name="number" id="number">
                  </div>
                  <div class="form">
                    <textarea name="message" id="message" cols="30" rows="10" placeholder="Mesajınız" ></textarea>
                  </div>
                  <div class="form">
                    <button type="button" id="contactSubmit">GÖNDER</button>
                  </div>
                </form>
              </div>

            </div>
            <div class="col-lg-12 errors">
      
            </div>
          </div>
          <div class="col-md-6">
            <div class="contact-info">
              <div class="info-header">
                <h1>Bizimle İletişime Geçin</h1>
                <p>
                  <?=$statics->footerUzunBilgi?>
                </p>
              </div>
              <ul class="info-body">
                <li class="info-list">
                  <a href="" class="info-link">
                    <img src="<?=site_url('assets/Front/')?>images/address-icon.png" alt="">
                    <span><?=$statics->footerAdres?></span>
                  </a>
                </li>
                <li class="info-list">
                  <a href="mailto:0555 000 00 00" class="info-link">
                    <img src="<?=site_url('assets/Front/')?>images/e-mail-icon.png" alt="">
                    <span><?=$statics->footerMail?></span>
                  </a>
                </li>
                <li class="info-list">
                  <a href="tel:<?=$statics->footerNumara?>" class="info-link">
                    <img src="<?=site_url('assets/Front/')?>images/phone-icon.png" alt="">
                    <span><?=$statics->footerNumara?></span>
                  </a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
    </div>
  </section>
  <script type="text/javascript">
    $(document).ready(function(){
       $( "#contactSubmit" ).click(function(){
          var data = {};
          data.name = $( "#name" ).val();
          data.email = $( "#email" ).val();
          data.number = $( "#number" ).val();
          data.message = $( "textarea#message" ).val();
          $.ajax({
            method: "post",
            data : data,
            url: "<?=site_url('Contact/sendContact')?>",
            success:function(data){
               $('.errorLine').remove();
               $('.info').remove();
               if (data === "error") {
                   $( "<div class='info' style='padding:10px;background-color:red;color:white;'>Şuanda İşlem Sağlayamıyoruz Lütfen Daha Sonra Tekrar Deneyin.</div>" ).insertAfter( "#contactSubmit" ).hide().show( "slow" );
               }else if(data === "success"){
                  $( "<div class='info' style='padding:10px;background-color:green;color:white;margin-top:10px;'>Bizimle İletişim Kurduğunuz İçin Teşekkürler</div>" ).insertAfter( "#contactSubmit" ).hide().show( "slow" );
               }else{
                   $('.errors').append(data);
               }
             }
          });
       });
    });
  </script>


  