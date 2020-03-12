@extends('layouts.admin-master')

@section('title')
    Edit Pot
@endsection

@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Pot</h1>
        </div>

        <div class="section-body">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Edit Pot</h4>
                    </div>
                    <div class="card-body">
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div><br />
                        @endif
                        <form action="{{ route('pot.update', $pot->id) }}" method="POST" enctype="multipart/form-data">
                            <div class="form-group row mb-4">
                                @csrf
                                @method('PATCH')
                                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Image</label>
                                <div class="col-sm-12 col-md-7">
                                    <img src="{{ URL::to('/') }}/storage/{{ $pot->pot_image }}" class="img-thumbnail" width="150"/>
                                    <input type="hidden" name="hidden_image" value="{{$pot->pot_image}}" />
                                </div>
                            </div>
                            <div class="form-group row mb-4">
                                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Color</label>
                                <div class="col-md-7 row gutters-xs">
                                    <div class="col-auto">
                                        <label class="colorinput">
                                            <input name="pot_color" type="radio" value="#6777ef" class="colorinput-input" {{$pot->pot_color == '#6777ef'? 'checked' : ''}}/>
                                            <span class="colorinput-color bg-primary"></span>
                                        </label>
                                    </div>
                                    <div class="col-auto">
                                        <label class="colorinput">
                                            <input name="pot_color" type="radio" value="#ff91fe" class="colorinput-input" {{$pot->pot_color == '#ff91fe'? 'checked' : ''}}/>
                                            <span class="colorinput-color bg-pink"></span>
                                        </label>
                                    </div>
                                    <div class="col-auto">
                                        <label class="colorinput">
                                            <input name="pot_color" type="radio" value="#fc544b" class="colorinput-input" {{$pot->pot_color == '#fc544b'? 'checked' : ''}}/>
                                            <span class="colorinput-color bg-danger"></span>
                                        </label>
                                    </div>
                                    <div class="col-auto">
                                        <label class="colorinput">
                                            <input name="pot_color" type="radio" value="#ffa426" class="colorinput-input" {{$pot->pot_color == '#ffa426'? 'checked' : ''}}/>
                                            <span class="colorinput-color bg-warning"></span>
                                        </label>
                                    </div>
                                    <div class="col-auto">
                                        <label class="colorinput">
                                            <input name="pot_color" type="radio" value="#3abaf4" class="colorinput-input" {{$pot->pot_color == '#3abaf4'? 'checked' : ''}}/>
                                            <span class="colorinput-color bg-info"></span>
                                        </label>
                                    </div>
                                    <div class="col-auto">
                                        <label class="colorinput">
                                            <input name="pot_color" type="radio" value="#47c363" class="colorinput-input" {{$pot->pot_color == '#47c363'? 'checked' : ''}}/>
                                            <span class="colorinput-color bg-success"></span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row mb-4">
                                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Stock</label>
                                <div class="col-sm-12 col-md-7">
                                    <input type="number" class="form-control" name="pot_stock" value="{{$pot->pot_stock}}">
                                </div>
                            </div>
                            <div class="form-group row mb-4">
                                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label>
                                <div class="col-sm-12 col-md-7">
                                    <button type="submit" class="btn btn-primary">Edit</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
