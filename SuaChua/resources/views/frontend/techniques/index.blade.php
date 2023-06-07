@extends('frontend.layouts.default')

@section('content')
<div class="breadcrumb_background">
    <div class="title_full">
        <div class="container a-center">
            <h1 class="title_page">Kỹ thuật canh tác</h1>
        </div>
    </div>
    <section class="bread-crumb">
        <span class="crumb-border"></span>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-12 a-left">
                    <ul class="breadcrumb">
                        <li class="home">
                            <a href="{{ route('home') }}"><span>Trang chủ</span></a>
                            <span class="mr_lr"><svg xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 320 512"><!--! Font Awesome Pro 6.0.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
                                    <path
                                        d="M96 480c-8.188 0-16.38-3.125-22.62-9.375c-12.5-12.5-12.5-32.75 0-45.25L242.8 256L73.38 86.63c-12.5-12.5-12.5-32.75 0-45.25s32.75-12.5 45.25 0l192 192c12.5 12.5 12.5 32.75 0 45.25l-192 192C112.4 476.9 104.2 480 96 480z" />
                                </svg></span>
                        </li>
                        <li><strong><span>Kỹ thuật canh tác</span></strong></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
</div>
<div class="blog_wrapper layout-blog" itemscope itemtype="https://schema.org/Blog">
    <meta itemprop="name" content="Tin tức">
    <meta itemprop="description" content="">
    <div class="container">
        <div class="row">
            <div class="right-content col-lg-8 col-12 order-lg-1">
                <h1 class="title-page">Kỹ thuật canh tác</h1>

                <div class="list-blogs">

                    <div class="row clearfix">

                        @foreach ($techniques['value'] as $technique)
                        
                        <div class="col-xl-6 col-md-6 col-12">
                            <div class="item_blog_base">
                                <a class="thumb"
                                    href="{{ route('techniques.show',$technique['Oid']) }}"
                                    title="{{$technique['TenKiThuat']}}">

                                    <img src="{{ asset('assets/images/kythuat.png') }}"
                                        data-src="{{ asset('assets/images/kythuat.png') }}"
                                        alt="{{$technique['TenKiThuat']}}"
                                        class="lazyload img-responsive" />


                                </a>
                                <div class="content_blog clearfix">

                                    <h3><a href="{{ route('techniques.show',$technique['Oid']) }}"
                                            title="{{$technique['TenKiThuat']}}"
                                            class="a-title">{{$technique['TenKiThuat']}}</a></h3>

                                    <p>
                                        {{$technique['MoTa']}}
                                    </p>

                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>

                    <div class="text-center">

                    </div>

                </div>
                <div class="pagenav">
                    <div class="pagenav">

                        <nav class="clearfix relative nav_pagi w_100">
                            <ul class="pagination clearfix">

                                <li class="page-item disabled"><a class="page-link" href="#">
                                        <svg aria-hidden="true" focusable="false" data-prefix="fas"
                                            data-icon="chevron-double-left" role="img"
                                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"
                                            class="svg-inline--fa fa-chevron-double-left fa-w-16">
                                            <path fill="currentColor"
                                                d="M34.5 239L228.9 44.7c9.4-9.4 24.6-9.4 33.9 0l22.7 22.7c9.4 9.4 9.4 24.5 0 33.9L131.5 256l154 154.7c9.3 9.4 9.3 24.5 0 33.9l-22.7 22.7c-9.4 9.4-24.6 9.4-33.9 0L34.5 273c-9.3-9.4-9.3-24.6 0-34zm192 34l194.3 194.3c9.4 9.4 24.6 9.4 33.9 0l22.7-22.7c9.4-9.4 9.4-24.5 0-33.9L323.5 256l154-154.7c9.3-9.4 9.3-24.5 0-33.9l-22.7-22.7c-9.4-9.4-24.6-9.4-33.9 0L226.5 239c-9.3 9.4-9.3 24.6 0 34z"
                                                class=""></path>
                                        </svg>
                                    </a></li>





                                <li class="active page-item disabled"><a class="page-link"
                                        href="javascript:;">1</a></li>




                                <li class="page-item"><a class="page-link" onclick="doSearch(2)"
                                        href="javascript:;">2</a></li>



                                <li class="page-item"><a class="page-link" onclick="doSearch(3)"
                                        href="javascript:;">3</a></li>



                                <li class="page-item"><a class="page-link" onclick="doSearch(4)"
                                        href="javascript:;">4</a></li>



                                <li class="page-item"><a class="page-link" onclick="doSearch(5)"
                                        href="javascript:;">5</a></li>



                                <li class="page-item"><a class="page-link" onclick="doSearch(6)"
                                        href="javascript:;">6</a></li>



                                <li class="page-item"><a class="page-link" onclick="doSearch(7)"
                                        href="javascript:;">7</a></li>




                                <li class="page-item hidden-xs"><a class="page-link" onclick="doSearch(2)"
                                        href="javascript:;">
                                        <svg aria-hidden="true" focusable="false" data-prefix="fas"
                                            data-icon="chevron-double-right" role="img"
                                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"
                                            class="svg-inline--fa fa-chevron-double-right fa-w-16">
                                            <path fill="currentColor"
                                                d="M477.5 273L283.1 467.3c-9.4 9.4-24.6 9.4-33.9 0l-22.7-22.7c-9.4-9.4-9.4-24.5 0-33.9l154-154.7-154-154.7c-9.3-9.4-9.3-24.5 0-33.9l22.7-22.7c9.4-9.4 24.6-9.4 33.9 0L477.5 239c9.3 9.4 9.3 24.6 0 34zm-192-34L91.1 44.7c-9.4-9.4-24.6-9.4-33.9 0L34.5 67.4c-9.4 9.4-9.4 24.5 0 33.9l154 154.7-154 154.7c-9.3 9.4-9.3 24.5 0 33.9l22.7 22.7c9.4 9.4 24.6 9.4 33.9 0L285.5 273c9.3-9.4 9.3-24.6 0-34z"
                                                class=""></path>
                                        </svg>
                                    </a></li>

                            </ul>
                        </nav>
                        <script>

                            var cuPage = 1

                        </script>

                    </div>
                </div>
            </div>
            <div class="blog_left_base col-lg-4 col-12 order-lg-2">
                <div class="blog_noibat">



                    <h2 class="h2_sidebar_blog">
                        <a href="tin-tuc.html" title="Bài viết nổi bật">Bài viết nổi bật</a>
                    </h2>
                    <div class="blog_content">
                        @foreach ($techniques['value'] as $technique)
                        
                        <div class="item clearfix">
                            <div class="post-thumb">
                                <a class="image-blog scale_hover"
                                    href="{{ route('techniques.show',$technique['Oid']) }}"
                                    title="{{$technique['TenKiThuat']}}">

                                    <img class="img_blog lazyload"
                                        src="{{ asset('assets/images/kythuat.png') }}"
                                        data-src="{{ asset('assets/images/kythuat.png') }}"
                                        alt="{{$technique['TenKiThuat']}}">

                                </a>
                            </div>
                            <div class="contentright">
                                <h3><a title="{{$technique['TenKiThuat']}}"
                                        href="{{ route('techniques.show',$technique['Oid']) }}">{{$technique['TenKiThuat']}}</a></h3>

                            </div>
                            
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection