<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Vortex - Responsive HTML5 Portfolio</title>

    <!-- Favicons -->
    <link rel="shortcut icon" href="/themes/vortex/assets/images/favicon.png">
    <link rel="apple-touch-icon" href="/themes/vortex/assets/images/apple-touch-icon.png">
    <link rel="apple-touch-icon" sizes="72x72" href="/themes/vortex/assets/images/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="114x114" href="/themes/vortex/assets/images/apple-touch-icon-114x114.png">

    <!-- Bootstrap core CSS -->
    <link href="/assets/css/bootstrap/bootstrap.min.css" rel="stylesheet">

    <!-- Plugins -->
    <link href="/themes/vortex/assets/css/font-awesome.min.css" rel="stylesheet">
    <link href="/themes/vortex/assets/css/ionicons.min.css" rel="stylesheet">
    <link href="/themes/vortex/assets/css/simpletextrotator.css" rel="stylesheet">
    <link href="/themes/vortex/assets/css/magnific-popup.css" rel="stylesheet">
    <link href="/themes/vortex/assets/css/owl.carousel.css" rel="stylesheet">
    <link href="/themes/vortex/assets/css/superslides.css" rel="stylesheet">
    <link href="/themes/vortex/assets/css/vertical.css" rel="stylesheet">
    <link href="/themes/vortex/assets/css/animate.css" rel="stylesheet">

    <!-- Template core CSS -->
    <link href="/themes/vortex/assets/css/style.css" rel="stylesheet">
</head>
<body>

<!-- PRELOADER -->
<div class="page-loader">
    <div class="loader">Loading...</div>
</div>
<!-- /PRELOADER -->

<!-- OVERLAY MENU -->
@include('themes.vortex.partials.overlay-menu')
<!-- /OVERLAY MENU -->

<!-- WRAPPER -->
<div class="wrapper">
    <!--NAVIGATION -->
    @include('themes.vortex.partials.navigation')
    <!-- /NAVIGATION -->

    @yield('content')

    <!-- FOOTER -->
    @include('themes.vortex.partials.footer')
    <!-- /FOOTER -->

</div>
<!-- /WRAPPER -->

<!-- SCROLLTOP -->
<div class="scroll-up">
    <a href="index.html#totop"><i class="fa fa-angle-double-up"></i></a>
</div>

<!-- Javascript files -->
<script src="/themes/vortex/assets/js/jquery-2.1.3.min.js"></script>
<script src="/assets/js/bootstrap/bootstrap.min.js"></script>
<script src="/themes/vortex/assets/js/jquery.superslides.min.js"></script>
<script src="/themes/vortex/assets/js/jquery.mb.YTPlayer.min.js"></script>
<script src="/themes/vortex/assets/js/jquery.magnific-popup.min.js"></script>
<script src="/themes/vortex/assets/js/owl.carousel.min.js"></script>
<script src="/themes/vortex/assets/js/jquery.simple-text-rotator.min.js"></script>
<script src="/themes/vortex/assets/js/imagesloaded.pkgd.js"></script>
<script src="/themes/vortex/assets/js/isotope.pkgd.min.js"></script>
<script src="/themes/vortex/assets/js/packery-mode.pkgd.min.js"></script>
<script src="/themes/vortex/assets/js/appear.js"></script>
<script src="/themes/vortex/assets/js/jquery.easing.1.3.js"></script>
<script src="/themes/vortex/assets/js/wow.min.js"></script>
<script src="/themes/vortex/assets/js/jqBootstrapValidation.js"></script>
<script src="/themes/vortex/assets/js/jquery.fitvids.js"></script>
<script src="/themes/vortex/assets/js/jquery.parallax-1.1.3.js"></script>
<script src="/themes/vortex/assets/js/smoothscroll.js"></script>
<script src="/themes/vortex/assets/js/contact.js"></script>
<script src="/themes/vortex/assets/js/custom.js"></script>
</body>
</html>