<!DOCTYPE html>
<html lang="en" >
	<!-- begin::Head -->
	<head>
		<meta charset="utf-8" />
		<title>
			Kodakillabs | Demo E-Ticaret - Admin Paneli
		</title>
		<meta name="description" content="General widget examples">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta name="robots" content="noindex">
		<!--begin::Web font -->
		<script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.16/webfont.js"></script>
		<script>
          WebFont.load({
            google: {"families":["Poppins:300,400,500,600,700","Roboto:300,400,500,600,700"]},
            active: function() {
                sessionStorage.fonts = true;
            }
          });
		</script>
		<!--end::Web font -->
		<!--begin::Base Styles -->
		<link href="<?=base_url('assets/theme/')?>assets/vendors/base/vendors.bundle.css" rel="stylesheet" type="text/css" />
		<link href="<?=base_url('assets/theme/')?>assets/demo/default/base/style.bundle.css" rel="stylesheet" type="text/css" />
		<link href="<?=base_url('assets/theme/')?>assets/css/custom.css" rel="stylesheet" type="text/css" />
		<!--end::Base Styles -->
		<link rel="shortcut icon" href="<?=base_url('assets/theme/')?>assets/demo/default/media/img/logo/favicon.ico" />
	</head>
	<!-- end::Head -->
	<!-- end::Body -->

	<body  class="m-page--fluid m--skin- m-content--skin-light2 m-header--fixed m-header--fixed-mobile m-aside-left--enabled m-aside-left--skin-dark m-aside-left--offcanvas m-footer--push m-aside--offcanvas-default"  >
		<!-- begin:: Page -->

		<div class="m-grid m-grid--hor m-grid--root m-page">
			<!-- BEGIN: Header -->
			<header class="m-grid__item m-header"  data-minimize-mobile="hide" data-minimize-offset="200" data-minimize-mobile-offset="200" data-minimize="minimize" >
				<div class="m-container m-container--fluid m-container--full-height">
					<div class="m-stack m-stack--ver m-stack--desktop">
						<!-- BEGIN: Brand -->
						<div class="m-stack__item m-brand  m-brand--skin-dark ">
							<div class="m-stack m-stack--ver m-stack--general">
								<div class="m-stack__item m-stack__item--middle m-brand__logo">
									<a href="<?=site_url('Admin')?>" class="m-brand__logo-wrapper">
										<img alt="" width="185" src="<?=base_url('assets/ebasimlogo.png')?>"/>
									</a>
								</div>
								<div class="m-stack__item m-stack__item--middle m-brand__tools">
									<!-- BEGIN: Left Aside Minimize Toggle -->
									<a href="javascript:;" id="m_aside_left_minimize_toggle" class="m-brand__icon m-brand__toggler m-brand__toggler--left m--visible-desktop-inline-block">
										<span></span>
									</a>
									<!-- END -->
									<!-- BEGIN: Responsive Aside Left Menu Toggler -->
									<a href="javascript:;" id="m_aside_left_offcanvas_toggle" class="m-brand__icon m-brand__toggler m-brand__toggler--left m--visible-tablet-and-mobile-inline-block">
										<span></span>
									</a>
									<!-- END -->
									<!-- BEGIN: Responsive Header Menu Toggler -->
									<a id="m_aside_header_menu_mobile_toggle" href="javascript:;" class="m-brand__icon m-brand__toggler m--visible-tablet-and-mobile-inline-block">
										<span></span>
									</a>
									<!-- END -->
									<!-- BEGIN: Topbar Toggler -->
									<a id="m_aside_header_topbar_mobile_toggle" href="javascript:;" class="m-brand__icon m--visible-tablet-and-mobile-inline-block">
										<i class="flaticon-more"></i>
									</a>
									<!-- BEGIN: Topbar Toggler -->
								</div>
							</div>
						</div>
						<!-- END: Brand -->
						<!-- END: Brand -->
						<div class="m-stack__item m-stack__item--fluid m-header-head" id="m_header_nav">
							<!-- BEGIN: Horizontal Menu -->
							<!-- END: Horizontal Menu -->
							<!-- BEGIN: Topbar -->
							<div id="m_header_topbar" class="m-topbar  m-stack m-stack--ver m-stack--general">
								<div class="m-stack__item m-topbar__nav-wrapper">
									<ul class="m-topbar__nav m-nav m-nav--inline">
										<li class="m-nav__item m-topbar__user-profile m-topbar__user-profile--img  m-dropdown m-dropdown--medium m-dropdown--arrow m-dropdown--header-bg-fill m-dropdown--align-right m-dropdown--mobile-full-width m-dropdown--skin-light" data-dropdown-toggle="click">
											<a href="#" class="m-nav__link m-dropdown__toggle">
												<span class="m-topbar__userpic">
													<img src="<?=base_url('assets')?>/pp.png" class="m--img-rounded m--marginless m--img-centered" alt=""/>
												</span>
												<span class="m-topbar__username m--hide">
																	<?php 
																	$user = $this->session->userdata('user');
																	?>
													<?=$user->user_name?>
												</span>
											</a>
											<div class="m-dropdown__wrapper">
												<span class="m-dropdown__arrow m-dropdown__arrow--right m-dropdown__arrow--adjust"></span>
												<div class="m-dropdown__inner">
													<div class="m-dropdown__header m--align-center" style="background: url(<?=base_url('assets/theme/')?>assets/app/media/img/misc/user_profile_bg.jpg); background-size: cover;">
														<div class="m-card-user m-card-user--skin-dark">
															<div class="m-card-user__pic">
																<img src="<?=base_url('assets')?>/pp.png" class="m--img-rounded m--marginless" alt=""/>
															</div>
															<div class="m-card-user__details">
																<span class="m-card-user__name m--font-weight-500">
																	<?=$user->user_name?>
																</span>
																<a href="" class="m-card-user__email m--font-weight-300 m-link">
																	<?=$user->user_mail?>
																</a>
															</div>
														</div>
													</div>
													<div class="m-dropdown__body">
														<div class="m-dropdown__content">
															<ul class="m-nav m-nav--skin-light">
																<li class="m-nav__item">
																	<a href="<?=base_url('Admin/Logout/')?>" class="btn m-btn--pill  btn-secondary m-btn m-btn--custom m-btn--label-brand m-btn--bolder">
																		Çıkış
																	</a>
																</li>
															</ul>
														</div>
													</div>
												</div>
											</div>
										</li>
										<li id="m_quick_sidebar_toggle" class="m-nav__item">
										</li>
									</ul>
								</div>
							</div>
							<!-- END: Topbar -->
						</div>
					</div>
				</div>
			</header>
			<!-- END: Header -->
			<!-- begin::Body -->
			<div class="m-grid__item m-grid__item--fluid m-grid m-grid--ver-desktop m-grid--desktop m-body">
				<!-- BEGIN: Left Aside -->
				<div id="m_aside_left" class="m-grid__item	m-aside-left  m-aside-left--skin-dark ">
					<!-- BEGIN: Aside Menu -->
					<div 
		id="m_ver_menu" 
		class="m-aside-menu  m-aside-menu--skin-dark m-aside-menu--submenu-skin-dark " 
		data-menu-vertical="true"
		 data-menu-scrollable="false" data-menu-dropdown-timeout="500"  
		>
						<ul class="m-menu__nav  m-menu__nav--dropdown-submenu-arrow">
							<li class="m-menu__item <?=($mainMenu=='Home'?'m-menu__item--open m-menu__item--expanded m-menu__item--active':'')?>" aria-haspopup="true" >
								<a href="<?=site_url('Admin');?>" class="m-menu__link ">
									<i class="m-menu__link-icon flaticon-line-graph"></i>
									<span class="m-menu__link-title">
										<span class="m-menu__link-wrap">
											<span class="m-menu__link-text">
												Anasayfa
											</span>
                                            <!--
											    <span class="m-menu__link-badge">
												    <span class="m-badge m-badge--danger">
													    3
												    </span>
											    </span>
                                            -->
										</span>
									</span>
								</a>
							</li>
                            <!-- Ürün Menü -->
                            <?if($this->session->userdata('user')->auth == 3 || $this->session->userdata('user')->auth == 0 || $this->session->userdata('user')->auth == 2){?>
                            <li class="m-menu__item  m-menu__item--submenu  <?=($mainMenu=='Product'?'m-menu__item--open m-menu__item--expanded':'')?>" aria-haspopup="true" id="m_variant" data-menu-submenu-toggle="hover">
								<a  href="#" class="m-menu__link m-menu__toggle">
									<i class="m-menu__link-icon fa 	fa-suitcase"></i>
									<span class="m-menu__link-text">
										Ürün Yönetimi
									</span>
									<i class="m-menu__ver-arrow la la-angle-right"></i>
								</a>
								<div class="m-menu__submenu">
									<span class="m-menu__arrow"></span>
									<ul class="m-menu__subnav">
										<li class="m-menu__item <?=($subMenu=='ProductList'?'m-menu__item--active':'')?>" aria-haspopup="true">
											<a  href="<?=site_url('Admin/Product')?>" class="m-menu__link ">
												<i class="m-menu__link-bullet m-menu__link-bullet--dot">
													<span></span>
												</i>
												<span class="m-menu__link-text">
													Ürün Listele
												</span>
											</a>
										</li>
										<li class="m-menu__item <?=($subMenu=='ProductAdd'?'m-menu__item--active':'')?>" aria-haspopup="true" >
											<a href="<?=site_url('Admin/Product/add')?>" class="m-menu__link ">
												<i class="m-menu__link-bullet m-menu__link-bullet--dot">
													<span></span>
												</i>
												<span class="m-menu__link-text">
													Ürün Ekle
												</span>
											</a>
										</li>
									</ul>
								</div>
							</li>
							<?}?>
                            <!-- Ürün Menü -->
                            <?if($this->session->userdata('user')->auth == 3 || $this->session->userdata('user')->auth == 0){?>
                            <!-- Sipariş Menü -->
                            <li class="m-menu__item  m-menu__item--submenu  <?=($mainMenu=='Order'?'m-menu__item--open m-menu__item--expanded':'')?>" aria-haspopup="true" id="m_variant" data-menu-submenu-toggle="hover">
								<a  href="#" class="m-menu__link m-menu__toggle">
									<i class="m-menu__link-icon fa fa-file-text-o"></i>
									<span class="m-menu__link-text">
										Sipariş Yönetimi
									</span>
									<i class="m-menu__ver-arrow la la-angle-right"></i>
								</a>
								<div class="m-menu__submenu">
									<span class="m-menu__arrow"></span>
									<ul class="m-menu__subnav">
										<li class="m-menu__item <?=($subMenu=='OrderList'?'m-menu__item--active':'')?>" aria-haspopup="true">
											<a  href="<?=site_url('Admin/Order')?>" class="m-menu__link ">
												<i class="m-menu__link-bullet m-menu__link-bullet--dot">
													<span></span>
												</i>
												<span class="m-menu__link-text">
													Sipariş Listele
												</span>
											</a>
										</li>
									</ul>
								</div>
							</li>
                            <!-- Sipariş Menü -->
                            <?}?>
							<?php /* 
							<?if($this->session->userdata('user')->auth == 0 || $this->session->userdata('user')->auth == 2){?>
                            <!-- E-Fatura Menü 
                            <li class="m-menu__item  m-menu__item--submenu <?=($subMenu=='EfaturaList'?'m-menu__item--active':'')?> <?=($mainMenu=='Efatura'?'m-menu__item--open m-menu__item--expanded':'')?>" aria-haspopup="true" id="m_conversation" data-menu-submenu-toggle="hover">
								<a  href="<?=admin_url('Efatura/')?>" class="m-menu__link m-menu__toggle">
									<i class="m-menu__link-icon flaticon-interface-5"></i>
									<span class="m-menu__link-text">
										E-Fatura
									</span>
								</a>
							</li>
                             E-Fatura Menü -->
                            <?}?>

                            */ ?>

                            <!-- Dil Menü -->
                            <?if($this->session->userdata('user')->auth == 0 || $this->session->userdata('user')->auth == 2){?>
                            <li class="m-menu__item  m-menu__item--submenu  <?=($mainMenu=='Language'?'m-menu__item--open m-menu__item--expanded':'')?>" aria-haspopup="true" id="m_category" data-menu-submenu-toggle="hover">
								<a  href="#" class="m-menu__link m-menu__toggle">
									<i class="m-menu__link-icon fa 	fa-language"></i>
									<span class="m-menu__link-text">
										Dil Yönetimi
									</span>
									<i class="m-menu__ver-arrow la la-angle-right"></i>
								</a>
								<div class="m-menu__submenu">
									<span class="m-menu__arrow"></span>
									<ul class="m-menu__subnav">
										<li class="m-menu__item <?=($subMenu=='LangList'?'m-menu__item--active':'')?>" aria-haspopup="true">
											<a  href="<?=site_url('Admin/Language')?>" class="m-menu__link ">
												<i class="m-menu__link-bullet m-menu__link-bullet--dot">
													<span></span>
												</i>
												<span class="m-menu__link-text">
													Dil Listele
												</span>
											</a>
										</li>
										<li class="m-menu__item <?=($subMenu=='LangAdd'?'m-menu__item--active':'')?>" aria-haspopup="true" >
											<a href="<?=site_url('Admin/Language/add')?>" class="m-menu__link ">
												<i class="m-menu__link-bullet m-menu__link-bullet--dot">
													<span></span>
												</i>
												<span class="m-menu__link-text">
													Dil Ekle
												</span>
											</a>
										</li>
									</ul>
								</div>
							</li>
                            <!-- Dil Menü -->
                            <?}?>
                            <?if($this->session->userdata('user')->auth == 0 || $this->session->userdata('user')->auth == 2){?>
                            <!-- Kategori Menü -->
                            <li class="m-menu__item  m-menu__item--submenu  <?=($mainMenu=='Category'?'m-menu__item--open m-menu__item--expanded':'')?>" aria-haspopup="true" id="m_category" data-menu-submenu-toggle="hover">
								<a  href="#" class="m-menu__link m-menu__toggle">
									<i class="m-menu__link-icon fa 	fa-list"></i>
									<span class="m-menu__link-text">
										Kategori Yönetimi
									</span>
									<i class="m-menu__ver-arrow la la-angle-right"></i>
								</a>
								<div class="m-menu__submenu">
									<span class="m-menu__arrow"></span>
									<ul class="m-menu__subnav">
										<li class="m-menu__item <?=($subMenu=='CatList'?'m-menu__item--active':'')?>" aria-haspopup="true">
											<a  href="<?=site_url('Admin/Category')?>" class="m-menu__link ">
												<i class="m-menu__link-bullet m-menu__link-bullet--dot">
													<span></span>
												</i>
												<span class="m-menu__link-text">
													Kategori Listele
												</span>
											</a>
										</li>
										<li class="m-menu__item <?=($subMenu=='CatAdd'?'m-menu__item--active':'')?>" aria-haspopup="true" >
											<a href="<?=site_url('Admin/Category/add')?>" class="m-menu__link ">
												<i class="m-menu__link-bullet m-menu__link-bullet--dot">
													<span></span>
												</i>
												<span class="m-menu__link-text">
													Kategori Ekle
												</span>
											</a>
										</li>
										<li class="m-menu__item <?=($subMenu=='productMust'?'m-menu__item--active':'')?>" aria-haspopup="true" >
											<a href="<?=site_url('Admin/Category/productMust')?>" class="m-menu__link ">
												<i class="m-menu__link-bullet m-menu__link-bullet--dot">
													<span></span>
												</i>
												<span class="m-menu__link-text">
													Ürün Sıralarını Düzenleyin
												</span>
											</a>
										</li>
									</ul>
								</div>
							</li>
							<?}?>
                            <!-- Kategori Menü -->
                            <!-- Varyant Menü -->
                            <?if($this->session->userdata('user')->auth == 0 || $this->session->userdata('user')->auth == 2){?>
                            <li class="m-menu__item  m-menu__item--submenu  <?=($mainMenu=='Variant'?'m-menu__item--open m-menu__item--expanded':'')?>" aria-haspopup="true" id="m_variant" data-menu-submenu-toggle="hover">
								<a  href="#" class="m-menu__link m-menu__toggle">
									<i class="m-menu__link-icon fa 	fa-sitemap"></i>
									<span class="m-menu__link-text">
										Varyant Yönetimi
									</span>
									<i class="m-menu__ver-arrow la la-angle-right"></i>
								</a>
								<div class="m-menu__submenu">
									<span class="m-menu__arrow"></span>
									<ul class="m-menu__subnav">
										<li class="m-menu__item <?=($subMenu=='VariantList'?'m-menu__item--active':'')?>" aria-haspopup="true">
											<a  href="<?=site_url('Admin/Variant')?>" class="m-menu__link ">
												<i class="m-menu__link-bullet m-menu__link-bullet--dot">
													<span></span>
												</i>
												<span class="m-menu__link-text">
													Varyant Listele
												</span>
											</a>
										</li>
										<li class="m-menu__item <?=($subMenu=='VariantAdd'?'m-menu__item--active':'')?>" aria-haspopup="true" >
											<a href="<?=site_url('Admin/Variant/add')?>" class="m-menu__link ">
												<i class="m-menu__link-bullet m-menu__link-bullet--dot">
													<span></span>
												</i>
												<span class="m-menu__link-text">
													Varyant Ekle
												</span>
											</a>
										</li>
									</ul>
								</div>
							</li>
							<?}?>
                            <!-- Varyant Menü -->
                            <?if($this->session->userdata('user')->auth == 0){?>
                            <!-- Paket Menü -->
                            <li class="m-menu__item  m-menu__item--submenu  <?=($mainMenu=='Package'?'m-menu__item--open m-menu__item--expanded':'')?>" aria-haspopup="true" id="m_variant" data-menu-submenu-toggle="hover">
								<a  href="#" class="m-menu__link m-menu__toggle">
									<i class="m-menu__link-icon fa fa-th"></i>
									<span class="m-menu__link-text">
										Paket Yönetimi
									</span>
									<i class="m-menu__ver-arrow la la-angle-right"></i>
								</a>
								<div class="m-menu__submenu">
									<span class="m-menu__arrow"></span>
									<ul class="m-menu__subnav">
										<li class="m-menu__item <?=($subMenu=='PackageList'?'m-menu__item--active':'')?>" aria-haspopup="true">
											<a  href="<?=site_url('Admin/Package')?>" class="m-menu__link ">
												<i class="m-menu__link-bullet m-menu__link-bullet--dot">
													<span></span>
												</i>
												<span class="m-menu__link-text">
													Paket Listele
												</span>
											</a>
										</li>
										<li class="m-menu__item <?=($subMenu=='PackageAdd'?'m-menu__item--active':'')?>" aria-haspopup="true" >
											<a href="<?=site_url('Admin/Package/add')?>" class="m-menu__link ">
												<i class="m-menu__link-bullet m-menu__link-bullet--dot">
													<span></span>
												</i>
												<span class="m-menu__link-text">
													Paket Ekle
												</span>
											</a>
										</li>
									</ul>
								</div>
							</li>
                            <!-- Paket Menü -->
                            <?}?>
                            <!-- Kullanıcı Menü -->
                            <?if($this->session->userdata('user')->auth == 0){?>
                            <li class="m-menu__item  m-menu__item--submenu  <?=($mainMenu=='User'?'m-menu__item--open m-menu__item--expanded':'')?>" aria-haspopup="true" id="m_variant" data-menu-submenu-toggle="hover">
								<a  href="#" class="m-menu__link m-menu__toggle">
									<i class="m-menu__link-icon fa fa-users"></i>
									<span class="m-menu__link-text">
										Kullanıcı Yönetimi
									</span>
									<i class="m-menu__ver-arrow la la-angle-right"></i>
								</a>
								<div class="m-menu__submenu">
									<span class="m-menu__arrow"></span>
									<ul class="m-menu__subnav">
										<li class="m-menu__item <?=($subMenu=='UserList'?'m-menu__item--active':'')?>" aria-haspopup="true">
											<a  href="<?=site_url('Admin/User')?>" class="m-menu__link ">
												<i class="m-menu__link-bullet m-menu__link-bullet--dot">
													<span></span>
												</i>
												<span class="m-menu__link-text">
													Kullanıcı Listele
												</span>
											</a>
										</li>
									</ul>
								</div>
							</li>
                            <!-- Kullanıcı Menü -->
                            <?}?>
                            <!-- Kampanya Hediye Çeki Menü -->
                            <?if($this->session->userdata('user')->auth == 0){?>
                            <li class="m-menu__item  m-menu__item--submenu  <?=($mainMenu=='Gift'?'m-menu__item--open m-menu__item--expanded':'')?>" aria-haspopup="true" id="m_variant" data-menu-submenu-toggle="hover">
								<a  href="#" class="m-menu__link m-menu__toggle">
									<i class="m-menu__link-icon fa fa-gift"></i>
									<span class="m-menu__link-text">
										Kampanyalar
									</span>
									<i class="m-menu__ver-arrow la la-angle-right"></i>
								</a>
								<div class="m-menu__submenu">
									<span class="m-menu__arrow"></span>
									<ul class="m-menu__subnav">
										<li class="m-menu__item <?=($subMenu=='GiftList'?'m-menu__item--active':'')?>" aria-haspopup="true">
											<a  href="<?=site_url('Admin/Giftcheck')?>" class="m-menu__link ">
												<i class="m-menu__link-bullet m-menu__link-bullet--dot">
													<span></span>
												</i>
												<span class="m-menu__link-text">
													Kampanya-Hediye Çeki Listesi
												</span>
											</a>
										</li>
										<li class="m-menu__item <?=($subMenu=='GiftAdd'?'m-menu__item--active':'')?>" aria-haspopup="true">
											<a  href="<?=site_url('Admin/Giftcheck/Add')?>" class="m-menu__link ">
												<i class="m-menu__link-bullet m-menu__link-bullet--dot">
													<span></span>
												</i>
												<span class="m-menu__link-text">
													Kampanya-Hediye Çeki Oluştur
												</span>
											</a>
										</li>
									</ul>
								</div>
							</li>
                            <!-- Kampanya Hediye Çeki Menü -->
                            <?}?>
                            <!-- Statik Sayfa Menü -->
                            <?if($this->session->userdata('user')->auth == 0 || $this->session->userdata('user')->auth == 2){?>
                            <li class="m-menu__item  m-menu__item--submenu  <?=($mainMenu=='Statics'?'m-menu__item--open m-menu__item--expanded':'')?>" aria-haspopup="true" id="m_variant" data-menu-submenu-toggle="hover">
								<a  href="#" class="m-menu__link m-menu__toggle">
									<i class="m-menu__link-icon fa fa-gift"></i>
									<span class="m-menu__link-text">
										Sabit Sayfalar
									</span>
									<i class="m-menu__ver-arrow la la-angle-right"></i>
								</a>
								<div class="m-menu__submenu">
									<span class="m-menu__arrow"></span>
									<ul class="m-menu__subnav">
										<li class="m-menu__item <?=($subMenu=='StaticsList'?'m-menu__item--active':'')?>" aria-haspopup="true">
											<a  href="<?=site_url('Admin/Statics')?>" class="m-menu__link ">
												<i class="m-menu__link-bullet m-menu__link-bullet--dot">
													<span></span>
												</i>
												<span class="m-menu__link-text">
													Sayfa Listesi
												</span>
											</a>
										</li>
										<li class="m-menu__item <?=($subMenu=='StaticsAdd'?'m-menu__item--active':'')?>" aria-haspopup="true">
											<a  href="<?=site_url('Admin/Statics/Add')?>" class="m-menu__link ">
												<i class="m-menu__link-bullet m-menu__link-bullet--dot">
													<span></span>
												</i>
												<span class="m-menu__link-text">
													Sayfa Oluştur
												</span>
											</a>
										</li>
									</ul>
								</div>
							</li>
                            <!-- Statik Sayfa Menü -->
                            <?}?>
                            <?if($this->session->userdata('user')->auth == 0){?>
                            <!-- Parabirimi Menü 
                            <li class="m-menu__item  m-menu__item--submenu <?=($subMenu=='CurrencyList'?'m-menu__item--active':'')?> <?=($mainMenu=='Currency'?'m-menu__item--open m-menu__item--expanded':'')?>" aria-haspopup="true" id="m_currency" data-menu-submenu-toggle="hover">
								<a  href="<?=admin_url('Currency/')?>" class="m-menu__link m-menu__toggle">
									<i class="m-menu__link-icon fa fa-money"></i>
									<span class="m-menu__link-text">
										Para Birimi Yönetimi
									</span>
								</a>
							</li>
							<?}?>
                             Parabirimi Menü -->
                            <?if($this->session->userdata('user')->auth == 0 || $this->session->userdata('user')->auth == 2){?>
                            <!-- Tasarım Sohbeti Menü -->
                            <li class="m-menu__item  m-menu__item--submenu <?=($subMenu=='ConversationList'?'m-menu__item--active':'')?> <?=($mainMenu=='Conversation'?'m-menu__item--open m-menu__item--expanded':'')?>" aria-haspopup="true" id="m_conversation" data-menu-submenu-toggle="hover">
								<a  href="<?=admin_url('Conversation/')?>" class="m-menu__link m-menu__toggle">
									<i class="m-menu__link-icon fa fa-comments"></i>
									<span class="m-menu__link-text">
										Tasarım Sohbeti
									</span>
								</a>
							</li>
                            <?}?>
							<?if($this->session->userdata('user')->auth == 0 || $this->session->userdata('user')->auth == 2){?>
                            <!-- Teklif Cevap Menü -->
                            <li class="m-menu__item  m-menu__item--submenu <?=($subMenu=='OfferList'?'m-menu__item--active':'')?> <?=($mainMenu=='Offer'?'m-menu__item--open m-menu__item--expanded':'')?>" aria-haspopup="true" id="m_conversation" data-menu-submenu-toggle="hover">
								<a  href="<?=admin_url('Offer/')?>" class="m-menu__link m-menu__toggle">
									<i class="m-menu__link-icon fa fa-comments"></i>
									<span class="m-menu__link-text">
										Teklif Cevap
									</span>
								</a>
							</li>
                            <!-- Teklif Cevap Menü -->
                            <?}?>
                            <?if($this->session->userdata('user')->auth == 0){?>
                            <!--Slider  Menü -->
                            <li class="m-menu__item  m-menu__item--submenu <?=($subMenu=='SliderList'?'m-menu__item--active':'')?> <?=($mainMenu=='Slider'?'m-menu__item--open m-menu__item--expanded':'')?>" aria-haspopup="true" id="m_slider" data-menu-submenu-toggle="hover">
								<a  href="#" class="m-menu__link m-menu__toggle">
									<i class="m-menu__link-icon fa fa-picture-o"></i>
									<span class="m-menu__link-text">
										Slider
									</span>
									<i class="m-menu__ver-arrow la la-angle-right"></i>
								</a>
								<div class="m-menu__submenu">
									<span class="m-menu__arrow"></span>
									<ul class="m-menu__subnav">
										<li class="m-menu__item <?=($subMenu=='SliderList'?'m-menu__item--active':'')?>" aria-haspopup="true">
											<a  href="<?=site_url('Admin/Slider')?>" class="m-menu__link ">
												<i class="m-menu__link-bullet m-menu__link-bullet--dot">
													<span></span>
												</i>
												<span class="m-menu__link-text">
													Slider
												</span>
											</a>
										</li>
										<li class="m-menu__item <?=($subMenu=='SliderAdd'?'m-menu__item--active':'')?>" aria-haspopup="true">
											<a  href="<?=site_url('Admin/Slider/Add')?>" class="m-menu__link ">
												<i class="m-menu__link-bullet m-menu__link-bullet--dot">
													<span></span>
												</i>
												<span class="m-menu__link-text">
													Slide Ekle
												</span>
											</a>
										</li>
										<li class="m-menu__item <?=($subMenu=='SliderProduct'?'m-menu__item--active':'')?>" aria-haspopup="true">
											<a  href="<?=site_url('Admin/Slider/ProductSlider')?>" class="m-menu__link ">
												<i class="m-menu__link-bullet m-menu__link-bullet--dot">
													<span></span>
												</i>
												<span class="m-menu__link-text">
													Ürün Banner
												</span>
											</a>
										</li>
										<li class="m-menu__item <?=($subMenu=='sliderImage'?'m-menu__item--active':'')?>" aria-haspopup="true">
											<a  href="<?=site_url('Admin/Slider/sliderImage')?>" class="m-menu__link ">
												<i class="m-menu__link-bullet m-menu__link-bullet--dot">
													<span></span>
												</i>
												<span class="m-menu__link-text">
													Slider Yan Resim Ekle
												</span>
											</a>
										</li>
									</ul>
								</div>
							</li>
                            <!-- Slider Menü -->
                            <?}?>
                            <?if($this->session->userdata('user')->auth == 0){?>
                            <!-- Referans Menü -->
                            <li class="m-menu__item  m-menu__item--submenu  <?=($mainMenu=='Referances'?'m-menu__item--open m-menu__item--expanded':'')?>" aria-haspopup="true" id="m_variant" data-menu-submenu-toggle="hover">
								<a  href="#" class="m-menu__link m-menu__toggle">
									<i class="m-menu__link-icon fa 	fa-sitemap"></i>
									<span class="m-menu__link-text">
										Referans Yönetimi
									</span>
									<i class="m-menu__ver-arrow la la-angle-right"></i>
								</a>
								<div class="m-menu__submenu">
									<span class="m-menu__arrow"></span>
									<ul class="m-menu__subnav">
										<li class="m-menu__item <?=($subMenu=='ReferancesList'?'m-menu__item--active':'')?>" aria-haspopup="true">
											<a  href="<?=site_url('Admin/Referances')?>" class="m-menu__link ">
												<i class="m-menu__link-bullet m-menu__link-bullet--dot">
													<span></span>
												</i>
												<span class="m-menu__link-text">
													Referans Listele
												</span>
											</a>
										</li>
										<li class="m-menu__item <?=($subMenu=='ReferancesAdd'?'m-menu__item--active':'')?>" aria-haspopup="true" >
											<a href="<?=site_url('Admin/Referances/add')?>" class="m-menu__link ">
												<i class="m-menu__link-bullet m-menu__link-bullet--dot">
													<span></span>
												</i>
												<span class="m-menu__link-text">
													Referans Ekle
												</span>
											</a>
										</li>
									</ul>
								</div>
							</li>
                            <!-- Referans Menü -->
                            <?}?>
                            <?if($this->session->userdata('user')->auth == 0){?>
                            <!-- İndirim Menü 
                            <li class="m-menu__item  m-menu__item--submenu  <?=($mainMenu=='Discount'?'m-menu__item--open m-menu__item--expanded':'')?>" aria-haspopup="true" id="m_variant" data-menu-submenu-toggle="hover">
								<a  href="#" class="m-menu__link m-menu__toggle">
									<i class="m-menu__link-icon fa 	fa-sitemap"></i>
									<span class="m-menu__link-text">
										İndirim Yönetimi
									</span>
									<i class="m-menu__ver-arrow la la-angle-right"></i>
								</a>
								<div class="m-menu__submenu">
									<span class="m-menu__arrow"></span>
									<ul class="m-menu__subnav">
										<li class="m-menu__item <?=($subMenu=='DiscountList'?'m-menu__item--active':'')?>" aria-haspopup="true">
											<a  href="<?=site_url('Admin/Discount')?>" class="m-menu__link ">
												<i class="m-menu__link-bullet m-menu__link-bullet--dot">
													<span></span>
												</i>
												<span class="m-menu__link-text">
													İndirimli Ürünleri Listele
												</span>
											</a>
										</li>
										<li class="m-menu__item <?=($subMenu=='DiscountAdd'?'m-menu__item--active':'')?>" aria-haspopup="true" >
											<a href="<?=site_url('Admin/Discount/add')?>" class="m-menu__link ">
												<i class="m-menu__link-bullet m-menu__link-bullet--dot">
													<span></span>
												</i>
												<span class="m-menu__link-text">
													İndirimli Ürün Ekle
												</span>
											</a>
										</li>
									</ul>
								</div>
							</li>
                             İndirim Menü -->
                            <?}?>
                            <?if($this->session->userdata('user')->auth == 0){?>
                            <!-- Çok Satanlar Menü 
                            <li class="m-menu__item  m-menu__item--submenu  <?=($mainMenu=='Seller'?'m-menu__item--open m-menu__item--expanded':'')?>" aria-haspopup="true" id="m_variant" data-menu-submenu-toggle="hover">
								<a  href="#" class="m-menu__link m-menu__toggle">
									<i class="m-menu__link-icon fa 	fa-sitemap"></i>
									<span class="m-menu__link-text">
										Çok Satılanlar Yönetimi
									</span>
									<i class="m-menu__ver-arrow la la-angle-right"></i>
								</a>
								<div class="m-menu__submenu">
									<span class="m-menu__arrow"></span>
									<ul class="m-menu__subnav">
										<li class="m-menu__item <?=($subMenu=='SellerList'?'m-menu__item--active':'')?>" aria-haspopup="true">
											<a  href="<?=site_url('Admin/Seller')?>" class="m-menu__link ">
												<i class="m-menu__link-bullet m-menu__link-bullet--dot">
													<span></span>
												</i>
												<span class="m-menu__link-text">
													Çok Satanları Listele
												</span>
											</a>
										</li>
										<li class="m-menu__item <?=($subMenu=='SellerAdd'?'m-menu__item--active':'')?>" aria-haspopup="true" >
											<a href="<?=site_url('Admin/Seller/add')?>" class="m-menu__link ">
												<i class="m-menu__link-bullet m-menu__link-bullet--dot">
													<span></span>
												</i>
												<span class="m-menu__link-text">
													Çok Satanlara Ekleme Yap
												</span>
											</a>
										</li>
									</ul>
								</div>
							</li>
                             Çok Satanlar Menü -->
                            <?}?>
                            <?if($this->session->userdata('user')->auth == 0){?>
                            <!-- Yönetici Kullanıcıları Düzenleme -->
                            <li class="m-menu__item  m-menu__item--submenu  <?=($mainMenu=='AdminEdit'?'m-menu__item--open m-menu__item--expanded':'')?>" aria-haspopup="true" id="m_variant" data-menu-submenu-toggle="hover">
								<a  href="#" class="m-menu__link m-menu__toggle">
									<i class="m-menu__link-icon fa 	fa-user"></i>
									<span class="m-menu__link-text">
										Yönetim Kullanıcıları
									</span>
									<i class="m-menu__ver-arrow la la-angle-right"></i>
								</a>
								<div class="m-menu__submenu">
									<span class="m-menu__arrow"></span>
									<ul class="m-menu__subnav">
										<li class="m-menu__item <?=($subMenu=='AdminUserEdit'?'m-menu__item--active':'')?>" aria-haspopup="true">
											<a  href="<?=site_url('Admin/AdminUserEdit')?>" class="m-menu__link ">
												<i class="m-menu__link-bullet m-menu__link-bullet--dot">
													<span></span>
												</i>
												<span class="m-menu__link-text">
													Yönetim Ekibini Düzenle
												</span>
											</a>
										</li>
										<li class="m-menu__item <?=($subMenu=='newAdminAdd'?'m-menu__item--active':'')?>" aria-haspopup="true">
											<a  href="<?=site_url('Admin/AdminUserEdit/newAdminAdd')?>" class="m-menu__link ">
												<i class="m-menu__link-bullet m-menu__link-bullet--dot">
													<span></span>
												</i>
												<span class="m-menu__link-text">
													Yeni Yönetici Kullanıcı Ekle
												</span>
											</a>
										</li>
									</ul>
								</div>
							</li>
                            <!-- Kampanya Yönetimi -->
                            <?}?>
                            <?if($this->session->userdata('user')->auth == 0){?>
                            <!-- Yönetici Kullanıcıları Düzenleme -->
                            <li class="m-menu__item  m-menu__item--submenu  <?=($mainMenu=='Campaign'?'m-menu__item--open m-menu__item--expanded':'')?>" aria-haspopup="true" id="m_variant" data-menu-submenu-toggle="hover">
								<a  href="#" class="m-menu__link m-menu__toggle">
									<i class="m-menu__link-icon fa 	fa-user"></i>
									<span class="m-menu__link-text">
										Kampanya Yönetimi
									</span>
									<i class="m-menu__ver-arrow la la-angle-right"></i>
								</a>
								<div class="m-menu__submenu">
									<span class="m-menu__arrow"></span>
									<ul class="m-menu__subnav">
										<li class="m-menu__item <?=($subMenu=='campaignList'?'m-menu__item--active':'')?>" aria-haspopup="true">
											<a  href="<?=site_url('Admin/Campaign')?>" class="m-menu__link ">
												<i class="m-menu__link-bullet m-menu__link-bullet--dot">
													<span></span>
												</i>
												<span class="m-menu__link-text">
													Kampanyaları Düzenle
												</span>
											</a>
										</li>
										<li class="m-menu__item <?=($subMenu=='campaignAdd'?'m-menu__item--active':'')?>" aria-haspopup="true">
											<a  href="<?=site_url('Admin/Campaign/campaignAdd')?>" class="m-menu__link ">
												<i class="m-menu__link-bullet m-menu__link-bullet--dot">
													<span></span>
												</i>
												<span class="m-menu__link-text">
													Yeni Kampanya Ekle
												</span>
											</a>
										</li>
									</ul>
								</div>
							</li>
                            <!-- Kampanya Yönetimi-->
                            <?}?>
						</ul>
					</div>
					<!-- END: Aside Menu -->
				</div>
				<!-- END: Left Aside -->
				<div class="m-grid__item m-grid__item--fluid m-wrapper">