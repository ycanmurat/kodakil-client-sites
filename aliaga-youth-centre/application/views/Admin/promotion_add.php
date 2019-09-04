<div class="m-grid__item m-grid__item--fluid m-wrapper">
	<!-- BEGIN: Subheader -->
	<div class="m-subheader ">
		<div class="d-flex align-items-center">
			<div class="mr-auto">
				<h3 class="m-subheader__title ">
					Promotion Code Add
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
					<form class="m-form m-form--fit m-form--label-align-right" action="<?=admin_url('Promotion/add')?>" method="POST">
						<div class="m-portlet__head">
							<div class="m-portlet__head-caption">
								<div class="m-portlet__head-title">
									<h3 class="m-portlet__head-text" style="padding-top:20px;">
										Promotion Code Add
									</h3>
								</div>
							</div>
						</div>
						<hr>
						<div class="m-portlet__body">
							<div class="m-form__section m-form__section--first">
								<div class="form-group m-form__group">
									<label for="category_heading">
										Type
									</label>
									<select class="form-control m-input m-input--square" name="type">
										<option value="0" <?=!empty(set_value('type') && set_value('type') == 0)?'selected':''?>>Shop Owner</option>
										<option value="1" <?=!empty(set_value('type') && set_value('type') == 1)?'selected':''?>>Commissioner</option>
									</select>
								</div>
								<div class="form-group m-form__group">
									<label for="category_heading">
										Promotion Code
									</label>
									<div class="input-group">
										<span class="input-group-btn">
											<button onclick="randCode();" class="btn btn-brand" type="button">
												<i class="fa fa-refresh"></i>
											</button>
										</span>
										<input type="text" class="form-control" id="code" name="code" maxlength="250" value="<?=set_value('code')?>">
									</div>
									<?=form_error('code', '<div class="alert alert-danger small mt-2" role="alert">', '</div>');?>
								</div>
								<div class="form-group m-form__group">
									<label for="category_heading">
										Discount Percentage
									</label>
									<div class="input-group">
										<input type="text" class="form-control" name="percent" maxlength="3" value="<?=set_value('percent')?>">
									</div>
									<?=form_error('percent', '<div class="alert alert-danger small mt-2" role="alert">', '</div>');?>
								</div>
								<div class="m-form__actions m-form__actions">
									<div class="row">
										<div class="col-lg-12 text-right">
											<button type="submit" class="btn btn-primary">
												Add
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
<script>
	function randCode(){
		$('#code').val(makeid());
	}

	function makeid() {
		var text = "";
		var possible = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789";

		for (var i = 0; i < 12; i++)
			text += possible.charAt(Math.floor(Math.random() * possible.length));

		return text;
	}
</script>