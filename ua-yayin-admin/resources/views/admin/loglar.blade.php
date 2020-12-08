@extends('layouts.admin.layout')
@section('page-header')

    <div class="breadcrumb-line breadcrumb-line-light header-elements-md-inline">
        <div class="d-flex">
            <div class="breadcrumb">
                <a href="/" class="breadcrumb-item"><i class="icon-home2 mr-2"></i> Anasayfa</a>
                <span class="breadcrumb-item active">Sistem Logları</span>
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
                        <h6 class="card-title">İstatistikler</h6>

                    </div>

                    <div class="card-body py-0">
                        <div class="row">

                        </div>
                    </div>

                    <div class="chart position-relative" id="traffic-sources"></div>
                </div>
                <!-- /traffic sources -->

            </div>


        </div>
        <!-- /main charts -->


        <!-- Dashboard content -->
        <div class="row">
            <div class="col-xl-8">

                <!-- Marketing campaigns -->
                <div class="card">
                    <div class="card-header header-elements-sm-inline">
                        <h6 class="card-title">Son Düzenlenenler</h6>
                        <div class="header-elements">

                        </div>
                    </div>

                    <div class="card-body d-sm-flex align-items-sm-center justify-content-sm-between flex-sm-wrap">

                    </div>

                    <div class="table-responsive">
                        <table class="table text-nowrap">
                            <thead>
                            <tr>
                                <th>Bağlı Proje</th>
                                <th>Sözleşme Adı</th>
                                <th>Ekleyen</th>
                                <th>Düzenleyen</th>
                                <th class="text-center" style="width: 20px;"><i class="icon-arrow-down12"></i></th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr class="table-active table-border-double">
                                <td colspan="5">Today</td>
                                <td class="text-right">
                                    <span class="progress-meter" id="today-progress" data-progress="30"></span>
                                </td>
                            </tr>
                            @foreach($loglar as $Sozlesme)
                                <tr>
                                    <td>{{$Sozlesme->log_name}}</td>
                                    <td>{{$Sozlesme->description}}</td>
                                    <td>{{$Sozlesme->subject_id}}</td>
                                    <td>{{$Sozlesme->properties}}</td>
                                    <td>{{\App\User::find($Sozlesme->causer_id)->Name}} {{\App\User::find($Sozlesme->causer_id)->LastName}}</td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
                <!-- /marketing campaigns -->
            </div>
            <div class="col-xl-4">

            </div>
        </div>
        <!-- /dashboard content -->
    </div>
    <!-- /content area -->
@endsection

@section('css')

@endsection

@section('js')

@endsection