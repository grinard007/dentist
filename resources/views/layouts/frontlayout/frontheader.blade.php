   <!-- ***** Header Area Start ***** -->
   <header class="header-area">
  <!-- Top Header Area -->
  <div class="top-header-area">
    <div class="container h-100">
      <div class="row h-100 align-items-center">
        <!-- Top Content -->
        <div class="col-6 col-md-9 col-lg-8">
          <div class="top-header-content">
            <a href="#" data-toggle="tooltip" data-placement="bottom" title="28 lead-forte Street, Lagos, 08052031296 Nigeria"><i class="fa fa-map-marker"></i> <span>28 lead-forte Street, Lagos, 08052031296 Nigeria</span></a>
            <a href="#" data-toggle="tooltip" data-placement="bottom" title="info.sibaden@gmail.com"><i class="fa fa-envelope"></i> <span>info.sibaden@gmail.com</span></a>
          </div>
        </div>
        <!-- Top Header Social Info -->
        <div class="col-6 col-md-3 col-lg-4">
          <div class="top-header-social-info text-right">
            <a href="#" data-toggle="tooltip" data-placement="bottom" title="Facebook"><i class="fa fa-facebook"></i></a>
            <a href="#" data-toggle="tooltip" data-placement="bottom" title="Twitter"><i class="fa fa-twitter"></i></a>
            <a href="#" data-toggle="tooltip" data-placement="bottom" title="Google Plus"><i class="fa fa-google-plus"></i></a>
            <a href="#" data-toggle="tooltip" data-placement="bottom" title="Linkedin"><i class="fa fa-linkedin"></i></a>
            <a href="#" data-toggle="tooltip" data-placement="bottom" title="Pinterest"><i class="fa fa-pinterest"></i></a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Top Header End -->

  <!-- Main Header Start -->
  <div class="main-header-area">
    <div class="classy-nav-container breakpoint-off">
      <div class="container">
        <!-- Classy Menu -->
        <nav class="classy-navbar justify-content-between" id="dentoNav">

          <!-- Logo -->
          <a class="nav-brand" href="{{ route('dental')}}">
             <!--<img src="/img/core-img/logo.png" alt=""> -->
            <h2><span style="color:#0ab4eb;"><strong >S</strong>IBADEN</span></h2>
          </a>

          <!-- Navbar Toggler -->
          <div class="classy-navbar-toggler">
            <span class="navbarToggler"><span></span><span></span><span></span></span>
          </div>

          <!-- Menu -->
          <div class="classy-menu">

            <!-- Close Button -->
            <div class="classycloseIcon">
              <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
            </div>

            <!-- Nav Start -->
            <div class="classynav">
              <ul id="nav">
                <li><a href="{{ route('dental') }}">Home</a></li>
                <li><a href="{{ route('a')}}">About</a></li>
                <li><a href="{{ route('s')}}">Service</a></li>
                <li><a href="{{ route('p')}}">Pricing</a></li>
                <li><a href="#">Blog</a>
                  <ul class="dropdown">
                    <li><a href="{{ route('b')}}">- Blog</a></li>
                    <li><a href="{{ route('bd')}}">- Blog Details</a></li>
                  </ul>
                </li>
                <li><a href="{{ route('c')}}">Contact</a></li>
              </ul>
            </div>
            <!-- Nav End -->
          </div>

          <!-- Booking Now Button -->
          <a href="#book" style="border-radius: 20%;" class="btn dento-btn booking-btn">Booking Now</a>
        </nav>
      </div>
    </div>
  </div>
</header>
<!-- ***** Header Area End ***** -->

