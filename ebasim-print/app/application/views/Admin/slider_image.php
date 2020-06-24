					<div class="m-subheader ">
						<div class="d-flex align-items-center">
							<div class="mr-auto">
								<h3 class="m-subheader__title m-subheader__title--separator">
									Slider Yan Resim Ekle
								</h3>
								<ul class="m-subheader__breadcrumbs m-nav m-nav--inline">
									<li class="m-nav__item m-nav__item--home">
										<a href="<?=admin_url()?>" class="m-nav__link m-nav__link--icon">
											<i class="m-nav__link-icon la la-home"></i>
										</a>
									</li>
									<li class="m-nav__separator">
										-
									</li>
									<li class="m-nav__item">
										<a href="<?=admin_url('Slider')?>" class="m-nav__link">
											<span class="m-nav__link-text">
												Slider
											</span>
										</a>
									</li>
								</ul>
							</div>
						</div>
					</div>
					<div class="m-content">
						<div class="row">
							<div class="col-lg-12">
								<div class="m-portlet">
									<form class="m-form m-form--fit m-form--label-align-right" action="<?=admin_url('Slider/sliderImage')?>" method="POST">
										<div class="m-portlet__body">
											<div class="m-form__section m-form__section--first">
											<? 
											if ($this->session->flashdata('onay') == 1){?>
												<div class="alert alert-success alert-dismissible fade show" style="margin-left: 20px;margin-right: 20px" role="alert">
												<button type="button" class="close" data-dismiss="alert" aria-label="Close"></button>
												<strong>
													Tebrikler!
												</strong>
													Resim Yüklendi
												</div>
											<?}elseif($this->session->flashdata('hata')==1){?>
												<div class="alert alert-danger alert-dismissible fade show" style="margin-left: 20px;margin-right: 20px" role="alert">
												<button type="button" class="close" data-dismiss="alert" aria-label="Close"></button>
												<strong>
													Sorun
												</strong>
													Resim Yüklenemedi
												</div>
											<?}?>
												<div class="form-group m-form__group">
													<label>
														Link
													</label>
													<input type="text" class="form-control m-input" name="link" placeholder="Link" required="true">
												</div>
												<div class="form-group m-form__group">
													<label>
														Nereye Eklenecek
													</label>
													<select class="form-control" name="cat" required>
														<option value="1">Slider Yanına</option>
														<option value="2">Ortadaki İnce Çizgiye</option>
														<option value="3">Paketlerin Altına</option>
													</select>
												</div>
												<div class="col-12 m--padding-left-30 m--padding-right-30">
													<label>
														Resim
													</label>
													<div class="m-dropzone dropzone m-dropzone--primary dz-clickable" action="<?=site_url('Admin/Slider/ImageUpload/')?>" id="m-dropzone-one">
														<div class="m-dropzone__msg dz-message needsclick">
															<h3 class="m-dropzone__msg-title">
																Resim Yükle
															</h3>
															<span class="m-dropzone__msg-desc">
																<i class="fa fa-picture-o"></i>
															</span>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="m-portlet__foot m-portlet__foot--fit">
											<div class="m-form__actions m-form__actions">
												<div class="row">
													<div class="col-lg-6"></div>
													<div class="col-lg-6 text-right">
														<button type="submit" class="btn btn-primary">
															Ekle
														</button>
														<button type="reset" class="btn btn-secondary">
															İptal
														</button>
													</div>
												</div>
											</div>
										</div>
									</form>
								</div>
							</div>
						</div>
					</div>
<div class="m-subheader ">
	<div class="d-flex align-items-center">
		<div class="mr-auto">
			<h3 class="m-subheader__title m-subheader__title--separator">
				Yayındaki Yan Resimler
			</h3>
		</div>
	</div>
</div>
<div class="m-content">
	<div class="row">
		<div class="col-lg-12">
			<div class="m-portlet">
				<div class="m-section">
					<div class="m-section__content">
						<div class="table-responsive">
							<form method="post" action="<?=admin_url('Slider/imageMust')?>">
							<table class="table m-table m-table--head-bg-success">
								<thead>
									<tr>
										<th align="left">Resim</th>
										<th width="" align="right">Durum</th>
										<th width="" align="right">Sıra</th>
										<th width="" align="right">Link</th>
										<th width="" align="right">İşlem</th>

									</tr>
								</thead>
								<tbody>
									<?foreach ($Rimage as $key => $val){?>
								<tr>
									<th><img src="<?=site_url($val->picture)?>" width="300" height="100"></th>
									<th>
										<span class="m-switch m-switch--outline m-switch--icon m-switch--success">
											<?if($val->status == 1){?>
											<label>
												<input type="checkbox" <?=($val->status==1?'checked="checked"':'')?> onclick="window.location='<?=site_url('Admin/Slider/SetStatusImg/'.$val->Id.'/0')?>'">
												<span></span>
											</label>
											<?}else{?>
											<label>
												<input type="checkbox" <?=($val->status==1?'checked="checked"':'')?> onclick="window.location='<?=site_url('Admin/Slider/SetStatusImg/'.$val->Id.'/1')?>'">
												<span></span>
											</label>
											<?}?>
										</span>
									</th>
									<th><input type="number" value="<?=$val->sort?>" name="sort[<?=$val->Id?>]" class="form-control" style="width: 100%"></th>
									<th><?=$val->link?></th>
									<th><button type="button" class="m-portlet__nav-link btn m-btn m-btn--hover-danger m-btn--icon m-btn--icon-only m-btn--pill" onclick="deleteConfirm('<?=site_url('Admin/Slider/DeleteImg/'.$val->Id)?>')"><i class="la la-trash"></i></button></th>
									</tr>
									<?}?>
								</tbody>
							</table>
						</div>
					</div>
				</div>
				<div class="m-portlet__foot m-portlet__foot--fit">
						<div class="m-form__actions m-form__actions">
							<div class="row">
								<div class="col-lg-2"></div>
								<div class="col-lg-10">
									<button type="submit" class="btn btn-success pull-right" style="margin: 30px;">
										Sırayı Düzenle
									</button>
								</div>
							</div>
						</div>
					</div>
					<form>
			</div>
		</div>
	</div>
</div>