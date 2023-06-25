@extends('layouts.app',['title' => 'Home'])

@section('content')	
    <!-- Start Page Title Area -->
    <div class="page-title-area item-bg2">
		<div class="d-table">
			<div class="d-table-cell">
				<div class="container">
					<div class="page-title-content">
						<h2>Services</h2>
						<ul>
							<li><a href="{{ route('index') }}">Home</a></li>
							<li>Services</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- End Page Title Area -->

	<!-- Start Services Section -->
	@include('section.primary-services')
	<!-- End Services Section -->
    @section('secondary-service')
        <div class="col-lg-4 col-md-6">
            <div class="single-services-item">
                <div class="services-icon">
                    <i class="flaticon-cloud"></i>
                </div>
                <h3>Data Recovery</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt dolore magna aliqua</p>
                <div class="services-btn-link">
                    <a href="#" class="services-link">Read More</a>
                </div>
            </div>
        </div>
    @endsection
	<!-- Start Hire Section -->
	@include('section.hire')
	<!-- End Hire Section -->

	<!-- Start Overview Section -->
    @include('section.choose-us')
	<!-- End Overview Section -->
	
	<!-- Start Overview Section -->
	@include('section.trust-us')
	<!-- End Overview Section -->
@endsection