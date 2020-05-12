@extends('base.materialize')

@section('title', 'Beli Sekarang')

@section('head')
  <link rel="stylesheet" href="{{ asset('css/sales/buynow.css') }}">
  <script type="text/javascript" src="{{ asset('js/sales/buynow.js') }}"></script>
@endsection

@section('content')
<!-- navbar -->
@include('base.navbarhomepage')
<!-- end navbar -->

<!-- card cart -->
<div class="container cardcart">
  <p class="title">pilih metode pembayaran</p>
  <p class="title2">anda mempunyai <span id="showcart"></span> barang untuk dibayar</p>
  <!-- detail -->
  <div class="row">
    <div id="detail" class="col s12">
      <div id="row" class="row">
        <div class="col s6 m2 l2 xl2">
          <img class="responsive-img hoverable" src="{{ asset('img/rental/4.png') }}" alt="">
        </div>
        <div class="col s6 m4 l4 xl4 word1">
          <p>sukulen panda<br><span>popular house plants</span></p>
        </div>
        <div class="col s6 m3 l3 xl3 word2">
          <p><span>3</span>Pcs</p>
        </div>
        <div class="col s6 m3 l3 xl3 word3">
          <p>Rp.60000</p>
        </div>
      </div>

      <div id="row" class="row">
        <div class="col s6 m2 l2 xl2">
          <img class="responsive-img hoverable" src="{{ asset('img/rental/3.jpg') }}" alt="">
        </div>
        <div class="col s6 m4 l4 xl4 word1">
          <p>sukulen panda<br><span>popular house plants</span></p>
        </div>
        <div class="col s6 m3 l3 xl3 word2">
          <p><span>3</span>Pcs</p>
        </div>
        <div class="col s6 m3 l3 xl3 word3">
          <p>Rp.60000</p>
        </div>
      </div>
    </div>
  </div>
  <!-- detail -->

  <!-- price -->
  <div class="row">
    <div class="col s8 offset-s4 m6 offset-m6 l4 offset-l8 xl4 offset-xl8 price">
      <div class="row">
        <div class="col xl6">
          <p>Order Total</p>
          <p><span id="showcart2"></span> Barang</p>
        </div>
        <div class="col xl6">
          <p>Rp.120000</p>
        </div>
      </div>
    </div>
  </div>
  <!-- price -->
</div>
<!-- end card cart -->

<!-- Alamat Anda -->
<div class="container alamat">
  <div class="row">
    <div class="col s3 m2 l2 xl2">
      <p class="tipe3">Alamat</p>
    </div>
    <div class="col s9 m9 l7 xl5">
      <div class="row">
        <div class="input-field col s4">
            <input placeholder="Kecamatan" type="text" class="validate">
        </div>
        <div class="input-field col s4">
            <input placeholder="Kabupaten/Kota" type="text" class="validate">
        </div>
        <div class="input-field col s4">
            <input placeholder="Provinsi" type="text" class="validate">
        </div>
        <form class="col s12">
          <div class="row">
            <div class="input-field col s12">
              <textarea id="address" class="materialize-textarea" placeholder="Alamat Lengkap"></textarea>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>

  <div class="row">
    <div class="col s3 m2 l2 xl2">
      <p class="tipe3">Nomor Telepon</p>
    </div>
    <div class="col s9 m9 l7 xl5">
      <div class="row">
        <div class="input-field col s10">
          <input placeholder="Nomor Telepon" type="text" class="validate">
        </div>
      </div>
    </div>
  </div>

  <div class="row">
    <div class="col s3 m3 l2 xl2">
      <p class="tipe3">Pengiriman</p>
    </div>
    <div class="input-field col s9 m9 l7 xl5">
      <select class="icons">
        <option value="" disabled selected>Pilih Pengiriman...</option>
        <option value="" data-icon="{{ asset('img/pengiriman/jne.png') }}" class="left">JNE</option>
        <option value="" data-icon="{{ asset('img/pengiriman/j&t.PNG') }}" class="left">J&T</option>
        <option value="" data-icon="{{ asset('img/pengiriman/sicepat.PNG') }}" class="left">Sicepat</option>
      </select>
    </div>
  </div>
</div>
<!-- End Alamat Anda -->

<!-- Opsi Bank -->
<div class="container opsibank">
  <div class="row">
    <div class="col s2 xl2">
      <p class="tipe3">Opsi Bank</p>
    </div>

    <div class="col s10 xl8">
      <form action="#">
        <div class="row">
          <div class="col s4">
              <p>
                <label>
                  <input class="with-gap" name="group1" type="radio" />
                  <span class="gambar"><img class="responsive-img" src="{{ asset('img/pengiriman/bank/mandiri.png') }}" alt=""></span>
                </label>
              </p>
          </div>
          <div class="col s3">
            <p class="capt1">BANK Mandiri</p>
          </div>
          <div class="col s4">
            <p class="capt2">Transfer Manual</p>
          </div>
        </div>

        <div class="row">
          <div class="col s4">
              <p>
                <label>
                  <input class="with-gap" name="group1" type="radio" />
                  <span class="gambar"><img class="responsive-img" src="{{ asset('img/pengiriman/bank/bri.png') }}" alt=""></span>
                </label>
              </p>
          </div>
          <div class="col s3">
            <p class="capt1">BANK Mandiri</p>
          </div>
          <div class="col s4">
            <p class="capt2">Transfer Manual</p>
          </div>
        </div>

        <div class="row">
          <div class="col s4">
              <p>
                <label>
                  <input class="with-gap" name="group1" type="radio" />
                  <span class="gambar"><img class="responsive-img" src="{{ asset('img/pengiriman/bank/bni.png') }}" alt=""></span>
                </label>
              </p>
          </div>
          <div class="col s3">
            <p class="capt1">BANK BNI</p>
          </div>
          <div class="col s4">
            <p class="capt2">Transfer Manual</p>
          </div>
        </div>

        <div class="row">
          <div class="col s4">
              <p>
                <label>
                  <input class="with-gap" name="group1" type="radio" />
                  <span class="gambar"><img class="responsive-img" class="responsive-img" src="{{ asset('img/pengiriman/bank/ovo.png') }}" alt=""></span>
                </label>
              </p>
          </div>
          <div class="col s3">
            <p class="capt1">OVO</p>
          </div>
          <div class="col s4">
            <p class="capt2">Melalui Barcode</p>
          </div>
        </div>

        <div class="row">
          <div class="col s4">
              <p>
                <label>
                  <input class="with-gap" name="group1" type="radio" />
                  <span class="gambar"><img class="responsive-img" src="{{ asset('img/pengiriman/bank/linkaja.png') }}" alt=""></span>
                </label>
              </p>
          </div>
          <div class="col s3">
            <p class="capt1">Link Aja</p>
          </div>
          <div class="col s4">
            <p class="capt2">Melalui Barcode</p>
          </div>
        </div>

        <div class="row">
          <div class="col s4">
              <p>
                <label>
                  <input class="with-gap" name="group1" type="radio" />
                  <span class="gambar"><img class="responsive-img" src="{{ asset('img/pengiriman/bank/dana.PNG') }}" alt=""></span>
                </label>
              </p>
          </div>
          <div class="col s3">
            <p class="capt1">Dana</p>
          </div>
          <div class="col s4">
            <p class="capt2">Melalui Barcode</p>
          </div>
        </div>

        <div class="row">
          <div class="col s4">
              <p>
                <label>
                  <input class="with-gap" name="group1" type="radio" />
                  <span class="gambar"><img class="responsive-img" src="{{ asset('img/pengiriman/bank/gopay.PNG') }}" alt=""></span>
                </label>
              </p>
          </div>
          <div class="col s3">
            <p class="capt1">GoPay</p>
          </div>
          <div class="col s4">
            <p class="capt2">Melalui Barcode</p>
          </div>
        </div>
    </div>

  </div>
  <div class="row">
    <div class="col s12">
      <button class="btn waves-effect waves-light rightbutton" type="submit" name="button">Beli Sekarang</button>
      </form>
    </div>
  </div>
</div>
<!-- End Opsi Bank -->

<!-- footer -->
@include('base.footer')
<!-- end footer -->

@endsection
