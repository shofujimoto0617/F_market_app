<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ShippingAddresses;
use Auth;
use App\Models\User;
use Illuminate\Support\Carbon;


class ShippingAddressesController extends Controller
{
    public function ShippingAddressIndex() {
        $id = Auth::id();
        $shipping_addresses = ShippingAddresses::where('user_id', $id)->get();
        return view('user.shipping_addresses.index', compact('shipping_addresses'));
    }
    public function ShippingAddressCreate(Request $request) {
        ShippingAddresses::insert([         
            'user_id' => Auth::id(),
            'postcode' => $request->postcode,
            'adderss' => $request->address,
            'destination' => $request->destination,
            'created_at' => Carbon::now()
        ]);

        return Redirect()->route('shippingaddresses.index')->with('success', 'Add Address Successfull');
 
    }
}
