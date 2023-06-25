@extends('layouts.app',['title' => 'About Us'])

@section('content')
<!-- Start Page Title Area -->
<div class="page-title-area item-bg1">
    <div class="d-table">
        <div class="d-table-cell">
            <div class="container">
                <div class="page-title-content">
                    <h2>Angular</h2>
                    <ul>
                        <li><a href="{{ route('index') }}">Home</a></li>
                        <li>Angular</li>
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
                    <h4>Angular Development Services</h4>
                    <p>At XYZ Tech Solutions, we provide comprehensive Angular development services to help businesses build modern, scalable, and interactive web applications using the Angular framework.</p>
                    <div class="features-text">
                        <h4>Custom Angular Application Development</h4>
                        <p>Our experienced team specializes in developing custom Angular applications tailored to your specific business requirements. We leverage the power of Angular's component-based architecture and TypeScript to deliver high-performing and feature-rich applications.</p>
                        <h4>Single-Page Application (SPA) Development</h4>
                        <p>We excel in building Single-Page Applications (SPAs) using Angular, providing a seamless and responsive user experience. Our SPAs leverage Angular's routing capabilities to deliver dynamic content updates without page reloads, resulting in faster and more engaging web applications.</p>
                        <h4>Angular Material Design</h4>
                        <p>We utilize Angular Material, a UI component library, to create visually appealing and consistent user interfaces for Angular applications. Our team leverages Angular Material's pre-built UI components, themes, and typography to deliver intuitive and responsive designs.</p>
                        <h4>Angular Consulting and Migration</h4>
                        <p>We offer Angular consulting services to guide you through the planning and implementation of Angular projects. Additionally, we assist in migrating existing applications to Angular, ensuring a smooth transition and maximizing the benefits of the Angular framework.</p>
                        <h4>Angular Support and Maintenance</h4>
                        <p>We provide ongoing support and maintenance services for Angular applications, ensuring they remain up-to-date, secure, and optimized. Our team handles bug fixes, performance enhancements, and continuous monitoring to ensure your Angular applications operate flawlessly.</p>
                        <p>Embrace the power of Angular for your web application development. Contact us today to discuss your Angular development needs and let us help you build modern and dynamic web applications using the Angular framework.</p>




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