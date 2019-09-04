<div class="m-grid__item m-grid__item--fluid m-wrapper">
	<!-- BEGIN: Subheader -->
	<div class="m-subheader ">
		<div class="d-flex align-items-center">
			<div class="mr-auto">
				<h3 class="m-subheader__title ">
					Picks Share
				</h3>
			</div>
		</div>
	</div>
	<!-- END: Subheader -->
	<div class="m-content">
		<!--Begin::Main Portlet-->
		<div class="row">
			<div class="col-xl-12">
				<?if(!empty($this->session->flashdata('success'))){?>
					<div class="alert alert-success" role="alert"><?=$this->session->flashdata('success')?></div>
					<?}elseif(!empty($this->session->flashdata('danger'))){?>
						<div class="alert alert-danger" role="alert"><?=$this->session->flashdata('danger')?></div>
						<?}?>	
						<!--begin:: Widgets/Top Products-->
						<div class="m-portlet m-portlet--bordered-semi m-portlet--full-height">
							<form class="m-form m-form--fit m-form--label-align-right" action="#" method="POST">
								<div class="m-portlet__head">
									<div class="m-portlet__head-caption">
										<div class="m-portlet__head-title">
											<h3 class="m-portlet__head-text" style="padding-top:20px;">
												Picks Share
											</h3>
										</div>
									</div>
								</div>
								<hr>
								<div class="m-portlet__body">
									<div class="m-form__section m-form__section--first">
										<div class="form-group m-form__group">
											<label for="category_heading">
												Pick Title
											</label>
											<div class="input-group">
												<input type="text" class="form-control" name="title" id="title" maxlength="250">
											</div>
										</div>
										<div class="form-group m-form__group">
											<label class="category_heading">
												Away Team
											</label>
											<div class="input-group d-flex"> 
												<div class="group-item">
													<select class="form-control m-select2 awat_team_category" id="m_select2_1">
														<option value="">Please Select</option>
														<?foreach ($categories as $key => $categoryInfo) {?>
															<option value="<?=$categoryInfo->id?>"><?=$categoryInfo->name?></option>
															<?}?>
														</select>
													</div>
													<div class="group-item">
														<select class="form-control m-select2 away_team_id" id="m_select2_1" name="away_team_id">
														</select>
													</div>
												</div>
												<?=form_error('category_id', '<div class="alert alert-danger small mt-2" role="alert">', '</div>');?>
											</div>
											<div class="form-group m-form__group">
												<label class="category_heading">
													Home Team
												</label>
												<div class="input-group d-flex"> 
													<div class="group-item">
														<select class="form-control m-select2 home_team_category" id="m_select2_1">
															<option value="">Please Select</option>
															<?foreach ($categories as $key => $categoryInfo) {?>
																<option value="<?=$categoryInfo->id?>"><?=$categoryInfo->name?></option>
																<?}?>
															</select>
														</div>
														<div class="group-item">
															<select class="form-control m-select2 home_team_id" id="m_select2_1" name="home_team_id">
															</select>
														</div>
													</div>
												</div>
												<div class="form-group m-form__group">
													<label class="category_heading">
														Pick
													</label>
													<div class="group-item">
														<div class="summernote" id="pick"></div>
													</div>
												</div>
												<div class="form-group m-form__group">
													<label class="category_heading">
														Event Date
													</label>
													<div class="input-group date" id="m_datepicker_4_1">
														<input type="text" class="form-control m-input" placeholder="Event Date" id="event_date">
														<span class="input-group-addon">
															<i class="la la-bullhorn"></i>
														</span>
													</div>
												</div>
												<div class="m-form__group form-group">
													<label>
														Groups to Send
													</label>
													<?foreach ($packages as $key => $packageInfo) {?>
														<br>
														<label class="m-checkbox m-checkbox--solid m-checkbox--state-brand">
															<input type="checkbox" id="gruops" name="payment_options[]" value="<?=$packageInfo->id?>">
															<?=$packageInfo->name?>
															<span></span>
														</label>
														<?}?>
														<br>
														<label class="m-checkbox m-checkbox--solid m-checkbox--state-brand">
															<input type="checkbox" id="gruops" name="payment_options[]" value="11111111111111110000">
															All Of
															<span></span>
														</label>
													</div>
													<div class="m-form__actions m-form__actions">
														<div class="row">
															<div class="col-lg-12 text-right">
																<button type="button" id="picks_share" class="btn btn-primary">
																	Share
																</button>
															</div>
														</div>
													</div>
												</div>
											</div>
										</form>
									</div>
									<!--end:: Widgets/Top Products-->
								</div>
							</div>
							<!--End::Main Portlet-->
						</div>
					</div>
				</div>
	<!-- end:: Body -->