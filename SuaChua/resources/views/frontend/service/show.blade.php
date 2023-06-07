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
    <link rel="preload"
        href="{{ asset('assets/bizweb.dktcdn.net/100/336/042/themes/760441/assets/base.scss9d02.css') }}"
        as="style">
    <link rel="icon" href="{{ asset('assets/logo.png') }}" type="image/x-icon" />

    <link rel="preload" as='style' type="text/css"
    href="{{ asset('assets/header.scss9889.css') }}">

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
    <link href="{{ asset('assets/bootstrap9889.css') }}" rel="stylesheet"
        type="text/css" media="all" />




    <link href="{{ asset('assets/product_style.scss9889.css') }}"
        rel="stylesheet" type="text/css" media="all" />
    <link href="{{ asset('assets/quickviews.scss9889.css') }}"
        rel="stylesheet" type="text/css" media="all" />



    <link href="{{ asset('assets/responsive.scss9889.css') }}"
        rel="stylesheet" type="text/css" media="all" />
    <link href="{{ asset('assets/popup.scss9889.css') }}" rel="stylesheet"
        type="text/css" media="all" />
    <link href="{{ asset('assets/main.scss9889.css') }}" rel="stylesheet"
        type="text/css" media="all" />

    <link rel="preload" as="script"
        href="{{ asset('assets/jquery.min9889.js') }}" />
    <script src="{{ asset('assets/jquery.min9889.js') }}"
        type="text/javascript"></script>
    <!-- Bizweb javascript customer -->
    <link rel="preload" as="script" href="{{ asset('assets/swiper.min9889.js') }}" />
    <script src="{{ asset('assets/swiper.min9889.js') }}" type="text/javascript"></script>

</head>

<body>
    <div class="opacity_menu"></div>

    @include('frontend.layouts.partials.header')
    <div class="bodywrap">
        <div class="breadcrumb_background">
            <div class="title_full">
                <div class="container a-center">
                    <span class="title_page">Dịch vụ của chúng tôi</span>
                </div>
            </div>
            <section class="bread-crumb">
                <span class="crumb-border"></span>
                <div class="container">
                    <div class="row">
                        <div class="col-12 a-left">
                            <ul class="breadcrumb">
                                <li class="home">
                                    <a href="index.html"><span>Trang chủ</span></a>
                                    <span class="mr_lr">&nbsp;<svg aria-hidden="true" focusable="false"
                                            data-prefix="fas" data-icon="angle-right" role="img"
                                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 512"
                                            class="svg-inline--fa fa-angle-right fa-w-8">
                                            <path fill="currentColor"
                                                d="M224.3 273l-136 136c-9.4 9.4-24.6 9.4-33.9 0l-22.6-22.6c-9.4-9.4-9.4-24.6 0-33.9l96.4-96.4-96.4-96.4c-9.4-9.4-9.4-24.6 0-33.9L54.3 103c9.4-9.4 24.6-9.4 33.9 0l136 136c9.5 9.4 9.5 24.6.1 34z"
                                                class=""></path>
                                        </svg>&nbsp;</span>
                                </li>


                                <li>
                                    <a class="changeurl" href="thiet-bi-dien.html"><span>Thiết bị điện</span></a>
                                    <span class="mr_lr">&nbsp;<svg aria-hidden="true" focusable="false"
                                            data-prefix="fas" data-icon="angle-right" role="img"
                                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 512"
                                            class="svg-inline--fa fa-angle-right fa-w-8">
                                            <path fill="currentColor"
                                                d="M224.3 273l-136 136c-9.4 9.4-24.6 9.4-33.9 0l-22.6-22.6c-9.4-9.4-9.4-24.6 0-33.9l96.4-96.4-96.4-96.4c-9.4-9.4-9.4-24.6 0-33.9L54.3 103c9.4-9.4 24.6-9.4 33.9 0l136 136c9.5 9.4 9.5 24.6.1 34z"
                                                class=""></path>
                                        </svg>&nbsp;</span>
                                </li>

                                <li><strong><span>{{$service->title}}</span></strong></li>

                            </ul>
                        </div>
                    </div>
                </div>
            </section>
        </div>

        <section class="product details-main" itemscope itemtype="https://schema.org/Product">
            <form enctype="multipart/form-data" id="add-to-cart-form"  method="post" action="{{route('save-cart')}}"
                class="form_background form-inline margin-bottom-0">
                @csrf
                <input type="hidden" value="{{$service->id}}" name="id">
                <input type="hidden" value="1" name="qty">
                <div class="container">
                    <div class="section wrap-padding-15 wp_product_main">
                        <div class="details-product section">
                            <div class="row ">
                                <div
                                    class="product-detail-left product-images col-xs-12 col-sm-12 col-md-12 col-lg-6 col-xl-6">
                                    <div class="col_large_default large-image">
                                            <img class="checkurl img-responsive" id="img_01"
                                                src="{{ Voyager::image($service->image) }}"
                                                alt="Máy thổi hơi nóng Bosch GHG 18-60">
                                        </a>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 details-pro">
                                    <h1 class="title-product">{{$service->title}}</h1>
                                    <div class="price-box clearfix">
                                        <span class="special-price">
                                            <span class="price product-price">{{number_format($service->price)}}₫</span>
                                        </span>
                                    </div>
                                    <div class="form-product col-sm-12 clearfix">
                                        <div class="box-variant clearfix ">
                                            <input type="hidden" name="variantId" value="44540562" />
                                        </div>
                                        <div class="form-group form_button_details margin-top-0">
                                            <div class="form_product_content type1 ">
                                                <div class="btn-mua button_actions clearfix">
                                                    <button type="submit"
                                                        class="btn btn_base normal_button btn_add_cart add_to_cart btn-cart">
                                                        <span class="txt-main text_1">Đặt lịch sửa chữa</span>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
            <section class="section sec_tab ">
                <div class="container">
                    <div class="row">
                        <div class="tab_h col-xs-12 col-lg-12 col-sm-12 col-md-12">
                            <div class="section bg_white">

                                <!-- Nav tabs -->
                                <div class="product-tab e-tabs not-dqtab">
                                    <ul class="tabs tabs-title clearfix">

                                        <li class="tab-link" data-tab="tab-1">
                                            <h3><span>Mô tả quy trình</span></h3>
                                        </li>


                                        



                                    </ul>
                                    <div class="tab-float">

                                        <div id="tab-1" class="tab-content content_extab">
                                            <div class="rte product_getcontent">

                                                <div id="content">
                                                    <p>{!!$service->body!!}</p>
                                                </div>

                                            </div>
                                        </div>
                                        <div id="tab-2" class="tab-content content_extab">

                                            Nội dung tùy chỉnh viết ở đây
                                        </div>

                                    </div>
                                </div>

                            </div>
                        </div>

                    </div>
                </div>
            </section>
        </section>

        <script>
            var ww = $(window).width();
            var getLimit = 3;

            function validate(evt) {
                var theEvent = evt || window.event;
                var key = theEvent.keyCode || theEvent.which;
                key = String.fromCharCode(key);
                var regex = /[0-9]|\./;
                if (!regex.test(key)) {
                    theEvent.returnValue = false;
                    if (theEvent.preventDefault) theEvent.preventDefault();
                }
            }

            var selectCallback = function(variant, selector) {

                if (variant) {


                    var form = jQuery('#' + selector.domIdPrefix).closest('form');

                    for (var i = 0, length = variant.options.length; i < length; i++) {

                        var radioButton = form.find('.swatch[data-option-index="' + i + '"] :radio[value="' + variant
                            .options[i] + '"]');
                        if (radioButton.size()) {
                            radioButton.get(0).checked = true;
                        }
                    }
                }
                var addToCart = jQuery('.form-product .btn-cart.normal_button'),
                    group = jQuery('.form_product_content'),
                    form = jQuery('.form-product .button_actions'),
                    form2 = jQuery('.soluong'),
                    comparePrice = jQuery('.details-pro .old-price .product-price-old'),
                    comparePriceText = jQuery('.details-pro .old-price'),
                    discount = jQuery('.discount_'),
                    product_sku = jQuery('.details-pro .product-sku'),
                    productPrice = jQuery('.details-pro .special-price .product-price'),
                    qty = jQuery('.first_status .availabel'),
                    buynow = jQuery('.form-product .btn_buynow'),
                    sale = jQuery('.details-pro .old-price .product-price-old'),
                    comparePrice = jQuery('.details-pro .old-price .product-price-old'),
                    vat = jQuery('.form-group .vat');

                /* SKU */
                if (variant && variant.sku != "" && variant.sku != null) {
                    product_sku.html(variant.sku);
                } else {
                    product_sku.html('Đang cập nhật');
                };
                /*** VAT ***/
                if (variant) {
                    if (variant.taxable) {
                        $('.form-group').removeClass('hidden').find('.vat').text('(Đã bao gồm VAT)');
                    } else {
                        $('.form-group').removeClass('hidden').find('.vat').text('(Chưa bao gồm VAT)');
                    }
                }

                if (variant && variant.available) {
                    if (variant.inventory_management == "bizweb" || variant.inventory_management == "sapo") {
                        if (variant.inventory_quantity != 0) {
                            qty.html('<link itemprop="availability" href="http://schema.org/OutOfStock" />Còn hàng');
                        } else if (variant.inventory_quantity == '') {
                            qty.html('<link itemprop="availability" href="http://schema.org/InStock" />Hết hàng');
                        }
                    } else {
                        qty.html('<link itemprop="availability" href="http://schema.org/OutOfStock" />Còn hàng');
                    }

                    buynow.removeClass('hidden');
                    group.removeClass('hidden');
                    addToCart.html('<span class="txt-main">Thêm giỏ hàng</span>').removeAttr('disabled');
                    if (variant.price == 0) {
                        productPrice.html('Liên hệ');
                        comparePrice.hide();
                        form.addClass('hidden');
                        vat.addClass('hidden');
                        form2.addClass('hidden');
                        sale.removeClass('sale');
                        group.addClass('hidden');
                        discount.addClass('hidden');
                        comparePrice.hide();
                        comparePriceText.hide();
                        if (variant.inventory_management == "bizweb" || variant.inventory_management == "sapo") {
                            if (variant.inventory_quantity != 0) {
                                qty.html('<link itemprop="availability" href="http://schema.org/InStock" />Còn hàng');
                            } else if (variant.inventory_quantity == '') {
                                qty.html('<link itemprop="availability" href="http://schema.org/OutOfStock" />Hết hàng');
                            }
                        } else {
                            qty.html('<link itemprop="availability" href="http://schema.org/InStock" />Còn hàng');
                        }
                    } else {
                        form.removeClass('hidden');

                        // Also update and show the product's compare price if necessary

                    }

                } else {
                    addToCart.html('<span class="txt-main">Hết hàng</span>').attr('disabled', 'disabled');
                    qty.html('Hết hàng');
                    buynow.addClass('hidden');
                    form.removeClass('hidden');
                    form2.addClass('hidden');
                    group.removeClass('hidden');
                    vat.removeClass('hidden');


                }
                /*begin variant image*/
                if (variant && variant.image) {
                    var originalImage = jQuery(".large-image img");
                    var newImage = variant.image;
                    var element = originalImage[0];
                    Bizweb.Image.switchImage(newImage, element, function(newImageSizedSrc, newImage, element) {
                        jQuery(element).parents('a').attr('data-href', newImageSizedSrc);
                        jQuery(element).attr('src', newImageSizedSrc);
                        jQuery('.thumb_scroll img').attr('src', newImageSizedSrc);
                        if (ww >= 1200) {

                            $("#img_01").data('zoom-image', newImageSizedSrc).elevateZoom({
                                responsive: true,
                                gallery: 'gallery_02',
                                cursor: 'pointer',
                                galleryActiveClass: "active"
                            });
                            $("#img_01").bind("click", function(e) {
                                var ez = $('#img_02').data('elevateZoom');
                            });

                        }
                    });

                    setTimeout(function() {
                        $('.checkurl').attr('href', $(this).attr('src'));

                        if (ww >= 1200) {

                            $('.zoomContainer').remove();
                            $("#img_01").elevateZoom({
                                gallery: 'gallery_02',
                                zoomWindowWidth: 420,
                                zoomWindowHeight: 500,
                                zoomWindowOffetx: 10,
                                easing: true,
                                scrollZoom: false,
                                cursor: 'pointer',
                                galleryActiveClass: 'active',
                                imageCrossfade: true
                            });

                        }
                    }, 200);

                }
            };



            jQuery(function($) {


                // Add label if only one product option and it isn't 'Title'. Could be 'Size'.


                // Hide selectors if we only have 1 variant and its title contains 'Default'.

                $('.selector-wrapper').hide();

                $('.selector-wrapper').css({
                    'text-align': 'left',
                    'margin-bottom': '15px'
                });
            });

            jQuery('.swatch :radio').change(function() {
                var optionIndex = jQuery(this).closest('.swatch').attr('data-option-index');
                var optionValue = jQuery(this).val();
                jQuery(this)
                    .closest('form')
                    .find('.single-option-selector')
                    .eq(optionIndex)
                    .val(optionValue)
                    .trigger('change');
            });

            $(".dp-flex img").click(function(e) {
                e.preventDefault();
                var hr = $(this).attr('data-src');
                $('.checkurl ').attr('src', hr);
                $('.large-image a').attr('data-href', hr);
            });

            if (ww >= 1200) {

                $(document).ready(function() {
                    if ($(window).width() > 1200) {
                        $('#img_01').elevateZoom({
                            gallery: 'gallery_02',
                            zoomWindowWidth: 420,
                            zoomWindowHeight: 500,
                            zoomWindowOffetx: 10,
                            easing: true,
                            scrollZoom: true,
                            cursor: 'pointer',
                            galleryActiveClass: 'active',
                            imageCrossfade: true
                        });
                    }
                });

            }
            $("#img_02").click(function(e) {
                e.preventDefault();
                var hr = $(this).attr('src');
                $('#img_01').attr('src', hr);
                $('.large_image_url').attr('href', hr);
                $('#img_01').attr('data-zoom-image', hr);
            });


            /*For recent product*/
            var alias = 'may-thoi-hoi-nong-bosch-ghg-18-60';
            /*end*/
            if (ww >= 1200) {

                $(document).ready(function() {
                    $('#img_01').elevateZoom({
                        gallery: 'gallery_02',
                        zoomWindowWidth: 420,
                        zoomWindowHeight: 500,
                        zoomWindowOffetx: 10,
                        easing: true,
                        scrollZoom: true,
                        cursor: 'pointer',
                        galleryActiveClass: 'active',
                        imageCrossfade: true

                    });
                });

            }
            $('#gallery_00 img, .swatch-element label').click(function(e) {

                $('.checkurl').attr('href', $(this).attr('src'));


                if (ww >= 1200) {

                    setTimeout(function() {
                        $('.zoomContainer').remove();
                        $('#zoom_01').elevateZoom({
                            gallery: 'gallery_01',
                            zoomWindowWidth: 420,
                            zoomWindowHeight: 500,
                            zoomWindowOffetx: 10,
                            easing: true,
                            scrollZoom: true,
                            cursor: 'pointer',
                            galleryActiveClass: 'active',
                            imageCrossfade: true
                        });
                    }, 300);

                }
            });
            $(".not-dqtab").each(function(e) {
                $(this).find('.tabs-title li:first-child').addClass('current');
                $(this).find('.tab-content').first().addClass('current');

                $(this).find('.tabs-title li').click(function() {
                    if ($(window).width() > 315) {
                        if ($(this).hasClass('current')) {

                        } else {
                            var tab_id = $(this).attr('data-tab');
                            var url = $(this).attr('data-url');
                            $(this).closest('.e-tabs').find('.tab-viewall').attr('href', url);

                            $(this).closest('.e-tabs').find('.tabs-title li').removeClass('current');
                            $(this).closest('.e-tabs').find('.tab-content').removeClass('current');

                            $(this).addClass('current');
                            $(this).closest('.e-tabs').find("#" + tab_id).addClass('current');
                        }
                    } else {
                        var tab_id = $(this).attr('data-tab');
                        var url = $(this).attr('data-url');
                        $(this).closest('.e-tabs').find('.tab-viewall').attr('href', url);

                        $(this).closest('.e-tabs').find('.tabs-title li').removeClass('current');
                        $(this).closest('.e-tabs').find('.tab-content').removeClass('current');

                        $(this).addClass('current');
                        $(this).closest('.e-tabs').find("#" + tab_id).addClass('current');

                    }

                });
            });
        </script>

        <script>
            function scrollToxx() {
                $('html, body').animate({
                    scrollTop: $('.product-tab.e-tabs').offset().top
                }, 'slow');
                $('.product-tab .tab-link').removeClass('current');
                $('#tab-review').addClass('current');
                $('.tab-content').removeClass('current');
                $('.tab-review-c').addClass('current');
                return false;
            }


            $(document).ready(function(e) {
                var galleryThumbs = new Swiper('#gallery_02', {
                    spaceBetween: 13,
                    slidesPerView: 4,
                    navigation: {
                        nextEl: '.swiper-button-next',
                        prevEl: '.swiper-button-prev',
                    },
                    breakpoints: {
                        300: {
                            slidesPerView: 3,
                            spaceBetween: 10,
                        },
                        425: {
                            slidesPerView: 4,
                            spaceBetween: 10,
                        },
                        640: {
                            slidesPerView: 4,
                            spaceBetween: 10,
                        },
                        768: {
                            slidesPerView: 6,
                            spaceBetween: 15,
                        },
                        1024: {
                            slidesPerView: 3,
                            spaceBetween: 13,
                        },
                        1200: {
                            slidesPerView: 4,
                            spaceBetween: 13,
                        },
                    }
                });

                var galleryThumbs = new Swiper('.swiper_related', {
                    spaceBetween: 30,
                    slidesPerView: 4,
                    freeMode: true,
                    lazy: true,
                    watchSlidesVisibility: true,
                    watchSlidesProgress: true,
                    hashNavigation: true,
                    navigation: {
                        nextEl: '.swiper-button-next',
                        prevEl: '.swiper-button-prev',
                    },
                    breakpoints: {
                        300: {
                            slidesPerView: 2,
                            spaceBetween: 30,
                        },
                        500: {
                            slidesPerView: 2,
                            spaceBetween: 30,
                        },
                        640: {
                            slidesPerView: 2,
                            spaceBetween: 30,
                        },
                        768: {
                            slidesPerView: 3,
                            spaceBetween: 30,
                        },
                        1024: {
                            slidesPerView: 4,
                            spaceBetween: 30,
                        },
                    }
                });
                $('#gallery_02 img, .swatch-element label').click(function(e) {
                    e.preventDefault();
                    var ths = $(this).attr('data-image');
                    $('.large-image .checkurl').attr('src', ths);

                    $('.large-image .checkurl img').attr('src', ths);

                    /*** xử lý active thumb -- ko variant ***/
                    var thumbLargeimg = $('.details-product .large-image a').attr('href');
                    var thumMedium = $('#gallery_02 .owl-item .item a').find('img').attr('src');
                    var url = [];

                    $('#gallery_02 .owl-item .item').each(function() {
                        var srcImg = '';
                        $(this).find('a img').each(function() {
                            var current = $(this);
                            if (current.children().size() > 0) {
                                return true;
                            }
                            srcImg += $(this).attr('src');
                        });
                        url.push(srcImg);
                        var srcimage = $(this).find('a img').attr('src');
                        if (srcimage == thumbLargeimg) {
                            $(this).find('a').addClass('active');
                        } else {
                            $(this).find('a').removeClass('active');
                        }
                    });
                })

            });
        </script>

        @include('frontend.layouts.partials.footer')
    </div>

</body>

</html>
