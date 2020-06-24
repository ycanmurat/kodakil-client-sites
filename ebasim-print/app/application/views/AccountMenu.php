<?php
$indexActive = "";
$ordersActive = "";
$addressActive = "";
$offersActive = "";
if ($this->router->method == "index") { $indexActive = " active"; }
elseif ($this->router->method == "Orders") { $ordersActive = " active"; }
elseif ($this->router->method == "Address") { $addressActive = " active"; }
elseif ($this->router->method == "Offers") { $offersActive = " active"; }
?>
<section class="Pages--Wrapper Account">
	<div class="container">
		<div class="row">
			 	<div class="col-lg-3">
			 		<div class="Account-Nav" style="background-color: white;">
			 			<div class="T">
			 					<?=$langStatics->hesapMerhaba?>, <strong><?=ucfirst(get_firstname($user->name))?></strong>
							<span class="M"><?=$user->email?></span>
			 			</div>

			 			<ul class="List">
							<li class="Item">
								<a href="<?=site_url('hesabim')?>" class="Link <?=$indexActive?>">
									<div class="Img"><img src="<?=site_url('assets/Front/')?>images/Icons/header-account.png" alt="ebasim.com hesap ikon"></div>
									<p><?=$langStatics->Hesabim?></p>
								</a>
							</li>
							<li class="Item">
								<a href="<?=site_url('hesabim/siparislerim')?>" class="Link <?=$ordersActive?>">
									<div class="Img"><img src="<?=site_url('assets/Front/')?>images/Icons/header-orders.png" alt="ebasim.com sipariş ikon"></div>
									<p><?=$langStatics->Siparislerim?> <span class="count"><?=$AllOrderCount?></span></p>
								</a>
							</li>
							<li class="Item">
								<a href="<?=site_url('hesabim/adreslerim')?>" class="Link <?=$addressActive?>">
									<div class="Img"><img src="<?=site_url('assets/Front/')?>images/Icons/header-adresses.png" alt="ebasim.com adres ikon"></div>
									<p><?=$langStatics->Adreslerim?></p>
								</a>
							</li>
							<li class="Item">
								<a href="<?=site_url('hesabim/tekliflerim')?>" class="Link <?=$offersActive?>">
									<div class="Img"><img src="<?=site_url('assets/Front/')?>images/Icons/header-designs.png" alt="tasarım ikon"></div>
									<p><?=$langStatics->TeklifTalep?></p>
								</a>
							</li>
							<li class="Item">
								<a href="<?=site_url('cikis')?>" class="Link">
									<div class="Img"><img src="<?=site_url('assets/Front/')?>images/Icons/header-quit.png" alt="çıkış ikon"></div>
									<p><?=$langStatics->CikisYap?></p>
								</a>
							</li>
						</ul>
			 		</div>
			 	</div>