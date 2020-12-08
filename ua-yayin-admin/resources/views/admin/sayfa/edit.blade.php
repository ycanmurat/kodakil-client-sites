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

                        <h5 class="card-title">Sayfa Düzenleme : {{$sozlesme->baslik}}</h5>

                        Revizyon Geçmişi : {{$sozlesme->revisionHistory->count()}}

                    </div>

                    <div class="card-body">

                        <p class="mb-4"> {!! $sozlesme->document !!}    </p>

                        <form action="{{route('sayfa.update',$sozlesme->id)}}" method="PUT" class="form-horizontal"

                              onsubmit="return ajaxekle();" id="ajax-form" enctype="multipart/form-data">

                            {{csrf_field()}}

                            <div class="form-group row">

                                <label class="col-form-label col-lg-1">Sayfa Başlığı</label>

                                <div class="col-lg-11">

                                    <input type="text" name="baslik" value="{{$sozlesme->baslik}}"

                                           class="form-control">

                                </div>

                            </div>

                            <div class="form-group row">

                                <label class="col-form-label col-lg-1">Anahtar Kelimeler</label>

                                <div class="col-lg-11">

                                    <input type="text" name="keywords" value="{{$sozlesme->keywords}}"

                                           class="form-control">

                                </div>



                            </div>

                            <div class="form-group row">

                                <label class="col-form-label col-lg-1">Kısa Açıklama</label>

                                <div class="col-lg-11">

                                    <textarea name="description" class="form-control" rows="4"

                                              cols="4">{{$sozlesme->description}}</textarea>

                                </div>



                            </div>

                            <div class="form-group row">

                                <label class="col-form-label col-lg-1">Metin</label>

                                <div class="col-lg-11">

                                    <textarea name="metin" class="ckeditor" rows="4"

                                              cols="4">{{$sozlesme->metin}}</textarea>



                                </div>

                            </div>



                            <div class="form-group row">

                                <label class="col-form-label col-lg-1">Bilgi</label>

                                <div class="col-lg-10">

                                    <input type="text" name="metin" value="{{$sozlesme->metin}}"

                                           class="form-control">

                                </div>

                            </div>

                            <div class="form-group row">

                                <label for="document">Resim</label>

                                <div class="needsclick dropzone col-lg-12" style="min-height: 260px !important;" id="document-dropzone"></div>

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

                                <button type="submit" class="btn btn-primary clicked">Kaydet

                                    <i id="loaderbtn" class="icon-paperplane ml-2"></i>

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



    <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_GOOGLE_API_KEY"></script>



@endsection



@section('afterappjs')

    <script src="/yonetici/global_assets/js/demo_pages/form_tags_input.js"></script>

    <script>

        var uploadedDocumentMap = {}

        Dropzone.options.documentDropzone = {

            url: '{{ route('project.storeMedia') }}',

            maxFilesize: 10, // MB

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

            var form_data = new FormData(form[0]);//$("#ajax-form").serialize();

            console.log(form_data);

            $.ajaxSetup({

                headers: {

                    'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')

                }

            });

            $.ajax({

                type: "PUT",

                url: "{{route('sayfa.update',$sozlesme->id)}}",

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



            var _googleMapMarkerBasic = function () {

                if (typeof google == 'undefined') {

                    console.warn('Warning - Google Maps library is not loaded.');

                    return;

                }



                // Setup map

                function initialize() {



                    // Define map element

                    var map_marker_simple_element = document.getElementById('map_marker_simple');



                    // Set coordinates

                    var myLatlng = new google.maps.LatLng(40.98322568900402, 29.097308156967188);



                    // Options

                    var mapOptions = {

                        zoom: 10,

                        center: myLatlng

                    };



                    // Apply options

                    var map = new google.maps.Map(map_marker_simple_element, mapOptions);

                    var contentString = 'RumbleFight Academy';



                    // Add info window

                    var infowindow = new google.maps.InfoWindow({

                        content: contentString

                    });



                    // Add marker

                    var marker = new google.maps.Marker({

                        position: myLatlng,

                        draggable: true,

                        map: map,

                        title: 'Hello World!'

                    });



                    // Attach click event

                    google.maps.event.addListener(marker, 'click', function () {

                        infowindow.open(map, marker);

                    });

                    // Attach click event

                    google.maps.event.addListener(marker, 'drag', function () {

                        console.log(marker.position.lat() + "," + marker.position.lng());

                    });

                };



                // Initialize map on window load

                google.maps.event.addDomListener(window, 'load', initialize);

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

                    //_googleMapMarkerBasic();

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