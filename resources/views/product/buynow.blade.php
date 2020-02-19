@extends('base.materialize')

@section('title', 'Beli Sekarang')

@section('content')
<head>
  <link rel="stylesheet" href="{{ asset('css/buynow.css') }}">
  <script type="text/javascript" src="{{ asset('js/buynow.js') }}"></script>
</head>

<!-- Deskripsi -->
<section class="deskripsi row">
  <div class="col offset-s2">
    <div class="row">
      <div class="col s5 mt1">
        <div class="valign-wrapper">
          <img class="responsive-img hoverable" src="{{ asset('img/sales/sukulen panda.jpg') }}" alt="">
        </div>
      </div>
      <div class="col s5 offset-s1 mt1">
        <p class="tipe1">Sukulen Panda</p>
        <p class="tipe1">Rp.40.000</p>
        <div class="row">
          <div class="col s3">
            <p class="tipe2">Kategori</p>
            <p class="tipe2">Jenis</p>
            <p class="tipe2">Warna</p>
            <p class="tipe2">Jumlah</p>
            <p class="tipe2">Harga</p>
          </div>
          <div class="col s6">
            <p class="tipe2">Sales</p>
            <p class="tipe2">Sukulen</p>
            <p class="tipe2">Biru</p>
            <p class="tipe2">3</p>
            <p class="tipe2">Rp.120.000</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- End Deskripsi -->

<!-- Alamat Anda -->
<div class="container alamat">
  <div class="row">
    <div class="col s2">
      <p class="tipe3">Alamat</p>
    </div>
    <div class="col s5">
      <div class="row">
        <div class="input-field col s4">
            <input disabled value="I am not editable" id="disabled" type="text" class="validate">
        </div>
        <div class="input-field col s4">
            <input disabled value="I am not editable" id="disabled" type="text" class="validate">
        </div>
        <div class="input-field col s4">
            <input disabled value="I am not editable" id="disabled" type="text" class="validate">
        </div>
        <form class="col s12">
          <div class="row">
            <div class="input-field col s12">
              <textarea disabled id="textarea1" class="materialize-textarea">Testing</textarea>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col s2">
      <p class="tipe3">Nomor Telepon</p>
    </div>
    <div class="col s5">
      <div class="row">
        <div class="input-field col s10">
          <input disabled value="I am not editable" id="disabled" type="text" class="validate">
        </div>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col s2">
      <p class="tipe3">Pengiriman</p>
    </div>
    <div class="input-field col s5">
      <select class="icons font">
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
    <div class="col s2">
      <p class="tipe3">Opsi Bank</p>
    </div>
    <div class="col s8">
      <form action="#">
        <div class="row">
          <div class="col s4">
              <p>
                <label>
                  <input class="with-gap" name="group1" type="radio" />
                  <span class="gambar"><img src="{{ asset('img/pengiriman/bank/mandiri.png') }}" alt=""></span>
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
                  <span class="gambar"><img src="{{ asset('img/pengiriman/bank/bri.png') }}" alt=""></span>
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
                  <span class="gambar"><img src="{{ asset('img/pengiriman/bank/bni.png') }}" alt=""></span>
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
                  <span class="gambar"><img src="{{ asset('img/pengiriman/bank/ovo.png') }}" alt=""></span>
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
                  <span class="gambar"><img src="{{ asset('img/pengiriman/bank/linkaja.png') }}" alt=""></span>
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
                  <span class="gambar"><img src="{{ asset('img/pengiriman/bank/dana.PNG') }}" alt=""></span>
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
                  <span class="gambar"><img src="{{ asset('img/pengiriman/bank/gopay.PNG') }}" alt=""></span>
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

@include('base.footer')
@endsection
