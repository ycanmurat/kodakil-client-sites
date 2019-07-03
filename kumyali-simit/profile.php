<?include("header.php");?>
<section class="login profile">
	<div class="pageTitle" style="background-image: url('images/profilebanner.jpg');">
		<h2>Murat Can Yörüsün</h2>
	</div>
	<div class="container">
		<div class="row">
			<div class="col-md-3">
				<div class="profile-nav">
					<ul>
						<li><a class="active" href="profile.php">Profil Ayarları</a></li>

						<li><a class="" href="index.php">Çıkış Yap</a></li>
					</ul>
				</div>
			</div>
			<div class="col-md-9">
				<form class="form-row">
					<div class="col-sm-6">
						<div class="form-group">
							<input type="text" name="kumyaliname" placeholder="E-posta" value="m.yorusun@kodakil.com">
						</div>
					</div>
					<div class="col-sm-6">
						<div class="form-group">
							<input type="text" name="kumyaliname" placeholder="Ad Soyad" value="Murat Can Yörüsün">
						</div>
					</div>
					<div class="col-12">
						<div class="form-group">
							<input type="password" name="kumyalipass" placeholder="Yeni Parola">
						</div>
						<div class="form-group">
							<input type="password" name="kumyalipass" placeholder="Yeni Parola Tekrar">
						</div>
					</div>
					<div class="col-md-auto col-12">
						<div class="form-group">
							<button>Gönder</button>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</section>
<?include("footer.php");?>
