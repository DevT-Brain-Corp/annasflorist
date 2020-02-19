@extends('layouts.admin-master')

@section('title')
    Add Pot
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
                        <h4>Add Pot</h4>
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
                        <form action="{{ route('pot.store') }}" method="POST" enctype="multipart/form-data">
                            <div class="form-group row mb-4">
                                @csrf
                                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Pot Image</label>
                                <div class="col-sm-12 col-md-7">
                                    <input type="file" class="form-control" name="pot_image">
                                </div>
                            </div>
                            <div class="form-group row mb-4">
                                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Pot Name</label>
                                <div class="col-sm-12 col-md-7">
                                    <input type="text" class="form-control" name="pot_name">
                                </div>
                            </div>
                            <div class="form-group row mb-4">
                                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label>
                                <div class="col-sm-12 col-md-7">
                                    <button type="submit" class="btn btn-primary">Create</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
