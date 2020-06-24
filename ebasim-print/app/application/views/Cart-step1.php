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
			<div class="col-lg-9">
				<div class="Cart-Wrapper Cart-Step-1">
					<div class="T"><?=$langStatics->sepetinizde?> <strong><?=count($products)?></strong> <?=$langStatics->adetUrunVar?>.</div>
					<div class="CartProductList">
						<?php
						$totalDesignPriceSum = 0;
						$productPriceSum = 0;
						$curShort = '';
						foreach ($products as $key => $val) {
							if ($val->design == 1) {
								$totalDesignPriceSum 	+= $val->creative_price;
							}
							$productPriceSum 		+= $val->price;
							$curShort 				= $val->currency;
						?>
							<div class="CartProduct">
								<div class="DeleteProduct" onclick="ChartProductRemove(<?=$key?>,1)"><i class="fa fa-times" aria-hidden="true"></i></div>
								<div class="row">
									<div class="col">
										<div class="ProductInfo">
											<div class="Img"><img src="<?=TimbThumb(site_url($val->default_image),'100x100')?>" alt="<?=$val->product_name?>" onerror="this.onerror=null;this.src='assets/fake/100x100.png';"></div>
											<div class="Text">
												<p class="ProductName"><?=$val->product_name?></p>
												<p><strong><?=$langStatics->TasarimHizmeti?> :</strong> <?=($val->design == 0?$langStatics->yok:$langStatics->var)?></p>
												<?php foreach ($val->variants as $key2 => $val2) { ?>
													<p><?=$val2->variant_name?> : <?=$val2->variant_child_name?></p>
												<?php } ?>
											</div>
										</div>
									</div>
									<div class="col">
										<div class="ProductOption">
											<?php 
											if ($val->product_id != 151 ) { ?>
											<div class="Design" onclick="" data-toggle="modal" data-target="#DesignControlModal_<?=$key?>"><?=$langStatics->TasarimTercihi?></div>
											<?php } ?>
											<!--
											<div class="FormElements">
								        		<select name="" id="Country">
								        			<option value="1" selected="selected">2000 Adet</option>
								        			<option value="2">4000 Adet</option>
								        			<option value="2">6000 Adet</option>
								        		</select>
								        	</div>
								        	-->
								        	<div class="Unit"><?=$langStatics->BirimFiyati?> : <?=($val->design == 1?floatval($val->price+$val->creative_price):floatval($val->price))?> <?=$val->currency?></div>



								        	<!-- Tasarım var/yok -->
											<div class="modal fade globalModal" id="DesignControlModal_<?=$key?>" tabindex="-1" role="dialog" aria-hidden="true">
												<div class="modal-dialog" role="document">
													<div class="modal-content">
														<div class="modal-body">
															<button type="button" class="close" data-dismiss="modal" aria-label="Close"><i class="fa fa-times" aria-hidden="true"></i></button>
															<div class="DesignControl">
																<div class="Title mt-0"><?=$langStatics->TasarimTercihi?></div>

																<div class="row">
																	<div class="col-lg-6">
																		<div class="SelectItem" onclick="ChangeCartProductDesignStatus(0,<?=$key?>)" data-dismiss="modal" aria-label="Close">
																			<div class="Img"><img src="<?=site_url('assets/Front/')?>images/Icons/upload-file.png" alt="Tasarımım var ebasim.com"></div>
																			<p><?=$langStatics->TasarimVar?></p>
																		</div>
																		<p class="Info"><?=$langStatics->TasarimVarAciklama?></p>
																	</div>
																	<div class="col-lg-6">
																		<div class="SelectItem" data-dismiss="modal" data-toggle="modal" data-target="#DesignContractModal_<?=$key?>" >
																			<div class="Img"><img src="<?=site_url('assets/Front/')?>images/Icons/edit-tools.png" alt="Tasarım yükleyeceğim ebasim.com"></div>
																			<p><?=$langStatics->TasarimYapalim?></p>
																		</div>
																		<p class="Info"><?=$langStatics->TasarimYapalimAciklama?></p>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
											<!-- Tasarım var/yok kontrat -->
											<div class="modal fade globalModal" id="DesignContractModal_<?=$key?>" tabindex="-1" role="dialog" aria-hidden="true">
												<div class="modal-dialog modal-lg" role="document">
													<div class="modal-content">
														<div class="modal-body">
															<button type="button" class="close" data-dismiss="modal" aria-label="Close"><i class="fa fa-times" aria-hidden="true"></i></button>
															<div class="DesignContract">
																<div class="Title mt-0"><?=$langStatics->TasarimYapalimAnaBaslik?></div>

																<p><?=$langStatics->TasarimYapalimAnaAciklama1?></p>

																<div class="T"><?=$langStatics->TasarimYapalimBaslik2?></div>
																<?=$langStatics->TasarimYapalimAciklama2?>

																<div class="T"><?=$langStatics->TasarimYapalimBaslik3?></div>
																<p><?=$langStatics->TasarimYapalimAciklama3?></p>

																<div class="T"><?=$langStatics->TasarimYapalimBaslik4?></div>

																<?=$langStatics->TasarimYapalimAciklama4?>
															</div>
														</div>
														<div class="modalBottom">
															<div class="Left">
																<div class="DesignPrice">
																	<div class="DesignTitle"><?=$langStatics->tasarimUcreti?> :</div>
																	<p><?=$val->creative_price?> <?=$val->currency?></p>
																</div>
															</div>
															<div class="Right">
																<button class="Btn Blue-d" onclick="ChangeCartProductDesignStatus(1,<?=$key?>)" data-dismiss="modal" aria-label="Close">
																	<?=$langStatics->kabulVeSepet?> <i class="fa fa-angle-right" aria-hidden="true"></i>
																</button>
															</div>
														</div>

													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						<?php } ?>
					</div>
					<div class="CouponCode">
						<div class="Box">
							<input type="text" class="CouponInput" placeholder="Kupon Kodunuz">
							<button onclick="kuponEkle($('.CouponInput').val())" class="Btn"><?=$langStatics->KuponEkle?></button>
						</div>
							<p class="CouponResult OK" style="display: none;"><?=$langStatics->KuponOk?></p>
							<p class="CouponResult NO" style="display: none;"><?=$langStatics->KuponNo?></p> 
					</div>
				</div>
			</div>
			<div class="col-lg-3">
				<div class="Addition-Wrapper">
					<div class="Addition">
						<div class="Title"><?=$langStatics->SiparisOzeti?></div>

						<div class="PriceList">
							<div class="Item">
								<span class="Left"><?=$langStatics->araToplam?></span>
								<span class="Right"><?=number_format(floatval($productPriceSum)/1.18, 2, ',', '.')?> <?=$curShort?></span>
							</div>
							<div class="Item">
								<span class="Left"><?=$langStatics->kdv18?></span>
								<span class="Right"><?=number_format(floatval($productPriceSum-$productPriceSum/1.18), 2, ',', '.') ?> <?=$curShort?></span>
							</div>
							<div class="Item">
								<span class="Left"><?=$langStatics->PriceKargo?></span>
								<span class="Right">Bedava</span>
							</div>
							<div class="Item">
								<span class="Left"><?=$langStatics->TasarimBedeli?></span>
								<span class="Right"><?=number_format(floatval($totalDesignPriceSum),2,',','.')?> <?=$curShort?></span>
							</div>
							<div class="Item">
								<span class="Left"><?=$langStatics->indirim?></span>
								<span class="Right"><span class="discountPrice"><?=number_format(floatval($discount),2,',','.')?></span> <?=$curShort?></span>
							</div>
						</div>

						<div class="Total">
							<span><?=$langStatics->TahsilTutari?></span>
							<p><span class="FinalPrice"><?=number_format(floatval(($productPriceSum+$totalDesignPriceSum)-$discount),2,',','.')?></span> <?=$curShort?></p>
						</div>
					</div>

					<a onclick="ChartStep2()" class="Btn Blue-d"><?=$langStatics->sonrakiAdim?> <i class="fa fa-angle-right" aria-hidden="true"></i></a>
					<a href="<?=site_url()?>" class="Btn White-d"><?=$langStatics->AnasayfayaDon?></a>
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
					<div><img src="<?=site_url('assets/Front/')?>images/Banks/bank1.png" alt="ebasim.com banka logo"></div>
					<div><img src="<?=site_url('assets/Front/')?>images/Banks/bank2.png" alt="ebasim.com banka logo"></div>
					<div><img src="<?=site_url('assets/Front/')?>images/Banks/bank3.png" alt="ebasim.com banka logo"></div>
					<div><img src="<?=site_url('assets/Front/')?>images/Banks/bank4.png" alt="ebasim.com banka logo"></div>
					<div><img src="<?=site_url('assets/Front/')?>images/Banks/bank5.png" alt="ebasim.com banka logo"></div>
					<div><img src="<?=site_url('assets/Front/')?>images/Banks/bank6.png" alt="ebasim.com banka logo"></div>
					<div><img src="<?=site_url('assets/Front/')?>images/Banks/bank7.png" alt="ebasim.com banka logo"></div>
					<div><img src="<?=site_url('assets/Front/')?>images/Banks/bank8.png" alt="ebasim.com banka logo"></div>
				</div>
				<div class="Copyright"><?=$langStatics->footerAltCopyright?></div>
			</div>
		</div>
	</div>
</div>



<script>
	
function ChartStep2() {

	if (getCookie('token')!="") {
		var key = $('.CouponInput').val();
		$.ajax({
	        type: "POST",
	        url: base_url+'Services/ConfirmCart/',
	        dataType:'json',
	        data : {key:key},
	        success: function(data) {
	        	if (data == true) {
	        		window.location = base_url+"Cart/Design";
	        	}
	        }
	    });
	}else{
		$('#LoginOlmakSart').trigger('click');
	}
}

</script>

<div id="LoginOlmakSart" data-toggle="modal" data-target="#modalLoginOl"></div>
<!-- Üye Ol -->
<div class="modal fade globalModal" id="modalLoginOl" tabindex="-1" role="dialog" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-body">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><i class="fa fa-times" aria-hidden="true"></i></button>
				<div class="DesignControl">
					<div class="Title mt-0"><?=$langStatics->UyelikGerekli?></div>
					<div class="row">
						<div class="col-6">
							<div class="SelectItem" onclick="window.location = '<?=site_url('giris')?>'">
								<div class="Img"><img src="<?=site_url('assets/Front/')?>images/Icons/upload-file.png" alt="ebasim.com Resim yükleyeceğim"></div>
								<p><?=$langStatics->girisYap?></p>
							</div>
						</div>
						<div class="col-6">
							<div class="SelectItem" onclick="window.location = '<?=site_url('kayit')?>'">
								<div class="Img"><img src="<?=site_url('assets/Front/')?>images/Icons/edit-tools.png" alt="Tasarımım var ebasim"></div>
								<p><?=$langStatics->kayitOl?></p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>