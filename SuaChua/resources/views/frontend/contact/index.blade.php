@extends('frontend.layouts.default')

@section('content')
<div class="breadcrumb_background">
    <div class="title_full">
        <div class="container a-center">
            <span class="title_page">Liên hệ</span>
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

                        <li><strong><span>Liên hệ</span></strong></li>

                    </ul>
                </div>
            </div>
        </div>
    </section>
</div>
<div class="page_contact ">
    <div class="container">
        <h2 class="title-head-contact">
            Bản đồ cửa hàng
        </h2>
        <div class="iFrameMap">
            <div id="contact_map" class="map">
                {!!setting('site.map_contact')!!}
            </div>
        </div>
        <h1 class="title_page"><span>Liên hệ với chúng tôi</span></h1>
        <div class="row">
            <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                <div class="left_contact">
                    <h2 class="title-head-contact a-left">Thông tin liên hệ</h2>
                    <p class="des_contact">
                        Bạn hãy điền nội dung tin nhắn vào form dưới đây và gửi cho chúng tôi. Chúng tôi sẽ trả lời
                        bạn sau khi nhận được.
                    </p>
                    <div id="pagelogin">
                        <form method="post" action="{{route('advises')}}" id="contact"
                            accept-charset="UTF-8">
                            <input type="hidden" name="service" id="" value="Liên hệ">
                            @csrf
                            <div class="form-signup clearfix">
                                <div class="row group_contact">
                                    <fieldset class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <input placeholder="Họ tên khách hàng" type="text"
                                            class="form-control  form-control-lg" required value=""
                                            name="name">
                                        <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="user"
                                            role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"
                                            class="svg-inline--fa fa-user fa-w-14">
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
                                            class="form-control form-control-lg" value="" name="email">
                                        <svg aria-hidden="true" focusable="false" data-prefix="fas"
                                            data-icon="paper-plane" role="img" xmlns="http://www.w3.org/2000/svg"
                                            viewBox="0 0 512 512" class="svg-inline--fa fa-paper-plane fa-w-16">
                                            <path fill="currentColor"
                                                d="M476 3.2L12.5 270.6c-18.1 10.4-15.8 35.6 2.2 43.2L121 358.4l287.3-253.2c5.5-4.9 13.3 2.6 8.6 8.3L176 407v80.5c0 23.6 28.5 32.9 42.5 15.8L282 426l124.6 52.2c14.2 6 30.4-2.9 33-18.2l72-432C515 7.8 493.3-6.8 476 3.2z"
                                                class=""></path>
                                        </svg>
                                    </fieldset>
                                    <fieldset class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <textarea placeholder="Nội dung" name="content" id="comment"
                                            class="form-control content-area form-control-lg" rows="5"
                                            Required></textarea>
                                        <svg aria-hidden="true" focusable="false" data-prefix="fas"
                                            data-icon="comment-dots" role="img" xmlns="http://www.w3.org/2000/svg"
                                            viewBox="0 0 512 512" class="svg-inline--fa fa-comment-dots fa-w-16">
                                            <path fill="currentColor"
                                                d="M256 32C114.6 32 0 125.1 0 240c0 49.6 21.4 95 57 130.7C44.5 421.1 2.7 466 2.2 466.5c-2.2 2.3-2.8 5.7-1.5 8.7S4.8 480 8 480c66.3 0 116-31.8 140.6-51.4 32.7 12.3 69 19.4 107.4 19.4 141.4 0 256-93.1 256-208S397.4 32 256 32zM128 272c-17.7 0-32-14.3-32-32s14.3-32 32-32 32 14.3 32 32-14.3 32-32 32zm128 0c-17.7 0-32-14.3-32-32s14.3-32 32-32 32 14.3 32 32-14.3 32-32 32zm128 0c-17.7 0-32-14.3-32-32s14.3-32 32-32 32 14.3 32 32-14.3 32-32 32z"
                                                class=""></path>
                                        </svg>
                                    </fieldset>
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 a-left">
                                        <button type="submit" class="btn btn-primary btn-lienhe">Gửi nhanh</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-12">
                <div class="right_contact">
                    <h2 class="title_right_contact">
                        Tổng kho điện máy 2T
                    </h2>
                    <div class="single-contact">
                        <div class="svg-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" height="512" viewBox="0 0 512 512" width="512">
                                <g id="_01-home" data-name="01-home">
                                    <g id="glyph">
                                        <path
                                            d="m256 4c-108.075 0-196 87.925-196 196 0 52.5 31.807 119.92 94.537 200.378a1065.816 1065.816 0 0 0 93.169 104.294 12 12 0 0 0 16.588 0 1065.816 1065.816 0 0 0 93.169-104.294c62.73-80.458 94.537-147.878 94.537-200.378 0-108.075-87.925-196-196-196zm0 336c-77.2 0-140-62.8-140-140s62.8-140 140-140 140 62.8 140 140-62.8 140-140 140z" />
                                        <path
                                            d="m352.072 183.121-88-80a12 12 0 0 0 -16.144 0l-88 80a12.006 12.006 0 0 0 -2.23 15.039 12.331 12.331 0 0 0 10.66 5.84h11.642v76a12 12 0 0 0 12 12h28a12 12 0 0 0 12-12v-44a12 12 0 0 1 12-12h24a12 12 0 0 1 12 12v44a12 12 0 0 0 12 12h28a12 12 0 0 0 12-12v-76h11.642a12.331 12.331 0 0 0 10.66-5.84 12.006 12.006 0 0 0 -2.23-15.039z" />
                                    </g>
                                </g>
                            </svg>
                        </div>
                        <span>{{setting('site.address')}}</span>
                    </div>
                    <div class="single-contact">
                        <div class="svg-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 480.56 480.56"
                                style="enable-background:new 0 0 480.56 480.56;" xml:space="preserve">
                                <g>
                                    <path
                                        d="M365.354,317.9c-15.7-15.5-35.3-15.5-50.9,0c-11.9,11.8-23.8,23.6-35.5,35.6c-3.2,3.3-5.9,4-9.8,1.8    c-7.7-4.2-15.9-7.6-23.3-12.2c-34.5-21.7-63.4-49.6-89-81c-12.7-15.6-24-32.3-31.9-51.1c-1.6-3.8-1.3-6.3,1.8-9.4    c11.9-11.5,23.5-23.3,35.2-35.1c16.3-16.4,16.3-35.6-0.1-52.1c-9.3-9.4-18.6-18.6-27.9-28c-9.6-9.6-19.1-19.3-28.8-28.8    c-15.7-15.3-35.3-15.3-50.9,0.1c-12,11.8-23.5,23.9-35.7,35.5c-11.3,10.7-17,23.8-18.2,39.1c-1.9,24.9,4.2,48.4,12.8,71.3    c17.6,47.4,44.4,89.5,76.9,128.1c43.9,52.2,96.3,93.5,157.6,123.3c27.6,13.4,56.2,23.7,87.3,25.4c21.4,1.2,40-4.2,54.9-20.9    c10.2-11.4,21.7-21.8,32.5-32.7c16-16.2,16.1-35.8,0.2-51.8C403.554,355.9,384.454,336.9,365.354,317.9z" />
                                    <path
                                        d="M346.254,238.2l36.9-6.3c-5.8-33.9-21.8-64.6-46.1-89c-25.7-25.7-58.2-41.9-94-46.9l-5.2,37.1    c27.7,3.9,52.9,16.4,72.8,36.3C329.454,188.2,341.754,212,346.254,238.2z" />
                                    <path
                                        d="M403.954,77.8c-42.6-42.6-96.5-69.5-156-77.8l-5.2,37.1c51.4,7.2,98,30.5,134.8,67.2c34.9,34.9,57.8,79,66.1,127.5    l36.9-6.3C470.854,169.3,444.354,118.3,403.954,77.8z" />
                                </g>
                            </svg>
                        </div>
                        <a class="phone" href="tel:0975508128">{{setting('site.phone')}}</a>
                    </div>
                    <div class="single-contact">
                        <div class="svg-icon">
                            <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="envelope"
                                role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"
                                class="svg-inline--fa fa-envelope fa-w-16">
                                <path fill="currentColor"
                                    d="M502.3 190.8c3.9-3.1 9.7-.2 9.7 4.7V400c0 26.5-21.5 48-48 48H48c-26.5 0-48-21.5-48-48V195.6c0-5 5.7-7.8 9.7-4.7 22.4 17.4 52.1 39.5 154.1 113.6 21.1 15.4 56.7 47.8 92.2 47.6 35.7.3 72-32.8 92.3-47.6 102-74.1 131.6-96.3 154-113.7zM256 320c23.2.4 56.6-29.2 73.4-41.4 132.7-96.3 142.8-104.7 173.4-128.7 5.8-4.5 9.2-11.5 9.2-18.9v-19c0-26.5-21.5-48-48-48H48C21.5 64 0 85.5 0 112v19c0 7.4 3.4 14.3 9.2 18.9 30.6 23.9 40.7 32.4 173.4 128.7 16.8 12.2 50.2 41.8 73.4 41.4z"
                                    class=""></path>
                            </svg>
                        </div>
                        <a href="mailto:{{setting('site.email')}}">{{setting('site.email')}}</a>
                    </div>
                    <div class="single-contact">
                        <div class="svg-icon">
                            <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="link" role="img"
                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"
                                class="svg-inline--fa fa-link fa-w-16">
                                <path fill="currentColor"
                                    d="M326.612 185.391c59.747 59.809 58.927 155.698.36 214.59-.11.12-.24.25-.36.37l-67.2 67.2c-59.27 59.27-155.699 59.262-214.96 0-59.27-59.26-59.27-155.7 0-214.96l37.106-37.106c9.84-9.84 26.786-3.3 27.294 10.606.648 17.722 3.826 35.527 9.69 52.721 1.986 5.822.567 12.262-3.783 16.612l-13.087 13.087c-28.026 28.026-28.905 73.66-1.155 101.96 28.024 28.579 74.086 28.749 102.325.51l67.2-67.19c28.191-28.191 28.073-73.757 0-101.83-3.701-3.694-7.429-6.564-10.341-8.569a16.037 16.037 0 0 1-6.947-12.606c-.396-10.567 3.348-21.456 11.698-29.806l21.054-21.055c5.521-5.521 14.182-6.199 20.584-1.731a152.482 152.482 0 0 1 20.522 17.197zM467.547 44.449c-59.261-59.262-155.69-59.27-214.96 0l-67.2 67.2c-.12.12-.25.25-.36.37-58.566 58.892-59.387 154.781.36 214.59a152.454 152.454 0 0 0 20.521 17.196c6.402 4.468 15.064 3.789 20.584-1.731l21.054-21.055c8.35-8.35 12.094-19.239 11.698-29.806a16.037 16.037 0 0 0-6.947-12.606c-2.912-2.005-6.64-4.875-10.341-8.569-28.073-28.073-28.191-73.639 0-101.83l67.2-67.19c28.239-28.239 74.3-28.069 102.325.51 27.75 28.3 26.872 73.934-1.155 101.96l-13.087 13.087c-4.35 4.35-5.769 10.79-3.783 16.612 5.864 17.194 9.042 34.999 9.69 52.721.509 13.906 17.454 20.446 27.294 10.606l37.106-37.106c59.271-59.259 59.271-155.699.001-214.959z"
                                    class=""></path>
                            </svg>
                        </div>

                        <a href="{{setting('site.website')}}" title="{{setting('site.website')}}">{{setting('site.website')}}</a>


                    </div>
                    <div class="single-contact">
                        <div class="svg-icon">
                            <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="clock" role="img"
                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"
                                class="svg-inline--fa fa-clock fa-w-16">
                                <path fill="currentColor"
                                    d="M256,8C119,8,8,119,8,256S119,504,256,504,504,393,504,256,393,8,256,8Zm92.49,313h0l-20,25a16,16,0,0,1-22.49,2.5h0l-67-49.72a40,40,0,0,1-15-31.23V112a16,16,0,0,1,16-16h32a16,16,0,0,1,16,16V256l58,42.5A16,16,0,0,1,348.49,321Z"
                                    class=""></path>
                            </svg>
                        </div>
                        <span>Mở cửa: Từ thứ 2 đến chủ nhật hàng tuần (8h00 - 20h00)</span>
                    </div>
                    <div class="social_contact">
                        <span>
                            Chia sẻ:
                        </span>

                        <a class="facebook" href="#" target="_blank" aria-label="Facebook"
                            title="Theo dõi Template Dori trên Facebook">
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                width="25px" height="25px" viewBox="0 0 96.124 96.123"
                                style="enable-background:new 0 0 96.124 96.123;" xml:space="preserve">
                                <path
                                    d="M72.089,0.02L59.624,0C45.62,0,36.57,9.285,36.57,23.656v10.907H24.037c-1.083,0-1.96,0.878-1.96,1.961v15.803   c0,1.083,0.878,1.96,1.96,1.96h12.533v39.876c0,1.083,0.877,1.96,1.96,1.96h16.352c1.083,0,1.96-0.878,1.96-1.96V54.287h14.654   c1.083,0,1.96-0.877,1.96-1.96l0.006-15.803c0-0.52-0.207-1.018-0.574-1.386c-0.367-0.368-0.867-0.575-1.387-0.575H56.842v-9.246   c0-4.444,1.059-6.7,6.848-6.7l8.397-0.003c1.082,0,1.959-0.878,1.959-1.96V1.98C74.046,0.899,73.17,0.022,72.089,0.02z"
                                    data-original="#000000" class="active-path" data-old_color="#000000"
                                    fill="#EBE7E7" />
                            </svg>
                        </a>


                        <a class="twitter" href="#" target="_blank" aria-label="Twitter"
                            title="Theo dõi Template Dori trên Twitter">
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;"
                                xml:space="preserve" width="25px" height="25px">
                                <path
                                    d="M512,97.248c-19.04,8.352-39.328,13.888-60.48,16.576c21.76-12.992,38.368-33.408,46.176-58.016    c-20.288,12.096-42.688,20.64-66.56,25.408C411.872,60.704,384.416,48,354.464,48c-58.112,0-104.896,47.168-104.896,104.992    c0,8.32,0.704,16.32,2.432,23.936c-87.264-4.256-164.48-46.08-216.352-109.792c-9.056,15.712-14.368,33.696-14.368,53.056    c0,36.352,18.72,68.576,46.624,87.232c-16.864-0.32-33.408-5.216-47.424-12.928c0,0.32,0,0.736,0,1.152    c0,51.008,36.384,93.376,84.096,103.136c-8.544,2.336-17.856,3.456-27.52,3.456c-6.72,0-13.504-0.384-19.872-1.792    c13.6,41.568,52.192,72.128,98.08,73.12c-35.712,27.936-81.056,44.768-130.144,44.768c-8.608,0-16.864-0.384-25.12-1.44    C46.496,446.88,101.6,464,161.024,464c193.152,0,298.752-160,298.752-298.688c0-4.64-0.16-9.12-0.384-13.568    C480.224,136.96,497.728,118.496,512,97.248z"
                                    data-original="#000000" class="active-path" data-old_color="#000000"
                                    fill="#EBE7E7" />
                            </svg>
                        </a>


                        <a class="pinterest" href="#" target="_blank" aria-label="Pinterest"
                            title="Theo dõi Template Dori trên Pinterest">
                            <svg aria-hidden="true" focusable="false" data-prefix="fab" data-icon="pinterest"
                                role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 496 512"
                                class="svg-inline--fa fa-pinterest fa-w-16">
                                <path fill="currentColor"
                                    d="M496 256c0 137-111 248-248 248-25.6 0-50.2-3.9-73.4-11.1 10.1-16.5 25.2-43.5 30.8-65 3-11.6 15.4-59 15.4-59 8.1 15.4 31.7 28.5 56.8 28.5 74.8 0 128.7-68.8 128.7-154.3 0-81.9-66.9-143.2-152.9-143.2-107 0-163.9 71.8-163.9 150.1 0 36.4 19.4 81.7 50.3 96.1 4.7 2.2 7.2 1.2 8.3-3.3.8-3.4 5-20.3 6.9-28.1.6-2.5.3-4.7-1.7-7.1-10.1-12.5-18.3-35.3-18.3-56.6 0-54.7 41.4-107.6 112-107.6 60.9 0 103.6 41.5 103.6 100.9 0 67.1-33.9 113.6-78 113.6-24.3 0-42.6-20.1-36.7-44.8 7-29.5 20.5-61.3 20.5-82.6 0-19-10.2-34.9-31.4-34.9-24.9 0-44.9 25.7-44.9 60.2 0 22 7.4 36.8 7.4 36.8s-24.5 103.8-29 123.2c-5 21.4-3 51.6-.9 71.2C65.4 450.9 0 361.1 0 256 0 119 111 8 248 8s248 111 248 248z"
                                    class=""></path>
                            </svg>
                        </a>


                        <a class="instgram" href="#" target="_blank" aria-label="Instagram"
                            title="Theo dõi Template Dori trên Instagram">
                            <svg viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="m75 512h362c41.355469 0 75-33.644531 75-75v-362c0-41.355469-33.644531-75-75-75h-362c-41.355469 0-75 33.644531-75 75v362c0 41.355469 33.644531 75 75 75zm-45-437c0-24.8125 20.1875-45 45-45h362c24.8125 0 45 20.1875 45 45v362c0 24.8125-20.1875 45-45 45h-362c-24.8125 0-45-20.1875-45-45zm0 0" />
                                <path
                                    d="m256 391c74.4375 0 135-60.5625 135-135s-60.5625-135-135-135-135 60.5625-135 135 60.5625 135 135 135zm0-240c57.898438 0 105 47.101562 105 105s-47.101562 105-105 105-105-47.101562-105-105 47.101562-105 105-105zm0 0" />
                                <path
                                    d="m406 151c24.8125 0 45-20.1875 45-45s-20.1875-45-45-45-45 20.1875-45 45 20.1875 45 45 45zm0-60c8.269531 0 15 6.730469 15 15s-6.730469 15-15 15-15-6.730469-15-15 6.730469-15 15-15zm0 0" />
                            </svg>
                        </a>

                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

@endsection