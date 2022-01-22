<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <link rel="shortcut icon" href="{{ asset('home/assets/img/logo.png') }}">
    <title>SPBE</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Facebook Opengraph integration: https://developers.facebook.com/docs/sharing/opengraph -->
    <meta property="og:title" content="">
    <meta property="og:image" content="">
    <meta property="og:url" content="">
    <meta property="og:site_name" content="">
    <meta property="og:description" content="">

    <!-- Twitter Cards integration: https://dev.twitter.com/cards/  -->
    <meta name="twitter:card" content="summary">
    <meta name="twitter:site" content="">
    <meta name="twitter:title" content="">
    <meta name="twitter:description" content="">
    <meta name="twitter:image" content="">

    <!-- Favicons -->
    <link href="{{ asset('home/assets/img/favicon.png') }}" rel="icon">
    <link href="{{ asset('home/assets/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:400,500,700|Roboto:400,900" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('home/assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('home/assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('home/assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Saira+Stencil+One&display=swap" rel="stylesheet">
    <!--
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
  -->
    <!-- Template Main CSS File -->
    <link href="{{ asset('home/assets/css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('home/assets/css/visi_misi.css') }}" rel="stylesheet">
    <link href="{{ asset('home/assets/css/tujuan_sasaran.css') }}" rel="stylesheet">

    <!-- Leaflet -->
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css"
        integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A=="
        crossorigin="" />
    <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"
        integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA=="
        crossorigin=""></script>

    <!-- =======================================================
  * Template Name: Bell - v4.5.0
  * Template URL: https://bootstrapmade.com/bell-free-bootstrap-4-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>
    <!-- ======= Header ======= -->
    <header id="header" class="d-flex align-items-center bgcolor">
        <div class="container d-flex align-items-center">

            <div id="logo" class="me-auto">
                <a href="index.html">
                    {{-- <img src="{{ asset('home/assets/img/logo.png') }}" alt=""> --}}
                </a>
                <h1><a href="#hero">SPBE</a></h1>
            </div>

            <nav id="navbar" class="navbar order-last order-lg-0">
                <ul>

                    <li><a class="nav-link {{ $title === 'Home' ? 'active' : '' }}" href="/">Home</a></li>
                    <li><a class="nav-link {{ $title === 'Tentang' ? 'active' : '' }}" href="/tentang">Tentang</a>
                    </li>
                    <li class="dropdown"><a class="nav-link {{ $title === 'TIK' ? 'active' : '' }}"
                            href="#"><span>TIK</span> <i class="bi bi-chevron-down"></i></a>
                        <ul>
                            <li><a href="/infrastruktur">Infrastruktur</a></li>
                            <li><a href="/map">Map Wifi</a></li>
                        </ul>
                    </li>
                    <li><a href="https://ulas.surakarta.go.id/" target="blank">Ulas</a></li>
                    <li><a href="/login">Login</a></li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- .navbar -->

            <div class="header-social-links d-flex align-items-center">
                <a href="https://youtube.com/channel/UCL-EOcz_vh_2OlIMIh3zkyg" class="youtube"><i
                        class="bi bi-youtube"></i></a>
                <a href="https://twitter.com/PEMKOT_SOLO" class="twitter"><i class="bi bi-twitter"></i></a>
                <a href="https://instagram.com/pemkot_solo?utm_medium=copy_link" class="instagram"><i
                        class="bi bi-instagram"></i></a>
                <a href="https://www.facebook.com/pemkotsolo/" class="facebook"><i
                        class="bi bi-facebook"></i></i></a>
            </div>
        </div>
    </header><!-- End Header -->

    <main id="main">
        @yield('content')
    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer class="site-footer">
        <div class="bottom">
            <div class="container">
                <div class="row">

                    <div class="col-lg-6 col-xs-12 text-lg-start text-center">
                        <p class="copyright-text">
                            &copy; 2021 Pemerintah Kota Surakarta
                        </p>
                        <div class="credits">
                            Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
                        </div>
                    </div>


                    <div class="col-lg-6 col-xs-12 text-lg-right text-center">
                        <ul class="list-inline">
                            <li class="list-inline-item">
                                <a href="/">Home</a>
                            </li>

                            <li class="list-inline-item">
                                <a href="/tentang">Tentang</a>
                            </li>

                            <li class="list-inline-item">
                                <a href="/contact">Kontak</a>
                            </li>
                        </ul>
                    </div>

                </div>
            </div>
        </div>
    </footer><!-- End Footer -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="{{ asset('home/assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('home/assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
    <script src="{{ asset('home/assets/vendor/php-email-form/validate.js') }}"></script>
    <script src="{{ asset('home/assets/vendor/purecounter/purecounter.js') }}"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <!-- Template Main JS File -->
    <script src="{{ asset('home/assets/js/main.js') }}"></script>


    <script>
        $(window).scroll(function() {

            $('header').toggleClass('scrolled', $(this).scrollTop() > 50);

        });
    </script>

</body>

</html>
