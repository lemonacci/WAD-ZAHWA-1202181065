@extends('layout')

@section('title', 'History | EAD Inventory Management')

@section('content')

<div class="container">
    @if (count($orders) < 1)
        <div class="text-center">
            <p>There is no data...</p>
            <a href="{{ route('order') }}" class="btn btn-dark">Order Now</a>
        </div>
    @else
        <h2 class="text-center mb-5 mt-4">History</h2>
        <div class="row">
            <table class="table w-100 mx-auto">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Product</th>
                        <th scope="col">Buyer Name</th>
                        <th scope="col">Contact</th>
                        <th scope="col">Amount</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($orders as $order)
                    <tr>
                        <th scope="row">{{ $loop->iteration }}</th>
                        <td>{{ $order->product_id }}</td>
                        <td>{{ $order->buyer_name }}</td>
                        <td>{{ $order->buyer_contact }}</td>
                        <td>{{ $order->amount }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    @endif
</div>
@endsection