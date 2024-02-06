@extends('layouts.app',['title' => 'Apply'])

@section('css')
<style>
	label::after {
    position: absolute;
    top: 0;
    right: 0;
    bottom: 0;
    z-index: 3;
    display: block;
    height: auto !important;
    padding: 0.375rem 0.75rem !important;
    line-height: 1.5;
    color: #495057;
    content: "Browse";
    background-color: #e9ecef;
    border-left: none !important;
    border-radius: 0 0.25rem 0.25rem 0;
	padding-top: 16px !important
}
</style>
@endsection
@section('content')
<!-- Start Page Title Area -->
<div class="page-title-area">
	<div class="d-table">
		<div class="d-table-cell">
			<div class="container">
				<div class="page-title-content">
					<h2>Apply</h2>
					<ul>
						<li><a href="{{ route('index') }}">Home</a>
						</li>
						<li>Apply</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- End Page Title Area -->

<!-- Start Contact Box Area -->
<!-- <section class="contact-info-wrapper">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="section-title">
					<h6>Apply</h6>
					<h2>Join Us</h2>
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
		</div>
	</div>
</section> -->
<!-- End Contact Box Area -->

<!-- Start Contact Section -->
<div class="contact-section bg-grey section-padding">
	<div class="container">
		<div class="section-title">
			<h6>Apply</h6>
			<h2>Fill below form</h2>
		</div>
		<div class="row align-items-center">
			<div class="col-lg-10 offset-lg-1">
				<div class="contact-form">
					<p class="form-message"></p><br />
					<form id="contact-form" class="contact-form form" method="POST">
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
									<input type="text" name="job" id="job" class="form-control" required placeholder="Your job" value="{{ request()->job }}" readonly>
								</div>
							</div>
							<div class="col-lg-6 col-md-6" style="margin-bottom: 15px;">
								<div class="custom-file form-group">
									<input type="file" name="resume" id="resume" class="custom-file-input" required placeholder="Your Resume" accept="application/pdf">
									<label class="custom-file-label mb-5" for="customFile" style="height: 57px;border-left: 3px solid #7b68ee;padding-top: 17px;">Choose file</label>
								</div>
							</div>
							<div class="col-lg-6 col-md-6">
								<div class="form-group">
									<input type="number" name="experience" id="experience" class="form-control" required placeholder="Experience in months">
								</div>
							</div>
							<div class="col-lg-12 col-md-12">
								<button type="submit" class="default-btn submit-btn"><div class="spinner-border mr-2 spin-loader d-none" style="height: 18px;width: 18px;vertical-align: sub;"></div>APPLY</button>
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
	$('#resume').on('change',function(e){
		//get the file name
		var fileName = e.target.files[0].name;
		//replace the "Choose a file" label
		$(this).next('.custom-file-label').html(fileName);
	})
</script>
<script>
	$(document).ready(function() {
		$('#contact-form').submit(function(e) {
			e.preventDefault(); // avoid to execute the actual submit of the form.
			var formData = new FormData($(this)[0]);
			$.ajax({
				url: '{{ route("apply_mail") }}',
				type: 'POST',
				data: formData,
				contentType: false,
          		processData: false,
				beforeSend: function() {
					$('.submit-btn').attr('disabled',true)
					$('.spin-loader').removeClass('d-none');
				},
				success: function() {
					toastr.success('Applied successfully');
					$('.spin-loader').addClass('d-none');
				},
				error: function() {
					toastr.error('Something went wrong please try again later');
					$('.spin-loader').addClass('d-none');
				},
				complete:function(){
					$('.submit-btn').attr('disabled',false);
					$('.spin-loader').addClass('d-none');
				}
			})
		})

	});
</script>
@endsection