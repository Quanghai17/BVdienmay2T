@extends('frontend.layouts.default')

@section('content')
    <div class="breadcrumb_background">
        <div class="title_full">
            <div class="container a-center">
                <h1 class="title_page">Tất cả sản phẩm</h1>
            </div>
        </div>
        <section class="bread-crumb">
            <span class="crumb-border"></span>
            <div class="container">
                <div class="row">
                    <div class="col-12 a-left">
                        <ul class="breadcrumb">
                            <li class="home">
                                <a href="../index.html"><span>Trang chủ</span></a>
                                <span class="mr_lr">&nbsp;<svg aria-hidden="true" focusable="false" data-prefix="fas"
                                        data-icon="angle-right" role="img" xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 256 512" class="svg-inline--fa fa-angle-right fa-w-8">
                                        <path fill="currentColor"
                                            d="M224.3 273l-136 136c-9.4 9.4-24.6 9.4-33.9 0l-22.6-22.6c-9.4-9.4-9.4-24.6 0-33.9l96.4-96.4-96.4-96.4c-9.4-9.4-9.4-24.6 0-33.9L54.3 103c9.4-9.4 24.6-9.4 33.9 0l136 136c9.5 9.4 9.5 24.6.1 34z"
                                            class=""></path>
                                    </svg>&nbsp;</span>
                            </li>


                            <li><strong><span> Tất cả sản phẩm</span></strong></li>


                        </ul>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <div class="section wrap_background">
        <div class="container ">
            <div class="base-sidebar-collection">
                <div class="bg_collection section">
                    <div class="row">
                        <div class="main_container collection col-xl-12 col-lg-12 col-md-12 col-sm-12">

                            <h2 class="collection-title">
                                Dịch vụ của chúng tôi
                            </h2>
                         

                            <script>
                                window.addEventListener('DOMContentLoaded', (event) => {
                                    var swiperBannerCol = new Swiper('.swiper_col', {
                                        slidesPerView: 1.15,
                                        spaceBetween: 13,
                                        slidesPerGroup: 1,
                                        loop: false,
                                        navigation: {
                                            nextEl: '.swiper_col .next_col',
                                            prevEl: '.swiper_col .prev_col',
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
                                                slidesPerView: 2,
                                                spaceBetween: 13
                                            },
                                            1024: {
                                                slidesPerView: 1.15,
                                                spaceBetween: 13
                                            },
                                            1200: {
                                                slidesPerView: 1.15,
                                                spaceBetween: 13
                                            }
                                        }
                                    });
                                });
                            </script>
                            <div class="category-products products">
                                <div class="sortby clearfix base-sort-category">
                                </div>
                                <section class="products-view products-view-grid collection_reponsive list_hover_pro">
                                    <div class="row content-col">
                                        
                                        @foreach ($services as $service)
                                        <div class="col-6 col-sm-6 col-md-4 col-lg-4 col-xl-4 product-col">
                                            <div class="item_product_main" style="border: 1px solid #e5e5e5; margin-bottom: 20px;">
                                                {{-- @dd($service->title); --}}
                                                <form class="variants product-action" enctype="multipart/form-data">
                                                    <input type="hidden" value="{{$service->id}}" class="cart_product_id_{{$service->id}}">
                                                    <input type="hidden" value="{{$service->title}}" class="cart_product_name_{{$service->id}}">
                                                    <input type="hidden" value="{{$service->price}}" class="cart_product_price_{{$service->id}}">
                                                    <input type="hidden" value="1" class="cart_product_qty_{{$service->id}}">
                                                    @csrf
                                                    <div class="product-thumbnail">
                                                        <a class="image_thumb scale_hover"
                                                            href="{{ route('services.show', $service->slug) }}"
                                                            title="{{$service->title}}">
                                                            <img class="lazyload" 
                                                                src="{{ Voyager::image($service->image) }}"
                                                                data-src="{{ Voyager::image($service->image) }}"
                                                                alt="{{$service->title}}">
                                                    </a>
                                                    </div>
                                                    <div class="product-info">
                                                        <h3 class="product-name"><a style="font-weight: 900;"
                                                                href="{{ route('services.show', $service->slug) }}"
                                                                title="{{$service->title}}">{{$service->title}}</a></h3>
                                                        <div class="price-box">
                                                            {{number_format($service->price)}}đ
                                                        </div>
                                                        {{-- <button class="add-to-cart" >
                                                            thêm
                                                        </button> --}}
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                        @endforeach
                                    </div>
                                </section>
                            </div>
                        </div>
                      
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('js')
<script>
    $(document).ready(function(){
        // swal("Hello world!");
        $('.add-to-cart').click(function(){
             var id = $(this).data('id');
             var cart_id = $('.cart_product_id_' + id).val();
             var cart_name = $('.cart_product_name_' + id).val();
             var cart_price = $('.cart_product_price_' + id).val();
             var cart_qty = $('.cart_product_qty_' + id).val();
             var _token = $('input[name= "_token"]').val();
           
            //  alert( cart_qty );
             $.ajax({
               alert(1);
                url: '{{url('/add-cart-ajax')}}',
                method: 'POST',
                data: {cart_id: cart_id, cart_name: cart_name, cart_price:cart_price, cart_qty:cart_qty, _token: _token},
                success: function(data){
                    alert(data);
                }
             });

            
        });
    });
</script>

@endsection
