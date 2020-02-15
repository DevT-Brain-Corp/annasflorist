<!doctype html>
<html lang="en" id="top">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Jquery cdn -->
    <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
    <script src="https://gsgd.co.uk/sandbox/jquery/easing/jquery.easing.1.3.js"></script>

    <!-- materialize CSS -->
    <link rel="stylesheet" href="{{ asset('css/base/materialize.min.css') }}">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <!-- Font Awesome 4.7 -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Righteous|Saira&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Mali&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Red+Hat+Text&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Rambla&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Mukta+Vaani&display=swap" rel="stylesheet">

    <!-- Maps -->
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.6.0/dist/leaflet.css" integrity="sha512-xwE/Az9zrjBIphAcBb3F6JVqxf46+CDLwfLMHloNu6KEQCAWi6HcDUbeOfBIptF7tcCzusKFjFw2yuvEpDL9wQ==" crossorigin=""/>
    <script src="https://unpkg.com/leaflet@1.6.0/dist/leaflet.js" integrity="sha512-gZwIG9x3wUXg2hdXF6+rVkLF/0Vi9U8D2Ntg4Ga5I5BZpVkVxlJWbSQtXPSiUTtC0TjtGOmxa1AJPuV0CPthew==" crossorigin=""></script>

    <title>@yield('title')</title>
  </head>
  <body>

    @yield('content')

    <!-- Optional JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
  </body>
</html>
