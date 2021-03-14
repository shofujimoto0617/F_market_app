@extends('user.user_master')

@section('user')

    <div class="col-md-10 pt-5 mt-5">
        <h3>Shipping address 【Registration/List】</h3>
        <form method="post" action="{{ route('shippingaddress.create') }}" enctype="multipart/form-data">
            @csrf
                <div class="mb-3">
                    <label for="exampleInputPostCode" class="form-label">Postcode</label>
                    <input type="text" name="postcode" class="form-control">
                </div>

                <div class="mb-3">
                    <label for="exampleInputAddress" class="form-label">Address</label>
                    <input type="text" name="address" class="form-control">
                </div>

                <div class="mb-3">
                <label for="exampleInputDestination" class="form-label">Destination name</label>
                    <input type="text" name="destination" class="form-control">
                </div>

                <button type="submit" class="btn btn-primary">Create</button>
            </div>

        </form>

        <div class="address-table">
            <table class="table">
                <thead>
                    <tr>
                        <td>Postcode</td>
                        <td>Address</td>
                        <td>Destination name</td>
                        <td></td>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($shipping_addresses as $shipping_address)
                        <tr>
                            <td>{{ $shipping_address['postcode'] }}</td>
                            <td>{{ $shipping_address['adderss'] }}</td>
                            <td>{{ $shipping_address['destination'] }}</td>
                            <td></td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        

    </div>

@endsection