@extends('base.materialize')

@section('title', 'Beli Sekarang | Annas Florist')

@section('content')
<head>
  <link rel="stylesheet" href="{{ asset('css/byatm.css') }}">
</head>

<!-- Deskripsi -->
<div class="container deskripsi">
  <div class="row">
    <div class="col s3 mt1">
      <img class="responsive-img z-depth-2 hoverable" src="{{ asset('img/sales/sukulen panda.jpg') }}" alt="">
    </div>
    <div class="col s3 valign-wrapper mt1 judul">
      <p>Sukulen Panda</p>
    </div>
    <div class="col s2 mt1 rincian">
      <p>Harga</p>
      <p>Rp.40.000</p>
    </div>
    <div class="col s2 mt1 rincian">
      <p>Jumlah Satuan</p>
      <p>3</p>
    </div>
    <div class="col s2 mt1 rincian">
      <p>Total</p>
      <p>Rp.120.000</p>
    </div>
  </div>
  <div class="row rincian">
    <div class="col s3">
      <p>Pengiriman</p>
    </div>
    <div class="col s2">
      <p>J&T Express</p>
    </div>
    <div class="col s1">
      <img class="responsive-img" src="{{ asset('img/pengiriman/j&t.PNG') }}" alt="">
    </div>
    <div class="col s4">
      <p>Rp.27.000</p>
    </div>
    <div class="col s2">
      <p>Rp.27.000</p>
    </div>
  </div>
  <div class="row rincian">
    <div class="col s2">
      <p>Keterangan</p>
    </div>
    <div class="input-field col s4">
      <textarea id="textarea1" class="materialize-textarea"></textarea>
    </div>
    <div class="col s3 offset-s1">
      <p>Total Pembayaran</p>
    </div>
    <div class="col s2">
      <p>Rp.147.000</p>
    </div>
  </div>
</div>
<!-- End Deskripsi -->

<!-- Alamat Pemesanan -->
<section class="container pemesanan">
  <div class="row">
    <div class="col s1">
      <img class="responsive-img" src="{{ asset('img/footer/pin.png') }}" alt="pinlocation">
    </div>
    <div class="col s11 valign-wrapper">
      <p>Alamat Pemesanan</p>
    </div>
  </div>

  <div class="row">
    <div class="input-field col s1">
      <img class="responsive-img" src="{{ asset('img/footer/user.png') }}" alt="user">
    </div>
    <div class="input-field col s3 nama">
      <p>Alvisi Aura Chandra</p>
      <p>Perempuan</p>
    </div>
    <div class="input-field col s6 textarea">
      <textarea disabled id="textarea1" class="materialize-textarea">Jl.Danau Toba gang SDIT nomer 47a kelurahan Tegalgede, KAB. JEMBER - SUMBER SARI, JAWA TIMUR, ID 68121</textarea>
      <label for="textarea1">Alamat</label>
    </div>
  </div>

  <div class="row">
    <div class="col s1">
      <img class="responsive-img" src="{{ asset('img/footer/coins.png') }}" alt="coins">
    </div>
    <div class="col s11 valign-wrapper">
      <p>Pembayaran</p>
    </div>
  </div>

  <div class="row">
    <div class="col s1 offset-s1 bankingimg">
      <img class="responsive-img" src="{{ asset('img/pengiriman/bank/mandiri.png') }}" alt="">
    </div>
    <div class="col s10 banking">
      <p>Bank Mandiri<br><br>No. Rekening : 0240357984<br>Nama Rekening : Shandiputra Budhi Perdana</p>
    </div>
  </div>

  <div class="row">
    <div class="col s8 cekulang1">
      <p>* Silahkan dicek ulang semua data yang telah anda inputkan untuk mempermudah kami dalam proses pengiriman</p>
    </div>
    <div class="col s3 offset-s1 cekulang2">
      <a class="waves-effect waves-light btn">Beli Sekarang</a>
    </div>
  </div>
</section>
<!-- End Alamat Pemesanan -->

@include('base.footer')
@endsection
