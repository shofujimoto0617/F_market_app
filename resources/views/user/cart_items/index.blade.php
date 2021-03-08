@extends('user.user_master')

@section('user')
    <div class="col-md-10 mt-5 pt-5">
        <h3>Cart Items</h3>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">Item name</th>
                    <th scope="col">Price (tax)</th>
                    <th scope="col">Quantity</th>
                    <th scope="col">Total</th>

                </tr>
            </thead>
            <tbody>
                @foreach ($cart_items as $cart_item)
                    <tr>
                        <td>{{ $cart_item->item->name }}</td>
                        <td>¥ {{ $cart_item->item->price * 1.10 }}</td>
                        <td>{{ $cart_item->quantity }}</td>
                        <td>¥ {{ $cart_item->item->price * 1.10 * $cart_item->quantity }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

@endsection