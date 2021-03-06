@extends('FEAdmin.base.homepage')

@section('title', 'Dashboard Admin | Annas Florist')

@section('contentadmin')
<head>
  <link rel="stylesheet" href="{{ asset('css/FEAdmin/dashboard.css') }}">
</head>

<!-- pageheader  -->
<div class="row">
    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
        <div class="page-header">
            <h2 class="pageheader-title">Hai! Aditya Saktyawan Widhiantara</h2>
            <div class="page-breadcrumb">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item active"><a href="#" class="breadcrumb-link">Dashboard</a></li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>
<!-- end pageheader  -->

<div class="ecommerce-widget">
    <div class="row">
        <!-- recent orders  -->
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="card">
                <h5 class="card-header">Pemesanan Terkini</h5>
                <div class="card-body p-0">
                    <div class="table-responsive">
                        <table class="table">
                            <thead class="bg-light">
                                <tr class="border-0">
                                    <th class="border-0">#</th>
                                    <th class="border-0">Jumlah Pesanan</th>
                                    <th class="border-0">Gambar Kaktus</th>
                                    <th class="border-0">Nama Kaktus</th>
                                    <th class="border-0">Gambar Pot</th>
                                    <th class="border-0">Deskripsi Pot</th>
                                    <th class="border-0">Total Harga</th>
                                    <th class="border-0">Waktu Pemesanan</th>
                                    <th class="border-0">Nama Pembeli</th>
                                    <th class="border-0">Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>3</td>
                                    <td>
                                      <div class="m-r-10"><img src="{{ asset('img/sales/sukulen panda.jpg') }}" alt="sukulen panda.jpg" class="rounded" width="45"></div>
                                    </td>
                                    <td><span style="text-transform: capitalize;">sukulen panda</span></td>
                                    <td>
                                      <div class="m-r-10"><img src="{{ asset('img/pot/biru2.png') }}" alt="biru.png" class="rounded" width="45"></div>
                                    </td>
                                    <td><span style="text-transform: capitalize;">biru motif lonjong</span></td>
                                    <td>Rp.200.000</td>
                                    <td>27-08-2018 01:22:12</td>
                                    <td><span style="text-transform: capitalize;">Patricia J. King</span></td>
                                    <td><span class="badge-dot badge-danger mr-1"></span><span style="text-transform: capitalize;">belum transfer</span></td>
                                </tr>

                                <tr>
                                    <td>2</td>
                                    <td>5</td>
                                    <td>
                                      <div class="m-r-10"><img src="{{ asset('img/sales/sukulen roseum.jpg') }}" alt="sukulen roseum.jpg" class="rounded" width="45"></div>
                                    </td>
                                    <td><span style="text-transform: capitalize;">sukulen roseum</span></td>
                                    <td>
                                      <div class="m-r-10"><img src="{{ asset('img/pot/hijau.png') }}" alt="hijau.png" class="rounded" width="45"></div>
                                    </td>
                                    <td><span style="text-transform: capitalize;">hijau motif gelas</span></td>
                                    <td>Rp.100.000</td>
                                    <td>24-08-2018 08:34:00</td>
                                    <td><span style="text-transform: capitalize;">verdy bangkit</span></td>
                                    <td><span class="badge-dot badge-warning mr-1"></span><span style="text-transform: capitalize;">sudah transfer</span></td>
                                </tr>

                                <tr>
                                    <td>3</td>
                                    <td>8</td>
                                    <td>
                                      <div class="m-r-10"><img src="{{ asset('img/sales/terarium.jpg') }}" alt="terarium.jpg" class="rounded" width="45"></div>
                                    </td>
                                    <td><span style="text-transform: capitalize;">terarium</span></td>
                                    <td>
                                      <div class="m-r-10"><img src="{{ asset('img/pot/hitam.png') }}" alt="hitam.png" class="rounded" width="45"></div>
                                    </td>
                                    <td><span style="text-transform: capitalize;">hitam motif kubus</span></td>
                                    <td>Rp.950.000</td>
                                    <td>20-08-2018 01:22:12</td>
                                    <td><span style="text-transform: capitalize;">kukuh tri w</span></td>
                                    <td><span class="badge-dot badge-success mr-1"></span><span style="text-transform: capitalize;">dikirim</span></td>
                                </tr>

                                <tr>
                                    <td>4</td>
                                    <td>1</td>
                                    <td>
                                      <div class="m-r-10"><img src="{{ asset('img/sales/terarium3.jpg') }}" alt="terarium3.jpg" class="rounded" width="45"></div>
                                    </td>
                                    <td><span style="text-transform: capitalize;">terarium</span></td>
                                    <td>
                                      <div class="m-r-10"><img src="{{ asset('img/pot/merah.png') }}" alt="merah.png" class="rounded" width="45"></div>
                                    </td>
                                    <td><span style="text-transform: capitalize;">merah muda motif bola</span></td>
                                    <td>Rp.40.000</td>
                                    <td>19-08-2018 01:22:12</td>
                                    <td><span style="text-transform: capitalize;">m. nuril huda</span></td>
                                    <td><span class="badge-dot badge-primary mr-1"></span><span style="text-transform: capitalize;">diterima</span></td>
                                </tr>
                                <tr>
                                    <td colspan="9"><a href="#" class="btn btn-outline-light float-right">View Details</a></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <!-- end recent orders  -->
    </div>

    <!-- Hasil Penjualan  -->
    <div class="row">
      <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
        <div class="card">
          <div class="card-header">
            <h5 class="mb-0">Hasil Seluruh Penjualan Pada Tahun 2020</h5>
          </div>
          <div class="card-body">
            <div class="ct-chart-product ct-golden-section"></div>
          </div>
        </div>
      </div>
    </div>
    <!-- end Hasil Penjualan  -->

    <div class="row">
      <!-- Hasil Penjualan Bulan Lalu -->
      <div class="col-xl-6 col-lg-12 col-md-12 col-sm-12 col-12">
        <div class="card">
          <div class="card-header">
            <h5 class="mb-0">Hasil Penjualan Pada Bulan Februari 2020</h5>
          </div>
          <div class="card-body">
            <div class="ct-chart-product ct-golden-section bulanlalu"></div>
          </div>
        </div>
      </div>
      <!-- End Hasil Penjualan Bulan Lalu -->

      <!-- Hasil Penjualan Bulan Sekarang -->
      <div class="col-xl-6 col-lg-12 col-md-12 col-sm-12 col-12">
        <div class="card">
          <div class="card-header">
            <h5 class="mb-0">Hasil Penjualan Pada Bulan Maret 2020</h5>
          </div>
          <div class="card-body">
            <div class="ct-chart-product ct-golden-section bulansekarang"></div>
          </div>
        </div>
      </div>
    </div>
    <!-- End Hasil Penjualan Bulan Sekarang -->

    <div class="row">
        <!-- keuntungan  -->
        <div class="col-xl-9 col-lg-9 col-md-12 col-sm-12 col-12">
            <div class="card border-3 border-top border-top-primary">
                <div class="card-body">
                    <h5 class="text-muted">Keuntungan</h5>
                    <div class="metric-value d-inline-block">
                        <h1 class="mb-1">Rp.6.000.000</h1>
                    </div>
                    <div class="metric-label d-inline-block float-right text-success font-weight-bold">
                        <span class="icon-circle-small icon-box-xs text-success bg-success-light"><i class="fa fa-fw fa-arrow-up"></i></span><span class="ml-1">5.86%</span>
                    </div>
                </div>
            </div>
        </div>
        <!-- end keuntungan  -->

        <!-- pendaftar baru  -->
        <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 col-12">
            <div class="card border-3 border-top border-top-primary">
                <div class="card-body">
                    <h5 class="text-muted">Pendaftar Baru</h5>
                    <div class="metric-value d-inline-block">
                        <h1 class="mb-1">70</h1>
                    </div>
                    <div class="metric-label d-inline-block float-right text-success font-weight-bold">
                        <span class="icon-circle-small icon-box-xs text-success bg-success-light"><i class="fa fa-fw fa-arrow-up"></i></span><span class="ml-1">10%</span>
                    </div>
                </div>
            </div>
        </div>
        <!-- end pendaftar baru  -->

        <!-- Pengunjung Website  -->
        <!-- ============================================================== -->
        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
            <div class="card border-3 border-top border-top-primary">
                <div class="card-body">
                    <h5 class="text-muted">Pengunjung Website</h5>
                    <div class="metric-value d-inline-block">
                        <h1 class="mb-1">100</h1>
                    </div>
                    <div class="metric-label d-inline-block float-right text-success font-weight-bold">
                        <span class="icon-circle-small icon-box-xs text-success bg-success-light"><i class="fa fa-fw fa-arrow-up"></i></span><span class="ml-1">5%</span>
                    </div>
                </div>
            </div>
        </div>
        <!-- end Pengunjung Website  -->

        <!-- Total Penjualan Bulan Ini  -->
        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
            <div class="card border-3 border-top border-top-primary">
                <div class="card-body">
                    <h5 class="text-muted">Total Penjualan Bulan Ini</h5>
                    <div class="metric-value d-inline-block">
                        <h1 class="mb-1">86</h1>
                    </div>
                    <div class="metric-label d-inline-block float-right text-danger font-weight-bold">
                        <span class="icon-circle-small icon-box-xs text-danger bg-danger-light bg-danger-light "><i class="fa fa-fw fa-arrow-down"></i></span><span class="ml-1">4%</span>
                    </div>
                </div>
            </div>
        </div>
        <!-- end Total Penjualan Bulan Ini  -->
    </div>
    <div class="row">
        <!-- Grafik Penjualan  -->
        <div class="col-xl-7 col-lg-6 col-md-6 col-sm-12 col-12">
            <div class="card">
                <h5 class="card-header">Grafik Penjualan</h5>
                <div class="card-body">
                    <div id="c3chart_category" style="height: 420px;"></div>
                </div>
            </div>
        </div>
        <!-- end Grafik Penjualan  -->

        <div class="col-xl-5 col-lg-6 col-md-6 col-sm-12 col-12">
            <!-- Sosial Media  -->
            <div class="card">
                <h5 class="card-header"> Sosial Media</h5>
                <div class="card-body p-0">
                    <ul class="social-sales list-group list-group-flush">
                        <li class="list-group-item social-sales-content"><img style="width: 40px; height: 40px; margin-right: 10px;" src="{{ asset('img/instagram.png') }}" alt="instagram"><a class="sosmed" href="https://www.instagram.com/annas_florist/" target="_blank"><span class="social-sales-name">Instagram</span></a>
                        </li>
                        <li class="list-group-item social-sales-content"><img style="width: 40px; height: 40px; margin-right: 10px;" src="{{ asset('img/shopee.png') }}" alt="shopee"><a class="sosmed" href="https://shopee.co.id/annaramadhaniati" target="_blank"><span class="social-sales-name">Shopee</span></a>
                        </li>
                        <li class="list-group-item social-sales-content"><img style="width: 40px; height: 40px; margin-right: 10px;" src="{{ asset('img/tokopedia.png') }}" alt="tokopedia"><a class="sosmed" href="https://www.tokopedia.com/annasflorist?source=universe&st=product" target="_blank"><span class="social-sales-name">Tokopedia</span></a>
                        </li>
                        <li class="list-group-item social-sales-content"><img style="width: 40px; height: 40px; margin-right: 10px;" src="{{ asset('img/whatsapp.png') }}" alt="whatsapp"><a class="sosmed" href="https://api.whatsapp.com/send?phone=6289683792377&text=Halo%20Admin%20Bagaimana%20Cara%20Order%20Kaktusnya" target="_blank"><span class="social-sales-name">Whatsapp</span></a>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- end Sosial Media  -->
        </div>
    </div>
</div>
@endsection

@section('javaScript')
  <script src="{{ asset('FEAdmin/assets/libs/js/dashboard-ecommerce.js') }}"></script>
  <script src="{{ asset('js/FEAdmin/dashboard.js') }}"></script>
@endsection
