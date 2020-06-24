<!--
<div class="container">
	<div class="row">
            <div class="col-xxs-6 col-xs-6 col-sm-3">
                <div class="ft-bnf-item">
                	<center>
                    	<i style="font-size: 40px;margin-top:10px;margin-bottom: 10px;color:gray" class="fa fa-shield"></i>
                    	<h4>Güvenli Alışveriş</h4>
                    	<br>
                    	<p class="hidden-xxs hidden-xs hidden-sm">Alışverişinizi daha güvenli yapabilmeniz için ebasimim.com SSL güvenlik sertifikası kullanmaktadır.</p>
                    </center>
                    <br>
                </div>
            </div>
            <div class="col-xxs-6 col-xs-6 col-sm-3">
                <div class="ft-bnf-item">
                	<center>
                    	<i style="font-size: 40px;margin-top:10px;margin-bottom: 10px;color:gray" class="fa fa-credit-card"></i>
                    	<h4>Bütün Yerli Kredi Kartlarına Taksit</h4>
                    	<br>
                    	<p class="hidden-xxs hidden-xs hidden-sm">Bütün yerli kredi kartlarınıza 12 takside kadar taksit yapma imkanı.</p>
                    </center>
                </div>
            </div>
            <div class="col-xxs-6 col-xs-6 col-sm-3">
                <div class="ft-bnf-item">
                	<center>
                    	<i style="font-size: 40px;margin-top:10px;margin-bottom: 10px;color:gray" class="fa fa-file-text-o"></i>
                    	<h4>Doğru Baskı</h4>
                    	<br>
                    	<p class="hidden-xxs hidden-xs hidden-sm">Bütün tasarımlarınız özenle hazırlanır veya kontrol edilir. Baskıda fark olmaması sağlanır.</p>
                    </center>
                </div>
            </div>
            <div class="col-xxs-6 col-xs-6 col-sm-3">
                <div class="ft-bnf-item">
                	<center>
                    	<i style="font-size: 40px;margin-top:10px;margin-bottom: 10px;color:gray" class="fa fa-phone"></i>
                    	<h4>Sorunsuz İletişim</h4>
                    	<br>
                    	<p class="hidden-xxs hidden-xs hidden-sm">ebasimim.com baskı veya sipariş sürecinizde size her zaman yardımcı olmak için hazır bekliyor.</p>
                    </center>
                </div>
            </div>
        </div>
</div>
-->
 
<!-- SiteSettingModal -->
<div class="modal fade globalModal" id="SiteSettingModal" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      	<div class="modal-body">
	      	<button type="button" class="close" data-dismiss="modal" aria-label="Close"><i class="fa fa-times" aria-hidden="true"></i></button>
	        <div class="settingBox">
	        	<div class="Title"><?=$langStatics->TercihSecin ?></div>

				<form action="">
					<!--
					<div class="FormElements">
		        		<label for="Country">Ülke :</label>
		        		<select name="" id="Country">
		        			<option value="0"></option>
		        			<option value="1" selected="selected">Türkiye</option>
		        			<option value="2">Kavak</option>
		        		</select>
		        	</div>
		        -->

		        	<div class="FormElements">
		        		<label for="Language"><?=$langStatics->dil?></label>
		        		<select name="" id="Language" onchange="window.location = this.value">
		        			<?php foreach ($language as $key => $val) { ?>
		        					<option <?=($val->Id == Lang_id ?'selected':'')?> value="http://<?=$val->short_code?>.kodakillabs.com/"><?=$val->lang_name?></option>
		        			<?php } ?>
		        		</select>
		        	</div>

		        	<div class="FormElements">
		        		<label for="Currency"><?=$langStatics->ParaBirimi ?> :</label>
		        		<select name="" id="Currency"  onchange="CurrencyChange(this.value)">
		        			<?php foreach ($currency as $key => $val) { ?>
	        					<option <?=($val->Id == Get_Cookie('currency') ? 'selected':'')?> value="<?=$val->Id?>"><?=$val->name?> (<?=$val->code?>)</option>
		        			<?php } ?>
		        		</select>
		        	</div>
					<!--
		        	<div class="FormElements BtnBox">
		        		<button class="Btn Blue-d"  data-dismiss="modal" aria-label="Close">Kaydet</button>
		        	</div>
		        -->
				</form>
	        </div>
      </div>
    </div>
  </div>
</div>

<!-- Footer -->
<footer>
	<div class="Head">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 col-md-auto">
					<div class="activeSetting" data-toggle="modal" data-target="#SiteSettingModal"><span class="flag-icon flag-icon-tr"></span> Türkiye (
					<?php foreach ($currency as $key => $val) { ?>
    					<?=($val->Id == Get_Cookie('currency') ? $val->code :'')?>
        			<?php } ?>)
        		</div>
				</div>
				<div class="col-lg-6 col-md">
					<div class="Newsletter">
						<input type="text" name="Newsletter" class="NewsletterInput" placeholder="<?=$langStatics->footerEbultenFormYazi?>">
						<button onclick="bulletinAdd($('.NewsletterInput').val())" class="Btn Green-d"><?=$langStatics->SimdiKatil?></button>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="Main">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-lg-3 col-md-4 col-sm-6 col-12">
					<div class="Box">
						<h4><?=$langStatics->FooterMenu1Baskil?></h4>
						<ul class="List">
							<li class="Item"><a href="<?=$langStatics->FooterMenu1Url1?>" class="Link"><?=$langStatics->FooterMenu1Text1?></a></li>
							<li class="Item"><a href="<?=$langStatics->FooterMenu1Url2?>" class="Link"><?=$langStatics->FooterMenu1Text2?></a></li>
							<li class="Item"><a href="<?=$langStatics->FooterMenu1Url3?>" class="Link"><?=$langStatics->FooterMenu1Text3?></a></li>
							<li class="Item"><a href="<?=$langStatics->FooterMenu1Url4?>" class="Link"><?=$langStatics->FooterMenu1Text4?></a></li>
							<li class="Item"><a href="<?=$langStatics->FooterMenu1Url5?>" class="Link"><?=$langStatics->FooterMenu1Text5?></a></li>
							<li class="Item"><a href="<?=$langStatics->FooterMenu1Url6?>" class="Link"><?=$langStatics->FooterMenu1Text6?></a></li>
							<li class="Item"><a href="<?=$langStatics->FooterMenu1Url7?>" class="Link"><?=$langStatics->FooterMenu1Text7?></a></li>
						</ul>
					</div>
				</div>
				<div class="col-lg-3 col-md-4 col-sm-4 col-12">
					<div class="Box border-0">
						<h4><?=$langStatics->FooterMenu2Baskil?></h4>
						<ul class="List">
							<li class="Item"><a href="<?=$langStatics->FooterMenu2Url1?>" class="Link"><?=$langStatics->FooterMenu2Text1?></a></li>
							<!--<li class="Item"><a href="<?=$langStatics->FooterMenu2Url2?>" class="Link"><?=$langStatics->FooterMenu2Text2?></a></li>-->
							<!-- <li class="Item"><a href="<?=$langStatics->FooterMenu2Url3?>" class="Link"><?=$langStatics->FooterMenu2Text3?></a></li> -->
							<li class="Item"><a href="<?=$langStatics->FooterMenu2Url4?>" class="Link"><?=$langStatics->FooterMenu2Text4?></a></li>
							<li class="Item"><a href="<?=$langStatics->FooterMenu2Url5?>" class="Link"><?=$langStatics->FooterMenu2Text5?></a></li>
							<li class="Item"><a href="<?=$langStatics->FooterMenu2Url6?>" class="Link"><?=$langStatics->FooterMenu2Text6?></a></li>
							<li class="Item"><a href="<?=$langStatics->FooterMenu2Url7?>" class="Link"><?=$langStatics->FooterMenu2Text7?></a></li>
						</ul>
					</div>
				</div>
				<div class="col-lg-3 col-md-4 col-auto">
					<div class="information">
						<div class="Column">
							<div class="Img"><img src="<?=site_url('assets/Front/')?>images/Icons/location.png" alt="adres logo ebasim"></div>
							<div class="Text">
								<div class="T"><?=$langStatics->Adres?> :</div>
								<p>Kazım Karabekir Mahallesi <br>Mevlana Caddesi No: 35-2 Kat: 2 </p>
								<p>Darıca / Kocaeli</p>
							</div>
						</div>
						<div class="Column">
							<div class="Img"><img src="<?=site_url('assets/Front/')?>images/Icons/phone.png" alt="teleofn logo ebasim"></div>
							<div class="Text">
								<div class="T"><?=$langStatics->Telefon?> :</div>
								<p><!--<?=$langStatics->TelefonSatir1?>-->0 (850) 441 09 19

 - <strong><!--<?=$langStatics->TelefonAciklama1?>--> Merkez</strong></p>
								<!--<p><?=$langStatics->TelefonSatir2?> - <strong><?=$langStatics->TelefonAciklama2?></strong></p>-->
							</div>
						</div>
						<div class="Column">
							<div class="Img"><img src="<?=site_url('assets/Front/')?>images/Icons/email.png" alt="email logo ebasim"></div>
							<div class="Text">
								<div class="T"><?=$langStatics->Eposta?> :</div>
								<p><?=$langStatics->EpostaAdres1?></p>
								<p><?=$langStatics->EpostaAdres2?></p>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-3">
					<div class="Area">
						<a href="<?=site_url()?>"><img src="<?=site_url('assets/ebasimlogo.png')?>" alt="ebasim logo"></a>

						<div class="Social">
							<div class="T"><?=$langStatics->BiziTakipEdin?></div>
							<a href="https://www.facebook.com/kodakil.io/" class="SocialLink Fb"><i class="fa fa-facebook"></i></a>
							<a href="#" class="SocialLink Tw"><i class="fa fa-twitter"></i></a>
							<!--<a href="#" class="SocialLink Gp"><i class="fa fa-google-plus"></i></a>-->
							<!--<a href="https://www.youtube.com/channel/UC9HHbgrp6BD8gOu5znSK8eQ" class="SocialLink Gp"><i class="fa fa-youtube"></i></a>-->
							<a href="https://www.instagram.com/kodakil.io/" class="SocialLink Ins"><i class="fa fa-instagram"></i></a>
							<a href="#" class="SocialLink Pin"><i class="fa fa-pinterest-p"></i></a>
							<div class="T">#Ebasim</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="BankList">
		<div><img src="<?=site_url('assets/Front/')?>images/Banks/bank1.png" alt="ebasim.com banka logo"></div>
		<div><img src="<?=site_url('assets/Front/')?>images/Banks/bank2.png" alt="ebasim.com banka logo"></div>
		<div><img src="<?=site_url('assets/Front/')?>images/Banks/bank3.png" alt="ebasim.com banka logo"></div>
		<div><img src="<?=site_url('assets/Front/')?>images/Banks/bank4.png" alt="ebasim.com banka logo"></div>
		<div><img src="<?=site_url('assets/Front/')?>images/Banks/bank5.png" alt="ebasim.com banka logo"></div>
		<div><img src="<?=site_url('assets/Front/')?>images/Banks/bank6.png" alt="ebasim.com banka logo"></div>
		<div><img src="<?=site_url('assets/Front/')?>images/Banks/bank7.png" alt="ebasim.com banka logo"></div>
		<div><img src="<?=site_url('assets/Front/')?>images/Banks/bank8.png" alt="ebasim.com banka logo"></div>
	</div>
	<div class="Copyright">
		<div class="container">
			<div class="row">
				<div class="col-12 col-lg-6">
					<?=$langStatics->footerAltCopyright?>
				</div>
				<div class="col-6 col-lg-6">
					<div class="kodakil_logo">
						<a target="_blank" href="https://kodakil.com/" class="Kodakil-Logo" rel="nofollow">
						  	<img src="https://kodakil.com/assets/Front/images/kodakil_footer/kodakil-dark.png" alt="Kodakıl" title="Kodakıl">
						  	<img src="https://kodakil.com/assets/Front/images/kodakil_footer/kodakil-oi.png" alt="Kodakıl" title="Kodakıl">
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</footer><!-- END : Footer -->

<a target="_blank" href="https://api.whatsapp.com/send?phone=90555 000 00 00&text=Merhaba" class="Whatsapp-chat"><img alt="kodakillabs.com whatsapp ikon" src="<?=site_url('assets/Front/images/Icons/WhatsApp_Icon.png')?>"></a>


<!-- Kampanya Popupi -->
<?php /*if($getPopup->status == 1){ ?>
<div class="Bottom-right-banner">
	<div class="Close"><i class="fa fa-times" aria-hidden="true"></i></div>
	<a href="<?=$getPopup->link?>"><img src="<?=site_url($getPopup->picture)?>" alt="kampanya image kodakillabs.com"></a>
</div>
<?php } */ ?>
<!-- Kampanya Pipi -->

<script>
	jQuery(document).ready(function($) {
		$('.Bottom-right-banner > .Close').click(function() {
			$('.Bottom-right-banner').removeClass('Show');
		});

		setTimeout(function(){
			$('.Bottom-right-banner').addClass('Show');
		}, 3000);
		
	});
</script>

<script>
	
	if ($(window).width() < 991) {
		$('.TopBar').css('display','none');
	}
</script>