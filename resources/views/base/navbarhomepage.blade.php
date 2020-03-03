<head>
  <link rel="stylesheet" href="{{ asset('css/base/navbar.css') }}">
  <script src="{{ asset('js/base/navbar.js') }}"></script>
</head>

<div class="navbar-fixed">
    <nav class="navnav">
        <div class="container">
            <div class="nav-wrapper">
                <a href="#top" class="brand-logo scroll" style="margin-top: 11px; font-family: 'Righteous';">Annas Florist</a>
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
                    <li><a class="dropdown-trigger iconsearch" href='#' data-target='dropdown1'>Kategori</a></li>
                        @if (Auth::check())
                            <li><a href="#" class="iconsearch">Notifikasi</a></li>
                        @endif
                        <li><a href="#" class="iconsearch"><i class="material-icons">shopping_cart</i></a></li>
                    @guest
                        <li><a href="#modal1" class="modal-trigger iconsearch"><i class="material-icons">person_pin</i></a></li>
                    @else
                        {{--Ganti Dropdown Trigger--}}
                        <li>
                            <a href="{{ route('logout') }}" class="iconsearch scroll"
                               onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                <i class="material-icons">person_pin</i>
                            </a>

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

<!-- Dropdown -->
<ul id='dropdown1' class="dropdown-content">
  <li><a class="scroll" href="#sales">Sales</a></li>
  <li><a class="scroll" href="#souvenir">Souvenir</a></li>
  <li><a class="scroll" href="#workshop">Workshop</a></li>
  <li><a class="scroll" href="#rental">Rental</a></li>
  <li><a class="scroll" href="#dekorasi">Dekorasi</a></li>
</ul>
<!-- End Dropdown -->

<!-- Modal -->
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
<!-- End Modal -->
