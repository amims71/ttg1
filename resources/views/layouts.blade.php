<!doctype html>
<html lang="zxx">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!-- Title -->
	<title>@yield('title')</title>
	<!-- Google Fonts -->
	<link href="https://fonts.googleapis.com/css2?family=Dosis:wght@400;500;600;700;800&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Catamaran:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
	<!-- Favicon -->
	<link rel="icon" type="image/png" href="{{ URL::asset('assets/img/favicon.png') }}">
	<!-- Bootstrap Min CSS -->
	<link rel="stylesheet" href="{{ URL::asset('assets/css/bootstrap.min.css') }}">
	<!-- Animate Min CSS -->
	<link rel="stylesheet" href="{{ URL::asset('assets/css/animate.min.css') }}">
	<!-- FlatIcon CSS -->
	<link rel="stylesheet" href="{{ URL::asset('assets/css/flaticon.css') }}">
	<!-- Font Awesome Min CSS -->
	<link rel="stylesheet" href="{{ URL::asset('assets/css/fontawesome.min.css') }}">
	<!-- Mran Menu CSS -->
	<link rel="stylesheet" href="{{ URL::asset('assets/css/meanmenu.css') }}">
	<!-- Magnific Popup Min CSS -->
	<link rel="stylesheet" href="{{ URL::asset('assets/css/magnific-popup.min.css') }}">
	<!-- Nice Select Min CSS -->
	<link rel="stylesheet" href="{{ URL::asset('assets/css/nice-select.min.css') }}">
	<!-- Swiper Min CSS -->
	<link rel="stylesheet" href="{{ URL::asset('assets/css/swiper.min.css') }}">
	<!-- Owl Carousel Min CSS -->
	<link rel="stylesheet" href="{{ URL::asset('assets/css/owl.carousel.min.css') }}">
	<!-- Style CSS -->
	<link rel="stylesheet" href="{{ URL::asset('assets/css/style.css') }}">
	<!-- Responsive CSS -->
	<link rel="stylesheet" href="{{ URL::asset('assets/css/responsive.css') }}">
	<link rel="stylesheet" href="{{ URL::asset('assets/css/mystyle.css') }}">

	@yield("page-css")
</head>

<body @yield('body_class')>

	<!-- Start Preloader Area -->
	<div class="preloader">
		<div class="loader">
			<div class="shadow"></div>
			<div class="box"></div>
		</div>
	</div>
	<!-- End Preloader Area -->

	@include('partials.navbar')

	@yield('section-content')

	@include('partials.footer')

	<!-- Start Copy Right Section -->
	<div class="copyright-area">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-lg-6 col-md-6">
					<p> <i class="far fa-copyright"></i> 2021 Techvio - All Rights Reserved.</p>
				</div>
				<div class="col-lg-6 col-md-6">
					<ul>
						<li> <a href="{{route('terms_condition')}}">Terms & Conditions</a>
						</li>
						<li> <a href="{{route('privacy_policy')}}">Privacy Policy</a>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	<!-- End Copy Right Section -->

	<!-- Start Go Top Section -->
	<div class="go-top">
		<i class="fas fa-chevron-up"></i>
		<i class="fas fa-chevron-up"></i>
	</div>
	<!-- End Go Top Section -->

	<!-- jQuery Min JS -->
	<script src="{{ URL::asset('assets/js/jquery.min.js') }}"></script>
	<!-- Popper Min JS -->
	<script src="{{ URL::asset('assets/js/popper.min.js') }}"></script>
	<!-- Bootstrap Min JS -->
	<script src="{{ URL::asset('assets/js/bootstrap.min.js') }}"></script>
	<!-- MeanMenu JS  -->
	<script src="{{ URL::asset('assets/js/jquery.meanmenu.js') }}"></script>
	<!-- Appear Min JS -->
	<script src="{{ URL::asset('assets/js/jquery.appear.min.js') }}"></script>
	<!-- CounterUp Min JS -->
	<script src="{{ URL::asset('assets/js/jquery.waypoints.min.js') }}"></script>
	<script src="{{ URL::asset('assets/js/jquery.counterup.min.js') }}"></script>
	<!-- Owl Carousel Min JS -->
	<script src="{{ URL::asset('assets/js/owl.carousel.min.js') }}"></script>
	<!-- Magnific Popup Min JS -->
	<script src="{{ URL::asset('assets/js/jquery.magnific-popup.min.js') }}"></script>
	<!-- Nice Select Min JS -->
	<script src="{{ URL::asset('assets/js/jquery.nice-select.min.js') }}"></script>
	<!-- Isotope Min JS -->
	<script src="{{ URL::asset('assets/js/isotope.pkgd.min.js') }}"></script>
	<!-- Swiper Min JS -->
	<script src="{{ URL::asset('assets/js/swiper.min.js') }}"></script>
	<!-- WOW Min JS -->
	<script src="{{ URL::asset('assets/js/wow.min.js') }}"></script>
	<!-- Main JS -->
	<script src="{{ URL::asset('assets/js/main.js') }}"></script>

	@yield("page-script")

</body>

</html>
