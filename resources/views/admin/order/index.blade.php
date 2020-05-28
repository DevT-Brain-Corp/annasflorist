@extends('layouts.admin-master')

@section('title')
    Order
@endsection

@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Orders</h1>
            <div class="section-header-button">
                <a class="btn btn-primary" href={{ route('order.create') }}>Add Order</a>
            </div>
        </div>

        <div class="section-body">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>Orders Table</h4>
                        </div>
                        <div class="card-body p-0">
                            <div class="table-responsive">
                                @if(session()->get('success'))
                                    <div class="alert alert-success alert-dismissible show fade">
                                        <div class="alert-body">
                                            <button class="close" data-dismiss="alert">
                                                <span>&times;</span>
                                            </button>
                                            {{ session()->get('success') }}
                                        </div>
                                    </div>
                                @endif
                                <table class="table table-striped table-md">
                                    <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Name</th>
                                        <th>Invoice</th>
                                        <th>Created At</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($orders as $order)
                                        <tr>
                                            <td>{{$order->id}}</td>
                                            <td>{{ $order->customer_name }}</td>
                                            <td><a href="/admin/order/{{$order->invoice}}">{{$order->invoice}}</a></td>
                                            <td>{{$order->created_at}}</td>

                                            @if($order->pembayaran->count() == 0)
                                                <td><p class="btn-round btn-primary text-center">Belum dibayar</p></td>
                                            @else
                                                @foreach($order->pembayaran as $index => $s)
                                                    @if($s->status == 'pending')
                                                        <td><p class="btn-round btn-warning text-center">Sudah dibayar</p></td>
                                                    @elseif($s->status == 'tervalidasi')
                                                        <td><p class="btn-round btn-warning text-center">tervalidasi</p></td>

                                                        @elseif($s->status == 'dikirim')
                                                            <td><p class="btn-round btn-warning text-center">dikirim</p></td>

                                                        @elseif($s->status == 'selesai')
                                                            <td><p class="btn-round btn-warning text-center">selesai</p></td>
                                                    @elseif($s->status == 'batal')
                                                        <td><p class="btn-round btn-danger text-center">batal</p></td>

                                                        @endif
                                                @endforeach
                                            @endif

                                            <td>
                                                <a>
                                                    <form action="{{ route('order.destroy', $order->id)}}"
                                                          method="POST">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button class="btn btn-danger" type="submit">Delete</button>
                                                    </form>
                                                </a>
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="card-footer text-right">
                            <nav class="d-inline-block">
                                <ul class="pagination mb-0">
                                    <li class="page-item disabled">
                                        <a class="page-link" href="#" tabindex="-1"><i class="fas fa-chevron-left"></i></a>
                                    </li>
                                    <li class="page-item active"><a class="page-link" href="#">1 <span class="sr-only">(current)</span></a>
                                    </li>
                                    <li class="page-item">
                                        <a class="page-link" href="#">2</a>
                                    </li>
                                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                                    <li class="page-item">
                                        <a class="page-link" href="#"><i class="fas fa-chevron-right"></i></a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
