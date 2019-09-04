<div class="m-grid__item m-grid__item--fluid m-wrapper">
	<!-- BEGIN: Subheader -->
	<div class="m-subheader ">
		<div class="d-flex align-items-center">
			<div class="mr-auto">
				<h3 class="m-subheader__title ">
					Mail Gönder : <?=$user->name_lastname.', '.$user->email?>
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
							<form class="m-form m-form--fit m-form--label-align-right" action="<?=admin_url('User/send_mail/'.$user->id)?>" method="POST">
								<div class="m-portlet__head">
									<div class="m-portlet__head-caption">
										<div class="m-portlet__head-title">
											<h3 class="m-portlet__head-text" style="padding-top:20px;">
												Mail Gönder
											</h3>
										</div>
									</div>
								</div>
								<hr>
								<div class="m-portlet__body">
									<div class="m-form__section m-form__section--first">
										<div class="form-group m-form__group">
											<label for="category_heading">
												Başlık
											</label>
											<div class="input-group">
												<input type="text" class="form-control" name="subject" maxlength="250" value="<?=set_value('subject')?>">
											</div>
											<?=form_error('subject', '<div class="alert alert-danger small mt-2" role="alert">', '</div>');?>
										</div>
										<div class="form-group m-form__group">
											<label for="category_heading">
												İçerik
											</label>
											<div class="input-group" style="width:100% !important;">
												<textarea class="ckeditor" name="mail" ><?=(!empty(set_value('mail'))?set_value('mail'):'')?></textarea>
											</div>
											<?=form_error('mail', '<div class="alert alert-danger small mt-2" role="alert">', '</div>');?>
										</div>
										<div class="m-form__actions m-form__actions">
											<div class="row">
												<div class="col-lg-12 text-right">
													<button type="submit" class="btn btn-primary">
														Mail Gönder
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