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
    <div class="row">
      <div class="col s5 gambar">
        <div class="slider">
          <ul class="slides">
            <li>
                <img src="{{ url('/storage/'. $product->product_image) }}">
            </li>
          </ul>
        </div>
      </div>
      <div class="col s6 offset-s1 caption">
        <p class="caption1">{{$product->product_name}}<br>Rp. {{$product->product_price}}</p>
        <div class="caption2">
          <div class="row">
            <div class="col s3">
              <p>Kategori</p>
            </div>
            <div class="col s6">
              <p>{{$product->category->category_name}}</p>
            </div>
          </div>
          <div class="row">
            <div class="col s3">
              <p>Stok</p>
            </div>
            <div class="col s6">
              <p>{{$product->product_stock}}</p>
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
          <div class="col s3">
            <p style="margin-top: 0">Jumlah</p>
          </div>
          <div class="col s3">
            <div class="inputnumber">
              <form>
                <div class="value-button" id="decrease" onclick="decreaseValue()" value="Decrease Value">-</div>
                <input class="maxinput" type="number" id="number" value="0" max="" min="0" />
                <div class="value-button" id="increase" onclick="increaseValue()" value="Increase Value">+</div>
              </form>
            </div>
          </div>
          <div class="col s3">
            <p style="margin-top: 0; color: #001E0F;">Tersisa <span id="stokpot2"></span></p>
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
    <div class="col s1">
      <p>Deskripsi</p>
    </div>
    <div class="col s11">
      <p>Sukulen panda memiliki bulu halus yang menutupi seluruh permukaan daunnya. Selain itu, di sisi pingir daunnya ada bercak-bercak cokelat yang menyebabkan jenis sukulen ini dinamai panda.<br><br>Karena bentuknya yang kecil dan lembut (selain penampilannya yang menggemaskan), kaktus ini aman diletakkan di tempat yang ramai dengan orang dan anak-anak.</p>
    </div>
  </div>
  </div>
</div>
<!-- End Caption -->

<!-- Catalog -->
<div class="sales">
  <div class="saless">
    <div class="row">
      <div class="col s6 offset-s6">
        <a href="#"><h1 class="lihatsemua">Lihat Semua <i class="material-icons">arrow_forward</i></h1></a>
      </div>
    </div>
    <div class="row">
    <div class="col s3">
      <div class="card">
        <div class="card-image">
          <img src="{{ asset('img/sales/sukulen panda.jpg') }}">
        </div>
        <div class="card-content">
          <h5>Sukulen Panda</h5>
          <div class="row">
            <div class="col s6">
              <p>Rp. 40.000</p>
            </div>
            <div class="col s6">
              <p class="right-align">Jember</p>
            </div>
          </div>
          <a class="center-align" href="#"><p class="btnn">Deskripsi</p></a>
        </div>
      </div>
    </div>
    <div class="col s3">
      <div class="card">
        <div class="card-image">
          <img src="{{ asset('img/sales/sukulen roseum.jpg') }}">
        </div>
        <div class="card-content">
          <h5>Sukulen Roseum</h5>
          <div class="row">
            <div class="col s6">
              <p>Rp. 35.000</p>
            </div>
            <div class="col s6">
              <p class="right-align">Jember</p>
            </div>
          </div>
          <a class="center-align" href="#"><p class="btnn">Deskripsi</p></a>
        </div>
      </div>
    </div>
    <div class="col s3">
      <div class="card">
        <div class="card-image">
          <img src="{{ asset('img/sales/terarium.jpg') }}">
        </div>
        <div class="card-content">
          <h5>Terarium</h5>
          <div class="row">
            <div class="col s6">
              <p>Rp. 80.000</p>
            </div>
            <div class="col s6">
              <p class="right-align">Jember</p>
            </div>
          </div>
          <a class="center-align" href="#"><p class="btnn">Deskripsi</p></a>
        </div>
      </div>
    </div>
    <div class="col s3">
      <div class="card">
        <div class="card-image">
          <img src="{{ asset('img/sales/terarium3.jpg') }}">
        </div>
        <div class="card-content">
          <h5>Terarium Hiasan</h5>
          <div class="row">
            <div class="col s6">
              <p>Rp. 70.000</p>
            </div>
            <div class="col s6">
              <p class="right-align">Jember</p>
            </div>
          </div>
          <a class="center-align" href="#"><p class="btnn">Deskripsi</p></a>
        </div>
      </div>
    </div>
  </div>
  </div>
</div>
<!-- End Catalog -->

<!-- About -->
@include('base.footer')
<!-- End About -->
@endsection
