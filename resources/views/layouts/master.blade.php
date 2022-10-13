<!DOCTYPE html>
<html dir="ltr" lang="en-US">
<head>

	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="author" content="SemiColonWeb" />

	<!-- Stylesheets
	============================================= -->
	<link href="{{asset('https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,900&display=swap')}}" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" href="{{asset('css/bootstrap.css')}}" type="text/css" />
	<link rel="stylesheet" href="{{asset('style.css')}}" type="text/css" />
    
	<link rel="stylesheet" href="{{asset('css/dark.css')}}" type="text/css" />
	<link rel="stylesheet" href="{{asset('css/font-icons.css')}}" type="text/css" />
	<link rel="stylesheet" href="{{asset('css/animate.css')}}" type="text/css" />
	<link rel="stylesheet" href="{{asset('css/magnific-popup.css')}}" type="text/css" />

	<!-- Bootstrap Switch CSS -->
	<link rel="stylesheet" href= "{{asset('css/components/bs-switches.css')}}" type="text/css" />

	
	<meta name='viewport' content='initial-scale=1, viewport-fit=cover'>

	<!-- Seo Demo Specific Stylesheet -->
	<link rel="stylesheet" href="{{asset('css/colors.php?color=59b7ac')}}" type="text/css" /> <!-- Theme Color -->
	<link rel="stylesheet" href="{{asset('demos/seo/css/fonts.css')}}" type="text/css" />
	<link rel="stylesheet" href="{{asset('demos/seo/seo.css')}}" type="text/css" />
    <link rel="stylesheet" href="{{asset('css/custom.css')}}" type="text/css" />
	<!-- / -->

	<!-- Document Title
	============================================= -->
	<title>順網科技</title>

</head>

<body class="stretched">

	<!-- Document Wrapper
	============================================= -->
	<div id="wrapper" class="clearfix">

		<!-- Top Bar
		============================================= -->
		<div id="top-bar" class="transparent-topbar">
			<div class="container clearfix">

				<div class="row justify-content-between">
					<div class="col-12 col-md-auto">

						<!-- Top Links
						============================================= -->
						<div class="top-links">
							<ul class="top-links-container">
								<li class="top-links-item"><a href="demo-seo.html">Home</a></li>
								<li class="top-links-item"><a href="demo-seo-faqs.html">FAQs</a></li>
								<li class="top-links-item"><a href="demo-seo-contact.html">Contact</a></li>
								<li class="top-links-item"><a href="#"><img src="demos/seo/images/flags/eng.png" alt="Lang">Eng</a>
									<ul class="top-links-sub-menu">
										<li class="top-links-item"><a href="#"><img src="demos/seo/images/flags/fre.png" alt="Lang">French</a></li>
										<li class="top-links-item"><a href="#"><img src="demos/seo/images/flags/ara.png" alt="Lang">Arabic</a></li>
										<li class="top-links-item"><a href="#"><img src="demos/seo/images/flags/tha.png" alt="Lang">Thai</a></li>
									</ul>
								</li>
							</ul>
						</div><!-- .top-links end -->

					</div>

					<div class="col-12 col-md-auto dark">

						<!-- Top Social
						============================================= -->
						<ul id="top-social">
							<li><a href="https://facebook.com/semicolonweb" class="si-facebook" target="_blank"><span class="ts-icon"><i class="icon-facebook"></i></span><span class="ts-text">Facebook</span></a></li>
							<li><a href="https://twitter.com/__semicolon" class="si-twitter" target="_blank"><span class="ts-icon"><i class="icon-twitter"></i></span><span class="ts-text">Twitter</span></a></li>
							<li><a href="https://youtube.com/semicolonweb" class="si-youtube" target="_blank"><span class="ts-icon"><i class="icon-youtube"></i></span><span class="ts-text">Youtube</span></a></li>
							<li><a href="https://instagram.com/semicolonweb" class="si-instagram" target="_blank"><span class="ts-icon"><i class="icon-instagram2"></i></span><span class="ts-text">Instagram</span></a></li>
							<li><a href="tel:+10.11.85412542" class="si-call"><span class="ts-icon"><i class="icon-call"></i></span><span class="ts-text">+10.11.85412542</span></a></li>
							<li><a href="mailto:info@canvas.com" class="si-email3"><span class="ts-icon"><i class="icon-envelope-alt"></i></span><span class="ts-text">info@canvas.com</span></a></li>
						</ul><!-- #top-social end -->

					</div>
				</div>

			</div>
		</div><!-- #top-bar end -->

		<!-- Header
		============================================= -->
		<header id="header" class="transparent-header floating-header header-size-md">
			<div id="header-wrap">
				<div class="container">
					<div class="header-row">

						<!-- Logo
						============================================= -->
						<div id="logo">
							<a href="{{asset('/')}}" class="standard-logo" data-dark-logo="images/logo-dark.png"><img src="images/logo.png" alt="Canvas Logo"></a>
							<a href="{{asset('/')}}" class="retina-logo" data-dark-logo="images/logo-dark@2x.png"><img src="images/good.svg" alt="Canvas Logo"></a>
						</div><!-- #logo end -->

						<div class="header-misc">

							<!-- Top Search
							============================================= -->
							<div id="top-search" class="header-misc-icon">
								<a href="#" id="top-search-trigger"><i class="icon-line-search"></i><i class="icon-line-cross"></i></a>
							</div><!-- #top-search end -->

							<a href="demo-seo-about.html" class="button button-rounded ms-3 d-none d-sm-block">馬上開始</a>

						</div>

						<div id="primary-menu-trigger">
							<svg class="svg-trigger" viewBox="0 0 100 100"><path d="m 30,33 h 40 c 3.722839,0 7.5,3.126468 7.5,8.578427 0,5.451959 -2.727029,8.421573 -7.5,8.421573 h -20"></path><path d="m 30,50 h 40"></path><path d="m 70,67 h -40 c 0,0 -7.5,-0.802118 -7.5,-8.365747 0,-7.563629 7.5,-8.634253 7.5,-8.634253 h 20"></path></svg>
						</div>

						<!-- Primary Navigation
						============================================= -->
						<nav class="primary-menu with-arrows">

							<ul class="menu-container">
								<li class="menu-item current"><a class="menu-link" href="{{asset('/')}}"><div>首頁</div></a></li>
								<li class="menu-item"><a class="menu-link" href="{{asset('/about')}}"><div>關於我們</div></a></li>
								<li class="menu-item mega-menu"><div class="menu-link"><div>服務項目</div></div>
									<div class="mega-menu-content mega-menu-style-2 px-0">
										<div class="container">
											<div class="row">
												<a href="demo-seo-optimizations.html" class="mega-menu-column sub-menu-container col-lg-4 border-bottom h-bg-light py-4">
													<div class="feature-box">
														<div class="fbox-icon mb-2">
															<img src="demos/seo/images/icons/seo.svg" alt="Feature Icon" class="bg-transparent rounded-0">
														</div>
														<div class="fbox-content">
															<h3 class="nott ls0">Seo Optimization</h3>
															<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Commodi, ipsa!</p>
														</div>
													</div>
												</a>
												<a href="demo-seo-social.html" class="mega-menu-column sub-menu-container col-lg-4 border-bottom h-bg-light py-4">
													<div class="feature-box">
														<div class="fbox-icon mb-2">
															<img src="demos/seo/images/icons/social.svg" alt="Feature Icon" class="bg-transparent rounded-0">
														</div>
														<div class="fbox-content">
															<h3 class="nott ls0">Social Media Marketing</h3>
															<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Commodi, ipsa!</p>
														</div>
													</div>
												</a>
												<a href="demo-seo-adwords.html" class="mega-menu-column sub-menu-container col-lg-4 border-bottom h-bg-light py-4">
													<div class="feature-box">
														<div class="fbox-icon mb-2">
															<img src="demos/seo/images/icons/adword.svg" alt="Feature Icon" class="bg-transparent rounded-0">
														</div>
														<div class="fbox-content">
															<h3 class="nott ls0">Adwords Campaign</h3>
															<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Commodi, ipsa!</p>
														</div>
													</div>
												</a>
												<a href="demo-seo-experience.html" class="mega-menu-column sub-menu-container col-lg-4 border-bottom h-bg-light py-4">
													<div class="feature-box">
														<div class="fbox-icon mb-2">
															<img src="demos/seo/images/icons/experience.svg" alt="Feature Icon" class="bg-transparent rounded-0">
														</div>
														<div class="fbox-content">
															<h3 class="nott ls0">Customer Experience</h3>
															<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Commodi, ipsa!</p>
														</div>
													</div>
												</a>
												<a href="demo-seo-analysis.html" class="mega-menu-column sub-menu-container col-lg-4 border-bottom h-bg-light py-4">
													<div class="feature-box">
														<div class="fbox-icon mb-2">
															<img src="demos/seo/images/icons/analysis.svg" alt="Feature Icon" class="bg-transparent rounded-0">
														</div>
														<div class="fbox-content">
															<h3 class="nott ls0">Digital Analysis</h3>
															<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Commodi, ipsa!</p>
														</div>
													</div>
												</a>
												<a href="demo-seo-content-marketing.html" class="mega-menu-column sub-menu-container col-lg-4 border-bottom h-bg-light py-4">
													<div class="feature-box">
														<div class="fbox-icon mb-2">
															<img src="demos/seo/images/icons/content_marketing.svg" alt="Feature Icon" class="bg-transparent rounded-0">
														</div>
														<div class="fbox-content">
															<h3 class="nott ls0">Content Marketing</h3>
															<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Commodi, ipsa!</p>
														</div>
													</div>
												</a>
												<div class="mega-menu-column sub-menu-container col-12 p-0">
													<a href="demo-seo-about.html" class="button button-rounded button-large nott ls0 w-100 text-center m-0 rounded-0 py-3 button-light ">View All <i class="icon-line-arrow-right"></i></a>
												</div>
											</div>
										</div>
									</div>
								</li>
								<li class="menu-item"><a class="menu-link" href="demo-seo-faqs.html"><div>Demo範例</div></a></li>
								<li class="menu-item"><a class="menu-link" href="demo-seo-contact.html"><div>聯絡我們</div></a></li>
							</ul>

						</nav><!-- #primary-menu end -->

						<form class="top-search-form" action="search.html" method="get">
							<input type="text" name="q" class="form-control" value="" placeholder="Type &amp; Hit Enter.." autocomplete="off">
						</form>

					</div>
				</div>
			</div>
			<div class="header-wrap-clone"></div>
		</header><!-- #header end -->

       @yield('content')

		<!-- Footer
		============================================= -->
		<footer id="footer" class="border-0 bg-white">
			<div class="container">
				<!-- Footer Widgets
				============================================= -->
				<div class="footer-widgets-wrap pb-5 clearfix">

					<div class="row col-mb-50">
						<div class="col-md-8">

							<div class="widget clearfix">

								<img src="images/good.svg" alt="Footer Logo" class="alignleft" style="margin-top: 8px; padding-right: 18px; border-right: 1px solid #DDD;">

								<p>網頁設計公司不會告訴你的一件事，速度是可以簡單測試的，很多網站公司自己的網站都不及格，要如何幫您打造好的網站？我們的網站可以在Google拿到90分的高分，這個分數不重要嗎？</p>

								<div class="line line-sm"></div>

								<div class="row">
									<div class="col-lg-3 col-6 bottommargin-sm widget_links">
										<ul>
											<li><a href="#">首頁</a></li>
											<li><a href="#">關於我們</a></li>
											<li><a href="#">常見問題</a></li>
											<li><a href="#">價格方案</a></li>
											<li><a href="#">聯絡我們</a></li>
										</ul>
									</div>

									<div class="col-lg-3 col-6 bottommargin-sm widget_links">
										<ul>
											<li><a href="#">商店</a></li>
											<li><a href="#">作品</a></li>
											<li><a href="#">最新消息</a></li>
											<li><a href="#">客戶實例</a></li>
											<li><a href="#">聯絡我們</a></li>
										</ul>
									</div>

									<div class="col-lg-3 col-6 bottommargin-sm widget_links">
										<ul>
											<li><a href="#">Corporate</a></li>
											<li><a href="#">Agency</a></li>
											<li><a href="#">eCommerce</a></li>
											<li><a href="#">Personal</a></li>
											<li><a href="#">One Page</a></li>
										</ul>
									</div>

									<div class="col-lg-3 col-6 bottommargin-sm widget_links">
										<ul>
											<li><a href="#">Restaurant</a></li>
											<li><a href="#">Wedding</a></li>
											<li><a href="#">App Showcase</a></li>
											<li><a href="#">Magazine</a></li>
											<li><a href="#">Landing Page</a></li>
										</ul>
									</div>
								</div>

							</div>

						</div>

						<div class="col-md-4">
							<div class="widget clearfix">

								<div class="row clearfix">
									<div class="col-12">
										<div class="feature-box fbox-plain fbox-sm align-items-center">
											<div class="fbox-icon">
												<i class="icon-envelope text-dark"></i>
											</div>
											<div class="fbox-content">
												<span class="text-muted">Call Us:</span><br>
												<h3 class="nott ls0 fw-semibold">(10) 22 33445566</h3>
											</div>
										</div>
									</div>

									<div class="col-12 mt-4">
										<div class="feature-box fbox-plain fbox-sm align-items-center">
											<div class="fbox-icon">
												<i class="icon-phone3 text-dark"></i>
											</div>
											<div class="fbox-content">
												<span class="text-muted">Email Us:</span><br>
												<h3 class="nott ls0 fw-semibold">info@canvas.com</h3>
											</div>
										</div>
									</div>
								</div>

							</div>

							<div class="widget subscribe-widget clearfix">
								<h5><strong>Subscribe</strong> to Our Newsletter to get Important News, Amazing Offers &amp; Inside Scoops:</h5>
								<div class="widget-subscribe-form-result"></div>
								<form id="widget-subscribe-form" action="include/subscribe.php" method="post" class="mb-0">
									<div class="input-group mx-auto">
										<div class="input-group-text bg-transparent"><i class="icon-email2"></i></div>
										<input type="email" id="widget-subscribe-form-email" name="widget-subscribe-form-email" class="form-control required email" placeholder="Enter your Email">
										<button class="btn btn-success button button-color nott ls0 m-0" type="submit">Subscribe</button>
									</div>
								</form>
							</div>

							<div class="widget">

								<div class="row col-mb-30">
									<div class="col-lg-6 col-md-12 col-6">
										<a href="https://facebook.com/semicolonweb" target="_blank" class="social-icon si-dark si-colored si-facebook mb-0" style="margin-right: 10px;">
											<i class="icon-facebook"></i>
											<i class="icon-facebook"></i>
										</a>
										<a href="https://facebook.com/semicolonweb" target="_blank" class="text-dark"><small style="display: block; margin-top: 3px;"><strong>Like us</strong><br>on Facebook</small></a>
									</div>
									<div class="col-lg-6 col-md-12 col-6">
										<a href="https://themeforest.net/user/SemiColonWeb/follow" target="_blank" class="social-icon si-dark si-colored si-rss mb-0" style="margin-right: 10px;">
											<i class="icon-rss"></i>
											<i class="icon-rss"></i>
										</a>
										<a href="https://themeforest.net/user/SemiColonWeb/follow" target="_blank" class="text-dark"><small style="display: block; margin-top: 3px;"><strong>Subscribe</strong><br>to RSS Feeds</small></a>
									</div>
								</div>

							</div>
						</div>
					</div>

				</div><!-- .footer-widgets-wrap end -->
			</div>

			<!-- Copyrights
			============================================= -->
			<div id="copyrights" style="background: url('demos/seo/images/hero/footer.svg') no-repeat top center; background-size: cover; padding-top: 70px;">
				<div class="container clearfix">

					<div class="row justify-content-between col-mb-30">
						<div class="col-12 col-lg-auto text-center text-lg-start">
							Copyrights &copy; 2020 All Rights Reserved by 順網科技<br>
							<div class="copyright-links"><a href="#">Terms of Use</a> / <a href="#">Privacy Policy</a></div>
						</div>

						<div class="col-12 col-lg-auto text-center text-lg-end">
							<div class="copyrights-menu copyright-links clearfix">
								<a href="#">Home</a>/<a href="#">About Us</a>/<a href="#">Team</a>/<a href="#">Clients</a>/<a href="#">FAQs</a>/<a href="#">Contact</a>
							</div>
						</div>
					</div>

				</div>
			</div><!-- #copyrights end -->
		</footer><!-- #footer end -->

	</div><!-- #wrapper end -->

	<!-- Go To Top
	============================================= -->
	<div id="gotoTop" class="icon-angle-up"></div>

	<!-- JavaScripts
	============================================= -->
	<script src="js/jquery.js"></script>
	<script src="js/plugins.min.js"></script>

	<!-- Footer Scripts
	============================================= -->
	<script src="js/functions.js"></script>

</body>
</html>