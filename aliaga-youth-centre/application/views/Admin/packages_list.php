<div class="m-grid__item m-grid__item--fluid m-wrapper">
	<!-- BEGIN: Subheader -->
	<div class="m-subheader ">
		<div class="d-flex align-items-center">
			<div class="mr-auto">
				<h3 class="m-subheader__title ">
					Packages
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
						<form method="post" action="<?=admin_url('Packages/sort')?>">
							<div class="m-section__content">
								<table class="table">
									<thead>
										<tr>
											<th>
												#
											</th>
											<th>
												Name
											</th>
											<th>
												Price
											</th>
											<th>
												Free Picks
											</th>
											<th>
												Sort
											</th>
											<th>
												Other Informations
											</th>
											<th>
												Status
											</th>
											<th style="text-align:right;">
												Operation
											</th>
										</tr>
									</thead>
									<tbody>
										<?foreach ($packages as $key => $packageInfo) {
											if($packageInfo->status==1){$status=0;}else{$status=1;}?>
											<tr>
												<td scope="row">
													<?=$packageInfo->id?>
												</td>
												<td>
													<?=$packageInfo->name?>
												</td>
												<td>
													<?=$packageInfo->price?> $
												</td>
												<td>
													<?=($packageInfo->free_picks)?'Yes':'No'?>
												</td>
												<td>
													<input style="text-align: center"; class="form-control" type="number" name="sort[<?=$packageInfo->id?>]" value="<?=$packageInfo->sort?>">
												</td>
												<td>
													<button type="button" class="btn btn-success" data-toggle="modal" data-target="#m_modal_<?=$packageInfo->id?>">
														Other Informations
													</button>
												</td>
												<td>
													<input data-switch="true" type="checkbox" <?=($packageInfo->status==1)?'checked="checked"':''?> id="m_switch_1" onchange="window.location='<?=admin_url('Packages/status/'.$packageInfo->id.'/'.$status)?>'">
												</td>
												<td style="text-align:right;">
													<div class="m-dropdown m-dropdown--up m-dropdown--inline m-dropdown--small m-dropdown--arrow m-dropdown--align-left" data-dropdown-toggle="hover">
														<a href="#" class="m-dropdown__toggle btn btn-brand dropdown-toggle">
															Operation
														</a>
														<div class="m-dropdown__wrapper">
															<div class="m-dropdown__inner">
																<div class="m-dropdown__body">
																	<div class="m-dropdown__content">
																		<ul class="m-nav">
																			<li class="m-nav__section m-nav__section--first">
																				<span class="m-nav__section-text">
																					Operation
																				</span>
																			</li>
																			<li class="m-nav__item">
																				<a href="<?=admin_url('Packages/delete/'.$packageInfo->id)?>" class="m-nav__link">
																					<span class="m-nav__link-text">
																						Delete
																					</span>
																				</a>
																			</li>
																			<li class="m-nav__item">
																				<a href="<?=admin_url('Packages/edit/'.$packageInfo->id)?>" class="m-nav__link">
																					<span class="m-nav__link-text">
																						Edit
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
								<div class="m-form__actions m-form__actions">
									<div class="row">
										<div class="col-lg-12 text-right">
											<button class="btn btn-warning m-btn m-btn--icon m-btn--wide" style="margin-right: 10px;">
												<span>
													<i class="flaticon-signs-1"></i>
													<span>
													Reorder
													</span>
												</span>
											</button>
										</div>
									</div>
								</div>
							</form>
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
<?foreach ($packages as $key => $modalInfo) {?>
	<div class="modal fade" id="m_modal_<?=$modalInfo->id?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel">
						<?=$modalInfo->name?>
					</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">
							&times;
						</span>
					</button>
				</div>
				<div class="modal-body">
					<h5>
						Name
					</h5>
					<br>
						<p><?=$modalInfo->name?></p>
					<hr>
					<h5>
						Price
					</h5>
					<br>
						<p><?=$modalInfo->price?> $</p>
					<hr>
					<h5>
						Content
					</h5>
					<br>
						<p><?=$modalInfo->content?></p>
					<hr>
					<h5>
						Picture
					</h5>
					<br>
						<p><img src="<?=site_url($modalInfo->image)?>" style="width: 100%;"></p>
					<hr>
					<h5>
						Free Picks
					</h5>
					<br>
						<p><?=$modalInfo->free_picks?></p>
					<hr>
					<h5>
						Payment Options
					</h5>
					<br>
						<?foreach ($modalInfo->payment_options as $key => $paymentInfo) {$sort=$key+1;?>
							<p><?=($paymentInfo->brand==1)?$sort.' : VISA':''?>
							<?=($paymentInfo->brand==2)?$sort.' : Master Card':''?>
							<?=($paymentInfo->brand==3)?$sort.' : AMERICAN EXPRESS':''?>
							<?=($paymentInfo->brand==4)?$sort.' : DISCOVER':''?>
							<?=($paymentInfo->brand==5)?$sort.' : Bitcoin':''?></p>
						<?}?>
					<hr>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-dismiss="modal">
						Close
					</button>
				</div>
			</div>
		</div>
	</div>
<?}?>