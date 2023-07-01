@extends('layouts.app',['title' => 'About Us'])

@section('content')
<!-- Start Page Title Area -->
<div class="page-title-area item-bg1">
	<div class="d-table">
		<div class="d-table-cell">
			<div class="container">
				<div class="page-title-content">
					<h2>Web Development</h2>
					<ul>
						<li><a href="{{ route('index') }}">Home</a></li>
						<li>Web Development</li>
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

					<h4>Web Development Services</h4>
					<p>At {{ config('details.company_name') }} Web Solutions, we offer professional web development services to help businesses establish a strong online presence, engage their audience, and achieve their digital goals.</p>

					<div class="features-text">
						<ul class="service-features-list">
							<li><i class="fa fa-check"></i>Custom Web Development</li>
							<li><i class="fa fa-check"></i>E-commerce Development</li>
							<li><i class="fa fa-check"></i>Content Management Systems (CMS)</li>
							<li><i class="fa fa-check"></i>Responsive Web Design</li>
							<li><i class="fa fa-check"></i>Website Maintenance and Support</li>
						</ul>

						<h4>Custom Web Development</h4>
						<p>We specialize in creating customized websites tailored to your specific business needs and objectives. Our web development team utilizes cutting-edge technologies to build robust, scalable, and feature-rich websites that deliver exceptional user experiences.</p>
						<h4>E-commerce Development</h4>
						<p>We have expertise in developing e-commerce websites that enable you to sell products or services online. Our e-commerce solutions include secure payment gateways, inventory management, order processing, and intuitive user interfaces to drive conversions and increase sales.</p>
						<h4>Content Management Systems (CMS)</h4>
						<p>We leverage popular CMS platforms such as WordPress, Drupal, and Joomla to develop dynamic and easily manageable websites. Our CMS solutions provide you with full control over your website content, allowing you to update and maintain it effortlessly.</p>
						<h4>Responsive Web Design</h4>
						<p>We ensure that your website is fully responsive and optimized for seamless viewing across all devices and screen sizes. Our responsive web design approach guarantees a consistent and engaging user experience, regardless of the device your visitors use.</p>
						<h4>Website Maintenance and Support</h4>
						<p>We provide ongoing website maintenance and support services to ensure your website operates smoothly and remains up-to-date. Our team handles regular updates, security patches, performance monitoring, and technical support to keep your website running flawlessly.</p>
						<p>Enhance your online presence with our professional web development services. Contact us today to discuss your web development needs and let us help you create a powerful and impactful website.</p>
					</div>
				</div>
			</div>
			@include('section.service')
		</div>
	</div>
</section>
<!-- End Services Details Area -->
@endsection