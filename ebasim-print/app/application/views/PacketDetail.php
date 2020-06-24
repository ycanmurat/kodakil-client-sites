<section class="Pages--Wrapper allPackets">
	<div class="container">
		<div class="row">
			<div class="col">
				<div class="Banner">
					<img src="<?=site_url($package->banner)?>" alt="Paketlerimiz">
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col">
				<div class="PacketsTitle">
					Paket İçeriği
				</div>
			</div>
		</div>
		<div class="row">
			<?php if (isset($package->products)): ?>
				<?php foreach ($package->products as $key => $val) { ?>
			<div class="col-lg-3 col-md-4 col-6">
				<a href="<?=site_url($val->product_slug)?>" class="ProductItems">
					<?php if ($val->default_image == ""): 
						$val->default_image = "assets/Front/images/noimage.png";
					endif ?>
					<!--
					<div class="Img"><img src="<?=site_url($val->default_image)?>" alt="<?=$val->product_name?>"></div>
					-->
					<div class="Img"><img src="<?=site_url('assets/fake/')?>500x500.png" alt="<?=$val->product_name?>"></div>
					<p class="ItemName"><?=$val->product_name?> ></p>
						<?php foreach (json_decode($val->variants) as $key2 => $val2): ?>
							<?php if (array_key_exists((int)$val2, $countchilds)): ?>
								<div class="TotalNum"><?=$countchilds[(int)$val2]?> <span>Adet</span></div>
							<?php endif ?>
						<?php endforeach ?>
				</a>
			</div>
				<?php } ?>
			<?php endif ?>
		</div>
		<div class="row">
			<div class="col">
				<div class="PacketsTitle">
					Paket Hakkında
				</div>
				<div class="PacketDetail">
					<?=$package->content?>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="Pages--Wrapper PacketsBuy">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-lg-3 col-md-6 col-6">
				<div class="PacketsPrice">
					<div class="OldPrice"><?=(number_format($package->old_price/$thiscurrency->price, 2))." ".$thiscurrency->code?></div>
					<div class="Price"><?=(number_format($package->price/$thiscurrency->price, 2))." ".$thiscurrency->code?></div>
				</div>
			</div>
			<div class="col-lg-auto col-md-6 col-6">
				<div class="BtnBox">
					<!--
						<button class="Btn Blue-d" onclick="PaeketSepeteEkle(<?=$package->id?>)">Sepete Ekle</button>
					-->
					<button class="Btn Blue-d" onclick="priceKitle()">Sepete Ekle</button>
				</div>
			</div>
		</div>
	</div>
</section>

<div class="BtnBox">
	<div id="Tihla" data-toggle="modal" data-target="#DesignControlModal"></div>
	
	<!-- Tasarım var/yok -->
	<div class="modal fade globalModal" id="DesignControlModal" tabindex="-1" role="dialog" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-body">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><i class="fa fa-times" aria-hidden="true"></i></button>
					<div class="DesignControl">
						<div class="Title mt-0">Tasarım Tercihiniz</div>
						<div class="row">
							<div class="col-6">
								<div class="SelectItem" onclick="PaeketSepeteEkle(<?=$package->id?>,0)" data-dismiss="modal" aria-label="Close">
									<div class="Img"><img src="<?=site_url('assets/Front/')?>images/Icons/upload-file.png" alt="ebasim.com"></div>
									<p>Tasarım Yükle</p>
								</div>
								<p class="Info">Tasarım hazır hizmetini almasınız bile tasarımınızın baskı için uygun olup olmadığı kontrol edilmeli.</p>
							</div>
							<div class="col-6">
								<div class="SelectItem" data-dismiss="modal" data-toggle="modal" data-target="#DesignContractModal" >
									<div class="Img"><img src="<?=site_url('assets/Front/')?>images/Icons/edit-tools.png" alt="ebasim.com"></div>
									<p>Tasarım Yapalım</p>
								</div>
								<p class="Info">Nasil bir tasarım istediğinizi bize anlatın uzman ekibimiz hazırlasın ...</p>
							</div>
						</div>
					</div>


				</div>
			</div>
		</div>
	</div>
	
	<!-- Tasarım var/yok kontrat -->
	<div class="modal fade globalModal" id="DesignContractModal" tabindex="-1" role="dialog" aria-hidden="false">
		<div class="modal-dialog " role="document">
			<div class="modal-content">
				<div class="modal-body">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><i class="fa fa-times" aria-hidden="true"></i></button>
					<div class="DesignContract">
						<div class="Title mt-0">Tasarım Hizmet Şartları</div>

						<p>Lütfen tasarım hizmetinin kayıt ve koşullarını dikkatle okuyun. Herhangi bir sorunuz varsa, cep telefonu aracılığıyla müşteri hizmetleri ekibimizle iletişime geçebilir veya bize bir araştırma gönderebilirsiniz.</p>

						<div class="T">Tasarım Hizmetleri Kullanım Koşulları</div>
						<p>Bastırmak istediğiniz ürün siparişini onayladıktan ve ödeme işlemini gerçekleştirdikten sonra İstediğiniz tasarımı elde etmek için mail adresinize bir resim alacaksınız.</p>
						<p>Bu tasarımı beğenmediğiniz takdirde size bir farklı renk ve bir farklı tasarım daha hazırlayarak ek bir ücret talep etmeden resim olarak göndereceğiz.</p>
						<p>Tasarımcılarımızla e-posta yolu ile bağlantı kurabilirsiniz.</p>
						<p>Bu koşullar  dışındaki tasarım talepleriniz aynı tasarım ücreti ile ücretlendirilecektir.</p>
						<p>Tasarımınızı onayladığınızda hemen baskı sürecine gidilecektir.</p>
						<p>Teslim tarihi tasarım sonuçlandırma süresi ve üretim süresi ile hesaplanır..</p>

						<div class="T">Ne kadar sürer?</div>
						<p>Tasarımınız onay sürecinden sonra 1-7 gün içerisinde işleme konulacaktır.</p>

						<div class="T">ebasim ile Tasarım hizmetleri şunları içermez:</div>

						<p>- Grafik tasarım hizmetleri, simgeler ve logolar sağlanmaz.</p>
						<p>- Metin içeriği yok. Metin yazdırmaya hazır olmalıdır.</p>
					</div>
				</div>
				<div class="modalBottom">
					<div class="Left">
						<div class="DesignPrice">
							<div class="DesignTitle">Tasarım Ücreti :</div>
							<p><?=$package->design_price?></p>
						</div>
					</div>
					<div class="Right">
						<button class="Btn Blue-d" data-dismiss="modal" onclick="PaeketSepeteEkle(<?=$package->id?>,1)" aria-label="Close">Kabul Et ve Sepete Ekle <i class="fa fa-angle-right" aria-hidden="true"></i></button>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<script>
	
	function priceKitle() {
		$('#Tihla').trigger('click');
	}
</script>