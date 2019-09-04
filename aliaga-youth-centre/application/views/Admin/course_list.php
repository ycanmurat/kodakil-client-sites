<div class="m-grid__item m-grid__item--fluid m-wrapper">
	<!-- BEGIN: Subheader -->
	<div class="m-subheader ">
		<div class="d-flex align-items-center">
			<div class="mr-auto">
				<h3 class="m-subheader__title ">
					Kurs Listesi
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
											Kurs Adı
										</th>
										<th>
											Kurs Hizmeti
										</th>
										<th>
											Kurs Alt Hizmeti
										</th>
										<th>
											Fiyat
										</th>
										<th>
											Kapasite
										</th>
										<th>
											Kayıtlı Kullanıcı
										</th>
										<th>
											Kayıt Açılış Tarihi
										</th>
										<th>
											Kayıt Kapanış Tarihi
										</th>
										<th style="text-align:right;">
											İşlemler
										</th>
									</tr>
								</thead>
								<tbody>
									<?foreach ($courses as $key => $val) {?>
										<tr>
											<td scope="row">
												<?=$val->id?>
											</td>
											<td scope="row">
												<?=$val->name?>
											</td>
											<td scope="row">
												<?=$val->service_name?>
											</td>
											<td>
												<?=($val->sub_service_name == null?'Ana Kategoriye Bağlı':$val->sub_service_name)?>
											</td>
											<td>
												<?=$val->price?>
											</td>
											<td>
												<?=$val->capacity?>
											</td>
											<td>
												<?=$val->used_user?>
											</td>
											<td>
												<?=dayMonth($val->open_date)?>
											</td>
											<td>
												<?=dayMonth($val->close_date)?>
											</td>
											<td style="text-align:right;">
												<div class="m-dropdown m-dropdown--up m-dropdown--inline m-dropdown--small m-dropdown--arrow m-dropdown--align-left" data-dropdown-toggle="hover">
													<a href="#" class="m-dropdown__toggle btn btn-brand dropdown-toggle">
														İşlemler
													</a>
													<div class="m-dropdown__wrapper">
														<div class="m-dropdown__inner">
															<div class="m-dropdown__body">
																<div class="m-dropdown__content">
																	<ul class="m-nav">
																		<li class="m-nav__section m-nav__section--first">
																			<span class="m-nav__section-text">
																				İşlemler
																			</span>
																		</li>
																		<li class="m-nav__item">
																			<a href="<?=admin_url('Course/update/'.$val->id)?>" class="m-nav__link">
																				<span class="m-nav__link-text">
																					Düzenle
																				</span>
																			</a>
																		</li>
																		<li class="m-nav__item">
																			<a href="javascript:void(0)" onclick="removeItem('<?=admin_url('Course/delete/'.$val->id)?>','<?=current_url()?>','Kursu');" class="m-nav__link">
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