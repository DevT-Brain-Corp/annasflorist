@extends('base.materialize')
@section('title', 'Keranjang | Annas Florist')

@section('content')
<head>
  <link rel="stylesheet" href="{{ asset('css/cart.css') }}">
  <script type="text/javascript" src="{{ asset('js/cart.js') }}"></script>
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

<!-- Spacing -->
<div class="spacing"></div>
<!-- End Spacing -->

<!-- Cart -->
<div class="cart-items">
  <div class="cart">
    <div class="cartt">
      <div class="row cart-row">
        <div class="col s1 cart2 height valign-wrapper hapusitem">
          <button class="btnn">
            <i class="material-icons">close</i>
          </button>
        </div>
        <div class="col s2 cart2">
          <img class="responsive-img hoverable" src="{{ asset('img/sales/sukulen panda.jpg') }}" alt="">
        </div>
        <div class="col s2 valign-wrapper cart2 judul">
          <p>Sukulen Panda</p>
        </div>
        <div class="col s2 cart3 harga">
          <p>Harga</p>
          <span class="cart-price">Rp.10000</span>
        </div>
        <div class="col s2 cart3 harga">
          <p>Jumlah Satuan</p>
          <input class="cart-quantity-input" type="number" value="2" max="4" min="0" />
        </div>
        <div class="col s3 cart3 harga">
          <p>Subharga Produk</p>
          <span class="cart-subtotal-price"></span>
        </div>
      </div>
      <div class="row cart-row">
        <div class="col s1 cart2 height valign-wrapper hapusitem">
          <button class="btnn">
            <i class="material-icons">close</i>
          </button>
        </div>
        <div class="col s2 cart2">
          <img class="responsive-img hoverable" src="{{ asset('img/sales/sukulen panda.jpg') }}" alt="">
        </div>
        <div class="col s2 valign-wrapper cart2 judul">
          <p>Sukulen Panda</p>
        </div>
        <div class="col s2 cart3 harga">
          <p>Harga</p>
          <span class="cart-price">Rp.40000</span>
        </div>
        <div class="col s2 cart3 harga">
          <p>Jumlah Satuan</p>
          <input class="cart-quantity-input" type="number" value="2" max="4" min="0" />
        </div>
        <div class="col s3 cart3 harga">
          <p>Subharga Produk</p>
          <span class="cart-subtotal-price"></span>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- End Cart -->

<!-- Total -->
<section class="total">
  <div class="totall">
    <div class="row">
    <div class="col s3 offset-s5 belisekarang2">
      <p>Total Subharga Produk</p>
    </div>
    <span class="col s2 cart-total-price"></span>
    <div class="col s2 belisekarang">
      <a href="#" role="button" type="submit">Beli Sekarang</a>
    </div>
  </div>
  </div>
</section>
<!-- End Total -->

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

@include('base.footer')
@endsection
