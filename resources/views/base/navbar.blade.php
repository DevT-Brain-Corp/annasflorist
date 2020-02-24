<head>
  <link rel="stylesheet" href="{{ asset('css/base/navbar.css') }}">
  <script src="{{ asset('js/base/navbar.js') }}"></script>
</head>

<!-- Navbar -->
<div class="navbar-fixed">
    <nav class="navnav">
        <div class="container">
            <div class="nav-wrapper">
                <a href="#top" class="brand-logo scroll"><img src="{{ asset('img/logo.png') }}" alt="logo" width="156" height="auto"></a>
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
                            <li><a href="#" class="iconsearch"><i class="material-icons">notifications</i></a></li>
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
<ul id='dropdown1' class='dropdown-content'>
  <li><a href="#!">one</a></li>
  <li><a href="#!">two</a></li>
  <li class="divider" tabindex="-1"></li>
  <li><a href="#!">three</a></li>
  <li><a href="#!"><i class="material-icons">view_module</i>four</a></li>
  <li><a href="#!"><i class="material-icons">cloud</i>five</a></li>
</ul>
<!-- End Dropdown -->

<!-- End Navbar -->
