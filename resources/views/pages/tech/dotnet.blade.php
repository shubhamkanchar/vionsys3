@extends('layouts.app',['title' => 'About Us'])

@section('content')
<!-- Start Page Title Area -->
<div class="page-title-area item-bg1">
    <div class="d-table">
        <div class="d-table-cell">
            <div class="container">
                <div class="page-title-content">
                    <h2>.NET</h2>
                    <ul>
                        <li><a href="{{ route('index') }}">Home</a></li>
                        <li>.NET</li>
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
                    <h4>.NET Technology</h4>
                    <p>.NET is a powerful and versatile technology framework developed by Microsoft, widely used for building robust and scalable software applications.</p>
                    <div class="features-text">
                        <h4>Robust Application Development</h4>
                        <p>With .NET, businesses can develop robust applications that meet their specific requirements. The framework offers a rich set of libraries, tools, and components that facilitate efficient application development.</p>
                        <h4>Web and Mobile Development</h4>
                        <p>.NET supports web and mobile application development, allowing businesses to build responsive and feature-rich websites, web services, and cross-platform mobile applications. The framework provides frameworks like ASP.NET and Xamarin for web and mobile development.</p>
                        <h4>Integration Capabilities</h4>
                        <p>.NET offers seamless integration with other systems, databases, and third-party APIs. It enables businesses to connect their applications with various data sources and external services, enhancing interoperability and data exchange.</p>
                        <h4>Scalability and Performance</h4>
                        <p>The .NET framework provides scalability and performance optimization features, allowing applications to handle increased user loads and process large volumes of data efficiently. It offers features like caching, asynchronous programming, and memory management to enhance application performance.</p>
                        <h4>Security and Reliability</h4>
                        <p>Security is a top priority in the .NET framework, offering built-in security mechanisms and features to protect applications from threats. Additionally, .NET applications benefit from automatic memory management, reducing the risk of memory leaks and improving application reliability.</p>
                        <p>Harness the power of .NET for your software development needs. Contact us today to learn more about how our expertise in .NET can help you build scalable and reliable applications to drive your business forward.</p>
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