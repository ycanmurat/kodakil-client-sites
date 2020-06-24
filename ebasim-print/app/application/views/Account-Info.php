			  	<div class="col-lg-9">
			  		<div class="PageTitle"><?=$langStatics->Hesabim?></div>
			  		<?=validation_errors('<p class="alert alert-danger">', '</p>')?>
		  			<?php if (@$sonuc[0] != ""): ?>
					<p class="alert alert-<?=$sonuc[1]?>">
						<?=$sonuc[0]?>
					</p>
					<?php endif ?>
			  		<div class="Area">
			  			<div class="SubTitle"><?=$langStatics->HesapBaslik?></div>
			  			<div class="Wrapper">
			  				<form action="<?=site_url('hesabim/')?>" method="POST">
			  					<input type="hidden" name="transaction" value="account">
				  				<div class="container">
				  					<div class="row">
										<div class="col-lg-8 col-md-8">
											<div class="FormElements">
												<label for="profileAdSoyad"><?=$langStatics->kayitOlAd?> <?=$langStatics->kayitOlSoyad?> *</label>
												<input type="text" name="profileAdSoyad" id="profileAdSoyad" value="<?=$user->name?>">
											</div>
										</div>
										<div class="col-lg-4 col-md-4">
											<div class="FormElements">
												<label for="profileTel"><?=$langStatics->formCep?> *</label>
												<input type="text" name="profileTel" id="profileTel" value="<?=$user->phone?>">
											</div>
										</div>
										<div class="col-lg-4 col-md-4">
											<div class="FormElements">
												<label for="profileEmail"><?=$langStatics->emailadresi?> *</label>
												<input type="text" name="profileEmail" id="profileEmail" value="<?=$user->email?>">
											</div>
										</div>
										<div class="col-lg-4 col-md-4">
											<div class="FormElements">
												<label for="profileUlke"><?=$langStatics->formUlke?> *</label>
												<select name="profileUlke" id="profileUlke">
													<?foreach ($countries as $key => $val){?>
														<option value="<?=$val->CountryID?>" 
															<?if($val->CountryID == $user->country){echo 'selected="true"';
															}elseif(empty($user->country) && $val->CountryID == '212'){
															echo 'selected="true"';}?>>
														<?=$val->CountryName?>
														</option>
													<?}?>
												</select>
											</div>
										</div>
										<div class="col-lg-4 col-md-4">
											<div class="FormElements">
												<label for="profileMeslek"><?=$langStatics->meslek?> *</label>
												<select name="profileMeslek" id="profileMeslek">
														<option value="_none">- Seçiniz -</option>
														<option value="1" <?=($user->sector == 1) ? 'selected="true"':'' ?>><?=$langStatics->meslekgrubu1?></option>
														<option value="2" <?=($user->sector == 2) ? 'selected="true"':'' ?>><?=$langStatics->meslekgrubu2?></option>
														<option value="3" <?=($user->sector == 3) ? 'selected="true"':'' ?>><?=$langStatics->meslekgrubu3?></option>
														<option value="4" <?=($user->sector == 4) ? 'selected="true"':'' ?>><?=$langStatics->meslekgrubu4?></option>
														<option value="5" <?=($user->sector == 5) ? 'selected="true"':'' ?>><?=$langStatics->meslekgrubu5?></option>
														<option value="6" <?=($user->sector == 6) ? 'selected="true"':'' ?>><?=$langStatics->meslekgrubu6?></option>
														<option value="7" <?=($user->sector == 7) ? 'selected="true"':'' ?>><?=$langStatics->meslekgrubu7?></option>
														<option value="8" <?=($user->sector == 8) ? 'selected="true"':'' ?>><?=$langStatics->meslekgrubu8?></option>
														<option value="9" <?=($user->sector == 9) ? 'selected="true"':'' ?>><?=$langStatics->meslekgrubu9?></option>
														<option value="10" <?=($user->sector == 10) ? 'selected="true"':'' ?>><?=$langStatics->meslekgrubu10?></option>
														<option value="11" <?=($user->sector == 11) ? 'selected="true"':'' ?>><?=$langStatics->meslekgrubu11?></option>
														<option value="12" <?=($user->sector == 12) ? 'selected="true"':'' ?>><?=$langStatics->meslekgrubu12?></option>
														<option value="13" <?=($user->sector == 13) ? 'selected="true"':'' ?>><?=$langStatics->meslekgrubu13?></option>
														<option value="14" <?=($user->sector == 14) ? 'selected="true"':'' ?>><?=$langStatics->meslekgrubu14?></option>
												</select>
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col text-lg-right">
											<button class="mt-4 Btn Green-d"><?=$langStatics->guncelle?></button>
										</div>
									</div>
				  				</div>
				  			</form>
			  			</div>
			  		</div>

			  		<div class="Area">
			  			<div class="SubTitle"><?=$langStatics->sifreYenilemeBaslik?></div>
			  			<div class="Wrapper">
			  				<form action="<?=site_url('hesabim/')?>" method="POST">
			  					<input type="hidden" name="transaction" value="password">
				  				<div class="container">
				  					<div class="row">
										<div class="col-lg-4">
											<div class="FormElements">
												<label for="profilePass"><?=$langStatics->mevcutSifre?> *</label>
												<input type="password" name="profilePass" id="profilePass">
											</div>
										</div>
										<div class="col-lg-4">
											<div class="FormElements">
												<label for="profileNewPass"><?=$langStatics->yeniSifre?> *</label>
												<input type="password" name="profileNewPass" id="profileNewPass">
											</div>
										</div>
										<div class="col-lg-4">
											<div class="FormElements">
												<label for="profileNewPass2"><?=$langStatics->yeniSifreTekrar?> *</label>
												<input type="password" name="profileNewPass2" id="profileNewPass2">
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col text-lg-right">
											<button class="mt-4 Btn Green-d"><?=$langStatics->degistir?></button>
										</div>
									</div>
				  				</div>
				  			</form>
			  			</div>
			  		</div>
			  	</div>
		</div>
	</div>
</section>