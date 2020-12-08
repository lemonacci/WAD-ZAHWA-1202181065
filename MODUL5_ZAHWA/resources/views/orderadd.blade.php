@extends('layout')

@section('title', 'Order Process | EAD Inventory Management')

@section('content')
<div class="container">
    <h2 class="text-center mb-5 mt-4">Order</h2>
    @foreach($products as $product)
    <div class="card mb-3">
        <div class="row no-gutters">
            <div class="col-md-7">
                <img src="{{ asset('assets/uploaded/'. $product->img_path) }}" class="card-img">
            </div>
            <div class="col-md-5">
                <div class="card-body">
                    <h4 class="card-title">{{ $product->name }}</h4>
                    <p class="card-text">{{ $product->description }}</p>
                    <p class="card-text">Stock: {{ $product->stock }}</p>
                    <h4>${{ $product->price }}</h4>
                </div>
            </div>
        </div>
    </div>

    <div class="card mb-3">
        <h3 class="text-center mb-3 mt-4">Buyer Information</h3>
        <div class="card-body">
            <form class="w-100 mx-auto" action="{{ route('addorder') }}" method="post">
                @csrf
                <input type="hidden" name="product_id" value="{{ $product->id }}">
                <div class="form-group">
                    <label class="col-form-label">Name</label>
                    <input type="text" class="form-control" id="buyer_name" name="buyer_name" placeholder="Name">
                </div>

                <div class="form-group">
                    <label class="col-form-label">Contact</label>
                    <input type="text" class="form-control" id="buyer_contact" name="buyer_contact" placeholder="Contact">
                </div>

                <div class="form-group">
                    <label class="col-form-label">Quantity</label>
                    <input type="text" class="form-control" id="amount" name="amount" placeholder="Quantity">
                </div>
                <button type="submit" class="btn btn-success">Submit</button>
            </form>
        </div>
    </div>
    @endforeach
</div>
@endsection