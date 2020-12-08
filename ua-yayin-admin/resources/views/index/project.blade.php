@extends('layouts.index.master')
@section('page-header')
@endsection
@section('icerik')
<section class="projectDetail active">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="wrapperArea">
                   <div class="detail-content">
                    @if(count($proje->galeriler))
                    @foreach($proje->galeriler as $proj)
                    @if($proj->videoUrl!='')
                    <h3>{{$proje->baslik}}</h3>
                    <div class="item mVideo" data-dot="<img class=\'vIcon\' src=\'images/icons/play-button.svg\'>">
                        <div style="padding:56.25% 0 0 0;position:relative;">
                            <iframe style="position:absolute;top:0;left:0;width:100%;height:100%;" src="{{$proj->videoUrl}}"
                                frameborder="0"
                                allow="autoplay; fullscreen" allowfullscreen></iframe>
                            </div>
                        </div>
                        @else
                        <div class="item" data-dot="<img src=' + value.filepath + '>">
                            <a data-fancybox="ornekgaleri1" href="{{$proj->filepath}}">
                                <img src="{{$proj->filepath}}">
                            </a>
                        </div>
                        @endif

                        @endforeach
                        @endif

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<script src="https://player.vimeo.com/api/player.js"></script>
@endsection
@section('css')
@endsection
@section('js')
@endsection