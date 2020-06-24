<?include("header.php");?>
<div class="TitleBanner" style="background: url('images/teklif-bg.jpg');background-position: center 47%; ">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<nav aria-label="breadcrumb">
					<ol class="breadcrumb">
						<li class="breadcrumb-item"><a href="#">Anasayfa</a></li>
						<li class="breadcrumb-item active" aria-current="page">Teklif</li>
					</ol>
				</nav>
				<h1>Teklif Oluştur</h1>
			</div>
		</div>
	</div>
</div>
<section class="teklif-form">
	<div class="container">
		<div class="row">
			<div class="col-12"><h1 class="text-center mt-5">Teklif İste</h1></div>
			<div class="col-12">
				<div class="Form-area">
					<div class="form-row">
						<div class="col-sm-4">
							<label>Ad Soyad</label>
							<input type="text" name="" placeholder="Adınız Soyadınız">
						</div>
						<div class="col-sm-4">
							<label>E-Posta</label>
							<input type="text" name="" placeholder="E-postanız">
						</div>
						<div class="col-sm-4">
							<label>Telefon Numarası</label>
							<input type="text" name="" placeholder="Telefon Numaranız">
						</div>
						<div class="col-sm-6">
							<label>Teklif Tipi</label>
							<select>
								<option>Kurumsal Teklif</option>
								<option>Bireysel Teklif</option>
								<option>Davet</option>
								<option>Diğer</option>
							</select>
						</div>
						<div class="col-sm-6">
							<label>Teklif İstenen Ürün</label>
							<input type="text" name="" placeholder="Ürün veya Ürünler">
						</div>
						<div class="col-sm-6">
							<label>Adet</label>
							<input type="text" name="" placeholder="0">
						</div>
						<div class="col-sm-6">
							<label>Baskı Yönü</label>
							<input type="text" name="" placeholder="Örn: ön , ön arka">
						</div>
						<div class="col-12">
							<label>Eklemek İstedikleriniz</label>
							<textarea placeholder="Mesajınız"></textarea>
						</div>
						<div class="col-12">
							<div id="teklif-file-input" class="file-upload-wrapper" data-text="Dosya Seçiniz..">
								<input name="file-upload-field" type="file" class="file-upload-field" value="" multiple="multiple">
							</div>
							<script>
								$("#teklif-file-input").on("change", ".file-upload-field", function(){ 
									$(this).parent(".file-upload-wrapper").attr("data-text",$(this).val().replace(/.*(\/|\\)/, '') );
								});
							</script>
							<div class="reCAPTCHA">Captcha</div>
							<div class="pretty p-default p-fill">
								<input type="checkbox">
								<div class="state">
									<label>Teklif Sözleşmesi'ni ve Gizlilik Sözleşmesi'ni Okudum.Onaylıyorum.</label>
								</div>
							</div>
							<button>Teklif İste</button>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<?include("footer.php");?>

