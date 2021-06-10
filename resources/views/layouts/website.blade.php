<!DOCTYPE html>
<html dir="ltr" lang="en-US">

<head>

    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="author" content="Fatiha Online Islamic School" />
    <meta name="description"
        content="Fatiha online is one of the modern virtual Islamic schools which provides high quality online curriculum in Islamic education and training. ">

    <!-- Stylesheets
 ============================================= -->
    <link
        href="https://fonts.googleapis.com/css?family=Lato:300,400,400i,700|Poppins:300,400,500,600,700|PT+Serif:400,400i&display=swap"
        rel="stylesheet" type="text/css" />
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
                            <a href="{{ route('index') }}" class="standard-logo"><img
                                    src="{{ asset('assets/website/img/logo_horizontal.png') }}"
                                    alt="Fatiha Logo"></a>
                            <a href="{{ route('index') }}" class="retina-logo"><img
                                    src="{{ asset('assets/website/img/logo_horizontal.png') }}"
                                    alt="Fatiha Logo"></a>
                        </div><!-- #logo end -->

                        <div id="primary-menu-trigger">
                            <svg class="svg-trigger" viewBox="0 0 100 100">
                                <path
                                    d="m 30,33 h 40 c 3.722839,0 7.5,3.126468 7.5,8.578427 0,5.451959 -2.727029,8.421573 -7.5,8.421573 h -20">
                                </path>
                                <path d="m 30,50 h 40"></path>
                                <path
                                    d="m 70,67 h -40 c 0,0 -7.5,-0.802118 -7.5,-8.365747 0,-7.563629 7.5,-8.634253 7.5,-8.634253 h 20">
                                </path>
                            </svg>
                        </div>

                        {{-- <div class="header-misc">
							<a href="#" class="button font-weight-semibold">Apply Now</a>
						</div> --}}

                        <!-- Primary Navigation
      ============================================= -->
                        <nav class="primary-menu">

                            <ul class="menu-container border-right-0 mr-0">
                                <li class="menu-item active">
                                    <a class="menu-link" href="{{ route('index') }}">
                                        <div>Home</div>
                                    </a>
                                </li>

                                <li class="menu-item">
                                    <a class="menu-link" href="javascript:void(0)">
                                        <div>About Us</div>
                                    </a>
                                </li>

                                <li class="menu-item">
                                    <a class="menu-link" href="javascript:void(0)">
                                        <div>Team</div>
                                    </a>
                                </li>
                                <li class="menu-item">
                                    <a class="menu-link" href="javascript:void(0)">
                                        <div>Contact Us</div>
                                    </a>
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
            <!-- Copyrights
   ============================================= -->
            <div id="copyrights" class="bg-light">
                <div class="container">

                    <div class="row text-center">

						<div class="col-md-6 m-auto text-black-50">
							<img src="{{ asset('assets/website/img/logo.png') }}" class="img-fluid" alt="Fatiha Logo"
							width="150">
							<div class="my-2">
                                Copyrights &copy; {{ date('Y') }} All Rights Reserved by Fatiha LLC.
                            </div>
							<div class="d-md-flex flex-md-column my-2">
								<div class="contact mb-3">
									<a href="tel:+918089537115" class="text-dark mr-3">
										<i class="icon-line2-earphones-alt mr-1"></i>
										+91 8089 537 115
									</a>
									<a href="mailto:info@fatiha.me" class="text-dark">
										<i class="icon-email3 mr-1"></i>
										info@fatiha.me
									</a>
								</div>
								<div class="d-flex justify-content-center">
									<a target="_blank" href="https://facebook.com/fatihaonlineislamicschool"
										class="social-icon si-small si-facebook" title="Facebook">
										<i class="icon-facebook"></i>
										<i class="icon-facebook"></i>
									</a>
	
									<a target="_blank" href="https://instagram.com/fatihaonlineislamicschool"
										class="social-icon si-small si-instagram" title="instagram">
										<i class="icon-instagram"></i>
										<i class="icon-instagram"></i>
									</a>
	
									<a target="_blank" href="https://www.youtube.com/channel/UCkAvMyoAZ6qq9_oL6Swst5w"
										class="social-icon si-small si-pinterest" title="Youtube">
										<i class="icon-youtube"></i>
										<i class="icon-youtube"></i>
									</a>
	
									<a href="https://api.whatsapp.com/send?phone=918089537115" target="_blank"
										class="social-icon si-small si-wikipedia" title="Whatsapp">
										<i class="icon-whatsapp"></i>
										<i class="icon-whatsapp"></i>
									</a>
								</div>
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
    <script src="{{ asset('assets/website/js/jquery.js') }}"></script>
    <script src="{{ asset('assets/website/js/plugins.min.js') }}"></script>

    <!-- Footer Scripts
 ============================================= -->
    <script src="{{ asset('assets/website/js/functions.js') }}"></script>

    <script src="{{ asset('assets/website/js/components/datepicker.js') }}"></script>

    <script src="{{ asset('assets/website/js/website-custom.js') }}"></script>

    @yield('scripts')

    <script>
        $(function() {
            @yield('custom_js')
        })

    </script>

</body>

</html>
