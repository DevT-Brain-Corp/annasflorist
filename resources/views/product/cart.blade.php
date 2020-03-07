@extends('base.materialize')
@section('title', 'Keranjang | Annas Florist')

@section('content')
<head>
  <link rel="stylesheet" href="{{ asset('css/cart.css') }}">
  <script type="text/javascript" src="{{ asset('js/cart.js') }}"></script>
</head>

<!-- Navbar -->
@include('base.navbar')
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
          <a href="#delete2" class="btnn modal-trigger"><i class="material-icons">close</i></a>
        </div>

        <!-- Modal Delete -->
          <div id="delete2" class="modal">
            <div class="modal-content">
              <h4>Anda yakin menghapus produk ini?</h4>
              <p>Sukulen Panda 2 | 2 item</p>
            </div>
            <div class="modal-footer">
              <a href="#!" class="modal-close waves-effect waves-green btn-flat">Iya</a>
              <a href="#!" class="modal-close waves-effect waves-green btn-flat tidak">Tidak</a>
            </div>
          </div>
        <!-- End Modal Delete -->

        <div class="col s2 cart2">
          <img class="responsive-img hoverable" src="{{ asset('img/sales/sukulen panda.jpg') }}" alt="">
        </div>
        <div class="col s2 valign-wrapper cart2 judul">
          <p>Sukulen Panda 2</p>
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
          <a href="#delete5" class="btnn modal-trigger"><i class="material-icons">close</i></a>
        </div>

        <!-- Modal Delete -->
          <div id="delete5" class="modal">
            <div class="modal-content">
              <h4>Anda yakin menghapus produk ini?</h4>
              <p>Sukulen Panda | 2 item</p>
            </div>
            <div class="modal-footer">
              <a href="#!" class="modal-close waves-effect waves-green btn-flat">Iya</a>
              <a href="#!" class="modal-close waves-effect waves-green btn-flat tidak">Tidak</a>
            </div>
          </div>
        <!-- End Modal Delete -->

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
