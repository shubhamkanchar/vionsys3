@extends('layouts.app',['title' => 'About Us'])

@section('content')
<!-- Start Page Title Area -->
<div class="page-title-area item-bg1">
    <div class="d-table">
        <div class="d-table-cell">
            <div class="container">
                <div class="page-title-content">
                    <h2>JAVA</h2>
                    <ul>
                        <li><a href="{{ route('index') }}">Home</a></li>
                        <li>JAVA</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Page Title Area -->

<!-- Start Services Details Area -->
<section class="project-details-area ptb-100">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12">
                <div class="image-sliders owl-carousel owl-theme">
                    <div class="project-details-image">
                        <img src="{{ asset('public/assets/img/portfolio/project-details-1.jpg' ) }}" alt="image">
                    </div>
                    <div class="project-details-image">
                        <img src="{{ asset('public/assets/img/portfolio/project-details-2.jpg' ) }}" alt="image">
                    </div>
                    <div class="project-details-image">
                        <img src="{{ asset('public/assets/img/portfolio/project-details-3.jpg' ) }}" alt="image">
                    </div>
                </div>
            </div>
            <div class="col-lg-12 col-md-12">
                <div class="projects-details-desc">
                    <h4>JAVA Development Services</h4>
                    <p>At {{ config('details.company_name') }} Tech Solutions, we offer comprehensive JAVA development services to help businesses build robust, scalable, and secure applications using the Java programming language and its ecosystem.</p>
                    <div class="features-text">
                        <h4>Custom JAVA Application Development</h4>
                        <p>Our experienced team specializes in developing custom JAVA applications tailored to your unique business requirements. We follow industry best practices and utilize Java frameworks to create scalable, high-performance applications that meet your specific needs.</p>
                        <h4>Enterprise JAVA Development</h4>
                        <p>We provide enterprise JAVA development services to build powerful and scalable solutions that streamline your business processes. Our expertise in enterprise Java frameworks, such as Spring and Java EE, enables us to deliver reliable and efficient enterprise applications.</p>
                        <h4>JAVA Web Development</h4>
                        <p>We excel in JAVA web development, leveraging Java technologies and frameworks like JavaServer Pages (JSP) and JavaServer Faces (JSF) to build dynamic and interactive web applications. Our JAVA web solutions ensure optimal performance, security, and user experience.</p>
                        <h4>Mobile App Development with JAVA</h4>
                        <p>Our JAVA developers have extensive experience in building cross-platform mobile applications using JAVA-based frameworks like Flutter and React Native. We leverage the power of JAVA to create robust and feature-rich mobile apps for both Android and iOS platforms.</p>
                        <h4>JAVA Integration and Migration</h4>
                        <p>We assist in integrating JAVA applications with other systems and third-party APIs to enhance interoperability and data exchange. Additionally, we provide JAVA application migration services to upgrade your existing JAVA applications to newer versions or different platforms.</p>
                        <p>Unlock the potential of JAVA for your business with our professional JAVA development services. Contact us today to discuss your JAVA development needs and let us help you leverage the power of JAVA to drive your technology initiatives.</p>
                    </div>

                    <!-- <div class="project-details-info">
                        <div class="single-info-box">
                            <h4>Author</h4>
                            <span>Pamela Lawrence</span>
                        </div>
                        <div class="single-info-box">
                            <h4>Category</h4>
                            <span>Virtual, Technology</span>
                        </div>
                        <div class="single-info-box">
                            <h4>Date</h4>
                            <span>June 20, 2021</span>
                        </div>
                        <div class="single-info-box">
                            <h4>Share</h4>
                            <ul class="social">
                                <li>
                                    <a href="#"> <i class="fab fa-facebook-f"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#"> <i class="fab fa-twitter"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#"> <i class="fab fa-instagram"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#"> <i class="fab fa-linkedin-in"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="single-info-box"> <a href="#" class="default-btn">work Preview</a>
                        </div>
                    </div> -->
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Services Details Area -->
@endsection