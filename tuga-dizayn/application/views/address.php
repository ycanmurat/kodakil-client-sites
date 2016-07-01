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
<section class="address-container">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="Cart_Content">
                    <div class="T">Adres Bilgileri</div>

                    <div class="row">
                        <div class="col-md-12 allContents"></div>
                        <div class="col-md-6">
                            <div class="form-container">
                                <label class="form-label">Ad*</label>
                                <input type="text" class="form-input" id="name" autocomplete="off" placeholder="Adınız"> 
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-container">
                                <label class="form-label">Soyad*</label>
                                <input type="text" class="form-input"  id="last_name" autocomplete="off" placeholder="Soyadınız"> 
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-container">
                                <label class="form-label">Cep Telefonu*</label>
                                <input type="text" class="form-input"  id="gsm" autocomplete="off" placeholder="Telefon Numaranız"> 
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-container">
                                <label class="form-label">E-Posta*</label>
                                <input type="text" class="form-input" id="email" autocomplete="off" placeholder="E-posta Adresiniz"> 
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-container">
                                <label class="form-label">Şehir*</label> 
                                <select id="city" class="form-select"  autocomplete="new-password">
                                    <option value="0">Şehir Seçin</option>
                                    <?php foreach ($city as $key => $val) { ?>
                                        <option value="<?=$val->id?>"><?=$val->name?></option>
                                    <?php } ?>

                                </select>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-container">
                                <label class="form-label">İlçe*</label>       
                                <select id="town" class="form-select" autocomplete="new-password">
                                    <option value="0">İlçe</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-container">
                                <label class="form-label">Posta Kodu</label>
                                <input id="postCode" type="text" class="form-input" autocomplete="off" placeholder="Posta Kodu"> 
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-container">
                                <label class="form-label">Adres*</label>
                                <textarea class="form-input" rows="8" autocomplete="off" id="address"></textarea>
                            </div>
                        </div>
                        <div class="col-md-12 text-right">
                            <a href="javascript:void(0)" onclick="addAddressForOrder()" class="form-link">Kaydet ve Devam Et</a>
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
                                <?php if ($this->cart->total() >= $cargo->min_price) { $cargo = 0;?>
                                    Ücretsiz
                                <?php }else{ $cargo = $cargo->price; ?>
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
            </div>
        </div>
    </div>
</section>

<script>
    
</script>