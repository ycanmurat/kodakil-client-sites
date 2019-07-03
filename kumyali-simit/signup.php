<?include("header.php");?>
<section class="login">
	<div class="pageTitle" style="background-image: url('images/banner1.jpg');">
		<h2>Kayıt Ol</h2>
	</div>
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<form class="form-row">
					<div class="col-6">
						<div class="form-group">
							<input type="text" name="kumyaliname" placeholder="E-posta">
						</div>
					</div>
					<div class="col-6">
						<div class="form-group">
							<input type="text" name="kumyaliname" placeholder="Ad Soyad">
						</div>
					</div>
					<div class="col-12">
						<div class="form-group">
							<input type="password" name="kumyalipass" placeholder="Parola">
						</div>
						<div class="form-group">
							<input type="password" name="kumyalipass" placeholder="Parola Tekrar">
						</div>
					</div>
					<div class="col-auto">
						<div class="form-group">
							<button>Gönder</button>
						</div>
					</div>
					<div class="col-12">
						<div class="form-group">
							<a class="forgot" href="login.php">Giriş Yap</a>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</section>
<?include("footer.php");?>
