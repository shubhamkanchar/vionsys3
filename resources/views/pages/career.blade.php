@extends('layouts.app',['title' => 'Career'])

@section('content')

<!-- Start Page Title Area -->
<div class="page-title-area item-bg1">
	<div class="d-table">
		<div class="d-table-cell">
			<div class="container">
				<div class="page-title-content">
					<h2>Career</h2>
					<ul>
						<li><a href="{{ route('index') }}">Home</a>
						</li>
						<li>Career</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- End Page Title Area -->

<!-- Start Blog Section -->
<section class="blog-section section-padding">
	<div class="container">
		<div class="section-title">
			<h6>Join Us</h6>
			<h2>Recent Opening</h2>
		</div>
		<div class="row">
			<div class="col-lg-4 col-md-6">
				<div class="blog-item">
					<!-- <div class="blog-image">
							<a href="single-blog.html">
								<img src="assets/img/blog/blog-1.jpg" alt="image">
							</a>
						</div> -->
					<div class="single-blog-item">
						<!-- <ul class="blog-list">
								<li>
									<a href="#"> <i class="fa fa-user-alt"></i> Author</a>
								</li>
								<li>
									<a href="#"> <i class="fas fa-calendar-week"></i>17 June 2021</a>
								</li>
							</ul> -->
						<div class="blog-content">
							<h3>
								<!-- <a href="single-blog.html"> -->
								RPA Developer
								<!-- </a> -->
							</h3>
							<p class="mt-2">As an RPA Developer, you will be responsible for designing, developing, testing, and implementing robotic process automation solutions to streamline business processes and increase efficiency. You will work closely with business analysts and stakeholders to understand automation requirements and ensure the successful deployment of RPA solutions.</p>
							<ui class="mt-2">
								<li>Employment Type: Full Time, Permanent</li>
								<li>Role Category: Software Development</li>
								<li>Experience: 4+year</li>
								<li>Location :Kharadi</li>
							</ui>

							<h5 class="mt-2">Education</h5>
							<p> UG: B.Tech/B.E. in Electronics/Telecommunication, Computers, Any Graduate</p>

							<div class="blog-btn">
								<a href="{{ route('apply') }}?job=RPA Developer" class="btn btn-primary">Apply</a>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-4 col-md-6">
				<div class="blog-item">
					<div class="single-blog-item">
						<div class="blog-content">
							<h3>
								Web Developer
							</h3>
							<p class="mt-2">As a Web Developer, you will be responsible for designing, coding, and maintaining websites and web applications. You will work closely with clients, designers, and other team members to create user-friendly and visually appealing online experiences.</p>
							<ui class="mt-2">
								<li>Employment Type: Full Time, Permanent</li>
								<li>Role Category: Software Development</li>
								<li>Experience: 0-4 year</li>
								<li>Location :Kharadi</li>
							</ui>

							<h5 class="mt-2">Education</h5>
							<p> UG: B.Tech/B.E. in Electronics/Telecommunication, Computers, Any Graduate</p>

							<div class="blog-btn">
								<a href="{{ route('apply') }}?job=Web Developer" class="btn btn-primary">Apply</a>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-4 col-md-6">
				<div class="blog-item">
					<div class="single-blog-item">
						<div class="blog-content">
							<h3>
								AWS/DevOps Engineer
							</h3>
							<p class="mt-2">As an AWS/DevOps Engineer, you will play a critical role in the development, deployment, and management of cloud-based infrastructure and applications. You will work closely with development and operations teams to automate and streamline the deployment and maintenance processes, ensuring reliability, scalability, and security of cloud-based systems.</p>
							<ui class="mt-2">
								<li>Employment Type: Full Time, Permanent</li>
								<li>Role Category: Software Development</li>
								<li>Experience: 4+year</li>
								<li>Location :Kharadi</li>
							</ui>

							<h5 class="mt-2">Education</h5>
							<p> UG: B.Tech/B.E. in Electronics/Telecommunication, Computers, Any Graduate</p>

							<div class="blog-btn">
								<a href="{{ route('apply') }}?job=AWS/DevOps Engineer" class="btn btn-primary">Apply</a>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="col-lg-4 col-md-6">
				<div class="blog-item">
					<div class="single-blog-item">
						<div class="blog-content">
							<h3>
								Digital Marketing
							</h3>
							<p class="mt-2">As a Digital Marketing Specialist, you will be responsible for developing and implementing online marketing strategies to promote products, services, or brands. You will leverage various digital channels to drive traffic, engage audiences, and achieve marketing objectives.</p>
							<ui class="mt-2">
								<li>Employment Type: Full Time, Permanent</li>
								<li>Role Category: Software Development</li>
								<li>Experience: 0-4 year</li>
								<li>Location :Kharadi</li>
							</ui>

							<h5 class="mt-2">Education</h5>
							<p> UG: B.Tech/B.E. in Electronics/Telecommunication, Computers, Any Graduate</p>

							<div class="blog-btn">
								<a href="{{ route('apply') }}?job=Digital Marketing" class="btn btn-primary">Apply</a>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="col-lg-4 col-md-6">
				<div class="blog-item">
					<div class="single-blog-item">
						<div class="blog-content">
							<h3>
								Graphics Designer
							</h3>
							<p class="mt-2">As a Graphics Designer, you will be responsible for creating visual content and designs to communicate messages, ideas, and concepts effectively. You will work closely with clients, marketing teams, or art directors to produce high-quality graphic materials that align with branding guidelines and project objectives.</p>
							<ui class="mt-2">
								<li>Employment Type: Full Time, Permanent</li>
								<li>Role Category: Software Development</li>
								<li>Experience: 0-4 year</li>
								<li>Location :Kharadi</li>
							</ui>

							<h5 class="mt-2">Education</h5>
							<p> UG: B.Tech/B.E. in Electronics/Telecommunication, Computers, Any Graduate</p>

							<div class="blog-btn">
								<a href="{{ route('apply') }}?job=Graphics Designer" class="btn btn-primary">Apply</a>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="col-lg-4 col-md-6">
				<div class="blog-item">
					<div class="single-blog-item">
						<div class="blog-content">
							<h3>
								Full Stack Developer
							</h3>
							<p class="mt-2">As a Full Stack Developer, you will be responsible for designing, developing, and maintaining web applications. You will work on both the front-end and back-end components, collaborating with cross-functional teams to deliver high-quality software solutions.</p>
							<ui class="mt-2">
								<li>Employment Type: Full Time, Permanent</li>
								<li>Role Category: Software Development</li>
								<li>Experience: 0-4 year</li>
								<li>Location :Kharadi</li>
							</ui>

							<h5 class="mt-2">Education</h5>
							<p> UG: B.Tech/B.E. in Electronics/Telecommunication, Computers, Any Graduate</p>

							<div class="blog-btn">
								<a href="{{ route('apply') }}?job=Full Stack Developer" class="btn btn-primary">Apply</a>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-4 col-md-6">
				<div class="blog-item">
					<div class="single-blog-item">
						<div class="blog-content">
							<h3>
								.NET Developer
							</h3>
							<p class="mt-2">As a .NET Developer, you will play a crucial role in designing, developing, and maintaining software applications using the Microsoft .NET framework. You will collaborate with cross-functional teams, including software architects, testers, and business analysts, to deliver high-quality software solutions that meet business requirements.</p>
							<ui class="mt-2">
								<li>Employment Type: Full Time, Permanent</li>
								<li>Role Category: Software Development</li>
								<li>Experience: 4+year</li>
								<li>Location :Kharadi</li>
							</ui>

							<h5 class="mt-2">Education</h5>
							<p> UG: B.Tech/B.E. in Electronics/Telecommunication, Computers, Any Graduate</p>

							<div class="blog-btn">
								<a href="{{ route('apply') }}?job=.NET Developer" class="btn btn-primary">Apply</a>
							</div>
						</div>
					</div>
				</div>
			</div>


			<!-- <div class="col-lg-12 col-md-12">
				<div class="pagination-area"> <a href="#" class="prev page-numbers"><i class="fas fa-angle-double-left"></i></a>
					<a href="#" class="page-numbers">1</a>
					<span class="page-numbers current" aria-current="page">2</span>
					<a href="#" class="page-numbers">3</a>
					<a href="#" class="page-numbers">4</a>
					<a href="#" class="next page-numbers"><i class="fas fa-angle-double-right"></i></a>
				</div>
			</div> -->
		</div>
	</div>
</section>
<!-- End Blog Section -->

@endsection