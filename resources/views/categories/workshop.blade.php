@extends('base.materialize')

@section('title', 'Workshop | Annas Florist')

@section('content')
<head>
  <link rel="stylesheet" href="{{ asset('css/categories/workshop.css') }}">
  <script src="{{ asset('js/categories/workshop.js') }}"></script>
</head>

<!-- Navbar -->
@include('base.navbarhomepage')
<!-- End Navbar -->

<!-- Text Workshop -->
<div class="workshoptextbg2">
  <div class="workshoptextbg">
    <div class="workshoptextbgg">
      <div class="container workshoptext">
        <div class="workshop">
          <h1>workshop</h1>
        </div>
        <div class="workshoptext1">
          <div class="workshoptext2 workshop">
            <p>Pengertian workshop adalah sebuah kegiatan atau acara yang dilakukan, di mana beberapa orang yang memiliki keahlian di bidang tertentu berkumpul untuk membahas masalah tertentu dan mengajari para peserta workshop. Pendek kata workshop adalah gabungan antara teori dan praktek</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- End Text Workshop -->

<!-- Foto catalog 6 -->
<div class="container fotocatalog6" id="fotocatalog6">
  <div class="row">
    <div class="col s12 xl4">
      <figure class="snip1477">
        <img src="{{ asset('img/workshop/1.jpg') }}" alt="">
        <div class="title">
          <div>
            <h2>Annas</h2>
            <h4>Florist</h4>
          </div>
        </div>
        <figcaption>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
        </figcaption>
        <a href="#"></a>
      </figure>
    </div>

    <div class="col s12 xl4">
      <figure class="snip1477">
        <img src="{{ asset('img/workshop/2.jpg') }}" alt="">
        <div class="title">
          <div>
            <h2>Annas</h2>
            <h4>Florist</h4>
          </div>
        </div>
        <figcaption>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
        </figcaption>
        <a href="#"></a>
      </figure>
    </div>

    <div class="col s12 xl4">
      <figure class="snip1477">
        <img src="{{ asset('img/workshop/3.jpg') }}" alt="">
        <div class="title">
          <div>
            <h2>Annas</h2>
            <h4>Florist</h4>
          </div>
        </div>
        <figcaption>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
        </figcaption>
        <a href="#"></a>
      </figure>
    </div>

    <div class="col s12 xl4">
      <figure class="snip1477">
        <img src="{{ asset('img/workshop/4.jpg') }}" alt="">
        <div class="title">
          <div>
            <h2>Annas</h2>
            <h4>Florist</h4>
          </div>
        </div>
        <figcaption>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
        </figcaption>
        <a href="#"></a>
      </figure>
    </div>

    <div class="col s12 xl4">
      <figure class="snip1477">
        <img src="{{ asset('img/workshop/5.jpg') }}" alt="">
        <div class="title">
          <div>
            <h2>Annas</h2>
            <h4>Florist</h4>
          </div>
        </div>
        <figcaption>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
        </figcaption>
        <a href="#"></a>
      </figure>
    </div>

    <div class="col s12 xl4">
      <figure class="snip1477">
        <img src="{{ asset('img/workshop/6.jpg') }}" alt="">
        <div class="title">
          <div>
            <h2>Annas</h2>
            <h4>Florist</h4>
          </div>
        </div>
        <figcaption>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
        </figcaption>
        <a href="#"></a>
      </figure>
    </div>
  </div>
</div>
<!-- End Foto catalog 6 -->

<!-- Dokumentasi Video -->
<div class="container dokumentasivideo">
  <div class="dokumentasivideo2">
    <h5>Video dokumentasi workshop di desa</h5>
  </div>
  <div class="video-container dokumentasivideo2">
    <iframe class="dokumentasivideo2" width="853" height="480" src="https://www.youtube.com/embed/_4pcdIfrif4" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
  </div>
</div>
<!-- End Dokumentasi Video -->

<!-- About -->
@include('base.footer')
<!-- End About -->
@endsection
