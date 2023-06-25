@extends('layouts.app',['title' => 'About Us'])

@section('content')
<!-- Start Page Title Area -->
<div class="page-title-area item-bg1">
    <div class="d-table">
        <div class="d-table-cell">
            <div class="container">
                <div class="page-title-content">
                    <h2>Enterprise Resource Planning (ERP)</h2>
                    <ul>
                        <li><a href="{{ route('index') }}">Home</a></li>
                        <li>Enterprise Resource Planning (ERP)</li>
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
                    <h4>Enterprise Resource Planning (ERP)</h4>
                    <p>Enterprise Resource Planning (ERP) is a comprehensive business management software that integrates various departments and functions within an organization. It enables businesses to streamline operations, automate processes, and improve efficiency.</p>

                    <div class="features-text">
                        <h4>Streamlined Business Operations</h4>
                        <p>ERP systems provide a centralized database that consolidates data from different departments such as finance, human resources, inventory, and sales. This enables real-time access to critical information, facilitates efficient communication, and eliminates data silos.</p>
                        <h4>Efficient Resource Management</h4>
                        <p>ERP solutions help businesses effectively manage their resources, including inventory, materials, and human capital. With features like inventory tracking, demand planning, and employee management, ERP systems optimize resource allocation, reduce costs, and enhance productivity.</p>
                        <h4>Improved Customer Relationship Management (CRM)</h4>
                        <p>CRM software allows businesses to manage and analyze customer interactions, sales activities, and marketing campaigns. It helps businesses nurture customer relationships, improve customer satisfaction, and drive sales growth through effective lead management and personalized customer experiences.</p>
                        <h4>Data-driven Decision Making</h4>
                        <p>ERP and CRM systems provide businesses with valuable insights and analytics, empowering data-driven decision making. By analyzing data related to sales, inventory, customer behavior, and financial performance, businesses can identify trends, forecast demand, and make informed strategic decisions.</p>
                        <h4>Scalable and Customizable Solutions</h4>
                        <p>ERP and CRM solutions are designed to scale with the growth of a business. They offer flexibility and customization options, allowing businesses to tailor the software to their unique requirements and adapt it as their needs evolve over time.</p>
                        <p>Embrace the power of ERP and CRM technologies to streamline your business operations, enhance customer relationships, and drive growth. Contact us today to learn more about how our expertise can help you implement and leverage ERP and CRM solutions for your organization.</p>
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