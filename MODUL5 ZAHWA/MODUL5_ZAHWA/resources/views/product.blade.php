@extends('layout')

@section('title', 'Product | EAD Inventory Management')

@section('content')

<div class="container">
    @if (count($products) < 1)
        <div class="text-center">
            <p>There is no data...</p>
            <a href="{{ route('prodinput') }}" class="btn btn-dark">Add Product</a>
        </div>
    @else
        <h2 class="text-center mb-5 mt-4">List Product</h2>
        <a href="{{ route('prodinput') }}" type="button" class="btn btn-dark">Add Product</a>
        <div class="row">
            <table class="table w-100 mx-auto mt-3">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col" style="width: 50%">Name</th>
                        <th scope="col">Price</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($products as $product)
                    <tr>
                        <th scope="row">{{ $loop->iteration }}</th>
                        <td>{{ $product->name }}</td>
                        <td>{{ $product->price }}</td>
                        <td>
                            <a href="{{ route('edit', $product->id) }}" class="btn btn-primary">Edit</a>
                            <a href="{{ route('delete', $product->id) }}" class="btn btn-danger">Delete</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    @endif

    
</div>
@endsection