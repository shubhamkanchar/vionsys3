@extends('layouts.app',['title' => 'About Us'])

@section('content')
<!-- Start Page Title Area -->
<div class="page-title-area item-bg1">
	<div class="d-table">
		<div class="d-table-cell">
			<div class="container">
				<div class="page-title-content">
					<h2>Services Details</h2>
					<ul>
						<li><a href="{{ route('index') }}">Home</a></li>
						<li>Services Details</li>
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

					<h4>DevOps Services</h4>
					<p>At {{ config('details.company_name') }} DevOps Solutions, we offer comprehensive DevOps services to help businesses accelerate software development, increase collaboration, and streamline operations.</p>


					<div class="features-text">
						<ul class="service-features-list">
							<li><i class="fa fa-check"></i>Continuous Integration and Deployment</li>
							<li><i class="fa fa-check"></i>Infrastructure as Code</li>
							<li><i class="fa fa-check"></i>Configuration Management</li>
							<li><i class="fa fa-check"></i>Monitoring and Logging</li>
							<li><i class="fa fa-check"></i>Collaboration and Communication</li>
						</ul>
						<h4>Continuous Integration and Deployment</h4>
						<p>We help you implement efficient CI/CD pipelines, automating the build, testing, and deployment processes. By integrating code changes frequently, you can deliver software updates faster and with higher quality.</p>
						<h4>Infrastructure as Code</h4>
						<p>Our team utilizes infrastructure automation tools to define and manage infrastructure as code. This allows for consistent, scalable, and reproducible infrastructure deployments, reducing manual errors and improving efficiency.</p>
						<h4>Configuration Management</h4>
						<p>We assist in implementing configuration management tools to ensure consistent and standardized configuration across your infrastructure. By managing configurations as code, you can easily maintain and scale your infrastructure with minimal effort.</p>
						<h4>Monitoring and Logging</h4>
						<p>We help you implement robust monitoring and logging solutions to gain real-time insights into your systems' performance and detect issues proactively. With proper monitoring, you can ensure high availability and identify areas for optimization.</p>
						<h4>Collaboration and Communication</h4>
						<p>We promote collaboration and communication between development and operations teams by implementing collaborative tools and practices. This fosters transparency, improves efficiency, and facilitates faster decision-making throughout the software development lifecycle.</p>
						<p>Unlock the power of DevOps to achieve faster time-to-market, improved quality, and enhanced collaboration. Contact us today to discuss your DevOps requirements and embark on your journey towards efficient software delivery and operations.</p>
					</div>
				</div>
			</div>
			@include('section.service')
		</div>
	</div>
</section>
<!-- End Services Details Area -->
@endsection