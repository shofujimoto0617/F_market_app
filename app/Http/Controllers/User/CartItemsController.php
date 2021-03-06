<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\CartItems;
use Auth;
use App\Models\User;
use Illuminate\Support\Carbon;

class CartItemsController extends Controller
{
    public function CartItemsCreate(Request $request) {
        CartItems::insert([
            'user_id' => 1, //user_idの値をとれない
            'item_id' => 1, //item_idの値をとれない
            'quantity' => $request->quantity,
            'created_at' => Carbon::now()
        ]);

        return Redirect()->route('cartitem.index')->with('success', 'Add Items Successfull');

    }

    public function CartItemsIndex() {
        return view('user.cart_items.index');
    }
}
