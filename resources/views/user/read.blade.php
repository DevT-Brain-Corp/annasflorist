@extends('user.base')

@section('title', 'Profile Anda | Annas Florist')

@section('head')
  <link rel="stylesheet" href="{{ asset('css/user/read.css') }}">
  <script src="{{ asset('js/user/read.js') }}"></script>
@endsection

@section('user')
<div class="container row content">
<!-- biodata -->
  <div class="col s12 m12 l7 xl7 biodata">
    <p>biodata</p>
    <div class="row">
      <div class="input-field col s12">
        <input id="Nama" type="text" class="validate" value="Aditya Saktyawan Widhiantara" disabled>
        <label for="Nama">Nama</label>
      </div>
    </div>

    <div class="row">
      <div class="input-field col s12">
        <input id="NomorTelepon" type="text" class="validate" value="081235916971" disabled>
        <label for="NomorTelepon">Nomor Telepon</label>
      </div>
    </div>

    <div class="row">
      <div class="input-field col s12">
        <input id="Email" type="email" class="validate" value="adithwidhiantara@ymail.com" disabled>
        <label for="Email">Email</label>
      </div>
    </div>

    <div class="row">
      <div class="col s12">
        <div class="right">
          <a class="waves-effect waves-light btn"><i class="material-icons right">edit</i>Edit</a>
        </div>
      </div>
    </div>
  </div>
<!-- end biodata -->

<!-- riwayat pembelian -->
  <div class="col s12 m12 l4 offset-l1 xl4 offset-xl1 riwayatpembelian">
    <p>riwayat pembelian</p>
    <!-- apabila belum ada pesanan -->
    {{--@include('user.riwayatpembelian.null')--}}
    <!-- end apabila belum ada pesanan -->

    <!-- apabila ada pesanan -->
    @include('user.riwayatpembelian.notnull')
    <!-- end apabila ada pesanan -->
  </div>
<!-- end riwayat pembelian -->
</div>
@endsection
