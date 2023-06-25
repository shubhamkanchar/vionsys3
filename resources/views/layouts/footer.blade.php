<!-- Start Footer & Subscribe Section -->
<section class="footer-subscribe-wrapper">
		<!-- Start Subscribe Area -->
		<!-- <div class="subscribe-area">
			<div class="container">
				<div class="row align-items-center">
					<div class="col-lg-6 col-md-6">
						<div class="subscribe-content">
							<h2>Sign Up Our Newsletter</h2>
							<span class="sub-title">We Offer An Informative Monthly Technology Newsletter - Check It Out.</span>
						</div>
					</div>
					<div class="col-lg-6 col-md-6">
						<form class="newsletter-form">
							<input type="email" class="input-newsletter" placeholder="Enter your email" name="EMAIL" required autocomplete="off">
							<button type="submit">Subscribe Now</button>
							<div id="validator-newsletter" class="form-result"></div>
						</form>
					</div>
				</div>
			</div>
		</div> -->
		<!-- End Subscribe Area -->
		<!-- Start Footer Area -->
		<div class="footer-area ptb-100">
			<div class="container">
				<div class="row">
					<div class="col-lg-4 col-md-6 col-sm-6">
						<div class="single-footer-widget">
							<div class="footer-heading">
								<h3>About Us</h3>
							</div>
							<p>{{ config('details.company_name') }} is a comprehensive IT company offering end-to-end technology solutions. With expertise in software development, network infrastructure, cybersecurity, cloud services, and IT consulting, we empower businesses to thrive in the digital era.</p>
							<ul class="footer-social">
								<li>
									<a href="#"> <i class="fab fa-facebook-f"></i>
									</a>
								</li>
								<li>
									<a href="#"> <i class="fab fa-twitter"></i>
									</a>
								</li>
								<li>
									<a href="#"> <i class="fab fa-pinterest"></i>
									</a>
								</li>
								<li>
									<a href="#"> <i class="fab fa-linkedin"></i>
									</a>
								</li>
							</ul>
						</div>
					</div>
					<div class="col-lg-2 col-md-6 col-sm-6">
						<div class="single-footer-widget">
							<div class="footer-heading">
								<h3>Our Services</h3>
							</div>
							<ul class="footer-quick-links">
								<li> <a href="{{ route('service.software-development') }}">Software Development</a></li>
								<li> <a href="{{ route('service.webdev') }}">Web Development</a></li>
								<li> <a href="{{ route('service.cloud-computing') }}">Cloud Computing</a></li>
								<li> <a href="{{ route('service.ai') }}">Artificial Intelligence</a></li>
								<li> <a href="{{ route('service.devops') }}">Devops</a></li>
							</ul>
						</div>
					</div>
					<div class="col-lg-2 col-md-6 col-sm-6">
						<div class="single-footer-widget">
							<div class="footer-heading">
								<h3>Useful Links</h3>
							</div>
							<ul class="footer-quick-links">
								<li><a href="{{ route('about') }}">About Us</a></li>
								<li><a href="{{ route('services') }}">Services</a></li>
								<li><a href="{{ route('contact') }}">Contact Us</a></li>
								<li><a href="{{ route('career') }}">Career</a></li>
							</ul>
						</div>
					</div>
					<div class="col-lg-4 col-md-6 col-sm-6">
						<div class="single-footer-widget">
							<div class="footer-heading">
								<h3>Contact Info</h3>
							</div>
							<div class="footer-info-contact"> <i class="flaticon-phone-call"></i>
								<h3>Phone</h3>
								<span><a href="tel:{{ config('details.phone') }}">{{ config('details.phone') }}</a></span>
							</div>
							<div class="footer-info-contact"> <i class="flaticon-envelope"></i>
								<h3>Email</h3>
								<span><a href="mailto:{{ config('details.mail') }}">{{ config('details.mail') }}</a></span>
							</div>
							<div class="footer-info-contact"> <i class="flaticon-placeholder"></i>
								<h3>Address</h3>
								<span>{{ config('details.address') }}</span>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- End Footer Section -->
	</section>
	<!-- End Footer & Subscribe Section -->
	
	<!-- Start Copy Right Section -->
	<div class="copyright-area">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-lg-6 col-md-6">
					<p> <i class="far fa-copyright"></i> 2017 {{ config('details.company_name') }} - All Rights Reserved.</p>
				</div>
				<div class="col-lg-6 col-md-6">
					<ul>
						<li> <a href="#">Terms & Conditions</a>
						</li>
						<li> <a href="#">Privacy Policy</a>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	<!-- End Copy Right Section -->
	
	<!-- Start Go Top Section -->
	<div class="go-top">
		<i class="fas fa-chevron-up"></i>
		<i class="fas fa-chevron-up"></i>
	</div>
	<!-- End Go Top Section -->