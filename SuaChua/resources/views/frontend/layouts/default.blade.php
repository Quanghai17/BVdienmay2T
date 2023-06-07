<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sửa chữa 24h</title>
    <!-- favicon -->
    <link rel="icon" href="{{ asset('assets/img/favicon.png') }}" sizes="20x20" type="image/png">
    
    	<!-- Build Main CSS -->

	<link rel="icon" href="{{ asset('assets/logo.png') }}"
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
	<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

	{{-- <script>
		$(document).ready(function(){
			// swal("Hello world!");
			$('.add-to-cart').click(function(){
				swal("Hello world!");
			});
			
		});
	</script> --}}
	{{-- <script>
		$(document).ready(function() {
		  $('.add_to_cart').click(function(){
			 var id = $(this).data('id_product');
			 var cart_product_id = $('.cart_product_id_' + id).val();
			 var cart_product_title = $('.cart_product_name_' + id).val();
			 alert(cart_product_title);
		  })
		 
		});
	  </script> --}}
	@stack('js')
	@yield('js')
	@include('frontend.layouts.partials.alert')
</body>

</html>