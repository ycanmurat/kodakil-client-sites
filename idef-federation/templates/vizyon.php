<?include("header.php");?>
<section class="page-banner" style="background-image:url('images/kk1.jpg'); ">
	<div class="container">
		<div class="row">
			<div class="col-md-12">

				<ul>
					<li>HAKKIMIZDA</li>
					<li>Vizyonumuz & Misyonumuz</li>
				</ul>

			</div>
		</div>
	</div>
</section>
<!-- Typewriter -->
<link href="https://fonts.googleapis.com/css?family=Roboto+Slab&display=swap" rel="stylesheet">
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/TypewriterJS/1.0.0/typewriter.min.js"></script>

<section class="aboutus">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="content-area">
					<h5>Misyonumuz</h5>
					<p>Atatürk İlke ve İnkılapları öncülüğünde, insanı ve doğayı her şeyin merkezine alarak, yerel ve genel anlamda sivil toplum bilincini geliştirici çalışmalar yapmak, güçlü bir sivil toplum oluşumuna katkıda bulunmak ve bu amaçla İkizdere ilçemiz için gerekli çalışmalara gönüllü olarak katkı sunmak. </p>
					<p>İkizdere’ye gönül veren ve hizmette bulunan kanaat önderlerinin ve hemşehrilerimizin bir araya gelerek büyük, etkin ve öncü sivil toplum kuruluşu olmak özelliği ile ilçemizin sesi ve beklentisi olmak.</p>
					<p>Memleket meselesine sahip çıkmak, örnek bir sivil toplum kuruluşu olmak. </p>

					<h5>Vizyonumuz</h5>
					<p>İkizdere’nin sorunlarına sahip çıkmak, tarafsız ve sosyo-kültürel değerlendirmeleri en üst düzeyde tutmak, örgütlü toplumların önemini kabul eden ve bunun için gönüllü çalışarak  İkizdere için faaliyetlerde bulunmak ve bu amaçla bu değer yargıları ile sivil toplum bilincini oluşturmak, devam ettirmek. </p>
					<span>Teşekkürler </span><p id="writeText"></p><span> size minnettarız..</span>
				</div>
			</div>

			<div class="col-md-12">
				<div class="about-nav">
					<a href="aboutus.php">Hakkımızda</a>
					<a href="komisyonlar.php">Komisyonlar</a>
					<a href="dernekler.php">Dernekler</a>
					<a href="#" class="active">Misyonumuz & Vizyonumuz</a>
				</div>
			</div>
		</div>
	</div>
</section>

<script type="text/javascript">
	var app = document.getElementById('writeText');

	var typewriter = new Typewriter(app, {
		loop: true
	});


	typewriter.typeString('dernek adı')
	.pauseFor(500)
	.deleteAll()
	.typeString('komisyon adı')
	.pauseFor(500)
	.deleteAll()
	.typeString('Murat Can')
	.pauseFor(500)
	.deleteAll()
	.typeString('komisyon adı')
	.pauseFor(500)
	.deleteAll()
	.typeString('dernek adı')
	.pauseFor(500)
	.deleteAll()
	.typeString('Murat Can')
	.pauseFor(500)
	.deleteAll()

	.start();
</script>
<?include("footer.php");?>

