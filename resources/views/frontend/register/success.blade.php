@extends('frontend.layouts.default')

@section('content')

<div class="breadcrumb_background bread_other" style="background-image: url({{ Voyager::image(setting('site.breadcrumb')) }})">
    <div class="title_full">
        <div class="container a-center">
            <h1 class="title_page">Đặt lịch thành công</h1>
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
                    </ul>
                </div>
            </div>
        </div>
    </section>
</div>
<section class="page">
    <div class="container">
        <div class="wrap_background_aside padding-bottom-40">
            <div class="row">
                <div class="col-xl-1 col-lg-1 col-12">
                </div>
                <div class="col-xl-10 col-lg-10 col-12">
                    <div class="box_advisor_right">
                        <h4 class="title_advisor_2" style="text-align: center;">
                            Cảm ơn quý khách đã tin tưởng dịch vụ của chúng tôi, chúng tôi sẽ liên hệ sớm nhất!!!
                        </h4>
                        <style>
                            table {
                                font-family: arial, sans-serif;
                                border-collapse: collapse;
                                width: 100%;
                                }

                                td, th {
                                border: 1px solid #dddddd;
                                text-align: left;
                                padding: 8px;
                                }
                                th {
                                    background-color: #4495e5;
                                    font-weight: 600;
                                }
                            </style>
                        <table>
                            <tr>
                                <th>Tên khách hàng</th>
                                <th>Số điện thoại</th>
                                <th>Địa chỉ</th>
                                <th>Dịch vụ đã chọn</th>
                                <th>Tổng giá tiền</th>
                               
                            </tr>
                            <tr>
                                <td>{{$feedback->name}}</td>
                                <td>{{$feedback->phone}}</td>
                                <td>{{$feedback->address1}}, {{$feedback->address2}}</td>
                                <td>{{$feedback->services}}</td>
                                <td>{{$feedback->subtotal}}đ</td>
                            </tr>
                           
                        </table>
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 a-left">
                            <a href="{{route('home')}}"><button type="submit" class="btn btn-primary btn-lienhe">Quay về trang chủ</button></a>
                        </div>

                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection