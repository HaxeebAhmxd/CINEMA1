<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <!-- basic -->
    <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title>Cinema</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- bootstrap css -->
      <!-- CSS only --> 
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
      <link rel="stylesheet" href="{{ asset('/css/bootstrap.min.css') }}">
      <!-- style css -->
      <link rel="stylesheet" href="{{ asset('/css/style.css') }}">
      <!-- Responsive-->
      <link rel="stylesheet" href="{{ asset('/css/responsive.css') }}">
      <!-- fevicon -->
      <link rel="icon" href="{{ asset('/iamge/fevicon.png') }}" type="image/gif" />
      <!-- Scrollbar Custom CSS -->
      <link rel="stylesheet" href="{{ asset('/jquery.mCustomScrollbar.min.css') }}">
      <!-- Tweaks for older IEs-->
      <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
      <!-- owl stylesheets --> 
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      <link rel="stylesheet" href="{{ asset('/css/owl.carousel.min.css') }}">
      <link rel="stylesheet" href="{{ asset('/css/owl.theme.default.min.css') }}">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
</head>
<body>

 <!-- header -->
 <header>
         <!-- header inner -->
         <div class="header">

             <div class="container">
               <div class="row">
                  <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col logo_section">
                     <div class="full">
                        <div class="center-desk">
                           <div class="logo"> <a href="index.html"><img src="{{ asset('/images/logo.png') }}" alt="#"></a> </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-xl-9 col-lg-9 col-md-9 col-sm-9">
                     <div class="menu-area">
                        <div class="limit-box">
                           <nav class="main-menu">
                              <ul class="menu-area-main">
                                 <li class="active"> <a href="{{route('welcome')}}">Home</a> </li>
                                 <li> <a href="about.html">About</a> </li>
                                 <li><a href="contact">Contact Us</a></li>
                                 
                                 
                                <li>
@yield('content-signin')
@yield('content-logout')
                                </li>
                              </ul>
                           </nav>
                        </div>
                     </div>
                  </div>
                  <div class="col-md-6 offset-md-6">
                     <div class="location_icon_bottum">
                        <ul>
                        <li><img src="{{ asset('/icon/call.png') }}"/>(+92)3001111111</li>
                           <li><img src="{{ asset('/icon/email.png') }}"/>cinema@gmail.com</li>
                           <li><img src="{{ asset('/icon/loc.png') }}"/>Location</li>
                        </ul>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <!-- end header inner -->
      </header>
      <!-- end header -->
     

@yield('content')



<!-- footer -->
<footer>
         <div id="contact" class="footer">
            <div class="container">
               <div class="row pdn-top-30">
                  <div class="col-md-12 ">
                     <div class="footer-box">
                     <div class="headinga">
                           <h3>Address</h3>
                           <span>A block, new city, wah cantt</span>
                           <p>(+92)3001111111<br>cinema@gmail.com</p>
                        </div>
                        <ul class="location_icon">
                           <li> <a href="#"><i class="fa fa-facebook-f"></i></a></li>
                           <li> <a href="#"><i class="fa fa-twitter"></i></a></li>
                           <li> <a href="#"><i class="fa fa-instagram"></i></a></li>
                           
                        </ul>
                        <div class="menu-bottom">
                           <ul class="link">
                              <li> <a href="{{route('welcome')}}">Home</a></li>
                              <li> <a href="#">About</a></li>
                           </ul>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="copyright">
               <div class="container">
                  <p>© 2021 All Rights Reserved. Design By<a href="#"> Haseeeb Ahmed</a></p>
               </div>
            </div>
         </div>
      </footer>
      <!-- end footer -->
      


      

     <!-- Javascript files-->
   
     <script src="{{ asset('/js/jquery.min.js') }}"></script>
      <script src="{{ asset('/js/proper.min.js') }}"></script>
      <script src="{{ asset('/js/bootstrap.bundle.min.js') }}"></script>
      <script src="{{ asset('/js/jquery=3.0.0.min.js') }}"></script>
      <script src="{{ asset('/js/plugin.js') }}"></script>
      <!-- sidebar -->
      <script src="{{ asset('/js/jquery.mCustomScrollbar.concat.min.js') }}"></script>
      <script src="{{ asset('/js/custom.js') }}"></script>
      <!-- javascript --> 
      <script src="{{ asset('/js/owl.carousel.js') }}"></script>
      <script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
      <!-- JavaScript Bundle with Popper -->
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
      <script>
         $(document).ready(function(){
         $(".fancybox").fancybox({
         openEffect: "none",
         closeEffect: "none"
         });
         
         $(".zoom").hover(function(){
         
         $(this).addClass('transition');
         }, function(){
         
         $(this).removeClass('transition');
         });
         });
         
      </script> 
     
</body>
</html>