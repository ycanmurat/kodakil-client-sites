<div class="userHead">
	<div class="container">
		<div class="row">
			<div class="col-lg-3 text-left">
				<a href="<?=site_url()?>" class="Link"><img src="<?=site_url('assets/')?>ebasimlogo.png" alt="ebasim logo"></a>
			</div>
			<div class="col-lg-9">
				<div class="CheckoutList">
					<ul class="List">
						<li class="Item Step1">
							<div class="Box">
								<div class="Icon"><img src="<?=site_url('assets/Front/')?>images/Icons/cartstep1.png" alt="ebasim.com sepet"></div>
								<p class="Text"><?=$langStatics->sepet?></p>
							</div>
						</li>
						<li class="Item Step2">
							<div class="Box">
								<div class="Icon"><img src="<?=site_url('assets/Front/')?>images/Icons/edit-tools.png" alt="ebasim.com düzenle"></div>
								<p class="Text"><?=$langStatics->tasarim?></p>
							</div>
						</li>
						<li class="Item Step3">
							<div class="Box">
								<div class="Icon"><img src="<?=site_url('assets/Front/')?>images/Icons/cartstep3.png" alt="ebasim.com sepet adımları"></div>
								<p class="Text"><?=$langStatics->Adres?></p>
							</div>
						</li>
						<li class="Item Step4">
							<div class="Box">
								<div class="Icon"><img src="<?=site_url('assets/Front/')?>images/Icons/cartstep4.png" alt="ebasim.com sepet adım"></div>
								<p class="Text"><?=$langStatics->odeme?></p>
							</div>
						</li>
						<li class="Item Step5">
							<div class="Box">
								<div class="Icon"><img src="<?=site_url('assets/Front/')?>images/Icons/cartstep5.png" alt="ebasim.com sepet son adım"></div>
								<p class="Text"><?=$langStatics->sonuc?></p>
							</div>
						</li>
					</ul>
					<div class="Divider"></div>
				</div>
			</div>
		</div>
	</div>
</div>


<section class="Pages--Wrapper CartStepPages">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<div class="Cart-Wrapper Cart-Step-2">
							<form action="<?=site_url('sepet/adreslerim')?>" method="POST">
					<div class="T"><?=$langStatics->tasarimAsamasi?></div>
					<div class="Cart-Documents">
						<div id="accordion" role="tablist">
							  	<?php foreach ($products as $key => $val) { ?>
										<div class="card">
										  	<div class="card-header" role="tab">
										      	<a class="Item collapsed" data-toggle="collapse" href="#Documents<?=$key?>" aria-expanded="<?=($key==0?'true':'false')?>" aria-controls="Documents<?=$key?>">
											        <div class="row <?=($key==0?'collapsed':'')?>">
											          	<div class="col-lg-6 col-md-6">
											          		<div class="ProductInfo">
											          			<!--
																	<div class="Img"><img src="<?=($val->product_id != 151?site_url($val->default_image):site_url($productsCookie[$key]->default_image))?>" alt="ebasim.com"></div>
																-->
																	<div class="Img"><img src="<?=site_url('assets/fake/')?>100x100.png" alt="ebasim.com"></div>
																<div class="Text">
																	<?php
																	$adet = 0;
																		foreach ($val->selected_variants as $key2 => $val2) {
																			if ($val2->variant_id == 2) {
																				$adet = $val2->variant_child_name;
																			}
																		}
																	?>
																	<p class="ProductName"><?=($val->product_id != 151?$val->product_title:$productsCookie[$key]->product_name)?> <span class="Num"><?=($adet!=0?$adet.' Adet':'')?></span></p>
																	<?php
																		if ($val->product_id != 151) {
																			foreach ($val->selected_variants as $key2 => $val2) { 
																				if($val2->variant_id != 2){?>
																					<p><?=$val2->variant_name?> : <?=$val2->variant_child_name?></p><br>
																	<?php 		} 
																			}
																		}else{
																			foreach ($productsCookie[$key]->variants as $key2 => $val2) { ?>
																				<p><?=$val2->variant_name?> : <?=$val2->variant_child_name?></p><br>
																	<?php 	}
																		} ?>
																</div>
															</div>
											          	</div>
											          	<div class="col-lg-6 col-md-6 hidden-sm-down">
											          		<?php if ($val->design == 1) { ?>
												          		<div class="Selection">
												          			<p><?=$langStatics->tasarimYapalimHizmeti?></p>
												          			<span><?=$langStatics->tasarimYapalimHizmetiAciklama?></span>
												          		</div>
											          		<?php }else{ ?>
												          		<div class="Selection GG">
												          			<p><?=$langStatics->tasarimYukleHizmeti?></p>
												          			<span><?=$langStatics->tasarimYukleHizmetiAciklama?></span>
												          		</div>
											          		<?php } ?>
											          	</div>
										          	</div>
										      	</a>
										  	</div>
										  	<div id="Documents<?=$key?>" class="collapse <?=($key==0?'show':'false')?>" role="tabpanel" data-parent="#accordion">
										    	<div class="card-body">
										    		<?php if ($val->design == 1) { ?>
											        	<div class="Area">
											        		<div class="Detail">
											        			<div class="Img"><img src="<?=site_url('assets/Front/')?>images/Icons/edit-tools.png" alt="ebasim.com"></div>
											        			<div class="Text">
											        				<?=$langStatics->tasarimYapalimHizmetiKutu?>
											        			</div>
											        		</div>
											        	</div>
									          		<?php } ?>

										        	<div class="Area">
										        		<div class="Title"><?=$langStatics->aciklama?> *</div>
														
														<div class="FormElements">
															<textarea name="text[<?=$val->tempOrderId?>]" placeholder="<?=$langStatics->tasarimYapalimHizmetiPlaceholder?>"></textarea>
														</div>
										        	</div>

										        	<div class="Area">
										        		<div class="row">
										        			<div class="col-lg-auto mr-auto">
										        				<div class="Title"><?=$langStatics->dosyalariniz?> *</div>
										        			</div>
										        			<div class="col-lg-auto">
										        				<div class="Alert">
										        					<?=$langStatics->uploadFileDesc?>
										        				</div>
										        			</div>
										        		</div>

														<div class="FileBox">
											                <div class="demo-section k-content">
											                    <div class="k-widget k-upload k-header k-upload-empty"><div class="k-dropzone"><div class="k-button k-upload-button" aria-label="Dosya Seç"><input name="files_<?=$val->tempOrderId?>[]" class="offerform-empty" id="offerFile" type="file" data-role="upload" multiple="multiple" autocomplete="off"><span><?=$langStatics->dosyaSec?></span></div><em><?=$langStatics->dosyaSurukle?></em></div></div>
											                </div>
											            </div>
										        	</div>
										      	</div>
										  	</div>
										</div>
								<?php } ?>
						</div>
					</div>

					<div class="cartBtnBox">
						<a href="<?=site_url('sepet')?>" class="Btn White-d"><?=$langStatics->oncekiAdim?></a>
						<button type="submit" class="Btn Blue-d"><?=$langStatics->sonrakiAdim?> <i class="fa fa-angle-right" aria-hidden="true"></i></button>
					</div>
	

							</form>

				</div>
			</div>
		</div>
	</div>
</section>



<div class="userBottom">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<div class="Box">
					<a target="_blank" href="<?=site_url()?>hakkimizda" class="Link"><?=$langStatics->FooterMenu2Baskil?></a>
					<a target="_blank" href="<?=site_url()?>siparis-teslimat-ve-iade" class="Link"><?=$langStatics->iade?></a>
					<a target="_blank" href="<?=site_url()?>yardim" class="Link"><?=$langStatics->FooterMenu2Text6?></a>
				</div>
				<div class="Banks">
					<div><img src="<?=site_url('assets/Front/')?>images/Banks/bank1.png" alt="ebasim.com"></div>
					<div><img src="<?=site_url('assets/Front/')?>images/Banks/bank2.png" alt="ebasim.com"></div>
					<div><img src="<?=site_url('assets/Front/')?>images/Banks/bank3.png" alt="ebasim.com"></div>
					<div><img src="<?=site_url('assets/Front/')?>images/Banks/bank4.png" alt="ebasim.com"></div>
					<div><img src="<?=site_url('assets/Front/')?>images/Banks/bank5.png" alt="ebasim.com"></div>
					<div><img src="<?=site_url('assets/Front/')?>images/Banks/bank6.png" alt="ebasim.com"></div>
					<div><img src="<?=site_url('assets/Front/')?>images/Banks/bank7.png" alt="ebasim.com"></div>
					<div><img src="<?=site_url('assets/Front/')?>images/Banks/bank8.png" alt="ebasim.com"></div>
				</div>
				<div class="Copyright"><?=$langStatics->footerAltCopyright?></div>
			</div>
		</div>
	</div>
</div>
