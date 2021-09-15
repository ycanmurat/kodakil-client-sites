<?include("header.php");?>
<section class="page-banner" style="background-image:url('images/detailbg.jpg'); ">
	<div class="container">
		<div class="row">
			<div class="col-md-12">

				<ul>
					<li>Dernekler</li>
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
					<h5>Derneklerimiz</h5>
					<div class="row">
						<div class="col-md-6">
							Dernekadı
						</div>

						<div class="col-md-6">
							Dernekadı
						</div>

						<div class="col-md-6">
							Dernekadı
						</div>
						
						<div class="col-md-6">
							Dernekadı
						</div>
					</div>
					<span>Teşekkürler </span><p id="writeText"></p><span> size minnettarız..</span>
				</div>
			</div>

			<div class="col-md-12">
				<div class="about-nav">
					<a href="aboutus.php">Hakkımızda</a>
					<a href="komisyonlar.php">Hakkımızda</a>
					<a href="#" class="active">Dernekler</a>
					<a href="vizyon.php">Misyonumuz & Vizyonumuz</a>
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

