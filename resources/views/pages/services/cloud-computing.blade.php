@extends('layouts.app',['title' => 'About Us'])

@section('content')
<!-- Start Page Title Area -->
<div class="page-title-area item-bg1">
	<div class="d-table">
		<div class="d-table-cell">
			<div class="container">
				<div class="page-title-content">
					<h2>Cloud Computing</h2>
					<ul>
						<li><a href="{{ route('index') }}">Home</a></li>
						<li>Cloud Computing</li>
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

					<h4>Cloud Computing Services</h4>
					<p>At {{ config('details.company_name') }} Cloud Solutions, we provide comprehensive cloud computing services to empower businesses with scalable, flexible, and efficient cloud solutions.</p>

					<div class="features-text">

						<ul class="service-features-list">
							<li><i class="fa fa-check"></i>Cloud Infrastructure</li>
							<li><i class="fa fa-check"></i>Cloud Migration</li>
							<li><i class="fa fa-check"></i>Cloud Security</li>
							<li><i class="fa fa-check"></i>Cloud Management and Monitoring</li>
							<li><i class="fa fa-check"></i>Cloud Cost Optimization</li>
						</ul>
						<h4>Cloud Infrastructure</h4>
						<p>Our team specializes in designing and implementing customized cloud infrastructures tailored to your specific requirements. Whether it's public, private, or hybrid cloud environments, we ensure seamless integration, optimal performance, and robust security for your applications and data.</p>
						<h4>Cloud Migration</h4>
						<p>We offer seamless migration services, enabling you to smoothly transition your existing systems and applications to the cloud. Our experts handle data migration, application reconfiguration, and performance optimization to ensure a successful and hassle-free migration process.</p>
						<h4>Cloud Security</h4>
						<p>We prioritize the security and privacy of your data in the cloud. Our team implements advanced security measures, including data encryption, access controls, and threat monitoring, to safeguard your sensitive information and ensure compliance with industry regulations.</p>
						<h4>Cloud Management and Monitoring</h4>
						<p>We provide comprehensive cloud management and monitoring services to optimize the performance and availability of your cloud infrastructure. Our team handles provisioning, resource optimization, and continuous monitoring, allowing you to focus on your core business while we ensure the smooth operation of your cloud environment.</p>
						<h4>Cloud Cost Optimization</h4>
						<p>We help you optimize your cloud costs by analyzing your infrastructure, identifying cost-saving opportunities, and implementing strategies to minimize unnecessary expenses. Our experts provide recommendations to optimize resource allocation and leverage cost-effective cloud services.</p>
						<p>Unlock the potential of cloud computing with our reliable and efficient services. Contact us today to discuss your cloud computing needs and embark on your journey towards a scalable and cost-effective cloud solution.</p>
					</div>
				</div>
			</div>
			@include('section.service')
		</div>
	</div>
</section>
<!-- End Services Details Area -->
@endsection