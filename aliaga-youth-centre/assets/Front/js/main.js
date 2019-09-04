$(document).ready(function(){
	$(".hamburger").click(function(){
		$(this).toggleClass("is-active");
		$('ul.MenuList').toggleClass('Open');
		$('body').toggleClass('blur');
	});

	$("div#loginModal div.forgot").click(function(){
		$('form.user-login').slideToggle(300);
		$('form.forgot-password').slideToggle(300);
		$('button.login-btn').fadeOut(0);
		$('button.forgot-btn').fadeIn(0);

	});

	$("div#loginModal button.backto").click(function(){
		$('form.user-login').slideToggle(300);
		$('form.forgot-password').slideToggle(300);
		$('button.login-btn').fadeToggle(0);
		$('button.forgot-btn').fadeToggle(0);
	});

	$("section.profile div.profile-nav span#course").click(function(){
		$('section.profile div.profile-setting').slideToggle(300);
		$('section.profile div.course-setting').slideToggle(300);
		$('section.profile div.profile-nav span#profile').removeClass('active');
		$(this).addClass('active');
	});

	$("section.profile div.profile-nav span#profile").click(function(){
		$('section.profile div.profile-setting').slideToggle(300);
		$('section.profile div.course-setting').slideToggle(300);
		$('section.profile div.profile-nav span#course').removeClass('active');
		$(this).addClass('active');
	});

	$(".hamburger").click(function(){
		$('.hamburger-overlay').toggleClass('active');
		$('header .Navigator div.Nav').toggleClass('active');
		$('header .Navigator div.Logo').fadeToggle(100);

	});


	$('#counter').each(function() {
		var $this = $(this),
		countTo = $this.attr('data-count');

		$({ countNum: $this.text()}).animate({
			countNum: countTo
		},
		{

			duration: 8000,
			easing:'linear',
			step: function() {
				$this.text(Math.floor(this.countNum));
			},
			complete: function() {
				$this.text(this.countNum);
			}
		});
	});

	if(window.location.pathname != '/'){
		$('header .Navigator div.Nav').addClass('notindex');
	} else {
		$('header .Navigator div.Nav').removeClass('notindex');
	}
});


$("#filter-list").on("keyup", function() {
	var value = $(this).val().toLowerCase();
	$("section.listing-items div.list-area div.item").filter(function() {
		$(this).toggle($(this).text().toLowerCase().indexOf(value) > -1);
		$('section.listing-items div.list-area div.item').toggleClass( "listed" );
	});
});


$(document).ready(function(){
	var fileInput = document.querySelector('.form-input-file');
	var fileInputText = document.querySelector('.form-input--file-text');
	fileInputTextContent = fileInputText.textContent;

	fileInput.addEventListener('change', function(e) {
		var value = e.target.value.length > 0 ? e.target.value : fileInputTextContent;
		
		fileInputText.textContent = value.replace('C:\\fakepath\\', '');
	});
});
$("#write-comment").click(function(){
	$('.comment-form').slideToggle(300);
});

$(window).scroll(function() {    
	var scroll = $(window).scrollTop();
	if (scroll >= 108) {
		$("header").addClass("FixedHead");
		$("body").addClass("FixedHead");
	}else{
		$("header").removeClass("FixedHead");
		$("body").removeClass("FixedHead");
	}
});

$('.owl-slider').owlCarousel({
	autoplay:true,
	autoplayTimeout:5000,
	autoplayHoverPause:false,
	animateOut: 'fadeOut',
	animateIn: 'fadeIn',
	navText:['<img src="/assets/front/images/icons/left-arrow.svg">','<img src="/assets/front/images/icons/next.svg">'],
	loop:true,
	margin:0,
	slideSpeed : 300,
	paginationSpeed : 400,
	dots:false,
	nav:true,
	responsive:{
		0:{
			items:1
		},
		600:{
			items:1
		},
		1000:{
			items:1
		}
	}

});


$('.listing-slider').owlCarousel({
	autoplay:true,
	autoplayTimeout:5000,
	autoplayHoverPause:false,
	animateOut: 'fadeOut',
	animateIn: 'fadeIn',
	navText:['<img src="/assets/front/images/icons/left-arrow.svg">','<img src="/assets/front/images/icons/next.svg">'],
	loop:true,
	margin:0,
	slideSpeed : 300,
	paginationSpeed : 400,
	dots:false,
	nav:true,
	responsive:{
		0:{
			items:1
		},
		600:{
			items:1
		},
		1000:{
			items:1
		}
	}

});


$('.owl-courses-new').owlCarousel({
	loop:false,
	margin:20,
	dots:false,
	navText:['<img src="/assets/front/images/icons/left-arrow.svg">','<img src="/assets/front/images/icons/next.svg">'],
	nav:true,
	responsive:{
		0:{
			items:1
		},
		600:{
			items:2
		},
		1000:{
			items:3
		}
	}
});

$('.owl-courses-populer').owlCarousel({
	loop:false,
	margin:20,
	dots:false,
	navText:['<img src="/assets/front/images/icons/left-arrow.svg">','<img src="/assets/front/images/icons/next.svg">'],
	nav:true,
	responsive:{
		0:{
			items:1
		},
		600:{
			items:2
		},
		1000:{
			items:3
		}
	}
});

$('.owl-list-teachers').owlCarousel({
	loop:false,
	margin:20,
	slideBy : 3,
	dots:false,
	navText:['<img src="/assets/front/images/icons/left-arrow.svg">','<img src="/assets/front/images/icons/next.svg">'],
	nav:true,
	responsive:{
		0:{
			items:1
		},
		600:{
			items:2
		},
		1000:{
			items:3
		}
	}
});

$('.owl-alt-list-teachers').owlCarousel({
	loop:false,
	margin:20,
	slideBy : 3,
	dots:false,
	navText:['<img src="/assets/front/images/icons/left-arrow.svg">','<img src="/assets/front/images/icons/next.svg">'],
	nav:true,
	responsive:{
		0:{
			items:1
		},
		600:{
			items:2
		},
		1000:{
			items:3
		}
	}
})



if ($(window).width() < 992) {
	$("header .header-nav .Nav > ul > li > a").clone().appendTo("div.mobileMenu");
	$("header .header-nav .Nav > ul > li.link").hide();
};


window.onload = function() {
	setTimeout(function(){ $("#onload").addClass('loading');}, 1400);
};


$(".header-nav .hamburger").click(function() {
	$('.mobileMenu').toggleClass('active');
	$('.mobileOverMenu').toggleClass('active');

});


$(".goTop").click(function() {
	$("html, body").animate({ scrollTop: 0 }, 1000);
});

$('#course-sign-in').click(function(){
	var course_id = $('#course-sign-in').attr('course-data-id');
	$('#course_id').val(course_id);
	Swal.fire({type: 'warning', title: 'Uyarı', html: 'Lütfen Karşınıza Çıkıcak Form\'a Aliağa Gençlik Merkezi\'ne kayıt olan kişinin bilgilerini giriniz.', confirmButtonColor: '#0098ff', confirmButtonText: 'Tamam'});
	$('.swal2-confirm').click(function(){
		if (swal.isVisible()) {
			$('#registerModal').modal('show');
		}
	});
});


$( document ).ready(function() {

	//Masks

	$('#phone').inputmask('9999999999');

	//Register Module
	$('#register').click(function(){
		$.blockUI({ css: { border: 'none', padding: '15px', backgroundColor: '#000', '-webkit-border-radius': '30px', '-moz-border-radius': '30px', opacity: .5, color: '#fff' }, message: 'Lütfen Bekleyin İşleminiz Gerçekleştiriliyor ..' }); 
		var registerInformation = {};
		registerInformation.identity_number = $('#identity_number').val();
		registerInformation.name = $('#name').val();
		registerInformation.surname = $('#surname').val();
		registerInformation.email = $('#email').val();
		registerInformation.phone = $('#phone').val();
		registerInformation.password = $('#password').val();
		registerInformation.password_retry = $('#password_retry').val();
		registerInformation.birth_date = $('#birth_date').val();
		registerInformation.gender = $("input[name='gender']:checked").val();
		registerInformation.secret_key = $('#secret_key').val();
		registerInformation.course_id = $('#course_id').val();
		console.log(registerInformation);
		grecaptcha.ready(function() {
			grecaptcha.execute('YOUR_RECAPTCHA_SITE_KEY', {action: '/Ajax/register'}).then(function(token) {
				$('#g-recaptcha-response').val(token);
				registerInformation.token = token;
				$.ajax({
					method: 'post',
					dataType: 'json',
					data : registerInformation,
					url: '/Ajax/register',
					success: function(result){
						if (result.status == true) {
							$.unblockUI();
							Swal.fire({type: 'success', title: 'Başarılı', html: 'Üyelik Kaydınız Tamamlandı, Yönlendiriliyorsunuz ..'});
							setTimeout(function(){
								window.location.href = result.redirect_url;
							},3000);
						} else {
							$.unblockUI();
							Swal.fire({type: 'warning', title: 'Uyarı', html: result.error, confirmButtonColor: '#0098ff', confirmButtonText: 'Anladım'});
						}
					}, error: function() {
						$.unblockUI();
						Swal.fire({type: 'error', title: 'Hata', html: 'Bağlantı Hatası, Lütfen Daha Sonra Tekrar Deneyin.'});
					}
				});
			});;
		});
	});

	//Login Module
	$('#login').click(function(){
		$.blockUI({ css: { border: 'none', padding: '15px', backgroundColor: '#000', '-webkit-border-radius': '30px', '-moz-border-radius': '30px', opacity: .5, color: '#fff' }, message: 'Lütfen Bekleyin İşleminiz Gerçekleştiriliyor ..' }); 
		var loginInformation = {};
		loginInformation.email = $('#login_email').val();
		loginInformation.password = $('#login_password').val();
		loginInformation.secret_key = $('#login_secret_key').val();
		grecaptcha.ready(function() {
			grecaptcha.execute('YOUR_RECAPTCHA_SITE_KEY', {action: '/Ajax/login'}).then(function(token) {
				$('#login_captcha').val(token);
				loginInformation.token = token;
				$.ajax({
					method: 'post',
					dataType: 'json',
					data : loginInformation,
					url: '/Ajax/login',
					success: function(result){
						if (result.status == true) {
							$.unblockUI();
							Swal.fire({type: 'success', title: 'Başarılı', html: 'Giriş Sağlandı, Yönlendiriliyorsunuz ..'});
							setTimeout(function(){
								window.location.href = result.redirect_url;
							},3000);
						} else {
							$.unblockUI();
							Swal.fire({type: 'warning', title: 'Uyarı', html: result.error, confirmButtonColor: '#0098ff', confirmButtonText: 'Anladım'});
						}
					}, error: function() {
						$.unblockUI();
						Swal.fire({type: 'error', title: 'Hata', html: 'Bağlantı Hatası, Lütfen Daha Sonra Tekrar Deneyin.'});
					}
				});
			});;
		});
	});

	//Follow
	$('#follow').click(function(){
		$.blockUI({ css: { border: 'none', padding: '15px', backgroundColor: '#000', '-webkit-border-radius': '30px', '-moz-border-radius': '30px', opacity: .5, color: '#fff' }, message: 'Lütfen Bekleyin İşleminiz Gerçekleştiriliyor ..' }); 
		var followInformation = {};
		followInformation.followPhoneOrEmail = $('#followPhoneOrEmail').val();
		grecaptcha.ready(function() {
			grecaptcha.execute('YOUR_RECAPTCHA_SITE_KEY', {action: '/Ajax/follow'}).then(function(token) {
				$('#follow_captcha').val(token);
				followInformation.token = token;
				$.ajax({
					method: 'post',
					dataType: 'json',
					data : followInformation,
					url: '/Ajax/follow',
					success: function(result){
						if (result.status == true) {
							$.unblockUI();
							Swal.fire({type: 'success', title: 'Başarılı', html: 'Kayıt Olduğunuz İçin Teşekkürler Sizi Tüm Yeniliklerden Haberdar Edeceğiz'});
						} else {
							$.unblockUI();
							Swal.fire({type: 'warning', title: 'Uyarı', html: result.error, confirmButtonColor: '#0098ff', confirmButtonText: 'Anladım'});
						}
					}, error: function() {
						$.unblockUI();
						Swal.fire({type: 'error', title: 'Hata', html: 'Bağlantı Hatası, Lütfen Daha Sonra Tekrar Deneyin.'});
					}
				});
			});;
		});
	});

	//Follow
	$('#sendContact').click(function(){
		$.blockUI({ css: { border: 'none', padding: '15px', backgroundColor: '#000', '-webkit-border-radius': '30px', '-moz-border-radius': '30px', opacity: .5, color: '#fff' }, message: 'Lütfen Bekleyin İşleminiz Gerçekleştiriliyor ..' }); 
		var contactInformation = {};
		contactInformation.name_lastname = $('#name_lastname').val();
		contactInformation.email = $('#email').val();
		contactInformation.title = $('#title').val();
		contactInformation.message = $('#message').val();
		contactInformation.secret_key = $('#secret_key').val();
		grecaptcha.ready(function() {
			grecaptcha.execute('YOUR_RECAPTCHA_SITE_KEY', {action: '/Ajax/contactSend'}).then(function(token) {
				$('#contactToken').val(token);
				contactInformation.token = token;
				$.ajax({
					method: 'post',
					dataType: 'json',
					data : contactInformation,
					url: '/Ajax/contactSend',
					success: function(result){
						if (result.status == true) {
							$.unblockUI();
							Swal.fire({type: 'success', title: 'Başarılı', html: 'Bilgileriniz Bize Ulaştı En Kısa Zamanda Size Geri Dönüş Sağlayacağız'});
						} else {
							$.unblockUI();
							Swal.fire({type: 'warning', title: 'Uyarı', html: result.error, confirmButtonColor: '#0098ff', confirmButtonText: 'Anladım'});
						}
					}, error: function() {
						$.unblockUI();
						Swal.fire({type: 'error', title: 'Hata', html: 'Bağlantı Hatası, Lütfen Daha Sonra Tekrar Deneyin.'});
					}
				});
			});;
		});
	});

	//Reset Password
	$('#resetPassword').click(function(){
		$.blockUI({ css: { border: 'none', padding: '15px', backgroundColor: '#000', '-webkit-border-radius': '30px', '-moz-border-radius': '30px', opacity: .5, color: '#fff' }, message: 'Lütfen Bekleyin İşleminiz Gerçekleştiriliyor ..' }); 
		var resetInformation = {};
		resetInformation.resetEmail = $('#resetEmail').val();
		resetInformation.secret_key = $('#reset_secret_key').val();
		grecaptcha.ready(function() {
			grecaptcha.execute('YOUR_RECAPTCHA_SITE_KEY', {action: '/Ajax/reset_password'}).then(function(token) {
				$('#reset_captcha').val(token);
				resetInformation.token = token;
				$.ajax({
					method: 'post',
					dataType: 'json',
					data : resetInformation,
					url: '/Ajax/reset_password',
					success: function(result){
						if (result.status == true) {
							$.unblockUI();
							Swal.fire({type: 'success', title: 'Başarılı', html: 'Şifre sıfırlama talebinizi sistemimizde kayıtlı email adresine gönderdik. Lütfen spam klasörünü kontrol etmeyi de unutmayın.'});
							setTimeout(function(){
								window.location.href = result.redirect_url;
							},3000);
						} else {
							$.unblockUI();
							Swal.fire({type: 'warning', title: 'Uyarı', html: result.error, confirmButtonColor: '#0098ff', confirmButtonText: 'Anladım'});
						}
					}, error: function() {
						$.unblockUI();
						Swal.fire({type: 'error', title: 'Hata', html: 'Bağlantı Hatası, Lütfen Daha Sonra Tekrar Deneyin.'});
					}
				});
			});;
		});
	});

	//Update Password
	$('#new_password_update').click(function(){
		$.blockUI({ css: { border: 'none', padding: '15px', backgroundColor: '#000', '-webkit-border-radius': '30px', '-moz-border-radius': '30px', opacity: .5, color: '#fff' }, message: 'Lütfen Bekleyin İşleminiz Gerçekleştiriliyor ..' }); 
		var updateInforamtion = {};
		updateInforamtion.new_password = $('#new_password').val();
		updateInforamtion.new_password_retry = $('#new_password_retry').val();
		updateInforamtion.secret_key = $('#reset_secret_key').val();
		updateInforamtion.remember_key = window.location.href.split('/')[5] || '';
		grecaptcha.ready(function() {
			grecaptcha.execute('YOUR_RECAPTCHA_SITE_KEY', {action: '/Ajax/update_password'}).then(function(token) {
				$('#new_password_captcha').val(token);
				updateInforamtion.token = token;
				$.ajax({
					method: 'post',
					dataType: 'json',
					data : updateInforamtion,
					url: '/Ajax/update_password',
					success: function(result){
						if (result.status == true) {
							$.unblockUI();
							Swal.fire({type: 'success', title: 'Başarılı', html: 'Şifreniz güncellendi, yönlendirildikten sonra yeni belirlediğiniz şifreniz ile giriş yapabilirsiniz.'});
							setTimeout(function(){
								window.location.href = result.redirect_url;
							},3000);
						} else {
							$.unblockUI();
							Swal.fire({type: 'warning', title: 'Uyarı', html: result.error, confirmButtonColor: '#0098ff', confirmButtonText: 'Anladım'});
						}
					}, error: function() {
						$.unblockUI();
						Swal.fire({type: 'error', title: 'Hata', html: 'Bağlantı Hatası, Lütfen Daha Sonra Tekrar Deneyin.'});
					}
				});
			});;
		});
	});
	
});