@extends('layouts.app',['title' => 'Home'])

@section('content')
    <!-- Start Home Area -->
    <div class="home-area">
		<div class="d-table">
			<div class="d-table-cell">
				<div class="container">
					<div class="row align-items-center">
						<div class="col-lg-6 col-md-12">
							<div class="main-banner-content">
								<h1>Vionsys IT solutions India Pvt. Ltd.</h1>
								<p>A comprehensive IT company offering end-to-end solutions including software development, cybersecurity, cloud services, network infrastructure, and IT consulting.</p>
								<div class="banner-btn">
									<a class="default-btn-one" href="{{ route('services') }}">
                                        Our Service
                                        <span></span>
                                    </a>
									<a class="default-btn-two" href="{{ route('contact') }}">
                                        Contact Us 
                                        <span></span>
                                    </a>
								</div>
							</div>
						</div>
						<div class="col-lg-6 col-md-12">
							<div class="banner-image">
								<img src="{{ asset('public/assets/img/home-font.png') }}" alt="image">
							</div>
                        </div>
					</div>
				</div>
			</div>
		</div>
		<div class="creative-shape">
            <img src="{{ asset('public/assets/img/home-bottom-shape.png') }}" alt="svg shape">
        </div>
	</div>
	<!-- End Home Area -->
	
	<!-- Start Services Section -->
	@include('section.primary-services')
	<!-- End Services Section -->

	<!-- Start About Section -->
	@include('section.about-company')
	<!-- End About Section -->
	
	<!-- Start Overview Section -->
    @include('section.choose-us')
	<!-- End Overview Section -->
	
	<!-- Start Overview Section -->
	@include('section.trust-us')
	<!-- End Overview Section -->
	
	<!-- Start Counter Section -->
	@include('section.counter')
	<!-- End Counter Section -->
	
	<!-- Start Testimonial Section -->
	@include('section.testomonial')
	<!-- End Testimonial Section -->
	
	<!-- Start Team Section -->
	
	<!-- End Team Section -->
	
	<!-- Start Blog Section -->
	
	<!-- End Blog Section -->

	<!-- Start Partner section -->
	@include('section.customer')
	<!-- End Partner section -->
	
	<!-- Start Hire Section -->
	@include('section.hire')
	<!-- End Hire Section -->
	
	
@endsection