<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <!-- Required meta tags -->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <title>Voyage | @yield('title')</title>
      <link rel="icon" href="{{ url('img/favicon.png')}}">
      <!-- Bootstrap CSS -->
      <link rel="stylesheet" href="{{ url('css/bootstrap.min.css')}}">
      <!-- animate CSS -->
      <link rel="stylesheet" href="{{ url('css/animate.css')}}">
      <!-- owl carousel CSS -->
      <link rel="stylesheet" href="{{ url('css/owl.carousel.min.css')}}">
      <!-- themify CSS -->
      <link rel="stylesheet" href="{{ url('css/themify-icons.css')}}">
      <!-- flaticon CSS -->
      <link rel="stylesheet" href="{{ url('css/flaticon.css')}}">
      <!-- fontawesome CSS -->
      <link rel="stylesheet" href="{{ url('fontawesome/css/all.min.css')}}">
      <!-- magnific CSS -->
      <link rel="stylesheet" href="{{ url('css/magnific-popup.css')}}">
      <link rel="stylesheet" href="{{ url('css/gijgo.min.css')}}">
      <!-- niceselect CSS -->
      <link rel="stylesheet" href="{{ url('css/nice-select.css')}}">
      <!-- slick CSS -->
      <link rel="stylesheet" href="{{ url('css/slick.css')}}">
      <!-- style CSS -->
      <link rel="stylesheet" href="{{ url('css/style.css')}}">
      {{-- fin --}}
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
</head>
<body>
   <!--::header part start::-->
   <header class="main_menu">
      <div class="sub_menu">
          <div class="container">
              <div class="row">
                  <div class="col-lg-6 col-sm-12 col-md-6">
                      <div class="sub_menu_right_content">
                          <span>Top destinations</span>
                          <a href="#">Asia</a>
                          <a href="#">Europe</a>
                          <a href="#">America</a>
                      </div>
                  </div>
                  <div class="col-lg-6 col-sm-12 col-md-6">
                      <div class="sub_menu_social_icon">
                          <a href="#"><i class="flaticon-facebook"></i></a>
                          <a href="#"><i class="flaticon-twitter"></i></a>
                          <a href="#"><i class="flaticon-skype"></i></a>
                          <a href="#"><i class="flaticon-instagram"></i></a>
                          <span><i class="flaticon-phone-call"></i>+880 356 257 142</a></span>
                      </div>
                  </div>
              </div>
          </div>
      </div>
      <div class="main_menu_iner">
          <div class="container">
              <div class="row align-items-center ">
                  <div class="col-lg-12">
                      <nav class="navbar navbar-expand-lg navbar-light justify-content-between">
                          <a class="navbar-brand" href="{{route('home')}}"> <img src="{{ asset('img/logo.png')}}" alt="logo"> </a>
                          <button class="navbar-toggler" type="button" data-toggle="collapse"
                              data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                              aria-expanded="false" aria-label="Toggle navigation">
                              <span class="navbar-toggler-icon"></span>
                          </button>

                          <div class="collapse navbar-collapse main-menu-item justify-content-center"
                              id="navbarSupportedContent">
                              <ul class="navbar-nav">
                                  <li class="nav-item">
                                      <a class="nav-link" href="{{ route('home') }}">Home</a>
                                  </li>
                                  <li class="nav-item">
                                      <a class="nav-link" href="{{ url('about') }}">About</a>
                                  </li>
                                  <li class="nav-item">
                                      <a class="nav-link" href="{{ url('trips') }}">Trips</a>
                                  </li>
                                  <li class="nav-item">
                                      <a class="nav-link" href="{{url('contact')}}">Contact</a>
                                  </li>
                                  <li class="nav-item">
                                      <a class="nav-link" href="{{route('admin/trips')}}">Admin-dashboard</a>
                                  </li>
                              </ul>
                          </div>
                          <a href="#" class="btn_1 d-none d-lg-block">book now</a>
                      </nav>
                  </div>
              </div>
          </div>
      </div>
  </header>
  <!-- Header part end-->

  @yield('content')


    <!-- footer part start-->
    <footer class="footer-area">
      <div class="container">
          <div class="row justify-content-between">
              <div class="col-sm-6 col-md-5">
                  <div class="single-footer-widget">
                      <h4>Discover Destination</h4>
                      <ul>
                          <li><a href="#">Miami, USA</a></li>
                          <li><a href="#">California, USA</a></li>
                          <li><a href="#">London, UK</a></li>
                          <li><a href="#">Saintmartine, Bangladesh</a></li>
                          <li><a href="#">Mount Everast, India</a></li>
                          <li><a href="#">Sidney, Australia</a></li>
                          <li><a href="#">Miami, USA</a></li>
                          <li><a href="#">California, USA</a></li>
                          <li><a href="#">London, UK</a></li>
                          <li><a href="#">Saintmartine, Bangladesh</a></li>
                          <li><a href="#">Mount Everast, India</a></li>
                          <li><a href="#">Sidney, Australia</a></li>
                      </ul>

                  </div>
              </div>
              <div class="col-sm-6 col-md-4">
                  <div class="single-footer-widget">
                      <h4>Subscribe Newsletter</h4>
                      <div class="form-wrap" id="mc_embed_signup">
                          <form target="_blank" action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01" method="get" class="form-inline">
                              <input class="form-control" name="EMAIL" placeholder="Your Email Address" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Your Email Address '" required="" type="email">
                              <button class="click-btn btn btn-default text-uppercase"> <i class="far fa-paper-plane"></i>
                              </button>
                              <div style="position: absolute; left: -5000px;">
                                  <input name="b_36c4fd991d266f23781ded980_aefe40901a" tabindex="-1" value="" type="text">
                              </div>

                              <div class="info"></div>
                          </form>
                      </div>
                      <p>Subscribe our newsletter to get update news and offers</p>
                  </div>
              </div>
              <div class="col-sm-6 col-md-3">
                  <div class="single-footer-widget footer_icon">
                      <h4>Contact Us</h4>
                      <p>4156, New garden, New York, USA +880 362 352 783</p>
                      <span>contact@martine.com</span>
                      <div class="social-icons">
                          <a href="#"><i class="ti-facebook"></i></a>
                          <a href="#"><i class="ti-twitter-alt"></i></a>
                          <a href="#"><i class="ti-pinterest"></i></a>
                          <a href="#"><i class="ti-instagram"></i></a>
                      </div>
                  </div>
              </div>
          </div>
      </div>
      <div class="container-fluid">
          <div class="row justify-content-center">
              <div class="col-lg-12">
                  <div class="copyright_part_text text-center">
                      <p class="footer-text m-0"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="ti-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                  </div>
              </div>
          </div>
      </div>
  </footer>
  <!-- footer part end-->

  <!-- jquery plugins here-->
  <script src="{{url('js/jquery-1.12.1.min.js')}}"></script>
  <!-- popper js -->
  <script src="{{url('js/popper.min.js')}}"></script>
  <!-- bootstrap js -->
  <script src="{{url('js/bootstrap.min.js')}}"></script>
  <!-- magnific js -->
  <script src="{{url('js/jquery.magnific-popup.js')}}"></script>
  <!-- swiper js -->
  <script src="{{url('js/owl.carousel.min.js')}}"></script>
  <!-- masonry js -->
  <script src="{{url('js/masonry.pkgd.js')}}"></script>
  <!-- masonry js -->
  <script src="{{url('js/jquery.nice-select.min.js')}}"></script>
  <script src="{{url('js/gijgo.min.js')}}"></script>
  <!-- contact js -->
  <script src="{{url('js/jquery.ajaxchimp.min.js')}}"></script>
  <script src="{{url('js/jquery.form.js')}}"></script>
  <script src="{{url('js/jquery.validate.min.js')}}"></script>
  <script src="{{url('js/mail-script.js')}}"></script>
  <script src="{{url('js/contact.js')}}"></script>
  <!-- custom js -->
  <script src="{{url('js/custom.js')}}"></script>
</body>
</html>