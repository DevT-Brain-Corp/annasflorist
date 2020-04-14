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

<!-- title -->
<div class="content title">
  <div class="row">
    <div class="col s12">
      <div class="z-depth-2">
        <h1 class="title">rental</h1>
      </div>
    </div>
  </div>
</div>
<!-- end title -->

<!-- content -->
<div class="content">
  <div class="row">
    <div class="col l3 xl3 z-depth-2">
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
      <div class="row totalhari">
        <div class="col s12">
          <p id="hasil"></p>
        </div>
      </div>
    </div>

    <div class="col l8 offset-l1 xl8 offset-xl1 z-depth-2">
      @include('product.rental.index.rincian')
      <div class="divider"></div>
      @include('product.rental.index.rincian')
      <div class="divider"></div>
      @include('product.rental.index.empty')
      <div class="divider"></div>
      @include('product.rental.index.total')
    </div>
  </div>
</div>
<!-- end content -->
@endsection
