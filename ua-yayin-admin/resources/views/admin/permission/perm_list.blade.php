@extends('layouts.admin.layout')
@section('page-header')

    <div class="breadcrumb-line breadcrumb-line-light header-elements-md-inline">
        <div class="d-flex">
            <div class="breadcrumb">
                <a href="/" class="breadcrumb-item"><i class="icon-home2 mr-2"></i> Anasayfa</a>
                <span class="breadcrumb-item active">Yetkiler</span>
            </div>

            <a href="#" class="header-elements-toggle text-default d-md-none"><i class="icon-more"></i></a>
        </div>
    </div>

@endsection
@section('icerik')


    <div style="clear:both;"></div>
    <!-- Basic responsive configuration -->
    <div class="card">
        <div class="card-header header-elements-inline">
            <h5 class="card-title">Yetkiler</h5>
            <div style="float:right;margin:15px 0 5px 0;"><a href="{{route('permissions.create')}}"
                                                             class="btn btn-success">Yetki Ekle</a></div>
        </div>


        <table class="table datatable-responsive">
            <thead>
            <tr>
                <th>Yetki</th>
                <th>Görünen Ad</th>
                <th>Açıklama</th>
                <th class="text-center">İşlemler</th>
            </tr>
            </thead>
            <tbody>
            @foreach($permissions as $row)
                <tr>
                    <td>{{ $row->name }}</td>
                    <td>{{ $row->display_name }}</td>
                    <td>{{ $row->description }}</td>
                    <td>
                        <div class="btn-group">
                            @permission('yetki-listele')
                            <a class="btn btn-primary" href="{{ route('permissions.edit', ['id' => $row->id]) }}"
                               class="btn btn-info btn-xs"><i class="icon-file-eye" title="Edit"></i> </a>
                            @endpermission
                            @permission('yetki-duzenle')
                            <a class="btn btn-primary" href="{{ route('permissions.edit', ['id' => $row->id]) }}"
                               class="btn btn-info btn-xs"><i class="icon-file-eye" title="Edit"></i> </a>
                            @endpermission

                            @permission('yetki-sil')
                            <a class="btn btn-danger" href="{{ route('permissions.show', ['id' => $row->id]) }}"
                               class="btn btn-danger btn-xs"><i class="icon-trash" title="Delete"></i> </a>
                            @endpermission
                        </div>
                    </td>
                </tr>
            @endforeach

            </tbody>
        </table>
        <div class="card-header header-elements-inline">
            {{$permissions->links()}}
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

        $('.sil').on('click', function (e) {

            var inputData = $('#kategorisil').serialize();
            var dataId = $('#silbtn').attr('data-id');

            $.ajax({

                url: '{{url('yonetim/kategoriler')}}' + '/' + dataId,
                type: 'POST',
                data: inputData,
                success: function () {
                    swal({
                        title: "Kategori Silindi",
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


