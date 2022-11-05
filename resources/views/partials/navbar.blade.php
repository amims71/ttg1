

	<!-- Start Navbar Area -->
	<div class="navbar-area">
		<div class="techvio-responsive-nav">
			<div class="container">
				<div class="techvio-responsive-menu">
					<div class="logo">
						<a href="{{route('home')}}">
							<img src="{{ URL::asset('assets/img/logo.png') }}" style="height: 50px;" class="white-logo" alt="logo">
							<img src="{{ URL::asset('assets/img/logo-black.png') }}" style="height: 50px;" class="black-logo" alt="logo">
						</a>
					</div>
				</div>
			</div>
		</div>
		<div class="techvio-nav">
			<div class="container">
				<nav class="navbar navbar-expand-md navbar-light">
					<a class="navbar-brand" href="{{route('home')}}">
						<img src="{{ URL::asset('assets/img/logo.png') }}" style="height: 50px;" class="white-logo" alt="logo">
						<img src="{{ URL::asset('assets/img/logo-black.png') }}" style="height: 50px;" class="black-logo" alt="logo">
					</a>
					<div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">
						<ul class="navbar-nav">
							<li class="nav-item">
								<a href="/" class="nav-link">Home</a>
							</li>
							<li class="nav-item">
								<a href="{{ route('about')}}" class="nav-link">About Us</a>
							</li>
							<li class="nav-item">
								<a href="#" class="nav-link">Services <i class="fas fa-chevron-down"></i></a>
								<ul class="dropdown-menu">
									<li class="nav-item">
										<a href="{{ route('services') }}" class="nav-link">Services</a>
									</li>
									<li class="nav-item">
										<a href="{{ route('services') }}" class="nav-link">Services Details</a>
									</li>
								</ul>
							</li>
							<li class="nav-item">
								<a href="#" class="nav-link">Products <i class="fas fa-chevron-down"></i></a>
								<ul class="dropdown-menu">
									<li class="nav-item">
										<a href="{{ route('project') }}" class="nav-link">Products</a>
									</li>
									<li class="nav-item">
										<a href="{{ route('project.details') }}" class="nav-link">Products Details</a>
									</li>
								</ul>
							</li>
							<li class="nav-item">
								<a href="#" class="nav-link">Pages <i class="fas fa-chevron-down"></i></a>
								<ul class="dropdown-menu">
									<li class="nav-item">
										<a href="{{ route('about') }}" class="nav-link">About Us</a>
									</li>
									<li class="nav-item">
										<a href="{{ route('about') }}" class="nav-link">Team</a>
									</li>
									<li class="nav-item">
										<a href="{{ route('pricing') }}" class="nav-link">Pricing</a>
									</li>
									<li class="nav-item">
										<a href="{{ route('about') }}" class="nav-link">404 Error</a>
									</li>
									<li class="nav-item">
										<a href="{{ route('about') }}" class="nav-link">FAQ</a>
									</li>
									<li class="nav-item">
										<a href="{{ route('about') }}" class="nav-link">Coming Soon</a>
									</li>
									<li class="nav-item">
										<a href="{{ route('about') }}" class="nav-link">Terms & Conditions</a>
									</li>
									<li class="nav-item">
										<a href="{{ route('about') }}" class="nav-link">Privacy Policy</a>
									</li>
								</ul>
							</li>
							<li class="nav-item">
								<a href="#" class="nav-link">Blog <i class="fas fa-chevron-down"></i></a>
								<ul class="dropdown-menu">
									<li class="nav-item">
										<a href="{{ route('blogs') }}" class="nav-link">Blog Grid</a>
									</li>
									<li class="nav-item">
										<a href="{{ route('blogs') }}" class="nav-link">Blog Right Sidebar</a>
									</li>
									<li class="nav-item">
										<a href="{{ route('blogs') }}" class="nav-link">Blog Details</a>
									</li>
								</ul>
							</li>
							<li class="nav-item">
								<a href="{{ route('contact') }}" class="nav-link">Contact</a>
							</li>
						</ul>
						<div class="other-option">
							<a class="default-btn" href="mailto:demo@example.com">Get It Support <span></span></a>
						</div>
					</div>
				</nav>
			</div>
		</div>
	</div>
	<!-- End Navbar Area -->
