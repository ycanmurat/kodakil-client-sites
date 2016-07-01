<div class="clearfix"></div>
<section class="page-header-container">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h4 class="product-detail-title"><?=$product->product_name?></h4>
                <div class="product-detail-price">
                    <?php if ($product->liste_price > $product->satis_price) { ?>
                        <div class="product-old-price"><?=$product->liste_price?> TL</div>
                    <?php } ?>
                    <div class="product-new-price"><?=$product->satis_price?> TL</div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="product-detail">
    <div class="product-detail-container top">
        <div class="container">
            <div class="row">
                <div class="col-md-7">
                    <div class="product-detail-slider owl-carousel owl-theme">
                        <?php foreach ($product->images as $key => $val) { ?>
                            <div class="item">
                             <a href="<?=site_url($val->name)?>" class="project-link" title="" data-title="" data-lightbox="roadtrip">   
                                <img src="<?=site_url($val->name)?>" alt="">
                            </a>
                        </div>
                    <?php } ?>
                </div>
            </div>
            <div class="col-md-5">
                <div class="product-detail-info">
                    <h4 class="product-detail-title"><?=$product->product_name?></h4>
                    <div class="product-detail-price">
                        <?php if ($product->liste_price > $product->satis_price) { ?>
                            <div class="product-old-price"><?=$product->liste_price?> TL</div>
                        <?php } ?>
                        <div class="product-new-price"><span CD="NewPrice"><?=$product->satis_price?></span> TL</div>
                    </div>
                    <div class="inputGroup">
                        <select hidden>
                            <option value="Seçiniz">Seçiniz</option>
                            <option value="Seçiniz">Lorem ipsum</option>
                        </select>
                        <select hidden>
                            <option value="Seçiniz">Seçiniz</option>
                            <option value="Seçiniz">Lorem ipsum</option>
                        </select>
                    </div>
                    <div class="btn-group">
                        <a href="javascript:void(0)" onclick="addToCart('<?=$product->Id?>','<?=$product->product_name?>',<?=$product->satis_price?>,'<?=$product->product_image?>')" class="add-card-link">Sepete Ekle</a>
                        <a href="https://api.whatsapp.com/send?phone=90555 000 00 00&text=Sipariş Vermek İstiyorum. <?=site_url('urun/'.$product->slug)?>" target="_blank" class="add-share-link">Whatsapp Sipariş</a>
                    </div>
                </div>
                <div class="product-detail-info info-tab">
                    <ul class="nav nav-tabs">
                        <li class="active"><a data-toggle="tab" href="#product-description">Açıklama</a></li>
                        <li><a data-toggle="tab" href="#product-installment" onclick="productInstallments('<?=$product->satis_price?>')">Taksit Seçenekleri</a></li>
                    </ul>  
                </div>
                <div class="product-detail-info info-content">
                    <div class="tab-content">
                        <div id="product-description" class="tab-pane fade in active">   
                            <div class="description-card">
                                <div class="row">
                                    <div class="col-md-12">
                                        <?=$product->product_info?>
                                    </div>
                                </div>

                            </div>                                  
                        </div>
                        <div id="product-installment" class="tab-pane fade">
                            <div class="product-installment-card">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="product-installment-list">

                                        </div>                                            
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>       
    </div>
</div>
</section>