@extends('layouts.admin-master')

@section('title')
    Pot
@endsection

@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Pots</h1>
            <div class="section-header-button">
                <a class="btn btn-primary" href={{ route('pot.create') }}>Add Pot</a>
            </div>
        </div>

        <div class="section-body">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>Pots Table</h4>
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
                                        <th>Image</th>
                                        <th>Color</th>
                                        <th>Stock</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @if($pots->count() > 0)
                                        @foreach($pots as $pot)
                                            <tr>
                                                <td>{{$pot->id}}</td>
                                                <td><img width="150px" src="{{ url('/storage/'. $pot->pot_image) }}"></td>
                                                @if($pot->pot_color=='Biru-Tua')
                                                    <td style="background-color:#6777ef"></td>
                                                    @elseif($pot->pot_color=='Pink')
                                                    <td style="background-color:#ff91fe"></td>
                                                @elseif($pot->pot_color=='Merah')
                                                    <td style="background-color:#fc544b"></td>
                                                @elseif($pot->pot_color=='Kuning')
                                                    <td style="background-color:#ffa426"></td>
                                                @elseif($pot->pot_color=='Biru-Muda')
                                                    <td style="background-color:#3abaf4"></td>
                                                @elseif($pot->pot_color=='Hijau')
                                                    <td style="background-color:#47c363"></td>
                                                    @endif
                                                <td>{{$pot->pot_stock}}</td>
                                                <td>
                                                    <a href="{{ route('pot.edit', $pot->id) }}" class="btn btn-primary">Edit</a>
                                                    <a>
                                                        <form action="{{ route('pot.destroy', $pot->id)}}" method="POST">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button class="btn btn-danger" type="submit">Delete</button>
                                                        </form>
                                                    </a>
                                                </td>
                                            </tr>
                                        @endforeach
                                    @else
                                        <tr style="background: #FFFFFF">
                                            <td>
                                                <h6>Tidak ada data</h6>
                                            </td>
                                        </tr>
                                    @endif
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="card-footer text-right">
                            <nav class="d-inline-block">
                                {{$pots->links()}}
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
