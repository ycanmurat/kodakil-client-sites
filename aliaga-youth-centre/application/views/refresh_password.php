<section class="profile">
	<div class="page-banner" style="background-image:url('https://fakeimg.pl/1920x250/'); ">
		<h2>Şifrenizi Sıfırlayın</b></h2>
	</div>
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="profile-nav">
					<span class="active">Şifrenizi Sıfırlayın</span>
				</div>
			</div>
			<div class="col-md-12">
				<div class="profile-setting">
					<form action="<?=current_url()?>" method="post">
						<div class="item-group">
							<div class="item">
								<label>Yeni Şifre</label>
								<input type="password" class="form-input" name="new_password" id="new_password">
							</div>
							<div class="item">
								<label>Yeni Şifre Tekrar</label>
								<input type="password" name="new_password_retry" id="new_password_retry">
							</div>
							<input type="hidden" id="reset_secret_key" value="<?=$this->encryption->encrypt('holly_sirk')?>"/>
							<input type="hidden" id="new_password_captcha" name="new_password_captcha"/>
						</div>
						<div class="item">
							<button type="button" id="new_password_update">Şifremi Güncelle</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</section>
