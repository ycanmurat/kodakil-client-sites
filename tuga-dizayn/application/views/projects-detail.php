  <div class="clearfix"></div>
  <section class="page-header-container">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h1 class="page-header-title"><?=$detail->image_title?></h1>
        </div>
      </div>
    </div>
  </section>
  <section class="projects-detail-container">
    <div class="container">
      <div class="row"> 
        
        <?php foreach ($detail->sub as $key => $val) { ?>
          <div class="col-md-6">
            <div class="projects-card">
              <a href="<?=site_url($val->image_url)?>" class="project-link" title="<?=$val->image_title?>" data-title="<?=$val->image_title?>" data-lightbox="roadtrip" style="background-image: url('<?=site_url($val->image_url)?>');">              
                <img src="<?=site_url($val->image_url)?>" alt="">
              </a>
            </div>
          </div>
        <?php } ?>
      </div>
    </section>
