<div class="userHead">
	<div class="container">
		<div class="row">
			<div class="col-lg-3 text-left">
				<a href="<?=site_url()?>" class="Link"><img src="<?=site_url('assets/')?>images/ebasim.png" alt="ebasim logo"></a>
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
				<div class="Cart-Wrapper Cart-Step-3">
					<div class="T">Adres Seçimi</div>
					<div class="AccountAddressModal" id="AddressEditModal0" data-corp="0" style="display: none;">
						<form class="UpdateAddressForm" id="ThisAddressForm0" action="<?=site_url('hesabim/adreslerim/adres-ekle')?>" method="POST">
							<div class="Area NewAdressBox">
								<div class="row mb-3">
									<div class="col-auto mr-auto">
										<div class="Title m-0 p-0">Adres Bilgileri</div>
									</div>
									<div class="col-auto">
										<div class="FormElements mb-0">
											<div class="checkboxGroup">
												<input type="checkbox" name="addressCorporate" id="KurumsalAdresCheckbox0" class="KurumsalAdresCheckbox">
												<label for="KurumsalAdresCheckbox0">Kurumsal</label>
											</div>
										</div>
									</div>
								</div>
								<div class="NewAdress">
									<div class="row">
										<div class="col-12">
											<div class="FormElements">
												<label for="adresBaslik">Başlık *</label>
												<input type="text" name="addressDefinition" id="adresBaslik" required>
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-lg-12">
											<div class="FormElements">
												<label for="adresAdsoyad">Ad Soyad*</label>
												<input type="text" name="addressName" id="adresAdsoyad" required>
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-lg-6">
											<div class="FormElements">
												<label for="Tel">Cep Telefonu *</label>
												<input type="text" name="addressTel" id="Tel" required>
											</div>
										</div>
										<div class="col-lg-6">
											<div class="FormElements">
												<label for="PostaK">Posta Kodu *</label>
												<input type="text" name="addressPost" id="PostaK" required>
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-lg-6">
											<div class="FormElements">
												<label for="AccountAddresCountry">Ülke *</label>
												<select id="AccountAddresCountry" name="addressCountry" required>
													<?php foreach ($countries as $key => $co_val): ?>
														<?php pre($co_val); ?> 
														<option <?=($co_val->CountryID == 212) ? 'selected="true"' : '' ?> value="<?=$co_val->CountryID?>"><?=$co_val->CountryName?></option>
													<?php endforeach ?>
												</select>
											</div>
										</div>
										<div class="col-lg-6">
											<div class="FormElements FormCity">
												<label for="AccountAddressCity">İl *</label>
											</div>
										</div>
										<div class="col-lg-6">
											<div class="FormElements FormTown">
												<label for="AccountAddressTown">İlçe *</label>
											</div>
										</div>
										<div class="col-lg-6">
											<div class="FormElements">
												<label for="TCNO">TC Kimlik No (Opsiyonel)</label>
												<input type="text" name="addressKimlikNo" id="TCNO">
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-12">
											<div class="FormElements">
												<label for="Adres">Adres *</label>
												<textarea name="addressContent" id="Adres" required></textarea>
											</div>
										</div>
									</div>
								</div>
								<div class="NewAdress__invoice" style="display: none;">
									<div class="row">
										<div class="col-12">
											<div class="FormElements">
												<label for="FirmaAdi">Firma Adı *</label>
												<input type="text" name="addressFirm" id="FirmaAdi">
											</div>
										</div>
										<div class="col-12">
											<div class="FormElements">
												<label for="VergiNumarasi">Vergi Numarası *</label>
												<input type="text" name="addressTaxNo" id="VergiNumarasi">
											</div>
										</div>
										<div class="col-12">
											<div class="FormElements">
												<label for="VergiDairesi">Vergi Dairesi *</label>
												<input type="text" name="addressTax" id="VergiDairesi">
											</div>
										</div>
									</div>
								</div>

								<div class="Save text-center mt-3">
									<div class="AddressErrors"></div>
									<button type="button" class="Btn closeBtn" data-formid="0">Vazgeç</button>
									<button type="submit" class="Btn Green-d AddAddressBtn" data-formid="0">Kaydet</button>
								</div>
							</div>
						</form>
					</div>
					
					<!-- AddressEditModal -->

					<!-- ADRES DÜZENLE -->

					<?php if ($address != false && $istoken != false): ?>
						<?php foreach ($address as $key => $val): ?>

					<div class="AccountAddressModal" id="AddressEditModal<?=$val->Id?>" data-corp="<?=$val->corporate?>" style="display: none;">
						<form class="UpdateAddressForm" id="ThisAddressForm<?=$val->Id?>" action="<?=site_url('hesabim/adres-guncelle')?>" method="POST">
							<input type="hidden" name="addressno" value="<?=$val->Id?>">
							<div class="Area NewAdressBox" style="">
								<div class="row mb-3">
									<div class="col-auto mr-auto">
										<div class="Title m-0 p-0">Adres Bilgileri</div>
									</div>
									<div class="col-auto">
										<div class="FormElements mb-0">
											<div class="checkboxGroup">
												<input type="checkbox" name="addressCorporate" id="KurumsalAdresCheckbox<?=$val->Id?>" class="KurumsalAdresCheckbox">
												<label for="KurumsalAdresCheckbox<?=$val->Id?>">Kurumsal</label>
											</div>
										</div>
									</div>
								</div>
								<div class="NewAdress">
									<div class="row">
										<div class="col-12">
											<div class="FormElements">
												<label for="adresBaslik">Başlık *</label>
												<input type="text" name="addressDefinition" id="adresBaslik" value="<?=$val->definition?>" required>
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-lg-12">
											<div class="FormElements">
												<label for="adresAdsoyad">Ad Soyad*</label>
												<input type="text" name="addressName" id="adresAdsoyad" value="<?=$val->name?>" required>
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-lg-6">
											<div class="FormElements">
												<label for="Tel">Cep Telefonu *</label>
												<input type="text" name="addressTel" id="Tel" value="<?=$val->gsm?>" required>
											</div>
										</div>
										<div class="col-6">
											<div class="FormElements">
												<label for="TCNO">TC Kimlik No (Opsiyonel)</label>
												<input type="text" name="addressKimlikNo" value="<?=$val->identity_number?>" id="TCNO">
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-lg-6">
											<div class="FormElements">
												<label for="AccountAddresCountry">Ülke *</label>
												<select id="AccountAddresCountry" name="addressCountry" required>
													<?php foreach ($countries as $key => $co_val): ?>
														<?php pre($co_val); ?> 
														<option value="<?=$co_val->CountryID?>" <?=($co_val->CountryID == $val->country) ? 'selected="true"' : '' ?>><?=$co_val->CountryName?></option>
													<?php endforeach ?>
												</select>
											</div>
										</div>
										<div class="col-lg-6">
											<div class="FormElements FormCity">
												<label for="AccountAddressCity">İl *</label>
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
										<div class="col-lg-6">
											<div class="FormElements FormTown" data-town="<?=$val->town?>">
												<label for="AccountAddressTown">İlçe *</label>
												<?php if ($val->country != 212): ?>
												<input type="" name="addressTown" id="AccountAddressTown" value="<?=$val->town?>" required>
												<?php endif ?>
											</div>
										</div>
										<div class="col-lg-6">
											<div class="FormElements">
												<label for="PostaK">Posta Kodu *</label>
												<input type="text" name="addressPost" id="PostaK" value="<?=$val->post_code?>" required>
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-12">
											<div class="FormElements">
												<label for="Adres">Adres *</label>
												<textarea name="addressContent" id="Adres" required><?=$val->content?></textarea>
											</div>
										</div>
									</div>
								</div>
								<div class="NewAdress__invoice" style="display: none;">
									<div class="row">
										<div class="col-12">
											<div class="FormElements">
												<label for="FirmaAdi">Firma Adı *</label>
												<input type="text" name="addressFirm" value="<?=$val->firm_name?>" id="FirmaAdi">
											</div>
										</div>
										<div class="col-12">
											<div class="FormElements">
												<label for="VergiNumarasi">Vergi Numarası *</label>
												<input type="text" name="addressTaxNo" value="<?=$val->tax_no?>" id="VergiNumarasi">
											</div>
										</div>
										<div class="col-12">
											<div class="FormElements">
												<label for="VergiDairesi">Vergi Dairesi *</label>
												<input type="text" name="addressTax" value="<?=$val->tax_admin?>" id="VergiDairesi">
											</div>
										</div>
									</div>
								</div>

								<div class="Save text-center mt-3">
									<div class="AddressErrors"></div>
									<button type="button" class="Btn closeBtn" data-formid="<?=$val->Id?>">Vazgeç</button>
									<button type="submit" class="Btn Green-d UpdateAddressBtn" data-formid="<?=$val->Id?>">Kaydet</i></button>
								</div>
							</div>
						</form>
					</div>

						<?php endforeach ?>
					<?php endif ?>




					<!-- ADRES DÜZENLE SON -->


					<div class="Area currentAddress">
						<h2><?=$langStatics->gonderimAdresi?></h2>
						<div class="row">
		        			<div class="col mr-auto">
		        				<div class="Title"><?=$langStatics->kayitliAdresler?> *</div>
		        			</div>
		        			<div class="col text-right">
		        				<div class="Btn Green-d newAdressBtn"><?=$langStatics->yeniAdres?> <i class="fa fa-plus" aria-hidden="true"></i></div>
		        			</div>
		        		</div>

		        		<?php if ($address != false) { ?>
		        			<?php foreach ($address as $key => $val): ?>
			        			<div class="AdressWrapper">
			        				<input type="radio" value="<?=$val->Id?>" id="selectedAdress_<?=$val->Id?>" name="selectedAdress" checked="">
		        					<label class="AdresSelectRadio" for="selectedAdress_<?=$val->Id?>">
						        			<p class="T"><?=$val->definition?>, <span class="Name"><?=$val->name?></span></p>
						        			<p><?=$val->content." ".$val->CountyName." / ".$val->CityName." ".$val->post_code." - ".$val->CountryName?></p>
						        			<p><?=$val->gsm?></p>
						        			<?php if ($istoken != false): ?>	
						        				<div class="Edit CartEditButton noclick" data-target="#AddressEditModal<?=$val->Id?>"><?=$langStatics->duzenle?></div>
			        						<?php endif ?>
				        			</label>
				        		</div>
		        			<?php endforeach ?>
		        		<?php } else { ?>
		        		<div class="alert alert-danger mt-3"><?=$langStatics->adresYokYeniEkle?></div>
		        		<?php } ?>

		        		<div class="Selection">
		        			<div class="FormElements">
								<div class="checkboxGroup">
									<input type="checkbox" id="SepetFaturaSecimi" checked="">
									<label for="SepetFaturaSecimi"><?=$langStatics->adresFaturaAyni?></label>
								</div>
							</div>
		        		</div>
		        	</div>
		        	<div class="Area invoiceBox" style="display: none;">
						<h2><?=$langStatics->faturaAdresi?></h2>
						<div class="row">
		        			<div class="col mr-auto">
		        				<div class="Title"><?=$langStatics->kayitliAdresler?> *</div>
		        			</div>
		        			<!--<div class="col text-right">
		        				<div class="Btn Green-d newAdressBtn">Yeni Adres <i class="fa fa-plus" aria-hidden="true"></i></div>
		        			</div>-->
		        		</div>

						<?php if ($address != false) { ?>
		        			<?php foreach ($address as $key => $val): ?>
			        			<div class="AdressWrapper">
			        				<input type="radio" value="<?=$val->Id?>" id="selectedTexAdress_<?=$val->Id?>" name="selectedTexAdress" checked="">
			        				<label class="AdresSelectRadio" for="selectedTexAdress_<?=$val->Id?>">
					        			<p class="T"><?=$val->definition?>, <span class="Name"><?=$val->name?></span></p>
					        			<p><?=$val->content." ".$val->CountyName." / ".$val->CityName." ".$val->post_code." - ".$val->CountryName?></p>
					        			<p><?=$val->gsm?></p>
					        			<?php if ($istoken != false): ?>	
					        				<div class="Edit CartEditButton noclick" data-target="#AddressEditModal<?=$val->Id?>"><?=$langStatics->duzenle?></div>
		        						<?php endif ?>
			        				</label>
				        		</div>
		        			<?php endforeach ?>
		        		<?php } else { ?>
		        		<div class="alert alert-danger mt-3"><?=$langStatics->adresYokYeniEkle?></div>
		        		<?php } ?>

		        	</div>
					
				</div>
			</div>
			<div class="col-lg-3">
				<div class="Addition-Wrapper">
					<div class="Addition">
						<div class="Title">S<?=$langStatics->SiparisOzeti?></div>
						<div class="PriceList">
							<div class="Item">
								<span class="Left"><?=$langStatics->araToplam?></span>
								<span class="Right"><?=number_format(floatval($product->productPriceSum)/1.18, 2, ',', '.')?> <?=$this->ConsModel->GetCurrencyById($product->currency_id)->code?></span>
							</div>
							<div class="Item">
								<span class="Left"><?=$langStatics->kdv18?></span>
								<span class="Right"><?=number_format(floatval($product->productPriceSum-$product->productPriceSum/1.18), 2, ',', '.') ?> <?=$this->ConsModel->GetCurrencyById($product->currency_id)->code?></span>
							</div>
							<div class="Item">
								<span class="Left"><?=$langStatics->PriceKargo?></span>
								<span class="Right">Bedava</span>
							</div>
							<div class="Item">
								<span class="Left"><?=$langStatics->TasarimBedeli?></span>
								<span class="Right"><?=number_format(floatval($product->totalDesignPriceSum),2,',','.')?> <?=$this->ConsModel->GetCurrencyById($product->currency_id)->code?></span>
							</div>
							<div class="Item">
								<span class="Left"><?=$langStatics->indirim?></span>
								<span class="Right"><span class="discountPrice"><?=number_format(floatval($product->discount_price),2,',','.')?></span> <?=$this->ConsModel->GetCurrencyById($product->currency_id)->code?></span>
							</div>
						</div>

						<div class="Total">
							<span><?=$langStatics->TahsilTutari?></span>
							<p><span class="FinalPrice"><?=number_format($product->productPriceSum+$product->totalDesignPriceSum-$product->discount_price,2,',','.')?></span> <?=$this->ConsModel->GetCurrencyById($product->currency_id)->code?></p>
						</div>
					</div>

					<a onclick="ChartStep3()" class="Btn Blue-d"><?=$langStatics->sonrakiAdim?> <i class="fa fa-angle-right" aria-hidden="true"></i></a>
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
	$(document).ready(function(){
	    $('#SepetFaturaSecimi').change(function(){
	        if(!this.checked)
	            $('.invoiceBox').fadeIn('slow');
	        else
	            $('.invoiceBox').fadeOut('slow');
	    });

	    $('#KurumsalAdresCheckbox0').change(function(){
	        if(this.checked)
	            $('.NewAdress__invoice').fadeIn('slow');
	        else
	            $('.NewAdress__invoice').fadeOut('slow');
	    });

	    $('.AccountAddressModal .KurumsalAdresCheckbox').change(function(){
	    	var $parent = $(this).parents('.UpdateAddressForm');
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

	    $( ".newAdressBtn" ).on( "click", function(event) {
			$(".AccountAddressModal").fadeOut('fast');
		  	$('#AddressEditModal0').fadeIn('slow');
			$('#AccountAddresCountry').change();
			$(window).scrollTop($(".Cart-Wrapper").offset().top);
		});

		$( ".closeBtn" ).on("click", function(event) {
			$this = $(this);
		  	$('.currentAddress').fadeIn('slow');
		  	$('#AddressEditModal'+$this.attr('data-formid')).fadeOut('slow');
		});

		$('body').on('click', '.CartEditButton', function() {
			var $this = $(this);
			var $CartEditButtons = $('.CartEditButton');
			$.each($CartEditButtons, function(index, val){
				if ($(val).attr('data-target') == $this.attr('data-target')) {
					$(val).removeClass('noclick');
				}
			});
			$(".AccountAddressModal").fadeOut('fast');
			$($this.attr('data-target')).fadeIn('slow');
			$(window).scrollTop($(".Cart-Wrapper").offset().top);
		});


	});
</script>



