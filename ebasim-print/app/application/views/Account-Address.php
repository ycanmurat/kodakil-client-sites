			  	<div class="col-lg-9">
			  		<div class="PageTitle"><?=$langStatics->Adreslerim?></div>
			  		<?php if ($address == false){ ?>
			  		<p class="alert alert-danger"><?=$langStatics->sistemdeKayitliAdresYok?></p>
			  		<?php } else {
					//prex($address);
			  		$default_count = 0;
			  		$other_count = 0;
			  		$adres_count = count($address);
			  		$lastkey = 0;

					foreach ($address as $key => $val): ?>
			  		<?php if ($val->default == 1) {
			  			$default_count++;
			  			$lastkey = $key;
			  		?>
			  		<div class="Area Profile-Addresses">
			  			<div class="SubTitle"><?=$langStatics->birincilAdresim?></div>
			  			<div class="Wrapper">
			  				<div class="AdressBox Varsayilan">
			  					<div class="row">
			  						<div class="col-lg-7">
			  							<div class="AdressName"><?=$val->definition?></div>
			  							<?php
			  							if ((int)$val->country != 212) {
			  								$val->CityName = $val->city;
			  								$val->CountyName = $val->town;
			  							} else {
			  								$val->CityName = $val->CityName;
			  								$val->CountyName = $val->CountyName;
			  							}
			  							?>
			  							<p><?=$val->content?></p>
			  							<p><?=$val->CountyName?> / <?=$val->CityName?> <?=$val->post_code?> - <?=strtoupper($val->CountryName)?></p>
			  							<p><?=$val->gsm?></p>
			  						</div>
			  						<div class="col-lg-5">
			  							<div class="BtnBox">
			  								<button data-toggle="modal" data-target="#AddressEditModal<?=$val->Id?>" class="Btn Blue-d AccountUpdateButton noclick"><?=$langStatics->duzenleButonYazi?></button>
			  								<button class="Btn Red-d" onclick="AccountAddressRemove(this, <?=$val->Id?>)"><?=$langStatics->silButonYazi?></button>
			  							</div>
			  						</div>
			  					</div>
			  				</div>
			  				
			  			</div>
			  		</div>
			  		<?php } else { ?>
			  		<?php
			  		if ($default_count > 0) {
			  			if ($adres_count != $default_count) {
			  				$other_count = $adres_count-$default_count;
			  				if ($other_count > 0) {
			  					if ($lastkey+1 == $key) {
			  					?>
			  				
			  		<div class="Area Profile-Addresses">
			  			<div class="SubTitle"><?=$langStatics->digerAdreslerim?></div>
			  			<div class="Wrapper">
			  		<?php
			  					}
			  				}?>

			  				<div class="AdressBox">
			  					<div class="row">
			  						<div class="col-lg-7">
			  							<div class="AdressName"><?=$val->definition?></div>
			  							<?php
			  							if ((int)$val->country != 212) {
			  								$val->CityName = $val->city;
			  								$val->CountyName = $val->town;
			  							} else {
			  								$val->CityName = $val->CityName;
			  								$val->CountyName = $val->CountyName;
			  							}
			  							?>
			  							<p><?=$val->content?></p>
			  							<p><?=$val->CountyName?> / <?=$val->CityName?> <?=$val->post_code?> - <?=strtoupper($val->CountryName)?></p>
			  							<p><?=$val->gsm?></p>
			  						</div>
			  						<div class="col-lg-5">
			  							<div class="BtnBox">
			  								<button onclick="window.location = '<?=site_url('hesabim/varsayilan-yap/'.$val->Id)?>'" class="Btn Green-d"><?=$langStatics->varsayilanYapButonYazi?></button>
			  								<button data-toggle="modal" data-target="#AddressEditModal<?=$val->Id?>" class="Btn Blue-d noclick"><?=$langStatics->duzenleButonYazi?></button>
			  								<button class="Btn Red-d" onclick="AccountAddressRemove(this, <?=$val->Id?>)"><?=$langStatics->silButonYazi?></button>
			  							</div>
			  						</div>
			  					</div>
			  				</div>
			  				<?php
			  			}
			  		}
			  		if (($adres_count-1) == $key) { ?>
			  			</div>
			  		</div>
			  		<?php } ?>
			  		<?php } ?>
			  		<?php endforeach ?>
			  		<?php } ?>
					<div class="BtnBox text-lg-right text-center">
	  					<button data-toggle="modal" data-target="#AddressEditModal0" class="Btn Green-d newaddressclick"><?=$langStatics->yeniAdresEkleButonYazi?></button>
	  				</div>
			  	</div>
		</div>
	</div>
</section>

<!-- AddressEditModal -->
<?php if ($address): ?>
	<?php foreach ($address as $key => $val): ?>

<div class="modal fade globalModal AccountAddressModal" id="AddressEditModal<?=$val->Id?>" data-corp="<?=$val->corporate?>" tabindex="-1" role="dialog" aria-hidden="true">
	<div class="modal-dialog modal-lg prel AddressLoad" role="document">
		<div class="modal-content">
			<div class="modal-body p-sm-5">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><i class="fa fa-times" aria-hidden="true"></i></button>
				<form class="UpdateAddressForm" id="ThisAddressForm<?=$val->Id?>" action="<?=site_url('hesabim/adres-guncelle')?>" method="POST">
					<input type="hidden" name="addressno" value="<?=$val->Id?>">
					<div class="Area NewAdressBox" style="">
						<div class="row mb-3">
							<div class="col-auto mr-auto">
								<div class="Title m-0 p-0"><?=$langStatics->adresBilgileri?></div>
							</div>
							<div class="col-auto">
								<div class="FormElements mb-0">
									<div class="checkboxGroup">
										<input type="checkbox" name="addressCorporate" id="KurumsalAdresCheckbox<?=$val->Id?>" class="KurumsalAdresCheckbox">
										<label for="KurumsalAdresCheckbox<?=$val->Id?>"><?=$langStatics->kurumsalCheck?></label>
									</div>
								</div>
							</div>
						</div>
						<div class="NewAdress">
							<div class="row">
								<div class="col-12">
									<div class="FormElements">
										<label for="adresBaslik"><?=$langStatics->adresFormBaslik?> *</label>
										<input type="text" name="addressDefinition" id="adresBaslik" value="<?=$val->definition?>" required>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-lg-12 col-md-12">
									<div class="FormElements">
										<label for="adresAdsoyad"><?=$langStatics->kayitOlAd?> <?=$langStatics->kayitOlSoyad?>*</label>
										<input type="text" name="addressName" id="adresAdsoyad" value="<?=$val->name?>" required>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-lg-6 col-md-6">
									<div class="FormElements">
										<label for="Tel"><?=$langStatics->formCep?> *</label>
										<input type="text" name="addressTel" id="Tel" value="<?=$val->gsm?>" required>
									</div>
								</div>
								<div class="col-lg-6 col-md-6">
									<div class="FormElements">
										<label for="PostaK"><?=$langStatics->formPostaKodu?> *</label>
										<input type="text" name="addressPost" id="PostaK" value="<?=$val->post_code?>" required>
									</div>
								</div>
							</div>
							<div class="row">
								
								<div class="col-lg-6">
									<div class="FormElements">
										<label for="AccountAddresCountry"><?=$langStatics->formUlke?> *</label>
										<select id="AccountAddresCountry" name="addressCountry" required>
											<?php foreach ($countries as $key => $co_val): ?>
												<?php //pre($co_val); ?> 
												<option value="<?=$co_val->CountryID?>" <?=($co_val->CountryID == $val->country) ? 'selected="true"' : '' ?>><?=$co_val->CountryName?></option>
											<?php endforeach ?>
										</select>
									</div>
								</div>
								<div class="col-lg-6">
									<div class="FormElements FormCity">
										<label for="AccountAddressCity"><?=$langStatics->formIl?> *</label>
										<?php if ($val->country == 212) { ?>
										<select id="AccountAddressCity" name="addressCity" required>
											<?php foreach ($cities as $key => $ci_val): ?>
											<option value="<?=$ci_val->CityID?>" <?=($ci_val->CityID == $val->city) ? 'selected="true"' : '' ?>><?=$ci_val->CityName?></option>
											<?php endforeach ?>
										</select>
										<?php } else { ?>
										<input type="text" name="addressCity" value="<?=$val->city?>" required>
										<?php } ?>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-lg-6">
									<div class="FormElements FormTown" data-town="<?=$val->town?>">
										<label for="AccountAddressTown"><?=$langStatics->formIlce?> *</label>
										<?php if ($val->country != 212): ?>
										<input type="" name="addressTown" id="AccountAddressTown" value="<?=$val->town?>" required>
										<?php endif ?>
									</div>
								</div>
								<div class="col-6">
									<div class="FormElements">
										<label for="TCNO"><?=$langStatics->TCNO?> </label>
										<input type="text" name="addressKimlikNo" value="<?=$val->identity_number?>" id="TCNO">
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-12">
									<div class="FormElements">
										<label for="Adres"><?=$langStatics->formAdres?> *</label>
										<textarea name="addressContent" id="Adres" required><?=$val->content?></textarea>
									</div>
								</div>
							</div>
						</div>
						<div class="NewAdress__invoice" style="display: none;">
							<div class="row">
								<div class="col-12">
									<div class="FormElements">
										<label for="FirmaAdi"><?=$langStatics->kurumsalFirma?> *</label>
										<input type="text" name="addressFirm" value="<?=$val->firm_name?>" id="FirmaAdi">
									</div>
								</div>
								<div class="col-12">
									<div class="FormElements">
										<label for="VergiNumarasi"><?=$langStatics->kurumsalVergiNo?> *</label>
										<input type="text" name="addressTaxNo" value="<?=$val->tax_no?>" id="VergiNumarasi">
									</div>
								</div>
								<div class="col-12">
									<div class="FormElements">
										<label for="VergiDairesi"><?=$langStatics->kurumsalVergiDaire?> *</label>
										<input type="text" name="addressTax" value="<?=$val->tax_admin?>" id="VergiDairesi">
									</div>
								</div>
								<div class="col-12">
									<div class="checkboxGroup">
										<input type="checkbox" name="addressCorporate" id="efatura_<?=$val->Id?>">
										<label for="efatura_<?=$val->Id?>">E-Fatura Mükellefiyim</label>
									</div>
								</div>
							</div>
						</div>

						<div class="Save text-center mt-3">
							<div class="AddressErrors"></div>
							<button type="button" class="Btn closeBtn"><?=$langStatics->vazgecButonYazi?></button>
							<button type="submit" class="Btn Green-d UpdateAddressBtn" data-formid="<?=$val->Id?>"><?=$langStatics->kaydetButonYazi?></i></button>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>

	<?php endforeach ?>
<?php endif ?>

<!-- AddressEditModal -->
<div class="modal fade globalModal AccountAddressModal" id="AddressEditModal0" data-corp="0" tabindex="-1" role="dialog" aria-hidden="true">
	<div class="modal-dialog modal-lg prel AddressLoad" role="document">
		<div class="modal-content">
			<div class="modal-body p-sm-5">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><i class="fa fa-times" aria-hidden="true"></i></button>
				<form class="UpdateAddressForm" id="ThisAddressForm0" action="<?=site_url('hesabim/adreslerim/adres-ekle')?>" method="POST" >
					<div class="Area NewAdressBox" style="">
						<div class="row mb-3">
							<div class="col-auto mr-auto">
								<div class="Title m-0 p-0"><?=$langStatics->adresBilgileri?></div>
							</div>
							<div class="col-auto">
								<div class="FormElements mb-0">
									<div class="checkboxGroup">
										<input type="checkbox" name="addressCorporate" id="KurumsalAdresCheckbox0" class="KurumsalAdresCheckbox">
										<label for="KurumsalAdresCheckbox0"><?=$langStatics->kurumsalCheck?></label>
									</div>
								</div>
							</div>
						</div>
						<div class="NewAdress">
							<div class="row">
								<div class="col-12">
									<div class="FormElements">
										<label for="adresBaslik"><?=$langStatics->adresFormBaslik?> *</label>
										<input type="text" name="addressDefinition" id="adresBaslik" required>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-lg-12 col-md-12">
									<div class="FormElements">
										<label for="adresAdsoyad"><?=$langStatics->kayitOlAd?> <?=$langStatics->kayitOlSoyad?>*</label>
										<input type="text" name="addressName" id="adresAdsoyad" required>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-lg-6 col-md-6">
									<div class="FormElements">
										<label for="Tel"><?=$langStatics->formCep?> *</label>
										<input type="text" name="addressTel" id="Tel" required>
									</div>
								</div>
								<div class="col-lg-6 col-md-6">
									<div class="FormElements">
										<label for="PostaK"><?=$langStatics->formPostaKodu?> *</label>
										<input type="text" name="addressPost" id="PostaK" required>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-lg-6">
									<div class="FormElements">
										<label for="AccountAddresCountry"><?=$langStatics->formUlke?> *</label>
										<select id="AccountAddresCountry" name="addressCountry" required>
											<?php foreach ($countries as $key => $co_val): ?>
												<?php //pre($co_val); ?> 
												<option <?=($co_val->CountryID == 212) ? 'selected="true"' : '' ?> value="<?=$co_val->CountryID?>"><?=$co_val->CountryName?></option>
											<?php endforeach ?>
										</select>
									</div>
								</div>
								<div class="col-lg-6">
									<div class="FormElements FormCity">
										<label for="AccountAddressCity"><?=$langStatics->formIl?> *</label>
										<select id="AccountAddressCity" name="addressCity" required>
											<?php foreach ($cities as $key => $ci_val): ?>
											<option <?=($key == 0) ? 'selected="true"' : '' ?> value="<?=$ci_val->CityID?>"><?=$ci_val->CityName?></option>
											<?php endforeach ?>
										</select>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-lg-6">
									<div class="FormElements FormTown">
										<label for="AccountAddressTown"><?=$langStatics->formIlce?> *</label>
									</div>
								</div>
								<div class="col-6">
									<div class="FormElements">
										<label for="TCNO"><?=$langStatics->TCNO?></label>
										<input type="text" name="addressKimlikNo" id="TCNO">
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-12">
									<div class="FormElements">
										<label for="Adres"><?=$langStatics->formAdres?> *</label>
										<textarea name="addressContent" id="Adres" required></textarea>
									</div>
								</div>
							</div>
						</div>
						<div class="NewAdress__invoice" style="display: none;">
							<div class="row">
								<div class="col-12">
									<div class="FormElements">
										<label for="FirmaAdi"><?=$langStatics->kurumsalFirma?> *</label>
										<input type="text" name="addressFirm" id="FirmaAdi">
									</div>
								</div>
								<div class="col-12">
									<div class="FormElements">
										<label for="VergiNumarasi"><?=$langStatics->kurumsalVergiNo?> *</label>
										<input type="text" name="addressTaxNo" id="VergiNumarasi">
									</div>
								</div>
								<div class="col-12">
									<div class="FormElements">
										<label for="VergiDairesi"><?=$langStatics->kurumsalVergiDaire?> *</label>
										<input type="text" name="addressTax" id="VergiDairesi">
									</div>
								</div>
							</div>
						</div>

						<div class="Save text-center mt-3">
							<div class="AddressErrors"></div>
							<button type="button" class="Btn closeBtn"><?=$langStatics->vazgecButonYazi?></button>
							<button type="submit" class="Btn Green-d AddAddressBtn" data-formid="0"><?=$langStatics->kaydetButonYazi?></button>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
<!-- /AddressEditModal -->

<script>
	$(document).ready(function(){
	    $('#SepetFaturaSecimi').change(function(){
	        if(this.checked)
	            $('.invoiceBox').fadeIn('slow');
	        else
	            $('.invoiceBox').fadeOut('slow');
	    });

	    $('.AccountAddressModal .KurumsalAdresCheckbox').change(function(){
	    	var $parent = $(this).parent().parent().parent().parent().parent();
	    	console.log($parent);
	        if(this.checked) {
	            $parent.find('.NewAdress__invoice').fadeIn('slow');
	            //console.log($parent.find('.NewAdress__invoice input'));
	            $parent.find('.NewAdress__invoice input').each(function(index,val){
	            	$(val).attr('required', 'true');
	            });
	        } else {
	            $parent.find('.NewAdress__invoice').fadeOut('slow');
	            //console.log($parent.find('.NewAdress__invoice input'));
	            $parent.find('.NewAdress__invoice input').each(function(index, val){
	            	$(val).removeAttr('required');
	            });
	        }

	    });

	    $(".newAdressBtn").on("click", function(event) {
		  	$('.NewAdressBox').fadeIn('slow');
		});

		/*$(".resultBtn").on("click", function(event) {
		  	$('.currentAddress').fadeIn('slow');
		  	$('.NewAdressBox').fadeOut('slow');
		});*/

		$(".adressEdit").on("click", function(event) {
		  	$('.NewAdressBox').fadeIn('slow');
		});

		$(".closeBtn").on("click", function(event) {
		  	$(this).parents(".modal").find("button.close").click();
		});

	});
</script>