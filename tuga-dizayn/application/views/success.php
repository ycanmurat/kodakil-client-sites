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
                        <div class="Icon"><i class="fa fa-check-circle" aria-hidden="true"></i></div>
                        <div class="head_t">Her şey yolunda</div>

                        <p>Siparişiniz bize ulaştı.</p>
                        <p>En kısa zamanda yola çıkacaktır.</p>
                    </div>
                    <div class="result_body">
                        <div class="result_info">
                            <div class="T">Sipariş Özeti :</div>

                            <p>Sipariş Numaranız : <b><?=$detail->id?></b></p>
                            <p>Sipariş Adresi : <?=$detail->address?> - <?=$detail->town_name?> / <?=$detail->city_name?></p>
                            <p>Ödeme Şekli : Kredi Kartı / Banka Kartı</p>
                        </div>

                        <div class="result_info">
                            <div class="T">Ürünler :</div>
                            <?php foreach ($detail->lines as $key => $val) { ?>
                                <div class="result-item">
                                    <div class="result-product-info">
                                        <div class="Img"><img src="<?=site_url($val->image)?>" alt=""></div>
                                        <div class="Text-area">
                                            <div class="pName"><?=$val->name?></div>
                                            <div class="badge"><?=$val->qty?> Adet</div>
                                        </div>
                                    </div>
                                    <div class="result-price"><?=number_format($val->price,2,',','.')?> TL</div>                                
                                </div>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>