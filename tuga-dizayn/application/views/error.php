<style>
    header .header-container{
        display:  none;
    }
</style>
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
<section class="payment-success-container">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="cart_result">
                    <div class="result_head">
                        <div class="Icon"><i class="fa fa-times-circle" style="color:red" aria-hidden="true"></i></div>
                        <div class="head_t" style="color:red">Sipariş Başarısız</div>

                        <p>Siparişinizin ödemesi alınırken hata oluştu</p>
                        <p>Bankanın Cevabı : <b><?=$error->errorMessage ?? ''?></b></p>
                        <div class="form-container">
                            <a href="<?=site_url()?>" class="form-link" style="margin-top: 25px;width: 20%;">Anasayfa </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>