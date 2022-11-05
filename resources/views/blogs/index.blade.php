@extends('layouts')

@section('title', 'Blog')

@section('section-content')


	<!-- Start Page Title Area -->
	<div class="page-title-area item-bg1">
		<div class="d-table">
			<div class="d-table-cell">
				<div class="container">
					<div class="page-title-content">
						<h2>Blog Grid</h2>
						<ul>
							<li><a href="index.html">Home</a>
							</li>
							<li>Blog Grid</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- End Page Title Area -->

	<!-- Start Blog Section -->
	@include('blogs.recent')
	<!-- End Blog Section -->

@endsection
