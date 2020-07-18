<footer class="footer-area bg-img bg-gradient-overlay" style="background-image: url(<?php echo url('/'); ?>/img/bg-img/d8.jpg);">
    <div class="container">
      <div class="row">
        <!-- Single Footer Widget -->
        <div class="col-12 col-sm-6 col-lg-4">
          <div class="single-footer-widget">
            <a href="{{ route('dental') }}" class="d-block mb-4">
            <!-- <img src="/img/core-img/logo.png" alt=""> -->
            <h2><span style="color:#0ab4eb;"><strong >S</strong>IBADEN</span></h2>
            </a>
            <p>Etiam sutor risus, dapibus act elefend katen, lacinia sitamet denim. Mauris sagittis kansa interdum dignissim.</p>
            <div class="footer-contact">
              <p><i class="icon_pin"></i>28 lead-forte Street, Lagos, 08052031296 Nigeria</p>
              <p><i class="icon_phone"></i> +23408104884445</p>
              <p><i class="icon_mail"></i> info.sibaden@gmail.com</p>
            </div>
          </div>
        </div>

        <!-- Single Footer Widget -->
        <div class="col-12 col-sm-6 col-lg">
          <div class="single-footer-widget">
            <!-- Widget Title -->
            <h5 class="widget-title">Opening Hours</h5>

            <!-- Opening Hours -->
            <ul class="opening-hours">
              <li><span>Mon-Wed</span> <span>8.00-18.00</span></li>
              <li><span>Thu-Fri</span> <span>8.00-17.00</span></li>
              <li><span>Sat</span> <span>9.00-17.00</span></li>
              <li><span>Sun</span> <span>10.00-17.00</span></li>
              <li><span>Holiday</span> <span>Closed</span></li>
            </ul>
          </div>
        </div>

        <!-- Single Footer Widget -->
        <div class="col-12 col-sm-6 col-lg">
          <div class="single-footer-widget">
            <!-- Widget Title -->
            <h5 class="widget-title">Quick Link</h5>

            <!-- Quick Links Nav -->
            <nav>
              <ul class="quick-links">
                <li><a href="{{ route('a')}}">About</a></li>
                <li><a href="#">FAQs</a></li>
                <li><a href="{{ route('c')}}">Contact</a></li>
                <li><a href="#">Policy</a></li>
                <li><a href="{{ route('b')}}">News</a></li>
                <li><a href="#">Advisors</a></li>
                <li><a href="#">Careers</a></li>
                <li><a href="#">Dentist</a></li>
                <li><a href="{{ route('s')}}">Services</a></li>
                <li><a href="#">Legals</a></li>
              </ul>
            </nav>
          </div>
        </div>

        <!-- Single Footer Widget -->
        <div class="col-12 col-sm-6 col-lg">
          <div class="single-footer-widget">
            <!-- Widget Title -->
            <h5 class="widget-title">Newsletter</h5>

            <p>We will send out weekly newest article and some great offers</p>
            <!-- Newsletter Form -->
            <div class="footer-newsletter-form">
              <form action="{{ url('/view-nl-subscriber')}}" class=""  method="post">
                @csrf
                <input  type="email" name="user_email" id="user_email" value="" class="form-control" placeholder="Email Address" required />
                <button  id="btnSubmit" type="submit"><i class="fa fa-paper-plane" aria-hidden="true"></i></button>
              </form>
              <br/>
               @if(Session::has('successMsg'))
                 <!-- <div class=" alert-block" id="statusSubscriber" style=""> -->
                     <span class="alert-block" role="alert" style="color:#ffffff;"> 
                        <strong>{{ Session::get('successMsg') }} </strong>
                    </span>
                <!-- </div> -->
                @endif
            </div>

            <!-- Social Info -->
            <div class="footer-social-info">
              <a href="#" data-toggle="tooltip" data-placement="top" title="Facebook"><i class="fa fa-facebook"></i></a>
              <a href="#" data-toggle="tooltip" data-placement="top" title="Twitter"><i class="fa fa-twitter"></i></a>
              <a href="#" data-toggle="tooltip" data-placement="top" title="Google Plus"><i class="fa fa-google-plus"></i></a>
              <a href="#" data-toggle="tooltip" data-placement="top" title="Linkedin"><i class="fa fa-linkedin"></i></a>
              <a href="#" data-toggle="tooltip" data-placement="top" title="Pinterest"><i class="fa fa-pinterest"></i></a>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Copywrite Area -->
    <div class="container">
      <div class="row">
        <div class="col-12">
          <div class="copywrite-content">
            <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | developed with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="{{ route('dental') }}" target="_blank">Sibastar</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
          </div>
        </div>
      </div>
    </div>
  </footer>

  <script >
    //onfocus="enableSubscriber();" onfocusout="checkSubscriber();" onclick="checkSubscriber(); addSubscriber();"
     // function checkSubscriber(){
     //        var nl_email = $("#nl_email").val();
     //        $.ajax({
     //             type:'post',
     //             url:'/check-subscriber-email',
     //             data:{nl_email:nl_email},
     //             success:function(resp){
     //                 //alert(resp);
     //                if(resp=="exists"){
     //                     // alert("Subscriber email already exists");
     //                     $("#statusSubscriber").show();
     //                     $("#btnSubmit").hide();
     //                     $("#statusSubscriber").html("<div style='margin-top:-10px;'>&nbsp;</div><font color='red'>Subscriber email already exists</font>");
     //                }
     //             },error:function(){
     //                alert("Error");
     //             }

     //        });
     //    }
      // function addSubscriber(){
      //       var nl_email = $("#nl_email").val();
      //       $.ajax({
      //            type:'post',
      //            url:'/add-subscriber-email',
      //            data:{nl_email:nl_email},
      //            success:function(resp){
      //                //alert(resp);
      //               if(resp=="exists"){
      //                    // alert("Subscriber email already exists");
      //                    $("#statusSubscriber").show();
      //                    $("#btnSubmit").hide();
      //                    $("#statusSubscriber").html("<div style='margin-top:-10px;'>&nbsp;</div><font color='red'>Error: Subscriber email already exists</font>");
      //               }else if(resp=="Saved"){
      //                    $("#statusSubscriber").show();
      //                    $("#statusSubscriber").html("<div style='margin-top:-10px;'>&nbsp;</div><font color='green'>Success: Thanks for subscribing!</font>");
      //               }
      //            },error:function(){
      //               alert("Error");
      //            }

      //       });
      //   }  
     // function enableSubscriber(){
     //     $("#btnSubmit").show();
     //     $("#statusSubscriber").hide();
     // }
  </script>