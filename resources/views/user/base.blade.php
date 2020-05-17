@extends('base.materialize')

@section('content')
<!-- parallax -->
<div class="parallax-container">
  <div class="parallax">
    <img src="{{ asset('img/photoprofile/wall.jpg') }}">
  </div>
  <!-- navbar -->
    @include('base.navbarhomepage')
  <!-- end navbar -->
</div>
<!-- end parallax -->

<!-- photo profile -->
<div class="photoprofile">
  <div>
    <img class="photoprofileimg" src="{{ asset('img/photoprofile/avatar.png') }}" alt="">
  </div>
</div>
<!-- end photo profile -->

@yield('user')

<!-- footer -->
@include('base.footer')
<!-- end footer -->

<script src="{{ asset('FEAdmin/assets/vendor/slimscroll/jquery.slimscroll.js') }}"></script>
@endsection
