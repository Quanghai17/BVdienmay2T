@php
    $menu = menu('home_menu', '_json');
    // dd($menu);
@endphp
<header class="header header_menu clearfix">
    <div class="top_header" style="background-color: #024e98;">
        <div class="time_header">
            <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="clock" role="img"
                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="svg-inline--fa fa-clock fa-w-16">
                <path fill="currentColor"
                    d="M256,8C119,8,8,119,8,256S119,504,256,504,504,393,504,256,393,8,256,8Zm92.49,313h0l-20,25a16,16,0,0,1-22.49,2.5h0l-67-49.72a40,40,0,0,1-15-31.23V112a16,16,0,0,1,16-16h32a16,16,0,0,1,16,16V256l58,42.5A16,16,0,0,1,348.49,321Z"
                    class=""></path>
            </svg>
            <span>Thời gian làm việc: {{ setting('site.working_time') }}</span>
        </div>
    </div>
    <div class="mid-header wid_100 clearfix">
        <div class="container">
            <div class="row">
                <div class="col-xl-3 col-lg-3 col-md-12 col-12">
                    <div class="menu-bar-mobile menu-bar-h nav-mobile-button">
                        <div class="menu-bar menubutton">
                            <svg xmlns="http://www.w3.org/2000/svg" version="1.1"
                                xmlns:xlink="http://www.w3.org/1999/xlink" width="23" height="23" x="0"
                                y="0" viewBox="0 0 384 384" style="enable-background:new 0 0 512 512"
                                xml:space="preserve" class="">
                                <g>
                                    <path xmlns="http://www.w3.org/2000/svg"
                                        d="m368 154.667969h-352c-8.832031 0-16-7.167969-16-16s7.167969-16 16-16h352c8.832031 0 16 7.167969 16 16s-7.167969 16-16 16zm0 0"
                                        fill="#797979" data-original="#000000" style="" class=""></path>
                                    <path xmlns="http://www.w3.org/2000/svg"
                                        d="m368 32h-352c-8.832031 0-16-7.167969-16-16s7.167969-16 16-16h352c8.832031 0 16 7.167969 16 16s-7.167969 16-16 16zm0 0"
                                        fill="#797979" data-original="#000000" style="" class=""></path>
                                    <path xmlns="http://www.w3.org/2000/svg"
                                        d="m368 277.332031h-352c-8.832031 0-16-7.167969-16-16s7.167969-16 16-16h352c8.832031 0 16 7.167969 16 16s-7.167969 16-16 16zm0 0"
                                        fill="#797979" data-original="#000000" style="" class=""></path>
                                </g>
                            </svg>
                        </div>
                    </div>
                    <div class="logo_center">
                        <div class="logo">

                            <a href="{{ route('home') }}" class="logo-wrapper ">
                                <img src="{{ Voyager::image(setting('site.logo')) }}" alt="logo Template Dori">
                            </a>

                        </div>
                    </div>

                </div>
                <div class="col-xl-9 col-lg-9 col-12">
                   
                    <div class="header-right" style="display: grid;">
                        <label style="margin-top: 6px;
                        font-weight: 500;" ></label>
                        <div class="header-bg">
                            <div class="cartgroup">
                                <div class="header_searchs">
                                    <div class="title_log contact-header d-none d-lg-block">
										<svg width="24" height="25" viewBox="0 0 24 25" fill="none"
											xmlns="http://www.w3.org/2000/svg">
											<path fill-rule="evenodd" clip-rule="evenodd"
												d="M17.6626 5.71438C17.6626 8.87035 15.1042 11.4288 11.9483 11.4288C8.7923 11.4288 6.23388 8.87035 6.23388 5.71438C6.23388 2.55842 8.7923 0 11.9483 0C15.1042 0 17.6626 2.55842 17.6626 5.71438ZM0 24.4805C0 17.8923 5.36008 12.5322 11.9483 12.5322C18.5365 12.5322 23.8966 17.8923 23.8966 24.4805C23.8966 24.7672 23.6639 25 23.3771 25H0.519507C0.232748 25 0 24.7672 0 24.4805Z"
												fill="#024E98" />
										</svg>
										<div class="ct-header">
											<a class="btns" href="{{route('register')}}">Đặt dịch vụ</a>										
										</div>
									</div>
                                    <div class="col-search-engine hidden-991">
                                        <div class="header_search">
                                            <form class="input-group search-bar" action="{{ route('search') }}" method="get">                               
                                                <input placeholder="Tra cứu đặt lịch (nhập số điện thoại)" class="input-group-field st-default-search-input search-text"
                                                 placeholder="" type="text"  value="" name="key">
                                                
                                                {{-- <button type="button" class="btn btn-primary">
                                                    <i class="fas fa-search"></i>
                                                  </button> --}}
                                                {{-- <a type="submit">
                                                    <span class="input-group-btn">
                                                        <svg width="24" height="25" viewBox="0 0 24 25" fill="none"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                                d="M17.6626 5.71438C17.6626 8.87035 15.1042 11.4288 11.9483 11.4288C8.7923 11.4288 6.23388 8.87035 6.23388 5.71438C6.23388 2.55842 8.7923 0 11.9483 0C15.1042 0 17.6626 2.55842 17.6626 5.71438ZM0 24.4805C0 17.8923 5.36008 12.5322 11.9483 12.5322C18.5365 12.5322 23.8966 17.8923 23.8966 24.4805C23.8966 24.7672 23.6639 25 23.3771 25H0.519507C0.232748 25 0 24.7672 0 24.4805Z"
                                                                fill="#024E98" />
                                                        </svg>
                                                    </span>
                                                </a>    --}}
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<div class="heade_menunavs header-menu clearfix">
    <div class="container">
        <div class="header_search">
            <form class="input-group search-bar" action="{{ route('search') }}" method="get">                               
                <input placeholder="Tra cứu đặt lịch (nhập số điện thoại)" type="text"   name="key" class="input-group-field st-default-search-input search-text">
            </form>
        </div>
        <div class="row">
            <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 col-mega hidden-sm hidden-xs">
                <div class="menu_mega">

                </div>
            </div>

            <div class="col-lg-9 col-md-9 no-padding-left">
                <div class="right_content">
                    <div class="bg-header-nav">
                        <nav class="header-nav">
                            <ul class="item_big">

                                @foreach ($menu as $item)
                                    <li class="nav-item @if ($item->url == '/' . request()->segment(1)) active @endif ">
                                        <a class="a-img" href="{{ asset($item->url) }}" title="{{ $item->title }}">
                                            <span>{{ $item->title }}</span>
                                        </a>
                                    </li>
                                @endforeach

                            </ul>
                        </nav>
                    </div>
                    <div class="phone_header">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="menu-overlay" class=""></div>
<div class="wrapmenu_right_2 d-lg">
    <div class="wrapmenu">
        <div class="wrapmenu_full menumain_full">
            <div class="containers">
                <!-- Menu mobile -->
                <div class="contenttop clearfix">
                    <div class="header_right_2 clearfix">
                        <div class="account">
                            <img src="{{ asset('assets/i_user9889.png') }}"
                                alt="Template Dori">
                            <ul class="account_header">
                                <li>
                                    <a href="{{route('register')}}">Đặt dịch vụ</a>
                                </li>
                                
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="menu_mobile_2">
                    <ul class="ul_collections">
                        @foreach ($menu as $item)
                            <li class="level0 level-top parent @if ($item->url == '/' . request()->segment(1)) active @endif ">
                                <a class="a-img" href="{{ asset($item->url) }}" title="{{ $item->title }}">
                                    <span>{{ $item->title }}</span>
                                </a>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
