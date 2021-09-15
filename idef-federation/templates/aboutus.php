<?include("header.php");?>

<!-- Typewriter -->
<link href="https://fonts.googleapis.com/css?family=Roboto+Slab&display=swap" rel="stylesheet">
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/TypewriterJS/1.0.0/typewriter.min.js"></script>


<section class="page-banner" style="background-image:url('images/kk1.jpg'); ">
	<div class="container">
		<div class="row">
			<div class="col-md-12">

				<ul>
					<li>HAKKIMIZDA</li>
				</ul>

			</div>
		</div>
	</div>
</section>

<section class="aboutus">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="content-area">
					<h5>Hakkımızda</h5>

					<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Minima rerum distinctio, quibusdam, sed aliquam quod ea tempora. Suscipit dolores iure aperiam, qui consequatur adipisci alias facere deleniti labore, eius explicabo! Lorem ipsum dolor sit amet, consectetur adipisicing, elit. Distinctio mollitia, dicta eveniet facere ducimus laboriosam tenetur aliquid, excepturi placeat! Eius laboriosam quia veniam cumque, nulla, explicabo consequatur molestias ipsam assumenda!</p>

					<p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Commodi, provident quidem suscipit sint facere libero ea, neque omnis repellendus incidunt, iusto, perspiciatis rerum sequi cupiditate similique nisi eligendi ab excepturi! Lorem ipsum dolor sit amet consectetur adipisicing elit. Odio quam voluptatem ad blanditiis iste dolore illum deserunt sed quis laboriosam sint eveniet quas, similique. Quasi non harum iste. Obcaecati, illo. Lorem ipsum, dolor sit amet consectetur, adipisicing elit. Eveniet sunt nihil odit qui iusto assumenda, voluptatem quidem consequatur iste iure tempora. Molestias delectus officia impedit labore quis minus provident eaque.</p>
					<span>Teşekkürler </span><p id="writeText"></p><span> size minnettarız..</span>
				</div>
			</div>

			<div class="col-md-12">
				<div class="contact-area">
					<div class="item">
						<a href="#">
							<img src="images/placeholder.svg">
							<p>Adres Adres Adres</p>
							<p>Adres Adres Adres İKİZDERE / RİZE</p>
						</a>
					</div>
					<div class="item">
						<img src="images/call.svg">
						<p><a href="tel:+"> +90 123 456 7788</a></p>
						<p><a href="tel:+"> +90 123 456 7788</a></p>
					</div>
					<div class="item">
						<a href="mailto:demo@example.com">
							<img src="images/mail.svg">
							<p>İDEF<br>demo@example.com</p>
						</a>
					</div>

				</div>
			</div>
			<div class="col-md-12">
				<div class="about-nav">
					<a href="#" class="active">Hakkımızda</a>
					<a href="komisyonlar.php">Komisyonlar</a>
					<a href="dernekler.php">Dernekler</a>
					<a href="vizyon.php">Vizyonumuz & Misyonumuz</a>
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

