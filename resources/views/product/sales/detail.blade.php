@extends('base.materialize')

@section('title', 'Product | Annas Florist')

@section('content')
    <head>
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <link rel="stylesheet" href="{{ asset('css/product.css') }}">
        <script type="text/javascript" src="{{ asset('js/product.js') }}"></script>

        <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
        <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
        <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    </head>

    <!-- Navbar -->
    @include('base.navbar')
    <!-- End Navbar -->

    <!-- Deskripsi -->
    <div class="modal fade" id="modalCheckout" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
         aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Berhasil menambahkan ke keranjang</h5>
                </div>
                <div class="modal-body">
                    <p>Apakah anda ingin melanjutkan mencari barang ? </p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cari Barang</button>
                    <a href="{{url('/sales/cart')}}" class="btn btn-primary">Checkout</a>
                </div>
            </div>
        </div>
    </div>
    <div class="deskripsi">
        <div class="deskripsii">
            <div class="deskripsiii">
                <div class="row resp">
                    <div class="col s12 m6 l5 xl5 gambar">
                        <div class="slider">
                            <ul class="slides">
                                <li>
                                    <img src="{{ url('/storage/'. $product->product_image) }}" alt="">
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col s12 m6 l5 offset-l1 xl5 offset-xl1 caption">
                        <p class="caption1">{{$product->product_name}}<br>Rp. {{$product->product_price}}</p>
                        <input type="hidden" value="{{$product->id}}" id="productID">
                        <div class="caption2">
                            <div class="row">
                                <div class="col xl3 s6">
                                    <p>Kategori</p>
                                </div>
                                <div class="col xl6 s6">
                                    <p>{{$product->category->category_name}}</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col s3">
                                    <p>Stok</p>
                                </div>
                                <div class="col s6">
                                    <p>{{$product->product_stock}}</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col s3">
                                    <p>Warna</p>
                                </div>
                                <div class="col s9">
                                    <div class="row" id="foobar">

                                        @forelse($pots as $i=>$pot)
                                            @if($pot->pot_stock >=1)
                                                <div class="col s12 l6 xl4">
                                                    <label>
                                                        {{-- <input type="hidden" id="resID"> --}}
                                                        <input type="radio" name="myRadios"
                                                               class="colsX card-input-element d-none"
                                                               dt-id="{{$pot->id}}"
                                                               onclick="handleClick(this);" id="{{$pot->pot_stock}}"
                                                               value="{{$pot->id}}">
                                                        <div class="card tooltipped" id="{{ $pot->pot_color }}">
                                                            <span data-position="bottom">{{ $pot->pot_color }}</span>
                                                        </div>
                                                    </label>
                                                </div>
                                            @endif
                                        @empty
                                            <p>tidak ada pot yang diinputkan</p>

                                        @endforelse
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row caption2">
                            <div class="col s3 xl3">
                                <p style="margin-top: 0">Jumlah</p>
                            </div>
                            <div class="col s2 xl3">
                                <div class="inputnumber">
                                    <form>
                                        <input type="number" id="qty" name="jumlah" value="0" min="0">
                                    </form>
                                </div>
                            </div>
                            <div class="col s2 xl3">
                                <p style="margin-top: 0; color: #001E0F;"><span id="stokpot2"></span></p>
                            </div>
                        </div>
                        @if(!$status==null)
                            <div class="masukkankeranjang right-align">
                                <div class="beli">
                                    <a href="#">Beli Sekarang</a>
                                </div>
                                <div class="masukkan">
                                    <a id="btnKeranjang"><i class="large material-icons">shopping_cart</i>Masukkan
                                        Keranjang</a>
                                </div>
                            </div>
                        @else
                            <div class="masukkankeranjang right-align">
                                <div class="gagal">
                                    <a style="color: white;">Barang tidak bisa dibeli karna stok kosong!</a>
                                </div>
                            </div>
                        @endif

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Deskripsi -->




    <!-- Caption -->
    <div class="narasi">
        <div class="narasii">
            <div class="row">
                <div class="col xl1 s12">
                    <p>Deskripsi</p>
                </div>
                <div class="col xl11 s12">
                    <p>{{$product->product_description}}</p>
                </div>
            </div>
        </div>
    </div>
    <!-- End Caption -->

    <!-- Catalog -->
    <div class="sales">
        <div class="saless">
            <div class="row">
                <div class="col s6 offset-s6">
                    <a href="{{route('show.category', $product->category->category_slug)}}"><h1 class="lihatsemua">Lihat
                            Produk Lainnya<i class="material-icons">arrow_forward</i></h1></a>
                </div>
            </div>
        </div>
    </div>
    <!-- End Catalog -->
    <script>
        // Stok Pot
        function handleClick(myRadio) {
            document.getElementById("stokpot2").innerHTML = "Tersisa " + myRadio.id;
        }

        // End Stok Pot
        @foreach($pots as $datapot)
        @if($datapot->pot_stock>=1)

        $(document).ready(function () {
            $("#foobar #{{ $datapot->pot_color }}").tooltip({
                html: "<img src='/storage/{{ $datapot->pot_image }}'>"
            });
        });
        @endif
        @endforeach
        // tooltip
    </script>
    <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.4.1.min.js"></script>
    <script type="text/javascript">
        var colorID;
        $(".colsX").on('change', function (e) {
            colorID = e.target.value;
        });

        $("#btnKeranjang").on('click', function () {

            var qty = $("#qty").val();
            var productID = $("#productID").val();
            if ($("#qty").val() != 0 || !colorID) {
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });
                $.ajax({
                    type: 'POST',
                    url: "{{url('/addCart')}}",
                    data: {
                        "qty": qty,
                        "productID": productID,
                        "colorID": colorID,
                    },
                    success: function (data) {
                        if (data.msg == 'ok') {
                            $("#modalCheckout").modal('open');
                            // alert('berhasil');
                        }
                    }

                })
            }
        });
    </script>
    <!-- About -->
    @include('base.footer')
    <!-- End About -->
@endsection
