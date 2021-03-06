<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <!-- SBAdmin CSS -->
    <link rel="stylesheet" href="{{ asset('FEAdmin/assets/vendor/fonts/circular-std/style.css') }}">
    <link rel="stylesheet" href="{{ asset('FEAdmin/assets/vendor/charts/chartist-bundle/chartist.css') }}">
    <link rel="stylesheet" href="{{ asset('FEAdmin/assets/vendor/charts/morris-bundle/morris.css') }}">
    <link rel="stylesheet" href="{{ asset('FEAdmin/assets/vendor/fonts/material-design-iconic-font/css/materialdesignicons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('FEAdmin/assets/vendor/charts/c3charts/c3.css') }}">
    <link rel="stylesheet" href="{{ asset('FEAdmin/assets/vendor/fonts/flag-icon-css/flag-icon.min.css') }}">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('FEAdmin/assets/vendor/fonts/fontawesome/css/fontawesome-all.css') }}">


    <title>@yield('title')</title>
  </head>
  <body>
    @yield('content')

    <!-- Optional JavaScript -->
    <!-- jquery 3.3.1 -->
    <script src="{{ asset('FEAdmin/assets/vendor/jquery/jquery-3.3.1.min.js') }}"></script>
    <!-- bootstap bundle js -->
    <script src="{{ asset('FEAdmin/assets/vendor/bootstrap/js/bootstrap.bundle.js') }}"></script>
    <!-- slimscroll js -->
    <script src="{{ asset('FEAdmin/assets/vendor/slimscroll/jquery.slimscroll.js') }}"></script>
    <!-- main js -->
    <script src="{{ asset('FEAdmin/assets/libs/js/main-js.js') }}"></script>
    <!-- chart chartist js -->
    <script src="https://cdn.jsdelivr.net/chartist.js/latest/chartist.min.js"></script>
    <!-- chart c3 js -->
    <script src="{{ asset('FEAdmin/assets/vendor/charts/c3charts/c3.min.js') }}"></script>
    <script src="{{ asset('FEAdmin/assets/vendor/charts/c3charts/d3-5.4.0.min.js') }}"></script>
    <script src="{{ asset('FEAdmin/assets/vendor/charts/c3charts/C3chartjs.js') }}"></script>

    @yield('javaScript')
  </body>
</html>
