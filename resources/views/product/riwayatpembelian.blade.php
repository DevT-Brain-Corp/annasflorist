@extends('base.materialize')

@section('title', 'Riwayat Pembelian')

@section('content')
<head>
  <link rel="stylesheet" href="{{ asset('css/riwayatpembelian.css') }}">
  <script src="{{ asset('js/riwayatpembelian.js') }}"></script>
</head>

<!-- Navbar -->
@include('base.navbar')
<!-- End Navbar -->

<!-- Tabs -->
<section class="container tabriwayat">
  <div class="row">
    <div class="col s12">
      <div class="row">
        <div class="col s10 offset-s1">
          <ul class="tabs">
            <li class="tab col s2"><a class="active" href="#belumdibayar">Belum Bayar</a></li>
            <li class="tab col s2"><a class="active" href="#sudahdibayar">Sudah Bayar</a></li>
            <li class="tab col s2"><a class="active" href="#tervalidasi">Tervalidasi</a></li>
            <li class="tab col s2"><a class="active" href="#dikirim">Dikirim</a></li>
            <li class="tab col s2"><a class="active" href="#selesai">Selesai</a></li>
            <li class="tab col s2"><a class="active" href="#dibatalkan">Dibatalkan</a></li>
          </ul>
        </div>
      </div>
    </div>

    <div id="belumdibayar" class="col s12">
      @include('product.riwayatpembelian.belumdibayar')
    </div>
    <div id="sudahdibayar" class="col s12">
      @include('product.riwayatpembelian.sudahdibayar')
    </div>
    <div id="tervalidasi" class="col s12">
      @include('product.riwayatpembelian.tervalidasi')
    </div>
    <div id="dikirim" class="col s12">
      @include('product.riwayatpembelian.dikirim')
    </div>
    <div id="selesai" class="col s12">
      @include('product.riwayatpembelian.selesai')
    </div>
    <div id="dibatalkan" class="col s12">
      @include('product.riwayatpembelian.dibatalkan')
    </div>
  </div>
</section>
<!-- End Tabs -->

<!-- Catalog -->
<div class="container">
  @include('base.catalogsales')
</div>
<!-- End Catalog -->

<!-- About -->
@include('base.footer')
<!-- End About -->

@endsection
