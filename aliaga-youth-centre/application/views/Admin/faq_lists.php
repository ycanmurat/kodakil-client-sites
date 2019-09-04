<div class="m-grid__item m-grid__item--fluid m-wrapper">
	<!-- BEGIN: Subheader -->
	<div class="m-subheader ">
		<div class="d-flex align-items-center">
			<div class="mr-auto">
				<h3 class="m-subheader__title ">
					Question And Answers
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
											Question And Answer
										</th>
										<th style="text-align: right;">
											Status
										</th>
										<th style="text-align:right;">
											Operation
										</th>
									</tr>
								</thead>
								<tbody>
									<?foreach ($faqs as $key => $faqInfo) {
										if($faqInfo->status==1){$status=0;}else{$status=1;}?>
										<tr>
											<td scope="row">
												<?=$faqInfo->id?>
											</td>
											<td>
												<button type="button" class="btn btn-success" data-toggle="modal" data-target="#m_modal_<?=$faqInfo->id?>">
													Question And Answer
												</button>
											</td>
											<td style="text-align: right;">
												<input data-switch="true" type="checkbox" <?=($faqInfo->status==1)?'checked="checked"':''?> id="m_switch_1" onchange="window.location='<?=admin_url('Faq/status/'.$faqInfo->id.'/'.$status)?>'">
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
																			<a href="<?=admin_url('Faq/delete/'.$faqInfo->id)?>" class="m-nav__link">
																				<span class="m-nav__link-text">
																					Delete
																				</span>
																			</a>
																		</li>
																		<li class="m-nav__item">
																			<a href="<?=admin_url('Faq/edit/'.$faqInfo->id)?>" class="m-nav__link">
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
<?foreach ($faqs as $key => $modalInfo) {?>
	<div class="modal fade" id="m_modal_<?=$modalInfo->id?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel">
						<?=$modalInfo->id?>
					</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">
							&times;
						</span>
					</button>
				</div>
				<div class="modal-body">
					<h5>
						Question
					</h5>
					<br>
					<?=$modalInfo->question?>
					<hr>
					<h5>
						Answer
					</h5>
					<br>
					<?=$modalInfo->answer?>
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
