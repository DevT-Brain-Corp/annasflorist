@extends('layouts.admin-master')

@section('title')
    Add Order
@endsection

@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Order</h1>
        </div>

        <div class="section-body">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Order Detail</h4>
                    </div>
                    <div class="card-body">
                        <div class="container">
                            <div class="row">
                                <div class="col-12">
                                    <div class="pt-2">
                                        <div class="row">
                                            <div class="card col-md-2 bg-secondary">
                                                <p>Invoice</p>
                                                <p class="font-weight-bold">{{ $order->invoice }}</p>
                                            </div>
                                            <div class="col-md-4">

                                            </div>
                                            <div class="col-md-6">
                                                <div class="row">
                                                    <div class="col-12">
                                                        <div class="row">
                                                            <div class="col-md-4">
                                                                <p>Status saat ini :</p>
                                                            </div>
                                                            @if($order->pembayaran->count() == 0)
                                                                <div class="col-md-6 card bg-primary">
                                                                    <p class="text-center">Belum dibayar</p>
                                                                </div>
                                                            @else
                                                                @foreach($order->pembayaran as $s)
                                                                    @if($s->status == 'pending')
                                                                        <div class="col-md-6 card bg-warning">
                                                                            <p class="text-center">Sudah dibayar</p>
                                                                        </div>
                                                                    @elseif($s->status == 'tervalidasi')
                                                                        <div class="col-md-6 card bg-warning">
                                                                            <p class="text-center">Terfalidasi</p>
                                                                        </div>
                                                                    @elseif($s->status == 'dikirim')
                                                                        <div class="col-md-6 card bg-warning">
                                                                            <p class="text-center">Dikirim</p>
                                                                        </div>
                                                                    @elseif($s->status == 'selesai')
                                                                        <div class="col-md-6 card bg-warning">
                                                                            <p class="text-center">Selesai</p>
                                                                        </div>
                                                                    @elseif($s->status == 'batal')
                                                                        <div class="col-md-6 card bg-warning">
                                                                            <p class="text-center">Dibatalkan</p>
                                                                        </div>

                                                                    @endif
                                                                @endforeach
                                                            @endif

                                                        </div>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <p class="text-center">Rubah status :</p>
                                                        <div class="row">
                                                            @if(empty($pembayaran))
                                                                <p class="text-danger">Tidak dapat merubah status karna
                                                                    belum ada bukti yang dikirim</p>
                                                            @else
                                                                @if($pembayaran->status == 'pending')
                                                                    <div class="col-md-3 ">
                                                                        <form
                                                                            action="{{ route('order.update', $order->invoice) }}"
                                                                            method="post">
                                                                            @csrf
                                                                            @method('PATCH')
                                                                            <input type="hidden" name="status"
                                                                                   value="tervalidasi">
                                                                            <button class="button btn-success"
                                                                                    type="submit">
                                                                                Tervalidasi
                                                                            </button>
                                                                        </form>
                                                                    </div>
                                                                @elseif($pembayaran->status == 'tervalidasi' || $pembayaran->status == 'pending')
                                                                    <div class="col-md-3">
                                                                        <form
                                                                            action="{{ route('order.update', $order->invoice) }}"
                                                                            method="post">
                                                                            @csrf
                                                                            @method('PATCH')
                                                                            <input type="hidden" name="status"
                                                                                   value="dikirim">
                                                                            <button class="button btn-success"
                                                                                    type="submit">
                                                                                Dikirim
                                                                            </button>
                                                                        </form>
                                                                    </div>
                                                                @elseif($pembayaran->status == 'dikirim' || $pembayaran->status == 'tervalidasi' || $pembayaran->status == 'pending')
                                                                    <div class="col-md-3">
                                                                        <form
                                                                            action="{{ route('order.update', $order->invoice) }}"
                                                                            method="post">
                                                                            @csrf
                                                                            @method('PATCH')
                                                                            <input type="hidden" name="status"
                                                                                   value="selesai">
                                                                            <button class="button btn-success"
                                                                                    type="submit">
                                                                                selesai
                                                                            </button>
                                                                        </form>
                                                                    </div>

                                                                @endif
                                                                <div class="col-md-3">
                                                                    <form
                                                                        action="{{ route('order.update', $order->invoice) }}"
                                                                        method="post">
                                                                        @csrf
                                                                        @method('PATCH')
                                                                        <input type="hidden" name="status"
                                                                               value="batal">
                                                                        <button class="button btn-danger" type="submit">
                                                                            dibatalkan
                                                                        </button>
                                                                    </form>
                                                                </div>
                                                            @endif
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="pt-5 pl-5">
                                        <table class="table">
                                            <thead>
                                            <tr>
                                                <td>id</td>
                                                <td>invoice</td>
                                                <td>nama pemesan</td>
                                                <td>no. Telp</td>
                                                <td>alamat tujuan</td>
                                                <td>Total bayar</td>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr>
                                                <td>{{ $order->id }}</td>
                                                <td>{{ $order->invoice }}</td>
                                                <td>{{ $order->user->name }}</td>
                                                <td>{{ $order->customer_phone }}</td>
                                                <td>{{ $order->customer_address }}</td>
                                                <td>{{ $order->subtotal + $order->subtotal }}</td>
                                            </tr>
                                            </tbody>

                                        </table>

                                    </div>
                                </div>
                                @foreach($detail as $kabeh)
                                    <div class="col-12">
                                        <div class="card bg-primary">
                                            <div class="row">
                                                <div class="col-md-2">
                                                    <img class="col-12"
                                                         src="{{ url('/storage/'. $kabeh->product->product_image) }}"
                                                         alt="">
                                                </div>
                                                <div class="col-md-3 pt-3">
                                                    <p>{{ $kabeh->product->product_name }}</p>
                                                </div>
                                                <div class="col-md-2 pt-3">
                                                    <p>Banyak : {{ $kabeh->qty }}</p>
                                                </div>
                                                <div class="col-md-2 pt-3">
                                                    <p>Warna Pot : {{ $kabeh->pot->pot_color }}</p>
                                                </div>

                                                <div class="col-md-3 pt-3">
                                                    <p>Harga : {{ $kabeh->qty * $kabeh->product->product_price }}</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                                <div class="col-12">
                                    <div class="text-center">
                                        <div class="card">
                                            <p class="font-weight-bold">Bukti Pembayaran :</p>
                                            @if($order->pembayaran->count() == 0)
                                                <p class="font-weight-bold text-warning">BELUM ADA BUKTI UPLOAD</p>
                                            @else
                                                <div class="row">
                                                    <div class="col-md-3"></div>
                                                    <img class="col-md-4" src="/buktiBayar/{{ $pembayaran->file }}"
                                                         alt="">
                                                    <div class="col-md-3"></div>
                                                </div>
                                            @endif
                                        </div>
                                    </div>
                                </div>

                            </div>

                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

