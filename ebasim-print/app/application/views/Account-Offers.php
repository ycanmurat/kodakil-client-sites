			  	<div class="col-lg-9">
			  		<div class="PageTitle"><?=$langStatics->TekliflerimveTaleplerim?></div>

					

			  		<div class="Area Profile-Offers">
			  			<div class="Wrapper">
			  				<?php if (count($offers) > 0) {
			  					foreach ($offers as $key => $val) {
			  						if ($val->offer_status == 1) {
				  						$offercolor = 'Completed';
				  						$offertext = $langStatics->teklifVerildi;
				  						$offerpdf = '';
				  					} else {
				  						$offercolor = 'Waiting';
				  						$offertext = $langStatics->teklifHazirlaniyor;
				  						$offerpdf = 'Pasif';
				  					}
				  					$offertime = getdmy($val->offer_time);
				  					if ($val->product_name == "") {
				  						$val->product_name = $val->user_offer_name;
				  					}
				  					?>

			  				<div class="OfferItem">
			  					<div class="row">
	  								<div class="col-lg-3 col-md-4 col-sm-4 col-12">
	  									<div class="TextItem">
	  										<div class="B"><?=$val->product_name?></div>
	  										<div class="S"><?=$langStatics->teklifUrun?></div>
	  									</div>
	  								</div>
	  								<div class="col-lg-3 col-md-4 col-sm-3 col-12">
	  									<div class="TextItem">
	  										<div class="B"><?=$offertime?></div>
	  										<div class="S"><?=$langStatics->teklifTarih?></div>
	  									</div>
	  								</div>
	  								<div class="col-lg-3 col-md-4 col-sm-5 col-12">
	  									<div class="TextItem">
		  									<div class="OrderStatus <?=$offercolor?>">
		  										<?=$offertext?>
		  									</div>
		  									<div class="S hidden-xs-down"><?=$langStatics->teklifPdfAciklama?></div>
	  									</div>
	  								</div>
	  								<div class="col-lg-3 col-12 text-lg-right text-center">
	  									<div class="TextItem">
	  										<a href="<?=site_url($val->user_file)?>" class="Btn Green-d <?=$offerpdf?>"><?=$langStatics->pdfIndir?></a>
	  										<button class="Btn Red-d" onclick="AccountOfferRemove(this, <?=$val->id?>)"><?=$langStatics->silButonYazi?></button>
	  									</div>
	  								</div>
	  							</div>
			  				</div>

				  					<?php
			  					}
			  				?>
			  				<?php } else { ?>
			  				<p class="alert alert-info"><?=$langStatics->teklifYok?></p>
			  				<?php } ?>
			  			</div>
			  		</div>

			  		
			  	</div>
		</div>
	</div>
</section>