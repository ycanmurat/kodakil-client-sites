<div class="m-grid__item m-grid__item--fluid m-wrapper">
	<!-- BEGIN: Subheader -->
	<div class="m-subheader ">
		<div class="d-flex align-items-center">
			<div class="mr-auto">
				<h3 class="m-subheader__title ">
					Slider Düzenle
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
								<form class="m-form m-form--fit m-form--label-align-right" action="<?=admin_url('Slider/edit/'.$slider->id)?>" method="POST">
									<div class="m-portlet__head">
										<div class="m-portlet__head-caption">
											<div class="m-portlet__head-title">
												<h3 class="m-portlet__head-text" style="padding-top:20px;">
													Slider Düzenle
												</h3>
											</div>
										</div>
									</div>
									<hr>
									<div class="m-portlet__body">
										<div class="m-form__section m-form__section--first">
											<div class="form-group m-form__group">
												<label for="exampleSelect1">
													Güncel Resim
												</label>
												<div class="m-alert m-alert--outline alert alert-info alert-dismissible fade show">
													<div class="row">
														<div class="col-lg-3 col-md-4 col-sm-6 mb-3 text-center images" id="img_1">
															<div>
																<center>
																	<a href="<?=site_url($slider->image)?>" target="_blank">
																		<img src="<?=site_url($slider->image)?>" class="w-100 mb-2 img-responsive">
																	</a>
																</center>
															</div>
														</div>
													</div>
												</div>
											</div>
											<div class="col-12 m--padding-left-30 m--padding-right-30">
												<label>
													Resim
												</label>
												<div class="m-dropzone dropzone m-dropzone--primary dz-clickable" action="<?=admin_url('Slider/image')?>" id="m-dropzone-one" name="image">
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
											<div class="form-group m-form__group">
												<label for="category_heading">
													Buton Yazısı
												</label>
												<div class="input-group">
													<input type="text" class="form-control" name="button_name" maxlength="250" value="<?=(!empty(set_value('button_name'))?set_value('button_name'):$slider->button_name)?>">
												</div>
												<?=form_error('button_name', '<div class="alert alert-danger small mt-2" role="alert">', '</div>');?>
											</div>
											<div class="form-group m-form__group">
												<label for="category_heading">
													Link
												</label>
												<div class="input-group">
													<input type="text" class="form-control" name="button_link" maxlength="250" value="<?=(!empty(set_value('button_link'))?set_value('button_link'):$slider->button_name)?>">
												</div>
												<?=form_error('button_link', '<div class="alert alert-danger small mt-2" role="alert">', '</div>');?>
											</div>
											<div class="form-group m-form__group">
												<label for="category_heading">
													Başlık
												</label>
												<div class="input-group">
													<input type="text" class="form-control" name="title" maxlength="250" value="<?=(!empty(set_value('title'))?set_value('title'):$slider->title)?>">
												</div>
												<?=form_error('title', '<div class="alert alert-danger small mt-2" role="alert">', '</div>');?>
											</div>
											<div class="form-group m-form__group">
												<label for="category_heading">
													içerik
												</label>
												<div class="input-group">
													<input type="text" class="form-control" name="content" maxlength="250" value="<?=(!empty(set_value('content'))?set_value('content'):$slider->content)?>">
												</div>
												<?=form_error('content', '<div class="alert alert-danger small mt-2" role="alert">', '</div>');?>
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