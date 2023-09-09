@extends('layouts.app',['title' => 'Application Security'])

@section('content')
<!-- Start Page Title Area -->
<div class="page-title-area">
    <div class="d-table">
        <div class="d-table-cell">
            <div class="container">
                <div class="page-title-content">
                    <h2>Cybersecurity</h2>
                    <ul>
                        <li><a href="{{ route('index') }}">Home</a></li>
                        <li>Cybersecurity</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Page Title Area -->

<section class="py-5">
  <div class="container">
    <h2 class="text-center">Cybersecurity</h2>
    <p class="text-center">Our IT company specializing in cybersecurity services and solutions. With a commitment to safeguarding your digital assets and protecting your organization from evolving cyber threats, we provide comprehensive cybersecurity services tailored to your specific needs.</p>
    <div class="row">
      <div class="col-md-6">
        <div class="solution-card contact-info-content contact-info-content">
          <div class="solution-card contact-info-content-content">
            <h3 class="solution-card contact-info-content-title">Threat Detection and Response</h3>
            <p class="solution-card contact-info-content-description">We offer advanced threat detection and incident response services to identify and neutralize cyber threats in real-time. Our cutting-edge tools and methodologies ensure that any security incidents are swiftly and effectively addressed, minimizing potential damage.</p>
          </div>
        </div>
      </div>
      <div class="col-md-6">
        <div class="solution-card contact-info-content">
          <div class="solution-card contact-info-content-content">
            <h3 class="solution-card contact-info-content-title">Vulnerability Assessment and Penetration Testing</h3>
            <p class="solution-card contact-info-content-description">SecureTech Solutions conducts thorough vulnerability assessments and penetration testing to identify weaknesses in your systems and applications. Our team simulates real-world cyberattacks to help you fortify your defenses.</p>
          </div>
        </div>
      </div>
    </div>
    <div class="row mt-5">
      <div class="col-md-6">
        <div class="solution-card contact-info-content">
          <div class="solution-card contact-info-content-content">
            <h3 class="solution-card contact-info-content-title">Cybersecurity Consulting</h3>
            <p class="solution-card contact-info-content-description">Our seasoned cybersecurity consultants provide strategic guidance to organizations of all sizes. We assist in developing comprehensive cybersecurity strategies, policies, and compliance frameworks to align with industry best practices and regulatory requirements.</p>
          </div>
        </div>
      </div>
      <div class="col-md-6">
        <div class="solution-card contact-info-content">
          <div class="solution-card contact-info-content-content">
            <h3 class="solution-card contact-info-content-title">Network Security</h3>
            <p class="solution-card contact-info-content-description">Protecting your network infrastructure is paramount. We design and implement robust network security solutions, including firewalls, intrusion detection systems, and encryption, to ensure the confidentiality, integrity, and availability of your data.</p>
          </div>
        </div>
      </div>
    </div>
    <div class="row mt-5">
      <div class="col-md-6">
        <div class="solution-card contact-info-content">
          <div class="solution-card contact-info-content-content">
            <h3 class="solution-card contact-info-content-title">Endpoint Security</h3>
            <p class="solution-card contact-info-content-description">With the increasing complexity of endpoint threats, we offer cutting-edge endpoint security solutions to safeguard your devices, endpoints, and user data. Our solutions provide real-time threat prevention and detection.</p>
          </div>
        </div>
      </div>
      <div class="col-md-6">
        <div class="solution-card contact-info-content">
          <div class="solution-card contact-info-content-content">
            <h3 class="solution-card contact-info-content-title">Security Awareness Training</h3>
            <p class="solution-card contact-info-content-description">Human error is a common cause of security breaches. We provide security awareness training programs to educate your employees about cybersecurity best practices, helping to create a security-conscious workforce.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection