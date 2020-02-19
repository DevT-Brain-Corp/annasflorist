@extends('base.materialize')

@section('title', 'Product | Annas Florist')

@section('content')
<head>
  <link rel="stylesheet" href="{{ asset('css/product.css') }}">
  <script type="text/javascript" src="{{ asset('js/product.js') }}"></script>
</head>

<!-- Navbar -->
<div class="navbar-fixed">
  <nav class="navnav">
    <div class="container">
      <div class="nav-wrapper">
        <a href="#top" class="brand-logo scroll"><img src="img/logo.png" alt="logo" width="156" height="auto"></a>
        <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="fa fa-align-justify" aria-hidden="true"></i></a>
        <ul id="nav-mobile" class="right hide-on-med-and-down fontrighteous">
          <li>
            <div class="center row">
              <div class="col s12" >
                <div class="row" id="topbarsearch">
                  <div class="col s2 iconsearch">
                    <i class="fa fa-search" aria-hidden="true"></i>
                  </div>
                  <div class="input-field col s10">
                    <input id="search" type="text" class="validate">
                    <label for="search">Cari sesuatu</label>
                  </div>
                </div>
              </div>
            </div>
          </li>
          <li><a href="#" class="iconsearch scroll">Home</a></li>
          <li><a href="#" class="iconsearch scroll">Profil</a></li>
          <li><a href="#" class="iconsearch scroll">Kategori</a></li>
          <li><a href="#" class="iconsearch">Notifikasi</a></li>
          <li><a href="#" class="iconsearch"><i class="material-icons">shopping_cart</i></a></li>
          <li><a href="#modal1" class="modal-trigger iconsearch"><i class="material-icons">person_pin</i></a></li>
        </ul>
      </div>
    </div>
  </nav>
</div>

<ul class="sidenav" id="mobile-demo">
  <li>
   <div class="center row">
      <div class="col s12" >
        <div class="row" id="topbarsearch">
          <div class="col s2">
            <i class="fa fa-search" aria-hidden="true"></i>
          </div>
          <div class="input-field col s10">
            <input id="search" type="text" class="validate">
            <label for="search">Search</label>
          </div>
        </div>
      </div>
    </div>
  </li>
  <li><a href="#" class="iconsearch scroll">Home</a></li>
  <li><a href="#" class="iconsearch scroll">Profil</a></li>
  <li><a href="#" class="iconsearch scroll">Kategori</a></li>
  <li><a href="#" class="iconsearch">Notifikasi</a></li>
  <li><a href="#" class="iconsearch"><i class="material-icons">shopping_cart</i></a></li>
  <li><a href="#modal1" class="modal-trigger iconsearch"><i class="material-icons">person_pin</i></a></li>
</ul>

<!-- Modal -->
<div id="modal1" class="modal">
  <div class="modal-content">
    <h4>Modal Header</h4>
    <p>A bunch of text</p>
  </div>
  <div class="modal-footer">
    <a href="#!" class="modal-close waves-effect waves-green btn-flat">Agree</a>
  </div>
</div>
<!-- End Modal -->
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
              <img src="{{ asset('img/sales/sukulen panda.jpg') }}" alt="">
              <div class="caption center-align">
                <!-- <h3>This is our big Tagline!</h3> -->
                <!-- <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5> -->
              </div>
            </li>
            <li>
              <img src="{{ asset('img/pot/biru.jpg') }}" alt="">
              <div class="caption left-align">
                <!-- <h3>Left Aligned Caption</h3> -->
                <!-- <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5> -->
              </div>
            </li>
            <li>
              <img src="{{ asset('img/sales/sukulen panda.jpg') }}" alt="">
              <div class="caption right-align">
                <!-- <h3>Right Aligned Caption</h3> -->
                <!-- <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5> -->
              </div>
            </li>
            <li>
              <img src="{{ asset('img/sales/sukulen roseum.jpg') }}" alt="">
              <div class="caption center-align">
                <!-- <h3>This is our big Tagline!</h3> -->
                <!-- <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5> -->
              </div>
            </li>
          </ul>
        </div>
      </div>
      <div class="col s6 offset-s1 caption">
        <p class="caption1">Sukulen Panda<br>Rp. 40.000</p>
        <div class="caption2">
          <div class="row">
            <div class="col s3">
              <p>Kategori</p>
            </div>
            <div class="col s6">
              <p>Sales</p>
            </div>
          </div>
          <div class="row">
            <div class="col s3">
              <p>Jenis</p>
            </div>
            <div class="col s6">
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
                    <div class="card ">
                      Biru
                    </div>
                  </label>
                </div>
                <div class="col s12 l6 xl4">
                  <label>
                    <input type="radio" name="myRadios" class="card-input-element d-none" onclick="handleClick(this);" id="2">
                    <div class="card ">
                      Pink
                    </div>
                  </label>
                </div>
                <div class="col s12 l6 xl4">
                  <label>
                    <input type="radio" name="myRadios" class="card-input-element d-none" onclick="handleClick(this);" id="3">
                    <div class="card ">
                      Merah
                    </div>
                  </label>
                </div>
                <div class="col s12 l6 xl4">
                  <label>
                    <input type="radio" name="myRadios" class="card-input-element d-none" onclick="handleClick(this);" id="4">
                    <div class="card ">
                      Navy
                    </div>
                  </label>
                </div>
                <div class="col s12 l6 xl4">
                  <label>
                    <input type="radio" name="myRadios" class="card-input-element d-none" onclick="handleClick(this);" id="5">
                    <div class="card ">
                      Hijau
                    </div>
                  </label>
                </div>
                <div class="col s12 l6 xl4">
                  <label>
                    <input type="radio" name="myRadios" class="card-input-element d-none" onclick="handleClick(this);" id="6">
                    <div class="card ">
                      Kuning
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
