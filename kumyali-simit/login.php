<?include("header.php");?>
<section class="login">
	<div class="pageTitle" style="background-image: url('images/banner1.jpg');">
		<h2>Giriş Yap | Kayıt Ol</h2>
	</div>
	<div class="login-area">
		<div class="container">
			<div class="row">
				<div class="col-md-6">
					<a class="login-link" href="userlogin.php"><img src="images/icons/key.png">Giriş Yap</a>
					<a class="login-link" href="signup.php"><img src="images/icons/edit.png">Üye Ol</a>
				</div>
				<div class="col-md-6">

					<a class="login-link" href="userlogin.php"><img src="images/icons/bakery.png">Bayi Girişi</a>
					<a class="login-link" href="bayisignup.php"><img src="images/icons/network.png">Bayiilik Başvuru</a>
				</div>
				<div class="col-12">
					<div class="form-group">
						<a class="forgot" href="forgotpassword.php">Şifremi unuttum</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<script>
	const checkbox = document.querySelector('#checkbox'),
	checkboxInput = checkbox.querySelector('#inputID');

	checkboxInput.addEventListener('change', (e) => {
		checkbox.classList.toggle('checkbox--unchecked', !e.target.checked);
		checkbox.classList.toggle('checkbox--checked', e.target.checked);
	});
</script>


<div class="d-none">

</div>
<?include("footer.php");?>
