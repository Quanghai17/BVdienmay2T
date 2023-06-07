@extends('frontend.layouts.default')

@section('content')
<div class="breadcrumb_background bread_other">
    <div class="title_full">
        <div class="container a-center">
            <h1 class="title_page">Tư vấn</h1>
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

                        <li><strong><span>Tư vấn</span></strong></li>

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
                <div class="col-xs-12 col-sm-12 col-lg-6 col-xl-5">
                    <div class="box_advisor_left">
                        <h2 class="title_advisor">
                            <span>Thời gian làm việc</span>
                        </h2>
                        <p>
                            Chúng tôi rất hân hạnh được làm việc với hàng trăm doanh nghiệp tuyệt vời có tư duy
                            tương lai bao gồm nhiều phần cứng hàng đầu thế giới
                        </p>
                        <div class="time_advisor">

                            Mở cửa: 8h00 - 20h00<br />(Từ thứ 2 - chủ nhật)

                        </div>
                        <div class="address_advisor">
                            Địa chỉ: {{setting('site.address')}}
                        </div>
                    </div>
                </div>
                <div class="col-xl-7 col-lg-6 col-12">
                    <div class="box_advisor_right">
                        <h2 class="title_advisor_2">
                            <span>Tư vấn lắp đặt điện nước</span>
                        </h2>
                        <p>
                            Hãy gửi thông tin cần tư vấn đến chúng tôi
                        </p>

                        <div id="pagelogin">
                            <form method="post" action="{{route('advises')}}" id="contact"
                                accept-charset="UTF-8">
                                @csrf
                                <div class="form-signup clearfix">
                                    <div class="row group_contact">
                                        <fieldset class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <input placeholder="Họ tên khách hàng" type="text"
                                                class="form-control  form-control-lg" required value=""
                                                name="name">
                                            <svg aria-hidden="true" focusable="false" data-prefix="fas"
                                                data-icon="user" role="img" xmlns="http://www.w3.org/2000/svg"
                                                viewBox="0 0 448 512" class="svg-inline--fa fa-user fa-w-14">
                                                <path fill="currentColor"
                                                    d="M224 256c70.7 0 128-57.3 128-128S294.7 0 224 0 96 57.3 96 128s57.3 128 128 128zm89.6 32h-16.7c-22.2 10.2-46.9 16-72.9 16s-50.6-5.8-72.9-16h-16.7C60.2 288 0 348.2 0 422.4V464c0 26.5 21.5 48 48 48h352c26.5 0 48-21.5 48-48v-41.6c0-74.2-60.2-134.4-134.4-134.4z"
                                                    class=""></path>
                                            </svg>
                                        </fieldset>
                                        <fieldset class="form-group col-lg-6 col-md-12 col-sm-12 col-xs-12">
                                            <input type="number" placeholder="Số điện thoại" name="phone"
                                                class="form-control form-control-lg" required>
                                            <svg aria-hidden="true" focusable="false" data-prefix="fas"
                                                data-icon="phone-alt" role="img" xmlns="http://www.w3.org/2000/svg"
                                                viewBox="0 0 512 512" class="svg-inline--fa fa-phone-alt fa-w-16">
                                                <path fill="currentColor"
                                                    d="M497.39 361.8l-112-48a24 24 0 0 0-28 6.9l-49.6 60.6A370.66 370.66 0 0 1 130.6 204.11l60.6-49.6a23.94 23.94 0 0 0 6.9-28l-48-112A24.16 24.16 0 0 0 122.6.61l-104 24A24 24 0 0 0 0 48c0 256.5 207.9 464 464 464a24 24 0 0 0 23.4-18.6l24-104a24.29 24.29 0 0 0-14.01-27.6z"
                                                    class=""></path>
                                            </svg>
                                        </fieldset>
                                        <fieldset class="form-group col-lg-6 col-md-12 col-sm-12 col-xs-12">
                                            <input placeholder="Email" type="email"                                                
                                                id="email1" class="form-control form-control-lg" value=""
                                                name="email">
                                            <svg aria-hidden="true" focusable="false" data-prefix="fas"
                                                data-icon="paper-plane" role="img"
                                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"
                                                class="svg-inline--fa fa-paper-plane fa-w-16">
                                                <path fill="currentColor"
                                                    d="M476 3.2L12.5 270.6c-18.1 10.4-15.8 35.6 2.2 43.2L121 358.4l287.3-253.2c5.5-4.9 13.3 2.6 8.6 8.3L176 407v80.5c0 23.6 28.5 32.9 42.5 15.8L282 426l124.6 52.2c14.2 6 30.4-2.9 33-18.2l72-432C515 7.8 493.3-6.8 476 3.2z"
                                                    class=""></path>
                                            </svg>
                                        </fieldset>
                                        <div class="col-lg-12 col-md-12 col-12 form-group form-se">
                                            <div class="input-group">
                                                <select name="service" id="guiest_id2"
                                                    class="select-drop form-control form-control-lg">
                                                    <option selected="">Dịch vụ</option>



                                                    <option value="Vệ sinh máy lạnh treo tường">Vệ sinh máy lạnh treo tường</option>


                                                    <option value="Vệ sinh máy lạnh âm trần">Vệ sinh máy lạnh âm trần</option>


                                                    <option value="Bảo dưỡng máy lọc nước">Bảo dưỡng máy lọc nước
                                                    </option>

                                                </select>
                                                <svg xmlns="http://www.w3.org/2000/svg" version="1.1"
                                                    xmlns:xlink="http://www.w3.org/1999/xlink" width="512"
                                                    height="512" x="0" y="0" viewBox="0 0 231.233 231.233"
                                                    style="enable-background:new 0 0 512 512" xml:space="preserve"
                                                    class="">
                                                    <g>
                                                        <path xmlns="http://www.w3.org/2000/svg"
                                                            d="M230.505,102.78c-0.365-3.25-4.156-5.695-7.434-5.695c-10.594,0-19.996-6.218-23.939-15.842  c-4.025-9.855-1.428-21.346,6.465-28.587c2.486-2.273,2.789-6.079,0.705-8.721c-5.424-6.886-11.586-13.107-18.316-18.498  c-2.633-2.112-6.502-1.818-8.787,0.711c-6.891,7.632-19.27,10.468-28.836,6.477c-9.951-4.187-16.232-14.274-15.615-25.101  c0.203-3.403-2.285-6.36-5.676-6.755c-8.637-1-17.35-1.029-26.012-0.068c-3.348,0.37-5.834,3.257-5.723,6.617  c0.375,10.721-5.977,20.63-15.832,24.667c-9.451,3.861-21.744,1.046-28.621-6.519c-2.273-2.492-6.074-2.798-8.725-0.731  c-6.928,5.437-13.229,11.662-18.703,18.492c-2.133,2.655-1.818,6.503,0.689,8.784c8.049,7.289,10.644,18.879,6.465,28.849  c-3.99,9.505-13.859,15.628-25.156,15.628c-3.666-0.118-6.275,2.345-6.68,5.679c-1.016,8.683-1.027,17.535-0.049,26.289  c0.365,3.264,4.268,5.688,7.582,5.688c10.07-0.256,19.732,5.974,23.791,15.841c4.039,9.855,1.439,21.341-6.467,28.592  c-2.473,2.273-2.789,6.07-0.701,8.709c5.369,6.843,11.537,13.068,18.287,18.505c2.65,2.134,6.504,1.835,8.801-0.697  c6.918-7.65,19.295-10.481,28.822-6.482c9.98,4.176,16.258,14.262,15.645,25.092c-0.201,3.403,2.293,6.369,5.672,6.755  c4.42,0.517,8.863,0.773,13.32,0.773c4.23,0,8.461-0.231,12.692-0.702c3.352-0.37,5.834-3.26,5.721-6.621  c-0.387-10.716,5.979-20.626,15.822-24.655c9.514-3.886,21.752-1.042,28.633,6.512c2.285,2.487,6.063,2.789,8.725,0.73  c6.916-5.423,13.205-11.645,18.703-18.493c2.135-2.65,1.832-6.503-0.689-8.788c-8.047-7.284-10.656-18.879-6.477-28.839  c3.928-9.377,13.43-15.673,23.65-15.673l1.43,0.038c3.318,0.269,6.367-2.286,6.768-5.671  C231.476,120.379,231.487,111.537,230.505,102.78z M115.616,182.27c-36.813,0-66.654-29.841-66.654-66.653  s29.842-66.653,66.654-66.653s66.654,29.841,66.654,66.653c0,12.495-3.445,24.182-9.428,34.176l-29.186-29.187  c2.113-4.982,3.229-10.383,3.228-15.957c0-10.915-4.251-21.176-11.97-28.893c-7.717-7.717-17.978-11.967-28.891-11.967  c-3.642,0-7.267,0.484-10.774,1.439c-1.536,0.419-2.792,1.685-3.201,3.224c-0.418,1.574,0.053,3.187,1.283,4.418  c0,0,14.409,14.52,19.23,19.34c0.505,0.505,0.504,1.71,0.433,2.144l-0.045,0.317c-0.486,5.3-1.423,11.662-2.196,14.107  c-0.104,0.103-0.202,0.19-0.308,0.296c-0.111,0.111-0.213,0.218-0.32,0.328c-2.477,0.795-8.937,1.743-14.321,2.225l0.001-0.029  l-0.242,0.061c-0.043,0.005-0.123,0.011-0.229,0.011c-0.582,0-1.438-0.163-2.216-0.94c-5.018-5.018-18.862-18.763-18.862-18.763  c-1.242-1.238-2.516-1.498-3.365-1.498c-1.979,0-3.751,1.43-4.309,3.481c-3.811,14.103,0.229,29.273,10.546,39.591  c7.719,7.718,17.981,11.968,28.896,11.968c5.574,0,10.975-1.115,15.956-3.228l29.503,29.503  C141.125,178.412,128.825,182.27,115.616,182.27z"
                                                            fill="#1e93ff" data-original="#000000" style=""
                                                            class=""></path>
                                                    </g>
                                                </svg>
                                            </div>
                                        </div>
                                        <fieldset class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <textarea placeholder="Nội dung" name="content" id="comment"
                                                class="form-control content-area form-control-lg" rows="5"
                                                Required></textarea>
                                            <svg aria-hidden="true" focusable="false" data-prefix="fas"
                                                data-icon="comment-dots" role="img"
                                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"
                                                class="svg-inline--fa fa-comment-dots fa-w-16">
                                                <path fill="currentColor"
                                                    d="M256 32C114.6 32 0 125.1 0 240c0 49.6 21.4 95 57 130.7C44.5 421.1 2.7 466 2.2 466.5c-2.2 2.3-2.8 5.7-1.5 8.7S4.8 480 8 480c66.3 0 116-31.8 140.6-51.4 32.7 12.3 69 19.4 107.4 19.4 141.4 0 256-93.1 256-208S397.4 32 256 32zM128 272c-17.7 0-32-14.3-32-32s14.3-32 32-32 32 14.3 32 32-14.3 32-32 32zm128 0c-17.7 0-32-14.3-32-32s14.3-32 32-32 32 14.3 32 32-14.3 32-32 32zm128 0c-17.7 0-32-14.3-32-32s14.3-32 32-32 32 14.3 32 32-14.3 32-32 32z"
                                                    class=""></path>
                                            </svg>
                                        </fieldset>
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 a-right">
                                            <button type="submit" class="btn btn-primary btn-lienhe">Gửi
                                                nhanh</button>
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
@endsection