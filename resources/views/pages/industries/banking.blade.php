@extends('layouts.app',['title' => 'Banking'])

@section('content')
<!-- Start Page Title Area -->
<div class="page-title-area">
    <div class="d-table">
        <div class="d-table-cell">
            <div class="container">
                <div class="page-title-content">
                    <h2>Banking</h2>
                    <ul>
                        <li><a href="{{ route('index') }}">Home</a></li>
                        <li>Banking</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Page Title Area -->

<section class="about-area bg-grey section-padding">
    <div class="container">
        <h2 class="text-center">Banking Industry</h2>
        <p class="text-center mb-5">Our innovative IT solutions empower banks to thrive in the digital era.</p>
        <div class="row">
            <div class="col-md-6">
                <h3>Core Banking Systems</h3>
                <p>Our advanced core banking systems streamline banking operations, enabling efficient management of customer accounts, transactions, and financial products. Leverage our robust and scalable solutions to enhance operational efficiency and customer experience.</p>
            </div>
            <div class="col-md-6">
                <h3>Digital Transformation</h3>
                <p>Embrace digital transformation with our comprehensive suite of solutions. From developing secure mobile banking applications to implementing AI-powered chatbots, we help banks enhance customer engagement, optimize processes, and drive innovation.</p>
            </div>
        </div>
        <div class="row mt-5">
            <div class="col-md-6">
                <h3>Data Security and Compliance</h3>
                <p>We prioritize the security of sensitive financial data. Our robust data security and compliance solutions safeguard against cyber threats, ensuring compliance with industry regulations such as GDPR and PCI DSS. Protect your customers and maintain their trust.</p>
            </div>
            <div class="col-md-6">
                <h3>Analytics and Business Intelligence</h3>
                <p>Leverage the power of data to gain valuable insights and drive informed decision-making. Our analytics and business intelligence solutions provide real-time dashboards, predictive analytics, and data visualization tools to help banks identify trends, optimize performance, and identify growth opportunities.</p>
            </div>
        </div>
    </div>
</section>

@endsection