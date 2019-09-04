
<section class="payment-area">
	<div class="page-banner" style="background-image:url('https://fakeimg.pl/1920x250/'); ">
		<h2>HAVUZ SEÇİM</h2>
	</div>
	<div class="container">
		<div class="row">
			<div class="col-md-8">
				<!--<div id="day-schedule"></div>-->
				<table class="havuz-randevu">
					<thead>
						<tr>
							<td></td>
							<td>Pzt</td>
							<td>Sal</td>
							<td>Çar</td>
							<td>Per</td>
							<td>Cum</td>
							<td>Cts</td>
							<td>Paz</td>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>8:30</td>
							<td><p class="dolu">Dolu</p></td>
							<td><p class="bos">Boş</p></td>
							<td><p class="bos">Boş</p></td>
							<td><p class="dolu">Dolu</p></td>
							<td><p class="bos">Boş</p></td>
							<td><p class="bos">Boş</p></td>
							<td><p class="bos">Boş</p></td>
						</tr>
						<tr>
							<td>9:30</td>
							<td><p class="bos">Boş</p></td>
							<td><p class="bos">Boş</p></td>
							<td><p class="dolu">Dolu</p></td>
							<td><p class="bos">Boş</p></td>
							<td><p class="bos">Boş</p></td>
							<td><p class="bos">Boş</p></td>
							<td><p class="bos">Boş</p></td>
						</tr>
						<tr>
							<td>10:30</td>
							<td><p class="bos">Boş</p></td>
							<td><p class="bos">Boş</p></td>
							<td><p class="bos">Boş</p></td>
							<td><p class="dolu">Dolu</p></td>
							<td><p class="bos">Boş</p></td>
							<td><p class="bos">Boş</p></td>
							<td><p class="bos">Boş</p></td>
						</tr>
						<tr>
							<td>11:30</td>
							<td><p class="bos">Boş</p></td>
							<td><p class="bos">Boş</p></td>
							<td><p class="bos">Boş</p></td>
							<td><p class="bos">Boş</p></td>
							<td><p class="bos">Boş</p></td>
							<td><p class="bos">Boş</p></td>
							<td><p class="bos">Boş</p></td>
						</tr>
					</tbody>
				</table>
			</div>
			<div class="col-md-4">
				<div class="product-list">
					<div class="item">
						<h4><?=$courseDetail->name?></h4>
						<!--<img src="<?=site_url($courseDetail->image)?>">-->
						<img src="https://fakeimg.pl/300/"><!-- YEDEK RESİM  -->
						<p class="teacher"><i class="fas fa-chalkboard-teacher"></i> Nilüfer Mümtaz Hancı</p>
						<p class="cost"><?=$courseDetail->price?> ₺</p>
						<button>TAMAMLA</button>
					</div>
				</div>
			</div>
			<div class="col-md-8">

			</div>
		</div>
	</div>
</section>
