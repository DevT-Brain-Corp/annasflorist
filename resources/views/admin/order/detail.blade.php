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
                                                            <div class="col-md-6 card bg-warning">
                                                                <p class="text-center">Sudah terbayar</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <p class="text-center">Rubah status</p>
                                                        <div class="row">
                                                            <div class="col-md-3 ">
                                                                <button class="button btn-success" type="submit">Tervalidasi</button>
                                                            </div>
                                                            <div class="col-md-3">
                                                                <button class="button btn-success" type="submit">Dikirim</button>
                                                            </div>
                                                            <div class="col-md-3">
                                                                <button class="button btn-success" type="submit">Selesai</button>
                                                            </div>
                                                            <div class="col-md-3">
                                                                <button class="button btn-danger" type="submit">Batalkan</button>
                                                            </div>

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
                                                <td>{{ $order->subtotal }}</td>
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
                                                <img class="col-12" src="{{ url('/storage/'. $kabeh->product->product_image) }}" alt="">
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
                                            <p class="font-weight-bold text-warning">BELUM ADA BUKTI UPLOAD</p>
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

