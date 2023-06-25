<!-- Start Preloader Area -->
<div class="preloader">
		<div class="loader">
			<div class="shadow"></div>
			<div class="box"></div>
		</div>
	</div>
	<!-- End Preloader Area -->
	
	<!-- Start Navbar Area -->
	<div class="navbar-area">
		<div class="techvio-responsive-nav">
			<div class="container">
				<div class="techvio-responsive-menu">
					<div class="logo">
						<a href="{{ route('index') }}">
							<img src="{{ asset('public/assets/img/logo_3.png') }}" class="white-logo" alt="logo">
							<img src="{{ asset('public/assets/img/logo_3.png') }}" class="black-logo" alt="logo">
						</a>
					</div>
				</div>
			</div>
		</div>
		<div class="techvio-nav">
			<div class="container">
				<nav class="navbar navbar-expand-md navbar-light">
					<a class="navbar-brand" href="{{ route('index') }}">
						<img src="{{ asset('public/assets/img/logo_3.png') }}" class="white-logo" alt="logo">
						<img src="{{ asset('public/assets/img/logo_3.png') }}" class="black-logo" alt="logo">
					</a>
					<div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">
						<ul class="navbar-nav">
							<li class="nav-item"> 
								<a href="{{ route('index') }}" class="nav-link">Home </a>
							</li>
							<li class="nav-item">
								<a href="{{ route('about') }}" class="nav-link">About Us</a>
							</li>
							<li class="nav-item">
								<a href="{{ route('services') }}" class="nav-link">Services <i class="fas fa-chevron-down"></i></a>
								<ul class="dropdown-menu">
									<li class="nav-item"> 
										<a href="{{ route('service.software-development') }}" class="nav-link">Software Development</a>
									</li>
									<li class="nav-item"> 
										<a href="{{ route('service.product-development') }}" class="nav-link">Product Development</a>
									</li>
									<li class="nav-item"> 
										<a href="{{ route('service.cloud-computing') }}" class="nav-link">Cloud Computing</a>
									</li>
									<li class="nav-item"> 
										<a href="{{ route('service.testing-and-qa') }}" class="nav-link">Testing and QA</a>
									</li>
									<li class="nav-item"> 
										<a href="{{ route('service.devops') }}" class="nav-link">Deveops Solution</a>
									</li>
									<li class="nav-item"> 
										<a href="{{ route('service.bi-and-analytics') }}" class="nav-link">BI and Analytics</a>
									</li>
									<li class="nav-item"> 
										<a href="{{ route('service.bigdata') }}" class="nav-link">Big Data Analytics</a>
									</li>
									<li class="nav-item"> 
										<a href="{{ route('service.app-dev-main') }}" class="nav-link">Application development and maintenance</a>
									</li>
									<li class="nav-item"> 
										<a href="{{ route('service.strategy-consulting') }}" class="nav-link">Strategy and Consulting</a>
									</li>
									<li class="nav-item"> 
										<a href="{{ route('service.staffing') }}" class="nav-link">Staffing</a>
									</li>
									<li class="nav-item"> 
										<a href="{{ route('service.ai') }}" class="nav-link">Artificial Intelligence</a>
									</li>
									<li class="nav-item"> 
										<a href="{{ route('service.webdev') }}" class="nav-link">Web Development</a>
									</li>
								</ul>
							</li>
							<li class="nav-item">
								<a href="#" class="nav-link">Technologies <i class="fas fa-chevron-down"></i></a>
								<ul class="dropdown-menu">
									<li class="nav-item">
										<a href="{{ route('tech.java') }}" class="nav-link">Java</a>
									</li>
									<li class="nav-item">
										<a href="{{ route('tech.dotnet') }}" class="nav-link">.Net</a>
									</li>
									<li class="nav-item">
										<a href="{{ route('tech.sap') }}" class="nav-link">SAP</a>
									</li>
									<li class="nav-item">
										<a href="{{ route('tech.oracle') }}" class="nav-link">Oracle</a>
									</li>
									<li class="nav-item">
										<a href="{{ route('tech.python') }}" class="nav-link">Python</a>
									</li>
									<li class="nav-item">
										<a href="{{ route('tech.angular') }}" class="nav-link">Angular</a>
									</li>
									<li class="nav-item">
										<a href="{{ route('tech.microsoft') }}" class="nav-link">Microsoft</a>
									</li>
									<li class="nav-item">
										<a href="{{ route('tech.erp') }}" class="nav-link">ERP and CRM</a>
									</li>
									<li class="nav-item">
										<a href="{{ route('tech.scripting') }}" class="nav-link">Scripting language</a>
									</li>
									<li class="nav-item">
										<a href="{{ route('tech.data-science') }}" class="nav-link">Data science</a>
									</li>
									<li class="nav-item">
										<a href="{{ route('tech.saleforce') }}" class="nav-link">Saleforce</a>
									</li>
									<li class="nav-item">
										<a href="{{ route('tech.hadoop') }}" class="nav-link">Big Data Hadoop</a>
									</li>
								</ul>
							</li>
							<li class="nav-item"> 
								<a href="#" class="nav-link">Expertise <i class="fas fa-chevron-down"></i></a>
								<ul class="dropdown-menu">
									<li class="nav-item">
										<a href="{{ route('expertise.application-security') }}" class="nav-link">Application security services</a>
									</li>
									<li class="nav-item">
										<a href="{{ route('expertise.qa-software-testing') }}" class="nav-link">QA and Software testing</a>
									</li>
									<li class="nav-item">
										<a href="{{ route('expertise.project-management') }}" class="nav-link">Project Management</a>
									</li>
								</ul>
							</li>
							<li class="nav-item">
								<a href="#" class="nav-link">Industries <i class="fas fa-chevron-down"></i></a>
								<ul class="dropdown-menu">
									<li class="nav-item">
										<a href="{{ route('industry.pharma') }}" class="nav-link">Pharma</a>
									</li>
									<li class="nav-item">
										<a href="{{ route('industry.insurance') }}" class="nav-link">Insurance</a>
									</li>
									<li class="nav-item">
										<a href="{{ route('industry.health-care') }}" class="nav-link">Health care</a>
									</li>
									<li class="nav-item">
										<a href="{{ route('industry.professional-services') }}" class="nav-link">Professional Services</a>
									</li>
									<li class="nav-item">
										<a href="{{ route('industry.field-services') }}" class="nav-link">Field Services</a>
									</li>
									<li class="nav-item">
										<a href="{{ route('industry.banking') }}" class="nav-link">Banking</a>
									</li>
									<li class="nav-item">
										<a href="{{ route('industry.education') }}" class="nav-link">Education</a>
									</li>
								</ul>
							</li>
                            <!-- <li class="nav-item">
								<a href="{{ route('career') }}" class="nav-link">Career</a>
							</li> -->
							<li class="nav-item">
								<a href="{{ route('contact') }}" class="nav-link">Contact</a>
							</li>
						</ul>
						<!-- <div class="other-option">
							<a class="default-btn" href="mailto:demo@example.com">Get It Support <span></span></a>
						</div> -->
					</div>
				</nav>
			</div>
		</div>
	</div>
	<!-- End Navbar Area -->