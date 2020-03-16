@extends('base.bootstrap')

@section('title', 'Hai Admin! | Annas Florist')

@section('content')
<head>
  <link rel="stylesheet" href="{{ asset('FEAdmin/assets/libs/css/style.css') }}">
</head>

<!-- main wrapper -->

<div class="dashboard-main-wrapper">

    <!-- Navbar -->
    @include('FEAdmin.base.navbar')
    <!-- End Navbar -->

    <!-- Left Sidebar -->
    @include('FEAdmin.base.leftsidebar')
    <!-- End Left Sidebar -->

    <!-- wrapper  -->
    <!-- ============================================================== -->
    <div class="dashboard-wrapper">
        <div class="dashboard-ecommerce">
            <div class="container-fluid dashboard-content ">
              @yield('contentadmin')
            </div>
        </div>

        <!-- footer -->
        @include('FEAdmin.base.footer')
        <!-- end footer -->
    </div>
    <!-- ============================================================== -->
    <!-- end wrapper  -->
    <!-- ============================================================== -->
</div>
<!-- ============================================================== -->
<!-- end main wrapper  -->
<!-- ============================================================== -->


@endsection
