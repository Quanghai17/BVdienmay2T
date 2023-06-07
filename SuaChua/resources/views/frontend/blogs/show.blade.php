@extends('frontend.layouts.default')

@section('content')
<div class="breadcrumb_background">
    <div class="title_full">
        <div class="container a-center">
            <span class="title_page">{{$post->title}}</span>
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

                        <li>
                            <a href="{{route('posts')}}"><span>Tin tức</span></a>
                            <span class="mr_lr">&nbsp;<svg aria-hidden="true" focusable="false" data-prefix="fas"
                                    data-icon="angle-right" role="img" xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 256 512" class="svg-inline--fa fa-angle-right fa-w-8">
                                    <path fill="currentColor"
                                        d="M224.3 273l-136 136c-9.4 9.4-24.6 9.4-33.9 0l-22.6-22.6c-9.4-9.4-9.4-24.6 0-33.9l96.4-96.4-96.4-96.4c-9.4-9.4-9.4-24.6 0-33.9L54.3 103c9.4-9.4 24.6-9.4 33.9 0l136 136c9.5 9.4 9.5 24.6.1 34z"
                                        class=""></path>
                                </svg>&nbsp;</span>
                        </li>
                        <li><strong><span>{{$post->title}}</span></strong></li>

                    </ul>
                </div>
            </div>
        </div>
    </section>
</div>
<section class="blogpage">
    <div class="container article-wraper" itemscope itemtype="https://schema.org/Article">
        <div class="wrap_background_aside padding-top-0 margin-bottom-40">
            <div class="row">
                <section class="right-content col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <article class="article-main">
                        <div class="article-details">
                            <h1 class="article-title">{{$post->title}}
                            </h1>
                            <div class="post-date">
                                <div class="time-post">
                                    <svg width="11" height="11" viewBox="0 0 11 11" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M5.5 0C2.46718 0 0 2.46718 0 5.5C0 8.53282 2.46718 11 5.5 11C8.53282 11 11 8.53282 11 5.5C11 2.46718 8.53282 0 5.5 0ZM8.11572 8.34483C8.02634 8.43421 7.90902 8.47919 7.79169 8.47919C7.67437 8.47919 7.55696 8.43421 7.46767 8.34483L5.17597 6.05322C5.08978 5.96754 5.04169 5.85105 5.04169 5.72919V2.75C5.04169 2.49655 5.24697 2.29169 5.5 2.29169C5.75303 2.29169 5.95831 2.49655 5.95831 2.75V5.53944L8.11572 7.69678C8.2949 7.87604 8.2949 8.16566 8.11572 8.34483Z"
                                            fill="#75808C" />
                                    </svg>
                                    {{ $post->created_at->format('d/m/Y') }}
                                </div>
                                
                            </div>
                            <div class="article-content">
                                <div class="rte">
                                    <p>{!!$post->body!!}</p>
                                </div>
                            </div>
                           
                        </div>

                    </article>
                </section>
            </div>
        </div>
    </div>
</section>
@endsection