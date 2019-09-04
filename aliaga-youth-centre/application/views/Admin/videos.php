<div class="m-grid__item m-grid__item--fluid m-wrapper">
	<!-- BEGIN: Subheader -->
	<div class="m-subheader ">
		<div class="d-flex align-items-center">
			<div class="mr-auto">
				<h3 class="m-subheader__title ">
					Videolar
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
											İçerik
										</th>
										<th>
											Videoyu Oluşturan Kullanıcı
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
									<?foreach ($videos as $key => $videoInfo) {?>
										<tr>
											<td scope="row">
												<?=$videoInfo->id?>
											</td>
											<td>
												<button type="button" class="btn btn-success" data-toggle="modal" data-target="#m_modal_<?=$videoInfo->id?>">
													İçerik
												</button>
											</td>
											<td scope="row">
												<?=$videoInfo->username?>
											</td>
											<td>
												<?if($videoInfo->status == 1){?>
													<button type="button" class="btn btn-success">Onaylandı</button>
												<?}else{?>
													<button type="button" class="btn btn-warning">Onay Bekliyor</button>
												<?}?>
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
																			<a href="<?=admin_url('Videos/delete/'.$videoInfo->id)?>" class="m-nav__link">
																				<span class="m-nav__link-text">
																					Sil
																				</span>
																			</a>
																		</li>
																		<li class="m-nav__item">
																			<a href="<?=admin_url('Videos/status/'.$videoInfo->id.'/1')?>" class="m-nav__link">
																				<span class="m-nav__link-text">
																					Onayla
																				</span>
																			</a>
																		</li>
																		<li class="m-nav__item">
																			<a href="<?=admin_url('Videos/status/'.$videoInfo->id.'/0')?>" class="m-nav__link">
																				<span class="m-nav__link-text">
																					Onayını Kaldır
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
<?foreach ($videos as $key => $modalInfo) {?>
	<div class="modal fade" id="m_modal_<?=$modalInfo->id?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel">
						İyi Kötü Yorum
					</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">
							&times;
						</span>
					</button>
				</div>
				<div class="modal-body">
					<h5>
						Başlık
					</h5>
					<?=$modalInfo->title?><br><hr>
					<h5>
						İçerik
					</h5>
					<?=$modalInfo->content?><br><hr>
					<h5>
						Video
					</h5>
					<video controls style="width:100%;">
						<source src="<?=site_url($modalInfo->video)?>" type="video/<?=$modalInfo->type?>">
					</video>
					<br><hr>
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
