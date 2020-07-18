@extends('layouts.frontlayout.front')
@section('content')
  <!-- ***** Breadcrumb Area Start ***** -->
  <div class="breadcumb-area bg-img bg-gradient-overlay" style="background-image: url(<?php echo url('/'); ?>/img/bg-img/12.jpg);">
    <div class="container h-100">
      <div class="row h-100 align-items-center">
        <div class="col-12">
          <h2 class="title">Appointment</h2>
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
              <li class="breadcrumb-item active" aria-current="page">Appointment</li>
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
          <center>
           @if(Session::has('successMsg'))
            <div class="alert alert-success alert-block" role="alert" style="background-color: #48bfe3 ;">
              <span class="alert-block" role="alert" style="color:#ffffff;"> 
                <strong>{{ Session::get('successMsg') }} </strong>
              </span>
            </div>
            @endif
            <br/><br/>
            <p><h2>Note:</h2>This appointment hasn't been send yet,we will contact you shortly via telephone or email to confirm your appointment</p></center>
          </div>
        </div>
      </div>
  </section>
  <!-- ***** Contact Area End ***** -->
   @endsection