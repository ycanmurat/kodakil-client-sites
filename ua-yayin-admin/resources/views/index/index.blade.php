@extends('layouts.index.master')
@section('icerik')

    <section class="index" style="min-height: 40vh;padding: 105px 0px;">
        <div class="owl-carousel owl-theme owl-home">
            @foreach($sliderDesktop as $slide)
                @if($slide->filepath !='')
                    <iframe style="position:absolute;top:0;left:0;width:100%;height:100%;" src="{{$slide->filepath}}"
                            frameborder="0"
                            allow="autoplay; fullscreen" allowfullscreen></iframe>
                @else
                    @foreach($slide->getMedia('slider') as $s)
                        <div class="item d-lg-block d-none">
                            <video autoplay controls controlsList="nodownload" class="homeVideo" muted allow="autoplay">
                                <source src="{{$s->getUrl()}}" type="video/mp4"/>
                            </video>
                        </div>
                    @endforeach
                @endif


            @endforeach
        </div>
        @foreach($sliderMobile as $slidee)
            @if($slide->filepath !='')
                <iframe style="position:absolute;top:0;left:0;width:100%;height:100%;" src="{{$slidee->filepath}}"
                        frameborder="0"
                        allow="autoplay; fullscreen" allowfullscreen></iframe>
            @else
                @foreach($slidee->getMedia('slider') as $s)
                    <div class="item d-lg-none d-block">
                        <video autoplay muted controls controlsList="nodownload" class="homeVideo">
                            <source src="{{$s->getUrl()}}" type="video/mp4"/>
                        </video>
                    </div>
                @endforeach
            @endif
        @endforeach
    </section>
    <script>
        $('.owl-home').owlCarousel({
            loop: false,
            margin: 0,
            autoplay: true,
            autoplayTimeout: 200,
            autoplayHoverPause: false,
            smartSpeed: 10,
            nav: false,
            touchDag: false,
            mouseDrag: false,
            dots: false,
            responsive: {
                0: {
                    items: 1
                },
                600: {
                    items: 1
                },
                1000: {
                    items: 1
                }
            }
        });
    </script>
@endsection
@section('css')
@endsection
@section('js')
@endsection