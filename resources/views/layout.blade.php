<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>AnyWork Naija    : Welcome</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Required -->
    {{--<link href="css/global-style.css" rel="stylesheet" type="text/css" media="screen">--}}
    <link href="{{ asset('css/global-style.css') }}" rel="stylesheet" type="text/css" media="screen">

    <link rel="icon" href="{{ asset('images/favicon.png') }}" type="image/png"><!-- LayerSlider stylesheet -->

    {{--<link rel="stylesheet" href="assets/layerslider/css/layerslider.css" type="text/css">--}}
    <link href="{{ asset('assets/layerslider/css/layerslider.css') }}" rel="stylesheet" type="text/css">

    {{--<link rel="stylesheet" href="flexslider.css" type="text/css">--}}
    <link href="{{ asset('flexslider.css') }}" rel="stylesheet" type="text/css">

</head>
<body class="wp-theme-4">

<div class="wrapper">

    <!-- Header: Logo and Main Nav -->
    <header>
        <div id="navOne" class="navbar navbar-wp" role="navigation">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle navbar-toggle-aside-menu">
                        <i class="fa fa-outdent icon-custom"></i>
                    </button>
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="index.php" title="AnyWork Naija ">
                        <img src="{{ asset('images/anyworkbranding.png') }}" width="150" height="140" alt="Handy Folks ">

                    </a>
                </div>
                <div class="navbar-collapse collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li class="active"><a href="/">Home</a></li>
                        <li><a href="/about">About us</a></li>
                        <li><a href="/services">Services</a></li>
                        <li><a href="/bookings_web">Make Booking</a></li>
                        <li><a href="/categories_web">View Consultants</a></li>
                        <li><a href="/testimonials_web">Testimonials</a></li>
                       @if(Auth::check())
                            <li><a href='/auth/logout'>Sign Out</a></li>
                       @else
                            <li><a href='/auth/register'>Sign Up</a></li>
                            <li><a href='/auth/login'>Sign In</a></li>
                       @endif

                    </ul>
                </div><!--/.nav-collapse -->
            </div>
        </div>
    </header>

</div>

<div class="container">

   @yield('content')

   </div>


   <footer class="footer">
       <div class="container">
           <div class="row">
               <div class="col-md-3">
                   <div class="col">
                       <h4>Contact us</h4>
                       <ul>
                           <li>Lagos Branch: 24 Oyebajo Street, Off Ikorodu Road, Fadeyi - Lagos</li>
                           <li>Lagos Contact: +234 803 8422 213  </li>
                           <li>Ibadan Branch: 6th Floor, Cocoa House, Ibadan
                           <li>Ibadan Contact: +234 817 1905 643  </li>
                           <li>Email: <a href="mailto:info@anyworknaija.com" title="Email Us">info@anyworknaija.com</a></li>
                           <li>Serving is our passion</li>
                       </ul>
                   </div>
               </div>

               <div class="col-md-3">
                   <div class="col">
                       <h4>Mailing list</h4>
                       <p>Sign up if you would like to receive occasional treats from us.</p>
                       <form class="form-inline">
                           <div class="input-group">
                               <input type="text" class="form-control" placeholder="Your email address...">
                               <span class="input-group-btn">
                                   <button class="btn btn-two" type="button">Go!</button>
                               </span>
                           </div>
                       </form>
                   </div>
               </div>

               <div class="col-md-3">
                   <div class="col col-social-icons">
                       <h4>Follow us</h4>
                       <a href="https://www.facebook.com/anyworknaija"><i class="fa fa-facebook"></i></a>
                       <a href="https://plus.google.com/u/0/110069956374750977577/"><i class="fa fa-google-plus"></i></a>
                       <a href="https://twitter.com/AnyworkNaija"><i class="fa fa-twitter"></i></a>
                       <a href="#"><i class="fa fa-linkedin"></i></a>
                       <a href="#"><i class="fa fa-skype"></i></a>
                       <a href="#"><i class="fa fa-pinterest"></i></a>
                       <a href="#"><i class="fa fa-youtube-play"></i></a>
                       <a href="#"><i class="fa fa-flickr"></i></a>
                   </div>
               </div>

               <div class="col-md-3">
                   <div class="col">
                       <h4>About us</h4>
                       <p>
                           We are a company started with the intention to serve and make life easier for our clients
                           <br><br>
                           <a href="sign-up.php" class="btn btn-two">Try it now!</a>
                       </p>
                   </div>
               </div>
           </div>

           <hr>

           <div class="row">
               <div class="col-lg-9 copyright">
                  © AnyWork Naija. All rights reserved.
                   <a href="#">Terms of use</a> |
                   <a href="#">Privacy policy</a>
               </div>
               <div class="col-lg-3 footer-logo">

               </div>
           </div>
       </div>
   </footer></div>

   <!-- JavaScript -->
   {{--<script type="text/javascript" src="js/jquery.js"></script>--}}
<script type="text/javascript" src="{{ asset('js/jquery.js') }}"></script>

   {{--<script type="text/javascript" src="assets/bootstrap/js/bootstrap.min.js"></script>--}}
<script type="text/javascript" src="{{ asset('assets/bootstrap/js/bootstrap.min.js') }}"></script>

   {{--<script type="text/javascript" src="js/modernizr.custom.js"></script>--}}
<script type="text/javascript" src="{{ asset('js/modernizr.custom.js') }}"></script>

   {{--<script type="text/javascript" src="js/jquery.mousewheel-3.0.6.pack.js"></script>--}}
<script type="text/javascript" src="{{ asset('js/jquery.mousewheel-3.0.6.pack.js') }}"></script>

   {{--<script type="text/javascript" src="js/jquery.cookie.js"></script>--}}
<script type="text/javascript" src="{{ asset('js/jquery.cookie.js') }}"></script>

   {{--<script type="text/javascript" src="js/jquery.easing.js"></script>--}}
<script type="text/javascript" src="{{ asset('js/jquery.easing.js') }}"></script>

   <!--[if lt IE 9]>
   <!--<script src="js/html5shiv.js"></script>-->
   <script type="text/javascript" src="{{ asset('js/html5shiv.js') }}"></script>

   {{--<script src="js/respond.min.js"></script>--}}
<script type="text/javascript" src="{{ asset('js/respond.min.js') }}"></script>
   <![endif]-->

   <!-- Plugins -->
   {{--<script type="text/javascript" src="assets/hover-dropdown/bootstrap-hover-dropdown.min.js"></script>--}}
<script type="text/javascript" src="{{ asset('assets/hover-dropdown/bootstrap-hover-dropdown.min.js') }}"></script>

   {{--<script type="text/javascript" src="assets/masonry/masonry.js"></script>--}}
<script type="text/javascript" src="{{ asset('assets/masonry/masonry.js') }}"></script>


   {{--<script type="text/javascript" src="assets/page-scroller/jquery.ui.totop.min.js"></script>--}}
<script type="text/javascript" src="{{ asset('assets/page-scroller/jquery.ui.totop.min.js') }}"></script>


   {{--<script type="text/javascript" src="assets/mixitup/jquery.mixitup.js"></script>--}}
<script type="text/javascript" src="{{ asset('assets/mixitup/jquery.mixitup.js') }}"></script>


   {{--<script type="text/javascript" src="assets/fancybox/jquery.fancybox.pack.js?v=2.1.5"></script>--}}
<script type="text/javascript" src="{{ asset('assets/fancybox/jquery.fancybox.pack.js?v=2.1.5') }}"></script>

   {{--<script type="text/javascript" src="assets/easy-pie-chart/jquery.easypiechart.js"></script>--}}
<script type="text/javascript" src="{{ asset('assets/easy-pie-chart/jquery.easypiechart.js') }}"></script>


   {{--<script type="text/javascript" src="assets/waypoints/waypoints.min.js"></script>--}}
<script type="text/javascript" src="{{ asset('assets/waypoints/waypoints.min.js') }}"></script>

   {{--<script type="text/javascript" src="assets/sticky/jquery.sticky.js"></script>--}}
<script type="text/javascript" src="{{ asset('assets/sticky/jquery.sticky.js') }}"></script>


   {{--<script type="text/javascript" src="js/jquery.wp.custom.js"></script>--}}
<script type="text/javascript" src="{{ asset('js/jquery.wp.custom.js') }}"></script>


   {{--<script type="text/javascript" src="js/jquery.wp.switcher.js"></script>--}}
<script type="text/javascript" src="{{ asset('js/jquery.wp.switcher.js') }}"></script>


   {{--<script src="assets/layerslider/js/greensock.js" type="text/javascript"></script>--}}
<script type="text/javascript" src="{{ asset('assets/layerslider/js/greensock.js') }}"></script>

   <!-- LayerSlider script files -->
   {{--<script src="assets/layerslider/js/layerslider.transitions.js" type="text/javascript"></script>--}}
<script type="text/javascript" src="{{ asset('assets/layerslider/js/layerslider.transitions.js') }}"></script>

   {{--<script src="assets/layerslider/js/layerslider.kreaturamedia.jquery.js" type="text/javascript"></script>--}}
<script type="text/javascript" src="{{ asset('assets/layerslider/js/layerslider.kreaturamedia.jquery.js') }}"></script>

   <!-- Initializing the slider -->
   <script>
       jQuery("#layerslider").layerSlider({
           pauseOnHover: true,
           autoPlayVideos: false,
           skinsPath: 'assets/layerslider/skins/',
           responsive: false,
           responsiveUnder: 1280,
           layersContainer: 1280,
           skin: 'borderlessdark3d',
           hoverPrevNext: false,
       });
   </script>

   <!--this is the flex slider js file, it is in the pack you downloaded from their site-->
   {{--<script src="jquery.flexslider.js"></script>--}}
<script type="text/javascript" src="{{ asset('jquery.flexslider.js') }}"></script>

   <script type="text/javascript" charset="utf-8">
       $(window).load(function () {
           $('.flexslider').flexslider({
               // you can add all the advanced function you want in this section.
               // The advanced functions can be found on flexslider site at the bottom section

           });
       });
   </script>



   </body>
   </html>