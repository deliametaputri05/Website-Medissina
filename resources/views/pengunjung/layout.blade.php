<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>@yield('title')</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="assets/img/logo.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
    <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet">

    <!-- =======================================================
  * Template Name: Medilab - v4.9.1
  * Template URL: https://bootstrapmade.com/medilab-free-medical-bootstrap-theme/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

    <!-- ======= Top Bar ======= -->
    <div id="topbar" class="d-flex align-items-center fixed-top">
        <div class="container d-flex justify-content-between">
            <div class="contact-info d-flex align-items-center">
                <i class="bi bi-envelope"></i> <a href="mailto:medissina.lohbener@gmail.com">medissina.lohbener@gmail.com</a>
                <i class="bi bi-phone"></i>+6287727447216
                <a href="{{ route('login') }}" class="p-3" target="_blank"><i class="bi bi-person"></i>Admin</a>

            </div>
            <div class="d-none d-lg-flex social-links align-items-center">
                <a href="https://wa.link/e21iaj" class="twitter" target="_blank"><i class="bi bi-whatsapp"></i></a>
                <a href="https://www.facebook.com/medi.sina.12914?mibextid=ZbWKwL" class="facebook" target="_blank"><i class="bi bi-facebook"></i></a>
                <a href="https://instagram.com/medissina.official?igshid=YmMyMTA2M2Y=" class="instagram" target="_blank"><i class="bi bi-instagram"></i></a>
                <a href="mailto:medissina.lohbener@gmail.com" class="instagram" target="_blank"><i class="bx bxl-gmail"></i></a>
                <a href="https://www.linkedin.com/in/klinik-utama-medissina-lohbener-a62b1725a" class="linkedin" target="_blank"><i class="bi bi-linkedin"></i></i></a>
            </div>
        </div>
    </div>

    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top">
        <div class="container d-flex align-items-center">

            <h1 class="logo me-auto"> <img src="assets/img/logo-head.png" alt="" class="img-fluid"></h1>
            <!-- <h1 class="logo me-auto"> <img src="assets/img/logo medissina.png" alt="" class="img-fluid"> <a href="/">Medissina</a></h1> -->
            <!-- Uncomment below if you prefer to use an image logo -->
            <!-- <a href="index.html" class="logo me-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a> -->

            <nav id="navbar" class="navbar order-last order-lg-0">
                <ul>
                    <li><a class="nav-link scrollto" href="/">Beranda</a></li>
                    <!-- <li><a class="nav-link scrollto" href="/tentang">Tentang</a></li> -->
                    <li><a class="nav-link scrollto" href="/layanan">Pelayanan</a></li>
                    <li><a class="nav-link scrollto" href="/mcu">MCU</a></li>
                    <!-- <li><a class="nav-link scrollto" href="/poliklinik">Poliklinik</a></li> -->
                    <li><a class="nav-link scrollto" href="/dokter">Dokter</a></li>
                    <!-- <li class="dropdown"><a href="#"><span>Drop Down</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="#">Drop Down 1</a></li>
              <li class="dropdown"><a href="#"><span>Deep Drop Down</span> <i class="bi bi-chevron-right"></i></a>
                <ul>
                  <li><a href="#">Deep Drop Down 1</a></li>
                  <li><a href="#">Deep Drop Down 2</a></li>
                  <li><a href="#">Deep Drop Down 3</a></li>
                  <li><a href="#">Deep Drop Down 4</a></li>
                  <li><a href="#">Deep Drop Down 5</a></li>
                </ul>
              </li>
              <li><a href="#">Drop Down 2</a></li>
              <li><a href="#">Drop Down 3</a></li>
              <li><a href="#">Drop Down 4</a></li>
            </ul>
          </li> -->
                    <li><a class="nav-link scrollto" href="/kontak">Kontak</a></li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- .navbar -->

            <a href="#appointment" class="appointment-btn scrollto"><span class="d-none d-md-inline">Daftar </span> Berobat</a>

        </div>
    </header><!-- End Header -->

    @yield('container')


    <!-- ======= Footer ======= -->
    <footer id="footer">

        <div class="footer-top">
            <div class="container">
                <div class="row">

                    <div class="col-lg-8 col-md-6 footer-contact">
                        <h3>Medissina</h3>
                        <p>
                            Jl. Raya Celeng Barat No.57
                            Lohbener
                            Indramayu, Jawa Barat <br><br>
                            <strong>Phone :</strong> +62877274472016<br>
                            <strong>Email :</strong> medissina.lohbener@gmail.com

                    </div>




                    <div class="col-lg-4 col-md-6 footer-newsletter">
                        <br><br>
                        <div class="social-links text-center text-md-right pt-3 pt-md-0">
                            <a href="https://wa.link/e21iaj" class="twitter" target="_blank"><i class="bx bxl-whatsapp"></i></a>
                            <a href="https://www.facebook.com/medi.sina.12914?mibextid=ZbWKwL" class="facebook" target="_blank"><i class="bx bxl-facebook"></i></a>
                            <a href="https://instagram.com/medissina.official?igshid=YmMyMTA2M2Y=" class="instagram" target="_blank"><i class="bx bxl-instagram"></i></a>
                            <a href="mailto:medissina.lohbener@gmail.com" class="google-plus" target="_blank"><i class="bx bxl-gmail"></i></a>
                            <a href="https://www.linkedin.com/in/klinik-utama-medissina-lohbener-a62b1725a" class="linkedin" target="_blank"><i class="bx bxl-linkedin"></i></a>
                        </div>
                        </p>
                    </div>

                </div>
            </div>
        </div>
        <!-- 
        <div class="container d-md-flex py-4">


            <div class="social-links text-center text-md-right pt-3 pt-md-0">
                <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
                <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
            </div>
        </div> -->
    </footer><!-- End Footer -->

    <div id="preloader"></div>
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>

    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>

</body>

</html>