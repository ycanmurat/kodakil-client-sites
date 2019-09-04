<div class="m-grid__item m-grid__item--fluid m-wrapper">
	<!-- BEGIN: Subheader -->
	<div class="m-subheader ">
		<div class="d-flex align-items-center">
			<div class="mr-auto">
				<h3 class="m-subheader__title ">
					Hizmet Slider'ı Ekle
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
					<form class="m-form m-form--fit m-form--label-align-right" action="<?=admin_url('Services_slider/add')?>" method="POST">
						<div class="m-portlet__head">
							<div class="m-portlet__head-caption">
								<div class="m-portlet__head-title">
									<h3 class="m-portlet__head-text" style="padding-top:20px;">
										Hizmet Slider'ı Ekle
									</h3>
								</div>
							</div>
						</div>
						<hr>
						<div class="m-portlet__body">
							<div class="m-form__section m-form__section--first">
								<div class="col-12 m--padding-left-30 m--padding-right-30">
									<label>
										Resim
									</label>
									<div class="m-dropzone dropzone m-dropzone--primary dz-clickable" action="<?=admin_url('Services_slider/image')?>" id="m-dropzone-one" name="image">
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
									<label for="exampleSelect1">
									Slider Kategorisi
									</label>
									<select class="form-control m-input m-input--square" id="exampleSelect1" name="services_slug">
										<?foreach ($categories as $key => $info) {?>
											<option value="<?=$info->slug?>">
												<?=$info->name?>
											</option>
										<?}?>
									</select>
								</div>
								<?=form_error('services_slug', '<div class="alert alert-danger small mt-2" role="alert">', '</div>');?>
								<div class="m-form__actions m-form__actions">
									<div class="row">
										<div class="col-lg-12 text-right">
											<button type="submit" class="btn btn-primary">
												Yükle
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