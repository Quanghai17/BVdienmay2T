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
            <span>Thời gian làm việc: {{setting('site.working_time')}}</span>
        </div>
    </div>
    <div class="mid-header wid_100 clearfix">
        <div class="container">
            <div class="row">
                <div class="col-xl-3 col-lg-3 col-md-12 col-12">
                    <div class="menu-bar-mobile menu-bar-h nav-mobile-button">
                        <div class="menu-bar menubutton">
                            <svg xmlns="http://www.w3.org/2000/svg" version="1.1"
                                xmlns:xlink="http://www.w3.org/1999/xlink" width="23" height="23" x="0" y="0"
                                viewBox="0 0 384 384" style="enable-background:new 0 0 512 512" xml:space="preserve"
                                class="">
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

                            <a href="{{route('home')}}" class="logo-wrapper ">
                                <img src="{{ Voyager::image(setting('site.logo')) }}"
                                    alt="logo Template Dori">
                            </a>

                        </div>
                    </div>
                    <a class="cart-mobile-header" href="cart" title="Giỏ hàng">
                        <div class="icon-cart">
                            <svg width="26" height="25" viewBox="0 0 26 25" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M25.046 4.23271C25.0197 4.23271 24.9876 4.22681 24.9522 4.22032C24.9089 4.21237 24.8607 4.20352 24.8125 4.20352H6.42205L6.13014 2.24772C5.95499 0.963306 4.84573 0 3.53213 0H1.16764C0.52544 0 0 0.525439 0 1.16764C0 1.80985 0.52544 2.33529 1.16764 2.33529H3.53213C3.67808 2.33529 3.79485 2.45205 3.82404 2.59801L5.63389 14.9167C5.86742 16.4638 7.21021 17.6314 8.78653 17.6314H20.93C22.448 17.6314 23.7616 16.5514 24.0827 15.0626L25.9801 5.5755C26.0969 4.96249 25.6882 4.34948 25.046 4.23271ZM19.704 18.7115C18.0401 18.7115 16.6681 20.0543 16.6681 21.7474C16.6681 23.4113 18.0109 24.7833 19.704 24.7833C21.3679 24.7833 22.7399 23.4405 22.7399 21.7474C22.7107 20.0835 21.3679 18.7115 19.704 18.7115ZM9.25359 18.7115C10.8591 18.7115 12.2019 19.9959 12.2603 21.6014C12.3478 23.2653 11.0342 24.6665 9.37036 24.7541H9.31197C7.70646 24.7541 6.39286 23.4697 6.33448 21.8641C6.27609 20.2003 7.5605 18.7991 9.25359 18.7115Z"
                                    fill="#024E98" />
                            </svg>
                        </div>
                        <span class="count_item count_item_pr"></span>
                    </a>
                </div>
                <div class="col-xl-9 col-lg-9 col-12">
                    <div class="header-right">
                        <div class="header-bg">
                            <div class="cartgroup">
                                {{-- <div class="top-cart-contain">
                                    <div class="mini-cart text-xs-center">
                                        <a class="img_hover_cart" href="cart" title="Giỏ hàng">
                                            <div class="icon-cart">
                                                <svg width="26" height="25" viewBox="0 0 26 25" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                                        d="M25.046 4.23271C25.0197 4.23271 24.9876 4.22681 24.9522 4.22032C24.9089 4.21237 24.8607 4.20352 24.8125 4.20352H6.42205L6.13014 2.24772C5.95499 0.963306 4.84573 0 3.53213 0H1.16764C0.52544 0 0 0.525439 0 1.16764C0 1.80985 0.52544 2.33529 1.16764 2.33529H3.53213C3.67808 2.33529 3.79485 2.45205 3.82404 2.59801L5.63389 14.9167C5.86742 16.4638 7.21021 17.6314 8.78653 17.6314H20.93C22.448 17.6314 23.7616 16.5514 24.0827 15.0626L25.9801 5.5755C26.0969 4.96249 25.6882 4.34948 25.046 4.23271ZM19.704 18.7115C18.0401 18.7115 16.6681 20.0543 16.6681 21.7474C16.6681 23.4113 18.0109 24.7833 19.704 24.7833C21.3679 24.7833 22.7399 23.4405 22.7399 21.7474C22.7107 20.0835 21.3679 18.7115 19.704 18.7115ZM9.25359 18.7115C10.8591 18.7115 12.2019 19.9959 12.2603 21.6014C12.3478 23.2653 11.0342 24.6665 9.37036 24.7541H9.31197C7.70646 24.7541 6.39286 23.4697 6.33448 21.8641C6.27609 20.2003 7.5605 18.7991 9.25359 18.7115Z"
                                                        fill="#024E98" />
                                                </svg>
                                            </div>
                                            <span class="count_item count_item_pr"></span>
                                        </a>
                                        <div class="top-cart-content">
                                            <ul id="cart-sidebar" class="mini-products-list count_li">
                                                <li class="list-item">
                                                    <ul></ul>
                                                </li>
                                                <li class="action">
                                                    <ul>
                                                        <li class="li-fix-1">
                                                            <div class="top-subtotal">
                                                                Tổng tiền thanh toán:
                                                                <span class="price"></span>
                                                            </div>
                                                        </li>
                                                        <li class="li-fix-2" style="">
                                                            <div class="actions">
                                                                <a href="cart" class="btn btn-primary"
                                                                    title="Giỏ hàng">
                                                                    <span>Giỏ hàng</span>
                                                                </a>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div> --}}
                                {{-- <div class="title_log contact-header d-none d-lg-block">
                                    <svg width="24" height="25" viewBox="0 0 24 25" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M17.6626 5.71438C17.6626 8.87035 15.1042 11.4288 11.9483 11.4288C8.7923 11.4288 6.23388 8.87035 6.23388 5.71438C6.23388 2.55842 8.7923 0 11.9483 0C15.1042 0 17.6626 2.55842 17.6626 5.71438ZM0 24.4805C0 17.8923 5.36008 12.5322 11.9483 12.5322C18.5365 12.5322 23.8966 17.8923 23.8966 24.4805C23.8966 24.7672 23.6639 25 23.3771 25H0.519507C0.232748 25 0 24.7672 0 24.4805Z"
                                            fill="#024E98" />
                                    </svg>
                                    <div class="ct-header">

                                        <a class="btns" href="account/login.html">Đăng nhập</a>
                                        <span class="line">|</span>
                                        <a class="btns" href="account/register.html">Đăng ký</a>

                                    </div>
                                </div> --}}
                                <div class="header_searchs">
                                    <div class="col-search-engine hidden-991">
                                        <div class="header_search">
                                            <form class="input-group search-bar"
                                                action="https://template-dori.mysapo.net/search" method="get"
                                                role="search">
                                                <input type="search" name="query" value=""
                                                    placeholder=""
                                                    class="input-group-field st-default-search-input search-text"
                                                    autocomplete="off" required>
                                                <span class="input-group-btn">
                                                    <button class="btn icon-fallback-text">
                                                        <img src="http://bizweb.dktcdn.net/100/425/159/themes/894862/assets/i-search.svg?1676275680316"
                                                            alt="Template Dori" />
                                                    </button>
                                                </span>
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
            <form class="input-group search-bar" action="https://template-dori.mysapo.net/search" method="get"
                role="search">
                <input type="search" name="query" value="" placeholder="Tìm kiếm sản phẩm" aria-label="search"
                    class="input-group-field st-default-search-input search-text" autocomplete="off" required>
                <span class="input-group-btn">
                    <button class="btn icon-fallback-text" aria-label="search">
                        <svg width="15" height="15" aria-hidden="true" focusable="false" data-prefix="fas"
                            data-icon="search" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"
                            class="svg-inline--fa fa-search fa-w-16">
                            <path fill="currentColor"
                                d="M505 442.7L405.3 343c-4.5-4.5-10.6-7-17-7H372c27.6-35.3 44-79.7 44-128C416 93.1 322.9 0 208 0S0 93.1 0 208s93.1 208 208 208c48.3 0 92.7-16.4 128-44v16.3c0 6.4 2.5 12.5 7 17l99.7 99.7c9.4 9.4 24.6 9.4 33.9 0l28.3-28.3c9.4-9.4 9.4-24.6.1-34zM208 336c-70.7 0-128-57.2-128-128 0-70.7 57.2-128 128-128 70.7 0 128 57.2 128 128 0 70.7-57.2 128-128 128z"
                                class=""></path>
                        </svg>
                    </button>
                </span>
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
                                <li class="nav-item @if($item->url == "/".request()->segment(1)) active @endif ">
                                    <a class="a-img" href="{{ asset($item->url) }}" title="{{ $item->title }}">
                                        <span>{{ $item->title }}</span>
                                    </a>
                                </li>
                                @endforeach

                            </ul>
                        </nav>
                    </div>
                    <div class="phone_header">
                        {{-- <svg width="34" height="34" viewBox="0 0 34 34" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <g clip-path="url(#clip0)">
                                <path
                                    d="M25.849 22.4917C24.7383 21.3951 23.3515 21.3951 22.2478 22.4917C21.4059 23.3266 20.564 24.1614 19.7362 25.0104C19.5098 25.2439 19.3187 25.2934 19.0428 25.1378C18.498 24.8406 17.9179 24.6001 17.3943 24.2746C14.9534 22.7393 12.9087 20.7654 11.0975 18.5438C10.199 17.4401 9.39948 16.2586 8.84055 14.9284C8.72735 14.6596 8.74858 14.4827 8.9679 14.2634C9.80984 13.4497 10.6305 12.6149 11.4583 11.78C12.6116 10.6197 12.6116 9.2613 11.4513 8.09391C10.7933 7.42885 10.1353 6.77795 9.47731 6.11289C8.7981 5.43368 8.12597 4.7474 7.43969 4.07527C6.3289 2.99278 4.94219 2.99278 3.83847 4.08234C2.98946 4.9172 2.17583 5.77328 1.31267 6.59399C0.513187 7.35103 0.109907 8.27786 0.0250061 9.36035C-0.10942 11.122 0.322159 12.7847 0.930616 14.4049C2.17583 17.7585 4.07195 20.7371 6.37135 23.4681C9.47731 27.1612 13.1847 30.0833 17.5217 32.1916C19.4744 33.1397 21.4979 33.8684 23.6982 33.9887C25.2123 34.0736 26.5282 33.6915 27.5824 32.51C28.3041 31.7034 29.1177 30.9676 29.8818 30.1965C31.0138 29.0503 31.0209 27.6636 29.896 26.5316C28.5517 25.1802 27.2004 23.836 25.849 22.4917Z"
                                    fill="white" />
                                <path
                                    d="M24.4977 16.8529L27.1084 16.4071C26.6981 14.0087 25.5661 11.8366 23.8468 10.1103C22.0285 8.29203 19.7291 7.14587 17.1963 6.79211L16.8284 9.41697C18.7882 9.6929 20.5711 10.5773 21.979 11.9852C23.3091 13.3153 24.1794 14.9992 24.4977 16.8529Z"
                                    fill="white" />
                                <path
                                    d="M28.5801 5.50441C25.5661 2.49043 21.7526 0.587232 17.543 0L17.175 2.62485C20.8116 3.13426 24.1086 4.78275 26.7123 7.37931C29.1815 9.84851 30.8017 12.9686 31.3889 16.4L33.9996 15.9543C33.3133 11.9781 31.4384 8.36982 28.5801 5.50441Z"
                                    fill="white" />
                            </g>
                            <defs>
                                <clipPath id="clip0">
                                    <rect width="34" height="34" fill="white" />
                                </clipPath>
                            </defs>
                        </svg> --}}
                        {{-- <div class="ct-header">
                            <span>Hotline</span>
                            <a href="tel:19006750">1900 6750</a>
                        </div> --}}
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
              
                <div class="menu_mobile_2">
                    <ul class="ul_collections">

                       
                        @foreach ($menu as $item)
                        <li class="level0 level-top parent @if($item->url == "/".request()->segment(1)) active @endif ">
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