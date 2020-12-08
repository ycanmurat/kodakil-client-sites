@extends('layouts.admin.layout')
@section('page-header')
    <div class="breadcrumb-line breadcrumb-line-light header-elements-md-inline">
        <div class="d-flex">
            <div class="breadcrumb">
                <a href="{{route('admin.dash')}}" class="breadcrumb-item"><i class="icon-home2 mr-2"></i> Anasayfa</a>
                <span class="breadcrumb-item active">Çeviriler</span>
            </div>
        </div>
    </div>
@endsection

@section('icerik')
    <div style="clear:both;"></div>
    <!-- Basic responsive configuration -->
    <!-- Content area -->
    <div class="card">
        <div class="card-header header-elements-inline">
            <h5 class="card-title">Çeviriler</h5>
            <div style="float:right;margin:15px 0 5px 0;"><a href="{{route('ceviri.create')}}" class="btn btn-success">Çeviri Ekle</a></div>
        </div>

        <table class="table ">
            <thead>
            <tr>
                <th width="20%">Grup</th>
                <th width="20%">Kelime</th>
                <th width="20%">İngilizce</th>
                <th width="20%">Türkçe</th>
                <th width="5%">Düzenle</th>
                <th width="5%">Sil</th>
            </tr>
            </thead>
            <tbody>

            @foreach($ceviriler as $kelime)

                <tr class="gradeX">
                    <td>{{$kelime->group}}</td>

                    <td>{{$kelime->key}}</td>
                    @foreach($kelime->text as $key=>$yazi)
                        <td>{{$yazi}}</td>
                    @endforeach
                    <td class="center"><a href="{{route('ceviri.edit',$kelime->id)}}" class="btn btn-success btn-mini">Düzenle</a></td>

                    {!! Form::model($kelime,['route'=>['ceviri.destroy',$kelime->id],'method'=>'DELETE']) !!}

                    <td class="center">
                        <button type="submit" class="btn btn-danger btn-mini">Sil</button>
                    </td>

                    {!! Form::close() !!}


                </tr>

            @endforeach

            </tbody>
        </table>
        <div class="card-header header-elements-inline">
        </div>

    </div>
    <!-- /basic responsive configuration -->

    <style>
        .mtn-btn {
            background: none;
            border: 1px solid #00000017;
            padding: 10px 14px 0px 14px;
            line-height: unset;
            border-radius: 4px;
            cursor: pointer;
            transition: all ease .3s;
        }

        .mtn-btn.sil:hover {
            background: red;
            color: white;
        }
    </style>
@endsection

@section('css')
    <link rel="stylesheet" href="/admin/css/uniform.css" />
    <link rel="stylesheet" href="/admin/css/select2.css" />
@endsection

@section('js')

    <script src="/yonetici/js/excanvas.min.js"></script>
    <script src="/yonetici/js/jquery.min.js"></script>
    <script src="/yonetici/js/jquery.ui.custom.js"></script>
    <script src="/yonetici/js/bootstrap.min.js"></script>

    <script src="/yonetici/js/jquery.dataTables.min.js"></script>
    <script src="/yonetici/js/matrix.tables.js"></script>

    <!-- Theme JS files -->
    <script src="/yonetici/global_assets/js/plugins/tables/datatables/datatables.min.js"></script>
    <script src="/yonetici/global_assets/js/plugins/tables/datatables/extensions/responsive.min.js"></script>
    <script src="/yonetici/global_assets/js/plugins/forms/selects/select2.min.js"></script>
    <script src="/yonetici/global_assets/js/demo_pages/datatables_responsive.js"></script>

    <script>

        $('.sill').on('click', function (e) {

            var inputData = $('#kategorisil').serialize();
            var dataId = $('#silbtn').attr('data-id');

            $.ajax({

                url: '{{url('proje')}}' + '/' + dataId,
                type: 'POST',
                data: inputData,
                success: function () {
                    swal({
                        title: "Proje Silindi",
                        text: "Lütfen Bekleyin...",
                        type: "success",
                        timer: 2000,
                        showConfirmButton: false
                    });
                    setInterval('window.location.reload()', 2500);
                }

            });
            return false;

        });

    </script>

@endsection