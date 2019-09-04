<div class="m-grid__item m-grid__item--fluid m-wrapper">
	<!-- BEGIN: Subheader -->
	<div class="m-subheader ">
		<div class="d-flex align-items-center">
			<div class="mr-auto">
				<h3 class="m-subheader__title ">
					Statics Options
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
					<form class="m-form m-form--fit m-form--label-align-right" action="<?=admin_url('Langstatics')?>" method="POST">
						<div class="m-portlet__head">
							<div class="m-portlet__head-caption">
								<div class="m-portlet__head-title">
									<h3 class="m-portlet__head-text" style="padding-top:20px;">
										Statics Options
									</h3>
								</div>
							</div>
						</div>
						<hr>
						<div class="m-portlet__body">
							<div class="m-form__section m-form__section--first">
								<div class="form-group m-form__group">
									<label for="category_heading">
										Welcome to LA Bet Sports
									</label>
									<div class="input-group" style="width:100% !important;">
										<textarea class="ckeditor" name="content_1" ><?=(!empty(set_value('content_1'))?set_value('content_1'):$langInfo->content_1)?></textarea>
									</div>
									<?=form_error('content_1', '<div class="alert alert-danger small mt-2" role="alert">', '</div>');?>
								</div>
								<div class="form-group m-form__group">
									<label for="category_heading">
										Content
									</label>
									<div class="input-group" style="width:100% !important;">
										<textarea class="ckeditor" name="content_2" ><?=(!empty(set_value('content_2'))?set_value('content_2'):$langInfo->content_2)?></textarea>
									</div>
									<?=form_error('content_2', '<div class="alert alert-danger small mt-2" role="alert">', '</div>');?>
								</div>
								<div class="form-group m-form__group">
									<label for="category_heading">
										Twitter
									</label>
									<div class="input-group" style="width:100% !important;">
										<textarea class="ckeditor" name="content_3" ><?=(!empty(set_value('content_3'))?set_value('content_3'):$langInfo->content_3)?></textarea>
									</div>
									<?=form_error('content_3', '<div class="alert alert-danger small mt-2" role="alert">', '</div>');?>
								</div>
								<div class="form-group m-form__group">
									<label for="category_heading">
										Terms of Use
									</label>
									<div class="input-group" style="width:100% !important;">
										<textarea class="ckeditor" name="content_4" ><?=(!empty(set_value('content_4'))?set_value('content_4'):$langInfo->content_4)?></textarea>
									</div>
									<?=form_error('content_4', '<div class="alert alert-danger small mt-2" role="alert">', '</div>');?>
								</div>
								<div class="form-group m-form__group">
									<label for="category_heading">
										Content
									</label>
									<div class="input-group" style="width:100% !important;">
										<textarea class="ckeditor" name="content_5" ><?=(!empty(set_value('content_5'))?set_value('content_5'):$langInfo->content_5)?></textarea>
									</div>
									<?=form_error('content_5', '<div class="alert alert-danger small mt-2" role="alert">', '</div>');?>
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
<!-- end:: Body -->