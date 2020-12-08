@extends('layouts.admin.layout')
@section('page-header')
    <div class="breadcrumb-line breadcrumb-line-light header-elements-md-inline">
        <div class="d-flex">
            <div class="breadcrumb">
                <a href="/" class="breadcrumb-item"><i class="icon-home2 mr-2"></i> Anasayfa</a>
                <span class="breadcrumb-item active">Slider</span>
            </div>
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
            <h5 class="card-title">Sliderlar</h5>
            <div style="float:right;margin:15px 0 5px 0;"><a href="{{route('slider.create')}}" class="btn btn-success">Slider
                    Ekle</a></div>
        </div>

        <table class="table ">
            <thead>
            <tr>
                <th>Slider</th>
                <th>Sırası</th>
                <th class="text-center">Actions</th>
            </tr>
            </thead>
            <tbody>
            @foreach($egitmenler as $egitmen)
                <tr>
                    <td>{{$egitmen->baslik}}</td>
                    <td>{{$egitmen->order}}</td>
                    <td class="text-center">
                        <div class="list-icons">
                            <a href="{{route('slider.show',$egitmen->id)}}" class="list-icons-item">
                                <i class="icon-eye"></i>
                            </a>
                            <a href="{{route('slider.edit',$egitmen->id)}}" class="list-icons-item">
                                <i class="icon-pencil7"></i>
                            </a>
                            {!! Form::open(['method'=>'DELETE','id'=>'kategorisil','action'=>['SliderController@destroy',$egitmen->id]]) !!}
                            <button type="submit" class="btn btn-icon btn-mini sil"
                                    onclick="alert('Eğitmen Silinecektir.')" id="silbtn"
                                    data-id="{{$egitmen->id}}"><i class="icon-trash"></i>
                            </button>
                            {!! Form::close() !!}
                        </div>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        <div class="card-header header-elements-inline">
            {{$egitmenler->links()}}
        </div>
    </div>
    <!-- /basic responsive configuration -->
@endsection

@section('css')
    <link rel="stylesheet" href="/admin/css/uniform.css"/>
    <link rel="stylesheet" href="/admin/css/select2.css"/>
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

                url: '{{url('slider')}}' + '/' + dataId,
                type: 'POST',
                data: inputData,
                success: function () {
                    swal({
                        title: "Slider Silindi",
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