  <section class="concept-virtual">
    <div class="panorama">
      <img src="<?=site_url($products[0]->panaroma_image)?>">
     </div>
  </section>

  <section class="concepts-detail">
    <div class="concepts-container">
      <div class="container">
        <div class="row">

          <?php foreach ($products as $key => $val) { ?>
            <div class="col-md-4 col-sm-6">
              <div class="concepts-detail-content">
                <a href="<?=site_url($val->image)?>" class="concepts-detail-link" title="<?=$val->name?>" data-title="<?=$val->name?>"
                  data-lightbox="roadtrip" style="background-image: url('<?=site_url($val->image)?>')">
                  <img src="<?=site_url($val->image)?>" class="concepts-detail-img" alt="<?=$val->name?>">
                </a>
              </div>
            </div>
          <?php } ?>

        </div>
      </div>
    </div>
  </section>