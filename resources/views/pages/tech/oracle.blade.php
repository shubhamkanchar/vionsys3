@extends('layouts.app',['title' => 'About Us'])

@section('content')
<!-- Start Page Title Area -->
<div class="page-title-area item-bg1">
    <div class="d-table">
        <div class="d-table-cell">
            <div class="container">
                <div class="page-title-content">
                    <h2>Oracle</h2>
                    <ul>
                        <li><a href="{{ route('index') }}">Home</a></li>
                        <li>Oracle</li>
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
                        <img src="{{ asset('assets/img/portfolio/project-details-1.jpg' ) }}" alt="image">
                    </div>
                    <div class="project-details-image">
                        <img src="{{ asset('assets/img/portfolio/project-details-2.jpg' ) }}" alt="image">
                    </div>
                    <div class="project-details-image">
                        <img src="{{ asset('assets/img/portfolio/project-details-3.jpg' ) }}" alt="image">
                    </div>
                </div>
            </div>
            <div class="col-lg-12 col-md-12">
                <div class="projects-details-desc">
                    <h4>Oracle Technology</h4>
                    <p>Oracle is a global technology company known for its comprehensive range of enterprise software, hardware, and cloud services that help businesses manage and leverage their data effectively.</p>
                    <div class="features-text">
                        <h4>Database Management Systems</h4>
                        <p>Oracle Database is a leading enterprise-grade database management system trusted by businesses worldwide. It provides a secure, scalable, and high-performance platform for storing, managing, and analyzing structured and unstructured data.</p>
                        <h4>Enterprise Resource Planning (ERP)</h4>
                        <p>Oracle offers a suite of ERP solutions, including Oracle E-Business Suite, Oracle Fusion Applications, and Oracle NetSuite. These solutions enable businesses to streamline and automate their core business processes, including finance, supply chain, procurement, and human resources.</p>
                        <h4>Customer Relationship Management (CRM)</h4>
                        <p>Oracle's CRM solutions, such as Oracle Sales Cloud and Oracle Service Cloud, help businesses effectively manage their customer interactions, sales processes, and service operations. These solutions enable businesses to improve customer satisfaction, drive sales growth, and enhance customer loyalty.</p>
                        <h4>Business Intelligence and Analytics</h4>
                        <p>Oracle's analytics solutions, including Oracle Analytics Cloud and Oracle Business Intelligence Suite, provide powerful tools for data visualization, reporting, and advanced analytics. These solutions help businesses gain insights from their data, make informed decisions, and uncover hidden patterns and trends.</p>
                        <h4>Cloud Services</h4>
                        <p>Oracle Cloud Infrastructure offers a comprehensive set of cloud services, including compute, storage, networking, and database services. It provides businesses with a scalable and secure platform to build, deploy, and manage their applications and infrastructure in the cloud.</p>
                        <h4>Java Development</h4>
                        <p>Oracle's Java technology is widely used for building robust and scalable applications. Java provides a platform-independent programming environment, making it suitable for developing applications that can run on different operating systems and devices.</p>
                        <p>Unlock the potential of Oracle technology to drive innovation and transform your business. Contact us today to learn more about how our expertise in Oracle solutions can help you leverage the power of your data and achieve your business goals.</p>
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