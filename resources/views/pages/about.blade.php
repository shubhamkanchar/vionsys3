@extends('layouts.app',['title' => 'About Us'])

@section('content')
    <!-- Start Page Title Area -->
    <div class="page-title-area">
		<div class="d-table">
			<div class="d-table-cell">
				<div class="container">
					<div class="page-title-content">
						<h2>About Us</h2>
						<ul>
							<li><a href="{{ route('index') }}">Home</a></li>
							<li>About Us</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- End Page Title Area -->
	
	<!-- Start About Section -->
	@include('section.about-company')
	<!-- End About Section -->
	
	<!-- Start Counter Section -->
	@include('section.counter')
	<!-- End Counter Section -->
	
	@include('section.team')
	
	<!-- Start Testimonial Section -->
	@include('section.testomonial')
	<!-- End Testimonial Section -->
	
	<!-- Start Hire Section -->
	@include('section.hire')
	<!-- End Hire Section -->
	
	<!-- Start Partner section -->
	@include('section.customer')
	<!-- End Partner section -->
	
@endsection