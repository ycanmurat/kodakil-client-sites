@extends('layouts.admin.layout')
@section('page-header')

    <div class="breadcrumb-line breadcrumb-line-light header-elements-md-inline">
        <div class="d-flex">
            <div class="breadcrumb">
                <a href="/" class="breadcrumb-item"><i class="icon-home2 mr-2"></i> Anasayfa</a>
                <span class="breadcrumb-item active">Forbidden</span>
            </div>

            <a href="#" class="header-elements-toggle text-default d-md-none"><i class="icon-more"></i></a>
        </div>


    </div>


@endsection

@section('icerik')

    <!-- Content area -->
    <div class="content">

        <!-- Main charts -->
        <div class="row">
            <div class="col-xl-12">

                <!-- Traffic sources -->
                <div class="card">
                    <div class="card-header header-elements-inline">
                        <h1 class="card-title">Yetkiniz Olmayan Bir İşlem Yapmaya Çalıştınız!!!</h1>

                    </div>
                    <div class="card-body py-0">
                        <div class="row">
                            <div class="col-sm-4">

                                <div class="w-75 mx-auto mb-3" id="new-visitors"></div>
                            </div>

                        </div>
                    </div>

                    <div class="chart position-relative" id="traffic-sources"></div>
                </div>
                <!-- /traffic sources -->

            </div>


        </div>
        <!-- /main charts -->


    </div>
    <!-- /content area -->
@endsection

@section('css')

@endsection

@section('js')

@endsection