@extends('frontend.layouts.default')

@section('content')
    <section class="awe-section-1">
        <div class="section_slider swiper-container">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <a href="#" class="clearfix" title="Slider 1">
                        <picture>
                            <source media="(min-width: 1200px)" srcset="{{ Voyager::image($homeBanners->image) }}">
                            <source media="(min-width: 992px)" srcset="{{ Voyager::image($homeBanners->image) }}">
                            <source media="(min-width: 569px)" srcset="{{ Voyager::image($homeBanners->image) }}">
                            <source media="(max-width: 480px)" srcset="{{ Voyager::image($homeBanners->image) }}">
                            <img width="1920" height="700" src="{{ Voyager::image($homeBanners->image) }}"
                                alt="Slider 1" class="img-responsive center-block" />
                        </picture>
                    </a>
                </div>
            </div>
        </div>
        <script>
            window.addEventListener('DOMContentLoaded', (event) => {
                var swiperSlider = new Swiper('.section_slider', {
                    autoplay: false,
                    navigation: {
                        nextEl: '.next_slider',
                        prevEl: '.prev_slider',
                    },
                });
            });
        </script>
    </section>

    <section class="awe-section-2">
        <section class="section_about clearfix lazyload" data-src="{{ asset('assets/bg_about.png') }}">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 col-lg-6 col-12">
                        <div class="image_left_about">
                            <img class="imageload lazyload" src="{{ Voyager::image($about->image) }}"
                                data-src="{{ Voyager::image($about->image) }}" alt="">
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-12">
                        <div class="heading clearfix">
                            <h2>
                                {{ $about->title }}
                            </h2>
                            <p class="text_small">{{ $about->excerpt }}</p>
                        </div>
                        <div class="swiper_about swiper-container">
                            <div class="swiper-wrapper">




                                <div class="col-item-srv swiper-slide">
                                    <div class="service_item_ed">
                                        <span class="iconx">
                                            <img alt="Dịch vụ nhanh chóng" class="lazyload"
                                                src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC"
                                                data-src="{{ asset('assets/icon_about_1.png') }}" />
                                        </span>
                                        <div class="content_srv">
                                            <span class="title_service">Dịch vụ nhanh chóng</span>
                                            <span class="content_service">Hỗ trợ khách hàng ngay khi khách hàng liên lạc
                                                với chúng tôi</span>
                                        </div>
                                    </div>
                                </div>




                                <div class="col-item-srv swiper-slide">
                                    <div class="service_item_ed">
                                        <span class="iconx">
                                            <img alt="Hỗ trợ 24/7" class="lazyload"
                                                src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC"
                                                data-src="{{ asset('assets/icon_about_2.png') }}" />
                                        </span>
                                        <div class="content_srv">
                                            <span class="title_service">Hỗ trợ 24/7</span>
                                            <span class="content_service">Thời gian làm việc chính từ 7h - 21h hằng
                                                ngày</span>
                                        </div>
                                    </div>
                                </div>




                                <div class="col-item-srv swiper-slide">
                                    <div class="service_item_ed">
                                        <span class="iconx">
                                            <img alt="Bảo hành chu đáo" class="lazyload"
                                                src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC"
                                                data-src="{{ asset('assets/icon_about_3-1.png') }}" />
                                        </span>
                                        <div class="content_srv">
                                            <span class="title_service">Bảo hành chu đáo</span>
                                            <span class="content_service">Tất cả các trường hợp phát sinh lỗi do chúng
                                                tôi, Quý khách sẽ được hỗ trợ miễn phí</span>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="swiper-pagination"></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <script>
            var swiperService = new Swiper('.swiper_about', {
                slidesPerView: 1,
                spaceBetween: 0,
                touchRatio: 0,
                slidesPerColumnFill: 'row',
                slidesPerColumn: 3,
                pagination: {
                    el: '.section_about .swiper-pagination',
                    clickable: true,
                },
                breakpoints: {
                    300: {
                        slidesPerView: 1,
                        slidesPerColumn: 1,
                        touchRatio: 1,
                        slidesPerColumnFill: 'column',
                        spaceBetween: 0
                    },
                    640: {
                        slidesPerView: 1,
                        slidesPerColumn: 1,
                        touchRatio: 1,
                        slidesPerColumnFill: 'column',
                        spaceBetween: 0
                    },
                    768: {
                        slidesPerView: 1,
                        slidesPerColumn: 1,
                        touchRatio: 1,
                        slidesPerColumnFill: 'column',
                        spaceBetween: 0
                    },
                    1024: {
                        slidesPerView: 1,
                        spaceBetween: 0
                    },
                    1200: {
                        slidesPerView: 1,
                        spaceBetween: 0
                    }
                }
            });
        </script>
    </section>

    <section class="awe-section-4">
        <section class="section_service clearfix lazyload" data-src="{{ asset('assets/bg-service9889.jpg') }}">
            <div class="container">
                <div class="title_modules a-center">
                    <h2>
                        <span>Dịch vụ chúng tôi cung cấp</span>
                    </h2>
                    <p class="text_small">Chúng tôi cung cấp các dịch vụ tốt nhất cho khách hàng, nhằm phục vụ nhu cầu
                        khách hàng</p>
                </div>
                <div class="swiper_service swiper-container">
                    <div class="swiper-wrapper">
                        @foreach ($services as $service)
                            <div class="item swiper-slide">
                                <a class="img_service" href="{{ route('services.show', $service->slug) }}"
                                    title="Thiết bị điện">
                                    <img class="imageload lazyload" style="height: 215px;"
                                        src="{{ Voyager::image($service->image) }}"
                                        data-src="{{ Voyager::image($service->image) }}" alt="Thiết bị điện">
                                </a>
                                <a href="{{ route('services.show', $service->slug) }}">
                                    <h3 class="title_service">{{ $service->title }}</h3>
                                </a>
                                <p class="content_service">{{ $service->desc }}</p>
                                {{-- <button name="add-to-cart">thêm</button> --}}
                            </div>
                        @endforeach


                    </div>
                    <div class="swiper-pagination"></div>
                </div>
            </div>
        </section>


        <script>
            window.addEventListener('DOMContentLoaded', (event) => {
                var swiperService = new Swiper('.swiper_service', {
                    slidesPerView: 4,
                    spaceBetween: 30,
                    pagination: {
                        el: '.section_service .swiper-pagination',
                        clickable: true,
                    },
                    breakpoints: {
                        300: {
                            slidesPerView: 1,
                            spaceBetween: 0
                        },
                        640: {
                            slidesPerView: 2,
                            spaceBetween: 30
                        },
                        768: {
                            slidesPerView: 3,
                            spaceBetween: 30
                        },
                        1024: {
                            slidesPerView: 3,
                            spaceBetween: 30
                        },
                        1200: {
                            slidesPerView: 3,
                            spaceBetween: 30
                        }
                    }
                });
            });
        </script>
    </section>

    <section class="awe-section-5">
        <section class="section_banner clearfix">
            <div class="container">
                <div class="row">

                    @php
                        $images = json_decode($banner_middle->multiImage);
                        //  dd($images);
                    @endphp
                    <div class="col-xl-6 col-lg-6 col-md-6 col-12">
                        <div class="banner-img">
                            <a href="#" title="Banner 1">
                                <img class="imageload lazyload" src="{{ Voyager::image($images[0]) }}"
                                    {{-- data-src="{{ Voyager::image($images) }}" --}} alt="Banner 1">
                            </a>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-6 col-12">
                        <div class="banner-img">
                            <a href="#" title="Banner 1">
                                <img class="imageload lazyload" src="{{ Voyager::image($images[1]) }}"
                                    {{-- data-src="{{ Voyager::image($images) }}" --}} alt="Banner 1">
                            </a>
                        </div>
                    </div>

                </div>
            </div>
        </section>
    </section>


    <section class="awe-section-8">



        <div class="section_blog clearfix">
            <div class="container">
                <div class="title_modules a-center">
                    <h2>
                        <a href="tin-tuc.html" title="Nhật ký sửa chữa">Tin tức - Mẹo vặt</a>
                    </h2>
                    <p>
                        Những mẹo hay có thể giúp ích cho bạn và gia đình hằng ngày
                    </p>
                </div>
                <div class="row">
                    @foreach ($posts as $post)
                        <div class="col-lg-4 col-md-6 col-12 col-blog">
                            <div class="item">
                                <div class="blogwp clearfix">
                                    <div class="blog_thumbnail">
                                        <a class="image-blog" href="{{ route('posts.show', $post->slug) }}"
                                            title="{{ $post->title }}">

                                            <img width="480" height="356" style="height: 206px"
                                                src="{{ Voyager::image($post->image) }}"
                                                data-src="{{ Voyager::image($post->image) }}" alt="{{ $post->title }}"
                                                class="imageload lazyload img-responsive" />

                                        </a>
                                    </div>
                                    <div class="content_blog clearfix">
                                        <h3>
                                            <a href="{{ route('posts.show', $post->slug) }}"
                                                title="{{ $post->title }}">{{ $post->title }}</a>
                                        </h3>
                                        <div class="blog-bottom">
                                            <div class="post-date">
                                                <div class="time-post">
                                                    <svg width="11" height="11" viewBox="0 0 11 11"
                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M5.5 0C2.46718 0 0 2.46718 0 5.5C0 8.53282 2.46718 11 5.5 11C8.53282 11 11 8.53282 11 5.5C11 2.46718 8.53282 0 5.5 0ZM8.11572 8.34483C8.02634 8.43421 7.90902 8.47919 7.79169 8.47919C7.67437 8.47919 7.55696 8.43421 7.46767 8.34483L5.17597 6.05322C5.08978 5.96754 5.04169 5.85105 5.04169 5.72919V2.75C5.04169 2.49655 5.24697 2.29169 5.5 2.29169C5.75303 2.29169 5.95831 2.49655 5.95831 2.75V5.53944L8.11572 7.69678C8.2949 7.87604 8.2949 8.16566 8.11572 8.34483Z"
                                                            fill="#75808C" />
                                                    </svg>
                                                    {{-- @dd($post); --}}
                                                    {{ $post->created_at->format('d/m/Y') }}
                                                </div>
                                            </div>
                                        </div>

                                        <p class="justify"
                                            style="
										display: -webkit-box;
										-webkit-line-clamp: 2;
										-webkit-box-orient: vertical;  
										overflow: hidden;
									  ">
                                            {{ $post->excerpt }}
                                        </p>
                                        <a class="btn_see" href="{{ route('posts.show', $post->slug) }}"
                                            title="Xem thêm">Xem thêm <svg width="9" height="9"
                                                viewBox="0 0 9 9" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <g clip-path="url(#clip0)">
                                                    <path
                                                        d="M8.92311 4.29963L6.22325 1.29979C6.16566 1.23619 6.08526 1.2002 6.00006 1.2002H4.20016C4.08197 1.2002 3.97457 1.26979 3.92598 1.37779C3.87798 1.48638 3.89778 1.61297 3.97697 1.70057L6.49624 4.50002L3.97697 7.29887C3.89778 7.38706 3.87738 7.51365 3.92598 7.62165C3.97457 7.73024 4.08197 7.79984 4.20016 7.79984H6.00006C6.08526 7.79984 6.16566 7.76324 6.22325 7.70084L8.92311 4.70101C9.0257 4.58701 9.0257 4.41302 8.92311 4.29963Z"
                                                        fill="#2A3E55" />
                                                    <path
                                                        d="M5.02327 4.29963L2.32341 1.29979C2.26581 1.23619 2.18542 1.2002 2.10022 1.2002H0.300321C0.182127 1.2002 0.0747333 1.26979 0.0261359 1.37779C-0.0218614 1.48638 -0.00206252 1.61297 0.0771332 1.70057L2.5964 4.50002L0.0771332 7.29887C-0.00206252 7.38706 -0.0224614 7.51365 0.0261359 7.62165C0.0747333 7.73024 0.182127 7.79984 0.300321 7.79984H2.10022C2.18542 7.79984 2.26581 7.76324 2.32341 7.70084L5.02327 4.70101C5.12586 4.58701 5.12586 4.41302 5.02327 4.29963Z"
                                                        fill="#2A3E55" />
                                                </g>
                                                <defs>
                                                    <rect width="9" height="9" fill="white" />
                                                </defs>
                                            </svg>
                                        </a>

                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach



                </div>
            </div>
        </div>
        <script>
            var swiper = new Swiper('.swiper_blog', {
                slidesPerView: 3,
                spaceBetween: 47,
                slidesPerGroup: 1,
                autoHeight: true,
                pagination: {
                    el: '.swiper-pagination',
                    clickable: true,
                },
                navigation: {
                    nextEl: '.swiper-button-next',
                    prevEl: '.swiper-button-prev',
                },
                breakpoints: {
                    300: {
                        slidesPerView: 1,
                        spaceBetween: 15
                    },
                    640: {
                        slidesPerView: 1,
                        spaceBetween: 15
                    },
                    768: {
                        slidesPerView: 2,
                        spaceBetween: 30
                    },
                    1024: {
                        slidesPerView: 3,
                        spaceBetween: 30
                    },
                    1200: {
                        slidesPerView: 3,
                        spaceBetween: 43
                    }
                }
            });
        </script>
    </section>

    <section class="awe-section-9">
        <div class="section_question">
            <div class="container">
                <div class="title_modules a-center">
                    <h2>
                        <span>Câu hỏi thường gặp</span>
                    </h2>
                    <p>
                        Thắc mắc của khách hàng chúng tôi sẽ trả lời nhanh nhất trong vòng 1 phút
                    </p>
                </div>
                <div class="row">
                    <div class="col-lg-6 col-12 z-index">
                        <div class="block-content">

                            {{-- <div class="question ">
                                <h4>
                                    Quý khách cần đặt dịch vụ, liên hệ cho chúng tôi bằng các hình thức nào?
                                    <i class=""></i>
                                </h4>
                                <p>
                                    1. Quý khách có thể gọi điện thoại trực tiếp tới các số điện thoại: 0123456789 hoặc
                                    0123456789.<br>
                                    2. Gửi tin nhắn vào số 0123456789 hoặc 0123456789. Quý khách cho địa chỉ, số điện
                                    thoại liên hệ, dịch vụ Bạn đang cần, Chúng tôi sẽ chủ động liên hệ lại.<br>
                                    3. Gửi yêu cầu vào ổ bên phải của quý khách. Chúng tôi sẽ chủ động liên hệ đến quý
                                    khách.
                                </p>
                            </div> --}}

                            @foreach ($questions as $item)
							
                                <div class="question">
                                    <h4>
                                        {{ $item->questions }}
                                        <i class=""></i>
                                    </h4>
                                    <p>
                                        {{ $item->answer }}
                                    </p>
                                </div>
                            @endforeach

                        </div>
                    </div>
                    <div class="col-lg-6 col-12 d-none d-md-block">
                        <div class="block_img lazyload"
                            data-src="//bizweb.dktcdn.net/100/425/159/themes/894862/assets/bg-question-right.png?1676275680316">

                        </div>
                    </div>
                </div>
            </div>
        </div>

        <script>
            $(".section_question h4").click(function() {
                $('.question').removeClass('visited');
                if ($(this).parent().hasClass('active')) {
                    $(this).parent().removeClass("active");
                } else {
                    $(".section_question .question").removeClass("active");
                    $(this).parent().addClass("active");
                }
            });
        </script>
    </section>
@endsection
