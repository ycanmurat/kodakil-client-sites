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

@section('icerik')
<div style="clear:both;"></div>
<!-- Basic responsive configuration -->
<!-- Content area -->

<div class="card">

    <div class="card-header header-elements-inline">
        <h5 class="card-title">Proje Tipleri</h5>
        <div style="float:right;margin:15px 0 5px 0;"><a href="{{route('projectType.create')}}"
                class="btn btn-success">Proje Türü Ekle</a></div>

    </div>

    <table class="table ">
        <thead>
            <tr>
                <th>Proje</th>
                 <th class="text-center">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($projeTipleri as $proje)
            <tr>
                <td>{{$proje->baslik}}</td>
                 <td class="text-center">
                    <div class="list-icons">

                        <a href="{{route('projectType.edit',$proje->id)}}" class="list-icons-item mtn-btn">
                            <i class="icon-pencil7"></i>
                            <p>Düzenle</p>
                        </a>
                        {!!
                        Form::open(['method'=>'DELETE','id'=>'kategorisil','action'=>['ProjectTypeController@destroy',$proje->id]])
                        !!}
                        <button type="submit" class="list-icons-item mtn-btn sil mtn-btn"
                            onclick="alert('Proje Tipi Silinecektir.')" id="silbtn" data-id="{{$proje->id}}"><i
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
        {{$projeTipleri->links()}}
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