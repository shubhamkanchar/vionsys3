@extends('layouts.app',['title' => 'About Us'])

@section('content')
<!-- Start Page Title Area -->
<div class="page-title-area item-bg1">
    <div class="d-table">
        <div class="d-table-cell">
            <div class="container">
                <div class="page-title-content">
                    <h2>Salesforce</h2>
                    <ul>
                        <li><a href="{{ route('index') }}">Home</a></li>
                        <li>Salesforce</li>
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
                    <h4>Salesforce Technology</h4>
                    <p>Salesforce is a cloud-based customer relationship management (CRM) platform that enables businesses to manage their customer interactions, sales processes, and marketing campaigns effectively.</p>
                    <div class="features-text">
                        <h4>Customer Relationship Management (CRM)</h4>
                        <p>Salesforce provides a comprehensive CRM solution that helps businesses build and maintain strong relationships with their customers. It offers a range of tools and features for managing leads, opportunities, customer data, and customer service interactions.</p>
                        <h4>Sales and Marketing Automation</h4>
                        <p>With Salesforce, businesses can automate their sales and marketing processes, improving efficiency and productivity. It offers features like lead management, pipeline tracking, email marketing, and campaign management, empowering businesses to streamline their sales and marketing efforts.</p>
                        <h4>Customizable and Extensible Platform</h4>
                        <p>Salesforce offers a highly customizable and extensible platform, allowing businesses to tailor the CRM solution to their specific needs. It provides a range of customization options, including workflow automation, custom objects, and data integration, ensuring the CRM aligns with business processes.</p>
                        <h4>Cloud-based and Mobile-Ready</h4>
                        <p>Salesforce is a cloud-based platform, enabling businesses to access their CRM data and tools anytime, anywhere, and from any device. Its mobile-ready design ensures that sales teams can stay connected and productive while on the go.</p>
                        <h4>AppExchange Marketplace</h4>
                        <p>Salesforce's AppExchange marketplace offers a vast collection of third-party apps and integrations that extend the functionality of the CRM platform. Businesses can find and install apps to enhance their sales, marketing, customer service, and analytics capabilities.</p>
                        <h4>Data Analytics and Reporting</h4>
                        <p>Salesforce provides robust data analytics and reporting features, enabling businesses to gain insights from their customer data. It offers built-in dashboards, reports, and analytics tools that help track sales performance, identify trends, and make data-driven decisions.</p>
                        <p>Unlock the power of Salesforce to transform your customer management and sales processes. Contact us today to learn more about how our expertise in Salesforce technology can help you leverage the full potential of your CRM implementation.</p>
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