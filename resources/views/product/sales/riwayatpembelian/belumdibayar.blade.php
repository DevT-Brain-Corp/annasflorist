<!-- Stock Ada -->
<div class="">
  <div class="stockisi2">
    <div class="row">
      <div class="col s6 m6 l3 xl3">
        <img class="responsive-img" src="{{ asset('img/sales/sukulen panda.jpg') }}" alt="sukulen panda.jpg">
      </div>
      <div class="col s6 m3 l3 xl3">
        <div class="row texting2">
          <div class="col s12 a">
            <p>{{$produk->invoice}}</p>
          </div>
          <div class="col s12">
            <p>{{$produk->qty}} Produk</p>
          </div>
        </div>
      </div>
      <div class="col s6 m3 l3 xl3 texting">
        <div class="row texting2">
          <div class="col s12 a">
            <p>Harga Pengiriman</p>
          </div>
          <div class="col s12">
            <p>Rp.{{$blmBayar->hargaPkg}}</p>
          </div>
        </div>
      </div>
      <div class="col s6 m3 offset-m3 l3 xl3 texting">
        <div class="row texting2">
          <div class="col s12 a">
            <p>Total Harga</p>
          </div>
          <div class="col s12">
            <p>Rp.{{($blmBayar->subtotal)}}</p>
          </div>
        </div>
      </div>
    </div>

    <div class="divider"></div>
  </div>
</div>
<!-- End Stock Ada -->
