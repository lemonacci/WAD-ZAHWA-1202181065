@extends('layout')

@section('title', 'Input Product | EAD Inventory Management')

@section('content')
<div class="container">
    <h2 class="text-center mb-5 mt-4">Input Product</h2>
    <div class="row">
        <form class="w-75 mx-auto" action="{{ route('inputp') }}" method="post" enctype="multipart/form-data">            
        @csrf
            <input type="hidden" name="id">
            <div class="form-group">
                <label class="col-form-label">Product Name</label>
                <input type="text" class="form-control" name="name">
            </div>
            <div class="form-group">
                <label class="col-form-label">Price</label>
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text">$ USD</span>
                    </div>
                    <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)" name="price">
                </div>
            </div>
            <div class="form-group">
                <label class="col-form-label">Description</label>
                <textarea class="form-control" rows="3" name="description"></textarea>
            </div>
            <div class="form-group">
                <label class="col-form-label">Stock</label>
                <input type="text" class="form-control w-50" name="stock">
            </div>
            <div class="form-group">
                <label class="col-form-label">Image File Input</label>
                <input type="file" class="form-control-file" name="img_path">
            </div>
            <button type="submit" class="btn btn-dark mt-1">Submit</button>
        </form>
    </div>
</div>
@endsection