@extends('layouts.frontlayout.front')
@section('content')
  <!-- ***** Breadcrumb Area Start ***** -->
  <div class="breadcumb-area bg-img bg-gradient-overlay" style="background-image: url(<?php echo url('/'); ?>/img/bg-img/12.jpg);">
    <div class="container h-100">
      <div class="row h-100 align-items-center">
        <div class="col-12">
          <h2 class="title">About Us</h2>
        </div>
      </div>
    </div>
  </div>
  <div class="breadcumb--con">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="{{ route('dental') }}"><i class="fa fa-home"></i> Home</a></li>
              <li class="breadcrumb-item active" aria-current="page">About Us</li>
            </ol>
          </nav>
        </div>
      </div>
    </div>
  </div>
  <!-- ***** Breadcrumb Area End ***** -->

  <!-- ****** About Us Area Start ******* -->
  <section class="dento-about-us-area mt-70">
    <div class="container">
      <div class="row align-items-center">
        <!-- About Us Thumbnail -->
        <div class="col-12 col-md-6">
          <div class="about-us-thumbnail mb-50">
            <img src="<?php echo url('/'); ?>/img/bg-img/15.jpg" alt="">
          </div>
        </div>
        <!-- About Content -->
        <div class="col-12 col-md-6">
          <div class="about-us-content mb-50">
            <!-- Section Heading -->
            <div class="section-heading">
              <h2>About Us</h2>
              <div class="line"></div>
            </div>
            <p>Vestibulum condimentum, risus sedones honcus rutrum, salah lacus mollis zurna, nec finibusmi velit advertisis. Proin vitae odin quis magna aliquet laciniae. Etiam auctor, nisi vel. Pellentesque ultrices nisl quam iaculis, nec pulvinar
              augue.</p>

            <!-- Single Skills Area -->
            <div class="single-skills-area mt-30">
              <h6>Experience Dentist</h6>
              <div id="bar1" class="barfiller">
                <span class="tip"></span>
                <span class="fill" data-percentage="80"></span>
              </div>
            </div>

            <!-- Single Skills Area -->
            <div class="single-skills-area mt-30">
              <h6>Modern Equipment</h6>
              <div id="bar2" class="barfiller">
                <span class="tip"></span>
                <span class="fill" data-percentage="65"></span>
              </div>
            </div>

            <!-- Single Skills Area -->
            <div class="single-skills-area mt-30">
              <h6>Friendly Staff</h6>
              <div id="bar3" class="barfiller">
                <span class="tip"></span>
                <span class="fill" data-percentage="85"></span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- ****** About Us Area End ****** -->

  <div class="container">
    <div class="dento-border clearfix"></div>
  </div>

  <!-- Cool Facts Area Start -->
  <section class="dento-cta-area">
    <div class="container">
      <div class="row">
        <!-- Cool Facts Area -->
        <div class="col-12 col-sm-6 col-lg-3">
          <div class="single-cta text-center mt-50 mb-100">
            <i class="icon_genius"></i>
            <h2><span class="counter">20</span></h2>
            <h5>Years Of Experience</h5>
          </div>
        </div>

        <!-- Cool Facts Area -->
        <div class="col-12 col-sm-6 col-lg-3">
          <div class="single-cta text-center mt-50 mb-100">
            <i class="icon_heart_alt"></i>
            <h2><span class="counter">700</span>+</h2>
            <h5>Happy Patients</h5>
          </div>
        </div>

        <!-- Cool Facts Area -->
        <div class="col-12 col-sm-6 col-lg-3">
          <div class="single-cta text-center mt-50 mb-100">
            <i class="icon_book_alt"></i>
            <h2><span class="counter">120</span></h2>
            <h5>Certificate</h5>
          </div>
        </div>

        <!-- Cool Facts Area -->
        <div class="col-12 col-sm-6 col-lg-3">
          <div class="single-cta text-center mt-50 mb-100">
            <i class="icon_id"></i>
            <h2><span class="counter">40</span>+</h2>
            <h5>Dentist</h5>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Cool Facts Area End -->

  <!-- ***** Testimonials Area Start ***** -->
  <section class="testimonials-area section-padding-100 bg-img bg-gradient-overlay jarallax clearfix" style="background-image: url('<?php echo url('/'); ?>/img/bg-img/7.jpg');">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <!-- Testimonials Slides -->
          <div class="testimonials-slides owl-carousel">
            <!-- Single Testimonials Slide -->
            <div class="single-testimonial-slide d-flex align-items-center">
              <!-- Thumbnail -->
              <div class="testimonial-thumb">
                <img src="<?php echo url('/'); ?>/img/bg-img/8.jpg" alt="">
              </div>
              <!-- Content -->
              <div class="testimonial-content">
                <h5>“I'd been avoiding the dentist for years due to bad experiences. A reminder SMS is sent the working day beforehand. I also had a call confirming appointment. I have been a patient ever since. My dentist is very reassuring and
                  very helpful. Excellent treatment and advice.”</h5>
                <h6>Arron Ramsey</h6>
                <p>Dental Patient</p>
              </div>
            </div>

            <!-- Single Testimonials Slide -->
            <div class="single-testimonial-slide d-flex align-items-center">
              <!-- Thumbnail -->
              <div class="testimonial-thumb">
                <img src="<?php echo url('/'); ?>/img/bg-img/8.jpg" alt="">
              </div>
              <!-- Content -->
              <div class="testimonial-content">
                <h5>“I'd been avoiding the dentist for years due to bad experiences. A reminder SMS is sent the working day beforehand. I also had a call confirming appointment. I have been a patient ever since. My dentist is very reassuring and
                  very helpful. Excellent treatment and advice.”</h5>
                <h6>Arron Ramsey</h6>
                <p>Dental Patient</p>
              </div>
            </div>

            <!-- Single Testimonials Slide -->
            <div class="single-testimonial-slide d-flex align-items-center">
              <!-- Thumbnail -->
              <div class="testimonial-thumb">
                <img src="<?php echo url('/'); ?>/img/bg-img/8.jpg" alt="">
              </div>
              <!-- Content -->
              <div class="testimonial-content">
                <h5>“I'd been avoiding the dentist for years due to bad experiences. A reminder SMS is sent the working day beforehand. I also had a call confirming appointment. I have been a patient ever since. My dentist is very reassuring and
                  very helpful. Excellent treatment and advice.”</h5>
                <h6>Arron Ramsey</h6>
                <p>Dental Patient</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- ***** Testimonials Area End ***** -->

  <!-- ***** Dento Dentist Area Start ***** -->
  <section class="dentist-area section-padding-100-0">
    <div class="container">
      <div class="row">
        <!-- Section Heading -->
        <div class="col-12">
          <div class="section-heading text-center">
            <h2>Our Dentist</h2>
            <div class="line"></div>
          </div>
        </div>
      </div>

      <div class="row">
        <!-- Single Dentist Area -->
        <div class="col-12 col-sm-6 col-md-4">
          <div class="single-dentist-area mb-100">
            <img src="<?php echo url('/'); ?>/img/bg-img/9.png" alt="">
            <!-- Dentist Content -->
            <div class="dentist-content">
              <!-- Social Info -->
              <div class="dentist-social-info">
                <a href="#"><i class="fa fa-facebook"></i></a>
                <a href="#"><i class="fa fa-twitter"></i></a>
                <a href="#"><i class="fa fa-google-plus"></i></a>
              </div>
              <!-- Dentist Info -->
              <div class="dentist-info bg-gradient-overlay">
                <h5>Michael Barley</h5>
                <p>Implant Expert</p>
              </div>
            </div>
          </div>
        </div>

        <!-- Single Dentist Area -->
        <div class="col-12 col-sm-6 col-md-4">
          <div class="single-dentist-area mb-100">
            <img src="<?php echo url('/'); ?>/img/bg-img/10.png" alt="">
            <!-- Dentist Content -->
            <div class="dentist-content">
              <!-- Social Info -->
              <div class="dentist-social-info">
                <a href="#"><i class="fa fa-facebook"></i></a>
                <a href="#"><i class="fa fa-twitter"></i></a>
                <a href="#"><i class="fa fa-google-plus"></i></a>
              </div>
              <!-- Dentist Info -->
              <div class="dentist-info bg-gradient-overlay">
                <h5>Michael Barley</h5>
                <p>Implant Expert</p>
              </div>
            </div>
          </div>
        </div>

        <!-- Single Dentist Area -->
        <div class="col-12 col-sm-6 col-md-4">
          <div class="single-dentist-area mb-100">
            <img src="<?php echo url('/'); ?>/img/bg-img/11.png" alt="">
            <!-- Dentist Content -->
            <div class="dentist-content">
              <!-- Social Info -->
              <div class="dentist-social-info">
                <a href="#"><i class="fa fa-facebook"></i></a>
                <a href="#"><i class="fa fa-twitter"></i></a>
                <a href="#"><i class="fa fa-google-plus"></i></a>
              </div>
              <!-- Dentist Info -->
              <div class="dentist-info bg-gradient-overlay">
                <h5>Michael Barley</h5>
                <p>Implant Expert</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- ***** Dento Dentist Area End ***** -->
  @endsection
  

  