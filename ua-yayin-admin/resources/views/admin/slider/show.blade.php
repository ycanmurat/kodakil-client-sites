@extends('layouts.admin.layout')

@section('page-header')

    <div class="breadcrumb-line breadcrumb-line-light header-elements-md-inline">
        <div class="d-flex">
            <div class="breadcrumb">
                <a href="/" class="breadcrumb-item"><i class="icon-home2 mr-2"></i> Anasayfa</a>
                <span class="breadcrumb-item active">Sözleşmeler</span>
            </div>

            <a href="#" class="header-elements-toggle text-default d-md-none"><i class="icon-more"></i></a>
        </div>


        <div class="header-elements d-none">

        </div>
    </div>
    </div>
    <!-- /breadcrumb line -->


    <!-- Page header content -->
    <div class="page-header-content header-elements-md-inline">
        <div class="page-title d-flex">
            <h4><i class="icon-arrow-left52 mr-2"></i> <span
                        class="font-weight-semibold">{{$sozlesme->projesi->isim}}</span> - {{$sozlesme->isim}}
            </h4>
            <a href="#" class="header-elements-toggle text-default d-md-none"><i class="icon-more"></i></a>
        </div>

        <div class="header-elements d-none">

        </div>


        <!-- Profile navigation -->
        <div class="navbar navbar-expand-lg navbar-light bg-light border-top">
            <div class="text-center d-lg-none w-100">
                <button type="button" class="navbar-toggler dropdown-toggle" data-toggle="collapse"
                        data-target="#navbar-second">
                    <i class="icon-menu7 mr-2"></i>
                    Navigasyon
                </button>
            </div>

            <div class="navbar-collapse collapse" id="navbar-second">
                <ul class="nav navbar-nav">
                    <li class="nav-item">@extends('layouts.applogged')

                        @section('page-header')

                            <div class="breadcrumb-line breadcrumb-line-light header-elements-md-inline">
                                <div class="d-flex">
                                    <div class="breadcrumb">
                                        <a href="/" class="breadcrumb-item"><i class="icon-home2 mr-2"></i> Anasayfa</a>
                                        <span class="breadcrumb-item active">Sözleşmeler</span>
                                    </div>

                                    <a href="#" class="header-elements-toggle text-default d-md-none"><i
                                                class="icon-more"></i></a>
                                </div>


                                <div class="header-elements d-none">

                                </div>
                            </div>
            </div>
            <!-- /breadcrumb line -->


            <!-- Page header content -->
            <div class="page-header-content header-elements-md-inline">
                <div class="page-title d-flex">
                    <h4><i class="icon-arrow-left52 mr-2"></i> <span
                                class="font-weight-semibold">{{$sozlesme->projesi->isim}}</span> - {{$sozlesme->isim}}
                    </h4>
                    <a href="#" class="header-elements-toggle text-default d-md-none"><i class="icon-more"></i></a>
                </div>

                <div class="header-elements d-none">

                </div>


                <!-- Profile navigation -->
                <div class="navbar navbar-expand-lg navbar-light bg-light border-top">
                    <div class="text-center d-lg-none w-100">
                        <button type="button" class="navbar-toggler dropdown-toggle" data-toggle="collapse"
                                data-target="#navbar-second">
                            <i class="icon-menu7 mr-2"></i>
                            Navigasyon
                        </button>
                    </div>

                    <div class="navbar-collapse collapse" id="navbar-second">
                        <ul class="nav navbar-nav">
                            <li class="nav-item">
                                <a href="#genel" class="navbar-nav-link active" data-toggle="tab">
                                    <i class="icon-menu7 mr-2"></i>
                                    Genel Bakış
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="#pdfGoster" class="navbar-nav-link" data-toggle="tab">
                                    <i class="icon-calendar3 mr-2"></i>
                                    Taranmış Halini Gör
                                </a>
                            </li>
                            <!--
                            <li class="nav-item">
                                <a href="#settings" class="navbar-nav-link" data-toggle="tab">
                                    <i class="icon-cog3 mr-2"></i>
                                    Proje Detayları
                                </a>
                            </li>
                            -->
                        </ul>

                        <ul class="navbar-nav ml-lg-auto">

                            <li class="nav-item">
                                <a href="#" class="navbar-nav-link">
                                    <i class="icon-collaboration mr-2"></i>
                                    Paylaş
                                </a>
                            </li>

                        </ul>
                    </div>
                </div>
                <!-- /profile navigation -->
            @endsection
            @section('icerik')

                <!-- Inner container -->
                    <div class="d-flex align-items-start flex-column flex-md-row">

                        <!-- Left content -->
                        <div class="tab-content w-100 overflow-auto order-2 order-md-1">

                            <div class="tab-pane fade active show " id="genel">
                                <!--<div class="row">-->
                                <div class="col-xl-12">
                                    <div class="card">
                                        <div class="card-header header-elements-inline">
                                            <h5 class="card-title"> {{$sozlesme->projesi->baslik}}
                                                - {{$sozlesme->baslik}}</h5>

                                        </div>

                                        <div class="card-body">
                                            <div class="my-schedule">
                                                <div class="form-group">
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <label>Başlangıç Tarihi</label>
                                                            <input type="text" value="{{$sozlesme->baslagictarihi}}"
                                                                   disabled="disabled" class="form-control">
                                                        </div>
                                                        <div class="col-md-6">
                                                            <label>Bitiş Tarihi</label>
                                                            <input type="text" value="{{$sozlesme->bitistarihi}}"
                                                                   disabled="disabled" class="form-control">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <label>Şartlar</label>
                                                            <input type="text" value="{{$sozlesme->sartlar}}"
                                                                   disabled="disabled" class="form-control">
                                                        </div>
                                                        <div class="col-md-6">
                                                            <label>bilgi</label>
                                                            <input type="text" value="{{$sozlesme->bilgi}}"
                                                                   disabled="disabled" class="form-control">
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <label>Fiyat</label>
                                                            <input type="text" value="{{$sozlesme->fiyat}}"
                                                                   disabled="disabled" class="form-control">
                                                        </div>
                                                        <div class="col-md-6">
                                                            <label>Vergi No</label>
                                                            <input type="text" value="{{$sozlesme->vergino}}"
                                                                   disabled="disabled" class="form-control">
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <label>Notlar</label>
                                                            <input type="text" value="{{$sozlesme->metin}}"
                                                                   disabled="disabled"
                                                                   class="form-control">
                                                        </div>
                                                        <div class="col-md-6">
                                                            <label>Parola</label>
                                                            <input type="text" value="{{$sozlesme->pass}}"
                                                                   disabled="disabled"
                                                                   class="form-control">
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <label>Dosya Yolu</label>
                                                            <input type="text" value="{{$sozlesme->path}}"
                                                                   disabled="disabled"
                                                                   class="form-control">
                                                        </div>

                                                    </div>
                                                </div>

                                            </div>

                                        </div>
                                    </div>
                                </div>
                            <!--<div class="col-xl-4">
                                <div class="card">
                                    <div class="card-header header-elements-inline">
                                        <h5 class="card-title"> {{$sozlesme->projesi->baslik}}
                                    - Detayları</h5>

                            </div>

                            <div class="card-body">
                                <div class="my-schedule">
{{$sozlesme->projesi->baslik}}
                                    </div>

                                </div>
                            </div>
                        </div>
-->
                                <!--</div>-->
                            </div>

                            <div class="tab-pane fade" id="pdfGoster">

                                <!-- Available hours -->
                                <div class="card">
                                    <div class="card-header header-elements-inline">
                                        <h6 class="card-title">Taranmış Dosya</h6>

                                    </div>

                                    <div class="card-body">
                                        <div class="chart-container">
                                            <iframe src="{{ asset('/laraview/index.html#'.$sozlesme->path) }}"
                                                    class="col-xl-8"
                                                    height="1000px"></iframe>

                                        </div>
                                    </div>
                                </div>
                                <!-- /available hours -->


                            </div>

                            <div class="tab-pane fade" id="settings">

                                <!-- Profile info -->
                                <div class="card">
                                    <div class="card-header header-elements-inline">
                                        <h5 class="card-title">Profile information</h5>

                                    </div>

                                    <div class="card-body">
                                        <form action="#">
                                            <div class="form-group">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <label>Username</label>
                                                        <input type="text" value="Eugene" class="form-control">
                                                    </div>
                                                    <div class="col-md-6">
                                                        <label>Full name</label>
                                                        <input type="text" value="Kopyov" class="form-control">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <label>Address line 1</label>
                                                        <input type="text" value="Ring street 12" class="form-control">
                                                    </div>
                                                    <div class="col-md-6">
                                                        <label>Address line 2</label>
                                                        <input type="text" value="building D, flat #67"
                                                               class="form-control">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <label>City</label>
                                                        <input type="text" value="Munich" class="form-control">
                                                    </div>
                                                    <div class="col-md-4">
                                                        <label>State/Province</label>
                                                        <input type="text" value="Bayern" class="form-control">
                                                    </div>
                                                    <div class="col-md-4">
                                                        <label>ZIP code</label>
                                                        <input type="text" value="1031" class="form-control">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <label>Email</label>
                                                        <input type="text" readonly="readonly" value="eugene@kopyov.com"
                                                               class="form-control">
                                                    </div>
                                                    <div class="col-md-6">
                                                        <label>Your country</label>
                                                        <select class="form-control form-control-select2" data-fouc>
                                                            <option value="germany" selected>Germany</option>
                                                            <option value="france">France</option>
                                                            <option value="spain">Spain</option>
                                                            <option value="netherlands">Netherlands</option>
                                                            <option value="other">...</option>
                                                            <option value="uk">United Kingdom</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <label>Phone #</label>
                                                        <input type="text" value="+99-99-9999-9999"
                                                               class="form-control">
                                                        <span class="form-text text-muted">+99-99-9999-9999</span>
                                                    </div>

                                                    <div class="col-md-6">
                                                        <label>Upload profile image</label>
                                                        <input type="file" class="form-input-styled" data-fouc>
                                                        <span class="form-text text-muted">Accepted formats: gif, png, jpg. Max file size 2Mb</span>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="text-right">
                                                <button type="submit" class="btn btn-primary">Save changes</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <!-- /profile info -->


                            </div>
                        </div>
                        <!-- /left content -->


                    </div>
                    <!-- /inner container -->


                @endsection

                @section('css')
                    <link rel="stylesheet" href="/admin/css/uniform.css"/>
                    <link rel="stylesheet" href="/admin/css/select2.css"/>
                @endsection

                @section('js')
                    <script src="/global_assets/js/demo_pages/user_pages_profile.js"></script>

                    <!-- Theme JS files -->
                    <script src="/global_assets/js/plugins/tables/datatables/datatables.min.js"></script>
                    <script src="/global_assets/js/plugins/tables/datatables/extensions/responsive.min.js"></script>
                    <script src="/global_assets/js/plugins/forms/selects/select2.min.js"></script>
                    <script src="/global_assets/js/demo_pages/datatables_responsive.js"></script>



                @endsection
                <a href="#genel" class="navbar-nav-link active" data-toggle="tab">
                    <i class="icon-menu7 mr-2"></i>
                    Genel Bakış
                </a>
                </li>
                <li class="nav-item">
                    <a href="#pdfGoster" class="navbar-nav-link" data-toggle="tab">
                        <i class="icon-calendar3 mr-2"></i>
                        Taranmış Halini Gör
                    </a>
                </li>
                <!--
                <li class="nav-item">
                    <a href="#settings" class="navbar-nav-link" data-toggle="tab">
                        <i class="icon-cog3 mr-2"></i>
                        Proje Detayları
                    </a>
                </li>
                -->
                </ul>

                <ul class="navbar-nav ml-lg-auto">

                    <li class="nav-item">
                        <a href="#" class="navbar-nav-link">
                            <i class="icon-collaboration mr-2"></i>
                            Paylaş
                        </a>
                    </li>

                </ul>
            </div>
        </div>
        <!-- /profile navigation -->
    @endsection
    @section('icerik')

        <!-- Inner container -->
            <div class="d-flex align-items-start flex-column flex-md-row">

                <!-- Left content -->
                <div class="tab-content w-100 overflow-auto order-2 order-md-1">

                    <div class="tab-pane fade active show " id="genel">
                        <!--<div class="row">-->
                        <div class="col-xl-12">
                            <div class="card">
                                <div class="card-header header-elements-inline">
                                    <h5 class="card-title"> {{$sozlesme->projesi->baslik}}
                                        - {{$sozlesme->baslik}}</h5>

                                </div>

                                <div class="card-body">
                                    <div class="my-schedule">
                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <label>Başlangıç Tarihi</label>
                                                    <input type="text" value="{{$sozlesme->baslagictarihi}}"
                                                           disabled="disabled" class="form-control">
                                                </div>
                                                <div class="col-md-6">
                                                    <label>Bitiş Tarihi</label>
                                                    <input type="text" value="{{$sozlesme->bitistarihi}}"
                                                           disabled="disabled" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <label>Şartlar</label>
                                                    <input type="text" value="{{$sozlesme->sartlar}}"
                                                           disabled="disabled" class="form-control">
                                                </div>
                                                <div class="col-md-6">
                                                    <label>bilgi</label>
                                                    <input type="text" value="{{$sozlesme->bilgi}}"
                                                           disabled="disabled" class="form-control">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <label>Fiyat</label>
                                                    <input type="text" value="{{$sozlesme->fiyat}}"
                                                           disabled="disabled" class="form-control">
                                                </div>
                                                <div class="col-md-6">
                                                    <label>Vergi No</label>
                                                    <input type="text" value="{{$sozlesme->vergino}}"
                                                           disabled="disabled" class="form-control">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <label>Notlar</label>
                                                    <input type="text" value="{{$sozlesme->metin}}"
                                                           disabled="disabled"
                                                           class="form-control">
                                                </div>
                                                <div class="col-md-6">
                                                    <label>Parola</label>
                                                    <input type="text" value="{{$sozlesme->pass}}"
                                                           disabled="disabled"
                                                           class="form-control">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <label>Dosya Yolu</label>
                                                    <input type="text" value="{{$sozlesme->path}}"
                                                           disabled="disabled"
                                                           class="form-control">
                                                </div>

                                            </div>
                                        </div>

                                    </div>

                                </div>
                            </div>
                        </div>
                    <!--<div class="col-xl-4">
                                <div class="card">
                                    <div class="card-header header-elements-inline">
                                        <h5 class="card-title"> {{$sozlesme->projesi->baslik}}
                            - Detayları</h5>

                    </div>

                    <div class="card-body">
                        <div class="my-schedule">
{{$sozlesme->projesi->baslik}}
                            </div>

                        </div>
                    </div>
                </div>
-->
                        <!--</div>-->
                    </div>

                    <div class="tab-pane fade" id="pdfGoster">

                        <!-- Available hours -->
                        <div class="card">
                            <div class="card-header header-elements-inline">
                                <h6 class="card-title">Taranmış Dosya</h6>

                            </div>

                            <div class="card-body">
                                <div class="chart-container">
                                    <iframe src="{{ asset('/laraview/index.html#'.$sozlesme->path) }}" class="col-xl-8"
                                            height="1000px"></iframe>

                                </div>
                            </div>
                        </div>
                        <!-- /available hours -->


                    </div>

                    <div class="tab-pane fade" id="settings">

                        <!-- Profile info -->
                        <div class="card">
                            <div class="card-header header-elements-inline">
                                <h5 class="card-title">Profile information</h5>

                            </div>

                            <div class="card-body">
                                <form action="#">
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Username</label>
                                                <input type="text" value="Eugene" class="form-control">
                                            </div>
                                            <div class="col-md-6">
                                                <label>Full name</label>
                                                <input type="text" value="Kopyov" class="form-control">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Address line 1</label>
                                                <input type="text" value="Ring street 12" class="form-control">
                                            </div>
                                            <div class="col-md-6">
                                                <label>Address line 2</label>
                                                <input type="text" value="building D, flat #67" class="form-control">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <label>City</label>
                                                <input type="text" value="Munich" class="form-control">
                                            </div>
                                            <div class="col-md-4">
                                                <label>State/Province</label>
                                                <input type="text" value="Bayern" class="form-control">
                                            </div>
                                            <div class="col-md-4">
                                                <label>ZIP code</label>
                                                <input type="text" value="1031" class="form-control">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Email</label>
                                                <input type="text" readonly="readonly" value="eugene@kopyov.com"
                                                       class="form-control">
                                            </div>
                                            <div class="col-md-6">
                                                <label>Your country</label>
                                                <select class="form-control form-control-select2" data-fouc>
                                                    <option value="germany" selected>Germany</option>
                                                    <option value="france">France</option>
                                                    <option value="spain">Spain</option>
                                                    <option value="netherlands">Netherlands</option>
                                                    <option value="other">...</option>
                                                    <option value="uk">United Kingdom</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Phone #</label>
                                                <input type="text" value="+99-99-9999-9999" class="form-control">
                                                <span class="form-text text-muted">+99-99-9999-9999</span>
                                            </div>

                                            <div class="col-md-6">
                                                <label>Upload profile image</label>
                                                <input type="file" class="form-input-styled" data-fouc>
                                                <span class="form-text text-muted">Accepted formats: gif, png, jpg. Max file size 2Mb</span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="text-right">
                                        <button type="submit" class="btn btn-primary">Save changes</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <!-- /profile info -->


                    </div>
                </div>
                <!-- /left content -->


            </div>
            <!-- /inner container -->


        @endsection

        @section('css')
            <link rel="stylesheet" href="/admin/css/uniform.css"/>
            <link rel="stylesheet" href="/admin/css/select2.css"/>
        @endsection

        @section('js')
            <script src="/global_assets/js/demo_pages/user_pages_profile.js"></script>

            <!-- Theme JS files -->
            <script src="/global_assets/js/plugins/tables/datatables/datatables.min.js"></script>
            <script src="/global_assets/js/plugins/tables/datatables/extensions/responsive.min.js"></script>
            <script src="/global_assets/js/plugins/forms/selects/select2.min.js"></script>
            <script src="/global_assets/js/demo_pages/datatables_responsive.js"></script>



@endsection