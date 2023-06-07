@extends('frontend.layouts.default')

@section('content')
<div class="breadcrumb_background" style="background-image: url({{ Voyager::image(setting('site.breadcrumb')) }})">
    <div class="title_full">
        <div class="container a-center">
            <span class="title_page">Giới thiệu</span>
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

                        <li><strong><span>Giới thiệu</span></strong></li>

                    </ul>
                </div>
            </div>
        </div>
    </section>
</div>
<section class="page">
    <div class="container">
        <div class="wrap_background_aside padding-top-15 margin-bottom-40">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12">
                  
                    <div class="content-page rte">
                        
                        <p>{!!$post->body!!}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection