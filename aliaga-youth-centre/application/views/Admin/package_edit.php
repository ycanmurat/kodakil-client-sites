<div class="m-grid__item m-grid__item--fluid m-wrapper">
	<!-- BEGIN: Subheader -->
	<div class="m-subheader ">
		<div class="d-flex align-items-center">
			<div class="mr-auto">
				<h3 class="m-subheader__title ">
					Package Edit
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
						<?}elseif(! empty($this->session->userdata('file_upload_error_message'))){?>
							<div class="alert alert-danger" role="alert">
								<?php
								echo strip_tags($this->session->userdata('file_upload_error_message'));
								$this->session->unset_userdata('file_upload_error_message');
								?>		
							</div>
							<?}?>	
							<!--begin:: Widgets/Top Products-->
							<div class="m-portlet m-portlet--bordered-semi m-portlet--full-height">
								<form class="m-form m-form--fit m-form--label-align-right" action="<?=admin_url('Packages/edit/'.$package->id)?>" method="POST">
									<div class="m-portlet__head">
										<div class="m-portlet__head-caption">
											<div class="m-portlet__head-title">
												<h3 class="m-portlet__head-text" style="padding-top:20px;">
													Package Add
												</h3>
											</div>
										</div>
									</div>
									<hr>
									<div class="m-portlet__body">
										<div class="m-form__section m-form__section--first">
											<div class="form-group m-form__group">
												<label for="category_heading">
													Package Name
												</label>
												<div class="input-group">
													<input type="text" class="form-control" name="name" maxlength="250" value="<?=(!empty(set_value('name'))?set_value('name'):$package->name)?>">
												</div>
												<?=form_error('name', '<div class="alert alert-danger small mt-2" role="alert">', '</div>');?>
											</div>
											<div class="form-group m-form__group">
												<label for="category_heading">
													Price ($)
												</label>
												<div class="input-group">
													<input type="text" class="form-control" name="price" id="m_inputmask_7" value="<?=(!empty(set_value('price'))?set_value('price'):$package->price)?>"/>
												</div>
												<?=form_error('price', '<div class="alert alert-danger small mt-2" role="alert">', '</div>');?>
											</div>
											<div class="form-group m-form__group">
												<label for="category_heading">
													Explanation
												</label>
												<div class="">
													<input type="text" class="form-control" name="content" maxlength="250" value="<?=(!empty(set_value('content'))?set_value('content'):$package->content)?>">
												</div>
												<?=form_error('content', '<div class="alert alert-danger small mt-2" role="alert">', '</div>');?>
											</div>
											<div class="form-group m-form__group">
												<label for="category_heading">
													Current number of days
												</label>
												<div class="input-group">
													<input type="text" class="form-control" name="validity_time" maxlength="250" value="<?=(!empty(set_value('validity_time'))?set_value('validity_time'):$package->validity_time)?>">
												</div>
												<?=form_error('validity_time', '<div class="alert alert-danger small mt-2" role="alert">', '</div>');?>
											</div>
											<div class="m-form__group form-group">
												<label>
													Payment Options
												</label>
												<br>
												<label class="m-checkbox m-checkbox--solid m-checkbox--state-brand">
													<input type="checkbox" name="payment_options[]" value="1">
													VISA
													<span></span>
												</label>
												<br>
												<label class="m-checkbox m-checkbox--solid m-checkbox--state-brand">
													<input type="checkbox" name="payment_options[]" value="2">
													Master Card
													<span></span>
												</label>
												<br>
												<label class="m-checkbox m-checkbox--solid m-checkbox--state-brand">
													<input type="checkbox" name="payment_options[]" value="3">
													AMERICAN EXPRESS
													<span></span>
												</label>
												<br>
												<label class="m-checkbox m-checkbox--solid m-checkbox--state-brand">
													<input type="checkbox" name="payment_options[]" value="4">
													DISCOVER
													<span></span>
												</label>
												<br>
												<label class="m-checkbox m-checkbox--solid m-checkbox--state-brand">
													<input type="checkbox" name="payment_options[]" value="5">
													Bitcoin
													<span></span>
												</label>
												<br>
												<?foreach ($package->payment_options as $key => $payInfo) {?>
													<?if($payInfo->brand==1){?>
														<button type="reset" class="btn btn-danger" onclick="window.location.href='<?=admin_url('Packages/deletePayment/'.$payInfo->id.'/'.$package->id)?>';">
															VISA
															<span>
																<i class="la la-close"></i>
															</span>
														</button>
														<?}elseif($payInfo->brand==2){?>
															<button type="reset" class="btn btn-danger" onclick="window.location.href='<?=admin_url('Packages/deletePayment/'.$payInfo->id.'/'.$package->id)?>';">
																Master Card
																<span>
																	<i class="la la-close"></i>
																</span>
															</button>
															<?}elseif($payInfo->brand==3){?>
																<button type="reset" class="btn btn-danger" onclick="window.location.href='<?=admin_url('Packages/deletePayment/'.$payInfo->id.'/'.$package->id)?>';">
																	AMERICAN EXPRESS
																	<span>
																		<i class="la la-close"></i>
																	</span>
																</button>
																<?}elseif($payInfo->brand==4){?>
																	<button type="reset" class="btn btn-danger" onclick="window.location.href='<?=admin_url('Packages/deletePayment/'.$payInfo->id.'/'.$package->id)?>';">
																		DISCOVER
																		<span>
																			<i class="la la-close"></i>
																		</span>
																	</button>
																	<?}elseif($payInfo->brand==5){?>
																		<button type="reset" class="btn btn-danger" onclick="window.location.href='<?=admin_url('Packages/deletePayment/'.$payInfo->id.'/'.$package->id)?>';">
																			Bitcoin
																			<span>
																				<i class="la la-close"></i>
																			</span>
																		</button>
																		<?}?>
																		<?}?>
																		<?=form_error('payment_options[]', '<div class="alert alert-danger small mt-2" role="alert">', '</div>');?>
																	</div>
																	<div class="m-form__group form-group">
																		<label>
																			Free Picks ?
																		</label>
																		<br>
																		<label class="m-checkbox m-checkbox--solid m-checkbox--state-brand">
																			<input type="checkbox" name="free_picks" value="1" <?=($package->free_picks==1)?'checked':''?>>
																			Yes
																			<span></span>
																		</label>
																	</div>
																	<div class="col-12 m--padding-left-30 m--padding-right-30">
																		<label>
																			Picture
																		</label>
																		<div class="m-dropzone dropzone m-dropzone--primary dz-clickable" action="<?=admin_url('Packages/image')?>" id="m-dropzone-one" name="image">
																			<div class="m-dropzone__msg dz-message needsclick">
																				<h3 class="m-dropzone__msg-title">
																					Picture Upload
																				</h3>
																				<span class="m-dropzone__msg-desc">
																					<i class="fa fa-picture-o"></i>
																				</span>
																			</div>
																		</div>
																	</div>
																	<p style="text-align: center;margin-top: 20px;">OR</p>
																	<div class="form-group m-form__group">
																		<div class="input-group">
																			<span class="input-group-btn">
																				<button class="btn btn-brand" type="button" data-toggle="modal" data-target="#m_modal_images">
																					<i class="la la-folder-open"></i>
																				</button>
																			</span>
																			<input type="text" class="form-control m-input" name="image" id="galleryImage">
																		</div>
																	</div>
																	<div class="m-form__actions m-form__actions">
																		<div class="row">
																			<div class="col-lg-12 text-right">
																				<button type="submit" class="btn btn-primary">
																					Update
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
								<div class="modal fade" id="m_modal_images" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
									<div class="modal-dialog" role="document">
										<div class="modal-content">
											<div class="modal-header">
												<h5 class="modal-title" id="exampleModalLabel">
													Folder Images
												</h5>
												<button type="button" class="close" data-dismiss="modal" aria-label="Close">
													<span aria-hidden="true">
														&times;
													</span>
												</button>
											</div>
											<div class="modal-body">
												Old Images
												<?foreach ($images as $key => $imageInfo) {?>
													<hr>
													<a href="javascript:void(0);" id="<?=$imageInfo->image?>" class="imgAttrSelect">
														<img src="<?=site_url($imageInfo->image)?>" style="width: 100%;">
													</a>
													<?}?>
												</div>
												<div class="modal-footer">
													<button type="button" class="btn btn-secondary" data-dismiss="modal" id="close">
														Close
													</button>
												</div>
											</div>
										</div>
									</div>
									<!-- end:: Body -->
									<script type="text/javascript">
										$('.imgAttrSelect').on("click",function(){
											var img_id =  $(this).attr("id");
											$('#galleryImage').val(img_id);
											$( "#close" ).trigger( "click" );
										})
									</script>