<div class="m-grid__item m-grid__item--fluid m-wrapper">
	<!-- BEGIN: Subheader -->
	<div class="m-subheader ">
		<div class="d-flex align-items-center">
			<div class="mr-auto">
				<h3 class="m-subheader__title ">
					Kullanıcı Düzenle
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
								<form class="m-form m-form--fit m-form--label-align-right" action="<?=admin_url('User/edit/'.$user->id)?>" method="POST">
									<div class="m-portlet__head">
										<div class="m-portlet__head-caption">
											<div class="m-portlet__head-title">
												<h3 class="m-portlet__head-text" style="padding-top:20px;">
													Düzenle
												</h3>
											</div>
										</div>
									</div>
									<hr>
									<div class="m-portlet__body">
										<div class="m-form__section m-form__section--first">
											<div class="form-group m-form__group">
												<label for="category_heading">
													İsim Soyisim
												</label>
												<div class="input-group">
													<input type="text" class="form-control" name="name_lastname" maxlength="250" value="<?=(!empty(set_value('name_lastname'))?set_value('name_lastname'):$user->name_lastname)?>">
												</div>
												<?=form_error('name_lastname', '<div class="alert alert-danger small mt-2" role="alert">', '</div>');?>
											</div>
											<div class="form-group m-form__group">
												<label for="category_heading">
													Kullanıcı Adı
												</label>
												<div class="input-group">
													<input type="text" class="form-control" name="username" maxlength="250" value="<?=(!empty(set_value('username'))?set_value('username'):$user->username)?>">
												</div>
												<?=form_error('username', '<div class="alert alert-danger small mt-2" role="alert">', '</div>');?>
											</div>
											<div class="form-group m-form__group">
												<label for="category_heading">
													Şifre (Girilmeyebilir)
												</label>
												<div class="input-group">
													<input type="password" class="form-control" name="password" maxlength="250">
												</div>
												<?=form_error('password', '<div class="alert alert-danger small mt-2" role="alert">', '</div>');?>
											</div>
											<div class="form-group m-form__group">
												<label for="category_heading">
													E-Posta
												</label>
												<div class="input-group">
													<input type="text" class="form-control" name="email" maxlength="250" value="<?=(!empty(set_value('email'))?set_value('email'):$user->email)?>">
												</div>
												<?=form_error('email', '<div class="alert alert-danger small mt-2" role="alert">', '</div>');?>
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