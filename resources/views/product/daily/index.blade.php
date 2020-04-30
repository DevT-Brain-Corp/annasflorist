@extends('base.materialize')
@section('title', 'Daily | Annas Florist')

@section('head')
  <link rel="stylesheet" href="{{ asset('css/daily/index.css') }}">
  <script src="{{ asset('js/daily/index.js') }}"></script>
@endsection

@section('content')
<!-- navbar -->
@include('base.navbarhomepage')
<!-- endnavbar -->

<!-- feed -->
<div class="container row feed">
  <div class="col xl7">
    <div class="title">
      <p>terbaru</p>
    </div>
    <div class="feed1">
      @include('product.daily.news')
    </div>
  </div>
  <div class="col xl4 offset-xl1">
    <div class="title">
      <p>5 produk terbaru</p>
    </div>
    <div class="feed1">
      @include('product.daily.topchart')
    </div>
  </div>
</div>
<!-- end feed -->

<!-- footer -->
@include('base.footer')
<!-- end footer -->
@endsection
