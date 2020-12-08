@extends('layouts.index.master')
@section('page-header')

@endsection
@section('icerik')
<section class="clients">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="owl-carousel owl-theme owl-clients">
                    @foreach($clients as $client)
                    <div class="item">
                        <a href="#c-{{$client->id}}">
                            <h2>{{$client->baslik}}</h2>
                        </a>
                    </div>
                    @endforeach
                </div>
            </div>
            <div class="col-md-12">
                <div class="projectsWrapper">
                    @foreach($clients as $client)
                    <div  class="item">
                        <span id="c-{{$client->id}}"></span>
                        @if(count($client->projeler)==1)
                        @foreach($client->projeler as $proje)
                        <div class="kapak item mitem" data-api="{{route('site.project.json',$proje->id)}}"  data-project="{{$proje->baslik}}">

                            <img class="lazy" data-src="{{$proje->filepath}}" alt="">
                            <!--<h2>{{$client->baslik}}</h2>-->
                        </div>
                        @endforeach
                        @elseif(count($client->projeler)==3)
                        <div class="Area">
                            <div class="row">
                                @foreach($client->projeler as $proje)
                                <div class="col mitem" data-api="{{route('site.project.json',$proje->id)}}"  data-project="{{$proje->baslik}}">

                                    
                                     @foreach($proje->getMedia('document') as $resim)
                                     <div class="item ">
                                         <div class="imgArea">
                                            <img class="lazy" data-src="{{$resim->getUrl()}}">
                                        </div>
                                    </div>
                                    @endforeach
                            </div>

                            @endforeach
                        </div>
                    </div>
                    @else
                    <div class="Area">
                        <div class="row">
                            @foreach($client->projeler as $proje)
                            <div class="col-md-6  mitem" data-api="{{route('site.project.json',$proje->id)}}"  data-project="{{$proje->baslik}}">
                                @foreach($proje->getMedia('document') as $resim)
                                <div class="item">
                                    <div class="imgArea">
                                        <img class="lazy" data-src="{{$resim->getUrl()}}">
                                    </div>
                                </div>
                                @endforeach
                            </div>
                            @endforeach
                        </div>
                    </div>
                    @endif
                    <h3>{{$client->baslik}}</h3>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
</section>
<section class="projectDetail">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="wrapperArea">
                    <button id="closePop"><img src="images/icons/cancel.svg" alt="Close" title="Close"></button>
                    <div class="detail-content">
                        <!-- Video first carousel-->
                        <div class="item mVideo" data-dot="<img class='vIcon' src='images/icons/play-button.svg'>">
                            <div style="padding:56.25% 0 0 0;position:relative;">
                                <iframe style="position:absolute;top:0;left:0;width:100%;height:100%;"
                                src="https://player.vimeo.com/video/477199457" frameborder="0"
                                allow="autoplay; fullscreen" allowfullscreen></iframe>
                            </div>
                        </div>
                        <div class="item" data-dot="<img src='images/Layer 5.jpeg'>">
                            <a data-fancybox="ornekgaleri1" href="images/Layer 5.jpeg">
                                <img class="lazy" data-src="images/Layer 5.jpeg">
                                <h3>HAKAAN YILDIRIM SS21</h3>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<script src="https://player.vimeo.com/api/player.js"></script>
<script>
    $(document).ready(function() {

        $('.mitem').on('click', function () {
            $('.projectDetail').addClass('active');
            $('body').addClass('off');
            var lang = "{{App::getLocale()}}";
            var apiUrl = $(this).data('api');
            var projectID = $(this).data('id');
            var project = $(this).data('project');

            console.log(apiUrl);
            console.log(projectID);
            $('.detail-content').html('');
            $('.detail-content').html(project);
            jQuery.getJSON(apiUrl, function (json) {
                console.log(json);
                $.each(json, function (key, value) {
                    if (value.videoUrl != null) {
                        $('.detail-content').append('<!-- Video first carousel-->\n' +
                            '                        <div class="item mVideo" data-dot="<img class=\'vIcon\' src=\'images/icons/play-button.svg\'>">\n' +
                            '\n' +
                            '                            <div style="padding:56.25% 0 0 0;position:relative;">\n' +
                            '                                <iframe style="position:absolute;top:0;left:0;width:100%;height:100%;"\n' +
                            '                                        src="' + value.videoUrl + '" frameborder="0"\n' +
                            '                                        allow="autoplay; fullscreen" allowfullscreen></iframe>\n' +
                            '                            </div>\n' +
                            '                        </div>');
                        console.log(value.videoUrl);
                    } else {
                        if (lang == 'en') {
                            $('.detail-content').append('<div class="item" data-dot="<img src=\'' + value.filepath + '\'>">' +
                                '<a data-fancybox="ornekgaleri1" href="' + value.filepath + '">' +
                                '<img src="' + value.filepath + '">' +
                                '</a>' +
                                '</div>');
                            console.log(value.filepath);
                        } else {
                            $('.detail-content').append('<div class="item" data-dot="<img src=\'' + value.filepath + '\'>">' +
                                '<a data-fancybox="ornekgaleri1" href="' + value.filepath + '">' +
                                '<img src="' + value.filepath + '">' +
                                '</a>' +
                                '</div>');
                        }
                    }
                });
            });
        });

        /* $('div.Area .item').click(function (event) {
             console.log('test');
             var lang = "{{App::getLocale()}}";
            var apiUrl = $(this).data('api');
            var projectID = $(this).data('id');
            console.log(apiUrl);
            console.log(projectID);

        });*/
        $('section.projectDetail button#closePop').click(function (event) {
            $('.projectDetail').removeClass('active');
            $('body').removeClass('off');
            var vidMain = new Vimeo.Player($('.mVideo').get(0));
            vidMain.pause();
        });

    });
</script>
@endsection

@section('css')

@endsection

@section('js')
<script>
    $(".owl-clients a[href^='#']").on('click', function(e) {

        e.preventDefault();

        var hash = this.hash;
        console.log($(hash).offset().top);
        console.log($(hash).offset().top-200);
        $('html, body').animate({
            scrollTop: $(hash).offset().top-200
        }, 100, function(){

            window.location.hash = hash;
        });

    });
</script>
@endsection