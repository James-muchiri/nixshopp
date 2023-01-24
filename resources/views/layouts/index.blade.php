<!DOCTYPE html>
<html lang="en">

<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
    <meta charset="utf-8">
    <title> Ecommerce Shopping Platform
    </title>

    <!-- SEO Meta Tags-->
    <meta name="distribution" content="web">
    <!-- Mobile Specific Meta Tag-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

    <!-- Favicon Icons-->
    <link rel="icon" type="image/png" href="assets/images/1629651232pre.png">
    <link rel="apple-touch-icon" href="assets/images/1629651232pre.png">
    <link rel="apple-touch-icon" sizes="152x152" href="assets/images/1629651232pre.png">
    <link rel="apple-touch-icon" sizes="180x180" href="assets/images/1629651232pre.png">
    <link rel="apple-touch-icon" sizes="167x167" href="assets/images/1629651232pre.png">


    <!-- Google font (font-family: 'Ubuntu', sans-serif;) -->
    <link href="https://fonts.googleapis.com/css?family=Ubuntu:300,400,400i,500,500i,700" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">


    <!-- Vendor Styles including: Bootstrap, Font Icons, Plugins, etc.-->
    <link rel="stylesheet" href="{{ asset('css/plugins.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/styles.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/responsive.css') }}"><!-- Color css -->
    <link rel="stylesheet" href="{{ asset('css/color6e7b.css?primary_color=FF6A00') }}"><!-- Modernizr-->
    <script type="text/javascript" src="{{ asset('js/modernizr.min.js') }}"></script>
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">

    <!--   Core JS Files   -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs5/dt-1.10.25/datatables.min.css" />
    <script type="text/javascript" src="https://cdn.datatables.net/v/bs5/dt-1.10.25/datatables.min.js"></script>






    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.2/js/toastr.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>

    <script type="text/javascript" src="{{ asset('js/shop.js') }}"></script>



</head>
<!-- Body-->

<body class="body_theme1">

    <!-- Preloader Start -->
    <div id="preloader">
        <img src="{{ asset('images/preloading.gif') }}"  alt="Loading...">

        
    </div>

    <!-- Preloader endif -->


    <!-- Header-->
    @include('layouts.header')

    <!-- Content -->
    <div class="content">

        @yield('content')

    </div>


</body>

@include('layouts.footer')



</html>


<script type="text/javascript" src="{{ asset('js/plugins.min.js') }}"></script>

	<!-- Bootstrap Notify  -->
	<script src="{{ asset('backend/js/plugin/bootstrap-notify.min.js') }}"></script>


<script type="text/javascript" src="{{ asset('js/scripts.min.js') }}"></script>

<script type="text/javascript" src="{{ asset('js/lazy.min.js') }}"></script>

<script type="text/javascript" src="{{ asset('js/lazy.plugin.js') }}"></script>

<script type="text/javascript" src="{{ asset('js/myscript.js') }}"></script>
