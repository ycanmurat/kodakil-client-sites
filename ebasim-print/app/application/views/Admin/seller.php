<div class="m-subheader ">
	<div class="d-flex align-items-center">
		<div class="mr-auto">
			<h3 class="m-subheader__title m-subheader__title--separator">
				Şuanda Çok Satan Ürünler
			</h3>
			<ul class="m-subheader__breadcrumbs m-nav m-nav--inline">
				<li class="m-nav__item m-nav__item--home">
					<a href="<?=admin_url()?>" class="m-nav__link m-nav__link--icon">
						<i class="m-nav__link-icon la la-home"></i>
					</a>
				</li>
			</ul>
		</div>
	</div>
</div>
<div class="m-content">
	<div class="row">
		<div class="col-lg-12">
			<div class="m-portlet">
				<div class="m-section">
					<div class="m-section__content">
						<table class="table m-table m-table--head-bg-success">
							<thead>
								<tr>
									<th width="">#</th>
									<?if($no_data==0){?><th width="">Çok Satılan Ürün Açıklaması</th>
									<th width="">Sil</th><?}?>
								</tr>
							</thead>
							<tbody>
								<?if($no_data == 1){?>
								<tr><th>Şuanda Çok Satanlarda Bir Ürününüz Bulunmuyor</th></tr>
								<?}else{
								foreach ($sellers_product as $key => $sellerInfo){?>
									<tr>
										<th><?=$sellerInfo->Id?></th>
										<th><?=$sellerInfo->seller_title?></th>
										<th><button type="button" class="m-portlet__nav-link btn m-btn m-btn--hover-danger m-btn--icon m-btn--icon-only m-btn--pill" onclick="deleteConfirm('<?=site_url('Admin/Seller/sellerDelete/'.$sellerInfo->Id)?>')"><i class="la la-trash"></i></button></th>
									</tr>
								<?}}?>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>