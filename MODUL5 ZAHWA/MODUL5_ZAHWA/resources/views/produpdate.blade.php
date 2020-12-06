@extends('layout')

@section('title', 'Update Product | EAD Inventory Management')

@section('content')
<div class="container">
    <h2 class="text-center mb-5 mt-4">Update Product</h2>
    <div class="row">
    @foreach($products as $product)
        <form class="w-75 mx-auto" action="{{ route('update') }}" method="post" enctype="multipart/form-data">
            @csrf
            <input type="hidden" name="id" value="{{ $product->id }}">
            <div class="form-group">
                <label class="col-form-label">Product Name</label>
                <input type="text" class="form-control" name="name" value="{{ $product->name }}">
            </div>
            <div class="form-group">
                <label class="col-form-label">Price</label>
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text">$ USD</span>
                    </div>
                    <input type="text" class="form-control" name="price" value="{{ $product->price }}">
                </div>
            </div>
            <div class="form-group">
                <label class="col-form-label">Description</label>
                <textarea class="form-control" rows="3" name="description">{{ $product->description }}</textarea>
            </div>
            <div class="form-group">
                <label class="col-form-label">Stock</label>
                <input type="text" class="form-control w-50" name="stock" value="{{ $product->stock }}">
            </div>
            <div class="form-group">
                <label class="col-form-label">Image File Input</label>
                <input type="file" class="form-control-file" name="img_change" value="{{ asset('assets/uploaded/'. $product->img_path) }}">
                <input type="hidden" name="img_path" value="{{ $product->img_path }}">
            </div>
            <button type="submit" class="btn btn-dark mt-1">Submit</button>
        </form>
    @endforeach
    </div>
</div>
@endsection