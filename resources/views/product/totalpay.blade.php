@extends('base.materialize')

@section('title', 'Bayar')

@section('content')
<head>
  <link rel="stylesheet" href="{{ asset('css/bayar.css') }}">
  <script src="{{ asset('js/bayar.js') }}"></script>
</head>

<!-- Bayar -->
<section class="container row bayar">
  <div class="col s10 offset-s2">
    <h2 class="total">Total Pembayaran</h2>
    <h2 class="harga">Rp.147.000</h2>
    <p class="ket">Silahkan melakukan pembayaran sesuai total pembayaran diatas</p>

    <div class="row">
      <div class="col s2">
        <img class="responsive-img" src="{{ asset('img/pengiriman/bank/mandiri.png') }}" alt="mandiri">
      </div>
      <div class="col s10 banking">
        <p>Bank Mandiri<br><br>No. Rekening : 0240357984<br>Nama Rekening : Shandiputra Budhi Perdana</p>
      </div>
    </div>

    <div class="row">
      <div class="col s12">
        <p class="ket2">1. Silahkan lakukan pembayaran sebelum tanggal 29 Februari<br>2. Dimohon upload bukti pembayaran dengan bukti yang valid agar mempermudah kami memproses validasi</p>
      </div>
    </div>
  </div>
</section>
<!-- End Bayar -->

<!-- Upload Bukti -->
<section class="container row uploadbukti">
  <div class="col s10 offset-s2">
    <p class="text">Bukti Pembayaran</p>

    <div class="row">
      <div class="col s5 offset-s3">
        <div class="file-upload">
          <button class="file-upload-btn" type="button" onclick="$('.file-upload-input').trigger( 'click' )">Upload Bukti</button>
          <div class="image-upload-wrap">
            <input class="file-upload-input" type='file' onchange="readURL(this);" accept="image/*" />
            <div class="drag-text">
              <i class="large material-icons">camera_alt</i>
            </div>
          </div>
          <div class="file-upload-content">
            <img class="file-upload-image" src="#" alt="your image" />
            <div class="image-title-wrap">
              <button type="button" onclick="removeUpload()" class="remove-image">Hapus <span class="image-title">Uploaded Image</span></button>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="datarekening">
      <div class="row">
        <div class="col s3">
          <p class="data1">Nama Pengirim Rekening:</p>
        </div>
        <div class="col s9">
          <input id="namapengirim" type="text" class="validate">
        </div>
      </div>

      <div class="row">
        <div class="col s3">
          <p class="data1">Nomor Rekening:</p>
        </div>
        <div class="col s9">
          <input id="nomorpengirim" type="number" class="validate">
        </div>
      </div>

      <div class="row">
        <div class="col s3">
          <p class="data1">Transfer dari Bank:</p>
        </div>
        <div class="col s4 offset-s5 right">
          <select class="icons">
            <option value="" disabled selected>...</option>
            <option value="" data-icon="{{ asset('img/pengiriman/bank/icon/bri.png') }}">BANK Mandiri</option>
            <option value="" data-icon="{{ asset('img/pengiriman/bank/icon/bni.png') }}">BANK BNI</option>
            <option value="" data-icon="{{ asset('img/pengiriman/bank/icon/ovo.png') }}">OVO</option>
            <option value="" data-icon="{{ asset('img/pengiriman/bank/icon/linkaja.png') }}">Link Aja</option>
            <option value="" data-icon="{{ asset('img/pengiriman/bank/icon/dana.png') }}">Dana</option>
            <option value="" data-icon="{{ asset('img/pengiriman/bank/icon/gopay.png') }}">GoPay</option>
          </select>
        </div>
      </div>

      <div class="row">
        <div class="col s3">
          <p class="data1">Total Pembayaran:</p>
        </div>
        <div class="col s4 offset-s5 right data3">
          <p class="data2">Rp. 147.000</p>
        </div>
      </div>
    </div>

    <div class="row tombol">
      <div class="col s6">
        <div class="right">
          <a class="tombol2" href="#">Kirim Bukti Sekarang</a>
        </div>
      </div>
      <div class="col s6">
        <a class="tombol2" href="#">Kirim Bukti Nanti</a>
      </div>
    </div>
  </div>
</section>
<!-- End Upload Bukti -->
@endsection
