<div class="m-grid__item m-grid__item--fluid m-wrapper">
	<!-- BEGIN: Subheader -->
	<div class="m-subheader ">
		<div class="d-flex align-items-center">
			<div class="mr-auto">
				<h3 class="m-subheader__title ">
					Kullanıcılar
				</h3>
			</div>
		</div>
	</div>
	<!-- END: Subheader -->
	<div class="m-content">
		<!--Begin::Main Portlet-->
		<div class="row">
			<div class="col-xl-12">
				<!--begin:: Widgets/Top Products-->
				<div class="m-portlet m-portlet--bordered-semi m-portlet--full-height">
					<div class="m-section">
						<div class="m-section__content">
							<table class="table">
								<thead>
									<tr>
										<th>
											#
										</th>
										<th>
											İsim Soyisim
										</th>
										<th>
											Telefon
										</th>
										<th>
											E-Posta
										</th>
										<th>
											Profil Fotoğrafı
										</th>
										<th>
											Kayıt Tarihi
										</th>
										<th>
											Durum
										</th>
										<th style="text-align:right;">
											İşlem
										</th>
									</tr>
								</thead>
								<tbody>
									<?foreach ($users as $key => $userInfo) {
										if($userInfo->status==1){$status=0;}else{$status=1;}?>
										<tr>
											<td scope="row">
												<?=$userInfo->id?>
											</td>
											<td>
												<?=$userInfo->name.' '.$userInfo->surname?>
											</td>
											<td>
												<?=$userInfo->phone?>
											</td>
											<td>
												<?=$userInfo->email?>
											</td>
											<td>
												<button type="button" class="btn btn-success" data-toggle="modal" data-target="#m_modal_<?=$userInfo->id?>">
													Tüm Bilgiler
												</button>
											</td>
											<td>
												<?=$userInfo->added_time?>
											</td>
											<td>
												<input data-switch="true" type="checkbox" <?=($userInfo->status==1)?'checked="checked"':''?> id="m_switch_1" onchange="window.location='<?=admin_url('User/status/'.$userInfo->id.'/'.$status)?>'">
											</td>
											<td style="text-align:right;">
												<div class="m-dropdown m-dropdown--up m-dropdown--inline m-dropdown--small m-dropdown--arrow m-dropdown--align-left" data-dropdown-toggle="hover">
													<a href="#" class="m-dropdown__toggle btn btn-brand dropdown-toggle">
														İşlem
													</a>
													<div class="m-dropdown__wrapper">
														<div class="m-dropdown__inner">
															<div class="m-dropdown__body">
																<div class="m-dropdown__content">
																	<ul class="m-nav">
																		<li class="m-nav__section m-nav__section--first">
																			<span class="m-nav__section-text">
																				İşlem
																			</span>
																		</li>
																		<li class="m-nav__item">
																			<a href="<?=admin_url('User/delete/'.$userInfo->id)?>" class="m-nav__link">
																				<span class="m-nav__link-text">
																					Sil
																				</span>
																			</a>
																		</li>
																	</ul>
																</div>
															</div>
														</div>
														<span class="m-dropdown__arrow m-dropdown__arrow--left"></span>
													</div>
												</div>
											</td>
										</tr>
										<?}?>
									</tbody>
								</table>
							</div>
						</div>
					</div>
					<!--end:: Widgets/Top Products-->
				</div>
			</div>
			<!--End::Main Portlet-->
		</div>
	</div>
</div>
<!-- end:: Body -->

<!-- end:: Body -->
<?foreach ($users as $key => $userInfo) {?>
	<div class="modal fade" id="m_modal_<?=$userInfo->id?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel">
						<?=$userInfo->name.' '.$userInfo->surname?>
					</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">
							&times;
						</span>
					</button>
				</div>
				<div class="modal-body">
					<h5>
						T.C Kimlik No
					</h5>
					<br>
						<?=$userInfo->identity_number?>
					<hr>
					<h5>
						Ad Soyad
					</h5>
					<br>
						<?=$userInfo->name.' '.$userInfo->surname?>
					<hr>
					<h5>
						E-Posta
					</h5>
					<br>
						<?=$userInfo->email?>
					<hr>
					<h5>
						Telefon
					</h5>
					<br>
						<?=$userInfo->phone?>
					<hr>
					<h5>
						Doğum Tarihi
					</h5>
					<br>
						<?=$userInfo->birth_date?>
					<hr>
					<h5>
						Cinsiyet
					</h5>
					<br>
						<?=($userInfo->gender == 1)?'Kadın':'Erkek'?>
					<hr>
					<h5>
						Kayıt Tarihi
					</h5>
					<br>
						<?=$userInfo->added_time?>
					<hr>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-dismiss="modal">
						Kapat
					</button>
				</div>
			</div>
		</div>
	</div>
<?}?>

