<!DOCTYPE html>
<html lang="en" >
	<!-- begin::Head -->
	<head>
		<meta charset="utf-8" />
		<title>
			Kodakıl - İçerik Yönetim Sistemi
		</title>
		<meta name="description" content="Latest updates and statistic charts">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<!--begin::Web font -->
		<script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.16/webfont.js"></script>
		<script>
          WebFont.load({
            google: {"families":["Poppins:300,400,500,600,700","Roboto:300,400,500,600,700"]},
            active: function() {
                sessionStorage.fonts = true;
            }
          });
		</script>
	  	<script src="https://www.google.com/recaptcha/api.js?render=YOUR_RECAPTCHA_SITE_KEY"></script>
		<!--end::Web font -->
		<!--begin::Base Styles -->
		<link href="<?=site_url('assets/admin/css/vendors.bundle.css')?>" rel="stylesheet" type="text/css" />
		<link href="<?=site_url('assets/admin/css/style.bundle.css')?>" rel="stylesheet" type="text/css" />
		<!--end::Base Styles -->
		<link rel="shortcut icon" href="<?=site_url('assets/admin/images/favicon.ico')?>" />
	</head>
	<!-- end::Head -->
	<!-- end::Body -->
	<body class="m--skin- m-header--fixed m-header--fixed-mobile m-aside-left--enabled m-aside-left--skin-dark m-aside-left--offcanvas m-footer--push m-aside--offcanvas-default" style="background-image: url(<?=site_url('assets/admin/images/bg-1.jpg')?>);" >
		<!-- begin:: Page -->
		<div class="m-grid m-grid--hor m-grid--root m-page">
			<div class="m-grid__item m-grid__item--fluid m-grid m-grid--hor m-login m-login--singin m-login--2 m-login-2--skin-1" id="m_login" >
				<div class="m-grid__item m-grid__item--fluid	m-login__wrapper">
					<div class="m-login__container">
						<div class="m-login__logo">
							<img src="<?=site_url('assets/front/images/logowhite.png')?>" alt="Aliağa Gençlik Merkezi" style="max-width:125px">
						</div>
						<div class="m-login__signin">
							<div class="m-login__head">
								<h2 class="m-login__title">
									Kodakıl İçerik Yönetim Sistemi
								</h2>
							</div>
							<form class="m-login__form m-form" action="#" method="post">
								<div class="form-group m-form__group">
									<input class="form-control m-input" type="text" placeholder="Kullanıcı Adı" name="username" autocomplete="off" id="m_login_signin_username">
								</div>
								<div class="form-group m-form__group">
									<input class="form-control m-input m-login__form-input--last" type="password" placeholder="Şifre" name="password" id="m_login_signin_password">
								</div>
								<input type="hidden" id="g-recaptcha-response" name="g-recaptcha-response">
								<div class="m-login__form-action">
									<button type="button" id="m_login_signin_submit" class="btn btn-focus m-btn m-btn--pill m-btn--custom m-btn--air  m-login__btn m-login__btn--primary">
										Giriş Yap
									</button>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- end:: Page -->
		<!--begin::Base Scripts -->
		<script src="<?=site_url('assets/admin/js/vendors.bundle.js')?>" type="text/javascript"></script>
		<script src="<?=site_url('assets/admin/js/scripts.bundle.js')?>" type="text/javascript"></script>
		<!--end::Base Scripts -->
		<!--begin::Page Snippets -->
		<script src="<?=site_url('assets/admin/js/login.js')?>" type="text/javascript"></script>
		<script src="<?=site_url('assets/admin/js/sweetalert2.js')?>"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.blockUI/2.70/jquery.blockUI.min.js"></script>
		<!--end::Page Snippets -->
	</body>
	<!-- end::Body -->
</html>
