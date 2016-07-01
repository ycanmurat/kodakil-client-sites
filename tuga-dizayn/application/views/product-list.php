<div class="clearfix"></div>
<section class="page-header-container">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <?php if ($category->main_id > 0) { ?>
                    <h4 class="product-list-title"><?=$category->main_name?></h4>
                <?php } ?>
                <h2 class="product-list-title"><?=$category->name?></h2>
                <p class="product-list-content"><?=$category->description?></p>
            </div>
        </div>
    </div>
</section>
<section class="product-list">
    <div class="product-list-container">
        <div class="container">
            <!--
                <div class="row">
                    <div class="product-list-search">
                        <button type="submit" id="product-grid-js" class="prod-grid">
                           <i class="fa fa-th-large" aria-hidden="true"></i>
                        </button>
                        <div class="form-container">
                            <input type="text" class="form-input" id="" autocomplete="off" placeholder="koleksiyon ara"> 
                        </div>                    
                        <button type="submit" id="product-list-js" class="prod-list">
                            <i class="fa fa-bars" aria-hidden="true"></i>
                        </button>                    
                    </div>
                </div>
            -->
            <div id="products" class="row product-list-row">
                <?php foreach ($products as $key => $val) { ?>
                    <div class="item-col col-md-4 col-xs-12">
                        <a href="<?=site_url('urun/'.$val->slug)?>" class="product-card">
                            <img class="product-img" src="<?=site_url($val->product_image)?>" alt="" />
                            <div class="product-info">
                                <h4 class="product-name"><?=$val->product_name?></h4>
                                <div class="product-price">
                                    <?php if ($val->liste_price > $val->satis_price) { ?>
                                        <div class="product-old-price"><?=$val->liste_price?> TL</div>
                                    <?php } ?>
                                    <div class="product-new-price"><?=$val->satis_price?> TL</div>
                                </div>
                            </div>
                        </a>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>
</section>