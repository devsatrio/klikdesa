<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="en">
<!--<![endif]-->

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Axuta is a colofull app landing page template">
    <meta name="author" content="TeamXcel">

    <title>Axuta | app landing page</title>

    <link rel="shortcut icon" type="image/x-icon" href="{{asset('frontend/img/favicon.png')}}">

    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="{{asset('assets/frontend/css/font-awesome.min.css')}}">
    <!-- Elegant Font Icons CSS -->
    <link rel="stylesheet" href="{{asset('assets/frontend/css/elegant-font-icons.css')}}">
    <!-- Elegant Line Icons CSS -->
    <link rel="stylesheet" href="{{asset('assets/frontend/css/elegant-line-icons.css')}}">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('assets/frontend/css/bootstrap.min.css')}}">
    <!-- Slicknav CSS -->
    <link rel="stylesheet" href="{{asset('assets/frontend/css/slicknav.min.css')}}">
    <!-- animate CSS -->
    <link rel="stylesheet" href="{{asset('assets/frontend/css/animate.min.css')}}">
    <!-- OWL-Carousel CSS -->
    <link rel="stylesheet" href="{{asset('assets/frontend/css/owl.carousel.css')}}">
    <!-- Swiper CSS -->
    <link rel="stylesheet" href="{{asset('assets/frontend/css/swiper.min.css')}}">
    <!-- Main CSS -->
    <link rel="stylesheet" href="{{asset('assets/frontend/css/main.css')}}">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="{{asset('assets/frontend/css/responsive.css')}}">

    <script src="{{asset('assets/frontend/js/vendor/modernizr-2.8.3-respond-1.4.2.min.js')}}"></script>
</head>

<body data-spy="scroll" data-target="#navmenu" data-offset="70">

    <div class="site-preloader-wrap">
        <div class="spinner"></div>
    </div><!-- Preloader -->

    <header id="header" class="header-section" style="background-color: #38af55;">
        <div class="container">
            <nav class="navbar">
                <a href="#" class="navbar-brand" style="color: white;"><img src="{{asset('logo/logo3.png')}}" style="width:10%;" alt="Axuta"> Klik Desa</a>
                <div class="d-flex menu-wrap">
                    <ul class="nav" >
                        <li><a data-scroll class="nav-link active" href="#home" style="color: white;">Home <span
                                    class="sr-only">(current)</span></a></li>
                        <li><a data-scroll class="nav-link" href="#artikel" style="color: white;">Artikel</a></li>
                        <li><a data-scroll class="nav-link" href="#galeri" style="color: white;">Galeri</a></li>
                        <li><a data-scroll class="nav-link" href="#kontak" style="color: white;">Kontak kami</a></li>
                    </ul>
                    <div class="header-btn">
                        <a href="#" class="default-btn">Login <i class="fa fa-user"></i></a>
                    </div>
                </div>
            </nav>
        </div>
    </header><!-- Header Section -->

    @yield('content')

    <!-- <div id="subscribe" class="subscribe-section padding">
        <div class="container text-center">
            <div class="subscribe-content">
                <img class="logo" src="img/footer-Logo.png" alt="logo" />
                <p>Lorem Ipsum is simply text of the printing and typesetting industry. <br>It has survived not only
                    five centuries.</p>
            </div>
            <div class="subscribe-wrap">
                <form action="#" class="subscribe-form">
                    <input type="email" name="email" id="subs-email" class="form_input"
                        placeholder="Enter Your Email Address...">
                    <button type="submit" class="submit">Subscribe</button>
                    <div id="subscribe-result">
                        <p class="subscription-success"></p>
                        <p class="subscription-error"></p>
                    </div>
                </form>
            </div>
            <div class="clearfix"></div>
            <ul class="social-link">
                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                <li><a href="#"><i class="fa fa-skype"></i></a></li>
                <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
            </ul>
        </div>
    </div>Subscribe Section -->

    <footer class="footer-section align-center">
        <div class="container">
            <p>&copy; 2018 Axuta Powered by TeamXcel</p>
        </div>
    </footer><!-- /.footer_section -->

    <a data-scroll href="#header" id="scroll-to-top"><i class="arrow_carrot-up"></i></a>

    <!-- jQuery Lib -->
    <script src="{{asset('assets/frontend/js/vendor/jquery-1.12.4.min.js')}}"></script>
    <!-- Bootstrap JS -->
    <script src="{{asset('assets/frontend/js/vendor/bootstrap.min.js')}}"></script>
    <!-- Tether JS -->
    <script src="{{asset('assets/frontend/js/vendor/tether.min.js')}}"></script>
    <!-- Slicknav JS -->
    <script src="{{asset('assets/frontend/js/vendor/jquery.slicknav.min.js')}}"></script>
    <!-- OWL-Carousel JS -->
    <script src="{{asset('assets/frontend/js/vendor/owl.carousel.min.js')}}"></script>
    <!-- Swiper JS -->
    <script src="{{asset('assets/frontend/js/vendor/swiper.min.js')}}"></script>
    <!-- Smooth Scroll JS -->
    <script src="{{asset('assets/frontend/js/vendor/smooth-scroll.min.js')}}"></script>
    <!-- Ajaxchimp JS -->
    <script src="{{asset('assets/frontend/js/vendor/jquery.ajaxchimp.min.js')}}"></script>
    <!-- Wow JS -->
    <script src="{{asset('assets/frontend/js/vendor/wow.min.js')}}"></script>
    <!-- Main JS -->
    <script src="{{asset('assets/frontend/js/main.js')}}"></script>

</body>

</html>