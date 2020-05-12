@extends('base.materialize')
@section('title', 'Keranjang | Annas Florist')

@section('head')
<link rel="stylesheet" href="{{ asset('css/sales/cart.css') }}">
<script src="{{ asset('js/sales/cart.js') }}"></script>
<meta name="csrf-token" content="{{ csrf_token() }}">
@endsection

@section('content')
<!-- Navbar -->
@include('base.navbarcart')
<!-- End Navbar -->

<!-- title -->
<div class="container title">
    <p>keranjang anda</p>
    <p>anda mempunyai <span id="showcart"></span> barang di keranjang</p>
</div>
<!-- end title -->

<!-- cart -->
<div class="container cart">
    <!-- detail -->
    <div class="row">
        <div id="detail" class="col s12">
            @foreach($cart as $cart)
                <div id="row" class="CartID{{ $cart->id }} row bgwhite z-depth-2">
                    <div class="col xl2"><img class="responsive-img hoverable"
                            src="{{ asset('storage') }}/{{ $cart->product->product_image }}"
                            alt=""></div>
                    <div class="col xl4 word1">
                        <p>{{ $cart->product->product_name }}<br><span>{{ $cart->product->product_description }}</span>
                        </p>
                    </div>
                    <div class="col xl3">
                        <div id="12" class="input-field"><input type="number" id="product1"
                                class="formnumbers formnumbers{{ $cart->id }}" name="ProductOne"
                                onChange="changeTotalFromCount(this);" onLoad="changeTotalFromCount(this);" min="1"
                                data-unitprice="{{ $cart->product->product_price }}" value="{{ $cart->qty }}" />
                            <label for="product1">Jumlah Barang</label></div>
                    </div>
                    <div class="col xl3">
                    <p id="pricing{{$cart->id}}">

                    </p>
                        <a href="#">
                            <p class="exp">lihat selengkapnya</p>
                        </a>
                        <a href="#">
                            <p onChange="changeTotalFromCount(this);" onLoad="changeTotalFromCount(this);"
                                item-id="{{ $cart->id }}" class="rmv">hapus</p>
                        </a>
                    </div>
                </div>
            @endforeach

        </div>
    </div>
    <!-- end detail -->

    <!-- totalprice -->
    <div class="row totalprice">
        <div class="col xl4 offset-xl8">
            <div class="row">
                <div class="col xl6">
                    <p>Order Total</p>
                    <p><span id="showcart2"></span> Barang</p>
                </div>
                <div class="col xl6">
                    <p>Rp. <span id="totalPriceDisplay"></span></p>
                </div>
            </div>
            <a href="#">Checkout</a>
        </div>
    </div>
    <!-- end totalprice -->
</div>
<!-- end cart -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
    $(".rmv").on('click', function () {
        // alert($(this).attr("item-id"));
        var itemID = $(this).attr("item-id");
        var p = $("#pricing"+itemID).text();
        var tot = $("#showcart").text();
        var jml=tot-1;
        var price = p.substr(4);
        var total = $("#totalPriceDisplay").text();

        // alert(total-price);
        $.ajaxSetup({
            headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
        });
        $.ajax({
            url : '{{ url('/removeCart') }}',
            type: "POST",
            data: {
                'itemID' : itemID,
            },
            success: function(){
                $("#totalPriceDisplay").text(total-price);
                $(".CartID"+itemID).remove();
                $("#showcart").text(jml);
            },
        });
    });

</script>
@endsection
