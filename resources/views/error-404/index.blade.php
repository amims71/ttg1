@extends('layouts')

@section('title', '404 - Not Found')

@section('section-content')

	<style>
		.error-area {
    height: 100% !important;
}
		</style>

	<!-- Start Preloader Area -->
	<div class="preloader">
		<div class="loader">
			<div class="shadow"></div>
			<div class="box"></div>
		</div>
	</div>
	<!-- End Preloader Area -->
	
	<!-- Start Error Area -->
	<section class="error-area">
		<div class="d-table">
			<div class="d-table-cell">
				<div class="container">
					<div class="error-content">
						<img src="assets/img/404.png" alt="error">
						<h3>Page Not Found</h3>
						<p>The page you are looking for might have been removed had its name changed or is temporarily unavailable.</p>
						<a href="/" class="default-btn-one">Go to Home</a>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- End Error Area -->

@endsection
