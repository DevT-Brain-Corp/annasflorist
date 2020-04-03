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
        <div class="col s1 m1 l1 xl1 cart2 height valign-wrapper hapusitem">
          <a href="#delete2" class="btnn modal-trigger"><i class="material-icons">close</i></a>
        </div>
        <div class="col s5 offset-s1 m3 l3 xl3 height valign-wrapper cart2">
          <img class="responsive-img hoverable" src="{{ asset('img/sales/sukulen panda.jpg') }}" alt="">
        </div>
        <div class="col s5 m3 l3 xl3 valign-wrapper cart2 judul">
          <p>Sukulen Panda 2</p>
        </div>
        <div class="col s6 m3 l3 xl3 cart3 harga">
          <p>Harga</p>
          <span class="cart-price">Rp.10000</span>
        </div>
        <div class="col s5 m2 l2 xl2 cart3 harga">
          <p>Jumlah Satuan</p>
          <input class="cart-quantity-input" type="number" value="2" max="4" min="0" />
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
      </div>

      <div class="row cart-row">
        <div class="col s1 m1 l1 xl1 cart2 height valign-wrapper hapusitem">
          <a href="#delete5" class="btnn modal-trigger"><i class="material-icons">close</i></a>
        </div>
        <div class="col s5 offset-s1 m3 l3 xl3 height valign-wrapper cart2">
          <img class="responsive-img hoverable" src="{{ asset('img/sales/sukulen panda.jpg') }}" alt="">
        </div>
        <div class="col s5 m3 l3 xl3 valign-wrapper cart2 judul">
          <p>Sukulen Panda</p>
        </div>
        <div class="col s6 m3 l3 xl3 cart3 harga">
          <p>Harga</p>
          <span class="cart-price">Rp.40000</span>
        </div>
        <div class="col s5 m2 l2 xl2 cart3 harga">
          <p>Jumlah Satuan</p>
          <input class="cart-quantity-input" type="number" value="2" max="4" min="0" />
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
      </div>

    </div>
  </div>
</div>
<!-- End Cart -->

<!-- Total -->
<section class="total">
  <div class="totall">
    <div class="row">
      <div class="col m4 offset-m3 l3 offset-l4 xl3 offset-xl5 belisekarang2">
        <p>Total Subharga Produk</p>
      </div>

      <span class="col m2 l2 xl2 cart-total-price"></span>

      <div class="col m2 offset-m1 l2 offset-l1 xl2 belisekarang">
        <a href="#" role="button" type="submit">Beli Sekarang</a>
      </div>

    </div>
  </div>
</section>
<!-- End Total -->

<!-- Catalog -->
@include('base.catalogsales')
<!-- End Catalog -->

@include('base.footer')
@endsection
