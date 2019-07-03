<?include("header.php");?>
<section class="productDetail">
	<div class="pageTitle" style="background-image: url('images/banner2.jpg');">
		<h2>Ürün Adı Burada</h2>
	</div>
	<div class="container">
		<div class="row mt-5 mb-5">
			<div class="col-md-5">
				<div class="tab-content" id="pills-tabContent">
					<div class="tab-pane fade show active" id="image-one" role="tabpanel" aria-labelledby="image-one-tab"><img src="images/sales1.jpg"></div>
					<div class="tab-pane fade" id="image-two" role="tabpanel" aria-labelledby="image-two-tab"><img src="images/sales2.jpg"></div>
					<div class="tab-pane fade" id="image-three" role="tabpanel" aria-labelledby="image-three-tab"><img src="images/sales3.jpg"></div>
				</div>

				<ul class="nav mb-3" id="pills-tab" role="tablist">
					<li class="nav-item">
						<a class="nav-link active" id="image-one-tab" data-toggle="pill" href="#image-one" role="tab" aria-controls="image-one" aria-selected="true"><img src="images/sales1.jpg"></a>
					</li>
					<li class="nav-item">
						<a class="nav-link" id="image-two-tab" data-toggle="pill" href="#image-two" role="tab" aria-controls="image-two" aria-selected="false"><img src="images/sales2.jpg"></a>
					</li>
					<li class="nav-item">
						<a class="nav-link" id="image-three-tab" data-toggle="pill" href="#image-three" role="tab" aria-controls="image-three" aria-selected="false"><img src="images/sales3.jpg"></a>
					</li>
				</ul>
			</div>

			<div class="col-md-7 m-auto">
				<div class="product-statement">
					<h1>ÜRÜN ADI BURADA</h1>
					<p class="price"><span class="old">₺49.00</span>₺39.00</p>
					<p class="content-wrapper">
						Lollipop dessert donut marzipan cookie bonbon sesame snaps chocolate. Cupcake sweet roll sweet dragée dragée. Lollipop dessert donut marzipan cookie bonbon sesame snaps chocolate cake.
						Toffee chocolate cake apple pie sugar plum sesame snaps muffin cake pudding cupcake. Muffin danish...
					</p>
					<div class="input-group">
						<span class="input-group-btn">
							<button type="button" class="quantity-left-minus" data-type="minus" data-field="">
								<i class="fas fa-minus"></i>
							</button>
						</span>
						<input type="text" id="quantity" name="quantity" class="input-number" value="1" min="1" max="99">
						<span class="input-group-btn">
							<button type="button" class="quantity-right-plus" data-type="plus" data-field="">
								<i class="fas fa-plus"></i>
							</button>
						</span>
					</div>
					<button class="addBasket">Sepete Ekle</button>
					<div class="social-share">
						<h3>Paylaş</h3>
						<a href="#" target="_blank"><i class="fab fa-facebook-f"></i></a>
						<a href="#" target="_blank"><i class="fab fa-twitter"></i></a>
						<a href="#" target="_blank"><i class="fab fa-instagram"></i></a>
					</div>
				</div>
			</div>
			<div class="col-md-12 mt-5">
				<div class="product-tabs">
					<ul class="nav " id="myTab" role="tablist">
						<li class="nav-item">
							<a class="nav-link active" id="aciklama-tab" data-toggle="tab" href="#aciklama" role="tab" aria-controls="aciklama" aria-selected="true">Açıklama</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" id="customer-comment-tab" data-toggle="tab" href="#customer-comment" role="tab" aria-controls="customer-comment" aria-selected="false">Yorumlar</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" id="facebook-comment-tab" data-toggle="tab" href="#facebook-comment" role="tab" aria-controls="facebook-comment" aria-selected="false">Facebook'dan Gelenler</a>
						</li>
					</ul>
					<div class="tab-content" id="myTabContent">
						<div class="tab-pane fade show active" id="aciklama" role="tabpanel" aria-labelledby="aciklama-tab">
							<p>Lollipop dessert donut marzipan cookie bonbon sesame snaps chocolate. Cupcake sweet roll sweet dragée dragée. Lollipop dessert donut marzipan cookie bonbon sesame snaps chocolate cake</p>
							<p>Lollipop dessert donut marzipan cookie bonbon sesame snaps chocolate. Cupcake sweet roll sweet dragée dragée. Lollipop dessert donut marzipan cookie bonbon sesame snaps chocolate cake</p>
						</div>
						<div class="tab-pane fade" id="customer-comment" role="tabpanel" aria-labelledby="customer-comment-tab">
							<div class="nocomment">

								<div class="cc-area">
									<p>İsim Soyisim</p>
									<p class="title">Başlık Başlık Başlık</p>
									<p class="comment">
										Lollipop dessert donut marzipan cookie bonbon sesame snaps chocolate. Cupcake sweet roll sweet dragée dragée. Lollipop dessert donut marzipan cookie bonbon sesame snaps chocolate cake.
									</p>
								</div>

								<h4>Müşteri Yorumları</h4>
								<p>Henüz hiç yorum yapılmamış.</p>
								<div id="write-comment">Yorum Yap</div>
								<div class="comment-form">
									<form class="form-row">
										<div class="col-sm-6">
											<input type="" name="" placeholder="Ad Soyad">
										</div>
										<div class="col-sm-6">
											<input type="" name="" placeholder="E-Posta Adresi">
										</div>
										<div class="col-sm-12">
											<input type="" name="" placeholder="Başlık">
										</div>
										<div class="col-sm-12">
											<textarea placeholder="Yorumunuz"></textarea>
										</div>
										<div class="col-12">
											<button>Gönder</button>
										</div>
									</form>
								</div>
							</div>
						</div>
						<div class="tab-pane fade" id="facebook-comment" role="tabpanel" aria-labelledby="facebook-comment-tab">
							<div id="fb-root"></div>
							<script async defer crossorigin="anonymous" src="https://connect.facebook.net/tr_TR/sdk.js#xfbml=1&version=v3.3"></script>
							<div class="fb-comments m-auto" data-href="https://developers.facebook.com/docs/plugins/comments#configurator" data-width="100%" data-numposts="5"></div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<section class="sales">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<div class="Title">
					<h4>Kaçırılmaz Lezzetler</h4>
					<h5>İLGİNİZİ ÇEKEBİLİR</h5>
				</div>
			</div>
			<div class="col-md-3 col-6">
				<a class="product" href="#">
					<span class="badge-1">-20%</span>
					<span class="badge-2">YENİ</span>
					<img class="image-two" src="images/sales2.jpg">
					<h6>Ürün Adı Gelecek</h6>
					<p>Kısa Açıklama gelecek</p>
					<p class="Cost"><span class="old">₺49.00</span>₺39.00</p>
					<div class="buton-area">
						<button><i class="fas fa-shopping-basket"></i></button>
						<button><i class="far fa-eye"></i></button>
					</div>
				</a>
			</div>
			<div class="col-md-3 col-6">
				<a class="product" href="#">
					<span class="badge-1">-50%</span>
					<span class="badge-2">YENİ</span>
					<img class="image-two" src="images/sales4.jpg">
					<h6>Ürün Adı Gelecek</h6>
					<p>Kısa Açıklama gelecek</p>
					<p class="Cost">₺39.00</p>
					<div class="buton-area">
						<button><i class="fas fa-shopping-basket"></i></button>
						<button><i class="far fa-eye"></i></button>
					</div>
				</a>
			</div>
			<div class="col-md-3 col-6">
				<a class="product" href="#">
					<span class="badge-1">-35%</span>
					<img class="image-two" src="images/sales2.jpg">
					<h6>Ürün Adı Gelecek</h6>
					<p>Kısa Açıklama gelecek</p>
					<p class="Cost">₺39.00</p>
					<div class="buton-area">
						<button><i class="fas fa-shopping-basket"></i></button>
						<button><i class="far fa-eye"></i></button>
					</div>
				</a>
			</div>
			<div class="col-md-3 col-6">
				<a class="product" href="#">
					<span class="badge-2">YENİ</span>
					<img class="image-two" src="images/sales2.jpg">
					<h6>Ürün Adı Gelecek</h6>
					<p>Kısa Açıklama gelecek</p>
					<p class="Cost">₺39.00</p>
					<div class="buton-area">
						<button><i class="fas fa-shopping-basket"></i></button>
						<button><i class="far fa-eye"></i></button>
					</div>
				</a>
			</div>
		</div>
	</div>
</section>

<script type="text/javascript">
	$(document).ready(function(){

		var quantitiy=0;
		$('.quantity-right-plus').click(function(e){
			e.preventDefault();
			var quantity = parseInt($('#quantity').val());
			$('#quantity').val(quantity + 1);
		});

		$('.quantity-left-minus').click(function(e){
			e.preventDefault();
			var quantity = parseInt($('#quantity').val());

			if(quantity>0){
				$('#quantity').val(quantity - 1);
			}
		});

	});
</script>


<?include("footer.php");?>