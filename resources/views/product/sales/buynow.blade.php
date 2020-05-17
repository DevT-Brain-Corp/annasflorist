@extends('base.materialize')

@section('title', 'Beli Sekarang')

@section('head')
<meta name="csrf-token" content="{{ csrf_token() }}">
  <link rel="stylesheet" href="{{ asset('css/sales/buynow.css') }}">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.7/css/select2.min.css" rel="stylesheet" />
  <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.7/js/select2.min.js"></script>
  {{-- <script type="text/javascript" src="{{ asset('js/sales/buynow.js') }}"></script> --}}
  <script type="text/javascript">
    $(document).ready(function() {
        $('select').select2();
    });
   </script>
  <link rel="stylesheet" href="{{ asset('css/sales/buynow.css') }}">
  <script type="text/javascript" src="{{ asset('js/sales/buynow.js') }}"></script>
@endsection

@section('content')
<!-- navbar -->
@include('base.navbarhomepage')
<!-- end navbar -->

<!-- card cart -->
<div class="container cardcart">
  <p class="title">pilih metode pembayaran</p>
  <p class="title2">anda mempunyai <span id="showcart"></span> barang untuk dibayar</p>
  <!-- detail -->
  <div class="row">
    <div id="detail" class="col s12">
      {{-- LOOp --}}
      <?php $totalPrice=0 ?>
      <?php $totalQty=0 ?>
      @foreach ($cart as $index => $cart)
        <div id="row" class="row">
        <div class="col s6 m2 l2 xl2">
          <img class="responsive-img hoverable" src="{{ asset('storage') }}/{{ $cart->product->product_image }}" alt="">
        </div>
        <div class="col s6 m4 l4 xl4 word1">
            <p>{{ $cart->product->product_name }}<br><span>{{ $cart->product->product_description }}</span>
        </div>
        <div class="col s6 m3 l3 xl3 word2">
            <p><span>{{$cart->qty}}</span>Pcs</p>
        </div>
        <div class="col s6 m3 l3 xl3 word3">
        <?php $totalQty+= $cart->qty ?>
        <?php $totalPrice+= $cart->qty * ($cart->product->product_price)  ?>
          <p>Rp.{{$cart->qty * ($cart->product->product_price)}}</p>
        </div>
      </div>
      @endforeach
    </div>
  </div>
  <!-- detail -->

  <!-- price -->
  <div class="row">
    <div class="col s8 offset-s4 m6 offset-m6 l4 offset-l8 xl4 offset-xl8 price">
      <div class="row">
        <div class="col xl6">
          <p>Order Total</p>
        <p><span id="showcart2">{{$totalQty}}</span> Barang</p>
        </div>
        <div class="col xl6">
          <p>Rp.{{$totalPrice}}</p>
      <div id="row" class="row">
        <div class="col s6 m2 l2 xl2">
          <img class="responsive-img hoverable" src="{{ asset('img/rental/4.png') }}" alt="">
        </div>
        <div class="col s6 m4 l4 xl4 word1">
          <p>sukulen panda<br><span>popular house plants</span></p>
        </div>
        <div class="col s6 m3 l3 xl3 word2">
          <p><span>3</span>Pcs</p>
        </div>
        <div class="col s6 m3 l3 xl3 word3">
          <p>Rp.60000</p>
        </div>
      </div>

      <div id="row" class="row">
        <div class="col s6 m2 l2 xl2">
          <img class="responsive-img hoverable" src="{{ asset('img/rental/3.jpg') }}" alt="">
        </div>
        <div class="col s6 m4 l4 xl4 word1">
          <p>sukulen panda<br><span>popular house plants</span></p>
        </div>
        <div class="col s6 m3 l3 xl3 word2">
          <p><span>3</span>Pcs</p>
        </div>
        <div class="col s6 m3 l3 xl3 word3">
          <p>Rp.60000</p>
        </div>
      </div>
    </div>
  </div>
  <!-- detail -->

  <!-- price -->
  <div class="row">
    <div class="col s8 offset-s4 m6 offset-m6 l4 offset-l8 xl4 offset-xl8 price">
      <div class="row">
        <div class="col xl6">
          <p>Order Total</p>
          <p><span id="showcart2"></span> Barang</p>
        </div>
        <div class="col xl6">
          <p>Rp.120000</p>
        </div>
      </div>
    </div>
  </div>
>>>>>>> 84d364961f23ae862110cd6ebec42dadc65cdf33
  <!-- price -->
</div>
<!-- end card cart -->

<!-- Alamat Anda -->
<div class="container alamat">
  <div class="row">
    <div class="col s3 m2 l2 xl2">
      <p class="tipe3">Kota</p>
    </div>
    <div class="col s9 m9 l7 xl5">
      <div class="row">
        <div class="input-field col s12">
            <select class="" id="kotaID">
                @if(!count($data['rajaongkir']['results']) )
                <option value="">Kosong</option>
                @else
                @for($i=0; $i < count($data['rajaongkir']['results']); $i++)
                <option value="{{$data['rajaongkir']['results'][$i]['city_id']}}" >{{$data['rajaongkir']['results'][$i]['city_name']}}</option>"
                @endfor
                @endif
            </select>
        </div>

      </div>
    </div>
  </div>
  <div class="row">
    <div class="col s3 m2 l2 xl2">
      <p class="tipe3">Nama Penerima</p>
    </div>
    <div class="col s9 m9 l7 xl5">
        <div class="row">
          <div class="input-field col s10">
            <input placeholder="Alamat Lengkap" name="namaPenerima" type="text" class="validate">
        <div class="input-field col s4">
            <input placeholder="Kecamatan" type="text" class="validate">
        </div>
        <div class="input-field col s4">
            <input placeholder="Kabupaten/Kota" type="text" class="validate">
        </div>
        <div class="input-field col s4">
            <input placeholder="Provinsi" type="text" class="validate">
        </div>
        <form class="col s12">
          <div class="row">
            <div class="input-field col s12">
              <textarea id="address" class="materialize-textarea" placeholder="Alamat Lengkap"></textarea>
            </div>
          </div>
        </div>
      </div>
  </div>
  <div class="row">
    <div class="col s3 m2 l2 xl2">
      <p class="tipe3">Alamat Lengkap</p>
    </div>
    <div class="col s9 m9 l7 xl5">
        <div class="row">
          <div class="input-field col s10">
            <input placeholder="Alamat Lengkap" name="alamat" type="text" class="validate">
          </div>
        </div>
      </div>
  </div>
  <div class="row">
    <div class="col s3 m2 l2 xl2">
      <p class="tipe3">Nomor Telepon</p>
    </div>
    <div class="col s9 m9 l7 xl5">
      <div class="row">
        <div class="input-field col s10">
          <input placeholder="Nomor Telepon" name="nohp" type="text" class="validate">
        </div>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col s3 m2 l2 xl2">
      <p class="tipe3">Total Pembayaran</p>
    </div>
    <div class="col s9 m9 l7 xl5">
      <div class="row">
        <div class="input-field col s10">
          <input type="text" class="validate">
          <input placeholder="Nomor Telepon" type="text" class="validate">
        </div>
      </div>
    </div>
  </div>

  <div class="row">
    <div class="col s3 m3 l2 xl2">
      <p class="tipe3">Pengiriman</p>
    </div>
    <div class="input-field col s9 m9 l7 xl5">
      <select class="icons" id="kurir">
      <select class="icons">
        <option value="" disabled selected>Pilih Pengiriman...</option>
        <option value="jne">JNE</option>
        <option value="tiki">TIKI</option>
        <option value="pos">POS INDONESIA</option>
      </select>
    </div>
  </div>
  <button id="cekOngkir">CEK</button>
  <script>
      $(document).ready(function(){
        var kurir = '';
        var kotaID = '';
        $("#kotaID").on('change', function(e){
            kotaID = e.target.value;
        })
        $("#kurir").on('change', function(e){
            kurir = e.target.value;
        })
        var asal = 160;

        var berat = 1000;
        $("#cekOngkir").on('click', function(){
            $.ajaxSetup({headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')}});
            $.ajax({
                url : '{{ url('/hitungTotal') }}',
                type: "POST",
                data: {
                    'asal' : asal,
                    'kotaID' : kotaID,
                    'kurir' : kurir,
                    'berat' : berat,
                },
                success: function(e){
                    console.log(e.rajaongkir);
                    // $.each(e.origin_details, function(){
                    //     console.log(this);
                    // });

                }
            })
        })
      })
  </script>
</div>

<!-- End Alamat Anda -->

<!-- Opsi Bank -->
<div class="container opsibank">
  <div class="row">
    <div class="col s2 xl2">
      <p class="tipe3">Opsi Bank</p>
    </div>

    <div class="col s10 xl8">
      <form action="#">
        <div class="row">
          <div class="col s4">
              <p>
                <label>
                  <input class="with-gap" name="group1" type="radio" />
                  <span class="gambar"><img class="responsive-img" src="{{ asset('img/pengiriman/bank/mandiri.png') }}" alt=""></span>
                </label>
              </p>
          </div>
          <div class="col s3">
            <p class="capt1">BANK Mandiri</p>
          </div>
          <div class="col s4">
            <p class="capt2">Transfer Manual</p>
          </div>
        </div>

        <div class="row">
          <div class="col s4">
              <p>
                <label>
                  <input class="with-gap" name="group1" type="radio" />
                  <span class="gambar"><img class="responsive-img" src="{{ asset('img/pengiriman/bank/bri.png') }}" alt=""></span>
                </label>
              </p>
          </div>
          <div class="col s3">
            <p class="capt1">BANK Mandiri</p>
          </div>
          <div class="col s4">
            <p class="capt2">Transfer Manual</p>
          </div>
        </div>

        <div class="row">
          <div class="col s4">
              <p>
                <label>
                  <input class="with-gap" name="group1" type="radio" />
                  <span class="gambar"><img class="responsive-img" src="{{ asset('img/pengiriman/bank/bni.png') }}" alt=""></span>
                </label>
              </p>
          </div>
          <div class="col s3">
            <p class="capt1">BANK BNI</p>
          </div>
          <div class="col s4">
            <p class="capt2">Transfer Manual</p>
          </div>
        </div>

        <div class="row">
          <div class="col s4">
              <p>
                <label>
                  <input class="with-gap" name="group1" type="radio" />
                  <span class="gambar"><img class="responsive-img" class="responsive-img" src="{{ asset('img/pengiriman/bank/ovo.png') }}" alt=""></span>
                </label>
              </p>
          </div>
          <div class="col s3">
            <p class="capt1">OVO</p>
          </div>
          <div class="col s4">
            <p class="capt2">Melalui Barcode</p>
          </div>
        </div>

        <div class="row">
          <div class="col s4">
              <p>
                <label>
                  <input class="with-gap" name="group1" type="radio" />
                  <span class="gambar"><img class="responsive-img" src="{{ asset('img/pengiriman/bank/linkaja.png') }}" alt=""></span>
                </label>
              </p>
          </div>
          <div class="col s3">
            <p class="capt1">Link Aja</p>
          </div>
          <div class="col s4">
            <p class="capt2">Melalui Barcode</p>
          </div>
        </div>

        <div class="row">
          <div class="col s4">
              <p>
                <label>
                  <input class="with-gap" name="group1" type="radio" />
                  <span class="gambar"><img class="responsive-img" src="{{ asset('img/pengiriman/bank/dana.PNG') }}" alt=""></span>
                </label>
              </p>
          </div>
          <div class="col s3">
            <p class="capt1">Dana</p>
          </div>
          <div class="col s4">
            <p class="capt2">Melalui Barcode</p>
          </div>
        </div>

        <div class="row">
          <div class="col s4">
              <p>
                <label>
                  <input class="with-gap" name="group1" type="radio" />
                  <span class="gambar"><img class="responsive-img" src="{{ asset('img/pengiriman/bank/gopay.PNG') }}" alt=""></span>
                </label>
              </p>
          </div>
          <div class="col s3">
            <p class="capt1">GoPay</p>
          </div>
          <div class="col s4">
            <p class="capt2">Melalui Barcode</p>
          </div>
        </div>
    </div>

  </div>
  <div class="row">
    <div class="col s12">
      <button class="btn waves-effect waves-light rightbutton" type="submit" name="button">Beli Sekarang</button>
      </form>
    </div>
  </div>
</div>
<!-- End Opsi Bank -->

<!-- footer -->
@include('base.footer')
<!-- end footer -->

@endsection
