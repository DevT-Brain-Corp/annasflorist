@extends('base.materialize')
@section('title', 'Rental | Annas Florist')

@section('head')
  <link rel="stylesheet" href="{{ asset('css/rental/index.css') }}">
  <script src="{{ asset('js/rental/index.js') }}"></script>
@endsection

@section('content')
<!-- Navbar -->
@include('base.navbarhomepage')
<!-- End Navbar -->

<!-- content -->
<div class="content">
  <div class="row">
    <div class="col xl3 z-depth-2">
      <div class="row datepickerplants">
        <div class="col s12 input-field">
          <input id="datepicker" type="text" class="validate datepicker datepicker1">
          <label for="datepicker">Dari tanggal</label>
        </div>
        <div class="col s12 iconchevron">
          <div>
            <i class="material-icons">chevron_right</i>
          </div>
        </div>
        <div class="col s12 input-field">
          <input id="datepicker2" type="text" class="validate datepicker datepicker2">
          <label for="datepicker2">Hingga tanggal</label>
        </div>
      </div>
    </div>

    <div class="col xl8 offset-xl1 z-depth-2">
      <div class="row listcactus">
        <div class="col xl2">
          <img src="{{ asset('img/rental/4.png') }}" class="responsive-img" alt="img/rental/4.png">
        </div>
        <div class="col xl5">
          <p class="title">sukulen panda</p>
          <p class="title2">popular house plants</p>
        </div>
        <div class="col xl5">
          <p><a class="title3" href="#">lihat selengkapnya</a></p>
        </div>
      </div>



    </div>
  </div>
</div>
<!-- end content -->
@endsection
