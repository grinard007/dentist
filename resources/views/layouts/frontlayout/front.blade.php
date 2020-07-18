<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="description" content="Sibaden - Dentist &amp; Medical Template">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Title -->
  <title>Sibaden - Dentist &amp; Medical</title>

  <!-- Favicon -->
  <link rel="icon" href="<?php echo url('/'); ?>/img/core-img/favicon.ico">

  <!-- Core Stylesheet -->
  <link rel="stylesheet" href="<?php echo url('/'); ?>/style.css">

</head>

<body>
  <!-- Preloader -->
  <div id="preloader">
    <div class="preload-content">
      <div id="dento-load"></div>
    </div>
  </div>

 @include('layouts.frontlayout.frontheader')

  @yield('content')
  <!-- ***** Footer Area Start ***** -->
 @include('layouts.frontlayout.frontfooter')
  <!-- ***** Footer Area End ***** -->

  <!-- ******* All JS ******* -->
  <!-- jQuery js -->
  <script src="<?php echo url('/'); ?>/js/jquery.min.js"></script>
  <!-- Popper js -->
  <script src="<?php echo url('/'); ?>/js/popper.min.js"></script>
  <!-- Bootstrap js -->
  <script src="<?php echo url('/'); ?>/js/bootstrap.min.js"></script>
  <!-- All js -->
  <script src="<?php echo url('/'); ?>/js/dento.bundle.js"></script>
  <!-- Active js -->
  <script src="<?php echo url('/'); ?>/js/default-assets/active.js"></script>

</body>

</html>