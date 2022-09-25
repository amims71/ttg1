@extends('layouts')

@section('title', 'Home')

@section('section-content')


	<!-- Start Page Title Area -->
	<div class="page-title-area item-bg1">
		<div class="d-table">
			<div class="d-table-cell">
				<div class="container">
					<div class="page-title-content">
						<h2>Team</h2>
						<ul>
							<li><a href="index.html">Home</a>
							</li>
							<li>Team</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- End Page Title Area -->
	
	<!-- Start Team Section -->
	<section class="team-area section-padding">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="section-title">
						<h6>Team Member</h6>
						<h2>Expert Team</h2>
					</div>
				</div>
				<div class="col-lg-3 col-md-6">
					<div class="single-team-box">
						<div class="team-image">
							<img src="{{ URL::asset('assets/img/team/team-1.jpg') }}" alt="team" />
							<div class="team-social-icon">
								<a href="#" class="social-color-1"><i class="fab fa-facebook-f"></i></a>
								<a href="#" class="social-color-2"><i class="fab fa-twitter"></i></a>
								<a href="#" class="social-color-3"><i class="fab fa-linkedin"></i></a>
							</div>
						</div>
						<div class="team-info">
							<h3>Ava Farrington</h3>
							<span>Founder, ceo</span>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-md-6">
					<div class="single-team-box">
						<div class="team-image">
							<img src="{{ URL::asset('assets/img/team/team-2.jpg') }}" alt="team" />
							<div class="team-social-icon">
								<a href="#" class="social-color-1"><i class="fab fa-facebook-f"></i></a>
								<a href="#" class="social-color-2"><i class="fab fa-twitter"></i></a>
								<a href="#" class="social-color-3"><i class="fab fa-linkedin"></i></a>
							</div>
						</div>
						<div class="team-info">
							<h3>Kevin Haley</h3>
							<span>Co-founder, cto</span>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-md-6">
					<div class="single-team-box">
						<div class="team-image">
							<img src="{{ URL::asset('assets/img/team/team-3.jpg') }}" alt="team" />
							<div class="team-social-icon">
								<a href="#" class="social-color-1"><i class="fab fa-facebook-f"></i></a>
								<a href="#" class="social-color-2"><i class="fab fa-twitter"></i></a>
								<a href="#" class="social-color-3"><i class="fab fa-linkedin"></i></a>
							</div>
						</div>
						<div class="team-info">
							<h3>Alishia Fulton</h3>
							<span>Chief creative officer</span>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-md-6">
					<div class="single-team-box">
						<div class="team-image">
							<img src="{{ URL::asset('assets/img/team/team-4.jpg') }}" alt="team" />
							<div class="team-social-icon">
								<a href="#" class="social-color-1"><i class="fab fa-facebook-f"></i></a>
								<a href="#" class="social-color-2"><i class="fab fa-twitter"></i></a>
								<a href="#" class="social-color-3"><i class="fab fa-linkedin"></i></a>
							</div>
						</div>
						<div class="team-info">
							<h3>Lucas Martinez</h3>
							<span>Project Manager</span>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-md-6">
					<div class="single-team-box">
						<div class="team-image">
							<img src="{{ URL::asset('assets/img/team/team-5.jpg') }}" alt="team" />
							<div class="team-social-icon">
								<a href="#" class="social-color-1"><i class="fab fa-facebook-f"></i></a>
								<a href="#" class="social-color-2"><i class="fab fa-twitter"></i></a>
								<a href="#" class="social-color-3"><i class="fab fa-linkedin"></i></a>
							</div>
						</div>
						<div class="team-info">
							<h3>Rosie Johnson</h3>
							<span>Founder, ceo</span>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-md-6">
					<div class="single-team-box">
						<div class="team-image">
							<img src="{{ URL::asset('assets/img/team/team-6.jpg') }}" alt="team" />
							<div class="team-social-icon">
								<a href="#" class="social-color-1"><i class="fab fa-facebook-f"></i></a>
								<a href="#" class="social-color-2"><i class="fab fa-twitter"></i></a>
								<a href="#" class="social-color-3"><i class="fab fa-linkedin"></i></a>
							</div>
						</div>
						<div class="team-info">
							<h3>Joseph Holt</h3>
							<span>Co-founder, cto</span>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-md-6">
					<div class="single-team-box">
						<div class="team-image">
							<img src="{{ URL::asset('assets/img/team/team-7.jpg') }}" alt="team" />
							<div class="team-social-icon">
								<a href="#" class="social-color-1"><i class="fab fa-facebook-f"></i></a>
								<a href="#" class="social-color-2"><i class="fab fa-twitter"></i></a>
								<a href="#" class="social-color-3"><i class="fab fa-linkedin"></i></a>
							</div>
						</div>
						<div class="team-info">
							<h3>Leticia Carr</h3>
							<span>Chief creative officer</span>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-md-6">
					<div class="single-team-box">
						<div class="team-image">
							<img src="{{ URL::asset('assets/img/team/team-8.jpg') }}" alt="team" />
							<div class="team-social-icon">
								<a href="#" class="social-color-1"><i class="fab fa-facebook-f"></i></a>
								<a href="#" class="social-color-2"><i class="fab fa-twitter"></i></a>
								<a href="#" class="social-color-3"><i class="fab fa-linkedin"></i></a>
							</div>
						</div>
						<div class="team-info">
							<h3>Mack Diaz</h3>
							<span>Project Manager</span>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- End Team Section -->

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
	<!-- End Footer & Subscribe Section -->

@endsection