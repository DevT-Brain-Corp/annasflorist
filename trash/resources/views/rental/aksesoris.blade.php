@extends('base.materialize')

@section('title', 'Pilih Aksesoris | Annas Florist')

@section('head')
  <link rel="stylesheet" href="{{ asset('css/rental/aksesoris.css') }}">
  <script src="{{ asset('js/rental/aksesoris.js') }}"></script>
@endsection

@section('content')
<!-- Navbar -->
@include('base.navbarhomepage')
<!-- End Navbar -->

<div class="container deskripsi">
  <div class="row">
    <div class="col xl3 z-depth-2">
      @include('product.rental.aksesoris.cactus')
    </div>
    <div class="col xl8 offset-xl1">
      <div class="row">
        <div class="col xl12 z-depth-2">
          @include('product.rental.aksesoris.pot')
        </div>
        <div style="margin-top: 40px;" class="col xl12 z-depth-2">
          @include('product.rental.aksesoris.acc')
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Action button -->
<div class="fixed-action-btn">
  <a href="#" class="btn-floating btn-large red">
    <i class="large material-icons">done</i>
  </a>
</div>
<!-- End action button -->
@endsection
