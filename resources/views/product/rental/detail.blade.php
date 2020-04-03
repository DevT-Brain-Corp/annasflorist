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
    <div class="col s12">
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
    <div class="col s12 m6 l4 xl4 valign-wrapper plants2">
      <div>
        <img class="responsive-img" src="{{ asset('img/rental/4.png') }}" alt="">
      </div>
    </div>

    <div class="col s12 m6 l8 xl8 plants3">
      <!-- Deskripsi -->
      <div class="row">
        <div class="col s12 title">
          <p>Sukulen Panda</p>
        </div>
        <div class="col s12 title2">
          <p>Popular House Plants</p>
        </div>
        <div class="col s12 title3">
          <p>Rp.30.000<span>/hari</span></p>
          <p class="a">(Harga tidak termasuk pot dan aksesoris)</p>
        </div>
        <div class="col xl3 title3">
          <p>Stok : 6</p>
        </div>
        <div class="input-field col xl3">
          <input id="jumlah" type="number" class="validate" min="0" max="6">
          <label for="jumlah">Banyak Barang</label>
        </div>
      </div>
      <!-- End Deskripsi -->

      <!-- Tanggal -->
      <div class="row datepickerplants">
        <div class="col s12 l5 xl5 input-field">
          <input id="datepicker" type="text" class="validate datepicker datepicker1">
          <label for="datepicker">Dari tanggal</label>
        </div>
        <div class="col s12 l2 xl2 iconchevron">
          <div>
            <i class="material-icons">chevron_right</i>
          </div>
        </div>
        <div class="col s12 l5 xl5 input-field">
          <input id="datepicker2" type="text" class="validate datepicker datepicker2">
          <label for="datepicker2">Hingga tanggal</label>
        </div>
      </div>

      <div class="row hasilsewa">
        <div class="col s12 l6 xl6">
          <p id="hasil"></p>
        </div>
      </div>

      <div class="row nextstep">
        <div class="col s12">
          <div class="right">
            <a id="nextstep" class="waves-effect waves-light btn"><i class="material-icons right">arrow_forward</i>Selanjutnya</a>
          </div>
        </div>
      </div>
      <!-- End Tanggal -->
    </div>
  </div>
</div>
@endsection
