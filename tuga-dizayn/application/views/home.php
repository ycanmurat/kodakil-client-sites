<section class="home-slider">
    <div class="home-slider-container">
        <div class="home-slider-desktop owl-carousel owl-theme">
            <?php foreach ($sliders as $key => $val) { ?>
            <div class="item">
                <a href="/" class="home-slider" title="Tuga Dizayn Slider" style="background-image: url('<?=TimbThumb(site_url($val->picture_info), '1920x700')?>')"></a>
                <a href="/" class="project-detail" title="Tuga Dizayn Ürün İncele">İNCELE</a>
            </div>
            <?php } ?>
        </div>
        <div class="home-slider-mobile owl-carousel owl-theme">
            <?php foreach ($mobilSlider as $key => $val) { ?>
            <div class="item">
                <a href="<?=$val->button_link?>" class="mobile-slider" title="Tuga Dizayn Slider" style="background-image: url('<?=site_url($val->picture_info)?>">
                    <img src="<?=site_url($val->picture_info)?>" class="mobile-slider-img" alt="Tuga Dizayn Slider">
                </a>
            </div>
            <?php } ?>
        </div>
    </div>
</section>
<section class="home-abouts">
    <div class="home-abouts-container">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <!--
                    <div class="abouts-header">
                      <h1><?=$staticAbout->title?></h1>
                    </div>
                    -->
                    <div class="abouts-body">
                      <div class="abouts-content">
                        <?=$staticAbout->content?>
                      </div>
                      <div class="abouts-info">
                          <h1>TUGADİZAYN</h1>
                          <p>Hayal ettiğinizden fazlası...</p>
                      </div>
                      <!--<a href="<?=$staticAbout->link?>" class="abouts-link">Devamını Oku</a>-->
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="home-products">
    <div class="products-item-container">
        <div class="container">
            <div class="item-body">
                <div class="home-products-desktop owl-carousel owl-theme">
                    <?php foreach ($products as $key => $val) { ?>
                    <div class="item">
                        <a href="<?=site_url('urun/'.$val->slug)?>" class="item-img">
                            <img src="<?=TimbThumb(site_url($val->product_image),'360x238')?>" alt="<?=$val->product_name?>" title="<?=$val->product_name?>">
                        </a>
                        <a href="<?=site_url('urun/'.$val->slug)?>" title="<?=$val->product_name?>" class="item-info">
                            <div class="product-name"><?=$val->product_name?></div>
                            <div class="product-price">
                                <?php if ($val->liste_price > $val->satis_price) { ?>
                                <div class="product-old-price"><?=number_format($val->liste_price,2,',','.')?> TL</div>
                                <?php } ?>
                                <div class="product-new-price"><?=number_format($val->satis_price,2,',','.')?> TL</div>
                            </div>
                        </a>
                    </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="home-project">
    <div class="home-project-container">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="project-header">
                        <h1>MİMARLIK</h1>
                    </div>
                    <div class="project-body">
                        <div class="row">
                            <div class="col-md-6 col-sm-12">
                                <div class="project-left-content">
                                    <div class="row">
                                        <div class="col-md-12 col-sm-12">
                                            <a href="<?=$project->horizontal_picture_link?>" class="project-left-link top" style="background-image: url(<?=TimbThumb(site_url($project->horizontal_picture),'535x250')?>);">
                                                <img src="<?=TimbThumb(site_url($project->horizontal_picture),'535x250')?>" alt="">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="hidden-xs col-md-6 col-sm-6">
                                            <a href="<?=$project->little_picture_one_link?>" class="project-left-link bottom" style="background-image: url(<?=TimbThumb(site_url($project->little_picture_one),'252x142')?>);">
                                                <img src="<?=TimbThumb(site_url($project->little_picture_one),'252x142')?>" alt="">
                                            </a>
                                        </div>
                                        <div class="hidden-xs col-md-6 col-sm-6">
                                            <a href="<?=$project->little_picture_two_link?>" class="project-left-link bottom" style="background-image: url(<?=TimbThumb(site_url($project->little_picture_two),'252x142')?>);">
                                                <img src="<?=TimbThumb(site_url($project->little_picture_two),'252x142')?>" alt="">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="hidden-sm col-md-6">
                                <div class="project-right-content">
                                    <div class="row">
                                        <div class="hidden-xs col-md-12">
                                            <a href="<?=$project->big_picture_link?>" class="project-right-link" style="background-image: url(<?=TimbThumb(site_url($project->big_picture),'535x530')?>);">
                                                <img src="<?=TimbThumb(site_url($project->big_picture),'535x530')?>" alt="">
                                            </a>
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

<!--
<div id="popup" class="popup-modal modal fade" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">            
            <div class="modal-body">
                <button type="button" class="close" data-dismiss="modal"><span class="icon-ifa fa fa-times"></span></button>
                <div class="popup-img">
                    <img src="<?=site_url('assets/Front/')?>images/cargo-pop-1.png?V=1" alt="" style="width: 100%;">
                </div>                
            </div>
        </div>
    </div>
</div>
-->


<script type="text/javascript">  
   	/*
    $(window).on('load',function(){
        $('#popup').modal('show');
    });

    $(".popup-modal .close").click(function(){
        $.cookie("popup", "0");
    });
    */
</script>