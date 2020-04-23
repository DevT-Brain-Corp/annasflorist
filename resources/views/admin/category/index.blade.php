@extends('layouts.admin-master')

@section('title')
    Category
@endsection

@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Categories</h1>
            <div class="section-header-button">
                <a class="btn btn-primary" href={{ route('category.create') }}>Add Category</a>
            </div>
        </div>

        <div class="section-body">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>Categories Table</h4>
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
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    @if ($categories->count() > 0)
                                        @foreach($categories as $category)
                                            <tr>
                                                <td>{{$category->id}}</td>
                                                <td>{{$category->category_name}}</td>
                                                <td>
                                                    <a href="{{ route('category.edit', $category->id) }}" class="btn btn-primary">Edit</a>
                                                    <a>
                                                        <form action="{{ route('category.destroy', $category->id)}}" method="POST">
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
                                {{$categories->links()}}
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
