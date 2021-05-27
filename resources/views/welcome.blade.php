@extends('layout.master')
@section('content-signin')

<a href="{{ route('auth.login') }}"><button class="signin">Sign in</button></a>

@stop

@section('content')

    <div class="main-layout special-page">
     
    
      <section class="slider_section">
         <div id="myCarousel" class="carousel slide banner-main" data-ride="carousel">
            <div class="carousel-inner">
               <div class="carousel-item active">
               <img class="first-slide" src="images/banner.jpg" alt="First slide">
                  <div class="container">
                     <div class="carousel-caption relative">
                        <span><h1>Unlimited movies, <br>shows, and more.</h1></span>
                       
                        <p>Watch anywhere. Cancel anytime.
                           <br> Ready to watch? Enter your email to register.</p>
                        <a class="buynow" href="{{ route('auth.register') }}">Get started</a>
                        
                     </div>
                  </div>
               </div>
               <div class="carousel-item">
               <img class="second-slide" src="images/banner1.jpg" alt="Second slide">
                  <div class="container">
                     <div class="carousel-caption relative">
                     <span><h1>Unlimited movies, <br>shows, and more.</h1></span>
                       
                        <p>Watch anywhere. Cancel anytime.
                           <br> Ready to watch? Enter your email to register.</p>
                        <a class="buynow" href="">Get started</a>
                        
                     </div>
                  </div>
               </div>
               
            </div>
            <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
            <i class='fa fa-angle-left'></i>
            </a>
            <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
            <i class='fa fa-angle-right'></i>
            </a>
         </div>
      </section>
    </div>
@endsection

   