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
                                <a href="index.html"><span>Trang chủ</span></a>
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
                        <form action="/cart" method="post" novalidate=""
                            class="formcartpage col-lg-12 col-md-12 margin-bottom-0">
                            <div class="bg-scroll">
                                <div class="cart-thead">
                                    <div style="width: 52%" class="a-left">Tên dịch vụ</div>
                                    <div style="width: 17%" class="a-center">Đơn giá</div>
                                    <div style="width: 18%" class="a-center">Số lượng</div>
                                    <div style="width: 13%" class="a-right">Tổng tiền</div>
                                </div>
                                <div class="cart-tbody">
                                    <?php
                                        $content = Cart::content();
                                    ?>
                                    {{-- @dd($content); --}}
                                    @foreach($content as $item)
                                    {{-- @dd($item->options->image) --}}
                                    <div class="item-cart productid-44536805">
                                        <div style="width: 19%" class="image">
                                            <a class="product-image a-left" title="Ống Nhựa PVC Panasonic SGH672"
                                                href="">
                                                <img width="75" height="auto" alt="" src="{{ Voyager::image($item->options->image) }}">
                                                    
                                            </a>
                                        </div>
                                        <div style="width: 33%" class="a-left contentcart">
                                            <h3 class="product-name"> <a class="text2line"
                                                    href=""
                                                    title="Ống Nhựa PVC Panasonic SGH672">{{$item->name}}</a> </h3>
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

                        <div class="col-lg-12 col-md-12">
                            <div class="section bg_cart shopping-cart-table-total">
                                <div class="table-total col-lg-4 col-lg-offset-8 col-xl-4 col-xl-offset-8">
                                    <table class="table">
                                        <tbody style="display: grid;">
                                            <tr>
                                                <td coldspan="20" class="total-text">Tạm tính: </td>
                                                <td class="txt-right totals_price price_end f-right">{{Cart::subtotal()}}₫</td>
                                            </tr>
                                            <tr>
                                                <td coldspan="20" class="total-text">Khuyến mãi: </td>
                                                <td class="txt-right totals_price price_end f-right">0₫</td>
                                            </tr>
                                            <tr>
                                                <td coldspan="20" class="total-text">Tổng tiền: </td>
                                                <td class="txt-right totals_price price_end f-right">{{Cart::subtotal()}}₫</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
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
                                    <a href="">
                                    </a><a class="product-images1" href="" title="Ống Nhựa PVC Panasonic SGH672">
                                        <img width="80" height="150"
                                            src="{{ Voyager::image($item->options->image) }}"
                                            alt="Ống Nhựa PVC Panasonic SGH672">
                                    </a>

                                </div>
                                <div class="title-product-cart-mobile">
                                    <h3>
                                        <a href="" title="Ống Nhựa PVC Panasonic SGH672">{{$item->name}}</a>
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
                                            name="Lines" size="4" value="{{$item->qty}}">
                                   
                                    </div>
                                </div>
                            </div>
                            @endforeach

                        </div>
                        <div class="header-cart-price">
                            <div class="title-cart">
                                <h3 class="text-xs-left">Tổng tiền</h3>
                                <a class="text-xs-right  totals_price_mobile">{{Cart::subtotal()}}₫</a>
                            </div>
                        </div>

                    </div>
                </form>
            </div>
        </div>
    </section>
    <section class="page">
        <div class="container">
            <div class="wrap_background_aside padding-bottom-40">
                <div class="row">
                    
                    <div class="col-xl-7 col-lg-6 col-12">
                        <div class="box_advisor_right">
                            <h3 class="title_advisor_5">
                                Điền thông tin cá nhân
                            </h3>
                            <p>
                                @foreach ($content as $key => $value)
                                    <?php
                                     $data = $value->name;
                                    //  dd($data);
                                    ?>
                                    {{$value->name}}
                                @endforeach
                            </p>
                           
                                
                           
                            {{-- @dd($content); --}}
                            <div id="pagelogin">
                                <form method="post" action="{{route('book')}}" id="contact" accept-charset="UTF-8">
                                    @csrf
                                    <input type="hidden" value="{{Cart::subtotal()}}" name="subtotal">
                                    <input type="hidden" value="dang-hen" name="status">
                                    <input type="hidden"  value="@foreach($content as $key => $value) {{$value->name}}, @endforeach"  name="services">

                                    <div class="form-signup clearfix">
                                        <div class="row group_contact">
                                            <fieldset class="form-group col-lg-6 col-md-12 col-sm-12 col-xs-12">
                                                <label for="">Họ và tên</label>
                                                <input placeholder="" type="text" Required
                                                    class="form-control  form-control-lg" required value=""
                                                    name="name">
                                    
                                            </fieldset>
                                            <fieldset class="form-group col-lg-6 col-md-12 col-sm-12 col-xs-12">
                                                <label for="">Số điện thoại</label>
                                                <input type="number" placeholder="" name="phone" Required
                                                    class="form-control form-control-lg" required>
                                               
                                            </fieldset>
                                            <div class="col-lg-6 col-md-6 col-12 form-group form-se">
                                                <label for="">Chọn tỉnh thành</label>
                                                <div class="input-group">
                                        
                                                    <select   id="province" class="select-drop form-control form-control-lg">
                                                        <option  value="Name"></option>
                                                    </select>

                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-6 col-12 form-group form-se">
                                                <label for="">Chọn quận (huyện)</label>
                                                <div class="input-group">
                                        
                                                    <select name="district" id="district" class="select-drop form-control form-control-lg">
                                                        <option  value=""></option>
                                                    </select>
                                                    
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-6 col-12 form-group form-se">
                                                <label for="">Chọn phường (xã)</label>
                                                <div class="input-group">
                                        
                                                    <select name="village" id="ward" class="select-drop form-control form-control-lg">
                                                        <option  value=""></option>
                                                    </select>
                                                    
                                                </div>
                                            </div>
                                            <fieldset class="form-group col-lg-6 col-md-12 col-sm-12 col-xs-12">
                                                <label for="">Số nhà, tên đường</label>
                                                <input placeholder="" type="text"
                                                    required
                                                    class="form-control form-control-lg" value=""
                                                    name="address2">
                                               
                                            </fieldset>
                                            <fieldset class="form-group col-lg-6 col-md-12 col-sm-12 col-xs-12">
                                                <label for="">Ngày hẹn</label>
                                                <input type="date"  required
                                                    id="email1" class="form-control form-control-lg" value=""
                                                    name="date">
                                              
                                            </fieldset>
                                            <div class="col-lg-6 col-md-6 col-12 form-group form-se">
                                                <label for="">Khung giờ</label>
                                                <div class="input-group">
                                                    <select name="hour" id="guiest_id2"
                                                        class="select-drop form-control form-control-lg">
                                                        <option selected=""></option>
                                                        <option value="Trước 9h">Trước 9h</option>
                                                        <option value="Trước 12h">Trước 12h</option>
                                                        <option value="Trước 15h">Trước 15h</option>
                                                        <option value="Trước 18h">Trước 18h </option>
                                                    </select>
                                                </div>
                                            </div>
                                            
                                            <fieldset class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                <label for="">Ghi chú</label>
                                                <textarea placeholder="Nội dung" name="content" id=""
                                                    class="form-control content-area form-control-lg" rows="5"
                                                    Required></textarea>
                                            </fieldset>
                                            <fieldset class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                <label for="">Hiển thị địa chỉ</label>
                                                <textarea placeholder="" name="address1" id="result"  style="min-height: 45px;"
                                                    class="form-control content-area form-control-lg" rows="5"
                                                    Required></textarea>
                                            </fieldset>
                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 a-right">
                                                <button type="submit" class="btn btn-primary btn-lienhe">Xác nhận đặt lịch</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <body>
        <div class="container">
            <h2 id="result"></h2>
        </div>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.26.1/axios.min.js" integrity="sha512-bPh3uwgU5qEMipS/VOmRqynnMXGGSRv+72H/N260MQeXZIK4PG48401Bsby9Nq5P5fz7hy5UGNmC/W1Z51h2GQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script>
            // 1. what is API
            // 2. How do I call API
            // 3. Explain code
            const host = "https://provinces.open-api.vn/api/";
            var callAPI = (api) => {
                return axios.get(api)
                    .then((response) => {
                        renderData(response.data, "province");
                    });
            }
            callAPI('https://provinces.open-api.vn/api/?depth=1');
            var callApiDistrict = (api) => {
                return axios.get(api)
                    .then((response) => {
                        renderData(response.data.districts, "district");
                    });
            }
            var callApiWard = (api) => {
                return axios.get(api)
                    .then((response) => {
                        renderData(response.data.wards, "ward");
                    });
            }
        
            var renderData = (array, select) => {
                let row = ' <option disable value=""></option>';
                array.forEach(element => {
                    row += `<option value="${element.code}">${element.name}</option>`
                });
                document.querySelector("#" + select).innerHTML = row
            }
        
            $("#province").change(() => {
                callApiDistrict(host + "p/" + $("#province").val() + "?depth=2");
                printResult();
            });
            $("#district").change(() => {
                callApiWard(host + "d/" + $("#district").val() + "?depth=2");
                printResult();
            });
            $("#ward").change(() => {
                printResult();
            })
        
            var printResult = () => {
                if ($("#district").val() != "" && $("#province").val() != "" &&
                    $("#ward").val() != "") {
                    let result = $("#province option:selected").text() +
                        " , " + $("#district option:selected").text() + " , " +
                        $("#ward option:selected").text();
                    $("#result").text(result)
                    // console.log(result);
                   
                }
                
            }

        </script>
    </body>
@endsection
