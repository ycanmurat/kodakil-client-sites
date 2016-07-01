<style>
header .header-container{
    display:  none;
}

.borderErrorRed{
    border-bottom-color: red !important;
}
</style>
<script>
   /* Cart Format */
   $(window).load(function() {
      $('.card__number').text("**** **** **** ****");
      $('.card__name').text("AD SOYAD");
      $('.card__date').text("AA / YY");
      $('.card__cvv').text("***");
  });
   $(document).ready(function(){

      $("#card_number").keyup(function () {
          var card_number = $(this).val();
          $(".card__number").text(card_number);
      }).keyup();
      $("#card_name").keyup(function () {
          var card_name = $(this).val();
          $(".card__name").text(card_name);
      }).keyup();
      $("#card_date").keyup(function () {
          var card_date = $(this).val();
          $(".card__date").text(card_date);
      }).keyup();
      $("#card_cvv").keyup(function () {
          var card_cvv = $(this).val();
          $(".card__cvv").text(card_cvv);
      }).keyup();


      $('#card_cvv').focus(function(){
          $('.card').addClass('BackPreview');
      });

      $('#card_cvv').blur(function(){ 
          $('.card').removeClass('BackPreview');
      });


      $("#card_number").inputmask({"mask": "9999 9999 9999 9999"});
      $("#card_date").inputmask({"mask": "99 / 99"});
      $("#card_cvv").inputmask({"mask": "999"});


      $('#card_name').bind('keyup blur',function(){ 
          var node = $(this);
          node.val(node.val().replace(/[^a-z,A-Z ŞşİiÖöÇçĞğİıÜü]/g,'') ); }
          );
  });

</script>

<?php if ($this->cart->total() >= $cargo->min_price) { 
    $cargo = 0;
}else{ 
    $cargo = $cargo->price; 
} ?>
<div class="clearfix"></div>
<section class="cart-header-container">
    <div class="container">
        <div class="cart-header">
            <a href="<?=site_url()?>" class="cart_logo"> <img src="<?=site_url('assets/Front/')?>images/tuga-dizayn.png" alt=""></a>
            <div class="security_text">
                <i class="icon-ifa fa fa-shield"></i>
                <i class="icon-text">Güvenli Ödeme</i>
            </div>
        </div>
    </div>
</section>
<section class="payment-container">
    <div class="container">
        <div class="row">

            <div class="col-md-8">
                <p class="selectText">Ödeme Yöntemi Seçiniz</p>
                <div class="selectPaymentButtons">
                    <span id="ccPayment" class="active">Kredi Kartı</span>
                    <span id="transferPayment">Havale EFT<b>%5 İndirim</b></span>
                </div>
                

                <div class="ccPayment active">
                    <form action="<?=site_url('sepet/iyzipay')?>" method="post" id="odemeForm">
                        <div class="Cart_Content">
                            <div class="T">Ödeme Bilgileri</div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-container">
                                                <label for="">Kart Numarası *</label>
                                                <input type="text" class="form-input" id="card_number" name="card_number" onkeyup="ccNumberChange('<?=$this->cart->total()+$cargo?>')" data-inputmask="'mask': '9999 9999 9999 9999'">
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-container">
                                                <label for="">Kart Üzerindek Ad Soyad *</label>
                                                <input type="text" class="form-input" id="card_name" name="card_name">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-container">
                                                <label for="">Tarih *</label>
                                                <input type="text" class="form-input" id="card_date" name="card_date" placeholder="AA / YY">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-container">
                                                <label for="">CVV *</label>
                                                <input type="text" class="form-input" id="card_cvv" name="card_cvv" placeholder="XXX">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="card">
                                        <div class="card__front card__part">
                                            <img class="card__square" src="<?=site_url('assets/Front/')?>images/card_icon.png">
                                            <p class="card__number">**** **** **** ****</p>
                                            <div class="card__space-75">
                                                <span class="card__label">Kart Sahibi</span>
                                                <p class="card__info card__name">AD SOYAD</p>
                                            </div>
                                            <div class="card__space-25">
                                                <span class="card__label">AA/YY</span>
                                                <p class="card__info card__date">AA / YY</p>
                                            </div>
                                        </div>
                                        <div class="card__back card__part">
                                            <div class="card__black-line"></div>
                                            <div class="card__back-content">
                                                <div class="card__secret">
                                                    <p class="card__cvv">***</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="Cart_Content">
                            <div class="T">Ödeme Bilgileri</div>
                            <div class="row">
                                <div class="col-12 col-md-12">
                                    <div class="OptionAlert">Taksit Seçenekleri görebilmek için kredi kartı bilgilerinizi girmelisiniz.</div>
                                    <table class="OptionList" cellspacing="0" cellpadding="0" style="width: 100%">
                                        <thead>
                                            <tr>
                                                <th>Taksit Sayısı</th>
                                                <th>Aylık Ödeme</th>
                                                <th>Toplam</th>
                                            </tr>
                                        </thead>
                                        <tbody class="TaksitList">
                                            <tr class="hireItem">
                                                <td>
                                                    <div class="OptionRadio">
                                                        <input name="taksit_sayisi" id="Pesin" type="radio" value="1" checked="checked">
                                                        <label for="Pesin" class="radio-label">Peşin</label>
                                                    </div>
                                                </td>
                                                <td><?=$this->cart->total()+$cargo?> TL</td>
                                                <td><?=$this->cart->total()+$cargo?> TL</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>

                <div class="transferPayment">
                    <div class="topArea">
                        <p>Havale/eft ödemesi sadece Türkiye’den verilen siparişler için geçerlidir.</p>
                        <p>Havale/EFT komisyon ücretleri bankaların kendi uygulaması olup bankadan bankaya değişiklik göstermektedir.</p>
                        <p>Yapıcağınız havale/EFT işlemleri mesai saatleri içinde incelenip işleme alınacaktır.</p>
                        <p>Sipariş tarihinden sonra 4 iş gününde ödeme yapmazsanız iptal olacaktır.</p>
                    </div>
                    <div class="midArea">
                        <p>** Sipariş Numaranız :<b>214</b></p>
                        <p>** Lütfen bu numarayı havale/eft'nizin açıklama kısmına yazınız !</p>
                        <p>** Eğer yazmayı unuttuysanız <a href="tel:0555 000 00 00">0555 000 00 00</a> numaralı hattı arayınız.</p>
                    </div>
                    <div class="eftBanks">
                        <div class="item">
                            <p><?='Banka_sube_adi' ?></p>
                            <p><b>Hesap Adı :</b> <?='hesap_adi' ?> </p>
                            <p><b>Hesap No :</b> <?='hesap_no' ?> </p>
                            <p><b>Iban No :</b> <?='iban_no' ?> </p>
                        </div>
                    </div>
                </div>
            </div>


            <div class="col-md-4">
                <div class="addition-card">
                    <div class="form-container">
                        <a href="<?=site_url()?>" class="form-link solid">Alışverişe Dön</a>
                    </div>
                    <div class="addition">
                        <h4>Sipariş Özeti</h4>
                        <div class="basket-summary total-price">
                            <span>Ürün Tutarı</span>
                            <span><?=number_format($this->cart->total(),2,'.',',')?> TL</span>
                        </div>
                        <div class="basket-summary cargo-price">
                            <span>Kargo Ücreti</span>
                            <span>
                                <?php if ($cargo == 0) { ?>
                                    Ücretsiz
                                <?php }else{ ?>
                                    <?=$cargo?> TL
                                <?php } ?>
                            </span>
                        </div>
                        <div class="basket-summary general-total">
                            <span>Toplam</span>
                            <span><?=number_format($this->cart->total()+$cargo,2,'.',',')?> TL</span>
                        </div>
                    </div>
                </div> 
                <div class="cart-contract">
                    <input type="checkbox" class="contract_input" id="cart_contract">
                    <label class="contract_label" for="cart_contract">
                        <a href="javascript:void(0);" data-toggle="modal" data-target="#Contract-1">Ön Bilgilendirme Koşulları</a>'nı ve 
                        <a href="javascript:void(0);" data-toggle="modal" data-target="#Contract-2">Mesafeli Satış Sözleşmesi</a>'ni Okudum. Onaylıyorum.
                    </label>
                </div>
                <div class="form-container">
                    <a href="javascript:void(0);" onclick="kartSiparisiTamamla()" class="form-link">Siparişi Tamamla</a>
                </div>
            </div>
        </div>
    </div>
</section>

<div id="Contract-1" class="contract-read-modal modal fade" role="dialog">
    <div class="modal-dialog modal-md">
        <div class="modal-content">
            <div class="modal-body">
                <button type="button" class="close" data-dismiss="modal"><span class="icon-ifa fa fa-times"></span></button>
                <h4 class="modal-title">Ön Bilgilendirme Koşulları</h4>
                <div class="modal-content-p">
                    <?php $this->load->view('forms/on_bilgilendirme',(object)array('cargo' => $cargo,'order' => $order)); ?>
                </div>
            </div>
        </div>
    </div>
</div>

<div id="Contract-2" class="contract-read-modal modal fade" role="dialog">
    <div class="modal-dialog modal-md">
        <div class="modal-content">
            <div class="modal-body">
                <button type="button" class="close" data-dismiss="modal"><span class="icon-ifa fa fa-times"></span></button>
                <h4 class="modal-title">Mesafeli Satış Sözleşmesi</h4>
                <div class="modal-content-p">
                    <?php $this->load->view('forms/mesafeli_satis'); ?>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    $(document).ready(function() {
        $('#ccPayment').click(function(event) {
            $(this).addClass('active');
            $('#transferPayment').removeClass('active');
            $('.transferPayment').removeClass('active');
            $('.ccPayment').addClass('active');
        });
        $('#transferPayment').click(function(event) {
            $(this).addClass('active');
            $('#ccPayment').removeClass('active');
            $('.ccPayment').removeClass('active');
            $('.transferPayment').addClass('active');


        });
    });
</script>