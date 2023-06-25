@extends('layouts.app',['title' => 'About Us'])

@section('content')
<!-- Start Page Title Area -->
<div class="page-title-area item-bg1">
    <div class="d-table">
        <div class="d-table-cell">
            <div class="container">
                <div class="page-title-content">
                    <h2>Hadoop</h2>
                    <ul>
                        <li><a href="{{ route('index') }}">Home</a></li>
                        <li>Hadoop</li>
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
                    <h4>Hadoop Technology</h4>
                    <p>Hadoop is an open-source framework designed for distributed storage and processing of large datasets across clusters of computers. It enables businesses to handle big data and perform complex data analytics.</p>
                    <div class="features-text">
                        <h4>Distributed Storage</h4>
                        <p>Hadoop's distributed file system (HDFS) allows businesses to store and manage large volumes of structured and unstructured data across multiple servers. The data is distributed and replicated across the cluster, ensuring high availability and fault tolerance.</p>
                        <h4>Scalable Data Processing</h4>
                        <p>Hadoop's MapReduce programming model enables businesses to process massive datasets in parallel across multiple nodes in a Hadoop cluster. This distributed processing capability allows for faster data processing and analysis, enabling businesses to extract valuable insights from their data.</p>
                        <h4>Big Data Analytics</h4>
                        <p>Hadoop ecosystem includes various tools and frameworks like Apache Hive, Apache Pig, and Apache Spark, which enable businesses to perform advanced analytics and extract meaningful insights from big data. These tools provide data querying, data processing, and machine learning capabilities.</p>
                        <h4>Data Integration and ETL</h4>
                        <p>Hadoop provides the ability to integrate and transform data from different sources through its data integration and Extract, Transform, Load (ETL) capabilities. It allows businesses to combine structured and unstructured data from diverse sources, enabling comprehensive analysis and reporting.</p>
                        <h4>Cost-Effective Storage and Processing</h4>
                        <p>Hadoop's distributed architecture allows businesses to leverage commodity hardware, making it a cost-effective solution for storing and processing large datasets. It eliminates the need for expensive storage systems and enables businesses to scale their infrastructure as data volume grows.</p>
                        <p>Harness the power of Hadoop to manage and analyze your big data effectively. Contact us today to learn more about how our expertise in Hadoop technology can help you leverage the potential of your data and drive valuable insights for your business.</p>
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