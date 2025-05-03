<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>JTI - Tracer Study</title>
  <meta name="description" content="">
  <meta name="keywords" content="">

  <!-- Favicons -->
  <link href="{{ asset('dewi/assets/img/favicon.png') }}" rel="icon">
  <link href="{{ asset('dewi/assets/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="  {{ asset('dewi/assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="  {{ asset('dewi/assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
  <link href="  {{ asset('dewi/assets/vendor/aos/aos.css') }}" rel="stylesheet">
  <link href="  {{ asset('dewi/assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
  <link href="  {{ asset('dewi/assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

  <!-- Main CSS File -->
  <link href="{{ asset('dewi/assets/css/main.css') }}" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Dewi
  * Template URL: https://bootstrapmade.com/dewi-free-multi-purpose-html-template/
  * Updated: Aug 07 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body class="index-page">

  <header id="header" class="header d-flex align-items-center fixed-top">
  @include('layouts.header')
  </header>

  <main class="main">

    <!-- Hero Section -->
    <section id="hero" class="hero section dark-background">

      {{-- foto bg --}}
      <img src="{{ asset('dewi/assets/img/gedung1.jpeg') }}" alt="" data-aos="fade-in">

      <div class="container d-flex flex-column align-items-center">
        <h2 data-aos="fade-up" data-aos-delay="100">TRACK. CONNECT. IMPROVE.</h2>
        <p data-aos="fade-up" data-aos-delay="200">Kami adalah tim yang berkomitmen melacak jejak lulusan demi kualitas pendidikan yang lebih baik.</p>
        <div class="d-flex mt-4" data-aos="fade-up" data-aos-delay="300">
          <a href="#about" class="btn-get-started">Get Started</a>
          <a href="https://youtu.be/aJYMCM1aEcA?si=xEa3v-tqzihrsxYB" class="glightbox btn-watch-video d-flex align-items-center"><i class="bi bi-play-circle"></i><span>Watch Video</span></a>
        </div>
      </div>

    </section><!-- /Hero Section -->

    <!-- About Section -->
    <section id="about" class="about section">
    @include('layouts.about')
    </section><!-- /About Section -->

    <!-- Stats Section -->
    <section id="stats" class="stats section light-background">
    @include('layouts.stats')
    </section><!-- /Stats Section -->

    <!-- Services Section -->
    <section id="services" class="services section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Services</h2>
        <p>Featured Services<br></p>
      </div><!-- End Section Title -->
      @include('layouts.services')
    </section><!-- /Services Section -->

    <!-- Clients Section -->
    {{-- <section id="clients" class="clients section light-background">
      @include('layouts.client')
    </section> --}}
    <!-- /Clients Section -->

    <!-- Features Section -->
    {{-- <section id="features" class="features section">
      @include('layouts.feature')
    </section> --}}
    <!-- /Features Section -->

    <!-- Services 2 Section -->
    {{-- <section id="services-2" class="services-2 section light-background">
      @include('layouts.services2')
    </section> --}}
    <!-- /Services 2 Section -->

    <!-- Testimonials Section -->
    <section id="testimonials" class="testimonials section dark-background">
      @include('layouts.testimonial')
    </section><!-- /Testimonials Section -->

    <!-- Portfolio Section -->
    <section id="portfolio" class="portfolio section">
      @include('layouts.portofolio')
    </section><!-- /Portfolio Section -->

    <!-- Team Section -->
    <section id="team" class="team section light-background">
      @include('layouts.team')
    </section><!-- /Team Section -->

    <!-- Contact Section -->
    {{-- <section id="contact" class="contact section">
      @include('layouts.contact')
    </section> --}}
    <!-- /Contact Section -->

  </main>

  <footer id="footer" class="footer dark-background">
    @include('layouts.tentang')
    </div>

    <div class="container copyright text-center mt-4">
      <p>© <span>Copyright</span> <strong class="px-1 sitename">Dewi</strong> <span>All Rights Reserved</span></p>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you've purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: [buy-url] -->
        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a> Distributed by <a href=“https://themewagon.com>ThemeWagon
      </div>
    </div>

  </footer>

  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Preloader -->
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="{{ asset('dewi/assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }} "></script>
  <script src="{{ asset('dewi/assets/vendor/php-email-form/validate.js') }}"></script>
  <script src="{{ asset('dewi/assets/vendor/aos/aos.js') }}"></script>
  <script src="{{ asset('dewi/assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
  <script src="{{ asset('dewi/assets/vendor/purecounter/purecounter_vanilla.js') }}"></script>
  <script src="{{ asset('dewi/assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
  <script src="{{ asset('dewi/assets/vendor/imagesloaded/imagesloaded.pkgd.min.js')}}"></script>
  <script src="{{ asset('dewi/assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>

  <!-- Main JS File -->
  <script src="{{ asset('dewi/assets/js/main.js') }}"></script>

</body>

</html>