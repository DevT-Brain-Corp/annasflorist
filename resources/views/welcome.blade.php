@extends('base.materialize')
@section('title', 'Annas Florist')

@section('content')
    <head>
        <link rel="stylesheet" href="{{ url('css/master.css') }}">
    </head>

    <!-- Kotak 1 -->
    <div class="kotak1">

        <!-- Navbar -->
        <div class="navbar-fixed">
            <nav class="navnav">
                <div class="container">
                    <div class="nav-wrapper">
                        <a href="#top" class="brand-logo scroll"><img src="img/logo.png" alt="logo" width="156" height="auto"></a>
                        <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="fa fa-align-justify" aria-hidden="true"></i></a>
                        <ul id="nav-mobile" class="right hide-on-med-and-down fontrighteous">
                            <li>
                                <div class="center row">
                                    <div class="col s12" >
                                        <div class="row" id="topbarsearch">
                                            <div class="col s2 iconsearch">
                                                <i class="fa fa-search" aria-hidden="true"></i>
                                            </div>
                                            <div class="input-field col s10">
                                                <input id="search" type="text" class="validate">
                                                <label for="search">Cari sesuatu</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li><a href="#top" class="iconsearch scroll">Home</a></li>
                            <li><a href="#profil" class="iconsearch scroll">Profil</a></li>
                            <li><a href="#kategori" class="iconsearch scroll">Kategori</a></li>
                                @if (Auth::check())
                                    <li><a href="#" class="iconsearch">Notifikasi</a></li>
                                @endif
                                <li><a href="#" class="iconsearch"><i class="material-icons">shopping_cart</i></a></li>
                            @guest
                                <!-- <li><a href="#modal1" class="modal-trigger iconsearch"><i class="material-icons">person_pin</i></a></li> -->
                                <li><a class='dropdown-trigger iconsearch' href='#' data-target='datalogin'><i class="material-icons">person_pin</i></a></li>

                                <ul id='datalogin' class='dropdown-content'>
                                  <li><a href="#">Nama</a></li>
                                  <li class="divider" tabindex="-1"></li>
                                  <li><a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">logout</a></li>
                                </ul>
                            @else
                                {{--Ganti Dropdown Trigger--}}
                                <li>
                                    <!-- <a href="{{ route('logout') }}" class="iconsearch scroll" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                        <i class="material-icons">person_pin</i>
                                    </a> -->

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </li>
                            @endguest
                        </ul>
                    </div>
                </div>
            </nav>
        </div>

        <ul class="sidenav" id="mobile-demo">
            <li>
                <div class="center row">
                    <div class="col s12" >
                        <div class="row" id="topbarsearch">
                            <div class="col s2">
                                <i class="fa fa-search" aria-hidden="true"></i>
                            </div>
                            <div class="input-field col s10">
                                <input id="search" type="text" class="validate">
                                <label for="search">Search</label>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
            <li><a href="#">Home</a></li>
            <li><a href="#">Profil</a></li>
            <li><a href="#">Kategori</a></li>
            <li><a href="#modal1" class="modal-trigger">Member</a></li>
        </ul>
        @guest
        <div id="modal1" class="modal">
            <form class="modal-content" method="POST" action="{{ route('login') }}">
                @csrf
                <div class="row">
                    <div class="input-field col s6 offset-s3">
                        <input id="email" type="email" class="validate" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                        <label for="email">{{ __('Email') }}</label>
                    </div>
                </div>

                <div class="row">
                    <div class="input-field col s6 offset-s3">
                        <input id="password" type="password" class="validate" name="password" required autocomplete="current-password">
                        <label for="password">{{ __('Kata Sandi') }}</label>
                    </div>
                </div>

                <div class="row">
                    <div class="input-field col s6 offset-s3 center-align btnn">
                        <button class="btn waves-effect waves-light modal-close" type="submit" name="action">{{ __('Masuk') }}</button>
                        <a href="{{ route('password.request') }}"><p class="sandi">Lupa Kata Sandi?</p></a>
                        <p class="member">Belum jadi member? <a class="memberdaftar" href="{{ route('register') }}">{{ __('Daftar') }}</a></p>
                    </div>
                </div>

            </form>
        </div>
        @else
        {{--Content Dropdown Log out & Profile--}}
        @endguest

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
                    <h1 class="fontsaira annas">ANNAS<br>FLORIST</h1>
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

    <!-- Kotak 2 -->
    <div class="kotak2" id="kategori">
        <div class="row detectscreen">
            <div class="items col xl2 offset-xl1 l2 m6">
                <div class="card">
                    <div class="card-image waves-effect waves-block waves-light">
                        <img class="activator" src="{{asset('img/item/1sales.png')}}">
                    </div>
                    <div class="card-content">
                        <span class="card-title activator grey-text text-darken-4 fontredhat">Sales</span>
                    </div>
                    <div class="card-reveal">
                        <span class="card-title grey-text text-darken-4 fontredhat">Sales<i class="material-icons right">close</i></span>
                        <p>Klik <a class="scroll" href="#sales">disini</a> untuk ke Sales</p>
                    </div>
                </div>
            </div>

            <div class="items col xl2 l2 m6">
                <div class="card">
                    <div class="card-image waves-effect waves-block waves-light">
                        <img class="activator" src="{{asset('img/item/2souvenir.jpg')}}">
                    </div>
                    <div class="card-content">
                        <span class="card-title activator grey-text text-darken-4 fontredhat">Souvenir</span>
                    </div>
                    <div class="card-reveal">
                        <span class="card-title grey-text text-darken-4 fontredhat">Souvenir<i class="material-icons right">close</i></span>
                        <p>Klik <a class="scroll" href="#souvenir">disini</a> untuk ke Souvenir</p>
                    </div>
                </div>
            </div>

            <div class="items col xl2 l2 m6">
                <div class="card">
                    <div class="card-image waves-effect waves-block waves-light">
                        <img class="activator" src="{{asset('img/item/3workshop.png')}}">
                    </div>
                    <div class="card-content">
                        <span class="card-title activator grey-text text-darken-4 fontredhat">Workshop</span>
                    </div>
                    <div class="card-reveal">
                        <span class="card-title grey-text text-darken-4 fontredhat">Workshop<i class="material-icons right">close</i></span>
                        <p>Klik <a class="scroll" href="#workshop">disini</a> untuk ke Workshop</p>
                    </div>
                </div>
            </div>

            <div class="items col xl2 l2 m6">
                <div class="card">
                    <div class="card-image waves-effect waves-block waves-light">
                        <img class="activator" src="{{asset('img/item/4rental.png')}}">
                    </div>
                    <div class="card-content">
                        <span class="card-title activator grey-text text-darken-4 fontredhat">Rental</span>
                    </div>
                    <div class="card-reveal">
                        <span class="card-title grey-text text-darken-4 fontredhat">Rental<i class="material-icons right">close</i></span>
                        <p>Klik <a class="scroll" href="#rental">disini</a> untuk ke Rental</p>
                    </div>
                </div>
            </div>

            <div class="items col xl2 l2 m6">
                <div class="card">
                    <div class="card-image waves-effect waves-block waves-light">
                        <img class="activator" src="{{asset('img/item/5Dekorasi.jpg')}}">
                    </div>
                    <div class="card-content">
                        <span class="card-title activator grey-text text-darken-4 fontredhat">Dekorasi</span>
                    </div>
                    <div class="card-reveal">
                        <span class="card-title grey-text text-darken-4 fontredhat">Dekorasi<i class="material-icons right">close</i></span>
                        <p>Klik <a class="scroll" href="#dekorasi">disini</a> untuk ke Dekorasi</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Kotak 2 -->

    <!-- Sales -->
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
    <div class="container about">
        <div class="row">
            <div class="col s4 about1">
                <h5>Bantuan</h5>
                <a href="#"><p>Lupa Password</p></a>
                <a href="#"><p>Lupa Username</p></a>
                <a href="#"><p>Cara menjadi member</p></a>
                <a href="#"><p>Cara memesan kaktus</p></a>
                <a href="#"><p>Cara mengikuti Workshop</p></a>
            </div>

            <div class="col s4 about2">
                <h5>Ikuti Kami</h5>
                <a href="https://www.instagram.com/annas_florist/" target="_blank"><p><img align="middle" src="{{ asset('img/footer/1.png') }}" alt="instagram">Annas_Florist</p></a>
                <a href="https://api.whatsapp.com/send?phone=6289683792377&text=Halo%20Admin%20Bagaimana%20Cara%20Order%20Kaktusnya" target="_blank"><p><img align="middle" src="{{ asset('img/footer/2.png') }}" alt="whatsapp">089683792377</p></a>
                <a href="https://shopee.co.id/annaramadhaniati" target="_blank"><p><img align="middle" src="{{ asset('img/footer/3.png') }}" alt="shopee">annaramadhaniati</p></a>
                <a href="https://www.tokopedia.com/annasflorist?source=universe&st=product" target="_blank"><p><img align="middle" src="{{ asset('img/footer/4.png') }}" alt="annasflorist">annasflorist</p></a>
            </div>

            <div class="col s4 about3">
                <img src="{{ asset('img/logo3.png') }}" alt="Logo FLORIST transparent">
                <p>Jangan khawatir melihat kamar kos, kantor, cafe atau rumah anda kurang menarik. di Annas Florist kalian bisa memesan Kaktus sebagai pengisi ruangan kalian yang kosong agar tampak lebih indah dan sejuk.</p>
            </div>
        </div>

        <div class="row">
            <div class="col s12">
                <p class="footer">© CV. ANNAS FLORIST  - SPESIALIS KAKTUS JEMBER</p>
            </div>
        </div>
    </div>
    <!-- End About -->

    <script src="{{ asset('js/master.js') }}" type="text/javascript"></script>
@endsection
