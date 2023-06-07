@extends('frontend.layouts.default')

@section('content')
    <div class="breadcrumb_background" style="background-image: url({{ Voyager::image(setting('site.breadcrumb')) }})">
        <div class="title_full">
            <div class="container a-center">
                <h1 class="title_page">Đặt lịch</h1>
            </div>
        </div>
        <section class="bread-crumb">
            <span class="crumb-border"></span>
            <div class="container">
                <div class="row">
                    <div class="col-12 a-left">
                        <ul class="breadcrumb">
                            <li class="home">
                                <a href="{{route('home')}}"><span>Trang chủ</span></a>
                                <span class="mr_lr">&nbsp;<svg aria-hidden="true" focusable="false" data-prefix="fas"
                                        data-icon="angle-right" role="img" xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 256 512" class="svg-inline--fa fa-angle-right fa-w-8">
                                        <path fill="currentColor"
                                            d="M224.3 273l-136 136c-9.4 9.4-24.6 9.4-33.9 0l-22.6-22.6c-9.4-9.4-9.4-24.6 0-33.9l96.4-96.4-96.4-96.4c-9.4-9.4-9.4-24.6 0-33.9L54.3 103c9.4-9.4 24.6-9.4 33.9 0l136 136c9.5 9.4 9.5 24.6.1 34z"
                                            class=""></path>
                                    </svg>&nbsp;</span>
                            </li>

                            <li><strong><span>Đặt lịch</span></strong></li>

                        </ul>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <section class="main-cart-page main-container col1-layout">
        <div class="main container cartpcstyle">
            <div class="wrap_background_aside padding-bottom-40">
                <div class="header-cart">
                    <h3 class="title_cart">
                        <span>Dịch vụ</span>
                    </h3>
                    <div class="header-cart title_cart_pc hidden-sm hidden-xs">
                    </div>
                </div>
                <div class="col-main cart_desktop_page cart-page">
                    <div class="cart page_cart hidden-xs  row">
                        <?php
                            $content = Cart::content();
                            // dd($content);
                        ?>
                        @if(empty($content))
                        <h1>Chưa đặt dịch vụ</h1>
                        @else
                        <form  method="post" novalidate=""
                            class="formcartpage col-lg-12 col-md-12 margin-bottom-0">
                            <div class="bg-scroll">
                                <div class="cart-thead">
                                    <div style="width: 52%" class="a-left">Tên dịch vụ</div>
                                    <div style="width: 17%" class="a-center">Đơn giá</div>
                                    <div style="width: 18%" class="a-center">Số lượng</div>
                                    <div style="width: 13%" class="a-center">Tổng tiền</div>
                                    
                                </div>
                                <div class="cart-tbody">
                                    @foreach($content as $item)
                                        <div class="item-cart productid-44536805">
                                            <div style="width: 19%" class="image">
                                                <a class="product-image a-left" title="Ống Nhựa PVC Panasonic SGH672"
                                                    href="/ong-nhua-pvc-panasonic">
                                                    <img width="75" height="auto" alt="" src="{{ Voyager::image($item->options->image) }}">
                                                        
                                                </a>
                                            </div>
                                            <div style="width: 33%" class="a-left contentcart">
                                                <h3 class="product-name"> <a class="text2line"
                                                        href="/ong-nhua-pvc-panasonic"
                                                        title="Ống Nhựa PVC Panasonic SGH672">{{$item->name}}</a> </h3>
                                                <a class="remove-itemx remove-item-cart" title="Xóa" href="{{route('delete-cart',$item->rowId)}}"
                                                    data-id="44536805">
                                                    <span><svg aria-hidden="true" focusable="false" data-prefix="fas"
                                                            data-icon="times" role="img"
                                                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 352 512"
                                                            class="svg-times svg-inline--fa fa-times fa-w-11">
                                                            <path fill="currentColor"
                                                                d="M242.72 256l100.07-100.07c12.28-12.28 12.28-32.19 0-44.48l-22.24-22.24c-12.28-12.28-32.19-12.28-44.48 0L176 189.28 75.93 89.21c-12.28-12.28-32.19-12.28-44.48 0L9.21 111.45c-12.28 12.28-12.28 32.19 0 44.48L109.28 256 9.21 356.07c-12.28 12.28-12.28 32.19 0 44.48l22.24 22.24c12.28 12.28 32.2 12.28 44.48 0L176 322.72l100.07 100.07c12.28 12.28 32.2 12.28 44.48 0l22.24-22.24c12.28-12.28 12.28-32.19 0-44.48L242.72 256z"
                                                                class=""></path>
                                                        </svg>&nbsp;Xóa</span>
                                                </a>
                                            </div>
                                            <div style="width: 17%" class="a-center">
                                                <span class="cart-prices">
                                                    <span class="prices">{{number_format($item->price)}}đ</span>
                                                </span>
                                            </div>
                                            <div style="width: 18%" class="a-center">
                                                <div class="input_qty_pr">
                                                    <input type="text" maxlength="3" readonly="" min="0"
                                                        class="check_number_here input-text number-sidebar input_pop input_pop qtyItem44536805"
                                                        id="qtyItem44536805" name="Lines" size="4"
                                                        value="{{$item->qty}}">    
                                                </div>
                                            </div>
                                            <div style="width: 13%;align-items: flex-end;padding-right: 0;"
                                                class="a-center">
                                                <span class="cart-price">
                                                    <span class="price">
                                                        <?php
                                                            $subtotal = $item->price * $item->qty
                                                            
                                                        ?>
                                                    
                                                        {{number_format($subtotal)}}đ
                                                    </span>
                                                </span>
                                            </div>
                                        </div>
                                    @endforeach 
                                </div>
                            </div>
                        </form>
                        @endif

                        <div class="col-lg-12 col-md-12">
                            <div class="section bg_cart shopping-cart-table-total">
                                <div class="table-total col-lg-4 col-lg-offset-8 col-xl-4 col-xl-offset-8">
                                    <table class="table">
                                        <tbody>
                                            <tr>
                                                <td coldspan="20" class="total-text">Tổng tiền: </td>
                                                <td class="txt-right totals_price price_end f-right">{{Cart::subtotal()}}₫</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-12 col-md-12">
                            <div class="f-right section continued">
                                <a href="{{route('confirm')}}" class="btn-checkout-cart button_checkfor_buy">Xác nhận dịch vụ</a>
                                <a href="{{route('services')}}" class="form-cart-continue">Thêm dịch vụ khác</a>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <div class="wrap_background_aside padding-top-15 margin-bottom-40 padding-left-0 padding-right-0 cartmbstyle">
            <div class="cart-mobile container">
                <form action="https://template-dori.mysapo.net/cart" method="post" novalidate="" class="margin-bottom-0">
                    <div class="header-cart">

                        <div class="title-cart">
                            <h3>Dịch vụ</h3>
                        </div>
                    </div>
                    
                    <div class="header-cart-content">
                        <div class="cart_page_mobile content-product-list">
                            @foreach($content as $item)
                            <div class="item-product item productid-44536805 ">
                                <div class="item-product-cart-mobile">
                                    <a href="/ong-nhua-pvc-panasonic">
                                    </a><a class="product-images1" href="" title="Ống Nhựa PVC Panasonic SGH672">
                                        <img width="80" height="150"
                                            src="{{ Voyager::image($item->options->image) }}"
                                            alt="Ống Nhựa PVC Panasonic SGH672">
                                    </a>

                                </div>
                                <div class="title-product-cart-mobile">
                                    <h3>
                                        <a href="/ong-nhua-pvc-panasonic" title="Ống Nhựa PVC Panasonic SGH672">{{$item->name}}</a>
                                    </h3>
                                    <p>
                                        Giá: <span>{{number_format($item->price)}}đ</span>
                                    </p>
                                </div>
                                <div class="select-item-qty-mobile">
                                    <div class="txt_center">
                                        <input class="variantID" type="hidden" name="variantId" value="44536805">
                                        
                                        <input type="text" maxlength="3" min="1"
                                            class="input-text number-sidebar qtyMobile44536805" id="qtyMobile44536805"
                                            name="Lines" size="4" value="1">
                                       
                                    </div>
                                    <a class="button remove-item remove-item-cart" href="{{route('delete-cart',$item->rowId)}}"
                                        data-id="44536805">Xoá</a>
                                </div>
                            </div>
                            @endforeach

                        </div>
                        <div class="header-cart-price">
                            <div class="title-cart">
                                <h3 class="text-xs-left">Tổng tiền</h3>
                                <a class="text-xs-right  totals_price_mobile">{{Cart::subtotal()}}₫</a>
                            </div>
                            <div class="checkout">
                                <a href="{{route('confirm')}}"><button class="btn-proceed-checkout-mobile" title="Tiến hành thanh toán" type="button">
                                    <span>Xác nhận đặt lịch</span></button></a>
                                <a href="{{route('services')}}"><button class="btn btn-white f-left" title="Tiếp tục mua hàng" type="button">                              
                                    <span>Thêm dịch vụ khác</span></a>
                                </button>
                            </div>
                        </div>

                    </div>
                </form>
            </div>
        </div>
    </section>
@endsection
