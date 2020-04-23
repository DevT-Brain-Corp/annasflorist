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
                    <li><a href="#top" class="iconsearch scroll">Home</a></li>
                    <li><a href="#profil" class="iconsearch scroll">Profil</a></li>
                    <li><a class="dropdown-trigger iconsearch" href='#' data-target='dropdown1'>Kategori</a></li>
                    @if (Auth::check())
                      <li><a href="#" class="iconsearch">Notifikasi</a></li>
                    @endif
                    <li><a href="#" class="dropdown-trigger iconsearch" data-target='dropdowncart'><i class="material-icons">shopping_cart</i></a></li>
                    <li><a href="#" class="dropdown-trigger iconsearch" data-target='dropdown1in'><i class="material-icons">person_pin</i></a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- responsive -->
    <ul class="sidenav" id="mobile-demo">
      <li><a href="#top" class="iconsearch scroll">Home</a></li>
      <li><a href="#profil" class="iconsearch scroll">Profil</a></li>
      <li><a class="dropdown-trigger iconsearch" href='#' data-target='dropdownmobile'>Kategori</a></li>
      @if (Auth::check())
        <li><a href="#" class="iconsearch">Notifikasi</a></li>
      @endif
      <li><a href="#" class="iconsearch"><i class="material-icons">shopping_cart</i>Keranjang</a></li>
      @guest
        <li><a href="#modal1" class="modal-trigger iconsearch"><i class="material-icons">person_pin</i>Akun</a></li>
      @else
      <li><a href="#" class="dropdown-trigger iconsearch" data-target='dropdown1in'><i class="material-icons">person_pin</i>Akun2</a></li>
      @endguest
    </ul>
    <!-- end responsive -->

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

<!-- Dropdown Mobile -->
<ul id='dropdownmobile' class="dropdown-content">
  <li><a href="#">Sales</a></li>
  <li><a href="#">Souvenir</a></li>
  <li><a href="#">Workshop</a></li>
  <li><a href="#">Rental</a></li>
  <li><a href="#">Dekorasi</a></li>
</ul>
<!-- End Dropdown Mobile -->


<!-- Dropdown Akun -->
<ul id='dropdown1in' class='dropdown-content'>
  <li><a href="#!">Lihat Profil</a></li>
  <li><a href="#!">Ubah Profil</a></li>
  <li class="divider" tabindex="-1"></li>
  <li><a href="#!">Keluar</a></li>
</ul>
<!-- End Dropdown Akun -->

<!-- Dropdown Cart -->
<ul id='dropdowncart' class='dropdown-content'>
  <li><a href="#!">Sales</a></li>
</ul>
<!-- End Dropdown Cart -->
