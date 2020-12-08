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
                <h5 class="card-title">Proje Ekle</h5>
            </div>
            <div class="card-body">
                <p class="mb-4"> <!--Buraya Bilgilendirme Metni Gelebilir--></p>
                <form action="{{route('project.store')}}" method="POST" class="form-horizontal"
                      onsubmit="return ajaxekle();" id="ajax-form">
                    <div class="widget-content nopadding">
                        {{csrf_field()}}
                        <div class="form-group row">
                            <label for="#tip">Proje Tipi</label>
                            <select class="form-control-select2 " id="tip" name="tip">
                                <option value="">--SEÇİNİZ--</option>

                            @if(count($projeTip))
                                    @foreach($projeTip as $row)
                                        <option value="{{$row->id}}">{{$row->baslik}}</option>
                                    @endforeach
                                @endif
                            </select>
                        </div>
                        <div class="form-group row">
                            <label for="#clientID">Müşteri</label>
                            <select class="select-search" id="clientID" name="clientID">
                                <option value="1">--SEÇİNİZ--</option>

                            @if(count($clients))
                                    @foreach($clients as $row)
                                        <option value="{{$row->id}}">{{$row->baslik}}</option>
                                    @endforeach
                                @endif
                            </select>
                        </div>
                        <div class="form-group row">
                            <label class="col-form-label col-lg-1">Proje</label>
                            <div class="col-lg-5">
                                <label class="col-form-label col-lg-2">Tr</label>
                                <input type="text" name="baslik" class="form-control">
                            </div>
                            <div class="col-lg-5">
                                <label class="col-form-label col-lg-2">En</label>
                                <input type="text" name="baslik_en" class="form-control">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-form-label col-lg-1">Sıra</label>
                            <div class="col-lg-12">
                                <input type="text" name="order" class="form-control">
                            </div>
                        </div>
                        <div class="form-group" id="resimSpan">
                            <span class="text-danger small d-block">Müşteriye ait tek proje var ise yükleme yapınız !.Bu görsel Sadece Clients'de gözükür.</span>
                            <span class="help-block">Kapak Resmi(1920x700)</span>
                            <a id="lfm-kapak-create" data-input="thumbnail-kapak" data-preview="holder" class="btn btn-primary">
                                <i class="fa fa-picture-o"></i> Seç
                            </a>
                            <input id="thumbnail-kapak" class="form-control" type="text" name="kapak">
                        </div>

                        <div class="form-group ">
                            <label for="document">Documents</label>
                            <div class="needsclick dropzone col-lg-12" style="min-height: 260px !important;"
                                 id="document-dropzone">
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
                            <button type="submit" class="btn btn-primary">Kaydet <i
                                        class="icon-paperplane ml-2"></i>
                            </button>
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
    <script src="/vendor/laravel-filemanager/js/stand-alone-button.js"></script>


@endsection
@section('afterappjs')
    <!-- Theme JS files -->
    <script src="/yonetici/global_assets/js/demo_pages/form_tags_input.js"></script>
    <script>
        var uploadedDocumentMap = {}
        Dropzone.options.documentDropzone = {
            url: '{{ route('project.storeMedia') }}',
            maxFilesize: 2, // MB
            addRemoveLinks: true,
            headers: {
                'X-CSRF-TOKEN': "{{ csrf_token() }}"
            },
            success: function (file, response) {
                $('form').append('<input type="hidden" name="document[]" value="' + response.name + '">')
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
                $('form').find('input[name="document[]"][value="' + name + '"]').remove()
            },
            init: function () {
                @if(isset($sozlesme) && $sozlesme->getMedia('document'))
                var files =
                {!! json_encode($sozlesme->getMedia('document')) !!}
                    for (var i in files) {
                    var file = files[i]
                    this.options.addedfile.call(this, file)
                    this.options.thumbnail.call(this, file, "/uploads/" + file.id + '/' + file.file_name);
                    file.previewElement.classList.add('dz-complete')
                    $('form').append('<input type="hidden" name="document[]" value="' + file.file_name + '">')
                }
                @endif
            }
        }

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
                url: "{{route('project.store')}}",
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
                    window.setTimeout(function () {
                        location.href = '{{route('project.index')}}/' + datacik.success.id + '/edit';
                    }, 2000);
                },
                error: function (datacik) {
                    $('.clicked').removeAttr("disabled");
                    $("#loaderbtn").removeClass("icon-spinner2 spinner");
                    $("#loaderbtn").addClass("icon-paperplane");
                    console.log(datacik.responseJSON);
                    new Noty({
                        theme: 'alert alert-danger alert-styled-left p-0',
                        layout: 'bottomRight',
                        text: datacik.responseJSON.errors.isim[0],
                        type: 'warning',
                        progressBar: true
                    }).show();
                }
            });
            return false;
        }
         var route_prefix = "/filemanager";

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
                CKEDITOR.config.filebrowserImageBrowseUrl = '/laravel-filemanager?type=Images';
                CKEDITOR.config.filebrowserImageUploadUrl = '/laravel-filemanager/upload?type=Images&_token=';
                CKEDITOR.config.filebrowserBrowseUrl = '/laravel-filemanager?type=Files';
                CKEDITOR.config.filebrowserUploadUrl = '/laravel-filemanager/upload?type=Files&_token=';
                CKEDITOR.replaceClass = 'ckeditor';
                //console.log(CKEDITOR);
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
                // Select with search
                $('.select-search').select2();
            };
            var _componentEmre = function () {
                $('#lfm-kapak-create').filemanager('image', {
                    prefix: route_prefix
                });
            };
            var _componentSelect22 = function() {
                if (!$().select2) {
                    console.warn('Warning - select2.min.js is not loaded.');
                    return;
                }


                //
                // Basic examples
                //

                // Default initialization
                $('.select').select2({
                    minimumResultsForSearch: Infinity
                });

                // Select with search
                $('.select-search').select2();

                // Fixed width. Single select
                $('.select-fixed-single').select2({
                    minimumResultsForSearch: Infinity,
                    width: 250
                });

                // Fixed width. Multiple selects
                $('.select-fixed-multiple').select2({
                    minimumResultsForSearch: Infinity,
                    width: 400
                });


                //
                // Advanced examples
                //

                // Minimum input length
                $('.select-minimum').select2({
                    minimumInputLength: 2,
                    minimumResultsForSearch: Infinity
                });

                // Allow clear selection
                $('.select-clear').select2({
                    placeholder: 'Select a State',
                    allowClear: true
                });

                // Tagging support
                $('.select-multiple-tags').select2({
                    tags: true
                });

                // Maximum input length
                $('.select-multiple-maximum-length').select2({
                    tags: true,
                    maximumInputLength: 5
                });

                // Tokenization
                $('.select-multiple-tokenization').select2({
                    tags: true,
                    tokenSeparators: [',', ' ']
                });

                // Maximum selection
                $('.select-multiple-limited').select2({
                    maximumSelectionLength: 3
                });

                // Maximum selections allowed
                $('.select-multiple-maximum').select2({
                    maximumSelectionSize: 3
                });


                //
                // Drag and drop selected items
                //

                // Initialize with tags
                $('.select-multiple-drag').select2({
                    containerCssClass: 'sortable-target'
                });

                // Add jQuery UI Sortable support
                $('.sortable-target .select2-selection__rendered').sortable({
                    containment: '.sortable-target',
                    items: '.select2-selection__choice:not(.select2-search--inline)'
                });


                //
                // Single select with icons
                //

                // Format icon
                function iconFormat(icon) {
                    var originalOption = icon.element;
                    if (!icon.id) { return icon.text; }
                    var $icon = '<i class="icon-' + $(icon.element).data('icon') + '"></i>' + icon.text;

                    return $icon;
                }

                // Initialize with options
                $('.select-icons').select2({
                    templateResult: iconFormat,
                    minimumResultsForSearch: Infinity,
                    templateSelection: iconFormat,
                    escapeMarkup: function(m) { return m; }
                });


                //
                // Customize matched results
                //

                // Setup matcher
                function matchStart (term, text) {
                    if (text.toUpperCase().indexOf(term.toUpperCase()) == 0) {
                        return true;
                    }

                    return false;
                }

                // Initialize
                $.fn.select2.amd.require(['select2/compat/matcher'], function (oldMatcher) {
                    $('.select-matched-customize').select2({
                        minimumResultsForSearch: Infinity,
                        placeholder: 'Select a State',
                        matcher: oldMatcher(matchStart)
                    });
                });


                //
                // Loading arrays of data
                //

                // Data
                var array_data = [
                    {id: 0, text: 'enhancement'},
                    {id: 1, text: 'bug'},
                    {id: 2, text: 'duplicate'},
                    {id: 3, text: 'invalid'},
                    {id: 4, text: 'wontfix'}
                ];

                // Loading array data
                $('.select-data-array').select2({
                    placeholder: 'Click to load data',
                    minimumResultsForSearch: Infinity,
                    data: array_data
                });


                //
                // Loading remote data
                //

                // Format displayed data
                function formatRepo (repo) {
                    if (repo.loading) return repo.text;

                    var markup = '<div class="select2-result-repository clearfix">' +
                        '<div class="select2-result-repository__avatar"><img src="' + repo.owner.avatar_url + '" /></div>' +
                        '<div class="select2-result-repository__meta">' +
                        '<div class="select2-result-repository__title">' + repo.full_name + '</div>';

                    if (repo.description) {
                        markup += '<div class="select2-result-repository__description">' + repo.description + '</div>';
                    }

                    markup += '<div class="select2-result-repository__statistics">' +
                        '<div class="select2-result-repository__forks">' + repo.forks_count + ' Forks</div>' +
                        '<div class="select2-result-repository__stargazers">' + repo.stargazers_count + ' Stars</div>' +
                        '<div class="select2-result-repository__watchers">' + repo.watchers_count + ' Watchers</div>' +
                        '</div>' +
                        '</div></div>';

                    return markup;
                }

                // Format selection
                function formatRepoSelection (repo) {
                    return repo.full_name || repo.text;
                }

                // Initialize
                $('.select-remote-data').select2({
                    ajax: {
                        url: 'https://api.github.com/search/repositories',
                        dataType: 'json',
                        delay: 250,
                        data: function (params) {
                            return {
                                q: params.term, // search term
                                page: params.page
                            };
                        },
                        processResults: function (data, params) {

                            // parse the results into the format expected by Select2
                            // since we are using custom formatting functions we do not need to
                            // alter the remote JSON data, except to indicate that infinite
                            // scrolling can be used
                            params.page = params.page || 1;

                            return {
                                results: data.items,
                                pagination: {
                                    more: (params.page * 30) < data.total_count
                                }
                            };
                        },
                        cache: true
                    },
                    escapeMarkup: function (markup) { return markup; }, // let our custom formatter work
                    minimumInputLength: 1,
                    templateResult: formatRepo, // omitted for brevity, see the source of this page
                    templateSelection: formatRepoSelection // omitted for brevity, see the source of this page
                });


                //
                // Programmatic access (single)
                //

                // Set/get value
                $('.select-access-value').select2({
                    minimumResultsForSearch: Infinity,
                    placeholder: 'Select State...'
                });
                $('.access-get').on('click', function () { alert('Selected value is: '+$('.select-access-value').val()); });
                $('.access-set').on('click', function () { $('.select-access-value').val('CA').trigger('change'); });


                // Open/close menu
                $('.select-access-open').select2({
                    minimumResultsForSearch: Infinity,
                    placeholder: 'Select State...'
                });
                $('.access-open').on('click', function () { $('.select-access-open').select2('open'); });
                $('.access-close').on('click', function () { $('.select-access-open').select2('close'); });


                // Enable/disable menu
                $('.select-access-enable').select2({
                    minimumResultsForSearch: Infinity,
                    placeholder: 'Select State...'
                });
                $('.access-disable').on('click', function () { $('.select-access-enable').prop('disabled', true); });
                $('.access-enable').on('click', function () { $('.select-access-enable').prop('disabled', false); });


                // Destroy/create menu
                function create_menu() {
                    $('.select-access-create').select2({
                        minimumResultsForSearch: Infinity,
                        placeholder: 'Select State...'
                    });
                }
                create_menu();
                $('.access-create').on('click', function () { return create_menu()});
                $('.access-destroy').on('click', function () { $('.select-access-create').select2('destroy'); });


                //
                // Programmatic access (multiple)
                //

                // Reacting to external value changes
                $('.select-access-multiple-value').select2();
                $('.change-to-ca').on('click', function() { $('.select-access-multiple-value').val('CA').trigger('change'); });
                $('.change-to-ak-co').on('click', function() { $('.select-access-multiple-value').val(['AK','CO']).trigger('change'); });


                // Open/close menu
                $('.select-access-multiple-open').select2({
                    minimumResultsForSearch: Infinity
                });
                $('.access-multiple-open').on('click', function () { $('.select-access-multiple-open').select2('open'); });
                $('.access-multiple-close').on('click', function () { $('.select-access-multiple-open').select2('close'); });


                // Enable/disable menu
                $('.select-access-multiple-enable').select2({
                    minimumResultsForSearch: Infinity
                });
                $('.access-multiple-disable').on('click', function () { $('.select-access-multiple-enable').prop('disabled', true); });
                $('.access-multiple-enable').on('click', function () { $('.select-access-multiple-enable').prop('disabled', false); });


                // Destroy/create menu
                function create_menu_multiple() {
                    $('.select-access-multiple-create').select2({
                        minimumResultsForSearch: Infinity
                    });
                }
                create_menu_multiple();
                $('.access-multiple-create').on('click', function () { return create_menu_multiple()});
                $('.access-multiple-destroy').on('click', function () { $('.select-access-multiple-create').select2('destroy'); });


                // Clear selection
                $('.select-access-multiple-clear').select2({
                    minimumResultsForSearch: Infinity
                });
                $('.access-multiple-clear').on('click', function () { $('.select-access-multiple-clear').val(null).trigger('change'); });
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
                    _componentEmre();
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