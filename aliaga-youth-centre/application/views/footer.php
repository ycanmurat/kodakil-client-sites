<footer>
	<section class="follow">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 col-12">
					<div class="be-teacher">
						<i class="fas fa-graduation-cap"></i>
						<h3>AGM Eğitmeni olmak için</h3>
						<a data-toggle="modal" data-target="#egitmenModal">Tıklayın</a>
					</div>
				</div>
				<div class="col-lg-6 col-12">
					<div class="subscribe">
						<h4>İlk Sizin Haberiniz Olsun !
							<span>
								Tüm yeniliklerden sizi haberdar edelim..
							</span>
						</h4>
						
						<form action="#" method="post">
							<input type="text" name="followPhoneOrEmail" id="followPhoneOrEmail" placeholder="E-Posta veya Telefon ile bilgilendir">
							<input type="hidden" id="follow_captcha" name="follow_captcha"/>
							<button type="button" id="follow">Takip ET</button>
						</form>
					</div>
				</div>
			</div>
		</div>
	</section>

	<div class="container">
		<div class="row">
			<div class="col-lg-3 col-md-6">
				<div class="item about">
					<h5>Hakkımızda</h5>
					<p><?php
						if (strlen($footerCorporate->content) > 249) {
							$find = array('<h2>','</h2>','<p>','</p>');
							$replace = array('','','<p>','</p>');
							$content = str_replace($find, $replace, $footerCorporate->content);
							echo substr($content,0,249).' ..';
						} else {
							$find = array('<h2>','</h2>','<p>','</p>');
							$replace = array('','','<p>','</p>');
							echo str_replace($find, $replace, $footerCorporate->content);
						}
					?></p>
					<a href="<?=site_url('hakkimizda')?>">Detay</a>
				</div>
			</div>
			<div class="col-lg-3 col-md-6 d-md-block d-none">
				<div class="item courses">
					<h5>Popüler Kurslar</h5>
					<a href="#" class="courses">
						<div class="img-area"><img src="<?=site_url('assets/front/images/courseimage.jpg')?>"></div>
						<div class="content"><p>Lorem ipsum Dolor sit amet Lorem ipsum dolor sit amet</p><span><i class="fas fa-graduation-cap"></i>Murat Can</span></div>
					</a>
					<a href="#" class="courses">
						<div class="img-area"><img src="<?=site_url('assets/front/images/courseimage.jpg')?>"></div>
						<div class="content"><p>Lorem ipsum Dolor sit amet Lorem ipsum dolor sit amet</p><span><i class="fas fa-graduation-cap"></i>Murat Can</span></div>
					</a>
					<a href="#" class="courses">
						<div class="img-area"><img src="<?=site_url('assets/front/images/courseimage.jpg')?>"></div>
						<div class="content"><p>Lorem ipsum Dolor sit amet Lorem ipsum dolor sit amet</p><span><i class="fas fa-graduation-cap"></i>Murat Can</span></div>
					</a>
				</div>
			</div>
			<div class="col-lg-3 col-md-6 col-sm-6">
				<div class="item company">
					<h5>Kurumsal</h5>
					<?foreach ($footer_statics as $key => $val) {?>
						<a href="<?=site_url('bilgi/'.$val->slug)?>"><?=$val->title?></a>
					<?}?>
				</div>
			</div>
			<div class="col-lg-3 col-md-6 col-sm-6">
				<div class="item contact">
					<h5>İletişim</h5>
					<div class="wrapper">
						<i class="fas fa-map-marker-alt"></i>
						<p>Kültür Mah. Lozan Cad. No:58/3 Aliağa- İzmir</p>
					</div>
					<div class="wrapper">
						<i class="fas fa-phone"></i>
						<p>Tel : 0 232 616 39 80</p>
					</div>
					<div class="wrapper">
						<i class="fas fa-fax"></i>
						<p>Fax : 0 232 616 39 80</p>
					</div>
					<div class="wrapper">
						<i class="fas fa-envelope"></i>
						<p>bilgi@aliagabelediyejeotermal.com</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</footer>


<!-- Anket Modal -->
<div class="modal fade" id="anketModal" tabindex="-1" role="dialog" aria-labelledby="anketModalTitle" aria-hidden="true">
	<div class="modal-dialog modal-lg" role="document">
		<div class="modal-content">
			<div class="modal-body">
				<p>Kendimizi geliştirmemize yardımcı olabilirsiniz</p>
				<form>
					<div class="item">
						<p>Örnek Test Sorusu burada Yer Alacak</p>

						<div class="pretty p-default p-curve">
							<input type="radio" name="soru-one" />
							<div class="state p-primary-o">
								<label>1</label>
							</div>
						</div>

						<div class="pretty p-default p-curve">
							<input type="radio" name="soru-one" />
							<div class="state p-primary-o">
								<label>2</label>
							</div>
						</div>

						<div class="pretty p-default p-curve">
							<input type="radio" name="soru-one" />
							<div class="state p-primary-o">
								<label>3</label>
							</div>
						</div>
					</div>

					<div class="item">
						<p>Örnek Test Sorusu burada Yer Alacak</p>

						<div class="pretty p-default p-curve">
							<input type="radio" name="soru-two" />
							<div class="state p-primary-o">
								<label>Katılıyorum</label>
							</div>
						</div>

						<div class="pretty p-default p-curve">
							<input type="radio" name="soru-two" />
							<div class="state p-primary-o">
								<label>Kararsızım</label>
							</div>
						</div>

						<div class="pretty p-default p-curve">
							<input type="radio" name="soru-two" />
							<div class="state p-primary-o">
								<label>Katılmıyorum</label>
							</div>
						</div>
					</div>

					<div class="item">
						<p>Örnek Test Sorusu burada Yer Alacak</p>

						<div class="pretty p-default p-curve">
							<input type="radio" name="soru-other" />
							<div class="state p-primary-o">
								<label>Katılıyorum</label>
							</div>
						</div>

						<div class="pretty p-default p-curve">
							<input type="radio" name="soru-other" />
							<div class="state p-primary-o">
								<label>Kararsızım</label>
							</div>
						</div>

						<div class="pretty p-default p-curve">
							<input type="radio" name="soru-other" />
							<div class="state p-primary-o">
								<label>Katılmıyorum</label>
							</div>
						</div>

						<div class="pretty p-default p-curve">
							<input type="radio" name="soru-other" />
							<div class="state p-primary-o">
								<label>Katılmıyorum</label>
							</div>
						</div>

						<div class="pretty p-default p-curve">
							<input type="radio" name="soru-other" />
							<div class="state p-primary-o">
								<label>Katılmıyorum</label>
							</div>
						</div>
					</div>

					<div class="item">
						<p>Örnek Test Sorusu burada Yer Alacak</p>

						<div class="pretty p-default p-curve">
							<input type="radio" name="soru-three" />
							<div class="state p-primary-o">
								<label>8-18 Yaş</label>
							</div>
						</div>

						<div class="pretty p-default p-curve">
							<input type="radio" name="soru-three" />
							<div class="state p-primary-o">
								<label>19-28 Yaş</label>
							</div>
						</div>

						<div class="pretty p-default p-curve">
							<input type="radio" name="soru-three" />
							<div class="state p-primary-o">
								<label>28-61 Yaş</label>
							</div>
						</div>
					</div>
					<div class="buton-area">
						<button type="button" data-dismiss="modal">Vazgeç</button>
						<button type="button">Gönder</button>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>

<!-- Eğitmen Form Modal -->
<div class="modal fade" id="egitmenModal" tabindex="-1" role="dialog" aria-labelledby="egitmenModalTitle" aria-hidden="true">
	<div class="modal-dialog modal-lg" role="document">
		<div class="modal-content">
			<div class="modal-body">
				<p class="title">Eğitmenimiz olun birlikte geleceğe yön verelim</p>
				<form method="post" action="<?=current_url()?>">
					<div class="item">
						<label class="main-label">Tc Kimlik No</label>
						<input type="text" name="identity_number" id="i_identity_number">
					</div>
					<div class="item">
						<label class="main-label">İsim</label>
						<input type="text" name="name" id="i_name" maxlength="250">
					</div>
					<div class="item">
						<label class="main-label">Soyisim</label>
						<input type="text" name="surname" id="i_surname" maxlength="250">
					</div>
					<div class="item">
						<label class="main-label">E-Posta</label>
						<input type="email" name="email" id="i_email">
					</div>
					<div class="item">
						<label class="main-label">Telefon</label>
						<input type="text" name="phone" id="i_phone">
					</div>
					<div class="item">
						<label class="main-label">Adres</label>
						<input type="text" name="address" id="i_address">
					</div>
					<div class="item">
						<label class="main-label">Şifre</label>
						<input type="password" name="password" id="i_password">
					</div>
					<div class="item">
						<label class="main-label">Şifre Tekrar</label>
						<input type="password" name="password_retry" id="i_password_retry">
					</div>
					<div class="item">
						<label class="main-label">Uzmanlık Alanınız</label>
						<input type="text" name="profession" id="i_profession" maxlength="250">
					</div>
					<div class="item">
						<label class="main-label">Doğum Tarihi</label>
						<input type="date" name="birth_date" id="i_birth_date">
					</div>
					<div class="item radio">
						<label>Cinsiyetiniz</label>
						<div class="pretty p-default p-curve">
							<input type="radio" name="i_gender" id="i_gender" value="2"/>
							<div class="state p-danger-o">
								<label>Erkek</label>
							</div>
						</div>
						<div class="pretty p-default p-curve">
							<input type="radio" name="i_gender" id="i_gender" value="1"/>
							<div class="state p-danger-o">
								<label>Kadın</label>
							</div>
						</div>
					</div>
					<input type="hidden" id="g-recaptcha-response-instructor" name="g-recaptcha-response-instructor"/>
					<input type="hidden" id="i_secret_key" value="<?=$this->encryption->encrypt('instructor_send_modal_send_success_form_password')?>"/>
					<div class="m-dropzone dropzone m-dropzone--primary dz-clickable" action="<?=site_url('Home/instructor')?>" id="m-dropzone-one">
                       <div class="m-dropzone__msg dz-message needsclick">
                          <h3 class="m-dropzone__msg-title">
                             CV Yükleyin
                          </h3>
                          <span class="m-dropzone__msg-desc">
                          <i class="fa fa-picture-o"></i>
                          </span>
                       </div>
                    </div>
					<div class="buton-area">
						<button type="button" data-dismiss="modal">Vazgeç</button>
						<button type="button" id="instructor_send">Gönder</button>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>

<!-- Eğitmen Form Modal -->
<div class="modal fade" id="registerModal" tabindex="-1" role="dialog" aria-labelledby="registerModalTitle" aria-hidden="true">
	<div class="modal-dialog modal-lg" role="document">
		<div class="modal-content">
			<div class="modal-body">
				<p class="title">Lütfen Aşağıdaki Bilgileri Eksiksiz Doldurun</p>
				<form method="post" action="#">
					<div class="item">
						<label class="main-label">Tc Kimlik No</label>
						<input type="number" name="identity_number" id="identity_number" maxlength="11">
					</div>
					<div class="item">
						<label class="main-label">İsim</label>
						<input type="text" name="name" id="name" maxlength="250">
					</div>
					<div class="item">
						<label class="main-label">Soyisim</label>
						<input type="text" name="surname" id="surname" maxlength="250">
					</div>
					<div class="item">
						<label class="main-label">E-Posta</label>
						<input type="email" name="email" id="email">
					</div>

					<div class="item">
						<label class="main-label">Telefon</label>
						<input type="text" name="phone" id="phone">
					</div>
					<div class="item">
						<label class="main-label">Adres</label>
						<input type="text" name="address" id="address">
					</div>
					<div class="item">
						<label class="main-label">Şifre</label>
						<input type="password" name="password" id="password">
					</div>

					<div class="item">
						<label class="main-label">Şifre Tekrar</label>
						<input type="password" name="password_retry" id="password_retry">
					</div>
					
					<div class="item">
						<label class="main-label">Doğum Tarihi</label>
						<input type="date" name="birth_date" id="birth_date">
					</div>
					<div class="item radio">
						<label>Cinsiyetiniz</label>
						<div class="pretty p-default p-curve">
							<input type="radio" name="gender" id="gender" value="2"/>
							<div class="state p-danger-o">
								<label>Erkek</label>
							</div>
						</div>
						<div class="pretty p-default p-curve">
							<input type="radio" name="gender" id="gender" value="1"/>
							<div class="state p-danger-o">
								<label>Kadın</label>
							</div>
						</div>
					</div>
					<input type="hidden" id="g-recaptcha-response" name="g-recaptcha-response" id="g-recaptcha-response"/>
					<input type="hidden" id="secret_key" value="<?=$this->encryption->encrypt('register_modal_send_success_form_password')?>"/>
					<input type="hidden" id="course_id" name="course_id" value="" />
					<div class="buton-area">
						<button type="button" data-dismiss="modal">Vazgeç</button>
						<button type="button" id="register">Gönder</button>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
<script src="<?=site_url('assets/front/js/calendar.js')?>"></script>
<script src="<?=site_url('assets/front/js/main.js?v='.md5(date('Y-m-d H:i:s')))?>"></script>
<script src="<?=site_url('assets/front/js/sweetalert.js')?>"></script>
<script src="<?=site_url('assets/front/js/uiblock.js')?>"></script>
<script src="<?=site_url('assets/front/js/mask.js')?>"></script>
<script src="<?=site_url('assets/front/js/dropzone.js')?>"></script>
<script src="https://www.google.com/recaptcha/api.js?render=YOUR_RECAPTCHA_SITE_KEY"></script>
</body>
</html>


