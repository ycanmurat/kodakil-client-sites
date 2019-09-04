<div class="m-grid__item m-grid__item--fluid m-wrapper">
	<!-- BEGIN: Subheader -->
	<div class="m-subheader ">
		<div class="d-flex align-items-center">
			<div class="mr-auto">
				<h3 class="m-subheader__title ">
					Kurs Düzenle
				</h3>
			</div>
		</div>
	</div>
	<!-- END: Subheader -->
	<div class="m-content">
		<!--Begin::Main Portlet-->
		<div class="row">
			<div class="col-xl-12">
				<?if(! empty($this->session->flashdata('error'))){?>
					<div class="alert alert-danger" role="alert"><?=$this->session->flashdata('error')?></div>
				<?}?>	
				<!--begin:: Widgets/Top Products-->
				<div class="m-portlet m-portlet--bordered-semi m-portlet--full-height">
					<form class="m-form m-form--fit m-form--label-align-right" action="<?=admin_url('Course/update/'.$id)?>" method="POST">
						<div class="m-portlet__head">
							<div class="m-portlet__head-caption">
								<div class="m-portlet__head-title">
									<h3 class="m-portlet__head-text" style="padding-top:20px;">
										Kurs Ekle
									</h3>
								</div>
							</div>
						</div>
						<hr>
						<div class="m-portlet__body">
							<div class="m-form__section m-form__section--first">
								<div class="form-group m-form__group">
									<label for="category_heading">
										Kurs Adı
									</label>
									<div class="input-group">
										<input type="text" class="form-control" name="name" maxlength="250" value="<?=$course->detail->name?>">
									</div>
									<?=form_error('name', '<div class="alert alert-danger small mt-2" role="alert">', '</div>');?>
								</div>
								<div class="form-group m-form__group">
									<label for="category_heading">
										Kurs Başlangıç Tarihi
									</label>
									<div class="input-group">
										<input class="form-control m-input" type="date" name="open_date" id="example-date-input" value="<?=$course->detail->open_date?>">
									</div>
									<?=form_error('open_date', '<div class="alert alert-danger small mt-2" role="alert">', '</div>');?>
								</div>
								<div class="form-group m-form__group">
									<label for="category_heading">
										Kurs Bitiş Tarihi
									</label>
									<div class="input-group">
										<input class="form-control m-input" type="date" name="close_date" id="example-date-input" value="<?=$course->detail->close_date?>">
									</div>
									<?=form_error('close_date', '<div class="alert alert-danger small mt-2" role="alert">', '</div>');?>
								</div>
								<div class="col-12 m--padding-left-30 m--padding-right-30">
									<label>
										Yüklü Kapak Fotoğrafı
									</label>
									<div style="border:1px solid #000;padding: 15px">
										<img src="<?=site_url($course->detail->image)?>" width="200" alt="">
									</div>
								</div><br>
								<div class="col-12 m--padding-left-30 m--padding-right-30">
									<label>
										Kapak Fotoğrafı
									</label>
									<div class="m-dropzone dropzone m-dropzone--primary dz-clickable" action="<?=admin_url('Course/imageFirst')?>" id="m-dropzone-one" name="image">
										<div class="m-dropzone__msg dz-message needsclick">
											<h3 class="m-dropzone__msg-title">
												Resim Seçin
											</h3>
											<span class="m-dropzone__msg-desc">
												<i class="fa fa-picture-o"></i>
											</span>
										</div>
									</div>
								</div><br>
								<div class="form-group m-form__group">
									<label for="category_heading">
										Hizmet
									</label>
									<div class="input-group">
										<select name="service" class="form-control" id="service">
											<option value="0">Seçiniz</option>
											<?php foreach ($services as $key => $val) { ?>
												<option value="<?=$val->id?>" <?=($course->detail->service == $val->id?'selected':'')?> slug="<?=$val->slug?>"><?=$val->name?></option>
											<?php } ?>
										</select>
									</div>
									<?=form_error('service', '<div class="alert alert-danger small mt-2" role="alert">', '</div>');?>
								</div>
								<div class="form-group m-form__group">
									<label for="category_heading">
										Alt Hizmet
									</label>
									<div class="input-group">
										<select name="sub_service" class="form-control" id="sub_service">
											<option value="0">Ana Kategoriye Ekle</option>
											<?php foreach ($course->sub_service as $key => $val) { ?>
												<option class="allInsert" value="<?=$val->id?>" <?=($val->id == $course->detail->sub_service)?'selected':''?>><?=$val->name?></option>
											<?php } ?>
										</select>
									</div>
								</div>
								<div class="form-group m-form__group row">
										<div class="col-6">
											<label class="col-form-label">
												En Küçük Sınırı
											</label>
											<div >
												<input type="number"  value="<?=$course->detail->min_age?>" class="form-control" placeholder="Alt Yaş Sınırı" step="1" name="min_age">
												<?=form_error('min_age', '<div class="alert alert-danger small mt-2" role="alert">', '</div>');?>
											</div>
										</div>
										<div class="col-6">
											<label class="col-form-label">
												En Büyük Yaş Sınırı
											</label>
											<div>
												<input type="number" value="<?=$course->detail->max_age?>" class="form-control" placeholder="Üst Yaş Sınırı" step="1" name="max_age">
												<?=form_error('max_age', '<div class="alert alert-danger small mt-2" role="alert">', '</div>');?>
											</div>
										</div>
								</div>
								<div class="m-form__group form-group">
									<label for="">
										Cinsiyet Sınırı
									</label>
									<div class="m-checkbox-inline">
										<label class="m-checkbox">
											<input type="checkbox" <?=$course->detail->woman==1?'checked':''?> name="woman">
											Kadın
											<span></span>
										</label>
										<label class="m-checkbox">
											<input type="checkbox" <?=$course->detail->man==1?'checked':''?> name="man">
											Erkek
											<span></span>
										</label>
									</div>
								</div>
								<div class="m-form__group form-group">
									<label for="">
										İkonlar
									</label>
									<div class="m-checkbox-inline">
										<label class="m-checkbox">
											<input type="checkbox" <?=$course->detail->new==1?'checked':''?> name="new">
											Yeni
											<span></span>
										</label>
										<label class="m-checkbox">
											<input type="checkbox" <?=$course->detail->popular==1?'checked':''?> name="popular">
											Popüler
											<span></span>
										</label>
									</div>
								</div>
								<div class="m-form__group form-group">
									<label for="">
										Kurs Randevulu mu ?
									</label>
									<div class="m-checkbox-inline">
										<label class="m-checkbox">
											<input type="checkbox" <?=$course->detail->appointment==1?'checked':''?> name="appointment">
											Evet
											<span></span>
										</label>
									</div>
								</div>
								<div class="form-group m-form__group">
									<label for="category_heading">
										Süre
									</label>
									<div class="input-group">
										<input type="text" class="form-control" name="time" maxlength="250" value="<?=$course->detail->time?>">
									</div>
									<?=form_error('time', '<div class="alert alert-danger small mt-2" role="alert">', '</div>');?>
								</div>
								<div class="form-group m-form__group">
									<label for="category_heading">
										Program Gün ve Saat
									</label>
									<div class="input-group">
										<input type="text" class="form-control" name="plan" maxlength="250" value="<?=$course->detail->plan?>">
									</div>
									<?=form_error('plan', '<div class="alert alert-danger small mt-2" role="alert">', '</div>');?>
								</div>
								<div class="form-group m-form__group">
									<label for="category_heading">
										Seviye
									</label>
									<div class="input-group">
										<input type="text" class="form-control" name="level" maxlength="250" value="<?=$course->detail->level?>">
									</div>
									<?=form_error('level', '<div class="alert alert-danger small mt-2" role="alert">', '</div>');?>
								</div>
								<div class="form-group m-form__group">
									<label for="category_heading">
										Kurs Yeri
									</label>
									<div class="input-group">
										<input type="text" class="form-control" name="place" maxlength="250" value="<?=$course->detail->place?>">
									</div>
									<?=form_error('place', '<div class="alert alert-danger small mt-2" role="alert">', '</div>');?>
								</div>
								<div class="form-group m-form__group">
									<label for="category_heading">
										Fiyat (0 Ücretsiz)
									</label>
									<div class="input-group">
										<input type="number" step="0.01" class="form-control" name="price" value="<?=$course->detail->price?>">
									</div>
									<?=form_error('price', '<div class="alert alert-danger small mt-2" role="alert">', '</div>');?>
								</div>
								<div class="form-group m-form__group">
									<label for="category_heading">
										Fiyat Kaç Aylık ? (0 Tamamı)
									</label>
									<div class="input-group">
										<input type="number" step="0.01" class="form-control" name="priceMonth" value="<?=$course->detail->priceMonth?>">
									</div>
									<?=form_error('priceMonth', '<div class="alert alert-danger small mt-2" role="alert">', '</div>');?>
								</div>
								<div class="form-group m-form__group">
									<label for="category_heading">
										Kapasite
									</label>
									<div class="input-group">
										<input type="number" step="1" class="form-control" name="capacity" value="<?=$course->detail->capacity?>">
									</div>
									<?=form_error('capacity', '<div class="alert alert-danger small mt-2" role="alert">', '</div>');?>
								</div>
								<div class="form-group m-form__group">
									<label for="category_heading">
										Kısa Açıklama (160 Karakter)
									</label>
									<div class="input-group">
										<textarea class="form-control m-input" maxlength="160" name="short_content" rows="3"><?=$course->detail->short_content?></textarea>
									</div>
									<?=form_error('short_content', '<div class="alert alert-danger small mt-2" role="alert">', '</div>');?>
								</div>
								<div class="form-group m-form__group">
									<label for="category_heading">
										Hakkında Detay 
									</label>
									<div class="input-group">
										<textarea class="form-control m-input" rows="3" name="content"><?=$course->detail->content?></textarea>
									</div>
									<?=form_error('content', '<div class="alert alert-danger small mt-2" role="alert">', '</div>');?>
								</div>
								<div class="col-12 m--padding-left-30 m--padding-right-30">
									<label>
										Yüklü Hakkında Resim
									</label>
									<div style="border:1px solid #000;padding: 15px">
										<img src="<?=site_url($course->detail->image_detail)?>" width="200" alt="">
									</div>
								</div><br>
								<div class="col-12 m--padding-left-30 m--padding-right-30">
									<label>
										Hakkında Resim
									</label>
									<div class="m-dropzone dropzone m-dropzone--primary dz-clickable" action="<?=admin_url('Course/image')?>" id="m-dropzone-one" name="image">
										<div class="m-dropzone__msg dz-message needsclick">
											<h3 class="m-dropzone__msg-title">
												Resim Seçin
											</h3>
											<span class="m-dropzone__msg-desc">
												<i class="fa fa-picture-o"></i>
											</span>
										</div>
									</div>
								</div><br>
								<div class="col-12 m--padding-left-30 m--padding-right-30">
									<label>
										Eğitmenler
									</label>
									<select class="form-control m-select2" placeholder="Eğitmen Seçin" id="m_select2_3" name="teams[]" multiple="multiple">
										<?php foreach ($teams as $key => $val) { ?>
											<?php $selected = ''; ?>
											<?php foreach ($course->team as $key2 => $val2) {
												if ($val->id == $val2->team_id) {
													$selected = 'selected';
												}
											} ?>
											<option <?=$selected?> value="<?=$val->id?>" ><?=$val->title?></option>
										<?php } ?>
									</select>
									<?=form_error('teams[]', '<div class="alert alert-danger small mt-2" role="alert">', '</div>');?>
								</div>
								<br>
								<div class="col-12 m--padding-left-30 m--padding-right-30">
									<label>
										Yüklü Galeri Resimleri
									</label>
									<div style="border:1px solid #000;padding: 15px" class="row">
										<?php foreach ($course->images as $key => $val) { ?>
											<div class="col-md-2 img_<?=$val->id?>">
												<img src="<?=site_url($val->image)?>" width="200" alt="">
												<button type="button" onclick="removeItemNotRedirect('<?=site_url('Admin/Course/imageDelete/'.$val->id)?>','.img_<?=$val->id?>','Yüklü fotoğrafı ')" style="width: 200px;margin-top:10px" class="btn btn-danger m-btn m-btn--icon">
													<span>
														<i class="la la-trash"></i>
														<span>
															Sil
														</span>
													</span>
												</button>
											</div>
										<?php } ?>
									</div>
								</div><br>
								<div class="col-12 m--padding-left-30 m--padding-right-30">
									<label>
										Galeri Resimler
									</label>
									<div class="m-dropzone dropzone m-dropzone--success dz-clickable" action="<?=admin_url('Course/imageMulti')?>" style="width: 100%;" id="m-dropzone-three">
										<div class="m-dropzone__msg dz-message needsclick">
											<h3 class="m-dropzone__msg-title">
												Dosya Seçin veya Sürükleyin
											</h3>
											<span class="m-dropzone__msg-desc">
												Sadece jpg,png,svg,webp Formatları geçerlidir
											</span>
										</div>
									</div>
								</div>
								<hr>
								<div class="col-12 m--padding-left-30 m--padding-right-30">
									<?php foreach ($course->fixture as $key => $val) { ?>
										<label>
											Ders Programı <?=$key+1;?>
										</label>
										<input type="text" placeholder="Ders Progeramı Başlık" class="form-control" value="<?=$val->name?>" name="programBaslik[]">
											<br>
										<textarea class="form-control m-input" placeholder="Ders Progeramı İçerik" name="programIcerik[]" rows="3"><?=$val->content?></textarea>
									<br><br>
									<?php } ?>
	
									<label>
										Yeni Ders Programı
									</label>
									<input type="text" placeholder="Ders Progeramı Başlık" class="form-control" name="programBaslik[]">
										<br>
									<textarea class="form-control m-input" placeholder="Ders Progeramı İçerik" name="programIcerik[]" rows="3"></textarea>

									<div class="program"></div>
									<br><br>

									<button type="button" onclick="addProgram()" class="btn btn-success m-btn m-btn--icon m-btn--icon-only pull-right">
										<i class="la la-plus"></i>
									</button>
									<br><br>
								</div>
								<hr>
								<div class="col-12 m--padding-left-30 m--padding-right-30">

									<?php foreach ($course->sss as $key => $val) { ?>
										<label>
											Sıkça Sorulan Sorular <?=$key+1;?>
										</label>
										<input type="text" placeholder="Soru" class="form-control" value="<?=$val->name?>" name="soru[]">
											<br>
										<textarea class="form-control m-input" placeholder="Cevap" name="cevap[]" rows="3"><?=$val->content?></textarea>
									<br><br>
									<?php } ?>
									<label>
										Yeni Sıkça Sorulan Sorular
									</label>
									<input type="text" placeholder="Soru" class="form-control" name="soru[]">
										<br>
									<textarea class="form-control m-input" placeholder="Cevap" name="cevap[]" rows="3"></textarea>

									<div class="sss"></div>
									<br><br>
									<button type="button" onclick="addSSS()" class="btn btn-success m-btn m-btn--icon m-btn--icon-only pull-right">
										<i class="la la-plus"></i>
									</button>
								</div>
								<br>
								<br>
								<br>
								<div class="m-form__actions m-form__actions">
									<div class="row">
										<div class="col-lg-12 text-right">
											<button type="submit" class="btn btn-primary">
												Ekle
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

<script>
	var i = 2;
	function addProgram() {
		var text = '<hr><label>\
						Yeni Ders Programı '+i+'\
					</label>\
					<input type="text" placeholder="Ders Progeramı Başlık" class="form-control" name="programBaslik[]">\
						<br>\
					<textarea class="form-control m-input" placeholder="Ders Progeramı İçerik" name="programIcerik[]" rows="3"></textarea>';
		i++;
		$('.program').append(text);
	}

	var r = 2;
	function addSSS() {
		var text = '<hr><label>\
						Yeni Sıkça Sorulan Sorular '+r+'\
					</label>\
					<input type="text" placeholder="Soru" class="form-control" name="soru[]">\
						<br>\
					<textarea class="form-control m-input" placeholder="Cevap" name="cevap[]" rows="3"></textarea>';
		r++;
		$('.sss').append(text);
	}

	$('#service').on('change',function() {
		var id = $(this).val();
		var slug = $('#service > option[value='+id+']').attr('slug');
		$('.allInsert').remove();
		if (slug != undefined) {
			$.ajax({
				url: '<?=site_url()?>Admin/Course/getSubService/'+slug,
				method:'POST',
				dataType : 'JSON',
				success: function(result){
					var content = '';
					$.each( result, function(key,val) {
						content += '<option class="allInsert" value="'+val.id+'">'+val.name+'</option>';
					});
					$('#sub_service').append(content);
				},error:function(result) {

				}
			});
		}
	})
</script>