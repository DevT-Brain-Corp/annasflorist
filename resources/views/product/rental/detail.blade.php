@extends('base.materialize')
@section('title', 'Detail Rental | Annas Florist')

@section('head')
  <link rel="stylesheet" href="{{ asset('css/rental/detail.css') }}">
  <script src="{{ asset('js/rental/detail.js') }}"></script>
@endsection

@section('content')
<!-- Navbar -->
@include('base.navbarhomepage')
<!-- End Navbar -->

<div class="container z-depth-3 background">
  <div class="row">
    <div class="xl12">
      <a href="#">
        <div class="plants valign-wrapper">
          <i class="material-icons">chevron_left</i>
          <span>back to all plants</span>
        </div>
      </a>
    </div>
  </div>
  <div class="divider"></div>
  <div class="row">
    <div class="col xl4 valign-wrapper plants2">
      <div>
        <img class="responsive-img" src="{{ asset('img/rental/4.png') }}" alt="">
      </div>
    </div>
    <div class="col xl8 plants3">
      <div class="row">
        <div class="col xl11 offset-xl1 title">
          <p>Sukulen Panda</p>
        </div>
        <div class="col xl11 offset-xl1 title2">
          <p>Popular House Plants</p>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
