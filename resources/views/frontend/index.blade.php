@extends('frontend.body.home_master')

@section('title')
Shubh Vivah 
@endsection
  
@section('content')
<div class="container-fluid">
    <div class="row">
      <div class="col-xs-12 col-sm-12 col-md-12 topvideo-section">
        <video src="{{asset('frontend/images/shubh-vivah.mp4')}}" autoplay loop playsinline muted class="video-div"></video>
        <div id="video-overlap1">
        <div class="video-overlap"></div>
         </div>
      </div>
    </div>
  </div>
  
  <!--  end top video section -->
  
  
  <!--  start bg image section -->
  
  <div class="container-fluid">
    <div class="row">
      <div class="">
      <div class="col-xs-12 col-sm-12 col-md-12 bgimage-section">
          <div class="col-xs-12 col-sm-12 col-md-12 bgimage-section1">
  
  
            <div class="header-form">
          <div class="col-xs-12 col-sm-12 col-md-12 header-form1">
  
            <div class="col-xs-12 col-sm-12 col-md-12 form-head">
              <img src="{{asset('fronend/images/heart.png')}}">
               <strong>shubh vivah Inquiry Form</strong>
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
                                <input type="text" name="mobile" class="form-control place" placeholder="Phone Number" id="inputlast" required="">
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
  
  
  
  
  
  <!--  end b g image section  -->
  
  
  <!--  END HEADER SECTION -->
  
  
  <!-- start form section  -->
  
  <div class="container-fluid">
    <div class="row">
      <div class="col-xs-12 col-sm-12 col-md-12 aboutus-section">
        <div class="main">
          <div class="col-xs-12 col-sm-12 col-md-12 aboutus-section1">
  
            <div class="col-xs-12 col-sm-12 col-md-12 aboutus-head">
              <img src="{{asset('frontend/images/heart.png')}}" alt="Heart">
              <h1><a href="https://shubhvivah.us/"> shubh vivah  </a></h1>
              <p> about us</p>
            </div>
  
  
            <div class="col-xs-12 col-sm-12 col-md-12 aboutus-content">
  
              <div class="col-xs-12 col-sm-12 col-md-12 aboutus-content1">
                <span>Shubh Vivah is one of the leading matrimonial companies in North India.</span>
                <p>We are working for you only to fulfill this dream and solve all the problems regarding matchmaking, which will help you find the best partner for your life.</p>
                <p>We specialize in matchmaking compared to other matrimonial companies and websites in India. People of any age can easily use us to find the best match for their beloved. We provide our best matrimonial service in Punjab, Haryana, Delhi, Himachal, Jammu and Delhi NCR regions.</p>
  
              </div>
  
              <div class="col-xs-12 col-sm-12 col-md-12 aboutus">
                <a href="https://www.shubhvivah.us/about-us.php"> read more...</a>
              </div>
            </div>
  
  
            <!--  start why choose us section  -->
  
            <div class="col-xs-12 col-sm-12 col-md-12 chooseus-1">
              <div class="col-xs-12 col-sm-12 col-md-12 chooseus-2">
  
                <div class="col-xs-12 col-sm-6 col-md-4 choose-us1">
                  <div class="col-xs-12 col-sm-12 col-md-12 choose-us2">
                    <div class="col-xs-12 col-sm-12 col-md-12 choose-us3">
                      <i class="fas fa-user-tie"></i>
                           <strong> shubh Consultants </strong>
                           <p>We helps you to find perfect life partners for you.</p>
                    </div>
                  </div>
                </div>
  
                <div class="col-xs-12 col-sm-6 col-md-4 choose-us1 choose-us-2">
                  <div class="col-xs-12 col-sm-12 col-md-12 choose-us2">
                    <div class="col-xs-12 col-sm-12 col-md-12 choose-us3">
                      <i class="fas fa-american-sign-language-interpreting"></i>
                           <strong> shubh Matches </strong>
                           <p>Matchmaking Service offering educated & verified marriage proposals</p>
                    </div>
                  </div>
                </div>
  
                <div class="col-xs-12 col-sm-6 col-md-4 choose-us1 choose-us-1">
                  <div class="col-xs-12 col-sm-12 col-md-12 choose-us2">
                    <div class="col-xs-12 col-sm-12 col-md-12 choose-us3">
                      <i class="fas fa-user-secret"></i>
                           <strong> shubh Privacy</strong>
                           <p>We keep our client's information completely confidential</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!--  end why choose us section -->
          </div>
        </div>
      </div>
    </div>
  </div>
  
  <!--  end about us section  -->
  
  <div class="container-fluid">
    <div class="row">
      <div class="col-xs-12 col-sm-12 col-md-12 counter-section">
        <div class="main">
          <div class="col-xs-12 col-sm-12 col-md-12 counter-section1">
  
            <div class="col-xs-12 col-sm-12 col-md-12 aboutus-head aboutus-head1">
              <img src="{{asset('frontend/images/heart.png')}}" alt="Heart">
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
  
  
  
  
  <!--  start review section  -->
  
  <div class="container-fluid">
    <div class="row">
      <div class="col-xs-12 col-sm-12 col-md-12 review-section">
        <div class="main">
          <div class="col-xs-12 col-sm-12 col-md-12 review-section1">
  
            <div class="col-xs-12 col-sm-12 col-md-12 aboutus-head">
              <img src="{{asset('frontend/images/heart.png')}}" alt="Heart">
              <strong> shubh vivah reviews  </strong>
              <p> client testimonials </p>
            </div>
  
  
            <div class="col-xs-12 col-sm-12 col-md-12 review-1">
  
              <div class="col-xs-12 col-sm-12 col-md-12 review-2">
  
                <div class="col-xs-12 col-sm-6 col-md-6 review-left1">
                  <div class="col-xs-12 col-sm-12 col-md-12 review-left2">
                    <div class="col-xs-12 col-sm-12 col-md-12 review-content">
                      <strong>Happily Married</strong>
                      <p>Varun, an IT professional met with Gayatri a young fashion blogger by a relationship manager on Shubh Vivah. He does not believe that he can find love on the matrimonial website. But, here at Shubh Vivah, he has found a perfect life partner for him. Their interests have brought them together and they are happily married now and really thankful to their relationship manager assigned by Shubh Vivah.</p>
                      <span>Matched by Amarjot, Shubh Vivah Consultant</span>
                    </div>
                  </div>
                </div>
  
                 <div class="col-xs-12 col-sm-6 col-md-6 review-right1">
                  <div class="col-xs-12 col-sm-12 col-md-12 review-right2">
                    <img src="{{asset('frontend/images/review-1.jpg')}}" alt="Review">
                  </div>
                </div>
              </div>
            </div>
  
  
            <div class="col-xs-12 col-sm-12 col-md-12 view-more1">
              <a href="testimonials.php"> view more reviews</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection


