<!doctype html>
<html lang="en">
<head>
    <title>@yield('title')</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Rubik:300,400,700|Oswald:400,700" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('fonts/icomoon/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/jquery.fancybox.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ asset('fonts/flaticon/font/flaticon.css') }}">
    <link rel="stylesheet" href="{{ asset('css/aos.css') }}">
    <!-- MAIN CSS -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/own.css') }}">
</head>
<body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">
    <div id="overlayer"></div>
    <div class="loader">
        <div class="spinner-border text-primary" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <div class="site-wrap" id="home-section">
        <div class="site-mobile-menu site-navbar-target">
            <div class="site-mobile-menu-header">
                <div class="site-mobile-menu-close mt-3">
                    <span class="icon-close2 js-menu-toggle"></span>
                </div>
            </div>
            <div class="site-mobile-menu-body"></div>
        </div>
        <header class="site-navbar js-sticky-header site-navbar-target" role="banner">

            <div class="container">
                <div class="row align-items-center position-relative">
                    <div class="site-logo">
                        <a href="/" class="text-black">
                            <img src="images/icon.png" alt="BersatuLawanCovid" class="logo">
                        </a>
                    </div>
                    <div class="col-12">
                        <nav class="site-navigation text-right ml-auto " role="navigation">
                            <ul class="site-menu main-menu js-clone-nav ml-auto d-none d-lg-block">
                                <li><a href="{{url('/') }}" class="nav-link">Beranda</a></li>
                                <li class="has-children">
                                    <a href="{{ url('/about') }}" class="nav-link">Tentang Covid-19</a>
                                    <ul class="dropdown arrow-top">
                                        <!-- <li><a href="#team-section" class="nav-link">Berita</a></li> -->
                                        <li><a href="{{ url('/data-covid') }}" class="nav-link">Data Covid-19</a></li>
                                    </ul>
                                </li>
                                <li class="has-children">
                                    <a href="#about-section" class="nav-link">Donasi</a>
                                    <ul class="dropdown arrow-top">
                                        <li><a href="{{ url('/penggalangan-bantuan') }}" class="nav-link">Penggalangan Bantuan</a></li>
                                        <li><a href="{{ url('/permohonan-bantuan') }}" class="nav-link">Permohonan Bantuan</a></li>
                                    </ul>
                                </li>
                                <li><a href="{{ url('/kontak') }}" class="nav-link">Kontak</a></li>
                                <li><a href="{{ url('/register') }}" class="nav-link">Daftar</a></li>
                                <li><a href="{{ url('/login') }}" class="nav-link">Masuk</a></li>
                            </ul>
                        </nav>
                    </div>
                    <div class="toggle-button d-inline-block d-lg-none">
                        <a href="#" class="site-menu-toggle py-5 js-menu-toggle text-black">
                            <span class="icon-menu h3"></span>
                        </a>
                    </div>
                </div>
            </div>

        </header>

        @yield('container')

            <footer class="site-footer">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="row">
                                <div class="col-md-8">
                                    <h2 class="footer-heading mb-4">Tentang Kami</h2>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque facere laudantium magnam voluptatum autem. Amet aliquid nesciunt veritatis aliquam.</p>
                                </div>
                                <div class="col-md-4 ml-auto">
                                    <h2 class="footer-heading mb-4">Features</h2>
                                    <ul class="list-unstyled">
                                        <li><a href="{{url('/about') }}">About Us</a></li>
                                        <li><a href="{{url('/terms-of-service') }}">Terms of Service</a></li>
                                        <li><a href="{{url('/privacy') }}">Privacy</a></li>
                                        <li><a href="{{url('/contact') }}">Contact</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 ml-auto">
                            <div class="mb-5">
                                <h2 class="footer-heading mb-4">Follow Us</h2>
                                <a href="#about-section" class="smoothscroll pl-0 pr-3">
                                    <span class="icon-facebook"></span>
                                </a>
                                <a href="https://twitter.com" class="pl-3 pr-3"><span class="icon-twitter"></span></a>
                                <a href="https://instagram.com" class="pl-3 pr-3"><span class="icon-instagram"></span></a>
                                <a href="https://linkedin.com" class="pl-3 pr-3"><span class="icon-linkedin"></span></a>
                            </div>
                        </div>
                        <div class="row pt-5 mt-5 text-center">
                            <div class="col-md-12">
                                <div class="border-top pt-5">
                                    <p class="copyright">
                                        <small>
                                            Copyright &copy;
                                            <script>document.write(new Date().getFullYear());</script>
                                            All rights reserved | Design by 
                                            <a href="https://colorlib.com" target="_blank">Colorlib</a> 
                                            and Development by <a href="https://tau.ac.id" target="_blank">Tanri Abeng University</a>
                                        </small>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </div>
  <script src="{{ asset('js/jquery-3.3.1.min.js') }}"></script>
  <script src="{{ asset('js/popper.min.js') }}"></script>
  <script src="{{ asset('js/bootstrap.min.js') }}"></script>
  <script src="{{ asset('js/owl.carousel.min.js') }}"></script>
  <script src="{{ asset('js/jquery.sticky.js') }}"></script>
  <script src="{{ asset('js/jquery.waypoints.min.js') }}"></script>
  <script src="{{ asset('js/jquery.animateNumber.min.js') }}"></script>
  <script src="{{ asset('js/jquery.fancybox.min.js') }}"></script>
  <script src="{{ asset('js/jquery.easing.1.3.js') }}"></script>
  <script src="{{ asset('js/aos.js') }}"></script>
  <script src="{{ asset('js/main.js') }}"></script>
</body>
</html>