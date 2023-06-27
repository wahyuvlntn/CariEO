<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $title }}</title>
    <!-- Favicons -->
        <link href="/img/favicon.png" rel="icon">
        <link href="/img/apple-touch-icon.png" rel="apple-touch-icon">

        <!-- Google Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Raleway:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">

        <!-- Vendor CSS Files -->
        <link href="/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link href="/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
        <link href="/vendor/aos/aos.css" rel="stylesheet">
        <link href="/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
        <link href="/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

        <!-- Template Main CSS File -->
        <link href="/css/main.css" rel="stylesheet">
  </head>
  <body>
    @include('partials.navbar')
    <div>
        @yield('container')     
    </div>
    @include('partials.footer')
    <!-- Vendor JS Files -->
        <script src="/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="/vendor/aos/aos.js"></script>
        <script src="/vendor/glightbox/js/glightbox.min.js"></script>
        <script src="/vendor/purecounter/purecounter_vanilla.js"></script>
        <script src="/vendor/swiper/swiper-bundle.min.js"></script>
        <script src="/vendor/isotope-layout/isotope.pkgd.min.js"></script>
        <script src="/vendor/php-email-form/validate.js"></script>

        <!-- Template Main JS File -->
        <script src="/js/main.js"></script>
  </body>
</html>