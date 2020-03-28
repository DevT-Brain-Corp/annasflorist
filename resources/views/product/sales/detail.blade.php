@extends('base.materialize')

@section('title', 'Product | Annas Florist')

@section('content')
<head>
  <link rel="stylesheet" href="{{ asset('css/product.css') }}">
  <script type="text/javascript" src="{{ asset('js/product.js') }}"></script>

  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
</head>

<!-- Navbar -->
@include('base.navbar')
<!-- End Navbar -->

<!-- Deskripsi -->
<div class="deskripsi">
  <div class="deskripsii">
    <div class="deskripsiii">
      <div class="row resp">
        <div class="col s12 m6 l5 xl5 gambar">
          <div class="slider">
            <ul class="slides">
              <li>
                <img src="{{ asset('img/sales/sukulen panda.jpg') }}" alt="">
              </li>
              <li>
                <img src="{{ asset('img/sales/sukulen panda.jpg') }}" alt="">
              </li>
              <li>
                <img src="{{ asset('img/sales/sukulen roseum.jpg') }}" alt="">
              </li>
            </ul>
          </div>
        </div>
        <div class="col s12 m6 l5 offset-l1 xl5 offset-xl1 caption">
          <p class="caption1">Sukulen Panda<br>Rp. 40.000</p>
          <div class="caption2">
            <div class="row">
              <div class="col xl3 s6">
                <p>Kategori</p>
              </div>
              <div class="col xl6 s6">
                <p>Sales</p>
              </div>
            </div>
            <div class="row">
              <div class="col xl3 s6">
                <p>Jenis</p>
              </div>
              <div class="col xl6 s6">
                <p>Sukulen</p>
              </div>
            </div>
            <div class="row">
              <div class="col s3">
                <p>Stok</p>
              </div>
              <div class="col s6">
                <p>5</p>
              </div>
            </div>
            <div class="row">
              <div class="col s3">
                <p>Warna</p>
              </div>
              <div class="col s9">
                <div class="row" id="foobar">

                  <div class="col s12 l6 xl4">
                    <label>
                      <input type="radio" name="myRadios" class="card-input-element d-none" onclick="handleClick(this);" id="1">
                      <div class="card tooltipped" id="Biru">
                        <span data-position="bottom">Biru</span>
                      </div>
                    </label>
                  </div>

                  <div class="col s12 l6 xl4">
                    <label>
                      <input type="radio" name="myRadios" class="card-input-element d-none" onclick="handleClick(this);" id="2">
                      <div class="card tooltipped" id="Pink">
                        <span data-position="bottom">Pink</span>
                      </div>
                    </label>
                  </div>

                  <div class="col s12 l6 xl4">
                    <label>
                      <input type="radio" name="myRadios" class="card-input-element d-none" onclick="handleClick(this);" id="3">
                      <div class="card tooltipped" id="Merah">
                        <span data-position="bottom">Merah</span>
                      </div>
                    </label>
                  </div>

                  <div class="col s12 l6 xl4">
                    <label>
                      <input type="radio" name="myRadios" class="card-input-element d-none" onclick="handleClick(this);" id="4">
                      <div class="card tooltipped" id="Hitam">
                        <span data-position="bottom">Hitam</span>
                      </div>
                    </label>
                  </div>

                  <div class="col s12 l6 xl4">
                    <label>
                      <input type="radio" name="myRadios" class="card-input-element d-none" onclick="handleClick(this);" id="5">
                      <div class="card tooltipped" id="Hijau">
                        <span data-position="bottom">Hijau</span>
                      </div>
                    </label>
                  </div>

                  <div class="col s12 l6 xl4">
                    <label>
                      <input type="radio" name="myRadios" class="card-input-element d-none" onclick="handleClick(this);" id="6">
                      <div class="card tooltipped" id="Putih">
                        <span data-position="bottom">Putih</span>
                      </div>
                    </label>
                  </div>

                </div>
              </div>
            </div>
          </div>
          <div class="row caption2">
            <div class="col s3 xl3">
              <p style="margin-top: 0">Jumlah</p>
            </div>
            <div class="col s2 xl3">
              <div class="inputnumber">
                <form>
                  <input type="number" name="jumlah" value="0" min="0">
                </form>
              </div>
            </div>
            <div class="col s2 xl3">
              <p style="margin-top: 0; color: #001E0F;"><span id="stokpot2"></span></p>
            </div>
          </div>
          <div class="masukkankeranjang right-align">
            <div class="beli">
              <a href="#">Beli Sekarang</a>
            </div>
            <div class="masukkan">
              <a href="#"><i class="large material-icons">shopping_cart</i>Masukkan Keranjang</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- End Deskripsi -->

<!-- Caption -->
<div class="narasi">
  <div class="narasii">
    <div class="row">
    <div class="col xl1 s12">
      <p>Deskripsi</p>
    </div>
    <div class="col xl11 s12">
      <p>Sukulen panda memiliki bulu halus yang menutupi seluruh permukaan daunnya. Selain itu, di sisi pingir daunnya ada bercak-bercak cokelat yang menyebabkan jenis sukulen ini dinamai panda.<br><br>Karena bentuknya yang kecil dan lembut (selain penampilannya yang menggemaskan), kaktus ini aman diletakkan di tempat yang ramai dengan orang dan anak-anak.</p>
    </div>
  </div>
  </div>
</div>
<!-- End Caption -->

<!-- Catalog -->
@include('base.catalogsales')
<!-- End Catalog -->

<!-- About -->
@include('base.footer')
<!-- End About -->
@endsection
