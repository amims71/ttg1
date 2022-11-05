@extends('layouts')

@section('title', 'Services Details')

@section('section-content')


	<!-- Start Page Title Area -->
	<div class="page-title-area item-bg1">
		<div class="d-table">
			<div class="d-table-cell">
				<div class="container">
					<div class="page-title-content">
						<h2>Services Details</h2>
						<ul>
							<li><a href="{{route('home')}}">Home</a></li>
							<li>Services Details</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- End Page Title Area -->

	<!-- Start Services Details Area -->
	<section class="services-details-area ptb-100">
		<div class="container">
			<div class="services-details-overview">
				<div class="row align-items-center">
					<div class="col-lg-12 col-md-12">
						<div class="image-sliders owl-carousel owl-theme">
							<div class="services-details-image">
								<img src="{{ URL::asset('assets/img/services-details/1.jpg')}}" alt="image">
							</div>
							<div class="services-details-image">
								<img src="{{ URL::asset('assets/img/services-details/2.jpg')}}" alt="image">
							</div>
							<div class="services-details-image">
								<img src="{{ URL::asset('assets/img/services-details/3.jpg')}}" alt="image">
							</div>
						</div>
					</div>
					<div class="col-lg-12 col-md-12">
						<div class="services-step-wrapper">
							<div class="services-step-title">
								<h2>Software Development Consulting We Provide</h2>
							</div>
							<div class="row">
								<div class="col-lg-6 col-md-12">
									<div class="services-step-content">
										<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. minim veniam, quis nostrud exercitation ullamco laboris nisi commodo consequat.</p>
										<div class="features-text">
											<h4>Step 1.</h4>
											<p><strong>Gathering your insights and ideas for software consultation:</strong> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. minim veniam, quis nostrud exercitation ullamco laboris nisi commodo consequat.</p>
										</div>
										<div class="features-text">
											<h4>Step 2.</h4>
											<p><strong>Exploring the environment:</strong> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. minim veniam, quis nostrud exercitation ullamco laboris nisi commodo consequat.</p>
										</div>
									</div>
								</div>
								<div class="col-lg-6 col-md-12">
									<div class="services-step-content">
										<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. minim veniam, quis nostrud exercitation ullamco laboris nisi commodo consequat.</p>
										<div class="features-text">
											<h4>Step 1.</h4>
											<p><strong>Gathering your insights and ideas for software consultation:</strong> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. minim veniam, quis nostrud exercitation ullamco laboris nisi commodo consequat.</p>
										</div>
										<div class="features-text">
											<h4>Step 2.</h4>
											<p><strong>Exploring the environment:</strong> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. minim veniam, quis nostrud exercitation ullamco laboris nisi commodo consequat.</p>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-12 col-md-12">
						<div class="services-step-wrapper">
							<div class="services-step-image">
								<img src="{{ URL::asset('assets/img/services-details/services-5.jpg')}}" alt="image">
							</div>
						</div>

						<div class="services-step-wrapper">
							<div class="services-step-title">
								<h2>Benefits Of Software Development Consulting Services (IT Consulting)</h2>
							</div>
							<div class="row">
								<div class="col-lg-6 col-md-12">
									<div class="services-step-content">
										<div class="features-text">
											<h4>Love for new ideas</h4>
											<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. minim veniam, quis nostrud exercitation ullamco laboris nisi commodo consequat.</p>
										</div>
										<div class="features-text">
											<h4>Years of experience</h4>
											<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. minim veniam, quis nostrud exercitation ullamco laboris nisi commodo consequat.</p>
										</div>
									</div>
								</div>
								<div class="col-lg-6 col-md-12">
									<div class="services-step-content">
										<div class="features-text">
											<h4>Tangible advice</h4>
											<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. minim veniam, quis nostrud exercitation ullamco laboris nisi commodo consequat.</p>
										</div>
										<div class="features-text">
											<h4>Covering every step</h4>
											<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. minim veniam, quis nostrud exercitation ullamco laboris nisi commodo consequat.</p>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- End Services Details Area -->
	<!-- Start Footer & Subscribe Section -->
	<section class="footer-subscribe-wrapper">
		<!-- Start Subscribe Area -->
		<div class="subscribe-area">
			<div class="container">
				<div class="row align-items-center">
					<div class="col-lg-6 col-md-6">
						<div class="subscribe-content">
							<h2>Sign Up Our Newsletter</h2>
							<span class="sub-title">We Offer An Informative Monthly Technology Newsletter - Check It Out.</span>
						</div>
					</div>
					<div class="col-lg-6 col-md-6">
						<form class="newsletter-form">
							<input type="email" class="input-newsletter" placeholder="Enter your email" name="EMAIL" required autocomplete="off">
							<button type="submit">Subscribe Now</button>
							<div id="validator-newsletter" class="form-result"></div>
						</form>
					</div>
				</div>
			</div>
		</div>
		<!-- End Subscribe Area -->
	</section>

@endsection
