@extends('layouts.app',['title' => 'About Us'])

@section('content')
<!-- Start Page Title Area -->
<div class="page-title-area item-bg1">
    <div class="d-table">
        <div class="d-table-cell">
            <div class="container">
                <div class="page-title-content">
                    <h2>Microsoft</h2>
                    <ul>
                        <li><a href="{{ route('index') }}">Home</a></li>
                        <li>Microsoft</li>
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
                    <h4>Microsoft Technology</h4>
                    <p>Microsoft is a leading technology company known for its wide range of software products and solutions that empower businesses and individuals to achieve more.</p>
                    <div class="features-text">
                        <h4>Operating Systems</h4>
                        <p>Microsoft develops and provides widely used operating systems like Windows, offering a secure and user-friendly platform for personal computers, servers, and mobile devices. Windows operating systems are known for their stability, compatibility, and extensive software support.</p>
                        <h4>Productivity Software</h4>
                        <p>Microsoft Office Suite, including applications like Word, Excel, PowerPoint, and Outlook, is the industry standard for productivity software. It enables businesses to create, collaborate, and communicate effectively, enhancing productivity and streamlining workflows.</p>
                        <h4>Cloud Services</h4>
                        <p>Microsoft Azure is a comprehensive cloud computing platform that offers infrastructure as a service (IaaS), platform as a service (PaaS), and software as a service (SaaS) solutions. Azure provides scalable and flexible cloud services, enabling businesses to innovate and scale their applications and infrastructure.</p>
                        <h4>Database Management</h4>
                        <p>Microsoft SQL Server is a powerful relational database management system used by businesses of all sizes to store, manage, and analyze data. It offers robust data security, high availability, and advanced analytics capabilities, making it a trusted choice for data-driven applications.</p>
                        <h4>Development Tools and Frameworks</h4>
                        <p>Microsoft provides a suite of development tools and frameworks, such as Visual Studio, .NET, and Xamarin, empowering developers to build a wide range of applications across platforms. These tools offer productivity features, debugging capabilities, and seamless integration with Microsoft technologies.</p>
                        <h4>Artificial Intelligence and Machine Learning</h4>
                        <p>Microsoft offers AI and machine learning tools and services, including Azure AI, Cognitive Services, and Azure Machine Learning. These technologies enable businesses to leverage the power of AI for tasks like natural language processing, computer vision, and predictive analytics.</p>
                        <p>Explore the possibilities of Microsoft technology to drive innovation and transform your business. Contact us today to learn more about how our expertise in Microsoft solutions can help you achieve your technology goals.</p>
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