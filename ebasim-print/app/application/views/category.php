	
    <!-- Pages Title -->
	<section class="Pages--Title" style="background-image: url('../assets/Front/images/PageTitle/pages-title-bg.png');">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="PageMap">
						<a href="#" class="Link">Anasayfa</a>
						<span><i class="fa fa-angle-right" aria-hidden="true"></i></span>
						<a href="#" class="Link">Kategori</a>
						<span><i class="fa fa-angle-right" aria-hidden="true"></i></span>
						<a href="#" class="Link Now"><?=$category_info->name?></a>
					</div>
					<div class="T"><span></span> <?=$category_info->name?></div>
				</div>
			</div>
		</div>
	</section><!-- END : Pages Title -->	
	<section class="Filters">
		<div class="container">
			<div class="row">
				<div class="col-lg-3">
					<div class="ColumnList">
						<div class="ColumnItem Column3 Active"><i class="fa fa-th" aria-hidden="true"></i></div>
						<div class="ColumnItem Column2"><i class="fa fa-th-large" aria-hidden="true"></i></div>
					</div>
				</div>
				
				<div class="col-lg-6">
					<div class="LiveSearch">
						<input type="text" id="liveSearch"  placeholder="Ne Aramıştınız ?">
					</div>
				</div>
				<div class="col-lg-3">
					<div class="TotalList"><?=count($product_info)?> Ürün görüntüleniyor</div>
				</div>
			</div>
		</div>
	</section>
	<section class="Pages--Wrapper bgGray pin-bg">
		<div class="container">
			<div class="row" id="productFilterList">
				<?if (empty($product_info)){?>
				  <div class="ProductNotFound">Ürün Bulunamadı.</div>
				<?}else{foreach($product_info as $key => $val){ ?>
				  <div id="LayoutDesign" class="filterItem col-lg-3 col-md-4 col-6">
				  	<a href="<?if($val->payment_type==2){echo site_url($val->product_slug);}else{echo site_url($val->product_slug);}?>" class="ProductItems">
				  		<div class="Img">
				  			<img src="<?=!empty($val->default_image)?TimbThumb(site_url($val->default_image),'388x388'):TimbThumb(site_url('assets/Front/images/noimage.png'), '300x300')?>" alt="<?=$val->product_name?>" onerror="this.onerror=null;this.src='assets/fake/300x300.png';">
				  		</div>
				  		<p class="ItemName"><?=$val->product_name?></p>
				  	</a>
				  </div>
				<?}}?>
				<?//prex($product_info)?>
			</div>
		</div>
	</section>