@extends('frontend.body.home_master')

@section('title')
Contact 
@endsection
  
@section('content')
<!--  start top video section -->

<div class="container-fluid">
    <div class="row">
      <div class="col-xs-12 col-sm-12 col-md-12 breadcrumb-section">
        <div class="main">
          <div class="col-xs-12 col-sm-12 col-md-12 bread-section">
  
            <div class="col-xs-12 col-sm-12 col-md-12 bread-text">
              <h1> get in touch </h1>
              <a href="https://www.shubhvivah.us/"> back to home page </a>
            </div>
  
  
          </div>
        </div>
      </div>
    </div>
  </div>
  
  <!--  end top video section -->
  
  <!--  END HEADER SECTION -->
  
  
  <!--  start form section -->
  
  <div class="container-fluid">
    <div class="row">
      <div class="">
      <div class="col-xs-12 col-sm-12 col-md-12 bgimage-section">
          <div class="col-xs-12 col-sm-12 col-md-12 bgimage-section1">
      
                      
                  
  
            <div class="header-form">
          <div class="col-xs-12 col-sm-12 col-md-12 header-form1">
  
            <div class="col-xs-12 col-sm-12 col-md-12 form-head">
              <img src="images/heart.png">
               <strong>shubh vivah Inquiry Form</strong>
               <span> SCR 52, second floor, near bassi theater, phase-2 mohali- 160055</span>
               <span> mob. : +91-9781866164 / +91-9914066164 </span>
                </div>
  
            <div class="col-xs-12 col-sm-12 col-md-12 contact-us">
             <div class="col-xs-12 col-sm-12 contac-rr">
                       
                      <?php
                      if(isset($_POST['submit']))
                      {
                      $name=$_POST['fname'];
                      $email=$_POST['email'];
                      $mobile=$_POST['mobile'];
                      $message=$_POST['message'];
                      $alliance_for=$_POST['alliance_for'];
                      echo"<meta http-equiv='Refresh' content='0;url=https://wa.me/919781866164/?text=Name: $name %0aEmail: $email %0aMobile: $mobile %0aSeeking Alliance for: $alliance_for %0aMessage: $message'>";
                      }
                      ?> 
                       
                       
                       
                        <form method="post">
                           <div class="form-row">
                            <div class="form-group col-sm-6">
                              <input type="text" name="fname" class="form-control place" id="inputfirst" placeholder="Name" required="">
                            </div>
  
                            <div class="form-group col-sm-6">
                                <input type="text" name="phone" class="form-control place" placeholder="Phone Number" id="inputlast" required="">
                            </div>
  
                            <div class="form-group col-xs-12 col-sm-12 col-md-12">
                             <select name="alliance_for">
                                   <option>Seeking Alliance for</option>
                                    <option>Self</option>
                                    <option>Brother</option>
                                    <option>Sister</option>
                                    <option>Friend</option>
                                    <option>Relative</option>
                                     <option>Son</option>
                                    <option>Daughter</option>
                                 </select>
                               </div>
  
                         <div class="form-group col-sm-12">
                              <input type="email" name="email" class="form-control place" id="inputEmail4" placeholder="Email Id" required="">
                          </div>
                              <div class="form-group col-sm-12">
                                   <textarea name="message" class="form-control place" id="description" placeholder="Your Message" required=""></textarea>
                                  </div>
                        <div class="col-sm-12 btn-group">
                                <button type="submit" name="submit" class="btn btn-default submit"> get started </button>
                            </div>
                          </div>
                       </form>
                    </div>
          </div>
          </div>
         </div>
  
  
  
      </div>
    </div>
  </div>
  </div>
  </div>
  
  
  
  
  
  <!--  end form section -->
  
  
  
  <!--  end about us section  -->
  
  <div class="container-fluid">
    <div class="row">
      <div class="col-xs-12 col-sm-12 col-md-12 counter-section">
        <div class="main">
          <div class="col-xs-12 col-sm-12 col-md-12 counter-section1">
  
            <div class="col-xs-12 col-sm-12 col-md-12 aboutus-head aboutus-head1">
              <img src="images/heart.png" alt="Heart">
              <strong>OUR CLIENTS DATABASE  </strong>
            </div>
  
            <div class="col-xs-12 col-sm-4 col-md-4 counter-1 counter-2a">
              <div class="col-xs-12 col-sm-12 col-md-12 counter-2">
                 <div class="love_counter">
                      <div class="love_count">12000</div>
                      <p>complete projects  </p>
                   </div>
              </div>
            </div>
  
            <div class="col-xs-12 col-sm-4 col-md-4 counter-1">
              <div class="col-xs-12 col-sm-12 col-md-12 counter-2">
                 <div class="love_counter">
                      <div class="love_count"> 1500000</div>
                      <p> DATABASE </p>
                   </div>
              </div>
            </div>
  
            <div class="col-xs-12 col-sm-4 col-md-4 counter-1">
              <div class="col-xs-12 col-sm-12 col-md-12 counter-2">
                 <div class="love_counter">
                      <div class="love_count">2000</div>
                      <p>PAID MEMBERS  </p>
                   </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  
  <script>
    jQuery(window).scroll(startCounter);
  function startCounter() {
      var hT = jQuery('.love_counter').offset().top,
          hH = jQuery('.love_counter').outerHeight(),
          wH = jQuery(window).height();
      if (jQuery(window).scrollTop() > hT+hH-wH) {
          jQuery(window).off("scroll", startCounter);
          jQuery('.love_count').each(function () {
              var $this = jQuery(this);
              jQuery({ Counter: 0 }).animate({ Counter: $this.text() }, {
                  duration: 10000,
                  easing: 'swing',
                  step: function () {
                      $this.text(Math.ceil(this.Counter) + '+');
                  }
              });
          });
      }
  }
  </script>
  
  
@endsection


