<?include("header.php");?>
<section class="sepet">
	<div class="pageTitle" style="background-image: url('images/profilebanner.jpg');">
		<h2>Sepet</h2>
	</div>
	<div class="container">
		<div class="row">
			<div class="col-12">
				<div class="blank-sepet">
					<h2>Sepetinizde Ürün Bulunamadı</h2>
					<p>Sepete ürün eklemek için</p>
					<a href="#">Tıkla</a>
					<img src="images/picnic-basket.png">
				</div>
			</div>
			<div class="col-12">
				<div class="productList">
					<table>
						<thead>
							<tr>
								<th colspan="2">Ürün</th>
								<th>Tutar</th>
								<th>Adet</th>
								<th>Toplam</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td><img src="images/sales3.jpg"></td>
								<td><p>Çikolatalı Kruvasan</p>
									<button class="Remove"><i class="fas fa-trash"></i>Sil</button>
								</td>
								<td>₺50.00</td>
								<td>
									<div class="input-group spinner">
										<input type="text" class="" value="2">
										<div class="input-group-btn-vertical">
											<button class="btn btn-default" type="button"><i class="fa fa-caret-up"></i></button>
											<button class="btn btn-default" type="button"><i class="fa fa-caret-down"></i></button>
										</div>
									</div>
								</td>
								<td><p>₺100.00</p></td>
							</tr>
							<tr>
								<td><img src="images/sales2.jpg"></td>
								<td><p>Çilekli Pankek</p></td>
								<td>₺100.00</td>
								<td>
									<div class="input-group spinner">
										<input type="text" class="" value="4">
										<div class="input-group-btn-vertical">
											<button class="btn btn-default" type="button"><i class="fa fa-caret-up"></i></button>
											<button class="btn btn-default" type="button"><i class="fa fa-caret-down"></i></button>
										</div>
									</div>
								</td>
								<td><p>₺400.00</p></td>
							</tr>
						</tbody>
					</table>
					<div class="subtotal">
						<p>KDV : <span>₺90.00</span></p>
						<p>Toplam : <span>₺590.00</span></p>
						<a href="selectadress.php">Alışverişe Devam Et</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<script>
	(function ($) {
		$('.spinner .btn:first-of-type').on('click', function() {
			$('.spinner input').val( parseInt($('.spinner input').val(), 10) + 1);
		});
		$('.spinner .btn:last-of-type').on('click', function() {
			$('.spinner input').val( parseInt($('.spinner input').val(), 10) - 1);
		});
	})(jQuery);
</script>
<?include("footer.php");?>
