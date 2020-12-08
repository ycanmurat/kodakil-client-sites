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
    <div class="content">
        <!-- Form inputs -->
        <div class="card">
            <div class="card-header header-elements-inline">
                <h2>{{$title}}</h2>
                <a class="btn btn-sm btn-primary" href="{{route('users.index')}}">Geri</a>

            </div>
            <div class="card-body">
                <p class="mb-4"> <!--Buraya Bilgilendirme Metni Gelebilir--></p>


                <form method="post" action="{{ route('users.store') }}" onsubmit="return ajaxekle();" id="ajax-form"
                      data-parsley-validate
                      class="form-horizontal form-label-left">
                    {{csrf_field()}}

                    <div class="form-group{{ $errors->has('Name') ? ' has-error' : '' }} row">
                        <label for="name" class="col-sm-2 col-form-label">İsim</label>
                        <div class="col-sm-10">
                            <input type="text" value="{{ Request::old('Name') ?: '' }}" id="name" name="Name"
                                   class="form-control col-md-7 col-xs-12"> @if ($errors->has('Name'))
                                <span class="help-block">{{ $errors->first('Name') }}</span>
                            @endif
                        </div>
                    </div>
                    <div class="form-group{{ $errors->has('LastName') ? ' has-error' : '' }} row">
                        <label for="name" class="col-sm-2 col-form-label">Soyisim</label>
                        <div class="col-sm-10">
                            <input type="text" value="{{ Request::old('LastName') ?: '' }}" id="name"
                                   name="LastName"
                                   class="form-control col-md-7 col-xs-12"> @if ($errors->has('LastName'))
                                <span class="help-block">{{ $errors->first('LastName') }}</span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group{{ $errors->has('Username') ? ' has-error' : '' }} row">
                        <label for="name" class="col-sm-2 col-form-label">Username</label>
                        <div class="col-sm-10">
                            <input type="text" value="{{ Request::old('Username') ?: '' }}" id="name"
                                   name="Username"
                                   class="form-control col-md-7 col-xs-12"> @if ($errors->has('Username'))
                                <span class="help-block">{{ $errors->first('Username') }}</span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }} row">
                        <label for="email" class="col-sm-2 col-form-label">Email</label>
                        <div class="col-sm-10">
                            <input type="text" value="{{ Request::old('email') ?: '' }}" id="email" name="email"
                                   class="form-control col-md-7 col-xs-12"> @if ($errors->has('email'))
                                <span class="help-block">{{ $errors->first('email') }}</span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group{{ $errors->has('Password') ? ' has-error' : '' }} row">
                        <label for="password" class="col-sm-2 col-form-label">Password</label>
                        <div class="col-sm-10">
                            <input type="password" value="{{ Request::old('Password') ?: '' }}" id="password"
                                   name="Password"
                                   class="form-control col-md-7 col-xs-12"> @if ($errors->has('Password'))
                                <span class="help-block">{{ $errors->first('password') }}</span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group{{ $errors->has('confirm_password') ? ' has-error' : '' }} row">
                        <label for="confirm_password" class="col-sm-2 col-form-label">Confirm Password</label>
                        <div class="col-sm-10">
                            <input type="password" value="{{ Request::old('confirm_password') ?: '' }}"
                                   id="confirm_password" name="confirm_password"
                                   class="form-control col-md-7 col-xs-12"> @if ($errors->has('confirm_password'))
                                <span class="help-block">{{ $errors->first('confirm_password') }}</span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group{{ $errors->has('role_id') ? ' has-error' : '' }} row">
                        <label class="col-sm-2 col-form-label" for="category_id">Yetki
                            <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <select class="form-control" id="role_id" name="role_id">
                                @if(count($roles)) @foreach($roles as $row)
                                    <option value="{{$row->id}}">{{$row->name}}</option>
                                @endforeach @endif
                            </select>
                            @if ($errors->has('role_id'))
                                <span class="help-block">{{ $errors->first('role_id') }}</span>
                            @endif
                        </div>
                    </div>

                    <div class="ln_solid"></div>

                    <div class="form-group">
                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                            <button type="submit" class="btn btn-success">Kullanıcı Oluştur</button>
                        </div>
                    </div>
                </form>
                </main>
            </div>
        </div>
    </div>
    <!-- /form inputs -->
    </div>
    <!-- /content area -->
@endsection

@section('css')

@endsection

@section('js')
    <!-- Theme JS files -->
    <script src="/yonetici/global_assets/js/plugins/editors/ckeditor/ckeditor.js"></script>
    <script src="/yonetici/global_assets/js/plugins/forms/selects/select2.min.js"></script>

    <script src="/yonetici/assets/js/app.js"></script>
    <script>
        function ajaxekle() {
            var form = $("#ajax-form");
            var form_data = $("#ajax-form").serialize();
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
                }
            });
            $.ajax({
                type: "POST",
                url: "{{route('users.store')}}",
                data: form_data,
                success: function () {
                    swal({
                        title: "Kullanıcı Eklendi",
                        text: "Lütfen Bekleyin...",
                        type: "success",
                        timer: 2000,
                        showConfirmButton: false
                    });
                    document.getElementById("ajax-form").reset();

                }
            });
            return false;
        }
    </script>
    <script src="https://code.jquery.com/jquery.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
@endsection




