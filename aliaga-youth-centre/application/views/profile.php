<section class="profile">
	<div class="page-banner" style="background-image:url('https://fakeimg.pl/1920x250/'); ">
		<h2>Hoşgeldin, <b><?=$user->name.' '.$user->surname?></b></h2>
	</div>
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="profile-nav">
					<span class="active" id="profile">Profil</span>
					<span class="" id="course">Kurslarım</span>
					<span><a href="<?=site_url('Home/logout')?>">Çıkış</a></span>
				</div>
			</div>
			<div class="col-md-12">
				<div class="profile-setting">
					<div class="title">
						<h2>Profil Ayarları</h2>
						<?if(!empty($this->session->flashdata('success'))){?>
						<div class="alert alert-success alert-dismissible fade show" role="alert">
							<?=$this->session->flashdata('success')?>
							<button type="button" class="close" data-dismiss="alert" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>
						<?}elseif(!empty($this->session->flashdata('danger'))){?>
						<div class="alert alert-danger alert-dismissible fade show" role="alert">
							<?=$this->session->flashdata('danger')?>
							<button type="button" class="close" data-dismiss="alert" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>
						<?}?>
					</div>
					<form action="<?=current_url()?>" method="post">
						<div class="item-group">
							<div class="item">
								<label>Ad</label>
								<input type="text" class="form-input" value="<?=(!empty(set_value('name'))?set_value('name'):$user->name)?>" name="name" id="name">
								<?if(!empty(form_error('name'))){?>
									<div class="alert alert-warning alert-dismissible fade show" role="alert" style="border-radius:25px;margin-top:10px;">
									  <?=form_error('name')?>
									</div>
								<?}?>
							</div>
							<div class="item">
								<label>Soyad</label>
								<input type="text" value="<?=(!empty(set_value('surname'))?set_value('surname'):$user->surname)?>" name="surname" id="surname">
								<?if(!empty(form_error('surname'))){?>
									<div class="alert alert-warning alert-dismissible fade show" role="alert" style="border-radius:25px;margin-top:10px;">
									  <?=form_error('surname')?>
									</div>
								<?}?>
							</div>
						</div>
						<div class="item">
							<label>E-Posta</label>
							<input type="text" name="email" value="<?=(!empty(set_value('email'))?set_value('email'):$user->email)?>" id="email">
							<?if(!empty(form_error('email'))){?>
								<div class="alert alert-warning alert-dismissible fade show" role="alert" style="border-radius:25px;margin-top:10px;">
								  <?=form_error('email')?>
								</div>
							<?}elseif(!empty($this->session->flashdata('email_error'))){?>
								<div class="alert alert-warning alert-dismissible fade show" role="alert" style="border-radius:25px;margin-top:10px;">
								  <?=$this->session->flashdata('email_error')?>
								</div>
							<?}?>
						</div>
						<div class="item">
							<label>Doğum Tarihi</label>
							<input type="date" name="birth_date" value="<?=(!empty(set_value('birth_date'))?set_value('birth_date'):$user->birth_date)?>" id="birth_date">
							<?if(!empty(form_error('birth_date'))){?>
								<div class="alert alert-warning alert-dismissible fade show" role="alert" style="border-radius:25px;margin-top:10px;">
								  <?=form_error('birth_date')?>
								</div>
							<?}?>
						</div>
						<div class="item radio">
							<label>Cinsiyet</label>
							<div class="pretty p-default p-curve">
								<input type="radio" name="gender" value="2" <?=($user->gender == 2)?'checked':''?>>
								<div class="state p-primary-o">
									<label>Erkek</label>
								</div>
							</div>
							<div class="pretty p-default p-curve">
								<input type="radio" name="gender" value="1" <?=($user->gender == 1)?'checked':''?>>
								<div class="state p-primary-o">
									<label>Kadın</label>
								</div>
							</div>
							<?if(!empty(form_error('gender'))){?>
								<div class="alert alert-warning alert-dismissible fade show" role="alert" style="border-radius:25px;margin-top:10px;">
								  <?=form_error('gender')?>
								</div>
							<?}?>
							<input type="hidden" value="1" name="type"/>
							<input type="hidden" value="<?=$this->encryption->encrypt('settings_modal_send_success_form_password')?>" name="secret_key"/>
						</div>
						<div class="item">
							<button type="submit">Güncelle</button>
						</div>
					</form>
					<form action="<?=current_url()?>" method="post">
						<?if(!empty($this->session->flashdata('p_success'))){?>
						<div class="alert alert-success alert-dismissible fade show" role="alert">
							<?=$this->session->flashdata('p_success')?>
							<button type="button" class="close" data-dismiss="alert" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>
						<?}elseif(!empty($this->session->flashdata('p_danger'))){?>
						<div class="alert alert-danger alert-dismissible fade show" role="alert">
							<?=$this->session->flashdata('p_danger')?>
							<button type="button" class="close" data-dismiss="alert" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>
						<?}?>
						<div class="item-group">
							<div class="item">
								<label>Şifre</label>
								<input type="password" class="form-input" name="password">
								<?if(!empty(form_error('password'))){?>
								<div class="alert alert-warning alert-dismissible fade show" role="alert" style="border-radius:25px;margin-top:10px;">
								  <?=form_error('password')?>
								</div>
							<?}?>
							</div>
							<div class="item">
								<label>Şifre Tekrar</label>
								<input type="password" name="password_retry">
								<?if(!empty(form_error('password_retry'))){?>
								<div class="alert alert-warning alert-dismissible fade show" role="alert" style="border-radius:25px;margin-top:10px;">
								  <?=form_error('password_retry')?>
								</div>
							<?}?>
								<input type="hidden" value="<?=$this->encryption->encrypt('settings_modal_send_success_form_password')?>" name="secret_key"/>
								<input type="hidden" value="2" name="type"/>
							</div>
						</div>
						<div class="item">
							<button type="submit">Şifre Güncelle</button>
						</div>
					</form>
				</div>

				<div class="course-setting">
					<div class="title">
						<h2>Kurslarım</h2>
						<div class="item-area">
							<div class="list-area">
								<div class="item">
									<a href="http://aliagagenclikmerkezi.com/kurs/asd-asd-asd-a-1">
										<div class="area">
											<div class="badge-area">
												<span class="ribbon new">Yeni</span>
												<span class="ribbon pop">Popüler</span>
												<span class="ribbon staff">Sanat</span>
											</div>
											<img src="http://aliagagenclikmerkezi.com/assets/uploads/ce6201901f842b7bce9d9a8d244eee04.png">
											<span class="see-more"><i class="fas fa-eye"></i></span>
										</div>
										<div class="area">
											<h4>asd asd asd a</h4>
											<p class="course-detail">asd as dasd as dasdasd asd as dasd as dasdasd asd as dasd as dasdasd asd as dasd as dasdasd asd as dasd as dasdasd asd as dasd as dasdasd asd as dasd as dasdasd asd as dasd as dasdasd asd as dasd as dasdasd asd as dasd as dasdasd</p>
											<p class="teachers">
												<span><i class="fas fa-chalkboard-teacher"></i> Uğur Yetkil </span>
											</p>
											<div class="student">
												<p class="item"><i class="fas fa-graduation-cap"></i> <b>0</b> Öğrenci</p>
												<p class="item"><i class="fas fa-users"></i><span>501</span>Kontenjan</p>
											</div>
											<div class="require">
												<p class="item">Gereksinimler : </p>
												<p class="item">Yaş : <b>0 - 16</b></p>
												<p class="item">Cinsiyet : <b>Kadın </b></p>
												<p class="item">Seviye : <b>asdasd</b></p>
											</div>
											<p class="Cost">Ücretsiz</p>
										</div>
									</a>
								</div>
							</div>
						</div>
					</div>
				</div>

			</div>
		</div>
	</div>
</section>
