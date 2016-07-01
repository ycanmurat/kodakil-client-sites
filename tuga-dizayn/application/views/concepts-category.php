  <div class="clearfix"></div>
  <section class="page-header-container">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h1 class="page-header">KONSEPT</h1>
        </div>
      </div>
    </div>
  </section>
  <section class="concepts">
    <div class="concepts-container">
      <div class="container">        
        <div class="row">
          <?php foreach ($concepts as $key => $val) { ?>
            <div class="col-md-4 col-sm-6">
              <div class="concepts-content">
                <a href="<?=site_url('konseptler/'.$val->slug)?>" class="concepts-link" title="<?=$val->name?>" data-title="PROJE FOTOĞAFI" style="background-image: url('<?=site_url($val->image)?>')">
                  <img src="<?=site_url($val->image)?>" class="concepts-img" alt="<?=$val->name?>">
                  <div class="concepts-detail">
                    <span><?=$val->name?></span>
                  </div>
                </a>
              </div>
            </div>
          <?php } ?>
        </div>
      </div>
    </div>
  </section>