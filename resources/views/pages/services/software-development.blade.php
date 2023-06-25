@extends('layouts.app',['title' => 'About Us'])

@section('content')
<!-- Start Page Title Area -->
<div class="page-title-area item-bg1">
	<div class="d-table">
		<div class="d-table-cell">
			<div class="container">
				<div class="page-title-content">
					<h2>Software Development</h2>
					<ul>
						<li><a href="{{ route('index') }}">Home</a></li>
						<li>Software Development</li>
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

					<h4>Software Development Services</h4>
					<p>At XYZ Software Solutions, we provide comprehensive software development services to help businesses build robust, scalable, and customized software solutions that meet their unique needs and drive digital transformation.</p>

					<div class="features-text">
						<ul class="service-features-list">
							<li><i class="fa fa-check"></i>Custom Software Development</li>
							<li><i class="fa fa-check"></i>Enterprise Application Development</li>
							<li><i class="fa fa-check"></i>Mobile App Development</li>
							<li><i class="fa fa-check"></i>Web Application Development</li>
							<li><i class="fa fa-check"></i>Software Integration and API Development</li>
						</ul>
						<h4>Custom Software Development</h4>
						<p>We specialize in developing tailored software solutions from scratch, designed to address your specific business requirements. Our experienced team follows an agile development approach to deliver high-quality software that aligns perfectly with your goals.</p>
						<h4>Enterprise Application Development</h4>
						<p>We create powerful and scalable enterprise applications that streamline your business processes and improve operational efficiency. Our enterprise application development services cover a wide range of functionalities, including CRM, ERP, HR management, and more.</p>
						<h4>Mobile App Development</h4>
						<p>We develop innovative and user-friendly mobile applications for iOS and Android platforms. Our mobile app development team employs the latest technologies and best practices to create seamless and engaging mobile experiences for your target audience.</p>
						<h4>Web Application Development</h4>
						<p>We design and develop secure and responsive web applications that cater to your specific business needs. Our web applications are built using cutting-edge technologies and frameworks, ensuring scalability, performance, and a smooth user experience.</p>
						<h4>Software Integration and API Development</h4>
						<p>We specialize in integrating different software systems and developing custom APIs to enhance connectivity and data exchange between applications. Our integration and API development services ensure seamless collaboration and efficiency across your software ecosystem.</p>
						<p>Unlock the potential of software with our expert software development services. Contact us today to discuss your software development needs and let us help you build cutting-edge solutions to drive your business forward.</p>
					</div>
				</div>
			</div>
			@include('section.service')
		</div>
	</div>
</section>
<!-- End Services Details Area -->
@endsection