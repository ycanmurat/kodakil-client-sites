@extends('layouts.admin.layout')
@section('page-header')
<div class="breadcrumb-line breadcrumb-line-light header-elements-md-inline">
    <div class="d-flex">
        <div class="breadcrumb">
            <a href="/" class="breadcrumb-item"><i class="icon-home2 mr-2"></i> Anasayfa</a>
            <span class="breadcrumb-item active">Projeler</span>
        </div>
    </div>
</div>
@endsection
@section('araform')
<div class="card d-none">
    <div class="card-header header-elements-inline">
        <h5 class="card-title">Proje Ara</h5>
    </div>
    <div class="card-body">
        <p class="mb-4">
            <!--Buraya Bilgilendirme Metni Gelebilir-->
        </p>
        <form action="" method="get" class="form-horizontal" onsubmit="return ajaxekle();" id="ajax-form">
            <fieldset class="mb-3">
                <div class="row-fluid">
                    <div class="span12">
                        <div class="widget-box">
                            <div class="widget-content nopadding">
                                {{csrf_field()}}
                                <div class="form-group row">
                                    <label class="col-form-label col-lg-2">Anahtar Kelime</label>
                                    <div class="col-lg-9">
                                        <input type="text" name="s" value="{{request('s')}}" class="form-control">
                                    </div>
                                    <div class="col-lg-1">
                                        <button type="submit" class="btn btn-primary">Ara <i
                                            class="icon-search4 ml-2"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </fieldset>
        </form>
    </div>
</div>
@endsection
@section('icerik')
<div style="clear:both;"></div>
<!-- Basic responsive configuration -->
<!-- Content area -->
<!-- Form inputs -->
@yield('araform')
<div class="card">
    <div class="card-header header-elements-inline">
        <h5 class="card-title">Projeler</h5>
        <div style="float:right;margin:15px 0 5px 0;"><a href="{{route('project.create')}}"
            class="btn btn-success">Proje Ekle</a></div>
        </div>
        <table class="table ">
            <thead>
                <tr>
                    <th>Proje</th>
                    <th>Müşteri</th>
                    <th>Paylaş</th>
                    <th class="text-center">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($projeler as $proje)
                <tr>
                    <td>{{$proje->baslik}}</td>
                    <td>{{$proje->musteri->baslik}}</td>
                    <td>{{url('/projects/'.$proje->id)}}</td>
                    <td class="text-center">
                        <div class="list-icons">
                            <a href="{{route('project.show',$proje->id)}}" class="list-icons-item mtn-btn">
                                <i class="icon-eye"></i>
                                <p>Proje İçeriğini Düzenle</p>
                            </a>
                            <a href="{{route('project.edit',$proje->id)}}" class="list-icons-item mtn-btn">
                                <i class="icon-pencil7"></i>
                                <p>Düzenle</p>
                            </a>
                            {!! Form::open(['method'=>'DELETE','id'=>'kategorisil','action'=>['ProjectController@destroy',$proje->id]]) !!}
                            <button type="submit" class="list-icons-item mtn-btn sil mtn-btn"
                            onclick="alert('Proje Silinecektir.')" id="silbtn" data-id="{{$proje->id}}"><i
                            class="icon-trash"></i>
                            <p>Sil</p>
                        </button>
                        {!! Form::close() !!}
                    </div>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <div class="card-header header-elements-inline">
        {{$projeler->links()}}
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
    ul.pagination.pagination-rounded.align-self-center {
        position: absolute;
        top: 0;
        right: 0;
        left: 0;
        justify-content: center;
    }
</style>
@endsection
@section('css')
<link rel="stylesheet" href="/admin/css/uniform.css" />
<link rel="stylesheet" href="/admin/css/select2.css" />
@endsection
@section('js')
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