<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>@yield('title') | Yönetim | {{config('app.name')}}</title>


    <!-- Global stylesheets -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900" rel="stylesheet"
    type="text/css">
    <link href="/yonetici/global_assets/css/icons/icomoon/styles.css" rel="stylesheet" type="text/css">
    <link href="/yonetici/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="/yonetici/assets/css/bootstrap_limitless.min.css" rel="stylesheet" type="text/css">
    <link href="/yonetici/assets/css/layout.min.css" rel="stylesheet" type="text/css">
    <link href="/yonetici/assets/css/components.min.css" rel="stylesheet" type="text/css">
    <link href="/yonetici/assets/css/colors.min.css" rel="stylesheet" type="text/css">
    <!-- /global stylesheets -->
    @yield('css')

    <!-- Core JS files -->

    <script src="/yonetici/global_assets/js/main/jquery.min.js"></script>
    <script src="/yonetici/global_assets/js/main/bootstrap.bundle.min.js"></script>
    <script src="/yonetici/global_assets/js/plugins/loaders/blockui.min.js"></script>

    <!-- /core JS files -->
    <!-- Theme JS files -->
    <script src="/yonetici/global_assets/js/plugins/visualization/d3/d3.min.js"></script>
    <script src="/yonetici/global_assets/js/plugins/visualization/d3/d3_tooltip.js"></script>
    <script src="/yonetici/global_assets/js/plugins/forms/styling/switchery.min.js"></script>
    <script src="/yonetici/global_assets/js/plugins/forms/selects/bootstrap_multiselect.js"></script>
    <script src="/yonetici/global_assets/js/plugins/ui/moment/moment.min.js"></script>
    <script src="/yonetici/global_assets/js/plugins/pickers/daterangepicker.js"></script>
    <script src="https://unpkg.com/sweetalert2@7.18.0/dist/sweetalert2.all.js"></script>

    <script src="/yonetici/global_assets/js/plugins/extensions/jquery_ui/interactions.min.js"></script>
    <script src="/yonetici/global_assets/js/plugins/forms/selects/select2.min.js"></script>
    <script src="/yonetici/global_assets/js/plugins/notifications/pnotify.min.js"></script>

    {{-- CSS assets in head section --}}
    <link href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.5.1/min/dropzone.min.css" rel="stylesheet"/>

    {{-- ... a lot of main HTML code ... --}}

    {{-- JS assets at the bottom --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.js"></script>
    {{-- ...Some more scripts... --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.5.1/min/dropzone.min.js"></script>
    @yield('scripts')

    @yield('beforeappjs')
    <!-- Theme JS files -->
    <script src="/yonetici/assets/js/app.js"></script>

    @yield('afterappjs')
    <script src="/yonetici/global_assets/js/plugins/tables/datatables/datatables.min.js"></script>
    <script src="/yonetici/global_assets/js/plugins/tables/datatables/extensions/responsive.min.js"></script>
    <script src="/yonetici/global_assets/js/demo_pages/datatables_responsive.js"></script>


    @yield('js')
</head>
<body class="navbar-bottom">
    <!-- Main navbar -->
    <div class="navbar navbar-expand-md navbar-dark" style="background: black;">
        <div class="navbar-brand wmin-200">
            <a href="/" class="d-inline-block">
                <span>Uğurhan Akdeniz </span>
            </a>
        </div>
        <div class="d-md-none">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-mobile">
                <i class="icon-tree5"></i>
            </button>
            <button class="navbar-toggler sidebar-mobile-main-toggle" type="button">
                <i class="icon-paragraph-justify3"></i>
            </button>
        </div>
        <div class="collapse navbar-collapse" id="navbar-mobile">
            <ul class="navbar-nav">
                <li class="nav-item">
                    UĞURHAN AKDENİZ PANEL
                </li>
            </ul>
            <ul class="navbar-nav ml-auto">
                <li class="nav-item dropdown dropdown-user">
                    <a href="#" class="navbar-nav-link dropdown-toggle" data-toggle="dropdown">
                        <img src="/{{Auth::user()->avatar}}" class="rounded-circle" alt="">
                        <span>{{Auth::user()->Name}} {{Auth::user()->LastName}} </span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right">
                        <a href="{{route('kullanici.ayarlar')}}" class="dropdown-item"><i class="icon-cog5"></i> Hesap
                        Ayarlarım</a>
                        <a href="{{route('kullanici.cikis')}}" class="dropdown-item"><i class="icon-switch2"></i> Çıkış Yap</a>

                    </div>
                </li>
            </ul>
        </div>
    </div>
    <!-- /main navbar -->
    <!-- Page header -->
    <div class="page-header">
        @yield('page-header')
    </div>
    <!-- /page header -->
    <!-- Page content -->
    <div class="page-content pt-0">
        <!-- Main sidebar -->
        <div class="sidebar sidebar-light sidebar-main sidebar-expand-md align-self-start">
            <!-- Sidebar mobile toggler -->
            <div class="sidebar-mobile-toggler text-center">
                <a href="#" class="sidebar-mobile-main-toggle">
                    <i class="icon-arrow-left8"></i>
                </a>
                Menü
                <a href="#" class="sidebar-mobile-expand">
                    <i class="icon-screen-full"></i>
                    <i class="icon-screen-normal"></i>
                </a>
            </div>
            <!-- /sidebar mobile toggler -->
            <!-- Sidebar content -->
            <div class="sidebar-content">
                <div class="card card-sidebar-mobile">
                    <!-- Header -->
                    <div class="card-header header-elements-inline">
                        <h6 class="card-title">Menü</h6>
                        <div class="header-elements">
                            <div class="list-icons">
                                <a class="list-icons-item" data-action="collapse"></a>
                            </div>
                        </div>
                    </div>
                    <!-- /header -->
                    <!-- User menu -->
                    <div class="sidebar-user">
                        <div class="card-body">
                            <div class="media d-flex align-items-center">
                                <div class="mr-3">
                                    <a href="{{route('kullanici.ayarlar')}}">@if(!empty(Auth::user()->avatar))<img src="/{{Auth::user()->avatar}}" width="38" height="38" class="rounded-circle" alt="">
                                        @else
                                        <img src="/yonetici/global_assets/images/image.png" width="38" height="38" class="rounded-circle" alt="">
                                        @endif
                                    </a>
                                </div>
                                <div class="media-body">
                                    <div class="media-title font-weight-semibold">{{Auth::user()->Name}} {{Auth::user()->LastName}}</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /user menu -->
                    <!-- Main navigation -->
                    <div class="card-body p-0">
                        <ul class="nav nav-sidebar" data-nav-type="accordion">
                            <!-- Main -->
                            <li class="nav-item-header mt-0">
                                <div class="text-uppercase font-size-xs line-height-xs">Yönetim</div>
                                <i class="icon-menu" title="Main"></i>
                            </li>
                            <li class="nav-item">
                                <a href="{{route('admin.dash')}}" class="nav-link">
                                    <i class="icon-home4"></i>
                                    <span>İstatistikler</span>
                                </a>
                            </li>
                            @permission('icerik-goster')
                            <li class="nav-item nav-item-submenu nav-item-open">
                                <a href="#" class="nav-link legitRipple"><i class="icon-archive"></i>
                                    <span>İçerik</span></a>
                                    <ul class="nav nav-group d-block" data-submenu-title="Themes">
                                        <li class="nav-item d-block">
                                            <a href="{{route('projectType.index')}}" class="nav-link">
                                                <span>Proje Tipleri</span>
                                            </a>
                                        </li>
                                        <li class="nav-item d-block">
                                            <a href="{{route('project.index')}}" class="nav-link">
                                                <span>Projeler</span>
                                            </a>
                                        </li>
                                        <li class="nav-item d-block">
                                            <a href="{{route('client.index')}}" class="nav-link">
                                                <span>Müşteriler</span>
                                            </a>
                                        </li>

                                        <li class="nav-item d-block">
                                            <a href="{{route('slider.index')}}" class="nav-link">
                                                <span>Sliderlar</span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                @endpermission

                                <li class="nav-item nav-item-submenu">
                                    <a href="#" class="nav-link legitRipple"><i
                                        class="icon-lock"></i><span>Yönetici İşlemleri</span> </a>
                                        <ul class="nav nav-group-sub">
                                            @permission('kullanici-listele')
                                            <li class="nav-item"><a class="nav-link" href="{{route('users.index')}}">Kullanıcıları Düzenle</a></li>

                                            @endpermission

                                            @permission('rol-listele')
                                            <li><a href="{{route('roles.index')}}" class="nav-link">Roller</a></li>

                                            @endpermission

                                           <!-- <li><a href="{{route('permissions.index')}}" class="nav-link">Yetkiler</a></li>-->


                                            <li><a href="{{route('site.settings')}}" class="nav-link">Site Ayarları</a></li>
                                            <li><a href="{{route('ceviri.index')}}" class="nav-link">Çeviri Ayarları</a></li>
                                        </ul>
                                    </li>
                                    <!-- /main -->
                                </ul>
                            </div>
                            <!-- /main navigation -->
                        </div>
                    </div>
                    <!-- /sidebar content -->
                </div>
                <!-- /main sidebar -->
                <!-- Main content -->
                <div class="content-wrapper">
                    @yield('icerik')
                </div>
                <!-- /main content -->

            </div>
            <!-- /page content -->
            <!-- Footer -->
            <div class="navbar navbar-expand-lg navbar-light fixed-bottom">
                <div class="text-center d-lg-none w-100">
                    <button type="button" class="navbar-toggler dropdown-toggle" data-toggle="collapse"
                    data-target="#navbar-footer">
                    <i class="icon-unfold mr-2"></i>
                    Footer
                </button>
            </div>
            <div class="navbar-collapse collapse" id="navbar-footer">
             <span class="navbar-text">
                2020 - <a href="https://www.hillbilisim.com" target="_blank">Emre | Murat (MakingKnowing)</a>
           </span>

       </div>
   </div>
   <!-- /footer -->

</body>
</html>
