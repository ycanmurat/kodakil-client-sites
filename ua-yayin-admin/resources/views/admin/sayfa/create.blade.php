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
                <h5 class="card-title">Sayfa Ekle</h5>
            </div>
            <div class="card-body">
                <p class="mb-4"> <!--Buraya Bilgilendirme Metni Gelebilir--></p>
                <form action="{{route('sayfa.store')}}" method="POST" class="form-horizontal" onsubmit="return ajaxekle();" id="ajax-form">
                    <div class="widget-content nopadding">
                        {{csrf_field()}}
                        <div class="form-group row">
                            <label class="col-form-label col-lg-1">Sayfa Başlığı</label>
                            <div class="col-lg-11">
                                <input type="text" name="baslik" class="form-control">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-form-label col-lg-1">Anahtar Kelimeler</label>
                            <div class="col-lg-10">
                                <input type="text" name="keywords" class="form-control">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-form-label col-lg-1">Kısa Açıklama</label>
                            <div class="col-lg-11">
                                <textarea name="description" class="form-control" rows="4" cols="4"></textarea>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-form-label col-lg-1">Metin</label>
                            <div class="col-lg-11">
                                <textarea name="metin" class="ckeditor" rows="4" cols="4"></textarea>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-form-label col-lg-1">Yayın Durumu</label>
                            <div class="col-lg-11">
                                <select name="onay" class="form-control">
                                    <option value="1">Aktif</option>
                                    <option value="0">Pasif</option>
                                </select>
                            </div>
                        </div>
                        <div class="text-right">
                            <button type="submit" class="btn btn-primary">Kaydet <i class="icon-paperplane ml-2"></i></button>
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

@section('beforeappjs')
    <script src="https://code.jquery.com/jquery.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
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

@endsection

@section('afterappjs')
    <!-- Theme JS files -->
    <script src="/yonetici/global_assets/js/demo_pages/form_tags_input.js"></script>

    <script>
        function ajaxekle() {
            var form = $("#ajax-form");//$("#ajax-form");
            //var formElem = $("#formId");
            //var formdata = new FormData(form[0]);
            for (var kaydet in CKEDITOR.instances)
                CKEDITOR.instances[kaydet].updateElement();
            //console.log(form[0]);
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
                }
            });
            $.ajax({
                type: "POST",
                url: "{{route('sayfa.store')}}",
                data: form.serialize(),//_data,//.serialize(),
                processData: false,
                beforeSend: function () {
                    $(".clicked").attr("disabled", true);
                    $("#loaderbtn").addClass("icon-spinner2 spinner");
                    $("#loaderbtn").removeClass("icon-paperplane");
                    //$(".clicked").();
                },
                success: function (datacik) {
                    $('.clicked').removeAttr("disabled");
                    $("#loaderbtn").removeClass("icon-spinner2 spinner");
                    $("#loaderbtn").addClass("icon-paperplane");
                    new Noty({
                        theme: datacik.notif.theme,
                        layout: 'bottomRight',
                        text: datacik.notif.text,
                        type: datacik.notif.type,
                        progressBar: true
                    }).show();
                    window.setTimeout(function() {
                        location.href = '{{route('sayfa.index')}}/'+datacik.success.id+'/edit';
                    }, 2000);
                },
                error: function (datacik) {
                    $('.clicked').removeAttr("disabled");
                    $("#loaderbtn").removeClass("icon-spinner2 spinner");
                    $("#loaderbtn").addClass("icon-paperplane");
                    new Noty({
                        theme: 'alert alert-danger alert-styled-left p-0',
                        layout: 'bottomRight',
                        text: 'Hata',
                        type: 'warning',
                        progressBar: true
                    }).show();
                }
            });
            return false;
        }


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

            //
            // Return objects assigned to module
            //

            return {
                init: function () {
                    _componentCKEditor();
                    _componentSelect2();
                    _componentNoty();
                    _componentPickadate();
                }
            }
        }();


        // Initialize module
        // ------------------------------

        document.addEventListener('DOMContentLoaded', function () {
            CKEditor.init();
        });
    </script>
@endsection