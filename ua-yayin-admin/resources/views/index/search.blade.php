@extends('layouts.index.master')
@section('page-header')

@endsection
@section('icerik')
<section class="projects">
	<div class="container-fluid">

		<div class="row">
			<div class="col-md-12">
				<h2 class="searchTitle">{{trans('site.searched')}}: {{\Request::get('s')}}</h2>
			</div>
			@if(count($projeler)>0)
			@foreach($projeler as $Proje)
			<div class="col-md-4">
				<div class="item" data-api="{{route('site.project.json',$Proje->id)}}">
					@foreach($Proje->getMedia('document') as $resim)
					<div class="imgArea">
						<img src="{{$resim->getUrl()}}">
					</div>
					@endforeach
					<h3>{{$Proje->baslik}}</h3>
				</div>
			</div>
			@endforeach
			@else
			{{\Request::get('s')}} ile alakalı sonuç bulunamamıştır.
			@endif
		</div>
	</div>
</section>


<section class="projectDetail">
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-12">
				<h1>HAKAAN YILDIRIM</h1>
				<div class="wrapperArea">
					<button id="closePop"><img src="images/icons/cancel.svg" alt="Close" title="Close"></button>
					<div class="owl-carousel owl-theme owl-projectDetail">
						<div class="item mVideo" data-dot="<img class='vIcon' src='images/icons/play-button.svg'>">
							<div style="padding:56.25% 0 0 0;position:relative;">
								<iframe src="https://player.vimeo.com/video/477459627?title=0&portrait=0"
								style="position:absolute;top:0;left:0;width:100%;height:100%;" frameborder="0"
								allow="autoplay; fullscreen" allowfullscreen></iframe>
							</div>

						</div>
						<div class="item" data-dot="<img src='images/Layer 5.jpeg'>">
							<a data-fancybox="ornekgaleri1" href="images/Layer 5.jpeg">
								<img src="images/Layer 5.jpeg">
								<h3>HAKAAN YILDIRIM SS21</h3>
							</a>
						</div>
						<div class="item" data-dot="<img src='images/Layer 6.jpeg'>">
							<a data-fancybox="ornekgaleri1" href="images/Layer 6.jpeg">
								<img src="images/Layer 6.jpeg">
								<h3>HAKAAN YILDIRIM SS21</h3>
							</a>
						</div>
						<div class="item" data-dot="<img src='images/Layer 6.jpeg'>">
							<a data-fancybox="ornekgaleri1" href="images/Layer 7.jpeg">
								<img src="images/Layer 7.jpeg">
								<h3>HAKAAN YILDIRIM SS21</h3>
							</a>
						</div>
						<div class="item" data-dot="<img src='images/Layer 6.jpeg'>">
							<a data-fancybox="ornekgaleri1" href="images/Layer 7.jpeg">
								<img src="images/Layer 7.jpeg">
								<h3>HAKAAN YILDIRIM SS21</h3>
							</a>
						</div>
						<div class="item" data-dot="<img src='images/Layer 6.jpeg'>">
							<a data-fancybox="ornekgaleri1" href="images/Layer 7.jpeg">
								<img src="images/Layer 7.jpeg">
								<h3>HAKAAN YILDIRIM SS21</h3>
							</a>
						</div>
						<div class="item" data-dot="<img src='images/Layer 6.jpeg'>">
							<a data-fancybox="ornekgaleri1" href="images/Layer 7.jpeg">
								<img src="images/Layer 7.jpeg">
								<h3>HAKAAN YILDIRIM SS21</h3>
							</a>
						</div>
						<div class="item" data-dot="<img src='images/Layer 6.jpeg'>">
							<a data-fancybox="ornekgaleri1" href="images/Layer 7.jpeg">
								<img src="images/Layer 7.jpeg">
								<h3>HAKAAN YILDIRIM SS21</h3>
							</a>
						</div>
						<div class="item" data-dot="<img src='images/Layer 6.jpeg'>">
							<a data-fancybox="ornekgaleri1" href="images/Layer 7.jpeg">
								<img src="images/Layer 7.jpeg">
								<h3>HAKAAN YILDIRIM SS21</h3>
							</a>
						</div>
						<div class="item" data-dot="<img src='images/Layer 6.jpeg'>">
							<a data-fancybox="ornekgaleri1" href="images/Layer 7.jpeg">
								<img src="images/Layer 7.jpeg">
								<h3>HAKAAN YILDIRIM SS21</h3>
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

@endsection
@section('css')
@endsection
@section('js')
<script src="https://player.vimeo.com/api/player.js"></script>
<script>

	$('section.projects .item').click(function (event) {
		$('.projectDetail').addClass('active');
		$('body').addClass('off');
	});
	$('section.projectDetail button#closePop').click(function (event) {
		$('.projectDetail').removeClass('active');
		$('body').removeClass('off');
		var vidMain = new Vimeo.Player($('.mVideo').get(0));
		vidMain.pause();
	});

	$(document).on('click', ".item", function () {
		console.log('Tıklandım');
		var lang = "{{App::getLocale()}}";
        var apiUrl = $(this).data('api');
        var projectID = $(this).data('id');
        console.log(apiUrl);
        console.log(projectID);
		jQuery.getJSON(apiUrl, function (json) {
			console.log(json);
			console.log(this.projectID);
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

	$('section.projectDetail button#closePop').click(function (event) {
		$('.projectDetail').removeClass('active');
		$('body').removeClass('off');
		var vidMain = new Vimeo.Player($('.mVideo').get(0));
		vidMain.pause();
	});

	var pojectOwl = $('.owl-projectDetail').owlCarousel({
		loop: false,
		margin: 10,
		dotsData: true,
		nav: true,
		dots: true,
		navText: ["<img src='images/icons/left-arrow.svg'>", "<img src='images/icons/right-arrow.svg'>"],
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

	$('section.projects  .item').click(function (event) {
		$('.projectDetail').addClass('active');
	});
	$('section.projectDetail button#closePop').click(function (event) {
		$('.projectDetail').removeClass('active');
		var vidMain = new Vimeo.Player($('.mVideo').get(0));
		vidMain.pause();
	});

</script>
@endsection