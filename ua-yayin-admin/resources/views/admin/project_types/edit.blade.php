<style>
    .content.icerik-edit {
    }

    .content.icerik-edit div.form-item {
        border: 1px solid #0000001a;
        padding: 10px;
        margin: 15px 0px;
        background: #f8f8f8;
        border-radius: 5px;
        box-shadow: 0px 6px 10px #00000017;
    }

    .content.icerik-edit div.form-item h6 {
        text-align: center;
        font-weight: 500;
        border-bottom: 1px solid #0000001c;
    }

    .content.icerik-edit div.form-item div.item-area {
        display: flex;
    }

    .content.icerik-edit div.form-item div.item-area div.item {
        flex: 1;
        padding: 5px 10px;
    }

    .content.icerik-edit div.form-item div.item-area div.item label {
        display: block;
        width: 100%;
        margin: 0px;
        font-weight: 400;
    }

    .content.icerik-edit div.form-item div.item-area div.item input {
        width: 100%;
        padding: 5px;
        border-radius: 5px;
        border: 1px solid #00000042;
        outline: none;
        transition: all ease .3s;
    }

    .content.icerik-edit div.form-item div.item-area div.item input:focus {
        border: 1px solid #ff7043;
    }

    .content.icerik-edit div.form-item div.item-area div.item input::selection {
        background: #ff7043;
        color: white;
    }

    div#document-dropzone:after {
        content: 'Eklemeke için tıkla';
        position: absolute;
        right: 10px;
        top: 10px;
        font-weight: 500;
        font-size: 15px;
    }
</style>

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
    <div class="content icerik-edit">
        <!-- Form inputs -->
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header header-elements-inline">
                        <h5 class="card-title">Proje Tip Düzenleme : {{$proje->baslik}}
                    </div>
                    <div class="card-body">
                        <p class="mb-4"> {!! $proje->document !!}   <!--bu alan boş geliyor--> </p>
                        <form action="{{route('projectType.update',$proje->id)}}" method="PUT" class="form-horizontal"
                              onsubmit="return ajaxekle();" id="ajax-form" enctype="multipart/form-data">
                            {{csrf_field()}}


                            <div class="col-xl-4 col-lg-6 col-md-12 mt-0">
                                <div class="form-item">
                                    <h6 class="wrapper-title"> Proje Tipi</h6>
                                    <div class="item-area">
                                        <div class="item">
                                            <label class="">Türkçe</label>
                                            <input type="text" name="baslik"
                                                   value="{{$proje->getTranslation('baslik', 'tr')}}">
                                        </div>
                                        <div class="item">
                                            <label class="">English</label>
                                            <input type="text" name="baslik_en"
                                                   value="{{$proje->getTranslation('baslik', 'en')}}">
                                        </div>

                                    </div>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-form-label col-lg-1">Sıra</label>
                                <div class="col-lg-12">
                                    <input type="text" name="order" value="{{$proje->order}}" class="form-control">
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

@endsection

@section('afterappjs')
    <script>

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
                url: "{{route('projectType.update',$proje->id)}}",
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
            // Dialog
            var _componentUiDialog = function () {
                if (!$().dialog) {
                    console.warn('Warning - jQuery UI components are not loaded.');
                    return;
                }

                // Basic example
                $('#jui-dialog-basic').dialog({
                    autoOpen: false,
                    width: 400
                });

                // With overlay
                $('#jui-dialog-overlay').dialog({
                    autoOpen: false,
                    modal: true,
                    width: 400
                });

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
                    buttons: [
                        {
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

                // Vertical form dialog
                $('#jui-dialog-form-vertical').dialog({
                    autoOpen: false,
                    modal: true,
                    width: 500,
                    buttons: {
                        Submit: function () {
                            $(this).dialog('close');
                        },
                        Cancel: function () {
                            $(this).dialog('close');
                        }
                    }
                });

                // Horizontal form dialog
                $('#jui-dialog-form-horizontal').dialog({
                    autoOpen: false,
                    modal: true,
                    width: 500,
                    buttons: {
                        Submit: function () {
                            $(this).dialog('close');
                        },
                        Cancel: function () {
                            $(this).dialog('close');
                        }
                    }
                });

                // Inline form dialog
                $('#jui-dialog-form-inline').dialog({
                    autoOpen: false,
                    modal: true,
                    width: 555,
                    buttons: {
                        Submit: function () {
                            $(this).dialog('close');
                        },
                        Cancel: function () {
                            $(this).dialog('close');
                        }
                    }
                });


                //
                // Optional widths
                //

                // Default width
                $('#jui-dialog-width-default').dialog({
                    autoOpen: false,
                    modal: true
                });

                // Pixel width
                $('#jui-dialog-width-pixel').dialog({
                    autoOpen: false,
                    modal: true,
                    width: 400
                });

                // Percentage width
                $('#jui-dialog-width-percentage').dialog({
                    autoOpen: false,
                    modal: true,
                    width: '50%'
                });

                // Full width
                $('#jui-dialog-width-full').dialog({
                    autoOpen: false,
                    modal: true,
                    width: '96%'
                });


                //
                // Dialog openers
                //


                $('#jui-dialog-basic-opener').on('click', function () {
                    $('#jui-dialog-basic').dialog('open');
                });

                $('#jui-dialog-overlay-opener').on('click', function () {
                    $('#jui-dialog-overlay').dialog('open');
                });

                $('#jui-dialog-animated-opener').on('click', function () {
                    $('#jui-dialog-animated').dialog('open');
                });

                $('#jui-dialog-buttons-opener').on('click', function () {
                    $('#jui-dialog-buttons').dialog('open');
                });

                $('#jui-dialog-buttons-icons-opener').on('click', function () {
                    $('#jui-dialog-buttons-icons').dialog('open');
                });

                $('#jui-dialog-resize-opener').on('click', function () {
                    $('#jui-dialog-resize').dialog('open');
                });

                $('#jui-dialog-close-escape-opener').on('click', function () {
                    $('#jui-dialog-close-escape').dialog('open');
                });

                $('#jui-dialog-drag-disabled-opener').on('click', function () {
                    $('#jui-dialog-drag-disabled').dialog('open');
                });

                $('#jui-dialog-append-opener').on('click', function () {
                    $('#jui-dialog-append').dialog('open');
                });


                $('#jui-dialog-form-vertical-opener').on('click', function () {
                    $('#jui-dialog-form-vertical').dialog('open');
                });

                $('#jui-dialog-form-horizontal-opener').on('click', function () {
                    $('#jui-dialog-form-horizontal').dialog('open');
                });

                $('#jui-dialog-form-inline-opener').on('click', function () {
                    $('#jui-dialog-form-inline').dialog('open');
                });


                $('#jui-dialog-width-default-opener').on('click', function () {
                    $('#jui-dialog-width-default').dialog('open');
                });

                $('#jui-dialog-width-pixel-opener').on('click', function () {
                    $('#jui-dialog-width-pixel').dialog('open');
                });

                $('#jui-dialog-width-percentage-opener').on('click', function () {
                    $('#jui-dialog-width-percentage').dialog('open');
                });

                $('#jui-dialog-width-full-opener').on('click', function () {
                    $('#jui-dialog-width-full').dialog('open');
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
@endsection