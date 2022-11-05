@extends('layouts')

@section('title', 'About')

@section('section-content')


	<!-- Start Page Title Area -->
	<div class="page-title-area">
		<div class="d-table">
			<div class="d-table-cell">
				<div class="container">
					<div class="page-title-content">
						<h2>About Us</h2>
						<ul>
							<li><a href="index.html">Home</a></li>
							<li>About Us</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- End Page Title Area -->

	<!-- Start About Section -->
	@include('about.company')
	<!-- End About Section -->

	<!-- Start Counter Section -->
	@include('about.counter')
	<!-- End Counter Section -->

	<!-- Start Team Section -->
    @include('services.experts')
	<!-- End Team Section -->

	<!-- Start Testimonial Section -->
	@include('about.testimonial')
	<!-- End Testimonial Section -->

	<!-- Start Hire Section -->
	@include('about.hire')
	<!-- End Hire Section -->

	<!-- Start Partner section -->
	@include('about.tech')
	<!-- End Partner section -->

@endsection
