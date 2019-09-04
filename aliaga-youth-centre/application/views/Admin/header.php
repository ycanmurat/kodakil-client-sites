<!DOCTYPE html>
<html lang="en" >
<!-- begin::Head -->
<head>
	<meta charset="utf-8" />
	<title>
		Kodakıl - İçerik Yönetim Sistemi
	</title>
	<meta name="description" content="Latest updates and statistic charts">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!--begin::Web font -->
	<script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.16/webfont.js"></script>
	<script src="https://cdn.ckeditor.com/4.11.4/standard/ckeditor.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="<?=site_url('assets/admin/js/main.js')?>"></script>


	
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
	<link href="<?=site_url('assets/admin/css/vendors.bundle.css')?>" rel="stylesheet" type="text/css" />
	<link href="<?=site_url('assets/admin/css/style.bundle.css')?>" rel="stylesheet" type="text/css" />
	<!--end::Base Styles -->
	<link rel="shortcut icon" href="<?=site_url('assets/admin/images/favicon.ico')?>" />
</head>
<!-- end::Head -->
<!-- end::Body -->
<body class="m-page--fluid m--skin- m-content--skin-light2 m-header--fixed m-header--fixed-mobile m-aside-left--enabled m-aside-left--skin-dark m-aside-left--offcanvas m-footer--push m-aside--offcanvas-default"  >
	<!-- begin:: Page -->
	<div class="m-grid m-grid--hor m-grid--root m-page">
		<!-- BEGIN: Header -->
		<header class="m-grid__item    m-header "  data-minimize-mobile="hide" data-minimize-offset="200" data-minimize-mobile-offset="200" data-minimize="minimize" >
			<div class="m-container m-container--fluid m-container--full-height">
				<div class="m-stack m-stack--ver m-stack--desktop">
					<!-- BEGIN: Brand -->
					<div class="m-stack__item m-brand  m-brand--skin-dark ">
						<div class="m-stack m-stack--ver m-stack--general">
							<div class="m-stack__item m-stack__item--middle m-brand__logo">
								<h3 class="m-login__title" style="color:white;width:100px;">
									<img src="<?=site_url('assets/front/images/logowhite.png')?>" alt="Aliağa Gençlik Merkezi" style="max-width:100px">
								</h3>
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
								<!-- BEGIN: Topbar Toggler -->
								<a id="m_aside_header_topbar_mobile_toggle" href="javascript:;" class="m-brand__icon m--visible-tablet-and-mobile-inline-block">
									<i class="flaticon-more"></i>
								</a>
								<!-- BEGIN: Topbar Toggler -->
							</div>
						</div>
					</div>
					<!-- END: Brand -->
					<div class="m-stack__item m-stack__item--fluid m-header-head" id="m_header_nav">
						<!-- BEGIN: Topbar -->
						<div id="m_header_topbar" class="m-topbar  m-stack m-stack--ver m-stack--general">
							<div class="m-stack__item m-topbar__nav-wrapper">
								<ul class="m-topbar__nav m-nav m-nav--inline">
									<li class="m-nav__item m-topbar__quick-actions m-topbar__quick-actions--img m-dropdown m-dropdown--large m-dropdown--header-bg-fill m-dropdown--arrow m-dropdown--align-right m-dropdown--align-push m-dropdown--mobile-full-width m-dropdown--skin-light"  data-dropdown-toggle="click">
										<a href="#" class="m-nav__link m-dropdown__toggle">
											<span class="m-nav__link-badge m-badge m-badge--dot m-badge--info m--hide"></span>
											<span class="m-nav__link-icon">
												<i class="flaticon-menu-button"></i>
											</span>
										</a>
										<div class="m-dropdown__wrapper">
											<span class="m-dropdown__arrow m-dropdown__arrow--right m-dropdown__arrow--adjust"></span>
											<div class="m-dropdown__inner">
												<div class="m-dropdown__header m--align-center">
													<span class="m-dropdown__header-title">
														<?=(isset($this->session->userdata('admin')->user_name)?$this->session->userdata('admin')->user_name:'Veri Gösterilemiyor')?>
													</span>
													<span class="m-dropdown__header-subtitle">
														Kısayollar
													</span>
												</div>
												<div class="m-dropdown__body m-dropdown__body--paddingless">
													<div class="m-dropdown__content">
														<div class="m-scrollable" data-scrollable="false" data-max-height="380" data-mobile-max-height="200">
															<div class="m-nav-grid m-nav-grid--skin-light">
																<div class="m-nav-grid__row">
																	<a href="<?=site_url()?>" target="_blank" class="m-nav-grid__item">
																		<i class="m-nav-grid__icon flaticon-refresh"></i>
																		<span class="m-nav-grid__text">
																			Siteye Gözat
																		</span>
																	</a>
																	<a href="<?=admin_url('Login/logout')?>" class="m-nav-grid__item">
																		<i class="m-nav-grid__icon flaticon-logout"></i>
																		<span class="m-nav-grid__text">
																			Çıkış Yap
																		</span>
																	</a>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
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
				<ul class="m-menu__nav  m-menu__nav--dropdown-submenu-arrow ">
					<li class="m-menu__item <?=($activeMenu=='Admin'?'m-menu__item--open m-menu__item--expanded m-menu__item--active':'')?>" aria-haspopup="true" >
						<a href="<?=admin_url()?>" class="m-menu__link ">
							<i class="m-menu__link-icon flaticon-line-graph"></i>
							<span class="m-menu__link-title">
								<span class="m-menu__link-wrap">
									<span class="m-menu__link-text">
										Anasayfa
									</span>
								</span>
							</span>
						</a>
					</li>
					<li class="m-menu__section">
						<h4 class="m-menu__section-text">
							MENÜ
						</h4>
						<i class="m-menu__section-icon flaticon-more-v3"></i>
					</li>
					<li class="m-menu__item  m-menu__item--submenu  <?=($activeMenu=='Slider'?'m-menu__item--open m-menu__item--expanded':'')?>" aria-haspopup="true" id="m_variant" data-menu-submenu-toggle="hover">
						<a href="#" class="m-menu__link m-menu__toggle">
							<i class="m-menu__link-icon flaticon-interface-3"></i>
							<span class="m-menu__link-text">
								Ana Slider Yönetimi
							</span>
							<i class="m-menu__ver-arrow la la-angle-right"></i>
						</a>
						<div class="m-menu__submenu">
							<span class="m-menu__arrow"></span>
							<ul class="m-menu__subnav">
								<li class="m-menu__item <?=($activeMenu=='Slider' && $activeSubMenu=='index')?'m-menu__item--active':''?>" aria-haspopup="true">
									<a  href="<?=admin_url('Slider')?>" class="m-menu__link ">
										<i class="m-menu__link-bullet m-menu__link-bullet--dot">
											<span></span>
										</i>
										<span class="m-menu__link-text">
											Sliderları Listele
										</span>
									</a>
								</li>
								<li class="m-menu__item <?=($activeMenu=='Slider' && $activeSubMenu=='add')?'m-menu__item--active':''?>" aria-haspopup="true" >
									<a href="<?=admin_url('Slider/add')?>" class="m-menu__link ">
										<i class="m-menu__link-bullet m-menu__link-bullet--dot">
											<span></span>
										</i>
										<span class="m-menu__link-text">
											Slider Ekle
										</span>
									</a>
								</li>
							</ul>
						</div>
					</li>
					<li class="m-menu__item  m-menu__item--submenu  <?=($activeMenu=='Services_slider'?'m-menu__item--open m-menu__item--expanded':'')?>" aria-haspopup="true" id="m_variant" data-menu-submenu-toggle="hover">
						<a href="#" class="m-menu__link m-menu__toggle">
							<i class="m-menu__link-icon flaticon-interface-3"></i>
							<span class="m-menu__link-text">
								Hizmet Slider Yönetimi
							</span>
							<i class="m-menu__ver-arrow la la-angle-right"></i>
						</a>
						<div class="m-menu__submenu">
							<span class="m-menu__arrow"></span>
							<ul class="m-menu__subnav">
								<li class="m-menu__item <?=($activeMenu=='Services_slider' && $activeSubMenu=='index')?'m-menu__item--active':''?>" aria-haspopup="true">
									<a  href="<?=admin_url('Services_slider')?>" class="m-menu__link ">
										<i class="m-menu__link-bullet m-menu__link-bullet--dot">
											<span></span>
										</i>
										<span class="m-menu__link-text">
											Sliderları Listele
										</span>
									</a>
								</li>
								<li class="m-menu__item <?=($activeMenu=='Services_slider' && $activeSubMenu=='add')?'m-menu__item--active':''?>" aria-haspopup="true" >
									<a href="<?=admin_url('Services_slider/add')?>" class="m-menu__link ">
										<i class="m-menu__link-bullet m-menu__link-bullet--dot">
											<span></span>
										</i>
										<span class="m-menu__link-text">
											Slider Ekle
										</span>
									</a>
								</li>
							</ul>
						</div>
					</li>
					<li class="m-menu__item  m-menu__item--submenu  <?=($activeMenu=='Services'?'m-menu__item--open m-menu__item--expanded':'')?>" aria-haspopup="true" id="m_variant" data-menu-submenu-toggle="hover">
						<a href="#" class="m-menu__link m-menu__toggle">
							<i class="m-menu__link-icon flaticon-interface-3"></i>
							<span class="m-menu__link-text">
								Hizmetler Yönetimi
							</span>
							<i class="m-menu__ver-arrow la la-angle-right"></i>
						</a>
						<div class="m-menu__submenu">
							<span class="m-menu__arrow"></span>
							<ul class="m-menu__subnav">
								<li class="m-menu__item <?=($activeMenu=='Services' && $activeSubMenu=='index')?'m-menu__item--active':''?>" aria-haspopup="true">
									<a  href="<?=admin_url('Services')?>" class="m-menu__link ">
										<i class="m-menu__link-bullet m-menu__link-bullet--dot">
											<span></span>
										</i>
										<span class="m-menu__link-text">
											Hizmetleri Listele
										</span>
									</a>
								</li>
								<li class="m-menu__item <?=($activeMenu=='Services' && $activeSubMenu=='add')?'m-menu__item--active':''?>" aria-haspopup="true" >
									<a href="<?=admin_url('Services/add')?>" class="m-menu__link ">
										<i class="m-menu__link-bullet m-menu__link-bullet--dot">
											<span></span>
										</i>
										<span class="m-menu__link-text">
											Hizmet Ekle
										</span>
									</a>
								</li>
							</ul>
						</div>
					</li>
					<li class="m-menu__item  m-menu__item--submenu  <?=($activeMenu=='Lower_services'?'m-menu__item--open m-menu__item--expanded':'')?>" aria-haspopup="true" id="m_variant" data-menu-submenu-toggle="hover">
						<a href="#" class="m-menu__link m-menu__toggle">
							<i class="m-menu__link-icon flaticon-interface-3"></i>
							<span class="m-menu__link-text">
								Alt Hizmetler Yönetimi
							</span>
							<i class="m-menu__ver-arrow la la-angle-right"></i>
						</a>
						<div class="m-menu__submenu">
							<span class="m-menu__arrow"></span>
							<ul class="m-menu__subnav">
								<li class="m-menu__item <?=($activeMenu=='Lower_services' && $activeSubMenu=='index')?'m-menu__item--active':''?>" aria-haspopup="true">
									<a  href="<?=admin_url('Lower_services')?>" class="m-menu__link ">
										<i class="m-menu__link-bullet m-menu__link-bullet--dot">
											<span></span>
										</i>
										<span class="m-menu__link-text">
											Alt Hizmetleri Listele
										</span>
									</a>
								</li>
								<li class="m-menu__item <?=($activeMenu=='Lower_services' && $activeSubMenu=='add')?'m-menu__item--active':''?>" aria-haspopup="true" >
									<a href="<?=admin_url('Lower_services/add')?>" class="m-menu__link ">
										<i class="m-menu__link-bullet m-menu__link-bullet--dot">
											<span></span>
										</i>
										<span class="m-menu__link-text">
											Alt Hizmet Ekle
										</span>
									</a>
								</li>
							</ul>
						</div>
					</li>
					<li class="m-menu__item  m-menu__item--submenu  <?=($activeMenu=='Team'?'m-menu__item--open m-menu__item--expanded':'')?>" aria-haspopup="true" id="m_variant" data-menu-submenu-toggle="hover">
						<a href="#" class="m-menu__link m-menu__toggle">
							<i class="m-menu__link-icon flaticon-interface-3"></i>
							<span class="m-menu__link-text">
								Eğitmen yönetimi
							</span>
							<i class="m-menu__ver-arrow la la-angle-right"></i>
						</a>
						<div class="m-menu__submenu">
							<span class="m-menu__arrow"></span>
							<ul class="m-menu__subnav">
								<li class="m-menu__item <?=($activeMenu=='Team' && $activeSubMenu=='index')?'m-menu__item--active':''?>" aria-haspopup="true">
									<a  href="<?=admin_url('Team')?>" class="m-menu__link ">
										<i class="m-menu__link-bullet m-menu__link-bullet--dot">
											<span></span>
										</i>
										<span class="m-menu__link-text">
											Eğitmen Listele
										</span>
									</a>
								</li>
								<li class="m-menu__item <?=($activeMenu=='Team' && $activeSubMenu=='add')?'m-menu__item--active':''?>" aria-haspopup="true">
									<a  href="<?=admin_url('Team/add')?>" class="m-menu__link ">
										<i class="m-menu__link-bullet m-menu__link-bullet--dot">
											<span></span>
										</i>
										<span class="m-menu__link-text">
											Eğitmen Ekle
										</span>
									</a>
								</li>
								<li class="m-menu__item <?=($activeMenu=='Team' && $activeSubMenu=='list')?'m-menu__item--active':''?>" aria-haspopup="true">
									<a  href="<?=admin_url('Team/list')?>" class="m-menu__link ">
										<i class="m-menu__link-bullet m-menu__link-bullet--dot">
											<span></span>
										</i>
										<span class="m-menu__link-text">
											Eğitmen Başvurularını Görüntüle
										</span>
									</a>
								</li>
							</ul>
						</div>
					</li>
					<li class="m-menu__item  m-menu__item--submenu  <?=($activeMenu=='Course'?'m-menu__item--open m-menu__item--expanded':'')?>" aria-haspopup="true" id="m_variant" data-menu-submenu-toggle="hover">
						<a href="#" class="m-menu__link m-menu__toggle">
							<i class="m-menu__link-icon flaticon-interface-3"></i>
							<span class="m-menu__link-text">
								Kurs yönetimi
							</span>
							<i class="m-menu__ver-arrow la la-angle-right"></i>
						</a>
						<div class="m-menu__submenu">
							<span class="m-menu__arrow"></span>
							<ul class="m-menu__subnav">
								<li class="m-menu__item <?=($activeMenu=='Course' && $activeSubMenu=='index')?'m-menu__item--active':''?>" aria-haspopup="true">
									<a  href="<?=admin_url('Course')?>" class="m-menu__link ">
										<i class="m-menu__link-bullet m-menu__link-bullet--dot">
											<span></span>
										</i>
										<span class="m-menu__link-text">
											Kurs Listele
										</span>
									</a>
								</li>
								<li class="m-menu__item <?=($activeMenu=='Course' && $activeSubMenu=='add')?'m-menu__item--active':''?>" aria-haspopup="true">
									<a  href="<?=admin_url('Course/add')?>" class="m-menu__link ">
										<i class="m-menu__link-bullet m-menu__link-bullet--dot">
											<span></span>
										</i>
										<span class="m-menu__link-text">
											Kurs Ekle
										</span>
									</a>
								</li>
							</ul>
						</div>
					</li>
					<li class="m-menu__item  m-menu__item--submenu  <?=($activeMenu=='Statik'?'m-menu__item--open m-menu__item--expanded':'')?>" aria-haspopup="true" id="m_variant" data-menu-submenu-toggle="hover">
						<a href="#" class="m-menu__link m-menu__toggle">
							<i class="m-menu__link-icon flaticon-interface-3"></i>
							<span class="m-menu__link-text">
								Statik Yönetimi
							</span>
							<i class="m-menu__ver-arrow la la-angle-right"></i>
						</a>
						<div class="m-menu__submenu">
							<span class="m-menu__arrow"></span>
							<ul class="m-menu__subnav">
								<li class="m-menu__item <?=($activeMenu=='Statik' && $activeSubMenu=='index')?'m-menu__item--active':''?>" aria-haspopup="true">
									<a  href="<?=admin_url('Statik')?>" class="m-menu__link ">
										<i class="m-menu__link-bullet m-menu__link-bullet--dot">
											<span></span>
										</i>
										<span class="m-menu__link-text">
											Statik Listesi
										</span>
									</a>
								</li>
								<li class="m-menu__item <?=($activeMenu=='Statik' && $activeSubMenu=='add')?'m-menu__item--active':''?>" aria-haspopup="true">
									<a  href="<?=admin_url('Statik/add')?>" class="m-menu__link ">
										<i class="m-menu__link-bullet m-menu__link-bullet--dot">
											<span></span>
										</i>
										<span class="m-menu__link-text">
											Statik Ekle
										</span>
									</a>
								</li>
							</ul>
						</div>
					</li>
					<li class="m-menu__item  m-menu__item--submenu  <?=($activeMenu=='User'?'m-menu__item--open m-menu__item--expanded':'')?>" aria-haspopup="true" id="m_variant" data-menu-submenu-toggle="hover">
						<a href="#" class="m-menu__link m-menu__toggle">
							<i class="m-menu__link-icon flaticon-interface-3"></i>
							<span class="m-menu__link-text">
								Kullanıcı Yönetimi
							</span>
							<i class="m-menu__ver-arrow la la-angle-right"></i>
						</a>
						<div class="m-menu__submenu">
							<span class="m-menu__arrow"></span>
							<ul class="m-menu__subnav">
								<li class="m-menu__item <?=($activeMenu=='User' && $activeSubMenu=='index')?'m-menu__item--active':''?>" aria-haspopup="true">
									<a  href="<?=admin_url('User')?>" class="m-menu__link ">
										<i class="m-menu__link-bullet m-menu__link-bullet--dot">
											<span></span>
										</i>
										<span class="m-menu__link-text">
											Kullanıcı Listesi
										</span>
									</a>
								</li>
							</ul>
						</div>
					</li>
					<li class="m-menu__item  m-menu__item--submenu  <?=($activeMenu=='Corporate'?'m-menu__item--open m-menu__item--expanded':'')?>" aria-haspopup="true" id="m_variant" data-menu-submenu-toggle="hover">
						<a href="#" class="m-menu__link m-menu__toggle">
							<i class="m-menu__link-icon flaticon-interface-3"></i>
							<span class="m-menu__link-text">
								Hakkımızda Yönetimi
							</span>
							<i class="m-menu__ver-arrow la la-angle-right"></i>
						</a>
						<div class="m-menu__submenu">
							<span class="m-menu__arrow"></span>
							<ul class="m-menu__subnav">
								<li class="m-menu__item <?=($activeMenu=='Corporate' && $activeSubMenu=='index')?'m-menu__item--active':''?>" aria-haspopup="true">
									<a  href="<?=admin_url('Corporate')?>" class="m-menu__link ">
										<i class="m-menu__link-bullet m-menu__link-bullet--dot">
											<span></span>
										</i>
										<span class="m-menu__link-text">
											Düzenle
										</span>
									</a>
								</li>
							</ul>
						</div>
					</li>
					<li class="m-menu__item  m-menu__item--submenu  <?=($activeMenu=='Contact'?'m-menu__item--open m-menu__item--expanded':'')?>" aria-haspopup="true" id="m_variant" data-menu-submenu-toggle="hover">
						<a href="#" class="m-menu__link m-menu__toggle">
							<i class="m-menu__link-icon flaticon-interface-3"></i>
							<span class="m-menu__link-text">
								İletişim Yönetimi
							</span>
							<i class="m-menu__ver-arrow la la-angle-right"></i>
						</a>
						<div class="m-menu__submenu">
							<span class="m-menu__arrow"></span>
							<ul class="m-menu__subnav">
								<li class="m-menu__item <?=($activeMenu=='Contact' && $activeSubMenu=='index')?'m-menu__item--active':''?>" aria-haspopup="true">
									<a  href="<?=admin_url('Contact')?>" class="m-menu__link ">
										<i class="m-menu__link-bullet m-menu__link-bullet--dot">
											<span></span>
										</i>
										<span class="m-menu__link-text">
											Form Bilgilerini Listele
										</span>
									</a>
								</li>
							</ul>
						</div>
					</li>
					<li class="m-menu__item  m-menu__item--submenu  <?=($activeMenu=='Survey'?'m-menu__item--open m-menu__item--expanded':'')?>" aria-haspopup="true" id="m_variant" data-menu-submenu-toggle="hover">
						<a href="#" class="m-menu__link m-menu__toggle">
							<i class="m-menu__link-icon flaticon-interface-3"></i>
							<span class="m-menu__link-text">
								Anket Yönetimi
							</span>
							<i class="m-menu__ver-arrow la la-angle-right"></i>
						</a>
						<div class="m-menu__submenu">
							<span class="m-menu__arrow"></span>
							<ul class="m-menu__subnav">
								<li class="m-menu__item <?=($activeMenu=='Survey' && $activeSubMenu=='add')?'m-menu__item--active':''?>" aria-haspopup="true">
									<a  href="<?=admin_url('Survey/add')?>" class="m-menu__link ">
										<i class="m-menu__link-bullet m-menu__link-bullet--dot">
											<span></span>
										</i>
										<span class="m-menu__link-text">
											Anket Ekle
										</span>
									</a>
								</li>
								<li class="m-menu__item <?=($activeMenu=='Survey' && $activeSubMenu=='index')?'m-menu__item--active':''?>" aria-haspopup="true">
									<a  href="<?=admin_url('Survey')?>" class="m-menu__link ">
										<i class="m-menu__link-bullet m-menu__link-bullet--dot">
											<span></span>
										</i>
										<span class="m-menu__link-text">
											Anket Listele
										</span>
									</a>
								</li>
							</ul>
						</div>
					</li>
					<br><br>
					
					
					<li class="m-menu__item  m-menu__item--submenu  <?=($activeMenu=='SSS'?'m-menu__item--open m-menu__item--expanded':'')?>" aria-haspopup="true" id="m_variant" data-menu-submenu-toggle="hover">
						<a href="#" class="m-menu__link m-menu__toggle">
							<i class="m-menu__link-icon flaticon-interface-3"></i>
							<span class="m-menu__link-text">
								SSS Yönetimi
							</span>
							<i class="m-menu__ver-arrow la la-angle-right"></i>
						</a>
						<div class="m-menu__submenu">
							<span class="m-menu__arrow"></span>
							<ul class="m-menu__subnav">
								<li class="m-menu__item <?=($activeMenu=='SSS' && $activeSubMenu=='index')?'m-menu__item--active':''?>" aria-haspopup="true">
									<a  href="<?=admin_url('SSS')?>" class="m-menu__link ">
										<i class="m-menu__link-bullet m-menu__link-bullet--dot">
											<span></span>
										</i>
										<span class="m-menu__link-text">
											SSS Listesi
										</span>
									</a>
								</li>
								<li class="m-menu__item <?=($activeMenu=='SSS' && $activeSubMenu=='add')?'m-menu__item--active':''?>" aria-haspopup="true">
									<a  href="<?=admin_url('SSS/add')?>" class="m-menu__link ">
										<i class="m-menu__link-bullet m-menu__link-bullet--dot">
											<span></span>
										</i>
										<span class="m-menu__link-text">
											SSS Ekle
										</span>
									</a>
								</li>
							</ul>
						</div>
					</li>
					<li class="m-menu__item  m-menu__item--submenu  <?=($activeMenu=='Question_category'?'m-menu__item--open m-menu__item--expanded':'')?>" aria-haspopup="true" id="m_variant" data-menu-submenu-toggle="hover">
						<a href="#" class="m-menu__link m-menu__toggle">
							<i class="m-menu__link-icon flaticon-interface-3"></i>
							<span class="m-menu__link-text">
								Soru Kategorisi Yönetimi
							</span>
							<i class="m-menu__ver-arrow la la-angle-right"></i>
						</a>
						<div class="m-menu__submenu">
							<span class="m-menu__arrow"></span>
							<ul class="m-menu__subnav">
								<li class="m-menu__item <?=($activeMenu=='Question_category' && $activeSubMenu=='index')?'m-menu__item--active':''?>" aria-haspopup="true">
									<a  href="<?=admin_url('Question_category')?>" class="m-menu__link ">
										<i class="m-menu__link-bullet m-menu__link-bullet--dot">
											<span></span>
										</i>
										<span class="m-menu__link-text">
											Kategori Listesi
										</span>
									</a>
								</li>
								<li class="m-menu__item <?=($activeMenu=='Question_category' && $activeSubMenu=='add')?'m-menu__item--active':''?>" aria-haspopup="true">
									<a  href="<?=admin_url('Question_category/add')?>" class="m-menu__link ">
										<i class="m-menu__link-bullet m-menu__link-bullet--dot">
											<span></span>
										</i>
										<span class="m-menu__link-text">
											Kategori Ekle
										</span>
									</a>
								</li>
							</ul>
						</div>
					</li>
					<li class="m-menu__item  m-menu__item--submenu  <?=($activeMenu=='Questions'?'m-menu__item--open m-menu__item--expanded':'')?>" aria-haspopup="true" id="m_variant" data-menu-submenu-toggle="hover">
						<a href="#" class="m-menu__link m-menu__toggle">
							<i class="m-menu__link-icon flaticon-interface-3"></i>
							<span class="m-menu__link-text">
								Soru Yönetimi
							</span>
							<i class="m-menu__ver-arrow la la-angle-right"></i>
						</a>
						<div class="m-menu__submenu">
							<span class="m-menu__arrow"></span>
							<ul class="m-menu__subnav">
								<li class="m-menu__item <?=($activeMenu=='Questions' && $activeSubMenu=='index')?'m-menu__item--active':''?>" aria-haspopup="true">
									<a  href="<?=admin_url('Questions')?>" class="m-menu__link ">
										<i class="m-menu__link-bullet m-menu__link-bullet--dot">
											<span></span>
										</i>
										<span class="m-menu__link-text">
											Soruları Listele, Onayla, Sil
										</span>
									</a>
								</li>
							</ul>
						</div>
					</li>
					<li class="m-menu__item  m-menu__item--submenu  <?=($activeMenu=='Blog_category'?'m-menu__item--open m-menu__item--expanded':'')?>" aria-haspopup="true" id="m_variant" data-menu-submenu-toggle="hover">
						<a href="#" class="m-menu__link m-menu__toggle">
							<i class="m-menu__link-icon flaticon-interface-3"></i>
							<span class="m-menu__link-text">
								Blog Kategorisi Yönetimi
							</span>
							<i class="m-menu__ver-arrow la la-angle-right"></i>
						</a>
						<div class="m-menu__submenu">
							<span class="m-menu__arrow"></span>
							<ul class="m-menu__subnav">
								<li class="m-menu__item <?=($activeMenu=='Blog_category' && $activeSubMenu=='index')?'m-menu__item--active':''?>" aria-haspopup="true">
									<a  href="<?=admin_url('Blog_category')?>" class="m-menu__link ">
										<i class="m-menu__link-bullet m-menu__link-bullet--dot">
											<span></span>
										</i>
										<span class="m-menu__link-text">
											Kategori Listesi
										</span>
									</a>
								</li>
								<li class="m-menu__item <?=($activeMenu=='Blog_category' && $activeSubMenu=='add')?'m-menu__item--active':''?>" aria-haspopup="true">
									<a  href="<?=admin_url('Blog_category/add')?>" class="m-menu__link ">
										<i class="m-menu__link-bullet m-menu__link-bullet--dot">
											<span></span>
										</i>
										<span class="m-menu__link-text">
											Kategori Ekle
										</span>
									</a>
								</li>
							</ul>
						</div>
					</li>
					<li class="m-menu__item  m-menu__item--submenu  <?=($activeMenu=='Blog'?'m-menu__item--open m-menu__item--expanded':'')?>" aria-haspopup="true" id="m_variant" data-menu-submenu-toggle="hover">
						<a href="#" class="m-menu__link m-menu__toggle">
							<i class="m-menu__link-icon flaticon-interface-3"></i>
							<span class="m-menu__link-text">
								Blog Yönetimi
							</span>
							<i class="m-menu__ver-arrow la la-angle-right"></i>
						</a>
						<div class="m-menu__submenu">
							<span class="m-menu__arrow"></span>
							<ul class="m-menu__subnav">
								<li class="m-menu__item <?=($activeMenu=='Blog' && $activeSubMenu=='index')?'m-menu__item--active':''?>" aria-haspopup="true">
									<a  href="<?=admin_url('Blog')?>" class="m-menu__link ">
										<i class="m-menu__link-bullet m-menu__link-bullet--dot">
											<span></span>
										</i>
										<span class="m-menu__link-text">
											Blogları Listele, Onayla, Sil
										</span>
									</a>
								</li>
							</ul>
						</div>
					</li>
					<li class="m-menu__item  m-menu__item--submenu  <?=($activeMenu=='Image'?'m-menu__item--open m-menu__item--expanded':'')?>" aria-haspopup="true" id="m_variant" data-menu-submenu-toggle="hover">
						<a href="#" class="m-menu__link m-menu__toggle">
							<i class="m-menu__link-icon flaticon-interface-3"></i>
							<span class="m-menu__link-text">
								Resim Yönetimi
							</span>
							<i class="m-menu__ver-arrow la la-angle-right"></i>
						</a>
						<div class="m-menu__submenu">
							<span class="m-menu__arrow"></span>
							<ul class="m-menu__subnav">
								<li class="m-menu__item <?=($activeMenu=='Image' && $activeSubMenu=='index')?'m-menu__item--active':''?>" aria-haspopup="true">
									<a  href="<?=admin_url('Image')?>" class="m-menu__link ">
										<i class="m-menu__link-bullet m-menu__link-bullet--dot">
											<span></span>
										</i>
										<span class="m-menu__link-text">
											Resimleri Listele, Onayla, Sil
										</span>
									</a>
								</li>
							</ul>
						</div>
					</li>
					<li class="m-menu__item  m-menu__item--submenu  <?=($activeMenu=='Gossip'?'m-menu__item--open m-menu__item--expanded':'')?>" aria-haspopup="true" id="m_variant" data-menu-submenu-toggle="hover">
						<a href="#" class="m-menu__link m-menu__toggle">
							<i class="m-menu__link-icon flaticon-interface-3"></i>
							<span class="m-menu__link-text">
								Dedikodu Yönetimi
							</span>
							<i class="m-menu__ver-arrow la la-angle-right"></i>
						</a>
						<div class="m-menu__submenu">
							<span class="m-menu__arrow"></span>
							<ul class="m-menu__subnav">
								<li class="m-menu__item <?=($activeMenu=='Gossip' && $activeSubMenu=='index')?'m-menu__item--active':''?>" aria-haspopup="true">
									<a  href="<?=admin_url('Gossip')?>" class="m-menu__link ">
										<i class="m-menu__link-bullet m-menu__link-bullet--dot">
											<span></span>
										</i>
										<span class="m-menu__link-text">
											Dedikoduları Listele, Onayla, Sil
										</span>
									</a>
								</li>
							</ul>
						</div>
					</li>
					<li class="m-menu__item  m-menu__item--submenu  <?=($activeMenu=='Videos'?'m-menu__item--open m-menu__item--expanded':'')?>" aria-haspopup="true" id="m_variant" data-menu-submenu-toggle="hover">
						<a href="#" class="m-menu__link m-menu__toggle">
							<i class="m-menu__link-icon flaticon-interface-3"></i>
							<span class="m-menu__link-text">
								Video Yönetimi
							</span>
							<i class="m-menu__ver-arrow la la-angle-right"></i>
						</a>
						<div class="m-menu__submenu">
							<span class="m-menu__arrow"></span>
							<ul class="m-menu__subnav">
								<li class="m-menu__item <?=($activeMenu=='Videos' && $activeSubMenu=='index')?'m-menu__item--active':''?>" aria-haspopup="true">
									<a  href="<?=admin_url('Videos')?>" class="m-menu__link ">
										<i class="m-menu__link-bullet m-menu__link-bullet--dot">
											<span></span>
										</i>
										<span class="m-menu__link-text">
											Videoları Listele, Onayla, Sil
										</span>
									</a>
								</li>
							</ul>
						</div>
					</li>
					<li class="m-menu__item  m-menu__item--submenu  <?=($activeMenu=='Shopping_category'?'m-menu__item--open m-menu__item--expanded':'')?>" aria-haspopup="true" id="m_variant" data-menu-submenu-toggle="hover">
						<a href="#" class="m-menu__link m-menu__toggle">
							<i class="m-menu__link-icon flaticon-interface-3"></i>
							<span class="m-menu__link-text">
								Alışveriş Kategorisi Yönetimi
							</span>
							<i class="m-menu__ver-arrow la la-angle-right"></i>
						</a>
						<div class="m-menu__submenu">
							<span class="m-menu__arrow"></span>
							<ul class="m-menu__subnav">
								<li class="m-menu__item <?=($activeMenu=='Shopping_category' && $activeSubMenu=='index')?'m-menu__item--active':''?>" aria-haspopup="true">
									<a  href="<?=admin_url('Shopping_category')?>" class="m-menu__link ">
										<i class="m-menu__link-bullet m-menu__link-bullet--dot">
											<span></span>
										</i>
										<span class="m-menu__link-text">
											Kategori Listesi
										</span>
									</a>
								</li>
								<li class="m-menu__item <?=($activeMenu=='Shopping_category' && $activeSubMenu=='add')?'m-menu__item--active':''?>" aria-haspopup="true">
									<a  href="<?=admin_url('Shopping_category/add')?>" class="m-menu__link ">
										<i class="m-menu__link-bullet m-menu__link-bullet--dot">
											<span></span>
										</i>
										<span class="m-menu__link-text">
											Kategori Ekle
										</span>
									</a>
								</li>
							</ul>
						</div>
					</li>
					<li class="m-menu__item  m-menu__item--submenu  <?=($activeMenu=='Shopping'?'m-menu__item--open m-menu__item--expanded':'')?>" aria-haspopup="true" id="m_variant" data-menu-submenu-toggle="hover">
						<a href="#" class="m-menu__link m-menu__toggle">
							<i class="m-menu__link-icon flaticon-interface-3"></i>
							<span class="m-menu__link-text">
								Alışveriş Yönetimi
							</span>
							<i class="m-menu__ver-arrow la la-angle-right"></i>
						</a>
						<div class="m-menu__submenu">
							<span class="m-menu__arrow"></span>
							<ul class="m-menu__subnav">
								<li class="m-menu__item <?=($activeMenu=='Shopping' && $activeSubMenu=='index')?'m-menu__item--active':''?>" aria-haspopup="true">
									<a  href="<?=admin_url('Shopping')?>" class="m-menu__link ">
										<i class="m-menu__link-bullet m-menu__link-bullet--dot">
											<span></span>
										</i>
										<span class="m-menu__link-text">
											Ürünleri Listele, Onayla, Sil
										</span>
									</a>
								</li>
							</ul>
						</div>
					</li>
					<br><br><br>
				</ul>
			</div>
			<!-- END: Aside Menu -->
		</div>
		<!-- END: Left Aside -->