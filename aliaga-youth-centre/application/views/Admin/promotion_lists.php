<div class="m-grid__item m-grid__item--fluid m-wrapper">
	<!-- BEGIN: Subheader -->
	<div class="m-subheader ">
		<div class="d-flex align-items-center">
			<div class="mr-auto">
				<h3 class="m-subheader__title ">
					Promotion Codes
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
											Type
										</th>
										<th>
											Code
										</th>
										<th>
											Percent
										</th>
										<th style="text-align:right;">
											Operation
										</th>
									</tr>
								</thead>
								<tbody>
									<?foreach ($promotions as $key => $promotionInfo) {?>
										<tr>
											<td scope="row">
												<?=$promotionInfo->id?>
											</td>
											<td>
												<?=($promotionInfo->type==0)?'Shop Owner':'Commissioner'?>
											</td>
											<td>
												<?=$promotionInfo->code?>
											</td>
											<td>
												<?=$promotionInfo->percent?> %
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
																			<a href="<?=admin_url('Promotion/delete/'.$promotionInfo->id)?>" class="m-nav__link">
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