<!DOCTYPE html>
<html dir="ltr" lang="en-US">
<head>

	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="author" content="Fatiha Online Islamic School" />
	<meta name="description" content="Fatiha online is one of the modern virtual Islamic schools which provides high quality online curriculum in Islamic education and training. ">

	<!-- Stylesheets
	============================================= -->
	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,400i,700|Poppins:300,400,500,600,700|PT+Serif:400,400i&display=swap" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" href="{{ asset('assets/website/css/bootstrap.css') }}" type="text/css" />
	<link rel="stylesheet" href="{{ asset('assets/website/css/style.css') }}" type="text/css" />
	<link rel="stylesheet" href="{{ asset('assets/website/css/swiper.css') }}" type="text/css" />
	<link rel="stylesheet" href="{{ asset('assets/website/css/dark.css') }}" type="text/css" />
	<link rel="stylesheet" href="{{ asset('assets/website/css/font-icons.css') }}" type="text/css" />
	<link rel="stylesheet" href="{{ asset('assets/website/css/animate.css') }}" type="text/css" />
	<link rel="stylesheet" href="{{ asset('assets/website/css/magnific-popup.css') }}" type="text/css" />
	
	<link rel="stylesheet" href="{{ asset('assets/website/css/components/datepicker.css') }}" type="text/css" />
	<link rel="stylesheet" href="{{ asset('assets/website/css/hostel.css') }}" type="text/css" />
	<link rel="stylesheet" href="{{ asset('assets/website/css/fonts.css') }}" type="text/css" />

	<link rel="stylesheet" href="{{ asset('assets/website/css/custom.css') }}" type="text/css" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />

	<meta name="theme-color" content="#203d66">

	<!-- Document Title
	============================================= -->
	<title>{{ $pageTitle }} - Fatiha Online Islamic School</title>
    <link rel="shortcut icon" href="{{ asset('assets/website/img/favicon.png') }}" type="image/x-icon">

	@yield('styles')

</head>

<body class="stretched">

	<!-- Document Wrapper
	============================================= -->
	<div id="wrapper" class="clearfix">

		<!-- Header
		============================================= -->
		<header id="header" class="full-header border-0 header-size-custom" data-sticky-shrink="false">
			<div id="header-wrap">
				<div class="container-fluid pr-0">
					<div class="header-row">

						<!-- Logo
						============================================= -->
						<div id="logo" class="col col-sm-auto">
							<a href="{{ route('index') }}" class="standard-logo" ><img src="{{ asset('assets/website/img/logo_horizontal.png') }}" alt="Fatiha Logo"></a>
							<a href="{{ route('index') }}" class="retina-logo"><img src="{{ asset('assets/website/img/logo_horizontal.png') }}" alt="Fatiha Logo"></a>
						</div><!-- #logo end -->

						<div id="primary-menu-trigger">
							<svg class="svg-trigger" viewBox="0 0 100 100"><path d="m 30,33 h 40 c 3.722839,0 7.5,3.126468 7.5,8.578427 0,5.451959 -2.727029,8.421573 -7.5,8.421573 h -20"></path><path d="m 30,50 h 40"></path><path d="m 70,67 h -40 c 0,0 -7.5,-0.802118 -7.5,-8.365747 0,-7.563629 7.5,-8.634253 7.5,-8.634253 h 20"></path></svg>
						</div>

						{{-- <div class="header-misc">
							<a href="#" class="button font-weight-semibold">Apply Now</a>
						</div> --}}

						<!-- Primary Navigation
						============================================= -->
						<nav class="primary-menu">

							<ul class="menu-container border-right-0 mr-0">
								<li class="menu-item active">
									<a class="menu-link" href="{{ route('index') }}"><div>Home</div></a>
								</li>

								<li class="menu-item">
									<a class="menu-link" href="javascript:void(0)"><div>About Us</div></a>
								</li>

								<li class="menu-item">
									<a class="menu-link" href="javascript:void(0)"><div>Team</div></a>
								</li>
								<li class="menu-item">
									<a class="menu-link" href="javascript:void(0)"><div>Contact Us</div></a>
								</li>
							</ul>

						</nav><!-- #primary-menu end -->

					</div>
				</div>
			</div>
			<div class="header-wrap-clone"></div>
		</header><!-- #header end -->


        @yield('content')

			<!-- Footer
		============================================= -->
		<footer id="footer" class="bg-transparent">
			<div class="container">

				<!-- Footer Widgets
				============================================= -->
				<div class="footer-widgets-wrap">
					<div class="row">

						<div class="col-lg-2 col-md-2 col-6 mb-5 mb-md-0">
							<div class="widget widget_links widget-li-noicon">

								{{-- <h4 class="ls0 mb-4 nott">Fatiha Online Islamic School</h4> --}}
								<img src="{{ asset('assets/website/img/logo.png') }}" class="img-fluid" alt="">
								{{-- <ul class="list-unstyled iconlist ml-0">
									<li><a href="#">Help Center</a></li>
									<li><a href="#">Paid with Moblie</a></li>
									<li><a href="#">Status</a></li>
								</ul> --}}

							</div>
						</div>
						{{-- <div class="col-lg-2 col-md-2 col-6 mb-5 mb-md-0">
							<div class="widget widget_links widget-li-noicon">

								<h4 class="ls0 mb-4 nott">Support</h4>

								<ul class="list-unstyled iconlist ml-0">
									<li><a href="#">Home</a></li>
									<li><a href="#">About</a></li>
									<li><a href="#">FAQs</a></li>
								</ul>

							</div>
						</div> --}}
						{{-- <div class="col-lg-2 col-md-2 col-6 mb-5 mb-md-0">
							<div class="widget widget_links widget-li-noicon">

								<h4 class="ls0 mb-4 nott">Trending</h4>

								<ul class="list-unstyled iconlist ml-0">
									<li><a href="#">Shop</a></li>
									<li><a href="#">Events</a></li>
									<li><a href="#">Forums</a></li>
								</ul>

							</div>
						</div> --}}
						{{-- <div class="col-lg-2 col-md-2 col-6 mb-5 mb-md-0">
							<div class="widget widget_links widget-li-noicon">

								<h4 class="ls0 mb-4 nott">Get to Know us</h4>

								<ul class="list-unstyled iconlist ml-0">
									<li><a href="#">eCommerce</a></li>
									<li><a href="#">Personal</a></li>
									<li><a href="#">OnePage</a></li>
								</ul>

							</div>
						</div> --}}
						<div class="col-md-6">
							<p>Fatiha online is one of the modern virtual Islamic schools which provides high quality online curriculum in Islamic education and training. As an outstanding Islamic virtual school, Fatiha focuses on the spiritual, cognitive and behavioral development of the students. We have a dedicated team of passionate educators who work hard to ensure the quality teaching and mentoring.</p>
							<p>In Fatiha, your child will experience a friendly learning environment. The dedicated mentors, who are among the leading Islamic Scholars from different parts of the world, well trained on online education and with adequate knowledge about online learning tools will educate, train and assess your wards in order to assure a quality development.</p>
						</div>
						<div class="col-lg-4 col-md-4 text-md-right">
							<div class="widget">
								<div>
									<address>
										<a href="mailto:info@fatiha.me">info@fatiha.me</a>
									</address>
									<h3 class="mb-3"><a href="tel:+918281134522" class="text-dark"><i class="icon-line2-earphones-alt mr-1"></i> +91 82811 34522</a></h3>
									<div class="d-flex justify-content-md-end">
										<a target="_blank" href="https://facebook.com/fatihaonlineislamicschool" class="social-icon si-small si-facebook" title="Facebook">
											<i class="icon-facebook"></i>
											<i class="icon-facebook"></i>
										</a>

										<a target="_blank" href="https://instagram.com/fatihaonlineislamicschool" class="social-icon si-small si-instagram" title="instagram">
											<i class="icon-instagram"></i>
											<i class="icon-instagram"></i>
										</a>

										<a target="_blank" href="https://www.youtube.com/channel/UCkAvMyoAZ6qq9_oL6Swst5w" class="social-icon si-small si-pinterest" title="Youtube">
											<i class="icon-youtube"></i>
											<i class="icon-youtube"></i>
										</a>

										<a href="https://api.whatsapp.com/send?phone=918281134522" target="_blank" class="social-icon si-small si-wikipedia" title="Whatsapp">
											<i class="icon-whatsapp"></i>
											<i class="icon-whatsapp"></i>
										</a>
									</div>
								</div>

							</div>
						</div>

					</div>

				</div><!-- .footer-widgets-wrap end -->

			</div>

			<!-- Copyrights
			============================================= -->
			<div id="copyrights" class="bg-light">
				<div class="container">

					<div class="row justify-content-between align-items-center">
						<div class="col-md-6 text-black-50">
							Copyrights &copy; {{ date('Y') }} All Rights Reserved by Fatiha LLC.
						</div>

						{{-- <div class="col-md-6 d-md-flex flex-md-column align-items-md-end mt-4 mt-md-0">
							<div class="copyrights-menu copyright-links text-black-50 clearfix">
								<a href="mailto:info@fatiha.me">info@faiha.me</a>
								<a href="tel:+918281134522">+91 82811 34522</a>
							</div>
						</div> --}}
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
	<script src="{{ asset('assets/website/js/jquery.js') }}"></script>
	<script src="{{ asset('assets/website/js/plugins.min.js') }}"></script>

	<!-- Footer Scripts
	============================================= -->
	<script src="{{ asset('assets/website/js/functions.js') }}"></script>

	<script src="{{ asset('assets/website/js/components/datepicker.js') }}"></script>
	
	<script src="{{ asset('assets/website/js/website-custom.js') }}"></script>

	@yield('scripts')

	<script>
		$(function(){
			@yield('custom_js')
		})
	</script>

</body>
</html>