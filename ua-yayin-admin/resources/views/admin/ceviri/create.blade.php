@extends('layouts.admin.layout')
@section('page-header')
    <div class="breadcrumb-line breadcrumb-line-light header-elements-md-inline">
        <div class="d-flex">
            <div class="breadcrumb">
                <a href="{{route('admin.dash')}}" class="breadcrumb-item"><i class="icon-home2 mr-2"></i> Anasayfa</a>
                <a href="{{route('ceviri.index')}}" class="breadcrumb-item">Çeviriler</a>
                <span class="breadcrumb-item active">Çeviri Ekle</span>
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
                <h5 class="card-title">Çeviri Ekle</h5>

            </div>
            <div class="card-body">
                <div class="row-fluid">
                    <div class="span12">
                        <div class="widget-box">
                            <div class="widget-content nopadding">
                                {!! Form::open(['route'=>'ceviri.store','method'=>'POST','class'=>'form-horizontal']) !!}
                                <div class="form-group">
                                    <label class="form-label">Grup (Türkçe Karakter Kullanmıyoruz)</label>
                                    <div class="forms">
                                        <input type="text" class="form-control" name="group" value=" " required/>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Kelime (Türkçe Karakter Kullanmıyoruz)</label>
                                    <div class="forms">
                                        <input type="text" class="form-control" name="key" value=" " required/>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="form-label">Türkçesi</label>
                                    <div class="forms">
                                        <input type="text" class="form-control" name="tr" value=" " required/>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="form-label">İngilizcesi</label>
                                    <div class="forms">
                                        <input type="text" class="form-control" name="en" value=" " required/>
                                    </div>
                                </div>

                                <div class="form-actions">
                                    <button type="submit" class="btn btn-success">Ekle</button>
                                </div>
                                {!! Form::close() !!}
                            </div>
                        </div>

                    </div>

                </div>

                @endsection

                @section('css')

                @endsection

                @section('js')

                    <script src="/admin/tinymce/tinymce.min.js"></script>
                    <script>tinymce.init({selector: 'textarea'});</script>

@endsection