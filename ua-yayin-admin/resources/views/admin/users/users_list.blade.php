@extends('layouts.admin.layout')
@section('page-header')

    <div class="breadcrumb-line breadcrumb-line-light header-elements-md-inline">
        <div class="d-flex">
            <div class="breadcrumb">
                <a href="/" class="breadcrumb-item"><i class="icon-home2 mr-2"></i> Anasayfa</a>
                <span class="breadcrumb-item active">Dashboard</span>
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
            <h5 class="card-title">Kullanıcılar</h5>
            <div style="float:right;margin:15px 0 5px 0;"><a href="{{route('users.create')}}"
                                                             class="btn btn-success">Kullanıcı Ekle</a></div>
        </div>


        <table class="table datatable-responsive">
            <thead>
            <tr>
                <th>Kullanıcı Adı</th>
                <th>İsim Soyisim</th>
                <th>Mail</th>
                <th>Yetki</th>
                <th>Durum</th>
                <th class="text-center">İşlemler</th>
            </tr>
            </thead>
            <tbody>
            @foreach($users as $user)
                <tr>
                    <td>{{ $user->Username }}</td>
                    <td>{{ $user->Name }} {{ $user->LastName }}</td>
                    <td>{{ $user->email }}</td>
                    <td>
                        @foreach($user->roles as $r)
                            {{$r->display_name}}
                        @endforeach
                    </td>
                    <td>{{ $user->Status }}</td>

                    <td>
                        <div class="btn-group">
                            <a class="btn btn-primary" href="{{ route('users.edit', ['id' => $user->id]) }}"
                               class="btn btn-info btn-xs"><i class="icon-file-eye
" title="Role"></i> </a>
                            <a class="btn btn-danger" href="{{ route('users.show', ['id' => $user->id]) }}"
                               class="btn btn-danger btn-xs"><i class="icon-trash
" title="Delete"></i> </a>
                        </div>
                    </td>
                </tr>
            @endforeach

            </tbody>
        </table>
        <div class="card-header header-elements-inline">
            {{$users->links()}}
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

@section('icersik')

    <main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">

        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
            <h1 class="h2">Users</h1>
        </div>
        <a class="btn btn-sm btn-primary" href="{{route('users.create')}}">Add New User</a>
        <h2>{{$title}}</h2>
        <div class="table-responsive">
            <table class="table table-striped table-sm">
                <thead>
                <tr>
                    <th>Username</th>
                    <th>Email</th>
                    <th>Role</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
                @foreach($users as $user)
                    <tr>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td>
                            @foreach($user->roles as $r)
                                {{$r->display_name}}
                            @endforeach
                        </td>
                        <td>
                            <div class="btn-group">
                                <a class="btn btn-primary" href="{{ route('users.edit', ['id' => $user->id]) }}"
                                   class="btn btn-info btn-xs"><i class="fa fa-pencil" title="Role"></i> </a>
                                <a class="btn btn-danger" href="{{ route('users.show', ['id' => $user->id]) }}"
                                   class="btn btn-danger btn-xs"><i class="fa fa-trash-o" title="Delete"></i> </a>
                            </div>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
            {{ $users->links() }}
        </div>
    </main>
    </div>
    </div>
@endsection