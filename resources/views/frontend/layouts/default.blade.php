<!DOCTYPE html>
<html lang="en">

<head>
    <!--------------------DEFAULT--------------------->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="canonical" href="{{ request()->url() }}" />
    <meta name="description" content="{{ $description ?? setting('site.description') }}">

    <title>{{ $pageMeta['title'] ?? setting('site.title') }}</title>

    <link rel="icon" href="{{ Voyager::image(setting('site.logo')) }}" type="image/png" sizes="16x16">
    <meta property="og:image"
        content="{{ !empty($og_image) ? Voyager::image($og_image) : Voyager::image(setting('site.logo')) }}" />
    <meta property="og:url" content="{{ \Request::fullUrl() }}" />
    <meta property="og:type" content="Website" />
    <meta property="og:title" content="{{ $title ?? setting('site.title') }}" />
    <meta property="og:description" content="{{ $description ?? setting('site.description') }}" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    
    	<!-- Build Main CSS -->

	<link rel="icon" href="{{ Voyager::image(setting('site.logo')) }}"
		type="image/x-icon" />

	<link rel="preload" as='style' type="text/css"
		href="{{ asset('assets/header.scss9889.css') }}">
	<link rel="preload" as="script"
		href="{{ asset('assets/blog_article_style.scss9889.css') }}" />
	<link rel="preload" as='style' type="text/css"
		href="{{ asset('assets/quickviews.scss9889.css') }}">
	<link rel="preload" as='style' type="text/css"
		href="{{ asset('assets/popup.scss9889.css') }}">
	<link rel="preload" as='style' type="text/css"
		href="{{ asset('assets/responsive.scss9889.css') }}">
	<link rel="preload" as='style' type="text/css"
		href="{{ asset('assets/main.scss9889.css') }}">
	<link rel="preload" as='style' type="text/css"
		href="{{ asset('assets/index.scss9889.css') }}">
	<link rel="preload" as="style"
		href="{{ asset('assets/bootstrap9889.css') }}" type="text/css">
	<link rel="preload" as='style' type="text/css"
		href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&amp;display=swap">
	<link rel="preload" as='style' type="text/css"
		href="https://fonts.googleapis.com/css2?family=Mulish:wght@400;500;600;700;800;900&amp;display=swap">
	<link rel="preload" as='style' type="text/css"
		href="https://fonts.googleapis.com/css2?family=Niramit:wght@400;500;600;700&amp;display=swap">

	<!--------------------------------------------------------------------------------------------------->
	
	<link href="{{ asset('assets/header.scss9889.css') }}"
		rel="stylesheet" type="text/css" media="all" />
	<link href="{{ asset('assets/product_style.scss9889.css') }}"
		rel="stylesheet" type="text/css" media="all" />
	<link href="{{ asset('assets/bootstrap9889.css') }}" rel="stylesheet"
		type="text/css" media="all" />
	<link href="{{ asset('assets/contact_style.scss9889.css') }}"
		rel="stylesheet" type="text/css" media="all" />
	<link href="{{ asset('assets/cartpage.scss9889.css') }}"
		rel="stylesheet" type="text/css" media="all" />	
	<link href="{{ asset('assets/responsive.scss9889.css') }}"
		rel="stylesheet" type="text/css" media="all" />
	<link href="{{ asset('assets/popup.scss9889.css') }}" rel="stylesheet"
		type="text/css" media="all" />
	<link href="{{ asset('assets/main.scss9889.css') }}" rel="stylesheet"
		type="text/css" media="all" />
	<link href="{{ asset('assets/index.scss9889.css') }}" rel="stylesheet"
		type="text/css" media="all" />
	<link href="{{ asset('assets/sweetalert.css') }}" rel="stylesheet"
		type="text/css" media="all" />
	<link rel="preload" as="script"
		href="{{ asset('assets/jquery.min9889.js') }}" />
	<link rel="preload" as="script"
		href="{{ asset('assets/collection_style.scss9889.css') }}" />
	<link rel="preload" as="script"
		href="{{ asset('assets/collection_style.scss9889.css') }}" />
	<link rel="preload" as="script"
		href="{{ asset('assets/collection_style.scss9889.css') }}" />
	<link href='{{ asset('assets/custom.css') }}' rel='stylesheet' type='text/css' media='all' />
	<script src="{{ asset('assets/jquery.min9889.js') }}"
		type="text/javascript"></script>
	<!-- Bizweb javascript customer -->

	<script>
		var Bizweb = Bizweb || {};
		Bizweb.store = 'template-dori.mysapo.net';
		Bizweb.id = 425159;
		Bizweb.theme = { "id": 894862, "name": "Dori 13-02-2023", "role": "main" };
		Bizweb.template = 'index';
		if (!Bizweb.fbEventId) Bizweb.fbEventId = 'xxxxxxxx-xxxx-4xxx-yxxx-xxxxxxxxxxxx'.replace(/[xy]/g, function (c) {
			var r = Math.random() * 16 | 0, v = c == 'x' ? r : (r & 0x3 | 0x8);
			return v.toString(16);
		});		
	</script>
	<script>
		(function () {
			function asyncLoad() {
				var urls = ["https://google-shopping.sapoapps.vn/conversion-tracker/global-tag/8292.js?store=template-dori.mysapo.net", "https://google-shopping.sapoapps.vn/conversion-tracker/event-tag/8292.js?store=template-dori.mysapo.net"];
				for (var i = 0; i < urls.length; i++) {
					var s = document.createElement('script');
					s.type = 'text/javascript';
					s.async = true;
					s.src = urls[i];
					var x = document.getElementsByTagName('script')[0];
					x.parentNode.insertBefore(s, x);
				}
			};
			window.attachEvent ? window.attachEvent('onload', asyncLoad) : window.addEventListener('load', asyncLoad, false);
		})();
	</script>

	<script>
		window.BizwebAnalytics = window.BizwebAnalytics || {};
		window.BizwebAnalytics.meta = window.BizwebAnalytics.meta || {};
		window.BizwebAnalytics.meta.currency = 'VND';
		window.BizwebAnalytics.tracking_url = 's';

		var meta = {};


		for (var attr in meta) {
			window.BizwebAnalytics.meta[attr] = meta[attr];
		}
	</script>

	<script>
		$(document).ready(function ($) {
			awe_lazyloadImage();
		});
		function awe_lazyloadImage() {
			var ll = new LazyLoad({
				elements_selector: ".lazyload",
				load_delay: 100,
				threshold: 0
			});
		} window.awe_lazyloadImage = awe_lazyloadImage;
	</script>

	<link rel="preload" as="script"
		href="{{ asset('assets/swiper.min9889.js') }}" />
	<script src="{{ asset('assets/swiper.min9889.js') }}"
		type="text/javascript"></script>

</head>

<body>
    <div class="opacity_menu"></div>
 
        @include('frontend.layouts.partials.header')
        <div class="bodywrap">
            @yield('content')

            @include('frontend.layouts.partials.footer')
        </div>

		<div class="hotline-phone-ring-wrap float-icon-hotline">
            <ul class="left-icon hotline">
				<li>
					<div class="hotline-phone-ring">
						<div class="hotline-phone-ring-img-circle" style="
						background-color: #449ef3;
						width: 49px;
						height: 56px;
						top: 82px;
						left: 30px;
						position: absolute;
						background-size: 20px;
						border-radius: 100%;
						border: 2px solid transparent;
						-webkit-animation: phonering-alo-circle-img-anim 1s infinite ease-in-out;
						animation: phonering-alo-circle-img-anim 1s infinite ease-in-out;
						-webkit-transform-origin: 50% 50%;
						-ms-transform-origin: 50% 50%;
						transform-origin: 50% 50%;
						display: -webkit-box;
						display: -webkit-flex;
						display: -ms-flexbox;
						display: flex;
						align-items: center;
						justify-content: center;">
						<a href="https://zalo.me/{{ setting('site.phone_contact') }}"
								class="pps-btn-img">
								<img src="https://netweb.vn/img/hotline/zalo.png" alt="so dien thoai" width="50" style="width: 37px;
								height: 41px;
								border-radius: 41px;"
									loading="lazy">
							</a></div>
					</div>
				</li>
				<li>
					<div class="hotline-phone-ring">
						<div class="hotline-phone-ring-circle"></div>
						<div class="hotline-phone-ring-circle-fill"></div>
						<div class="hotline-phone-ring-img-circle"><a href="tel:{{ setting('site.phone_contact') }}"
								class="pps-btn-img">
								<img src="https://netweb.vn/img/hotline/icon.png" alt="so dien thoai" width="50"
									loading="lazy">
							</a></div>
					</div>
					<div class="hotline-bar">
						<a class="text-hotline" href="tel:{{ setting('site.phone_contact') }}">
							{{ setting('site.phone_contact') }}
						</a>
					</div>
                </li>
            </ul>
        </div>
	
	<!-- Plugin JS -->
	<link rel="preload" as="script"
		href="{{ asset('assets/main9889.js') }}" />
	<script src="{{ asset('assets/main9889.js') }}"
		type="text/javascript"></script>
	<div id="popupCartModal" class="modal fade" role="dialog">
	</div>
	<link rel="preconnect" href="https://fonts.gstatic.com/">
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&amp;display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Mulish:wght@400;500;600;700;800;900&amp;display=swap"
		rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Niramit:wght@400;500;600;700&amp;display=swap"
		rel="stylesheet">

	@stack('js')
	@yield('js')
	@include('frontend.layouts.partials.alert')
	@include('frontend.components.alert')
</body>

</html>