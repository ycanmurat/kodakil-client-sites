@extends('layouts.admin.layout')
@section('page-header')

    <div class="breadcrumb-line breadcrumb-line-light header-elements-md-inline">
        <div class="d-flex">
            <div class="breadcrumb">
                <a href="/" class="breadcrumb-item"><i class="icon-home2 mr-2"></i> Anasayfa</a>
                <span class="breadcrumb-item active">Roller</span>
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
            <div style="float:right;margin:15px 0 5px 0;"><a href="{{route('roles.create')}}"
                                                             class="btn btn-success">Rol Ekle</a></div>
        </div>


        <table class="table datatable-responsive">
            <thead>
            <tr>
                <th>Rol</th>
                <th>Görünen Ad</th>
                <th>Açıklama</th>
                <th class="text-center">İşlemler</th>
            </tr>
            </thead>
            <tbody>
            @foreach($roles as $role)
                <tr>
                    <td>{{ $role->display_name }}</td>
                    <td>{{ $role->description }}</td>
                    <td>{{ $role->name }}</td>
                    <td>
                        <div class="btn-group">
                            @permission('rol-duzenle')
                            <a class="btn btn-primary" href="{{ route('roles.edit', ['id' => $role->id]) }}"
                               class="btn btn-info btn-xs"><i class="icon-file-eye" title="Edit"></i> </a>
                            @endpermission

                            @permission('rol-sil')
                            <a class="btn btn-danger" href="{{ route('roles.show', ['id' => $role->id]) }}"
                               class="btn btn-danger btn-xs"><i class="icon-trash" title="Delete"></i> </a>
                            @endpermission
                        </div>
                    </td>
                </tr>
            @endforeach

            </tbody>
        </table>
        <div class="card-header header-elements-inline">
            {{$roles->links()}}
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

                url: '{{url('kategoriler')}}' + '/' + dataId,
                type: 'POST',
                data: inputData,
                success: function (datacik) {
                    swal({
                        title: datacik.notif.title,
                        text: datacik.notif.text,
                        type: datacik.notif.type,
                        timer: datacik.notif.timer,
                        showConfirmButton: datacik.notif.confirmButton
                    });
                    setInterval('window.location.reload()', 2500);
                }

            });
            return false;

        });

    </script>

@endsection


