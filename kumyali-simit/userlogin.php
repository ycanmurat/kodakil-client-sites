<?include("header.php");?>
<section class="login">
	<div class="pageTitle" style="background-image: url('images/banner1.jpg');">
		<h2>Giriş Yap | Kayıt Ol</h2>
	</div>
	<div class="login-area">
		<div class="container">
			<form class="form-row">
				<div class="col-12">
					<div class="form-group">
						<input type="text" name="kumyaliname" placeholder="E-posta">
					</div>
				</div>
				<div class="col-12">
					<div class="form-group">
						<input type="password" name="kumyalipass" placeholder="Parola">
					</div>
				</div>
				<div class="col-auto">
					<div class="form-group">
						<button>Giriş Yap</button>
						<a class="main-btn" href="signup.php">Kayıt Ol</a>
					</div>
				</div>

				<div class="col-auto">
					<div class="form-group">
						<label class="checkbox checkbox--unchecked" for="inputID" id="checkbox">
							<span class="checkbox__inner">
								<input class="checkbox__input" type="checkbox" id="inputID" />
							</span>
						</label>
						<label class="rememberme" for="inputID">Beni hatırla</label>
					</div>
				</div>
				<div class="col-12">
					<div class="form-group">
						<a class="forgot" href="forgotpassword.php">Şifremi unuttum</a>
					</div>
				</div>
			</form>
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
