@extends('base.materialize')

@section('title', 'Sales | Annas Florist')

@section('content')
<head>
  <link rel="stylesheet" href="{{ asset('css/categories/sales.css') }}">
  <script src="{{ asset('js/categories/sales.js') }}"></script>
</head>

<!-- Navbar -->
@include('base.navbarhomepage')
<!-- End Navbar -->

<!-- Sales -->
<div class="container tulisansales">

</div>
<!-- End Sales -->

<!-- Card Sales -->
<div class="container cardsales">
  <div class="row">
    <!-- Looping Card -->
    @forelse($products as $product)
        <div class="col s12 m6 l4 xl3">
            <div class="card">
                <div class="card-image">
                    <img class="responsive-img" src="{{ url('/storage/'. $product->product_image) }}">
                </div>
                <div class="card-content">
                    <h5>{{$product->product_name}}</h5>
                    <div class="row">
                        <div class="col s6">
                            <p>Rp. {{$product->product_price}}</p>
                        </div>
                        <div class="col s6">
                            <p class="right-align">Jember</p>
                        </div>
                    </div>
                    <a class="center-align" href="{{route('show.product', $product->product_slug)}}"><p class="btnn">Deskripsi</p></a>
                </div>
            </div>
        </div>
    @empty
        <div class="col s12 m6 l4 xl3">
        </div>
    @endforelse
<!-- End Looping Card -->
  </div>
</div>
<!-- End Card Sales -->

<!-- Pagination -->
<div class="container sethalaman">
  <ul class="pagination">
      {{$products->links()}}
  </ul>
</div>
<!-- End Pagination -->

<!-- About -->
@include('base.footer')
<!-- End About -->

@endsection
