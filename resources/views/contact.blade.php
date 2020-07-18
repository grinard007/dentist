@extends('layouts.frontlayout.front')
@section('content')
  <!-- ***** Breadcrumb Area Start ***** -->
  <div class="breadcumb-area bg-img bg-gradient-overlay" style="background-image: url(<?php echo url('/'); ?>/img/bg-img/12.jpg);">
    <div class="container h-100">
      <div class="row h-100 align-items-center">
        <div class="col-12">
          <h2 class="title">Contact</h2>
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
              <li class="breadcrumb-item"><a href="{{ route('dental')}}"><i class="fa fa-home"></i> Home</a></li>
              <li class="breadcrumb-item active" aria-current="page">Contact</li>
            </ol>
          </nav>
        </div>
      </div>
    </div>
  </div>
  <!-- ***** Breadcrumb Area End ***** -->

  <!-- ***** Contact Area Start ***** -->
  <section class="dento-contact-area mt-50 mb-100">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <div class="google-maps mb-100">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6823.173007396089!2d3.7008353382315065!3d6.468471693505664!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x103bfe62366439a3%3A0x11cc07d1b41fb923!2sAwoyaya%2C%20Lekki!5e0!3m2!1sen!2sng!4v1594682053376!5m2!1sen!2sng"
              allowfullscreen></iframe>
          </div>
        </div>
      </div>

      <div class="row">
        <!-- Contact Information -->
        <div class="col-12 col-md-4">
          <div class="contact-information">
            <h5>Address</h5>
            <p>28 lead-forte Street, Lagos,  Nigeria</p>

            <h5>Phone</h5>
            <p>+2348052031296.</p>

            <h5>Telephone</h5>
            <p>+8422522250125</p>

            <h5>Email</h5>
            <p class="mb-0">info.sibaden@gmail.com</p>
          </div>
        </div>

        <!-- Contact Form -->
        <div class="col-12 col-md-8">
          <div class="contact-form">
            <!-- Section Heading -->
            <div class="section-heading">
              <h2>Get In Touch</h2>
              <div class="line"></div>
            </div>
            @if ($message=Session::get('successMsg'))
            <div class="alert alert-success" role="alert">
              {{ $message }}
            </div>
            @endif
            <!-- Form -->
            <form action="{{ route('c') }}" method="post">
              @csrf
              <div class="row">
                <div class="col-lg-6">
                  <input type="text" name="name" class="form-control @error('name') is-invalid @enderror mb-30" value="{{ old('name') }}" placeholder="Your Name">
                  @error('name')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                  @enderror
                </div>
                <div class="col-lg-6">
                  <input type="email" name="email" class="form-control @error('email') is-invalid @enderror mb-30" value="{{ old('email') }}" placeholder="Your Email">
                  @error('email')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                  @enderror
                </div>
                <div class="col-12">
                  <textarea name="message" class="form-control mb-30" placeholder="Your Message"></textarea>
                </div>
                <div class="col-12">
                  <button type="submit" name="submit" class="btn dento-btn">Send Message</button>
                </div>
              </div>
            </form>

          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- ***** Contact Area End ***** -->
   @endsection
  