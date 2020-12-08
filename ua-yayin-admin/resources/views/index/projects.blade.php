@extends('layouts.index.master')
@section('page-header')
@endsection
@section('icerik')
<section class="projects">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <nav>
                    <div class="nav nav-tabs" id="nav-tab" role="tablist">
                        @foreach($projectTypes as $Type)
                        <a class="nav-link @if($Type->id==1) active @endif" id="b{{$Type->id}}-tab"
                         data-toggle="tab" href="#a{{$Type->id}}" role="tab" aria-controls="{{$Type->id}}"
                         aria-selected=@if($Type->id==1) "true" @else "false" @endif>{{$Type->baslik}}</a>
                         @endforeach
                     </div>
                 </nav>
                 <div class="tab-content" id="nav-tabContent">
                    @foreach($projectTypes as $Type)
                    <div class="tab-pane fade @if($Type->id==1) show active @endif" id="a{{$Type->id}}"
                       role="tabpanel" aria-labelledby="a{{$Type->id}}-tab">
                       <div class="row">
                        @foreach($Type->projeler as $Proje)
                        <div class="col-md-4">
                            <div class="item" data-api="{{route('site.project.json',$Proje->id)}}" data-id="{{$Proje->id}}">
                                @foreach($Proje->getMedia('document') as $resim)
                                <div class="imgArea">
                                    <img class="lazy" data-src="{{$resim->getUrl()}}">
                                </div>
                                @endforeach
                                <h3>{{$Proje->baslik}}</h3>
                            </div>
                        </div>
                        @endforeach
                    </div>
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
                            <img src="images/Layer 5.jpeg">
                            <h3>HAKAAN YILDIRIM SS21</h3>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</section>
<script>

    $('section.projects .tab-pane .item').click(function (event) {
        $('.projectDetail').addClass('active');
        $('body').addClass('off');
    });

    $(document).on('click', ".item", function () {
        var lang = "{{App::getLocale()}}";
        var apiUrl = $(this).data('api');
        var projectID = $(this).data('id');
        console.log(apiUrl);
        jQuery.getJSON(apiUrl, function (json) {
            console.log(json);
            console.log(projectID);
            $('.detail-content').html('');
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
                    if (lang=='en'){
                        $('.detail-content').append('<div class="item" data-dot="<img src=\'' + value.filepath + '\'>">' +
                            '<a data-fancybox="ornekgaleri1" href="' + value.filepath + '">' +
                            '<img src="' + value.filepath + '">' +
                            '</a>' +
                            '</div>');
                        console.log(value.filepath);
                    }else{
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
    
    $('section.projectDetail button#closePop').click(function (event) {
        $('.projectDetail').removeClass('active');
        $('body').removeClass('off');
        var vidMain = new Vimeo.Player($('.mVideo').get(0));
        vidMain.pause();
    });


</script>
<script src="https://player.vimeo.com/api/player.js"></script>
@endsection
@section('css')
@endsection
@section('js')
@endsection