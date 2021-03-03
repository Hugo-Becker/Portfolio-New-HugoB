<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <title>Folio Bootstrap Template - Index</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href={{asset("assets/img/favicon.png")}} rel="icon">
    <link href={{asset("assets/img/apple-touch-icon.png")}} rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href={{asset("https://fonts.googleapis.com/css?family=Poppins:300,300i,400,400i,500,500i,600,600i,700,700i|Playfair+Display:400,400i,500,500i,600,600i,700,700i,900,900i")}} rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href={{asset("assets/vendor/bootstrap/css/bootstrap.min.css")}} rel="stylesheet">
    <link href={{asset("assets/vendor/hover/hover.min.css")}} rel="stylesheet">
    <link href={{asset("assets/vendor/ionicons/css/ionicons.min.css")}} rel="stylesheet">
    <link href={{asset("assets/vendor/boxicons/css/boxicons.min.css")}} rel="stylesheet">
    <link href={{asset("assets/vendor/venobox/venobox.css")}} rel="stylesheet">
    <link href={{asset("assets/vendor/owl.carousel/assets/owl.carousel.min.css")}} rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href={{asset("assets/css/style.css")}} rel="stylesheet">

</head>
<body>


      @include('partials.navbar')


      @yield('content')



      @include('partials.footer')






        <!-- Vendor JS Files -->
        <script src={{asset("assets/vendor/jquery/jquery.min.js")}}></script>
        <script src={{asset("assets/vendor/bootstrap/js/bootstrap.bundle.min.js")}}></script>
        <script src={{asset("assets/vendor/jquery.easing/jquery.easing.min.js")}}></script>
        <script src={{asset("assets/vendor/php-email-form/validate.js")}}></script>
        <script src={{asset("assets/vendor/typed/typed.js")}}></script>
        <script src={{asset("assets/vendor/jquery-sticky/jquery.sticky.js")}}></script>
        <script src={{asset("assets/vendor/isotope-layout/isotope.pkgd.min.js")}}></script>
        <script src={{asset("assets/vendor/venobox/venobox.min.js")}}></script>
        <script src={{asset("assets/vendor/owl.carousel/owl.carousel.min.js")}}></script>

        <!-- Template Main JS File -->
        <script src={{asset("assets/js/main.js")}}></script>
    
</body>
</html>