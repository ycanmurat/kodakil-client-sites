<?include("header.php");?>
<section class="productList">
	<div class="pageTitle" style="background-image: url('images/banner2.jpg');">
		<h2>Mağaza</h2>
	</div>
	<div class="container">
		<div class="row">
			<div class="col-md-8 col-12 mb-5">
				<select>
					<option>Fiyata Göre Azalan</option>
					<option>Fiyata Göre Artan</option>
					<option>Tarihe Göre En Yeni</option>
					<option>Tarihe Göre En Eski</option>
				</select>
			</div>
			<div class="col-md-4 mb-5 d-md-block d-none">
				<div class="list-option">
					<div class="active" id="boxed"><i class="fas fa-th"></i></div>
					<div class="" id="listed"><i class="fas fa-list-ul"></i></div>
				</div>
			</div>

			<div class="col-md-3 col-6 ListProperties">
				<a class="product" href="productdetail.php">
					<span class="badge-1">-50%</span>
					<span class="badge-2">YENİ</span>
					<div class="image-area">
						<img class="image-two" src="images/sales2.jpg">
					</div>
					<div class="contentArea">
						<h6>Ürün Adı Gelecek</h6>
						<p class="shortcontent">Kısa Açıklama gelecek</p>
						<p class="Cost"><span class="old">₺49.00</span>₺39.00</p>
						<p class="longContent">Lollipop dessert donut marzipan cookie bonbon sesame snaps chocolate. Cupcake sweet roll sweet dragée dragée. Lollipop dessert donut marzipan cookie bonbon sesame snaps chocolate cake. Toffee chocolate cake apple</p>
						<div class="buton-area">
							<button class="addCart">Sepete Ekle</button>
							<button><i class="fas fa-shopping-basket"></i></button>
							<button><i class="far fa-eye"></i></button>
						</div>
					</div>

				</a>
			</div>
			<div class="col-md-3 col-6 ListProperties">
				<a class="product" href="productdetail.php">
					<div class="image-area">
						<img class="image-two" src="images/sales2.jpg">
					</div>
					<div class="contentArea">
						<h6>Ürün Adı Gelecek</h6>
						<p class="shortcontent">Kısa Açıklama gelecek</p>
						<p class="Cost"><span class="old">₺49.00</span>₺39.00</p>
						<p class="longContent">Lollipop dessert donut marzipan cookie bonbon sesame snaps chocolate. Cupcake sweet roll sweet dragée dragée. Lollipop dessert donut marzipan cookie bonbon sesame snaps chocolate cake. Toffee chocolate cake apple</p>
						<div class="buton-area">
							<button class="addCart">Sepete Ekle</button>
							<button><i class="fas fa-shopping-basket"></i></button>
							<button><i class="far fa-eye"></i></button>
						</div>
					</div>

				</a>
			</div>
			<div class="col-md-3 col-6 ListProperties">
				<a class="product" href="productdetail.php">
					<div class="image-area">
						<img class="image-two" src="images/sales2.jpg">
					</div>
					<div class="contentArea">
						<h6>Ürün Adı Gelecek</h6>
						<p class="shortcontent">Kısa Açıklama gelecek</p>
						<p class="Cost"><span class="old">₺49.00</span>₺39.00</p>
						<p class="longContent">Lollipop dessert donut marzipan cookie bonbon sesame snaps chocolate. Cupcake sweet roll sweet dragée dragée. Lollipop dessert donut marzipan cookie bonbon sesame snaps chocolate cake. Toffee chocolate cake apple</p>
						<div class="buton-area">
							<button class="addCart">Sepete Ekle</button>
							<button><i class="fas fa-shopping-basket"></i></button>
							<button><i class="far fa-eye"></i></button>
						</div>
					</div>

				</a>
			</div>
			<div class="col-md-3 col-6 ListProperties">
				<a class="product" href="productdetail.php">
					<div class="image-area">
						<img class="image-two" src="images/sales2.jpg">
					</div>
					<div class="contentArea">
						<h6>Ürün Adı Gelecek</h6>
						<p class="shortcontent">Kısa Açıklama gelecek</p>
						<p class="Cost">₺39.00</p>
						<p class="longContent">Lollipop dessert donut marzipan cookie bonbon sesame snaps chocolate. Cupcake sweet roll sweet dragée dragée. Lollipop dessert donut marzipan cookie bonbon sesame snaps chocolate cake. Toffee chocolate cake apple</p>
						<div class="buton-area">
							<button class="addCart">Sepete Ekle</button>
							<button><i class="fas fa-shopping-basket"></i></button>
							<button><i class="far fa-eye"></i></button>
						</div>
					</div>

				</a>
			</div>
			<div class="col-md-3 col-6 ListProperties">
				<a class="product" href="productdetail.php">
					<div class="image-area">
						<img class="image-one" src="images/sales1.jpg">
						<img class="image-two" src="images/sales2.jpg">
					</div>
					<div class="contentArea">
						<h6>Ürün Adı Gelecek</h6>
						<p class="shortcontent">Kısa Açıklama gelecek</p>
						<p class="Cost">₺39.00</p>
						<p class="longContent">Lollipop dessert donut marzipan cookie bonbon sesame snaps chocolate. Cupcake sweet roll sweet dragée dragée. Lollipop dessert donut marzipan cookie bonbon sesame snaps chocolate cake. Toffee chocolate cake apple</p>
						<div class="buton-area">
							<button class="addCart">Sepete Ekle</button>
							<button><i class="fas fa-shopping-basket"></i></button>
							<button><i class="far fa-eye"></i></button>
						</div>
					</div>

				</a>
			</div>
		</div>
	</div>
</section>

<script>
	$("#listed").click(function(){
		$(this).addClass("active");
		$('#boxed').removeClass('active');
		$('.ListProperties').addClass('col-md-12');
		$('.ListProperties').addClass('Listed');
		$('.ListProperties').removeClass('col-md-3');
	});

	$("#boxed").click(function(){
		$(this).addClass("active");
		$('#listed').removeClass('active');
		$('.ListProperties').addClass('col-md-3');
		$('.ListProperties').removeClass('Listed');
		$('.ListProperties').removeClass('col-md-12');
	});
</script>


<?include("footer.php");?>