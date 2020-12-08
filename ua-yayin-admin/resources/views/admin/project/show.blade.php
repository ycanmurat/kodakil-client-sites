@extends('layouts.admin.layout')
@section('page-header')
    <!-- Page header content -->
    <div class="page-header-content header-elements-md-inline">
        <div class="page-title d-flex">
            <h4><i class="icon-arrow-left52 mr-2"></i> <span class="font-weight-semibold">{{$proje->baslik}}</span>
            </h4>
            <a href="#" class="header-elements-toggle text-default d-md-none"><i class="icon-more"></i></a>
        </div>
        <div class="header-elements d-none">
        </div>
        <!-- Profile navigation -->
        <div class="navbar navbar-expand-lg navbar-light bg-light border-top p-0">
            <div class="text-center d-lg-none w-100">
                <button type="button" class="navbar-toggler dropdown-toggle" data-toggle="collapse"
                        data-target="#navbar-second">
                    <i class="icon-menu7 mr-2"></i>
                    Navigasyon
                </button>
            </div>
            <div class="navbar-collapse collapse" id="navbar-second">
                <ul class="nav navbar-nav">
                    <li class="nav-item active">
                        <a href="#genel" class="navbar-nav-link active" data-toggle="tab">
                            <i class="icon-menu7 mr-2"></i>
                            Genel Bakış
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#galeri" class="navbar-nav-link" data-toggle="tab">
                            <i class="icon-images3 mr-2"></i>
                            Video & Resimler
                        </a>
                    </li>
                    <!--
                            <li class="nav-item">
                                <a href="#settings" class="navbar-nav-link" data-toggle="tab">
                                    <i class="icon-cog3 mr-2"></i>
                                    Proje Detayları
                                </a>
                            </li>
                        -->
                </ul>
            </div>
        </div>
        <!-- /profile navigation -->
    </div>
@endsection
@section('icerik')
    <!-- Inner container -->
    <div class="d-flex align-items-start flex-column flex-md-row">
        <!-- Left content -->
        <div class="tab-content w-100 overflow-auto order-2 order-md-1">
            <div class="tab-pane fade active show " id="genel">
                <!--<div class="row">-->
                <div class="card">
                    <div class="card-header header-elements-inline">
                        <h5 class="card-title"> {{$proje->getTranslation('baslik', 'tr')}} /
                            {{$proje->getTranslation('baslik', 'en')}}
                        </h5>
                    </div>
                    <div class="card-body">
                        <div class="my-schedule">
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-12">
                                        @foreach($proje->getMedia('document') as $resim)
                                            <img style="max-width:300px;width:250px;" src="{{$resim->getUrl()}}"
                                                 class="align-c"/>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <!-- /profile info -->
            <div class="tab-pane fade" id="galeri">
                <!-- Profile info -->
                <div class="card">
                    <div class="card-header header-elements-inline ">
                        <h5 class="card-title">{{$proje->baslik}} İçeriği</h5>
                        <button type="button" class="btn btn-light add" data-toggle="modal"
                                data-form-url="{{route('projectGallery.store')}}" data-target="#add-gallery"
                                data-form-method="POST" data-target-form="ajax-form-gallery">İçerik Ekle <i
                                    class="icon-folder-plus3 ml-2"></i></button>

                    </div>

                    <div class="card-body">
                        <hr class="m-0 mb-2">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-md-12 text-center">
                                    @if(count($proje->galeriler))
                                        @foreach($proje->galeriler as $row)
                                            @if($row->videoUrl)
                                                <iframe style="position:relative;top:0;left:0;width:100%;height:350px;" src="{{$row->videoUrl}}"
                                                        frameborder="0" allow="autoplay; fullscreen" allowfullscreen></iframe>
                                            @else
                                </div>
                                <div class="col-md-3">
                                    <img class="mt-3" src="{{$row->filepath}}"
                                         style="width: 100%;height: 200px;">
                                    @endif
                                    <button type="button" data-item-id="{{$row->id}}"
                                            data-form-url="{{route('projectGallery.update',$row->id)}}"
                                            data-api-url="{{route('panel.gallery.json',$row->id)}}"
                                            class="btn btn-light edit mb-5"
                                            data-toggle="modal" data-target="#add-gallery" data-form-method="PUT"
                                            data-target-form="ajax-form-gallery">Düzenle
                                    </button>

                                    {!! Form::open(['method'=>'DELETE','id'=>'kategorisil','action'=>['ProjectGalleryController@destroy',$row->id]])
                                    !!}
                                    <button type="submit" class="btn btn-danger sil"
                                            onclick="alert('İçerik Silinecektir.')" id="silbtn" data-id="{{$row->id}}"><i
                                                class="icon-trash"></i>
                                        <p>Sil</p>
                                    </button>
                                    {!! Form::close() !!}
                                    @endforeach
                                    @endif
                                </div>
                            </div>
                        </div>


                    </div>
                </div>
                <!-- /profile info -->
            </div>
        </div>
        <!-- /left content -->
        <!-- Vertical form -->
        <!-- GALLERY FORM -->
        <div class="modal modal-success fade" id="add-gallery" tabindex="-1" role="dialog"
             aria-labelledby="myModalLabel">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title" id="myModalLabel"><i class="fa fa-plus"></i> Galeri Oluştur</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                    aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form action="" method="PUT" class="form-horizontal"
                          onsubmit="return ajaxekle('ajax-form-gallery');"
                          id="ajax-form-gallery" enctype="multipart/form-data">
                        <div class="modal-body">
                            <div class="form-group">
                                <span class="help-block">Sıra</span>
                                <input type="text" class="form-control" name="order"
                                       placeholder="Sıra Numarası">
                            </div>

                            <div class="form-group" id="resimSpan">
                                <span class="help-block">Resim</span>
                                <a id="lfm-gallery-create" data-input="thumbnail-gallery" data-preview="holder"
                                   class="btn btn-primary">
                                    <i class="fa fa-picture-o"></i> Seç
                                </a>
                                <input id="thumbnail-gallery" class="form-control" type="text" name="filepath">
                            </div>
                            <img id="holder" style="margin-top:15px;max-height:100px;">
                            <div class="form-group" id="videoSpan" style="display: none;">
                                <span class="help-block">Video Url</span>
                                <input class="form-control" type="text" name="videoUrl">
                            </div>
                            <div class="form-group">
                                <span class="help-block">İçerik Tipi</span>
                                <select class="form-control" name="tipi" id="icerikTip">
                                    <option value="">-- Seçiniz --</option>
                                    <option value="1">Video</option>
                                    <option value="0">Resim</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <span class="help-block">Yayın Durumu</span>
                                <select class="form-control" name="onay">
                                    <option value="">-- Seçiniz --</option>
                                    <option value="1">Açık</option>
                                    <option value="0">Kapalı</option>
                                </select>
                            </div>
                            <input type="hidden" name="projectID" value="{{$proje->id}}">
                            @csrf
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Vazgeç</button>
                            <button type="submit" class="btn btn-success btn-load"
                                    data-loading-text="<i class='fa fa-spinner fa-spin'></i> Kaydediliyor...">
                                Kaydet
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- /GALLERY FORM -->
        <!-- /vertical form -->
    </div>
    <!-- /inner container -->
@endsection
@section('css')
    <style>
        section.genel-bakis {
            display: flex;
        }

        section.genel-bakis div.content div.item h5 {
            font-weight: bold;
            color: #ff7043;
            margin-bottom: 5px;
        }

        section.genel-bakis div.content div.item p {
            margin-bottom: 20px;
        }

        section.genel-bakis div.content div.item p > span {
            background-color: #293a50;
            padding: 5px 15px;
            border-radius: 50px;
            color: white;
            margin-right: 4px;
        }

        div.page-header div.navbar ul.nav li.nav-item.active {
            background: black;
        }

        div.page-header div.navbar ul.nav li.nav-item.active a {
            color: white;
        }
    </style>
    <style>
        .bolumler-items {
            margin: 15px 0px;
            border: 1px solid #00000012;
            text-align: center;
            padding: 10px;
            border-radius: 5px;
            box-shadow: 1px 1px #00000021;
        }

        .bolumler-items span.bolum-no {
            background: #ffffff;
            position: relative;
            top: -11px;
            padding: 2px 14px;
            border: 1px solid #cccccc;
            border-top: 0px;
            border-bottom-right-radius: 5px;
            border-bottom-left-radius: 5px;
        }

        .bolumler-items .status {
            position: absolute;
            bottom: 29px;
            left: 24px;
            padding: 2px 7px;
            border-radius: 4px;
            font-size: 13px;
        }

        .status.OK {
            background: green;
            color: white;
        }

        .status.NO {
            background: red;
            color: white;
        }

        section.ozetler-fragmanlar div.item {
            margin: 15px 0px;
            border: 1px solid #00000012;
            text-align: center;
            padding: 10px;
            border-radius: 5px;
            box-shadow: 1px 1px #00000021;
        }

        section.ozetler-fragmanlar div.item span.bolum-no {
            background: #ffffff;
            position: relative;
            top: -11px;
            padding: 2px 14px;
            border: 1px solid #cccccc;
            border-top: 0px;
            border-bottom-right-radius: 5px;
        }

        section.ozetler-fragmanlar div.item span.status {
            position: absolute;
            bottom: 29px;
            left: 24px;
            padding: 2px 7px;
            border-radius: 4px;
            font-size: 13px;
        }

        section.ozetler-fragmanlar div.item h6 {
            text-align: left;
            margin: 7px 5px;
            font-weight: 500;
        }

        section.ozetler-fragmanlar div.item p {
            text-align: left;
            margin-left: 7px;
            margin: 8px 6px;
            overflow: hidden;
            text-overflow: ellipsis;
            -webkit-line-clamp: 4;
            -webkit-box-orient: vertical;
            display: -webkit-box;
            color: gray;
        }

        .item.gallery {
            border: 1px solid #e1e1e1;
            padding: 10px;
            margin-bottom: 20px;
            border-radius: 5px;
            box-shadow: 0px 1px 2px #00000054;
            text-align: center;
        }

        .item.gallery h6 {
            font-weight: bold;
            margin: 5px 0px;
            color: orange;
        }

        .item.gallery p {
            color: #ff7043;
            font-weight: 400;
        }

        .item.haberler {
            border: 1px solid #eeeded;
            padding: 10px;
            border-radius: 5px;
            box-shadow: 0px 2px 2px #0000001f;
            text-align: center;
        }

        .item.haberler img {
            margin: 0 auto;
            display: block;
        }

        .item.haberler h6 {
            font-weight: bold;
            margin: 10px 0px;
            text-align: left;
        }

        .item.haberler p {
            font-size: 13px;
            margin: 15px 0px;
            color: gray;
            overflow: hidden;
            text-overflow: ellipsis;
            -webkit-line-clamp: 5;
            -webkit-box-orient: vertical;
            display: -webkit-box;
            text-align: left;
        }

        button#silbtn {
            position: absolute;
            top: 10px;
            left: 0;
            padding: 3px 12px;
            border-radius: 50%;
            box-shadow: 0px 1px 4px #0000004f;
        }

        button#silbtn p {
            margin: 0;
            font-size: 9px;
            margin-bottom: 2px;
            line-height: 10px;
        }

        button#silbtn i {
            font-size: 12px;
            line-height: 12px;
        }

        div.col-md-12 button#silbtn {
            right: 0;
            margin: auto;
            top: 35px;
        }
    </style>
@endsection
@section('beforeappjs')
    <!-- Theme JS files -->
    <script src="/yonetici/global_assets/js/plugins/editors/ckeditor/ckeditor.js"></script>
    <script src="/yonetici/global_assets/js/plugins/forms/selects/select2.min.js"></script>
    <script src="/yonetici/global_assets/js/plugins/ui/moment/moment.min.js"></script>
    <script src="/yonetici/global_assets/js/plugins/pickers/daterangepicker.js"></script>
    <script src="/yonetici/global_assets/js/plugins/pickers/anytime.min.js"></script>
    <script src="/yonetici/global_assets/js/plugins/pickers/pickadate/picker.js"></script>
    <script src="/yonetici/global_assets/js/plugins/pickers/pickadate/picker.date.js"></script>
    <script src="/yonetici/global_assets/js/plugins/pickers/pickadate/picker.time.js"></script>
    <script src="/yonetici/global_assets/js/plugins/pickers/pickadate/legacy.js"></script>
    <script src="/yonetici/global_assets/js/plugins/notifications/noty.min.js"></script>
    <script src="/yonetici/global_assets/js/plugins/forms/tags/tagsinput.min.js"></script>
    <script src="/yonetici/global_assets/js/plugins/forms/tags/tokenfield.min.js"></script>
    <script src="/yonetici/global_assets/js/plugins/forms/inputs/typeahead/typeahead.bundle.min.js"></script>
    <script src="/yonetici/global_assets/js/plugins/ui/prism.min.js"></script>
    <!-- Theme JS files -->
    <script src="/yonetici/global_assets/js/plugins/extensions/jquery_ui/widgets.min.js"></script>
    <script src="/yonetici/global_assets/js/plugins/extensions/jquery_ui/effects.min.js"></script>
    <script src="/vendor/laravel-filemanager/js/stand-alone-button.js"></script>
@endsection
@section('js')
    <script src="/yonetici/global_assets/js/demo_pages/user_pages_profile.js"></script>
    <!-- Theme JS files -->
    <script src="/yonetici/global_assets/js/plugins/tables/datatables/datatables.min.js"></script>
    <script src="/yonetici/global_assets/js/plugins/tables/datatables/extensions/responsive.min.js"></script>
    <script src="/yonetici/global_assets/js/plugins/forms/selects/select2.min.js"></script>
    <script src="/yonetici/global_assets/js/demo_pages/datatables_responsive.js"></script>
    <script src="/yonetici/global_assets/js/plugins/uploaders/fileinput/plugins/purify.min.js"></script>
    <script src="/yonetici/global_assets/js/plugins/uploaders/fileinput/plugins/sortable.min.js"></script>
    <script src="/yonetici/global_assets/js/plugins/uploaders/fileinput/fileinput.min.js"></script>
@endsection
@section('afterappjs')
    <script>
        Dropzone.autoDiscover = false;
        var route_prefix = "/laravel-filemanager";
        // CKEDITOR
        // ------------------------------
        var CKEditor = function () {
            //
            // Setup module components
            //
            // Noty.js examples
            var _componentNoty = function () {
                if (typeof Noty == 'undefined') {
                    console.warn('Warning - noty.min.js is not loaded.');
                    return;
                }
                // Override Noty defaults
                Noty.overrideDefaults({
                    theme: 'limitless',
                    layout: 'topRight',
                    type: 'alert',
                    timeout: 2500
                });
                // Styled
                $('#noty_styled').on('click', function () {
                    new Noty({
                        theme: ' alert alert-danger alert-styled-left p-0',
                        text: 'Change a few things up and try submitting again.',
                        type: 'error',
                        progressBar: false,
                        closeWith: ['button']
                    }).show();
                });
                // Styled with white background
                $('#noty_styled_white').on('click', function () {
                    new Noty({
                        theme: ' alert alert-success alert-styled-left p-0 bg-white',
                        text: 'You successfully read this important alert message.',
                        type: 'success',
                        progressBar: false,
                        closeWith: ['button']
                    }).show();
                });
                // Solid styled
                $('#noty_solid_styled').on('click', function () {
                    new Noty({
                        theme: ' alert bg-info text-white alert-styled-left p-0',
                        text: 'This alert needs your attention, but it\'s not super important.',
                        type: 'info',
                        progressBar: false,
                        closeWith: ['button']
                    }).show();
                });
            };
            // Noty.js examples
            var _componentEmre = function () {
                var route_prefix = "/filemanager";
                $('#lfm-news-create').filemanager('image', {
                    prefix: route_prefix
                });
                $('#lfm-chapter-create').filemanager('image', {
                    prefix: route_prefix
                });
                $('#lfm-character-create').filemanager('image', {
                    prefix: route_prefix
                });
                $('#lfm-trailers-create').filemanager('image', {
                    prefix: route_prefix
                });
                $('#lfm-summary-create').filemanager('image', {
                    prefix: route_prefix
                });
                $('#lfm-gallery-create').filemanager('image', {
                    prefix: route_prefix
                });
                $('.edit').click(function () {
                    var ID = $(this).data("item-id");
                    var fID = $(this).data("target");
                    var ApiUrl = $(this).data("api-url");
                    var formID = $(this).data("target-form");
                    var formUrl = $(this).data("form-url");
                    var fMethod = $(this).data("form-method");
                    $('#' + formID).attr('action', formUrl);
                    $('#' + formID).attr('method', fMethod);
                    $.getJSON(ApiUrl, function (json) {
                        $.each(json, function (key, value) {
                            if (key == 'media') {
                                $("div#galler-dropzone").dropzone({
                                    url: '{{ route('project.storeMedia') }}',
                                    maxFilesize: 10, // MB
                                    addRemoveLinks: true,
                                    headers: {
                                        'X-CSRF-TOKEN': "{{ csrf_token() }}"
                                    },
                                    success: function (file, response) {
                                        $('form').append('<input type="hidden" name="gallery[]" value="' + response.name + '">')
                                        uploadedDocumentMap[file.name] = response.name
                                    },
                                    removedfile: function (file) {
                                        file.previewElement.remove()
                                        var name = ''
                                        if (typeof file.file_name !== 'undefined') {
                                            name = file.file_name
                                        } else {
                                            name = uploadedDocumentMap[file.name]
                                        }
                                        $('form').find('input[name="gallery[]"][value="' + name + '"]').remove()
                                    },
                                    init: function () {
                                        var files = value;
                                        for (var i in files) {
                                            var file = files[i]
                                            this.options.addedfile.call(this, file)
                                            this.options.thumbnail.call(this, file, "/uploads/" + file.id + '/' + file.file_name);
                                            file.previewElement.classList.add('dz-complete')
                                            $('form').append('<input type="hidden" name="gallery[]" value="' + file.file_name + '">')
                                        }
                                    }
                                });
                            } else {
                                if (!jQuery.isPlainObject(value)) {
                                    $(fID).find('input[name=' + key + ']').val(value);
                                    $(fID).find('select[name=' + key + ']').val(value);
                                } else {
                                    $(fID).find('input[name=' + key + ']').val(value.tr);
                                    $(fID).find('input[name=' + key + '_en]').val(value.en);
                                    $(fID).find('input[name=' + key + '_ar]').val(value.ar);
                                    $(fID).find('textarea[name=' + key + ']').text(value.tr);
                                    $(fID).find('textarea[name=' + key + '_en]').text(value.en);
                                    $(fID).find('textarea[name=' + key + '_ar]').text(value.ar);
                                    if (CKEDITOR.instances[key] != null) {
                                        CKEDITOR.instances[key].setData(value.tr);
                                        CKEDITOR.instances[key + '_en'].setData(value.en);
                                        CKEDITOR.instances[key + '_ar'].setData(value.ar);
                                    }
                                }
                            }
                        });
                    });
                });

                $('.sill').on('click', function (e) {
                    var apiurl = $(this).data('apiurl');
                    $.ajaxSetup({
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
                        }
                    });
                    $.ajax({
                        url: apiurl,
                        type: 'DELETE',
                        success: function () {
                            swal({
                                title: "İçerik Siliniyor",
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

                $('.add').click(function () {
                    var fID = $(this).data("target-form");
                    var ApiUrl = $(this).data("form-url");
                    var fMethod = $(this).data("form-method");
                    $('#' + fID).attr('action', ApiUrl);
                    $('#' + fID).attr('method', fMethod);
                    $('#' + fID)[0].reset();
                });
                $("#icerikTip").on("change", function () {
                    var label = $(this).find('option:selected').text();
                    if (label === 'Video') {
                        $("#resimSpan").css("display", 'none');
                        $("#videoSpan").css("display", 'block');
                    } else {
                        $("#videoSpan").css("display", 'none');
                        $("#resimSpan").css("display", 'block');
                    }
                });
                var uploadedDocumentMap = {};
                console.log(Dropzone.options.gallerDropzone);
            };
            // CKEditor
            var _componentCKEditor = function () {
                if (typeof CKEDITOR == 'undefined') {
                    console.warn('Uyarı - ckeditor.js yüklenmemiş.');
                    return;
                }
                // Full featured editor
                // ------------------------------
                CKEDITOR.replaceClass = 'ckeditor';
                // Enter key configuration
                // ------------------------------
                //CKEditor.filebrowserImageBrowseUrl='/laravel-filemanager?type=Images';
                //CKEditor.filebrowserImageUploadUrl='/laravel-filemanager/upload?type=Images&_token=';
                //CKEditor.filebrowserBrowseUrl='/laravel-filemanager?type=Files';
                //CKEditor.filebrowserUploadUrl='/laravel-filemanager/upload?type=Files&_token=';
            };
            // Select2
            var _componentSelect2 = function () {
                if (!$().select2) {
                    console.warn('Warning - select2.min.js is not loaded.');
                    return;
                }
                ;
                // Default initialization
                $('.form-control-select2').select2({
                    minimumResultsForSearch: Infinity
                });
            };
            // Pickadate picker
            var _componentPickadate = function () {
                if (!$().pickadate) {
                    console.warn('Warning - picker.js and/or picker.date.js is not loaded.');
                    return;
                }
                // Basic options
                $('.pickadate').pickadate({
                    monthsFull: ['Ocak', 'Şubat', 'Mart', 'Nisan', 'Mayıs', 'Haziran', 'Temmuz', 'Ağustos', 'Eylül', 'Ekim', 'Kasım', 'Aralık'],
                    weekdaysShort: ['Pz', 'Pzt', 'Sal', 'Çar', 'Per', 'Cum', 'Cmt'],
                    today: 'Bugün',
                    clear: 'Temizle',
                    format: 'dd.mm.yyyy',
                    formatSubmit: 'yyyy/mm/dd'
                });
            };
            // Tokenfield
            var _componentTokenfield = function () {
                if (!$().tokenfield) {
                    console.warn('Warning - tokenfield.min.js is not loaded.');
                    return;
                }
                // Basic initialization
                $('.tokenfield').tokenfield();
                // Create token on blur
                $('.tokenfield-blur').tokenfield({
                    createTokensOnBlur: true
                });
                // Custom delimiter
                $('.tokenfield-delimiter').tokenfield({
                    delimiter: ';'
                });
                //
                // Primary color
                //
                // Add class on init
                $('.tokenfield-primary').on('tokenfield:initialize', function (e) {
                    $(this).parent().find('.token').addClass('bg-primary text-white');
                });
                // Initialize plugin
                $('.tokenfield-primary').tokenfield();
                // Add class when token is created
                $('.tokenfield-primary').on('tokenfield:createdtoken', function (e) {
                    $(e.relatedTarget).addClass('bg-primary text-white');
                });
                //
                // Teal color
                //
                // Add class on init
                $('.tokenfield-teal').on('tokenfield:initialize', function (e) {
                    $(this).parent().find('.token').addClass('bg-teal text-white');
                });
                // Initialize plugin
                $('.tokenfield-teal').tokenfield();
                // Add class when token is created
                $('.tokenfield-teal').on('tokenfield:createdtoken', function (e) {
                    $(e.relatedTarget).addClass('bg-teal text-white');
                });
                //
                // Success color
                //
                // Add class on init
                $('.tokenfield-success').on('tokenfield:initialize', function (e) {
                    $(this).parent().addClass('border-success');
                    $(this).parent().find('.token').addClass('bg-success text-white');
                });
                // Initialize plugin
                $('.tokenfield-success').tokenfield();
                // Add class when token is created
                $('.tokenfield-success').on('tokenfield:createdtoken', function (e) {
                    $(e.relatedTarget).addClass('bg-success text-white');
                });
                //
                // Danger color
                //
                // Add class on init
                $('.tokenfield-danger').on('tokenfield:initialize', function (e) {
                    $(this).parent().addClass('border-danger');
                    $(this).parent().find('.token').addClass('bg-danger text-white');
                });
                // Initialize plugin
                $('.tokenfield-danger').tokenfield();
                // Add class when token is created
                $('.tokenfield-danger').on('tokenfield:createdtoken', function (e) {
                    $(e.relatedTarget).addClass('bg-danger text-white');
                });
                //
                // Typeahead support
                //
                // Use Bloodhound engine
                var engine = new Bloodhound({
                    local: [{
                        value: 'red'
                    },
                        {
                            value: 'blue'
                        },
                        {
                            value: 'green'
                        },
                        {
                            value: 'yellow'
                        },
                        {
                            value: 'violet'
                        },
                        {
                            value: 'brown'
                        },
                        {
                            value: 'purple'
                        },
                        {
                            value: 'black'
                        },
                        {
                            value: 'white'
                        }
                    ],
                    datumTokenizer: function (d) {
                        return Bloodhound.tokenizers.whitespace(d.value);
                    },
                    queryTokenizer: Bloodhound.tokenizers.whitespace
                });
                // Initialize engine
                engine.initialize();
                // Initialize tokenfield
                $('.tokenfield-typeahead').tokenfield({
                    typeahead: [null, {
                        displayKey: 'value',
                        source: engine.ttAdapter()
                    }]
                });
                //
                // Set tokens method
                //
                $('#set-tokens').on('click', function () {
                    $('#set-tokens-field').tokenfield('setTokens', ['blue', 'red', 'white']);
                });
                //
                // Get tokens method
                //
                $('#get-tokens').on('click', function () {
                    var tokens = $('#get-tokens-field').tokenfield('getTokensList');
                    alert(tokens);
                });
                //
                // Create tokens method
                //
                $('#create-token').on('click', function () {
                    $('#create-token-field').tokenfield('createToken', {
                        value: 'new',
                        label: 'New token'
                    });
                });
                //
                // Disable, enable
                //
                // Initialize plugin
                $('.tokenfield-disable').tokenfield();
                // Disable on click
                $('#disable').on('click', function () {
                    $('.tokenfield-disable').tokenfield('disable');
                });
                // Enabe on click
                $('#enable').on('click', function () {
                    $('.tokenfield-disable').tokenfield('enable');
                });
                //
                // Readonly, writeable
                //
                // Initialize plugin
                $('.tokenfield-readonly').tokenfield();
                // Readonly on click
                $('#readonly').on('click', function () {
                    $('.tokenfield-readonly').tokenfield('readonly');
                });
                // Writeable on click
                $('#writeable').on('click', function () {
                    $('.tokenfield-readonly').tokenfield('writeable');
                });
                //
                // Destroy, create
                //
                // initialize plugin
                $('.tokenfield-destroy').tokenfield();
                // Destroy on click
                $('#destroy').on('click', function () {
                    $('.tokenfield-destroy').removeAttr('data-fouc').tokenfield('destroy');
                });
                // Create on click
                $('#create').on('click', function () {
                    $('.tokenfield-destroy').tokenfield();
                });
            };
            // Bootstrap file upload
            var _componentFileUpload = function () {
                if (!$().fileinput) {
                    console.warn('Warning - fileinput.min.js is not loaded.');
                    return;
                }
                //
                // Define variables
                //
                // Modal template
                var modalTemplate = '<div class="modal-dialog modal-lg" role="document">\n' +
                    '  <div class="modal-content">\n' +
                    '    <div class="modal-header align-items-center">\n' +
                    '      <h6 class="modal-title">{heading} <small><span class="kv-zoom-title"></span></small></h6>\n' +
                    '      <div class="kv-zoom-actions btn-group">{toggleheader}{fullscreen}{borderless}{close}</div>\n' +
                    '    </div>\n' +
                    '    <div class="modal-body">\n' +
                    '      <div class="floating-buttons btn-group"></div>\n' +
                    '      <div class="kv-zoom-body file-zoom-content"></div>\n' + '{prev} {next}\n' +
                    '    </div>\n' +
                    '  </div>\n' +
                    '</div>\n';
                // Buttons inside zoom modal
                var previewZoomButtonClasses = {
                    toggleheader: 'btn btn-light btn-icon btn-header-toggle btn-sm',
                    fullscreen: 'btn btn-light btn-icon btn-sm',
                    borderless: 'btn btn-light btn-icon btn-sm',
                    close: 'btn btn-light btn-icon btn-sm'
                };
                // Icons inside zoom modal classes
                var previewZoomButtonIcons = {
                    prev: '<i class="icon-arrow-left32"></i>',
                    next: '<i class="icon-arrow-right32"></i>',
                    toggleheader: '<i class="icon-menu-open"></i>',
                    fullscreen: '<i class="icon-screen-full"></i>',
                    borderless: '<i class="icon-alignment-unalign"></i>',
                    close: '<i class="icon-cross2 font-size-base"></i>'
                };
                // File actions
                var fileActionSettings = {
                    zoomClass: '',
                    zoomIcon: '<i class="icon-zoomin3"></i>',
                    dragClass: 'p-2',
                    dragIcon: '<i class="icon-three-bars"></i>',
                    removeClass: '',
                    removeErrorClass: 'text-danger',
                    removeIcon: '<i class="icon-bin"></i>',
                    indicatorNew: '<i class="icon-file-plus text-success"></i>',
                    indicatorSuccess: '<i class="icon-checkmark3 file-icon-large text-success"></i>',
                    indicatorError: '<i class="icon-cross2 text-danger"></i>',
                    indicatorLoading: '<i class="icon-spinner2 spinner text-muted"></i>'
                };
                //
                // Basic example
                //
                $('.file-input').fileinput({
                    browseLabel: 'Browse',
                    browseIcon: '<i class="icon-file-plus mr-2"></i>',
                    uploadIcon: '<i class="icon-file-upload2 mr-2"></i>',
                    removeIcon: '<i class="icon-cross2 font-size-base mr-2"></i>',
                    layoutTemplates: {
                        icon: '<i class="icon-file-check"></i>',
                        modal: modalTemplate
                    },
                    initialCaption: "No file selected",
                    previewZoomButtonClasses: previewZoomButtonClasses,
                    previewZoomButtonIcons: previewZoomButtonIcons,
                    fileActionSettings: fileActionSettings
                });
                //
                // Custom layout
                //
                $('.file-input-custom').fileinput({
                    previewFileType: 'image',
                    browseLabel: 'Select',
                    browseClass: 'btn bg-slate-700',
                    browseIcon: '<i class="icon-image2 mr-2"></i>',
                    removeLabel: 'Remove',
                    removeClass: 'btn btn-danger',
                    removeIcon: '<i class="icon-cancel-square mr-2"></i>',
                    uploadClass: 'btn bg-teal-400',
                    uploadIcon: '<i class="icon-file-upload mr-2"></i>',
                    layoutTemplates: {
                        icon: '<i class="icon-file-check"></i>',
                        modal: modalTemplate
                    },
                    initialCaption: "Please select image",
                    mainClass: 'input-group',
                    previewZoomButtonClasses: previewZoomButtonClasses,
                    previewZoomButtonIcons: previewZoomButtonIcons,
                    fileActionSettings: fileActionSettings
                });
                //
                // Template modifications
                //
                $('.file-input-advanced').fileinput({
                    browseLabel: 'Browse',
                    browseClass: 'btn btn-light',
                    removeClass: 'btn btn-light',
                    uploadClass: 'btn bg-success-400',
                    browseIcon: '<i class="icon-file-plus mr-2"></i>',
                    uploadIcon: '<i class="icon-file-upload2 mr-2"></i>',
                    removeIcon: '<i class="icon-cross2 font-size-base mr-2"></i>',
                    layoutTemplates: {
                        icon: '<i class="icon-file-check"></i>',
                        main1: "{preview}\n" +
                            "<div class='input-group {class}'>\n" +
                            "   <div class='input-group-prepend'>\n" +
                            "       {browse}\n" +
                            "   </div>\n" +
                            "   {caption}\n" +
                            "   <div class='input-group-append'>\n" +
                            "       {upload}\n" +
                            "       {remove}\n" +
                            "   </div>\n" +
                            "</div>",
                        modal: modalTemplate
                    },
                    initialCaption: "No file selected",
                    previewZoomButtonClasses: previewZoomButtonClasses,
                    previewZoomButtonIcons: previewZoomButtonIcons,
                    fileActionSettings: fileActionSettings
                });
                //
                // Custom file extensions
                //
                $('.file-input-extensions').fileinput({
                    browseLabel: 'Browse',
                    browseIcon: '<i class="icon-file-plus mr-2"></i>',
                    uploadIcon: '<i class="icon-file-upload2 mr-2"></i>',
                    removeIcon: '<i class="icon-cross2 font-size-base mr-2"></i>',
                    layoutTemplates: {
                        icon: '<i class="icon-file-check"></i>',
                        modal: modalTemplate
                    },
                    maxFilesNum: 10,
                    allowedFileExtensions: ["jpg", "gif", "png", "txt"],
                    initialCaption: "No file selected",
                    previewZoomButtonClasses: previewZoomButtonClasses,
                    previewZoomButtonIcons: previewZoomButtonIcons,
                    fileActionSettings: fileActionSettings
                });
                //
                // Always display preview
                //
                $('.file-input-preview').fileinput({
                    browseLabel: 'Browse',
                    browseIcon: '<i class="icon-file-plus mr-2"></i>',
                    uploadIcon: '<i class="icon-file-upload2 mr-2"></i>',
                    removeIcon: '<i class="icon-cross2 font-size-base mr-2"></i>',
                    layoutTemplates: {
                        icon: '<i class="icon-file-check"></i>',
                        modal: modalTemplate
                    },
                    initialPreview: [
                        '../../../../global_assets/images/demo/images/1.png',
                        '../../../../global_assets/images/demo/images/2.png',
                    ],
                    initialPreviewConfig: [
                        {caption: 'Jane.jpg', size: 930321, key: 1, url: '{$url}', showDrag: false},
                        {caption: 'Anna.jpg', size: 1218822, key: 2, url: '{$url}', showDrag: false}
                    ],
                    initialPreviewAsData: true,
                    overwriteInitial: false,
                    maxFileSize: 100,
                    previewZoomButtonClasses: previewZoomButtonClasses,
                    previewZoomButtonIcons: previewZoomButtonIcons,
                    fileActionSettings: fileActionSettings
                });
                //
                // Display preview on load
                //
                $('.file-input-overwrite').fileinput({
                    browseLabel: 'Browse',
                    browseIcon: '<i class="icon-file-plus mr-2"></i>',
                    uploadIcon: '<i class="icon-file-upload2 mr-2"></i>',
                    removeIcon: '<i class="icon-cross2 font-size-base mr-2"></i>',
                    layoutTemplates: {
                        icon: '<i class="icon-file-check"></i>',
                        modal: modalTemplate
                    },
                    initialPreview: [
                        '../../../../global_assets/images/demo/images/1.png',
                        '../../../../global_assets/images/demo/images/2.png'
                    ],
                    initialPreviewConfig: [
                        {caption: 'Jane.jpg', size: 930321, key: 1, url: '{$url}'},
                        {caption: 'Anna.jpg', size: 1218822, key: 2, url: '{$url}'}
                    ],
                    initialPreviewAsData: true,
                    overwriteInitial: true,
                    previewZoomButtonClasses: previewZoomButtonClasses,
                    previewZoomButtonIcons: previewZoomButtonIcons,
                    fileActionSettings: fileActionSettings
                });
                //
                // AJAX upload
                //
                $('.file-input-ajax').fileinput({
                    browseLabel: 'Browse',
                    uploadUrl: "http://localhost", // server upload action
                    uploadAsync: true,
                    maxFileCount: 20,
                    initialPreview: [],
                    browseIcon: '<i class="icon-file-plus mr-2"></i>',
                    uploadIcon: '<i class="icon-file-upload2 mr-2"></i>',
                    removeIcon: '<i class="icon-cross2 font-size-base mr-2"></i>',
                    fileActionSettings: {
                        removeIcon: '<i class="icon-bin"></i>',
                        uploadIcon: '<i class="icon-upload"></i>',
                        uploadClass: '',
                        zoomIcon: '<i class="icon-zoomin3"></i>',
                        zoomClass: '',
                        indicatorNew: '<i class="icon-file-plus text-success"></i>',
                        indicatorSuccess: '<i class="icon-checkmark3 file-icon-large text-success"></i>',
                        indicatorError: '<i class="icon-cross2 text-danger"></i>',
                        indicatorLoading: '<i class="icon-spinner2 spinner text-muted"></i>',
                    },
                    layoutTemplates: {
                        icon: '<i class="icon-file-check"></i>',
                        modal: modalTemplate
                    },
                    initialCaption: 'No file selected',
                    previewZoomButtonClasses: previewZoomButtonClasses,
                    previewZoomButtonIcons: previewZoomButtonIcons
                });
                //
                // Misc
                //
                // Disable/enable button
                $('#btn-modify').on('click', function () {
                    $btn = $(this);
                    if ($btn.text() == 'Disable file input') {
                        $('#file-input-methods').fileinput('disable');
                        $btn.html('Enable file input');
                        alert('Hurray! I have disabled the input and hidden the upload button.');
                    } else {
                        $('#file-input-methods').fileinput('enable');
                        $btn.html('Disable file input');
                        alert('Hurray! I have reverted back the input to enabled with the upload button.');
                    }
                });
            };
            // Tags input
            var _componentTagsinput = function () {
                if (!$().tagsinput) {
                    console.warn('Warning - tagsinput.min.js is not loaded.');
                    return;
                }
                // Display values
                $('.tags-input, [data-role="tagsinput"], .tagsinput-max-tags, .tagsinput-custom-tag-class').on('change', function (event) {
                    var $element = $(event.target),
                        $container = $element.parent().parent('.mb-3');
                    if (!$element.data('tagsinput'))
                        return;
                    var val = $element.val();
                    if (val === null)
                        val = "null";
                    $('pre.val > code', $container).html(($.isArray(val) ? JSON.stringify(val) : "\"" + val.replace('"', '\\"') + "\""));
                    $('pre.items > code', $container).html(JSON.stringify($element.tagsinput('items')));
                    Prism.highlightAll();
                }).trigger('change');
                // Basic examples
                // ------------------------------
                // Basic initialization
                $('.tags-input').tagsinput();
                // Allow dublicates
                $('.tags-input-dublicates').tagsinput({
                    allowDuplicates: true
                });
                // Set maximum allowed tags
                $('.tagsinput-max-tags').tagsinput({
                    maxTags: 5
                });
                // Custom tag class
                $('.tagsinput-custom-tag-class').tagsinput({
                    tagClass: function (item) {
                        return 'bg-success text-white';
                    }
                });
                //
                // Typeahead implementation
                //
            };
            // Dialog
            var _componentUiDialog = function () {
                if (!$().dialog) {
                    console.warn('Warning - jQuery UI components are not loaded.');
                    return;
                }
                // Animated
                $('#jui-dialog-animated').dialog({
                    autoOpen: false,
                    modal: true,
                    width: 400,
                    show: {
                        effect: 'fade',
                        duration: 500
                    },
                    hide: {
                        effect: 'fade',
                        duration: 500
                    }
                });
                // With buttons
                $('#jui-dialog-buttons').dialog({
                    autoOpen: false,
                    modal: true,
                    width: 400,
                    buttons: {
                        Save: function () {
                            $(this).dialog('close');
                        },
                        Cancel: function () {
                            $(this).dialog('close');
                        }
                    }
                });
                // Buttons with icons
                $('#jui-dialog-buttons-icons').dialog({
                    autoOpen: false,
                    modal: true,
                    width: 400,
                    buttons: [{
                        text: 'Submit',
                        icons: {
                            primary: 'icon-checkmark5'
                        },
                        click: function () {
                            $(this).dialog('close');
                        }
                    },
                        {
                            text: 'Cancel',
                            icons: {
                                primary: 'icon-cross3'
                            },
                            click: function () {
                                $(this).dialog('close');
                            }
                        }
                    ]
                });
                // Disable resize
                $('#jui-dialog-resize').dialog({
                    autoOpen: false,
                    modal: true,
                    width: 400,
                    resizable: false
                });
                // Disable close on escape
                $('#jui-dialog-close-escape').dialog({
                    autoOpen: false,
                    modal: true,
                    width: 400,
                    closeOnEscape: false
                });
                // Disable drag
                $('#jui-dialog-drag-disabled').dialog({
                    autoOpen: false,
                    modal: true,
                    width: 400,
                    draggable: false
                });
                // Append to element
                $('#jui-dialog-append').dialog({
                    appendTo: '#modal-append-target',
                    autoOpen: false,
                    modal: true,
                    width: 400
                });
                //
                // With forms
                //
                // Haber Form Create dialog
                $('#news-create').dialog({
                    autoOpen: false,
                    modal: true,
                    width: 500,
                    closeOnEscape: false,
                    show: {
                        effect: 'fade',
                        duration: 500
                    },
                    hide: {
                        effect: 'fade',
                        duration: 500
                    },
                    buttons: {
                        Submit: function () {
                            $(this).dialog('close');
                        },
                        Cancel: function () {
                            $(this).dialog('close');
                        }
                    }
                });
                // Haber Form Edit dialog
                $('#news-edit').dialog({
                    autoOpen: false,
                    modal: true,
                    closeOnEscape: false,
                    width: 500,
                    show: {
                        effect: 'fade',
                        duration: 500
                    },
                    hide: {
                        effect: 'fade',
                        duration: 500
                    },
                    buttons: {
                        Submit: function () {
                            $(this).dialog('close');
                        },
                        Cancel: function () {
                            $(this).dialog('close');
                        }
                    }
                });
                /*
                HABER Modal Openers
                */
                $('#news-create-opener').on('click', function () {
                    $('#news-create').dialog('open');
                });
                $('#news-edit-opener').on('click', function () {
                    $('#news-edit').dialog('open');
                });
                /*
                HABER Modal Openers END
                */
            };
            //
            // Return objects assigned to module
            //
            return {
                init: function () {
                    _componentCKEditor();
                    _componentSelect2();
                    _componentFileUpload();
                    _componentNoty();
                    _componentEmre();
                    _componentPickadate();
                    _componentTokenfield();
                    _componentTagsinput();
                    _componentUiDialog();
                }
            }
        }();
        // Initialize module
        // ------------------------------
        document.addEventListener('DOMContentLoaded', function () {
            CKEditor.init();
        });
    </script>
    <script>
        function ajaxekle(formid) {
            var form = $("#" + formid); //$("#ajax-form");
            var posturl = $("#" + formid).attr('action');
            var fmethod = $("#" + formid).attr('method');
            //var formElem = $("#formId");
            //var formdata = new FormData(form[0]);
            for (var kaydet in CKEDITOR.instances)
                CKEDITOR.instances[kaydet].updateElement();
            //console.log(form[0]);
            console.log(form);
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
                }
            });
            $.ajax({
                type: fmethod,
                url: posturl,
                data: form.serialize(), //_data,//.serialize(),
                processData: false,
                beforeSend: function () {
                    $(".clicked").attr("disabled", true);
                    $(".loaderbtn").addClass("icon-spinner2 spinner");
                    $(".loaderbtn").removeClass("icon-paperplane");
                    //$(".clicked").();
                },
                success: function (datacik) {
                    $('.clicked').removeAttr("disabled");
                    $(".loaderbtn").removeClass("icon-spinner2 spinner");
                    $(".loaderbtn").addClass("icon-paperplane");
                    new Noty({
                        theme: datacik.notif.theme,
                        layout: 'bottomRight',
                        text: datacik.notif.text,
                        type: datacik.notif.type,
                        progressBar: true
                    }).show();
                },
                error: function (datacik) {
                    $('.clicked').removeAttr("disabled");
                    $(".loaderbtn").removeClass("icon-spinner2 spinner");
                    $(".loaderbtn").addClass("icon-paperplane");
                    new Noty({
                        theme: 'alert alert-warning alert-styled-left p-0',
                        layout: 'bottomRight',
                        text: 'Hata',
                        timer: '2500',
                        type: 'alert',
                        animation: {
                            open: 'animated bounceInRight', // Animate.css class names
                            close: 'animated bounceOutRight' // Animate.css class names
                        },
                        progressBar: true
                    }).show();
                }
            });
            return false;
        }
    </script>
@endsection