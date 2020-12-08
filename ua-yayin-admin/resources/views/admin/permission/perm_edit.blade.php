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

    <!-- Content area -->
    <div class="content">
        <!-- Form inputs -->
        <div class="card">
            <div class="card-header header-elements-inline">
                <h5 class="card-title">Sözleşme Düzenleme
                    :</h5>

            </div>
            <div class="card-body">
                <p class="mb-4"> <!--Buraya Bilgilendirme Metni Gelebilir--></p>
                <form method="post" action="{{ route('permissions.update', ['id' => $permission->id]) }}" data-parsley-validate class="form-horizontal form-label-left">

                    <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }} row">
                        <label for="name" class="col-sm-2 col-form-label">Name</label>
                        <div class="col-sm-10">
                            <input type="text" value="{{$permission->name}}" id="name" name="name" class="form-control col-md-7 col-xs-12"> @if ($errors->has('name'))
                                <span class="help-block">{{ $errors->first('name') }}</span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group{{ $errors->has('display_name') ? ' has-error' : '' }} row">
                        <label for="display_name" class="col-sm-2 col-form-label">Display Name</label>
                        <div class="col-sm-10">
                            <input type="text" value="{{$permission->display_name}}" id="display_name" name="display_name" class="form-control col-md-7 col-xs-12"> @if ($errors->has('display_name'))
                                <span class="help-block">{{ $errors->first('display_name') }}</span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group{{ $errors->has('description') ? ' has-error' : '' }} row">
                        <label for="description" class="col-sm-2 col-form-label">Description</label>
                        <div class="col-sm-10">
                            <input type="text" value="{{$permission->description}}" id="description" name="description" class="form-control col-md-7 col-xs-12"> @if ($errors->has('description'))
                                <span class="help-block">{{ $errors->first('description') }}</span>
                            @endif
                        </div>
                    </div>

                    <div class="ln_solid"></div>

                    <div class="form-group">
                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                            <input type="hidden" name="_token" value="{{ Session::token() }}">
                            <input name="_method" type="hidden" value="PUT">
                            <button type="submit" class="btn btn-success">Save Permission Changes</button>
                        </div>
                    </div>
                </form>

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
    <script src="/global_assets/js/plugins/editors/ckeditor/ckeditor.js"></script>
    <script src="/global_assets/js/plugins/forms/selects/select2.min.js"></script>

    <script src="/assets/js/app.js"></script>
    <script src="/global_assets/js/demo_pages/editor_ckeditor.js"></script>
    <script>
        function ajaxekle() {
            var form = $("#ajax-form");
            for (var kaydet in CKEDITOR.instances)
                CKEDITOR.instances[kaydet].updateElement();
            var form_data = $("#ajax-form").serialize();

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
                }
            });
            $.ajax({
                type: "PUT",
                url: "{{route('permissions.update',$permission->id)}}",
                data: form_data,
                success: function () {
                    swal({
                        title: "Sözleşme Güncellendi",
                        text: "Lütfen Bekleyin...",
                        type: "success",
                        timer: 2000,
                        showConfirmButton: false
                    });
                }
            });
            return false;
        }
    </script>
    <script src="https://code.jquery.com/jquery.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
@endsection