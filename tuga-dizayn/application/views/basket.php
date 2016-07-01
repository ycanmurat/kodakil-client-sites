<div class="clearfix"></div>
<section class="basket-container">
    <div class="container">
        <div class="row">
            <?php if ($this->cart->contents() == array()) { ?>
                <div class="col-md-12">
                    <div class="empty_cart">
                        <div class="Icon"><i class="icon-ifa fa fa-shopping-cart"></i></div>
                        <div class="T">Sepetinizde Ürün Bulunamadı.</div>
                        <div class="sT">Sepetinize ürün ekleyip güvenle satın alabilirsiniz.</div>
                        <a href="<?=site_url()?>" class="form-link">Alışverişe Başla</a>
                    </div>
                </div>
            <?php }else{ ?>
                <div class="col-md-8">
                     <div class="basket-list">
                         <div class="our-table">
                            <div class="our-tbody">
                                <?php foreach ($this->cart->contents() as $key => $val) { $val = (object)$val; ?>
                                    <div class="our-tr">
                                        <div class="our-td">
                                            <div class="td-image">
                                                <img src="<?=site_url($val->image)?>">
                                            </div>
                                        </div>
                                        <div class="our-td">
                                            <span><?=$val->name?></span>                                         
                                        </div>
                                        <div class="our-td">
                                            <span><?=$val->qty?> Ürün</span>
                                        </div>
                                        <div class="our-td">
                                            <span><?=number_format($val->price,2,'.',',')?> TL</span>
                                        </div>
                                        <div class="our-td">
                                            <a href="javascript:void(0)" onclick="removeCart('<?=$val->rowid?>')">Sil</a>
                                        </div>
                                    </div>
                                <?php } ?>
                            </div>
                        </div> 
                    </div>    
                </div>
                <div class="col-md-4">
                    <div class="addition-card">
                        <div class="form-container">
                            <a href="<?=site_url()?>" class="form-link solid">Alışverişe Devam Et</a>
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
                        <div class="form-container">
                            <a href="<?=site_url('sepet/adres')?>" class="form-link">Sepeti Onayla </a>
                        </div>
                    </div>   
                </div>
            <?php } ?>
        </div>
    </div>
</section>