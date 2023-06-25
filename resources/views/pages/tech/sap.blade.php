@extends('layouts.app',['title' => 'About Us'])

@section('content')
<!-- Start Page Title Area -->
<div class="page-title-area item-bg1">
    <div class="d-table">
        <div class="d-table-cell">
            <div class="container">
                <div class="page-title-content">
                    <h2>SAP (Systems, Applications, and Products)</h2>
                    <ul>
                        <li><a href="{{ route('index') }}">Home</a></li>
                        <li>SAP (Systems, Applications, and Products)</li>
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
                    <h4>SAP Technology</h4>
                    <p>SAP (Systems, Applications, and Products) is a leading provider of enterprise software solutions that help businesses streamline operations, optimize processes, and achieve digital transformation.</p>
                    <div class="features-text">
                        <h4>Integrated Business Solutions</h4>
                        <p>SAP offers a comprehensive suite of integrated business solutions that cover various aspects of business operations, including finance, human resources, supply chain, customer relationship management (CRM), and more. These solutions enable businesses to manage their operations efficiently and make informed decisions.</p>
                        <h4>Enterprise Resource Planning (ERP)</h4>
                        <p>SAP's ERP software provides a centralized platform for managing and automating key business processes, such as inventory management, procurement, production planning, and financial accounting. It helps businesses enhance efficiency, reduce costs, and improve overall productivity.</p>
                        <h4>Customer Experience Management</h4>
                        <p>SAP's customer experience (CX) solutions enable businesses to deliver exceptional customer experiences across all touchpoints. From sales and marketing to service and support, SAP's CX solutions help businesses engage customers, build loyalty, and drive growth.</p>
                        <h4>Supply Chain Management</h4>
                        <p>SAP's supply chain management solutions help businesses optimize their supply chain operations, improve visibility, and enhance collaboration with suppliers and partners. These solutions enable businesses to streamline logistics, reduce costs, and ensure timely delivery of products and services.</p>
                        <h4>Analytics and Business Intelligence</h4>
                        <p>SAP's analytics and business intelligence solutions provide powerful data analytics capabilities that enable businesses to gain actionable insights from their data. These solutions help in decision-making, performance monitoring, and forecasting, allowing businesses to drive innovation and competitiveness.</p>
                        <p>Unlock the power of SAP technology for your business. Contact us today to explore how SAP solutions can help you optimize your operations, drive growth, and achieve digital transformation.</p>
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