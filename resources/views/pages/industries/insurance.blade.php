@extends('layouts.app',['title' => 'Insurance'])

@section('content')
<!-- Start Page Title Area -->
<div class="page-title-area">
    <div class="d-table">
        <div class="d-table-cell">
            <div class="container">
                <div class="page-title-content">
                    <h2>Insurance</h2>
                    <ul>
                        <li><a href="{{ route('index') }}">Home</a></li>
                        <li>Insurance</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Page Title Area -->

<section class="about-area bg-grey section-padding">
    <div class="container">
        <h2 class="text-center">Insurance Industry</h2>
        <p class="text-center mb-5">Our cutting-edge IT solutions drive digital transformation in the insurance sector.</p>
        <div class="row">
            <div class="col-md-6">
                <h3>Policy Management System</h3>
                <p>Efficiently manage insurance policies with our comprehensive policy management system. Streamline underwriting, policy issuance, and claims processing, while enhancing customer experience with self-service portals and personalized policy offerings.</p>
            </div>
            <div class="col-md-6">
                <h3>Claims Processing Automation</h3>
                <p>Automate and streamline the claims processing lifecycle with our advanced claims management system. Leverage intelligent workflows, AI-powered fraud detection, and real-time analytics to accelerate claims settlement, enhance accuracy, and improve customer satisfaction.</p>
            </div>
        </div>
        <div class="row mt-5">
            <div class="col-md-6">
                <h3>Customer Relationship Management</h3>
                <p>Enhance customer engagement and retention with our CRM solutions tailored for the insurance industry. Effectively manage customer interactions, track policies, and personalize marketing efforts to deepen customer relationships and drive business growth.</p>
            </div>
            <div class="col-md-6">
                <h3>Data Analytics and Predictive Modeling</h3>
                <p>Unlock the power of data to make informed business decisions. Our analytics and predictive modeling solutions provide actionable insights into customer behavior, risk assessment, and pricing optimization, enabling insurance companies to stay competitive in a rapidly evolving market.</p>
            </div>
        </div>
    </div>
</section>

@endsection