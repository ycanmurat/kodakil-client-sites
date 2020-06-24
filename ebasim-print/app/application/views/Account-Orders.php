			  	<div class="col-lg-9">
			  		<div class="PageTitle"><?=$langStatics->Siparislerim?></div>

			  		<?php
			  		if ($orders == false) { ?>
			  		<p class="alert alert-info"><?=$langStatics->siparisYok?></p>
			  		<?php } else { ?>

			  		<div class="PofileAccordion Profile-Orders">
			  			<div id="accordion" role="tablist">
			  				<?php $ordercount = 0; $ordertotalcount = count($orders); ?>
			  				<?php foreach ($orders as $key => $val): 
			  					if ($key != 0 && $ordercount != $val->Id) { ?>
				  						</div>
				  					</div>
				  				</div>
			  					<?php } 
			  					if ($key == 0 || $ordercount != $val->Id) {
			  						?>
			  					<div class="card">
				  					<div class="card-header" role="tab">
				  						<a class="Item collapsed" data-toggle="collapse" href="#order<?=$val->Id?>" aria-expanded="true" aria-controls="order<?=$val->Id?>">
				  							<div class="row">
				  								<div class="col-lg-4 col-sm-4 col-6">
				  									<div class="TextItem">
				  										<div class="B">#<?=$val->Id?></div>
				  										<div class="S"><?=dateparse($val->added_time)?></div>
				  									</div>
				  								</div>
				  								<div class="col-lg-4 col-sm-3 col-6">
				  									<div class="TextItem">
				  										<div class="B"><?=$val->toplam." ".$val->moneycode?></div>
				  										<div class="S"><?=$langStatics->ToplamTutar?></div>
				  									</div>
				  								</div>
				  								<div class="col-lg-4 col-sm-5">
				  									<div class="OrderStatus <?=$orderStatusArr[$val->order_status]['color']?>">
				  										<?=$orderStatusArr[$val->order_status]['text']?>
				  									</div>
				  								</div>
				  							</div>
				  						</a>
				  					</div>
				  					<div id="order<?=$val->Id?>" class="collapse" role="tabpanel" data-parent="#accordion">
				  						<div class="card-body">
			  					<?php } foreach ($val->product_detail as $key2 => $val2) { ?>
			  								<div class="OrderDetail">
				  								<div class="row">
					  								<div class="col-lg-4 col-md-4 col-sm-5 col-12">
					  									<div class="ProductInfo">
					  										<div class="Img">
					  											<!--
						  											<a href="#"><img src="<?=site_url($val2->default_image)?>" alt="<?=$val2->product_name?>"></a>
						  										-->
					  											<a href="#"><img src="<?=site_url('assets/fake/75x75.png')?>" alt="<?=$val2->product_name?>"></a>
					  										</div>
					  										<div class="Text">
					  											<div class="B"><?=$val2->product_name?></div>
					  										</div>
					  									</div>
					  								</div>
					  								<div class="col-lg-2 col-md-3 col-sm-4 col-6">
					  									<div class="TextItem">
					  										<div class="B">
					  											<?php if ($val2->tahmini_kargo) { ?>
					  												<?=$val2->tahmini_kargo?>
					  											<?php }else{ ?>
																	<?=$langStatics->belirsiz?>
					  											<?php } ?>
					  										</div>
					  										<div class="S">Tahmini Kargo</div>
					  									</div>
					  								</div>
					  								<div class="col-lg-2 col-md-3 col-sm-4 col-6">
					  									<div class="TextItem">
					  										<div class="B">
					  											<?php if ($val2->product_status) { ?>
					  												<?=$val2->product_status?>
					  											<?php }else{ ?>
																	<?=$langStatics->belirsiz?>
					  											<?php } ?>
					  										</div>
					  										<div class="S">Kargo Takip No</div>
					  									</div>
					  								</div>
					  								<div class="col-lg-2 col-md-2 col-sm-3 col-6" style="display: none;">
					  									<div class="TextItem">
					  										<div class="B"><?=$langStatics->kargoda?></div>
					  										<div class="S"><a href="javascript:void(0);" data-toggle="modal" data-target="#trackingModal" class="Link"><?=$langStatics->kargoTakibi?></a></div>
					  									</div>
					  								</div>
					  								<div class="col-lg-4 col-md-3 col-12">
					  									<a target="_blank" href="<?=site_url('tasarim-sohbeti/goruntule/'.$val2->Id)?>" class="Orders-Detail-Link"><?=$langStatics->TasarimBaskiOnay?></a>
					  								</div>
					  							</div>
				  							</div>
			  					<?php } if ($key == $ordertotalcount-1): ?>
				  						</div>
				  					</div>
				  				</div>
			  					<?php endif ?>
			  					<?php $ordercount = $val->Id; ?>
			  				<?php endforeach ?>
			  			</div>
			  		</div>

			  		<?php } ?>
			  		
			  	</div>
		</div>
	</div>
</section>