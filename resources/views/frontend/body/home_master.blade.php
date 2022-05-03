<!DOCTYPE html>
<html>
<head>
<title>@yield('title') - India's #1 Punjabi Matrimonial Website</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<link rel="stylesheet" type="text/css" href="{{asset('frontend/css/style.css')}}">
<link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/css/all.min.css">
</head> 
<body>


<!--  START HEADER SECTION  -->

<!--  start bg image section -->

<div class="container-fluid">
@include('frontend.body.navbar')
</div>




<script>var burger = $(".hamburger-box");

burger.on("click", function (e) {
  $(this).toggleClass("active");
  $('.js-nav').parent().find('.menu').toggleClass('active');
});</script>

<script type="text/javascript">
  $(function() {
    $(window).on("scroll", function() {
        if($(window).scrollTop() > 80) {
            $(".header").addClass("active1");
        } else {
            //remove the background property so it comes transparent again (defined in your css)
           $(".header").removeClass("active1");
        }
    });
});
</script>


<script type="text/javascript">
    $(function() {
        var header = $(".start-style");
        $(window).scroll(function() {    
            var scroll = $(window).scrollTop();
        
            if (scroll >= 10) {
                header.removeClass('start-style').addClass("scroll-on");
            } else {
                header.removeClass("scroll-on").addClass('start-style');
            }
        });
    });     
</script>




<!--  end b g image section  -->

@yield('content')

<!--  start top video section -->



<!--  end review section  -->

<!--  start foorter section -->

@include('frontend.body.footer')

<!--  end footer section -->


</body>
</html>