@extends('base.materialize')

@section('title', 'Beli Sekarang | Annas Florist')

@section('content')
<head>
  <link rel="stylesheet" href="{{ asset('css/byatm.css') }}">
</head>

<!-- Deskripsi -->
<div class="container deskripsi">
  @foreach($barang as $barang)
  <div class="row">
    <div class="col s12 m3 l3 xl3 mt1">
      <img class="responsive-img" src="{{ asset($barang->product->product_image) }}" alt="">
    </div>
    <div class="col s6 m2 l2 xl3 mt2 judul">
      <p>{{$barang->product->product_name}}
        ({{$barang->qty * 750}} gram)
      </p>
    </div>
    <div class="col s3 m2 l2 xl2 mt2 rincian">
      <p>Harga</p>
      <p>Rp.{{$barang->product->product_price}}</p>
    </div>
    <div class="col s3 m3 l3 xl2 mt2 rincian">
      <p class="jumlahsatuan">Jumlah Satuan</p>
      <p>{{$barang->qty}}</p>
    </div>
    <div class="col s3 offset-s3 m2 l2 xl2 mt2 rincian">
      <p>Total</p>
      <p>Rp.{{$barang->qty * $barang->product->product_price}}</p>
    </div>
  </div>
  @endforeach

  <div class="row rincian">
    <div class="col s4 m3 l3 xl3">
      <p>Pengiriman</p>
    </div>
    <div class="col s4 m2 l2 xl2">
      <p>{{$Order->pengirim}}</p>
    </div>
    <div class="col s3 offset-s1 m1 l1 xl1">
      <img style="margin-top: 0;" class="responsive-img" src="{{ asset('img/pengiriman/j&t.PNG') }}" alt="">
    </div>
    <div class="col s6 m4 l4 xl4">
      <!-- <p>Ke </p> -->
    </div>
    <div class="col s6 m2 l2 xl2">
      <p class="right-align">Rp.{{$Order->hargaPkg}} / Kg</p>
    </div>
  </div>

  <div class="row rincian">
    <div class="col s3 m2 l2 xl2">
      <p>Keterangan</p>
    </div>
    <div class="col s9 m4 l4 xl4 input-field">
      <textarea id="textarea1" class="materialize-textarea"></textarea>
    </div>
    <div class="col s6 m4 l4 xl3 offset-xl1">
      <p>Total Pembayaran</p>
    </div>
    <div class="col s6 m2 l2 xl2">
      <p class="right-align">Rp.{{$Order->subtotal}}</p>
    </div>
  </div>
</div>
<!-- End Deskripsi -->

<!-- Alamat Pemesanan -->
<section class="container pemesanan">
  <div class="row">
    <div class="col s2 offset-s3 m1 l1 xl1">
      <img class="responsive-img" src="{{ asset('img/footer/pin.png') }}" alt="pinlocation">
    </div>
    <div class="col s7 m11 l11 xl11 valign-wrapper">
      <p class="fontmax992">Alamat Pemesanan</p>
    </div>
  </div>

  <div class="row">
    <div class="input-field col s2 m1 l1 xl1">
      <img class="responsive-img" src="{{ asset('img/footer/user.png') }}" alt="user">
    </div>
    <div class="input-field col s10 m4 l3 xl3 nama">
      <p class="fontmax992">Alvisi Aura Chandra</p>
    </div>
    <div class="input-field col s11 offset-s1 m7 l7 xl6 textarea">
      <textarea disabled id="textarea1" class="materialize-textarea fontmax992">Jl.Danau Toba gang SDIT nomer 47a kelurahan Tegalgede, KAB. JEMBER - SUMBER SARI, JAWA TIMUR, ID 68121</textarea>
      <label for="textarea1">Alamat</label>
    </div>
  </div>

  <div class="row">
    <div class="col s2 offset-s3 m1 l1 xl1">
      <img class="responsive-img" src="{{ asset('img/footer/coins.png') }}" alt="coins">
    </div>
    <div class="col s7 m11 l1 xl11 valign-wrapper">
      <p class="fontmax992">Pembayaran</p>
    </div>
  </div>
  @if(!$Order->atm->qr_code)
    <div class="row">
    <div class="col s3 m1 offset-m1 l1 offset-l1 xl1 offset-xl1 bankingimg">
      <img class="responsive-img" src="{{ asset($Order->atm->logo_bank) }}" alt="">
    </div>
    <div class="col s9 m10 l10 xl10 banking">
      <p class="fontmax992">{{$Order->atm->nama_bank}}<br><br>No. Rekening : {{$Order->atm->no_rekening}}<br>Nama Rekening : {{$Order->atm->nama_pemilik}}</p>
    </div>
  </div>
  @else
  <div class="row">
    <div class="col s3 m1 offset-m1 l1 offset-l1 xl1 offset-xl1 bankingimg">
      <img class="responsive-img" src="{{ asset('img/pengiriman/bank/ovo.png') }}" alt="">
    </div>
    <div class="col s9 m10 l10 xl10 banking">
      <p class="fontmax992">{{$Order->atm->nama_bank}}<br><br>Nama Akun : {{$Order->atm->nama_pemilik}}</p>
      <div class="row">
        <div class="col s5 barcode">
          <img class="responsive-img" src="{{ asset('img/pengiriman/bank/barcode.PNG') }}" alt="gambarbarcode">
        </div>
      </div>
    </div>
  </div>
  @endif  
  

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

<!-- footer -->
@include('base.footer')
<!-- end footer -->

@endsection
