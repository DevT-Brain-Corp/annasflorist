@extends('layouts.admin-master')

@section('title')
    Edit Product
@endsection

@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Product</h1>
        </div>

        <div class="section-body">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Edit Product</h4>
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
                        <form action="{{ route('product.update', $product->id) }}" method="POST">
                            <div class="form-group row mb-4">
                                @csrf
                                @method('PATCH')
                                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Image</label>
                                <div class="col-sm-12 col-md-7">
                                    <img src="{{ URL::to('/') }}/storage/{{ $product->product_image }}" class="img-thumbnail" width="150"/>
                                    <input type="hidden" name="hidden_image" value="{{$product->product_image}}" />
                                </div>
                            </div>
                            <div class="form-group row mb-4">
                                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Price</label>
                                <div class="col-sm-12 col-md-7">
                                    <input type="text" class="form-control" name="product_name" value="{{$product->product_name}}">
                                </div>
                            </div>
                            <div class="form-group row mb-4">
                                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Price</label>
                                <div class="col-sm-12 col-md-7">
                                    <input type="text" class="form-control" name="product_description" value="{{$product->product_description}}">
                                </div>
                            </div>
                            <div class="form-group row mb-4">
                                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Category</label>
                                <div class="col-sm-12 col-md-7">
                                    <select class="form-control" name="category_id">
                                        @foreach($categories as $category)
                                            <option value="{{$category->id}}" {{ $category->id == $product->category->id ? 'selected' : '' }}>{{$category->category_name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row mb-4">
                                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Price</label>
                                <div class="col-sm-12 col-md-7">
                                    <input type="number" class="form-control" name="product_price" value="{{$product->product_price}}">
                                </div>
                            </div>
                            <div class="form-group row mb-4">
                                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Stock</label>
                                <div class="col-sm-12 col-md-7">
                                    <input type="number" class="form-control" name="product_stock" value="{{$product->product_stock}}">
                                </div>
                            </div>
                            <div class="form-group row mb-4">
                                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Status</label>
                                <div class="col-sm-12 col-md-7">
                                    <select class="form-control" name="product_status">
                                        <option value="1" {{ old('product_status') == '1' ? 'selected':'' }}>Publish</option>
                                        <option value="0" {{ old('product_status') == '0' ? 'selected':'' }}>Draft</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row mb-4">
                                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label>
                                <div class="col-sm-12 col-md-7">
                                    <button type="submit" class="btn btn-primary">Update</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

