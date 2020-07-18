@extends('layouts.frontlayout.front')
@section('content')
  <!-- ***** Breadcrumb Area Start ***** -->
  <div class="breadcumb-area bg-img bg-gradient-overlay" style="background-image: url(<?php echo url('/'); ?>/img/bg-img/12.jpg);">
    <div class="container h-100">
      <div class="row h-100 align-items-center">
        <div class="col-12">
          <h2 class="title">Newsletter Emails</h2>
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
              <li class="breadcrumb-item active" aria-current="page">Newsletter Page</li>
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
           <div class="dento-price-table table-responsive">
            <table class="table table-borderless mb-0">
              <thead>
                <tr>
                  <th scope="col">Email ID</th>
                  <th scope="col">Email </th>
                  <th scope="col">Email Status </th>
                  <th scope="col">Time Created </th>
                  <th scope="col">Action</th>
                </tr>
              </thead>
              <tbody>
              	@foreach($newsletter as $nl)
                <tr>
                  <th scope="row">{{ $nl->id }}</th>
                  <td>{{ $nl->nl_email }}</td>
                  <td>{{ $nl->status }}</td>
                  <td>{{ $nl->status }}</td>
                   <td>{{ $nl->created_at }}</td>
                  <td><a href="#" class="btn btn-info">Delete</a></td>
                </tr>
                @endforeach

              </tbody>
            </table>
          </div>
        </div>
       </div>
        <p><h2>Note:</h2>This appointment hasn't been send yet,we will contact you shortly via telephone or email to confirm your appointment</p>
          
       
      </div>
  </section>
  <!-- ***** Contact Area End ***** -->
   @endsection