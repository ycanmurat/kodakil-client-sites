<section class="Pages--Wrapper pin-bg">
<div class="container">
	<div class="row">
		<div class="col">
			<p class="SearchResult">Arama Sonucu : <span>"<?if($product_empty==1){echo 'Lütfen, arama kutucuğuna bir şeyler yazın!';}elseif($product_not_result==1){echo $search_value;}else{echo $search_value;}?>"
			</span></p>
		</div>
	</div>
</div>
	<div class="container">
		<div class="row" id="productFilterList">
			<?if(!empty($product_info)){
			foreach ($product_info as $key => $product_write){?>
		  	<div class="col-lg-3 col-md-4 col-6">
			  	<a href="<?=site_url($product_write->product_slug)?>" class="ProductItems">
			  		<div class="Img"><img src="<?=empty($product_write->default_image)?TimbThumb(site_url('assets/Front/images/noimage.png'),'300x300'):TimbThumb(site_url($product_write->default_image),'300x300')?>" alt="<?=$product_write->product_name?>"></div>
			  		<p class="ItemName"><?=$product_write->product_name?> ></p>
			  	</a>
		  	</div>
		  	<?}}elseif($product_not_result == 1){?>
			<div class="ProductNotFound">
				Ürün Bulunamadı.
			</div>
			<?}else{?>
			<div class="ProductNotFound">
				Ürün Bulunamadı.
			</div>
			<?}?>
		</div>
	</div>
</section>	