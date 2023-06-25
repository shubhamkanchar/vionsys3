@extends('layouts.app',['title' => 'About Us'])

@section('content')
<!-- Start Page Title Area -->
<div class="page-title-area item-bg1">
    <div class="d-table">
        <div class="d-table-cell">
            <div class="container">
                <div class="page-title-content">
                    <h2>Python</h2>
                    <ul>
                        <li><a href="{{ route('index') }}">Home</a></li>
                        <li>Python</li>
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
                    <h4>Python Technology</h4>
                    <p>Python is a versatile and widely used programming language known for its simplicity, readability, and extensive support for various applications and domains.</p>
                    <div class="features-text">
                        <h4>General-Purpose Programming</h4>
                        <p>Python is a powerful general-purpose programming language that allows developers to build a wide range of applications, from web development and scientific computing to artificial intelligence and data analysis. Its clean syntax and extensive libraries make it a popular choice among developers.</p>
                        <h4>Data Science and Machine Learning</h4>
                        <p>Python has become the language of choice for data scientists and machine learning practitioners. With libraries like NumPy, Pandas, and Scikit-learn, Python provides a robust ecosystem for data manipulation, analysis, and building machine learning models.</p>
                        <h4>Web Development</h4>
                        <p>Python frameworks like Django and Flask enable developers to build scalable and secure web applications efficiently. Python's simplicity and readability, combined with the extensive range of web development libraries, make it an excellent choice for building web-based solutions.</p>
                        <h4>Automation and Scripting</h4>
                        <p>Python's ease of use and versatility make it a preferred language for automation and scripting tasks. From simple task automation to complex system administration, Python simplifies the process with its rich standard library and third-party packages.</p>
                        <h4>Scientific Computing</h4>
                        <p>Python, along with libraries like NumPy and SciPy, provides a robust platform for scientific computing, numerical analysis, and simulation. It is widely used in fields such as physics, chemistry, biology, and engineering for data analysis and modeling.</p>
                        <h4>Community and Ecosystem</h4>
                        <p>Python has a vibrant and active community, contributing to its vast ecosystem of libraries, frameworks, and resources. This ecosystem makes it easier for developers to leverage existing tools and solutions, saving time and effort in software development.</p>
                        <p>Explore the capabilities of Python to develop innovative solutions and accelerate your software development projects. Contact us today to learn more about how our expertise in Python technology can help you achieve your development goals.</p>
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