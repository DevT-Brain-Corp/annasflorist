@extends('base.materialize')
@section('title', 'Annas Florist')

@section('content')
<head>
  <link rel="stylesheet" href="{{ asset('css/base/master2.css') }}">
</head>



<!-- Kotak 1 -->
<div class="kotak1">
  <!-- Navbar -->
  @include('base.navbarhomepage')
  <!-- End Navbar -->

  <!-- Cactus -->
  <div class="cactus">
      <div class="row">
          <div class="col xl6 m12 s12 center-align">
              <div class="kotakdalamkaktus">
                  <img src="{{ asset('img/cactus.png') }}" alt="cactus">
              </div>
          </div>
          <div class="annasspesialis col xl5 m12 s12 center-align">
              <img class="responsive-img" src="{{ asset('img/logo4.png') }}" alt="logo annas Florist">
              <h5 class="fontsaira spesialis">Spesialis Kaktus</h5>
              <div class="shopnow">
                  <a href="#" class="fontmali">SHOP NOW
                      <i class="fa fa-arrow-down lingkaranshopnow" aria-hidden="true"></i>
                  </a>
              </div>
          </div>
      </div>
  </div>
  <!-- End Cactus -->

  <!-- Sosial Media -->
  <div class="sosmed">
      <div class="row">

          <div class="col s3 sosmed1">
              <div class="col s4"></div>

              <div class="col s2">
                  <a class="btnn" href="https://www.instagram.com/annas_florist/" target="_blank">
                      <img src="{{ asset('img/instagram.png') }}" alt="instagram">
                  </a>
              </div>

              <div class="col s2">
                  <a class="btnn" href="https://api.whatsapp.com/send?phone=6289683792377&text=Halo%20Admin%20Bagaimana%20Cara%20Order%20Kaktusnya" target="_blank">
                      <img src="{{ asset('img/whatsapp.png') }}" alt="whatsapp">
                  </a>
              </div>

              <div class="col s2">
                  <a class="btnn" href="https://www.tokopedia.com/annasflorist?source=universe&st=product" target="_blank">
                      <img src="{{ asset('img/tokopedia.png') }}" alt="tokopedia">
                  </a>
              </div>

              <div class="col s2">
                  <a class="btnn" href="https://shopee.co.id/annaramadhaniati" target="_blank">
                      <img src="{{ asset('img/shopee.png') }}" alt="shopee">
                  </a>
              </div>

          </div>

          <div class="col s4 sosmed2">
              <h5 class="fontrighteous">Kaktus termasuk dalam kelompok tanaman berduri dan memiliki buah yang unik.</h5>
          </div>

          <div class="col s2 sosmed3">
              <img src="{{asset('img/cactus2.png')}}" alt="">
          </div>

      </div>
  </div>
  <!-- End Sosial Media -->

</div>
<!-- End Kotak 1 -->

<!-- Sales -->
<div class="salesbg">
  <div class="container sales" id="sales">
    <div class="row">
        <div class="col s6">
            <h1 class="fontsaira salesword">Sales</h1>
        </div>
        <div class="col s6">
            <a href="#"><h1 class="fontsaira lihatsemua">Lihat Semua <i class="material-icons">arrow_forward</i></h1></a>
        </div>
    </div>
    <div class="row">
        <div class="col s3">
            <div class="card">
                <div class="card-image">
                    <img src="{{ asset('img/sales/sukulen panda.jpg') }}">
                    <a class="btn-floating halfway-fab waves-effect waves-light green"><i class="material-icons">add_shopping_cart</i></a>
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
                    <img src="{{ asset('img/sales/sukulen roseum.jpg') }}">
                    <a class="btn-floating halfway-fab waves-effect waves-light green"><i class="material-icons">add_shopping_cart</i></a>
                </div>
                <div class="card-content">
                    <h5>Sukulen Roseum</h5>
                    <div class="row">
                        <div class="col s6">
                            <p>Rp. 35.000</p>
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
                    <img src="{{ asset('img/sales/terarium.jpg') }}">
                    <a class="btn-floating halfway-fab waves-effect waves-light green"><i class="material-icons">add_shopping_cart</i></a>
                </div>
                <div class="card-content">
                    <h5>Terarium</h5>
                    <div class="row">
                        <div class="col s6">
                            <p>Rp. 80.000</p>
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
                    <img src="{{ asset('img/sales/terarium3.jpg') }}">
                    <a class="btn-floating halfway-fab waves-effect waves-light green"><i class="material-icons">add_shopping_cart</i></a>
                </div>
                <div class="card-content">
                    <h5>Terarium Hiasan</h5>
                    <div class="row">
                        <div class="col s6">
                            <p>Rp. 70.000</p>
                        </div>
                        <div class="col s6">
                            <p class="right-align">Jember</p>
                        </div>
                    </div>
                    <a class="center-align" href="#"><p class="btnn">Deskripsi</p></a>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<!-- End Sales -->

<!-- Souvenir -->
<div class="container sales" id="souvenir">
    <div class="row">
        <div class="col s6">
            <h1 class="fontsaira salesword">Souvenir</h1>
        </div>
        <div class="col s6">
            <a href="#"><h1 class="fontsaira lihatsemua">Lihat Semua <i class="material-icons">arrow_forward</i></h1></a>
        </div>
    </div>
    <div class="row">
        <div class="col s3">
            <div class="card">
                <div class="card-image">
                    <img src="{{ asset('img/souvenir/1.jpg') }}">
                    <a class="btn-floating halfway-fab waves-effect waves-light green"><i class="material-icons">add_shopping_cart</i></a>
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
                    <img src="{{ asset('img/souvenir/2.jpg') }}">
                    <a class="btn-floating halfway-fab waves-effect waves-light green"><i class="material-icons">add_shopping_cart</i></a>
                </div>
                <div class="card-content">
                    <h5>Sukulen Roseum</h5>
                    <div class="row">
                        <div class="col s6">
                            <p>Rp. 35.000</p>
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
                    <img src="{{ asset('img/souvenir/3.jpg') }}">
                    <a class="btn-floating halfway-fab waves-effect waves-light green"><i class="material-icons">add_shopping_cart</i></a>
                </div>
                <div class="card-content">
                    <h5>Terarium</h5>
                    <div class="row">
                        <div class="col s6">
                            <p>Rp. 80.000</p>
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
                    <img src="{{ asset('img/souvenir/4.jpg') }}">
                    <a class="btn-floating halfway-fab waves-effect waves-light green"><i class="material-icons">add_shopping_cart</i></a>
                </div>
                <div class="card-content">
                    <h5>Terarium Hiasan</h5>
                    <div class="row">
                        <div class="col s6">
                            <p>Rp. 70.000</p>
                        </div>
                        <div class="col s6">
                            <p class="right-align">Jember</p>
                        </div>
                    </div>
                    <a class="center-align" href="#"><p class="btnn">Deskripsi</p></a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Souvenir -->

<!-- Rental -->
<div class="container sales" id="rental">
    <div class="row">
        <div class="col s6">
            <h1 class="fontsaira salesword">Rental</h1>
        </div>
        <div class="col s6">
            <a href="#"><h1 class="fontsaira lihatsemua">Lihat Semua <i class="material-icons">arrow_forward</i></h1></a>
        </div>
    </div>
    <div class="row">
        <div class="col s3">
            <div class="card">
                <div class="card-image">
                    <img src="{{ asset('img/rental/1.jpg') }}">
                    <a class="btn-floating halfway-fab waves-effect waves-light green"><i class="material-icons">add_shopping_cart</i></a>
                </div>
                <div class="card-content">
                    <h5>Sukulen Roseum</h5>
                    <div class="row">
                        <div class="col s6">
                            <p>Rp. 35.000</p>
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
                    <img src="{{ asset('img/rental/2.jpg') }}">
                    <a class="btn-floating halfway-fab waves-effect waves-light green"><i class="material-icons">add_shopping_cart</i></a>
                </div>
                <div class="card-content">
                    <h5>Sukulen Roseum</h5>
                    <div class="row">
                        <div class="col s6">
                            <p>Rp. 35.000</p>
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
                    <img src="{{ asset('img/rental/3.jpg') }}">
                    <a class="btn-floating halfway-fab waves-effect waves-light green"><i class="material-icons">add_shopping_cart</i></a>
                </div>
                <div class="card-content">
                    <h5>Sukulen Roseum</h5>
                    <div class="row">
                        <div class="col s6">
                            <p>Rp. 35.000</p>
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
                    <img src="{{ asset('img/rental/4.jpg') }}">
                    <a class="btn-floating halfway-fab waves-effect waves-light green"><i class="material-icons">add_shopping_cart</i></a>
                </div>
                <div class="card-content">
                    <h5>Sukulen Roseum</h5>
                    <div class="row">
                        <div class="col s6">
                            <p>Rp. 35.000</p>
                        </div>
                        <div class="col s6">
                            <p class="right-align">Jember</p>
                        </div>
                    </div>
                    <a class="center-align" href="#"><p class="btnn">Deskripsi</p></a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Rental -->

<!-- Workshop -->
<div class="container workshop" id="workshop">
    <div class="row">
        <div class="col s6">
            <h1 class="fontsaira workshopword">Workshop</h1>
        </div>
        <div class="col s6">
            <a href="#"><h1 class="fontsaira lihatsemua">Lihat Semua <i class="material-icons">arrow_forward</i></h1></a>
        </div>
    </div>
    <div class="row">
        <div class="col s12">
            <div class="video-container">
                <iframe width="853" height="480" src="https://www.youtube.com/embed/_4pcdIfrif4" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
        </div>
    </div>
</div>
<!-- End Workshop -->

<!-- Dekorasi -->
<div class="container dekorasi" id="dekorasi">
    <div class="row">
        <div class="col s6">
            <h1 class="fontsaira dekorasiword">Dekorasi</h1>
        </div>
        <div class="col s6">
            <a href="#"><h1 class="fontsaira lihatsemua">Lihat Semua <i class="material-icons">arrow_forward</i></h1></a>
        </div>
    </div>
    <div class="row">
        <div class="col s12">
            <div class="slider">
                <ul class="slides">
                    <li>
                        <img src="{{ asset('img/dekorasi/1.jpg') }}"> <!-- random image -->
                        <div class="caption center-align">
                            <h3>This is our big Tagline!</h3>
                            <h5 class="light grey-text text-lighten-3">Annas Florist</h5>
                        </div>
                    </li>
                    <li>
                        <img src="{{ asset('img/dekorasi/2.jpg') }}"> <!-- random image -->
                        <div class="caption left-align">
                            <h3>Left Aligned Caption</h3>
                            <h5 class="light grey-text text-lighten-3">Annas Florist</h5>
                        </div>
                    </li>
                    <li>
                        <img src="{{ asset('img/dekorasi/1.jpg') }}"> <!-- random image -->
                        <div class="caption right-align">
                            <h3>Right Aligned Caption</h3>
                            <h5 class="light grey-text text-lighten-3">Annas Florist</h5>
                        </div>
                    </li>
                    <li>
                        <img src="{{ asset('img/dekorasi/2.jpg') }}"> <!-- random image -->
                        <div class="caption center-align">
                            <h3>This is our big Tagline!</h3>
                            <h5 class="light grey-text text-lighten-3">Annas Florist</h5>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col s12">
            <p class="rincian">Kaktus dalam ruangan memberi warna tersendiri. Walaupun berduri namun memiliki bunga yang indah. Keindahannya membuat orang kerap kali menjadikannya hiasan, souvenir atau pemanis dekorasi event indoor. Kami disini menyediakan Tips and Tricks untuk kalian ....</p>
            <a href="#"><p class="selengkapnya">Selengkapnya</p></a>
        </div>
    </div>
</div>
<!-- End Dekorasi -->

<!-- Profil -->
<div class="container profil" id="profil">
    <h1 class="fontsaira profilword">Profil CV. Annas Florist</h1>
    <div class="row">
        <div class="col s7 profilimg">
            <img src="{{ asset('img/profil.png') }}" alt="profil">
        </div>
        <div class="col s5">
            <input type="checkbox" class="read-more-state" id="post-1" />

            <p class="profiltext read-more-wrap">CV. ANNAS FLORIST (Anna’s Florist) suatu usaha yang bertempat di Perum Mastrip Blok W-4 RT/RW 03/21 Kel./Kec. Sumbersari – Jember 68121.<span class="read-more-target"> Berdiri sejak 25 Februari 2018 dengan fokus produk pada saat itu adalah kaktus. Didirikan oleh Anna Ramadhaniati, Sandra Putra Dwi Permana dan Shandiputra Budhi Perdana. Anna’s Florist memiliki kiblat style and trend di Jakarta.<br><br>Anna’s Florist terus mengembangkan jenis produk dan inovasi usahanya sehingga saat ini produk yang kami pasarkan meliputi Cactus, Indoor Plant dan Home Decor.</span></p>

            <label for="post-1" class="read-more-trigger"></label>
        </div>
    </div>
</div>
<!-- End Profil -->

<!-- Maps -->
<div class="container">
    <div id="mapid"></div>
</div>
<!-- End Maps -->

<!-- About -->
@include('base.footer')
<!-- End About -->

<script src="{{ asset('js/base/master2.js') }}"></script>
@endsection
