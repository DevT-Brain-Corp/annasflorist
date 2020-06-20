@extends('base.materialize')

@section('title', 'Riwayat Pembelian')

@section('content')
<head>
  <link rel="stylesheet" href="{{ asset('css/sales/riwayatpembelian.css') }}">
  <script src="{{ asset('js/sales/riwayatpembelian.js') }}"></script>
</head>

<!-- Navbar -->
@include('base.navbar')
<!-- End Navbar -->

<!-- Tabs -->
<section class="container tabriwayat">
  <div class="row">
    <div class="col s12">
      <div class="row">
        <div class="col s12 m12 l12 xl10 offset-xl1">
          <ul class="tabs">
            <li class="tab col s4 m4 l2 xl2"><a class="active" href="#belumdibayar">Belum Bayar</a></li>
            <li class="tab col s4 m4 l2 xl2"><a class="active" href="#sudahdibayar">Sudah Bayar</a></li>
            <li class="tab col s4 m4 l2 xl2"><a class="active" href="#tervalidasi">Tervalidasi</a></li>
            <li class="tab col s4 m4 l2 xl2"><a class="active" href="#dikirim">Dikirim</a></li>
            <li class="tab col s4 m4 l2 xl2"><a class="active" href="#selesai">Selesai</a></li>
            <li class="tab col s4 m4 l2 xl2"><a class="active" href="#dibatalkan">Dibatalkan</a></li>
          </ul>
        </div>
      </div>
    </div>

    <div id="belumdibayar" class="col s12">
      <div id="slimscrollpanel">
        @foreach($res['blmBayar'] as $blmBayar)
        @foreach($blmBayar->orderDetail as $index => $produk)
          @include('product.sales.riwayatpembelian.belumdibayar')
        @endforeach
        @endforeach
        </div>
    </div>
    <div id="sudahdibayar" class="col s12">
      <div id="slimscrollpanel2">
        @foreach($res['sdhBayar'] as $sdhBayar)
        @foreach($sdhBayar->orderDetail as $index => $produk)
        @include('product.sales.riwayatpembelian.sudahdibayar')
        @endforeach
        @endforeach
      </div>
    </div>
    <div id="tervalidasi" class="col s12">
      <div id="slimscrollpanel3">
        @include('product.sales.riwayatpembelian.tervalidasi')
      </div>
    </div>
    <div id="dikirim" class="col s12">
      <div id="slimscrollpanel4">
        @include('product.sales.riwayatpembelian.dikirim')
      </div>
    </div>
    <div id="selesai" class="col s12">
      <div id="slimscrollpanel5">
        @include('product.sales.riwayatpembelian.selesai')
      </div>
    </div>
    <div id="dibatalkan" class="col s12">
      <div id="slimscrollpanel6">
        @include('product.sales.riwayatpembelian.dibatalkan')
      </div>
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

  <script src="{{ asset('FEAdmin/assets/vendor/slimscroll/jquery.slimscroll.js') }}"></script>
@endsection
