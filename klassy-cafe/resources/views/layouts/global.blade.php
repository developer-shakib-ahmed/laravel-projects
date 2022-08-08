<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- csrf-token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- csrf-token -->

    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400;500;600;700&display=swap" rel="stylesheet">

    <link rel="shortcut icon" href="assets/images/favicon.png" type="image/x-icon">

    <title>{{ config('app.name') }}</title>

    <!-- Additional CSS Files -->
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">

    <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.css">

    <link rel="stylesheet" href="assets/css/templatemo-klassy-cafe.css">

    <link rel="stylesheet" href="assets/css/owl-carousel.css">

    <link rel="stylesheet" href="assets/css/lightbox.css">

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- Styles -->
    @livewireStyles

  </head>
    
  <body>
    
    <!-- ***** Preloader Start ***** -->
    <div id="preloader-stop">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>  
    <!-- ***** Preloader End ***** -->
    
    
    
    <!-- ***** Header Area Start ***** -->
    <header class="header-area header-sticky">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="main-nav">
                        <!-- ***** Logo Start ***** -->
                        <a href="{{ route('home') }}" class="logo">
                            <img src="assets/images/klassy-logo.png" align="klassy cafe html template">
                        </a>
                        <!-- ***** Logo End ***** -->

                        <!-- ***** Menu Start ***** -->
                        <ul class="nav">
                            <li class="scroll-to-section"><a href="/#top" class="active">Home</a></li>
                            <li class="scroll-to-section"><a href="/#about">About</a></li>
                            <li class="scroll-to-section"><a href="/#menus">Menus</a></li>
                            <li class="scroll-to-section"><a href="/#chefs">Chefs</a></li> 
                            
                            {{-- <li class="submenu">
                                <a href="#">Features</a>
                                <ul>
                                    <li><a href="#">Features Page 1</a></li>
                                    <li><a href="#">Features Page 2</a></li>
                                    <li><a href="#">Features Page 3</a></li>
                                    <li><a href="#">Features Page 4</a></li>
                                </ul>
                            </li> --}}

                            <li class="scroll-to-section"><a href="/#reservation">Contact Us</a></li>

                            @auth
                                <li><a href="{{ route('dashboard') }}">Dashboard</a></li>
                                <li>
                                    <!-- Authentication -->
                                    <form method="POST" action="{{ route('logout') }}" x-data>
                                        @csrf
                                        <a href="{{ route('logout') }}" @click.prevent="$root.submit();">
                                            {{ __('Log Out') }}
                                        </a>
                                    </form>
                                </li>
                                <li class="cart">
                                    <a href="{{ route('cart') }}">Cart <span>0</span></a>
                                </li>
                            @else
                                <li><a href="{{ route('login') }}">Login</a></li>
                            @endauth
                        </ul>        
                        <a class='menu-trigger'>
                            <span>Menu</span>
                        </a>
                        <!-- ***** Menu End ***** -->
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- ***** Header Area End ***** -->

    @yield('content')

    <!-- ***** Footer Start ***** -->
    <footer>
      <div class="container">
          <div class="row items-center">
              <div class="col-lg-4 col-xs-12">
                  <div class="right-text-content">
                          <ul class="social-icons">
                              <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                              <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                              <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                              <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                          </ul>
                  </div>
              </div>
              <div class="col-lg-4">
                  <div class="logo">
                      <a href="{{ route('home') }}">
                          <img class="mx-auto" src="assets/images/white-logo.png" alt="white-logo">
                      </a>
                  </div>
              </div>
              <div class="col-lg-4 col-xs-12">
                  <div class="left-text-content">
                      <p>© Klassy Cafe Co.</p>
                  </div>
              </div>
          </div>
      </div>
  </footer>

  <!-- jQuery -->
  <script src="assets/js/jquery-2.1.0.min.js"></script>

  <!-- Bootstrap -->
  <script src="assets/js/popper.js"></script>
  <script src="assets/js/bootstrap.min.js"></script>

  <!-- Plugins -->
  <script src="assets/js/owl-carousel.js"></script>
  <script src="assets/js/accordions.js"></script>
  <script src="assets/js/datepicker.js"></script>
  <script src="assets/js/scrollreveal.min.js"></script>
  <script src="assets/js/waypoints.min.js"></script>
  <script src="assets/js/jquery.counterup.min.js"></script>
  <script src="assets/js/imgfix.min.js"></script> 
  <script src="assets/js/slick.js"></script> 
  <script src="assets/js/lightbox.js"></script> 
  <script src="assets/js/isotope.js"></script> 
  
  <!-- Global Init -->
  <script src="assets/js/custom.js"></script>
  <script>

      $(function() {
          var selectedClass = "";
          $("p").click(function(){
          selectedClass = $(this).attr("data-rel");
          $("#portfolio").fadeTo(50, 0.1);
              $("#portfolio div").not("."+selectedClass).fadeOut();
          setTimeout(function() {
            $("."+selectedClass).fadeIn();
            $("#portfolio").fadeTo(50, 1);
          }, 500);
              
          });
      });

  </script>

  @livewireScripts
</body>
</html>