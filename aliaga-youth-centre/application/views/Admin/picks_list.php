<div class="m-grid__item m-grid__item--fluid m-wrapper">
	<!-- BEGIN: Subheader -->
	<div class="m-subheader ">
		<div class="d-flex align-items-center">
			<div class="mr-auto">
				<h3 class="m-subheader__title ">
					Picks History
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
											Name
										</th>
										<th>
											E-Mail
										</th>
										<th>
											Pick Title
										</th>
										<th>
											Other Informations
										</th>
										<th style="text-align:right;">
											Operation
										</th>
									</tr>
								</thead>
								<tbody>
									<?foreach ($picks as $key => $pickInfo) {?>
										<tr>
											<td scope="row">
												<?=$pickInfo->id?>
											</td>
											<td scope="row">
												<?=$pickInfo->name?>
											</td>
											<td scope="row">
												<?=$pickInfo->email?>
											</td>
											<td>
												<?=$pickInfo->pick_title?>
											</td>
											<td>
												<button type="button" class="btn btn-success" data-toggle="modal" data-target="#m_modal_<?=$pickInfo->id?>">
													Other Informations
												</button>
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
																			<a href="<?=admin_url('Picks/delete/'.$pickInfo->id)?>" class="m-nav__link">
																				<span class="m-nav__link-text">
																					Delete
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
<?foreach ($picks as $key => $modalInfo) {?>
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
						Name Lastname
					</h5>
					<br>
						<?=$modalInfo->name?>
					<hr>
					<h5>
						E-Mail
					</h5>
					<br>
						<?=$modalInfo->email?>
					<hr>
					<h5>
						Pick Title
					</h5>
					<br>
						<?=$modalInfo->pick_title?>
					<hr>
					<h5>
						Home Team Name
					</h5>
					<br>
						<?=$modalInfo->home_team_name?>
					<hr>
					<h5>
						Away Team Name
					</h5>
					<br>
						<?=$modalInfo->away_team_name?>
					<hr>
					<h5>
						Event Date
					</h5>
					<br>
						<?=$modalInfo->event_date?>
					<hr>
					<h5>
						Added Time
					</h5>
					<br>
						<?=$modalInfo->added_time?>
					<hr>
					<h5>
						Pick
					</h5>
					<br>
					<p>
						<?=$modalInfo->pick?>
					</p>
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