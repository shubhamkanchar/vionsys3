@extends('layouts.app',['title' => 'About Us'])

@section('content')
<!-- Start Page Title Area -->
<div class="page-title-area item-bg1">
	<div class="d-table">
		<div class="d-table-cell">
			<div class="container">
				<div class="page-title-content">
					<h2>Staffing</h2>
					<ul>
						<li><a href="{{ route('index') }}">Home</a></li>
						<li>Staffing</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- End Page Title Area -->

<!-- Start Services Details Area -->
<section class="services-details-area section-padding">
	<div class="container">
		<div class="row">
			<div class="col-lg-8 col-md-12">
				<div class="services-details-content">
					<div class="services-details-image">
						<img src="{{ asset('public/assets/img/services-details-1.jpg') }}" alt="image">
					</div>

					<h4>Staffing Solutions</h4>
					<p>At XYZ Staffing Services, we offer comprehensive staffing solutions to help businesses find top talent and build high-performing teams.</p>

					<div class="features-text">
						<ul class="service-features-list">
							<li><i class="fa fa-check"></i>Temporary Staffing</li>
							<li><i class="fa fa-check"></i>Permanent Staffing</li>
							<li><i class="fa fa-check"></i>Contract Staffing</li>
							<li><i class="fa fa-check"></i>Executive Search</li>
							<li><i class="fa fa-check"></i>Managed Services</li>
						</ul>

						<h4>Temporary Staffing</h4>
						<p>We provide skilled and experienced professionals on a temporary basis to meet your short-term project needs or fill in for absences or peak workloads. Our temporary staffing solutions ensure continuity and flexibility in your operations.</p>
						<h4>Permanent Staffing</h4>
						<p>We specialize in sourcing and recruiting top talent for permanent positions within your organization. Our team utilizes a rigorous screening and assessment process to ensure the right fit for your company culture and long-term success.</p>
						<h4>Contract Staffing</h4>
						<p>We offer contract staffing solutions, providing specialized professionals for specific project durations or assignments. Our contract staffing services enable you to access highly skilled individuals without the long-term commitment.</p>
						<h4>Executive Search</h4>
						<p>We assist in identifying and recruiting senior-level executives and leaders who possess the expertise and vision to drive your organization forward. Our executive search services focus on finding exceptional talent that aligns with your strategic goals.</p>
						<h4>Managed Services</h4>
						<p>We offer managed staffing solutions to handle the entire staffing process, from recruitment and onboarding to performance management and retention. Our managed services ensure a streamlined and efficient staffing experience for your organization.</p>
						<p>Partner with us to find the right talent for your organization's success. Contact us today to discuss your staffing needs and let us help you build a winning team.</p>
					</div>
				</div>
			</div>
			@include('section.service')
		</div>
	</div>
</section>
<!-- End Services Details Area -->
@endsection