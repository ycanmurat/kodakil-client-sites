  <div class="clearfix"></div>
  <section class="page-header-container">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h1 class="page-header-title">PROEJELER</h1>
        </div>
      </div>
    </div>
  </section>
  <section class="projects">
    <div class="projects-container">
      <div class="container">
        <div class="row">
          <?foreach ($galery as $key => $info) {?>
          <div class="col-md-6">
            <div class="projects-content">
              <a href="<?=site_url('/projeler/'.$info->slug_url)?>" class="project-link" title="" style="background-image: url('<?=site_url($info->image_url)?>')">
                <img src="<?=site_url($info->image_url)?>" class="project-img" alt="">
                <span><?=$info->image_title?></span>
              </a>
            </div>
          </div>
          <?}?>
        </div>
      </div>
    </div>
  </section>

  <section class="home-reference" style="background-color: #fef4e8;">
    <div class="home-reference-container">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="reference-body" style="background-color: #fff;">
              <div class="home-reference-desktop owl-carousel owl-theme">
                <?php foreach ($referances as $key => $val) { ?>
                  <div class="item">
                    <a href="#" title="<?=$val->referances_title?>" class="item-link" style="background-image: url(<?=site_url($val->referances_image)?>)">
                      <img src="<?=site_url($val->referances_image)?>" alt="<?=$val->referances_title?>" style="opacity:0;">
                    </a>
                  </div>
                <?php } ?>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>