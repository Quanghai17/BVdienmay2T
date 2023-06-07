@extends('frontend.layouts.default')

@section('content')
<div class="breadcrumb_background">
    <div class="title_full">
        <div class="container a-center">
            <p class="title_page">Kỹ thuật</p>
        </div>
    </div>
    <section class="bread-crumb">
        <span class="crumb-border"></span>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-12 a-left">
                    <ul class="breadcrumb">
                        <li class="home">
                            <a href=""><span>Trang chủ</span></a>
                            <span class="mr_lr"><svg xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 320 512"><!--! Font Awesome Pro 6.0.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
                                    <path
                                        d="M96 480c-8.188 0-16.38-3.125-22.62-9.375c-12.5-12.5-12.5-32.75 0-45.25L242.8 256L73.38 86.63c-12.5-12.5-12.5-32.75 0-45.25s32.75-12.5 45.25 0l192 192c12.5 12.5 12.5 32.75 0 45.25l-192 192C112.4 476.9 104.2 480 96 480z" />
                                </svg></span>
                        </li>

                        <li>
                            <a href=""><span>Tin tức</span></a>
                            <span class="mr_lr"><svg xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 320 512"><!--! Font Awesome Pro 6.0.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
                                    <path
                                        d="M96 480c-8.188 0-16.38-3.125-22.62-9.375c-12.5-12.5-12.5-32.75 0-45.25L242.8 256L73.38 86.63c-12.5-12.5-12.5-32.75 0-45.25s32.75-12.5 45.25 0l192 192c12.5 12.5 12.5 32.75 0 45.25l-192 192C112.4 476.9 104.2 480 96 480z" />
                                </svg></span>
                        </li>
                        <li><strong><span>{{$technique['TenKiThuat']}}</span></strong></li>

                    </ul>
                </div>
            </div>
        </div>
    </section>
</div>
<section class="blogpage">
    <div class="container layout-article" itemscope itemtype="https://schema.org/Article">
        <div class="bg_blog">

            <article class="article-main" style="padding-bottom: 100px">
                <div class="row">
                    <div class="right-content col-xl-8 col-lg-8 col-12">
                        <div class="article-details">
                            <h1 class="article-title"><a
                                    href="">{{$technique['TenKiThuat']}}</a></h1>

                            <span class="time_post">
                                <span class="name_"><svg xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 448 512"><!--! Font Awesome Pro 6.0.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
                                        <path
                                            d="M272 304h-96C78.8 304 0 382.8 0 480c0 17.67 14.33 32 32 32h384c17.67 0 32-14.33 32-32C448 382.8 369.2 304 272 304zM48.99 464C56.89 400.9 110.8 352 176 352h96c65.16 0 119.1 48.95 127 112H48.99zM224 256c70.69 0 128-57.31 128-128c0-70.69-57.31-128-128-128S96 57.31 96 128C96 198.7 153.3 256 224 256zM224 48c44.11 0 80 35.89 80 80c0 44.11-35.89 80-80 80S144 172.1 144 128C144 83.89 179.9 48 224 48z" />
                                    </svg>Admin</span>
                            </span>
                            <div class="article-content">
                                <div class="rte">
                                    <p>Theo báo cáo từ Bộ NN&amp;PTNT, giá trị xuất khẩu hàng rau quả tháng 9
                                        năm 2017 ước đạt 294 triệu USD, đưa giá trị xuất khẩu hàng rau quả 9
                                        tháng đầu năm 2017 ước đạt 2,64 tỷ USD, tăng 44,2% so với cùng kỳ năm
                                        2016.</p>
                                    <p>Trung Quốc, Nhật Bản, Hoa Kỳ và Hàn Quốc là 4 thị trường nhập khẩu hàng
                                        đầu của hàng rau quả Việt Nam trong 8 tháng đầu năm 2017, chiếm 85,2%
                                        tổng giá trị xuất khẩu hàng rau quả. Trong 8 tháng đầu năm 2017, các thị
                                        trường có giá trị xuất khẩu hàng rau quả tăng mạnh là Nhật Bản (64,6%),
                                        Tiểu Vương Quốc Ả Rập Thống Nhất (64,4%), Trung Quốc (60,2%), Nga
                                        (41,9%), Hoa Kỳ (26,6%), Đài Loan (16,1%) và Hà Lan (9,4%).</p>
                                    <p><img data-thumb="large" original-height="334" original-width="640"
                                            src="../bizweb.dktcdn.net/thumb/large/100/263/497/files/photo-0-1506472670345a08b.png?v=1507790910943" />
                                    </p>
                                    <p><i>Tỷ lệ tăng trưởng của một số thị trường xuất khẩu rau quả Việt Nam
                                            trong 8 tháng đầu năm (Đơn vị: %)</i></p>
                                    <p>Ước giá trị nhập khẩu mặt hàng rau quả tháng 9 năm 2017 đạt 135 triệu
                                        USD, đưa giá trị nhập khẩu rau quả 9 tháng đầu năm 2017 đạt 1,15 tỷ USD,
                                        tăng 78,2% so với cùng kỳ năm 2016. Trong đó, mặt hàng rau ước đạt 218
                                        triệu USD, tăng 30,1% so với cùng kỳ 2016 và mặt hàng quả đạt 914 triệu
                                        USD, tăng gần 2 lần so với cùng kỳ năm 2016.</p>
                                    <p>Thị trường nhập khẩu rau quả lớn nhất trong 8 tháng đầu năm 2017 là thị
                                        trường Thái Lan (chiếm tới 60,7% thị phần), tiếp đến là thị trường Trung
                                        Quốc (chiếm 15,7%). Trong 8 tháng đầu năm 2017 giá trị nhập khẩu rau quả
                                        ở tất cả các thị trường đều tăng so với cùng kỳ năm 2016. Trong đó, thị
                                        trường có giá trị nhập khẩu rau quả tăng nhiều nhất là Thái Lan (gấp hơn
                                        2,8 lần), tiếp đến là thị trường Ấn Độ (gấp hơn 2,2 lần) và thị trường
                                        Hàn Quốc (tăng 70,8%).</p>
                                    <p><img data-thumb="large" original-height="438" original-width="640"
                                            src="../bizweb.dktcdn.net/thumb/large/100/263/497/files/photo-1-1506472670348cb6a.png?v=1507790951974" />
                                    </p>
                                    <p><i>Tỷ lệ tăng trưởng của một số thị trường nhập khẩu rau quả vềViệt Nam
                                            trong 8 tháng đầu năm (Đơn vị: %)</i></p>
                                    <p>Trong tháng 9/2017, trước cơn sốt giá sầu riêng tại các tỉnh Tây Nguyên,
                                        nhiều tiểu thương sẵn sàng đổ tiền vào các nhà vườn để thu mua sầu riêng
                                        non lẫn chín. Tại huyện Krông Pắk (tỉnh Đắk Lắk), một số loại sầu riêng
                                        chất lượng cao được thu mua với giá 54.000 đồng/kg – mức giá kỷ lục
                                        nhiều năm.</p>
                                    <p>Đồng thời, giá dừa khô tại tỉnh Trà Vinh không ngừng tăng cao với mức thu
                                        mua tại vườn 150.000 đồng/chục (12 trái). Đây là mức giá dừa khô cao
                                        nhất trong vòng 6 năm qua, đem lại cho mỗi 1 ha vườn dừa thu nhập khoảng
                                        15 triệu đồng/tháng.</p>
                                    <p>Trong khi đó, thị trường rau củ tại Lâm Đồng tương đối ổn định chỉ có một
                                        số rau như cà chua, hoa lơ xanh và cải bó xôi giảm nhẹ với mức giảm
                                        2.000-3.000 đồng/kg so với đầu tháng.</p>
                                    <p>Nhìn lại 9 tháng đầu năm, thị trường trái cây biến động thất thường do
                                        đặc tính thời vụ của từng loại trái cây. Trong khi đó, thị trường rau củ
                                        bị ảnh hưởng của thời tiết đặc biệt những cơn bão gần đây đã làm nguồn
                                        cung giảm khiến thị trường tăng mạnh vào tháng 7 và 8, tuy nhiên đến nay
                                        thị trường có dấu hiệu hồi phục.</p>
                                </div>
                            </div>
                        </div>
                      

                    </div>
                    <div class="blog_left_base col-xl-4 col-lg-4 col-12 order-lg-2">
                        <div class="blog_noibat">



                            <h2 class="h2_sidebar_blog">
                                <a href="" title="Bài viết nổi bật">Bài viết nổi bật</a>
                            </h2>
                            <div class="blog_content">
                                @foreach ($techniques['value'] as $technique)
                                <div class="item clearfix">
                                    <div class="post-thumb">
                                        <a class="image-blog scale_hover"
                                            href="{{ route('techniques.show',$technique['Oid']) }}"
                                            title="Rau xanh tăng giá mạnh vì trời mưa, người dân nội thành lao đao">

                                            <img class="img_blog lazyload"
                                                src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC"
                                                data-src="https://bizweb.dktcdn.net/100/448/970/articles/untitled-6.jpg?v=1646027190997"
                                                alt="Rau xanh tăng giá mạnh vì trời mưa, người dân nội thành lao đao">

                                        </a>
                                    </div>
                                    <div class="contentright">
                                        <h3><a title="Rau xanh tăng giá mạnh vì trời mưa, người dân nội thành lao đao"
                                                href="{{ route('techniques.show',$technique['Oid']) }}">{{$technique['TenKiThuat']}}</a>
                                        </h3>

                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </article>
        </div>
    </div>
</section>
<script>
    (function ($) { "use strict"; $.ajaxChimp = { responses: { "We have sent you a confirmation email": 0, "Please enter a valueggg": 1, "An email address must contain a single @": 2, "The domain portion of the email address is invalid (the portion after the @: )": 3, "The username portion of the email address is invalid (the portion before the @: )": 4, "This email address looks fake or invalid. Please enter a real email address": 5 }, translations: { en: null }, init: function (selector, options) { $(selector).ajaxChimp(options) } }; $.fn.ajaxChimp = function (options) { $(this).each(function (i, elem) { var form = $(elem); var email = form.find("input[type=email]"); var label = form.find("label[for=" + email.attr("id") + "]"); var settings = $.extend({ url: form.attr("action"), language: "en" }, options); var url = settings.url.replace("/post?", "/post-json?").concat("&c=?"); form.attr("novalidate", "true"); email.attr("name", "EMAIL"); form.submit(function () { var msg; function successCallback(resp) { if (resp.result === "success") { msg = "We have sent you a confirmation email"; label.removeClass("error").addClass("valid"); email.removeClass("error").addClass("valid") } else { email.removeClass("valid").addClass("error"); label.removeClass("valid").addClass("error"); var index = -1; try { var parts = resp.msg.split(" - ", 2); if (parts[1] === undefined) { msg = resp.msg } else { var i = parseInt(parts[0], 10); if (i.toString() === parts[0]) { index = parts[0]; msg = parts[1] } else { index = -1; msg = resp.msg } } } catch (e) { index = -1; msg = resp.msg } } if (settings.language !== "en" && $.ajaxChimp.responses[msg] !== undefined && $.ajaxChimp.translations && $.ajaxChimp.translations[settings.language] && $.ajaxChimp.translations[settings.language][$.ajaxChimp.responses[msg]]) { msg = $.ajaxChimp.translations[settings.language][$.ajaxChimp.responses[msg]] } label.html(msg); label.show(2e3); if (settings.callback) { settings.callback(resp) } } var data = {}; var dataArray = form.serializeArray(); $.each(dataArray, function (index, item) { data[item.name] = item.value }); $.ajax({ url: url, data: data, success: successCallback, dataType: "jsonp", error: function (resp, text) { console.log("mailchimp ajax submit error: " + text) } }); var submitMsg = "Submitting..."; if (settings.language !== "en" && $.ajaxChimp.translations && $.ajaxChimp.translations[settings.language] && $.ajaxChimp.translations[settings.language]["submit"]) { submitMsg = $.ajaxChimp.translations[settings.language]["submit"] } label.html(submitMsg).show(2e3); return false }) }); return this } })(jQuery);
</script>
@endsection