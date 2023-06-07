@extends('frontend.layouts.default')

@section('content')
<div class="breadcrumb_background">
    <div class="title_full">
        <div class="container a-center">
            <h1 class="title_page">Tin tức</h1>
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


                        <li><strong><span>Tin tức</span></strong></li>


                    </ul>
                </div>
            </div>
        </div>
    </section>
</div>
<section class="awe-section-8">



    <div class="section_blog clearfix">
        <div class="container">
            <div class="title_modules a-center">
                <h2>
                    <a href="{{route('posts')}}" title="Nhật ký sửa chữa">Tin tức - Mẹo vặt</a>
                </h2>
                
            </div>
            <div class="row">
                @foreach ($posts as $post)
						<div class="col-lg-4 col-md-6 col-12 col-blog">
						<div class="item">
							<div class="blogwp clearfix">
								<div class="blog_thumbnail">
									<a class="image-blog"
										href="{{ route('posts.show', $post->slug) }}"
										title="{{$post->title}}">

										<img width="480" height="356" style="height: 206px"
											src="{{ Voyager::image($post->image) }}"
											data-src="{{ Voyager::image($post->image) }}"
											alt="{{$post->title}}"
											class="imageload lazyload img-responsive" />

									</a>
								</div>
								<div class="content_blog clearfix">
									<h3>
										<a href="{{ route('posts.show', $post->slug) }}"
											title="{{$post->title}}">{{$post->title}}</a>
									</h3>
									<div class="blog-bottom">
										<div class="post-date">
											<div class="time-post">
												<svg width="11" height="11" viewBox="0 0 11 11" fill="none"
													xmlns="http://www.w3.org/2000/svg">
													<path
														d="M5.5 0C2.46718 0 0 2.46718 0 5.5C0 8.53282 2.46718 11 5.5 11C8.53282 11 11 8.53282 11 5.5C11 2.46718 8.53282 0 5.5 0ZM8.11572 8.34483C8.02634 8.43421 7.90902 8.47919 7.79169 8.47919C7.67437 8.47919 7.55696 8.43421 7.46767 8.34483L5.17597 6.05322C5.08978 5.96754 5.04169 5.85105 5.04169 5.72919V2.75C5.04169 2.49655 5.24697 2.29169 5.5 2.29169C5.75303 2.29169 5.95831 2.49655 5.95831 2.75V5.53944L8.11572 7.69678C8.2949 7.87604 8.2949 8.16566 8.11572 8.34483Z"
														fill="#75808C" />
												</svg>
												{{-- @dd($post); --}}
												{{ $post->created_at->format('d/m/Y') }}
											</div>
										</div>
									</div>

									<p class="justify" style="
										display: -webkit-box;
										-webkit-line-clamp: 2;
										-webkit-box-orient: vertical;  
										overflow: hidden;
									  ">{{$post->excerpt}}
									</p>
									<a class="btn_see"
										href="{{ route('posts.show', $post->slug) }}"
										title="Xem thêm">Xem thêm <svg width="9" height="9" viewBox="0 0 9 9"
											fill="none" xmlns="http://www.w3.org/2000/svg">
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
</section>
<div class="ab-module-article-mostview"></div>
@endsection