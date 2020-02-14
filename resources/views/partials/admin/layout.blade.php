<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <!-- Title Page-->
    <title>Royalty</title>

    <!-- Fontfaces CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/admin/css/font-face.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/admin/vendor/font-awesome-4.7/css/font-awesome.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/admin/vendor/font-awesome-5/css/fontawesome-all.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/admin/vendor/mdi-font/css/material-design-iconic-font.min.css') }}">


    <!-- Bootstrap CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/admin/vendor/bootstrap-4.1/bootstrap.min.css') }}">


    <!-- Vendor CSS-->
  

    <link rel="stylesheet" type="text/css" href="{{ asset('assets/admin/vendor/animsition/animsition.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/admin/vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/admin/vendor/wow/animate.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/admin/vendor/css-hamburgers/hamburgers.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/admin/vendor/slick/slick.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/admin/vendor/select2/select2.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/admin/vendor/perfect-scrollbar/perfect-scrollbar.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/admin/vendor/vector-map/jqvmap.min.css') }}">




    <!-- Main CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/admin/css/theme.css') }}">

</head>

<body class="animsition">

<!--    Menu       -->
@include ('partials/admin/sidebar')


<!--    Menu lateral    -->

  @include ('partials/admin/menu')


<!--    Contenido editable    -->

     @yield('content')




  <!-- Jquery JS-->
  <script src="{{ asset('assets\admin\vendor\jquery-3.2.1.min.js') }}"></script>
    <!-- Bootstrap JS-->
    <script src="{{ asset('assets\admin\vendor\bootstrap-4.1\popper.min.js') }}"></script>
    <script src="{{ asset('assets\admin\vendor\bootstrap-4.1\bootstrap.min.js') }}"></script>
    <!-- Vendor JS       -->
    <script src="{{ asset('assets\admin\vendor\slick\slick.min.js') }}">
    </script>
    <script src="{{ asset('assets\admin\vendor\wow\wow.min.js') }}"></script>
    <script src="{{ asset('assets\admin\vendor\animsition\animsition.min.js') }}"></script>
    <script src="{{ asset('assets\admin\vendor\bootstrap-progressbar\bootstrap-progressbar.min.js') }}">
    </script>
    <script src="{{ asset('assets\admin\vendor\counter-up\jquery.waypoints.min.js') }}"></script>
    <script src="{{ asset('assets\admin\vendor\counter-up\jquery.counterup.min.js') }}">

<script type="text/javascript" src="{{ asset('assets\admin\sweet_alert.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets\admin\sweetalert2.all.min.js') }}"></script>


    </script>
    <script src="{{ asset('assets\admin\vendor\circle-progress/circle-progress.min.js') }}"></script>
    <script src="{{ asset('assets\admin\vendor\perfect-scrollbar\perfect-scrollbar.js') }}"></script>
    <script src="{{ asset('assets\admin\vendor\chartjs\Chart.bundle.min.js') }}"></script>
    <script src="{{ asset('assets\admin\vendor\select2\select2.min.js') }}">
    </script>
    <script src="{{ asset('assets\admin\vendor\vector-map\jquery.vmap.js') }}"></script>
    <script src="{{ asset('assets\admin\vendor\vector-map\jquery.vmap.min.js') }}"></script>
    <script src="{{ asset('assets\admin\vendor\vector-map\jquery.vmap.sampledata.js') }}"></script>
    <script src="{{ asset('assets\admin\vendor\vector-map\jquery.vmap.world.js') }}"></script>

    <!-- Main JS-->
    <script src="{{ asset('assets\admin\js\main.js') }}"></script>
    @include('sweetalert::alert')

    @include('sweetalert::alert', ['cdn' => "https://cdn.jsdelivr.net/npm/sweetalert2@9"])

</body>

</html>