@extends('layouts.admin.layout')
@section('page-header')
    <div class="breadcrumb-line breadcrumb-line-light header-elements-md-inline">
        <div class="d-flex">
            <div class="breadcrumb">
                <a href="/" class="breadcrumb-item"><i class="icon-home2 mr-2"></i> Anasayfa</a>
                <span class="breadcrumb-item active">Sayfaler</span>
            </div>
        </div>
    </div>
@endsection
@section('araform')
    <div class="card">
        <div class="card-header header-elements-inline">
            <h5 class="card-title">Sayfa Ara</h5>
        </div>
        <div class="card-body">
            <p class="mb-4"> <!--Buraya Bilgilendirme Metni Gelebilir--></p>
            <form action="" method="get" class="form-horizontal"
                  onsubmit="return ajaxekle();" id="ajax-form">
                <fieldset class="mb-3">
                    <div class="row-fluid">
                        <div class="span12">
                            <div class="widget-box">
                                <div class="widget-content nopadding">
                                    {{csrf_field()}}
                                    <div class="form-group row">
                                        <label class="col-form-label col-lg-2">Anahtar Kelime</label>
                                        <div class="col-lg-9">
                                            <input type="text" name="s" value="{{request('s')}}"
                                                   class="form-control">
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
            <h5 class="card-title">Sayfaler</h5>
            <div style="float:right;margin:15px 0 5px 0;"><a href="{{route('sayfa.create')}}"
                                                             class="btn btn-success">Sayfa Ekle</a></div>
        </div>
        <table class="table ">
            <thead>
            <tr>
                <th>Sayfa</th>
                <th>Konum</th>
                <th class="text-center">Actions</th>
            </tr>
            </thead>
            <tbody>
            @foreach($sayfalar as $sayfa)
                <tr>
                    <td>{{$sayfa->baslik}}</td>
                    <td>{{$sayfa->baslik}}</td>
                    <td class="text-center">
                        <div class="list-icons">
                            <a href="{{route('sayfa.show',$sayfa->id)}}" class="list-icons-item">
                                <i class="icon-eye"></i>
                            </a>
                            <a href="{{route('sayfa.edit',$sayfa->id)}}" class="list-icons-item">
                                <i class="icon-pencil7"></i>
                            </a>
                            {!! Form::open(['method'=>'DELETE','id'=>'kategorisil','action'=>['SayfaController@destroy',$sayfa->id]]) !!}
                            <button type="submit" class="btn btn-icon btn-mini sil"
                                    onclick="alert('Sayfa Silinecektir.')" id="silbtn"
                                    data-id="{{$sayfa->id}}"><i class="icon-trash"></i>
                            </button>
                            {!! Form::close() !!}
                        </div>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        <div class="card-header header-elements-inline">
            {{$sayfalar->links()}}
        </div>
    </div>
    <!-- /basic responsive configuration -->
@endsection
@section('css')
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
                url: '{{url('sayfa')}}' + '/' + dataId,
                type: 'POST',
                data: inputData,
                success: function () {
                    swal({
                        title: "Sayfa Silindi",
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