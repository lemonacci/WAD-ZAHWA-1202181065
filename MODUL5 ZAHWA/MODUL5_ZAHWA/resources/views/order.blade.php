@extends('layout')

@section('title', 'Order | EAD Inventory Management')

@section('content')
<div class="container">
    @if (count($products) < 1)
        <div class="text-center">
            <p>There is no data...</p>
            <a href="{{ route('orderadd') }}" class="btn btn-dark">Order Now</a>
        </div>
    @else
        <h2 class="text-center mb-5 mt-4">Order</h2>

        <div class="row row-cols-1 row-cols-md-4 card-deck text">
        @foreach($products as $product)
        <div class="card" style="width: 18rem;">
            <img src="{{ asset('assets/uploaded/'. $product->img_path) }}" class="card-img-top">
            <div class="card-body">
                <h5 class="card-title">{{ $product->name }}</h5>
                <p class="card-text">{{ $product->description }}</p>
                <h4>$ {{ $product->price }}</h4>
                <a href="{{ route('ordernow', $product->id) }}" class="btn btn-success">Order Now</a>
            </div>
        </div>
        @endforeach
        </div>
    @endif
</div>
@endsection