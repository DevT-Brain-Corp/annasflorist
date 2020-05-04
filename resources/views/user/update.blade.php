@extends('user.base')

@section('title', 'Ubah Profile Anda | Annas Florist')

@section('head')
  <link rel="stylesheet" href="{{ asset('css/user/update.css') }}">
  <script src="{{ asset('js/user/update.js') }}"></script>
@endsection

@section('user')
<!-- form -->
<div class="container row updateform">
  <div class="col xl8 offset-xl2">
    <div class="row">
      <div class="col s4 offset-s4">
        <p>biodata</p>
      </div>
    </div>

    <form class="" action="#" method="post">
      <div class="row">
        <div class="col s8 offset-s2 input-field">
          <input id="email" type="email" class="validate" value="adithwidhiantara@gmail.com">
          <label for="email">Email</label>
          <span class="helper-text" data-error="Email kurang tepat!" data-success="Email Benar!"></span>
        </div>

        <div class="col s8 offset-s2 input-field">
          <input id="Nama" type="text" class="validate" value="Aditya Saktyawan Widhiantara">
          <label for="Nama">Nama</label>
        </div>

        <div class="col s8 offset-s2 input-field">
          <input id="NomorTelepon" type="text" class="validate" value="081235916971">
          <label for="NomorTelepon">Nomor Telepon</label>
        </div>

        <div class="col s8 offset-s2 file-field input-field">
          <div class="btn">
            <span>Upload Foto Profil</span>
            <input type="file">
          </div>
          <div class="file-path-wrapper">
            <input class="file-path validate" type="text">
          </div>
        </div>

        <div class="col s8 offset-s2 input-field">
          <input id="Password" type="password" class="validate">
          <label for="Password">Password</label>
        </div>

        <div class="col s8 offset-s2 input-field">
          <input id="UlangiPassword" type="password" class="validate">
          <label for="UlangiPassword">Ulangi Password</label>
        </div>

        <div class="col s12">
          <div class="right">
            <button class="btn waves-effect waves-light" type="submit" name="action">Selesai
              <i class="material-icons right">check</i>
            </button>
          </div>
        </div>
      </div>
    </form>
  </div>
</div>
<!-- end form -->
@endsection
