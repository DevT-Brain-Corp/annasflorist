@extends('base.materialize')

@section('title', 'Bayar')

@section('content')
<head>
  <link rel="stylesheet" href="{{ asset('css/bayar.css') }}">
  <script src="{{ asset('js/bayar.js') }}"></script>
</head>

<!-- Bayar -->
<section class="container row bayar">
  <div class="col s12 m12 l10 offset-l2 xl10 offset-xl2">
    <h2 class="total">Total Pembayaran</h2>
    <h2 class="harga">Rp.{{$c->subtotal}}</h2>
    <p class="ket">Silahkan melakukan pembayaran sesuai total pembayaran diatas</p>

    <div class="row">
      <div class="col s4 m3 l2 xl2">
        <img class="responsive-img" src="{{ asset($c->atm->logo_bank) }}" alt="mandiri">
      </div>
      <div class="col s12 m9 l10 xl10 banking">
        <p>{{$c->atm->nama_bank}}<br><br>No. Rekening : {{$c->atm->no_rekening}}<br>Nama Rekening : {{$c->atm->nama_pemilik}}</p>
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
<form method="POST" action="{{url('unggahBukti')}}" enctype="multipart/form-data"> 
@csrf 
<section class="container row uploadbukti">
  <div class="col s12 m12 l10 offset-l2 xl10 offset-xl2">
    <p class="text">Bukti Pembayaran</p>

    <div class="row">
      <div class="col s12 centerflex">
        <div class="row">
          <div class="col m5 l5 xl5">
            <div class="file-upload">
              <button class="file-upload-btn" type="button" onclick="$('.file-upload-input').trigger( 'click' )">Upload Bukti</button>
              <div class="image-upload-wrap">
                <input class="file-upload-input" type='file' onchange="readURL(this);" accept="image/*" name="foto" />
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
      </div>
    </div>


    <div class="datarekening">
      <div class="row">
        <div class="col s5 m4 l3 xl3">
          <p class="data1">Nama Pengirim Rekening:</p>
        </div>
        <div class="col s7 m8 l9 xl9">
          <input id="namapengirim" name="namaPengirim" type="text" class="validate">
        </div>
      </div>

      <div class="row">
        <div class="col s5 m4 l3 xl3">
          <p class="data1">Nomor Rekening:</p>
        </div>
        <div class="col s7 m8 l9 xl9">
          <input id="nomorpengirim" name="nomorPengirim" type="number" class="validate">
        </div>
      </div>

      <div class="row">
        <div class="col s5 m4 l3 xl3">
          <p class="data1">Transfer dari Bank:</p>
        </div>
        <div class="col s7 m8 l4 offset-l5 xl4 offset-xl5 right">
          <select class="icons" name="bank">
            <option value="" disabled selected>...</option>
            <option value="BANK Mandiri" data-icon="{{ asset('img/pengiriman/bank/icon/bri.png') }}">BANK Mandiri</option>
            <option value="BANK BNI" data-icon="{{ asset('img/pengiriman/bank/icon/bni.png') }}">BANK BNI</option>
            <option value="OVO" data-icon="{{ asset('img/pengiriman/bank/icon/ovo.png') }}">OVO</option>
            <option value="Link Aja" data-icon="{{ asset('img/pengiriman/bank/icon/linkaja.png') }}">Link Aja</option>
            <option value="Dana" data-icon="{{ asset('img/pengiriman/bank/icon/dana.png') }}">Dana</option>
            <option value="GoPay" data-icon="{{ asset('img/pengiriman/bank/icon/gopay.png') }}">GoPay</option>
          </select>
        </div>
      </div>
      <input type="hidden" name="orderID" value="{{$c->id}}">
      <div class="row">
        <div class="col s5 l3 xl3">
          <p class="data1">Total Pembayaran:</p>
        </div>
        <div class="col s7 l4 offset-l5 xl4 offset-xl5 right data3">
          <p class="data2">Rp. {{$c->subtotal}}</p>
        </div>
      </div>
    </div>

    <div class="row tombol">
      <div class="col s6">
        <div class="right">
          <button class="tombol2" type="submit">Kirim Bukti Sekarang</button>
          <!-- <a class="" href="#"></a> -->
        </div>
      </div>
      <div class="col s6">
        <a class="tombol2" href="#">Kirim Bukti Nanti</a>
      </div>
    </div>
  </div>
</section>
</form>
<!-- End Upload Bukti -->
@endsection
