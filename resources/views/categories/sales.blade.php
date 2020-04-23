@extends('base.materialize')

@section('title', 'Sales | Annas Florist')

@section('content')
<head>
  <link rel="stylesheet" href="{{ asset('css/categories/sales.css') }}">
  <script src="{{ asset('js/categories/sales.js') }}"></script>
</head>

<!-- Navbar -->
@include('base.navbarhomepage')
<!-- End Navbar -->

<!-- Sales -->
<div class="container tulisansales">
  <h1>sales</h1>
</div>
<!-- End Sales -->

<!-- Card Sales -->
<div class="container cardsales">
  <div class="row">

    <!-- Looping Card -->
    <div class="col s12 m6 l4 xl3">
      <div class="card">
        <div class="card-image">
          <img class="responsive-img" src="{{ asset('img/sales/sukulen panda.jpg') }}">
        </div>
        <div class="card-content">
          <h5>Sukulen Panda</h5>
          <div class="row">
            <div class="col s6">
              <p>Rp. 40.000</p>
            </div>
            <div class="col s6">
              <p class="right-align">Jember</p>
            </div>
          </div>
          <a class="center-align" href="#"><p class="btnn">Deskripsi</p></a>
        </div>
      </div>
    </div>

    <div class="col s3">
      <div class="card">
        <div class="card-image">
          <img class="responsive-img" src="{{ asset('img/sales/sukulen panda.jpg') }}">
        </div>
        <div class="card-content">
          <h5>Sukulen Panda</h5>
          <div class="row">
            <div class="col s6">
              <p>Rp. 40.000</p>
            </div>
            <div class="col s6">
              <p class="right-align">Jember</p>
            </div>
          </div>
          <a class="center-align" href="#"><p class="btnn">Deskripsi</p></a>
        </div>
      </div>
    </div>

    <div class="col s3">
      <div class="card">
        <div class="card-image">
          <img class="responsive-img" src="{{ asset('img/sales/sukulen panda.jpg') }}">
        </div>
        <div class="card-content">
          <h5>Sukulen Panda</h5>
          <div class="row">
            <div class="col s6">
              <p>Rp. 40.000</p>
            </div>
            <div class="col s6">
              <p class="right-align">Jember</p>
            </div>
          </div>
          <a class="center-align" href="#"><p class="btnn">Deskripsi</p></a>
        </div>
      </div>
    </div>

    <div class="col s3">
      <div class="card">
        <div class="card-image">
          <img class="responsive-img" src="{{ asset('img/sales/sukulen panda.jpg') }}">
        </div>
        <div class="card-content">
          <h5>Sukulen Panda</h5>
          <div class="row">
            <div class="col s6">
              <p>Rp. 40.000</p>
            </div>
            <div class="col s6">
              <p class="right-align">Jember</p>
            </div>
          </div>
          <a class="center-align" href="#"><p class="btnn">Deskripsi</p></a>
        </div>
      </div>
    </div>

    <div class="col s3">
      <div class="card">
        <div class="card-image">
          <img class="responsive-img" src="{{ asset('img/sales/sukulen panda.jpg') }}">
        </div>
        <div class="card-content">
          <h5>Sukulen Panda</h5>
          <div class="row">
            <div class="col s6">
              <p>Rp. 40.000</p>
            </div>
            <div class="col s6">
              <p class="right-align">Jember</p>
            </div>
          </div>
          <a class="center-align" href="#"><p class="btnn">Deskripsi</p></a>
        </div>
      </div>
    </div>
    <!-- End Looping Card -->

  </div>
</div>
<!-- End Card Sales -->

<!-- Pagination -->
<div class="container sethalaman">
  <ul class="pagination">
    <li class="disabled"><a href="#!"><i class="material-icons">chevron_left</i></a></li>
    <li class="active"><a href="#!">1</a></li>
    <li class="waves-effect"><a href="#!">2</a></li>
    <li class="waves-effect"><a href="#!">3</a></li>
    <li class="waves-effect"><a href="#!">4</a></li>
    <li class="waves-effect"><a href="#!">5</a></li>
    <li class="waves-effect"><a href="#!"><i class="material-icons">chevron_right</i></a></li>
  </ul>
</div>
<!-- End Pagination -->

<!-- About -->
@include('base.footer')
<!-- End About -->

@endsection
