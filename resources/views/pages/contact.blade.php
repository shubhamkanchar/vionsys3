@extends('layouts.app',['title' => 'Contact Us'])

@section('content')
<!-- Start Page Title Area -->
<div class="page-title-area">
	<div class="d-table">
		<div class="d-table-cell">
			<div class="container">
				<div class="page-title-content">
					<h2>Contact</h2>
					<ul>
						<li><a href="{{ route('index') }}">Home</a>
						</li>
						<li>Contact</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- End Page Title Area -->

<!-- Start Contact Box Area -->
<section class="contact-info-wrapper">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="section-title">
					<h6>Contact Information</h6>
					<h2>Find Us</h2>
				</div>
			</div>
			<div class="col-lg-6 col-md-6">
				<div class="contact-info-content">
					<h5>Pune Headquarter</h5>
					<p>{{ config('details.address') }}</p>
					<a href="tel:0802235678">{{ config('details.phone') }}</a>
					<a href="mailto:demo@example.com">{{ config('details.mail') }}</a>
				</div>
			</div>
			<div class="col-lg-6 col-md-6">
				<div class="contact-info-content">
					<h5>Latur Office</h5>
					<p>Office No. W 28 MIDC, Sree Nagar Latur, Maharashtra 413512</p>
					<a href="tel:0802235678">{{ config('details.phone') }}</a>
					<a href="mailto:demo@example.com">{{ config('details.mail') }}</a>
				</div>
			</div>
			<!-- <div class="col-lg-4 col-md-6">
					<div class="contact-info-content">
						<h5>New York Office</h5>
						<p>1540 Pecks Ridge Tilton Rd Flemingsburg, Kentucky(KY), 4104188 Fulton Street Blackwood, NJ 08012, London.</p>
						<a href="tel:0802235678">080 707 555-321</a>
						<a href="mailto:demo@example.com">demo@example.com</a>
					</div>
				</div>
				<div class="col-lg-4 col-md-6">
					<div class="contact-info-content">
						<h5>Panama Office</h5>
						<p>103 Richard Ave Ashville, Ohio, Water Mill,3468 16th Hwy Pangburn, Arkansas(AR), Charolais Ashville, Virginia, Panama.</p>
						<a href="tel:0802235678">080 707 555-321</a>
						<a href="mailto:demo@example.com">demo@example.com</a>
					</div>
				</div> -->
		</div>
	</div>
</section>
<!-- End Contact Box Area -->

<!-- Start Contact Section -->
<div class="contact-section bg-grey section-padding">
	<div class="container">
		<div class="section-title">
			<h6>Contact Us</h6>
			<h2>Let's Talk</h2>
		</div>
		<div class="row align-items-center">
			<div class="col-lg-10 offset-lg-1">
				<div class="contact-form">
					<p class="form-message"></p><br />
					<form id="contact-form" class="contact-form form" action="phpmails.php" method="POST">
						@csrf
						<div class="row">
							<div class="col-lg-6 col-md-6">
								<div class="form-group">
									<input type="text" name="name" id="name" class="form-control" required placeholder="Your Name">
								</div>
							</div>
							<div class="col-lg-6 col-md-6">
								<div class="form-group">
									<input type="email" name="email" id="email" class="form-control" required placeholder="Your Email">
								</div>
							</div>
							<div class="col-lg-6 col-md-6">
								<div class="form-group">
									<input type="text" name="phone" id="phone" required class="form-control" placeholder="Your Phone">
								</div>
							</div>
							<div class="col-lg-6 col-md-6">
								<div class="form-group">
									<input type="text" name="subject" id="subject" class="form-control" required placeholder="Your Subject">
								</div>
							</div>
							<div class="col-lg-12 col-md-12">
								<div class="form-group">
									<textarea name="message" class="form-control" id="message" cols="30" rows="6" required placeholder="Your Message"></textarea>
								</div>
							</div>
							<div class="col-lg-12 col-md-12">
								<button type="submit" class="default-btn submit-btn">Send Message <span></span></button>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- End Contact Section -->

<!-- Map Section Start -->
<div class="map-area">
	<div class="map-content">
		<!-- <div class="map-canvas" id="contact-map"></div> -->
		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3782.5262354540373!2d73.93864507494337!3d18.550299468266026!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bc2c399308c4df7%3A0x56a3dd07e2356fa1!2sStellar%20Spaces!5e0!3m2!1sen!2sin!4v1687678375796!5m2!1sen!2sin" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
	</div>
</div>
<!-- Map Section End -->


@endsection

@section('script')
<script>
	$(document).ready(function() {
		$('#contact-form').submit(function(e) {
			e.preventDefault(); // avoid to execute the actual submit of the form.
			var form = $(this);
			$.ajax({
				url: '{{ route("send_mail") }}',
				type: 'POST',
				data: $(form).serialize(),
				beforeSend: function() {
					$('.submit-btn').attr('disabled',true)
				},
				success: function() {
					alert('Mail send successfully')
				},
				error: function() {
					alert('Something went wrong please try again later')
				},
				complete:function(){
					$('.submit-btn').attr('disabled',false)
				}
			})
		})

	});
</script>
@endsection