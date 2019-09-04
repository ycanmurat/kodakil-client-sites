<div class="m-grid__item m-grid__item--fluid m-wrapper">
	<!-- BEGIN: Subheader -->
	<div class="m-subheader ">
		<div class="d-flex align-items-center">
			<div class="mr-auto">
				<h3 class="m-subheader__title ">
					Hizmet Güncelle
				</h3>
			</div>
		</div>
	</div>
	<!-- END: Subheader -->
	<div class="m-content">
		<!--Begin::Main Portlet-->
		<div class="row">
			<div class="col-xl-12">
				<?if(! empty($this->session->flashdata('success'))){?>
					<div class="alert alert-success" role="alert"><?=$this->session->flashdata('success')?></div>
				<?}elseif(! empty($this->session->flashdata('danger'))){?>
					<div class="alert alert-danger" role="alert"><?=$this->session->flashdata('danger')?></div>
				<?}?>
					<!--begin:: Widgets/Top Products-->
					<div class="m-portlet m-portlet--bordered-semi m-portlet--full-height">
						<form class="m-form m-form--fit m-form--label-align-right" action="<?=current_url()?>" method="POST">
							<div class="m-portlet__head">
								<div class="m-portlet__head-caption">
									<div class="m-portlet__head-title">
										<h3 class="m-portlet__head-text" style="padding-top:20px;">
											Hizmet Güncelle
										</h3>
									</div>
								</div>
							</div>
							<hr>
							<div class="m-portlet__body">
								<div class="m-form__section m-form__section--first">
									<div class="form-group m-form__group">
										<label for="exampleSelect1">
											Güncel Hizmet Resmi
										</label>
										<div class="m-alert m-alert--outline alert alert-info alert-dismissible fade show">
											<div class="row">
												<div class="col-lg-3 col-md-4 col-sm-6 mb-3 text-center images" id="img_1">
													<div>
														<center>
															<a href="<?=site_url($services->image)?>" target="_blank">
																<img src="<?=site_url($services->image)?>" class="w-100 mb-2 img-responsive">
															</a>
														</center>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="col-12 m--padding-left-30 m--padding-right-30">
										<label>
											Hizmet Resmi
										</label>
										<div class="m-dropzone dropzone m-dropzone--primary dz-clickable" action="<?=admin_url('Services/cover_image')?>" id="m-dropzone-one" name="cover_image">
											<div class="m-dropzone__msg dz-message needsclick">
												<h3 class="m-dropzone__msg-title">
													Resim Yükleyin
												</h3>
												<span class="m-dropzone__msg-desc">
													<i class="fa fa-picture-o"></i>
												</span>
											</div>
										</div>
									</div>
									<br>
									<div class="form-group m-form__group">
										<label for="exampleSelect1">
											Güncel Hizmet İkonu
										</label>
										<div class="m-alert m-alert--outline alert alert-info alert-dismissible fade show">
											<div class="row">
												<div class="col-lg-3 col-md-4 col-sm-6 mb-3 text-center images" id="img_1">
													<div>
														<center>
															<a href="<?=site_url($services->icon)?>" target="_blank">
																<img src="<?=site_url($services->icon)?>" class="w-100 mb-2 img-responsive">
															</a>
														</center>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="col-12 m--padding-left-30 m--padding-right-30">
										<label>
											Hizmet İkonu
										</label>
										<div class="m-dropzone dropzone m-dropzone--primary dz-clickable" action="<?=admin_url('Services/icon')?>" id="m-dropzone-one" name="icon">
											<div class="m-dropzone__msg dz-message needsclick">
												<h3 class="m-dropzone__msg-title">
													İkon Yükleyin
												</h3>
												<span class="m-dropzone__msg-desc">
													<i class="fa fa-picture-o"></i>
												</span>
											</div>
										</div>
									</div>
									<div class="form-group m-form__group">
										<label for="category_heading">
											Hizmet Adı
										</label>
										<div class="input-group">
											<input type="text" class="form-control" name="name" maxlength="250" value="<?=(!empty(set_value('name'))?set_value('name'):$services->name)?>">
										</div>
										<?=form_error('name', '<div class="alert alert-danger small mt-2" role="alert">', '</div>');?>
									</div>
									<div class="m-form__group form-group">
										<label for="category_heading">
											Pozisyon
										</label>
										<div class="input-group">
											<label class="m-radio m-radio--solid m-radio--state-success">
												<input type="radio" name="position" value="1" <?=($services->position == 1)?'checked':''?>>
												Anasayfada Görünsün
												<span></span>
											</label>
											<label class="m-radio m-radio--solid m-radio--state-success" style="margin-left: 10px;">
												<input type="radio" name="position" value="2" <?=($services->position == 2)?'checked':''?>>
												Menüde Görünsün
												<span></span>
											</label>
											<label class="m-radio m-radio--solid m-radio--state-success" style="margin-left: 10px;">
												<input type="radio" name="position" value="3" <?=($services->position == 3)?'checked':''?>>
												Her İkisinde de Görünsün
												<span></span>
											</label>
											<label class="m-radio m-radio--solid m-radio--state-success" style="margin-left: 10px;">
												<input type="radio" name="position" value="4" <?=($services->position == 4)?'checked':''?>>
												Görünmesin
												<span></span>
											</label>
										</div>
										<?=form_error('position', '<div class="alert alert-danger small mt-2" role="alert">', '</div>');?>
									</div>
									<div class="m-form__actions m-form__actions">
										<div class="row">
											<div class="col-lg-12 text-right">
												<button type="submit" class="btn btn-primary">
													Güncelle
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