<!DOCTYPE html>
<html lang="en">

<head>
  <title>Mitsubishi</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,700,900|Display+Playfair:200,300,400,700">
  <link rel="stylesheet" href="{{url('fonts/icomoon/style.css')}}">

  <link rel="stylesheet" href="{{url('css/bootstrap.min.css')}}">
  <link rel="stylesheet" href="{{url('css/magnific-popup.css')}}">
  <link rel="stylesheet" href="{{url('css/jquery-ui.css')}}">
  <link rel="stylesheet" href="{{url('css/owl.carousel.min.css')}}">
  <link rel="stylesheet" href="{{url('css/owl.theme.default.min.css')}}">

  <link rel="stylesheet" href="{{url('css/bootstrap-datepicker.css')}}">

  <link rel="stylesheet" href="{{url('fonts/flaticon/font/flaticon.css')}}">

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/mediaelement@4.2.7/build/mediaelementplayer.min.css">


  <link rel="stylesheet" href="{{url('css/aos.css')}}">

  <link rel="stylesheet" href="{{url('css/style.css')}}">

</head>

<body>

  <div class="site-wrap">

    <div class="site-mobile-menu">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div>

    <header class="site-navbar py-1" role="banner">

      <div class="container">
        <div class="row align-items-center">

          <div class="col-6 col-xl-2">
            <a class="navbar-brand" href="/">
              <img alt="Brand" style="width:100%; height:100%" src="{{url('images/logo-3.jpg')}}">
            </a>
          </div>
          <div class="col-10 col-md-8 d-none d-xl-block">
            <nav class="site-navigation position-relative text-right text-lg-center" role="navigation">

              <ul class="site-menu js-clone-nav mx-auto d-none d-lg-block">
                <li>
                  <a href="/">Home</a>
                </li>
                <!-- <li class="has-children">
                  <a href="destination">Destinations</a>
                  <ul class="dropdown">
                    <li><a href="#">Japan</a></li>
                    <li><a href="#">Europe</a></li>
                    <li><a href="#">China</a></li>
                    <li><a href="#">France</a></li>
                  </ul>
                </li> -->

                <li><a href="product">Product</a></li>
                <!-- <li><a href="about">About</a></li> -->
                <!-- <li><a href="blog">Blog</a></li> -->

                <li><a href="contact">Contact Us</a></li>
                <!-- <li><a href="booking.html">Book Online</a></li> -->
              </ul>
            </nav>
          </div>

          <div class="d-inline-block d-xl-none ml-md-0 mr-auto py-3" style="position: relative; top: 3px;"><a href="#" class="site-menu-toggle js-menu-toggle text-black"><span class="icon-menu h3"></span></a></div>

        </div>

      </div>
  </div>

  </header>


  @yield('discount')
  @yield('contact')
  @yield('blog')
  @yield('destination')
  @yield('home')
  @yield('about')
  @yield('spesifikasi')

  <footer class="page-footer bg-dark">
    <!-- Copyright -->
    <div class="footer-copyright text-center mx-3 py-3" style="color:#ffffff">Copyright © 2019 | This Template is made with
      <i class="icon-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
    </div>
    <!-- Copyright -->
  </footer>

  <script src="{{url('js/jquery-3.3.1.min.js')}}"></script>
  <script src="{{url('js/jquery-migrate-3.0.1.min.js')}}"></script>
  <script src="{{url('js/jquery-ui.js')}}"></script>
  <script src="{{url('js/popper.min.js')}}"></script>
  <script src="{{url('js/bootstrap.min.js')}}"></script>
  <script src="{{url('js/owl.carousel.min.js')}}"></script>
  <script src="{{url('js/jquery.stellar.min.js')}}"></script>
  <script src="{{url('js/jquery.countdown.min.js')}}"></script>
  <script src="{{url('js/jquery.magnific-popup.min.js')}}"></script>
  <script src="{{url('js/bootstrap-datepicker.min.js')}}"></script>
  <script src="{{url('js/aos.js')}}"></script>

  <script src="{{url('js/main.js')}}"></script>

</body>

</html>
