@extends('layouts.admin.layout')
@section('page-header')
    <div class="breadcrumb-line breadcrumb-line-light header-elements-md-inline">
        <div class="d-flex">
            <div class="breadcrumb">
                <a href="/" class="breadcrumb-item"><i class="icon-home2 mr-2"></i> Anasayfa</a>
                <span class="breadcrumb-item active">Profilim</span>
            </div>
        </div>
    </div>
@endsection
@section('icerik')
    <!-- Content area -->
    <div class="content">
        <!-- Form inputs -->
        <div class="card">
            <div class="card-header header-elements-inline">
                <h5 class="card-title">Profil Düzenleme : {{$profilim->Name}} {{$profilim->LastName}}</h5>

            </div>
            <div class="card-body">
                <p class="mb-4"> <!--Buraya Bilgilendirme Metni Gelebilir--></p>
                <form method="POST" action="{{ route('profil.guncelle',Auth::user()->id) }}" enctype="multipart/form-data">
                    <fieldset class="mb-3">
                            {{csrf_field()}}
                            <div class="form-group row">
                                <label class="col-form-label col-lg-1">Adınız</label>
                                <div class="col-lg-5">
                                    <div class="input-group">

                                        <input type="text" class="form-control pickadate"
                                               name="Name"
                                               value="{{$profilim->Name}}">
                                    </div>
                                </div>

                                <label class="col-form-label col-lg-1">Soyadınız</label>
                                <div class="col-lg-5">
                                    <div class="input-group">

                                        <input type="text" class="form-control pickadate"
                                               name="LastName"
                                               value="{{$profilim->LastName}}"
                                        >
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-form-label col-lg-1">Email Adresiniz</label>
                                <div class="col-lg-11">
                                    <input type="text" name="email" value="{{$profilim->email}}"
                                           class="form-control">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-form-label col-lg-1">Şifreniz</label>
                                <div class="col-lg-5">
                                    <div class="input-group">

                                        <input id="password" type="password" class="form-control"
                                               name="password">

                                    </div>
                                </div>

                                <label class="col-form-label col-lg-1">Şifreniz Tekrar</label>
                                <div class="col-lg-5">
                                    <div class="input-group">

                                        <input id="password" type="password" class="form-control"
                                               name="password_tekrar">

                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-lg-2">
                                    <div class="input-group">
                                        <img border="0" src="/{{$profilim->avatar}}" width="75" height="75">
                                    </div>
                                </div>

                                <div class="col-lg-10">
                                    <div class="input-group">
                                        <input type="file" class="form-control" name="avatar">
                                    </div>
                                </div>
                            </div>
                            <div class="text-right">
                                <button type="submit" class="btn btn-primary">Kaydet <i
                                            class="icon-paperplane ml-2"></i>
                                </button>
                            </div>
                    </fieldset>
                </form>
            </div>
        </div>
    </div>

@endsection
