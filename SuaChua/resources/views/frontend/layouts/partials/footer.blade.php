@php
    $menu = menu('home_menu', '_json');
    // dd($menu);
@endphp
<footer class="footer lazyload "
		data-src="//bizweb.dktcdn.net/100/425/159/themes/894862/assets/bg_footer.jpg?1676275680316">
		<div class="site-footer">
			<div class="footer_top">
				<div class="container">
					
				</div>
			</div>
			<div class="mid-footer" style="background-color: #0c3960;">
				<div class="container">
					<div class="row">
						<div class="col-12 col-md-6 col-lg-4 col-4 col-footer">
							<div class="widget-ft">
								<div class="blocklogo">

									<a href="index.html" class="logofooter">
										<img 
											src="{{ Voyager::image(setting('site.logo')) }}"
											data-src="{{ Voyager::image(setting('site.logo')) }}"
											alt="{{setting('title')}}">
									</a>

								</div>
								<div class="footer-des">
									{{setting('site.description_footer')}}
								</div>
	
							</div>
						</div>
						<div class="col-12 col-md-6 col-lg-2 col-2 footer-click col-footer">
							<h4 class="title-menu clicked">
								Thông tin
							</h4>
							<ul class="list-menu toggle-mn">

								@foreach ($menu as $item)
                                <li class="li_menu @if($item->url == "/".request()->segment(1)) active @endif ">
                                    <a class="a-img" href="{{ asset($item->url) }}" title="{{ $item->title }}">
                                        <span>{{ $item->title }}</span>
                                    </a>
                                </li>
                                @endforeach

							</ul>
						</div>
						<div class="col-12 col-md-6 col-lg-2 col-2 footer-click col-footer">
							<h4 class="title-menu clicked">
								Chính sách
							</h4>
							<ul class="list-menu toggle-mn">

								<li class="li_menu">
									<a href="index.html">Trang chủ</a>
								</li>

								<li class="li_menu">
									<a href="collections/all.html">Sản phẩm</a>
								</li>

								<li class="li_menu">
									<a href="tu-van.html">Tư vấn</a>
								</li>

								<li class="li_menu">
									<a href="gioi-thieu.html">Giới thiệu</a>
								</li>

								<li class="li_menu">
									<a href="tin-tuc.html">Tin tức</a>
								</li>

								<li class="li_menu">
									<a href="lien-he.html">Liên hệ</a>
								</li>

							</ul>
						</div>
						<div class="col-12 col-md-6 col-lg-4 col-4 col-footer">
							<div class="widget-ft first">
								<h4 class="title-menu">
									Liên hệ
								</h4>
								<div class="contact-footer clearfix">
									<div class="r">
										<div class="contact-ft">
											<span class="icon-contact">
												<svg width="15" height="17" viewBox="0 0 15 17" fill="none"
													xmlns="http://www.w3.org/2000/svg">
													<path
														d="M14.5722 11.8643L11.2909 10.3675C11.1507 10.3039 10.995 10.2905 10.847 10.3293C10.6991 10.3681 10.567 10.457 10.4706 10.5827L9.01744 12.4724C6.73686 11.3279 4.90151 9.37433 3.82624 6.94684L5.60166 5.40008C5.71993 5.2977 5.80363 5.15709 5.84011 4.99953C5.87659 4.84198 5.86384 4.67607 5.80381 4.52692L4.39754 1.03424C4.33165 0.873452 4.21512 0.742176 4.06804 0.663046C3.92097 0.583916 3.75256 0.561892 3.59186 0.600771L0.544931 1.3492C0.389998 1.38728 0.251766 1.48014 0.152796 1.61261C0.0538267 1.74509 -3.56904e-05 1.90936 1.77431e-08 2.07861C1.77431e-08 10.0775 6.09093 16.5483 13.594 16.5483C13.753 16.5484 13.9074 16.4911 14.032 16.3857C14.1565 16.2804 14.2438 16.1332 14.2795 15.9682L14.9827 12.725C15.019 12.5532 14.9978 12.3732 14.9229 12.2161C14.848 12.059 14.724 11.9346 14.5722 11.8643Z"
														fill="#C4C4C4" />
												</svg>
											</span>
											<div class="content-contact">
												<a class="fone" href="tel:">{{setting('site.phone')}}</a>
											</div>
										</div>
									</div>
									<div class="r">
										<div class="contact-ft">
											<span class="icon-contact">
												<svg width="17" height="20" viewBox="0 0 17 20" fill="none"
													xmlns="http://www.w3.org/2000/svg">
													<path
														d="M14.7593 0.649338L0.954045 7.75552C-0.638714 8.58463 -0.107795 11.1901 1.59122 11.1901H7.432V17.7042C7.432 19.599 9.76818 20.1915 10.5116 18.4148L16.8833 3.01819C17.4142 1.59658 16.0336 0.0568483 14.7593 0.649338Z"
														fill="#C4C4C4" />
												</svg>
											</span>
											<div class="content-contact">
												Email: <a href="mailto:{{setting('site.email')}}">{{setting('site.email')}}</a>
											</div>
										</div>
									</div>
									<div class="r">
										<div class="contact-ft">
											<span class="icon-contact">
												<svg width="22" height="19" viewBox="0 0 22 19" fill="none"
													xmlns="http://www.w3.org/2000/svg">
													<path
														d="M17.05 8.31005C14.3138 8.31005 12.1 10.5693 12.1 13.3619C12.1 16.1544 14.3138 18.4137 17.05 18.4137C19.7863 18.4137 22 16.1544 22 13.3619C22 10.5693 19.7863 8.31005 17.05 8.31005ZM19.25 13.5829C19.25 13.7688 19.0987 13.9232 18.9166 13.9232H16.8334C16.6513 13.9232 16.5 13.7688 16.5 13.5829V10.8956C16.5 10.7097 16.6513 10.5553 16.8334 10.5553H17.2666C17.4487 10.5553 17.6 10.7097 17.6 10.8956V12.8006H18.9166C19.0987 12.8006 19.25 12.9549 19.25 13.1408V13.5829ZM11 13.3619C11 12.3866 11.2303 11.4639 11.6256 10.643C11.3506 10.5904 11.0688 10.5553 10.78 10.5553H10.2059C9.44281 10.9131 8.59375 11.1166 7.7 11.1166C6.80625 11.1166 5.96063 10.9131 5.19406 10.5553H4.62C2.06938 10.5553 0 12.6672 0 15.2703V16.7297C0 17.6594 0.739062 18.4137 1.65 18.4137H13.5816C12.0244 17.2946 11 15.4492 11 13.3619ZM7.7 9.43267C10.1303 9.43267 12.1 7.42247 12.1 4.94217C12.1 2.46186 10.1303 0.45166 7.7 0.45166C5.26969 0.45166 3.3 2.46186 3.3 4.94217C3.3 7.42247 5.26969 9.43267 7.7 9.43267Z"
														fill="#C4C4C4" />
												</svg>
											</span>
											<div class="content-contact">
												Mở cửa: <span>Từ 8h00 - 20h00 hàng tuần</span>
											</div>
										</div>
									</div>
									<div class="r">
										<div class="contact-ft">
											<span class="icon-contact">
												<svg width="14" height="21" viewBox="0 0 14 21" fill="none"
													xmlns="http://www.w3.org/2000/svg">
													<path
														d="M6.2806 19.9433C0.983281 11.7326 0 10.8899 0 7.87236C0 3.73895 3.13399 0.388184 7 0.388184C10.866 0.388184 14 3.73895 14 7.87236C14 10.8899 13.0167 11.7326 7.7194 19.9433C7.37177 20.4802 6.6282 20.4802 6.2806 19.9433ZM7 10.9908C8.61084 10.9908 9.91667 9.59462 9.91667 7.87236C9.91667 6.1501 8.61084 4.75395 7 4.75395C5.38916 4.75395 4.08333 6.1501 4.08333 7.87236C4.08333 9.59462 5.38916 10.9908 7 10.9908Z"
														fill="#C4C4C4" />
												</svg>
											</span>
											<div class="content-contact">
												Địa chỉ:

												{{setting('site.address')}}

											</div>
										</div>
									</div>
								</div>
								<div class="social-footer clearfix">
									<ul class="follow_option">

										<li>
											<a class="facebook" href="#" target="_blank" aria-label="Facebook"
												title="Theo dõi Template Dori trên Facebook">
												<svg xmlns="http://www.w3.org/2000/svg"
													xmlns:xlink="http://www.w3.org/1999/xlink" width="25px"
													height="25px" viewBox="0 0 96.124 96.123"
													style="enable-background:new 0 0 96.124 96.123;"
													xml:space="preserve">
													<path
														d="M72.089,0.02L59.624,0C45.62,0,36.57,9.285,36.57,23.656v10.907H24.037c-1.083,0-1.96,0.878-1.96,1.961v15.803   c0,1.083,0.878,1.96,1.96,1.96h12.533v39.876c0,1.083,0.877,1.96,1.96,1.96h16.352c1.083,0,1.96-0.878,1.96-1.96V54.287h14.654   c1.083,0,1.96-0.877,1.96-1.96l0.006-15.803c0-0.52-0.207-1.018-0.574-1.386c-0.367-0.368-0.867-0.575-1.387-0.575H56.842v-9.246   c0-4.444,1.059-6.7,6.848-6.7l8.397-0.003c1.082,0,1.959-0.878,1.959-1.96V1.98C74.046,0.899,73.17,0.022,72.089,0.02z"
														data-original="#000000" class="active-path"
														data-old_color="#000000" fill="#EBE7E7" />
												</svg>
											</a>
										</li>


										<li>
											<a class="twitter" href="#" target="_blank" aria-label="Twitter"
												title="Theo dõi Template Dori trên Twitter">
												<svg xmlns="http://www.w3.org/2000/svg"
													xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 512 512"
													style="enable-background:new 0 0 512 512;" xml:space="preserve"
													width="25px" height="25px">
													<path
														d="M512,97.248c-19.04,8.352-39.328,13.888-60.48,16.576c21.76-12.992,38.368-33.408,46.176-58.016    c-20.288,12.096-42.688,20.64-66.56,25.408C411.872,60.704,384.416,48,354.464,48c-58.112,0-104.896,47.168-104.896,104.992    c0,8.32,0.704,16.32,2.432,23.936c-87.264-4.256-164.48-46.08-216.352-109.792c-9.056,15.712-14.368,33.696-14.368,53.056    c0,36.352,18.72,68.576,46.624,87.232c-16.864-0.32-33.408-5.216-47.424-12.928c0,0.32,0,0.736,0,1.152    c0,51.008,36.384,93.376,84.096,103.136c-8.544,2.336-17.856,3.456-27.52,3.456c-6.72,0-13.504-0.384-19.872-1.792    c13.6,41.568,52.192,72.128,98.08,73.12c-35.712,27.936-81.056,44.768-130.144,44.768c-8.608,0-16.864-0.384-25.12-1.44    C46.496,446.88,101.6,464,161.024,464c193.152,0,298.752-160,298.752-298.688c0-4.64-0.16-9.12-0.384-13.568    C480.224,136.96,497.728,118.496,512,97.248z"
														data-original="#000000" class="active-path"
														data-old_color="#000000" fill="#EBE7E7" />
												</svg>
											</a>
										</li>


										<li>
											<a class="pinterest" href="#" target="_blank" aria-label="Pinterest"
												title="Theo dõi Template Dori trên Pinterest">
												<svg aria-hidden="true" focusable="false" data-prefix="fab"
													data-icon="pinterest" role="img" xmlns="http://www.w3.org/2000/svg"
													viewBox="0 0 496 512" class="svg-inline--fa fa-pinterest fa-w-16">
													<path fill="currentColor"
														d="M496 256c0 137-111 248-248 248-25.6 0-50.2-3.9-73.4-11.1 10.1-16.5 25.2-43.5 30.8-65 3-11.6 15.4-59 15.4-59 8.1 15.4 31.7 28.5 56.8 28.5 74.8 0 128.7-68.8 128.7-154.3 0-81.9-66.9-143.2-152.9-143.2-107 0-163.9 71.8-163.9 150.1 0 36.4 19.4 81.7 50.3 96.1 4.7 2.2 7.2 1.2 8.3-3.3.8-3.4 5-20.3 6.9-28.1.6-2.5.3-4.7-1.7-7.1-10.1-12.5-18.3-35.3-18.3-56.6 0-54.7 41.4-107.6 112-107.6 60.9 0 103.6 41.5 103.6 100.9 0 67.1-33.9 113.6-78 113.6-24.3 0-42.6-20.1-36.7-44.8 7-29.5 20.5-61.3 20.5-82.6 0-19-10.2-34.9-31.4-34.9-24.9 0-44.9 25.7-44.9 60.2 0 22 7.4 36.8 7.4 36.8s-24.5 103.8-29 123.2c-5 21.4-3 51.6-.9 71.2C65.4 450.9 0 361.1 0 256 0 119 111 8 248 8s248 111 248 248z"
														class=""></path>
												</svg>
											</a>
										</li>


										<li>
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
										</li>

									</ul>
								</div>
							</div>
						</div>


					</div>
				</div>
			</div>
			<div class="bg-footer-bottom copyright clearfix lazyload " style="background-color: #093256;"
				data-src="../bizweb.dktcdn.net/100/425/159/themes/894862/assets/bg_footer_bot9889.jpg?1676275680316">
				<div class="container">
					<div class="inner clearfix">
						<div class="row tablet">
							<div id="copyright" class="col-xl-12 col-lg-12 col-md-12 col-12 fot_copyright">
								<span class="wsp">

									<span class="mobile">© Bản quyền thuộc về {{setting('site.title')}} <span
											class="dash hidden-xs">|</span>
									</span>
									<span class="opacity1">Cung cấp bởi</span>

									Kennatech


								</span>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</footer>