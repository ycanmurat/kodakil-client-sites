<!-- TopBar -->

<!--<div id="firstloader"><img src="<?=site_url()?>assets/Front/images/loader.gif" /></div>-->
<section class="TopBar">
	<div class="Area">
		<div class="row justify-content-center">
			<div class="col-lg-auto col">
				<ul class="List">
					<li class="Item Def"><img class="EbaskIcons" src="<?=site_url('assets/Front/')?>images/Icons/phone.png" alt="ebasim.com"> <strong><?=$langStatics->TopbarTelNo?></strong></li>
					<li class="Item"><a href="<?=site_url('yardim')?>" class="pr-2 pl-2"><img class="EbaskIcons m-0" src="<?=site_url('assets/Front/')?>images/Icons/help.png" alt="ebasim.com"></a></li>
				</ul>
			</div>
			<div class="col hidden-md-down">
				<div class="Notice"><?=$langStatics->TopbarMidleText?></div>
			</div>
			<div class="col-auto">
				<ul class="List">
					<!--<li class="Item"><a href="javascript:void(0);" data-toggle="modal" data-target="#trackingModal"><img class="EbaskIcons" src="<?=site_url('assets/Front/')?>images/Icons/tracking.png" alt="kodakillabs.com"> <?=$langStatics->sag3lu1?></a></li>-->
					<!--<li class="Item hidden-sm-down"><a href="<?=site_url('kampanyalar')?>"><img class="EbaskIcons" src="<?=site_url('assets/Front/')?>images/Icons/kampanyalar-icon.png" alt="kodakillabs.com"> <?=$langStatics->sag3lu2?></a></li>-->
					<li class="Item Last"><a href="javascript:void(0);" data-toggle="modal" data-target="#SiteSettingModal"><span class="flag-icon flag-icon-tr"></span> Türkçe (
						<?php foreach ($currency as $key => $val) { ?>
							<?=($val->Id == Get_Cookie('currency') ? $val->code :'')?>
						<?php } ?>
					)</a></li>
				</ul>
			</div>
		</div>
	</div>
</section><!-- END : TopBar -->

<!-- Header -->
<header>
	<div class="row">
		<div class="col-12">
			<div class="Nav navbar navbar-inverse">
				<a class="navbar-brand" href="<?=site_url()?>">
					<div class="icon">
						<img class="EbaskIcons" src="<?=(site_url('assets/logo/logoikonp.png'))?>" alt="ebasim.com">
						<img class="EbaskIcons" src="<?=(site_url('assets/logo/logoikonb.png'))?>" alt="ebasim.com">
						<img class="EbaskIcons" src="<?=(site_url('assets/logo/logoikony.png'))?>" alt="ebasim.com">
					</div>
					<div class="name">
						<img class="EbaskIcons" src="<?=(site_url('assets/Front/images/newlogo.png'))?>" alt="ebasim.com">
					</div>
				</a>
				<div class="Search col-lg col-12">
					<form action="<?=site_url('arama')?>" method="get">
						<div class="SearchBox">
							<input type="text" class="searchInput" placeholder="<?=$langStatics->Ara?>" name="search" autocomplete="off">
							<button class="searchBtn"><img src="<?=site_url('assets/Front/')?>images/Icons/search.png" alt="ebasim.com"></button>
						</div>
					</form>
				</div>

				<div class="nav navbar-nav navbar-right">
					<div class="UserNav">
						<ul class="List">
							<li class="Item Offer"><a href="<?=site_url('teklif-iste/')?>" class="Item"><img class="EbaskIcons" src="<?=site_url('assets/Front/')?>images/Icons/offer.png" alt="ebasim.com"> <?=$langStatics->TeklifIste?></a></li>

							<?php if (CookieIsset('token') && CookieIsset('name') && CookieIsset('HashUser')) { ?>
								<li class="Item UserControl">
									<img class="EbaskIcons" src="<?=site_url('assets/Front/')?>images/Icons/member.png" alt="ebasim.com"> <div class="Name"><?=Get_Cookie('name')?></div>

									<div class="Dropdown">
										<div class="DropdownContent ProfilePreview">
											<ul class="ProfileList">
												<li class="Item">
													<a href="<?=site_url('hesabim/')?>" class="Link">
														<div class="Img"><img src="<?=site_url('assets/Front/')?>images/Icons/header-account.png" alt="ebasim.com"></div>
														<p> <?=$langStatics->Hesabim?></p>
													</a>
												</li>
												<li class="Item">
													<a href="<?=site_url('hesabim/siparislerim')?>" class="Link">
														<div class="Img"><img src="<?=site_url('assets/Front/')?>images/Icons/header-orders.png" alt="ebasim.com"></div>
														<p> <?=$langStatics->Siparislerim?> <span class="count"><?=$AllOrderCount?></span></p>
													</a>
												</li>
												<li class="Item">
													<a href="<?=site_url('hesabim/adreslerim')?>" class="Link">
														<div class="Img"><img src="<?=site_url('assets/Front/')?>images/Icons/header-adresses.png" alt="ebasim.com"></div>
														<p> <?=$langStatics->Adreslerim?></p>
													</a>
												</li>
												<li class="Item">
													<a href="<?=site_url('hesabim/tekliflerim')?>" class="Link">
														<div class="Img"><img src="<?=site_url('assets/Front/')?>images/Icons/header-designs.png" alt="ebasim.com"></div>
														<p> <?=$langStatics->TeklifTalep?></p>
													</a>
												</li>
												<!--<li class="Item">
													<a href="#" class="Link">
														<div class="Img"><img src="<?=site_url('assets/Front/')?>images/Icons/header-help.png" alt="kodakillabs.com"></div>
														<p> <?=$langStatics->Destek?></p>
													</a>
												</li>-->
											</ul>
											<div class="DropdownFooter text-center">
												<a href="<?=site_url('cikis')?>" class="Btn Green-d"> <?=$langStatics->CikisYap?></a>
											</div>
										</div>
									</div>
								</li>
							<?php }else{ ?>
								<li class="Item LoginRegister">
									<img class="EbaskIcons" src="<?=site_url('assets/Front/')?>images/Icons/login-register.png" alt="ebasim.com"> <a href="<?=site_url('giris')?>" class="Item">Giriş</a> / <a href="<?=site_url('kayit')?>" class="Item">Kayıt</a>
								</li>
							<?php } ?>

							<li class="Item Cart">
								<a href="<?=site_url('sepet')?>">
									<!--<a href="#"> -->
										<img class="EbaskIcons" src="<?=site_url('assets/Front/')?>images/Icons/shopping-cart.svg" alt="kodakillabs.com">
										<span class="Count ChartCount">0</span>
									</a>

									<div class="Dropdown CartDropdown">
										<!--Sepet Ayrıntıları -->
										<div class="DropdownContent CartPreview SepetDolu" style="display: none">
											<ul class="List ChartProducts">
											</ul>

											<div class="DropdownFooter">
												<div class="Left">
													<div class="TotalPrice">
														<div class="Text"><?=$langStatics->ToplamFiyat?></div>
														<div class="Total TotalPriceCur">5<span>(<?=$langStatics->KargoUcretsiz?>)</span></div>
													</div>
												</div>
												<div class="Right">
													<a href="<?=site_url('sepet')?>" class="Btn Green-d">Sipariş Ver <i class="fa fa-angle-right" aria-hidden="true"></i></a>
													<!--<a href="#" class="Btn Red-d">Kısa Süreliğine Sipariş Kapalıdır </a>-->
												</div>
											</div>
										</div>
										<div class="DropdownContent Empty SepetBos">
											<div class="Icon"><img src="<?=site_url('assets/Front/')?>images/cart-null.png" alt="kodakillabs.com"></div>
											<p><span><?=$langStatics->SepetteUrun?></span><?=$langStatics->bulunmamaktadir?></p>
										</div>
									</div>
								</li>
								<li class="Item hamburgerMenu">
									<div id="Hamburger">
										<span></span>
										<span></span>
										<span></span>
										<span></span>
									</div>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</header><!-- END : Header -->

<!-- trackingModal
<div class="modal fade globalModal" id="trackingModal" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-body">
      	<button type="button" class="close" data-dismiss="modal" aria-label="Close"><i class="fa fa-times" aria-hidden="true"></i></button>
        <div class="TrackingBox">
        	<div class="Title"><?=$langStatics->SiparisTakipBaslik?></div>

        	<div class="Icon"><img src="<?=site_url('assets/Front/')?>images/Icons/tracking-big.png" alt="kodakillabs.com"></div>

			<div class="TrackingForm">
				<div class="FormElements">
	        		<label for="trackingNo"><?=$langStatics->SiparisTakipSatir1?> :</label>
	        		<input type="text" id="trackingNo" name="trackingNo">
	        	</div>
	        	<div class="FormElements">
	        		<label for="Captcha"><?=$langStatics->SiparisTakipSatir2?> :</label>
	        		<img src="<?=site_url('assets/Front/')?>images/newCaptchaAnchor.gif" id="Captcha" alt="kodakillabs.com" style="width: 100%;">
	        	</div>
	        	<div class="FormElements BtnBox">
	        		<button class="Btn Blue-d" id="orderSearch"><?=$langStatics->SiparisTakipBtn?> </button>
	        	</div>
			</div>

			<div class="TrackingEnd">
				<div class="Text"><?=$langStatics->SiparisTakipSiparisDurumu?></div>
				<p class="Num"><?=$langStatics->SiparisTakiTakipKodu?> : 564887974</p>

				<table class="TrackingTable table table-sm" cellspacing="1">
				  	<tbody>
				  	  	<tr><td><?=$langStatics->KargoTakipSatir1?></td><td>Serdar AŞAN</td></tr>
				  	  	<tr><td><?=$langStatics->KargoTakipSatir2?></td><td>Ebask</td></tr>
				  	  	<tr><td><?=$langStatics->KargoTakipSatir3?></td><td>0555 000 00 00</td></tr>
				  	  	<tr><td><?=$langStatics->KargoTakipSatir4?></td><td>564887974</td></tr>
				  	  	<tr><td><?=$langStatics->KargoTakipSatir5?></td><td>Yolda..</td></tr>
				  	  	<tr><td><?=$langStatics->KargoTakipSatir6?></td><td>20.11.2017</td></tr>
				  	</tbody>
				</table>

				<div class="Btn Green-d" id="NewTracking"><?=$langStatics->TekrarAraBtn?></div>
			</div>
        </div>
      </div>
    </div>
  </div>
</div>
-->
<!-- Menu -->
<section class="Menu">
	<div class="MobileNavHeader">
		<div class="mobileCloseNav"><i class="fa fa-times"></i></div>
		<a href="<?=site_url()?>" class="Logo"><img src="<?=site_url('assets/')?>ebasimlogo.png" alt="ebasim.com"></a>
		<div class="Control">
			<div class="BtnWrapper">

				<?php if (CookieIsset('token') && CookieIsset('name') && CookieIsset('HashUser')) { ?>
					<a href="<?=site_url('hesabim')?>">Hesabım</a>
					<a href="<?=site_url('cikis')?>" class="Logout">Çıkış Yap</a>
				<?php }else{ ?>
					<a href="<?=site_url('giris')?>"><?=$langStatics->girisYap ?></a>
					<a href="<?=site_url('kayit')?>"><?=$langStatics->kayitOl ?></a>
				<?php } ?>
			</div>
			<a href="<?=site_url('teklif-iste')?>" class="OfferBtn"><?=$langStatics->TeklifIste?></a>
		</div>
	</div>
	<div class="MenuArea">
		<div class="row">
			<div class="col-12">
				<div class="navList">
					<ul>
						<!--Kategori-->
						<?foreach ($categoryList as $listQuery => $info){?>
							<li class="Item dropdownLink">
								<a href="<?=site_url($info->category_slug)?>" class="MenuLink">
									<?php if (trim($info->name) == 'Davetiyeler') {?>
										<span class="New">Yeni</span>
									<?php } ?>
									<span><?=$info->name?></span>
								</a>
								<div class="Dropdown">
									<?foreach ($info->products as $key => $alt_info){?>
										<a href="<?=$alt_info->payment_type==2?site_url($alt_info->product_slug):site_url($alt_info->product_slug);?>" class="L">
											<img src="<?=empty($alt_info->default_image)?TimbThumb(site_url('assets/Front/images/noimage.png'),'100x100'):TimbThumb(site_url($alt_info->default_image),'100x100')?>" alt="<?=$alt_info->product_name?>" title="<?=$alt_info->product_name?>" onerror="this.onerror=null;this.src='assets/fake/100x100.png';">
											<span>
												<?=$alt_info->product_name?>
											</span>
										</a>
										<?}if(count($info->products) == 17){?>
											<a href="<?=site_url($info->category_slug)?>" class="L">
												<img src="<?=TimbThumb(site_url('assets/Front/images/Icons/NavAll.jpg'),'100x100')?>" alt="kodakillabs.com">
												<span>Tüm Ürünler</span>
											</a>
											<?}?>
										</div>
									</li>
									<?}?>
								</ul>
							</div>
						</div>
					</div>
				</div>
</section><!-- END : Menu -->