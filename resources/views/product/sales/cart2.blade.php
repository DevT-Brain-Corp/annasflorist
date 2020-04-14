@extends('base.materialize')
@section('title', 'Keranjang | Annas Florist')

@section('head')
  <link rel="stylesheet" href="{{ asset('css/sales/cart2.css') }}">
  <script src="{{ asset('js/sales/cart2.js') }}"></script>
@endsection

@section('content')
<!-- Navbar -->
@include('base.navbarhomepage')
<!-- End Navbar -->

<!-- title -->
<div class="container title">
  <p>keranjang anda</p>
  <p>anda mempunyai 2 barang di keranjang</p>
</div>
<!-- end title -->

<!-- cart -->
<div class="container cart">
  <div class="row">
    <div class="col s12">
      <div class="row bgwhite z-depth-2">
        <div class="col xl2">
          <img class="responsive-img hoverable" src="{{ asset('img/rental/4.png') }}" alt="">
        </div>
        <div class="col xl4 word1">
          <p>sukulen panda<br><span>popular house plants</span></p>
        </div>
        <div class="col xl3">
          <div class="input-field">
            <input id="jumlahbarang" type="number" value="2" class="validate">
            <label for="jumlahbarang">Jumlah Barang</label>
          </div>
        </div>
        <div class="col xl3">
          <p>Rp.90.000</p>
          <a href="#"><p class="exp">lihat selengkapnya</p></a>
          <a href="#"><p class="rmv">hapus</p></a>
        </div>
      </div>

      <div class="row bgwhite z-depth-2">
        <div class="col xl2">
          <img class="responsive-img hoverable" src="{{ asset('img/rental/4.png') }}" alt="">
        </div>
        <div class="col xl4 word1">
          <p>sukulen panda<br><span>popular house plants</span></p>
        </div>
        <div class="col xl3">
          <div class="input-field">
            <input id="jumlahbarang" type="number" value="2" class="validate">
            <label for="jumlahbarang">Jumlah Barang</label>
          </div>
        </div>
        <div class="col xl3">
          <p>Rp.90.000</p>
          <a href="#"><p class="exp">lihat selengkapnya</p></a>
          <a href="#"><p class="rmv">hapus</p></a>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- end cart -->

@endsection
