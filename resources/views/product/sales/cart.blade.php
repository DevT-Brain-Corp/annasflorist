@extends('base.materialize')
@section('title', 'Keranjang | Annas Florist')

@section('head')
  <link rel="stylesheet" href="{{ asset('css/sales/cart.css') }}">
  <script src="{{ asset('js/sales/cart.js') }}"></script>
@endsection

@section('content')
<!-- Navbar -->
@include('base.navbarcart')
<!-- End Navbar -->

<!-- title -->
<div class="container title">
  <p>keranjang anda</p>
  <p>anda mempunyai <span id="showcart"></span> barang di keranjang</p>
</div>
<!-- end title -->

<!-- cart -->
<div class="container cart">
  <!-- detail -->
  <div class="row">
    <div id="detail" class="col s12">
      <div id="row" class="row bgwhite z-depth-2">
        <div class="col xl2">
          <img class="responsive-img hoverable" src="{{ asset('img/rental/4.png') }}" alt="">
        </div>
        <div class="col xl4 word1">
          <p>sukulen panda<br><span>popular house plants</span></p>
        </div>
        <div class="col xl3">
          <div id="12" class="input-field">
            <input type="number" id="product1" class="formnumbers" name="ProductOne" onChange="changeTotalFromCount(this);" onLoad="changeTotalFromCount(this);" min="1" data-unitprice="10000" value="2" />
            <label for="product1">Jumlah Barang</label>
          </div>
        </div>
        <div class="col xl3">
          <p></p>
          <a href="#"><p class="exp">lihat selengkapnya</p></a>
          <a href="#"><p class="rmv">hapus</p></a>
        </div>
      </div>

      <div id="row" class="row bgwhite z-depth-2">
        <div class="col xl2">
          <img class="responsive-img hoverable" src="{{ asset('img/rental/4.png') }}" alt="">
        </div>
        <div class="col xl4 word1">
          <p>sukulen panda<br><span>popular house plants</span></p>
        </div>
        <div class="col xl3">
          <div class="input-field">
            <input type="number" id="product2" class="formnumbers" name="ProductTwo" onChange="changeTotalFromCount(this);" onLoad="changeTotalFromCount(this);" min="1" data-unitprice="20000" value="2" />
            <label for="product2">Jumlah Barang</label>
          </div>
        </div>
        <div class="col xl3">
          <p></p>
          <a href="#"><p class="exp">lihat selengkapnya</p></a>
          <a href="#"><p class="rmv">hapus</p></a>
        </div>
      </div>
    </div>
  </div>
  <!-- end detail -->

  <!-- totalprice -->
  <div class="row totalprice">
    <div class="col xl4 offset-xl8">
      <div class="row">
        <div class="col xl6">
          <p>Order Total</p>
          <p><span id="showcart2"></span> Barang</p>
        </div>
        <div class="col xl6">
          <p><span id="totalPriceDisplay"></span></p>
        </div>
      </div>
      <a href="#">Checkout</a>
    </div>
  </div>
  <!-- end totalprice -->
</div>
<!-- end cart -->

@endsection
