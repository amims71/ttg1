@extends('layouts')

@section('title', 'Team')

@section('section-content')


	<!-- Start Page Title Area -->
	<div class="page-title-area item-bg1">
		<div class="d-table">
			<div class="d-table-cell">
				<div class="container">
					<div class="page-title-content">
						<h2>Team</h2>
						<ul>
							<li><a href="{{route('home')}}">Home</a>
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
	@include('services.experts')
	<!-- End Team Section -->


@endsection
