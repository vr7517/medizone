@extends('layouts.app')
{{-- @section('page_title', 'contact') --}}

@section('content')
 
<!-- Featured Services Section -->
<section id="featured-services" class="featured-services section-padding">

  <!-- Section Title -->
  <div class="container section-title" data-aos="fade-up">
    <h2>Our Healthcare Services</h2>
    <p>Providing advanced, patient-centered medical services across multiple specialties for your health and well-being.</p>
  </div><!-- End Section Title -->

  <div class="container" data-aos="fade-up" data-aos-delay="100">

    <div class="row g-0">

      <!-- Main Featured Service -->
      <div class="col-lg-8" data-aos="fade-right" data-aos-delay="200">
        <div class="featured-service-main">
          <div class="service-image-wrapper">
            <img src="assets/img/services/emergency-care.webp" alt="Comprehensive Healthcare" class="img-fluid" loading="lazy">
            <div class="service-overlay">
              <div class="service-badge">
                <i class="bi bi-heart-pulse"></i>
                <span>Emergency Care</span>
              </div>
            </div>
          </div>
          <div class="service-details">
            <h2>Comprehensive Healthcare Excellence</h2>
            <p>
              Medizone Multi-Speciality Hospital provides top-notch medical care including emergency, surgical, diagnostic,
              and specialized treatments. Equipped with state-of-the-art technology and expert medical teams,
              we ensure safety, quality, and compassionate care for all patients.
            </p>
            <a href="#!" class="main-cta">Explore Our Services</a>
          </div>
        </div>
      </div>

      <!-- Services Sidebar -->
      <div class="col-lg-4" data-aos="fade-left" data-aos-delay="300">
        <div class="services-sidebar">

          <div class="service-item" data-aos="fade-up" data-aos-delay="400">
            <div class="service-icon-wrapper">
              <i class="bi bi-bandaid"></i>
            </div>
            <div class="service-info">
              <h4>General Surgery</h4>
              <p>Minimally invasive & open surgical procedures with expert post-operative care and recovery.</p>
              <a href="#!" class="service-link">Learn More</a>
            </div>
          </div>

          <div class="service-item" data-aos="fade-up" data-aos-delay="500">
            <div class="service-icon-wrapper">
              <i class="bi bi-activity"></i>
            </div>
            <div class="service-info">
              <h4>Trauma & Critical Care</h4>
              <p>24/7 emergency services and ICU care for rapid and effective trauma management.</p>
              <a href="#!" class="service-link">Learn More</a>
            </div>
          </div>

          <div class="service-item" data-aos="fade-up" data-aos-delay="600">
            <div class="service-icon-wrapper">
              <i class="bi bi-people"></i>
            </div>
            <div class="service-info">
              <h4>Orthopedics</h4>
              <p>Advanced bone and joint treatments, including sports injury care and joint replacements.</p>
              <a href="#!" class="service-link">Learn More</a>
            </div>
          </div>

          <div class="service-item" data-aos="fade-up" data-aos-delay="700">
            <div class="service-icon-wrapper">
              <i class="bi bi-vial"></i>
            </div>
            <div class="service-info">
              <h4>Urology</h4>
              <p>Comprehensive kidney, urinary, and prostate care with minimally invasive procedures.</p>
              <a href="#!" class="service-link">Learn More</a>
            </div>
          </div>

          <div class="service-item" data-aos="fade-up" data-aos-delay="800">
            <div class="service-icon-wrapper">
              <i class="bi bi-ear"></i>
            </div>
            <div class="service-info">
              <h4>ENT Services</h4>
              <p>Expert treatment for ear, nose, and throat disorders, including hearing and voice care.</p>
              <a href="#!" class="service-link">Learn More</a>
            </div>
          </div>

          <div class="service-item" data-aos="fade-up" data-aos-delay="900">
            <div class="service-icon-wrapper">
              <i class="bi bi-person-walking"></i>
            </div>
            <div class="service-info">
              <h4>Physiotherapy</h4>
              <p>Personalized rehabilitation programs to restore mobility, strength, and function post-injury or surgery.</p>
              <a href="#!" class="service-link">Learn More</a>
            </div>
          </div>

        </div>
      </div>

    </div>

    <!-- Additional Service Grid -->
    <div class="specialties-grid" data-aos="fade-up" data-aos-delay="300">
      <div class="row align-items-center">

        <div class="col-lg-3 col-md-6">
          <div class="specialty-card">
            <div class="specialty-image">
              <img src="assets/img/services/maternal-care.webp" alt="Maternal Care" class="img-fluid" loading="lazy">
            </div>
            <div class="specialty-content">
              <h5>Maternal Care</h5>
              <span>Expert pregnancy & delivery support</span>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-md-6">
          <div class="specialty-card">
            <div class="specialty-image">
              <img src="assets/img/services/vaccination.webp" alt="Vaccination" class="img-fluid" loading="lazy">
            </div>
            <div class="specialty-content">
              <h5>Vaccination</h5>
              <span>Complete immunization programs</span>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-md-6">
          <div class="specialty-card">
            <div class="specialty-image">
              <img src="assets/img/services/emergency.webp" alt="Emergency Care" class="img-fluid" loading="lazy">
            </div>
            <div class="specialty-content">
              <h5>Emergency Care</h5>
              <span>24/7 critical care services</span>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-md-6">
          <div class="specialty-card">
            <div class="specialty-image">
              <img src="assets/img/services/advanced-tech.webp" alt="Advanced Technology" class="img-fluid" loading="lazy">
            </div>
            <div class="specialty-content">
              <h5>Advanced Technology</h5>
              <span>State-of-the-art medical equipment</span>
            </div>
          </div>
        </div>

      </div>
    </div>

  </div>

</section><!-- /Featured Services Section -->


@endsection