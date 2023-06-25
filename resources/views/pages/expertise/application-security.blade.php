@extends('layouts.app',['title' => 'Application Security'])

@section('content')
<!-- Start Page Title Area -->
<div class="page-title-area">
    <div class="d-table">
        <div class="d-table-cell">
            <div class="container">
                <div class="page-title-content">
                    <h2>Application Security</h2>
                    <ul>
                        <li><a href="{{ route('index') }}">Home</a></li>
                        <li>Application Security</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Page Title Area -->

<section class="py-5">
  <div class="container">
    <h2 class="text-center">Application Security Solutions</h2>
    <p class="text-center">Our IT company specializes in providing comprehensive application security solutions to protect your critical software and data.</p>
    <div class="row">
      <div class="col-md-6">
        <div class="solution-card contact-info-content contact-info-content">
          <div class="solution-card contact-info-content-content">
            <h3 class="solution-card contact-info-content-title">Secure Code Development</h3>
            <p class="solution-card contact-info-content-description">Our expert team helps you build secure applications from the ground up. We offer secure code development practices, including secure coding guidelines, code reviews, and secure development training. By integrating security into the development lifecycle, we mitigate vulnerabilities and ensure robust protection for your applications.</p>
          </div>
        </div>
      </div>
      <div class="col-md-6">
        <div class="solution-card contact-info-content">
          <div class="solution-card contact-info-content-content">
            <h3 class="solution-card contact-info-content-title">Application Penetration Testing</h3>
            <p class="solution-card contact-info-content-description">We conduct rigorous penetration testing to identify vulnerabilities and weaknesses in your applications. Our experienced security professionals simulate real-world attacks to uncover potential security gaps. With detailed reports and recommendations, we assist you in addressing vulnerabilities and enhancing the overall security posture of your applications.</p>
          </div>
        </div>
      </div>
    </div>
    <div class="row mt-5">
      <div class="col-md-6">
        <div class="solution-card contact-info-content">
          <div class="solution-card contact-info-content-content">
            <h3 class="solution-card contact-info-content-title">Web Application Firewall (WAF)</h3>
            <p class="solution-card contact-info-content-description">Protect your web applications from common attacks with our Web Application Firewall (WAF) solutions. We implement and configure advanced WAF technologies to monitor and filter incoming traffic, detect and block malicious activities, and provide granular control over application-level security policies. Enhance your application's resilience against threats.</p>
          </div>
        </div>
      </div>
      <div class="col-md-6">
        <div class="solution-card contact-info-content">
          <div class="solution-card contact-info-content-content">
            <h3 class="solution-card contact-info-content-title">Security Incident Response</h3>
            <p class="solution-card contact-info-content-description">In the event of a security incident, our expert team is equipped to respond swiftly and effectively. We provide incident response services to identify and contain security breaches, minimize damage, and restore the integrity of your applications. Our proactive incident handling strategies help you mitigate risks and protect your critical assets.</p>
          </div>
        </div>
      </div>
    </div>
    <div class="row mt-5">
      <div class="col-md-12">
        <div class="solution-card contact-info-content">
          <div class="solution-card contact-info-content-content">
            <h3 class="solution-card contact-info-content-title">Secure Application Architecture Design</h3>
            <p class="solution-card contact-info-content-description">Our IT company offers secure application architecture design services to ensure that your applications are built with a strong security foundation. We assess your existing architecture, recommend security enhancements, and assist in designing and implementing secure application frameworks. By adopting secure architectural principles, we help you build resilient and trustworthy applications.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection