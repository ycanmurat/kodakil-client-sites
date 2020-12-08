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
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header header-elements-inline">
                        <h5 class="card-title">Slider Düzenleme : {{$sozlesme->baslik}}</h5>

                    </div>
                    <div class="card-body">
                        <p class="mb-4"> {!! $sozlesme->document !!}    </p>
                        <form action="{{route('slider.update',$sozlesme->id)}}" method="PUT" class="form-horizontal"
                              onsubmit="return ajaxekle();" id="ajax-form" enctype="multipart/form-data">
                            <div class="widget-content nopadding">
                                {{csrf_field()}}
                                <div class="form-group row">
                                    <label class="col-form-label col-lg-1">Slider Adı</label>
                                    <div class="col-lg-11">
                                        <input type="text" name="baslik" value="{{$sozlesme->baslik}}" class="form-control">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-form-label col-lg-1">Sıra</label>
                                    <div class="col-lg-10">
                                        <input type="text" name="order"  value="{{$sozlesme->order}}" class="form-control">
                                    </div>
                                </div>


                                <div class="form-group ">
                                    <label for="document">Resim</label>
                                    <div class="needsclick dropzone col-lg-12" style="min-height: 260px !important;" id="document-dropzone">

                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-form-label col-lg-1">Ekran</label>
                                    <div class="col-lg-11">
                                        <select name="screen" class="form-control">
                                            <option value="1" @if($sozlesme->screen ==1) selected @endif>Mobil</option>
                                            <option value="0" @if($sozlesme->screen ==0) selected @endif>Desktop</option>
                                        </select>

                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-form-label col-lg-1">Yayın Durumu</label>
                                    <div class="col-lg-11">
                                        <select name="onay" class="form-control">
                                            <option value="1"@if($sozlesme->onay ==1) selected @endif>Aktif</option>
                                            <option value="0"@if($sozlesme->onay ==0) selected @endif>Pasif</option>
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
            </div>
        </div>
    </div>
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
    <script>
        var uploadedDocumentMap = {}
        Dropzone.options.documentDropzone = {
            url: '{{ route('project.storeMedia') }}',
            maxFilesize: 100, // MB
            addRemoveLinks: true,
            headers: {
                'X-CSRF-TOKEN': "{{ csrf_token() }}"
            },
            success: function (file, response) {
                $('form').append('<input type="hidden" name="slider[]" value="' + response.name + '">')
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
                $('form').find('input[name="slider[]"][value="' + name + '"]').remove()
            },
            init: function () {
                @if(isset($sozlesme) && $sozlesme->getMedia('slider'))
                var files =
                {!! json_encode($sozlesme->getMedia('slider')) !!}
                    for (var i in files) {
                    var file = files[i]
                    this.options.addedfile.call(this, file)
                    this.options.thumbnail.call(this, file, "/uploads/" + file.id + '/' + file.file_name);

                    file.previewElement.classList.add('dz-complete')
                    $('form').append('<input type="hidden" name="slider[]" value="' + file.file_name + '">')
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
            var form_data = new FormData(form[0]);//$("#ajax-form").serialize();
            console.log(form_data);
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
                }
            });
            $.ajax({
                type: "PUT",
                url: "{{route('slider.update',$sozlesme->id)}}",
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
                },
                error: function (datacik) {
                    $('.clicked').removeAttr("disabled");
                    $("#loaderbtn").removeClass("icon-spinner2 spinner");
                    $("#loaderbtn").addClass("icon-paperplane");
                    new Noty({
                        theme: 'alert alert-warning alert-styled-left p-0',
                        layout: 'bottomRight',
                        text: 'Hata',
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
                    local: [
                        {value: 'red'},
                        {value: 'blue'},
                        {value: 'green'},
                        {value: 'yellow'},
                        {value: 'violet'},
                        {value: 'brown'},
                        {value: 'purple'},
                        {value: 'black'},
                        {value: 'white'}
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
                    $('#create-token-field').tokenfield('createToken', {value: 'new', label: 'New token'});
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

            //
            // Return objects assigned to module
            //
            return {
                init: function () {
                    _componentCKEditor();
                    _componentSelect2();
                    _componentNoty();
                    _componentPickadate();
                    _componentTokenfield();
                    _componentTagsinput();
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