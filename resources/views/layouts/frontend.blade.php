<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>@yield('title')</title>
<!-- Stylesheets -->
<link href="/frontend/css/bootstrap.min.css" rel="stylesheet">
<link href="/frontend/plugins/revolution/css/settings.css" rel="stylesheet" type="text/css"><!-- REVOLUTION SETTINGS STYLES -->
<link href="/frontend/plugins/revolution/css/layers.css" rel="stylesheet" type="text/css"><!-- REVOLUTION LAYERS STYLES -->
<link href="/frontend/plugins/revolution/css/navigation.css" rel="stylesheet" type="text/css"><!-- REVOLUTION NAVIGATION STYLES -->
<link href="/frontend/css/style.css" rel="stylesheet">
<link rel="shortcut icon" href="/frontend/images/favicon.png" type="image/x-icon">
<link rel="icon" href="/frontend/images/favicon.png" type="image/x-icon">
<link href="/frontend/css/my.css" rel="stylesheet">
<meta name="description" content="Hi Tech Enterprises provides advanced industrial and construction machinery solutions engineered for performance, reliability, and productivity."/>
<meta name="robots" content="follow, index, max-snippet:-1, max-video-preview:-1, max-image-preview:large"/>
<link rel="canonical" href="{{ url()->current() }}" />
<!-- Responsive -->
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
<!--[if lt IE 9]><script src="js/html5shiv.js"></script><![endif]-->
<!--[if lt IE 9]><script src="js/respond.js"></script><![endif]-->
</head>

<body>

<div class="page-wrapper">

	<!-- Preloader -->
	<!-- <div class="preloader"></div> -->

<header class="main-header header-style-two">
		<!-- Header Top -->
		<div class="header-top">
			<div class="auto-container">
				<div class="inner-container">

					<div class="top-left">
						<div class="text">Welcome To Hi-Tech Enterprises</div>
						<div class="date">Office Hours: Mon-Fri: 09:00AM-6:00PM</div>
					</div>

					<div class="top-right">
						<ul class="social-icon-four">
							<li><a href="#"><span class="fab fa-facebook-square"></span></a></li>
							<li><a href="#"><span class="fa fa-x"></span></a></li>
							<li><a href="#"><span class="fab fa-youtube"></span></a></li>
							<li><a href="#"><span class="fab fa-brands fa-linkedin"></span></a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<!-- Header Top -->
		<!-- Header Lower -->
		<div class="header-lower">
			<div class="auto-container">
				<div class="inner-container">
					<div class="logo-box">
						<div class="logo"><a href="/"><img src="/frontend/my-img/logo.png" alt="" title="Transend" style="width:175px; height:100px;"></a></div>
					</div>
					<!-- Main box -->
					<div class="main-box">
						<!--Nav Box-->
						<div class="nav-outer">
							<nav class="nav main-menu">
								<ul class="navigation">
									<li> <a href="/">Home</a></li>
									<li><a href="/about">About Us</a></li>
									<li class="dropdown"><a href="#">Products</a>
										<ul>
											<li><a href="#0">Roller</a></li>
											<li><a href="#0">Bulldozer</a></li>
											<li><a href="#0">Wheel Loader</a></li>
											<li><a href="#0">Material Handler</a></li>
										</ul>
									</li>
									<li><a href="/blogs">Blogs</a></li>
									<li><a href="/contact">Contact</a></li>
								</ul>
							</nav>
							<!-- Main Menu End-->
						</div>
					</div>


					<div class="outer-box">
						<a href="#0" class="theme-btn btn-style-one"><i class="icon fa fas fa-plus"></i><span class="btn-title">Request A Quote</span></a>

						<!-- Mobile Nav Btn -->
						<div class="grid-nav-btn mobile-nav-toggler">
							<div class="inner">
								<img class="icons" src="/frontend/images/icons/icon-1.png" alt="Icon">
							</div>
						</div>
					</div>

					<!-- Mobile Nav toggler -->
					<div class="mobile-nav-toggler"><span class="icon lnr-icon-bars"></span></div>
				</div>
			</div>
		</div>

		<!-- Mobile Menu  -->
		<div class="mobile-menu">
			<div class="menu-backdrop"></div>

			<!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header-->
			<nav class="menu-box">
				<div class="upper-box">
					<div class="nav-logo"><a href="/"><img src="/frontend/my-img/footer-bg.png" alt="" style="width:175px; height:100px;"></a></div>
					<div class="close-btn"><i class="icon fa fa-times"></i></div>
				</div>

				<ul class="navigation clearfix">
					<!--Keep This Empty / Menu will come through Javascript-->
				</ul>
				<ul class="contact-list-one">
					<li>
						<!-- Contact Info Box -->
						<div class="contact-info-box">
							<i class="icon lnr-icon-phone-handset"></i>
							<span class="title">Call Now</span>
							<a href="tel:+92880098670">+92 (8800) - 98670</a>
						</div>
					</li>
					<li>
						<!-- Contact Info Box -->
						<div class="contact-info-box">
							<span class="icon lnr-icon-envelope1"></span>
							<span class="title">Send Email</span>
							<a href="https://html.kodesolution.com/cdn-cgi/l/email-protection#076f626b774764686a7766697e2964686a"><span class="__cf_email__" data-cfemail="472f222b370724282a3726293e6924282a">[email&#160;protected]</span></a>
						</div>
					</li>
					<li>
						<!-- Contact Info Box -->
						<div class="contact-info-box">
							<span class="icon lnr-icon-clock"></span>
							<span class="title">Send Email</span>
							Mon - Sat 8:00 - 6:30, Sunday - CLOSED
						</div>
					</li>
				</ul>


				<ul class="social-links">
					<li><a href="#"><i class="fa fa-x"></i></a></li>
					<li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
					<li><a href="#"><i class="fab fa-pinterest"></i></a></li>
					<li><a href="#"><i class="fab fa-instagram"></i></a></li>
				</ul>
			</nav>
		</div><!-- End Mobile Menu -->

		<!-- Header Search -->
		<div class="search-popup">
			<span class="search-back-drop"></span>
			<button class="close-search"><span class="fa fa-times"></span></button>

			<div class="search-inner">
				<form method="post" action="https://html.kodesolution.com/2024/transend-html/#0">
					<div class="form-group">
						<input type="search" name="search-field" value="" placeholder="Search..." required="">
						<button type="submit"><i class="fa fa-search"></i></button>
					</div>
				</form>
			</div>
		</div>
		<!-- End Header Search -->

		<!-- Sticky Header  -->
		<div class="sticky-header">
			<div class="auto-container">
				<div class="inner-container">
					<!--Logo-->
					<div class="logo">
						<a href="/" title=""><img src="/frontend/my-img/logo.png" alt="" style="width:175px; height:100px;"></a>
					</div>

					<!--Right Col-->
					<div class="nav-outer">
						<!-- Main Menu -->
						<nav class="main-menu">
							<div class="navbar-collapse show collapse clearfix">
								<ul class="navigation clearfix">
									<!--Keep This Empty / Menu will come through Javascript-->
								</ul>
							</div>
						</nav><!-- Main Menu End-->

						<!--Mobile Navigation Toggler-->
						<div class="mobile-nav-toggler"><span class="icon lnr-icon-bars"></span></div>
					</div>
				</div>
			</div>
		</div><!-- End Sticky Menu -->
	</header>
	<!--End Main Header -->
    @yield('content')

	<!-- Main Footer -->
	<footer class="main-footer">
		<div class="bg bg-pattern-1"></div>
		<!-- Footer Top -->
		<!-- End Footer Top -->

		<!--Widgets Section-->
		<div class="widgets-section">
			<div class="auto-container">
				<div class="row">

					<!--Footer Column-->
					<div class="footer-column col-xl-4 col-lg-4 col-md-6 col-sm-6">
						<div class="footer-widget about-widget">
							<div class="logo"><a href="/"><img src="/frontend/my-img/footer-bg.png" alt=""style="width:175px; height:100px;" ></a></div>
							<div class="text">We understand that every business is unique, which is why we tailor our services to meet your specific needs.</div>
						</div>
					</div>

					<!--Footer Column-->
					<div class="footer-column col-xl-3 col-lg-3 col-md-6 col-sm-6">
						<div class="footer-widget company-widget">
							<h3 class="widget-title">Quick Links</h3>
							<ul class="user-links">
								<li><a href="/">Home</a></li>
								<li><a href="/about">About us</a></li>
								<li><a href="#0">Products</a></li>
								<li><a href="/blogs">Blog</a></li>
								<li><a href="/">Contact Us</a></li>
							</ul>
						</div>
					</div>

					<!--Footer Column-->
					<div class="footer-column col-xl-3 col-lg-3 col-md-6 col-sm-6">
						<div class="footer-widget contact-widget">
							<h3 class="widget-title">Contact Us</h3>
							<ul class="user-links">
								<li><a href="mailto:hitechenterprisesit@gmail.com"><i class="fa-regular fa-envelope"></i> hitechenterprisesit@gmail.com</a></li>
								<li><a href="tel:1234567890"><i class="fa-solid fa-phone"></i> +25 3692 3256</a></li>
								<li><a href="tel:1-900-322-8422"><i class="fa-solid fa-phone"></i> 1-900-322-8422</a></li>
							</ul>
						</div>
					</div>

					<!--Footer Column-->
					<div class="footer-column col-xl-2 col-lg-2 col-md-6 col-sm-6">
						<div class="footer-widget address-widget">
							<h3 class="widget-title">Our Address</h3>
							<div class="text">365 Hilton Street KYU 3269 <br>Berlin, Germany</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!--Footer Bottom-->
		<div class="footer-bottom">
			<div class="auto-container">
				<div class="inner-container">
					<div class="copyright-text">
						<p>Copyright © 2025 Hi Tech Enterprises. All Rights Reserved.</p>
					</div>

					<div class="copyright-right">
						<a href="/terms-and-conditions">Terms & Conditions</a>
						<a href="/privacy-policy">Privacy Policy</a>
					</div>
				</div>
			</div>
		</div>
	</footer>
	<!--End Main Footer -->

</div><!-- End Page Wrapper -->

<!-- Scroll To Top -->
<div class="scroll-to-top scroll-to-target" data-target="html"><span class="fa fa-angle-up"></span></div>

<script data-cfasync="false" src="/frontend/../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="/frontend/js/jquery.js"></script> 
<script src="/frontend/js/popper.min.js"></script>
<!--Revolution Slider-->
<script src="/frontend/plugins/revolution/js/jquery.themepunch.revolution.min.js"></script>
<script src="/frontend/plugins/revolution/js/jquery.themepunch.tools.min.js"></script>
<script src="/frontend/plugins/revolution/js/extensions/revolution.extension.actions.min.js"></script>
<script src="/frontend/plugins/revolution/js/extensions/revolution.extension.carousel.min.js"></script>
<script src="/frontend/plugins/revolution/js/extensions/revolution.extension.kenburn.min.js"></script>
<script src="/frontend/plugins/revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
<script src="/frontend/plugins/revolution/js/extensions/revolution.extension.migration.min.js"></script>
<script src="/frontend/plugins/revolution/js/extensions/revolution.extension.navigation.min.js"></script>
<script src="/frontend/plugins/revolution/js/extensions/revolution.extension.parallax.min.js"></script>
<script src="/frontend/plugins/revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
<script src="/frontend/plugins/revolution/js/extensions/revolution.extension.video.min.js"></script>
<script src="/frontend/js/main-slider-script.js"></script>
<!--Revolution Slider-->
<script src="/frontend/js/bootstrap.min.js"></script>
<script src="/frontend/js/jquery.fancybox.js"></script>
<script src="/frontend/js/jquery-ui.js"></script>
<script src="/frontend/js/wow.js"></script>
<script src="/frontend/js/appear.js"></script>
<script src="/frontend/js/select2.min.js"></script>
<script src="/frontend/js/swiper.min.js"></script>
<script src="/frontend/js/owl.js"></script>
<script src="/frontend/js/script.js"></script>
<script defer src="https://static.cloudflareinsights.com/beacon.min.js/vcd15cbe7772f49c399c6a5babf22c1241717689176015" integrity="sha512-ZpsOmlRQV6y907TI0dKBHq9Md29nnaEIPlkf84rnaERnq6zvWvPUqr2ft8M1aS28oN72PdrCzSjY4U6VaAw1EQ==" data-cf-beacon='{"version":"2024.11.0","token":"88f4fa328f314d4c95a104b4a60b2313","r":1,"server_timing":{"name":{"cfCacheStatus":true,"cfEdge":true,"cfExtPri":true,"cfL4":true,"cfOrigin":true,"cfSpeedBrain":true},"location_startswith":null}}' crossorigin="anonymous"></script>
</body>
</html>