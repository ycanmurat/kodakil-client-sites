<!DOCTYPE html>
<html lang="{{App::getLocale()}}">
<head>
    <meta charset="UTF-8">
    <meta name="robots" content="nofollow"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
    <title>Uğurhan Akdeniz</title>
    <meta property="og:image" content="/images/uashortlogo.png" />
    <meta name="description" content="Uğurhan Akdeniz is a premier special events company, creating and producing content, shows and events based on 15 years of experience in the worlds of luxury">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:site" content="@ugurhanakdeniz">
    <meta name="twitter:creator" content="@ugurhanakdeniz">
    <meta name="twitter:title" content="Uğurhan Akdeniz">
    <meta name="twitter:description" content="Uğurhan Akdeniz is a premier special events company, creating and producing content, shows and events based on 15 years of experience in the worlds of luxury">
    <meta name="twitter:image" content="/images/uashortlogo.png">
    <meta property="og:site_name" content="Uğurhan Akdeniz">
    <meta property="og:url" content="https://ugurhanakdeniz.com/">
    <meta property="og:title" content="Uğurhan Akdeniz - premier special events company">
    <meta property="og:description" content="Uğurhan Akdeniz is a premier special events company, creating and producing content, shows and events based on 15 years of experience in the worlds of luxury">
    <link rel="canonical" href="https://ugurhanakdeniz.com">
    <meta name="thumbnail" content="/images/uashortlogo.png">
    <link rel="image_src" href="/images/uashortlogo.png">
    <link rel="apple-touch-icon" sizes="180x180" href="/images/uashortlogo.png">
    <link rel="icon" type="image/png" sizes="192x192" href="/images/uashortlogo.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/images/uashortlogo.png">
    <meta name="msapplication-TileImage" content="/images/uashortlogo.png">
    <meta name="msapplication-TileColor" content="#000000">
    <meta name="theme-color" content="#000000">
    <!-- Jquery -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
    integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
    integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <!-- Fancy Time-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css"/>
    <script src="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js"></script>
    <!-- CheckBox Plugin -->
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/pretty-checkbox@3.0/dist/pretty-checkbox.min.css">
    <!-- Owl Carousel -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.css">
    <!-- Lazy Load -->
    <script src="https://hakaanyildirim.com/assets/Front/js/jquery.lazy.min.js"></script>
    <!-- Vue -->
    <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
    <!-- Font -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;500;700;900&display=swap" rel="stylesheet">
    <!-- Main Reset Css-->
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">
    <link rel="stylesheet" type="text/css" href="/css/reset.css">
    <link rel="stylesheet" type="text/css" href="/css/main.css?v=<?php echo md5(date('Y-m-d H:i:s')); ?>"/>
    <link rel="icon" href="/images/uafavicon.png" type="image/x-icon"/>
</head>
<script>
    function loadpage() {
        $('.loadingArea').addClass('done');
    }
</script>
<body onload="loadpage()">
    <div class="loadingArea">
        <img src="/images/black.png" alt="Uğurhan Akdeniz">
        <p>{{trans('site.yukleniyor')}}</p>
    </div>
    <header>
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="navigator">
                        <a href="{{route('site.anasayfa')}}" class="logo"><img src="/images/black.png" alt="UĞURHAN AKDENİZ"></a>
                        <div class="menu">
                            <div class="hamburger">
                                <svg class="ham hamRotate ham1" viewBox="0 0 100 100" width="80" onclick="this.classList.toggle('active')">
                                    <path class="line top"
                                    d="m 30,33 h 40 c 0,0 9.044436,-0.654587 9.044436,-8.508902 0,-7.854315 -8.024349,-11.958003 -14.89975,-10.85914 -6.875401,1.098863 -13.637059,4.171617 -13.637059,16.368042 v 40"/>
                                    <path class="line middle" d="m 30,50 h 40"/>
                                    <path class="line bottom"
                                    d="m 30,67 h 40 c 12.796276,0 15.357889,-11.717785 15.357889,-26.851538 0,-15.133752 -4.786586,-27.274118 -16.667516,-27.274118 -11.88093,0 -18.499247,6.994427 -18.435284,17.125656 l 0.252538,40"/>
                                </svg>
                            </div>
                            <ul>
                                <li><a @if(Route::currentRouteName() == 'site.anasayfa') class="active" @else @endif href="{{route('site.anasayfa')
                                }}">{{trans('site.anasayfa')}}</a></li>
                                <li><a @if(Route::currentRouteName() == 'site.musterilerimiz.'.App::getLocale()) class="active" @else @endif
                                    href="{{route('site.musterilerimiz.'.App::getLocale())}}">
                                {{trans('site.musterilerimiz')}}</a></li>
                                <li><a @if(Route::currentRouteName() == 'site.projelerimiz.'.App::getLocale()) class="active" @else @endif
                                    {{ (Route::currentRouteName() == 'site.projelerimiz.'.App::getLocale()) ? 'class="active"' : '' }}
                                    href="{{route('site.projelerimiz.'.App::getLocale())}}">
                                {{trans('site.projelerimiz')}}</a></li>
                                <li><a @if(Route::currentRouteName() == 'site.hakkimizda.'.App::getLocale()) class="active" @else @endif
                                    href="{{route('site.hakkimizda.'.App::getLocale())}}">
                                {{trans('site.hakkimizda')}}</a></li>
                                <li><a @if(Route::currentRouteName() == 'site.iletisim.'.App::getLocale()) class="active" @else @endif
                                    href="{{route('site.iletisim.'.App::getLocale())}}">
                                {{trans('site.iletisim')}}</a></li>
                                <li><a id="privacy" href="#!">{{trans('site.gizlilik')}}</a></li>
                        <!--<li class="lang">
                                <a href="/lang/en" @if(App::getLocale()=='en') class="isActive" @endif> en </a>
                                /
                                <a href="/lang/tr" @if(App::getLocale()=='tr') class="isActive" @endif> tr </a></li>
                            -->
                            <li id="search">
                                <form id="s-form" method="get" action="/search/">
                                    <span class="removeSearch"><img src="/images/icons/cancel.svg" alt="close"></span>
                                    <input type="text" id="s-text" name="s" placeholder="{{trans('site.search')}}" required="" minlength="3">

                                    <button><img src="/images/icons/loupe.svg" alt=""></button>
                                </form>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
@yield('icerik')
<footer>
    <div class="socialArea p-2">
        <a target="_blank" href="{{ $ayar->instagram }}"><img src="images/icons/blackinstagram.svg" alt="Ugurhan Akdeniz instagram"></a>
        <!-- id="instagramList" -->
        <a id="spotifyList" href="#!"><img src="images/icons/spotify.svg" alt="Uğurhan Akdeniz Spotify"></a>
        <a target="_blank" href="https://www.youtube.com/user/ugurhanakdeniz"><img src="images/icons/youtube.svg" alt="Uğurhan Akdeniz Youtube"></a>
        <a target="_blank" href="https://vimeo.com/ugurhanakdeniz"><img src="images/icons/vimeo.svg" alt="Uğurhan Akdeniz Youtube"></a>
    </div>
    <section class="spotifyList">
        <button><img src="images/icons/cancel.svg" alt=""></button>
        <div class="area">
            <iframe src="https://open.spotify.com/embed/playlist/6AzRx22EkzaOpdEgMv5yOA" style="height:400px;width: 100%;" frameborder="0"
            allowtransparency="true" allow="encrypted-media"></iframe>
        </div>
    </section>

    <script>
        $('#spotifyList').click(function (event) {
            $('.spotifyList').addClass('active');
            $('body').addClass('off');
        });
        $('#s-text').keypress(function (e) {
            if (e.which == 13) {
                // $('form#s-form').submit();
            }
        });
        /*
        $('.instagramList button').click(function(event) {
            $('.instagramList').removeClass('active');
            $('body').removeClass('off');
        });
        */
        $('.spotifyList button').click(function (event) {
            $('.spotifyList').removeClass('active');
            $('body').removeClass('off');
        });
        /*$('#instagramList').click(function(event) {
            $('.instagramList').addClass('active');
            $('body').addClass('off');
        });*/
    </script>
</footer>
<div class="privacy">
    <span id="mbl-close">Close</span>
    <div class="prayvisi">
        {!! $ayar->privacy !!}
    </div>
</div>
<button id="goTop"><img src="https://www.flaticon.com/svg/static/icons/svg/25/25223.svg" title="Go Top"></button>
<style> button#goTop {position: fixed;bottom: 15px;right: 15px;width: 30px;height: 30px;border: 1px solid gray;border-radius: 50px;outline: none;}button#goTop img {width: 16px;}</style>
<script>
    $("button#goTop").click(function() {
      $("html, body").animate({ scrollTop: 0 }, "slow");
      return false;
  });
</script>
<script src="/js/main.js"></script>

@yield('js')
</body>
</html>